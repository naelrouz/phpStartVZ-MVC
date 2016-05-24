<?php
/**
 * Created by PhpStorm.
 * User: IVNovoselov
 * Date: 24/05/2016
 * Time: 12:06
 */

spl_autoload_register(function($class_name)
{

    $array_paths = [
        '/models/',
        '/components/',

    ];

    foreach ($array_paths as $path)
    {
        $path = ROOT . $path . $class_name . '.php';
        if (is_file($path)){
            include_once $path;
        }
    }
});



//function __autoload ($class_name)
//{
//    $array_path = [
//        '/models/',
//        '/components/',
//
//    ];
//
//    foreach ($array_path as $path)
//    {
//        $path = ROOT . $path . $class_name . '.php';
//        if (is_file($path)){
//            include_once $path;
//        }
//    }
//}