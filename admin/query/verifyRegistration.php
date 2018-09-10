<?php

session_start();
include ("../db/db_connect.php");
date_default_timezone_set('Asia/Calcutta');
$ipaddress = $_SERVER["REMOTE_ADDR"];
$updatedatetime = date('Y-m-d H:i:s');

if (isset($_POST['email'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = md5($password);
    $name = $_POST['name'];

    $sql = "select * from user_details where email = '$email' order by Id desc limit 1";
    $result = mysqli_query($con, $sql) or die(mysqli_error($con));
    $num = mysqli_num_rows($result);
    $flag = 0;
    $status = "";
    //echo $sql;
    //echo $num;
    if ($num > 0) {
        $status = "failed";
        $flag = 0;
    } else {
        $qryRegister = "insert into user_details (email,password,name) values ('$email','$password','$name')";
        $resultRegister = mysqli_query($con, $qryRegister);
        //echo $qryRegister;
        if ($resultRegister) {
            $_SESSION['userId'] = $name;
            $_SESSION['email'] = $email;
            $status = "success";
            $flag = 1;
        } else {
            echo mysqli_error($con);
            $status = "failed";
            $flag = 0;
        }
    }
    //echo $flag;
    //echo $flag;
    $qryLogin = "insert into user_activity (email,date_time,ipaddress,status,activity_description) values ('$email','$updatedatetime','$ipaddress','$status', 'Registration')";

    //echo $qryLogin;
    if (mysqli_query($con, $qryLogin)) {
        
    } else {
        echo mysqli_error($con);
        $flag = 0;
    }
    echo $flag;
} else {
    echo "<script>
			window.location = 'register';
		</script>";
}
?>