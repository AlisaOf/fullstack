<?php
require $_SERVER['DOCUMENT_ROOT'] . '/config.php';

$name = $_POST['name'];
$discription = $_POST['discription'];

$query = "INSERT INTO categories (name, discription) VALUES (:name, :discription)";
$res = $pdo->prepare($query);
$res->execute([
    ':name' => $name,
    ':discription' => $discription

]);

header ("Location: /pages/admin/categories.php");
