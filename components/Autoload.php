<?php

    function __autoload($class_name) {

        //List all the class name in areay

        $array_paths = array(
                    '/components/',
                    '/models/'
                    );

        foreach ($array_paths as $path) {
            $path = ROOT.$path.$class_name.'.php';
            if(is_file($path)) {
                include_once $path;
            }
        }
    }

/**
 * Created by PhpStorm.
 * User: Dima
 * Date: 07.07.2018
 * Time: 15:45
 */