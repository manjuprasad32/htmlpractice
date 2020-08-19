<?php
$dbhost="sql104.epizy.com";
$dbusername="epiz_26537862";// Enter your mysql username here
$dbpassword="qzelxjZEILJ307Y"; // Enter your mysql password here
$dbname="epiz_26537862_demo";  // enter the database which u have created 

$conn=mysqli_connect($dbhost,$dbusername,$dbpassword,$dbname);
if(!$conn)
{
	die("connection failed:".mysqli_connect_error());
}
else
{
	echo"connected to database";
}

?>




