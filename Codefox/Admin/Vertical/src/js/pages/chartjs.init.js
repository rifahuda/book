
/*
Template Name: Codefox - Responsive Bootstrap 4 Admin Dashboard
Author: CoderThemes
Version: 3.1.0
Website: https://coderthemes.com/
Contact: support@coderthemes.com
File: Chartjs chart init js
*/


!function($) {
    "use strict";

    var ChartJs = function() {};

    ChartJs.prototype.respChart = function(selector,type,data, options) {
        Chart.defaults.global.defaultFontColor="#9ea4ba",
        Chart.defaults.scale.gridLines.color="rgba(102, 122, 142, 0.1)";
        // get selector by context
        var ctx = selector.get(0).getContext("2d");
        // pointing parent container to make chart js inherit its width
        var container = $(selector).parent();

        // enable resizing matter
        $(window).resize( generateChart );

        // this function produce the responsive Chart JS
        function generateChart(){
            // make chart width fit with its container
            var ww = selector.attr('width', $(container).width() );
            switch(type){
                case 'Line':
                    new Chart(ctx, {type: 'line', data: data, options: options});
                    break;
                case 'Doughnut':
                    new Chart(ctx, {type: 'doughnut', data: data, options: options});
                    break;
                case 'Pie':
                    new Chart(ctx, {type: 'pie', data: data, options: options});
                    break;
                case 'Bar':
                    new Chart(ctx, {type: 'bar', data: data, options: options});
                    break;
                case 'Radar':
                    new Chart(ctx, {type: 'radar', data: data, options: options});
                    break;
                case 'PolarArea':
                    new Chart(ctx, {data: data, type: 'polarArea', options: options});
                    break;
            }
            // Initiate new chart or Redraw

        };
        // run function - render chart at first load
        generateChart();
    },
    //init
    ChartJs.prototype.init = function() {
        //creating lineChart
        var lineChart = {
            labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September"],
            datasets: [
                {
                    label: "Sales Analytics",
                    fill: false,
                    lineTension: 0.3,
                    backgroundColor: "#fff",
                    borderColor: "#348cd4",
                    borderCapStyle: 'butt',
                    borderDash: [],
                    borderDashOffset: 0.0,
                    borderJoinStyle: 'miter',
                    pointBorderColor: "#348cd4",
                    pointBackgroundColor: "#fff",
                    pointBorderWidth: 1,
                    pointHoverRadius: 5,
                    pointHoverBackgroundColor: "#fff",
                    pointHoverBorderColor: "#348cd4",
                    pointHoverBorderWidth: 3,
                    pointRadius: 1,
                    pointHitRadius: 10,
                    data: [65, 59, 80, 81, 56, 55, 40, 35, 30]
                }
            ]
        };

        var lineOpts = {
            scales: {
                yAxes: [{
                    ticks: {
                        max: 100,
                        min: 20,
                        stepSize: 10
                    }
                }]
            }
        };

        this.respChart($("#lineChart"),'Line',lineChart, lineOpts);

        //donut chart
        var donutChart = {
            labels: [
                "Desktops",
                "Tablets",
                "Mobiles"
            ],
            datasets: [
                {
                    data: [300, 50, 100],
                    backgroundColor: [
                        "#348cd4",
                        "#45bbe0",
                        "#ebeff2"
                    ],
                    hoverBackgroundColor: [
                        "#348cd4",
                        "#45bbe0",
                        "#ebeff2"
                    ],
                    hoverBorderColor: "#fff"
                }]
        };
        this.respChart($("#doughnut"),'Doughnut',donutChart);


        //Pie chart
        var pieChart = {
            labels: [
                "Desktops",
                "Tablets",
                "Mobiles"
            ],
            datasets: [
                {
                    data: [300, 50, 100],
                    backgroundColor: [
                        "#348cd4",
                        "#45bbe0",
                        "#ebeff2"
                    ],
                    hoverBackgroundColor: [
                        "#348cd4",
                        "#45bbe0",
                        "#ebeff2"
                    ],
                    hoverBorderColor: "#fff"
                }]
        };
        this.respChart($("#pie"),'Pie',pieChart);


        //barchart
        var barChart = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [
                {
                    label: "Sales Analytics",
                    backgroundColor: "rgba(30, 166, 154, 0.3)",
                    borderColor: "#1ea69a",
                    borderWidth: 1,
                    hoverBackgroundColor: "rgba(30, 166, 154, 0.6)",
                    hoverBorderColor: "#1ea69a",
                    data: [65, 59, 80, 81, 56, 55, 40,20]
                }
            ]
        };
        this.respChart($("#bar"),'Bar',barChart);


        //radar chart
        var radarChart = {
            labels: ["Eating", "Drinking", "Sleeping", "Designing", "Coding", "Cycling", "Running"],
            datasets: [
                {
                    label: "Desktops",
                    backgroundColor: "rgba(179,181,198,0.2)",
                    borderColor: "rgba(179,181,198,1)",
                    pointBackgroundColor: "rgba(179,181,198,1)",
                    pointBorderColor: "#fff",
                    pointHoverBackgroundColor: "#fff",
                    pointHoverBorderColor: "rgba(179,181,198,1)",
                    data: [65, 59, 90, 81, 56, 55, 40]
                },
                {
                    label: "Tablets",
                    backgroundColor: "rgba(255,99,132,0.2)",
                    borderColor: "rgba(255,99,132,1)",
                    pointBackgroundColor: "rgba(255,99,132,1)",
                    pointBorderColor: "#fff",
                    pointHoverBackgroundColor: "#fff",
                    pointHoverBorderColor: "rgba(255,99,132,1)",
                    data: [28, 48, 40, 19, 96, 27, 100]
                }
            ]
        };

        var polarRadarOpts = {
            scale: {
                ticks: {
                    backdropColor: 'rgba(102, 122, 142, 0.1)'
                },
                gridLines: {
                    color: 'rgba(102, 122, 142, 0.1)'
                },
                angleLines: {
                    color: 'rgba(102, 122, 142, 0.1)' // lines radiating from the center
                }
            }
        };
        this.respChart($("#radar"),'Radar',radarChart, polarRadarOpts);

        //Polar area chart
        var polarChart = {
            datasets: [{
                data: [
                    11,
                    16,
                    7,
                    18
                ],
                backgroundColor: [
                    "#348cd4",
                    "#45bbe0",
                    "#ebeff2",
                    "#1ea69a"
                ],
                label: 'My dataset', // for legend
                hoverBorderColor: "#fff"
            }],
            labels: [
                "Series 1",
                "Series 2",
                "Series 3",
                "Series 4"
            ]
        };

        var polarAreaOpts = {
            scale: {
                ticks: {
                    backdropColor: 'rgba(102, 122, 142, 0.1)'
                },
                gridLines: {
                    color: 'rgba(102, 122, 142, 0.1)'
                },
                angleLines: {
                    color: 'rgba(102, 122, 142, 0.1)' // lines radiating from the center
                }
            }
        };

        this.respChart($("#polarArea"),'PolarArea',polarChart, polarAreaOpts);
    },
    $.ChartJs = new ChartJs, $.ChartJs.Constructor = ChartJs

}(window.jQuery),

//initializing
function($) {
    "use strict";
    $.ChartJs.init()
}(window.jQuery);

