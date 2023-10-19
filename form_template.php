<?php
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
include 'class/db.php';
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>STANDARD</title>
        <meta name="author" content="Ayep" />
        <link rel="shortcut icon" href="image/logo/onsemi_logo.ico">

        <link rel="stylesheet" type="text/css" href="css/main01.css">
        <style>
            .sticky {
                position: fixed;
                z-index: 1;
                font-size: 13px;
                top: 0;
                width: 100%;
            }

            .sticky + .content {
                padding-top: 100px;
            }
        </style>
    </head>
    <body>
        <div>
            <header id="header_temp" class="sticky">
                <nav>
                    <ul>
                        <li><a href="main.php">Home</a></li>
                        <li><a href="parameter.php">Parameter</a></li>
                        <li><a href="form_equipment.php">Equipment</a></li>
                        <li><a href="form_hardware.php">Hardware</a></li>
                        <li><a href="form_daq.php">DAQ</a></li>
                        <li><a href="form_power.php">Power Supply</a></li>
                        <li><a href="form_design.php">Design</a></li>
                        <li><a href="form_process.php">Process</a></li>
                        <li><a href="form_test.php">Elec Test</a></li>
                    </ul>
                </nav>
            </header>
        </div>
    </body>
</html>