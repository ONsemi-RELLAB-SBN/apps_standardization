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
                    theme: "light2", //"light1", "dark1", "dark2"
                    title: {
                        text: "Standardization Platform"
                    },
                    axisY: {
                        interval: 10,
                        suffix: "%"
                    },
                    toolTip: {
                        shared: true
                    },
                    data: [{
                            type: "stackedBar100",
                            toolTipContent: "{label}<br><b>{name}:</b> {y} (#percent%)",
                            showInLegend: true,
                            name: "SBN",
                            dataPoints: [
                                {y: 0, label: "Electrical Test"},
                                {y: 0, label: "Process"},
                                {y: 0, label: "Design"},
                                {y: 3, label: "Power Supply"},
                                {y: 3, label: "DAQ"},
                                {y: 2, label: "Hardware"},
                                {y: 39, label: "Equipment"}
                            ]
                        },
                        {
                            type: "stackedBar100",
                            toolTipContent: "<b>{name}:</b> {y} (#percent%)",
                            showInLegend: true,
                            name: "CEBU",
                            dataPoints: [
                                {y: 0, label: "Electrical Test"},
                                {y: 0, label: "Process"},
                                {y: 0, label: "Design"},
                                {y: 0, label: "Power Supply"},
                                {y: 0, label: "DAQ"},
                                {y: 0, label: "Hardware"},
                                {y: 92, label: "Equipment"}
                            ]
                        },
                        {
                            type: "stackedBar100",
                            toolTipContent: "<b>{name}:</b> {y} (#percent%)",
                            showInLegend: true,
                            name: "OSPI",
                            dataPoints: [
                                {y: 0, label: "Electrical Test"},
                                {y: 0, label: "Process"},
                                {y: 0, label: "Design"},
                                {y: 0, label: "Power Supply"},
                                {y: 0, label: "DAQ"},
                                {y: 0, label: "Hardware"},
                                {y: 56, label: "Equipment"}
                            ]
                        },
                        {
                            type: "stackedBar100",
                            toolTipContent: "<b>{name}:</b> {y} (#percent%)",
                            showInLegend: true,
                            name: "SUZHOU",
                            dataPoints: [
                                {y: 0, label: "Electrical Test"},
                                {y: 0, label: "Process"},
                                {y: 0, label: "Design"},
                                {y: 0, label: "Power Supply"},
                                {y: 0, label: "DAQ"},
                                {y: 0, label: "Hardware"},
                                {y: 22, label: "Equipment"}
                            ]
                        },
                        {
                            type: "stackedBar100",
                            toolTipContent: "<b>{name}:</b> {y} (#percent%)",
                            showInLegend: true,
                            name: "OSV",
                            dataPoints: [
                                {y: 0, label: "Electrical Test"},
                                {y: 0, label: "Process"},
                                {y: 0, label: "Design"},
                                {y: 0, label: "Power Supply"},
                                {y: 0, label: "DAQ"},
                                {y: 0, label: "Hardware"},
                                {y: 1, label: "Equipment"}
                            ]
                        }]
                });
                chart.render();
            }
        </script>
    </head>
    <body>
        <div id="chartContainer" style="height: 100%; width: 100%;"></div>
        <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
    </body>
</html>