<html>
<body>
<?php
include('./shared/functions_inc.php');
include('./shared/connection.php');

$a=$_POST["username"];
$b=$_POST["password"];

  $SQL="SELECT * FROM `login` WHERE un='$a' ";
  $result=mysqli_query($con, $SQL);
  $num_rows= 0 ;
$row=mysqli_fetch_array($result);
 
if($b==$row['pass'])
{
echo "welcome";
session_start();
$_SESSION['uname']=$a;

$_SESSION['name']=$row['name'];
$_SESSION['upreg']=$row['uprn'];
redirect('home.php');
}
else
{
redirect('index.php');

}


?>

</body>
</head>