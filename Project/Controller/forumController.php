<?php
ini_set('display_errors', 0);

require '../vendor/autoload.php';

include('../Model/config.php');

include_once('../Model/forumCD.php');

$forumEntry=new Comment($comments);

$username=$_GET["username"];
$comment=$_GET["comment"];

if($username!=null&&$comment!=null&&(isset($username) && trim($username) != '')&&(isset($comment) && trim($comment) != ''))
{
    $forumEntry->insert($username,$comment);
}

?>