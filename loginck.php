<?php

session_start();

	$u = $_POST['uid'];
	$p = $_POST['pass'];

include  "connect.php";

	$s = mysqli_query($con, "SELECT * FROM registration WHERE userid = '$u' AND password = '$p'");

	if($r = mysqli_fetch_array($s)) {

		$_SESSION['uid'] = $u;
		
		header("location: index.php");

	} else {

		echo "<br>
			  <div style = 'text-align		: center;
			  				color			: black;
							background-color: tomato;
							padding			: 10px;
							border-radius	: 10px;'>
			  Please Enter valid User Name and Password
			  </div>
			  <br>";

		include "login.php";
	}

?>
