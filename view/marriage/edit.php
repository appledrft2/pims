<?php 
session_start();
if(empty($_SESSION["username"])){
	echo "<script>window.location.href='../../view/index.php';</script>";
}


require_once "header.php"; ?>

<?php 
  
    $mid = isset($_GET['mid']) ? $_GET['mid'] : "";

    $date = $date1= $groom= $age= $address= $mother= $father= $bride= $age1= $address1= $mother1= $father1= $church= $priest= $nuptial_type = "";

    require_once '../class/Marriage.php';
    $marriage = new Marriage();

    $marriage_array = $marriage->getcoupleone($mid);

     foreach($marriage_array as $value){
  
          $groom = $value['groom']; 
          $bride = $value['bride'];
          $age = $value['age']; 
          $age1 = $value['age1'];
          $address = $value['address']; 
          $address1 = $value['address1'];
          $mother = $value['mother']; 
          $mother1 = $value['mother1'];
          $father = $value['father']; 
          $father1 = $value['father1'];
          $date = $value['date'];
          $date1 = $value['date1'];
          $church = $value['church'];
          $priest = $value['priest'];
          $nuptial_type = $value['nuptial_type'];
           
   
  }

  if(isset($_POST['btnUpdate'])){
        
        if(!empty($_POST['date'])){
          require_once '../class/Marriage.php';
          $marriage = new Marriage();

          $id = $_POST['id'];
          $date = $_POST['date'];
          $date1 = $_POST['date1'];
          $groom = $_POST['groom']; 
          $age = $_POST['age'];
          $address = $_POST['address'];
          $mother = $_POST['mother'];
          $father= $_POST['father'];
          $bride = $_POST['bride'];
          $age1 = $_POST['age1'];
          $address1 = $_POST['address1'];
          $mother1 = $_POST['mother1'];
          $father1 = $_POST['father1'];
          $church = $_POST['church'];
          $priest = $_POST['priest'];
          $nuptial_type = $_POST['nuptial_type'];
          
          
          $updatemarriage = $marriage->updatemarriage($id,$date, $date1, $groom, $age, $address, $mother, $father, $bride, $age1, $address1, $mother1, $father1, $church, $priest,$nuptial_type);
         

     
          if($updatemarriage){
            echo "<script>alert('Record Successfully Updated')</script>";
            
            echo "<script>window.location.href='index.php'</script>";
          }else{
             echo "<script>alert('Failed to update record!')</script>";
          }
        }else{
          echo "<script>alert('Record cannot be empty!')</script>";
        }
    }



?>
<a href="index.php" class="btn btn-link"><i class="fa fa-arrow-left"></i> Back</a>

<!-- Marriage  -->
<div class="container mt-3 mb-3">
	<div class="row">

		<div class="col-md-12  animated fadeIn">
	
			<div class="card mb-2"><h4 class="font-weight-light navbar-text ml-3">Marriage Records </h4></div>
			
			<div class="card mb-5">
				<div class="card-body">
				
					 <div class="box box-info">
              <div class="box-header text-center">
                
                <h3 class="text-center box-title">Certificate of Marriage Form</h3> 
              </div>
              <div class="box-body">
                <div class="form-group">
                  <div class="col-md-12 mt-3">

                    <form method="post" action="edit.php">
                    <input type="hidden" name="id" value="<?php echo $_GET['mid']?>">
                                <div class="row"> 
                                    <div class="col-md-3 ">
                                        <label><b>Date Registration</b></label>
                                        <input required type="date" name="date" value="<?php echo $date ?>" class="form-control">
                                    </div>
                                    <div class="col-md-3">
                                        <label><b>Date Of Nuptial</b></label>
                                        <input required type="date" name="date1" value="<?php echo $date1 ?>" class="form-control">
                                    </div>
                                    <div class="col-md-3">
                                        <label><b>Nuptial Type</b></label>
                                        <select class="form-control" name="nuptial_type">
                                          <option value="">Select</option>
                                          <option <?php if($nuptial_type=="Ordinary"){echo "selected";} ?> >Ordinary</option>
                                          <option <?php if($nuptial_type=="Special"){echo "selected";} ?>>Special</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mt-2"> 
                                    <div class="col-md-6 ">
                                        <label><b>Name of the Groom</b></label>
                                        <input required type="text" name="groom" value="<?php echo $groom ?>" class="form-control">
                                    </div>
                                    <div class="col-md-2">
                                        <label><b>Age</b></label>
                                        <input required type="number" name="age" value="<?php echo $age ?>" class="form-control">
                                    </div>
                                    <div class="col-md-4">
                                        <label><b>Address</b></label>
                                        <input required type="text" name="address" value="<?php echo $address ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="row mt-2"> 
                                    <div class="col-md-6 ">
                                        <label><b>Mother</b></label>
                                        <input required type="text" name="mother" value="<?php echo $mother ?>" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label><b>Father</b></label>
                                        <input required type="text" name="father" value="<?php echo $father ?>" class="form-control">
                                    </div>
                                    
                                </div>
                                <div class="row mt-2"> 
                                    <div class="col-md-6 ">
                                        <label><b>Name of Bride</b></label>
                                        <input required type="text" name="bride" value="<?php echo $bride ?>" class="form-control">
                                    </div>
                                    <div class="col-md-2">
                                        <label><b>Age</b></label>
                                        <input required type="number" name="age1" value="<?php echo $age1 ?>" class="form-control">
                                    </div>
                                    <div class="col-md-4">
                                        <label><b>Address</b></label>
                                        <input required type="text" name="address1" value="<?php echo $address1?>" class="form-control">
                                    </div>
                                </div>
                                <div class="row mt-2"> 
                                    <div class="col-md-6 ">
                                        <label><b>Mother</b></label>
                                        <input required type="text" name="mother1" value="<?php echo $mother1 ?>" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label><b>Father</b></label>
                                        <input required type="text" name="father1" value="<?php echo $father1 ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="row mt-2"> 
                                    <div class="col-md-6 ">
                                        <label><b>Name of the Church</b></label>
                                        <input required type="text" name="church" value="<?php echo $church ?>" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label><b>Priest Name</b></label>
                                        <input required type="text" name="priest" value="<?php echo $priest ?>" class="form-control">
                                    </div>
                                </div>
                                <br>
                                <div class="pull-right">
                                  <input required type="hidden" name="encoder" value="<?php echo $_SESSION['username'] ?>" class="form-control">
                                <input  type="submit" name="btnUpdate" class="btn btn-primary btn-sm" value="Update Record">
                                </div>
                                    
                            </form>    
        
    
  
                </div>
              </div>
              </div>
            </div>
				

				</div>
			</div>
		</div>
	</div>	
</div>

<?php require_once "footer.php" ?>

