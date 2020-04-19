<?php
class Router {
    protected $routes = [];
    // passo valori chiamando  define(['a','b',...'z'])
    public function define($routes) {
      $this->routes = $routes;
    }
    public function direct($uri){
     if (array_key_exists($uri,$this->routes)){
         return $this->routes[$uri];
     }
     throw new Exception("no routes defined for this URI: $uri");
    }
}
