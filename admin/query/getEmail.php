<?php 
session_start();
include ("../../db/db_connect.php");
date_default_timezone_set('Asia/Calcutta'); 
$ipaddress = $_SERVER["REMOTE_ADDR"];
$updatedatetime = date('Y-m-d H:i:s');
//$username = $_SESSION['name'];


$email =mysqli_real_escape_string($con,$_POST['email']);

	$sql = "select * from images where email='$email'";


$result  = mysqli_query($con,$sql)or die(mysqli_error($con));


$num = mysqli_num_rows($result);

echo $num;


?>