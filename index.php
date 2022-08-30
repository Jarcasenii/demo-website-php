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
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Registration Form</h2>
                    <form method="POST" action="register.php" enctype="multipart/form-data">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">First name</label>
                                    <input class="input--style-4" type="text"   name="first_name">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Last name </label>
                                    <input class="input--style-4" type="text" name="last_name">
                                </div>
                            </div>
                        </div>
						
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Email</label>
                                    <input class="input--style-4" type="email" name="email">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Phone Number</label>
                                    <input class="input--style-4" type="text" name="phone">
                                </div>
                            </div>
                        </div>
						<div class="row row-space">
                            <div class="col-2" id="" >
                                <div class="input-group">
                                    <label class="label">Birthday</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="text" name="birthday">
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Gender</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Male
                                            <input type="radio" checked="checked" name="gender" value="male">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Female
                                            <input type="radio" name="gender" value="female">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
						<div class="row row-space">
                            <div class="col-2">
								<label class="label">Upload Photo</label>
                                <input class="input--style-4" type="file" name="photo" value="">
							</div>
                        </div>

						 <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" name="submit" type="submit">Submit</button>
                        </div>
                    </form>
					 <form method="POST" action="search.php">
						 <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" >Search</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>	
						<div class="table-wrapper">
							<h2>List of Users </h2>
									 <table class="fl-table" >
										<thead>
										<div class="row row-space">
											<tr>
												<th>Fullname</th>
												<th>Email</th>
												<th>Phone</th>
												<th>Gender</th>
												<th>Birthday</th>
												<th>Action</th>
												<th>Photo</th>
											</tr>
										</div>
										</thead>
										<tbody>
												<?php 
													$sql = "SELECT * FROM table_users";
													$result = $conn->query($sql);
													while($row = $result->fetch_assoc()) { 
													// The fetch_assoc() / mysqli_fetch_assoc() function fetches a result row as an associative array.
													
													$id=$row['user_id'];
													$fname=$row['fname'];
													$lname=$row['lname'];
													$email=$row['email'];
													$phone=$row['phone'];
													$bday=$row['bday'];
													$gender=$row['gender'];
													$photo=$row['photo'];
												?>
														<tr>
															<td><?php echo $fname." ". $lname;?></td>
															<td><?php echo $email; ?></td>
															<td><?php echo $phone; ?></td>
															<td><?php echo $gender; ?></td>
															<td><?php echo $bday; ?></td>
															<td>
																<a href="delete.php<?php echo '?$id='.$id; ?>" ><i class="fa fa-trash" ></i> Delete</a>
																<a href="updateform.php<?php echo '?$id='.$id; ?>"><i class="fa fa-edit" ></i>Update</a>
															</td>
															<td><?php echo "<img src='photo/$photo' width='150' height='150'>";?></td>
														</tr>
														
												<?php } ?>
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