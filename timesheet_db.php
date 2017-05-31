<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>My Hours</title>

</head>

<body>


<?php
session_start();
if(!isset($_SESSION['uname']))
    header('Location: index.php');
	
	include('./shared/connection.php');
	include('./shared/functions_inc.php');
	
	$c_id= $_SESSION['uname'];
	
	 $p_id=NULL;
     $a_id=NULL;
	$date =$_POST['datepicker'];
  $start=$_POST['startTime'];
  $end=$_POST['endTime'];
  $p_id=$_POST['p_id'];
  $a_id=$_POST['a_id'];
  
  $date1= strtotime($date) ;
  $date2= date('Y-m-d',$date1);
 

$time1 = strtotime($start);
$time2 = strtotime($end);
$difference = round(($time2 - $time1) / 3600,2);
//echo 'time' . $difference;


if($date2 =='1970-01-01'){
echo '<script type="text/javascript">alert("select a date ");window.history.go(-1);</script>';
goto a;
}


else if(empty($p_id)){
echo '<script type="text/javascript">alert("the project  cannot be NULL ");window.history.go(-1);</script>';
goto a;
}


else if(empty($a_id)){
echo '<script type="text/javascript">alert("the activity cannot be NULL ");window.history.go(-1);</script>';
goto a;
}
else if($difference < 0 or $difference ==0){
echo '<script type="text/javascript">alert("The start time '.$start.'  canot be less than  OR equal to end time '.$end.' ");window.history.go(-1);</script>';
goto a;
}

else
{
	/* trigger for budget control */
	
	$sqlQuery= "SELECT `target`, `check` FROM `project` WHERE `proj_id`= '".$p_id."' ";
	$result=mysqli_query($con,$sqlQuery);
	$s=mysqli_fetch_array($result);
	//echo $sqlQuery;
	
	$sql="SELECT SUM(`dur`) as sum FROM `timesheet` WHERE `proj_id`='".$p_id."' ";
	$re=mysqli_query($con,$sql);
	$t=mysqli_fetch_array($re);
	
	//echo $sql;
	$totalTempHours=$t['sum']+ $difference;
	$lim=0.80*($s['target']);
			
			if($totalTempHours >= $lim && $s['check']) ///define the contraint for the percentage 
			{
			echo '<script type="text/javascript">alert("The target limit which is '.$lim.' exceeds Please contact the Administrator ");window.history.go(-1);</script>';
			goto a;
			
			}
	
		/* END*/
		else
			{
		
		echo $date2;
		$query="INSERT INTO timesheet(date, name, proj_id, act_id, t_in, t_out, dur) VALUES ('".$date2."' , '".$c_id."' , '".$p_id."' , '".$a_id."' , '".$start."' , '".$end."' , '".$difference."' )";
		$res=mysqli_query($con, $query);
		echo $query;
			
			echo $c_id;
			if($res)
			echo 'Success';
			else
			echo $query;
			
		
		
		 redirect('./timesheet.php');
		 
		 }
} 

a:
echo 'Reloading Please Wait...';

 ?>
</body>
</html>
