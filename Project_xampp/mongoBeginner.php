<?php
require 'vendor/autoload.php';

$client = new MongoDB\Client;
$companydb = $client->mongodb;
$users=$companydb->users;

//find one
/*$document = $users->findOne(
    ['show' => 'BOMBSHELL' ]
);

var_dump($document);
*/


//find all
/*
$documentList = $users->find(
    ['won' => 'True']
);

foreach($documentList as $doc)
{
    var_dump($doc);
}
*/


//find by criteria
/*$documentList = $users->find(
    ['won' => 'True','category' => 'CAST IN A MOTION PICTURE' ],
    ['projection' => ['_id' => 0, 'full_name' => 1]]
);

foreach($documentList as $doc)
{
    var_dump($doc);
}
*/


//print only the information
$cursor = $users->find(
    ['show' => 'BOMBSHELL']
);

$array = iterator_to_array($cursor);

foreach($array as $value){
    echo "<p>" . $value["show"];
    echo " " . $value["full_name"];
}

?>