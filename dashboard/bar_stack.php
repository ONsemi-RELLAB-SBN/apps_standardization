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
        <script type="text/javascript">
            window.onload = function () {

                var chart = new CanvasJS.Chart("chartContainer", {
                    exportEnabled: true,
                    animationEnabled: true,
                    title: {
                        text: "Standardization Platform"
                    },
                    axisY: {
                        title: "Category",
                        includeZero: true
                    },
                    legend: {
                        cursor: "pointer",
                        itemclick: toggleDataSeries
                    },
                    toolTip: {
                        shared: true,
                        content: toolTipFormatter
                    },
                    data: [{
                            type: "bar",
                            showInLegend: true,
                            name: "Equipment",
                            color: "#E7823A",
                            dataPoints: <?php echo json_encode($data_eqpt, JSON_NUMERIC_CHECK); ?>
                        },
                        {
                            type: "bar",
                            showInLegend: true,
                            name: "Hardware",
                            color: "purple",
                            dataPoints: <?php echo json_encode($data_hw, JSON_NUMERIC_CHECK); ?>
                        },
                        {
                            type: "bar",
                            showInLegend: true,
                            name: "DAQ",
                            color: "blue",
                            dataPoints: <?php echo json_encode($data_daq, JSON_NUMERIC_CHECK); ?>
                        },
                        {
                            type: "bar",
                            showInLegend: true,
                            name: "Power Supply",
                            color: "green",
                            dataPoints: <?php echo json_encode($data_ps, JSON_NUMERIC_CHECK); ?>
                        },
                        {
                            type: "bar",
                            showInLegend: true,
                            name: "Design",
                            color: "$ff1a1a",
                            dataPoints: <?php echo json_encode($data_ds, JSON_NUMERIC_CHECK); ?>
                        },
                        {
                            type: "bar",
                            showInLegend: true,
                            name: "Process",
                            color: "orange",
                            dataPoints: <?php echo json_encode($data_pc, JSON_NUMERIC_CHECK); ?>
                        },
                        {
                            type: "bar",
                            showInLegend: true,
                            name: "Electrical Test",
                            color: "#A57164",
                            dataPoints: <?php echo json_encode($data_et, JSON_NUMERIC_CHECK); ?>
                        }]
                });
                chart.render();

                function toolTipFormatter(e) {
                    var str = "";
                    var total = 0;
                    var str3;
                    var str2;
                    for (var i = 0; i < e.entries.length; i++) {
                        var str1 = "<span style= \"color:" + e.entries[i].dataSeries.color + "\">" + e.entries[i].dataSeries.name + "</span>: <strong>" + e.entries[i].dataPoint.y + "</strong> <br/>";
                        total = e.entries[i].dataPoint.y + total;
                        str = str.concat(str1);
                    }
                    str2 = "<strong>" + e.entries[0].dataPoint.label + "</strong> <br/>";
                    str3 = "<span style = \"color:Tomato\">Total: </span><strong>" + total + "</strong><br/>";
                    return (str2.concat(str)).concat(str3);
                }

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
        <script type="text/javascript" src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
        <script type="text/javascript" src="https://cdn.canvasjs.com/jquery.canvasjs.min.js"></script>
        <script type="text/javascript" src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
    </body>
</html>