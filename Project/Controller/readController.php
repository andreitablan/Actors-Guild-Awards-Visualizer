<?php

//header('Acces-Control-Allow-Origin: *');
//header('Content-Type: application/json');

require '../vendor/autoload.php';

include('../Model/config.php');

include_once('../Model/databaseService.php');

$show="";
$database= new Database($users);
$result = $database->read($category);

foreach($result as $value){
    if((isset($value["show"]) && trim($value["show"]) != '')&&(isset($value["full_name"]) && trim($value["full_name"]) != ''))
    {echo "<p> Show: " . $value["show"];
     echo "<br> Name: " . $value["full_name"]."<br>";
     echo "<br>";
} 
}

?>