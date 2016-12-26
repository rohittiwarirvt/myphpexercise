<?php

namespace RohitAuth\Routes\Http;

use RohitAuth\Controllers;

Class Routes {

  public  $request, $routes = [];

  public function __construct(Request $reqest) {
    $this->request = $request;
  }


  public function addRoute($method, $url, $callback) {
    $this->routes[] = [$method, $url, $callback];
  }

  public function  startListening() {
     $method = $this->request->method;
     $url =explode('?', $this->request->url);
     $request_endpoint = $url[0];
      $result = null;
     $args['args'] = $this->request->args;
     foreach ($this->routes as $key => $route) {
       $pattern = "@^" . preg_replace('/\\\:[a-zA-Z0-9\_\-]+/', '([a-zA-Z0-9\-\_]+)', preg_quote($route['url'])) . "$@D";
        if ($route['method'] == $method && preg_match($pattern, $request_endpoint, $matches)) {
          array_shift($matches);
          $matches = array_merge($matches, $args);
          if(is_string($routerPath) && strpos($route['callback'], '@') !== false) {
            list($controller_name, $method) = explode('@', $route['callback']);
            if (class_exists($controller_name)) {
                $controller = new $controller_name();
                $action_name = strtolower($verb) . 'Action';
                $result = $controller->$method($matches);
            }
          } else {
            $result = call_user_func_array($route['callback'], $matches);
          }

        }
    }
    return $result;
  }
}





