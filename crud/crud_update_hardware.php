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
$standard   = $_GET['standardization'];
$champion   = $_GET['champion'];
$assembly   = $_GET['assembly_no'];

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
$socket_pin_pitch = $_GET['socket_pin_pitch'];
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

$updateMain = "UPDATE gest.gest_form_hw0 SET "
            . "lab_location = '$labLctn', "
            . "strategy = '$strategy', "
            . "standard_category = '$standard', "
            . "champion = '$champion', "
            . "assembly_no = '$assembly', "
            . "category = '$category', "
            . "sub_category = '$sub_cat', "
            . "temp_rating = '$temperature', "
            . "humid_rating = '$humidity', "
            . "voltage_rating = '$voltage', "
            . "current_rating = '$current', "
            . "updated_by = '$username', "
            . "update_date = NOW(), "
            . "status = '$status', "
            . "flag = '$flag' "
            . "WHERE id = '$id' LIMIT 1";
$hoi00 = mysqli_query($con, $updateMain);

//$update = "UPDATE gest_form_hw SET "
//        . "lab_location = '$labLctn', "
//        . "strategy = '$strategy', "
//        . "standard_category = '$category', "
//        . "champion = '$champion', "
//        . "hw_type = '$hwType', "
//        . "manufacturer = '$mnfctr', "
//        . "assembly_no = '$assembly', "
//        . "voltage_rating = '$voltRate', "
//        . "current_rating = '$currRate', "
//        . "temp_rating = '$tempRate', "
//        . "support_stress = '$stress', "
//        . "daq_monitoring = '$daq', "
//        . "pcb_material = '$pcb', "
//        . "mb_dimension_l = '$mb_l', "
//        . "mb_dimension_w = '$mb_w', "
//        . "mb_dimension_t = '$mb_t', "
//        . "no_layer = '$layer', "
//        . "frame_material = '$frame', "
//        . "board_coating = '$board', "
//        . "mb_universal_dedicated = '$universal', "
//        . "mb_socket_type = '$socType', "
//        . "mb_socket_qty = '$socQty', "
//        . "mb_socket_pin_qty = '$socPin', "
//        . "mb_socket_pin_pitch = '$socPitch', "
//        . "mb_support_card = '$package', "
//        . "lc_max_qty = '$load_max', "
//        . "lc_pin_qty = '$load_qty', "
//        . "lc_pin_pitch = '$load_pitch', "
//        . "pc_max_qty = '$proMax', "
//        . "pc_pin_qty = '$progQty', "
//        . "pc_pin_pitch = '$progPitch', "
//        . "connector_type = '$connType', "
//        . "no_pin = '$noPins', "
//        . "pin_pitch = '$pinPitch', "
//        . "edgefinger_thickness = '$edge', "
//        . "updated_by = '$username', "
//        . "status = '$status', "
//        . "flag = '$flag', "
//        . "update_date = NOW(), "
//        . "max_dut_qty_mb = '$maxDut' "
//        . "WHERE id = '$id' LIMIT 1;";
//$uprun = mysqli_query($con, $update);

$update01 = "UPDATE gest.gest_form_hw1 SET "
            . "pcb_material = '$pcb_material', "
            . "pcb_temp = '$pcb_material2', "
            . "pcb_moisture = '$pcb_moisture', "
            . "pcb_copper = '$edge_copper', "
            . "pcb_thick = '$pcb_thickness', "
            . "pcb_edge = '$edge_chamfered', "
            . "pcb_coating = '$surface_coat', "
            . "pcb_layer = '$no_layer', "
            . "edge_pitch = '$edge_pitch', "
            . "edge_thick = '$copper_thickness', "
            . "edge_width = '$trace_width', "
            . "edge_spacing = '$trace_space', "
            . "trace_layer = '$trace_internal', "
            . "trace_thick = '$final_thickness', "
            . "trace_width = '$min_trace', "
            . "trace_spacing = '$min_space', "
            . "trace_drill = '$plated_drill', "
            . "trace_control = '$impedance', "
            . "bf_material = '$frame_chasis', "
            . "bf_screw = '$frame_screw', "
            . "bf_handle = '$frame_handle', "
            . "component = '$component' "
            . "WHERE hw_id = '$id' LIMIT 1";
$hoi01 = mysqli_query($con, $update01);

$update02 = "UPDATE gest.gest_form_hw2 SET "
            . "mb_socket_part = '$socket_partno', "
            . "mb_socket_avail = '$socket_avail', "
            . "mb_socket_qty = '$socket_qty', "
            . "mb_socket_pin_qty = '$socket_pin_qty', "
            . "mb_socket_pin_pitch = '$socket_pin_pitch', "
            . "mb_socket_body = '$socket_body_material', "
            . "mb_socket_pin = '$socket_pin_material', "
            . "mb_socket_config = '$socket_config', "
            . "mb_socket_volt = '$socket_vol_rate', "
            . "mb_socket_curr = '$socket_curr_rate', "
            . "mb_socket_temp = '$socket_temp_rate', "
            . "conn_number = '$conn_part', "
            . "conn_avail = '$conn_avail', "
            . "conn_pin_qty = '$conn_pin_qty', "
            . "conn_pin_pitch = '$conn_pin_pitch', "
            . "conn_body = '$conn_body_material', "
            . "conn_pin = '$conn_pin_material', "
            . "conn_mold = '$rate_body', "
            . "conn_contact = '$rate_contact', "
            . "conn_volt = '$conn_volt_rate', "
            . "conn_curr = '$conn_curr_rate', "
            . "conn_temp = '$conn_temp_rate' "
            . "WHERE hw_id = '$id' LIMIT 1";
$hoi02 = mysqli_query($con, $update02);

$update03 = "UPDATE gest.gest_form_hw3 SET "
            . "mark_volt = '$volt_rate', "
            . "mark_curr = '$curr_rate', "
            . "mark_temp = '$temp_rate', "
            . "mark_board = '$board', "
            . "mark_assembly = '$ass_number', "
            . "mark_stress = '$stress_test', "
            . "mark_socket = '$socket_number', "
            . "mark_pin = '$pin_indicator', "
            . "mark_vendor = '$vendor', "
            . "mark_layer = '$stackup', "
            . "mark_artwork = '$artwork', "
            . "mark_cat = '$unidedi', "
            . "mark_dut = '$dut_density', "
            . "mark_loose = '$loose_dut', "
            . "mark_bug = '$live_bug', "
            . "mark_bib = '$bib_ori', "
            . "mark_logo = '$onsemi_logo', "
            . "app_verify = '$r1', "
            . "app_component = '$r2', "
            . "app_temp = '$r3', "
            . "app_tight = '$r4', "
            . "app_select = '$r5', "
            . "app_heatsink = '$r6' "
            . "WHERE hw_id = '$id' LIMIT 1";
$hoi03 = mysqli_query($con, $update03);
?>
<script>
    alert('Hardware Updated Successfully');
    window.location.href = '../hardware/view.php?view=<?php echo $id; ?>';
</script>
<?php mysql_close($handle);