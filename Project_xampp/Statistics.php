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
      <h1>Statistics</h1>
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
  <a href="Statistics.php">Statistics</a>
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
   
<section id="section-b">
    <br> 
    <br> 
    <h3>&emsp;Choose a statistic type:</h3>
    <br> 
</section>

<button type="button" class="collapsible">Statistic Type 1</button>
<div class="content">
  <form>
    <div class="fallbackYearPicker">
      <div>
        <span>
          <label for="year">Year:</label>
          <select id="year" name="year">
            <option selected>2022</option>
            <option>2021</option>
            <option>2020</option>
            <option>2019</option>
            <option>2018</option>
            <option>2017</option>
            <option>2016</option>
            <option>2015</option>
            <option>2015</option>
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
 <button class="button">Export as webpage</button>
  <button class="button">Export as SVG</button>
  <button class="button">Export as CSV</button>
  <p></p>

</div>   



<button type="button" class="collapsible">Statistic Type 2</button>
<div class="content">
  <form>
    <div class="fallbackYearPicker">
      <div>
        <span>
          <label for="year">Year:</label>
          <select id="year1" name="year">
            <option selected>2022</option>
            <option>2021</option>
            <option>2020</option>
            <option>2019</option>
            <option>2018</option>
            <option>2017</option>
            <option>2016</option>
            <option>2015</option>
            <option>2015</option>
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
  <button class="button">Export as webpage</button>
  <button class="button">Export as SVG</button>
  <button class="button">Export as CSV</button>
  <p></p>

</div>   



<button type="button" class="collapsible">Statistic Type 3</button>
<div class="content">
  <form>
    <div class="fallbackYearPicker">
      <div>
        <span>
          <label for="year">Year:</label>
          <select id="year2" name="year">
            <option selected>2022</option>
            <option>2021</option>
            <option>2020</option>
            <option>2019</option>
            <option>2018</option>
            <option>2017</option>
            <option>2016</option>
            <option>2015</option>
            <option>2015</option>
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
 <button class="button">Export as webpage</button>
  <button class="button">Export as SVG</button>
  <button class="button">Export as CSV</button>
  <p></p>

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