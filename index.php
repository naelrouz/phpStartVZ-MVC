
<h3>FRONT CONTROLLER</h3>

<?php

// FRONT CONTROLLER

// Общие настройки
ini_set('display_errors', 1);

// Подключение файлов системы
define('ROOT', dirname(__FILE__)); 
require_once (ROOT.'/components/Router.php');
// 
  
$router = new Router();
$router->run();

?>