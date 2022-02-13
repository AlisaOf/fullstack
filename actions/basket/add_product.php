<?php
require $_SERVER['DOCUMENT_ROOT'] . '/config.php';

$productId = $_POST['id'];
$category_id =$_POST['category_id'];

$products = $_SESSION['products'] ?? [];

if (isset($product[$productsId])) {
    $product[$productsId] +=1;
} else {
    $product[$productsId] = 1;
}

$_SESSION['products'] = $products;

header ("Location: /pages/category.php?id=$categoryId");