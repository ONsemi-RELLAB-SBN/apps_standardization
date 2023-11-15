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
$inputVolt  = $_GET['input_volt'];
$remote     = $_GET['remote_operation_capability'];
$vmonitor   = $_GET['output_voltage_monitor'];
$cmonitor   = $_GET['output_curr_monitor'];
$interface  = $_GET['pc_to_eqpt_interface'];
$lamPort    = $_GET['lan_port'];
$qpib       = $_GET['gpib_interface'];
$other      = $_GET['other_interface_port'];

$output     = $_GET['no_output_channel'];

$newinsert = "INSERT INTO gest_form_ps (lab_location, strategy, standard_category, champion, manufacturer, model, voltage_rating, current_rating, max_power, no_voltage_display, "
        . "no_current_display, ovp, ocp, ps_dimension_w, ps_dimension_d, ps_dimension_h, weight, remote_operation_cap, output_voltage_mon, output_current_mon, "
        . "eqpt_interface, lan_port, gpib_interface, other_interface, input_voltage, no_output, created_by, created_date, status, flag) "
        . "VALUES ('$labLocation', '$strategy', '$standardization', '$champion', '$manufacturer', '$model', '$voltRate', '$currRate', '$maxPower', '$voltDigit', "
        . "'$currDigit', '$voltProtek', '$currProtek', '$dimensionw', '$dimensiond', '$dimensionh', '$weight', '$remote', '$vmonitor', '$cmonitor', "
        . "'$interface', '$lamPort', '$qpib', '$other', '$inputVolt', '$output', '$username', NOW(), 'Active', '1')";
$upload = mysqli_query($con, $newinsert);

?>
<script>
    alert('New Power Supply Added Successfully');
    window.location.href = 'form_power_list.php';
</script>
<?php mysql_close($handle);