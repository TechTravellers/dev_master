<?php 
session_start();
include ("../db/db_connect.php");
date_default_timezone_set('Asia/Calcutta'); 
$ipaddress = $_SERVER["REMOTE_ADDR"];
$updatedatetime = date('Y-m-d H:i:s');
$username = $_SESSION['name'];

if(isset($_POST['district_code'])){
	$country_id = $_POST['country_id'];
	$state_id = $_POST['state_id'];
	$district_code = $_POST['district_code'];
	$district_name = $_POST['district_name'];
	$district_details = mysqli_real_escape_string($con,$_POST['district_details']);
	$headquarter = $_POST['district_headquarter'];
	$populations = $_POST['population'];
	
	
	$sql = "insert into district (country_id,state_id,district_code,district_name,district_details,headquarter,populations,date,username,ipaddress)
			values 
			('$country_id','$state_id','$district_code','$district_name','$district_details','$headquarter','$populations','$updatedatetime','$username','$ipaddress')";
	
	$flag = 0;
	$work_details = "Inserting Data into DB for District Details";
	
	
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