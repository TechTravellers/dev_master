<?php

session_start();
include ("../db/db_connect.php");
date_default_timezone_set('Asia/Calcutta');
$ipaddress = $_SERVER["REMOTE_ADDR"];
$updatedatetime = date('Y-m-d H:i:s');

if (isset($_POST['country']) && isset($_POST['about'])) {
    $email = $_SESSION['email'];
    $country = $_POST['country'];
    $phone = $_POST['phone'];
    $city = $_POST['city'];
    $area = $_POST['area'];
    $dob = $_POST['dob'];
    $about = $_POST['about'];

    //echo $email.$country.$phone.$city.$area.$dob.$about;
    $sql = "select * from user_details where email = '$email' order by Id desc limit 1";
    $result = mysqli_query($con, $sql) or die(mysqli_error($con));
    $num = mysqli_num_rows($result);
    $row = mysqli_fetch_assoc($result) or die(mysqli_error($con));
    $flag = 0;
    $status = "";
    $name = $row['name'];

    //Update user data
    if ($num == 0) {
        $status = "failed";
        $flag = 0;
    } else {
        $qryUpdate = "update user_details set country='$country',dob='$dob', phone='$phone',city='$city',area='$area',about='$about' where email='$email'";
        $resultUpdate = mysqli_query($con, $qryUpdate);
        //echo $qryUpdate;
        if ($resultUpdate) {
            $_SESSION['userId'] = $name;
            $_SERVER['email'] = $email;
            $status = "success";
            $flag = 1;
        } else {
            echo mysqli_error($con);
            $status = "failed";
            $flag = 0;
        }
    }
    echo $_FILES['profileImage']['name'];
    if (isset($_FILES['profileImage'])) {
        $errors = array();
        $file_name = $_FILES['profileImage']['name'];
        $file_size = $_FILES['profileImage']['size'];
        $file_tmp = $_FILES['profileImage']['tmp_name'];
        $file_type = $_FILES['profileImage']['type'];
        $file_ext = strtolower(end(explode('.', $_FILES['profileImage']['name'])));

        $expensions = array("jpeg", "jpg", "png");

        if (in_array($file_ext, $expensions) === false) {
            $errors[] = "extension not allowed, please choose a JPEG or PNG file.";
        }

        if ($file_size > 2097152) {
            $errors[] = 'File size must be excately 2 MB';
        }

        if (empty($errors) == true) {
            $min_rand = rand(0, 1000);
            $max_rand = rand(100000000000, 10000000000000000);
            $name_file = rand($min_rand, $max_rand); //this part is for creating random name for image

            $ext = end(explode(".", $_FILES["image"]["name"])); //gets extension

            move_uploaded_file($file_tmp, "profilePhotos/" . $name_file . "." . $ext); //actually reponsible for copying file in new folder
            //$filenameimage="../images/" . $name_file.".".$ext;
            $actualimageurl = "profilePhotos/" . $name_file . "." . $ext;
            echo $actualimageurl;
            $flag = 1;
        } else {
            $flag = 0;
        }
        $sqlProfile = "insert into user_profile_photo (email,name,imageName,imageType,imageExt,imageSize,imagePath,ipaddress,date,updateDateTime) 
            values ('$email','$name',$file_name','$file_type','$file_ext','$file_size','$actualimageurl','$ipaddress','$date','$updatedatetime')";

        if (mysqli_query($con, $sqlProfile)) {
            $flag = 1;
            $_SESSION['userId'] = $name;
            $_SESSION['email'] = $email;
        } else {
            $errors[] = mysqli_error($con);
            $flag = 0;
        }

        if ($flag != 1) {
            $error_details = "";
            foreach ($errors as &$error) {
                $error_details = $error_details . ' ' . $error;
            }
            echo "<script>
				alert('" . $error_details . "');
			</script>";
        }
    }

    //Update user activity
    $qryLogin = "insert into user_activity (email,date_time,ipaddress,status,activity_description) values ('$email','$updatedatetime','$ipaddress','$status', 'Edit Profile')";
    if (mysqli_query($con, $qryLogin)) {
        
    } else {
        echo mysqli_error($con);
        $flag = 0;
    }
    echo $flag;
} else {
    echo "<script>
			window.location = 'editProfile';
		</script>";
}
?>