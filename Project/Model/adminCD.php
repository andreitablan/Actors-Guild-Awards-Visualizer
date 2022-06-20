<?php

ini_set('display_errors', 0);

require '../vendor/autoload.php';

include('../Model/config.php');

$command=$_GET["type"];
$year=$_GET["year"];
$category=$_GET["category"];
$full_name=$_GET["actorname"];
$show=$_GET["showname"];
$won=$_GET["won"];

if($command=='insert'){
$users->insertOne(array(
    'year' =>  $year,
    'category' => $category,
    'full_name' => $full_name,
    'show' => $show,
    'won' => $won
));
}
if($command=='delete'){
    $users->deleteOne(
        ['year' =>  $year, 
        'category' => $category, 
        'full_name' => $full_name, 
        'show' => $show, 
        'won' => $won]);
}

?>