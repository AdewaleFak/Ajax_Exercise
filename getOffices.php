<?php
require_once "database.php";
require_once "office.php";

$db = Database::getDb();

$offices = Office::getAllOffices($db);
$jsonpro = json_encode($offices);

//var_dump($jsonpro);
header('Content-Type: application/json');
echo $jsonpro;