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
  <h2 style="text-align: center;">Actors Guild Awards Visualizer</h2>
    <h2 style="text-align: center;">Statistic 2</h2>
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

  <section id="section-b">
    <br>
    <br>
    <h3>&emsp;Choose a statistic type:</h3>
    <br>
  </section>

  <button type="button" class="collapsible">How many persons were nominated to each category</button>
  <div class="content">
    <form class="choseform" method="get">
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
    <div class="canvas2">
      <canvas id="chart"></canvas>
    </div>


    <?php
    $action=3;
    include("../Controller/statisticsController.php");

    ?>
    <button id="downloadWebP" class="button">Export as webP</button>
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
          "F.A-L.R",
          'M.A-L.R',
          'F.A-S.R',
          'M.A-S.R',
          'F.A-D.S',
          'M.A-D.S',
          'F.A-C.S',
          'M.A-C.S',
          'F.A-TVM/L.S',
          'M.A-TVM/L.S',
          'C.M.P',
          'E.C.S',
          'E.D.S'
        ],
        datasets: [{
            label: 'Number of people',
            data: [category1,category2,category3,category4,category5,category6,category7,category8,category9,category10,category11,category12,category13],
            fill: false,
            borderColor: 'rgb(75, 192, 192)',
            tension: 0.1
          }]
       };
      const config = {
        type: 'line',
        data: data,
        options: {
          title: {
            display: true,
            responsive:true,
            maintainAspectRatio:false,
            text: 'Chart Title'
          },
          scales: {
            y: {
              beginAtZero: true
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

      <?php
      $action=4;
      include("../Controller/statisticsController.php");
  
      ?>

      function downloadSVG() {
        //let svgData= chart;

        people = `
        <line x1="100" y1="200" x2="1400" y2="200" style="stroke:black;stroke-width:2" />
        <line x1="100" y1="200" x2="100" y2="700" style="stroke:black;stroke-width:2" />
        <line x1="100" y1="<?php echo $category1?>0" x2="200" y2="<?php echo $category2?>0" style="stroke:rgb(255,0,0);stroke-width:2" />
        <line x1="200" y1="<?php echo $category2?>0" x2="300" y2="<?php echo $category3?>0" style="stroke:rgb(255,0,0);stroke-width:2" />
        <line x1="300" y1="<?php echo $category3?>0" x2="400" y2="<?php echo $category4?>0" style="stroke:rgb(255,0,0);stroke-width:2" />
        <line x1="400" y1="<?php echo $category4?>0" x2="500" y2="<?php echo $category5?>0" style="stroke:rgb(255,0,0);stroke-width:2" />
        <line x1="500" y1="<?php echo $category5?>0" x2="600" y2="<?php echo $category6?>0" style="stroke:rgb(255,0,0);stroke-width:2" />
        <line x1="600" y1="<?php echo $category6?>0" x2="700" y2="<?php echo $category7?>0" style="stroke:rgb(255,0,0);stroke-width:2" />
        <line x1="700" y1="<?php echo $category7?>0" x2="800" y2="<?php echo $category8?>0" style="stroke:rgb(255,0,0);stroke-width:2" />
        <line x1="800" y1="<?php echo $category8?>0" x2="900" y2="<?php echo $category9?>0" style="stroke:rgb(255,0,0);stroke-width:2" />
        <line x1="900" y1="<?php echo $category9?>0" x2="1000" y2="<?php echo $category10?>0" style="stroke:rgb(255,0,0);stroke-width:2" />
        <line x1="1000" y1="<?php echo $category10?>0" x2="1100" y2="<?php echo $category11?>0" style="stroke:rgb(255,0,0);stroke-width:2" />
        <line x1="1100" y1="<?php echo $category11?>0" x2="1200" y2="<?php echo $category12?>0" style="stroke:rgb(255,0,0);stroke-width:2" />
        <line x1="1200" y1="<?php echo $category12?>0" x2="1300" y2="<?php echo $category13?>0" style="stroke:rgb(255,0,0);stroke-width:2" />

        `;


        //let svgData= chart.outerHTML; 
        svgData = '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">' + people + "</svg>";

        let svgBlob = new Blob([svgData], {
          type: "image/svg+xml;charset=utf-8"
        });
        let svgUrl = URL.createObjectURL(svgBlob);
        let downloadLink = document.createElement('a');
        downloadLink.href = svgUrl;
        downloadLink.download = 'chart.svg';
        document.body.appendChild(downloadLink);
        downloadLink.click();
        document.body.removeChild(downloadLink);
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