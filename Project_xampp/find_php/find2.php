<?php
require 'vendor/autoload.php';

$client = new MongoDB\Client;
$companydb = $client->mongodb;
$users=$companydb->users;

$cursor = $users->find(
    ['won' => 'True', 'category' => 'CAST IN A MOTION PICTURE']
);

$array = iterator_to_array($cursor);

foreach($array as $value){
    echo "<p> Show:" . $value["show"];
    echo " Name:" . $value["full_name"];
}


?>