<?php 
session_start();
include ("../../db/db_connect.php");
date_default_timezone_set('Asia/Calcutta'); 
$ipaddress = $_SERVER["REMOTE_ADDR"];
$updatedatetime = date('Y-m-d H:i:s');


if(isset($_POST['email'])){
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	$sql = "select * from users where email = '$email' and password = '$password' order by userId desc limit 1";
	$result = mysqli_query($con,$sql) or die(mysqli_error($con));
	$num = mysqli_num_rows($result);
	$flag = 0;
	$status = "";
	//echo $sql;
	if($num == 0){
		$flag = 0;
		$status = "failed";
	}else{
		$flag = 1;
		$row = mysqli_fetch_assoc($result) or die(mysqli_error($con));
		$_SESSION['name']=$row['fname'];
		$_SESSION['userId']=$row['userId'];
		$status = "success";
	}
	
	$qryLogin = "insert into login_details (email,datetime,ipaddress,status) values ('$email','$updatedatetime','$ipaddress','$status')";
	
	if(mysqli_query($con,$qryLogin)){
		
	}else{
		echo mysqli_error($con);
		$flag = 0;
	}
	echo $flag;
	
}else{
	echo "<script>
			window.location = 'index.php';
		</script>";
}




?>