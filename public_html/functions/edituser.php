<?php

$pdo = Connection::make();
$query = new QuerryBuilder($pdo);

$id = $_GET["id"];
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
$usertype = $_POST["usertype"];


$user = $query->editUser($id, $username, $email, $password, $usertype);
var_dump($user);

echo "ot bd id";
echo  $id;



?>

