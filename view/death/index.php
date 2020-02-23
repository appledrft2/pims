
<?php 
session_start();
if(empty($_SESSION["username"])){
	echo "<script>window.location.href='../../view/index.php';</script>";
}

require_once '../class/Death.php';
$death = new Death();

require_once "header.php"; ?>
<!-- Marraige  -->
<div class="container mt-3 mb-3">
	<div class="row">
		<div class="col-md-12  animated fadeIn">
			<div class="card mb-2"><h4 class="font-weight-light navbar-text ml-3">Death Records</h4></div>
			
			<div class="card mb-5">
				<div class="card-body">
				
					<a href="form.php"><button class="btn btn-info mb-3"><i class="fa fa-plus"></i> New Death</button>	</a>
					<div class="table-responsive">
						<table id="myTable" class="table table-hover table-striped">
							<thead>
								<tr>
									<th>#</th>
									<th>Name</th>
		                            <th>Date of Death</th>
		                            <th>Burial</th>
		                            <th>Cemetery</th>
		                            <th>Celebrant</th>
		                            <th>Remarks</th>
		                            <th>Encoder</th>
		                            <th>Options</th>
								</tr>
							</thead>
							<tbody>
								 <?php
                    				$i = 1;
                                    $Death_arr = $death->getall();

                                    foreach($Death_arr as $value){
                                        echo "<tr>
                                       		<td>".$i++."</tdd>
                                            <td >$value[name]</td>
                                            <td>$value[dateofdeath]</td>
                                            <td>$value[burial]</td>
                                            <td>$value[cemetery]</td>
                                            <td>$value[celebrant]</td>
                                            <td>$value[remarks]</td>
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

