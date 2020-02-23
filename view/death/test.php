
<?php
require_once '../class/Death.php';
$death = new Death();
$death_arr = $death->getall();

echo json_encode($death_arr);



                                   