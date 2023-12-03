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

                //Better to construct options first and then pass it as a parameter
                var options = {
                    animationEnabled: true,
                    theme: "light2",
                    title: {
                        text: "Standardization Platform"
                    },
                    axisY2: {
                        prefix: "",
                        lineThickness: 0
                    },
                    toolTip: {
                        shared: true
                    },
                    legend: {
                        verticalAlign: "top",
                        horizontalAlign: "center"
                    },
                    data: [
                        {
                            type: "stackedBar",
                            showInLegend: true,
                            name: "Equipment",
                            axisYType: "secondary",
                            color: "green",
                            dataPoints: [
                                {label: "SBN", y: 8},
                                {label: "CEBU", y: 92},
                                {label: "OSPI", y: 63},
                                {label: "SUZHOU", y: 22},
                                {label: "OSV", y: 1}
                            ]
                        },
                        {
                            type: "stackedBar",
                            showInLegend: true,
                            name: "Hardware",
                            axisYType: "secondary",
                            color: "silver",
                            dataPoints: [
                                {label: "SBN", y: 2},
                                {label: "CEBU", y: 0},
                                {label: "OSPI", y: 0},
                                {label: "SUZHOU", y: 0},
                                {label: "OSV", y: 0}
                            ]
                        },
                        {
                            type: "stackedBar",
                            showInLegend: true,
                            name: "DAQ",
                            axisYType: "secondary",
                            color: "black",
                            dataPoints: [
                                {label: "SBN", y: 3},
                                {label: "CEBU", y: 0},
                                {label: "OSPI", y: 0},
                                {label: "SUZHOU", y: 0},
                                {label: "OSV", y: 0}
                            ]
                        },
                        {
                            type: "stackedBar",
                            showInLegend: true,
                            name: "Power Supply",
                            axisYType: "secondary",
                            color: "cyan",
                            dataPoints: [
                                {label: "SBN", y: 4},
                                {label: "CEBU", y: 0},
                                {label: "OSPI", y: 0},
                                {label: "SUZHOU", y: 3},
                                {label: "OSV", y: 0}
                            ]
                        },
                        {
                            type: "stackedBar",
                            showInLegend: true,
                            name: "Design",
                            axisYType: "secondary",
                            color: "darkblue",
                            dataPoints: [
                                {label: "SBN", y: 0},
                                {label: "CEBU", y: 0},
                                {label: "OSPI", y: 0},
                                {label: "SUZHOU", y: 0},
                                {label: "OSV", y: 0}
                            ]
                        },
                        {
                            type: "stackedBar",
                            showInLegend: true,
                            name: "Process",
                            axisYType: "secondary",
                            color: "red",
                            dataPoints: [
                                {label: "SBN", y: 0},
                                {label: "CEBU", y: 0},
                                {label: "OSPI", y: 0},
                                {label: "SUZHOU", y: 0},
                                {label: "OSV", y: 0}
                            ]
                        },
                        {
                            type: "stackedBar",
                            showInLegend: true,
                            name: "Electrical Test",
                            axisYType: "secondary",
                            color: "brown",
                            indexLabel: "$#total",
                            dataPoints: [
                                {label: "SBN", y: 0},
                                {label: "CEBU", y: 0},
                                {label: "OSPI", y: 0},
                                {label: "SUZHOU", y: 0},
                                {label: "OSV", y: 0}
                            ]
                        }
                    ]
                };
                $("#chartContainer").CanvasJSChart(options);
            };
        </script>
    </head>
    <body>
        <div id="chartContainer" style="height: 370px; width: 100%;"></div>
        <script type="text/javascript" src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="https://cdn.canvasjs.com/jquery.canvasjs.min.js"></script>
    </body>
</html>