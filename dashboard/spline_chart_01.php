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
                            name: "Equipment",
                            showInLegend: true,
                            dataPoints: [
                                {label: "SBN", y: 152},
                                {label: "CEBU", y: 93},
                                {label: "SUZHOU", y: 107},
                                {label: "OSPI", y: 74},
                                {label: "OSV", y: 86}
                            ]
                        },
                        {
                            type: "spline",
                            name: "Hardware",
                            showInLegend: true,
                            dataPoints: [
                                {label: "SBN", y: 2},
                                {label: "CEBU", y: 0},
                                {label: "SUZHOU", y: 3},
                                {label: "OSPI", y: 6},
                                {label: "OSV", y: 0}
                            ]
                        },
                        {
                            type: "spline",
                            name: "DAQ",
                            showInLegend: true,
                            dataPoints: [
                                {label: "SBN", y: 3},
                                {label: "CEBU", y: 0},
                                {label: "SUZHOU", y: 0},
                                {label: "OSPI", y: 0},
                                {label: "OSV", y: 0}
                            ]
                        },
                        {
                            type: "spline",
                            name: "POWER SUPPLY",
                            showInLegend: true,
                            dataPoints: [
                                {label: "SBN", y: 41},
                                {label: "CEBU", y: 25},
                                {label: "SUZHOU", y: 7},
                                {label: "OSPI", y: 0},
                                {label: "OSV", y: 0}
                            ]
                        },
                        {
                            type: "spline",
                            name: "DESIGN",
                            showInLegend: true,
                            dataPoints: [
                                {label: "SBN", y: 0},
                                {label: "CEBU", y: 0},
                                {label: "SUZHOU", y: 0},
                                {label: "OSPI", y: 0},
                                {label: "OSV", y: 0}
                            ]
                        },
                        {
                            type: "spline",
                            name: "PROCESS",
                            showInLegend: true,
                            dataPoints: [
                                {label: "SBN", y: 0},
                                {label: "CEBU", y: 0},
                                {label: "SUZHOU", y: 0},
                                {label: "OSPI", y: 0},
                                {label: "OSV", y: 0}
                            ]
                        },
                        {
                            type: "spline",
                            name: "ELECTRICAL TEST",
                            showInLegend: true,
                            dataPoints: [
                                {label: "SBN", y: 0},
                                {label: "CEBU", y: 0},
                                {label: "SUZHOU", y: 0},
                                {label: "OSPI", y: 0},
                                {label: "OSV", y: 0}
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