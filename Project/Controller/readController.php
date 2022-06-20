<?php

//header('Acces-Control-Allow-Origin: *');
//header('Content-Type: application/json');

require '../vendor/autoload.php';

include('../Model/config.php');

include_once('../Model/databaseService.php');

$posts_arr=array();
$posts_arr['data']=array();

$show="";
$database= new Database($users);
$result = $database->read();

foreach($result as $value){
    if((isset($value["show"]) && trim($value["show"]) != '')&&(isset($value["full_name"]) && trim($value["full_name"]) != ''))
    {
     $post_item=array(
        'show' => $value["show"],
        'name' => $value["full_name"]);
    
    array_push($posts_arr['data'],$post_item);
} 
}
echo json_encode($posts_arr);

?>