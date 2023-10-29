<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

include 'class/db.php';

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

$newinsert = "INSERT INTO gest_form_daq (lab_location, strategy, standard_category, champion, manufacturer, model, daq_id, no_temp_channel, no_voltage_channel, no_leakage_channel, "
        . "voltage_measure_range, temp_measure_range, leakage_current_range, rdaq_voltage_drop, board_insert_check, rdaq_measure_start, monitoring_speed, leakage_measure_resolution, leakage_measure_accuracy, voltage_measure_resolution, "
        . "offline_software, measure_type_hw_design, no_analog_input_single, no_analog_input_diff, resolution, sampling_freq, supported_eqpt, hw_resistance_measure, hw_voltage_measure, hw_temp_measure, "
        . "daq_eqpt_interface, daq_ps_interface, created_by, created_date, status, flag) "
        . "VALUES ('$labLocation', '$strategy', '$standardization', '$champion', '$manufacturer', '$model', '$daq', '$tempChannel', '$voltChannel', '$leakageChannel', "
        . "'$voltMeasure', '$tempMeasure', '$currMeasure', '$voltDrop', '$boardCheck', '$startTest', '$speed', '$leakReso', '$leakAccuracy', '$voltReso', "
        . "'$dataPlot', '$typeHardware', '$anaSingle', '$anaDiff', '$reso', '$frequency', '$support', '$hwMeasureR', '$hwMeasureV', '$hwMeasureT', "
        . "'$eqptInt', '$psInt', 'System', NOW(), 'Active', '1')";
$upload = mysqli_query($con, $newinsert);

?>
<script>
    alert('New DAQ Added Successfully');
    window.location.href = 'form_daq_list.php';
</script>
<?php mysql_close($handle);