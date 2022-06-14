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
        return 10;
    }
    public function getWomen()
    {
        $year = $_GET["year"];
        return 20;
    }
    
    public function showNews()
    {
        $year = $_GET["year"];
        $mynewslink="ok";
        $myimagelink="not ok";
        switch ($year) {
            case 1995:
                $mynewslink = "https://www.hollywoodreporter.com/movies/movie-news/sag-awards-2022-nominations-list-nominees-1235073685/";
                $myimagelink = "https://www.qries.com/images/banner_logo.png";
                break;
            case 1996:
                $mynewslink = "https://www.hollywoodreporter.com/movies/movie-news/sag-awards-2022-nominations-list-nominees-1235073685/";
                $myimagelink = "https://www.qries.com/images/banner_logo.png";
                break;
            case 1997:
                $mynewslink = "https://www.hollywoodreporter.com/movies/movie-news/sag-awards-2022-nominations-list-nominees-1235073685/";
                $myimagelink = "https://www.qries.com/images/banner_logo.png";
                break;
            case 1998:
                $mynewslink = "https://www.hollywoodreporter.com/movies/movie-news/sag-awards-2022-nominations-list-nominees-1235073685/";
                $myimagelink = "https://www.qries.com/images/banner_logo.png";
                break;
            case 1999:
                $mynewslink = "https://www.hollywoodreporter.com/movies/movie-news/sag-awards-2022-nominations-list-nominees-1235073685/";
                $myimagelink = "https://www.qries.com/images/banner_logo.png";
                break;
            case 2000:
                $mynewslink = "https://www.hollywoodreporter.com/movies/movie-news/sag-awards-2022-nominations-list-nominees-1235073685/";
                $myimagelink = "https://www.qries.com/images/banner_logo.png";
                break;
            case 2001:
                $mynewslink = "https://www.hollywoodreporter.com/movies/movie-news/sag-awards-2022-nominations-list-nominees-1235073685/";
                $myimagelink = "https://www.qries.com/images/banner_logo.png";
                break;
            case 2002:
                $mynewslink = "https://www.hollywoodreporter.com/movies/movie-news/sag-awards-2022-nominations-list-nominees-1235073685/";
                $myimagelink = "https://www.qries.com/images/banner_logo.png";
                break;
            case 2003:
                $mynewslink = "https://www.hollywoodreporter.com/movies/movie-news/sag-awards-2022-nominations-list-nominees-1235073685/";
                $myimagelink = "https://www.qries.com/images/banner_logo.png";
                break;
            case 2004:
                $mynewslink = "https://www.hollywoodreporter.com/movies/movie-news/sag-awards-2022-nominations-list-nominees-1235073685/";
                $myimagelink = "https://www.qries.com/images/banner_logo.png";
                break;
            case 2005:
                $mynewslink = "https://www.hollywoodreporter.com/movies/movie-news/sag-awards-2022-nominations-list-nominees-1235073685/";
                $myimagelink = "https://www.qries.com/images/banner_logo.png";
                break;
            case 2006:
                $mynewslink = "https://www.hollywoodreporter.com/movies/movie-news/sag-awards-2022-nominations-list-nominees-1235073685/";
                $myimagelink = "https://www.qries.com/images/banner_logo.png";
                break;
            case 2007:
                $mynewslink = "https://www.hollywoodreporter.com/movies/movie-news/sag-awards-2022-nominations-list-nominees-1235073685/";
                $myimagelink = "https://www.qries.com/images/banner_logo.png";
                break;
            case 2008:
                $mynewslink = "https://www.hollywoodreporter.com/movies/movie-news/sag-awards-2022-nominations-list-nominees-1235073685/";
                $myimagelink = "https://www.qries.com/images/banner_logo.png";
                break;
            case 2009:
                $mynewslink = "https://www.hollywoodreporter.com/movies/movie-news/sag-awards-2022-nominations-list-nominees-1235073685/";
                $myimagelink = "https://www.qries.com/images/banner_logo.png";
                break;
            case 2010:
                $mynewslink = "https://www.hollywoodreporter.com/movies/movie-news/sag-awards-2022-nominations-list-nominees-1235073685/";
                $myimagelink = "https://www.qries.com/images/banner_logo.png";
                break;
            case 2011:
                $mynewslink = "https://www.hollywoodreporter.com/movies/movie-news/sag-awards-2022-nominations-list-nominees-1235073685/";
                $myimagelink = "https://www.qries.com/images/banner_logo.png";
                break;
            case 2011:
                $mynewslink = "https://www.hollywoodreporter.com/movies/movie-news/sag-awards-2022-nominations-list-nominees-1235073685/";
                $myimagelink = "https://www.qries.com/images/banner_logo.png";
                break;
            case 2012:
                $mynewslink = "https://www.hollywoodreporter.com/movies/movie-news/sag-awards-2022-nominations-list-nominees-1235073685/";
                $myimagelink = "https://www.qries.com/images/banner_logo.png";
                break;
            case 2013:
                $mynewslink = "https://www.hollywoodreporter.com/movies/movie-news/sag-awards-2022-nominations-list-nominees-1235073685/";
                $myimagelink = "https://www.qries.com/images/banner_logo.png";
                break;
            case 2014:
                $mynewslink = "https://www.hollywoodreporter.com/movies/movie-news/sag-awards-2022-nominations-list-nominees-1235073685/";
                $myimagelink = "https://www.qries.com/images/banner_logo.png";
                break;
            case 2015:
                $mynewslink = "https://www.hollywoodreporter.com/movies/movie-news/sag-awards-2022-nominations-list-nominees-1235073685/";
                $myimagelink = "https://www.qries.com/images/banner_logo.png";
                break;
            case 2016:
                $mynewslink = "https://www.hollywoodreporter.com/movies/movie-news/sag-awards-2022-nominations-list-nominees-1235073685/";
                $myimagelink = "https://www.qries.com/images/banner_logo.png";
                break;
            case 2017:
                $mynewslink = "https://www.hollywoodreporter.com/movies/movie-news/sag-awards-2022-nominations-list-nominees-1235073685/";
                $myimagelink = "https://www.qries.com/images/banner_logo.png";
                break;
            case 2018:
                $mynewslink = "https://www.hollywoodreporter.com/movies/movie-news/sag-awards-2022-nominations-list-nominees-1235073685/";
                $myimagelink = "https://www.qries.com/images/banner_logo.png";
                break;
            case 2019:
                $mynewslink = "https://www.hollywoodreporter.com/movies/movie-news/sag-awards-2022-nominations-list-nominees-1235073685/";
                $myimagelink = "https://www.qries.com/images/banner_logo.png";
                break;
            case 2020:
                $mynewslink = "https://www.hollywoodreporter.com/movies/movie-news/sag-awards-2022-nominations-list-nominees-1235073685/";
                $myimagelink = "https://www.qries.com/images/banner_logo.png";
                break;
            case 2021:
                $mynewslink = "https://www.hollywoodreporter.com/movies/movie-news/sag-awards-2022-nominations-list-nominees-1235073685/";
                $myimagelink = "https://www.qries.com/images/banner_logo.png";
                break;
            case 2021:
                $mynewslink = "https://www.hollywoodreporter.com/movies/movie-news/sag-awards-2022-nominations-list-nominees-1235073685/";
                $myimagelink = "https://www.qries.com/images/banner_logo.png";
                break;
            }
     $arraytosend = array($mynewslink, $myimagelink);
     return $arraytosend;
    }
   
}
?>