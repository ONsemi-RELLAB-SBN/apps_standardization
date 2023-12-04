<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

$db_host = "localhost:3308";
$db_name = "gest";
$db_user = "ayep";
$db_pass = "mysql@2023";

try {

    $db_con = new PDO("mysql:host={$db_host};dbname={$db_name}", $db_user, $db_pass);
    $db_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db_con->exec("set names utf8");
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>