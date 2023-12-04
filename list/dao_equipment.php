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
    array('db' => 'location', 'dt' => 13),
    array('db' => 'eqpt_volt_rating', 'dt' => 14),
    array('db' => 'volt_control_accuracy', 'dt' => 15),
    array('db' => 'current_rating', 'dt' => 16),
    array('db' => 'power_rating', 'dt' => 17),
    array('db' => 'min_time_setting', 'dt' => 18),
    array('db' => 'max_time_setting', 'dt' => 19),
    array('db' => 'min_temp', 'dt' => 20),
    array('db' => 'max_temp', 'dt' => 21),
    array('db' => 'min_rh', 'dt' => 22),
    array('db' => 'max_rh', 'dt' => 23),
    array('db' => 'min_pressure', 'dt' => 24),
    array('db' => 'max_pressure', 'dt' => 25),
    array('db' => 'heat_dissipation', 'dt' => 26),
    array('db' => 'temp_fluctuation', 'dt' => 27),
    array('db' => 'temp_uniformity', 'dt' => 28),
    array('db' => 'humid_fluctuation', 'dt' => 29),
    array('db' => 'ext_dimension_w', 'dt' => 30),
    array('db' => 'ext_dimension_d', 'dt' => 31),
    array('db' => 'ext_dimension_h', 'dt' => 32),
    array('db' => 'int_dimension_w', 'dt' => 33),
    array('db' => 'int_dimension_d', 'dt' => 34),
    array('db' => 'int_dimension_h', 'dt' => 35),
    array('db' => 'diameter', 'dt' => 36),
//    array('db' => 'no_interior_zone', 'dt' => 37),
//    array('db' => 'rack_dimension_w', 'dt' => 38),
//    array('db' => 'rack_dimension_d', 'dt' => 39),
//    array('db' => 'rack_dimension_h', 'dt' => 40),
//    array('db' => 'int_vol', 'dt' => 41),
//    array('db' => 'board_orientation', 'dt' => 42),
//    array('db' => 'rack_material', 'dt' => 43),
//    array('db' => 'rack_slot_pitch', 'dt' => 44),
//    array('db' => 'rack_slot_width', 'dt' => 45),
//    array('db' => 'eqpt_weight', 'dt' => 46),
//    array('db' => 'no_mb_slot', 'dt' => 47),
//    array('db' => 'max_ps_slot', 'dt' => 48),
//    array('db' => 'max_ps_eqpt', 'dt' => 49),
//    array('db' => 'airflow', 'dt' => 50),
//    array('db' => 'temp_protection_1', 'dt' => 51),
//    array('db' => 'temp_protection_2', 'dt' => 52),
//    array('db' => 'temp_protection_3', 'dt' => 53),
//    array('db' => 'pressure_switch', 'dt' => 54),
//    array('db' => 'safety_valve', 'dt' => 55),
//    array('db' => 'smoke_alarm', 'dt' => 56),
//    array('db' => 'emo_btn', 'dt' => 57),
//    array('db' => 'voltage', 'dt' => 58),
//    array('db' => 'current', 'dt' => 59),
//    array('db' => 'phase', 'dt' => 60),
//    array('db' => 'exhaust', 'dt' => 61),
//    array('db' => 'n2_gas', 'dt' => 62),
//    array('db' => 'oxygen_level_detector', 'dt' => 63),
//    array('db' => 'liquid_nitrogen', 'dt' => 64),
//    array('db' => 'chilled_water', 'dt' => 65),
//    array('db' => 'di_water', 'dt' => 66),
//    array('db' => 'water_topup_system', 'dt' => 67),
//    array('db' => 'cda', 'dt' => 68),
//    array('db' => 'lan', 'dt' => 69),
//    array('db' => 'daq', 'dt' => 70),
//    array('db' => 'internal_config_type', 'dt' => 71),
//    array('db' => 'no_banana_jack_hole', 'dt' => 72),
//    array('db' => 'conn_volt_rating', 'dt' => 73),
//    array('db' => 'conn_current_rating', 'dt' => 74),
//    array('db' => 'conn_temp_rating', 'dt' => 75),
//    array('db' => 'no_pin', 'dt' => 76),
//    array('db' => 'pin_pitch', 'dt' => 77),
//    array('db' => 'no_wire_conn_rack', 'dt' => 78),
//    array('db' => 'wire_volt_rating', 'dt' => 79),
//    array('db' => 'wire_curr_rating', 'dt' => 80),
//    array('db' => 'wire_temp_rating', 'dt' => 81),
//    array('db' => 'ext_config_type', 'dt' => 82),
//    array('db' => 'interface_volt_rating', 'dt' => 83),
//    array('db' => 'interface_current_rating', 'dt' => 84)
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