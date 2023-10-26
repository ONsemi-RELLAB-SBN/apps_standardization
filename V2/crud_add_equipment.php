<?php
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
include 'class/db.php';

$labLocation = $_GET['labLocation'];
$strategy = $_GET['strategy'];
$standardization = $_GET['standardization'];
$champion = $_GET['champion'];
$eqptId = $_GET['eqptId'];
$dedicated = $_GET['dedicated'];
$dataRel = '';
$manufacturer = $_GET['manufacturer'];
$model = $_GET['model'];
$mfgDate = $_GET['mfgDate'];
$assetNo = $_GET['assetNo'];
$newTransfer = $_GET['newTransfer'];
$to = $_GET['to'];
$voltRating = $_GET['voltRating'];
$voltControl = $_GET['voltControl'];
$minTemp = $_GET['minTemp'];
$maxTemp = $_GET['maxTemp'];
$minRh = $_GET['minRh'];
$maxRh = $_GET['maxRh'];
$heatDiss = $_GET['heatDissipation'];
$tempFluctuation = $_GET['tempFluctuation'];
$tempUniform = $_GET['tempUniform'];
$umidFluctuation = $_GET['humidFluctuation'];
//$extDimension = $_GET['extDimension'];
$extDimensionW = $_GET['extDimensionW'];
$extDimensionD = $_GET['extDimensionD'];
$extDimensionH = $_GET['extDimensionH'];
//$intDimension = $_GET['intDimension'];
$intDimensionW = $_GET['intDimensionW'];
$intDimensionD = $_GET['intDimensionD'];
$intDimensionH = $_GET['intDimensionH'];
$noInterior = $_GET['noInterior'];
//$rackDimension = $_GET['rackDimension'];
$rackDimensionW = $_GET['rackDimensionW'];
$rackDimensionD = $_GET['rackDimensionD'];
$rackDimensionH = $_GET['rackDimensionH'];
$intVolume = $_GET['intVolume'];
$boardOrientation = $_GET['boardOrientation'];
$rackMaterial = $_GET['rackMaterial'];
$rackSlotPitch = $_GET['rackSlotPitch'];
$rackSLotWidth = $_GET['rackSLotWidth'];
$eqptWeight = $_GET['eqptWeight'];
$noMotherboardSlot = $_GET['noMbSlot'];
$maxPsBoardSLot = $_GET['maxPsBs'];
$maxPsEqpt = $_GET['maxPs'];
$airflow = $_GET['airflow'];
$tempProtection1 = $_GET['tempProtection1'];
$tempProtection2 = $_GET['tempProtection2'];
$tempProtection3 = $_GET['tempThermostat3'];
$smokeDetector = $_GET['smokeDetector'];
$emo = $_GET['emo'];
$voltagePhase = $_GET['voltagePhase'];
$phase =  $_GET['phase'];
$exhaust =  $_GET['exhaust'];
//$airflowRegulator = $_GET['airflowRegulator'];
$diWater = $_GET['diWater'];
$waterTopup = $_GET['waterTopup'];
$daq =  $_GET['daq'];
$intConfigType =  $_GET['intConfigType'];
$jackHole =  $_GET['bananaJackHole']; 
$connVoltRating =  $_GET['connVoltRating'];
$connCurrentRating =  $_GET['connCurrRating'];
$connTemp_rating =  $_GET['connTempRating'];
$noPin =  $_GET['noPins'];
$pinPitch =  $_GET['pinPitch'];
$connRack =  $_GET['connRack'];
$wireVoltRating =  $_GET['wireVoltRating'];
$wireCurrRating =  $_GET['wireCurrRating'];
$wireTempRating =  $_GET['wireTempRating'];
$extConfigType =  $_GET['extConfigType'];
$intVoltRating =  $_GET['interfaceVoltRating'];
$intCurrRating =  $_GET['interfaceCurrRating'];

foreach ($_GET['relTest'] as $key => $value) {
    $inter = $_GET['relTest'][$key];
    $dataRel = $dataRel . $inter . ",";
}
$dataRel = rtrim($dataRel, ", ");

//$insert = "INSERT INTO gest_eqpt_form (eqpt_id, lab_location, strategy, standard_category, champion, dedicate_usage, rel_test, eqpt_manufacturer, eqpt_model, eqpt_mfg_date, "
//        . "eqpt_asset_no, new_transfer_eqpt, transfer_eqpt_location, eqpt_volt_rating, volt_control_accuracy, min_temp, max_temp, min_rh, max_rh, temp_fluctuation, "
//        . "temp_uniformity, humid_fluctuation, ext_dimension, int_dimension, no_interior_zone, rack_dimension, int_vol, board_orientation, rack_material, rack_slot_pitch, "
//        . "rack_slot_width, eqpt_weight, airflow, temp_protection_1, temp_protection_2, smoke_alarm, emo_btn, volt_phase_current, airflow_regulator, di_water, "
//        . "water_topup_system, motherboard, driverboard, ps, daq, conn_no_pin, pin_pitch, conn_volt_rating, conn_current_rating, conn_temp_rating, "
//        . "interface_volt_rating, interface_current_rating, no_mb_slot, max_ps_slot, max_ps_eqpt, created_by, created_date, status, flag)"
//        . "VALUES ('$eqptId', '$labLocation', '$strategy', '$standardization', '$champion', '$dedicated', '$dataRel', '$manufacturer', '$model', '$mfgDate', "
//        . "'$assetNo', '$newTransfer', '$to', '$voltRating', '$voltControl', '$minTemp', '$maxTemp', '$minRh', '$maxRh', '$tempFluctuation',"
//        . "'$tempUniform', '$umidFluctuation', '$extDimension', '$intDimension', '$noInterior', '$rackDimension', '$intVolume', '$boardOrientation', '$rackMaterial', '$rackSlotPitch',"
//        . "'$rackSLotWidth', '$eqptWeight', '$airflow', '$tempProtection1', '$tempProtection2', '$smokeDetector', '$emo', '$voltagePhase', '$airflowRegulator', '$diWater',"
//        . "'$waterTopup', '$motherboard', '$driveboard', '$powerSupply', '$daq', '$noPins', '$pinPitch', '$connVoltRating', '$connVoltRating', '$connTempRating',"
//        . "'$interfaceVoltRating', '$interfaceCurrRating', '$noMotherboardSlot', '$maxPsBoardSLot', '$maxPsEqpt', 'System', NOW(), 'Active', '1' )";

$insert = "INSERT INTO gest_eqpt_form (eqpt_id, lab_location, strategy, standard_category, champion, dedicate_usage, rel_test, eqpt_manufacturer, eqpt_model, eqpt_mfg_date, "
        . "eqpt_asset_no, new_transfer_eqpt, transfer_eqpt_location, eqpt_volt_rating, volt_control_accuracy, min_temp, max_temp, min_rh, max_rh, heat_dissipation, "
        . "temp_fluctuation, temp_uniformity, humid_fluctuation, ext_dimension_w, ext_dimension_d, ext_dimension_h, int_dimension_w, int_dimension_d, int_dimension_h, no_interior_zone, "
        . "rack_dimension_w, rack_dimension_d, rack_dimension_h, int_vol, board_orientation, rack_material, rack_slot_pitch, rack_slot_width, eqpt_weight, no_mb_slot, "
        . "max_ps_slot, max_ps_eqpt, airflow, temp_protection_1, temp_protection_2, temp_protection_3, smoke_alarm, emo_btn, volt_phase_current, phase, "
        . "exhaust, di_water, water_topup_system, daq, internal_config_type, no_banana_jack_hole, conn_volt_rating, conn_current_rating, conn_temp_rating, no_pin, "
        . "pin_pitch, no_wire_conn_rack, wire_volt_rating, wire_curr_rating, wire_temp_rating, ext_config_type, interface_volt_rating, interface_current_rating, created_by, created_date, status, flag) "
        . "VALUES ('$eqptId', '$labLocation', '$strategy', '$standardization', '$champion', '$dedicated', '$dataRel', '$manufacturer', '$model', '$mfgDate', "
        . "'$assetNo', '$newTransfer', '$to', '$voltRating', '$voltControl', '$minTemp', '$maxTemp', '$minRh', '$maxRh', '$heatDiss',"
        . "'$tempFluctuation', '$tempUniform', '$umidFluctuation', '$extDimensionW', '$extDimensionD', '$extDimensionH', '$intDimensionW', '$intDimensionD', '$intDimensionH', '$noInterior', "
        . "'$rackDimensionW', '$rackDimensionD', '$rackDimensionH', '$intVolume', '$boardOrientation', '$rackMaterial', '$rackSlotPitch', '$rackSLotWidth', '$eqptWeight', '$noMotherboardSlot', "
        . "'$maxPsBoardSLot', '$maxPsEqpt', '$airflow', '$tempProtection1', '$tempProtection2', '$tempProtection3', '$smokeDetector', '$emo', '$voltagePhase', '$phase', "
        . "'$exhaust', '$diWater', '$waterTopup', '$daq', '$intConfigType', '$jackHole', '$connVoltRating', '$connCurrentRating', '$connTemp_rating', '$noPin', "
        . "'$pinPitch', '$connRack', '$wireVoltRating', '$wireCurrRating', '$wireTempRating', '$extConfigType', '$intVoltRating', '$intCurrRating', 'System', NOW(), 'Active', '1')";

$upload = mysqli_query($con, $insert);

?>
<script>
    alert('New Equipment Added Successfully');
    window.location.href = 'form_equipment_list.php';
</script>
<?php mysql_close($handle);