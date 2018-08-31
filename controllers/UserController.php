<?php

/**
 * Created by PhpStorm.
 * User: Dima
 * Date: 08.07.2018
 * Time: 13:40
 */
class UserController
{
    /**
     * @return bool
     */
      public function actionRegister() {

            $name = '';
            $password = '';
            $email = '';
            $result = false;

            if(isset($_POST['submit'])) {
                  $name = $_POST['name'];
                  $password = $_POST['password'];
                  $email = $_POST['email'];


                  $errors = false;

                  if (!User::checkName($name)) {
                        $errors[] = 'Имя не должно быть короче 2-х символов!';;
                  }

                  if (!User::checkPassword($password)) {
                        $errors[] = 'Пароль не должен быть короче 4-х символов!';
                  }

                  if (!User::checkEmail($email)) {
                        $errors[] = 'Неправильный имейл';
                  }

                  if (User::checkEmailExists($email)) {
                        $errors[] = 'Емайл уже используеться';
                  }

                  if ($errors == false) {
                        $result = USER::register($name, $password, $email);
                  }
            }

            require_once (ROOT.'/views/user/register.php');

            return true;
      }

      public function actionLogin() {

            $password = '';
            $email = '';

            if(isset($_POST['submit'])) {
                  $password = $_POST['password'];
                  $email = $_POST['email'];


                  $errors = false;

                  //Валидация полей

                  if (!User::checkPassword($password)) {
                        $errors[] = 'Пароль не должен быть короче 6-х символов!';
                  }

                  if (!User::checkEmail($email)) {
                        $errors[] = 'Неправильный имейл';
                  }

                  //Проверка наличия пользователя

                  $userId = User::checkUserData($email, $password);

                  $user = User::getUserById($userId);

                  //проверка доступа администратора
                  if($user['role'] == 'admin') {
                      User::auth($userId);
                      require_once (ROOT.'/views/admin/index.php');
                      return true;
                  }


                  if ($userId == false) {
                        $errors[] = 'Неправильные данные для входа на сайт';
                  } else {
                        //Запоминаем пользователя (сессия)
                        User::auth($userId);

                        //Перенаправляем в кабинет
                        header("Location: /cabinet/");
                  }
            }
            require_once (ROOT.'/views/user/login.php');
            return true;
      }

      public function actionLogout() {
            session_start();
            unset($_SESSION['user']);
            header("Location: /");
            return true;
      }

}