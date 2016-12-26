<?php
$styles = <<<EOT
<link rel='stylesheet' href='/src/Assets/public/stylesheets/login.css'></link>
EOT;

print $styles;

$loginForm = <<<EOT
<div class="row">
  <div class="col-md-12">
    <h1>Login Form</h1>
    <form class="form-horizontal"  action='{$_SERVER["PHP_SELF"]}' method='post'>
      <div class="col-sm-3">
        <div class="imgcontainer">
          <img src="/src/Assets/public/files/img_avatar.png" alt="Avatar" class="avatar">
        </div>
      </div>
      <div class="col-sm-9">
        <div class="form-group">
          <label class="control-label col-sm-2"><b>Username</b></label>
          <div class=" col-sm-8">
          <input  class="form-control" type="text" placeholder="Enter Username" name="uname" required>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2"><b>Password</b></label>
          <div class="col-sm-8">
          <input class="form-control" type="password" placeholder="Enter Password" name="psw" required>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-8  ">
            <button type="submit" class="btn btn-success">Login</button>
            <div class="checkbox"><input type="checkbox" checked="checked"> Remember me </div>
          </div>
        </div>
          <div class="form-group" >
          <div class="col-sm-offset-2 col-sm-8">
            <button type="button" class="btn btn-danger">Cancel</button>
            <span class="btn btn-link">Forgot <a href="#">password?</a></span>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
EOT;

print $loginForm;

class Login {


}