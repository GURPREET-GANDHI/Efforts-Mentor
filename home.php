<?php
session_start();
if(!isset($_SESSION['uname']))
    header('Location: index.php');
	$un=$_SESSION['uname'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>MY Hours</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
<!--[if IE 6]>
<link rel="stylesheet" type="text/css" href="iecss.css" />
<![endif]-->
<style>
b{
padding-top:15px;
margin-top:15px;
color:#990000;
}

.as{padding-top:5px;
color:#990000;
}
.style3 {font-family: Georgia, "Times New Roman", Times, serif}
</style>
</head>
<body>
<div id="main_container">
  <div class="header">
    <div id="logo"><a href=""><img src="images/myhourslogo.png" alt="" width="178" height="60" border="0" /></a></div>
    <div class="right_header">
      <div class="top_menu">
       <a href="#" class="login"><?php
echo  $_SESSION['name'];
?>
</a><a href="logout.php" class="sign_up">Logout</a>
      </div>
      <div id="menu">
        <ul>
          <li><a class="current" href="home.php">Home</a></li>
          <li><a href="./totalPerHours.php">My Cases</a></li>
          <li><a href="#">Manage</a></li>
          <li><a href="./totalHours.php" target="_blank">Reports</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div id="middle_box">
    <div class="middle_box_content">
      </div>
  </div>
  <div>
    <table width="100%" height="285" >
      <tr>
        <td height="7" colspan="4"><hr /></td>
      </tr>

      <tr>
        <td height="36" colspan="4">
		<table width="100%">
		<tr>
		  <td width="25%"><center><a href="./timesheet.php"><img src="./images/Manager.png" width="200" height="200"/></a> <br /><font size="+1" color="#006600">Track</font></center></td>
		
		<?php  
		
		include('./shared/connection.php');
	    include('./shared/functions_inc.php');
		
		
		$sql="SELECT `admin_flag` FROM `login` WHERE `un`= '".$un."' ";
		$res=mysqli_query($con,$sql);
		$row=mysqli_fetch_array($res);
		
		if($row['admin_flag'])
		  echo '<td width="25%"><center><a href="./budgetControl.php"><img src="images/employee.png" width="200" height="200"/></a><br /><font size="+1" color="#006600">Budget Control</font></center> </td>';
		  
		  
		  ?>
		    <!--
		  <td width="25%"><center><a href="#"><img src="images/" width="180" height="200"/></a> <br /><font size="+1" color="#006600"></font></center>  </td>
		  
		  -->
		   <td width="25%"><center><a href="changepass.php"><img src="./images/changepass.png"/></a> <br /><font size="+1" color="#006600">Change Password</font></center>  </td>
		  </tr>
		  <tr><td colspan="4"><hr /></td></tr>
		</table>
		
		</td>
      </tr>
     
      <tr>
        <td height="36">&nbsp;</td>
        <td>&nbsp;</td>
        <th>&nbsp;</th>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="36">&nbsp;</td>
        <td colspan="3">&nbsp;</td>
      </tr>
      <tr>
        <td width="25%" height="36">&nbsp;</td>
        <td colspan="3">&nbsp;</td>
      </tr>
    </table>
  </div>
  <div id="main_content">
    <div class="clear"></div>
  </div>
  <div id="footer">
    <div class="copyright"> <img src="images/icon1.png"  height="30" width="50"alt="" /> </div>
    <div class="center_footer">&copy; Gurpreet Gandhi All Rights Reserved</div>
  </div>
</div>
</body>
</html>
