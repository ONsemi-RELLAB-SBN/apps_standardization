<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

include 'class/db.php';
include './class/ldap.php';

$labLctn    = $_GET['lab_location'];
$strategy   = $_GET['strategy'];
$category   = $_GET['standardization'];
$champion   = $_GET['champion'];

$hwType     = $_GET['hw_type'];
$mnfctr     = $_GET['manufacturer'];
$assembly   = $_GET['assembly_no'];

$voltRate   = $_GET['volt_rating'];
$currRate   = $_GET['curr_rating'];
$tempRate   = $_GET['temp_rating'];
$stress     = $_GET['support_stress'];
$daq        = $_GET['daq_capability'];

$pcb        = $_GET['pcb_material'];
$mb_l       = $_GET['mb_dimension_l'];
$mb_w       = $_GET['mb_dimension_w'];
$mb_t       = $_GET['mb_dimension_t'];
$frame      = $_GET['frame_material'];
$board      = $_GET['board_coat'];
$layer      = $_GET['no_layers'];

$universal  = $_GET['universal'];
$socType    = $_GET['socket_conn_type'];
$socQty     = $_GET['socket_conn_qty'];
$socPin     = $_GET['socket_conn_pin_qty'];
$socPitch   = $_GET['socket_con_pin_pitch'];
$package    = $_GET['support_package'];

$load_max   = $_GET['max_load_card_qty'];
$load_qty   = $_GET['load_card_pin_qty'];
$load_pitch = $_GET['load_card_pin_pitch'];

$proMax     = $_GET['max_prog_card_qty'];
$progQty    = $_GET['prog_card_pin_qty'];
$progPitch  = $_GET['prog_card_pin_pitch'];

$connType   = $_GET['conn_type'];
$noPins     = $_GET['no_pins'];
$pinPitch   = $_GET['pin_pitch'];
$edge       = $_GET['edge_thick'];

$maxDut     = $_GET['max_dut_mb'];

$insert = "INSERT INTO gest_form_hw (lab_location, strategy, standard_category, champion, hw_type, manufacturer, assembly_no, voltage_rating, current_rating, "
        . "temp_rating, support_stress, daq_monitoring, pcb_material, mb_dimension_l, mb_dimension_w, mb_dimension_t, no_layer, frame_material, board_coating, "
        . "mb_universal_dedicated, mb_socket_type, mb_socket_qty, mb_socket_pin_qty, mb_socket_pin_pitch, mb_support_card, lc_max_qty, lc_pin_qty, lc_pin_pitch, pc_max_qty, "
        . "pc_pin_qty, pc_pin_pitch, connector_type, no_pin, pin_pitch, edgefinger_thickness, max_dut_qty_mb, created_by, created_date, status, flag) "
        . "VALUES ('$labLctn', '$strategy', '$category', '$champion', '$hwType', '$mnfctr', '$assembly', '$voltRate', '$currRate', "
        . "'$tempRate', '$stress', '$daq', '$pcb', '$mb_l', '$mb_w', '$mb_t', '$layer', '$frame', '$board', "
        . "'$universal', '$socType', '$socQty', '$socPin', '$socPitch', '$package', '$load_max', '$load_qty', '$load_pitch', '$proMax', "
        . "'$progQty', '$progPitch', '$connType', '$noPins', '$pinPitch', '$edge', '$maxDut', '$username', NOW(), 'Active', '1')";
$upload = mysqli_query($con, $insert);

?>
<script>
    alert('New Hardware Added Successfully');
    window.location.href = 'form_hardware_list.php';
</script>
<?php mysql_close($handle);