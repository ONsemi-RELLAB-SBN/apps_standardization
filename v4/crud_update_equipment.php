<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

include 'class/db.php';
include 'class/ldap.php';

$id                 = $_GET['id'];
$labLocation        = $_GET['lab_location'];
$strategy           = $_GET['strategy'];
$standardization    = $_GET['standardization'];
$champion           = $_GET['champion'];

$eqptId             = $_GET['eqpt_id'];
$dedicated          = $_GET['dedicated'];
$dataRel            = '';
$manufacturer       = $_GET['manufacturer'];
$model              = $_GET['model'];
$mfgDate            = $_GET['mfg_date'];
$assetNo            = $_GET['asset_no'];
$newTransfer        = $_GET['new_transfer'];
$from               = $_GET['from'];
$zone               = $_GET['zon'];

$voltRating         = $_GET['volt_rating'];
$voltControl        = $_GET['volt_control'];
$currRating         = $_GET['curr_rating'];
$minTime            = $_GET['min_time'];
$maxTime            = $_GET['max_time'];
$minTemp            = $_GET['min_temp'];
$maxTemp            = $_GET['max_temp'];
$minRh              = $_GET['minRh'];
$maxRh              = $_GET['maxRh'];
$minPressure        = $_GET['min_pressure'];
$maxPressure        = $_GET['max_pressure'];
$heatDiss           = $_GET['heat_dissipation'];
$tempFluctuation    = $_GET['temp_fluctuation'];
$tempUniform        = $_GET['temp_uniform'];
$umidFluctuation    = $_GET['humid_fluctuation'];

$extDimensionW      = $_GET['ext_dimension_w'];
$extDimensionD      = $_GET['ext_dimension_d'];
$extDimensionH      = $_GET['ext_dimension_h'];
$intDimensionW      = $_GET['int_dimension_w'];
$intDimensionD      = $_GET['int_dimension_d'];
$intDimensionH      = $_GET['int_dimension_h'];
$rackDimensionW     = $_GET['rack_dimension_w'];
$rackDimensionD     = $_GET['rack_dimension_d'];
$rackDimensionH     = $_GET['rack_dimension_h'];
$noInterior         = $_GET['no_interior'];
$intVolume          = $_GET['int_volume'];
$boardOrientation   = $_GET['board_orientation'];
$rackMaterial       = $_GET['rack_material'];
$rackSlotPitch      = $_GET['rack_slot_pitch'];
$rackSLotWidth      = $_GET['rack_slot_width'];
$eqptWeight         = $_GET['eqpt_weight'];
$noMotherboardSlot  = $_GET['no_mb_slot'];
$maxPsBoardSLot     = $_GET['max_ps_bs'];
$maxPsEqpt          = $_GET['max_ps'];
$airflow            = $_GET['airflow'];
$tempProtection1    = $_GET['tempProtection1'];
$tempProtection2    = $_GET['tempProtection2'];
$tempProtection3    = $_GET['tempThermostat3'];
$smokeDetector      = $_GET['smoke_detector'];
$emo                = $_GET['emo'];

//$voltagePhase       = $_GET['voltage_phase'];
$voltage            = $_GET['voltage'];
$current            = $_GET['current'];
$phase              = $_GET['phase'];
$exhaust            = $_GET['exhaust'];
$liquid             = $_GET['liquid_nitrogen'];
$chillWater         = $_GET['chilled_water'];
$n2gas              = $_GET['n2gas'];
$oxyLevel           = $_GET['oxygen_level'];
$diWater            = $_GET['di_water'];
$waterTopup         = $_GET['water_topup'];
$cda                = $_GET['cda'];
$lan                = $_GET['lan'];
$daq                = $_GET['daq'];

$intConfigType      = $_GET['int_config_type'];
$jackHole           = $_GET['banana_jack_hole']; 
$connVoltRating     = $_GET['conn_volt_rating'];
$connCurrentRating  = $_GET['conn_curr_rating'];
$connTemp_rating    = $_GET['conn_temp_rating'];
$noPin              = $_GET['no_pins'];
$pinPitch           = $_GET['pin_pitch'];
$connRack           = $_GET['conn_rack'];
$wireVoltRating     = $_GET['wire_volt_rating'];
$wireCurrRating     = $_GET['wire_curr_rating'];
$wireTempRating     = $_GET['wire_temp_rating'];
$extConfigType      = $_GET['ext_config_type'];
$intVoltRating      = $_GET['interface_volt_rating'];
$intCurrRating      = $_GET['interface_curr_rating'];

if ($username == '') {
    $username = 'System';
}

foreach ($_GET['relTest'] as $key => $value) {
    $inter = $_GET['relTest'][$key];
    $dataRel = $dataRel . $inter . ",";
}
$dataRel = rtrim($dataRel, ", ");

$update = "UPDATE gest_form_eqpt SET "
        . "eqpt_id = '$eqptId', "
        . "lab_location = '$labLocation', "
        . "strategy = '$strategy', "
        . "standard_category = '$standardization', "
        . "champion = '$champion', "
        . "dedicate_usage = '$dedicated', "
        . "rel_test = '$dataRel', "
        . "zone = '$zone', "
        . "manufacturer = '$manufacturer', "
        . "eqpt_model = '$model', "
        . "eqpt_mfg_date = '$mfgDate', "
        . "eqpt_asset_no = '$assetNo', "
        . "new_transfer_eqpt = '$newTransfer', "
        . "transfer_eqpt_location = '$from', "
        . "eqpt_volt_rating = '$voltRating', "
        . "volt_control_accuracy = '$voltControl', "
        . "current_rating = '$currRating', "
        . "min_time_setting = '$minTime', "
        . "max_time_setting = '$maxTime', "
        . "min_temp = '$minTemp', "
        . "max_temp = '$maxTemp', "
        . "min_rh = '$minRh', "
        . "max_rh = '$maxRh', "
        . "min_pressure = '$minPressure', "
        . "max_pressure = '$maxPressure', "
        . "heat_dissipation = '$heatDiss', "
        . "temp_fluctuation = '$tempFluctuation', "
        . "temp_uniformity = '$tempUniform', "
        . "humid_fluctuation = '$umidFluctuation', "
        . "ext_dimension_w = '$extDimensionW', "
        . "ext_dimension_d = '$extDimensionD', "
        . "ext_dimension_h = '$extDimensionH', "
        . "int_dimension_w = '$intDimensionW', "
        . "int_dimension_d = '$intDimensionD', "
        . "int_dimension_h = '$intDimensionH', "
        . "no_interior_zone = '$noInterior', "
        . "rack_dimension_w = '$rackDimensionW', "
        . "rack_dimension_d = '$rackDimensionD', "
        . "rack_dimension_h = '$rackDimensionH', "
        . "int_vol = '$intVolume', "
        . "board_orientation = '$boardOrientation', "
        . "rack_material = '$rackMaterial', "
        . "rack_slot_pitch = '$rackSlotPitch', "
        . "rack_slot_width = '$rackSLotWidth', "
        . "eqpt_weight = '$eqptWeight', "
        . "no_mb_slot = '$noMotherboardSlot', "
        . "max_ps_slot = '$maxPsBoardSLot', "
        . "max_ps_eqpt = '$maxPsEqpt', "
        . "airflow = '$airflow', "
        . "temp_protection_1 = '$tempProtection1', "
        . "temp_protection_2 = '$tempProtection2', "
        . "temp_protection_3 = '$tempProtection3', "
        . "smoke_alarm = '$smokeDetector', "
        . "emo_btn = '$emo', "
        . "voltage = '$voltage', "
        . "current = '$current', "
        . "phase = '$phase', "
        . "exhaust = '$exhaust', "
        . "di_water = '$diWater', "
        . "water_topup_system = '$waterTopup', "
        . "n2_gas = '$n2gas', "
        . "oxygen_level_detector = '$oxyLevel', "
        . "liquid_nitrogen = '$liquid', "
        . "chilled_water = '$chillWater', "
        . "cda = '$cda', "
        . "lan = '$lan', "
        . "daq = '$daq', "
        . "internal_config_type = '$intConfigType', "
        . "no_banana_jack_hole = '$jackHole', "
        . "conn_volt_rating = '$connVoltRating', "
        . "conn_current_rating = '$connCurrentRating', "
        . "conn_temp_rating = '$connTemp_rating', "
        . "no_pin = '$noPin', "
        . "pin_pitch = '$pinPitch', "
        . "no_wire_conn_rack = '$connRack', "
        . "wire_volt_rating = '$wireVoltRating', "
        . "wire_curr_rating = '$wireVoltRating', "
        . "wire_temp_rating = '$wireTempRating', "
        . "ext_config_type = '$extConfigType', "
        . "interface_volt_rating = '$intVoltRating', "
        . "interface_current_rating = '$intCurrRating', "
        . "updated_by = '$username', "
        . "update_date = NOW(), "
        . "status = 'Active' "
        . "WHERE id = '$id'";
$uprun = mysqli_query($con, $update);
?>
<script>
    alert('Equipment Updated Successfully');
    window.location.href = 'form_equipment_view.php?view=<?php echo $id; ?>';
</script>
<?php mysql_close($handle);