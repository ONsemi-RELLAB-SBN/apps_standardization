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
                    theme: "dark2",
                    exportFileName: "Doughnut Chart",
                    exportEnabled: true,
                    animationEnabled: true,
                    title: {
                        text: "Standardization Platform - Equipment"
                    },
                    legend: {
                        cursor: "pointer",
                        itemclick: explodePie
                    },
                    data: [{
                            type: "doughnut",
                            innerRadius: 90,
                            showInLegend: true,
                            toolTipContent: "<b>{name}</b>: {y} (#percent%)",
                            indexLabel: "{name} - {y}",
//                            indexLabel: "{name} - #percent%",
                            dataPoints: [
                                {y: 8, name: "SBN"},
                                {y: 92, name: "CEBU"},
                                {y: 63, name: "OSPI"},
                                {y: 22, name: "SUZHOU"},
                                {y: 1, name: "OSV"}
                            ]
                        }]
                });
                chart.render();

                function explodePie(e) {
                    if (typeof (e.dataSeries.dataPoints[e.dataPointIndex].exploded) === "undefined" || !e.dataSeries.dataPoints[e.dataPointIndex].exploded) {
                        e.dataSeries.dataPoints[e.dataPointIndex].exploded = true;
                    } else {
                        e.dataSeries.dataPoints[e.dataPointIndex].exploded = false;
                    }
                    e.chart.render();
                }

            }
        </script>
    </head>
    <body>
        <div id="chartContainer" style="height: 670px; width: 100%;"></div>
        <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
    </body>
</html>