<?php session_start(); ?>
<?php include "header.php"; ?>

<div style = "height: 140px;"></div>
<div style = "width			  : 90%;
			  margin		  : 0 auto;
			  background-color: silver;
			  padding		  : 50px;">

<?php
		if (isset($_SESSION['uid'])) {

		include "connect.php";
			$uid = $_SESSION['uid'];
			$nm  = $_POST['nm'];
			$mo  = $_POST['mo'];
			$em  = $_POST['em'];
			$ad  = $_POST['ad'];

			$s 	 = mysqli_query($con, "SELECT * FROM addcart WHERE u_id = '$uid'");

		while ($r = mysqli_fetch_array($s)) {
			$p_id = $r['p_id'];

			mysqli_query($con, "INSERT INTO checkout (p_id, u_id, name, mobile, email, location)

											  VALUES ('$p_id', '$uid', '$nm', '$mo', '$em', '$ad')"

						) or die("Error");
		}
?>

	<div style = "color			  : #b7e352;
				  background-color:#FFA500;
				  font-size		  : 2.3em;">
	Your order has been successfully placed!!
	</div>
	<div style = "color: #4d2e1f; font-size:1.8em;">
	Please wait for comfirmation message
	<br>
	Our HotLine: +94 0762615082
	</div>

<?php
		} else {
?>
			<div style = "color			  : black;
						  background-color: pink;
						  font-size		  : 2.1em;
						  padding		  : 20px;">
			no Item found in Cart..start shooping again!
			Continue to Check Out
			</div>

<?php 	} ?>

</div>
<br><br><br>



<?php include "footer.php"; ?>
