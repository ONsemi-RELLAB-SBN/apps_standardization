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
        <title>Standardization Survey</title>
        <meta name="author" content="Ayep" />
        <link rel="shortcut icon" href="image/dribble.ico">
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/normalize.css" />
        <link rel="stylesheet" type="text/css" href="css/component1.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'>
        <link rel="stylesheet" type="text/css" href="css/select2.css"/>
        <script src="js/select2.min.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/modernizr-2.6.2.min.js"></script>

        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="css/readonly.css" />
        <link rel="stylesheet" type="text/css" href="css/font-awesome.css" />
        <link rel="stylesheet" type="text/css" href="css/layout.css">
        <link rel="stylesheet" type="text/css" href="css/elements.css">
        <link rel="stylesheet" type="text/css" href="css/sweetalert.css">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/css3-mediaqueries.js"></script> 
        <script src="js/scripts.js"></script>
        <script src="js/jquery.blockUI.js"></script>
        <script src="js/sweetalert.min.js"></script>
        <script src="js/polyfills.js"></script>
        <script src="js/demo1.js"></script>

        <style>
            
        </style>
        <script type="text/javascript">
            /* When the user clicks on the button, 
             toggle between hiding and showing the dropdown content */
            function myFunction() {
                document.getElementById("myDropdown").classList.toggle("show");
            }

            // Close the dropdown if the user clicks outside of it
            window.onclick = function (event) {
                if (!event.target.matches('.dropbtn')) {
                    var dropdowns = document.getElementsByClassName("dropdown-content");
                    var i;
                    for (i = 0; i < dropdowns.length; i++) {
                        var openDropdown = dropdowns[i];
                        if (openDropdown.classList.contains('show')) {
                            openDropdown.classList.remove('show');
                        }
                    }
                }
            };
        </script>
    </head>
    <body>
        <!-- Top navigation -->
        <div class="topnav">
            <!-- Centered link -->
            <div class="topnav-centered">
                <a href="main.php#home">Home</a>
            </div>
            <!-- Left-aligned links (default) -->
            <a href="form_equipment.php#eqp" class="active">Form Equipment</a>
            <a href="form_hardware.php#hw">Form Hardware</a>
            <!-- Right-aligned links -->
            <div class="topnav-right">
                <a href="parameter.php#parameter">Parameter</a>
            </div>
        </div>
        <div class="col-lg-12">
            <h1>Hardware Survey Form</h1>
            // SINI TEMPAT KITA NK DESIGN FORM KITA
        </div>
        <div class="component">
            <!-- Start Nav Structure -->
            <button class="cn-button" id="cn-button">+</button>
            <div class="cn-wrapper" id="cn-wrapper">
                <ul>
                    <li><a href="parameter.php#"><span class="icon-picture"></span></a></li>
                    <li><a href="form_equipment.php#"><span class="icon-headphones"></span></a></li>
                    <li><a href="main.php#"><span class="icon-facetime-video"></span></a></li>
                    <li><a href="form_hardware.php#"><span class="icon-home"></span></a></li>
                    <li><a href="page005.php#"><span class="icon-envelope-alt"></span></a></li>
                </ul>
            </div>
            <div id="cn-overlay" class="cn-overlay"></div>
            <!-- End Nav Structure -->
        </div>
        <!-- For the demo ad only -->   
        <script src="http://tympanus.net/codrops/adpacks/demoad.js"></script>
    </body>
</html>