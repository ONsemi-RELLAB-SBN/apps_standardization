<?php
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

include 'form_template_view.php';
include 'class/get_parameter.php';
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <link rel='stylesheet' type="text/css" href='css/jquery.dataTables.min.css'>
        <link rel='stylesheet' type="text/css" href='css/buttons.dataTables.min.css'>
        <link rel="stylesheet" href="css/bootstrap3.min.css" id="font-awesome-style-css" type="text/css" media="all">
        <link rel="stylesheet" href="css/jquery.dataTables.css">
        <link rel="stylesheet" href="css/select.dataTables.min.css"/>
        
        <script src="js/jquery-1.8.2.min.js" type="text/javascript" charset="utf8" ></script>
        <script src="js/jquery-3.7.0.js"></script>
        <script src="js/jszip.min.js"></script>
        <script src="js/pdfmake.min.js"></script>
        <script src="js/vfs_fonts.js"></script>
        
        <script src="js/jquery.dataTables.min.js"></script>
        <script src="js/dataTables.buttons.min.js"></script>
        <script src="js/buttons.html5.min.js"></script>
        <script src="js/buttons.colVis.min.js"></script>
        <script src="js/dataTables.select.min.js"></script>
        
        <style>
            
        </style>

        <script type="text/javascript">
            jQuery(document).ready(function ($) {

                var table = new DataTable('#example', {
                    processing: true,
                    serverSide: true,
                    dom: 'Blfrtip',
                    select:true,
                    ajax: { 
                        url: 'list/dao_equipment.php',
                        type: 'POST'
                    },
                    buttons: [
                        {
                            extend: 'copyHtml5',
                            title: 'Equipment Listing from Standardization Platform',
                            sheetName: 'EQ'
                        },
                        {
                            extend: 'colvis',
                            action: function ( e, dt, node, config ) {
                                $.fn.dataTable.ext.buttons.collection.action.call(this, e, dt, node, config);
                            },
                            prefixButtons: [
                                {
                                    extend: 'colvisGroup',
                                    text: 'Show all',
                                    show: ':hidden'
                                },
                                {
                                    extend: 'colvisGroup',
                                    text: 'Hide All',
                                    hide: ':visible'
                                }  
                            ],
                            collectionLayout: 'fixed columns',
                            collectionTitle: 'Column Visibility Control',
                            columnText: function ( dt, idx, title ) {
                                return (idx+1)+': '+title;
                            }
                        }
                    ],
                    pageLength: 25,
                    lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "All"]],
                    columnDefs: [
                        {"visible": false, "targets": 3 },
                        {"visible": false, "targets": 5 },
                        {"visible": false, "targets": 7 },
                        {"visible": false, "targets": 10 },
                        {"visible": false, "targets": 11 },
                        {"visible": false, "targets": 12 },
                        {"visible": false, "targets": 13 },
                        {"visible": false, "targets": 14 },
                        {"visible": false, "targets": 15 },
                        {"visible": false, "targets": 16 },
                        {"visible": false, "targets": 17 },
                        {"visible": false, "targets": 18 },
                        {"visible": false, "targets": 19 },
                        {"visible": false, "targets": 20 },
                        {"visible": false, "targets": 21 },
                        {"visible": false, "targets": 22 },
                        {"visible": false, "targets": 23 },
                        {"visible": false, "targets": 24 },
                        {"visible": false, "targets": 23 },
                        {"visible": false, "targets": 24 },
                        {"visible": false, "targets": 25 },
                        {"visible": false, "targets": 26 },
                        {"visible": false, "targets": 27 },
                        {"visible": false, "targets": 28 },
                        {"visible": false, "targets": 29 },
                        {"visible": false, "targets": 30 },
                        {"visible": false, "targets": 31 },
                        {"visible": false, "targets": 32 },
                        {"visible": false, "targets": 33 },
                        {"visible": false, "targets": 34 },
                        {"visible": false, "targets": 35 },
                        {"visible": false, "targets": 36 },
                        {"visible": false, "targets": 37 },
                        {"visible": false, "targets": 38 },
                        {"visible": false, "targets": 39 },
                        {"visible": false, "targets": 40 },
                        {"visible": false, "targets": 41 },
                        {"visible": false, "targets": 42 },
                        {"visible": false, "targets": 43 },
                        {"visible": false, "targets": 44 },
                        {"visible": false, "targets": 45 },
                        {"visible": false, "targets": 46 },
                        {"visible": false, "targets": 47 },
                        {"visible": false, "targets": 48 },
                        {"visible": false, "targets": 49 },
                        {"visible": false, "targets": 50 },
                        {"visible": false, "targets": 51 },
                        {"visible": false, "targets": 52 },
                        {"visible": false, "targets": 53 },
                        {"visible": false, "targets": 54 },
                        {"visible": false, "targets": 55 },
                        {"visible": false, "targets": 56 },
                        {"visible": false, "targets": 57 },
                        {"visible": false, "targets": 58 },
                        {"visible": false, "targets": 59 },
                        {"visible": false, "targets": 60 },
                        {"visible": false, "targets": 61 },
                        {"visible": false, "targets": 62 },
                        {"visible": false, "targets": 63 },
                        {"visible": false, "targets": 64 },
                        {"visible": false, "targets": 65 },
                        {"visible": false, "targets": 66 },
                        {"visible": false, "targets": 67 },
                        {"visible": false, "targets": 68 },
                        {"visible": false, "targets": 69 },
                        {"visible": false, "targets": 70 },
                        {"visible": false, "targets": 71 },
                        {"visible": false, "targets": 72 },
                        {"visible": false, "targets": 73 },
                        {"visible": false, "targets": 74 },
                        {"visible": false, "targets": 75 },
                        {"visible": false, "targets": 76 },
                        {"visible": false, "targets": 77 },
                        {"visible": false, "targets": 78 },
                        {"visible": false, "targets": 79 },
                        {"visible": false, "targets": 80 },
                        {"visible": false, "targets": 81 },
                        {"visible": false, "targets": 82 },
                        {"visible": false, "targets": 83 },
                        {"visible": false, "targets": 84 },
                        {"visible": false, "targets": 85 }
                    ]
                });
            });
        </script>

    </head>
    <body>
        <div class="table_list" style="overflow-x:auto;">
            <div class="row">&nbsp;</div>
            <div class="row">&nbsp;</div>
            <div class="row">
                <h5 class="u-pull-left" style="border-left:none;padding-left:40px;">Equipment List</h5>
            </div>
            <table id="example" class="u-full-width" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th><b>Equipment</b></th>
                        <th><b>Location</b></th>
                        <th><b>Product Group</b></th>
                        <th><b>Category</b></th>
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
                        <th style="text-align:center"><b>ID</b></th>
                    </tr>
                </thead>
            </table>
        </div>
    </body>
</html>