<html>
<body>
Hi
<?php
$con=mysqli_connect("localhost","root","root");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$sql="CREATE DATABASE med";
if (mysqli_query($con,$sql))
  {
  echo "Database dumb created successfully";
  }
else
  {
  echo "Error creating database: " . mysqli_error($con);
  }

$sql="use med";
if (mysqli_query($con,$sql))
  {
  echo "dumb successfully";
  }
else
  {
  echo "Error in dumb " . mysqli_error($con);
  }
$sql="CREATE TABLE aa(name varchar(10), pass varchar(10))";
if (mysqli_query($con,$sql))
  {
  echo "Table aa created successfully";
  }
else
  {
  echo "Error creating table: " . mysqli_error($con);
  }
$sql="INSERT INTO aa VALUES ('samradh','samradh')";
if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "1 record added";
?>
Completed
</body>
</html>