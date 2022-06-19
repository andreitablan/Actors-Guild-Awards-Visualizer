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
    <h2 style="text-align: center;">Statistic 3</h2>  
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

  <button type="button" class="collapsible">How many men and women were nominated</button>
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
    <div class="canvas3">
      <canvas id="chart"></canvas>
    </div>

    <?php
    $action=5;
    include("../Controller/statisticsController.php");
    ?>

    <button id="downloadWebP" class="button">Export as webP</button>
    <button id="downloadSVG" class="button">Export as SVG</button>
    <button id="downloadCSV" class="button">Export as CSV</button>
    <button id="downloadPNG" class="button">Export as PNG</button>

    <script>
      men = '<?php echo $men; ?>';
      women = '<?php echo $women; ?>';

      year = '<?php echo $year; ?>';
      const data = {
        labels: ['men', 'women'],
        datasets: [{
          label: 'Men and Women',
          data: [men, women],
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
        }]

      };
      const config = {
        type: 'bar',
        data: data,
        options: {
          title: {
            display: true,
            responsive:false,
            maintainAspectRatio:false,
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
          men,
          women
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
        var csv = "";
        if (csv == null) return;
        filename = args.filename || 'chart-data.csv';
        men = args.men;
        women = args.women;
        year = args.year;
        csv += "year,men,women\n";
        csv += year + "," + men + "," + women;

        if (!csv.match(/^data:text\/csv/i)) {
          csv = 'data:text/csv;charset=utf-8,' + csv;
        }

        data = encodeURI(csv);
        link = document.createElement('a');
        link.setAttribute('href', data);
        link.setAttribute('download', filename);
        document.body.appendChild(link); 
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
      $action=6;
      include("../Controller/statisticsController.php");
      ?>

      function downloadSVG() {

        people = `

        <rect x="50" y="120" width="100" height="<?php echo $menHeight?>" style="fill:pink;stroke-width:3;stroke:rgb(0,0,0)" />
        <rect x="200" y="120" width="100" height="<?php echo $womenHeight?>" style="fill:orange;stroke-width:3;stroke:rgb(0,0,0)" />
                        
        <text x="10" y="50" style="fill:red;">Year: <?php echo $year?></text>
        <text x="10" y="75" style="fill:pink;">Men: <?php echo $men?></text>
        <text x="10" y="100" style="fill:blue;">Women: <?php echo $women?></text>
        `;


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