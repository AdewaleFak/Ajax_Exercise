<?php

require_once "database.php";
require_once "office.php";

$db = Database::getDb();
$o = new Office();
$country = $_GET['country'];

$offices = $o->getOfficesInCountry($db, $country);
$jsonpro = json_encode($offices);

//var_dump($jsonpro);
header("Access-Control-Allow-Origin: *");
header('Content-Type: application/json');
echo $jsonpro;