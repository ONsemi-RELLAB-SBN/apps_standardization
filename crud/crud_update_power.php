<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

include '../class/db.php';
include '../class/ldap.php';

$id                 = $_GET['id'];
$labLocation        = $_GET['lab_location'];
$strategy           = $_GET['strategy'];
$standardization    = $_GET['standardization'];
$champion           = $_GET['champion'];

$manufacturer   = $_GET['manufacturer'];
$model          = $_GET['model'];

$voltRate   = $_GET['volt_rating'];
$currRate   = $_GET['curr_rating'];
$maxPower   = $_GET['max_power'];
$voltDigit  = $_GET['volt_display_digit'];
$currDigit  = $_GET['curr_display_digit'];
$voltProtek = $_GET['volt_protection'];
$currProtek = $_GET['curr_protection'];

$dimensionw = $_GET['dimension_w'];
$dimensiond = $_GET['dimension_d'];
$dimensionh = $_GET['dimension_h'];
$weight     = $_GET['weight'];
$minvolt    = $_GET['min_volt'];
$maxvolt    = $_GET['max_volt'];
$remote     = $_GET['remote_operation_capability'];
$vmonitor   = $_GET['output_voltage_monitor'];
$cmonitor   = $_GET['output_curr_monitor'];
$interface  = $_GET['pc_to_eqpt_interface'];
$lamPort    = $_GET['lan_port'];
$qpib       = $_GET['gpib_interface'];
$other      = $_GET['other_interface_port'];

$output     = $_GET['no_output_channel'];

$update = "UPDATE gest_form_ps SET "
        . "lab_location = '$labLocation', "
        . "strategy = '$strategy', "
        . "standard_category = '$standardization', "
        . "champion = '$champion', "
        . "manufacturer = '$manufacturer', "
        . "model = '$model', "
        . "voltage_rating = '$voltRate', "
        . "current_rating = '$currRate', "
        . "max_power = '$maxPower', "
        . "no_voltage_display = '$voltDigit', "
        . "no_current_display = '$currDigit', "
        . "ovp = '$voltProtek', "
        . "ocp = '$currProtek', "
        . "ps_dimension_w = '$dimensionw', "
        . "ps_dimension_d = '$dimensiond', "
        . "ps_dimension_h = '$dimensionh', "
        . "weight = '$weight', "
        . "min_voltage = '$minvolt', "
        . "max_voltage = '$maxvolt', "
        . "remote_operation = '$remote', "
        . "voltage_monitor = '$vmonitor', "
        . "current_monitor = '$cmonitor', "
        . "eqpt_interface = '$interface', "
        . "lan_port = '$lamPort', "
        . "gpib_interface = '$qpib', "
        . "other_interface = '$other', "
        . "updated_by = '$username', "
        . "update_date = NOW(), "
        . "no_output = '$output' "
        . "WHERE id = '$id' "
        . "AND status='Active' AND flag=1 LIMIT 1;";
$uprun = mysqli_query($con, $update);
?>
<script>
    alert('Power Supply Updated Successfully');
    window.location.href = '../power/view.php?view=<?php echo $id; ?>';
</script>
<?php mysql_close($handle);