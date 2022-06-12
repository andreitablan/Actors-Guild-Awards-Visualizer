<?php
class Post{

    private $users;

    private $year;
    private $category;
    private $full_name;
    private $show;
    private $won;

    public function __construct($db){
        $this->users = $db;
    } 
    public function read($category){

        $an = $_GET["year"];

        $cursor = $this->users->find(
            ['won' => 'True', 'category' => $category, 'year' => new \MongoDB\BSON\Regex($an)]
        );
        
        $array = iterator_to_array($cursor);
        
        foreach($array as $value){
           $show= $value["show"];
           $year= $value["year"];
        }

        return $array;
    }
}
?>