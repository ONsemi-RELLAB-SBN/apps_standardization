<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

// DB table to use
$table = 'data_hardware';

// Table's primary key
$primaryKey = 'id';

$columns = array(
    array('db' => 'lab_location', 'dt' => 0),
    array('db' => 'product_group', 'dt' => 1),
    array('db' => 'category', 'dt' => 2),
    array('db' => 'lab_manager', 'dt' => 3),
    array('db' => 'hardware_type', 'dt' => 4),
    array('db' => 'manufacturer', 'dt' => 5),
    array('db' => 'assembly_no', 'dt' => 6),
    array('db' => 'voltage_rating', 'dt' => 7),
    array('db' => 'current_rating', 'dt' => 8),
    array('db' => 'temp_rating', 'dt' => 9),
    array('db' => 'support', 'dt' => 10),
    array('db' => 'daq', 'dt' => 11),
    array('db' => 'pcb', 'dt' => 12),
    array('db' => 'mb_dimension_l', 'dt' => 13),
    array('db' => 'mb_dimension_w', 'dt' => 14),
    array('db' => 'mb_dimension_t', 'dt' => 15),
    array('db' => 'no_layer', 'dt' => 16),
    array('db' => 'frame', 'dt' => 17),
    array('db' => 'board', 'dt' => 18),
    array('db' => 'universal', 'dt' => 19),
    array('db' => 'socket_type', 'dt' => 20),
    array('db' => 'mb_socket_qty', 'dt' => 21),
    array('db' => 'mb_socket_pin_qty', 'dt' => 22),
    array('db' => 'mb_socket_pin_pitch', 'dt' => 23),
    array('db' => 'support_card', 'dt' => 24),
    array('db' => 'lc_max_qty', 'dt' => 25),
    array('db' => 'lc_pin_qty', 'dt' => 26),
    array('db' => 'lc_pin_pitch', 'dt' => 27),
    array('db' => 'pc_max_qty', 'dt' => 28),
    array('db' => 'pc_pin_qty', 'dt' => 29),
    array('db' => 'pc_pin_pitch', 'dt' => 30),
    array('db' => 'connector_type', 'dt' => 31),
    array('db' => 'no_pin', 'dt' => 32),
    array('db' => 'pin_pitch', 'dt' => 33),
    array('db' => 'edgefinger_thickness', 'dt' => 34),
    array('db' => 'max_dut_qty_mb', 'dt' => 35),
    array('db' => 'haidi', 'dt' => 36)
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