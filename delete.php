<?php

session_start();
if(!isset($_SESSION['uname']))
    header('Location: index.php');
	
include('./shared/connection.php');
include('./shared/functions_inc.php');

	
$line=$_POST['line_no'];

foreach($_POST['line_no'] as $selected){

$q =" DELETE FROM timesheet WHERE line_no= '".$selected."' ";

//echo $q;


$res=mysqli_query($con , $q);

if(!$res)
echo $q;

}



 redirect('./timesheet.php');


?>