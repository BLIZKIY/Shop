<?php

/**
 * Created by PhpStorm.
 * User: Dima
 * Date: 18.07.2018
 * Time: 16:27
 */
class AdminController extends AdminBase
{


    function __construct(){

    }

    /**
    *Action для стартовой страницы панели администратора
     */
    public function actionIndex(){

        //Проверка доступа
        self::checkAdmin();

        //подключаем вид

        require_once (ROOT.'/views/admin/index.php');
        return true;
    }
}