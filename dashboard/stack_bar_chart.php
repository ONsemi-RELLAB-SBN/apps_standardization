<?php
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

$test = array(
    array("label" => "Sachin Tendulkar", "y" => 51),
    array("label" => "Ricky Ponting", "y" => 41),
    array("label" => "Kumar Sangakkara", "y" => 38),
    array("label" => "Jacques Kallis", "y" => 45),
    array("label" => "Mahela Jayawardene", "y" => 34),
    array("label" => "Hashim Amla", "y" => 28),
    array("label" => "Brian Lara", "y" => 34),
    array("label" => "Virat Kohli", "y" => 20),
    array("label" => "Rahul Dravid", "y" => 36),
    array("label" => "AB de Villiers", "y" => 21)
);

$odi = array(
    array("label" => "Sachin Tendulkar", "y" => 49),
    array("label" => "Ricky Ponting", "y" => 30),
    array("label" => "Kumar Sangakkara", "y" => 25),
    array("label" => "Jacques Kallis", "y" => 17),
    array("label" => "Mahela Jayawardene", "y" => 19),
    array("label" => "Hashim Amla", "y" => 26),
    array("label" => "Brian Lara", "y" => 19),
    array("label" => "Virat Kohli", "y" => 32),
    array("label" => "Rahul Dravid", "y" => 12),
    array("label" => "AB de Villiers", "y" => 25)
);

$t20 = array(
    array("label" => "Sachin Tendulkar", "y" => 0),
    array("label" => "Ricky Ponting", "y" => 0),
    array("label" => "Kumar Sangakkara", "y" => 0),
    array("label" => "Jacques Kallis", "y" => 0),
    array("label" => "Mahela Jayawardene", "y" => 1),
    array("label" => "Hashim Amla", "y" => 0),
    array("label" => "Brian Lara", "y" => 0),
    array("label" => "Virat Kohli", "y" => 0),
    array("label" => "Rahul Dravid", "y" => 0),
    array("label" => "AB de Villiers", "y" => 0)
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

                var chart = new CanvasJS.Chart("chartContainer", {
                    animationEnabled: true,
                    exportEnabled: true,
                    theme: "light1", // "light1", "light2", "dark1", "dark2"
                    title: {
                        text: "Standardization Platform"
                    },
                    axisX: {
                        reversed: true
                    },
                    axisY: {
                        includeZero: true
                    },
                    toolTip: {
                        shared: true
                    },
                    data: [{
                            type: "stackedBar",
                            name: "Equipment",
                            dataPoints: <?php echo json_encode($data_eqpt, JSON_NUMERIC_CHECK); ?>
                        }, {
                            type: "stackedBar",
                            name: "Hardware",
                            dataPoints: <?php echo json_encode($data_hw, JSON_NUMERIC_CHECK); ?>
                        }, {
                            type: "stackedBar",
                            name: "DAQ",
                            dataPoints: <?php echo json_encode($data_daq, JSON_NUMERIC_CHECK); ?>
                        }, {
                            type: "stackedBar",
                            name: "Power Supply",
                            dataPoints: <?php echo json_encode($data_ps, JSON_NUMERIC_CHECK); ?>
                        }, {
                            type: "stackedBar",
                            name: "Design",
                            dataPoints: <?php echo json_encode($data_ds, JSON_NUMERIC_CHECK); ?>
                        }, {
                            type: "stackedBar",
                            name: "Process",
                            dataPoints: <?php echo json_encode($data_pc, JSON_NUMERIC_CHECK); ?>
                        }, {
                            type: "stackedBar",
                            name: "Electrical Test",
                            indexLabel: "#total",
                            indexLabelPlacement: "outside",
                            indexLabelFontSize: 15,
                            indexLabelFontWeight: "bold",
                            dataPoints: <?php echo json_encode($data_et, JSON_NUMERIC_CHECK); ?>
                        }]
                });
                chart.render();
            }
        </script>
    </head>
    <body>
        <div id="chartContainer" style="height: 400px; width: 100%;"></div>
        <script src="../js/canvasjs-3.7.34.min.js"></script>
        <!--<script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>-->
    </body>
</html>   