<?php
ini_set('display_errors', 0);

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

        $nrPeople=0;
        $people=$this->users->find(
            ['category' => new \MongoDB\BSON\Regex('MALE') ,'year' => new \MongoDB\BSON\Regex($year)]
        );

        foreach ($people as $value) {
            $nrPeople++;
        }

        $nrWomen=0;
        $women=$this->users->find(
            ['category' => new \MongoDB\BSON\Regex('FEMALE') ,'year' => new \MongoDB\BSON\Regex($year)]
        );

        foreach ($women as $value) {
            $nrWomen++;
        }

        return $nrPeople-$nrWomen;
    }
    public function getWomen()
    {
        $year = $_GET["year"];

        $nrWomen=0;
        $women=$this->users->find(
            ['category' => new \MongoDB\BSON\Regex('FEMALE') ,'year' => new \MongoDB\BSON\Regex($year)]
        );

        foreach ($women as $value) {
            $nrWomen++;
        }
        return $nrWomen;
    }
    
    public function showNews()
    {
        $year = $_GET["year"];
        $mynewslink="ok";
        $myimagelink="not ok";
        switch ($year) {
            case 1995:
                $mynewslink = "https://www.digitalhit.com/screen-actors-guild-awards/1st/";
                $myimagelink = "Images/1995.jpg";
                break;
            case 1996:
                $mynewslink = "https://www.digitalhit.com/screen-actors-guild-awards/2nd/";
                $myimagelink = "Images/1996.jpg";
                break;
            case 1997:
                $mynewslink = "https://variety.com/1997/film/news/patient-charts-top-noms-for-sag-awards-1117433123/";
                $myimagelink = "Images/1997.jpg";
                break;
            case 1998:
                $mynewslink = "https://www.latimes.com/archives/la-xpm-1998-jan-14-ca-7988-story.html";
                $myimagelink = "Images/1998.jpg";
                break;
            case 1999:
                $mynewslink = "https://www.wonderwall.com/style/fashion/1999-sag-awards-fashion-flashback-screen-actors-guild-awards-3018076.gallery";
                $myimagelink = "Images/1999.jpg";
                break;
            case 2000:
                $mynewslink = "https://www.wonderwall.com/style/fashion/2000-sag-awards-fashion-flashback-screen-actors-guild-awards-3021808.gallery";
                $myimagelink = "Images/2000.jpg";
                break;
            case 2001:
                $mynewslink = "https://www.digitalhit.com/screen-actors-guild-awards/7th/";
                $myimagelink = "Images/2001.jpg";
                break;
            case 2002:
                $mynewslink = "https://www.eonline.com/news/1321082/you-wont-believe-what-the-sag-awards-looked-like-in-2002";
                $myimagelink = "Images/2002.jpg";
                break;
            case 2003:
                $mynewslink = "https://www.theguardian.com/film/2003/jan/30/awardsandprizes.news";
                $myimagelink = "Images/2003.jpg";
                break;
            case 2004:
                $mynewslink = "http://news.bbc.co.uk/2/hi/entertainment/3400851.stm";
                $myimagelink = "Images/2004.jpg";
                break;
            case 2005:
                $mynewslink = "https://www.cbsnews.com/pictures/2005-sag-awards/";
                $myimagelink = "Images/2005.jpg";
                break;
            case 2006:
                $mynewslink = "http://news.bbc.co.uk/2/hi/entertainment/4661214.stm";
                $myimagelink = "Images/2006.jpg";
                break;
            case 2007:
                $mynewslink = "https://www.cbsnews.com/pictures/2007-sag-awards-red-carpet/";
                $myimagelink = "Images/2007.jpg";
                break;
            case 2008:
                $mynewslink = "https://www.digitalhit.com/screen-actors-guild-awards/14th/";
                $myimagelink = "Images/2008.jpg";
                break;
            case 2009:
                $mynewslink = "https://www.justjared.com/tags/2009-sag-awards/";
                $myimagelink = "Images/2009.jpg";
                break;
            case 2010:
                $mynewslink = "https://people.com/awards/sag-awards-2010-winners-and-nominees/";
                $myimagelink = "Images/2010.jpg";
                break;
            case 2011:
                $mynewslink = "https://www.cbsnews.com/news/sag-awards-2011-list-of-winners/";
                $myimagelink = "Images/2011.jpg";
                break;
            case 2012:
                $mynewslink = "https://www.hollywoodreporter.com/news/general-news/sag-awards-2012-winners-nominees-285560/";
                $myimagelink = "Images/2012.jpg";
                break;
            case 2013:
                $mynewslink = "https://www.bbc.com/news/entertainment-arts-20696032";
                $myimagelink = "Images/2013.jpg";
                break;
            case 2014:
                $mynewslink = "https://www.cbsnews.com/news/sag-awards-2014-complete-list-of-winners/";
                $myimagelink = "Images/2014.jpg";
                break;
            case 2015:
                $mynewslink = "https://www.bbc.com/news/entertainment-arts-35054384";
                $myimagelink = "Images/2015.jpg";
                break;
            case 2016:
                $mynewslink = "//www.cbsnews.com/pictures/sag-awards-2016-highlights/";
                $myimagelink = "Images/2016.jpg";
                break;
            case 2017:
                $mynewslink = "https://www.cbsnews.com/news/sag-awards-2017-highlights-and-winners/";
                $myimagelink = "Images/2017.jpg";
                break;
            case 2018:
                $mynewslink = "https://www.cbsnews.com/news/sag-awards-2018-highlights-winners-and-best-moments/";
                $myimagelink = "Images/2018.jpg";
                break;
            case 2019:
                $mynewslink = "https://www.bbc.com/news/entertainment-arts-47026112";
                $myimagelink = "Images/2019.jpg";
                break;
            case 2020:
                $mynewslink = "https://www.bbc.com/news/in-pictures-511748582021";
                $myimagelink = "Images/2020.jpg";
                break;
            case 2021:
                $mynewslink = "https://ew.com/awards/sag-awards/screen-actors-guild-awards-2021-winners-list/";
                $myimagelink = "Images/2021.jpg";
                break;
            case 2022:
                $mynewslink = "https://www.nytimes.com/2022/02/27/movies/sag-awards-winners-list.html";
                $myimagelink = "Images/2022.jpg";
                break;
            }
    if(isset($_GET["year"])){
     $arraytosend = array($mynewslink, $myimagelink);
     //return $arraytosend;
     //echo $mynewslink;
     echo '<br>';

     echo '<a href='; echo $mynewslink; echo '>Visit News</a>';
     echo '<br>';
     echo '<img src=';  echo $myimagelink;  echo ' style="width:500px;height:600px;">';

     //echo '<a href='; echo $mynewslink; echo '>';
     //echo '<img src=';  echo $myimagelink;  echo '>';
     //echo '</a>';
    }
  }
}
?>