<?php


abstract class AdminBase
{

    public static function checkAdmin() {

        //проверка авторизации пользователя
        $userId = User::checkLogged();

        $user = User::getUserById($userId);

        //проверка доступа администратора
        if($user['role'] == 'admin') {
            return true;
        }

        //если не админ
        die('Access denied');
    }
}