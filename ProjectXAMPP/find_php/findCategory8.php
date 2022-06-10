<?php
require 'vendor/autoload.php';

$client = new MongoDB\Client;
$companydb = $client->mongodb;
$users=$companydb->users;


$an = $_GET["year"];

$cursor = $users->find(
    ['won' => 'True', 'category' => 'MALE ACTOR IN A COMEDY SERIES','year' => new \MongoDB\BSON\Regex($an)]
);

$array = iterator_to_array($cursor);

foreach($array as $value){
    echo "<p> Show:" . $value["show"];
    echo " Name:" . $value["full_name"];
}


?>