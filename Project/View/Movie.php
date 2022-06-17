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
    <h2 style="text-align: center;">Actors Guild Awards Visualizer</h2>
    <h2 style="text-align: center;">Movie page</h2>
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


  <h2 style="text-align: center;"><b>&emsp; Welcome to the movie details page</b></h2>
  <section id="section-a">
    <p>
    <div class="search-container">
      </form>
      <form id="form" method="get" class="search-bar">
        <input type="text" placeholder="Search for a movie..." name="search" id="search" class="search">
        <button type="submit"><i class="fa fa-search"></i></button>
      </form>
      <br>
    </div>

  </section>
  <main id="maine">
    <div class="movie">
      <img class="movie_image" src="" alt="Image">
      <div class="movie_title"></div>
      <div class="movie_vote_average"></div>
      <div class="movie_release_date"></div>
      <div class="movie_overview"></div>
    </div>

  </main>

  <?php
  ini_set('display_errors', 0);
  $var = $_GET["search"];
  $var2 = "House of cards";
  ?>

  <script>
    let baseURL = 'https://api.themoviedb.org/3/';
    let APIKEY = "9ed4531cf7e78f63121a95b20dedc221";
    let configData = null;
    let baseImageURL = null;
    var myPhoto = "a";
    var myTitle = "a";
    let show = "Jaws";

    const main = document.getElementById('maine');

    let getConfig = function(myShow) {

      let url = "".concat(baseURL, 'configuration?api_key=', APIKEY);
      fetch(url)
        .then((result) => {
          return result.json();
        })
        .then((data) => {
          baseImageURL = data.images.secure_base_url;
          configData = data.images;
          console.log('config:', data);
          console.log('config fetched');
          runSearch(myShow);
        })
        .catch(function(err) {
          alert(err);
        });
    }

    let runSearch = function(keyword) {
      main.innerHTML = '';
      let url = ''.concat(baseURL, 'search/movie?api_key=', APIKEY, '&query=', keyword);
      fetch(url)
        .then((result) => {
          return result.json()
        })
        .then((data) => {

          //data.forEach(movie=>{

          //var myData = data.results[0].adult;

          //const{poster_path} = movie;
          myPhoto = ``.concat('https://image.tmdb.org/t/p/w500', data.results[0].poster_path);
          //document.getElementById("demo").innerHTML = myData;
          //myPhoto = "https://cdn.vox-cdn.com/thumbor/QIJJcaSeTulwA_UDheOfapQdq_0=/0x0:2040x1360/1200x800/filters:focal(857x517:1183x843)/cdn.vox-cdn.com/uploads/chorus_image/image/70775925/acastro_180427_1777_0001.0.jpg";

          //document.getElementById("image13").innerHTML= myPhoto;

          myTitle = data.results[0].title;
          myAverage = data.results[0].vote_average;
          myOverview = data.results[0].overview;
          myReleaseDate = data.results[0].release_date;
          if (myTitle == null) myTitle = "No data found."
          if (myAverage == null) myAverage = "No data found."
          if (myOverview == null) myOverview = "No data found."
          if (myReleaseDate == null) myReleaseDate = "No data found."

          const movieEl = document.createElement('div');

          movieEl.classList.add('movie');
          movieEl.innerHTML = `
      <div class="movie">
      <img class="movie_image" src="${myPhoto}" alt="Image">
      <div class="movie_title">${myTitle}</div>
      <div class="movie_vote_average">Score: ${myAverage}</div>
      <div class="movie_release_date">Release Date: ${myReleaseDate}</div>
      <div class="movie_overview">Overview: ${myOverview}</div>
             `


          main.appendChild(movieEl);
          // })
        })

    }


    <?php echo "var show1 = '$var';"; ?>
    <?php echo "var show2 = '$var2';"; ?>

    getConfig(show1);




    function getSmtg() {
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