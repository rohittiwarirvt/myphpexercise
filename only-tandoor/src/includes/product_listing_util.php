<?php


function productListing($options) {
  global $db_handle;
  $sql = "SELECT * FROM Products where category_id in ({$options['category_id']})";
  $products =  $db_handle->runQuery($sql);
  $output = "";
  if (!empty($products)) {
    foreach ( $products as $product) {
      $output .= renderPhpToString("src/templates/product_listing.php", $product);
    }
  }

  return $output;
}

function categoryListing() {
  global $db_handle;
  $categories =  $db_handle->runQuery("SELECT * FROM Categories ");
  $output = "";
  foreach ( $categories as $category) {
    $category['product_list'] = productListing(array('category_id' => $category['id']));
    $output .= renderPhpToString("src/templates/category_listing.php", $category);
  }
  return $output;
}


function cartProductListing($line_items) {
  $output = "";
  if (!empty($line_items)) {
    foreach ( $line_items as $line_item) {
      $output .= renderPhpToString("src/templates/cart_list_product.php", $line_item);
    }
  }

  return $output;
}
