/* globals Chart:false, feather:false */

var xValues = ['subjects'];
var yValues = [results];

new Chart("myChart", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      fill:false,
      lineTension:0,
         backgroundColor: "rgba(0,0,255,1.0)",
      borderColor: "rgba(0,0,255,0.1)",
      data: yValues
    }]
  },
  options: {
    legend: {display:false},
    scales: {
      yAxes: [{ticks: {min: 1, max:100}}],
    }
  }
});
