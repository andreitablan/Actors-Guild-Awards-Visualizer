<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Actors Guild Awards Visualizer</title>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>

<body>

  <header id="showcase">
    <h1>Statistics2</h1>
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

  <section id="section-b">
    <br>
    <br>
    <h3>&emsp;Choose a statistic type:</h3>
    <br>
  </section>

  <button type="button" class="collapsible">How many persons were nominated to each category</button>
  <div class="content">
    <form method="get">
      <div class="fallbackYearPicker">
        <div>
          <span>
            <label for="year">Year:</label>
            <select id="year" name="year" onchange='if(this.value != 0) { this.form.submit(); }'>
              <option>Select year</option>
              <option>2022</option>
              <option>2021</option>
              <option>2020</option>
              <option>2019</option>
              <option>2018</option>
              <option>2017</option>
              <option>2016</option>
              <option>2015</option>
              <option>2014</option>
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
    <?php

    ?>
    <div style="width: 600px;">
      <canvas id="chart" width="400" height="400"></canvas>
    </div>


    <?php
    require '../vendor/autoload.php';
    include('../Model/config.php');
    include_once('../Model/post.php');

    $post = new Post($users);

    $category1 = $post->getPersonsByCategory("FEMALE ACTOR IN A LEADING ROLE");
    $category2 = $post->getPersonsByCategory("MALE ACTOR IN A LEADING ROLE");
    $category3 = $post->getPersonsByCategory("FEMALE ACTOR IN A SUPPORTING ROLE");
    $category4 = $post->getPersonsByCategory("MALE ACTOR IN A SUPPORTING ROLE");
    $category5 = $post->getPersonsByCategory("FEMALE ACTOR IN A DRAMA SERIES");
    $category6 = $post->getPersonsByCategory("MALE ACTOR IN A DRAMA SERIES");
    $category7 = $post->getPersonsByCategory("FEMALE ACTOR IN A COMEDY SERIES");
    $category8 = $post->getPersonsByCategory("MALE ACTOR IN A COMEDY SERIES");
    $category9 = $post->getPersonsByCategory("FEMALE ACTOR IN A TELEVISION MOVIE OR LIMITED SERIES");
    $category10 = $post->getPersonsByCategory("MALE ACTOR IN A TELEVISION MOVIE OR LIMITED SERIES");
    $category11 = $post->getPersonsByCategory("CAST IN A MOTION PICTURE");
    $category12 = $post->getPersonsByCategory("ENSEMBLE IN A COMEDY SERIES");
    $category13 = $post->getPersonsByCategory("ENSEMBLE IN A DRAMA SERIES");
    $year = $post->getYear();


    ?>
    <button id="downloadWebP" class="button">Export as webP</button>
    <button id="downloadSVG" class="button">Export as SVG</button>
    <button id="downloadCSV" class="button">Export as CSV</button>
    <button id="downloadPNG" class="button">Export as PNG</button>

    <script>
      category1 = '<?php echo $category1; ?>';
      category2 = '<?php echo $category2; ?>';
      category3 = '<?php echo $category3; ?>';
      category4 = '<?php echo $category4; ?>';
      category5 = '<?php echo $category5; ?>';
      category6 = '<?php echo $category6; ?>';
      category7 = '<?php echo $category7; ?>';
      category8 = '<?php echo $category8; ?>';
      category9 = '<?php echo $category9; ?>';
      category10 = '<?php echo $category10; ?>';
      category11 = '<?php echo $category11; ?>';
      category12 = '<?php echo $category12; ?>';
      category13 = '<?php echo $category13; ?>';
      year = '<?php echo $year; ?>';
      const data = {
        labels: [
          1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13
        ],
        datasets: [{
            label: '1 - FEMALE ACTOR IN A LEADING ROLE',


            data: [category1, category2, category3, category4, category5, category6, category7, category8, category9, category10, category11, category12, category13],
            backgroundColor: [
              'rgba(255, 99, 132, 0.2)',
              'rgba(255, 159, 64, 0.2)',
              'rgba(255, 205, 86, 0.2)',
              'rgba(75, 192, 192, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(153, 102, 255, 0.2)',
              'rgba(201, 203, 207, 0.2)'
            ],
            borderColor: [
              'rgb(255, 99, 132)',
              'rgb(255, 159, 64)',
              'rgb(255, 205, 86)',
              'rgb(75, 192, 192)',
              'rgb(54, 162, 235)',
              'rgb(153, 102, 255)',
              'rgb(201, 203, 207)'
            ],
            borderWidth: 1
          }, {
            label: '2 - MALE ACTOR IN A LEADING ROLE'
          },
          {
            label: '3 - FEMALE ACTOR IN A SUPPORTING ROLE'
          },
          {
            label: '4 - MALE ACTOR IN A SUPPORTING ROLE'
          },
          {
            label: '5 - FEMALE ACTOR IN A DRAMA SERIES'
          },
          {
            label: '6 - MALE ACTOR IN A DRAMA SERIES'
          },
          {
            label: '7 - FEMALE ACTOR IN A COMEDY SERIES'
          },
          {
            label: '8 - MALE ACTOR IN A COMEDY SERIES'
          },
          {
            label: '9 - FEMALE ACTOR IN A TELEVISION MOVIE OR LIMITED SERIES'
          },
          {
            label: '10 - MALE ACTOR IN A TELEVISION MOVIE OR LIMITED SERIES'
          },
          {
            label: '11 - CAST IN A MOTION PICTURE'
          },
          {
            label: '12 - ENSEMBLE IN A COMEDY SERIES'
          },
          {
            label: '13 - ENSEMBLE IN A DRAMA SERIES'
          }
        ]

      };
      const config = {
        type: 'bar',
        data: data,
        options: {
          title: {
            display: true,
            text: 'Chart Title'
          },
          scales: {
            y: {
              beginAtZero: true
            }
          },
          plugins: {
            legend: {
              display: true,
              position: 'right',
              color: 'red'
            }
          }
        },
      };

      var chart = new Chart(
        document.getElementById('chart'),
        config
      );

      document.getElementById("downloadCSV").addEventListener("click", function() {
        downloadCSV({
          filename: "chart-data.csv",
          year,
          category1,
          category2,
          category3,
          category4,
          category5,
          category6,
          category7,
          category8,
          category9,
          category10,
          category11,
          category12,
          category13
        })
      });
      document.getElementById("downloadPNG").addEventListener("click", function() {
        downloadPNG();
      });
      document.getElementById("downloadSVG").addEventListener("click", function() {
        downloadSVG();
      });
      document.getElementById("downloadWebP").addEventListener("click", function() {
        downloadWebP();
      });

      function downloadCSV(args) {
        var data, filename, link;
        var csv = "year,FEMALE ACTOR IN A LEADING ROLE,MALE ACTOR IN A LEADING ROLE,FEMALE ACTOR IN A SUPPORTING ROLE,MALE ACTOR IN A SUPPORTING ROLE,FEMALE ACTOR IN A DRAMA SERIES,MALE ACTOR IN A DRAMA SERIES,FEMALE ACTOR IN A COMEDY SERIES,MALE ACTOR IN A COMEDY SERIES,FEMALE ACTOR IN A TELEVISION MOVIE OR LIMITED SERIES,MALE ACTOR IN A TELEVISION MOVIE OR LIMITED SERIES,CAST IN A MOTION PICTURE,ENSEMBLE IN A COMEDY SERIES,ENSEMBLE IN A DRAMA SERIES\n";
        csv += year + "," + category1 + "," + category2 + "," + category3 + "," + category4 + "," + category5 + "," + category6 + "," + category7 + "," + category8 + "," + category9 + "," + category10 + "," + category11 + "," + category12 + "," + category13;

        if (csv == null) return;

        filename = 'chart-data.csv';

        if (!csv.match(/^data:text\/csv/i)) {
          csv = 'data:text/csv;charset=utf-8,' + csv;
        }

        data = encodeURI(csv);
        link = document.createElement('a');
        link.setAttribute('href', data);
        link.setAttribute('download', filename);
        document.body.appendChild(link); // Required for FF
        link.click();
        document.body.removeChild(link);
      }

      function downloadPNG() {
        chart.options.title.text = 'How many people';
        chart.update({
          duration: 0
        });
        var link = document.createElement('a');
        link.href = chart.toBase64Image();
        link.download = 'chart.png';
        link.click();
        chart.options.title.text = 'Chart Title';
        chart.update({
          duration: 0
        });
      }
      /*
      function downloadSVG(){
      let svgData: string = chart.svgObject.outerHTML; 
          svgData = '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">' + svgData + "</svg>"; 
          let svgBlob: Blob = new Blob([svgData], {type:"image/svg+xml;charset=utf-8"}); 
          let svgUrl: string = URL.createObjectURL(svgBlob); 
          let downloadLink: HTMLAnchorElement = document.createElement('a'); 
          downloadLink.rel='nofollow' href = svgUrl; 
          downloadLink.download = 'chart.svg'; 
          document.body.appendChild(downloadLink); 
          downloadLink.click(); 
          document.body.removeChild(downloadLink); 
      }
      */
      function downloadWebP() {
        chart.options.title.text = 'New Chart Title';
        chart.update({
          duration: 0
        });
        var link = document.createElement('a');
        link.href = chart.toBase64Image();
        link.download = 'chart.webp';
        link.click();
        chart.options.title.text = 'Chart Title';
        chart.update({
          duration: 0
        });
      }
    </script>

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