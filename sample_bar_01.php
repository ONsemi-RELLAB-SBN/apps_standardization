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
                var options = {
                    animationEnabled: true,
                    title: {
                        text: "Summary Data Standardization"
                    },
                    axisY: {
                        title: "Total number of item",
                        suffix: "pcs"
                    },
                    axisX: {
                        title: "Category"
                    },
                    data: [{
                            type: "column",
                            yValueFormatString: "#,##0.0#" % "",
                            dataPoints: [
                                {label: "Equipment", y: 186},
                                {label: "Hardware", y: 2},
                                {label: "DAQ", y: 3},
                                {label: "Power Supply", y: 3},
                                {label: "Design", y: 0},
                                {label: "Process", y: 0},
                                {label: "Electrical Test", y: 0}
                            ]
                        }]
                };
                $("#chartContainer").CanvasJSChart(options);
            }
        </script>
    </head>
    <body>
        <div id="chartContainer" style="height: 500px; width: 100%;"></div>
        <script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
        <script src="https://cdn.canvasjs.com/jquery.canvasjs.min.js"></script>
    </body>
</html>