<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

include 'class/db.php';

$id = $_GET['id'];
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

$update = "UPDATE gest_eqpt_form SET "
        . "eqpt_id = '$eqptId', "
        . "lab_location = '$labLocation', "
        . "strategy = '$strategy', "
        . "standard_category = '$standardization', "
        . "champion = '$champion', "
        . "rel_test = '$dedicated', "
        . "dedicate_usage = '$dataRel', "
        . "eqpt_manufacturer = '$manufacturer', "
        . "eqpt_model = '$model', "
        . "eqpt_mfg_date = '$mfgDate', "
        . "eqpt_asset_no = '$assetNo', "
        . "new_transfer_eqpt = '$newTransfer', "
        . "transfer_eqpt_location = '$to', "
        . "eqpt_volt_rating = '$voltRating', "
        . "volt_control_accuracy = '$voltControl', "
        . "min_temp = '$minTemp', "
        . "max_temp = '$maxTemp', "
        . "min_rh = '$minRh', "
        . "max_rh = '$maxRh', "
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
        . "volt_phase_current = '$voltagePhase', "
        . "phase = '$phase', "
        . "exhaust = '$exhaust', "
        . "di_water = '$diWater', "
        . "water_topup_system = '$waterTopup', "
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
        . "created_by = 'System', "
        . "status = 'Active' "
        . "WHERE id = '$id'";
$uprun = mysqli_query($con, $update);
?>
<script>
    alert('Equipment Updated Successfully');
    window.location.href = 'form_equipment_view.php?view=<?php echo $id; ?>';
</script>
<?php mysql_close($handle);