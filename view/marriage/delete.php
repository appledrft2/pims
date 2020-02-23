<?php 

if(isset($_GET['mid'])){

	$mid = $_GET['mid'];

	require_once '../class/Marriage.php';
    $marriage = new Marriage();

    $deletemarriage = $marriage->deletemarriage($mid);
         

     
  if($deletemarriage){
    echo "<script>alert('Record Successfully Deleted')</script>";
    
    echo "<script>window.location.href='index.php'</script>";
  }else{
     echo "<script>alert('Failed to delete record!')</script>";
  }


}

 ?>