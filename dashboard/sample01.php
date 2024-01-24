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

                var totalVisitors = 883000;
                var visitorsData = {
                    "New vs Returning Visitors": [{
                            click: visitorsChartDrilldownHandler,
                            cursor: "pointer",
                            explodeOnClick: false,
                            innerRadius: "75%",
                            legendMarkerType: "square",
                            name: "New vs Returning Visitors",
                            radius: "100%",
                            showInLegend: true,
                            startAngle: 90,
                            type: "doughnut",
                            dataPoints: [
                                {y: 519, name: "Equipment", color: "#E7823A"},
                                {y: 265, name: "Hardware", color: "purple"},
                                {y: 265, name: "DAQ", color: "blue"},
                                {y: 265, name: "Power Supply", color: "green"},
                                {y: 265, name: "Design", color: "yellow"},
                                {y: 265, name: "Process", color: "silver"},
                                {y: 363, name: "Electrical Test", color: "#546BC1"}
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
                        }],
                    "Returning Visitors": [{
                            color: "#546BC1",
                            name: "Returning Visitors",
                            type: "column",
                            xValueFormatString: "MMM YYYY",
                            dataPoints: [
                                {x: new Date("1 Jan 2015"), y: 22},
                                {x: new Date("1 Feb 2015"), y: 26},
                                {x: new Date("1 Mar 2015"), y: 25},
                                {x: new Date("1 Apr 2015"), y: 23},
                                {x: new Date("1 May 2015"), y: 28},
                                {x: new Date("1 Jun 2015"), y: 29},
                                {x: new Date("1 Jul 2015"), y: 33},
                                {x: new Date("1 Aug 2015"), y: 37},
                                {x: new Date("1 Sep 2015"), y: 35},
                                {x: new Date("1 Oct 2015"), y: 35},
                                {x: new Date("1 Nov 2015"), y: 31},
                                {x: new Date("1 Dec 2015"), y: 34}
                            ]
                        }]
                };

                var newVSReturningVisitorsOptions = {
                    animationEnabled: true,
                    theme: "light2",
                    title: {
                        text: "New VS Returning Visitors"
                    },
                    subtitles: [{
                            text: "Click on Any Segment to Drilldown",
                            backgroundColor: "#2eacd1",
                            fontSize: 16,
                            fontColor: "white",
                            padding: 5
                        }],
                    legend: {
                        fontFamily: "calibri",
                        fontSize: 14,
                        itemTextFormatter: function (e) {
                            return e.dataPoint.name + ": " + Math.round(e.dataPoint.y / totalVisitors * 100) + "%";
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

                newVSReturningVisitorsOptions.data = visitorsData["New vs Returning Visitors"];
                $("#chartContainer").CanvasJSChart(newVSReturningVisitorsOptions);

                function visitorsChartDrilldownHandler(e) {
                    e.chart.options = visitorsDrilldownedChartOptions;
                    e.chart.options.data = visitorsData[e.dataPoint.name];
                    e.chart.options.title = {text: e.dataPoint.name}
                    e.chart.render();
                    $("#backButton").toggleClass("invisible");
                }

                $("#backButton").click(function () {
                    $(this).toggleClass("invisible");
                    newVSReturningVisitorsOptions.data = visitorsData["New vs Returning Visitors"];
                    $("#chartContainer").CanvasJSChart(newVSReturningVisitorsOptions);
                });

            }
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