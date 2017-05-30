<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>

<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="./plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="./plugins/datepicker/datepicker3.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="./plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="./plugins/colorpicker/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="./plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="./plugins/select2/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="./dist/css/skins/_all-skins.min.css">

<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
<link type="text/css" rel="stylesheet" href="fieldset.css"/>
<title>Timesheet</title>

<link rel="stylesheet" href="New/autocomplete.css" type="text/css" media="screen">
<script src="New/jquery.js" type="text/javascript"></script>
<script src="New/dimensions.js" type="text/javascript"></script>
<script src="New/autocomplete.js" type="text/javascript"></script>
<script type="text/javascript">
function bmical()
{
var a=document.getElementById("weight").value;
var b=document.getElementById("height").value;
if(a!=""&&b!=""){
var c=parseInt(a);
var d=parseInt(b);
d=parseFloat(d/100);
d=d*d;
var e=parseFloat(c/d);
document.getElementById("bmi").value=e.toFixed(1);
}
if(a==""||b=="")
{
document.getElementById("bmi").value="";
}
}
function aak()
{

var d=document.getElementById("temp").value;
if(d!=""){
var c=parseFloat(d);
var b=1.8*c+32;
document.getElementById("tempf").value=b.toFixed(1);
}
else{
document.getElementById("tempf").value="";
}
}
function aaf()
{

var d=document.getElementById("tempf").value;
if(d!=""){
var c=parseFloat(d);
var b=(c-32)*(5/9);
document.getElementById("temp").value=b.toFixed(1);
}
else{
document.getElementById("temp").value="";
}
}

function validate(thisa) {
var d="";
var r=document.getElementById("sel_list");
for(i=0;i<r.options.length;i++)
{
d=d+r.options[i].value;
if(i!=r.options.length)
d=d+"#";
}
document.getElementById("hidden").value=d;
valid(thisa)
}

</script>

<script type="text/javascript">
$(function(){
	    setAutoComplete("optval", "results", "New/autocomplete.php?part=");
	});
	</script>
<script type="text/javascript">
function valid(thisa)
{
var a=confirm("Are you sure to submit");
if(a==true)
thisa.submit();
else
return false;
}



</script>

<script type="text/javascript"><!--
// Free JavaScript course - coursesweb.net

// create the object with methods to add and delete <option></option>
var adOption = new Object();
  // method that check if the option is already in list
  // receives the id of the <select></select> list, and box with the value for <option>
  adOption.checkList = function(list, optval) {
    var re = 0;           // variable that will be returned

    // get the <option> elements
    var opts = document.getElementById(list).getElementsByTagName('option');

    // if the option exists, sets re=1
    for(var i=0; i<opts.length; i++) {
      if(opts[i].value == document.getElementById(optval).value) {
        re = 1;
        break;
      }
    }

    return re;         // return the value of re
   };

   // method that adds <option>
  adOption.addOption = function(list, optval) {
    // gets the value for <option>
    var opt_val = document.getElementById(optval).value;

    // check if the user adds a value
    if(opt_val.length > 0) {
      // check if the value not exists (when checkList() returns 0)
      if(this.checkList(list, optval) == 0) {
        // define the <option> element and adds it into the list
        var myoption = document.createElement('option');
        myoption.value = opt_val;
        myoption.innerHTML = opt_val;
        document.getElementById(list).insertBefore(myoption, document.getElementById(list).firstChild);

        document.getElementById(optval).value = '';           // delete the value added in text box
      }
      else alert('The value "'+opt_val+'" already added');
    }
    else alert('Add a value for option');
  };

  // method that delete the <option>
  adOption.delOption = function(list, optval) {
    // gets the value of <option> that must be deleted
    var opt_val = document.getElementById(optval).value;

    // check if the value exists (when checkList() returns 1)
    if(this.checkList(list, optval) == 1) {
       // gets the <option> elements in the <select> list
      var opts = document.getElementById(list).getElementsByTagName('option');

      // traverse the array with <option> elements, delete the option with the value passed in "optval"
      for(var i=0; i<opts.length; i++) {
        if(opts[i].value == opt_val) {
          document.getElementById(list).removeChild(opts[i]);
          break;
        }
      }
	  document.getElementById("optval").value="";
    }
    else alert('The value "'+opt_val+'" not exist');
  }

  // method that adds the selected <option> in text box
  adOption.selOpt = function(opt, txtbox) { 
  document.getElementById(txtbox).value = opt; 
  }
  
--></script>


<script type="text/javascript">
function concd(thisa)
{
var aaa=thisa.mg.value;
var abb=thisa.dg.value;
var add=thisa.me.value;
var cnd=aaa+"  "+abb+"  "+add;
document.getElementById("optvall").value=cnd;
adOption.addOption('sel_list', 'optvall');
//document.getElementById("optval").value="";
document.getElementById("dg").value=" ";
//document.getElementById("fre").value="---";
document.getElementById("me").value=" ";
}
</script>



<style type="text/css">
<!--
.style1 {color: #ADE855}
-->
</style>
</head>

<body>

<?php
session_start();
if(!isset($_SESSION['uname']))
    header('Location: index.php');
	
		
	include('./shared/connection.php');
	include('./shared/functions_inc.php');
?>

<?php

$xy=$_POST['Edit'];
$_SESSION['edit']=$xy;
?>

<table width="100%" cellpadding="7"  >
  
  <tr>
    <td width="25px"><center>
    </center></td>
    <td  rowspan="7" bgcolor="#FFFFFF" class="glabody"><center><img src="images/tablehead.jpg" alt="d" width="98%" height="100" align="middle" class="glalogo"></center>
	  <p><a href="./home.php"><img src="./images/button(1).png"></a> 
	    
        <fieldset >
      </p>
	  <div>
	    <div align="center">
	      <h3 class="style1">Edit Project </h3>
	    </div>
	  </div>
	  <table width="100%"> 
 
 <br /><br />

<td rowspan="2" width="50%" align="left"><fieldset class="innerfieldset">	
 
           
			   <div class="col-md-6">
          <div class="box box-primary">
             <!-- /.form group -->
 
 <!-- sql code is here -->
				
				
				<?php
				
				$sqlQuery ="select * from project where proj_id= '$xy'";
				
				$res=mysqli_query($con,$sqlQuery);
				
				
				$row=mysqli_fetch_array($res);
				
				?>
				
				<!--  END --->
 
 
  <div class="form-group">
                <label>Project</label>
				<form action="Edit.php"  method="post" >
				
              <?php  echo '<input type="text" name="proj_id" id ="proj_id" disabled="disabled" value= '.$row['proj_id'].'  class="form-control select2" />';  ?>
				
                </div>
				
				
				
			  
			   <div class="form-group">
                
                <label>Target Hours</label>
				<?php echo '<input type="textarea" name="target" id="target" class="form-control select2"  value='.$row['target'].'  />'; ?>  
                
          
              </div>
 </div>
 
 
 
   </div>
            </div>
            <!-- /.box-body -->
         
          <!-- /.box -->
</fieldset>


</td>
<!--end -->
	
	
	
	<td rowspan="2" width="50%" align="left"><fieldset class="innerfieldset">	
 
           
			   <div class="col-md-6">
          <div class="box box-primary">
             <!-- /.form group -->
 
  <div class="form-group">
                <label>Description</label>
               <?php echo '<input type="textarea" name="description" id="description" class="form-control select2"  value='.$row['description'].'  />'; ?>  
              </div>
			  
			   <div class="form-group">
                <label> Budget Control  </label>
                <?php
				
				if($row['check'])
				echo '<input type="checkbox" name="check" id="check" checked="checked" value="Yes" />';
				else
				echo '<input type="checkbox" name="check" id="check"/>';
				
				?>
              </div>
 </div>
 

 
   <input type="submit" class="form-group"  name="Add" value="Save" >
 
  
   
   </div>
            </div>
            <!-- /.box-body -->
         
          <!-- /.box -->
</fieldset>


</td>
		  
			 

</table>

</form>

</body>
</html>
