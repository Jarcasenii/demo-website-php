<?php
include 'db.php';

	$id=$_REQUEST['$id'];
	
	$delete="DELETE FROM table_users WHERE user_id='$id'";
	if(mysqli_query($conn, $delete))
	{
	?>
	<script>
	alert("Deleted Successfully");
	window.location = "index.php";  
	</script>
	<?php
	}
	?>