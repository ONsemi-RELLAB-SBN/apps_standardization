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

$get_slides = "SELECT * FROM gest_form_hw WHERE flag = '1' ORDER BY id ASC";
$run_slides = mysqli_query($con, $get_slides);
$t = 0;

// COLUMN NAME
$rekod[] = ['No', 'Hardware Type', 'Lab Location', 'Manufacturer', 'Lab Manager', 'Assembly Number'];

while ($row_slides = mysqli_fetch_array($run_slides)):
    $t += 1;
    // DATA
    $bookData = [
        $t,
        getParameterValue($row_slides['hw_type']),
        getParameterValue($row_slides['lab_location']),
        getParameterValue($row_slides['manufacturer']),
        getParameterValue($row_slides['champion']),
        $row_slides['assembly_no'],
    ];
    $rekod[] = $bookData;
endwhile;

$xlsx = SimpleXLSXGen::fromArray($rekod);
$xlsx->downloadAs('hardware_' . date('Ymd_His') . '.xlsx');