<?php
	include 'db.php';
	   
	if(isset($_POST["submit"])) {
		$fn=$_POST['first_name'];
		$ln=$_POST['last_name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$id=$_POST['id'];
		$birthday=$_POST['birthday'];
		$gender=$_POST['gender'];
		
		$update="UPDATE table_users SET fname='$fn', lname='$ln' ,email='$email', phone='$phone', gender='$gender', bday='$birthday' where user_id='$id' ";
			if(mysqli_query($conn, $update))  
			{
			?>
			<script>
			alert("Record updated succesfuly");
				window.location = "index.php";  
			</script>
			<?php
			}else{
				die("Error ");
			}
	}
?>