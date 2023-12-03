<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

// DB table to use
$table = 'data_equipment';

// Table's primary key
$primaryKey = 'id';

// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
$columns = array(
    array('db' => 'equipment_id', 'dt' => 0),
    array('db' => 'lab_location', 'dt' => 1),
    array('db' => 'product_group', 'dt' => 2),
    array('db' => 'category', 'dt' => 3),
    array('db' => 'lab_manager', 'dt' => 4),
    array('db' => 'dedicate_usage', 'dt' => 5),
    array('db' => 'rel_event', 'dt' => 6),
    array('db' => 'ZONE', 'dt' => 7),
//    array(
//        'db' => 'ZONE',
//        'dt' => 7,
//        'formatter' => function ($d, $row) {
//            return '$' . number_format($d);
//        }
//    ),
    array('db' => 'manufacturer', 'dt' => 8),
    array('db' => 'model', 'dt' => 9),
    array('db' => 'mfg_date', 'dt' => 10),
//    array(
//        'db' => 'mfg_date',
//        'dt' => 10,
//        'formatter' => function ($d, $row) {
//            return date('jS M y', strtotime($d));
//        }
//    ),
    array('db' => 'asset_number', 'dt' => 11),
    array('db' => 'new_transfer', 'dt' => 12),
    array('db' => 'location', 'dt' => 13)
);

// SQL server connection information
include_once '../class/db.php';
    
$sql_details = array(
    'user' => $user,
    'pass' => $pass,
    'db' => $db,
    'port' => '3308',
    'host' => $host,
    'charset' => 'utf8' // Depending on your PHP and MySQL config, you may need this
);

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */

require('ssp.class.php');

echo json_encode(
    SSP::simple($_GET, $sql_details, $table, $primaryKey, $columns)
);