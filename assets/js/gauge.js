
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
					"rgb(0, 255, 11)","rgba(0, 0, 0)","rgb(135, 135, 135)"],
				borderWidth: 0,
				hoverBackgroundColor: [
					"rgb(0, 197, 25)","rgba(0, 0, 0)","rgb(255, 0, 0)"
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
			text: '<?php echo $tm?> C',
			fontSize: 30,
			position: "bottom"
		}
	}
});
