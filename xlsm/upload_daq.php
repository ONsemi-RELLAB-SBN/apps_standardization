<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

use ayep\SimpleXLSX;
include '../template/form.php';

ini_set('error_reporting', E_ALL);
ini_set('display_errors', true);

require_once __DIR__ . '/../\template\SimpleXLSX.php';

echo '<div class="twelve columns">&nbsp;</div><div class="twelve columns">&nbsp;</div>
    <h4 style="border-left: none;">Upload DAQ</h4>
<form method="post" enctype="multipart/form-data">
*.XLSM <input type="file" name="file"  />&nbsp;&nbsp;<input type="submit" value="Load" />
</form>';

//echo '<h1>Read several sheets</h1>';

if ($username == '') {
    $username = 'System';
}

$lablocation = '';
$productgroup = '';
$category = '';
$labmanager = '';
$manufacturer = '';
$model = '';
$daq = '';
$tempchannel = '';
$voltchannel = '';
$leakchannel = '';
$maxvoltmeasure = '';
$minvoltmeasure = '';
$maxleakmeasure = '';
$minleakmeasure = '';
$maxtempmeasure = '';
$mintempmeasure = '';
$voltdrop = '';
$boardcheck = '';
$starttest = '';
$scantime = '';
$leakreso = '';
$leakaccuracy = '';
$voltreso = '';
$dataplot = '';
$typehardware = '';
$analogsingle = '';
$analogdiff = '';
$reso = '';
$frequency = '';
$support = '';
$hwmeasureR = '';
$hwmeasureV = '';
$hwmeasureT = '';
$eqptint = '';
$psint = '';

if (isset($_FILES['file'])) {
    if ($xlsx = SimpleXLSX::parse($_FILES['file']['tmp_name'])) {
//        echo '<pre>' . print_r($xlsx->sheetNames(), true) . '</pre>';
        
        if ($xlsx->sheetName(0) == 'DAQ') {
            echo '<table cellpadding="10">
                <tr><td valign="top">';

            $dim = $xlsx->dimension();
            $num_cols = $dim[0];
            $num_rows = $dim[1];
            
            if ($num_cols == '36') {

            echo '<h2>' . $xlsx->sheetName(0) . '</h2>';
            echo '<table border=1 border-collapse=collapse>';
            foreach ($xlsx->rows() as $k => $r) {
                // SKIP first 3 column for the labelling
                if ($k == 0)
                    continue;
                // THIS ONE NK BACA PER COLUMN
                for ($j = 0; $j < $num_cols; $j++) {
                    if ($j == 1) {
                        if ($r[$j] == '') {
                            if ($k == 3) {
                                echo '<tr><td colspan=' . $num_cols . '>No Data</td></tr>';
                            }
                        } else {
                            echo '<tr>';
                            for ($i = 0; $i < $num_cols; $i++) {
                                echo '<td>' . (!empty($r[$i]) ? $r[$i] : '&nbsp;' ) . '</td>';
                                
                                // THIS ONE NK SKIP HEADERS VALUE
                                if ($k == 1)
                                    continue;
                                
                                switch ($i) {
                                    case 0:
                                        $no = $r[$i];
                                        break;
                                    case 1:
                                        $lablocation = $r[$i];
                                        $lablocation = getCode($lablocation, '002', $username);
                                        break;
                                    case 2:
                                        $productgroup = $r[$i];
                                        $productgroup = getCode($productgroup, '003', $username);
                                        break;
                                    case 3:
                                        $category = $r[$i];
                                        $category = getCode($category, '004', $username);
                                        break;
                                    case 4:
                                        $labmanager = $r[$i];
                                        $labmanager = getCode($labmanager, '005', $username);
                                        break;
                                    case 5:
                                        $manufacturer = $r[$i];
                                        $manufacturer = getCode($manufacturer, '025', $username);
                                        break;
                                    case 6:
                                        $model = $r[$i];
                                        $model = getCode($model, '026', $username);
                                        break;
                                    case 7:
                                        $daq = $r[$i];
                                        $daq = getCode($daq, '024', $username);
                                        break;
                                    case 8:
                                        $tempchannel = $r[$i];
                                        break;
                                    case 9:
                                        $voltchannel = $r[$i];
                                        break;
                                    case 10:
                                        $leakchannel = $r[$i];
                                        break;
                                    case 11:
                                        $maxvoltmeasure = $r[$i];
                                        break;
                                    case 12:
                                        $minvoltmeasure = $r[$i];
                                        break;
                                    case 13:
                                        $maxleakmeasure = $r[$i];
                                        break;
                                    case 14:
                                        $minleakmeasure = $r[$i];
                                        break;
                                    case 15:
                                        $maxtempmeasure = $r[$i];
                                        break;
                                    case 16:
                                        $mintempmeasure = $r[$i];
                                        break;
                                    case 17:
                                        $voltdrop = $r[$i];
                                        $voltdrop = getCode($voltdrop, '020', $username);
                                        break;
                                    case 18:
                                        $boardcheck = $r[$i];
                                        $boardcheck = getCode($boardcheck, '020', $username);
                                        break;
                                    case 19:
                                        $starttest = $r[$i];
                                        $starttest = getCode($starttest, '020', $username);
                                        break;
                                    case 20:
                                        $scantime = $r[$i];
                                        break;
                                    case 21:
                                        $leakreso = $r[$i];
                                        break;
                                    case 22:
                                        $leakaccuracy = $r[$i];
                                        break;
                                    case 23:
                                        $voltreso = $r[$i];
                                        break;
                                    case 24:
                                        $dataplot = $r[$i];
                                        $dataplot = getCode($dataplot, '022', $username);
                                        break;
                                    case 25:
                                        $typehardware = $r[$i];
                                        $typehardware = getCode($typehardware, '033', $username);
                                        break;
                                    case 26:
                                        $analogsingle = $r[$i];
                                        break;
                                    case 27:
                                        $analogdiff = $r[$i];
                                        break;
                                    case 28:
                                        $reso = $r[$i];
                                        break;
                                    case 29:
                                        $frequency = $r[$i];
                                        break;
                                    case 30:
                                        $support = $r[$i];
                                        $support = getCode($support, '034', $username);
                                        break;
                                    case 31:
                                        $hwmeasureR = $r[$i];
                                        $hwmeasureR = getCode($hwmeasureR, '035', $username);
                                        break;
                                    case 32:
                                        $hwmeasureV = $r[$i];
                                        $hwmeasureV = getCode($hwmeasureV, '036', $username);
                                        break;
                                    case 33:
                                        $hwmeasureT = $r[$i];
                                        $hwmeasureT = getCode($hwmeasureT, '037', $username);
                                        break;
                                    case 34:
                                        $eqptint = $r[$i];
                                        $eqptint = getCode($eqptint, '038', $username);
                                        break;
                                    case 35:
                                        $psint = $r[$i];
                                        $psint = getCode($typehardware, '038', $username);
                                        break;
                                }
                            }
                            echo '</tr>';
                            inserttodatabase($k, $username,
                                                $lablocation, $productgroup, $category, $labmanager, $manufacturer, $model, $daq, $tempchannel, $voltchannel, $leakchannel,
                                                $maxvoltmeasure, $minvoltmeasure, $maxleakmeasure, $minleakmeasure, $maxtempmeasure, $mintempmeasure, $voltdrop, $boardcheck, $starttest, $scantime,
                                                $leakreso, $leakaccuracy, $voltreso, $dataplot, $typehardware, $analogsingle, $analogdiff, $reso, $frequency, $support, 
                                                $hwmeasureR, $hwmeasureV, $hwmeasureT, $eqptint, $psint);
                        }
                    }
                }
            }
            echo '</table>';
            echo '</td></tr></table>';
            } else {
                echo 'You have uploaded an incorrect template. <br>This template is the old one [Check the columns]. <br>Please check the files before uploading.
                    <br><br>Severity: High
                    <br>Action: Please upload the correct template [DAQ].';
            }
        } else {
            echo 'You have uploaded an incorrect template. <br>The uploaded template is a ' . $xlsx->sheetName(0) . ' template, but the required template is an DAQ template. <br>Please check the files before uploading.
                    <br><br>Severity: Medium
                    <br>Action: Please upload the correct template [DAQ].';
        }
    } else {
        echo SimpleXLSX::parseError();
    }
}

function inserttodatabase($k, $username, 
                            $lablocation, $productgroup, $category, $labmanager, $manufacturer, $model, $daq, $tempchannel, $voltchannel, $leakchannel,
                            $maxvoltmeasure, $minvoltmeasure, $maxleakmeasure, $minleakmeasure, $maxtempmeasure, $mintempmeasure, $voltdrop, $boardcheck, $starttest, $scantime,
                            $leakreso, $leakaccuracy, $voltreso, $dataplot, $typehardware, $analogsingle, $analogdiff, $reso, $frequency, $support, 
                            $hwmeasureR, $hwmeasureV, $hwmeasureT, $eqptint, $psint) {
    if ($k == 1) {
        
    } else {
        include '../class/db.php';
        $newinsert = "INSERT INTO gest_form_daq (lab_location, strategy, standard_category, champion, manufacturer, model, daq_id, no_temp_channel, no_voltage_channel, no_leakage_channel, "
                    . "max_voltage_measure, min_voltage_measure, max_leakage_measure, min_leakage_measure, max_temp_measure, min_temp_measure, rdaq_voltage_drop, board_insert_check, rdaq_measure_start, scan_time, "
                    . "leakage_measure_resolution, leakage_measure_accuracy, voltage_measure_resolution, data_plot, hw_design, no_analog_input_single, no_analog_input_diff, resolution, sampling_freq, supported_eqpt, "
                    . "hw_resistance_measure, hw_voltage_measure, hw_temp_measure, daq_eqpt_interface, daq_ps_interface, created_by, created_date, status, flag) "
                    . "VALUES ('$lablocation', '$productgroup', '$category', '$labmanager', '$manufacturer', '$model', '$daq', '$tempchannel', '$voltchannel', '$leakchannel', "
                    . "'$maxvoltmeasure', '$minvoltmeasure', '$maxleakmeasure', '$minleakmeasure', '$maxtempmeasure', '$mintempmeasure', '$voltdrop', '$boardcheck', '$starttest', '$scantime', "
                    . "'$leakreso', '$leakaccuracy', '$voltreso', '$dataplot', '$typehardware', '$analogsingle', '$analogdiff', '$reso', '$frequency', '$support', "
                    . "'$hwmeasureR', '$hwmeasureV', '$hwmeasureT', '$eqptint', '$psint', '$username', NOW(), 'Active', '1')";
        if ($con->multi_query($newinsert) === TRUE) {
            
        } else {
            echo "Error: " . $newinsert . "<br>" . $con->error;
        }
        $con->close();
    }
}

function getCode($value, $code, $username) {
    
    $latestCode = '';
    if ($value == '') {
        $code = '';
    } else {
        include '../class/db.php';

        $qry = "SELECT * FROM gest_parameter_detail WHERE master_code = '$code' AND name = '$value'";
        $result = $con->query($qry);

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $latestCode = $row['code'];
            }
        } else {
            $slt = "SELECT LPAD(MAX(CODE)+1, 6, 0) as data FROM gest_parameter_detail WHERE master_code = '$code'";
            $result = $con->query($slt);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $latestCode = $row['data'];
                }
            }
            $qeyAdd = "INSERT INTO gest_parameter_detail (master_code, code, name, remark, created_date, created_by, flag) VALUES ('$code', '$latestCode', '$value', NULL, NOW(), '$username', 1)";
            $upload = mysqli_query($con, $qeyAdd);
        }
        $con->close();
    }
    return $latestCode;
}

function getMultipleCode($value, $code, $username) {
    $combinecode = '';
    $array = explode('/', $value);
    foreach ($array as $values) {
        $combinecode .= getCode($values, $code, $username) . ",";
    }
    $combinecode = rtrim($combinecode, ', ');
    return $combinecode;
}