<?php
ini_set('display_errors', 0);

class Database
{

    private $users;

    private $year;
    private $category;
    private $full_name;
    private $show;
    private $won;

    public function __construct($db)
    {
        $this->users = $db;
    }

    /*reads the winners from the database*/
    public function read()
    {
        $an = $_GET["year"];
        $category = $_GET["category"];

        $cursor = $this->users->find(
            ['won' => 'True', 'category' => $category, 'year' => new \MongoDB\BSON\Regex($an)]
        );

        $array = iterator_to_array($cursor);

        foreach ($array as $value) {
            $show = $value["show"];
            $year = $value["year"];
        }

        return $array;
    }
    public function getYear()
    {

        $year = $_GET["year"];
        return $year;
    }
}
