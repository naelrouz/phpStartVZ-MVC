<meta charset="utf-8">


<?php
//echo '<h3>Date</h3>';
//$string = '22-12-2016';
//$pattern = '/(\w+)-(\d+)-(\d+)/i';
//$replacement = 'Год: $3, месяц: $2, день $1';
//echo preg_replace($pattern, $replacement, $string);

?>


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

