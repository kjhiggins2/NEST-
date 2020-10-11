<?php
session_start();
if ($_SESSION['username'] !== 'NEST') {
  header('location:login.php');
} else {
}
include 'header.php'
?>

    <section class="top-container">
      <div class="container">
    <div class="grid">
      <div class ="box">
       <i class="fas fa-dumbbell"></i>
        <h2>Workouts</h2>
          <?php
            // this is PHP
            echo('1,2,3 php<br/><br/>');
          ?>
          <a href="\workout.php" id ="tile-link">click here for latest workout</>
          </div>
        <div class ="box">
          <i class="fas fa-stethoscope"></i>
        <h2>Rehab</h2>
          <a href="https://calendly.com/riggs6781" id ="tile-link">click to schedule</>
          </div>
          <div class ="box">
            <i class="fas fa-apple-alt"></i>
        <h2>Nutrition</h2>
          <a href="#" id ="tile-link">click for Guidance</>
          </div>
          </div>
        </div>
    </section>
    <footer>
      <p> Gridbiz 20202</p>
    </footer>
  </div>
  </body>



</html>
