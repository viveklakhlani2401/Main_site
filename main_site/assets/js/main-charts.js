
function bg_color(){
  var bg_colors="#"+ Math.floor(Math.random()*16777215).toString(16);
  return bg_colors;
  }
  var ctx = document.getElementById("chart-bars").getContext("2d");
  new Chart(ctx, {
    type: "bar",
    data: {
      labels: ["Jan","Feb","Mar","Apr","May","June","July","Aug","Sept","Oct","Nov","Dec"],
      datasets: [{
        label: "Sales",
        tension: 0.4,
        borderWidth: 0,
        borderRadius: 4,
        borderSkipped: false,
        backgroundColor:[bg_color(),bg_color(),bg_color(),bg_color(),bg_color(),bg_color(),bg_color(),bg_color(),bg_color(),bg_color(),bg_color(),bg_color()],
        data: [50, 70, 10, 22, 50, 10, 40,15,40,70,50,40],
        maxBarThickness: 10
      }, ],
    },
    options: {
      responsive: true,
      maintainAspectRatio: true,
      plugins: {
        legend: {
          display: false,
        }
      },
      interaction: {
        intersect: false,
        mode: 'index',
      },
      scales: {
        y: {
          grid: {
            drawBorder: false,
            display: true,
            drawOnChartArea: true,
            drawTicks: false,
            borderDash: [5, 5],
            color: 'rgba(0, 0, 0, .4)'
          },
          ticks: {
            suggestedMin: 0,
            suggestedMax: 500,
            beginAtZero: true,
            padding: 10,
            font: {
              size: 14,
              weight: 300,
              lineHeight: 2
            },
            color: "#fff"
          },
        },
        x: {
          grid: {
            drawBorder: false,
            display: true,
            drawOnChartArea: true,
            drawTicks: false,
            borderDash: [5, 5],
            color: 'rgba(255, 255, 255, .4)'
          },
          ticks: {
            display: true,
            color: '#f8f9fa',
            padding: 10,
            font: {
              size: 14,
              weight: 300,
              family: "Roboto",
              style: 'normal',
              lineHeight: 2
            },
          }
        },
      },
    },
  });
  
  
  var ctx2 = document.getElementById("chart-line-1").getContext("2d");
  
      new Chart(ctx2, {
        type: "line",
        data: {
          labels: ["Jan","Feb","Mar","Apr","May","June","July","Aug","Sept","Oct","Nov","Dec"],
          datasets: [{
            label: "Mobile apps",
            tension: 0,
            borderWidth: 0,
            pointRadius: 5,
            pointHoverRadius: 7,
            pointBackgroundColor: [bg_color(),bg_color(),bg_color(),bg_color(),bg_color(),bg_color(),bg_color(),bg_color(),bg_color(),bg_color(),bg_color(),bg_color()],
            pointBorderColor: "transparent",
            borderColor: "rgba(0,0,0,0.8)",
            borderWidth: 4,
            backgroundColor:'transparent',
            fill: true,
            data: [50, 40, 300, 320, 500, 350, 200, 230, 500,400,370,450],
            maxBarThickness: 6
  
          }],
        },
        options: {
          responsive: true,
          maintainAspectRatio: true,
          plugins: {
            legend: {
              display: false,
            }
          },
          interaction: {
            intersect: false,
            mode: 'index',
          },
          scales: {
            y: {
              grid: {
                drawBorder: false,
                display: true,
                drawOnChartArea: true,
                drawTicks: false,
                borderDash: [5, 5],
                color: 'rgba(0,0,0, .5)'
              },
              ticks: {
                display: true,
                color: '#f8f9fa',
                padding: 10,
                font: {
                  size: 14,
                  weight: 300,
                  lineHeight: 2
                },
              }
            },
            x: {
              grid: {
                drawBorder: false,
                display: true,
                drawOnChartArea: true,
                drawTicks: false,
                borderDash: [5, 5],
                color: 'rgba(255, 255, 255, .5)'
              },
              ticks: {
                display: true,
                color: '#f8f9fa',
                padding: 10,
                font: {
                  size: 14,
                  weight: 300,
                  lineHeight: 2
                },
              }
            }
          },
        },
      });
  
      var ctx3 = document.getElementById("chart-line-2").getContext("2d");
  
      new Chart(ctx3, {
        type: "line",
        data: {
          labels: ["Jan","Feb","Mar","Apr","May","June","July","Aug","Sept","Oct","Nov","Dec"],
          datasets: [{
            label: "Mobile apps",
            tension: 0.4,
            borderWidth: 0,
            pointRadius: 5,
            pointHoverRadius: 7,
            pointBackgroundColor: [bg_color(),bg_color(),bg_color(),bg_color(),bg_color(),bg_color(),bg_color(),bg_color(),bg_color(),bg_color(),bg_color(),bg_color()],
            pointBorderColor: "transparent",
            borderColor: "rgba(0,0,0,0.8)",
            borderWidth: 4,
            backgroundColor:'transparent',
            fill: true,
            data: [50, 40, 300, 320, 500, 350, 200, 230, 500,400,370,450],
            maxBarThickness: 6,
          }],
        },
        options: {
          responsive: true,
          maintainAspectRatio: true,
          plugins: {
            legend: {
              display: false,
            }
          },
          interaction: {
            intersect: false,
            mode: 'index',
          },
          scales: {
            y: {
              grid: {
                drawBorder: false,
                display: true,
                drawOnChartArea: true,
                drawTicks: false,
                borderDash: [5, 5],
                color: 'rgba(0,0,0, .5)'
              },
              ticks: {
                display: true,
                color: '#f8f9fa',
                padding: 10,
                font: {
                  size: 14,
                  weight: 300,
                  lineHeight: 2
                },
              }
            },
            x: {
              grid: {
                drawBorder: false,
                display: true,
                drawOnChartArea: true,
                drawTicks: false,
                borderDash: [5, 5],
                color: 'rgba(255, 255, 255, .5)'
              },
              ticks: {
                display: true,
                color: '#f8f9fa',
                padding: 10,
                font: {
                  size: 14,
                  weight: 300,
                  lineHeight: 2
                },
              }
            }
          },
        },
      });    