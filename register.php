<?php

include 'db.php';
    if(isset($_POST["submit"])) {
	$fn=$_POST['first_name'];
	$ln=$_POST['last_name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$birthday=$_POST['birthday'];
	$gender=$_POST['gender'];
	$photo=$_FILES["photo"]["name"];
	$tempname=$_FILES["photo"]["tmp_name"];    
		$folder = "photo/".$photo;
		
	    $insert="INSERT INTO table_users(fname,lname,email,phone,photo,gender,bday)
	         VALUES ('$fn','$ln','$email','$phone','$photo','$gender','$birthday')";
		if(mysqli_query($conn, $insert))  
		{
		?>
		<script>
			alert("Registered Successfuly!");
			window.location = "index.php";  
		</script>
		<?php
		}
	}if (move_uploaded_file($tempname, $folder))  {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
      }
?>