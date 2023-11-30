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
    <h4 style="border-left: none;">Upload Equipment</h4>
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
$eqptId = '';
$usage = '';
$reltest = '';
$zone = '';
$manufacturer = '';
$model = '';
$mfgdate = '';
$assetno = '';
$transfer = '';
$from = '';
$voltrate = '';
$voltacc = '';
$currrate = '';
$powerrate = '';
$mintimer = '';
$maxtimer = '';
$mintemp = '';
$maxtemp = '';
$minrh = '';
$maxrh = '';
$minpress = '';
$maxpress = '';
$heatdiss = '';
$tempfluc = '';
$uniform = '';
$humid = '';
$extdimw = '';
$extdimd = '';
$extdimh = '';
$intdimw = '';
$intdimd = '';
$intdimh = '';
$diameter = '';
$nozone = '';
$rackw = '';
$rackd = '';
$rackh = '';
$intvolume = '';
$board = '';
$rackmaterial = '';
$rackslotpitch = '';
$rackslotwidth = '';
$rackweight = '';
$nombslot = '';
$maxpsslot = '';
$maxpseqpt = '';
$airflow = '';
$temp01 = '';
$temp02 = '';
$temp03 = '';
$presswitch = '';
$safevalve = '';
$smoke = '';
$emo = '';
$voltage = '';
$current = '';
$phase = '';
$exhaust = '';
$n2gas = '';
$oxygen = '';
$liquid = '';
$chilled = '';
$diwater = '';
$topap = '';
$cda = '';
$lan = '';
$daq = '';
$inttype = '';
$jack = '';
$convoltrate = '';
$concurrrate = '';
$contemprate = '';
$nopin = '';
$nopitch = '';
$connrack = '';
$wirevoltrate = '';
$wirecurrrate = '';
$wiretemprate = '';
$exttype = '';
$intvoltrate = '';
$intcurrrate = '';

if (isset($_FILES['file'])) {
    if ($xlsx = SimpleXLSX::parse($_FILES['file']['tmp_name'])) {
//        echo '<pre>' . print_r($xlsx->sheetNames(), true) . '</pre>';

        if ($xlsx->sheetName(0) == 'EQUIPMENT') {
            echo '<table cellpadding="10">
                <tr><td valign="top">';

            $dim = $xlsx->dimension();
            $num_cols = $dim[0];
            $num_rows = $dim[1];
            
            if ($num_cols == '93') {

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
                                        $eqptId = $r[$i];
                                        $eqptId = getCode($eqptId, '006', $username);
                                        break;
                                    case 6:
                                        $usage = $r[$i];
                                        $usage = getCode($usage, '007', $username);
                                        break;
                                    case 7:
                                        $reltest = $r[$i];
                                        $reltest = getMultipleCode($reltest, '008', $username);
                                        break;
                                    case 8:
                                        $zone = $r[$i];
                                        break;
                                    case 9:
                                        $manufacturer = $r[$i];
                                        $manufacturer = getCode($manufacturer, '009', $username);
                                        break;
                                    case 10:
                                        $model = $r[$i];
                                        $model = getCode($model, '010', $username);
                                        break;
                                    case 11:
                                        $mfgdate = $r[$i];
                                        break;
                                    case 12:
                                        $assetno = $r[$i];
                                        break;
                                    case 13:
                                        $transfer = $r[$i];
                                        $transfer = getCode($transfer, '013', $username);
                                        break;
                                    case 14:
                                        $from = $r[$i];
                                        $from = getCode($from, '014', $username);
                                        break;
                                    case 15:
                                        $voltrate = $r[$i];
                                        break;
                                    case 16:
                                        $voltacc = $r[$i];
                                        break;
                                    case 17:
                                        $currrate = $r[$i];
                                        break;
                                    case 18:
                                        $powerrate = $r[$i];
                                        break;
                                    case 19:
                                        $mintimer = $r[$i];
                                        break;
                                    case 20:
                                        $maxtimer = $r[$i];
                                        break;
                                    case 21:
                                        $mintemp = $r[$i];
                                        break;
                                    case 22:
                                        $maxtemp = $r[$i];
                                        break;
                                    case 23:
                                        $minrh = $r[$i];
                                        break;
                                    case 24:
                                        $maxrh = $r[$i];
                                        break;
                                    case 25:
                                        $minpress = $r[$i];
                                        break;
                                    case 26:
                                        $maxpress = $r[$i];
                                        break;
                                    case 27:
                                        $heatdiss = $r[$i];
                                        break;
                                    case 28:
                                        $tempfluc = $r[$i];
                                        break;
                                    case 29:
                                        $uniform = $r[$i];
                                        break;
                                    case 30:
                                        $humid = $r[$i];
                                        break;
                                    case 31:
                                        $extdimw = $r[$i];
                                        break;
                                    case 32:
                                        $extdimd = $r[$i];
                                        break;
                                    case 33:
                                        $extdimh = $r[$i];
                                        break;
                                    case 34:
                                        $intdimw = $r[$i];
                                        break;
                                    case 35:
                                        $intdimd = $r[$i];
                                        break;
                                    case 36:
                                        $intdimh = $r[$i];
                                        break;
                                    case 37:
                                        $diameter = $r[$i];
                                        break;
                                    case 38:
                                        $nozone = $r[$i];
                                        break;
                                    case 39:
                                        $rackw = $r[$i];
                                        break;
                                    case 40:
                                        $rackd = $r[$i];
                                        break;
                                    case 41:
                                        $rackh = $r[$i];
                                        break;
                                    case 42:
                                        $intvolume = $r[$i];
                                        break;
                                    case 43:
                                        $board = $r[$i];
                                        $board = getCode($board, '015', $username);
                                        break;
                                    case 44:
                                        $rackmaterial = $r[$i];
                                        $rackmaterial = getCode($rackmaterial, '016', $username);
                                        break;
                                    case 45:
                                        $rackslotpitch = $r[$i];
                                        break;
                                    case 46:
                                        $rackslotwidth = $r[$i];
                                        break;
                                    case 47:
                                        $rackweight = $r[$i];
                                        break;
                                    case 48:
                                        $nombslot = $r[$i];
                                        break;
                                    case 49:
                                        $maxpsslot = $r[$i];
                                        break;
                                    case 50:
                                        $maxpseqpt = $r[$i];
                                        break;
                                    case 51:
                                        $airflow = $r[$i];
                                        $airflow = getCode($airflow, '017', $username);
                                        break;
                                    case 52:
                                        $temp01 = $r[$i];
                                        $temp01 = getCode($temp01, '022', $username);
                                        break;
                                    case 53:
                                        $temp02 = $r[$i];
                                        $temp02 = getCode($temp02, '022', $username);
                                        break;
                                    case 54:
                                        $temp03 = $r[$i];
                                        $temp03 = getCode($temp03, '022', $username);
                                        break;
                                    case 55:
                                        $presswitch = $r[$i];
                                        $presswitch = getCode($presswitch, '022', $username);
                                        break;
                                    case 56:
                                        $safevalve = $r[$i];
                                        $safevalve = getCode($safevalve, '022', $username);
                                        break;
                                    case 57:
                                        $smoke = $r[$i];
                                        $smoke = getCode($smoke, '022', $username);
                                        break;
                                    case 58:
                                        $emo = $r[$i];
                                        $emo = getCode($emo, '022', $username);
                                        break;
                                    case 59:
                                        $voltage = $r[$i];
                                        break;
                                    case 60:
                                        $current = $r[$i];
                                        break;
                                    case 61:
                                        $phase = $r[$i];
                                        break;
                                    case 62:
                                        $exhaust = $r[$i];
                                        $exhaust = getCode($exhaust, '028', $username);
                                        break;
                                    case 63:
                                        $n2gas = $r[$i];
                                        $n2gas = getCode($n2gas, '022', $username);
                                        break;
                                    case 64:
                                        $oxygen = $r[$i];
                                        $oxygen = getCode($oxygen, '022', $username);
                                        break;
                                    case 65:
                                        $liquid = $r[$i];
                                        $liquid = getCode($liquid, '022', $username);
                                        break;
                                    case 66:
                                        $chilled = $r[$i];
                                        $chilled = getCode($chilled, '022', $username);
                                        break;
                                    case 67:
                                        $diwater = $r[$i];
                                        $diwater = getCode($diwater, '022', $username);
                                        break;
                                    case 68:
                                        $topap = $r[$i];
                                        $topap = getCode($topap, '030', $username);
                                        break;
                                    case 69:
                                        $cda = $r[$i];
                                        $cda = getCode($cda, '021', $username);
                                        break;
                                    case 70:
                                        $lan = $r[$i];
                                        $lan = getCode($lan, '021', $username);
                                        break;
                                    case 71:
                                        $daq = $r[$i];
                                        $daq = getCode($daq, '021', $username);
                                        break;
                                    case 72:
                                        $inttype = $r[$i];
                                        $inttype = getCode($inttype, '031', $username);
                                        break;
                                    case 73:
                                        $jack = $r[$i];
                                        break;
                                    case 74:
                                        $convoltrate = $r[$i];
                                        break;
                                    case 75:
                                        $concurrrate = $r[$i];
                                        break;
                                    case 76:
                                        $contemprate = $r[$i];
                                        break;
                                    case 77:
                                        $nopin = $r[$i];
                                        break;
                                    case 78:
                                        $nopitch = $r[$i];
                                        break;
                                    case 79:
                                        $convoltrate = $r[$i];
                                        break;
                                    case 80:
                                        $concurrrate = $r[$i];
                                        break;
                                    case 81:
                                        $contemprate = $r[$i];
                                        break;
                                    case 82:
                                        $nopin = $r[$i];
                                        break;
                                    case 83:
                                        $nopitch = $r[$i];
                                        break;
                                    case 84:
                                        $convoltrate = $r[$i];
                                        break;
                                    case 85:
                                        $concurrrate = $r[$i];
                                        break;
                                    case 86:
                                        $connrack = $r[$i];
                                        break;
                                    case 87:
                                        $wirevoltrate = $r[$i];
                                        break;
                                    case 88:
                                        $wirecurrrate = $r[$i];
                                        break;
                                    case 89:
                                        $wiretemprate = $r[$i];
                                        break;
                                    case 90:
                                        $exttype = $r[$i];
                                        $exttype = getCode($exttype, '032', $username);
                                        break;
                                    case 91:
                                        $intvoltrate = $r[$i];
                                        break;
                                    case 92:
                                        $intcurrrate = $r[$i];
                                        break;
                                }
                            }
                            echo '</tr>';
                            inserttodatabase($k, $username,
                                    $lablocation, $productgroup, $category, $labmanager, $eqptId, $usage, $reltest, $zone, $manufacturer, $model,
                                    $mfgdate, $assetno, $transfer, $from, $voltrate, $voltacc, $currrate, $powerrate, $mintimer, $maxtimer,
                                    $mintemp, $maxtemp, $minrh, $maxrh, $minpress, $maxpress, $heatdiss, $tempfluc, $uniform, $humid,
                                    $extdimw, $extdimd, $extdimh, $intdimw, $intdimd, $intdimh, $diameter, $nozone, $rackw, $rackd,
                                    $rackh, $intvolume, $board, $rackmaterial, $rackslotpitch, $rackslotwidth, $rackweight, $nombslot, $maxpsslot, $maxpseqpt,
                                    $airflow, $temp01, $temp02, $temp03, $presswitch, $safevalve, $smoke, $emo, $voltage, $current,
                                    $phase, $exhaust, $n2gas, $oxygen, $liquid, $chilled, $diwater, $topap, $cda, $lan,
                                    $daq, $inttype, $jack, $convoltrate, $concurrrate, $contemprate, $nopin, $nopitch,
                                    $connrack, $wirevoltrate, $wirecurrrate, $wiretemprate, $exttype, $intvoltrate, $intcurrrate);
                        }
                    }
                }
            }
            echo '</table>';
            echo '</td></tr></table>';
            } else {
                echo 'You have uploaded an incorrect template. <br>This template is the old one [Check the columns]. <br>Please check the files before uploading.
                    <br><br>Severity: High
                    <br>Action: Please upload the correct template [Equipment].';
            }
        } else {
            echo 'You have uploaded an incorrect template. <br>The uploaded template is a ' . $xlsx->sheetName(0) . ' template, but the required template is an Equipment template. <br>Please check the files before uploading.
                    <br><br>Severity: Medium
                    <br>Action: Please upload the correct template [Equipment].';
        }
    } else {
        echo SimpleXLSX::parseError();
    }
}

function inserttodatabase($k, $username,
                            $lablocation, $productgroup, $category, $labmanager, $eqptId, $usage, $reltest, $zone, $manufacturer, $model,
                            $mfgdate, $assetno, $transfer, $from, $voltrate, $voltacc, $currrate, $powerrate, $mintimer, $maxtimer,
                            $mintemp, $maxtemp, $minrh, $maxrh, $minpress, $maxpress, $heatdiss, $tempfluc, $uniform, $humid,
                            $extdimw, $extdimd, $extdimh, $intdimw, $intdimd, $intdimh, $diameter, $nozone, $rackw, $rackd,
                            $rackh, $intvolume, $board, $rackmaterial, $rackslotpitch, $rackslotwidth, $rackweight, $nombslot, $maxpsslot, $maxpseqpt,
                            $airflow, $temp01, $temp02, $temp03, $presswitch, $safevalve, $smoke, $emo, $voltage, $current,
                            $phase, $exhaust, $n2gas, $oxygen, $liquid, $chilled, $diwater, $topap, $cda, $lan,
                            $daq, $inttype, $jack, $convoltrate, $concurrrate, $contemprate, $nopin, $nopitch,
                            $connrack, $wirevoltrate, $wirecurrrate, $wiretemprate, $exttype, $intvoltrate, $intcurrrate) {
    if ($k == 1) {
        
    } else {
        include '../class/db.php';
        $insert = "INSERT INTO gest_form_eqpt (eqpt_id, lab_location, strategy, standard_category, champion, dedicate_usage, rel_test, zone, manufacturer, eqpt_model,
                    eqpt_mfg_date, eqpt_asset_no, new_transfer_eqpt, transfer_eqpt_location, eqpt_volt_rating, volt_control_accuracy, current_rating, power_rating, min_time_setting, max_time_setting, min_temp, max_temp, min_rh, max_rh, heat_dissipation, min_pressure, max_pressure,
                    temp_fluctuation, temp_uniformity, humid_fluctuation, ext_dimension_w, ext_dimension_d, ext_dimension_h, int_dimension_w, int_dimension_d, int_dimension_h, diameter, no_interior_zone,
                    rack_dimension_w, rack_dimension_d, rack_dimension_h, int_vol, board_orientation, rack_material, rack_slot_pitch, rack_slot_width, eqpt_weight, no_mb_slot,
                    max_ps_slot, max_ps_eqpt, airflow, temp_protection_1, temp_protection_2, temp_protection_3, pressure_switch, safety_valve, smoke_alarm, emo_btn, voltage, current, phase,
                    exhaust, n2_gas, oxygen_level_detector, liquid_nitrogen, chilled_water, di_water, water_topup_system, cda, lan, daq, internal_config_type, no_banana_jack_hole,
                    conn_volt_rating, conn_current_rating, conn_temp_rating, no_pin, pin_pitch, no_wire_conn_rack, wire_volt_rating, wire_curr_rating, wire_temp_rating, ext_config_type,
                    interface_volt_rating, interface_current_rating, created_by, created_date, status, flag) "
                    . "VALUES ('$eqptId', '$lablocation', '$productgroup', '$category', '$labmanager', '$usage', '$reltest', '$zone', '$manufacturer', '$model', "
                    . "'$mfgdate', '$assetno', '$transfer', '$from', '$voltrate', '$voltacc', '$currrate', '$powerrate', '$mintimer', '$maxtimer', '$mintemp', '$maxtemp', '$minrh', '$maxrh', '$heatdiss', '$minpress', '$maxpress', "
                    . "'$tempfluc', '$uniform', '$humid', '$extdimw', '$extdimd', '$extdimh', '$intdimw', '$intdimd', '$intdimh', '$diameter', '$nozone', "
                    . "'$rackw', '$rackd', '$rackh', '$intvolume', '$board', '$rackmaterial', '$rackslotpitch', '$rackslotwidth', '$rackweight', '$nombslot', "
                    . "'$maxpsslot', '$maxpseqpt', '$airflow', '$temp01', '$temp02', '$temp03', '$presswitch', '$safevalve', '$smoke', '$emo', '$voltage', '$current', '$phase', "
                    . "'$exhaust', '$n2gas', '$oxygen', '$liquid', '$chilled', '$diwater', '$topap', '$cda', '$lan', '$daq', '$inttype', '$jack', "
                    . "'$convoltrate', '$concurrrate', '$contemprate', '$nopin', '$nopitch', '$connrack', '$wirevoltrate', '$wirecurrrate', '$wiretemprate', '$exttype', "
                    . "'$intvoltrate', '$intcurrrate', '$username', NOW(), 'Active', '1');";
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