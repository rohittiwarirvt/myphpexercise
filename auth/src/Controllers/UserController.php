<?php

namespace RohitAuth\Controllers;

use RohitAuth\Container\App;

use RohitAuth\Views\TemplateEng\Template ;

class UserController {

  public function __construct() {

  }

  public function getPage(){
    $login_tpl = new Template("login.tpl");
    App::addStyles("public/stylesheets/login.css");
    return $login_tpl->render();
  }
}
