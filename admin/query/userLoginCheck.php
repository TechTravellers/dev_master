<?php

session_start();
include ("../db/db_connect.php");
date_default_timezone_set('Asia/Calcutta');
$ipaddress = $_SERVER["REMOTE_ADDR"];
$updatedatetime = date('Y-m-d H:i:s');

if (isset($_POST['userId'])) {
    $email = $_POST['userId'];
    $password = $_POST['password'];
    $password = md5($password);

    $sql = "select * from user_details where email = '$email' and password = '$password' order by Id desc limit 1";
    $result = mysqli_query($con, $sql) or die(mysqli_error($con));
    $num = mysqli_num_rows($result);
    $flag = 0;
    $status = "";
    //echo $sql;
    if ($num == 0) {
        $flag = 0;
        $status = "failed";
    } else {
        $flag = 1;
        $row = mysqli_fetch_assoc($result) or die(mysqli_error($con));
        $_SESSION['userId'] = $row['name'];
        $_SESSION['email'] = $row['email'];
        $status = "success";
    }

    $qryLogin = "insert into user_activity (email,date_time,ipaddress,status,activity_description) values ('$email','$updatedatetime','$ipaddress','$status', 'Login')";

    //echo $qryLogin;
    if (mysqli_query($con, $qryLogin)) {
        
    } else {
        echo mysqli_error($con);
        $flag = 0;
    }
    echo $flag;
    
//    $qryActivity = "select * from user_activity";
//    $resultActivity = mysqli_query($con, $qryActivity);
//    if ($resultActivity) {
//        echo mysqli_num_rows($resultActivity);
//    } else {
//        echo mysqli_error($con);
//        
//    }
} else {
    echo "<script>
			window.location = 'login.php';
		</script>";
}
?>