<?php 
session_start();
include ("../db/db_connect.php");
date_default_timezone_set('Asia/Calcutta'); 
$ipaddress = $_SERVER["REMOTE_ADDR"];
$updatedatetime = date('Y-m-d H:i:s');
$username = $_SESSION['name'];


$country_id =mysqli_real_escape_string($con,$_POST['country_id']);

	$sql = "select * from state where country_id='$country_id'";


$result  = mysqli_query($con,$sql)or die(mysqli_error($con));
$str = "<option value=''>--Select State--</option>";

while($row=mysqli_fetch_assoc($result)){
	$str = $str.'<option value="'.$row['state_id'].'">'.$row['state_name'].'</option>';
}
echo $str;
?>