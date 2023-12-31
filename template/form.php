<?php
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
include '../class/db.php';
include '../class/ldap.php';
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>STANDARDIZATION FORM</title>
        <meta name="author" content="Ayep" />
        <link rel="shortcut icon" href="../image/logo/onsemi_logo.ico">

        <link href="../css/font01/Varela-Round.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="../css/w3.css">
        <link rel="stylesheet" href="../css/menu.css"/>
        <link rel="stylesheet" type="text/css" href="../css/normalize.css">
        <link rel="stylesheet" type="text/css" href="../css/skeleton.css">
        <link rel='stylesheet' type="text/css" href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'>
    </head>
    <body>
        <input type="checkbox" id="nav-control" class="nav-control" >
        <label for="nav-control" class="toggle-button">
            <div class="wolverine">
                <div class="claws"></div> <span>menu</span>
            </div>
        </label>
        <nav class="navigation">
            <ul>
                <h7 class="h11"><li><a href="../main.php">                      <i class='bx bxs-home-alt-2 bx-fw' style='color:#ffffff' ></i> HOME</a></li></h7>
                <h7 class="h11"><li><a href="../list/list_equipment.php">       <i class='bx bx-wrench bx-fw' style='color:#ffffff' ></i>Equipment</a></li></h7>
                <h7 class="h11"><li><a href="../list/list_hardware.php">        <i class='bx bxl-steam bx-fw' style='color:#ffffff' ></i>Hardware</a></li></h7>
                <h7 class="h11"><li><a href="../list/list_daq.php">             <i class='bx bx-desktop bx-fw' style='color:#ffffff' ></i>DAQ</a></li></h7>
                <h7 class="h11"><li><a href="../list/list_power_supply.php">    <i class='bx bxs-battery-charging bx-fw' style='color:#ffffff'></i>Power Supply</a></li></h7>
<!--                <h7 class="h11"><li><a href="../equipment/add.php">         <i class='bx bx-wrench bx-fw' style='color:#ffffff' ></i>Equipment</a></li></h7>
                <h7 class="h11"><li><a href="../hardware/add.php">          <i class='bx bxl-steam bx-fw' style='color:#ffffff' ></i>Hardware</a></li></h7>
                <h7 class="h11"><li><a href="../daq/add.php">               <i class='bx bx-desktop bx-fw' style='color:#ffffff' ></i>DAQ</a></li></h7>
                <h7 class="h11"><li><a href="../power/add.php">             <i class='bx bxs-battery-charging bx-fw' style='color:#ffffff'></i>Power Supply</a></li></h7>-->
                <h7 class="h11"><li id="try1"><a href="../design/add.php">  <i class='bx bxl-blender bx-fw' style='color:#ffffff'></i>Design</a></li></h7>
                <h7 class="h11"><li id="try2"><a href="../process/add.php"> <i class='bx bx-git-compare bx-fw' style='color:#ffffff'></i>Process</a></li></h7>
                <h7 class="h11"><li id="try3"><a href="../test/add.php">    <i class='bx bxl-messenger bx-fw' style='color:#ffffff'></i>Elec Test</a></li></h7>
                <h7 class="h11"><li id="try4"><a href="../query.php">       <i class='bx bx-search-alt bx-fw' style='color:#ffffff'></i></i>Query</a></li></h7>
                <h7 class="h11"><li><a href="../dashboard/list_graph.php">  <i class='bx bxs-bar-chart-alt-2 bx-fw' style='color:#ffffff'></i>Summary</a></li></h7>
                <h7 class="h11"><li><a href="../parameter/parameter.php">   <i class='bx bxs-cog bx-fw' style='color:#ffffff' ></i>Parameter</a></li></h7>
                <h7 class="h11"><li><a href="../logout_click.php">          <i class='bx bx-log-out bx-fw' style='color:#ffffff' ></i>LOGOUT</a></li></h7>
            </ul>
        </nav>
        <script>
            document.getElementById("try1").onclick = function (e) {
                e.preventDefault(); //Prevent the default behavior 
                alert('DESIGN PAGE FORM UNDER DEVELOPMENT!');
            };
            document.getElementById("try2").onclick = function (e) {
                e.preventDefault(); //Prevent the default behavior 
                alert('PROCESS FORM UNDER DEVELOPMENT!');
            };
            document.getElementById("try3").onclick = function (e) {
                e.preventDefault(); //Prevent the default behavior 
                alert('ELECTRICAL TEST FORM UNDER DEVELOPMENT!');
            };
            document.getElementById("try4").onclick = function (e) {
                e.preventDefault(); //Prevent the default behavior 
                alert('QUERY PAGE FORM UNDER DEVELOPMENT!');
            };
        </script>
    </body>
</html>