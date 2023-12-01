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
                    title: {
                        text: "Standardization Platform"
                    },
                    axisY: {
                        title: " ",
                        titleFontColor: "#4F81BC",
                        lineColor: "#4F81BC",
                        labelFontColor: "#4F81BC",
                        tickColor: "#4F81BC"
                    },
//                    axisY2: {
//                        title: "Millions of Barrels/day",
//                        titleFontColor: "#C0504E",
//                        lineColor: "#C0504E",
//                        labelFontColor: "#C0504E",
//                        tickColor: "#C0504E"
//                    },
                    toolTip: {
                        shared: true
                    },
                    legend: {
                        cursor: "pointer",
                        itemclick: toggleDataSeries
                    },
                    data: [{
                            type: "column",
                            name: "Equipment",
                            legendText: "Equipment",
                            showInLegend: true,
                            dataPoints: [
                                {label: "SBN", y: 8},
                                {label: "CEBU", y: 92},
                                {label: "OSPI", y: 63},
                                {label: "SUZHOU", y: 22},
                                {label: "OSV", y: 1}
                            ]
                        },
                        {
                            type: "column",
                            name: "Hardware",
                            legendText: "Hardware",
//                            axisYType: "secondary",
                            showInLegend: true,
                            dataPoints: [
                                {label: "SBN", y: 2},
                                {label: "CEBU", y: 0},
                                {label: "OSPI", y: 0},
                                {label: "SUZHOU", y: 0},
                                {label: "OSV", y: 0}
                            ]
                        },
                        {
                            type: "column",
                            name: "DAQ",
                            legendText: "DAQ",
//                            axisYType: "secondary",
                            showInLegend: true,
                            dataPoints: [
                                {label: "SBN", y: 3},
                                {label: "CEBU", y: 0},
                                {label: "OSPI", y: 0},
                                {label: "SUZHOU", y: 0},
                                {label: "OSV", y: 0}
                            ]
                        },
                        {
                            type: "column",
                            name: "Power Supply",
                            legendText: "Power Supply",
//                            axisYType: "secondary",
                            showInLegend: true,
                            dataPoints: [
                                {label: "SBN", y: 4},
                                {label: "CEBU", y: 0},
                                {label: "OSPI", y: 0},
                                {label: "SUZHOU", y: 3},
                                {label: "OSV", y: 0}
                            ]
                        },
                        {
                            type: "column",
                            name: "Design",
                            legendText: "Design",
//                            axisYType: "secondary",
                            showInLegend: true,
                            dataPoints: [
                                {label: "SBN", y: 0},
                                {label: "CEBU", y: 0},
                                {label: "OSPI", y: 0},
                                {label: "SUZHOU", y: 0},
                                {label: "OSV", y: 0}
                            ]
                        },
                        {
                            type: "column",
                            name: "Process",
                            legendText: "Process",
//                            axisYType: "secondary",
                            showInLegend: true,
                            dataPoints: [
                                {label: "SBN", y: 0},
                                {label: "CEBU", y: 0},
                                {label: "OSPI", y: 0},
                                {label: "SUZHOU", y: 0},
                                {label: "OSV", y: 0}
                            ]
                        },
                        {
                            type: "column",
                            name: "Electrical Test",
                            legendText: "Electrical Test",
//                            axisYType: "secondary",
                            showInLegend: true,
                            dataPoints: [
                                {label: "SBN", y: 0},
                                {label: "CEBU", y: 0},
                                {label: "OSPI", y: 0},
                                {label: "SUZHOU", y: 0},
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

            }
        </script>
    </head>
    <body>
        <div id="chartContainer" style="height: 900px; width: 100%;"></div>
        <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
    </body>
</html>