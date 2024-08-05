<?php

// require_once to include files only once
require_once '../database/DBController.php';
require_once '../database/Product.php';

// DBController object
$db = new DBController();

// Product object
$product = new Product($db);

if (isset($_POST['itemid'])){
    $result = $product->getProduct($_POST['itemid']);
    echo json_encode($result);
}
?>
