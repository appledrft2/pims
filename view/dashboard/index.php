
<?php 
session_start();
if(empty($_SESSION["username"])){
	echo "<script>window.location.href='../../view/index.php';</script>";
}
require_once "../../includes/config.php";


$sql = "SELECT (SELECT COUNT(*) FROM marriage) AS marriage, (SELECT COUNT(*) FROM death) AS death,(SELECT COUNT(*) FROM confirmation) AS confirmation,(SELECT COUNT(*) FROM baptism) AS baptism";
$mysql = $connection->prepare($sql);
$mysql->execute();
$mysql->bind_result($tmarriage,$tdeath,$tconfirmation,$tbaptism);
$mysql->fetch();





require_once "header.php"; ?>
<!-- Dashboard  -->
<div class="container mt-3 mb-3">
	<div class="row">
		<div class="col-md-12 animated fadeIn">
			<div class="card mb-2"><h4 class="font-weight-light navbar-text ml-3">Overview</h4></div>
			<div class="card mb-5">
				<div class="card-body">
					
					<div class="row mb-3">
						<div class="col-md-3">
							<div class="card bg-primary">
								<h3 class="text-center text-white font-weight-light">Total Marriage</h3>
								<h4 class="text-center text-white font-weight-light"><?php echo $tmarriage ?></h4>
							</div>
						</div>

						<div class="col-md-3">
							<div class="card bg-success">
								<h3 class="text-center text-white font-weight-light">Total Baptismal</h3>
								<h4 class="text-center text-white font-weight-light"><?php echo $tbaptism; ?></h4>
							</div>
						</div>

						<div class="col-md-3">
							<div class="card bg-danger">
								<h3 class="text-center text-white font-weight-light">Total Deaths</h3>
								<h4 class="text-center text-white font-weight-light"><?php echo $tdeath ?></h4>
							</div>
						</div>

						<div class="col-md-3">
							<div class="card bg-warning">
								<h3 class="text-center text-white font-weight-light">Total Confirmed</h3>
								<h4 class="text-center text-white font-weight-light"><?php  echo $tconfirmation ?></h4>
							</div>
						</div>
					</div>

				<div class="row mt-5 ">
					<div class="col-md-12">
						<h4 class="text-center font-weight-light"><?php echo date("Y") ?> Annual Report</h4>
						
						<div class="chart">
		          <canvas id="myChart" width="600" height="100"></canvas>
		        </div>
					</div>
				</div>

				</div>
			</div>
		</div>
	</div>	
</div>

<?php 

$thisyear = date('Y');

$sql = "SELECT (SELECT COUNT(*) FROM marriage WHERE created_at LIKE '%$thisyear%') AS marriage, (SELECT COUNT(*) FROM death WHERE created_at LIKE '%$thisyear%') AS death,(SELECT COUNT(*) FROM confirmation WHERE created_at LIKE '%$thisyear%') AS confirmation,(SELECT COUNT(*) FROM baptism WHERE created_at LIKE '%$thisyear%') AS baptism";
$mysql = $connection2->prepare($sql);
$mysql->execute();
$mysql->bind_result($tmarriage,$tdeath,$tconfirmation,$tbaptism);
$mysql->fetch();



require_once "footer.php" ?>


<script src="../assets/chartjs-old/Chart.min.js"></script>


<script>
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Marriage', 'Baptismal', 'Deaths','Confirmed' ],
        datasets: [{
            label: '# of Records',
            data: [<?php echo $tmarriage ?>, <?php echo $tbaptism ?>, <?php echo $tdeath ?>, <?php echo $tconfirmation ?>,],
            backgroundColor: [
                'rgba(54, 175, 235, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 206, 86, 0.2)',
        
        
            ],
            borderColor: [
                'rgba(54, 175, 235, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(255, 99, 132, 1)',
                'rgba(255, 206, 86, 1)',
              
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>