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
      <h1>Login page</h1>
    </header>

   <a href="#" class="toggle-button">
    <span class="bar"></span>
    <span class="bar"></span>
    <span class="bar"></span>
 </a>
  
  <div class="burger">
    <a href="Home.php">Home</a>
    <a href="Winners.php">Winners</a>
    <a href="Login.php">Login</a>
    <a href="Statistics.php">Statistics</a>
    <a href="Movie.php">Movie Details</a>
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
  <a href="Login.php">Login</a>
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
        
   
  </body>

</html>
