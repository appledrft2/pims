<?php 
	session_start();
	unset($_SESSION["username"]);
	session_unset();
	session_destroy();
	echo "<script>window.location.href='index.php';</script>";
 ?>