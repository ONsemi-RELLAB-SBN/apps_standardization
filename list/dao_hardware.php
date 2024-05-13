<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

// DB table to use
$table = 'contoh_hardware';

// Table's primary key
$primaryKey = 'id';

$columns = array(
    array('db' => 'lab_location', 'dt' => 0),
    array('db' => 'product_group', 'dt' => 1),
    array('db' => 'std_category', 'dt' => 2),
    array('db' => 'lab_manager', 'dt' => 3),
    array('db' => 'assembly_no', 'dt' => 4),
    array('db' => 'category', 'dt' => 5),
    array('db' => 'sub_category', 'dt' => 6),
    array('db' => 'temp_rating', 'dt' => 7),
    array('db' => 'humid_rating', 'dt' => 8),
    array('db' => 'voltage_rating', 'dt' => 9),
    array('db' => 'current_rating', 'dt' => 10),
    array('db' => 'pcb_material', 'dt' => 11),
    array('db' => 'pcb_temp', 'dt' => 12),
    array('db' => 'pcb_moisture', 'dt' => 13),
    array('db' => 'pcb_copper', 'dt' => 14),
    array('db' => 'pcb_thick', 'dt' => 15),
    array('db' => 'pcb_edge', 'dt' => 16),
    array('db' => 'pcb_coating', 'dt' => 17),
    array('db' => 'pcb_layer', 'dt' => 18),
    array('db' => 'bf_material', 'dt' => 19),
    array('db' => 'bf_screw', 'dt' => 20),
    array('db' => 'bf_handle', 'dt' => 21),
    array('db' => 'component', 'dt' => 22),
    array('db' => 'mb_socket_part', 'dt' => 23),
    array('db' => 'mb_socket_avail', 'dt' => 24),
    array('db' => 'mb_socket_qty', 'dt' => 25),
    array('db' => 'mb_socket_pin_qty', 'dt' => 26),
    array('db' => 'mb_socket_pin_pitch', 'dt' => 27),
    array('db' => 'mb_socket_body', 'dt' => 28),
    array('db' => 'mb_socket_pin', 'dt' => 29),
    array('db' => 'mb_socket_config', 'dt' => 30),
    array('db' => 'mb_socket_volt', 'dt' => 31),
    array('db' => 'mb_socket_curr', 'dt' => 32),
    array('db' => 'mb_socket_temp', 'dt' => 33),
    array('db' => 'mark_volt', 'dt' => 34),
    array('db' => 'mark_curr', 'dt' => 35),
    array('db' => 'mark_temp', 'dt' => 36),
    array('db' => 'mark_board', 'dt' => 37),
    array('db' => 'mark_assembly', 'dt' => 38),
    array('db' => 'mark_stress', 'dt' => 39),
    array('db' => 'mark_socket', 'dt' => 40),
    array('db' => 'mark_pin', 'dt' => 41),
    array('db' => 'mark_vendor', 'dt' => 42),
    array('db' => 'mark_layer', 'dt' => 43),
    array('db' => 'mark_artwork', 'dt' => 44),
    array('db' => 'mark_cat', 'dt' => 45),
    array('db' => 'mark_dut', 'dt' => 46),
    array('db' => 'mark_loose', 'dt' => 47),
    array('db' => 'mark_bug', 'dt' => 48),
    array('db' => 'mark_bib', 'dt' => 49),
    array('db' => 'mark_logo', 'dt' => 50),
    array('db' => 'app_verify', 'dt' => 51),
    array('db' => 'app_component', 'dt' => 52),
    array('db' => 'app_temp', 'dt' => 53),
    array('db' => 'app_tight', 'dt' => 54),
    array('db' => 'app_select', 'dt' => 55),
    array('db' => 'app_heatsink', 'dt' => 56),
    array('db' => 'created_by', 'dt' => 57),
    array('db' => 'updated_by', 'dt' => 58),
    array('db' => 'delete_by', 'dt' => 59),
    array('db' => 'created_date', 'dt' => 60),
    array('db' => 'update_date', 'dt' => 61),
    array('db' => 'delete_date', 'dt' => 62),
    array('db' => 'status', 'dt' => 63),
    array('db' => 'flag', 'dt' => 64),
    array('db' => 'haidi', 'dt' => 65)
);

// SQL server connection information
include_once '../class/db.php';
if ($port == '') {
    
} else {
    $host .= ':' . $port;
}
$sql_details = array(
    'user' => $user,
    'pass' => $pass,
    'db' => $db,
    'host' => $host,
    'charset' => 'utf8' // Depending on your PHP and MySQL config, you may need this
);

require('ssp.class.php');

echo json_encode(
    SSP::simple( $_POST, $sql_details, $table, $primaryKey, $columns )
);