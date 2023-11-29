	<?php include "header.php"; ?>

<body>

<!-- Start All Pages -->
	<div class = "all-page-title page-breadcrumb">
		<div class = "container text-center">

			<div class = "row">
				<div class = "col-lg-12">
					<h1>Login  and start ordering....</h1>
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

					<form action = "loginck.php"
						  method = "post">

						<table border	   = "0"
							   align	   = "center"
							   cellpadding = "5"
							   cellspacing = "7">

							<tr align = "right">
								<td>
									<img src   = "images/Login/login.png"
										 style = "width: 30%;">
									<br>
									<a href = "registration.php">Enter UserID and Password?</a>
								</td>
							</tr>

							<tr>
								<td>Enter your user id</td>
								<td>
									<input type		   = "text"
										   name		   = "uid"
										   placeholder = "Enter Your User ID here"

										   style	   = "width  : 150%;
										   				  padding: 10px;">
									<br>
								</td>
							</tr>

							<tr>
								<td>Enter your password</td>
								<td>
									<input type		   = "Password"
										   name		   = "pass"
										   placeholder = "Enter Your Password here"

										   style	   = "width: 150%;
										   				  padding: 10px;">
									<br>
								</td>
							</tr>

							<tr>
								<td align = "right">
									<input type  = "submit"
										   name  = ""
										   value = "Login Now"

										   style = "color			: black;
										   			background-color: orange;
													font-size		: 1.5em;
													font-family		: times new roman;">
								</td>
							</tr>
						</form>
					</table>
				</div>
			</div>
		</div>
	</div>
<!-- End Contact -->

                                <td align = "right">
									<input type  = "button"
										   name  = ""
										   value = "Manager Login"
										   onclick="document.location='Manager/index.php'"

										   style = "color			: black;
										   			background-color: orange;
													font-size		: 1.5em;
													font-family		: times new roman;">

<br>
									</td>
<br>
									<td align = "right">
									<input type  = "button"
										   name  = ""
										   value = "Staff Login"
										   onclick="document.location='Staff/index.php'"

										   style = "color			: black;
										   			background-color: orange;
													font-size		: 1.5em;
													font-family		: times new roman;">
								</td>
<br>
<br>
	<?php include "footer.php";?>
