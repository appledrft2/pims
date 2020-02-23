
<?php 
session_start();
if(empty($_SESSION["username"])){
	echo "<script>window.location.href='../../view/index.php';</script>";
}

require_once "header.php"; ?>

<?php 

    $date = $name = $parents = $sponsors = $minister = $encoder = "";

    if(isset($_POST['btnsubmit'])){
        
        if(!empty($_POST['name'])){
          require_once '../class/Confirmation.php';
          $Confirmation = new Confirmation();
          
          $data[0] = $_POST['date'];
          $data[1] = $_POST['name'];
          $data[2] = $_POST['parents'];
          $data[3] = $_POST['sponsors'];
          $data[4] = $_POST['minister'];
          $data[5] = $_POST['encoder'];

        
          $add_con = $Confirmation->insert($data);
         

     
          if($add_con){
            echo "<script>alert('Record Successfully Added')</script>";
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
			<div class="card mb-2"><h4 class="font-weight-light navbar-text ml-3">Confirmation Records </h4></div>
			

					 <div class="card mb-5">
              <div class="mt-3 text-center"><h3 class="text-center card-title">Certificate of Confirmation Form</h3> </div>
              <div class="card-body">
                <div class="form-group">
                  <div class="col-md-12 mt-3">
                    <form method="post" action="form.php">
                          <div class="row">
                              <div class="col-md-4">
                                  <label><b>Date of Confirmation:</b></label>
                                  <input required type="date" name="date" value="<?php echo $date ?>" class="form-control">
                              </div>

                              <div class="col-md-4">
                                  
                              </div> 

                              <div class="col-md-6">
                                  <label><b>Name:</b></label>
                                  <input required type="name" name="name" value="<?php echo $name ?>" class="form-control">
                              </div>
                             
                              <div class="col-md-6">
                                  <label><b>Parents:</b></label>
                                  <input required type="text" name="parents" value="<?php echo $parents ?>" class="form-control">
                              </div>

                              <div class="col-md-6">
                                  <label><b>Sponsors:</b></label>
                                  <input required type="text" name="sponsors" value="<?php echo $sponsors ?>" class="form-control">
                              </div>

                              <div class="col-md-6">
                                  <label><b>Minister:</b></label>
                                  <input required type="text" name="minister" value="<?php echo $minister ?>" class="form-control">
                              </div>

                           
                              <br>
                          </div>
                          <div class="mt-3 pull-right">
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

<?php require_once "footer.php" ?>

