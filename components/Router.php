<?php
require_once (ROOT.'/components/Debug.php');
//use components\Debug;

/**
 * Description of Router
 *
 * @author IVNovoselov
 */
class Router {
    private $routes;
    
    function __construct() 
    {
        $routesPath =  ROOT.'/config/routes.php';
        $this->routes = include($routesPath);
    }
    
    public function run() 
    {   
        //Debug::varDump($this->routes);
//        
//        
//      Получить строку запроса
        $uri = $this->getUrl();
//      Проверить на совпадение запросас  и routes
        foreach ($this->routes as $urlPattern => $path) {
//            echo '<br>' . $urlPattern.'->' . $path;
            if(preg_match("~$urlPattern~", $uri)){
                
                $segments = explode('/', $path);
                //Debug::varDump($segments);
                
                $controllerName = array_shift($segments).'Controller';
                $controllerName = ucfirst($controllerName);
                $actionName = 'action'.ucfirst(array_shift($segments));
                echo 'Class: '.$controllerName.'<br>';
                echo 'Action: '.$actionName.'<br>';
                
                        
            }
        }
        
    }
    
    /**
     * Returns request string
     */
  
    private function getUrl() {
        if(!empty($_SERVER['REQUEST_URI'])) {
            return $url = trim($_SERVER['REQUEST_URI'], '/');  
        }  
    }
    

}
