<?php session_start(); ?>

<?php include "header.php"; ?>

<!-- Start slides -->
	<br>
	<div id	   = "slides"
		 class = "cover-slides">

		<ul class = "slides-container">
			<li class = "text-left">

				<img src = "images/Slider-images/slider1.jpg"
					 alt = "">

				<div class = "container">
					<div class = "row">
						<div class = "col-md-12">

							<h1 class = "m-b-20">
								<strong>
								Welcome To
								<br>
								Signature cuisine
								</strong>
							</h1>

							<p class = "m-b-40">Have It Your Way,
							<br>
							Sri Lanka's Authentic menu
							</p>

							<p>
							<a class = "btn
										btn-lg
										btn-circle
										btn-outline-new-white"
							   href  = "menu.php">See our Menu</a>
							</p>

						</div>
					</div>
				</div>
			</li>

			<li class = "text-left">
				<img src = "images/Slider-images/slider2.jpeg"
					 alt = "">

				<div class = "container">
					<div class = "row">
						<div class = "col-md-12">

							<h1 class = "m-b-20">
								<strong>
								We strive 
								<br>
								to give you the best sri lankan experience possible.
								</strong>
							</h1>

							<p class = "m-b-40">
							Signature cuisine is serving  Authentic
							SriLankan Food..
							<br>

							Our Staffs are well experienced and adaptive.
							</p>

							<p>
							<a class = "btn
										btn-lg
										btn-circle
										btn-outline-new-white"
							   href  = "reservations.php">Reserve Your Table</a>
							</p>

						</div>
					</div>
				</div>

			</li>

			<li class = "text-left">

				<img src = "images/Slider-images/slider3.jpg"
					 alt = "">

				<div class = "container">
					<div class = "row">
						<div class = "col-md-12">

							<h1 class = "m-b-20">
								<strong>
								Now in
								<br>
								multiple locations!!!
								</strong>
							</h1>

							<p class = "m-b-40">
							We serve our taste 
							<br>
							in 5 major cities.
							</p>

							<p>
							<a class = "btn
										btn-lg
										btn-circle
										btn-outline-new-white"
										href = "contact.php">Contact Us</a>
							</p>

						</div>
					</div>
				</div>
			</li>
		</ul>

		<div class = "slides-navigation">

			<a href = "#" class = "next">
				<i class	   = "fa
								  fa-angle-right"
				   aria-hidden = "true">
				</i>
			</a>

			<a href  = "#"
			   class = "prev">
				<i class	   = "fa
								  fa-angle-left"
				   aria-hidden = "true"></i>
			</a>

		</div>

	</div>
<!-- End slides -->

<!-- Start About -->
	<div class = "about-section-box">

		<div class = "container">
			<div class = "row">

				<div class = "col-lg-6
							  col-md-6
							  col-sm-12
							  text-center">
					<div class = "inner-column">

						<h1>
						Welcome To <span>Signature cuisine</span>
						</h1>

						<h4>Little Story</h4>
						<p>
						In 2003, Signature Enterprises took a step towards capturing the essence of Sri Lankan cuisine 
						with the founding of Signature Cuisine. Since then, we have become one of the most popular Sri 
						Lankan restaurants in the world. People love our authentic flavors, friendly service, and warm atmosphere.

						Our focus is to bring together an elegant atmosphere to celebrate our culinary heritage. We believe that Sri Lankan
						 food is some of the best in the world, and we want to make sure that everyone has the opportunity to experience it. 
						 We are committed to continuing the tradition of excellence that Signature Cuisine has been known for.
						</p>

						<p>
						We invite you to come experience the difference that Signature Cuisine has to offer. We know that you will be impressed 
						with our food, our service, and our atmosphere. We hope to see you soon!
						</p>

						<a class = "btn
									btn-lg
									btn-circle
									btn-outline-new-white"
						   href  = "contact.php">Contact Us</a>

					</div>
				</div>

				<div class = "col-lg-6
							  col-md-6
							  col-sm-12">

					<img src    = "images/AboutUs/res.webp"
						 width  = "200%"
						 height = "200%"
						 class  = "img-fluid">

				</div>

			</div>
		</div>

	</div>
<!-- End About -->

<!-- Quote section starts here -->
	<div class = "qt-box
				  qt-background">

		<div class = "container">
			<div class = "row">

				<div class = "col-md-8
							  ml-auto
							  mr-auto
							  text-center">

					<p class = "lead ">
					"Cooking is like painting or writing a song. Just as there are rules in painting or writing,
					 there are rules in cooking. But the most important thing is to feel what you are doing." - Julia Child
					</p>
					<span class = "lead">Signature cuisine</span>

				</div>

			</div>
		</div>

	</div>
<!-- Quote section ends here -->

<!-- Menu section begins here-->
	<div class = "menu-box">
		<div class = "container">
			<div class = "row">
				<div class = "col-lg-12">
					<div class = "heading-title
								  text-center">

						<h2> Our Special Menu</h2>
						<p>Enjoy the Authentic Sri Lankan Taste</p>

					</div>
				</div>
			</div>

			<div class = "row
						  inner-menu-box">

				<div class = "col-3">
					<div class			  = "nav
											 flex-column
											 nav-pills"
						 id				  = "v-pills-tab"
						 role			  = "tablist"
						 aria-orientation = "vertical">

						<a class		 = "nav-link
											active"
						   id			 = "v-pills-home-tab"
						   data-toggle	 = "pill"
						   href			 = "#v-pills-home"
						   role			 = "tab"
						   aria-controls = "v-pills-home"
						   aria-selected = "true">All</a>

						<a class		 = "nav-link"
						   id			 = "v-pills-profile-tab"
						   data-toggle	 = "pill"
						   href			 = "#v-pills-profile"
						   role			 = "tab"
						   aria-controls = "v-pills-profile"
						   aria-selected = "false">Main Dishes</a>

						<a class		 = "nav-link"
						   id			 = "v-pills-messages-tab"
						   data-toggle	 = "pill"
						   href			 = "#v-pills-messages"
						   role			 = "tab"
						   aria-controls = "v-pills-messages"
						   aria-selected = "false">Beverages</</a>

						<a class		 = "nav-link"
						   id			 = "v-pills-settings-tab"
						   data-toggle	 = "pill"
						   href			 = "#v-pills-settings"
						   role			 = "tab"
						   aria-controls = "v-pills-settings"
						   aria-selected = "false">Desserts</a>

						<a class		 = "nav-link"
						   id			 = "v-pills-tava-tab"
						   data-toggle	 = "pill"
						   href			 = "#v-pills-tava"
						   role			 = "tab"
						   aria-controls = "v-pills-tava"
						   aria-selected = "false">Kids Specials</a>

					</div>
				</div>

				<div class = "col-9">

					<div class = "tab-content"
						 id	   = "v-pills-tabContent">
						<div class			 = "tab-pane
												fade
												show
												active"
							 id				 = "v-pills-home"
							 role			 = "tabpanel"
							 aria-labelledby = "v-pills-home-tab">

							<div class = "row">

					<?php
						include "connect.php";

							$s = mysqli_query($con, "SELECT * FROM menu");

							while($r = mysqli_fetch_array($s)) {
					?>

								<div class = "col-lg-4
											  col-md-6
											  special-grid
											  drinks">
									<div class = "gallery-single
												  fix">

										<img src   = "Manager/<?php echo $r['image']; ?>"
											 class = "img-fluid"
											 alt   = "Image"
											 style = "width : 263px;
											 		  height: 170px;">

										<div class = "why-text">

											<h4><?php echo $r['title']; ?></h4>
											<p><?php echo $r['description']; ?></p>
											<p>Rs <?php echo $r['price']; ?> /-</p>

											<h5 align = "center">

									<?php
									        if(isset($_SESSION['uid'])) {
									?>

									            <a href = "addcart.php?pid=<?php echo $r['id']; ?>&
									                                   uid=<?php echo $_SESSION['uid']; ?>&
									                                   price=<?php echo $r['price']; ?>">Add Cart</a>

									<?php
									        } else {
									?>

									            <a href = "login.php">Add Cart</a>

									<?php   } ?>

											</h5>
										</div>

									</div>
								</div>

								<?php } ?>

							</div>
						</div>


						<div class			 = "tab-pane
												fade"
							 id				 = "v-pills-profile"
							 role			 = "tabpanel"
							 aria-labelledby = "v-pills-profile-tab">
							<div class = "row">

					<?php
						include "connect.php";

							$s = mysqli_query($con, "SELECT * FROM menu
															  WHERE category = 'Main_Dishes'");

							while($r = mysqli_fetch_array($s)){
					?>

								<div class = "col-lg-4
											  col-md-6
											  special-grid
											  drinks">
									<div class = "gallery-single
												  fix">

										<img src   = "Manager/<?php echo $r['image']; ?>"
											 class = "img-fluid"
											 alt   = "Image"
											 style = "width : 263px;
											 		  height:170px;">

										<div class = "why-text">

											<h4><?php echo $r['title']; ?></h4>
											<p><?php echo $r['description']; ?></p>

											<h5>Rs <?php echo $r['price']; ?> /-</h5>

											<h5 align = "center">

									<?php
									        if(isset($_SESSION['uid'])) {
									?>

									            <a href = "addcart.php?pid=<?php echo $r['id']; ?>&
									                                   uid=<?php echo $_SESSION['uid']; ?>&
									                                   price=<?php echo $r['price']; ?>">Add Cart</a>

									<?php
									        } else {
									?>

									            <a href = "login.php">Add Cart</a>

									<?php   } ?>

											</h5>

										</div>
									</div>
								</div>

					<?php 	} ?>

							</div>

						</div>


						<div class			 = "tab-pane
												fade"
							 id				 = "v-pills-messages"
							 role			 = "tabpanel"
							 aria-labelledby = "v-pills-messages-tab">
							<div class = "row">

					<?php
					    include "connect.php";

					        $s = mysqli_query($con, "SELECT * FROM menu
															  WHERE category = 'Beverages'");

					        while($r = mysqli_fetch_array($s)) {
					?>

								<div class = "col-lg-4
											  col-md-6
											  special-grid
											  drinks">
									<div class = "gallery-single
												  fix">

										<img src = "Manager/<?php echo $r['image']; ?>"
											 class = "img-fluid"
											 alt = "Image"
											 style = "width : 263px;
											 		  height: 170px;">

										<div class = "why-text">

											<h4><?php echo $r['title']; ?></h4>
											<p><?php echo $r['description']; ?></p>

											<h5>Rs <?php echo $r['price']; ?> /-</h5>

											<h5 align = "center">
									<?php
									        if(isset($_SESSION['uid'])) {
									?>
									            <a href = "addcart.php?pid=<?php echo $r['id']; ?>&
									                                   uid=<?php echo $_SESSION['uid']; ?>&
									                                   price=<?php echo $r['price']; ?>">Add Cart</a>

									<?php   } else { ?>

									            <a href = "login.php">Add Cart</a>

									<?php   } ?>

											</h5>

										</div>
									</div>
								</div>

					<?php 	} ?>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- Menu ends here -->

<!--  Gallery starts here -->
	<div class = "gallery-box">
		<div class = "container">

			<div class = "row">
				<div class = "col-lg-12">

					<div class = "heading-title
								  text-center">

						<h2>Gallery</h2>
						<p>
						Delicious food from our restaurant is listed here
						</p>

					</div>

				</div>
			</div>

			<div class = "tz-gallery">
				<div class = "row">

		<?php
		    include "connect.php";

		        $s = mysqli_query($con, "SELECT * FROM gallery
												  ORDER BY id
												  DESC LIMIT 9");

		        while($r = mysqli_fetch_array($s)) {
		?>

					<div class = "col-sm-12
								  col-md-4
								  col-lg-4">

						<a class = "lightbox"
						   href = "<?php echo "Manager/".$r['image']; ?>">

							<img class = "img-fluid"
								 src = "<?php echo "Manager/".$r['image']; ?>"
								 alt = "Gallery Images"

								 style = "width : 350px;
								 		  height: 250px;">
						</a>
					</div>

		<?php 	} ?>

				</div>
			</div>

		</div>
	</div>
<!-- Gallery Ends Here -->

<!--  Customer Reviews section starts here -->
	<div class = "customer-reviews-box">
		<div class = "container">

			<div class = "row">

				<div class = "col-lg-12">
					<div class = "heading-title
								  text-center">

						<h2>Reviews from our valuable customers</h2>
						<p>"Positive customer feedback is like gold. It's rare, valuable, and it can help you grow your business."
						</p>

					</div>
				</div>

			</div>

			<div class = "row">
				<div class = "col-md-8
							  mr-auto
							  ml-auto
							  text-center">
					<div id		   = "reviews"
						 class	   = "carousel
						 			  slide"
						 data-ride = "carousel">

						<div class = "carousel-inner
									  mt-4">

				<?php
				    include "connect.php";

				        $s = mysqli_query($con, "SELECT * FROM review
														  LIMIT 4");

				        while($r = mysqli_fetch_array($s)) {
				?>

							<div class = "carousel-item
										  text-center ">

								<div class = "img-box
											  p-1
											  border
											  rounded-circle
											  m-auto">

									<img class = "d-block
												  w-100
												  rounded-circle"
										 src   = "images/quotations-button.png"
										 alt   = "">

								</div>

								<h5 class = "mt-4
											 mb-0">
									<strong class = "text-warning
													 text-uppercase">
									<?php echo $r['name']; ?>
									</strong>
								</h5>

								<h6 class = "text-dark
											 m-0">
								Review : <?php echo $r['review']; ?>
								</h6>
								<p class = "m-0
											pt-3">
								<?php echo $r['description']; ?>
								</p>

							</div>

				<?php 	} ?>

							<div class = "carousel-item
										  text-center
										  active">

								<div class = "img-box
											  p-1
											  border
											  rounded-circle
											  m-auto">

									<img class = "d-block
												  w-100
												  rounded-circle"
										 src   = "images/quotations-button.png"
										 alt   = "">

								</div>

								<h5 class = "mt-4
											 mb-0">
									<strong class = "text-warning
													 text-uppercase">
									Vidyan
									</strong>
								</h5>

								<h6 class = "text-dark
											 m-0">
								Review : Exellent
								</h6>
								<p class = "m-0
											pt-3">
								Better Food, Better Health
								</p>

							</div>
						</div>

						<a class	  = "carousel-control-prev"
						   href		  = "#reviews"
						   role		  = "button"
						   data-slide = "prev">

							<i class	   = "fa
											  fa-angle-left"
							   aria-hidden = "true">
							</i>
							<span class = "sr-only">Previous</span>

						</a>

						<a class	  = "carousel-control-next"
						   href		  = "#reviews"
						   role		  = "button"
						   data-slide = "next">

							<i class	   = "fa
											  fa-angle-right"
							   aria-hidden = "true"></i>
							<span class = "sr-only">Next</span>

						</a>

                    </div>
				</div>
			</div>
		</div>
	</div>
<!--  Customer Reviews section ends here -->

<?php include "footer.php"; ?>
