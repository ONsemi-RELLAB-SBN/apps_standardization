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
                        text: "Equipment"
                    },
                    data: [{
                            type: "pie",
                            startAngle: 240,
                            yValueFormatString: "##0.00\" pcs\"",
                            indexLabel: "{label} {y}",
                            dataPoints: [
                                {y: 8, label: "SBN"},
                                {y: 92, label: "CEBU"},
                                {y: 63, label: "OSPI"},
                                {y: 22, label: "SUZHOU"},
                                {y: 1, label: "OSV"}
                            ]
                        }]
                });
                chart.render();

            }
        </script>
    </head>
    <body>
        <div id="chartContainer" style="height: 370px; width: 100%;"></div>
        <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
    </body>
</html>