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
                        url: 'list/dao_daq.php',
                        type: 'POST'
                    },
                    buttons: [
                        {
                            extend: 'copyHtml5',
                            title: 'DAQ Listing from Standardization Platform',
                            sheetName: 'DAQ'
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
                        {"visible": false, "targets": 2 },
                        {"visible": false, "targets": 7 },
                        {"visible": false, "targets": 8 },
                        {"visible": false, "targets": 9 },
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
                        {"visible": false, "targets": 35 }
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
                <h5 class="u-pull-left" style="border-left:none;padding-left:40px;">DAQ List</h5>
            </div>
            <table id="example" class="u-full-width" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th><b>Location</b></th>
                        <th><b>Product Group</b></th>
                        <th><b>Category</b></th>
                        <th><b>Lab Manager</b></th>
                        <th><b>Manufacturer</b></th>
                        <th><b>Model</b></th>
                        <th><b>DAQ ID</b></th>
                        <th><b>Temperature Channel</b></th>
                        <th><b>Voltage Channel</b></th>
                        <th><b>Leakage Channel</b></th>
                        <th><b>Maximum Voltage Measurement</b></th>
                        <th><b>Minimum Voltage Measurement</b></th>
                        <th><b>Maximum Leakage Measurement</b></th>
                        <th><b>Minimum Leakage Measurement</b></th>
                        <th><b>Maximum Temperature Measurement</b></th>
                        <th><b>Minimum Temperature Measurement</b></th>
                        <th><b>Voltage Drop</b></th>
                        <th><b>Board Insert Check</b></th>
                        <th><b>Measurement Prior Start The Test</b></th>
                        <th><b>Scan Time</b></th>
                        <th><b>Leakage Measurement Resolution</b></th>
                        <th><b>Leakage Measurement Accuracy</b></th>
                        <th><b>Voltage Measurement Resolution</b></th>
                        <th><b>Offline software to review historical data and plotting with data analysis</b></th>
                        <th><b>Measurement type for hardware design</b></th>
                        <th><b>Number of analog inputs (single ended)</b></th>
                        <th><b>Number of analog inputs (differential)</b></th>
                        <th><b>Resolution</b></th>
                        <th><b>Sampling frequency</b></th>
                        <th><b>Supported Equipment</b></th>
                        <th><b>Hardware for resistance measu</b></th>
                        <th><b>Hardware for voltage measurement</b></th>
                        <th><b>Hardware for temperature measurement</b></th>
                        <th><b>DAQ to Equipment Interface</b></th>
                        <th><b>DAQ to Power Supply Interface</b></th>
                        <th><b>DAQ ID</b></th>
                    </tr>
                </thead>
            </table>
        </div>
    </body>
</html>