<?php
require_once "database.php";
require_once "office.php";

$db = Database::getDb();

$country = Office::getCountry($db);
$jsonpro = json_encode($country);

//var_dump($jsonpro);
header('Content-Type: application/json');
echo $jsonpro;