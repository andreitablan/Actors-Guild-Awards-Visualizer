<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title style="font-family: Garamond, serif;font-size: 12px;color: rgba(0, 0, 0, 0.5);">Actors Guild Awards Visualizer</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="javascript.js"></script>
</head>

<body>

  <header id="showcase">
    <h2 style="text-align: center;">Actors Guild Awards Visualizer</h2>
    <h2 style="text-align: center;">Home</h2>

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
    <a href="Statistics1.php">Statistic 1</a>
    <a href="Statistics2.php">Statistic 2</a>
    <a href="Statistics3.php">Statistic 3</a>

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

    <h2 style="text-align: center;"><b>&emsp; Welcome to Actor Guild Award Vizualizer</b></h2>
    <p style="text-align: center;">This is a web page designed for flexible viewing of Actor Nomination Guild (SAG) Awards for recent years. </p>

    <div class="search-container">
      <form action="https://www.google.com/search?q=+Screen+Actors+Guild+Awards" method="get" class="search-bar">
        <input type="text" placeholder="Search for news..." name="q">
        <button type="submit"><i class="fa fa-search"></i></button>
      </form>
      <br>
    </div>

  </section>
  <div class="new-winners-section">
    <span id="btext"> New Winners 2022</span>

    <p class="marquee">
      <span>
        <a href="https://youtu.be/eMMLRnXPPJk" class="new-winners"> FEMALE ACTOR IN A LEADING ROLE: Jessica Chastain in The Eyes Of Tammy Faye</a>

        <a href="https://www.youtube.com/watch?v=BKP_0z52ZAw&t=12s" class="new-winners"> MALE ACTOR IN A LEADING ROLE: Will Smith in King Richard </a>

        <a href="https://youtu.be/A5GJLwWiYSg" class="new-winners"> FEMALE ACTOR IN A SUPPORTING ROLE: Ariana Debose in West Side Story </a>

        <a href="https://youtu.be/0pmfrE1YL4I" class="new-winners"> MALE ACTOR IN A SUPPORTING ROLE: Troy Kotsur in Coda </a>

        <a href="https://youtu.be/oqxAJKy0ii4" class="new-winners"> FEMALE ACTOR IN A DRAMA SERIES: Jung Ho-Yeon in Squid Game </a>

        <a href="https://youtu.be/oqxAJKy0ii4" class="new-winners"> MALE ACTOR IN A DRAMA SERIES: Lee Jung-Jae in Squid Game </a>

        <a href="https://youtu.be/QpE4893PxqE" class="new-winners"> FEMALE ACTOR IN A COMEDY SERIES: Jean Smart in Hacks</a>

        <a href="https://youtu.be/3u7EIiohs6U" class="new-winners"> MALE ACTOR IN A COMEDY SERIES: Jason Sudeikis in Ted Lasso </a>

        <a href="https://youtu.be/MYcQAy3e70M" class="new-winners"> FEMALE ACTOR IN A TELEVISION MOVIE OR LIMITED SERIES: Kate Winslet in Mare of Easttown </a>

        <a href="https://youtu.be/EzrLrUG2QVk" class="new-winners"> MALE ACTOR IN A TELEVISION MOVIE OR LIMITED SERIES: Michael Keaton in Dopesick </a>

        <a href="https://youtu.be/3u7EIiohs6U" class="new-winners"> ENSEMBLE IN A COMEDY SERIES: Ted Lasso </a>

        <a href="https://youtu.be/kevqiiYNFrc" class="new-winners"> ENSEMBLE IN A DRAMA SERIES: Succession </a>

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
              <img src="../Resources/Images/GeneralNewsFeatured.png" alt="HTML tutorial">
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
              <img src="../Resources/Images/GeneralNewsFeatured1.png" alt="HTML tutorial">
            </a>
            <p class="carousel-text">Nominalizations!</p>
          </div>


          <div class="news-container">
            <a href="https://www.eonline.com/news/sag_awards">
              <img src="../Resources/Images/GeneralNewsLatest23.png" alt="HTML tutorial">
            </a>
            <p class="carousel-text">SAG AWARDS 2022 RED CARPET FASHION!</p>
          </div>
        </section>
      </div>
    </div>

  </main>

</body>

</html>