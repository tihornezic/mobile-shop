<?php

require('database/DBController.php'); 
require('database/Product.php'); 

// DBController object
$db = new DBController();
// dependency injection
$product = new Product($db);

// print_r($product->getData());
