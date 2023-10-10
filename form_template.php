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
        <title>TEMPLATE</title>
        <meta name="author" content="Ayep" />
        <link rel="shortcut icon" href="image/dribbble.ico">

        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <!--<link rel="stylesheet" type="text/css" href="css/elements.css" />-->
        <!--<link rel="stylesheet" type="text/css" href="css/layout.css">-->
        <!--<link rel="stylesheet" type="text/css" href="css/readonly.css" />-->
        <!--<link rel="stylesheet" type="text/css" href="css/select2.css"/>-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'>

        <script src="js/bootstrap.js"></script>
        <!--<script src="js/jquery.js"></script>-->
<!--        <script src="js/select2.min.js"></script>-->

        <style>
            /* Style the buttons */
            .link {
                border: none;
                outline: none;
                padding: 10px 16px;
                /*background-color: #f1f1f1;*/
                background-color: gray;
                cursor: pointer;
                font-size: 18px;
            }

            /* Style the active class, and buttons on mouse-over */
            .active, .link:hover {
                background-color: #666;
                color: white;
            }
        </style>
        <script type="text/javascript">
            // Add active class to the current button (highlight it)
            var header = document.getElementById("topnav");
            var btns = header.getElementsByClassName("link");
            for (var i = 0; i < btns.length; i++) {
                btns[i].addEventListener("click", function () {
                    var current = document.getElementsByClassName("active");
                    current[0].className = current[0].className.replace(" active", "");
                    this.className += " active";
                });
            }
        </script>
    </head>
    <body>
        <!-- Top navigation -->
        <div class="topnav">
            <!-- Centered link -->
            <!--                <div class="topnav-centered">
                                                <a href="main.php#home">Home</a>
                                            </div>-->
            <!-- Left-aligned links (default) -->
            <a href="form_equipment.php#eqpt" class="link">Equipment</a>
            <a href="form_hardware.php#hw" class="link">Hardware</a>
            <a href="form_daq.php#daq" class="link">DAQ</a>
            <a href="form_power.php#pwr" class="link">P Supply</a>
            <a href="form_design.php#dsg" class="link">Design</a>
            <a href="form_process.php#pcs" class="link">Process</a>
            <a href="form_test.php#elc" class="link">Elec Test</a>
            <!-- Right-aligned links -->
            <div class="topnav-right">
                <a href="main.php#home" class="link active">Home</a>
                <a href="parameter.php#parameter" class="link">Parameter</a>
            </div>
        </div>
    </body>
</html>