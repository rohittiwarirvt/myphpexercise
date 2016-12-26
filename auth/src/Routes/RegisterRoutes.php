<?php

namespace RohitAuth\Routes;

use RohitAuth\Routes\Http\Routes;
use RohitAuth\Routes\Http\Response;

class RegisterRoutes {
  protected  $route;
  protected $response;
  public function __construct(Routes $route) {
    $this->route =$route;
    $this->response = new Response();
  }
  public function initRoute() {
    // Products api
    $this->route->addRoute('POST', '/user/login', function($args){
      $product  = new Product();
      return $this->response->responseOK($product->create($args));
    });
}
