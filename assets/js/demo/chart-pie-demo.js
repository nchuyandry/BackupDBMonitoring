// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

// Pie Chart Example
var ctx = document.getElementById("chartPie");
var myPieChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: ["Temperature", ""],
    datasets: [{
      data: [28, 73],
      backgroundColor: ['#00ff00', '#d5d5d5'],
      hoverBackgroundColor: ['#2df101', '#ebebeb'],
      hoverBorderColor: "rgba(234, 236, 244, 1)",
    }],
  },
  options: {
  	circumference: 1 * Math.PI,
  	rotation: 1 * Math.PI,
    maintainAspectRatio: false,
    tooltips: {
      enabled: false,
    },
    legend: {
      display: false
    },
    cutoutPercentage: 70,
  },
  
});
