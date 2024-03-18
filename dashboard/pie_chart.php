<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
include '../class/db.php';

$data_sbn = array();
$data_cebu = array();
$data_suz = array();
$data_ospi = array();
$data_osv = array();

$result1 = mysqli_query($con, "SELECT CONCAT('Equipment') AS item, COUNT(*) AS bil FROM gest_form_eqpt d INNER JOIN gest_parameter_detail pd ON lab_location = pd.code WHERE pd.name = 'SBN' AND d.flag IN ('1') UNION
                                SELECT CONCAT('Hardware') AS item, COUNT(*) AS bil FROM gest_form_hw d INNER JOIN gest_parameter_detail pd ON lab_location = pd.code WHERE pd.name = 'SBN' AND d.flag IN ('1') UNION
                                SELECT CONCAT('DAQ') AS item, COUNT(*) AS bil FROM gest_form_daq d INNER JOIN gest_parameter_detail pd ON lab_location = pd.code WHERE pd.name = 'SBN' AND d.flag IN ('1') UNION
                                SELECT CONCAT('Power Supply') AS item, COUNT(*) AS bil FROM gest_form_ps d INNER JOIN gest_parameter_detail pd ON lab_location = pd.code WHERE pd.name = 'SBN' AND d.flag IN ('1')");
while ($row = mysqli_fetch_array($result1)) {
    $point = array('label' => $row['item'], "y" => $row['bil']);
    array_push($data_sbn, $point);
}

$result2 = mysqli_query($con, "SELECT CONCAT('Equipment') AS item, COUNT(*) AS bil FROM gest_form_eqpt d INNER JOIN gest_parameter_detail pd ON lab_location = pd.code WHERE pd.name = 'CEBU' AND d.flag IN ('1') UNION
                                SELECT CONCAT('Hardware') AS item, COUNT(*) AS bil FROM gest_form_hw d INNER JOIN gest_parameter_detail pd ON lab_location = pd.code WHERE pd.name = 'CEBU' AND d.flag IN ('1') UNION
                                SELECT CONCAT('DAQ') AS item, COUNT(*) AS bil FROM gest_form_daq d INNER JOIN gest_parameter_detail pd ON lab_location = pd.code WHERE pd.name = 'CEBU' AND d.flag IN ('1') UNION
                                SELECT CONCAT('Power Supply') AS item, COUNT(*) AS bil FROM gest_form_ps d INNER JOIN gest_parameter_detail pd ON lab_location = pd.code WHERE pd.name = 'CEBU' AND d.flag IN ('1')");
while ($row = mysqli_fetch_array($result2)) {
    $point = array('label' => $row['item'], "y" => $row['bil']);
    array_push($data_cebu, $point);
}

$result3 = mysqli_query($con, "SELECT CONCAT('Equipment') AS item, COUNT(*) AS bil FROM gest_form_eqpt d INNER JOIN gest_parameter_detail pd ON lab_location = pd.code WHERE pd.name = 'SUZHOU' AND d.flag IN ('1') UNION
                                SELECT CONCAT('Hardware') AS item, COUNT(*) AS bil FROM gest_form_hw d INNER JOIN gest_parameter_detail pd ON lab_location = pd.code WHERE pd.name = 'SUZHOU' AND d.flag IN ('1') UNION
                                SELECT CONCAT('DAQ') AS item, COUNT(*) AS bil FROM gest_form_daq d INNER JOIN gest_parameter_detail pd ON lab_location = pd.code WHERE pd.name = 'SUZHOU' AND d.flag IN ('1') UNION
                                SELECT CONCAT('Power Supply') AS item, COUNT(*) AS bil FROM gest_form_ps d INNER JOIN gest_parameter_detail pd ON lab_location = pd.code WHERE pd.name = 'SUZHOU' AND d.flag IN ('1')");
while ($row = mysqli_fetch_array($result3)) {
    $point = array('label' => $row['item'], "y" => $row['bil']);
    array_push($data_suz, $point);
}

$result4 = mysqli_query($con, "SELECT CONCAT('Equipment') AS item, COUNT(*) AS bil FROM gest_form_eqpt d INNER JOIN gest_parameter_detail pd ON lab_location = pd.code WHERE pd.name = 'OSPI' AND d.flag IN ('1') UNION
                                SELECT CONCAT('Hardware') AS item, COUNT(*) AS bil FROM gest_form_hw d INNER JOIN gest_parameter_detail pd ON lab_location = pd.code WHERE pd.name = 'OSPI' AND d.flag IN ('1') UNION
                                SELECT CONCAT('DAQ') AS item, COUNT(*) AS bil FROM gest_form_daq d INNER JOIN gest_parameter_detail pd ON lab_location = pd.code WHERE pd.name = 'OSPI' AND d.flag IN ('1') UNION
                                SELECT CONCAT('Power Supply') AS item, COUNT(*) AS bil FROM gest_form_ps d INNER JOIN gest_parameter_detail pd ON lab_location = pd.code WHERE pd.name = 'OSPI' AND d.flag IN ('1')");
while ($row = mysqli_fetch_array($result4)) {
    $point = array('label' => $row['item'], "y" => $row['bil']);
    array_push($data_ospi, $point);
}

$result5 = mysqli_query($con, "SELECT CONCAT('Equipment') AS item, COUNT(*) AS bil FROM gest_form_eqpt d INNER JOIN gest_parameter_detail pd ON lab_location = pd.code WHERE pd.name = 'OSV' AND d.flag IN ('1') UNION
                                SELECT CONCAT('Hardware') AS item, COUNT(*) AS bil FROM gest_form_hw d INNER JOIN gest_parameter_detail pd ON lab_location = pd.code WHERE pd.name = 'OSV' AND d.flag IN ('1') UNION
                                SELECT CONCAT('DAQ') AS item, COUNT(*) AS bil FROM gest_form_daq d INNER JOIN gest_parameter_detail pd ON lab_location = pd.code WHERE pd.name = 'OSV' AND d.flag IN ('1') UNION
                                SELECT CONCAT('Power Supply') AS item, COUNT(*) AS bil FROM gest_form_ps d INNER JOIN gest_parameter_detail pd ON lab_location = pd.code WHERE pd.name = 'OSV' AND d.flag IN ('1')");
while ($row = mysqli_fetch_array($result5)) {
    $point = array('label' => $row['item'], "y" => $row['bil']);
    array_push($data_osv, $point);
}
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
                padding: 10px;
            }

            .box {
                width: 310px;
                height: 370px;
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
                CanvasJS.addColorSet("customColor",
                [
                    "#1691FF",  // light blue
                    "#1fe074",  // light green
                    "#9400d3",  // dark violet
                    "#FF7F50",  // orange
                    "#4169e1",
                    "#ff0000",  // red
                    "#ff4500",  // orangish
                    "#ff66cc"   // pinkish
                ]);
                
                var chart = new CanvasJS.Chart("chartContainer1", {
                    theme: "light",
                    colorSet: "customColor",
                    exportEnabled: true,
                    animationEnabled: true,
                    legend: {
                        itemWidth: 150,
                        horizontalAlign: "center",
                        verticalAlign: "top"
                    },
                    data: [{
                        type: "doughnut",
                        innerRadius: 60,
                        radius:  "90%",
                        showInLegend: true,
                        legendText: "{label} [{y}]",
                        dataPoints: <?php echo json_encode($data_sbn, JSON_NUMERIC_CHECK); ?>
                    }]
                });
                chart.render();
                
                var chart2 = new CanvasJS.Chart("chartContainer2", {
//                    theme: "light",
                    colorSet: "customColor",
                    exportEnabled: true,
                    animationEnabled: true,
                    legend: {
                        itemWidth: 150,
                        horizontalAlign: "center",
                        verticalAlign: "top"
                    },
                    data: [{
                        type: "doughnut",
                        innerRadius: 60,
                        radius:  "90%",
                        showInLegend: true,
                        legendText: "{label} [{y}]",
                        dataPoints: <?php echo json_encode($data_cebu, JSON_NUMERIC_CHECK); ?>
                    }]
                });
                chart2.render();
                
                var chart3 = new CanvasJS.Chart("chartContainer3", {
                    theme: "light",
                    colorSet: "customColor",
                    exportEnabled: true,
                    animationEnabled: true,
                    legend: {
                        itemWidth: 150,
                        horizontalAlign: "center",
                        verticalAlign: "top"
                    },
                    data: [{
                        type: "doughnut",
                        innerRadius: 60,
                        radius:  "90%",
                        showInLegend: true,
                        legendText: "{label} [{y}]",
                        dataPoints: <?php echo json_encode($data_suz, JSON_NUMERIC_CHECK); ?>
                    }]
                });
                chart3.render();
                
                var chart4 = new CanvasJS.Chart("chartContainer4", {
                    theme: "light",
                    colorSet: "customColor",
                    exportEnabled: true,
                    animationEnabled: true,
                    legend: {
                        itemWidth: 150,
                        horizontalAlign: "center",
                        verticalAlign: "top"
                    },
                    data: [{
                        type: "doughnut",
                        innerRadius: 60,
                        radius:  "90%",
                        showInLegend: true,
                        legendText: "{label} [{y}]",
                        dataPoints: <?php echo json_encode($data_ospi, JSON_NUMERIC_CHECK); ?>
                    }]
                });
                chart4.render();
                
                var chart5 = new CanvasJS.Chart("chartContainer5", {
                    theme: "light",
                    colorSet: "customColor",
                    exportEnabled: true,
                    animationEnabled: true,
                    legend: {
                        itemWidth: 150,
                        horizontalAlign: "center",
                        verticalAlign: "top"
                    },
                    data: [{
                        type: "doughnut",
                        innerRadius: 60,
                        radius:  "90%", 
                        showInLegend: true,
                        legendText: "{label} [{y}]",
                        dataPoints: <?php echo json_encode($data_osv, JSON_NUMERIC_CHECK); ?>
                    }]
                });
                chart5.render();
            };
        </script>
    </head>
    <body>
        <div class="container">
            <div class="box">
                <h3>SBN</h3>
                <div id="chartContainer1" style="height: 300px; width: 340px;"></div>
            </div>
            <div class="box">
                <h3>CEBU</h3>
                <div id="chartContainer2" style="height: 300px; width: 340px;"></div>
            </div>
            <div class="box">
                <h3>SUZHOU</h3>
                <div id="chartContainer3" style="height: 300px; width: 340px;"></div>
            </div>
            <div class="box">
                <h3>OSPI</h3>
                <div id="chartContainer4" style="height: 300px; width: 340px;"></div>
            </div>
            <div class="box">
                <h3>OSV</h3>
                <div id="chartContainer5" style="height: 300px; width: 340px;"></div>
            </div>
        </div>

        <script src="../js/chart-3.9.1.min.js"></script>
        <script src="../js/canvasjs-3.7.38.min.js"></script>
    </body>
</html>