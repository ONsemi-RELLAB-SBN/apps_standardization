<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

if (isset($_FILES['file'])) {
    $fileName = $_FILES['file']['name'];
    $tmpFileName = $_FILES['file']['tmp_name'];
    $fileType = $_FILES['file']['type'];

    $allowedTypes = array('application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 'application/vnd.ms-excel');

    if (!in_array($fileType, $allowedTypes)) {
        echo 'Invalid file type. Only Excel and XLSX files are allowed.';
        exit;
    }
    
//    $inputFileType = 'Xls';
//    $inputFileName = './sampleData/example1.xls';

    /**  Create a new Reader of the type defined in $inputFileType  **/
    $reader = PhpSpreadsheet\IOFactory::createReader($fileType);
    /**  Advise the Reader that we only want to load cell data  **/
    $reader->setReadDataOnly(true);
    /**  Load $inputFileName to a Spreadsheet Object  **/
    $spreadsheet = $reader->load($fileName);
    

//    move_uploaded_file($tmpFileName, 'uploaded_img/' . $fileName);
//
//    require_once 'PHPExcel.php';
//
//    $objPHPExcel = PHPExcel_IOFactory::load('uploaded_img/' . $fileName);
//    $activeSheet = $objPHPExcel->getSheet(0);
//    $highestRow = $activeSheet->getHighestRow();
//    $highestColumn = $activeSheet->getHighestColumn();
//
//    echo '<table style="width: 100%;">';
//    echo '<tr>';
//    for ($column = 'A'; $column <= $highestColumn; $column++) {
//        $cellValue = $activeSheet->getCell($column . 1)->getValue();
//        echo '<th>' . $cellValue . '</th>';
//    }
//    echo '</tr>';
//
//    for ($row = 2; $row <= $highestRow; $row++) {
//        echo '<tr>';
//        for ($column = 'A'; $column <= $highestColumn; $column++) {
//            $cellValue = $activeSheet->getCell($column . $row)->getValue();
//            echo '<td>' . $cellValue . '</td>';
//        }
//        echo '</tr>';
//    }
//
//    echo '</table>';
} else {
    echo 'No file uploaded.';
}