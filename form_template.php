<?php
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
ob_start();
session_start();
include 'class/db.php';

if(!empty($_SESSION['user'])){
    $user = $_SESSION['user'];
} else {
    header('location:logout.php');
}

// Set the inactivity time of 15 minutes (900 seconds)
$inactivity_time = 30*60;
if (isset($_SESSION['last_timestamp']) && (time() - $_SESSION['last_timestamp']) > $inactivity_time) {
    session_unset();
    session_destroy();
    header("Location: logout.php");
    exit();
} else {
    session_regenerate_id(true);
    $_SESSION['last_timestamp'] = time();
}
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>STANDARDIZATION FORM</title>
        <meta name="author" content="Ayep" />
        <link rel="shortcut icon" href="image/logo/onsemi_logo.ico">

        <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="css/normalize.css">
        <link rel="stylesheet" type="text/css" href="css/skeleton.css">
        <style>
            .sticky {
                position: fixed;
                z-index: 1;
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

        <script>
        // Add active class to the current button (highlight it)
            var header = document.getElementById("header_temp");
            var btns = header.getElementsByClassName("li");
            for (var i = 0; i < btns.length; i++) {
                btns[i].addEventListener("click", function () {
                    var current = document.getElementsByClassName("active");
                    if (current.length > 0) {
                        current[0].className = current[0].className.replace(" active", "");
                    }
                    this.className += " active";
                });
            }
        </script>
    </body>
</html>