<html>
<body>
Hi
<?php
$con=mysqli_connect("localhost","root","");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
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
$sql="CREATE TABLE std(name varchar(10), father varchar(10), age number(3), sex varchar(5), rollno number(10), add varchar(20), telno number(12), email varchar(20), bg varchar(4) )";
if (mysqli_query($con,$sql))
  {
  echo "Table std created successfully";
  }
else
  {
  echo "Error creating table: " . mysqli_error($con);
  }
$sql="INSERT INTO std VALUES ('ankur','goyal',21,'male',111500074,'agra',05364245011,'ankur@gla.ac.in','a+')";
if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "1 record added";
?>
Completed
</body>
</html>