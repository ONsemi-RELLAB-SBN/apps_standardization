<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

/*
 * DataTables example server-side processing script.
 *
 * Please note that this script is intentionally extremely simple to show how
 * server-side processing can be implemented, and probably shouldn't be used as
 * the basis for a large complex system. It is suitable for simple use cases as
 * for learning.
 *
 * See https://datatables.net/usage/server-side for full details on the server-
 * side processing requirements of DataTables.
 *
 * @license MIT - https://datatables.net/license_mit
 */

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Easy set variables
 */

// DB table to use
$table = 'gest_form_eqpt';

// Table's primary key
$primaryKey = 'id';

// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
$columns = array(
    array('db' => 'eqpt_id', 'dt' => 0),
    array('db' => 'lab_location', 'dt' => 1),
    array('db' => 'strategy', 'dt' => 2),
    array('db' => 'standard_category', 'dt' => 3),
    array('db' => 'champion', 'dt' => 4),
    array('db' => 'dedicate_usage', 'dt' => 5),
    array('db' => 'rel_test', 'dt' => 6),
    array(
        'db' => 'zone',
        'dt' => 7,
        'formatter' => function ($d, $row) {
            return '$' . number_format($d);
        }
    ),
    array('db' => 'manufacturer', 'dt' => 8),
    array('db' => 'eqpt_model', 'dt' => 9),
    array(
        'db' => 'eqpt_mfg_date',
        'dt' => 10,
        'formatter' => function ($d, $row) {
            return date('jS M y', strtotime($d));
        }
    ),
    array('db' => 'eqpt_asset_no', 'dt' => 11),
    array('db' => 'new_transfer_eqpt', 'dt' => 12),
    array('db' => 'transfer_eqpt_location', 'dt' => 13)
);

// SQL server connection information
include_once '../class/db.php';
    
$sql_details = array(
    'user' => $user,
    'pass' => $pass,
    'db' => $db,
    'port' => '3308',  
    'host' => $host
    ,'charset' => 'utf8' // Depending on your PHP and MySQL config, you may need this
);

print_r($sql_details);

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */

require('ssp.class.php');

echo json_encode(
        SSP::simple($_GET, $sql_details, $table, $primaryKey, $columns)
);