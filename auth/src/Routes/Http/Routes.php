<?php

namespace RohitAuth\Routes\Http;

use RohitAuth\Controllers\UserController;

Class Routes {

  public  $request, $controller_path, $routes = [];

  public function __construct(Request $request) {
    $this->request = $request;
    $this->controller_path = "RohitAuth\Controllers\\";
  }


  public function addRoute($method, $url, $callback) {
    $this->routes[] = array('method' => $method,
                              'url' => $url,
                              'callback' => $callback
                              );
  }

  public function  startListening() {
     $method = $this->request->method;
     $request_url = $this->request->url;
     $namespace = $this->controller_path;
     $url = strpos($request_url, '?') !== false ? explode('?', $this->request->url) : [$request_url];
     $request_endpoint = $url[0];
      $result = null;
     $args['args'] = $this->request->args;
     foreach ($this->routes as $key => $route) {

       $pattern = "@^" . preg_replace('/\\\:[a-zA-Z0-9\_\-]+/', '([a-zA-Z0-9\-\_]+)', preg_quote($route['url'])) . "$@D";

        if ($route['method'] == $method && preg_match($pattern, $request_endpoint, $matches)) {

          array_shift($matches);
          $matches = array_merge($matches, $args);
          if(is_string($route['callback']) && strpos($route['callback'], '@') !== false) {
            list($controller_name, $method) = explode('@', $route['callback']);
            $controller_name = $namespace . $controller_name;
            if (class_exists($controller_name)) {

                $controller = new $controller_name();
                $result = $controller->{$method}($matches);
            }
          } else {
                $result = call_user_func_array($route['callback'], $matches);
          }

        }
    }

    if (empty($result)) {
      header('Location: /error404');
      die;
    }
    return $result;
  }
}





