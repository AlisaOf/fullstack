<?php
session_start();
//$_SESSION;
$user = $password = 'root';
$pdo = new Pdo ('mysql:dbname=fullstack;host=127.0.0.1', $user, $password);
$userId = $_POST['id'];
$name = $_POST['name'];
$login = $_POST['login'];

$query = "UPDATE users SET name = :name, login = :login WHERE id = :id";
$res = $pdo->prepare($query);
$status = $res->execute([
     ':id' => $userId,
     ':name' => $name,
     ':login' => $login
    
 ]);

if (!$status) {
    $error = $res->errorInfo()[2];
    $_SESSION['error'] = $error;
} else {
    $_SESSION['success'] = true;
}



header("Location: ../pages/user.php?id=$userId");