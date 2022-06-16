<?php
ini_set('display_errors', 0);

require '../vendor/autoload.php';

include('../Model/config.php');

include_once('../Model/formCD.php');

$admin=new Comment($comments);

$username=$_GET["username"];
$comment=$_GET["comment"];

if($username!=null&&$comment!=null)
{$admin->insert($username,$comment);
    echo "am inserat cu succes aici";
}

?>