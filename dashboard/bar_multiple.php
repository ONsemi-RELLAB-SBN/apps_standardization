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
                                COUNT(CASE WHEN eq.id IS NOT NULL AND eq.flag IN ('1') THEN 1 END) AS total
                                FROM gest_parameter_detail pd
                                LEFT JOIN gest_form_eqpt eq ON pd.code = eq.lab_location
                                WHERE pd.master_code = '002'
                                GROUP BY pd.CODE, pd.name");
while ($row = mysqli_fetch_array($result)) {
    $point = array('label' => $row['product'], "y" => $row['total']);
    array_push($data_eqpt, $point);
}

$result2 = mysqli_query($con, "SELECT pd.name AS product,
                                COUNT(CASE WHEN hw.id IS NOT NULL AND hw.flag IN ('1') THEN 1 END) AS total
                                FROM gest_parameter_detail pd
                                LEFT JOIN gest_form_hw hw ON pd.code = hw.lab_location
                                WHERE pd.master_code = '002'
                                GROUP BY pd.CODE, pd.name");
while ($row = mysqli_fetch_array($result2)) {
    $point = array('label' => $row['product'], "y" => $row['total']);
    array_push($data_hw, $point);
}

$result3 = mysqli_query($con, "SELECT pd.name AS product,
                                COUNT(CASE WHEN daq.id IS NOT NULL AND daq.flag IN ('1') THEN 1 END) AS total
                                FROM gest_parameter_detail pd
                                LEFT JOIN gest_form_daq daq ON pd.code = daq.lab_location
                                WHERE pd.master_code = '002'
                                GROUP BY pd.CODE, pd.name");
while ($row = mysqli_fetch_array($result3)) {
    $point = array('label' => $row['product'], "y" => $row['total']);
    array_push($data_daq, $point);
}

$result4 = mysqli_query($con, "SELECT pd.name AS product,
                                COUNT(CASE WHEN ps.id IS NOT NULL AND ps.flag IN ('1') THEN 1 END) AS total
                                FROM gest_parameter_detail pd
                                LEFT JOIN gest_form_ps ps ON pd.code = ps.lab_location
                                WHERE pd.master_code = '002'
                                GROUP BY pd.CODE, pd.name");
while ($row = mysqli_fetch_array($result4)) {
    $point = array('label' => $row['product'], "y" => $row['total']);
    array_push($data_ps, $point);
}

$result5 = mysqli_query($con, "SELECT pd.name AS product,
                                COUNT(CASE WHEN et.id IS NOT NULL AND et.flag IN ('1') THEN 1 END) AS total
                                FROM gest_parameter_detail pd
                                LEFT JOIN gest_form_design et ON pd.code = et.lab_location
                                WHERE pd.master_code = '002'
                                GROUP BY pd.CODE, pd.name");
while ($row = mysqli_fetch_array($result5)) {
    $point = array('label' => $row['product'], "y" => $row['total']);
    array_push($data_ds, $point);
}

$result6 = mysqli_query($con, "SELECT pd.name AS product,
                                COUNT(CASE WHEN et.id IS NOT NULL AND et.flag IN ('1') THEN 1 END) AS total
                                FROM gest_parameter_detail pd
                                LEFT JOIN gest_form_process et ON pd.code = et.lab_location
                                WHERE pd.master_code = '002'
                                GROUP BY pd.CODE, pd.name");
while ($row = mysqli_fetch_array($result6)) {
    $point = array('label' => $row['product'], "y" => $row['total']);
    array_push($data_pc, $point);
}

$result7 = mysqli_query($con, "SELECT pd.name AS product,
                                COUNT(CASE WHEN et.id IS NOT NULL AND et.flag IN ('1') THEN 1 END) AS total
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

                var chart = new CanvasJS.Chart("chartContainer", {
                    exportEnabled: true,
                    animationEnabled: true,
                    title: {
                        text: "Standardization Platform"
                    },
                    axisY: {
                        title: " ",
                        titleFontColor: "#4F81BC",
                        lineColor: "#4F81BC",
                        labelFontColor: "#4F81BC",
                        tickColor: "#4F81BC"
                    },
                    toolTip: {
                        shared: true
                    },
                    legend: {
                        cursor: "pointer",
                        itemclick: toggleDataSeries
                    },
                    data: [{
                            type: "column",
                            name: "Equipment",
                            legendText: "Equipment",
                            showInLegend: true,
                            dataPoints: <?php echo json_encode($data_eqpt, JSON_NUMERIC_CHECK); ?>
                        },
                        {
                            type: "column",
                            name: "Hardware",
                            legendText: "Hardware",
                            showInLegend: true,
                            dataPoints: <?php echo json_encode($data_hw, JSON_NUMERIC_CHECK); ?>
                        },
                        {
                            type: "column",
                            name: "DAQ",
                            legendText: "DAQ",
                            showInLegend: true,
                            dataPoints: <?php echo json_encode($data_daq, JSON_NUMERIC_CHECK); ?>
                        },
                        {
                            type: "column",
                            name: "Power Supply",
                            legendText: "Power Supply",
                            showInLegend: true,
                            dataPoints: <?php echo json_encode($data_ps, JSON_NUMERIC_CHECK); ?>
                        },
                        {
                            type: "column",
                            name: "Design",
                            legendText: "Design",
                            showInLegend: true,
                            dataPoints: <?php echo json_encode($data_ds, JSON_NUMERIC_CHECK); ?>
                        },
                        {
                            type: "column",
                            name: "Process",
                            legendText: "Process",
                            showInLegend: true,
                            dataPoints: <?php echo json_encode($data_pc, JSON_NUMERIC_CHECK); ?>
                        },
                        {
                            type: "column",
                            name: "Electrical Test",
                            legendText: "Electrical Test",
                            showInLegend: true,
                            dataPoints: <?php echo json_encode($data_et, JSON_NUMERIC_CHECK); ?>
                        }]
                });
                chart.render();

                function toggleDataSeries(e) {
                    if (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                        e.dataSeries.visible = false;
                    } else {
                        e.dataSeries.visible = true;
                    }
                    chart.render();
                }
            }
        </script>
    </head>
    <body>
        <div id="chartContainer" style="height: 750px; width: 100%;"></div>
        <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
    </body>
</html>