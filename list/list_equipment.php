<?php
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
include '../template/list.php';
include '../template/form.php';
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Equipment List</title>

        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css"/>
        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css"/>
        <link rel="stylesheet" id="font-awesome-style-css" href="http://phpflow.com/code/css/bootstrap3.min.css" type="text/css" media="all">
        <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">

        <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
        <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
        <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>

        <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
        <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.colVis.min.js"></script>
        
        <link rel="stylesheet" href="https://cdn.datatables.net/select/1.7.0/css/select.dataTables.min.css"/>

        <script src="https://cdn.datatables.net/select/1.7.0/js/dataTables.select.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>

        <style>
            .body {
                font-size: .7rem;
            }
            .table_list{
                position: relative; 
                width: 100%;
                margin: 0 auto;
                padding: 0 20px;
                box-sizing: border-box;
            }
        </style>

        <script type="text/javascript">
            jQuery(document).ready(function ($) {

                var table = new DataTable('#example', {
                    ajax: 'dao_equipment.php',
                    processing: true,
                    serverSide: true,
                    dom: 'Blfrtip',
                    pageLength: 25,
                    buttons: [
                        {
                            extend: 'copyHtml5',
                            split: ['csvHtml5', 'pdfHtml5', 'excelHtml5'],
                            exportOptions: {
                                columns: ':visible'
                            }
                        },
                        'colvis'
                    ],
                    lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "All"]],
                });
            });
        </script>

    </head>
    <body>
        <!--        <div role="navigation" class="navbar navbar-default navbar-static-top">
                    <div class="container">
                        <div class="navbar-header">
                            <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a href="#" class="navbar-brand">Phpflow.com</a>
                        </div>
                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="#">Home</a></li>
                            </ul>
                        </div>/.nav-collapse 
                    </div>
                </div>-->

        <div class="table_list" style="overflow-x:auto;">
            <div class="row">&nbsp;</div>
            <div class="row">&nbsp;</div>
            <div class="row">
                <h2 class="u-pull-left" style="border-left:none">Equipment [Chamber] List</h2>
            </div>
            <table id="example" class="u-full-width" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <!--<th style="text-align:center"><b>No</b></th>-->
                        <th><b>Equipment</b></th>
                        <th><b>Location</b></th>
                        <th><b>Product Group</b></th>
                        <th><b>Category</b></th>
                        <th>Action</th>
                        <th><b>Lab Manager</b></th>
                        <th><b>Usage</b></th>
                        <th><b>Rel Test</b></th>
                        <th><b>Zone</b></th>
                        <th><b>Manufacturer</b></th>
                        <th><b>Model</b></th>
                        <th><b>Mfg Date</b></th>
                        <th><b>Asset No</b></th>
                        <th><b>New/Transfer?</b></th>
                        <th><b>Location</b></th>
                        <th><b>Voltage Rating</b></th>
                        <th><b>Control Accuracy</b></th>
                        <th><b>Current Rating</b></th>
                        <th><b>Power Rating</b></th>
                        <th><b>Min Timer Setting</b></th>
                        <th><b>Max Timer Setting</b></th>
                        <th><b>Min Temperature</b></th>
                        <th><b>Max Temperature</b></th>
                        <th><b>Minimum RH</b></th>
                        <th><b>Maximum RH</b></th>
                        <th><b>Minimum Pressure</b></th>
                        <th><b>Maximum Pressure</b></th>
                        <th><b>Heat Dissipation</b></th>
                        <th><b>Temperature Fluctuation</b></th>
                        <th><b>Temperature Uniformity</b></th>
                        <th><b>Humid Fluctuation</b></th>
                        <th><b>External Dimension (W)</b></th>
                        <th><b>External Dimension (D)</b></th>
                        <th><b>External Dimension (H)</b></th>
                        <th><b>Internal Dimension (W)</b></th>
                        <th><b>Internal Dimension (D)</b></th>
                        <th><b>Internal Dimension (H)</b></th>
                        <th><b>Diameter</b></th>
                        <th><b>No of Interior Zone</b></th>
                        <th><b>Rack Dimension (W)</b></th>
                        <th><b>Rack Dimension (D)</b></th>
                        <th><b>Rack Dimension (H)</b></th>
                        <th><b>Internal Volume</b></th>
                        <th><b>Board Orientation</b></th>
                        <th><b>Rack Material</b></th>
                        <th><b>Rack to Slot Pitch</b></th>
                        <th><b>Rack to Slot Width</b></th>
                        <th><b>Weight</b></th>
                        <th><b>No of Motherboard Slot</b></th>
                        <th><b>Max Power Supply per Slot</b></th>
                        <th><b>Max Power Supply per Equipment</b></th>
                        <th><b>Airflow</b></th>
                        <th><b>Temperature Protection 1</b></th>
                        <th><b>Temperature Protection 2</b></th>
                        <th><b>Temperature Protection 3</b></th>
                        <th><b>Pressure Switch</b></th>
                        <th><b>Safety Valve</b></th>
                        <th><b>Smoke Alarm</b></th>
                        <th><b>EMO Button</b></th>
                        <th><b>Voltage</b></th>
                        <th><b>Current</b></th>
                        <th><b>Phase</b></th>
                        <th><b>Exhaust</b></th>
                        <th><b>Nitrogen Gas</b></th>
                        <th><b>Oxygen Level Detector</b></th>
                        <th><b>Liquid Nitrogen</b></th>
                        <th><b>Chilled Water</b></th>
                        <th><b>Di Water</b></th>
                        <th><b>Water Topup System</b></th>
                        <th><b>CDA</b></th>
                        <th><b>LAN</b></th>
                        <th><b>DAQ</b></th>
                        <th><b>Internal Configuration</b></th>
                        <th><b>Banana Jack Hole</b></th>
                        <th><b>Connector Voltage Rating</b></th>
                        <th><b>Connector Current Rating</b></th>
                        <th><b>Connector Temperature Rating</b></th>
                        <th><b>No pins</b></th>
                        <th><b>Pin pitch</b></th>
                        <th><b>No Wire Connector Rack</b></th>
                        <th><b>Wire Voltage Rating</b></th>
                        <th><b>Wire Current Rating</b></th>
                        <th><b>Wire Temperature Rating</b></th>
                        <th><b>External Configuration</b></th>
                        <th><b>Interface Voltage Rating</b></th>
                        <th><b>Interface Current Rating</b></th>
                        <!--<th style="text-align:center"><b>Action</b></th>-->
<!--                        <th>Dedicate Usage</th>     
                        <th>Equipment ID</th>
                        <th>Lab Location</th>
                        <th>Product Group</th>
                        <th>Category</th>
                        <th>Champion</th>
                        <th>Dedicate Usage</th>
                        <th>Rel Test</th>
                        <th>Zone</th>
                        <th>Manufacturer</th>
                        <th>Model</th>
                        <th>Manufacturing Date</th>
                        <th>Asset Number</th>
                        <th>New / Transfer ?</th>
                        <th>Location</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Equipment ID</th>
                        <th>Lab Location</th>
                        <th>Product Group</th>
                        <th>Category</th>
                        <th>Lab Manager</th>
                        <th>Dedicate Usage</th>
                        <th>Rel Test</th>
                        <th>Zone</th>
                        <th>Manufacturer</th>
                        <th>Model</th>
                        <th>Manufacturing Date</th>
                        <th>Asset Number</th>
                        <th>New / Transfer ?</th>
                        <th>Location</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </body>
</html>