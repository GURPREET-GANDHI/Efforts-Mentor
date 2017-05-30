<?php
include('./shared/connect.php');
mysql_connect("$server","$user_name","$pass_word");
mysql_select_db("$database");
$query="select * from timesheet where name= '469934' ";
//echo $query;
$res=mysql_query($query);

while($rows=mysql_fetch_assoc($res))
{

 echo $rows['date'];
 echo $rows['name'];
 echo $rows['proj_id'];
 echo $rows['act_id'];
  echo $rows['t_in'];
  echo $rows['t_out'];
  echo $rows['dur'];
  echo $rows['sysdate'];
  
  }

 ?>