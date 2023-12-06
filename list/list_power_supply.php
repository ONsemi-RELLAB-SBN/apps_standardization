<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Power Supply List</title>

        <?php 
        include '../template/list.php';
        include '../template/form.php';
        ?>

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
                    processing: true,
                    serverSide: true,
                    dom: 'Blfrtip',
                    select:true,
                    ajax: { 
                        url: 'dao_power_supply.php',
                        type: 'POST'
                    },
                    buttons: [
                        {
                            extend: 'copyHtml5',
                            split: ['csvHtml5', 'excelHtml5'],
                            exportOptions: {
                                columns: ':visible'
                            }
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
                            ]
                        }
                    ],
                    pageLength: 25,
                    lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "All"]],
                    columnDefs: [
                        {targets: 29,
                            render: function (data, type, row, meta) {
                                return '<a href="../hardware/view.php?view='+ row[28] +'" title="View Record" data-toggle="tooltip"><i class=\'bx bx-search-alt bx-fw\'></i> VIEW </a>\n\
                                        <a href="../hardware/edit.php?edit='+ row[28] +'" title="Update Record" data-toggle="tooltip"><i class=\'bx bxs-pencil bx-fw\' ></i> EDIT </a>\n\
                                        <a href="../hardware/delete.php?delete='+ row[28] +'" title="Delete Record" data-toggle="tooltip" onclick="return confirm(\'Are You Sure ?\')"><i class=\'bx bxs-trash bx-fw\' ></i> DELETE </a>\n\
                                        <a href="../hardware/copy.php?edit='+ row[28] +'" title="Replicate Record" data-toggle="tooltip"><i class=\'bx bx-copy bx-fw\'></i></i> COPY </a>';
                            }
                        },
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
                <h5 class="u-pull-left" style="border-left:none">Power Supply List</h5>
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
                        <th>Action</th>
                </thead>
            </table>
        </div>
    </body>
</html>