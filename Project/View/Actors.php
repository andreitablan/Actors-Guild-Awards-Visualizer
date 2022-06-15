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
        <h1>Actors page</h1>
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

        <h2><b>&emsp; Welcome ot the actor page</b></h2>
        <p style="text-align: center;">This is a web page designed to show informations about an actor. </p>

        <div class="search-container">
            </form>
            <form id="form" method="get" class="search-bar">
                <input type="text" placeholder="Search for an actor..." name="search" id="search" class="search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
            <br>
        </div>

    </section>
    <main id="maine">
        <div class="actor">
            <img src="" alt="Image">
            <a href="">
                <img alt="IMDB" src="" width="150" height="70">
            </a>
            <div class="id"></div>
            <div class="biography"></div>
            <div class="birthday"></div>
            <div class="deathday"></div>
            <div class="gender"></div>
            <div class="known_for_department"></div>
            <div class="name"></div>
            <div class="place_of_birth"></div>
            <div class="popularity"></div>


        </div>
    </main>

    <?php
    ini_set('display_errors', 0);
    $var = $_GET["search"];
    ?>

    <script>
        let baseURL = 'https://api.themoviedb.org/3/';
        let APIKEY = "9ed4531cf7e78f63121a95b20dedc221";
        let configData = null;
        let baseImageURL = null;

        const main = document.getElementById('maine');
        //https://api.themoviedb.org/3/search/person?api_key=9ed4531cf7e78f63121a95b20dedc221&query=Chris Pratt
        //https://api.themoviedb.org/3/person/73457?api_key=9ed4531cf7e78f63121a95b20dedc221
        let getConfig = function(myActor) {

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
                    runSearch(myActor);
                })
                .catch(function(err) {
                    alert(err);
                });
        }

        let runSearch = function(keyword) {
            main.innerHTML = '';
            let url = ''.concat(baseURL, 'search/person?api_key=', APIKEY, '&query=', keyword);
            fetch(url)
                .then((result) => {
                    return result.json()
                })
                .then((data) => {

                    myId = data.results[0].id;
                    runSearchById(myId);
                })

        }
        let runSearchById = function(keyword) {
            main.innerHTML = '';
            let url = ''.concat(baseURL, 'person/', keyword, '?api_key=', APIKEY);
            fetch(url)
                .then((result) => {
                    return result.json()
                })
                .then((data) => {

                    myPhoto = ``.concat('https://image.tmdb.org/t/p/w500', data.profile_path);
                    myIMDB = ``.concat('https://www.imdb.com/name/', data.imdb_id, '/?ref_=nv_sr_srsg_0')
                    biography = data.biography;
                    birthday = data.birthday;
                    deathday = data.deathday;
                    gender = data.gender;
                    known_for_department = data.known_for_department;
                    name = data.name;
                    place_of_birth = data.place_of_birth;
                    popularity = data.popularity;


                    const actorEl = document.createElement('div');
                    actorEl.classList.add('actor');
                    actorEl.innerHTML = `
             <img src="${myPhoto}" alt="Image">
             <a href="${myIMDB}">
                <img alt="IMDB" src="../Resources/Images/IMDB.png" width="150" height="70">
             </a>
            <div class="biography">Biography: ${biography}</div>
            <div class="birthday">Birthday: ${birthday}</div>
            <div class="deathday">Deathday: ${deathday}</div>
            <div class="gender">Gender: ${gender}</div>
            <div class="known_for_department">Departament: ${known_for_department}</div>
            <div class="name">Name:${name}</div>
            <div class="place_of_birth">Place of Birth: ${place_of_birth}</div>
            <div class="popularity">Popularity: ${popularity}</div>
             `
                  main.appendChild(actorEl);
                })
        }

        <?php echo "var myActor = '$var';"; ?>
        getConfig(myActor);

        function getSmtg() {
            return myPhoto;
        }
    </script>
</body>

</html>