<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Actors Guild Awards Visualizer</title>
   
   
  </head>

  <body>
    
    <header id="showcase">
      <h1>Winners</h1>
    </header>

 
    <a href="#" class="toggle-button">
      <span class="bar"></span>
      <span class="bar"></span>
      <span class="bar"></span>
   </a>
    
    <div class="burger">
      <a href="Home.php">Home</a>
      <a href="Winners.php">Winners</a>
      <a href="Forum.php">Forum</a>
      <a href="Statistics.php">Statistics</a>
      <a href="Movie.php">Movie Details</a>
  </div>

  <script>
    const toggleButton1 = document.getElementsByClassName('toggle-button')[0]
    const Burger1 = document.getElementsByClassName('burger')[0]

    toggleButton1.addEventListener('click', () => {
    Burger1.classList.toggle('active')
    })

  </script>
    

    <div class="sidenav">
      <a href="Home.php">Home</a>
      <a href="Winners.php">Winners</a>
      <a href="Forum.php">Forum</a>
      <a href="Movie.php">Movie Details</a>
      <button class="dropdown-btn">Statistics
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="Statistics1.php">Statistic 1</a>
    <a href="Statistics2.php">Statistic 2</a>
    <a href="Statistics3.php">Statistic 3</a>
  </div>
    </div>
    

  <script>
    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;
    
    for (i = 0; i < dropdown.length; i++) {
      dropdown[i].addEventListener("click", function() {
      this.classList.toggle("active");
      var dropdownContent = this.nextElementSibling;
      if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
      } else {
      dropdownContent.style.display = "block";
      }
      });
    }
    </script>


    <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="javascript:void(0)" class="year" onclick="getYearFromNav(1995)" >1995</a>
        <a href="javascript:void(0)" class="year" onclick="getYearFromNav(1996)" >1996</a>
        <a href="javascript:void(0)" class="year" onclick="getYearFromNav(1997)" >1997</a>
        <a href="javascript:void(0)" class="year" onclick="getYearFromNav(1998)" >1998</a>
        <a href="javascript:void(0)" class="year" onclick="getYearFromNav(1999)" >1999</a>
        <a href="javascript:void(0)" class="year" onclick="getYearFromNav(2000)" >2000</a>
        <a href="javascript:void(0)" class="year" onclick="getYearFromNav(2001)" >2001</a>
        <a href="javascript:void(0)" class="year" onclick="getYearFromNav(2002)" >2002</a>
        <a href="javascript:void(0)" class="year" onclick="getYearFromNav(2003)" >2003</a>
        <a href="javascript:void(0)" class="year" onclick="getYearFromNav(2004)" >2004</a>
        <a href="javascript:void(0)" class="year" onclick="getYearFromNav(2005)" >2005</a>
        <a href="javascript:void(0)" class="year" onclick="getYearFromNav(2006)" >2006</a>
        <a href="javascript:void(0)" class="year" onclick="getYearFromNav(2007)" >2007</a>
        <a href="javascript:void(0)" class="year" onclick="getYearFromNav(2008)" >2008</a>
        <a href="javascript:void(0)" class="year" onclick="getYearFromNav(2009)" >2009</a>
        <a href="javascript:void(0)" class="year" onclick="getYearFromNav(2010)" >2010</a>
        <a href="javascript:void(0)" class="year" onclick="getYearFromNav(2011)" >2011</a>
        <a href="javascript:void(0)" class="year" onclick="getYearFromNav(2012)" >2012</a>
        <a href="javascript:void(0)" class="year" onclick="getYearFromNav(2013)" >2013</a>
        <a href="javascript:void(0)" class="year" onclick="getYearFromNav(2014)" >2014</a>
        <a href="javascript:void(0)" class="year" onclick="getYearFromNav(2015)" >2015</a>
        <a href="javascript:void(0)" class="year" onclick="getYearFromNav(2016)" >2016</a>
        <a href="javascript:void(0)" class="year" onclick="getYearFromNav(2017)" >2017</a>
        <a href="javascript:void(0)" class="year" onclick="getYearFromNav(2018)" >2018</a>
        <a href="javascript:void(0)" class="year" onclick="getYearFromNav(2019)" >2019</a>
        <a href="javascript:void(0)" class="year" onclick="getYearFromNav(2020)" >2020</a>

      </div>
      
      <div id="main">
        <button class="openbtn" onclick="openNav()">&#9776; Choose the year</button>
      </div>

      <script>
        function openNav() {
    document.getElementById("mySidebar").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
  }
  
  function closeNav() {
    document.getElementById("mySidebar").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
  }

  function getYearFromNav(year){
    document.getElementById("yearSelected").innerHTML = year;
  }
      </script>



<form method="get">
    <div class="fallbackYearPicker">
      <div>
        <span>
          <label for="year">&emsp;Year:</label>
          <select id="year" name="year" onchange='if(this.value != 0) { this.form.submit(); }'>
            <option selected>2022</option>
            <option>2021</option>
            <option>2020</option>
            <option>2019</option>
            <option>2018</option>
            <option>2017</option>
            <option>2016</option>
            <option>2015</option>
            <option>2014</option>
            <option>2013</option>
            <option>2012</option>
            <option>2011</option>
            <option>2010</option>
            <option>2009</option>
            <option>2008</option>
            <option>2007</option>
            <option>2006</option>
            <option>2005</option>
            <option>2004</option>
            <option>2003</option>
            <option>2002</option>
            <option>2001</option>
            <option>2000</option>
            <option>1999</option>
            <option>1998</option>
            <option>1997</option>
            <option>1996</option>
            <option>1995</option>
          </select>
        </span>
      </div>
    </div>
  </form> 
  <br>


  <?php 
    include_once('API/post.php');
      include("API/config.php");
      $post= new Post($users);
      $post->showNews();?>

    <section id="section-b">
      <h3 id="header">&emsp;Winners for year: <span id = "yearSelected">(select a year)</span></h3>
        <br> 
        <br> 
        <h3>&emsp;Choose a category:</h3>
        <br> 
    </section>


    <button type="button" class="collapsible">FEMALE ACTOR IN A LEADING ROLE</button>
    <div class="content">  
      <?php $category="FEMALE ACTOR IN A LEADING ROLE";
      include("API/read.php");
      ?>
    </p>
      </div>
    <button type="button" class="collapsible">MALE ACTOR IN A LEADING ROLE</button>
    <div class="content">
      <p><?php  $category="MALE ACTOR IN A LEADING ROLE";
      include("API/read.php");
      ?> <p>
    </div>   
    <button type="button" class="collapsible">FEMALE ACTOR IN A SUPPORTING ROLE</button>
    <div class="content">
      <p><?php   $category="FEMALE ACTOR IN A SUPPORTING ROLE";
      include("API/read.php");
      ?> </p> 
    </div>   
    <button type="button" class="collapsible">MALE ACTOR IN A SUPPORTING ROLE</button>
    <div class="content">
      <p><?php $category="MALE ACTOR IN A SUPPORTING ROLE";
      include("API/read.php");?> </p>
    </div>   
    <button type="button" class="collapsible">FEMALE ACTOR IN A DRAMA SERIES</button>
    <div class="content">
      <p><?php $category="FEMALE ACTOR IN A DRAMA SERIES";
      include("API/read.php"); ?> </p>
    </div>   
    <button type="button" class="collapsible">MALE ACTOR IN A DRAMA SERIES</button>
    <div class="content">
      <p><?php $category="MALE ACTOR IN A DRAMA SERIES";
      include("API/read.php") ?> </p>
    </div>   
    <button type="button" class="collapsible">FEMALE ACTOR IN A COMEDY SERIES</button>
    <div class="content">
      <p><?php $category="FEMALE ACTOR IN A COMEDY SERIES";
      include("API/read.php")?> </p>
    </div>   
    <button type="button" class="collapsible">MALE ACTOR IN A COMEDY SERIES</button>
    <div class="content">
      <p><?php $category="MALE ACTOR IN A COMEDY SERIES";
      include("API/read.php") ?> </p>
    </div>   
    <button type="button" class="collapsible">FEMALE ACTOR IN A TELEVISION MOVIE OR LIMITED SERIES</button>
    <div class="content">
     <p><?php $category="FEMALE ACTOR IN A TELEVISION MOVIE OR LIMITED SERIES";
      include("API/read.php") ?> </p>
    </div>   
    <button type="button" class="collapsible">MALE ACTOR IN A TELEVISION MOVIE OR LIMITED SERIES</button>
    <div class="content">
      <p><?php $category="MALE ACTOR IN A TELEVISION MOVIE OR LIMITED SERIES";
      include("API/read.php") ?> </p>
    </div>   
    <button type="button" class="collapsible">CAST IN A MOTION PICTURE</button>
    <div class="content">
    <p> <?php $category="CAST IN A MOTION PICTURE";
      include("API/read.php") ?> </p>
    </div>   
    <button type="button" class="collapsible">ENSEMBLE IN A COMEDY SERIES</button>
    <div class="content">
      <p><?php $category="ENSEMBLE IN A COMEDY SERIES";
      include("API/read.php") ?> </p>
    </div>   
    <button type="button" class="collapsible">ENSEMBLE IN A DRAMA SERIES</button>
    <div class="content">
      <p><?php $category="ENSEMBLE IN A DRAMA SERIES";
      include("API/read.php")?> </p>
    </div>

    <script>
        var coll = document.getElementsByClassName("collapsible");
        var i;
        
        for (i = 0; i < coll.length; i++) {
          coll[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var content = this.nextElementSibling;
            if (content.style.display === "block") {
              content.style.display = "none";
            } else {
              content.style.display = "block";
            }
          });
        }
        </script>
        
        
        <script>
     
      
       
         let getConfig = function (myShow) {
           
             myPhoto=myShow;
             let url = "".concat(baseURL, 'configuration?api_key=', APIKEY); 
             fetch(url)
             .then((result)=>{
                 return result.json();
             })
             .then((data)=>{
                 baseImageURL = data.images.secure_base_url;
                 configData = data.images;
                 console.log('config:', data);
                 console.log('config fetched');
                 runSearch(show);
             })
             .catch(function(err){
                 alert(err);
             });
         }
         
         let runSearch = function (keyword) {
             let url = ''.concat(baseURL, 'search/movie?api_key=', APIKEY, '&query=', keyword);
             fetch(url)
             .then((result)=>{
                 return result.json()
             })
             .then((data)=>{
                 
             
                 var myData = data.results[0].adult;
                
                 myPhoto = ``.concat('<img src="https://image.tmdb.org/t/p/w500',data.results[0].poster_path,'">');

                 document.getElementById("image1").innerHTML=myPhoto;
             })
 
         }
        
        function getSmtg(){
        return myPhoto;
         }
         
         //document.addEventListener('DOMContentLoaded', getConfig);
         /*******************************
         SAMPLE SEARCH RESULTS DATA
         { "vote_count": 2762, 
             "id": 578, 
             "video": false, 
             "vote_average": 7.5, 
             "title": "Jaws", 
             "popularity": 16.273358, 
             "poster_path": "/l1yltvzILaZcx2jYvc5sEMkM7Eh.jpg", 
             "original_language": "en", 
             "original_title": "Jaws", 
             "genre_ids": [ 27, 53, 12 ], 
             "backdrop_path": "/slkPgAt1IQgxZXNrazEcOzhAK8f.jpg", 
             "adult": false, 
             "overview": "An insatiable great white shark terrorizes the townspeople of Amity Island, The police chief, an oceanographer and a grizzled shark hunter seek to destroy the bloodthirsty beast.", 
             "release_date": "1975-06-18" 
         }
         *******************************/
       
     </script>
  </body>

</html>
