<?php
// FRONT CONTROLLER
//
// Общие настройки
ini_set('display_errors', 1);
//
// Подключение файлов системы
define('ROOT', dirname(dirname(__FILE__)));
// Classes autoload
require_once(ROOT . '/components/Autoload.php');
//
require_once(ROOT . '/components/Router.php');
//
$router = new Router();
$router->run();