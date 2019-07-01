<?php

class Route{

  public $routes=[
    'GET'=>[],
    'POST'=>[]
  ];


  public function GET($uri,$controller){
    $this->routes['GET'][$uri] = $controller;
  }

  public function POST($uri,$controller){
    $this->routes['POST'][$uri] = $controller;
  }


  public function redirect($uri,$requestType){
    if(array_key_exists($uri,$this->routes[$requestType])){
        return $this->routes[$requestType][$uri];
    }else{
      throw new Exception("No Routes Difend !");
    }

  }

}
