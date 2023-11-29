<?php include "header.php"; ?>
<body>

<!--FeedBack image-->
	<center>
		<img src   = "images/Feedback/Review.png"
			 style = "background-color: red;">
	</center>


<!--FeedBack section starts here-->
	<div class = "contact-box">
		<div class = "container">
			<div class = "row">
				<div class = "col-lg-12">

					<div class = "heading-title
								  text-center">

						<p>Our Main Goal is Client Satisfaction</p>
						<p>Let Us know your feedbacks for a excellent service</p>

					</div>

				</div>
			</div>

			<div class = "row">
				<div class = "col-lg-12">

					<form  action = ""
						   method = "post">

						<div class = "row">
							<div class = "col-md-12">

								<div class = "form-group">
									<input type 	   = "text"
										   class	   = "form-control"
										   id		   = "name"
										   name		   = "name"
										   placeholder = "Your Name"
										   data-error  = "Please enter your name"
										   required>
									<div class = "help-block
												  with-errors">
									</div>
								</div>

							</div>
							<div class = "col-md-12">
								<div class = "form-group">
									<select class	   = "custom-select
														  d-block
														  form-control"
											id 		   = "guest"
											name	   = "rev"
											placeholder = "Type of feedback"
											data-error = "Please Select Person"
											required>
											

										<option value = "Exellent">Exellent</option>
										<option value = "Good">Not Bad</option>
										<option value = "Poor">Poor</option>
										<option value = "Very Poor">Negative Experience</option>

									</select>

									<div class = "help-block
												  with-errors"></div>

								</div>
							</div>

							<div class = "col-md-12">

								<div class = "form-group">
									<textarea class		  = "form-control"
											  id		  = "message"
											  placeholder = "Your Message"
											  rows		  = "4"
											  name		  = "desc"
											  data-error  = "Write your message" required>
									</textarea>

									<div class = "help-block
												  with-errors">
									</div>

								</div>

								<div class = "submit-button
											  text-center">
									<button name  = "sb"
											class = "btn
													 btn-common"
											id 	  = "submit"
											type  = "submit">Submit FeedBack</button>
									<div id	   = "msgSubmit"
										 class = "h3
										 		  text-center
												  hidden">
									</div>
									<div class = "clearfix"></div>
								</div>

							</div>
						</div>

					</form>
		<?php
				if (isset($_POST['sb'])) {

					$nm = $_POST['name'];
					$rev = $_POST['rev'];
					$des = $_POST['desc'];

				include "connect.php";

					mysqli_query($con, "INSERT INTO review (name,  review,  description)
													VALUES ('$nm', '$rev',  '$des')");
					echo "<h2 style = 'text-align: center; color: tomato;'>You feedback has been Submitted Successfully!!</h2>";
				}
		?>
				</div>
			</div>

		</div>
	</div>
<!--FeedBack section ends here -->

<?php include "footer.php"; ?>
