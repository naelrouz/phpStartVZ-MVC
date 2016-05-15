<?php

/**
 * Created by PhpStorm.
 * User: nael
 * Date: 15.05.16
 * Time: 11:43
 */
function __autoload ($class_name)
{
    $array_path = [
        '/models/',
        '/components/',

    ];

    foreach ($array_path as $path)
    {
        $path = ROOT . $path . $class_name . '.php';
        if (is_file($path)){
            include_once $path;
        }
    }
}