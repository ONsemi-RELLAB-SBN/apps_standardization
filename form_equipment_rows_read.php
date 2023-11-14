<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

use ayep\SimpleXLSX;

ini_set('error_reporting', E_ALL);
ini_set('display_errors', true);

//require_once __DIR__.'/../src/SimpleXLSX.php';
require_once __DIR__.'\SimpleXLSX.php';

echo '<h1>rows() and rowsEx()</h1>';
if ($xlsx = SimpleXLSX::parse('uploaded_img\Equipment Form Template V5.xlsm')) {
    // ->rows()
//    echo '<h2>$xlsx->rows()</h2>';
//    echo '<pre>';
//    print_r($xlsx->rows());
//    echo '</pre>';
    
    $dim = $xlsx->dimension();
    $num_cols = $dim[0];
    $num_rows = $dim[1];
    
    echo 'column >>> ' . $num_cols;
    echo 'row    >>> ' . $num_rows;
    
    if ($num_rows > 3) {
        echo '<h2>$xlsx->rows()</h2>';
        echo '<pre>';
        print_r($xlsx->rows());
        echo '</pre>';
    }
    
    // ->rowsEx();
//    echo '<h2>$xlsx->rowsEx()</h2>';
//    echo '<pre>';
//    print_r($xlsx->rowsEx());
//    echo '</pre>';
} else {
    echo SimpleXLSX::parseError();
}