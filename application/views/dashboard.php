
<!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta http-equiv="refresh" content="120">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>Monitoring Temperature & Humidity</title>
		<link rel="icon" href="<?=base_url() ?>assets/img/temperature-low-solid.svg">
		<!-- Custom fonts for this template-->
		<link href="<?=base_url()?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

		<!-- Custom styles for this template-->
		<link href="<?=base_url()?>assets/css/sb-admin-2.min.css" rel="stylesheet">
		<style>
			.degree {
				position: absolute;
				left: 50%;
				transform: translate(-50%, 0);
				font-size: 40px;
				bottom: 0;
			}
		</style>
	</head>

	<body id="page-top">

		<!-- Page Wrapper -->
		<div id="wrapper">

			<!-- Sidebar -->
		<?php $this->load->view('sidebar') ?>
			<!-- End of Sidebar -->

			<!-- Content Wrapper -->
			<div id="content-wrapper" class="d-flex flex-column">

				<!-- Main Content -->
				<div id="content">

					<!-- Topbar -->
					<?php $this->load->view('topbar') ?>
					<!-- End of Topbar -->

					<!-- Begin Page Content -->
					<div class="container-fluid">

						<!-- Page Heading 
						<div class="d-sm-flex align-items-center justify-content-between mb-4">
							<h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
							<a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
								<i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
							</div>-->

						<!-- Content Row -->
						<div class="row">
							<?php $x = explode('<br><br>',$data);	
							$t = substr($x[1],23,2);
							$hu = substr($x[2],20,2);
							if ($t > 25 || $hu > 70) {
								$CI =& get_instance();
								$CI->sendmail($t,$hu);
							}			
							 ?>
							<!-- Card Example -->
							<div class="col-xl-6 col-md-6 mb-4">
								<div class="card border-left-primary shadow h-100 py-2">
									<div class="card-body">
										<div class="row no-gutters align-items-center">
											<div class="col mr-2">
												<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Temperature</div>
												<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo substr($x[1],23,4)?> &deg; Celcius</div>
											</div>
											<div class="col-auto">
												<i class="fas fa-temperature-low fa-2x "></i>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-md-6 mb-4">
								<div class="card border-left-primary shadow h-100 py-2">
									<div class="card-body">
										<div class="row no-gutters align-items-center">
											<div class="col mr-2">
												<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Humidity</div>
												<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo substr($x[2],20,4) ?> %</div>
											</div>
											<div class="col-auto">
												<i class="fas fa-tint fa-2x "></i>
											</div>
										</div>
									</div>
								</div>
							</div>

							
							
						</div>

						<!-- Content Row -->

						<div class="row">
							<pre><?php //var_dump($graph)?></pre>
							<!-- Area Chart -->
						

							<!-- --------------------------------------Pie Chart------------------------------------- -->
							<div class="col-xl-4 col-lg-5">
								<div class="card shadow mb-4">
									<!-- Card Header - Dropdown -->
									<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
										<h6 class="m-0 font-weight-bold text-primary"> Gauge</h6>
									</div>
									<!-- Card Body -->
									<div class="card-body">
										<div class="chart-pie pt-4 pb-2">
											<canvas id="temperature" width="238" height="200"></canvas>
											<!--<p class="degree"><?php $tm = substr($x[1],23,5); echo $tm; ?></p>-->
										</div>
										
									</div>
								</div>
							</div>
							<div class="col-xl-8 col-lg-5 mb-4">
								<div class="card shadow mb-4">
									<!-- Card Header - Dropdown -->
									<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
										<h6 class="m-0 font-weight-bold text-primary"> Line</h6>
									</div>
									<!-- Card Body -->
									<div class="card-body">
										<div class="chart-pie pt-4 pb-2">
											<canvas id="tempLine" width="1000" height="1000"></canvas>
										</div>
										<!--<div class="form-group" align="right">
											<select class=" form-control-sm" id="tanggal">
											<?php foreach($stgl as $row) { ?>
												<option><?php echo $row['thn']."-".$row['bln'];?></option> 
											<?php }	?>
											</select>
											<button type="button" class="btn btn-primary btn-sm" id="update">Update</button>
										</div>-->
									    
									</div>
								</div>
							</div>
						</div>

						<!-- Content Row -->
						<div class="row">

							<!-- Content Column -->
							<div class="col-xl-8 col-lg-5 mb-4">
								<div class="card shadow mb-4">
									<!-- Card Header - Dropdown -->
									<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
										<h6 class="m-0 font-weight-bold text-primary">Humidity </h6>
									</div>
									<!-- Card Body -->
									<div class="card-body">
										<div class="chart-pie pt-4 pb-2">
											<canvas id="humdLine"></canvas>
										</div>

									</div>
								</div>
							</div>
							
							<div class="col-xl-4 col-lg-5">
								<div class="card shadow mb-4">
									<!-- Card Header - Dropdown -->
									<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
										<h6 class="m-0 font-weight-bold text-primary">Humidity</h6>
									</div>
									<!-- Card Body -->
									<div class="card-body">
										<div class="chart-pie pt-4 pb-2">
											<canvas id="humidity" width="238" height="200"></canvas>
											<!--<p class="degree"><?php $tm = substr($x[1],23,5); echo $tm; ?></p>-->
										</div>

									</div>
								</div>
							</div>
						</div>

					</div>
					<!-- /.container-fluid -->

				</div>
				<!-- End of Main Content -->

				<!-- Footer -->
				<footer class="sticky-footer bg-white">
					<div class="container my-auto">
						<div class="copyright text-center my-auto">
							<span>Copyright &copy; ICT Dept. 2020</span>
						</div>
					</div>
				</footer>
				<!-- End of Footer -->

			</div>
			<!-- End of Content Wrapper -->

		</div>
		<!-- End of Page Wrapper -->

		<!-- Scroll to Top Button-->
		<a class="scroll-to-top rounded" href="#page-top">
			<i class="fas fa-angle-up"></i>
		</a>

		<!-- Logout Modal-->
		<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
						<button class="close" type="button" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
					<div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
					<div class="modal-footer">
						<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
						<a class="btn btn-primary" href="login.html">Logout</a>
					</div>
				</div>
			</div>
		</div>

		<!-- Bootstrap core JavaScript-->
		<script src="<?=base_url() ?>assets/vendor/jquery/jquery.min.js"> </script>
		<script src="<?=base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"> </script>

		<!-- Core plugin JavaScript-->
		<script src="<?=base_url() ?>assets/vendor/jquery-easing/jquery.easing.min.js"> </script>

		<!-- Custom scripts for all pages-->
		<script src="<?=base_url() ?>assets/js/sb-admin-2.min.js"> </script>

		<!-- Page level plugins -->
		<script src="<?=base_url() ?>assets/vendor/chart.js/Chart.min.js"> </script>
		<script src="<?=base_url() ?>assets/js/Chart.bundle.js"> </script>
		<script src="<?=base_url() ?>assets/js/chartjs-gauge.js"> </script>
		<!--<script src="<?=base_url() ?>assets/js/line.js"> </script>
-->
		<!-- Page level custom scripts -->
		<script src="<?=base_url() ?>assets/js/demo/chart-area-demo.js"> </script>
		<script src="<?=base_url() ?>assets/js/demo/chart-pie-demo.js"> </script>
<!--		<script src="<?=base_url() ?>assets/js/gauge.js"></script>
		<script src="<?=base_url() ?>assets/js/gauge2.js"></script>-->
		<?php
		//var_dump($tanggal);
		foreach ($graph as $row) {
			$tanggal = $row->tgl;
			$tgl3[] = $row->tgl;
			$dt = strtotime($tanggal);
			$tgl2 = date('Y-m-d', $dt);
			$tgl[] = date('H:i:s', $dt);
			$temp[] = $row->temperature;
			$humd[] = $row->humidity;
			//echo json_encode($tgl3);
		}
		
		$tm = substr($x[1],23,4);
		$hm = substr($x[2],20,4);
		$tm1 = 100 - $tm;
		$hm1 = 100 - $hm;
		
		
		?>
		<script type="text/javascript">
		//==========================================================================================================================

		// Set new default font family and font color to mimic Bootstrap's default styling
		Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
		Chart.defaults.global.defaultFontColor = '#858796';

		// Pie Chart Example
		var ctx = document.getElementById("temperature");
		var myPieChart = new Chart(ctx, {
			type: "doughnut",
			data: {
				labels: ["Temperature", " "],
				datasets: [
					{
						data: [<?php echo $tm. ",2 ," . $tm1;?>],
						backgroundColor: [
						"rgb(78, 115, 223)","rgba(0, 0, 0)","rgb(135, 135, 135)"],
						borderWidth: 0,
						hoverBackgroundColor: [
						"rgb(78, 115, 200)","rgba(0, 0, 0)","rgb(135, 135, 135)"
						],
						hoverBorderWidth: 0
					},
					{
						data: [<?php echo $tm. ",2 ," . $tm1;?>],
						backgroundColor: [
							"rgba(0, 0, 0, 0)",
							"rgba(0, 0, 0)",
							"rgba(0, 0, 0, 0)",
							"rgba(0, 0, 0, 0)",
							"rgba(0, 0, 0, 0)"
						],
						borderWidth: 0,
						hoverBackgroundColor: [
							"rgba(0, 0, 0, 0)",
							"rgba(0, 0, 0)",
							"rgba(0, 0, 0, 0)",
							"rgba(0, 0, 0, 0)",
							"rgba(0, 0, 0, 0)"
						],
						hoverBorderWidth: 0
					}
				]
			},
			options: {
				cutoutPercentage: 0,
				rotation: -1 * Math.PI,
				circumference: 1 * Math.PI,
				legend: {
					display: true
				},
				tooltips: {
					enabled: true
				},
				title: {
					display: true,
					text: '<?php echo $tm?> C',
					fontSize: 30,
					position: "bottom"
				}
			}
		});

		// Set new default font family and font color to mimic Bootstrap's default styling
		Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
		Chart.defaults.global.defaultFontColor = '#858796';

		// Pie Chart Example
		var ctx = document.getElementById("humidity");
		var myPieChart = new Chart(ctx, {
			type: "doughnut",
			data: {
				labels: ["Humidity", " "],
				datasets: [
					{
						data: [<?php echo $hm. ",2 ," . $hm1;?>],
						backgroundColor: [
							"rgb(51, 204, 255)","rgba(0, 0, 0)","rgb(135, 135, 135)"],
						borderWidth: 0,
						hoverBackgroundColor: [
							"rgb(0, 153, 255)","rgba(0, 0, 0)","rgba(135, 135, 135, 0.9)"
						],
						hoverBorderWidth: 0
					},
					{
						data: [<?php echo $hm. ",2 ," . $hm1;?>],
						backgroundColor: [
							"rgba(0, 0, 0, 0)",
							"rgba(0, 0, 0)",
							"rgba(0, 0, 0, 0)",
							"rgba(0, 0, 0, 0)",
							"rgba(0, 0, 0, 0)"
						],
						borderWidth: 0,
						hoverBackgroundColor: [
							"rgba(0, 0, 0, 0)",
							"rgba(0, 0, 0)",
							"rgba(0, 0, 0, 0)",
							"rgba(0, 0, 0, 0)",
							"rgba(0, 0, 0, 0)"
						],
						hoverBorderWidth: 0
					}
				]
			},
			options: {
				cutoutPercentage: 0,
				rotation: -3.1415926535898,
				circumference: 3.1415926535898,
				legend: {
					display: true
				},
				tooltips: {
					enabled: true
				},
				title: {
					display: true,
					text: '<?php echo $hm?> %',
					fontSize: 30,
					position: "bottom"
				}
			}
		});


	// ==========================================================================================================================

			Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
			Chart.defaults.global.defaultFontColor = '#858796';
			var ctx = document.getElementById("tempLine");
			var myLineChart = new Chart(ctx, {
				type: 'line',
				data: {				
					labels: <?php echo json_encode($tgl3);?>,	
					datasets:[{
						label: 'Temperature',
						data:<?php echo json_encode($temp);?>,
						backgroundColor: "rgba(78, 115, 223, 0.09)",
						borderColor: "rgba(78, 115, 223, 1)",
						pointRadius: 1,
						pointBackgroundColor: "rgba(78, 115, 223, 1)",
						pointBorderColor: "rgba(78, 115, 223, 1)",
						pointHoverRadius: 1,
						pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
						pointHoverBorderColor: "rgba(78, 115, 223, 1)",
						pointHitRadius: 10,
						pointBorderWidth: 1,
					}]
				},
				options: {
					legend: {
						display: true
					},
					/*title: {
						display: true,
						text: 'Tanggal',
						fontSize: 30,
						position: 'bottom'
					},*/
					maintainAspectRatio: false,
					scales: {
						yAxes: [{
							ticks: {
								min: 0,
								max: 50								
							},
							gridLines: {
								drawBorder: true
							},
							scaleLabel: {
								display: true,
								labelString: 'Temperature (C)'
							}
							}]
					}
					
				}
			});
			
			Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
			Chart.defaults.global.defaultFontColor = '#858796';
			var ctx = document.getElementById("humdLine");
			var myLineChart = new Chart(ctx, {
				type: 'line',
				data: {
					labels: <?php echo json_encode($tgl3);?>,
					datasets:[{
							label: 'Humidity',
							data:<?php echo json_encode($humd);?>,
							backgroundColor: "rgba(51, 204, 255, 0.09)",
							borderColor: "rgba(51, 204, 255, 1)",
							pointRadius: 1,
							pointBackgroundColor: "rgba(51, 204, 255, 1)",
							pointBorderColor: "rgba(51, 204, 255, 1)",
							pointHoverRadius: 1,
							pointHoverBackgroundColor: "rgba(51, 204, 255, 1)",
							pointHoverBorderColor: "rgba(51, 204, 255, 1)",
							pointHitRadius: 10,
							pointBorderWidth: 1,
						}]
				},
				options: {
					legend: {
						display: true
					},
					/*title: {
						display: true,
						text: '',
						fontSize: 30,
						position: "bottom"
					},*/
					maintainAspectRatio: false,
					scales: {
						/*xAxes: [{
							type: 'time',
							time: {
								unit: 'year'
							},
							gridLines: {
								display: true,
								drawBorder: true
							}
						}],*/
						yAxes: [{
							ticks: {
								min: 0,
								max:50
							},
							gridLines: {
								drawBorder: true
							},
							scaleLabel: {
								display: true,
								labelString: 'Humidity (%)'
							}
						}]
					}

				}
			});
	</script>
	</body>

</html>
