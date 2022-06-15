<?php
ini_set('display_errors', 0);

require '../vendor/autoload.php';

include('../Model/config.php');

include_once('../Model/adminCD.php');

$admin=new Admin($users);

$command=$_GET["type"];
$year=$_GET["year"];
$category=$_GET["category"];
$full_name=$_GET["actorname"];
$show=$_GET["showname"];
$won=$_GET["won"];

if($command=="insert"){
$admin->insert($year,$category,$full_name,$show,$won);
}
else if($command=="delete"){
$admin->delete($year,$category,$full_name,$show,$won);
}

?>