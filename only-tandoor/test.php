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
  print_r($haystack);
  foreach ($haystack as $key => $value) {
    $to_search_key = key($where);
    print_r($value[$to_search_key] == $where[$to_search_key]);
    if (array_key_exists($to_search_key, $value) && $value[$to_search_key] == $where[$to_search_key]) {

      return $key;
    } else {
      return false;
    }
  }
}


$line_item = array (
  'line_item' =>
  array (
    0 =>
    array (
      'line_item_id' => 2,
      'product_id' => '5',
      'quantity' => '1',
    ),
    1 =>
    array (
      'line_item_id' => 3,
      'product_id' => '1',
      'quantity' => '1',
    ),
    2 =>
    array (
      'line_item_id' => 4,
      'product_id' => '2',
      'quantity' => '1',
    ),
  ),
);

$line_item_index = findIndex($line_item['line_item'], array('product_id' => 5));

var_dump($line_item_index);
// if ($line_item_index !== false) {
//   $quantity = $line_item[$line_item_index]['quantity'] + $quantity;
//   $line_item[$line_item_index]['quantity'] = $quantity;

// } else {
//  $count++;
//  $line_item[] = array('line_item_id' => $count, 'product_id' => $product_id, 'quantity' => $quantity);
// }
