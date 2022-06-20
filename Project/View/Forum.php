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
    <h2 style="text-align: center;">Forum page</h2>
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

  <div id="maine">

  </div>

  <script>
      var main1 = document.getElementById('maine');
      main1.innerHTML = '';
      var url1='http://localhost/ProjectC/Model/forumGetComments.php';
     
      fetch(url1)
      .then((response) => response.json())
      .then ( (myData) => {
        console.log(myData);
       
        myData.data.forEach(movie => {
        
        const{username,comment} =  movie;

        let winnerEl = document.createElement('div');
        winnerEl.classList.add('winner');
        winnerEl.innerHTML=`
        <div class="forum">
        <div class="forum_comment"> ${username}: ${comment}</div>
        </div>
        `
        main1.appendChild(winnerEl);
        })
        }
    
      )
      .catch( (error) => console.log(error))
    </script>
<footer>
  <div class="write-a-comment">
  <form class="box2" id="WriteComment" action='#' method="GET">
    <h2>Write a comment</h2>
    <input type="text" name="username" placeholder="Enter an username" id="username">
    <input type="text" name="comment" placeholder="Write a comment..." id="comment">
    <input type="submit" name="submit" value="Send" onclick=' this.form.submit();'>
  </form>
  </div>
  </footer>

   <script>
    <?php $username=$_GET["username"]; echo "var username = '$username';"; $comment=$_GET["comment"]; echo "var comment = '$comment';"; ?>
      var url=''.concat('http://localhost/ProjectC/Model/forumPostComments.php?username=',username,'&comment=',comment);
      fetch(url,{method: 'POST'})
   </script>


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