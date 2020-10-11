<?php
session_start();
if ($_SESSION['username'] !== 'NEST') {
  header('location:login.php');
} else {


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=">
  <title>NorthEast Sports Training </title>

<link rel="stylesheet" href="style.css">
<script src="https://kit.fontawesome.com/0270c50f45.js" crossorigin="anonymous"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
 <div class="float-sm">
  <div class="fl-fl float-fb">
    <i class="fa fa-facebook"></i>
    <a href="" target="_blank"> Like us!</a>
  </div>
  <div class="fl-fl float-tw">
    <i class="fa fa-twitter"></i>
    <a href="" target="_blank">Follow us!</a>
  </div>
  <div class="fl-fl float-gp">
    <i class="fa fa-google-plus"></i>
    <a href="" target="_blank">Recommend us!</a>
  </div>
  <div class="fl-fl float-rs">
    <i class="fa fa-rss"></i>
    <a href="" target="_blank">Follow via RSS</a>
  </div>
  <div class="fl-fl float-ig">
    <i class="fa fa-instagram"></i>
    <a href="" target="_blank">Follow us!</a>
  </div>
  <div class="fl-fl float-pn">
    <i class="fa fa-pinterest"></i>
    <a href="" target="_blank">Follow us!</a>
  </div>
</div>
  <div class="wrapper">
    <nav class="main-nav">
         <ul>
      <img src= "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fs3-media4.fl.yelpcdn.com%2Fbphoto%2F4qKyofHI0CFlwh3ucLpU0A%2Fo.jpg&f=1&nofb=1">
      <li>
        <a href="#">Home</a>
      </li>
      <li>
        <a href="#">About</a>
      </li>
      <li>
        <a href="#">Serivces</a>
      </li>
      <li>
        <a href="#">Contact</a>
      </li>
      <li>
        <a href="/index.php">Login</a>
      </li>
        </ul>
    </nav>
    <section class="top-container-work">
      <div class="container">
    <iframe src="https://docs.google.com/spreadsheets/d/1k0VkpNW7eR6EPG9h6zJLVAgfbPZuV_qGBZr8pvhjBNw/edit?usp=sharing" style="border:0px #ffffff none;" scrolling="yes" frameborder="0" marginheight="0px" marginwidth="0px" height="600px" width="100%" allowfullscreen>
          </div>
        </div>
    </section>






    <footer>

    </footer>
  </div>
  </body>



</html>
}
