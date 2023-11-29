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
    <h4 style="border-left: none;">Upload Power Supply</h4>
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
$voltrate = '';
$currate = '';
$maxpower = '';
$voltdisplay = '';
$currdisplay = '';
$overvoltage = '';
$overcurrent = '';
$dimensionw = '';
$dimensiond = '';
$dimensionh = '';
$weight = '';
$minvoltage = '';
$maxvoltage = '';
$remote = '';
$voltmonitor = '';
$currmonitor = '';
$pstoeqpt = '';
$lanport = '';
$gpib = '';
$other = '';
$output = '';

if (isset($_FILES['file'])) {
    if ($xlsx = SimpleXLSX::parse($_FILES['file']['tmp_name'])) {
//        echo '<pre>' . print_r($xlsx->sheetNames(), true) . '</pre>';
        
        if ($xlsx->sheetName(0) == 'POWERSUPPLY') {
            echo '<table cellpadding="10">
                <tr><td valign="top">';

            $dim = $xlsx->dimension();
            $num_cols = $dim[0];
            $num_rows = $dim[1];

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
                                        $manufacturer = getCode($manufacturer, '039', $username);
                                        break;
                                    case 6:
                                        $model = $r[$i];
                                        $model = getCode($model, '040', $username);
                                        break;
                                    case 7:
                                        $voltrate = $r[$i];
                                        break;
                                    case 8:
                                        $currate = $r[$i];
                                        break;
                                    case 9:
                                        $maxpower = $r[$i];
                                        break;
                                    case 10:
                                        $voltdisplay = $r[$i];
                                        break;
                                    case 11:
                                        $currdisplay = $r[$i];
                                        break;
                                    case 12:
                                        $overvoltage = $r[$i];
                                        $overvoltage = getCode($overvoltage, '022', $username);
                                        break;
                                    case 13:
                                        $overcurrent = $r[$i];
                                        $overcurrent = getCode($overcurrent, '022', $username);
                                        break;
                                    case 14:
                                        $dimensionw = $r[$i];
                                        break;
                                    case 15:
                                        $dimensiond = $r[$i];
                                        break;
                                    case 16:
                                        $dimensionh = $r[$i];
                                        break;
                                    case 17:
                                        $weight = $r[$i];
                                        break;
                                    case 18:
                                        $minvoltage = $r[$i];
                                        break;
                                    case 19:
                                        $maxvoltage = $r[$i];
                                        break;
                                    case 20:
                                        $remote = $r[$i];
                                        $remote = getCode($remote, '022', $username);
                                        break;
                                    case 21:
                                        $voltmonitor = $r[$i];
                                        $voltmonitor = getCode($voltmonitor, '022', $username);
                                        break;
                                    case 22:
                                        $currmonitor = $r[$i];
                                        $currmonitor = getCode($currmonitor, '022', $username);
                                        break;
                                    case 23:
                                        $pstoeqpt = $r[$i];
                                        $pstoeqpt = getCode($pstoeqpt, '027', $username);
                                        break;
                                    case 24:
                                        $lanport = $r[$i];
                                        $lanport = getCode($lanport, '022', $username);
                                        break;
                                    case 25:
                                        $gpib = $r[$i];
                                        $gpib = getCode($gpib, '022', $username);
                                        break;
                                    case 26:
                                        $other = $r[$i];
                                        $other = getCode($other, '029', $username);
                                        break;
                                    case 27:
                                        $output = $r[$i];
                                        break;
                                }
                            }
                            echo '</tr>';
                            inserttodatabase($k, $username, 
                                                $lablocation, $productgroup, $category, $labmanager, $manufacturer, $model, $voltrate, $currate, $maxpower, $voltdisplay,
                                                $currdisplay, $overvoltage, $overcurrent, $dimensionw, $dimensiond, $dimensionh, $weight, $minvoltage, $maxvoltage, $remote,
                                                $voltmonitor, $currmonitor, $pstoeqpt, $lanport, $gpib, $other, $output);
                        }
                    }
                }
            }
            echo '</table>';
            echo '</td></tr></table>';
        } else {
            echo 'You have uploaded an incorrect template. <br>The uploaded template is a ' . $xlsx->sheetName(0) . ' template, but the required template is an Power Supply template. <br>Please check the files before uploading.
                    <br><br>Severity: Medium
                    <br>Action: Please upload the correct template [Power Supply].';
        }
    } else {
        echo SimpleXLSX::parseError();
    }
}

function inserttodatabase($k, $username, 
                            $lablocation, $productgroup, $category, $labmanager, $manufacturer, $model, $voltrate, $currate, $maxpower, $voltdisplay,
                            $currdisplay, $overvoltage, $overcurrent, $dimensionw, $dimensiond, $dimensionh, $weight, $minvoltage, $maxvoltage, $remote,
                            $voltmonitor, $currmonitor, $pstoeqpt, $lanport, $gpib, $other, $output) {
    if ($k == 1) {
        
    } else {
        include '../class/db.php';
        $insert = "INSERT INTO gest_form_ps (lab_location, strategy, standard_category, champion, manufacturer, model, voltage_rating, current_rating, max_power, no_voltage_display, "
                . "no_current_display, ovp, ocp, ps_dimension_w, ps_dimension_d, ps_dimension_h, weight, min_voltage, max_voltage, remote_operation, "
                . "voltage_monitor, current_monitor, eqpt_interface, lan_port, gpib_interface, other_interface, input_voltage, no_output, created_by, created_date, status, flag) "
                . "VALUES ('$lablocation', '$productgroup', '$category', '$labmanager', '$manufacturer', '$model', '$voltrate', '$currate', '$maxpower', '$voltdisplay', "
                . "'$currdisplay', '$overvoltage', '$overcurrent', '$dimensionw', '$dimensiond', '$dimensionh', '$weight', '$minvoltage', '$maxvoltage', '$remote', "
                . "'$voltmonitor', '$currmonitor', '$pstoeqpt', '$lanport', '$gpib', '$other', '', '$output', '$username', NOW(), 'Active', 1)";
        if ($con->multi_query($insert) === TRUE) {
            
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