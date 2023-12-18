<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
include 'class/db.php';
include 'class/ldap.php';
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

        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/menu.css"/>
        <link rel="stylesheet" type="text/css" href="css/normalize.css">
        <link rel="stylesheet" type="text/css" href="css/skeleton.css">
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
                <h7 class="h11"><li><a href="main_view.php">            <i class='bx bxs-home-alt-2 bx-fw' style='color:#ffffff' >      </i>HOME</a></li></h7>
                <h7 class="h11"><li><a href="form_view_equipment.php">  <i class='bx bx-wrench bx-fw' style='color:#ffffff' >           </i>Equipment</a></li></h7>
                <h7 class="h11"><li><a href="form_view_hardware.php">   <i class='bx bxl-steam bx-fw' style='color:#ffffff' >           </i>Hardware</a></li></h7>
                <h7 class="h11"><li><a href="form_view_daq.php">        <i class='bx bx-desktop bx-fw' style='color:#ffffff' >          </i>DAQ</a></li></h7>
                <h7 class="h11"><li><a href="form_view_power.php">      <i class='bx bxs-battery-charging bx-fw' style='color:#ffffff'> </i>Power Supply</a></li></h7>
                <h7 class="h11"><li><a href="form_view_design.php">     <i class='bx bxl-blender bx-fw' style='color:#ffffff'>          </i>Design</a></li></h7>
                <h7 class="h11"><li><a href="form_view_process.php">    <i class='bx bx-git-compare bx-fw' style='color:#ffffff'>       </i>Process</a></li></h7>
                <h7 class="h11"><li><a href="form_view_test.php">       <i class='bx bxl-messenger bx-fw' style='color:#ffffff'>        </i>Elec Test</a></li></h7>
                <h7 class="h11"><li><a href="logout_click.php">         <i class='bx bx-log-out bx-fw' style='color:#ffffff' >          </i>LOGOUT</a></li></h7>
            </ul>
        </nav>
        <script src="js/jquery-3.7.0.js"></script>
        <script>
            
        </script>
    </body>
</html>