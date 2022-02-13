<?php
define('PRODUCTS_IMAGE_PATH', '/image/products/');
session_start();
$user = $password = 'root';
$pdo = new Pdo ('mysql:dbname=fullstack;host=127.0.0.1', $user, 'root13');