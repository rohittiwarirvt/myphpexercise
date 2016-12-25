<?php
$styles = <<<EOT
<link rel='stylesheet' href='/src/Assets/public/stylesheets/login.css'></link>
EOT;

print $styles;

$loginForm = <<<EOT
<form action='{$_SERVER["PHP_SELF"]}'>
  <div class="imgcontainer">
    <img src="/src/Assets/public/files/img_avatar.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit">Login</button>
    <input type="checkbox" checked="checked"> Remember me
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>

EOT;

print $loginForm;
