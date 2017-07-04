--this is a comment--
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>

<?php

include('./shared/connection.php');
include('./shared/functions_inc.php');

session_start();
if(!isset($_SESSION['uname']))
    header('Location: index.php');
	
	
	$proj=$_SESSION['edit'];
	$desc=$_POST['description'];
	$tar=$_POST['target'];
	
	if(isset($_POST['check']))
	$check=1;
	else
	$check=0;
	
	//echo $proj;
	//echo $desc;
	//echo $tar;
	//echo $check;
	
	
	$sql="UPDATE `project` SET `description`='".$desc."',`target`='".$tar."',`check`=$check WHERE `proj_id`='".$proj."'";
	
	$res=mysqli_query($con,$sql);
	
	if($res)
	redirect('./budgetControl.php');
	else
	redirect('./budgetControl.php');
	
	?>
	
</body>
</html>
