<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

use ayep\SimpleXLSX;

ini_set('error_reporting', E_ALL);
ini_set('display_errors', true);

require_once __DIR__ . '\SimpleXLSX.php';

echo '<h1>CHECK THE EXCEL CONTENT</h1><pre>';
if ($xlsx = SimpleXLSX::parse('uploaded_img\test_date_copy_nk_upload.xlsx')) {
    print_r($xlsx->rows());
} else {
    echo SimpleXLSX::parseError();
}
echo '<pre>';