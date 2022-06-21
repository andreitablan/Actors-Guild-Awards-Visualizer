<?php
require '../vendor/autoload.php';

include('../Model/config.php');


   $posts_arr=array();
   $posts_arr['data']=array();

   $peopleComments = $comments->find();
   
   $array = iterator_to_array($peopleComments);
   
   foreach ($array as $value) {
       if((isset($value["username"]) && trim($value["username"]) != '')&&(isset($value["comment"]) && trim($value["comment"]) != ''))
       {
        $username= $value["username"];
        $comment= $value["comment"];
        $post_item=array('username' => $username, 'comment' => $comment);
        
        array_push($posts_arr['data'],$post_item);
       }
       }
       echo json_encode($posts_arr);
