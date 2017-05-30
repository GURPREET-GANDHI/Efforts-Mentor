<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>

<a href="./home.php"><img src="./images/button(1).png"></a>
<table width="100%" border="2"  bordercolordark="#000099" > 

<?php

session_start();
if(!isset($_SESSION['uname']))
    header('Location: index.php');
	
	include('./shared/connection.php');
	include('./shared/functions_inc.php');
	
$per=$_SESSION['uname'];	
	
echo '<B><tr bgcolor="#00FFFF" align="center" class="form-group" bordercolor="#CC3333"><td>'; echo 'Case Id'; echo '</td><td>';echo 'Target'; echo '</td><td>'; echo 'Time Consumed'; echo '</td><td>'; echo 'Hours Left'; echo '</td><td>'; echo 'Percentage Used'; echo '</td></tr></B>';
	
	
$query="select `proj_id`, (select SUM(k.`dur`) from timesheet k where t.`proj_id`=k.`proj_id`) sum from timesheet t where t.`name`='". $per."' Group by `proj_id` Order by `proj_id`";

$res=mysqli_query($con, $query);



While($row=mysqli_fetch_array($res)){

$proj=$row['proj_id'];

$query1="SELECT target FROM project WHERE proj_id = '". $proj."' ";

//echo $query1;
$res1=mysqli_query($con, $query1);
$row1=mysqli_fetch_array($res1);

$average=0;
if( $row1['target'] != 0)
$average= ( $row['sum']/ $row1['target'])* 100;

//echo $row['proj_id']  .  $row['sum']  ;

$used= $row1['target']  -  $row['sum'];

	
	
echo '<B><tr align="center" bgcolor="#CCCCCC"  class="form-group" bordercolor="#CC3333"><td>'; echo $row['proj_id'] ; echo '</td><td>'; echo $row1['target']; echo '</td><td>'; echo ROUND($row['sum'],2); echo '</td><td>'; echo ROUND($used,2); echo '</td><td>'; echo ROUND($average,2) . '%'; echo '</td></tr></B>';




}


?>
</body>
</html>
