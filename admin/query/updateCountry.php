<?php 
session_start();
include ("../db/db_connect.php");
date_default_timezone_set('Asia/Calcutta'); 
$ipaddress = $_SERVER["REMOTE_ADDR"];
$updatedatetime = date('Y-m-d H:i:s');
$username = $_SESSION['name'];

if(isset($_POST['country_code'])){
	$country_code = $_POST['country_code'];
	$country_name = $_POST['country_name'];
	$country_details = $_POST['country_details'];
	$language = $_POST['language'];
	$no_of_people = $_POST['no_of_people'];
	$no_of_province = $_POST['no_of_province'];
	$country_id = $_POST['country_id'];
	
	$sql = "update country set country_code='$country_code',country_name='$country_name',country_details='$country_details',language='$language',no_of_people='$no_of_people',no_of_province='$no_of_province',username='$username',ipaddress='$ipaddress',date='$updatedatetime' where country_id='$country_id'";
	
	$flag = 0;
	$work_details = "Updating Data into DB for Country Details";
	
	
	$qryWorkLog = "insert into work_log (work_details,date,ipaddress,username) values ('$work_details','$updatedatetime','$ipaddress','$username')";
	
	if(mysqli_query($con,$qryWorkLog) && mysqli_query($con,$sql)){
		$flag = 1;
	}else{
		//echo mysqli_error($con);
		$flag = mysqli_error($con);
	}
	echo $flag;
	
}else{
	echo "<script>
			window.location = 'index.php';
		</script>";
}




?>