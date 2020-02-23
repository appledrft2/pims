
<?php 
session_start();
if(empty($_SESSION["username"])){
	echo "<script>window.location.href='../../view/index.php';</script>";
}

require_once '../class/Confirmation.php';
$Confirmation = new Confirmation();

require_once "header.php"; ?>
<!-- Marraige  -->
<div class="container mt-3 mb-3">
	<div class="row">
		<div class="col-md-12  animated fadeIn">
			<div class="card mb-2"><h4 class="font-weight-light navbar-text ml-3">Confirmation Records</h4></div>
			
			<div class="card mb-5">
				<div class="card-body">
				
					<a href="form.php"><button class="btn btn-info mb-3"><i class="fa fa-plus"></i> New Confirmation</button>	</a>
					<div class="table-responsive">
						<table id="myTable" class="table table-hover table-striped">
							<thead>
								<tr>
									<th>#</th>
									<th>Date</th>
		                            <th>Name</th>
		                            <th>Parents</th>
		                            <th>Sponsors</th>
		                            <th>Minister</th>
		                            <th>Encoder</th>
		                            <th>Options</th>
								</tr>
							</thead>
							<tbody>
								 <?php
                    				$i = 1;
                                    $Confirm_arr = $Confirmation->getall();

                                    foreach($Confirm_arr as $value){
                                        echo "<tr>
                                       		<td>".$i++."</tdd>
                                            <td >$value[date]</td>
                                            <td>$value[name]</td>
                                            <td>$value[parents]</td>
                                            <td>$value[sponsors]</td>
                                            <td>$value[minister]</td>
						                  	<td>$value[encoder]</td>
                                            <td> 
                                           
												<a href='edit.php?mid=$value[id]' class='btn btn-block btn-primary btn-sm'><span class='fa fa-edit'></span></a>
												<a href='delete.php?mid=$value[id]' onclick='return confirm_delete()' class='btn btn-sm btn-danger btn-block' ><i class='fa fa-trash'></i></a>
												
                                              
                                       </td>
                                          

                                        </tr>";
                                    }
                                ?> 
							</tbody>
						</table>
					</div>
				

				</div>
			</div>
		</div>
	</div>	
</div>

<?php require_once "footer.php" ?>

