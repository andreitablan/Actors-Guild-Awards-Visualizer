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
            if((isset($value["username"]) && trim($value["username"]) != '')&&(isset($value["comment"]) && trim($value["comment"]) != ''))
             $username= $value["username"];
             $comment= $value["comment"];
             echo '<div class="forum">';
             echo '<div class="forum_comment">';echo $username; echo ': '; echo $comment; echo'</div>';
             echo "</div>";
            }
    }
}

?>
