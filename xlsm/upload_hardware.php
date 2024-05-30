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
    <h4 style="border-left: none;">Upload Hardware test</h4>
<form method="post" enctype="multipart/form-data">
*.XLSM <input type="file" name="file"  />&nbsp;&nbsp;<input type="submit" value="Load" />
</form>';

//echo '<h1>Read several sheets</h1>';

if ($username == '') {
    $username = 'System';
}

//$lablocation = '';
//$productgroup = '';
//$category = '';
//$labmanager = '';
//$hwtype = '';
//$manufacturer = '';
//$assembly = '';
//$voltrate = '';
//$currrate = '';
//$temprate = '';
//$stress = '';
//$daq = '';
//$pcb = '';
//$mbl = '';
//$mbw = '';
//$mbt = '';
//$layer = '';
//$frame = '';
//$board = '';
//$universal = '';
//$soctype = '';
//$socqty = '';
//$socpin = '';
//$socpitch = '';
//$package = '';
//$loadmax = '';
//$loadqty = '';
//$loadpitch = '';
//$promax = '';
//$progqty = '';
//$progpitch = '';
//$conntype = '';
//$nopins = '';
//$pinpitch = '';
//$edge = '';
//$maxdut = '';

$site = '';
$strategy = '';
$standard = '';
$manager = '';
$assembly_number = '';
$category = '';
$sub_category = '';
$rate_temp = '';
$rate_humid = '';
$rate_volt = '';
$rate_curr = '';
$pcb_material = '';
$pcb_temp = '';
$pcb_moisture = '';
$pcb_copper = '';
$pcb_thick = '';
$pcb_chamfered = '';
$pcb_coat = '';
$pcb_layer = '';
$edge_pitch = '';
$edge_thick = '';
$edge_width = '';
$edge_spacing = '';
$trace_layer = '';
$trace_thick = '';
$trace_width = '';
$trace_spacing = '';
$trace_drill = '';
$trace_impedance = '';
$board_material = '';
$board_screw = '';
$board_handle = '';
$component = '';
$socket_part = '';
$socket_avail = '';
$socket_qty = '';
$socket_pin_qty = '';
$socket_pin_pitch = '';
$socket_body = '';
$socket_pin = '';
$socket_config = '';
$socket_volt = '';
$socket_curr = '';
$socket_temp = '';
$conn_number = '';
$conn_avail = '';
$conn_pin_qty = '';
$conn_pin_pitch = '';
$conn_body = '';
$conn_pin = '';
$conn_mold = '';
$conn_contact = '';
$conn_volt = '';
$conn_curr = '';
$conn_temp = '';
$mark_volt = '';
$mark_curr = '';
$mark_temp = '';
$mark_board = '';
$mark_assembly = '';
$mark_stress = '';
$mark_socket = '';
$mark_pin = '';
$mark_vendor = '';
$mark_layer = '';
$mark_artwork = '';
$mark_cat = '';
$mark_dut = '';
$mark_loose = '';
$mark_bug = '';
$mark_bib = '';
$mark_logo = '';
$app_verify = '';
$app_component = '';
$app_temp = '';
$app_tight = '';
$app_select = '';
$app_heatsink = '';

$status = 'Active';
$flag = '1';

if (isset($_FILES['file'])) {
    if ($xlsx = SimpleXLSX::parse($_FILES['file']['tmp_name'])) {
//        echo '<pre>' . print_r($xlsx->sheetNames(), true) . '</pre>';
        
        if ($xlsx->sheetName(0) == 'HARDWARE') {
            echo '<table cellpadding="10">
                <tr><td valign="top">';

            $dim = $xlsx->dimension();
            $num_cols = $dim[0];
            $num_rows = $dim[1];
            
            if ($num_cols == '37') {
            
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
                                            $lablocation0 = $r[$i];
                                            $lablocation = getCode($lablocation0, '002', $username);
                                            break;
                                        case 2:
                                            $productgroup0 = $r[$i];
                                            $productgroup = getCode($productgroup0, '003', $username);
                                            break;
                                        case 3:
                                            $category0 = $r[$i];
                                            $category = getCode($category0, '004', $username);
                                            break;
                                        case 4:
                                            $labmanager0 = $r[$i];
                                            $labmanager = getCode($labmanager0, '005', $username);
                                            break;
                                        case 5:
                                            $hwtype0 = $r[$i];
                                            $hwtype = getCode($hwtype0, '019', $username);
                                            break;
                                        case 6:
                                            $manufacturer0 = $r[$i];
                                            $manufacturer = getCode($manufacturer0, '018', $username);
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
                                            $stress0 = $r[$i];
                                            $stress = getCode($stress0, '041', $username);
                                            break;
                                        case 12:
                                            $daq0 = $r[$i];
                                            $daq = getCode($daq0, '022', $username);
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
                                            $pcb0 = $r[$i];
                                            $pcb = getCode($pcb0, '042', $username);
                                            break;
                                        case 17:
                                            $frame0 = $r[$i];
                                            $frame = getCode($frame0, '043', $username);
                                            break;
                                        case 18:
                                            $board0 = $r[$i];
                                            $board = getCode($board0, '044', $username);
                                            break;
                                        case 19:
                                            $layer = $r[$i];
                                            break;
                                        case 20:
                                            $universal0 = $r[$i];
                                            $universal = getCode($universal0, '045', $username);
                                            break;
                                        case 21:
                                            $soctype0 = $r[$i];
                                            $soctype = getCode($soctype0, '046', $username);
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
                                            $package0 = $r[$i];
                                            $package = getCode($package0, '047', $username);
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
                                            $conntype0 = $r[$i];
                                            $conntype = getCode($conntype0, '046', $username);
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
            } else if ($num_cols == '79') {
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
                                            $lablocation0 = $r[$i];
                                            $site = getCode($lablocation0, '002', $username);
                                            break;
                                        case 2:
                                            $productgroup0 = $r[$i];
                                            $strategy = getCode($productgroup0, '003', $username);
                                            break;
                                        case 3:
                                            $category0 = $r[$i];
                                            $standard = getCode($category0, '004', $username);
                                            break;
                                        case 4:
                                            $labmanager0 = $r[$i];
                                            $manager = getCode($labmanager0, '005', $username);
                                            break;
                                        case 5:
                                            $assembly_number = $r[$i];
                                            break; 
                                        case 6:
                                            $category0 = $r[$i];
                                            $category = getCode($category0, '045', $username);
                                            break;
                                        case 7:
                                            $sub = $r[$i];
                                            // THIS ONE HARDCODED, plEASE MAKE SURE THE DATA IS TALLY
                                            switch ($category) {
                                                case '045001':
                                                    $sub_category = getCode($sub, '048', $username);
                                                    break;
                                                case '045002':
                                                    $sub_category = getCode($sub, '049', $username);
                                                    break;
                                                default:
                                                    break;
                                            }
                                            break;
                                        case 8:
                                            $rate_temp = $r[$i];
                                            break;
                                        case 9:
                                            $rate_humid = $r[$i];
                                            break;
                                        case 10:
                                            $rate_volt = $r[$i];
                                            break;
                                        case 11:
                                            $rate_curr = $r[$i];
                                            break;
                                        case 12:
                                            $pcb_material = $r[$i];
                                            break;
                                        case 13:
                                            $pcb_temp = $r[$i];
                                            break;
                                        case 14:
                                            $pcb_moisture = $r[$i];
                                            break;
                                        case 15:
                                            $pcb_copper = $r[$i];
                                            break;
                                        case 16:
                                            $pcb_thick = $r[$i];
                                            break;
                                        case 17:
                                            $pcb_chamfered0 = $r[$i];
                                            $pcb_chamfered = getCode($pcb_chamfered0, '020', $username);
                                            break;
                                        case 18:
                                            $pcb_coat0 = $r[$i];
                                            $pcb_coat = getCode($pcb_coat0, '020', $username);
                                            break;
                                        case 19:
                                            $pcb_layer = $r[$i];
                                            break;
                                        case 20:
                                            $edge_pitch = $r[$i];
                                            break;
                                        case 21:
                                            $edge_thick = $r[$i];
                                            break;
                                        case 22:
                                            $edge_width = $r[$i];
                                            break;
                                        case 23:
                                            $edge_spacing = $r[$i];
                                            break;
                                        case 24:
                                            $trace_layer0 = $r[$i];
                                            $trace_layer = getCode($trace_layer0, '020', $username);
                                            break;
                                        case 25:
                                            $trace_thick = $r[$i];
                                            break;
                                        case 26:
                                            $trace_width = $r[$i];
                                            break;
                                        case 27:
                                            $trace_spacing = $r[$i];
                                            break;
                                        case 28:
                                            $trace_drill = $r[$i];
                                            break;
                                        case 29:
                                            $trace_impedance0 = $r[$i];
                                            $trace_impedance = getCode($trace_impedance0, '020', $username);
                                            break;
                                        case 30:
                                            $board_material = $r[$i];
                                            break;
                                        case 31:
                                            $board_screw0 = $r[$i];
                                            $board_screw = getCode($board_screw0, '050', $username);
                                            break;
                                        case 32:
                                            $board_handle0 = $r[$i];
                                            $board_handle = getCode($board_handle0, '020', $username);
                                            break;
                                        case 33:
                                            $component = $r[$i];
                                            break;
                                        case 34:
                                            $socket_part = $r[$i];
                                            break;
                                        case 35:
                                            $socket_avail = $r[$i];
                                            break;
                                        case 36:
                                            $socket_qty = $r[$i];
                                            break;
                                        case 37:
                                            $socket_pin_qty = $r[$i];
                                            break;
                                        case 38:
                                            $socket_pin_pitch = $r[$i];
                                            break;
                                        case 39:
                                            $socket_body = $r[$i];
                                            break;
                                        case 40:
                                            $socket_pin = $r[$i];
                                            break;
                                        case 41:
                                            $socket_config = $r[$i];
                                            break;
                                        case 42:
                                            $socket_volt = $r[$i];
                                            break;
                                        case 43:
                                            $socket_curr = $r[$i];
                                            break;
                                        case 44:
                                            $socket_temp = $r[$i];
                                            break;
                                        case 45:
                                            $conn_number = $r[$i];
                                            break;
                                        case 46:
                                            $conn_avail = $r[$i];
                                            break;
                                        case 47:
                                            $conn_pin_qty = $r[$i];
                                            break;
                                        case 48:
                                            $conn_pin_pitch = $r[$i];
                                            break;
                                        case 49:
                                            $conn_body = $r[$i];
                                            break;
                                        case 50:
                                            $conn_pin = $r[$i];
                                            break;
                                        case 51:
                                            $conn_mold = $r[$i];
                                            break;
                                        case 52:
                                            $conn_contact = $r[$i];
                                            break;
                                        case 53:
                                            $conn_volt = $r[$i];
                                            break;
                                        case 54:
                                            $conn_curr = $r[$i];
                                            break;
                                        case 55:
                                            $conn_temp = $r[$i];
                                            break;
                                        case 56:
                                            $mark_volt0 = $r[$i];
                                            $mark_volt = getCode($mark_volt0, '020', $username);
                                            break;
                                        case 57:
                                            $mark_curr0 = $r[$i];
                                            $mark_curr = getCode($mark_curr0, '020', $username);
                                            break;
                                        case 58:
                                            $mark_temp0 = $r[$i];
                                            $mark_temp = getCode($mark_temp0, '020', $username);
                                            break;
                                        case 59:
                                            $mark_board0 = $r[$i];
                                            $mark_board = getCode($mark_board0, '020', $username);
                                            break;
                                        case 60:
                                            $mark_assembly0 = $r[$i];
                                            $mark_assembly = getCode($mark_assembly0, '020', $username);
                                            break;
                                        case 61:
                                            $mark_stress0 = $r[$i];
                                            $mark_stress = getCode($mark_stress0, '020', $username);
                                            break;
                                        case 62:
                                            $mark_socket0 = $r[$i];
                                            $mark_socket = getCode($mark_socket0, '020', $username);
                                            break;
                                        case 63:
                                            $mark_pin0 = $r[$i];
                                            $mark_pin = getCode($mark_pin0, '020', $username);
                                            break;
                                        case 64:
                                            $mark_vendor0 = $r[$i];
                                            $mark_vendor = getCode($mark_vendor0, '020', $username);
                                            break;
                                        case 65:
                                            $mark_layer0 = $r[$i];
                                            $mark_layer = getCode($mark_layer0, '020', $username);
                                            break;
                                        case 66:
                                            $mark_artwork0 = $r[$i];
                                            $mark_artwork = getCode($mark_artwork0, '020', $username);
                                            break;
                                        case 67:
                                            $mark_cat0 = $r[$i];
                                            $mark_cat = getCode($mark_cat0, '020', $username);
                                            break;
                                        case 68:
                                            $mark_dut0 = $r[$i];
                                            $mark_dut = getCode($mark_dut0, '020', $username);
                                            break;
                                        case 69:
                                            $mark_loose0 = $r[$i];
                                            $mark_loose = getCode($mark_loose0, '020', $username);
                                            break;
                                        case 70:
                                            $mark_bug0 = $r[$i];
                                            $mark_bug = getCode($mark_bug0, '020', $username);
                                            break;
                                        case 71:
                                            $mark_bib0 = $r[$i];
                                            $mark_bib = getCode($mark_bib0, '020', $username);
                                            break;
                                        case 72:
                                            $mark_logo0 = $r[$i];
                                            $mark_logo = getCode($mark_logo0, '020', $username);
                                            break;
                                        case 73:
                                            $app_verify = $r[$i];
                                            break;
                                        case 74:
                                            $app_component = $r[$i];
                                            break;
                                        case 75:
                                            $app_temp = $r[$i];
                                            break;
                                        case 76:
                                            $app_tight = $r[$i];
                                            break;
                                        case 77:
                                            $app_select = $r[$i];
                                            break;
                                        case 78:
                                            $app_heatsink = $r[$i];
                                            break;
                                    }
                                }
                                echo '</tr>';
                                inserttohwdatabase($k, $username, $strategy, $standard, $manager,
                                        $site, $assembly_number, $category, $sub_category, $rate_temp, $rate_humid, $rate_volt, $rate_curr, 
                                        $pcb_material, $pcb_temp, $pcb_moisture, $pcb_copper, $pcb_thick, $pcb_chamfered, $pcb_coat, $pcb_layer,
                                        $edge_pitch, $edge_thick, $edge_width, $edge_spacing, $trace_layer, $trace_thick, $trace_width, $trace_spacing, $trace_drill, $trace_impedance, 
                                        $board_material, $board_screw, $board_handle, $component, $socket_part, $socket_avail, $socket_qty, $socket_pin_qty, $socket_pin_pitch, $socket_body, $socket_pin, $socket_config, $socket_volt, $socket_curr, $socket_temp,
                                        $conn_number, $conn_avail, $conn_pin_qty, $conn_pin_pitch, $conn_body, $conn_pin, $conn_mold, $conn_contact, $conn_volt, $conn_curr, $conn_temp, 
                                        $mark_volt, $mark_curr, $mark_temp, $mark_board, $mark_assembly, $mark_stress, $mark_socket, $mark_pin, $mark_vendor, $mark_layer, $mark_artwork, $mark_cat, $mark_dut, $mark_loose, $mark_bug, $mark_bib, $mark_logo, 
                                        $app_verify, $app_component, $app_temp, $app_tight, $app_select, $app_heatsink);
//                                inserttodatabase($k, $username,
//                                                    $lablocation, $productgroup, $category, $labmanager, $hwtype, $manufacturer, $assembly, $voltrate, $currrate, $temprate,
//                                                    $stress, $daq, $pcb, $mbl, $mbw, $mbt, $layer, $frame, $board, $universal,
//                                                    $soctype, $socqty, $socpin, $socpitch, $package, $loadmax, $loadqty, $loadpitch, $promax, $progqty,
//                                                    $progpitch, $conntype, $nopins, $pinpitch, $edge, $maxdut);
                            }
                        }
                    }
                }
                echo '</table>';
                echo '</td></tr></table>';
            } else if ($num_cols == '74') {
                echo 'salah upload 74';
            } else if ($num_cols == '75') {
                echo 'salah upload 75';
            } else if ($num_cols == '77') {
                echo 'salah upload 77';
            } else if ($num_cols == '78') {
                echo 'salah upload 78';
            } else {
                echo 'You have uploaded an incorrect template. <br>This template is the old one [Check the columns]. <br>Please check the files before uploading.
                    <br><br>Severity: High
                    <br> ada '.$num_cols.' ni
                    <br>Action: Please upload the correct template [Hardware].';
            }
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
            echo "Error: " . $insert . "<br>" . $con->error;
        }
        $con->close();
    }
}

function inserttohwdatabase($k, $username, $strategy, $standard, $manager,
                            $site, $assembly_number, $category, $sub_category, $rate_temp, $rate_humid, $rate_volt, $rate_curr, 
                            $pcb_material, $pcb_temp, $pcb_moisture, $pcb_copper, $pcb_thick, $pcb_chamfered, $pcb_coat, $pcb_layer,
                            $edge_pitch, $edge_thick, $edge_width, $edge_spacing, $trace_layer, $trace_thick, $trace_width, $trace_spacing, $trace_drill, $trace_impedance, 
                            $board_material, $board_screw, $board_handle, $component, $socket_part, $socket_avail, $socket_qty, $socket_pin_qty, $socket_pin_pitch, $socket_body, $socket_pin, $socket_config, $socket_volt, $socket_curr, $socket_temp,
                            $conn_number, $conn_avail, $conn_pin_qty, $conn_pin_pitch, $conn_body, $conn_pin, $conn_mold, $conn_contact, $conn_volt, $conn_curr, $conn_temp, 
                            $mark_volt, $mark_curr, $mark_temp, $mark_board, $mark_assembly, $mark_stress, $mark_socket, $mark_pin, $mark_vendor, $mark_layer, $mark_artwork, $mark_cat, $mark_dut, $mark_loose, $mark_bug, $mark_bib, $mark_logo, 
                            $app_verify, $app_component, $app_temp, $app_tight, $app_select, $app_heatsink) {
    if ($k == 1) {
        
    } else {
        include '../class/db.php';
        $insert = "INSERT INTO gest_form_hw0 (lab_location, strategy, standard_category, champion, assembly_no, "
                . "category, sub_category, temp_rating, humid_rating, voltage_rating, current_rating, "
                . "created_by, updated_by, delete_by, created_date, update_date, delete_date, status, flag) "
                . "VALUES ('$site', '$strategy', '$standard', '$manager', '$assembly_number', "
                . "'$category', '$sub_category', '$rate_temp', '$rate_humid', '$rate_volt', '$rate_curr', "
                . "'$username', NULL, NULL, NOW(), NULL, NULL, 'Active', '1')";
                
        if ($con->multi_query($insert) === TRUE) {
            $hardware_id = $con->insert_id;
            $query002 = "INSERT INTO gest_form_hw1 (hw_id, pcb_material, pcb_temp, pcb_moisture, pcb_copper, pcb_thick, pcb_edge, pcb_coating, pcb_layer, "
                        . "edge_pitch, edge_thick, edge_width, edge_spacing, trace_layer, trace_thick, trace_width, trace_spacing, trace_drill, trace_control, "
                        . "bf_material, bf_screw, bf_handle, component) "
                        . "VALUES ('$hardware_id', '$pcb_material', '$pcb_temp', '$pcb_moisture', '$pcb_copper', '$pcb_thick', '$pcb_chamfered', '$pcb_coat', '$pcb_layer', "
                        . "'$edge_pitch', '$edge_thick', '$edge_width', '$edge_spacing', '$trace_layer', '$trace_thick', '$trace_width', '$trace_spacing', '$trace_drill', '$trace_impedance', "
                        . "'$board_material', '$board_screw', '$board_handle', '$component')";
            $insert02 = mysqli_query($con, $query002);

            $query003 = "INSERT INTO gest_form_hw2 (hw_id, mb_socket_part, mb_socket_avail, mb_socket_qty, mb_socket_pin_qty, mb_socket_pin_pitch, "
                        . "mb_socket_body, mb_socket_pin, mb_socket_config, mb_socket_volt, mb_socket_curr, mb_socket_temp, "
                        . "conn_number, conn_avail, conn_pin_qty, conn_pin_pitch, conn_body, conn_pin, "
                        . "conn_mold, conn_contact, conn_volt, conn_curr, conn_temp) "
                        . "VALUES ('$hardware_id', '$socket_part', '$socket_avail', '$socket_qty', '$socket_pin_qty', '$socket_pin_pitch', "
                        . "'$socket_body', '$socket_pin', '$socket_config', '$socket_volt', '$socket_curr', '$socket_temp', "
                        . "'$conn_number', '$conn_avail', '$conn_pin_qty', '$conn_pin_pitch', '$conn_body', '$conn_pin', "
                        . "'$conn_mold', '$conn_contact', '$conn_volt', '$conn_curr', '$conn_temp')";
            $insert03 = mysqli_query($con, $query003);

            $query004 = "INSERT INTO gest_form_hw3 (hw_id, mark_volt, mark_curr, mark_temp, mark_board, mark_assembly, "
                        . "mark_stress, mark_socket, mark_pin, mark_vendor, mark_layer, mark_artwork, "
                        . "mark_cat, mark_dut, mark_loose, mark_bug, mark_bib, mark_logo, "
                        . "app_verify, app_component, app_temp, app_tight, app_select, app_heatsink) "
                        . "VALUES ('$hardware_id', '$mark_volt', '$mark_curr', '$mark_temp', '$mark_board', '$mark_assembly', "
                        . "'$mark_stress', '$mark_socket', '$mark_pin', '$mark_vendor', '$mark_layer', '$mark_artwork', "
                        . "'$mark_cat', '$mark_dut', '$mark_loose', '$mark_bug', '$mark_bib', '$mark_logo', "
                        . "'$app_verify', '$app_component', '$app_temp', '$app_tight', '$app_select', '$app_heatsink')";
            $insert04 = mysqli_query($con, $query004);
        } else {
            echo "Error: " . $insert . "<br>" . $con->error;
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