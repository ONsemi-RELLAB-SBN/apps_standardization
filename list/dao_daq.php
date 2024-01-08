<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

// DB table to use
$table = 'data_daq';

// Table's primary key
$primaryKey = 'id';

$columns = array(
    array('db' => 'lab_location', 'dt' => 0),
    array('db' => 'product_group', 'dt' => 1),
    array('db' => 'category', 'dt' => 2),
    array('db' => 'lab_manager', 'dt' => 3),
    array('db' => 'manufacturer', 'dt' => 4),
    array('db' => 'model', 'dt' => 5),
    array('db' => 'daq_id', 'dt' => 6),
    array('db' => 'no_temp_channel', 'dt' => 7),
    array('db' => 'no_voltage_channel', 'dt' => 8),
    array('db' => 'no_leakage_channel', 'dt' => 9),
    array('db' => 'max_voltage_measure', 'dt' => 10),
    array('db' => 'min_voltage_measure', 'dt' => 11),
    array('db' => 'max_leakage_measure', 'dt' => 12),
    array('db' => 'min_leakage_measure', 'dt' => 13),
    array('db' => 'max_temp_measure', 'dt' => 14),
    array('db' => 'min_temp_measure', 'dt' => 15),
    array('db' => 'volt_drop', 'dt' => 16),
    array('db' => 'board_check', 'dt' => 17),
    array('db' => 'measure_start', 'dt' => 18),
    array('db' => 'scan_time', 'dt' => 19),
    array('db' => 'leakage_measure_resolution', 'dt' => 20),
    array('db' => 'leakage_measure_accuracy', 'dt' => 21),
    array('db' => 'voltage_measure_resolution', 'dt' => 22),
    array('db' => 'data_plot', 'dt' => 23),
    array('db' => 'he_design', 'dt' => 24),
    array('db' => 'analog_single', 'dt' => 25),
    array('db' => 'analog_diff', 'dt' => 26),
    array('db' => 'resolution', 'dt' => 27),
    array('db' => 'sampling', 'dt' => 28),
    array('db' => 'support', 'dt' => 29),
    array('db' => 'resistance', 'dt' => 30),
    array('db' => 'voltage_measure', 'dt' => 31),
    array('db' => 'temp_measure', 'dt' => 32),
    array('db' => 'eqpt_interface', 'dt' => 33),
    array('db' => 'ps_interface', 'dt' => 34),
    array('db' => 'haidi', 'dt' => 35)
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