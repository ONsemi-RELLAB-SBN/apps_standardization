<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

include '../class/db.php';
include '../class/ldap.php';
include '../class/get_parameter.php';

$labLctn    = $_GET['lab_location'];
$strategy   = $_GET['strategy'];
$category   = $_GET['standardization'];
$champion   = $_GET['champion'];

//$hwType     = $_GET['hw_type'];
//$mnfctr     = $_GET['manufacturer'];
$assembly   = $_GET['assembly_no'];

//$voltRate   = $_GET['volt_rating'];
//$currRate   = $_GET['curr_rating'];
//$tempRate   = $_GET['temp_rating'];
//$stress     = $_GET['support_stress'];
//$daq        = $_GET['daq_capability'];

//$pcb        = $_GET['pcb_material'];
//$mb_l       = $_GET['mb_dimension_l'];
//$mb_w       = $_GET['mb_dimension_w'];
//$mb_t       = $_GET['mb_dimension_t'];
//$frame      = $_GET['frame_material'];
//$board      = $_GET['board_coat'];
//$layer      = $_GET['no_layers'];

//$universal  = $_GET['universal'];
//$socType    = $_GET['socket_conn_type'];
//$socQty     = $_GET['socket_conn_qty'];
//$socPin     = $_GET['socket_conn_pin_qty'];
//$socPitch   = $_GET['socket_con_pin_pitch'];
//$package    = $_GET['support_package'];

//$load_max   = $_GET['max_load_card_qty'];
//$load_qty   = $_GET['load_card_pin_qty'];
//$load_pitch = $_GET['load_card_pin_pitch'];

//$proMax     = $_GET['max_prog_card_qty'];
//$progQty    = $_GET['prog_card_pin_qty'];
//$progPitch  = $_GET['prog_card_pin_pitch'];

//$connType   = $_GET['conn_type'];
//$noPins     = $_GET['no_pins'];
//$pinPitch   = $_GET['pin_pitch'];
//$edge       = $_GET['edge_thick'];

//$maxDut     = $_GET['max_dut_mb'];

$category = $_GET['category'];
$sub_cat = $_GET['sub_category'];
$temperature = $_GET['temperature'];
$humidity = $_GET['humidity'];
$voltage = $_GET['voltage'];
$current = $_GET['current'];

$pcb_material = $_GET['pcb_material'];
$pcb_material2 = $_GET['pcb_material2'];
$pcb_moisture = $_GET['pcb_moisture'];
$edge_copper = $_GET['edge_copper'];
$pcb_thickness = $_GET['pcb_thickness'];
$edge_chamfered = $_GET['edge_chamfered'];
$surface_coat = $_GET['surface_coat'];
$no_layer = $_GET['no_layer'];

$edge_pitch = $_GET['edge_pitch'];
$copper_thickness = $_GET['copper_thickness'];
$trace_width = $_GET['trace_width'];
$trace_space = $_GET['trace_space'];

$trace_internal = $_GET['trace_internal'];
$final_thickness = $_GET['final_thickness'];
$min_trace = $_GET['min_trace'];
$min_space = $_GET['min_space'];
$plated_drill = $_GET['plated_drill'];
$impedance = $_GET['impedance'];

$frame_chasis = $_GET['frame_chasis'];
$frame_screw = $_GET['frame_screw'];
$frame_handle = $_GET['frame_handle'];

$component = $_GET['component'];

$socket_partno = $_GET['socket_partno'];
$socket_avail = $_GET['socket_avail'];
$socket_qty = $_GET['socket_qty'];
$socket_pin_qty = $_GET['socket_pin_qty'];
$socket_pin_pitch = $_GET['socket_pin_pitch '];
$socket_body_material = $_GET['socket_body_material'];
$socket_pin_material = $_GET['socket_pin_material'];
$socket_config = $_GET['socket_config'];
$socket_vol_rate = $_GET['socket_vol_rate'];
$socket_curr_rate = $_GET['socket_curr_rate'];
$socket_temp_rate = $_GET['socket_temp_rate'];

$conn_part = $_GET['conn_part'];
$conn_avail = $_GET['conn_avail'];
$conn_pin_qty = $_GET['conn_pin_qty'];
$conn_pin_pitch = $_GET['conn_pin_pitch'];
$conn_body_material = $_GET['conn_body_material'];
$conn_pin_material = $_GET['conn_pin_material'];
$rate_body = $_GET['rate_body'];
$rate_contact = $_GET['rate_contact'];
$conn_volt_rate = $_GET['conn_volt_rate'];
$conn_curr_rate = $_GET['conn_curr_rate'];
$conn_temp_rate = $_GET['conn_temp_rate'];

$volt_rate = $_GET['volt_rate'];
$curr_rate = $_GET['curr_rate'];
$temp_rate = $_GET['temp_rate'];
$board = $_GET['board'];
$ass_number = $_GET['ass_number'];
$stress_test = $_GET['stress_test'];
$socket_number = $_GET['socket_number'];
$pin_indicator = $_GET['pin_indicator'];
$vendor = $_GET['vendor'];
$stackup = $_GET['stackup'];
$artwork = $_GET['artwork'];
$unidedi = $_GET['unidedi'];
$dut_density = $_GET['dut_density'];
$loose_dut = $_GET['loose_dut'];
$live_bug = $_GET['live_bug'];
$bib_ori = $_GET['bib_ori'];
$onsemi_logo = $_GET['onsemi_logo'];

$r1 = $_GET['r1'];
$r2 = $_GET['r2'];
$r3 = $_GET['r3'];
$r4 = $_GET['r4'];
$r5 = $_GET['r5'];
$r6 = $_GET['r6'];

echo '$pcb_material >>> ' + $pcb_material;

if ($username == '') {
    $username = 'System';
}

$status = 'Active';
$flag = '1';

$mnfctr = getCode($mnfctr, '018', $username);

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

alert("PLEASE UPDATE DATABASE DESIGN FOLLOW NEW REQUIREMENT");

$insert = "INSERT INTO gest_form_hw (lab_location, strategy, standard_category, champion, hw_type, manufacturer, assembly_no, voltage_rating, current_rating, "
        . "temp_rating, support_stress, daq_monitoring, pcb_material, mb_dimension_l, mb_dimension_w, mb_dimension_t, no_layer, frame_material, board_coating, "
        . "mb_universal_dedicated, mb_socket_type, mb_socket_qty, mb_socket_pin_qty, mb_socket_pin_pitch, mb_support_card, lc_max_qty, lc_pin_qty, lc_pin_pitch, pc_max_qty, "
        . "pc_pin_qty, pc_pin_pitch, connector_type, no_pin, pin_pitch, edgefinger_thickness, max_dut_qty_mb, created_by, created_date, status, flag) "
        . "VALUES ('$labLctn', '$strategy', '$category', '$champion', '$hwType', '$mnfctr', '$assembly', '$voltRate', '$currRate', "
        . "'$tempRate', '$stress', '$daq', '$pcb', '$mb_l', '$mb_w', '$mb_t', '$layer', '$frame', '$board', "
        . "'$universal', '$socType', '$socQty', '$socPin', '$socPitch', '$package', '$load_max', '$load_qty', '$load_pitch', '$proMax', "
        . "'$progQty', '$progPitch', '$connType', '$noPins', '$pinPitch', '$edge', '$maxDut', '$username', NOW(), '$status', '$flag')";
$upload = mysqli_query($con, $insert);

?>
<script>
    alert('New Hardware Added Successfully');
//    window.location.href = '../hardware/list.php';
    window.location.href = '../list/list_hardware.php';
</script>
<?php mysql_close($handle);