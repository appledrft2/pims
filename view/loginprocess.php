<?php 
session_start();

if(isset($_POST['btnLogin'])){

$username = isset($_POST['username']) ? $_POST['username'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

require_once '../includes/config.php';

$sql = "SELECT * FROM tblaccount WHERE username = ?";
$mysql = $connection->prepare($sql);
$mysql->bind_param('s',$username);
$mysql->execute();
$mysql->bind_result($id,$dbusername,$dbpassword,$role);

$mysql->fetch();


if($password != ''){
if($dbpassword == $password){
	echo '<script>alert("Successfully logged in!")</script>';

	$_SESSION["username"] = $username;

	?> <script type="text/javascript">setTimeout(function(){
  window.location = "dashboard/index.php";
}, 100);</script><?php

}else{
	echo '<script>alert("Wrong Username or Password")</script>';

	?> <script type="text/javascript">setTimeout(function(){
  window.location = "index.php";
}, 100);</script><?php

}
}else{
	echo '<script>alert("Cannot be empty")</script>';

	?> <script type="text/javascript">setTimeout(function(){
  window.location = "index.php";
}, 100);</script><?php
}

}

 ?>