<?php

$pdo = Connection::make();
$query = new QuerryBuilder($pdo);

$id = $_GET["id"];
$nazwa = $_POST["nazwa"];
$adres = $_POST["adres"];
$nip = $_POST["NIP"];

$query->editFirma($id, $nazwa, $adres, $nip);


header('Location : http://example.com/');



?>