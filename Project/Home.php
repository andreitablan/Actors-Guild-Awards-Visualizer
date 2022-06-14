<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="style.css">
    <script src="javascript.js"></script>
    <title>Actors Guild Awards Visualizerr</title>
  </head>

  <body>
  
    <header id="showcase">
      <h1>Home</h1>
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

    <section id="section-a">
      <p>

        <h2><b>&emsp; Welcome to Actor Guild Award Vizualizer</b></h2>
        <p style="text-align: center;">This is a web page designed for flexible viewing of Actor Nomination Guild (SAG) Awards for recent years. </p>

          <div class="search-container">
          <form action="https://www.google.com/search" method="get" class="search-bar">
            <input type="text" placeholder="Search for an actor..." name="q">
            <button type="submit"><i class="fa fa-search"></i></button>
          </form>
          <br>
        </div>
      
      </section>
      <div class="new-winners-section">
        <span id="btext"> New Winners 2022</span>
      
          <p class="marquee">
            <span>
              28 FEBRUARY 2022:
              <a href="#" class="new-winners"> FEMALE ACTOR IN A LEADING ROLE: Viola Davis in Ma Rainey's Black Bottom</a>
              28 FEBRUARY 2022:
              <a href="#" class="new-winners"> MALE ACTOR IN A LEADING ROLE: Chadwick Boseman in Ma Rainey's Black Bottom</a>
              28 FEBRUARY 2022:
              <a href="#" class="new-winners"> FEMALE ACTOR IN A SUPPORTING ROLE: Yuh-Jong Youn in Minari </a>
              28 FEBRUARY 2022:
              <a href="#" class="new-winners"> MALE ACTOR IN A SUPPORTING ROLE: Daniel Kaluuya in Judas and the Black Messiah </a>
            </span>
          </p>
      </div>
   
    
    <main>
			<div id="popular-news">
				<div id="featured">
				
					<section class="popular-news-carousel">
            <h2>FEATURED</h2>
            <div class="news-container">
              <a href="https://screenrant.com/oscars-actors-who-won-sag-award-but-not-oscar/">
                <img src="Images/GeneralNewsFeatured.png" alt="HTML tutorial">
              </a>
              <p class="carousel-text">10 Actors Who Won The SAG Award But Not The Oscar!</p>
						</div>	
					</section>
				</div>
      
				<div id="latest">
			
					<section class="news">
            <h2>LATEST</h2>
						<div class="news-container">
              <a href="https://www.hollywoodreporter.com/movies/movie-news/sag-awards-2022-nominations-list-nominees-1235073685/">
                <img src="Images/GeneralNewsFeatured1.png" alt="HTML tutorial">
              </a>
              <p class="carousel-text">Nominalizations!</p>
						</div>	

			
						<div class="news-container">
              <a href="https://www.eonline.com/news/sag_awards">
                <img src="Images/GeneralNewsLatest2.png" alt="HTML tutorial">
              </a>
							<p class="carousel-text">SAG AWARDS 2022 RED CARPET FASHION!</p>				
						</div>						
					</section>
				</div>
      </div>
			
		</main>

  </body>

</html>
