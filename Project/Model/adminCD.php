<?php

class Admin{

    private $users;

    public function __construct($db){
        $this->users = $db;
    } 
    
    /*inserts a movie into the database*/
    public function insert($year,$category,$full_name,$show,$won){
        $this->users->insertOne(array(
            'year' =>  $year,
            'category' => $category,
            'full_name' => $full_name,
            'show' => $show,
            'won' => $won
        ));
    }

    /*delets a movie from the database*/
    public function delete($year,$category,$full_name,$show,$won){
        $this->users->deleteOne(
            ['year' =>  $year, 
            'category' => $category, 
            'full_name' => $full_name, 
            'show' => $show, 
            'won' => $won]);
    }
}

?>