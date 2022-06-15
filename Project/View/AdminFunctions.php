<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Actors Guild Awards Visualizer</title>
  <script src="javascript.js"></script>

</head>

<body>

  <header id="showcase">
    <h1>Admin Functions</h1>
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
    <a href="Movie.php">Movie Details</a>
    <a href="Actors.php">Actors</a>
    <a href="Admin.php">Admin</a>

  </div>

  <script>
    const toggleButton2 = document.getElementsByClassName('toggle-button')[0]
    const Burger2 = document.getElementsByClassName('burger')[0]

    toggleButton2.addEventListener('click', () => {
      Burger2.classList.toggle('active')
    })
  </script>

  <div class="sidenav">
    <a href="Home.php">Home</a>
    <a href="Winners.php">Winners</a>
    <a href="Forum.php">Forum</a>
    <a href="Movie.php">Movie Details</a>
    <a href="Actors.php">Actors</a>
    <a href="Admin.php">Admin</a>
    <button class="dropdown-btn">Statistics
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
      <a href="Statistics1.php">Statistic 1</a>
      <a href="Statistics2.php">Statistic 2</a>
      <a href="Statistics3.php">Statistic 3</a>
    </div>
  </div>


  <form class="box1" action="AdminFunctions.php" method="GET">
  <h2>Insert/Delete from Database</h2>
  <label for="type">Insert/Delete:</label>
   <select id="type" name="type">
    <option value="insert">Insert</option>
    <option value="delete">Delete</option>
   </select>
   <label for="year">Year:</label>
   <select id="year" name="year">
    <option value="1995 - 1th Annual Screen Actors Guild Awards">1995</option>
    <option value="1996 - 2nd Annual Screen Actors Guild Awards">1996</option>
    <option value="1997 - 3rd Annual Screen Actors Guild Awards">1997</option>
    <option value="1998 - 4th Annual Screen Actors Guild Awards">1998</option>
    <option value="1999 - 5th Annual Screen Actors Guild Awards">1999</option>
    <option value="2000 - 6th Annual Screen Actors Guild Awards">2000</option>
    <option value="2001 - 7th Annual Screen Actors Guild Awards">2001</option>
    <option value="2002 - 8th Annual Screen Actors Guild Awards">2002</option>
    <option value="2003 - 9th Annual Screen Actors Guild Awards">2003</option>
    <option value="2004 - 10th Annual Screen Actors Guild Awards">2004</option>
    <option value="2005 - 11th Annual Screen Actors Guild Awards">2005</option>
    <option value="2006 - 12th Annual Screen Actors Guild Awards">2006</option>
    <option value="2007 - 13th Annual Screen Actors Guild Awards">2007</option>
    <option value="2008 - 14th Annual Screen Actors Guild Awards">2008</option>
    <option value="2009 - 15th Annual Screen Actors Guild Awards">2009</option>
    <option value="2010 - 16th Annual Screen Actors Guild Awards">2010</option>
    <option value="2011 - 17th Annual Screen Actors Guild Awards">2011</option>
    <option value="2012 - 18th Annual Screen Actors Guild Awards">2012</option>
    <option value="2013 - 19th Annual Screen Actors Guild Awards">2013</option>
    <option value="2014 - 20th Annual Screen Actors Guild Awards">2014</option>
    <option value="2015 - 21st Annual Screen Actors Guild Awards">2015</option>
    <option value="2016 - 22nd Annual Screen Actors Guild Awards">2016</option>
    <option value="2017 - 23rd Annual Screen Actors Guild Awards">2017</option>
    <option value="2018 - 24th Annual Screen Actors Guild Awards">2018</option>
    <option value="2019 - 25th Annual Screen Actors Guild Awards">2019</option>
    <option value="2020 - 26th Annual Screen Actors Guild Awards">2020</option>
    <option value="2021 - 27th Annual Screen Actors Guild Awards">2021</option>
    <option value="2022 - 28th Annual Screen Actors Guild Awards">2022</option>
   </select>
   <label for="category">Category:</label>
   <select id="category" name="category">
    <option value="FEMALE ACTOR IN A LEADING ROLE">FEMALE ACTOR IN A LEADING ROLE</option>
    <option value="MALE ACTOR IN A LEADING ROLE">MALE ACTOR IN A LEADING ROLE</option>
    <option value="FEMALE ACTOR IN A SUPPORTING ROLE">FEMALE ACTOR IN A SUPPORTING ROLE</option>
    <option value="MALE ACTOR IN A SUPPORTING ROLE">MALE ACTOR IN A SUPPORTING ROLE</option>
    <option value="FEMALE ACTOR IN A DRAMA SERIES">FEMALE ACTOR IN A DRAMA SERIES</option>
    <option value="MALE ACTOR IN A DRAMA SERIES">MALE ACTOR IN A DRAMA SERIES</option>
    <option value="FEMALE ACTOR IN A COMEDY SERIES">FEMALE ACTOR IN A COMEDY SERIES</option>
    <option value="MALE ACTOR IN A COMEDY SERIES">MALE ACTOR IN A COMEDY SERIES</option>
    <option value="FEMALE ACTOR IN A TELEVISION MOVIE OR LIMITED SERIES">FEMALE ACTOR IN A TELEVISION MOVIE OR LIMITED SERIES</option>
    <option value="MALE ACTOR IN A TELEVISION MOVIE OR LIMITED SERIES">MALE ACTOR IN A TELEVISION MOVIE OR LIMITED SERIES</option>
    <option value="CAST IN A MOTION PICTURE">CAST IN A MOTION PICTURE</option>
    <option value="ENSEMBLE IN A COMEDY SERIES">ENSEMBLE IN A COMEDY SERIES</option>
    <option value="ENSEMBLE IN A DRAMA SERIES">ENSEMBLE IN A DRAMA SERIES</option>
   </select>
   <label for="actorname">Actor Name:</label>
  <input type="text" name="actorname" placeholder="Actor name" id="actorname">
   <label for="showname">Show Name:</label>
  <input type="text" name="showname" placeholder="Show name" id="showname">
  <label for="won">Winner:</label>
   <select id="won" name="won">
    <option value="True">YES</option>
    <option value="False">NO</option>
   </select>
  <input type="submit" name="" value="SUBMIT" onclick=" this.form.submit(); ">
  
  </form>

  <?php 
   include("../Controller/adminController.php");
  ?>
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


</body>

</html>