<?php

//namespace 

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
//        echo '<pre>';
//        print_r($this->routes);
//        echo '</pre>';
//        
//        
//      Получить строку запроса
        $uri = $this->getUrl();
//      Проверить на совпадение запросас  и routes
        foreach ($this->routes as $urlPattern => $path) {
//            echo '<br>' . $urlPattern.'->' . $path;
            if(preg_match('~$urlPattern~', $uri)){
                echo '+';
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
