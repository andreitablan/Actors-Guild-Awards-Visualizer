<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Using TheMovieDB</title>
    <meta name="viewport" content="width=device-width">
    <!-- API version 3 documentation: 
        https://developers.themoviedb.org/3/search
        https://developers.themoviedb.org/3/movies
    -->
</head>
<body>
    
    <h1>Using TheMovieDB.org API v3</h1>
    <div id="output">
        <!-- output will go here -->
    </div>

    <p id="demo"></p>
    <p id="image"></p>
  

    <script>
        var elements = document.querySelectorAll('[id="image"]');
        var show = <?php echo json_encode($show); ?>;
        /*************
        SAMPLE URLS
        
        1. To get the config data like image base urls
        https://api.themoviedb.org/3/configuration?api_key=<APIKEY>
        
        2. To fetch a list of movies based on a keyword
        https://api.themoviedb.org/3/search/movie?api_key=<APIKEY>&query=<keyword>
        
        3. To fetch more details about a movie
        https://api.themoviedb.org/3/movie/<movie-id>?api_key=<APIKEY>
        *************/
        //const APIKEY is inside key.js
        let baseURL = 'https://api.themoviedb.org/3/';
        let configData = null;
        let baseImageURL = null;
        let APIKEY = "9ed4531cf7e78f63121a95b20dedc221";
        const mainE=document.getElementById('mainE')
       
      
        let getConfig = function () {
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
                console.log('config:', data);
                console.log('config fetched');
                //document.getElementById('output').innerHTML = JSON.stringify(data, null, 4);
                //work with results array...
           
                var myData = data.results[0].adult;
                document.getElementById("demo").innerHTML = myData;
                document.getElementById("image").innerHTML=
                ``.concat('<img src="https://image.tmdb.org/t/p/w500',data.results[0].poster_path,'">');

                
            })

        }

       getConfig();

        
        document.addEventListener('DOMContentLoaded', getConfig);
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