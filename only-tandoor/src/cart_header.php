<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/src/includes/utilities.inc");
header('Content-Type: application/json');
session_start();

$_SESSION['line_item'] = isset($_SESSION['line_item']) ? $_SESSION['line_item'] : array();
$line_item = $_SESSION['line_item'];


print json_encode(cartCalculation($line_item));
