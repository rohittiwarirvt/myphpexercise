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

    $this->route->addRoute("GET", "/user/login", "UserController@login");
    $this->route->addRoute("GET", "/", "UserController@login");
    $this->route->addRoute("GET", "/user/register", "UserController@registration");
    $this->route->addRoute("GET", "/error404", "CommonController@notfound");
  }
}
