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

        <link rel="stylesheet" href="../css/jquery.dataTables.min.css"/>
        <link rel="stylesheet" href="../css/buttons.dataTables.min.css"/>
        <link rel="stylesheet" href="../css/bootstrap3.min.css" id="font-awesome-style-css" type="text/css" media="all">
        <link rel="stylesheet" href="../css/jquery.dataTables.css">
        <link rel="stylesheet" href="../css/jquery.dataTables.min.css"/>
        <link rel="stylesheet" href="../css/select.dataTables.min.css"/>

        <script src="../js/jquery-1.8.2.min.js" type="text/javascript" charset="utf8" ></script>
        <script src="../js/jquery.dataTables.min.js" type="text/javascript" charset="utf8" ></script>
        
        <script src="../js/jquery-3.7.0.js" ></script>
        <script src="../js/jquery.dataTables.min.js"></script>
        <script src="../js/dataTables.buttons.min.js"></script>
        <script src="../js/jszip.min.js"></script>
        <script src="../js/pdfmake.min.js"></script>
        <script src="../js/vfs_fonts.js"></script>
        <script src="../js/buttons.html5.min.js"></script>
        <script src="../js/buttons.colVis.min.js"></script>

        <script src="../js/dataTables.select.min.js"></script>
        <script src="../js/buttons.print.min.js"></script>

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
                    ajax: { 
                        url: 'dao_power_supply.php',
                        type: 'POST'
                    },
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
                    select:true,
                    lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "All"]],
                    columnDefs: [
                        {targets: 29,
                            render: function (data, type, row, meta) {
                                return '<a href="../hardware/view.php?view='+ row[28] +'" title="View Record" data-toggle="tooltip"><i class=\'bx bx-search-alt bx-fw\'></i> VIEW </a>\n\
                                        <a href="../hardware/edit.php?edit='+ row[28] +'" title="Update Record" data-toggle="tooltip"><i class=\'bx bxs-pencil bx-fw\' ></i> EDIT </a>\n\
                                        <a href="../hardware/delete.php?delete='+ row[28] +'" title="Delete Record" data-toggle="tooltip" onclick="return confirm(\'Are You Sure ?\')"><i class=\'bx bxs-trash bx-fw\' ></i> DELETE </a>\n\
                                        <a href="../hardware/copy.php?edit='+ row[28] +'" title="Replicate Record" data-toggle="tooltip"><i class=\'bx bx-copy bx-fw\'></i></i> COPY </a>';
                            }
                        }
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
                <h2 class="u-pull-left" style="border-left:none">Hardware List</h2>
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