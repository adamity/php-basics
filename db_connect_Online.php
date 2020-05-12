<?php 
//connection to mySQL
$host="sql208.0fees.net";
$username="fees0_9364991";
$password="8278300";
$link = mysql_connect($host,$username,$password)or die("Could not connect");
//connection to database
$db = mysql_select_db("dbDirektori", $link)or die("Could not select database");
?>


