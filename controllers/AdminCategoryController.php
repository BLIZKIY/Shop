<?php

/**
 * Created by PhpStorm.
 * User: Dima
 * Date: 07.08.2018
 * Time: 14:14
 */


class AdminCategoryController extends AdminBase
{

    public function actionIndex() {

        //проверка доступа админа
        self::checkAdmin();

        //получение списка всех продуктов
        $categoriesList = Category::getCategoriesListAdmin();

        require_once (ROOT.'/views/admin_category/index.php');
        return true;
    }

    public function actionDelete($id) {

        //проверка доступа админа
        self::checkAdmin();

        Category::deleteCategoryById($id);

        header("Location: /admin/category");
    }

    public function actionCreate()
    {
        // Проверка доступа
        self::checkAdmin();

        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Получаем данные из формы
            $options['id'] = $_POST['id'];
            $options['name'] = $_POST['name'];
            $options['sort_order'] = $_POST['sort_order'];
            $options['status'] = $_POST['status'];

            $id = Category::createCategory($options);

            // Перенаправляем пользователя на страницу управлениями категориями
            header("Location: /admin/category");
        }
        // Подключаем вид
        require_once(ROOT . '/views/admin_category/create.php');
        return true;
    }

    public function actionUpdate($id)
    {
        // Проверка доступа
        self::checkAdmin();

        $category = Category::getCategoryById($id);

        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Получаем данные из формы
            $options['id'] = $_POST['id'];
            $options['name'] = $_POST['name'];
            $options['sort_order'] = $_POST['sort_order'];
            $options['status'] = $_POST['status'];

            $id = Category::updateCategory($id, $options);

            // Перенаправляем пользователя на страницу управлениями товарами
            header("Location: /admin/category");
        }
        // Подключаем вид
        require_once(ROOT . '/views/admin_category/update.php');
        return true;
    }







}