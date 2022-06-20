<?php
 
require '../vendor/autoload.php';

include('../Model/config.php');

$username=$_GET["username"];
$comment=$_GET["comment"];

 $comments->insertOne(array(
    'username' =>  $username,
    'comment' => $comment
));

header("Location: Forum.php");


?>