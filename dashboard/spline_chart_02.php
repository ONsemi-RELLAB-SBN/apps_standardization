<?php
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
?>

<!DOCTYPE HTML>
<html>
    <head>  
        <script>
            window.onload = function () {

                var chart = new CanvasJS.Chart("chartContainer", {
                    animationEnabled: true,
                    exportEnabled: true,
                    title: {
                        text: "Standardization Platform"
                    },
                    axisY: {
                        title: "No of item"
                    },
                    toolTip: {
                        shared: true
                    },
                    legend: {
                        cursor: "pointer",
                        itemclick: toggleDataSeries
                    },
                    data: [{
                            type: "spline",
                            name: "SBN",
                            showInLegend: true,
                            dataPoints: [
                                {label: "Equipment", y: 152},
                                {label: "Hardware", y: 2},
                                {label: "DAQ", y: 3},
                                {label: "Power Supply", y: 41},
                                {label: "Design", y: 0},
                                {label: "Process", y: 0},
                                {label: "Electrical Test", y: 0}
                            ]
                        },
                        {
                            type: "spline",
                            name: "CEBU",
                            showInLegend: true,
                            dataPoints: [
                                {label: "Equipment", y: 93},
                                {label: "Hardware", y: 0},
                                {label: "DAQ", y: 0},
                                {label: "Power Supply", y: 25},
                                {label: "Design", y: 0},
                                {label: "Process", y: 0},
                                {label: "Electrical Test", y: 0}
                            ]
                        },
                        {
                            type: "spline",
                            name: "SUZHOU",
                            showInLegend: true,
                            dataPoints: [
                                {label: "Equipment", y: 107},
                                {label: "Hardware", y: 3},
                                {label: "DAQ", y: 0},
                                {label: "Power Supply", y: 7},
                                {label: "Design", y: 0},
                                {label: "Process", y: 0},
                                {label: "Electrical Test", y: 0}
                            ]
                        },
                        {
                            type: "spline",
                            name: "OSPI",
                            showInLegend: true,
                            dataPoints: [
                                {label: "Equipment", y: 74},
                                {label: "Hardware", y: 6},
                                {label: "DAQ", y: 0},
                                {label: "Power Supply", y: 0},
                                {label: "Design", y: 0},
                                {label: "Process", y: 0},
                                {label: "Electrical Test", y: 0}
                            ]
                        },
                        {
                            type: "spline",
                            name: "OSV",
                            showInLegend: true,
                            dataPoints: [
                                {label: "Equipment", y: 86},
                                {label: "Hardware", y: 0},
                                {label: "DAQ", y: 0},
                                {label: "Power Supply", y: 0},
                                {label: "Design", y: 0},
                                {label: "Process", y: 0},
                                {label: "Electrical Test", y: 0}
                            ]
                        }]
                });
                chart.render();
                function toggleDataSeries(e) {
                    if (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                        e.dataSeries.visible = false;
                    } else {
                        e.dataSeries.visible = true;
                    }
                    chart.render();
                }
            };
        </script>
    </head>
    <body>
        <div id="chartContainer" style="height: 370px; width: 100%;"></div>
        <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
    </body>
</html>