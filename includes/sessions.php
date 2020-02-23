<?php
session_start();
if(empty($_SESSION["username"])){
	echo "<script>window.location.href='../login';</script>";
}
?>