<?php 
session_start();
include ("../db/db_connect.php");
date_default_timezone_set('Asia/Calcutta'); 
$ipaddress = $_SERVER["REMOTE_ADDR"];
$updatedatetime = date('Y-m-d H:i:s');
$date = date('Y-m-d');



if(isset($_POST['author'])){
	$author = $_POST['author'];
	$email = $_POST['email'];
	$title = mysqli_real_escape_string($con,$_POST['title']);
	//$blog = htmlspecialchars(mysqli_real_escape_string($con,$_POST['blog']));
	$blog = mysqli_real_escape_string($con,$_POST['blog']);
	
	
	$sql = "insert into blog_details (name,email,title,story,ipaddress,datetime,date)
			values 
			('$author','$email','$title','$blog','$ipaddress','$updatedatetime','$date')";
	
	//echo $sql;
	$flag = 0;
	$blog_id = 0;
	if(mysqli_query($con,$sql)){
		$flag = 1;
                $blog_id = mysqli_insert_id($con);
	}else{
		//echo mysqli_error($con);
		$flag = mysqli_error($con);
	}
        
        
        //Adding Blog Images
        if (isset($_FILES['images']) && !empty($_FILES['images'])) {
                $no_files = count($_FILES["images"]['name']);
                for ($i = 0; $i < $no_files; $i++) {
                        if ($_FILES["images"]["error"][$i] > 0) {
                                //echo "Error: " . $_FILES["prescription"]["error"][$i] . "<br>";
                        } else {
                                $newfilename= date('dmYHis').str_replace(" ", "", basename($_FILES["images"]["name"][$i]));
					//echo $newfilename;
                               
                                        move_uploaded_file($_FILES["images"]["tmp_name"][$i], 'blog_images/' . $newfilename);

                                        //echo 'File successfully uploaded : prescription/' . $_FILES["prescription"]["name"][$i] . ' ';

                                        $url = 'blog_images/' .$newfilename . ' ';

                                        $blogImageSQL = "insert into blog_images (blog_id,image_url,datetime,ipaddress)
                                                                                                values
                                                                                                ('$blog_id','$url','$updatedatetime','$ipaddress')";
                                        //echo $blogImageSQL;
                                        if(mysqli_query($con,$blogImageSQL)){
                                                $flag =1;

                                        }else{
                                                $flag = 0;
                                                //echo mysqli_error($con);
                                        }

                                
                        }
                }
        }
        
        
	echo $flag;
   // echo $_POST['blog'];
	
}else{
	echo "<script>
			window.location = 'index.php';
		</script>";
}




?>