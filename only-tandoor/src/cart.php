<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/src/menu_listing.php");
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();

$line_items = $_SESSION['line_item'] = isset($_SESSION['line_item']) ? $_SESSION['line_item'] : array();
$response = array();
if (empty($line_items)) {
  $response = array('is_empty' => true, 'content' => "Your Cart is Empty!");
} else {
  $cart_data['product_list'] = cartProductListing($line_items);
  $cart_overall = cartCalculation($line_items);
  $cart_data['total_cart'] = $cart_overall['total_price'];
  $content = renderPhpToString("src/templates/cart_listing_wrapper.php", $cart_data);
  $response = array('is_empty' => false, 'content' => $content );
}
header('Content-Type: application/json');
print json_encode($response);
