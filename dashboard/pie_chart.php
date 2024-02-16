<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
include '../class/db.php';

$data_eqpt = array();
$data_hw = array();
$data_daq = array();
$data_ps = array();
$data_ds = array();
$data_pc = array();
$data_et = array();

$result = mysqli_query($con, "SELECT pd.name AS product,
                                COUNT(CASE WHEN eq.id IS NOT NULL AND eq.flag = '1' THEN 1 END) AS total
                                FROM gest_parameter_detail pd
                                LEFT JOIN gest_form_eqpt eq ON pd.code = eq.lab_location
                                WHERE pd.master_code = '002'
                                GROUP BY pd.CODE, pd.name");
while ($row = mysqli_fetch_array($result)) {
    $point = array('label' => $row['product'], "y" => $row['total']);
    array_push($data_eqpt, $point);
}

$result2 = mysqli_query($con, "SELECT pd.name AS product,
                                COUNT(CASE WHEN hw.id IS NOT NULL AND hw.flag = '1' THEN 1 END) AS total
                                FROM gest_parameter_detail pd
                                LEFT JOIN gest_form_hw hw ON pd.code = hw.lab_location
                                WHERE pd.master_code = '002'
                                GROUP BY pd.CODE, pd.name");
while ($row = mysqli_fetch_array($result2)) {
    $point = array('label' => $row['product'], "y" => $row['total']);
    array_push($data_hw, $point);
}

$result3 = mysqli_query($con, "SELECT pd.name AS product,
                                COUNT(CASE WHEN daq.id IS NOT NULL AND daq.flag = '1' THEN 1 END) AS total
                                FROM gest_parameter_detail pd
                                LEFT JOIN gest_form_daq daq ON pd.code = daq.lab_location
                                WHERE pd.master_code = '002'
                                GROUP BY pd.CODE, pd.name");
while ($row = mysqli_fetch_array($result3)) {
    $point = array('label' => $row['product'], "y" => $row['total']);
    array_push($data_daq, $point);
}

$result4 = mysqli_query($con, "SELECT pd.name AS product,
                                COUNT(CASE WHEN ps.id IS NOT NULL AND ps.flag = '1' THEN 1 END) AS total
                                FROM gest_parameter_detail pd
                                LEFT JOIN gest_form_ps ps ON pd.code = ps.lab_location
                                WHERE pd.master_code = '002'
                                GROUP BY pd.CODE, pd.name");
while ($row = mysqli_fetch_array($result4)) {
    $point = array('label' => $row['product'], "y" => $row['total']);
    array_push($data_ps, $point);
}

$result5 = mysqli_query($con, "SELECT pd.name AS product,
                                COUNT(CASE WHEN et.id IS NOT NULL AND et.flag = '1' THEN 1 END) AS total
                                FROM gest_parameter_detail pd
                                LEFT JOIN gest_form_design et ON pd.code = et.lab_location
                                WHERE pd.master_code = '002'
                                GROUP BY pd.CODE, pd.name");
while ($row = mysqli_fetch_array($result5)) {
    $point = array('label' => $row['product'], "y" => $row['total']);
    array_push($data_ds, $point);
}

$result6 = mysqli_query($con, "SELECT pd.name AS product,
                                COUNT(CASE WHEN et.id IS NOT NULL AND et.flag = '1' THEN 1 END) AS total
                                FROM gest_parameter_detail pd
                                LEFT JOIN gest_form_process et ON pd.code = et.lab_location
                                WHERE pd.master_code = '002'
                                GROUP BY pd.CODE, pd.name");
while ($row = mysqli_fetch_array($result6)) {
    $point = array('label' => $row['product'], "y" => $row['total']);
    array_push($data_pc, $point);
}

$result7 = mysqli_query($con, "SELECT pd.name AS product,
                                COUNT(CASE WHEN et.id IS NOT NULL AND et.flag = '1' THEN 1 END) AS total
                                FROM gest_parameter_detail pd
                                LEFT JOIN gest_form_et et ON pd.code = et.lab_location
                                WHERE pd.master_code = '002'
                                GROUP BY pd.CODE, pd.name");
while ($row = mysqli_fetch_array($result7)) {
    $point = array('label' => $row['product'], "y" => $row['total']);
    array_push($data_et, $point);
}

$dataSbn = array (
    array("label" => "Equipment", "y" => 74),
    array("label" => "Hardware", "y" => 2),
    array("label" => "DAQ", "y" => 3),
    array("label" => "Power Supply", "y" => 3),
    array("label" => "Design", "y" => 0),
    array("label" => "Process", "y" => 0),
    array("label" => "Electrical Test", "y" => 0)
);
        
$dataCebu = array( 
    array("label"=>"Equipment", "symbol" => "O","y"=>93),
    array("label"=>"Hardware", "symbol" => "Si","y"=>0),
    array("label"=>"DAQ", "symbol" => "Al","y"=>0),
    array("label"=>"Power Supply", "symbol" => "Fe","y"=>0),
    array("label"=>"Design", "symbol" => "Ca","y"=>0),
    array("label"=>"Process", "symbol" => "Mg","y"=>0),
    array("label"=>"Electrical Test", "symbol" => "Others","y"=>0),
);



?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard</title>
        <style>
            body {
                margin: 0;
                padding: 0;
                font-family: sans-serif;
            }

            .container {
                display: flex;
                flex-wrap: wrap;
                justify-content: space-around;
                padding: 20px;
            }

            .box {
                width: 300px;
                height: 400px;
                margin: 10px 10px 50px;
                border: 1px solid #ccc;
                border-radius: 5px;
                text-align: center;
                padding: 10px;
            }

            .box h3 {
                margin-bottom: 10px;
            }

            .pie-chart {
                width: 100%;
                height: 100%;
            }

            @media only screen and (max-width: 768px) {
                .box {
                    width: 45%;
                }
            }

            @media only screen and (max-width: 480px) {
                .box {
                    width: 100%;
                }
            }
        </style>
        
        <script>
            window.onload = function () {
                var chart = new CanvasJS.Chart("chartContainer1", {
                    theme: "light2",
                    animationEnabled: true,
                    data: [{
                        type: "doughnut",
                        indexLabel: "{symbol} - {y}",
                        yValueFormatString: "#,##",
                        indexLabelPlacement: "inside",
                        indexLabelFontColor: "#36454F",
                        indexLabelFontSize: 18,
                        innerRadius: 70,
                        indexLabelFontWeight: "bolder",
                        showInLegend: true,
                        legendText: "{label} : {y}",
                        dataPoints: <?php echo json_encode($dataSbn, JSON_NUMERIC_CHECK); ?>
                    }]
                });
                chart.render();
                
                var chart2 = new CanvasJS.Chart("chartContainer2", {
                    theme: "light2",
                    animationEnabled: true,
                    data: [{
                        type: "doughnut",
                        innerRadius: 60,
                        indexLabel: "{symbol} - {y}",
                        yValueFormatString: "#,##",
                        showInLegend: true,
                        legendText: "{label} : {y}",
                        dataPoints: <?php echo json_encode($dataCebu, JSON_NUMERIC_CHECK); ?>
                    }]
                });
                chart2.render();
                
                var chart3 = new CanvasJS.Chart("chartContainer3", {
                    theme: "light2", // "light1", "light2", "dark1", "dark2"
                    exportEnabled: true,
                    animationEnabled: true,
                    data: [{
                        type: "doughnut",
                        startAngle: 25,
                        toolTipContent: "<b>{label}</b>: {y}",
                        showInLegend: "true",
                        legendText: "{label}",
                        indexLabelFontSize: 16,
                        innerRadius: 60,
                        indexLabel: "{label} - {y}",
                        dataPoints: [
                            { y: 107, label: "Equipment" },
                            { y: 3, label: "Hardware" },
                            { y: 0, label: "DAQ" },
                            { y: 4, label: "Power Supply" },
                            { y: 0, label: "Design" },
                            { y: 0, label: "Process" },
                            { y: 0, label: "Electrical Test" }
                        ]
                    }]
                });
                chart3.render();
                
                var chart4 = new CanvasJS.Chart("chartContainer4", {
                    theme: "light2",
                    exportFileName: "Doughnut Chart",
                    exportEnabled: true,
                    animationEnabled: true,
                    legend:{
                        cursor: "pointer",
                        itemclick: explodePie
                    },
                    data: [{
                        type: "doughnut",
                        innerRadius: 60,
                        showInLegend: true,
                        toolTipContent: "<b>{name}</b>: {y} ",
                        indexLabel: "{name} - #percent",
                        dataPoints: [
                            { y: 61, name: "Equipment" },
                            { y: 6, name: "Hardware" },
                            { y: 0, name: "DAQ" },
                            { y: 0, name: "Power Supply" },
                            { y: 0, name: "Design" },
                            { y: 0, name: "Process"},
                            { y: 0, name: "Electrical Test" }
                        ]
                    }]
                });
                chart4.render();
                
                var chart5 = new CanvasJS.Chart("chartContainer5", {
                    theme: "light2",
                    exportFileName: "Doughnut Chart",
                    exportEnabled: true,
                    animationEnabled: true,
                    legend:{
                        cursor: "pointer",
                        itemclick: explodePie
                    },
                    data: [{
                        type: "doughnut",
                        innerRadius: 60,
                        showInLegend: true,
                        toolTipContent: "<b>{name}</b>: {y} ",
                        indexLabel: "{name} - #percent",
                        dataPoints: [
                            { y: 96, name: "Equipment" },
                            { y: 0, name: "Hardware" },
                            { y: 0, name: "DAQ" },
                            { y: 0, name: "Power Supply" },
                            { y: 0, name: "Design" },
                            { y: 0, name: "Process"},
                            { y: 0, name: "Electrical Test" }
                        ]
                    }]
                });
                chart5.render();
                
                function explodePie (e) {
                    if(typeof (e.dataSeries.dataPoints[e.dataPointIndex].exploded) === "undefined" || !e.dataSeries.dataPoints[e.dataPointIndex].exploded) {
                        e.dataSeries.dataPoints[e.dataPointIndex].exploded = true;
                    } else {
                        e.dataSeries.dataPoints[e.dataPointIndex].exploded = false;
                    }
                    e.chart4.render();
                }
            };
        </script>
    </head>
    <body>
        <div class="container">
            <div class="box">
                <h3>SBN</h3>
                <div id="chartContainer1" style="height: 370px; width: 300px;"></div>
            </div>
            <div class="box">
                <h3>CEBU</h3>
                <div id="chartContainer2" style="height: 370px; width: 300px;"></div>
            </div>
            <div class="box">
                <h3>SUZHOU</h3>
                <div id="chartContainer3" style="height: 370px; width: 300px;"></div>
            </div>
            <div class="box">
                <h3>OSPI</h3>
                <div id="chartContainer4" style="height: 370px; width: 300px;"></div>
            </div>
            <div class="box">
                <h3>OSV</h3>
                <div id="chartContainer5" style="height: 370px; width: 300px;"></div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"></script>
        <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
    </body>
</html>