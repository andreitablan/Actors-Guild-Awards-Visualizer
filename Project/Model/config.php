<?php
require '../vendor/autoload.php';

$client = new MongoDB\Client;
$companydb = $client->mongodb;
$users=$companydb->users;
?>