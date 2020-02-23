
<?php 
session_start();

if(!empty($_SESSION["username"])){
	echo "<script>window.location.href='dashboard/';</script>";
}
require_once "header.php"; ?>
<!-- Login  -->
<div class="container mt-5">
	<div class="row">
		<div class="col-md-4 mx-auto">
			<div class="card animated flipInY">
			
				<div class="card-body">
					<div class="col-md-12 mb-3">
						<center><img src="assets/img/man.png" class="mt-3"></center>
					</div>
					<p>Please login to continue.</p>
					<form action="loginprocess.php" method="POST">
						
					<div class="input-group mb-3">
					  <div class="input-group-prepend">
					    <span class="input-group-text text-center" id="basic-addon1">Username</span>
					  </div>
					  <input type="text" class="form-control" required name="username" aria-label="Username" aria-describedby="basic-addon1">
					</div>

					<div class="input-group mb-3">
					  <div class="input-group-prepend">
					    <span class="input-group-text text-center" id="basic-addon1">Password&nbsp;</span>
					  </div>
					  <input type="password" class="form-control" required name="password" aria-label="Password" aria-describedby="basic-addon1">
					</div>

					<div class="mb-3">
						<button type="submit" name="btnLogin" class="btn btn-block btn-primary"><i class="fa fa-sign-in"></i> Sign in</button>	
						<a href=""><button type="button" class="btn btn-block btn-link"> Create an account</button>	</a>
					</div>

					</form>
				</div>
				
			</div>
		</div>
	</div>
</div>

<?php require_once "footer.php" ?>