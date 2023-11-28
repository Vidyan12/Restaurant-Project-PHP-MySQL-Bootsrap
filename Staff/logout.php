<?php
	session_start();
	session_destroy();

	header("location:/Signature/index.php");
?>
