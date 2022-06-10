<?php

header('Acces-Control-Allow-Origin: *');
header('Content-Type: application/json');

require '../vendor/autoload.php';

include('config.php');

include_once('post.php');

$post= new Post($users);
$result = $post->read();


?>