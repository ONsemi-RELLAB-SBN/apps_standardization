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
                    theme: "light1", // "light1", "light2", "dark1", "dark2"
                    title: {
                        text: "Standardization Platform - Equipment"
                    },
                    axisY: {
                        includeZero: true
                    },
                    data: [{
                            type: "column", 
                            ////change type to bar, line, area, pie, etc
                            //indexLabel: "{y}", //Shows y value on all Data Points
                            indexLabelFontColor: "#5A5757",
                            indexLabelFontSize: 16,
                            indexLabelPlacement: "outside",
                            dataPoints: [
                                {x: 10, y: 8, indexLabel: "\u2605 SBN \u2605"},
                                {x: 20, y: 92, indexLabel: "\u2605 CEBU \u2605"},
                                {x: 30, y: 63, indexLabel: "\u2605 OSPI \u2605"},
                                {x: 40, y: 22, indexLabel: "\u2605 SUZHOU \u2605"},
                                {x: 50, y: 1, indexLabel: "\u2605 OSV \u2605"}
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