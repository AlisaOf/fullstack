<?php

//<pre>
//<?php
// print_r($_POST);
//die(); 


$user = $password = 'root';
$pdo = new Pdo ('mysql:dbname=fullstack;host=127.0.0.1', $user, $password);


$name = $_POST['name'];
$login = $_POST['login'];
$password = $_POST['name'];
$city_id = $_POST['city_id'];

 $query = "INSERT INTO users (name, login, password, city_id) VALUES (:name, :login, :passsword, :city_id)";
 $res = $pdo->prepare($query);
 $res->execute([
     ':name' => $name,
     ':login' => $login,
     ':password' => $password,
     ':city_id' => $city_id
 ]);

header('Location: index.php');
