<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

// DB table to use
$table = 'data_power_supply';

// Table's primary key
$primaryKey = 'id';

$columns = array(
    array('db' => 'lab_location', 'dt' => 0),
    array('db' => 'product_group', 'dt' => 1),
    array('db' => 'category', 'dt' => 2),
    array('db' => 'lab_manager', 'dt' => 3),
    array('db' => 'manufacturer', 'dt' => 4),
    array('db' => 'model', 'dt' => 5),
    array('db' => 'voltage_rating', 'dt' => 6),
    array('db' => 'current_rating', 'dt' => 7),
    array('db' => 'max_power', 'dt' => 8),
    array('db' => 'no_voltage_display', 'dt' => 9),
    array('db' => 'no_current_display', 'dt' => 10),
    array('db' => 'ovp', 'dt' => 11),
    array('db' => 'ocp', 'dt' => 12),
    array('db' => 'ps_dimension_w', 'dt' => 13),
    array('db' => 'ps_dimension_d', 'dt' => 14),
    array('db' => 'ps_dimension_h', 'dt' => 15),
    array('db' => 'weight', 'dt' => 16),
    array('db' => 'min_voltage', 'dt' => 17),
    array('db' => 'max_voltage', 'dt' => 18),
    array('db' => 'remote_operation', 'dt' => 19),
    array('db' => 'voltage_monitor', 'dt' => 20),
    array('db' => 'current_monitor', 'dt' => 21),
    array('db' => 'eqpt_interface', 'dt' => 22),
    array('db' => 'lan_port', 'dt' => 23),
    array('db' => 'gpib', 'dt' => 24),
    array('db' => 'other', 'dt' => 25),
    array('db' => 'input_voltage', 'dt' => 26),
    array('db' => 'no_output', 'dt' => 27),
    array('db' => 'status', 'dt' => 28),
    array('db' => 'haidi', 'dt' => 29)
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