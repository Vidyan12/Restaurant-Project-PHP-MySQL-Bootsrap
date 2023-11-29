	<?php include "header.php"; ?>

<body>

<!-- Start All Pages -->
	<div class = "all-page-title
				  page-breadcrumb">
		<div class = "container
					  text-center">
			<div class = "row">
				<div class = "col-lg-12">
					<h1>REGISTRATION USE</h1>
				</div>
			</div>
		</div>
	</div>
<!-- End All Pages -->


<!-- Start Contact -->
	<div class = "contact-box">
		<div class = "container">
			<div class = "row">
				<div class = "col-lg-12">
				</div>
			</div>

			<div class = "row">
				<div class = "col-lg-12">

					<table cellpadding = "10"
						   cellspacing = "12"
						   align	   = "left">

						<form action = ""
							  method = "POST">

							<tr>
								<td>
								<input type		   = "text"
									   name 	   = "uid"
									   value 	   = ""
									   placeholder = "Enter user id"
									   required    = "required"

									   style	   = "width	 : 300%;
									   				  padding: 10px;">
								<br>
								</td>
							</tr>

							<tr>
								<td>
									<input type		   = "password"
										   name		   = "pass"
										   value	   = ""
										   placeholder = " Enter Your password"
										   required	   = "required"

										   style	   = "width	 : 300%;
										   				  padding: 10px;">
									<br>
								</td>
							</tr>

							<tr>
								<td>
									<input type = "email"
										   name = "email"
										   value = ""
										   placeholder = "Enter Your Email Address"
										   required = "required"

										   style = "width  : 300%;
										   			padding: 10px;">
									<br>
								</td>
							</tr>

							<tr>
								<td align = "center">
									<input type = "submit"
										   name = "sb"
										   value = "Registration Now"

										   style = "color	   : red;
										   			background : lightgreen;
													font-size  : 1.3em;
													font-family: times new roman">
									<br>
								</td>
							</tr>
						</form>
					</table>
			<?php
			        if(isset($_POST['sb'])) {

			            $uid   = $_POST['uid'];
			            $pass  = $_POST['pass'];
			            $email = $_POST['email'];

			        include "connect.php";

			            mysqli_query($con, "INSERT INTO registration (userid, password, email)

															  VALUES ('$uid', '$pass', '$email') ");

			            echo "<script>
						    	 alert('Registration Successfully');
							  </script>";

			            echo "<center>
								 Registration Successfully... Click to <a href = 'login.php'>login</a>
							  </center>";

			        }
			?>

				</div>
			</div>

		</div>
	</div>
<!-- End Contact -->

	<?php include "footer.php"; ?>
