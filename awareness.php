<!DOCTYPE html>
<html>
  <head>
    <title>COVID-19 Awareness</title>
    <link rel="icon" type="image/png" href="img/308.jpg">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    
    <!--Font Awesome for icons-->
    <script src="https://kit.fontawesome.com/3fad1024f6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <style>
      .mySlides {display:none;}
     </style>
  </head>
<!--End of head tag-->
  <body style="background-color:rgb(255, 198, 198)">
    <img src="img/covid.png" width="100%" height="auto">
    <div class="topnav">
      <div class="topnav-right">
        <a href="index.php">HOME</a>
        <a class="active" href="awareness.php">AWARENESS</a>
        <a href="stat.php">STATISTICS</a>
        <a href="contact.php">CONTACTS</a>
        <a href="review.php">REVIEW US</a>
      </div>
    </div>

    
   <div class="container">
      <h1>AWARENESS VIDEO</h1>
        <h3>WAYS TO WASH YOUR HANDS PROPERLY</h3>
          <video src="vid/hands.mp4" type="video/mp4" controls style="width:600px; height:400px;"></video>
          
    <br><br>
    <hr>
    <h1>AWARENESS POSTERS</h1>
    <div class="container">
      <div style="max-width:500px; margin:auto;">
        <img class="mySlides" src="img/poster1.jpg" style="width:100%">
        <img class="mySlides" src="img/poster2.jpg" style="width:100%">
        <img class="mySlides" src="img/poster3.png" style="width:100%">
        <img class="mySlides" src="img/poster4.jpg" style="width:100%">
        <img class="mySlides" src="img/poster5.jpg" style="width:100%">
        <img class="mySlides" src="img/poster6.jpg" style="width:100%">
        <img class="mySlides" src="img/poster7.jpg" style="width:100%">
        <img class="mySlides" src="img/poster8.jpg" style="width:100%">
        <img class="mySlides" src="img/covid3c.jfif" style="width:100%">
      </div> 
    </div>
    <center>
      <a onclick="plusDivs(-1)"><i class="fas fa-arrow-circle-left" style="font-size: 64px;"></i>
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
      <a onclick="plusDivs(-1)"><i class="fas fa-arrow-circle-right" style="font-size: 64px;"></i>
    </center>
    </div>
  <br><br>
  <div class="footer">
      <p>COVID-19 Awareness by Amirah Haziqah &copy; 2020 - For Education Purposes</p>
  </div>

      <script>
        var slideIndex = 1;
        showDivs(slideIndex);

        function plusDivs(n) {
          showDivs(slideIndex += n);
        }

        function showDivs(n) {
          var i;
          var x = document.getElementsByClassName("mySlides");
          if (n > x.length) {slideIndex = 1}
          if (n < 1) {slideIndex = x.length}
          for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
          }
          x[slideIndex-1].style.display = "block";  
        }
      </script>
      
      <br><br>
   </body>
   <!--End of body tag-->
</html>
