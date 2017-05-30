<html>
<head>


<script type="text/javascript">
function go(qaq)
{
aa=qaq.np.value;
ab=qaq.cp.value;
if(aa==""||ab=="")
alert("Please Enter Password");
else if(aa==ab)
qaq.submit();
else
alert("Passwords are not same");

}
</script>

<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
<link type="text/css" rel="stylesheet" href="fieldset.css"/>
<title>My Hours</title>
</head>
<body >



<form action="changepassword.php" name="qaq" method="post">

<table width="100%" cellpadding="7"  style="margin-top:150">
  
  <tr>
    <td width="15%">&nbsp;</td>
    <th colspan="4" rowspan="7" bgcolor="#FFFFFF" class="glabody"><center><img src="images/tablehead.jpg" alt="d" width="98%" height="100" align="middle" class="glalogo"></center>
	  <fieldset >
	  <legend>Change Password</legend>
	  <table width="100%">
	 
	  
	  <tr><td colspan="2"></td></tr>
	  
	  <tr>
	  <th width="50%">Enter New Password</th>
	  <td width="50%"><input type="password" name="np" /></td>
	  </tr>
	  <tr>
	  
	  <tr><td colspan="2"></td></tr>
	  
	  <th width="50%">Confirm Password</th>
	  <td width="50%"><input type="password" name="cp" /></td>
	  </tr>
	  
	  <tr><td colspan="2"></td></tr>
	  
	  <tr><td colspan="2"></td></tr>
	  <tr>
	  <th colspan="2"><a href="javascript:go(qaq)"><img src="images/sss.png" width="100" height="30" /></a></th> &nbsp;<th> <a href="./home.php"><img src="./images/button(1).png"  width="100" height="30"></a>
	  </th></tr>
	  </table>
	  


      </fieldset>
	  
	</th>
    <td width="15%"></td>
  </tr>


</table>
</form>
</body>
</html>
 




