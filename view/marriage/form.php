
<?php 
session_start();
if(empty($_SESSION["username"])){
	echo "<script>window.location.href='../../view/index.php';</script>";
}

require_once "header.php"; ?>

<?php 

    $date = $date1= $groom= $age= $address= $mother= $father= $bride= $age1= $address1= $mother1= $father1= $church= $priest= $nuptial_type = $encoder = "";

    if(isset($_POST['btnsubmit'])){
        
        if(!empty($_POST['date'])){
          require_once '../class/Marriage.php';
          $marriage = new Marriage();
          
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
          $encoder = $_POST['encoder'];
          
          $addmarriage = $marriage->insert($date, $date1, $groom, $age, $address, $mother, $father, $bride, $age1, $address1, $mother1, $father1, $church, $priest,$nuptial_type,$encoder);
         

     
          if($addmarriage){
            echo "<script>alert('Record Successfully Added')</script>";
            $date = $date1= $groom= $age= $address= $mother= $father= $bride= $age1= $address1= $mother1= $father1= $church= $priest="";
            echo "<script>window.location.href='index.php'</script>";
          }else{
             echo "<script>alert('Failed to add record!')</script>";
          }
        }else{
          echo "<script>alert('Record cannot be empty!')</script>";
        }
    }

?>

<!-- Marriage  -->
<div class="container mt-3 mb-3">
	<div class="row">

		<div class="col-md-12  animated fadeIn">
			<a href="index.php" class="btn btn-link"><i class="fa fa-arrow-left"></i> Back</a>
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

                    <form method="post" action="form.php">
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
                                          <option>Ordinary</option>
                                          <option>Special</option>
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
                                <input  type="submit" name="btnsubmit" class="btn btn-primary btn-sm" value="Add Record">
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

