<?php
  include_once "db.php";

  $data1 = '';
  $data2 = '';

  $sql = "SELECT * FROM `datasets`";
  $result = mysqli_query($link, $sql) or die( mysqli_error($link));
  
    //while ($row = $result-> fetch_assoc()) {
  while($row = mysqli_fetch_array($result)){
    $data1 = $data1 . '"' . $row['data1'] . '",';
    $data2 = $data2 . '"' . $row['data2'] . '",';
  }

  $data1 = trim($data1, ",");
  $data2 = trim($data2, ",");
?>

<!DOCTYPE html>
<html>
  <head>
    <title>COVID-19 Awareness</title>
    <link rel="icon" type="image/png" href="img/308.jpg">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    
    <!--Font Awesome for icons-->
    <script src="https://kit.fontawesome.com/3fad1024f6.js" crossorigin="anonymous"></script> 

    <!--CSS File-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!--Chartsss-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>

  </head>
  <!--End of head tag-->
  <body style="background-color:rgb(255, 198, 198)">
      <img src="img/covid.png" width="100%" height="auto">
      <div class="topnav">
        <div class="topnav-right">
          <a href="index.html">HOME</a>
          <a href="awareness.php">AWARENESS</a>
          <a class="active" href="stat.php">STATISTICS</a>
          <a href="contact.php">CONTACTS</a>
          <a href="review.php">REVIEW US</a>
        </div>
      </div>
    
      <div class="container">
        <h1 style="text-align: center;">Statistics on COVID-19 in Malaysia</h1><br><br>
          <div class="info">
            <canvas id="myChart"></canvas>
          </div>
          <br><hr>
          <div class="info">
            <canvas id="myChart2"></canvas>
          </div>
      </div>
      <br>
    <div class="footer">
    		<p>COVID-19 Awareness by Amirah Haziqah &copy; 2020 - For Education Purposes</p>
    </div>

    <script>
      var myChart = document.getElementById('myChart').getContext('2d');
      var myChart2 = document.getElementById('myChart2').getContext('2d');

      //Global options
      Chart.defaults.global.defaultFontSize = 12;
      Chart.defaults.global.defaultFontColor = '#777';

      var popChart = new Chart(myChart, {
        type: 'bar',
        data: {
          labels: ['Jan 01', 'Jan 02', 'Jan 03',
                   'Jan 04', 'Jan 05', 'Jan 06',
                   'Jan 07', 'Jan 08', 'Jan 09',
                   'Jan 10', 'Jan 11', 'Jan 12'],
          datasets: [
          {
            label: 'Active Cases',
            data: [<?php echo $data1; ?>],
            backgroundColor: 'skyblue',
            borderWidth: 1.5,
            borderColor: '#777',
            hoverBorderWidth: 3,
            hoverBorderColor: '#000'
          },
          { label: 'Death Cases',
            data: [<?php echo $data2; ?>],
            backgroundColor: 'pink',
            borderWidth: 1.5,
            borderColor: '#777',
            hoverBorderWidth: 3,
            hoverBorderColor: '#000'
          }]
        },
        options: {
          scales: {
            scales: {
              yAxes: [{beginAtZero: false}], 
              xAxes: [{autoskip: true, maxTicketsLimit: 20}]}
            },
            title: {
              display: true,
              text: 'Total Active and Death Covid Cases in Malaysia in January 2021',
              fontSize: 25,
            },
            legend: {
              position: 'right',
              labels: {
                fontColor: '#000'
              }
          }
        }
      });

      var popChart = new Chart(myChart2, {
        type: 'line',
        data: {
          labels: ['Jan 01', 'Jan 02', 'Jan 03',
                   'Jan 04', 'Jan 05', 'Jan 06',
                   'Jan 07', 'Jan 08', 'Jan 09',
                   'Jan 10', 'Jan 11', 'Jan 12'],
          datasets: [{
            label: 'Death Cases',
            data: [115078, 117373, 119077, 
                   120818, 122845, 125438, 
                   128465, 131108, 133559, 
                   135992, 138224, 141533],
            backgroundColor: '#E9D3FF',
            borderWidth: 1.5,
            borderColor: '#777',
            hoverBorderWidth: 3,
            hoverBorderColor: '#000'
          }],
        },
        options: {
          title: {
            display: true,
            text: 'Total Overall Covid Cases in Malaysia in January 2021',
            fontSize: 25,
          },
          legend: {
            position: 'right',
            labels: {
              fontColor: '#000'
            }
          }
        }
      });
    </script>
  </body>
  <!--End of body tag-->
</html>
