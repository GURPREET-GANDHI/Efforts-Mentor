<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>My Hours</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link type="text/css" rel="stylesheet" href="css/bootstrap.css"/>
	<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery.js"></script>
<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
<!--[if IE 6]>
<link rel="stylesheet" type="text/css" href="iecss.css" />
<![endif]-->
<script type="text/javascript">
window.history.forward();
function noBack() {
window.history.forward();
}
</script>
</head>
<body onload="noBack();" onpageshow="if(event.persisted) noBack();" onunload="">
<div id="main_container">
  <div class="header">
    <div id="logo"><a href="#"><img src="images/myhourslogo.png" alt="" width="162" height="54" border="0" /></a></div>
    <div class="right_header">
      <div class="top_menu"> <a href="#mymodal" class="login" data-toggle="modal">Login</a>
	<div class="modal hide fade" id="mymodal" aria-hidden="true">
		<div class="modal-header" style= "background-color: #F8F8F8">
		         <font face="monotype corosiva" size="6"  color="green"><center>Login Here</center></font>
		</div>
		<div class="modal-body">
			<form action="login.php" method="post">
				<br>

				<font face="gothic" size="4">USERNAME :</font> <input type="text" name="username" class="span3" 
                                                                placeholder="Enter Username Here" required="required"/><br><br>               
				
				<font face="gothic" size="4">PASSWORD :</font> <input type="password" name="password" class="span3" required="required" 
                                                                placeholder="Enter Password Here"/><br><br>                                
				<button type="submit" class="btn btn-success">Login</button>&nbsp;&nbsp;
				<button type="reset" class="btn">Clear</button>
			</form>
		</div>
		<div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
		</div>
	</div><a href="#" class="sign_up">ADMIN</a> </div>
      <div id="menu">
        <ul>
          <li><a class="current" href="#">Home</a></li>
          <li><a href="aboutus.php">About Us</a></li>
          <li><a href="#">Services</a></li>
          <li><a href="#">Contact Us</a></li>
        </ul>
      </div>
    </div>
  </div>
  <img src="images/jk.jpg" width="100%"/>
  <div id="middle_box">
    <div class="middle_box_content">
	
	
	</div>
  </div>

  <div id="main_content">
    
    <div class="clear"></div>
  </div>
  <div class="pattern_bg">
    <div class="pattern_box">
      <div class="pattern_box_icon"><img src="images/icon1.png" alt="" width="70" height="112" /></div>
      <div class="pattern_content">
        <h1><span class="blue">MyHours</span></h1>
        <p class="pat">My Hours is a Time Tracking service you'll love using every day!</p>
      </div>
    </div>
    <div class="pattern_box">
      <div class="pattern_box_icon"><img src="images/icon2.png" alt="" width="70" height="112" /></div>
      <div class="pattern_content">
        <h1><span class="blue"> Track It</span></h1>
        <p class="pat">Now easily track ur activies. </p>
      </div>
    </div>
  </div>
  <div id="footer">
    <div class="copyright"> <img src="images/icon1.png"  height="50" width="80"alt="" /> </div>
    <div class="center_footer">&copy; Gurpreet Gandhi All Rights Reserved</div>

  </div>
</div>
</html>
