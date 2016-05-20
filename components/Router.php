<?php

require_once (ROOT . '/components/Debug.php');
//use components\Debug;

/**
 * Description of Router
 *
 * @author IVNovoselov
 */
class Router {

    private $routes;

    function __construct() {
        $routesPath = ROOT . '/config/routes.php';
        $this->routes = include($routesPath);
    }

    public function run() {
    //Debug::varDump($this->routes);
//        
//        
//      Получить строку запроса
        $uri = $this->getUrl();
//      Проверить какой контроллер и метод будет обрабатывать запрос
        foreach ($this->routes as $urlPattern => $path) {
//           
            if (preg_match("~$urlPattern~", $uri)) {
                
                $internalRout = preg_replace("~$urlPattern~", $path, $uri);
               
               
                $segments = explode('/', $internalRout);
                
                Debug::varDump($segments);

                $controllerName = array_shift($segments) . 'Controller';
                $controllerName = ucfirst($controllerName);
                
// array_shift() извлекает первое значение массива array и возвращает его, сокращая размер array на один элемент.
// ucfirst() Возвращает строку, в которой первый символ переведен в верхний регистр, если этот символ является буквой.                 
                
                $actionName = 'action' . ucfirst(array_shift($segments));
                $param = $segments;
//                Debug::varDump($param);
//                die();
//              Подключаем класс контроллера
                $controllerFile = ROOT . '/controllers/' . $controllerName . '.php'; // определяем путь файла
                if (file_exists($controllerFile)) { // проверка существиет ли файл
                    include_once $controllerFile; // в случае успеха, подключение файла класса
                }
//                Создание обьекта и вызов нужного метода
                $controllerObject = new $controllerName;
                $result = call_user_func_array([$controllerObject, $actionName], $param);
                if ($result != NULL) {
                    break;
                }  
            }
        }
    }

    /**
     * Returns request string
     */
    private function getUrl() {
        if (!empty($_SERVER['REQUEST_URI'])) {
            return $url = trim($_SERVER['REQUEST_URI'], '/');
        }
    }

}
