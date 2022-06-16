<?php
include('../Model/config.php');
include_once('../Model/forumCD.php');
$admin=new Comment($comments);
$admin->getComments();
?>