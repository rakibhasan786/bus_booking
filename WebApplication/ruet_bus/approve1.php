<?php
echo "Successfully Approved.";	
$con = mysql_connect("localhost","root","");
if (!$con){                                                                       
die('Could not connect: ' . mysql_error());}
mysql_select_db("bus", $con);
$number=0;
$email=$_POST['email'];
$number=$_POST['number_booking'];
$approve_number=(int)$_POST['approve'];



$approve_number=$approve_number+1;

mysql_query("update registration set approval='$approve_number' where email='$email' and number='$number'");
mysql_close($con);
?>     