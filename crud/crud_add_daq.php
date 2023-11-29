<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

include '../class/db.php';
include '../class/ldap.php';

$lablocation    = $_GET['lab_location'];
$productgroup   = $_GET['strategy'];
$category       = $_GET['standardization'];
$labmanager     = $_GET['champion'];

$manufacturer   = $_GET['manufacturer'];
$model          = $_GET['model'];
$daq            = $_GET['daq_id'];

$tempchannel    = $_GET['no_temp_channel'];
$voltchannel    = $_GET['no_volt_channel'];
$leakchannel    = $_GET['no_leakage_channel'];

$maxvoltmeasure = $_GET['max_voltage'];
$minvoltmeasure = $_GET['min_voltage'];
$maxleakmeasure = $_GET['max_leakage'];
$minleakmeasure = $_GET['min_leakage'];
$maxtempmeasure = $_GET['max_temp'];
$mintempmeasure = $_GET['min_temp'];
$voltdrop       = $_GET['display_volt_drop'];
$boardcheck     = $_GET['board_insert_check'];
$starttest      = $_GET['measure_prior_start_test'];
$scantime       = $_GET['scan_time'];
$leakreso       = $_GET['leakage_measure_reso'];
$leakaccuracy   = $_GET['leakage_measure_accuracy'];
$voltreso       = $_GET['volt_measure_reso'];
$dataplot       = $_GET['offline_data_plot'];
$typehardware   = $_GET['measure_type_hardware'];

$analogsingle   = $_GET['analog_input_single'];
$analogdiff     = $_GET['analog_input_diff'];
$reso           = $_GET['resolution'];
$frequency      = $_GET['sampling_frequency'];
$support        = $_GET['supported_eqpt'];
$hwmeasureR     = $_GET['hw_resistence_measure'];
$hwmeasureV     = $_GET['hw_volt_measure'];
$hwmeasureT     = $_GET['hw_temp_measure'];
$eqptint        = $_GET['daq_eqpt_interface'];
$psint          = $_GET['daq_ps_interface'];

//$newinsert = "INSERT INTO gest_form_daq (lab_location, strategy, standard_category, champion, manufacturer, model, daq_id, no_temp_channel, no_voltage_channel, no_leakage_channel, "
//        . "voltage_measure_range, temp_measure_range, leakage_current_range, rdaq_voltage_drop, board_insert_check, rdaq_measure_start, monitoring_speed, leakage_measure_resolution, leakage_measure_accuracy, voltage_measure_resolution, "
//        . "offline_software, measure_type_hw_design, no_analog_input_single, no_analog_input_diff, resolution, sampling_freq, supported_eqpt, hw_resistance_measure, hw_voltage_measure, hw_temp_measure, "
//        . "daq_eqpt_interface, daq_ps_interface, created_by, created_date, status, flag) "
//        . "VALUES ('$labLocation', '$strategy', '$standardization', '$champion', '$manufacturer', '$model', '$daq', '$tempChannel', '$voltChannel', '$leakageChannel', "
//        . "'$voltMeasure', '$tempMeasure', '$currMeasure', '$voltDrop', '$boardCheck', '$startTest', '$speed', '$leakReso', '$leakAccuracy', '$voltReso', "
//        . "'$dataPlot', '$typeHardware', '$anaSingle', '$anaDiff', '$reso', '$frequency', '$support', '$hwMeasureR', '$hwMeasureV', '$hwMeasureT', "
//        . "'$eqptInt', '$psInt', '$username', NOW(), 'Active', '1')";

$newinsert = "INSERT INTO gest_form_daq (lab_location, strategy, standard_category, champion, manufacturer, model, daq_id, no_temp_channel, no_voltage_channel, no_leakage_channel, "
                    . "max_voltage_measure, min_voltage_measure, max_leakage_measure, min_leakage_measure, max_temp_measure, min_temp_measure, rdaq_voltage_drop, board_insert_check, rdaq_measure_start, scan_time, "
                    . "leakage_measure_resolution, leakage_measure_accuracy, voltage_measure_resolution, data_plot, hw_design, no_analog_input_single, no_analog_input_diff, resolution, sampling_freq, supported_eqpt, "
                    . "hw_resistance_measure, hw_voltage_measure, hw_temp_measure, daq_eqpt_interface, daq_ps_interface, created_by, created_date, status, flag) "
                    . "VALUES ('$lablocation', '$productgroup', '$category', '$labmanager', '$manufacturer', '$model', '$daq', '$tempchannel', '$voltchannel', '$leakchannel', "
                    . "'$maxvoltmeasure', '$minvoltmeasure', '$maxleakmeasure', '$minleakmeasure', '$maxtempmeasure', '$mintempmeasure', '$voltdrop', '$boardcheck', '$starttest', '$scantime', "
                    . "'$leakreso', '$leakaccuracy', '$voltreso', '$dataplot', '$typehardware', '$analogsingle', '$analogdiff', '$reso', '$frequency', '$support', "
                    . "'$hwmeasureR', '$hwmeasureV', '$hwmeasureT', '$eqptint', '$psint', '$username', NOW(), 'Active', '1')";
$upload = mysqli_query($con, $newinsert);

?>
<script>
    alert('New DAQ Added Successfully');
    window.location.href = '../daq/list.php';
</script>
<?php mysql_close($handle);