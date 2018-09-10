<?php

session_start();
include ("../db/db_connect.php");
date_default_timezone_set('Asia/Calcutta');
$ipaddress = $_SERVER["REMOTE_ADDR"];
$updatedatetime = date('Y-m-d H:i:s');

if (isset($_POST['userId'])) {
    $email = $_POST['userId'];
    

    $sql = "select * from user_details where email = '$email' order by Id desc limit 1";
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
        $_SESSION['userId'] = $row['email'];
        $status = "success";
    }

    echo $flag;
} else {
    echo "<script>
			window.location = 'login.php';
		</script>";
}
?>