<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<script type="text/javascript">




</script>



</head>

<body>

<a href="./home.php"><img src="./images/button(1).png"></a>
<table width="100%" border="2"  bordercolordark="#000099" > 

<br />
<?php

include('./shared/connection.php');
include('./shared/functions_inc.php');
	
?>
<?php
session_start();
if(!isset($_SESSION['uname']))
    header('Location: index.php');
	
	
	
	
echo '<B><tr bgcolor="#00FFFF" align="center" class="form-group" bordercolor="#CC3333"><td>'; echo 'Project Id'; echo '</td><td>';echo 'Description'; echo '</td><td>'; echo 'Target'; echo '</td><td>'; echo 'Budget Control'; echo '</td><td>'; echo 'Select'; echo '</td></tr></B>';
	
	
$query="SELECT `proj_id`, `description`, `target`, `check` FROM `project` WHERE 1";
$res=mysqli_query($con, $query);

echo '<form action="proj_db.php" method="POST" >';

While($row=mysqli_fetch_array($res)){
	
echo '<B><tr align="center" bgcolor="#CCCCCC"  class="form-group" bordercolor="#CC3333"><td>'; echo $row['proj_id'] ; echo '</td><td>'; echo $row['description']; echo '</td><td>'; echo Round($row['target'],2); echo '</td><td>'; 


if($row['check']){

echo '<input type="checkbox" checked="checked" disabled="disabled" name="yes" />';

}

else

echo '<input type="checkbox" disabled="disabled" name="yes" />';

 echo '</td><td>';

echo '<input type="image" src="images/button_2.png" alt="Submit Form" name="Edit" value=' .$row['proj_id'].'  />';





 echo '</td></tr></B>';



}


?>



</body>
</html>
