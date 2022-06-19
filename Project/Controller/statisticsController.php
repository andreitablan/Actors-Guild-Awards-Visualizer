<?php
require '../vendor/autoload.php';
include('../Model/config.php');
include_once('../Model/statisticsService.php');

/*show statistic 1*/
if($action == 1)
{
    $statistics = new Statistics($users);
    $valuew = $statistics->howManyActorsWon()[0];
    $valuen = $statistics->howManyActorsWon()[1];
    $year = $statistics->getYear();
}
/*export svg statistic 1*/
else if($action == 2)
{
    $statistics = new Statistics($users);

    $arraytosend=$statistics->howManyActorsWon();
    $won=$arraytosend[0];
    $notwon=$arraytosend[1];

    $year = $statistics->getYear();
}
/*show statistic 2*/
else if($action == 3)
{
   $statistics = new Statistics($users);

    $category1 = $statistics->getPersonsByCategory("FEMALE ACTOR IN A LEADING ROLE");
    $category2 = $statistics->getPersonsByCategory("MALE ACTOR IN A LEADING ROLE");
    $category3 = $statistics->getPersonsByCategory("FEMALE ACTOR IN A SUPPORTING ROLE");
    $category4 = $statistics->getPersonsByCategory("MALE ACTOR IN A SUPPORTING ROLE");
    $category5 = $statistics->getPersonsByCategory("FEMALE ACTOR IN A DRAMA SERIES");
    $category6 = $statistics->getPersonsByCategory("MALE ACTOR IN A DRAMA SERIES");
    $category7 = $statistics->getPersonsByCategory("FEMALE ACTOR IN A COMEDY SERIES");
    $category8 = $statistics->getPersonsByCategory("MALE ACTOR IN A COMEDY SERIES");
    $category9 = $statistics->getPersonsByCategory("FEMALE ACTOR IN A TELEVISION MOVIE OR LIMITED SERIES");
    $category10 = $statistics->getPersonsByCategory("MALE ACTOR IN A TELEVISION MOVIE OR LIMITED SERIES");
    $category11 = $statistics->getPersonsByCategory("CAST IN A MOTION PICTURE");
    $category12 = $statistics->getPersonsByCategory("ENSEMBLE IN A COMEDY SERIES");
    $category13 = $statistics->getPersonsByCategory("ENSEMBLE IN A DRAMA SERIES");
    $year = $statistics->getYear();
}
/*export svg statistic 2*/
else if($action == 4){
      $statistics = new Statistics($users);

      $category1 = $statistics->getPersonsByCategory("FEMALE ACTOR IN A LEADING ROLE")+20;
      $category2 = $statistics->getPersonsByCategory("MALE ACTOR IN A LEADING ROLE")+20;
      $category3 = $statistics->getPersonsByCategory("FEMALE ACTOR IN A SUPPORTING ROLE")+20;
      $category4 = $statistics->getPersonsByCategory("MALE ACTOR IN A SUPPORTING ROLE")+20;
      $category5 = $statistics->getPersonsByCategory("FEMALE ACTOR IN A DRAMA SERIES")+20;
      $category6 = $statistics->getPersonsByCategory("MALE ACTOR IN A DRAMA SERIES")+20;
      $category7 = $statistics->getPersonsByCategory("FEMALE ACTOR IN A COMEDY SERIES")+20;
      $category8 = $statistics->getPersonsByCategory("MALE ACTOR IN A COMEDY SERIES")+20;
      $category9 = $statistics->getPersonsByCategory("FEMALE ACTOR IN A TELEVISION MOVIE OR LIMITED SERIES")+20;
      $category10 = $statistics->getPersonsByCategory("MALE ACTOR IN A TELEVISION MOVIE OR LIMITED SERIES")+20;
      $category11 = $statistics->getPersonsByCategory("CAST IN A MOTION PICTURE")+20;
      $category12 = $statistics->getPersonsByCategory("ENSEMBLE IN A COMEDY SERIES")+20;
      $category13 = $statistics->getPersonsByCategory("ENSEMBLE IN A DRAMA SERIES")+20;
      $year = $statistics->getYear();
}
/*show statistic 3*/
else if($action == 5){

      $statistics = new Statistics($users);

      $men=$statistics->getMen();
      $women=$statistics->getWomen();
      $people=$men+$women;
      $year = $statistics->getYear();

      $menHeight=$men*10;
      $womenHeight=$women*10;
}
/*export svg statistic 3*/
else if($action == 6){

    $statistics = new Statistics($users);

    $men = $statistics->getMen();
    $women = $statistics->getWomen();

    $year = $statistics->getYear();


}



?>
