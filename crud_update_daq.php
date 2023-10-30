<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

include 'class/db.php';

$id                 = $_GET['id'];
$labLocation        = $_GET['lab_location'];
$strategy           = $_GET['strategy'];
$standardization    = $_GET['standardization'];
$champion           = $_GET['champion'];

$manufacturer   = $_GET['manufacturer'];
$model          = $_GET['model'];
$daq            = $_GET['daq_id'];

$tempChannel    = $_GET['no_temp_channel'];
$voltChannel    = $_GET['no_volt_channel'];
$leakageChannel = $_GET['no_leakage_channel'];

$voltMeasure    = $_GET['volt_measure_range'];
$tempMeasure    = $_GET['temp_measure_range'];
$currMeasure    = $_GET['curr_measure_range'];
$voltDrop       = $_GET['display_volt_drop'];
$boardCheck     = $_GET['board_insert_check'];
$startTest      = $_GET['measure_prior_start_test'];
$speed          = $_GET['monitoring_speed'];
$leakReso       = $_GET['leakage_measure_reso'];
$leakAccuracy   = $_GET['leakage_measure_accuracy'];
$voltReso       = $_GET['volt_measure_reso'];
$dataPlot       = $_GET['offline_data_plot'];
$typeHardware   = $_GET['measure_type_hardware'];

$anaSingle  = $_GET['analog_input_single'];
$anaDiff    = $_GET['analog_input_diff'];
$reso       = $_GET['resolution'];
$frequency  = $_GET['sampling_frequency'];
$support    = $_GET['supported_eqpt'];
$hwMeasureR = $_GET['hw_resistence_measure'];
$hwMeasureV = $_GET['hw_volt_measure'];
$hwMeasureT = $_GET['hw_temp_measure'];
$eqptInt    = $_GET['daq_eqpt_interface'];
$psInt      = $_GET['daq_ps_interface'];

$update = "UPDATE gest_form_daq SET "
        . "lab_location = '$labLocation', "
        . "strategy = '$strategy', "
        . "standard_category = '$standardization', "
        . "champion = '$champion', "
        . "manufacturer = '$manufacturer', "
        . "model = '$model', "
        . "daq_id = '$daq', "
        . "no_temp_channel = '$tempChannel', "
        . "no_voltage_channel = '$voltChannel', "
        . "no_leakage_channel = '$leakageChannel', "
        . "voltage_measure_range = '$voltMeasure', "
        . "temp_measure_range = '$tempMeasure', "
        . "leakage_current_range = '$currMeasure', "
        . "rdaq_voltage_drop = '$voltDrop', "
        . "board_insert_check = '$boardCheck', "
        . "rdaq_measure_start = '$startTest', "
        . "monitoring_speed = '$speed', "
        . "leakage_measure_resolution = '$leakReso', "
        . "leakage_measure_accuracy = '$leakAccuracy', "
        . "voltage_measure_resolution = '$voltReso', "
        . "offline_software = '$dataPlot', "
        . "measure_type_hw_design = '$typeHardware', "
        . "no_analog_input_single = '$anaSingle', "
        . "no_analog_input_diff = '$anaDiff', "
        . "resolution = '$reso', "
        . "sampling_freq = '$frequency', "
        . "supported_eqpt = '$support', "
        . "hw_resistance_measure = '$hwMeasureR', "
        . "hw_voltage_measure = '$hwMeasureV', "
        . "hw_temp_measure = '$hwMeasureT', "
        . "daq_eqpt_interface = '$eqptInt', "
        . "daq_ps_interface = '$psInt' "
        . "WHERE id = '$id' "
        . "AND status='Active' AND flag=1 LIMIT 1;";
$uprun = mysqli_query($con, $update);
?>
<script>
    alert('Hardware Updated Successfully');
    window.location.href = 'form_hardware_view.php?view=<?php echo $id; ?>';
</script>
<?php mysql_close($handle);