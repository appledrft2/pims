<?php 
// configure the database connection
define("HOST","localhost");
define("USER","root");
define("PW","");
define("DB","dbsaintjames");

$connection = new mysqli(HOST,USER,PW,DB);
$connection2 = new mysqli(HOST,USER,PW,DB);
?>