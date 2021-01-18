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
  </head>
  <!--End of head tag-->
  <body style="background-color:rgb(255, 198, 198)">
    <img src="img/covid.png" width="100%" height="auto">
    <div class="topnav">
      <div class="topnav-right">
        <a href="index.html">HOME</a>
        <a href="awareness.php">AWARENESS</a>
        <a href="stat.php">STATISTICS</a>
        <a href="contact.php">CONTACTS</a>
        <a class="active" href="review.php">REVIEW US</a>
      </div>
    </div>
  <h1><center>REVIEW US</center></h1>
  <div class="container">
  <div class="form">
    <form action="" method="POST">
            <table>
              <tr>
                  <td><b>Name</b></td>
                  <td><input type="text" name="name" size="40" placeholder="Your name" required></td>
              </tr>
              <tr>
                  <td><b>Email</b></td>
                  <td><input type="text" name="email" size="40" placeholder="Your email" required></td>
              </tr>
              <tr>
                  <td><b>Contact Number</b></td>
                  <td><input type="text" name="phone" size="40" placeholder="Your phone number (optional)"></td>
              </tr>
              <tr>
                  <td><b>Message</b></td>
                  <td>
                    <textarea name="message" placeholder="Type your message here..." rows="8" cols="80"></textarea>
                  </td>
              </tr>
            </table>
        <br>
      <center>
        <a onclick="validation();"><button type="submit" name="submit">Submit </button></a>

        <button type="reset" name="clear">Clear Entries</button>
      </center>
    </form>
  </div>
</div>
  <br>
    <div class="footer">
    		<p>COVID-19 Awareness by Amirah Haziqah &copy; 2020 - For Education Purposes</p>
    </div>
    <script>
    function validation()
      {
        alert("Thank you for submitting!!");
      }
    </script>
  </body>
  <!--End of body tag-->
</html>
