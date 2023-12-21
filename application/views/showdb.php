<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="refresh" content="60;">
		<title>Monitoring</title>
		<link rel="stylesheet" href="<?=base_url() ?>assets/css/bootstrap.min.css" >
		<!--<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">-->

		<!-- Custom styles for this template-->
		<link href="<?=base_url() ?>assets/css/sb-admin-2.min.css" rel="stylesheet">
		
		
	</head>

	<!-- 192.168.4.82 3306 -->

	<body>
		<?php
		error_reporting(E_ALL ^ E_NOTICE);
		$host1 = "192.168.4.82:3306";
		$username1 = "dashboard";
		$password1 = "Databa53";
		?>

		<div class="container">
			<h1 class="mt-5" align="center">DB</h1>
			<div class="row">
				<div class="col-xl-6 col-lg-6 mb-4">
					<div class="card shadow mb-4">
						<!-- Card Header - Dropdown -->
						<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
							<h6 class="m-0 font-weight-bold text-primary"> Graph</h6>
						</div>
						<!-- Card Body -->
						<div class="card-body">
							<div class="chart-pie pt-4 pb-2">
								<canvas id="graph1" width="1000" height="1000"></canvas>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6 mb-4">
					<div class="card shadow mb-4">
						<!-- Card Header - Dropdown -->
						<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
							<h6 class="m-0 font-weight-bold text-primary"> InnoDB Buffer Pool</h6>
						</div>
						<!-- Card Body -->
						<div class="card-body">
							<div class="chart-pie pt-4 pb-2">
								<canvas id="graph1" width="1000" height="1000"></canvas>
							</div>
						</div>
					</div>
				</div>
			</div>
			
				<?php
				$con = mysqli_connect($host1,$username1,$password1) or die("can't connect server");
				$result1 = mysqli_query($con, "show global status like 'Innodb_buffer_pool_pages_total'");
				#$timeResult=mysqli_query("select now()");
				#$time=mysqli_result($timeResult, 0,0);
				while ($status = mysqli_fetch_array($result1)) {
					//var_dump($status);
				var_dump($status[1]);
				$ibptot = $status[1];
				?>
				<pre>
					<?php var_dump($status)?>
				</pre>
<?php
				}
				var_dump($ibptot);
				?>
			

		</div>

		<script src="<?=base_url() ?>assets/vendor/chart.js/Chart.min.js"> </script>
		<script src="<?=base_url() ?>assets/js/Chart.bundle.js"> </script>
		<script src="<?=base_url() ?>assets/js/chartjs-gauge.js"> </script>
		<script src="<?=base_url() ?>assets/vendor/jquery/jquery.min.js"> </script>
		<script src="<?=base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"> </script>
		<script type="text/javascript">
			// Set new default font family and font color to mimic Bootstrap's default styling
			Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
			Chart.defaults.global.defaultFontColor = '#858796';

			// Pie Chart Example
			var ctx = document.getElementById("graph1");
			var myPieChart = new Chart(ctx, {
				type: 'bar',
				data: {
					labels: ["innodb", ""],
					datasets: [{
						data: [<?php echo $ibptot;?>],
							backgroundColor: ['#00ff00', '#d5d5d5'],
							hoverBackgroundColor: ['#2df101', '#ebebeb'],
							hoverBorderColor: "rgba(234, 236, 244, 1)",
						}],
				},
				options: {
					/*circumference: 2 * Math.PI,
					rotation: 1 * Math.PI,*/
					maintainAspectRatio: false,
					tooltips: {
						enabled: true,
					},
					legend: {
						display: true
					},
					cutoutPercentage: 70,
				},

			});
		</script>
	</body>
</html>