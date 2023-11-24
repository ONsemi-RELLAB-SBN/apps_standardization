<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

include './class/db.php';
include './class/get_parameter.php';

use ayep\SimpleXLSXGen;

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);

require_once __DIR__ . '\SimpleXLSXGen.php';

$get_slides = "SELECT * FROM gest_form_eqpt WHERE flag = '1' ORDER BY id ASC";
$run_slides = mysqli_query($con, $get_slides);
$t = 0;

// COLUMN NAME
$rekod[] = ['No', 'Equipment ID', 'Lab Location', 'Product Group', 'Standard Category', 'Lab Manager', 'Dedicated Usage', 'Rel Test', 'Zone', 'Manufacturer', 
    'Model', 'Manufacturing Date', 'Asset Number', 'New / Transfer', 'Transfer Location', 'Voltage Rating', 'Voltage Control Accuracy' ,'Minimum Temperature', 'Maximum Temperature', 'Minimum RH',
    'Max RH', 'Minimum Pressure', 'Maximum Pressure', 'Heat Dissipation', 'Temperature Uniformity', 'Humid Fluctuation', 'External Dimension (W)', 'External Dimension (D)' ,'External Dimension (H)', 'Internal Dimension (W)',
    'Internal Dimension (D)', 'Internal Dimension (H)', 'No Interior Zone', 'Rack Dimension (W)', 'Rack Dimension (D)', 'Rack Dimension (H)', 'Internal Volume', 'Board Orientation' ,'Rack Material', 'Rack Slot Pitch',
    'Rack Slot Width', 'Equipment Weight', 'No Motherboard Slot', 'Maximum Power Supply Slot', 'Maximum Power Supply Equipment', 'Airflow', 'Temperature 1', 'Temperature 2' ,'Temperature 3', 'Smoke Alarm',
    'EMO Button', '', '', '', '', '', '', '' ,'', '',
    '', '', '', '', '', '', '', '' ,'', '',
    '', '', '', '', '', '', ''];

while ($row_slides = mysqli_fetch_array($run_slides)):
    $t += 1;
    // DATA
    $bookData = [
        $t,
        getParameterValue($row_slides['eqpt_id']),
        getParameterValue($row_slides['lab_location']),
        getParameterValue($row_slides['strategy']),
        getParameterValue($row_slides['standard_category']),
        getParameterValue($row_slides['champion']),
        getParameterValue($row_slides['dedicate_usage']),
        getParameterValues($row_slides['rel_test']),
        $row_slides['zone'],
        getParameterValue($row_slides['manufacturer']),                    // 10
        getParameterValue($row_slides['eqpt_model']),
        $row_slides['eqpt_mfg_date'],
        $row_slides['eqpt_asset_no'],
        getParameterValue($row_slides['new_transfer_eqpt']),
        getParameterValue($row_slides['transfer_eqpt_location']),
        $row_slides['eqpt_volt_rating'],
        $row_slides['volt_control_accuracy'],
        $row_slides['min_temp'],
        $row_slides['max_temp'],
        $row_slides['min_rh'],                                                  // 20
        $row_slides['max_rh'],
        $row_slides['min_pressure'],
        $row_slides['max_pressure'],
        $row_slides['heat_dissipation'],
        $row_slides['temp_uniformity'],
        $row_slides['humid_fluctuation'],
        $row_slides['ext_dimension_w'],
        $row_slides['ext_dimension_d'],
        $row_slides['ext_dimension_h'],
        $row_slides['int_dimension_w'],                                         // 30
        $row_slides['int_dimension_d'],
        $row_slides['int_dimension_h'],
        $row_slides['no_interior_zone'],
        $row_slides['rack_dimension_w'],
        $row_slides['rack_dimension_d'],
        $row_slides['rack_dimension_h'],
        $row_slides['int_vol'],
        getParameterValue($row_slides['board_orientation']),
        getParameterValue($row_slides['rack_material']),
        $row_slides['rack_slot_pitch'],                                         // 40
        $row_slides['rack_slot_width'],
        $row_slides['eqpt_weight'],
        $row_slides['no_mb_slot'],
        $row_slides['max_ps_slot'],
        $row_slides['max_ps_eqpt'],
        getParameterValue($row_slides['airflow']),
        getParameterValue($row_slides['temp_protection_1']),
        getParameterValue($row_slides['temp_protection_2']),
        getParameterValue($row_slides['temp_protection_3']),
        getParameterValue($row_slides['smoke_alarm']),                          // 50
        getParameterValue($row_slides['emo_btn']),
        $row_slides['volt_phase_current'],
        $row_slides['phase'],
        getParameterValue($row_slides['exhaust']),
        getParameterValue($row_slides['n2_gas']),
        getParameterValue($row_slides['oxygen_level_detector']),
        getParameterValue($row_slides['liquid_nitrogen']),
        getParameterValue($row_slides['chilled_water']),
        getParameterValue($row_slides['di_water']),
        getParameterValue($row_slides['water_topup_system']),                   // 60
        getParameterValue($row_slides['daq']),
        getParameterValue($row_slides['internal_config_type']),
        $row_slides['no_banana_jack_hole'],
        $row_slides['conn_volt_rating'],
        $row_slides['conn_current_rating'],
        $row_slides['conn_temp_rating'],
        $row_slides['no_pin'],
        $row_slides['pin_pitch'],
        $row_slides['no_wire_conn_rack'],
        $row_slides['wire_volt_rating'],                                        // 70
        $row_slides['wire_curr_rating'],
        $row_slides['wire_temp_rating'],
        getParameterValue($row_slides['ext_config_type']),
        $row_slides['interface_volt_rating'],
        $row_slides['interface_current_rating'],
        $row_slides['created_by'],
        $row_slides['created_date']
    ];
    $rekod[] = $bookData;
endwhile;

$xlsx = SimpleXLSXGen::fromArray($rekod);
$xlsx->downloadAs('equipment_' . date('Ymd_His') . '.xlsx');