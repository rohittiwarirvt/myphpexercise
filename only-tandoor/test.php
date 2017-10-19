<?php

// require_once("src/includes/database.php");

// $db_handle = new DBController();

// $products =  $db_handle->runQuery("SELECT * FROM Products ");

// print_r($products);
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

// require_once("src/menu_listing.php");

// print_r(categoryListing());

function findIndex($haystack, $where) {
   //print_r($where);
  foreach ($haystack as $key => $value) {
    $to_search_key = key($where);
    var_dump($to_search_key);
    var_dump($value);
     var_dump($value[$to_search_key] == (int)$where[$to_search_key]);
    if (array_key_exists($to_search_key, $value) && $value[$to_search_key] == $where[$to_search_key]) {

      return $key;
    } else {
      return false;
    }
  }
}


session_start();
$last_item_id = 1;
$_SESSION['line_item'] = isset($_SESSION['line_item']) ? $_SESSION['line_item'] : array();
$line_item = $_SESSION['line_item'];

$line_item_index = findIndex($line_item, array('last_item_id' => $last_item_id));
var_dump($line_item_index);
