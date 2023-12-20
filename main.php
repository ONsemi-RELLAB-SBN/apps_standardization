<?php
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
ob_start();
session_start();
if (!empty($_SESSION['username'])) {
    $username = $_SESSION['username'];
    $password = $_SESSION['password'];
} else {
    header('location:logout.php');
}
// Set the inactivity time of 15 minutes (900 seconds)
$inactivity_time = 45 * 60;
if (isset($_SESSION['last_timestamp']) && (time() - $_SESSION['last_timestamp']) > $inactivity_time) {
    session_unset();
    session_destroy();
    header("Location: logout.php");
    exit();
} else {
    session_regenerate_id(true);
    $_SESSION['last_timestamp'] = time();
}

include 'class/check_user.php';
checkUser($username, 'main_view.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <title>STANDARDIZATION FORM</title>
        <meta name="author" content="Ayep" />
        <link rel="shortcut icon" href="image/logo/onsemi_logo.ico">

        <link rel="stylesheet" href="css/main.css" />
        <noscript><link rel="stylesheet" href="css/noscript.css" /></noscript>

        <style>
            .shape {
                padding-top: 7px;
                height: 40px;
                width: 170px;
                background-color: white;
                border-radius: 15px;
            }
        </style>
    </head>
    <body class="is-preload">
        <div id="wrapper">
            <header id="header">
                <div class="shape">
                    <img src="image/logo/onsemi_logo_small.png" alt="alt"/>
                </div>
                <div class="content">
                    <div class="inner">
                        <h2>REL EQUIPMENT PLATFORM DEVELOPMENT<br>&<br>STANDARDIZATION</h2>
                        <p>released by 2023.</p>
                    </div>
                </div>
                <nav>
                    <ul>
                        <li style="background-color: green"><a href="list/list_equipment.php">Equipment</a></li>
                        <li style="background-color: green"><a href="list/list_hardware.php">Hardware</a></li>
                        <li style="background-color: green"><a href="list/list_daq.php">DAQ</a></li>
                        <li style="background-color: green"><a href="list/list_power_supply.php">Power Supply</a></li>
                        <li style="background-color: gray" title="Under Development" id="try1" > <a href="#">Design</a></li>
                        <li style="background-color: gray" title="Under Development" id="try2" > <a href="#">Process</a></li>
                        <li style="background-color: gray" title="Under Development" id="try3" > <a href="#">Elec Test</a></li>
                        <li style="background-color: blueviolet" title="Parameter"><a href="parameter/parameter.php">Parameter</a></li>
<!--                        <li style="background-color: green"><a href="equipment/add.php">Equipment</a></li>
                        <li style="background-color: green"><a href="hardware/add.php">Hardware</a></li>
                        <li style="background-color: green"><a href="daq/add.php">DAQ</a></li>
                        <li style="background-color: green"><a href="power/add.php">Power Supply</a></li>
                        <li style="background-color: gray" title="Under Development" id="try1" > <a href="#">Design</a></li>
                        <li style="background-color: gray" title="Under Development" id="try2" > <a href="#">Process</a></li>
                        <li style="background-color: gray" title="Under Development" id="try3" > <a href="#">Elec Test</a></li>
                        <li style="background-color: blueviolet" title="Parameter"><a href="parameter/parameter.php">Parameter</a></li>-->
                    </ul>
                </nav>
            </header>
            <footer id="footer">
                <p class="copyright">&copy; REL LAB Design By : <a href="https://html5up.net">M Arif / M Farhan</a>.</p>
            </footer>
        </div>
        <div id="bg"></div>
        <script src="js/jquery.min.js"></script>
        <script src="js/browser.min.js"></script>
        <script src="js/breakpoints.min.js"></script>
        <script src="js/util.js"></script>
        <script src="js/main.js"></script>
        <script>
            document.getElementById("try1").onclick = function (e) {
                e.preventDefault(); //Prevent the default behavior 
                alert('DESIGN FORM UNDER DEVELOPMENT!');
            };
            document.getElementById("try2").onclick = function (e) {
                e.preventDefault(); //Prevent the default behavior 
                alert('PROCESS FORM UNDER DEVELOPMENT!');
            };
            document.getElementById("try3").onclick = function (e) {
                e.preventDefault(); //Prevent the default behavior 
                alert('ELECTRICAL TEST FORM UNDER DEVELOPMENT!');
            };
        </script>
    </body>
</html>