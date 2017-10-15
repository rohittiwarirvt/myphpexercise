<?php

// require_once("src/includes/database.php");

// $db_handle = new DBController();

// $products =  $db_handle->runQuery("SELECT * FROM Products ");

// print_r($products);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once("src/menu_listing.php");

print_r(categoryListing());
