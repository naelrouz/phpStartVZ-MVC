<?php
echo 'Hi';
// FRONT CONTROLLER

// Общие настройки
ini_set('display_errors', 1);

// Подключение файлов системы
define('ROOT', dirname(dirname(__FILE__)));
require_once(ROOT . '/components/Router.php');
//
require_once(ROOT . '/components/Autoload.php');
  
$router = new Router();
$router->run();

