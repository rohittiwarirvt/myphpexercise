<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/src/includes/utilities.inc");
header('Content-Type: application/json');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
$line_item_id = $_POST['line_item_id'];
$_SESSION['line_item'] = isset($_SESSION['line_item']) ? $_SESSION['line_item'] : array();
$line_item = $_SESSION['line_item'];

$line_item_index = findIndex($line_item, array('line_item_id' => $line_item_id));
if ($line_item_index !== false) {
 unset($line_item[$line_item_index]);
}

$_SESSION['line_item'] = $line_item;

print json_encode(cartCalculation($line_item));
