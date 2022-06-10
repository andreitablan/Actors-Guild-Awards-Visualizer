<?php
class Post{

    private $users;

    public function __construct($db){
        $this->users = $db;
    } 
    public function read(){
        $cursor = $this->users->find(
            ['won' => 'True', 'category' => 'MALE ACTOR IN A LEADING ROLE', 'year' => new \MongoDB\BSON\Regex('2015')]
        );
        
        $array = iterator_to_array($cursor);
        
        foreach($array as $value){
            echo "<p> Show:" . $value["show"];
            echo " Name:" . $value["full_name"];
        }

        return $array;
    }
}
?>