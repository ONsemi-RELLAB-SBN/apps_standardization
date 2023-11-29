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
    <h4 style="border-left: none;">Upload Hardware</h4>
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
$hwtype = '';
$manufacturer = '';
$assembly = '';
$voltrate = '';
$currrate = '';
$temprate = '';
$stress = '';
$daq = '';
$pcb = '';
$mbl = '';
$mbw = '';
$mbt = '';
$layer = '';
$frame = '';
$board = '';
$universal = '';
$soctype = '';
$socqty = '';
$socpin = '';
$socpitch = '';
$package = '';
$loadmax = '';
$loadqty = '';
$loadpitch = '';
$promax = '';
$progqty = '';
$progpitch = '';
$conntype = '';
$nopins = '';
$pinpitch = '';
$edge = '';
$maxdut = '';

if (isset($_FILES['file'])) {
    if ($xlsx = SimpleXLSX::parse($_FILES['file']['tmp_name'])) {
//        echo '<pre>' . print_r($xlsx->sheetNames(), true) . '</pre>';
        
        if ($xlsx->sheetName(0) == 'HARDWARE') {
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
                                        $hwtype = $r[$i];
                                        $hwtype = getCode($hwtype, '019', $username);
                                        break;
                                    case 6:
                                        $manufacturer = $r[$i];
                                        $manufacturer = getCode($manufacturer, '018', $username);
                                        break;
                                    case 7:
                                        $assembly = $r[$i];
                                        break;
                                    case 8:
                                        $voltrate = $r[$i];
                                        break;
                                    case 9:
                                        $currrate = $r[$i];
                                        break;
                                    case 10:
                                        $temprate = $r[$i];
                                        break;
                                    case 11:
                                        $stress = $r[$i];
                                        $stress = getCode($stress, '041', $username);
                                        break;
                                    case 12:
                                        $daq = $r[$i];
                                        $daq = getCode($daq, '022', $username);
                                        break;
                                    case 13:
                                        $mbl = $r[$i];
                                        break;
                                    case 14:
                                        $mbw = $r[$i];
                                        break;
                                    case 15:
                                        $mbt = $r[$i];
                                        break;
                                    case 16:
                                        $pcb = $r[$i];
                                        $pcb = getCode($pcb, '042', $username);
                                        break;
                                    case 17:
                                        $frame = $r[$i];
                                        $frame = getCode($frame, '043', $username);
                                        break;
                                    case 18:
                                        $board = $r[$i];
                                        $board = getCode($board, '044', $username);
                                        break;
                                    case 19:
                                        $layer = $r[$i];
                                        break;
                                    case 20:
                                        $universal = $r[$i];
                                        $universal = getCode($universal, '045', $username);
                                        break;
                                    case 21:
                                        $soctype = $r[$i];
                                        $soctype = getCode($soctype, '046', $username);
                                        break;
                                    case 22:
                                        $socqty = $r[$i];
                                        break;
                                    case 23:
                                        $socpin = $r[$i];
                                        break;
                                    case 24:
                                        $socpitch = $r[$i];
                                        break;
                                    case 25:
                                        $package = $r[$i];
                                        $package = getCode($package, '047', $username);
                                        break;
                                    case 26:
                                        $loadmax = $r[$i];
                                        break;
                                    case 27:
                                        $loadqty = $r[$i];
                                        break;
                                    case 28:
                                        $loadpitch = $r[$i];
                                        break;
                                    case 29:
                                        $promax = $r[$i];
                                        break;
                                    case 30:
                                        $progqty = $r[$i];
                                        break;
                                    case 31:
                                        $progpitch = $r[$i];
                                        break;
                                    case 32:
                                        $conntype = $r[$i];
                                        $conntype = getCode($conntype, '046', $username);
                                        break;
                                    case 33:
                                        $nopins = $r[$i];
                                        break;
                                    case 34:
                                        $pinpitch = $r[$i];
                                        break;
                                    case 35:
                                        $edge = $r[$i];
                                        break;
                                    case 36:
                                        $maxdut = $r[$i];
                                        break;
                                }
                            }
                            echo '</tr>';
                            inserttodatabase($k, $username,
                                                $lablocation, $productgroup, $category, $labmanager, $hwtype, $manufacturer, $assembly, $voltrate, $currrate, $temprate,
                                                $stress, $daq, $pcb, $mbl, $mbw, $mbt, $layer, $frame, $board, $universal,
                                                $soctype, $socqty, $socpin, $socpitch, $package, $loadmax, $loadqty, $loadpitch, $promax, $progqty,
                                                $progpitch, $conntype, $nopins, $pinpitch, $edge, $maxdut);
                        }
                    }
                }
            }
            echo '</table>';
            echo '</td></tr></table>';
        } else {
            echo 'You have uploaded an incorrect template. <br>The uploaded template is a ' . $xlsx->sheetName(0) . ' template, but the required template is an Hardware template. <br>Please check the files before uploading.
                    <br><br>Severity: Medium
                    <br>Action: Please upload the correct template [Hardware].';
        }
    } else {
        echo SimpleXLSX::parseError();
    }
}

function inserttodatabase($k, $username, $lablocation, $productgroup, $category, $labmanager, $hwtype, $manufacturer, $assembly, $voltrate, $currrate, $temprate,
                            $stress, $daq, $pcb, $mbl, $mbw, $mbt, $layer, $frame, $board, $universal,
                            $soctype, $socqty, $socpin, $socpitch, $package, $loadmax, $loadqty, $loadpitch, $promax, $progqty,
                            $progpitch, $conntype, $nopins, $pinpitch, $edge, $maxdut) {
    if ($k == 1) {
        
    } else {
        include '../class/db.php';
        $insert = "INSERT INTO gest_form_hw (lab_location, strategy, standard_category, champion, hw_type, manufacturer, assembly_no, voltage_rating, current_rating, "
                . "temp_rating, support_stress, daq_monitoring, pcb_material, mb_dimension_l, mb_dimension_w, mb_dimension_t, no_layer, frame_material, board_coating, "
                . "mb_universal_dedicated, mb_socket_type, mb_socket_qty, mb_socket_pin_qty, mb_socket_pin_pitch, mb_support_card, lc_max_qty, lc_pin_qty, lc_pin_pitch, pc_max_qty, "
                . "pc_pin_qty, pc_pin_pitch, connector_type, no_pin, pin_pitch, edgefinger_thickness, max_dut_qty_mb, created_by, created_date, status, flag) "
                . "VALUES ('$lablocation', '$productgroup', '$category', '$labmanager', '$hwtype', '$manufacturer', '$assembly', '$voltrate', '$currrate', "
                . "'$temprate', '$stress', '$daq', '$pcb', '$mbl', '$mbw', '$mbt', '$layer', '$frame', '$board', "
                . "'$universal', '$soctype', '$socqty', '$socpin', '$socpitch', '$package', '$loadmax', '$loadqty', '$loadpitch', '$promax', "
                . "'$progqty', '$progpitch', '$conntype', '$nopins', '$pinpitch', '$edge', '$maxdut', '$username', NOW(), 'Active', '1')";
        if ($con->multi_query($insert) === TRUE) {
            
        } else {
            echo "Error: " . $newinsert . "<br>" . $con->error;
        }
        $con->close();
    }
}

function getCode($value, $code, $username) {
    
    if ($value == '') {
        $code = '';
    } else {
        include '../class/db.php';

        $qry = "SELECT * FROM gest_parameter_detail WHERE master_code = '$code' AND name = '$value'";
        $result = $con->query($qry);
        $latestCode = '';

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