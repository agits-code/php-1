<?php
class Router {
    public $routes = [
        'GET' => [],
        'POST' => []
    ];
    // passo valori chiamando  define(['a','b',...'z'])

    public static function load($file) {   //dovrebbe passare $file
        $router = new static;
        require $file;      //dovrebbe require $file
        return $router;
    }


    public function get($uri,$controller){
        $this->routes['GET'][$uri]=$controller;
    }

    public function post($uri,$controller){
        $this->routes['POST'][$uri]=$controller;
    }

    public function direct($uri,$requestType){
     if (array_key_exists($uri,$this->routes[$requestType])){
         return $this->routes[$requestType][$uri];
     }
     throw new Exception("no routes defined for this URI: $uri");
    }
}
