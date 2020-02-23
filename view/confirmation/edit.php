
<?php 
session_start();
if(empty($_SESSION["username"])){
	echo "<script>window.location.href='../../view/index.php';</script>";
}

require_once "header.php"; ?>

<?php 
  
    $mid = isset($_GET['mid']) ? $_GET['mid'] : "";

    $date = $name = $parents = $sponsors = $minister = $encoder = "";

    require_once '../class/Confirmation.php';
    $Confirmation = new Confirmation();

    $Confirmation_arr = $Confirmation->getone($mid);

     foreach($Confirmation_arr as $value){
  
          $date = $value['date'];
          $name = $value['name'];
          $parents = $value['parents'];
          $sponsors = $value['sponsors'];
          $minister = $value['minister'];
          $encoder = $value['encoder'];
          $id = $value['id'];
          $created_at = $value['created_at'];
           
}

  if(isset($_POST['btnUpdate'])){
        
        if(!empty($_POST['name'])){
          require_once '../class/Confirmation.php';
          $Confirmation = new Confirmation();

          $date = $_POST['date'];
          $name = $_POST['name'];
          $parents = $_POST['parents'];
          $sponsors = $_POST['sponsors'];
          $minister = $_POST['minister'];
          $encoder = $_POST['encoder'];
          $id = $_POST['id'];
         
          
          
          $updateConfirmation = $Confirmation->update($date,$name,$parents,$sponsors,$minister,$encoder,$id);
         

     
          if($updateConfirmation == true){
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
                    <form method="post" action="edit.php">
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
                                <input required type="hidden" name="id" value="<?php echo $_GET['mid'] ?>" class="form-control">
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