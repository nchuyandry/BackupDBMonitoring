
<!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta http-equiv="refresh" content="1200">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>Monitoring Temperature & Humidity</title>
		<link rel="icon" href="<?=base_url() ?>assets/img/temperature-low-solid.svg">
		<!-- Custom fonts for this template-->
		<link href="<?=base_url() ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

		<!-- Custom styles for this template-->
		<link href="<?=base_url() ?>assets/css/sb-admin-2.min.css" rel="stylesheet">
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
							<div class="col-xl-12 col-lg-7">

							<!-- Area Chart -->
							<div class="card shadow mb-4">
								<div class="card-header py-3">
									<h6 class="m-0 font-weight-bold text-primary">Area Chart</h6>
								</div>
								<div class="card-body">
									<div class="chart-area">
											<!--<canvas id="myChart" ></canvas>-->
											<canvas id="tempLine" ></canvas>
									</div>
									<div class="form-group" align="right">
										<select class=" form-control-sm" id="tanggal">
										<?php foreach ($stgl as $row) { ?>
											<option id="value"><?php echo $row['thn']."-".$row['bln']; ?></option>
										<?php } ?>
										</select>
										<button type="button" class="btn btn-primary btn-sm" id="update">Update</button>
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
		<script src="<?=base_url() ?>assets/js/moment.min.js"> </script>
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
		?>
		<script type="text/javascript">
			Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
			Chart.defaults.global.defaultFontColor = '#858796';
			var ctx = document.getElementById("tempLine");
			var myLineChart = new Chart(ctx, {
				type: 'line',
				data: {
					labels: <?php echo json_encode($tgl3);?>,
					datasets:[{
							label: 'Temperature',
							data: <?php echo json_encode($temp);?>,
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
						xAxes: [{
								type: 'time',
								distribution: 'series',
								ticks: { 
									major: {
										enabled: true,
										fontStyle: 'bold'
									},
									source: 'data',
									autoSkip: false,
									autoSkipPadding: 100,						
								},	
								time: { 
									unit: 'day' ,
									displayFormats: { 
										day: ' Y-M-D H:m' 
									} 
								}
						}],
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

			var chart = new Chart(ctx, cfg);

			document.getElementById('update').addEventListener('click', function() {
				alert("I am an alert box!");
				/*var type = document.getElementById('value').value;
				var dataset = chart.config.data.datasets[0];
				dataset.type = type;
				dataset.data = [1,2,3,4,5];
				chart.update();*/
			});
		</script>
		<script type="text/javascript">
			Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
			Chart.defaults.global.defaultFontColor = '#858796';
			var chart = new Chart(document.getElementById('myChart'), {
				type: 'line',
				data: {
					datasets: [{
							data: [{x:15-04-2018,y:10},
								{x:16-04-2018,y:20},
								{x:17-04-2018,y:20},
								{x:18-04-2018,y:20},
								{x:19-04-2018,y:20},
								{x:20-04-2018,y:20},
								{x:21-04-2018,y:20},
								{x:22-04-2018,y:20},
								{x:23-04-2018,y:20},
								{x:24-04-2018,y:20},
								{x:25-04-2018,y:20},
								{x:28-04-2018,y:30}],
							borderColor: '#3e95cd',
							fill: false
						}]},

				options: {
					scales: {
						xAxes: [{
								type: 'time',
								unit: 'day' ,
								distribution: 'series',
								ticks: { source: 'data' },
								/*time: { displayFormats: { day: 'MMM DD' } }*/
							}]
					},
					maintainAspectRatio: false,
					title: {
						display: true,
						text: 'Student Assessment Cluster Scores'
					},


				} });
		</script>
	</body>

</html>
