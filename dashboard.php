<?php session_start();

  if(isset($_SESSION['id']))
{
 ?>
      <h1> Dashboard </h1>
        <a href="logout.php">Logout</a>
  <?php } 
   else
   { 
      $error = $_SESSION['error']= "Your are Logged Out";
      header("Location: index.php");
   } 
?>