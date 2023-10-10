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

        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'>

        <script src="js/bootstrap.js"></script>

        <style>
            /* Style the buttons */
            .link {
                border: none;
                outline: none;
                padding: 10px 16px;
                background-color: gray;
                cursor: pointer;
                font-size: 18px;
            }

            /* Style the active class, and buttons on mouse-over */
            .active, .link:hover {
                background-color: #666;
                color: white;
            }
            
            .dropbtn {
                background-color: #04AA6D;
                color: white;
                padding: 16px;
                font-size: 16px;
                border: none;
            }

            .dropdown {
                position: absolute;
                top: 0px;
                display: inline-block;
            }

            .dropdown-content {
                display: none;
                position: absolute;
                background-color: #f1f1f1;
                min-width: 160px;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                z-index: 1;
            }

            .dropdown-content a {
                color: black;
                padding: 12px 16px;
                text-decoration: none;
                display: block;
            }

            .dropdown-content a:hover {
                background-color: #ddd;
            }

            .dropdown:hover .dropdown-content {
                display: block;
            }

            .dropdown:hover .dropbtn {
                background-color: #3e8e41;
            }
        </style>
        
        <script type="text/javascript">
            
        </script>
        
    </head>
    <body>
        <!-- Top navigation -->
        <div class="topnav">
            <a href="form_equipment.php#eqpt" class="link">Equipment</a>
            <a href="form_hardware.php#hw" class="link">Hardware</a>
            <a href="form_daq.php#daq" class="link">DAQ</a>
            <a href="form_power.php#pwr" class="link">P Supply</a>
            <a href="form_design.php#dsg" class="link">Design</a>
            <a href="form_process.php#pcs" class="link">Process</a>
            <a href="form_test.php#elc" class="link">Elec Test</a>

            <div class="topnav-centered     ">
                <a href="main.php#home" class="link active">Home</a>
            </div>
            <div class="topnav-right">
                <a href="parameter.php#parameter" class="link active">Parameter</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Form</button>
            <div class="dropdown-content">
                <a href="form_equipment.php#eqpt" class="link">Equipment</a>
                <a href="form_hardware.php#hw" class="link">Hardware</a>
                <a href="form_daq.php#daq" class="link">DAQ</a>
                <a href="form_power.php#pwr" class="link">P Supply</a>
                <a href="form_design.php#dsg" class="link">Design</a>
                <a href="form_process.php#pcs" class="link">Process</a>
                <a href="form_test.php#elc" class="link">Elec Test</a>
            </div>
        </div>
    </body>
</html>