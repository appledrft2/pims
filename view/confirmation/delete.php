<?php 

if(isset($_GET['mid'])){

	$mid = $_GET['mid'];

	require_once '../class/Confirmation.php';
    $Confirmation = new Confirmation();

    $deleteConfirmation = $Confirmation->destroy($mid);
         

     
  if($deleteConfirmation){
    echo "<script>alert('Record Successfully Deleted')</script>";
    
    echo "<script>window.location.href='index.php'</script>";
  }else{
     echo "<script>alert('Failed to delete record!')</script>";
  }


}

 ?>