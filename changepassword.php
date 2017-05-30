<?php

include('./shared/functions_inc.php');
include('./shared/connection.php');
  session_start();
  
  
  $aa=$_POST["np"];
  
  $a=$_SESSION['name'];
  $SQL="UPDATE login SET pass ='".$aa."'  WHERE name ='".$a."' ";
  if (!mysqli_query($con,$SQL))
  {
  die('Error: ' . mysql_error());
  }
else
{
redirect('home.php');
}


?>