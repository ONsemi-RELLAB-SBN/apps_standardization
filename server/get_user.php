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
$table = 'gest_user';

// Table's primary key
$primaryKey = 'id';

// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
$columns = array(
    array('db' => 'oncid', 'dt' => 0),
    array('db' => 'username', 'dt' => 1),
    array('db' => 'name', 'dt' => 2),
    array('db' => 'email', 'dt' => 3),
    array('db' => 'title', 'dt' => 4),
    array('db' => 'site', 'dt' => 5)
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

//print_r($sql_details);

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */

require('ssp.class.php');

echo json_encode(
        SSP::simple($_GET, $sql_details, $table, $primaryKey, $columns)
);