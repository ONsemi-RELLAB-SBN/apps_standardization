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
?>

<!DOCTYPE HTML>
<html>
    <head>
        <script>
            window.onload = function () {

                var totalVisitors = 599;
                var visitorsData = {
                    "Standardization Platform": [{
                            click: visitorsChartDrilldownHandler,
                            cursor: "pointer",
                            explodeOnClick: false,
                            innerRadius: "75",
                            legendMarkerType: "square",
                            name: "Standardization Platform",
                            radius: "100%",
                            showInLegend: true,
                            startAngle: 90,
                            type: "doughnut",
                            dataPoints: [
                                {y: 512, name: "Equipment", color: "#E7823A"},
                                {y: 11, name: "Hardware", color: "purple"},
                                {y: 3, name: "DAQ", color: "blue"},
                                {y: 73, name: "Power Supply", color: "green"},
                                {y: 0, name: "Design", color: "yellow"},
                                {y: 0, name: "Process", color: "silver"},
                                {y: 0, name: "Electrical Test", color: "#546BC1"}
                            ]
                        }],
                    "Equipment": [{
                            name: "Equipment",
                            type: "column",
                            dataPoints: <?php echo json_encode($data_eqpt, JSON_NUMERIC_CHECK); ?>
                        }],
                    "Hardware": [{
                            name: "Hardware",
                            type: "column",
                            dataPoints: <?php echo json_encode($data_hw, JSON_NUMERIC_CHECK); ?>
                        }],
                    "DAQ": [{
                            name: "DAQ",
                            type: "column",
                            dataPoints: <?php echo json_encode($data_daq, JSON_NUMERIC_CHECK); ?>
                        }],
                    "Power Supply": [{
                            name: "Power Supply",
                            type: "column",
                            dataPoints: <?php echo json_encode($data_ps, JSON_NUMERIC_CHECK); ?>
                        }],
                    "Design": [{
                            name: "Design",
                            type: "column",
                            dataPoints: <?php echo json_encode($data_ds, JSON_NUMERIC_CHECK); ?>
                        }],
                    "Process": [{
                            name: "Process",
                            type: "column",
                            dataPoints: <?php echo json_encode($data_pc, JSON_NUMERIC_CHECK); ?>
                        }],
                    "Electrical Test": [{
                            name: "Electrical Test",
                            type: "column",
                            dataPoints: <?php echo json_encode($data_et, JSON_NUMERIC_CHECK); ?>
                        }]
                };

                var newVSReturningVisitorsOptions = {
                    animationEnabled: true,
                    theme: "light2",
                    title: {
                        text: "Standardization Platform"
                    },
                    subtitles: [{
                            text: "Click on Segment for more details",
                            backgroundColor: "#2eacd1",
                            fontSize: 16,
                            fontColor: "white",
                            padding: 5
                        }],
                    legend: {
                        fontFamily: "calibri",
                        fontSize: 14,
                        itemTextFormatter: function (e) {
//                            return e.dataPoint.name + ": " + Math.round(e.dataPoint.y / totalVisitors * 100) + "%";           // shown in percentage
                            return e.dataPoint.name + ": " + Math.round(e.dataPoint.y);                                         // shown the total number
                        }
                    },
                    data: []
                };

                var visitorsDrilldownedChartOptions = {
                    animationEnabled: true,
                    theme: "light2",
                    axisX: {
                        labelFontColor: "#717171",
                        lineColor: "#a2a2a2",
                        tickColor: "#a2a2a2"
                    },
                    axisY: {
                        gridThickness: 0,
                        includeZero: false,
                        labelFontColor: "#717171",
                        lineColor: "#a2a2a2",
                        tickColor: "#a2a2a2",
                        lineThickness: 1
                    },
                    data: []
                };

                newVSReturningVisitorsOptions.data = visitorsData["Standardization Platform"];
                $("#chartContainer").CanvasJSChart(newVSReturningVisitorsOptions);

                function visitorsChartDrilldownHandler(e) {
                    e.chart.options = visitorsDrilldownedChartOptions;
                    e.chart.options.data = visitorsData[e.dataPoint.name];
                    e.chart.options.title = {text: e.dataPoint.name};
                    e.chart.render();
                    $("#backButton").toggleClass("invisible");
                }

                $("#backButton").click(function () {
                    $(this).toggleClass("invisible");
                    newVSReturningVisitorsOptions.data = visitorsData["Standardization Platform"];
                    $("#chartContainer").CanvasJSChart(newVSReturningVisitorsOptions);
                });

            };
        </script>
        <style>
            #backButton {
                border-radius: 4px;
                padding: 8px;
                border: none;
                font-size: 16px;
                background-color: #2eacd1;
                color: white;
                position: absolute;
                top: 10px;
                right: 10px;
                cursor: pointer;
            }
            .invisible {
                display: none;
            }
        </style>
    </head>
    <body>

        <div id="chartContainer" style="height: 370px; width: 100%;"></div>
        <button class="btn invisible" id="backButton">< Back</button>
        <script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
        <script src="https://cdn.canvasjs.com/jquery.canvasjs.min.js"></script>
    </body>
</html>