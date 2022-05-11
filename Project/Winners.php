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
      <a href="Home.html">Home</a>
      <a href="Winners.html">Winners</a>
      <a href="Login.html">Login</a>
      <a href="Statistics.html">Statistics</a>
  </div>

  <script>
    const toggleButton1 = document.getElementsByClassName('toggle-button')[0]
    const Burger1 = document.getElementsByClassName('burger')[0]

    toggleButton1.addEventListener('click', () => {
    Burger1.classList.toggle('active')
    })

  </script>
    

    <div class="sidenav">
      <a href="Home.html">Home</a>
      <a href="Winners.html">Winners</a>
      <a href="Login.html">Login</a>
      <a href="Statistics.html">Statistics</a>
      <button class="dropdown-btn">Actors
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-container">
        <a href="#">Link 1</a>
        <a href="#">Link 2</a>
        <a href="#">Link 3</a>
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
        <a href="#">1995</a>
        <a href="#">1996</a>
        <a href="#">1997</a>
        <a href="#">1998</a>
        <a href="#">1999</a>
        <a href="#">2001</a>
        <a href="#">2002</a>
        <a href="#">2003</a>
        <a href="#">2004</a>
        <a href="#">2005</a>
        <a href="#">2006</a>
        <a href="#">2007</a>
        <a href="#">2008</a>
        <a href="#">2009</a>
        <a href="#">2010</a>
        <a href="#">2011</a>
        <a href="#">2012</a>
        <a href="#">2013</a>
        <a href="#">2014</a>
        <a href="#">2016</a>
        <a href="#">2017</a>
        <a href="#">2018</a>
        <a href="#">2019</a>
        <a href="#">2020</a>
        <a href="#">2021</a>
        <a href="#">2022</a>

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
  
      </script>


    <section id="section-b">
        <br> 
        <br> 
        <h3>&emsp;Choose a category:</h3>
        <br> 
    </section>

    <button type="button" class="collapsible">FEMALE ACTOR IN A LEADING ROLE</button>
    <div class="content">
      <p>
      <?php
      include("find1.php") 
      ?>
      </p>
    </div>   
    <button type="button" class="collapsible">MALE ACTOR IN A LEADING ROLE</button>
    <div class="content">
      <p>Lorem ipsum...</p>
    </div>   
    <button type="button" class="collapsible">FEMALE ACTOR IN A SUPPORTING ROLE</button>
    <div class="content">
      <p>Lorem ipsum...</p>
    </div>   
    <button type="button" class="collapsible">MALE ACTOR IN A SUPPORTING ROLE</button>
    <div class="content">
      <p>Lorem ipsum...</p>
    </div>   
    <button type="button" class="collapsible">FEMALE ACTOR IN A DRAMA SERIES</button>
    <div class="content">
      <p>Lorem ipsum...</p>
    </div>   
    <button type="button" class="collapsible">MALE ACTOR IN A DRAMA SERIES</button>
    <div class="content">
      <p>Lorem ipsum...</p>
    </div>   
    <button type="button" class="collapsible">FEMALE ACTOR IN A COMEDY SERIES</button>
    <div class="content">
      <p>Lorem ipsum...</p>
    </div>   
    <button type="button" class="collapsible">MALE ACTOR IN A COMEDY SERIES</button>
    <div class="content">
      <p>Lorem ipsum...</p>
    </div>   
    <button type="button" class="collapsible">FEMALE ACTOR IN A TELEVISION MOVIE OR LIMITED SERIES</button>
    <div class="content">
      <p>Lorem ipsum...</p>
    </div>   
    <button type="button" class="collapsible">MALE ACTOR IN A TELEVISION MOVIE OR LIMITED SERIES</button>
    <div class="content">
      <p>Lorem ipsum...</p>
    </div>   
    <button type="button" class="collapsible">CAST IN A MOTION PICTURE</button>
    <div class="content">
    <p>
      <?php
      include("find2.php") 
      ?>
      </p>
    </div>   
    <button type="button" class="collapsible">ENSEMBLE IN A COMEDY SERIES</button>
    <div class="content">
      <p>Lorem ipsum...</p>
    </div>   
    <button type="button" class="collapsible">ENSEMBLE IN A DRAMA SERIES</button>
    <div class="content">
      <p>Lorem ipsum...</p>
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
        
        
   
  </body>

</html>
