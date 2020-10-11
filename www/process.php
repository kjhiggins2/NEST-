<?php
session_start();
if ($_POST['password'] !== 'NorthEastSportsTraining') {
  header('location:login.php');
}
$_SESSION['username'] = 'NEST';
  header('location:dashboard.php');
?>
<html>
<div>
YAY
</div>
</html>
