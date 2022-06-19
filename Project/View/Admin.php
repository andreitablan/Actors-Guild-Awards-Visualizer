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
    <h2 style="text-align: center;">Actors Guild Awards Visualizer</h2>
    <h2 style="text-align: center;">Admin page</h2>
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
    <div id="schimba">
        <form class="box" id="LoginForm" action='#' onsubmit="return false" method="GET">
            <h2>Login</h2>
            <input type="text" name="username" placeholder="Enter Admin Username" id="username">
            <input type="password" name="password" placeholder="Enter Password" id="password">
            <input type="submit" name="submit" value="Login" onclick="login()">
        </form>
    </div>
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

        function login() {

            var data = new FormData(document.getElementById("LoginForm"));

            fetch("users.php", {
                    method: "POST",
                    body: data
                })
                .then((res) => {
                    return res.text();
                })
                .then((txt) => {
                    if (txt == "OK") {
                        loadDoc();
                    } else {
                        alert(txt);
                    }
                });
            return false;
        }

        function loadDoc() {
            const xhttp = new XMLHttpRequest();
            xhttp.onload = function() {
                document.getElementById("schimba").innerHTML = this.responseText;
            }
            xhttp.open("GET", "data.php", true);
            xhttp.send();
        }
    </script>


</body>

</html>