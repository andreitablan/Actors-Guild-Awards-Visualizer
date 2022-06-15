<?php

//header('Acces-Control-Allow-Origin: *');
//header('Content-Type: application/json');

require '../vendor/autoload.php';

include('../Model/config.php');

include_once('../Model/spost.php');

$show="";
$post= new Post($users);
$result = $post->read($category);

foreach($result as $value){
    echo "<p> Show:" . $value["show"];
    echo " Name:" . $value["full_name"];
}

?>