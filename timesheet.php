<?php
session_start();
if(!isset($_SESSION['uname']))
    header('Location: index.php');
?>
<html>
<head>
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


</head>
<body >



<form action="timesheet_db.php" name="thisa" method="post" autocomplete="off" >

<?php

$e=$_SESSION['uname'];

include('./shared/connection.php');
  $SQL="SELECT * FROM `login` where un='$e' ";
  $result=mysqli_query($con, $SQL);
  $num_rows= 0 ;
$row=mysqli_fetch_array($result);
//if($b==$row['pass'])


?>
<table width="100%" cellpadding="7"  >
  
  <tr>
    <td width="25px"><center>
    </center></td>
    <td  rowspan="7" bgcolor="#FFFFFF" class="glabody"><center><img src="images/tablehead.jpg" alt="d" width="98%" height="100" align="middle" class="glalogo"></center>
	<a href="./home.php"><img src="./images/button(1).png"></a>
	  <fieldset >
<legend >Personal Details</legend>
	<table width="100%"  >
	<tr>
	<?php
	$name= $row['name'];
	?>
    <td width="10%"><b>Name</b></td>
    <td width="30%">:&nbsp;&nbsp;<?php echo $row['name']; ?></td>
    <td width="35%"><strong>C_ID</strong> &nbsp;&nbsp; : <?php echo $row['un']; ?></td>
    <td width="35%"><strong>Mail</strong> &nbsp;&nbsp; : <?php echo $row['mail']; ?></td>
  </tr>
  </table>
   <br>
	  

      <fieldset>
<legend align="left">Today: <label  id="dt" name="dt"><?php  //date_default_timezone_set('Asia/Mumbai');
     //echo date("d/m/y"); 
  $SQL="SELECT CURDATE() from dual ";
  $result=mysqli_query($con, $SQL);
  $num_rows= 0 ;
$row=mysqli_fetch_array($result);
     echo $row[0] 
	 ?> </label></legend>
	 <input type="hidden" name="dt" value="<?php  //date_default_timezone_set('Asia/Mumbai');
  
     echo $row[0] 
	 ?>" />
 <table width="100%"> 
 
 <td rowspan="2" width="50%" align="right">

<!--code it here -->

 
          
	
        <div class="col-md-6" align="center">
          <div class="box box-primary">
            
            <div class="box-body">
              <!-- Date -->
              <div class="form-group">
                <label>Date:</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="datepicker" name="datepicker" >
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->

  <div class="bootstrap-timepicker" >
                <div class="form-group" align="">
                  <label>Start Time:</label>

                  <div class="input-group">
                    <input type="text" class="form-control timepicker" id="startTime" name="startTime">

                    <div class="input-group-addon">
                      <i class="fa fa-clock-o"></i>
                    </div>
                  </div>
                  <!-- /.input group -->
				  
				              <!-- /.form group -->

  <div class="bootstrap-timepicker" >
                <div class="form-group" align="center">
                  <label>End Time:</label>

                  <div class="input-group">
                    <input type="text" class="form-control timepicker" id="endTime" name="endTime">

                    <div class="input-group-addon">
                      <i class="fa fa-clock-o"></i>
                    </div>
                  </div>
                  <!-- /.input group -->
    
	
	
			   
            
          <!-- /.box -->

      
</td>

<td rowspan="2" width="50%" align="left"><fieldset class="innerfieldset">	
 
           
			   <div class="col-md-6">
          <div class="box box-primary">
             <!-- /.form group -->
 
  <div class="form-group">
                <label>Project</label>
                <select class="form-control select2"  name='p_id' id='p_id'  style="width: 100%;">
                  <option selected="selected"></option>
				    <?php
               
				  $result = mysqli_query($con, "SELECT proj_id FROM project ");

					while($row = mysqli_fetch_array($result))
				 {
				  echo "<option>".$row['proj_id']."</option>>";
				 }

					?>        
            
                </select>
              </div>
			  
			   <div class="form-group">
                <label>Task</label>
                <select class="form-control select2"  name='a_id' id='a_id'  style="width: 100%;">
                  <option selected="selected"></option>
                    <?php
                
				  $result = mysqli_query($con, "SELECT act_id FROM activity");

					while($row = mysqli_fetch_array($result))
				 {
				  echo "<option>".$row['act_id']."</option>>";
				 }

					?>    
                </select>
              </div>
 </div>
 

 
   <input type="submit" class="form-group" name="Add" value="Add" >
 
  
   
   </div>
            </div>
            <!-- /.box-body -->
         
          <!-- /.box -->
</fieldset>


</td>
<!--end -->
			  
			 

</table>

</form>

<script>

var jobValue = document.getElementById('txtJob').value;

</script>

<table align="center">
<tr><td bgcolor="#CCCCCC">
<form action="delete.php" name="del" method="post" > 
<label>Click on a Check Box to select and then click  </label></td><td>
&nbsp; &nbsp;<input type="submit" name="Delete" value="Delete" align="right">
</td><td><input type="reset" value="Reset"></td></tr>
</table>
<table width="100%" border="2"  bordercolordark="#000099" > 

<?php


$query="select * from timesheet where name= '$e' order by date desc ";


$res=mysqli_query($con,$query);


echo '<B><tr bgcolor="#00FFFF" align="center" class="form-group" bordercolor="#CC3333"><td>'; echo 'DATE'; echo '</td><td>'; echo 'C_ID'; echo '</td><td>'; echo 'Proj Id'; echo '</td><td>'; echo 'Activity';
 echo '</td><td>'; echo 'Start Time'; echo'</td><td>'; echo 'End Time'; echo '</td><td>'; echo 'Duration'; echo '</td><td>'; echo 'Filled On'; echo '</td><td>'; echo'Select'; echo '</td></tr></B>';


while($rows=mysqli_fetch_assoc($res))
{
 echo '<B><tr bgcolor="#CCCCCC" align="center" class="form-group" bordercolor="#CC3333"><td>'; echo $rows['date']; echo '</td><td>'; echo $rows['name']; echo '</td><td>'; echo $rows['proj_id']; echo '</td><td>';echo $rows['act_id'];
 echo '</td><td>';echo $rows['t_in']; echo'</td><td>'; echo $rows['t_out'];echo '</td><td>';echo $rows['dur']; echo '</td><td>';echo $rows['sysdate']; echo '</td><td>'; echo "<label>";
  echo "<input type='checkbox' name='line_no[]' value='".$rows['line_no']."' />"; echo " </label>";
 echo "</label></td></tr>";
 }
 
echo '</table>';

?>



</form>
<script src="./plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="./bootstrap/js/bootstrap.min.js"></script>
<!-- Select2 -->
<script src="./plugins/select2/select2.full.min.js"></script>
<!-- InputMask -->
<script src="./plugins/input-mask/jquery.inputmask.js"></script>
<script src="./plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="./plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- date-range-picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="./plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="./plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- bootstrap color picker -->
<script src="./plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="./plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="./plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="./plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="./plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="./dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="./dist/js/demo.js"></script>
<!-- Page script -->
<script>
  $(function () {
    //Initialize Select2 Elements
    $(".select2").select2();

    //Datemask dd/mm/yyyy
    $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
    //Datemask2 mm/dd/yyyy
    $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
    //Money Euro
    $("[data-mask]").inputmask();

    //Date range picker
    $('#reservation').daterangepicker();
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
    //Date range as a button
    $('#daterange-btn').daterangepicker(
        {
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate: moment()
        },
        function (start, end) {
          $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
    );

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass: 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });

    //Colorpicker
    $(".my-colorpicker1").colorpicker();
    //color picker with addon
    $(".my-colorpicker2").colorpicker();

    //Timepicker
    $(".timepicker").timepicker({
      showInputs: false
    });
  });
</script>
</body>
</html>
 




