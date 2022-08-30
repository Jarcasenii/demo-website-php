<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Au Register Forms by Colorlib</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
	<link href="css/main.css" rel="stylesheet" media="all">
	<link href="css/table.css" rel="stylesheet">
</head>

	<?php include 'db.php'; ?>            
<body>
        <div class="main">

        <section class="sign-in">
			<div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        `		<div class="wrapper wrapper--w680">
					<div class="card card-4">
                        <h2 class="title">SEARCH FORM</h2>
						
                        <form method="POST" action="#" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="search_key" id="your_name" placeholder="Search here..."/>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="submit" id="signin" class="form-submit" value="SEARCH"/>
                            </div>
                        </form>
					</div>
				</div>	
						<div class="table-wrapper">
							<h2>List of Users </h2>
									
							<table class="fl-table" >
							<thead>
							<tr> 
										<div class="row row-space">
											<tr>
												<th>First Name</th>
												<th>Last Name</th>
												<th>Email</th>
												<th>Phone</th>
												<th>Gender</th>
												<th>Birthday</th>
												<th>Photo</th>
											</tr>
										</div>
							</tr>
							</thead>
							<tbody>
							<?php
								if(isset($_POST["submit"])) {
								$sk=$_POST['search_key'];
								echo $sk;
								$sql = "SELECT * FROM table_users WHERE fname LIKE '%$sk%' OR lname LIKE '%$sk%' OR email LIKE '%$sk%' OR phone LIKE '%$sk%' OR gender LIKE '%$sk%' OR bday LIKE '%$sk%'";
								$result = $conn->query($sql);
								while($row = $result->fetch_assoc()) {
								$photo=$row['photo'];
								?>	
								<tr>
									<td> <?php echo $row['fname']; ?> </td>
									<td> <?php echo $row['lname']; ?> </td> 		
									<td> <?php echo $row['email']; ?> </td>
									<td> <?php echo $row['phone']; ?></td>
									<td> <?php echo $row['gender']; ?></td>
									<td> <?php echo $row['bday']; ?></td>
									<td> <?php echo "<img src='photo/$photo' width='150' height='150'>";?></td>
								</tr>
								<?php
								}
								
							}
							?>
							 </tbody>
						 </table>	
						</div>		
    </div>
	
    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->