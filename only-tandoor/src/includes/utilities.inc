<?php

require_once("database.php");

$db_handle = new DBController();

function renderPhpToString($file_path, $vars = null)
{

  if (is_array($vars) && !empty($vars)) {
      extract($vars);
  }
  ob_start();
  include($_SERVER['DOCUMENT_ROOT'] . '/'. $file_path);
  return ob_get_clean();
}


function findIndex($haystack, $where) {
  if (empty($haystack)) {
    return false;
  }
  foreach ($haystack as $key => $value) {
    $to_search_key = key($where);
    if (array_key_exists($to_search_key, $value) && $value[$to_search_key] == $where[$to_search_key]) {
      return $key;
    } else {
      return false;
    }
  }
}


function cartCalculation($line_items) {
  $total_price = $cout = 0;

  if(empty($line_items)) {
    array("count" => 1, "total_price" => 150);
  }

  $count = count($line_items);
  foreach ($line_items as $key => $value) {
    $total_price = $total_price + ($value['quantity']* $value['unit_price']);
  }

  return array("count" => $count, "total_price" => $total_price);
}
