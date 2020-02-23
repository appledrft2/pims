
<?php 
session_start();
if(empty($_SESSION["username"])){
	echo "<script>window.location.href='../../view/index.php';</script>";
}

require_once '../class/Marriage.php';
$marriage = new Marriage();

require_once "header.php"; ?>
<!-- Marraige  -->
<div class="container mt-3 mb-3">
	<div class="row">
		<div class="col-md-12  animated fadeIn">
			<div class="card mb-2"><h4 class="font-weight-light navbar-text ml-3">Marriage Records</h4></div>
			
			<div class="card mb-5">
				<div class="card-body">
				
					<a href="form.php"><button class="btn btn-info mb-3"><i class="fa fa-plus"></i> New Marriage</button>	</a>
					<div class="table-responsive">
						<table id="myTable" class="table table-hover table-striped">
							<thead>
								<tr>
									<th>#</th>
									<th>Groom / Bride</th>
		                            <th>Church</th>
		                            <th>Priest</th>
		                            <th>Date Issued</th>
		                            <th>Date of Nuptial</th>
		                            <th>Encoder</th>
		                            <th>Options</th>
								</tr>
							</thead>
							<tbody>
								 <?php
                    				$i = 1;
                                    $marriage_array = $marriage->getCouple();

                                    foreach($marriage_array as $value){
                                        echo "<tr>
                                       		<td>".$i++."</tdd>
                                            <td >$value[groom] & $value[bride]</td>
                                            <td>$value[church]</td>
                                            <td>$value[priest]</td>
                                            <td>$value[date]</td>
                                            <td>$value[date1]</td>
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
