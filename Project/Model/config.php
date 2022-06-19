<?php
require '../vendor/autoload.php';

/*configure the connection with the database*/
$client = new MongoDB\Client;
$companydb = $client->mongodb;
$users=$companydb->users;
$comments=$companydb->comments;

?>