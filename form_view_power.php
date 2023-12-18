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
                        url: 'list/dao_power_supply.php',
                        type: 'POST'
                    },
                    buttons: [
                        {
                            extend: 'copyHtml5',
                            title: 'Power Supply Listing from Standardization Platform',
                            sheetName: 'PS'
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
                        {"visible": false, "targets": 6 },
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
                        {"visible": false, "targets": 28 }
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
                <h5 class="u-pull-left" style="border-left:none;padding-left:40px;">Power Supply List</h5>
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
                        <th><b>Voltage Rating</b></th>
                        <th><b>Current Rating</b></th>
                        <th><b>Maximum Power</b></th>
                        <th><b>Number of voltage display digits</b></th>
                        <th><b>Number of current display digits</b></th>
                        <th><b>Overvoltage protection</b></th>
                        <th><b>Overcurrent protection</b></th>
                        <th><b>Dimensions (W)</b></th>
                        <th><b>Dimensions (D)</b></th>
                        <th><b>Dimensions (H)</b></th>
                        <th><b>Weight (kg)</b></th>
                        <th><b>Minimum Voltage</b></th>
                        <th><b>Maximum Voltage</b></th>
                        <th><b>Remote Operation Capability</b></th>
                        <th><b>Output voltage monitor</b></th>
                        <th><b>Output current monitor </b></th>
                        <th><b>Power Supply to Equipment Interface</b></th>
                        <th><b>LAN port</b></th>
                        <th><b>GPIB interface</b></th>
                        <th><b>Other interface ports</b></th>
                        <th><b>Input voltage (facilities)</b></th>
                        <th><b>Number of output channels</b></th>
                        <th><b>PS ID</b></th>
                    </tr>
                </thead>
            </table>
        </div>
    </body>
</html>