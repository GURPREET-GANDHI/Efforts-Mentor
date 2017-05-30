<?php

$link = mysql_connect("localhost","root","");
if (!$link) {
   die('Could not connect: ' . mysql_error());
}
if (!mysql_select_db("med")) {
   echo "Unable to select mydbname: " . mysql_error();
   exit;
}

$result = mysql_query("SELECT dname FROM  drugs");
while ($row = mysql_fetch_assoc($result)) {
   		$colors[]=$row['dname'];
}
mysql_free_result($result);
mysql_close($link);

// check the parameter
if(isset($_GET['part']) and $_GET['part'] != '')
{
	// initialize the results array
	$results = array();

	// search colors
	foreach($colors as $color)
	{
		// if it starts with 'part' add to results
		if( strpos(strtoupper($color), strtoupper($_GET['part'])) === 0 ){
			$results[] = $color;
		}
	}

	// return the array as json with PHP 5.2
	echo json_encode($results);
}