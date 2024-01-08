<?php
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
$dataPoints = array(
    array("label" => "Education", "y" => 284935, "oit" => "list_graph.php"),
    array("label" => "Entertainment", "y" => 256548, "oit" => "uiui"),
    array("label" => "Lifestyle", "y" => 245214, 'oit' => "list_graph.php"),
    array("label" => "Business", "y" => 233464, "oit" => "bar_chart.php"),
    array("label" => "Music & Audio", "y" => 200285),
    array("label" => "Personalization", "y" => 194422),
    array("label" => "Tools", "y" => 180337),
    array("label" => "Books & Reference", "y" => 172340),
    array("label" => "Travel & Local", "y" => 118187),
    array("label" => "Puzzle", "y" => 107530)
);
?>
<!DOCTYPE HTML>
<html>
    <head>
        <script>
            window.onload = function () {

                var chart = new CanvasJS.Chart("chartContainer", {
                    animationEnabled: true,
                    theme: "dark1", // "light1", "light2", "dark1", "dark2"
                    title: {
                        text: "Top 10 Google Play Categories - till 2017"
                    },
                    axisY: {
                        title: "Number of Apps"
                    },O
                    data: [{
                            type: "column",
                            click: pergi,
                            dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
                        }]
                });
                chart.render();
                
                function pergi(e) {
//                    alert(  e.dataSeries.type + ", dataPoint { x:" + e.dataPoint.x + ", y: "+ e.dataPoint.y + " }" );
                    window.open(e.dataPoint.oit,'_blank');  
                }

            };
        </script>
    </head>
    <body>
        <div id="chartContainer" style="height: 370px; width: 100%;"></div>
        <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
    </body>
</html>        