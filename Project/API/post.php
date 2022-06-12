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
    public function howManyActorsWon(){
        $myYear=$_GET["year"];

        $won = $this->users->find(
            ['won' => 'True', 'year' => new \MongoDB\BSON\Regex($myYear)]
        );
        $notwon = $this->users->find(
            ['won' => 'False', 'year' => new \MongoDB\BSON\Regex($myYear)]
        );
        
        $array1 = iterator_to_array($won);
        $valuewon=0;
        forEach($array1 as $value){
            $valuewon++;
        }
        
        $array2 = iterator_to_array($notwon);
        $valuenotwon=0;
        forEach($array2 as $value){
            $valuenotwon++;
        }
        
        $arraytosend=array($valuewon,$valuenotwon);

        return $arraytosend;
    }
   
}
?>