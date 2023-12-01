<?php
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */


$dataPoints = array(
    array("label" => "Equipment", "y" => 186),
    array("label" => "Hardware", "y" => 2),
    array("label" => "DAQ", "y" => 3),
    array("label" => "Power Supply", "y" => 8),
    array("label" => "Design", "y" => 0),
    array("label" => "Process", "y" => 0),
    array("label" => "Electrical Test", "y" => 0)
)
?>
<!DOCTYPE HTML>
<html>
    <head>
        <script>
            window.onload = function () {

                var chart = new CanvasJS.Chart("chartContainer", {
                    theme: "light2",
                    animationEnabled: true,
                    title: {
                        text: "Summary Data Standardization"
                    },
                    data: [{
                            type: "doughnut",
                            indexLabel: "{symbol} - {y}",
//                            yValueFormatString: "#,##0.0\"%\"",
                            yValueFormatString: "#,##0\" record\"",
                            showInLegend: true,
                            legendText: "{label} : {y}",
                            dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
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