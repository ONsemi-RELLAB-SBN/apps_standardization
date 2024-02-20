<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

include '../class/db.php';
include '../class/ldap.php';
include '../class/get_parameter.php';

$id                 = $_GET['id'];
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

if ($username == '') {
    $username = 'System';
}

$status = 'Active';
$flag = '1';

$manufacturer = getCode($manufacturer, '025', $username);
$model = getCode($model, '026', $username);
$daq = getCode($daq, '024', $username);

if (isset($_GET['draft-button'])) {
    $status = 'DRAFT';
    $flag = '2';
} else {
    if (isset($_GET['save-button'])) {
        $status = 'ACTIVE';
        $flag = '1';
    } else {
        $status = 'UNKNOWN';
        $flag = '0';
    }
}

$update = "UPDATE gest_form_daq SET "
        . "lab_location = '$lablocation', "
        . "strategy = '$productgroup', "
        . "standard_category = '$category', "
        . "champion = '$labmanager', "
        . "manufacturer = '$manufacturer', "
        . "model = '$model', "
        . "daq_id = '$daq', "
        . "no_temp_channel = '$tempchannel', "
        . "no_voltage_channel = '$voltchannel', "
        . "no_leakage_channel = '$leakchannel', "
        . "max_voltage_measure = '$maxvoltmeasure', "
        . "min_voltage_measure = '$minvoltmeasure', "
        . "max_leakage_measure = '$maxleakmeasure', "
        . "min_leakage_measure = '$minleakmeasure', "
        . "max_temp_measure = '$maxtempmeasure', "
        . "min_temp_measure = '$mintempmeasure', "
        . "rdaq_voltage_drop = '$voltdrop', "
        . "board_insert_check = '$boardcheck', "
        . "rdaq_measure_start = '$starttest', "
        . "scan_time = '$scantime', "
        . "leakage_measure_resolution = '$leakreso', "
        . "leakage_measure_accuracy = '$leakaccuracy', "
        . "voltage_measure_resolution = '$voltreso', "
        . "data_plot = '$dataplot', "
        . "hw_design = '$typehardware', "
        . "no_analog_input_single = '$analogsingle', "
        . "no_analog_input_diff = '$analogdiff', "
        . "resolution = '$reso', "
        . "sampling_freq = '$frequency', "
        . "supported_eqpt = '$support', "
        . "hw_resistance_measure = '$hwmeasureR', "
        . "hw_voltage_measure = '$hwmeasureV', "
        . "hw_temp_measure = '$hwmeasureT', "
        . "daq_eqpt_interface = '$eqptint', "
        . "daq_ps_interface = '$psint', "
        . "updated_by = '$username', "
        . "status = '$status', "
        . "flag = '$flag', "
        . "update_date = NOW() "
        . "WHERE id = '$id' LIMIT 1;";
$uprun = mysqli_query($con, $update);
?>
<script>
    alert('DAQ Updated Successfully');
    window.location.href = '../daq/view.php?view=<?php echo $id; ?>';
</script>
<?php mysql_close($handle);