<?php
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
include 'class/db.php';
include './class/ldap.php';

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
$zone               = $_GET['zone'];

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

foreach ($_GET['relTest'] as $key => $value) {
    $inter = $_GET['relTest'][$key];
    $dataRel = $dataRel . $inter . ",";
}
$dataRel = rtrim($dataRel, ", ");

$newinsert = "INSERT INTO gest_form_eqpt (eqpt_id, lab_location, strategy, standard_category, champion, dedicate_usage, rel_test, zone, manufacturer, eqpt_model, 
            eqpt_mfg_date, eqpt_asset_no, new_transfer_eqpt, transfer_eqpt_location, eqpt_volt_rating, volt_control_accuracy, current_rating, min_time_setting, max_time_setting, min_temp, max_temp, min_rh, max_rh, heat_dissipation, min_pressure, max_pressure, 
            temp_fluctuation, temp_uniformity, humid_fluctuation, ext_dimension_w, ext_dimension_d, ext_dimension_h, int_dimension_w, int_dimension_d, int_dimension_h, no_interior_zone, 
            rack_dimension_w, rack_dimension_d, rack_dimension_h, int_vol, board_orientation, rack_material, rack_slot_pitch, rack_slot_width, eqpt_weight, no_mb_slot, 
            max_ps_slot, max_ps_eqpt, airflow, temp_protection_1, temp_protection_2, temp_protection_3, smoke_alarm, emo_btn, voltage, current, phase, 
            exhaust, n2_gas, oxygen_level_detector, liquid_nitrogen, chilled_water, di_water, water_topup_system, cda, lan, daq, internal_config_type, no_banana_jack_hole, 
            conn_volt_rating, conn_current_rating, conn_temp_rating, no_pin, pin_pitch, no_wire_conn_rack, wire_volt_rating, wire_curr_rating, wire_temp_rating, ext_config_type, 
            interface_volt_rating, interface_current_rating, created_by, created_date, status, flag) "
        . "VALUES ('$eqptId', '$labLocation', '$strategy', '$standardization', '$champion', '$dedicated', '$dataRel', '$zone', '$manufacturer', '$model', "
        . "'$mfgDate', '$assetNo', '$newTransfer', '$from', '$voltRating', '$voltControl', '$curre', '', '', '$minTemp', '$maxTemp', '$minRh', '$maxRh', '$heatDiss', '$minPressure', '$maxPressure', "
        . "'$tempFluctuation', '$tempUniform', '$umidFluctuation', '$extDimensionW', '$extDimensionD', '$extDimensionH', '$intDimensionW', '$intDimensionD', '$intDimensionH', '$noInterior', "
        . "'$rackDimensionW', '$rackDimensionD', '$rackDimensionH', '$intVolume', '$boardOrientation', '$rackMaterial', '$rackSlotPitch', '$rackSLotWidth', '$eqptWeight', '$noMotherboardSlot', "
        . "'$maxPsBoardSLot', '$maxPsEqpt', '$airflow', '$tempProtection1', '$tempProtection2', '$tempProtection3', '$smokeDetector', '$emo', '$voltage', '$current', '$phase', "
        . "'$exhaust', '$n2gas', '$oxyLevel', '$liquid', '$chillWater', '$diWater', '$waterTopup', '$daq', '$intConfigType', '$jackHole', "
        . "'$connVoltRating', '$connCurrentRating', '$connTemp_rating', '$noPin', '$pinPitch', '$connRack', '$wireVoltRating', '$wireCurrRating', '$wireTempRating', '$extConfigType', "
        . "'$intVoltRating', '$intCurrRating', '$username', NOW(), 'Active', '1')";
$newinert = "INSERT INTO gest_form_eqpt (eqpt_id, lab_location, strategy, standard_category, champion, dedicate_usage, rel_test, zone, manufacturer, eqpt_model, 
            eqpt_mfg_date, eqpt_asset_no, new_transfer_eqpt, transfer_eqpt_location, eqpt_volt_rating, volt_control_accuracy, current_rating, min_time_setting, max_time_setting, min_temp, max_temp, min_rh, max_rh, heat_dissipation, min_pressure, max_pressure, 
            temp_fluctuation, temp_uniformity, humid_fluctuation, ext_dimension_w, ext_dimension_d, ext_dimension_h, int_dimension_w, int_dimension_d, int_dimension_h, no_interior_zone, 
            rack_dimension_w, rack_dimension_d, rack_dimension_h, int_vol, board_orientation, rack_material, rack_slot_pitch, rack_slot_width, eqpt_weight, no_mb_slot, 
            max_ps_slot, max_ps_eqpt, airflow, temp_protection_1, temp_protection_2, temp_protection_3, smoke_alarm, emo_btn, voltage, current, phase, 
            exhaust, n2_gas, oxygen_level_detector, liquid_nitrogen, chilled_water, di_water, water_topup_system, cda, lan, daq, internal_config_type, no_banana_jack_hole, 
            conn_volt_rating, conn_current_rating, conn_temp_rating, no_pin, pin_pitch, no_wire_conn_rack, wire_volt_rating, wire_curr_rating, wire_temp_rating, ext_config_type, 
            interface_volt_rating, interface_current_rating, created_by, created_date, status, flag)";
$upload = mysqli_query($con, $newinsert);

//$newinsert = "INSERT INTO gest_form_eqpt (eqpt_id, lab_location, strategy, standard_category, champion, dedicate_usage, rel_test, zone, manufacturer, eqpt_model, "
//        . "eqpt_mfg_date, eqpt_asset_no, new_transfer_eqpt, transfer_eqpt_location, eqpt_volt_rating, volt_control_accuracy, min_temp, max_temp, min_rh, max_rh, heat_dissipation, min_pressure, max_pressure, "
//        . "temp_fluctuation, temp_uniformity, humid_fluctuation, ext_dimension_w, ext_dimension_d, ext_dimension_h, int_dimension_w, int_dimension_d, int_dimension_h, no_interior_zone, "
//        . "rack_dimension_w, rack_dimension_d, rack_dimension_h, int_vol, board_orientation, rack_material, rack_slot_pitch, rack_slot_width, eqpt_weight, no_mb_slot, "
//        . "max_ps_slot, max_ps_eqpt, airflow, temp_protection_1, temp_protection_2, temp_protection_3, smoke_alarm, emo_btn, voltage, current, phase, "
//        . "exhaust, n2_gas, oxygen_level_detector, liquid_nitrogen, chilled_water, di_water, water_topup_system, daq, internal_config_type, no_banana_jack_hole, "
//        . "conn_volt_rating, conn_current_rating, conn_temp_rating, no_pin, pin_pitch, no_wire_conn_rack, wire_volt_rating, wire_curr_rating, wire_temp_rating, ext_config_type, "
//        . "interface_volt_rating, interface_current_rating, created_by, created_date, status, flag) "
//        . "VALUES ('$eqptId', '$labLocation', '$strategy', '$standardization', '$champion', '$dedicated', '$dataRel', '$zone', '$manufacturer', '$model', "
//        . "'$mfgDate', '$assetNo', '$newTransfer', '$from', '$voltRating', '$voltControl', '$minTemp', '$maxTemp', '$minRh', '$maxRh', '$heatDiss', '$minPressure', '$maxPressure', "
//        . "'$tempFluctuation', '$tempUniform', '$umidFluctuation', '$extDimensionW', '$extDimensionD', '$extDimensionH', '$intDimensionW', '$intDimensionD', '$intDimensionH', '$noInterior', "
//        . "'$rackDimensionW', '$rackDimensionD', '$rackDimensionH', '$intVolume', '$boardOrientation', '$rackMaterial', '$rackSlotPitch', '$rackSLotWidth', '$eqptWeight', '$noMotherboardSlot', "
//        . "'$maxPsBoardSLot', '$maxPsEqpt', '$airflow', '$tempProtection1', '$tempProtection2', '$tempProtection3', '$smokeDetector', '$emo', '$voltage', '$current', '$phase', "
//        . "'$exhaust', '$n2gas', '$oxyLevel', '$liquid', '$chillWater', '$diWater', '$waterTopup', '$daq', '$intConfigType', '$jackHole', "
//        . "'$connVoltRating', '$connCurrentRating', '$connTemp_rating', '$noPin', '$pinPitch', '$connRack', '$wireVoltRating', '$wireCurrRating', '$wireTempRating', '$extConfigType', "
//        . "'$intVoltRating', '$intCurrRating', '$username', NOW(), 'Active', '1')";

?>
<script>
    alert('New Equipment Added Successfully');
    window.location.href = 'form_equipment_list.php';
</script>
<?php mysql_close($handle);