
<?php 
session_start();
if(empty($_SESSION["username"])){
	echo "<script>window.location.href='../../view/index.php';</script>";
}

require_once "header.php"; ?>

<?php 
  
    $mid = isset($_GET['mid']) ? $_GET['mid'] : "";

    $name = $address= $age= $parent= $minister= $dateofdeath= $cemetery= $burial= $celebrant= $remarks = "";

    require_once '../class/Death.php';
    $death = new Death();

    $death_arr = $death->getone($mid);

     foreach($death_arr as $value){
  
          $name = $value['name']; 
          $address = $value['address'];
          $age = $value['age']; 
          $parent = $value['parent'];
          $minister = $value['minister']; 
          $dateofdeath = $value['dateofdeath'];
          $cemetery = $value['cemetery']; 
          $burial = $value['burial'];
          $celebrant = $value['celebrant']; 
          $remarks = $value['remarks'];
           
}

  if(isset($_POST['btnUpdate'])){
        
        if(!empty($_POST['name'])){
          require_once '../class/Death.php';
          $death = new Death();

           $name = $_POST['name']; 
          $address = $_POST['address'];
          $age = $_POST['age']; 
          $parent = $_POST['parent'];
          $minister = $_POST['minister']; 
          $dateofdeath = $_POST['dateofdeath'];
          $cemetery = $_POST['cemetery']; 
          $burial = $_POST['burial'];
          $celebrant = $_POST['celebrant']; 
          $remarks = $_POST['remarks'];
          $id = $_POST['id'];
          $encoder = $_POST['encoder'];
          
          
          $updatedeath = $death->updatedeath($name,$address,$age,$parent,$minister,$dateofdeath,$cemetery,$burial,$celebrant,$remarks,$encoder,$id );
         

     
          if($updatedeath){
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

<!-- Marriage  -->
<div class="container mt-3 mb-3">
	<div class="row">

		<div class="col-md-12  animated fadeIn">
			<a href="index.php" class="btn btn-link"><i class="fa fa-arrow-left"></i> Back</a>
			<div class="card mb-2"><h4 class="font-weight-light navbar-text ml-3">Death Records </h4></div>
			

					 <div class="card mb-5">
              <div class="mt-3 text-center"><h3 class="text-center card-title">Certificate of Death Form</h3> </div>
              <div class="card-body">
                <div class="form-group">
                  <div class="col-md-12 mt-3">
                    <form method="post" action="edit.php">
                          <div class="row">
                              <div class="col-md-4">
                                <input type="hidden" name="id" value="<?php echo $_GET['mid']?>">
                                  <label><b>Date of Death:</b></label>
                                  <input required type="date" name="dateofdeath" value="<?php echo $dateofdeath ?>" class="form-control">
                              </div>

                              <div class="col-md-4">
                                  <label><b>Date of Burial:</b></label>
                                  <input required type="date" name="burial" value="<?php echo $burial ?>" class="form-control">
                              </div> 

                              <div class="col-md-6">
                                  <label><b>Name:</b></label>
                                  <input required type="name" name="name" value="<?php echo $name ?>" class="form-control">
                              </div>
                              <div class="col-md-2">
                                  <label><b>Age:</b></label>
                                  <input required type="number" name="age" value="<?php echo $age ?>" class="form-control">
                              </div>
                              <div class="col-md-4">
                                  <label><b>Address:</b></label>
                                  <input required type="text" name="address" value="<?php echo $address ?>" class="form-control">
                              </div>

                              <div class="col-md-6">
                                  <label><b>Parents or Spouse:</b></label>
                                  <input required type="text" name="parent" value="<?php echo $parent ?>" class="form-control">
                              </div>

                              <div class="col-md-6">
                                  <label><b>Sacraments - Ministers:</b></label>
                                  <input required type="text" name="minister" value="<?php echo $minister ?>" class="form-control">
                              </div>

                              <div class="col-md-3">
                                  <label><b>Celebrant at funeral:</b></label>
                                  <input required type="text" name="celebrant" value="<?php echo $celebrant ?>" class="form-control">
                              </div>

                              <div class="col-md-3">
                                  <label><b>Cemetery:</b></label>
                                  <input required type="text" name="cemetery" value="<?php echo $cemetery ?>" class="form-control">
                              </div>

                              <div class="col-md-6">
                                  <label><b>Remarks:</b></label>
                                  <input required type="text" name="remarks" value="<?php echo $remarks ?>" class="form-control">
                              </div>

                              <br>
                          </div>
                          <div class="mt-3 pull-right">
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

<?php require_once "footer.php" ?>

