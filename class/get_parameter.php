<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

include 'db.php';

function getParameterDetail($code) {
    $getData = "SELECT * FROM gest_parameter_detail WHERE master_code = '$code' ORDER BY code ASC";
    $rData = mysqli_query($con, $getData);
//    $rowMaklumat = mysqli_fetch_assoc($rData);
    while ($rowSite = mysqli_fetch_array($resSite)):
        $data = $row['name'];
    endwhile;
    echo 'test query' . $data;
    return $data;
}

function getMultipleParameter($string) {
    $mysqli = new mysqli('localhost', 'ayep', 'mysql@2023', 'gest');
    if ($mysqli->connect_errno) {
        echo 'Failed to connect to MySQL: (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error;
        exit;
    }

    $codes = explode(',', $string);
    $values = [];
    foreach ($codes as $code) {
        $query = 'SELECT name FROM gest_parameter_detail WHERE code = \'' . $code . '\'';
        $result = $mysqli->query($query);
        if (!$result) {
            echo 'Failed to execute query: (' . $mysqli->errno . ') ' . $mysqli->error;
            exit;
        }

        $row = $result->fetch_assoc();
        $values[] = $row['name'];
    }
    $mysqli->close();

    return implode(', ', $values);
}