<?php
$data = $this->curl->simple_get('http://10.12.0.9/sensor.htm');
$x = explode("<br><br>", $data);
$tm = substr($x[1],23,4);
$hm = substr($x[2],20,4);
$tm1 = 100 - $tm;
$hm1 = 100 - $hm;
?>

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
					"rgb(0, 153, 255)","rgba(0, 0, 0)","rgb(255, 0, 0)"
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