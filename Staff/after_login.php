<link rel = "stylesheet"
			 type = "text/css"
			 href = "style2.css">

		<div class = "h" align="center">Signature Cuisine - Staff Panel</div>
		<?php include "header.php"?>
        <div class = "content">
		<br>
		<br>

<?php include "connect.php"; ?>


<?php include "connect.php"; ?>

		<table border	   = "1"
			   cellpadding = "6"
			   cellspacing = "8"
			   align = "center">
			<tr>
				<th colspan = "8">Orders</th>
			</tr>

			<tr>
				<th>Product ID</th>
				<th>User ID</th>
				<th>Customer Name</th>
				<th>Mobile</th>
				<th>Email</th>
				<th>Address</th>
			
			</tr>

	<?php
			$s = mysqli_query($con, "SELECT * FROM checkout");

			while($r = mysqli_fetch_array($s)) {
	?>

			<tr>
				<td><?php echo $r['p_id']; ?></td>

				<td><?php echo $r['u_id']; ?></td>

				<td><?php echo $r['name']; ?></td>

				<td><?php echo $r['mobile']; ?></td>

				<td><?php echo $r['email']; ?></td>

				<td><?php echo $r['location']; ?></td>

				
			</tr>
	<?php 	} ?>
		</table>
	</div>

<?php include "footer.php"; ?>
