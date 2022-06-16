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
        header("Location: Forum.php");
    }
    public function getComments()
    {
        $peopleComments = $this->comments->find();
        
        $array = iterator_to_array($peopleComments);

        foreach ($array as $value) {
             $username= $value["username"];
             $comment= $value["comment"];
             echo $username;
             echo $comment;
        }
        /*echo '<script>alert("Message")</script>';

        return $array;*/
    }
}

?>
