<?php

require_once("database.php");

$db_handle = new DBController();

function renderPhpToString($file_path, $vars = null)
{

  if (is_array($vars) && !empty($vars)) {
      extract($vars);
  }
  ob_start();
  include $file_path;
  return ob_get_clean();
}


