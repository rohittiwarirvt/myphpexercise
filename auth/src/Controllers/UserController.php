<?php

namespace RohitAuth\Controllers;

use RohitAuth\Container\App;

use RohitAuth\Views\TemplateEng\Template ;

class UserController {

  public function __construct() {

  }

  public function login(){
    $login_tpl = new Template("login.tpl");
    App::addStyles("public/stylesheets/login.css");
    return $login_tpl->render();
  }

  public function registration() {
    $register_tpl = new Template("registration.tpl");
    //App::addStyles("public/stylesheets/register.css");
    return $register_tpl->render();  	
  }

  public function addUser($request)
  {
    $args = $request['args'];
    return "registered successfully";
  }
}
