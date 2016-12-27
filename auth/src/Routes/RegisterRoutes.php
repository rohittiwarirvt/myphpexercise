<?php

namespace RohitAuth\Routes;

use RohitAuth\Routes\Http\Routes;
use RohitAuth\Routes\Http\Response;

class RegisterRoutes {

  protected  $route, $response;

  public function __construct(Routes $route) {
    $this->route =$route;
    $this->response = new Response();
  }

  public function initRoute() {

    $this->route->addRoute("GET", "/user/login", "UserController@getPage");
    $this->route->addRoute("GET", "/", "UserController@getPage");
  }
}
