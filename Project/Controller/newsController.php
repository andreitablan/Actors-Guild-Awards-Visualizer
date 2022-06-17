<?php
include_once('../Model/newsService.php');
  include("../Model/config.php");
  $news = new News();
  $news->showNews();

?>