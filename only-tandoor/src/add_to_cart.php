<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/src/includes/utilities.inc");
header('Content-Type: application/json');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
$product_id = $_POST['product_id'];
$product_price =$_POST['product_price'];
$product_name = $_POST['product_name'];
$product_description = $_POST['product_description'];
$quantity = $_POST['quantity'];
$_SESSION['line_item'] = isset($_SESSION['line_item']) ? $_SESSION['line_item'] : array();
$line_item = $_SESSION['line_item'];

$count = empty($line_item) ? 0: count($line_item);
$line_item_index = findIndex($line_item, array('product_id' => $product_id));
if ($line_item_index !== false) {
  $quantity = $line_item[$line_item_index]['quantity'] + $quantity;
  $line_item[$line_item_index]['quantity'] = $quantity;

} else {
 $count++;
 $line_item[] = array('line_item_id' => $count, 'product_id' => $product_id, 'quantity' => $quantity,'unit_price' => $product_price,'product_name' => $product_name, 'product_description' => $product_description );
}

$_SESSION['line_item'] = $line_item;

print json_encode(cartCalculation($line_item));
