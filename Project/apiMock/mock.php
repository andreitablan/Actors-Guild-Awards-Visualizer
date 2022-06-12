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
    
    <div id="output">
        <!-- output will go here -->
    </div>

    <p id="demo"></p>
    <p id="image"></p>
  
    <?php echo $show?>
    <script>
        
       <?php echo "var show1 = '$show';"; ?>
    
       let show=show1;
    
        let baseURL = 'https://api.themoviedb.org/3/';
        let configData = null;
        let baseImageURL = null;
        let APIKEY = "9ed4531cf7e78f63121a95b20dedc221";
        const mainE=document.getElementById('mainE')
        var mySomething = "smtg";
        var myPhoto="a";
      
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
                document.getElementById("demo").innerHTML = myData;
                document.getElementById("image").innerHTML= myPhoto;
            })

        }


       getConfig(show);

       
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