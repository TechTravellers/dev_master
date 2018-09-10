<?php
session_start();
include "db/db_connect.php";
   if(isset($_FILES['image'])){
	   
	   $name = $_POST['name'];
	   $email = $_POST['email'];
	   $ipaddress = $_SERVER["REMOTE_ADDR"];
	   $updatedatetime = date('Y-m-d H:i:s');
	   $date = date('Y-m-d');
	   
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      //$image_no = rand(10,100000);
      if(empty($errors)==true){
        // move_uploaded_file($file_tmp,"images/".$file_name);
		 
		$min_rand=rand(0,1000);
		$max_rand=rand(100000000000,10000000000000000);
		$name_file=rand($min_rand,$max_rand);//this part is for creating random name for image

		$ext=end(explode(".", $_FILES["image"]["name"]));//gets extension

		move_uploaded_file($file_tmp,"uploads/" .$name_file.".".$ext);//actually reponsible for copying file in new folder

		//$filenameimage="../images/" . $name_file.".".$ext;
		$actualimageurl="uploads/" . $name_file.".".$ext;
		 
		 //echo $actualimageurl;
         //echo "Success";
		 $flag = 1;
      }else{
        // print_r($errors);
		$flag =0;
      }
	  
	  $sql = "insert into images (image_name,image_type,image_size,image_ext,name,email,ipaddress,image_path,image_no,date,updatedatetime) 
			  values
			  ('$file_name','$file_type','$file_size','$file_ext','$name','$email','$ipaddress','$actualimageurl','$name_file','$date','$updatedatetime')"; 
   
		if(mysqli_query($con,$sql)){
			$flag = 1;
			$_SESSION['image_no'] = $name_file;
			
			$_SESSION['name'] = $name;
			$_SESSION['email'] = $email;
			
			
			
		}else{
			//echo mysqli_error($con);
			$errors[] = mysqli_error($con);
			//echo $error;
			/* echo "<script>
				window.location.href='failure.php?error='".$error.";
			</script>"; */
			$flag = 0;
		}	
		
		if($flag == 1){
			echo "<script>
				window.location.href='success.php?image_id=".$name_file."';
			</script>";
		}else{
			$error_details = "";
			//print_r($errors);
			foreach ($errors as &$error) {
				$error_details = $error_details.' '.$error;
				
			}
			//echo $error_details;
			echo "<script>
				alert('".$error_details."');
			</script>";
		}
		
		
   }
?>