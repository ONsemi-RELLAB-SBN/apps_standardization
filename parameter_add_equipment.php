<?php
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
include 'class/db.php';
?>
THIS IS THE PAGE TO ADD THE EQUIPMENT - IN PHP

<?php
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
$tempFluctuation = $_GET['tempFluctuation'];
$tempUniform = $_GET['tempUniform'];
$umidFluctuation = $_GET['humidFluctuation'];
$extDimension = $_GET['extDimension'];
$intDimension = $_GET['intDimension'];
$noInterior = $_GET['noInterior'];
$rackDimension = $_GET['rackDimension'];
$intVolume = $_GET['intVolume'];
$boardOrientation = $_GET['boardOrientation'];
$rackMaterial = $_GET['rackMaterial'];
$rackSlotPitch = $_GET['rackSlotPitch'];
$rackSLotWidth = $_GET['rackSLotWidth'];
$eqptWeight = $_GET['eqptWeight'];
$airflow = $_GET['airflow'];
$tempProtection1 = $_GET['tempProtection1'];
$tempProtection2 = $_GET['tempProtection2'];
$smokeDetector = $_GET['smokeDetector'];
$emo = $_GET['emo'];
$voltagePhase = $_GET['voltagePhase'];
$airflowRegulator = $_GET['airflowRegulator'];
$diWater = $_GET['diWater'];
$waterTopup = $_GET['waterTopup'];



//$motherboard = $_GET['motherboard'];


$motherboard = $_GET['motherboard'];



$driveboard = $_GET['driveboard'];
$powerSupply = $_GET['powerSupply'];
$daq = $_GET['daq'];
$noPins = $_GET['noPins'];
$pinPitch = $_GET['pinPitch'];
$connVoltRating = $_GET['connVoltRating'];
$connCurrRating = $_GET['connCurrRating'];
$connTempRating = $_GET['connTempRating'];
$interfaceVoltRating = $_GET['interfaceVoltRating'];
$interfaceCurrRating = $_GET['interfaceCurrRating'];
$noMotherboardSlot = $_GET['noMotherboardSlot'];
$maxPsBoardSLot = $_GET['maxPsBoardSLot'];
$maxPsEqpt = $_GET['maxPsEqpt'];

echo '<br>$labLocation >>>> ' . $labLocation;
echo '<br>$strategy >>>> ' . $strategy;
echo '<br>$standardization >>>> ' . $standardization;
echo '<br>$champion >>>> ' . $champion;
echo '<br>$eqptId >>>> ' . $eqptId;
echo '<br>$dedicated >>>> ' . $dedicated;

echo '<br>$manufacturer >>>> ' . $manufacturer;
echo '<br>$model >>>> ' . $model;
echo '<br>$mfgDate >>>> ' . $mfgDate;
echo '<br>$assetNo >>>> ' . $assetNo;
echo '<br>$newTransfer >>>> ' . $newTransfer;
echo '<br>$to >>>> ' . $to;
echo '<br>$voltRating >>>> ' . $voltRating;
echo '<br>$voltControl >>>> ' . $voltControl;
echo '<br>$minTemp >>>> ' . $minTemp;
echo '<br>$maxTemp >>>> ' . $maxTemp;
echo '<br>$minRh >>>> ' . $minRh;
echo '<br>$maxRh >>>> ' . $maxRh;
echo '<br>$tempFluctuation >>>> ' . $tempFluctuation;
echo '<br>$tempUniform >>>> ' . $dedicated;
echo '<br>$umidFluctuation >>>> ' . $umidFluctuation;
echo '<br>$extDimension >>>> ' . $extDimension;
echo '<br>$intDimension >>>> ' . $intDimension;
echo '<br>$noInterior >>>> ' . $noInterior;
echo '<br>$rackDimension >>>> ' . $rackDimension;
echo '<br>$boardOrientation >>>> ' . $boardOrientation;
echo '<br>$rackMaterial >>>> ' . $rackMaterial;
echo '<br>$rackSlotPitch >>>> ' . $rackSlotPitch;
echo '<br>$rackSLotWidth >>>> ' . $rackSLotWidth;
echo '<br>$eqptWeight >>>> ' . $eqptWeight;
echo '<br>$airflow >>>> ' . $airflow;
echo '<br>$tempProtection1 >>>> ' . $tempProtection1;
echo '<br>$tempProtection2 >>>> ' . $tempProtection2;
echo '<br>$smokeDetector >>>> ' . $smokeDetector;
echo '<br>$emo >>>> ' . $emo;
echo '<br>$voltagePhase >>>> ' . $voltagePhase;
echo '<br>$airflowRegulator >>>> ' . $airflowRegulator;
echo '<br>$diWater >>>> ' . $diWater;
echo '<br>$waterTopup >>>> ' . $waterTopup;
echo '<br>$motherboard >>>> ' . $motherboard;
echo '<br>$driveboard >>>> ' . $driveboard;
echo '<br>$powerSupply >>>> ' . $powerSupply;
echo '<br>$daq >>>> ' . $daq;
echo '<br>$noPins >>>> ' . $noPins;
echo '<br>$pinPitch >>>> ' . $pinPitch;
echo '<br>$connVoltRating >>>> ' . $connVoltRating;
echo '<br>$connCurrRating >>>> ' . $connCurrRating;
echo '<br>$connTempRating >>>> ' . $connTempRating;
echo '<br>$interfaceVoltRating >>>> ' . $interfaceVoltRating;
echo '<br>$interfaceCurrRating >>>> ' . $interfaceCurrRating;
echo '<br>$noMotherboardSlot >>>> ' . $noMotherboardSlot;
echo '<br>$maxPsBoardSLot >>>> ' . $maxPsBoardSLot;
echo '<br>$maxPsEqpt >>>> ' . $maxPsEqpt;


foreach ($_GET['relTest'] as $key => $value) {
    $inter = $_GET['relTest'][$key];
    $dataRel = $dataRel . $inter . ",";
}
$dataRel = rtrim($dataRel, ", ");

$insert = "INSERT INTO gest_eqpt_form (eqpt_id, lab_location, strategy, standard_category, champion, dedicate_usage, rel_test, eqpt_manufacturer, eqpt_model, eqpt_mfg_date, "
        . "eqpt_asset_no, new_transfer_eqpt, transfer_eqpt_location, eqpt_volt_rating, volt_control_accuracy, min_temp, max_temp, min_rh, max_rh, temp_fluctuation, "
        . "temp_uniformity, humid_fluctuation, ext_dimension, int_dimension, no_interior_zone, rack_dimension, int_vol, board_orientation, rack_material, rack_slot_pitch, "
        . "rack_slot_width, eqpt_weight, airflow, temp_protection_1, temp_protection_2, smoke_alarm, emo_btn, volt_phase_current, airflow_regulator, di_water, "
        . "water_topup_system, motherboard, driverboard, ps, daq, conn_no_pin, pin_pitch, conn_volt_rating, conn_current_rating, conn_temp_rating, "
        . "interface_volt_rating, interface_current_rating, no_mb_slot, max_ps_slot, max_ps_eqpt, created_by, created_date, status, flag)"
        . "VALUES ('$eqptId', '$labLocation', '$strategy', '$standardization', '$champion', '$dedicated', '$dataRel', '$manufacturer', '$model', '$mfgDate', "
        . "'$assetNo', '$newTransfer', '$to', '$voltRating', '$voltControl', '$minTemp', '$maxTemp', '$minRh', '$maxRh', '$tempFluctuation',"
        . "'$tempUniform', '$umidFluctuation', '$extDimension', '$intDimension', '$noInterior', '$rackDimension', '$intVolume', '$boardOrientation', '$rackMaterial', '$rackSlotPitch',"
        . "'$rackSLotWidth', '$eqptWeight', '$airflow', '$tempProtection1', '$tempProtection2', '$smokeDetector', '$emo', '$voltagePhase', '$airflowRegulator', '$diWater',"
        . "'$waterTopup', '$motherboard', '$driveboard', '$powerSupply', '$daq', '$noPins', '$pinPitch', '$connVoltRating', '$connVoltRating', '$connTempRating',"
        . "'$interfaceVoltRating', '$interfaceCurrRating', '$noMotherboardSlot', '$maxPsBoardSLot', '$maxPsEqpt', 'System', NOW(), 'Active', '1' )";
echo 'qeruy >>>> ' . $insert;
$upload = mysqli_query($con, $insert);
if ($upload) {
    echo 'berjaya simpan';
} else {
    echo 'ada something wrong here';
}

?>
<script>
    alert('New Equipment Added Successfully');
    window.location.href = 'form_equipment_list.php';
</script>
<?php // mysql_close($handle);