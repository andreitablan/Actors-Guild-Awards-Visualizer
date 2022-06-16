<?php

class Comment
{

    private $comments;

    public function __construct($db)
    {
        $this->comments = $db;
    }

    public function insert($username, $comment)
    {
        $this->comments->insertOne(array(
            'username' =>  $username,
            'comment' => $comment
        ));
    }
    public function getComments()
    {
        $peopleComments = $this->comments->find( ['username' =>array('$ne' => null), 'comment' =>array('$ne' => null)]);
        
        $array = iterator_to_array($peopleComments);

        foreach ($array as $value) {
             $username= $value["show"];
             $comment= $value["comment"];
        }
        echo '<script>alert("Message")</script>';

        return $array;
    }
}
