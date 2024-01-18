<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

include '../class/db.php';
include '../class/ldap.php';
include '../class/get_parameter.php';

$id         = $_GET['id'];
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

if ($username == '') {
    $username = 'System';
}

$mnfctr = getCode($mnfctr, '018', $username);

$update = "UPDATE gest_form_hw SET "
        . "lab_location = '$labLctn', "
        . "strategy = '$strategy', "
        . "standard_category = '$category', "
        . "champion = '$champion', "
        . "hw_type = '$hwType', "
        . "manufacturer = '$mnfctr', "
        . "assembly_no = '$assembly', "
        . "voltage_rating = '$voltRate', "
        . "current_rating = '$currRate', "
        . "temp_rating = '$tempRate', "
        . "support_stress = '$stress', "
        . "daq_monitoring = '$daq', "
        . "pcb_material = '$pcb', "
        . "mb_dimension_l = '$mb_l', "
        . "mb_dimension_w = '$mb_w', "
        . "mb_dimension_t = '$mb_t', "
        . "no_layer = '$layer', "
        . "frame_material = '$frame', "
        . "board_coating = '$board', "
        . "mb_universal_dedicated = '$universal', "
        . "mb_socket_type = '$socType', "
        . "mb_socket_qty = '$socQty', "
        . "mb_socket_pin_qty = '$socPin', "
        . "mb_socket_pin_pitch = '$socPitch', "
        . "mb_support_card = '$package', "
        . "lc_max_qty = '$load_max', "
        . "lc_pin_qty = '$load_qty', "
        . "lc_pin_pitch = '$load_pitch', "
        . "pc_max_qty = '$proMax', "
        . "pc_pin_qty = '$progQty', "
        . "pc_pin_pitch = '$progPitch', "
        . "connector_type = '$connType', "
        . "no_pin = '$noPins', "
        . "pin_pitch = '$pinPitch', "
        . "edgefinger_thickness = '$edge', "
        . "updated_by = '$username', "
        . "update_date = NOW(), "
        . "max_dut_qty_mb = '$maxDut' "
        . "WHERE id = '$id' "
        . "AND status='Active' AND flag=1 LIMIT 1;";
$uprun = mysqli_query($con, $update);
?>
<script>
    alert('Hardware Updated Successfully');
    window.location.href = '../hardware/view.php?view=<?php echo $id; ?>';
</script>
<?php mysql_close($handle);