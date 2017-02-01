<?php

namespace RohitAuth\Controllers;

use RohitAuth\Container\App;

use RohitAuth\Views\TemplateEng\Template ;

use RohitAuth\Models\Users;

class UserController {

  protected $user;

  public function __construct() {
    $this->user = new Users();
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
    var_dump($args);  
    $this->user->create($args);
    return "registered successfully";
  }
}
