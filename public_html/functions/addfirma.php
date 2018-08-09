<?php
//$query = require '../bstrap.php';
$pdo;
$query = new QuerryBuilder($pdo);


$nazwa=$_POST["firmaname"];
$adres=$_POST["firmaadres"];
$NIP=$_POST["firmaNIP"];
$query->addFirma($nazwa, $adres, $NIP);

header("Location: /");

?>