<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

//$hostport = "localhost:3308";
$host = "localhost";
$user = "apps";
$pass = "mysql@2023";
$db = "gest";
$port = "3306";
$socket = "";

$con = mysqli_connect($host, $user, $pass, $db);

$test = mysqli_connect($host, $user, $pass, $db, $port, $socket);

if (!$test) {
//    echo 'PROBLEM CONNECTION';
} else {
//    echo 'SUCCESS 00';
}

if (!$con) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
} else {
//    echo '<br>SUCCESS 01';
}