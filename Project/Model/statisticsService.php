<?php
ini_set('display_errors', 0);

class Statistics
{

    private $users;
    private $year;

    public function __construct($db)
    {
        $this->users = $db;
    }

    public function howManyActorsWon()
    {
        $myYear = $_GET["year"];

        $won = $this->users->find(
            ['won' => 'True', 'year' => new \MongoDB\BSON\Regex($myYear)]
        );
        $notwon = $this->users->find(
            ['won' => 'False', 'year' => new \MongoDB\BSON\Regex($myYear)]
        );

        $array1 = iterator_to_array($won);
        $valuewon = 0;
        foreach ($array1 as $value) {
            $valuewon++;
        }

        $array2 = iterator_to_array($notwon);
        $valuenotwon = 0;
        foreach ($array2 as $value) {
            $valuenotwon++;
        }

        $arraytosend = array($valuewon, $valuenotwon);

        return $arraytosend;
    }
    public function getYear()
    {

        $year = $_GET["year"];
        return $year;
    }
    public function getPersonsByCategory($category)
    {

        $year = $_GET["year"];

        $people = $this->users->find(
            ['category' => $category, 'year' => new \MongoDB\BSON\Regex($year)]
        );
        $array3 = iterator_to_array($people);
        $numberpeople = 0;
        foreach ($array3 as $value) {
            $numberpeople++;
        }
        return $numberpeople;
    }
    
    public function getMen()
    {
        $year = $_GET["year"];

        $nrPeople = 0;
        $people = $this->users->find(
            ['category' => new \MongoDB\BSON\Regex('MALE'), 'year' => new \MongoDB\BSON\Regex($year)]
        );

        foreach ($people as $value) {
            $nrPeople++;
        }

        $nrWomen = 0;
        $women = $this->users->find(
            ['category' => new \MongoDB\BSON\Regex('FEMALE'), 'year' => new \MongoDB\BSON\Regex($year)]
        );

        foreach ($women as $value) {
            $nrWomen++;
        }

        return $nrPeople - $nrWomen;
    }
    public function getWomen()
    {
        $year = $_GET["year"];

        $nrWomen = 0;
        $women = $this->users->find(
            ['category' => new \MongoDB\BSON\Regex('FEMALE'), 'year' => new \MongoDB\BSON\Regex($year)]
        );

        foreach ($women as $value) {
            $nrWomen++;
        }
        return $nrWomen;
    }

    
}

?>