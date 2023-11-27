<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
ob_start();
session_start();
unset($_SESSION["username"]);
unset($_SESSION["password"]);

echo 'Your session has reached the idle time limit and has been automatically terminated.';
header('Refresh: 1; URL = login.php');
?>