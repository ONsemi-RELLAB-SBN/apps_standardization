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
                        url: 'dao_hardware.php',
                        type: 'POST'
                    },
                    pageLength: 25,
                    buttons: [
                        {
                            extend: 'copyHtml5',
                            split: ['csvHtml5', 'excelHtml5'],
                            exportOptions: {
                                columns: ':visible'
                            }
                        },
                        'colvis'
                    ],
                    select:true,
                    lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "All"]],
                    columnDefs: [
                        {targets: 37,
                            render: function (data, type, row, meta) {
                                return '<a href="../hardware/view.php?view='+ row[36] +'" title="View Record" data-toggle="tooltip"><i class=\'bx bx-search-alt bx-fw\'></i> VIEW </a>\n\
                                        <a href="../hardware/edit.php?edit='+ row[36] +'" title="Update Record" data-toggle="tooltip"><i class=\'bx bxs-pencil bx-fw\' ></i> EDIT </a>\n\
                                        <a href="../hardware/delete.php?delete='+ row[36] +'" title="Delete Record" data-toggle="tooltip" onclick="return confirm(\'Are You Sure ?\')"><i class=\'bx bxs-trash bx-fw\' ></i> DELETE </a>\n\
                                        <a href="../hardware/copy.php?edit='+ row[36] +'" title="Replicate Record" data-toggle="tooltip"><i class=\'bx bx-copy bx-fw\'></i></i> COPY </a>';
                            }
                        },
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
                        {"visible": false, "targets": 35 },
                        {"visible": false, "targets": 36 }  
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
                        <th><b>Hardware Type</b></th>
                        <th><b>Manufacturer</b></th>
                        <th><b>Assembly Number</b></th>
                        <th><b>Voltage Rating</b></th>
                        <th><b>Current Rating</b></th>
                        <th><b>Temperature Rating</b></th>
                        <th><b>Support Stress</b></th>
                        <th><b>DAQ Monitoring</b></th>
                        <th><b>PCB Material</b></th>
                        <th><b>Dimension L</b></th>
                        <th><b>Dimension W</b></th>
                        <th><b>Dimension T</b></th>
                        <th><b>No Layer</b></th>
                        <th><b>Frame Material</b></th>
                        <th><b>Board Coating</b></th>
                        <th><b>Universal / Dedicated</b></th>
                        <th><b>Socket Type</b></th>
                        <th><b>Motherboard Socket Quantity</b></th>
                        <th><b>Motherboard Socket Pin Quantity</b></th>
                        <th><b>Motherboard Socket Pin Pitch</b></th>
                        <th><b>Supported Card</b></th>
                        <th><b>Load Card Maximum Quantity</b></th>
                        <th><b>Load Card Pin Quantity</b></th>
                        <th><b>Load Card Pin Pitch</b></th>
                        <th><b>Program Card Maximum Quantity</b></th>
                        <th><b>Program Card Pin Quantity</b></th>
                        <th><b>Program Card Pin Pitch</b></th>
                        <th><b>Connector Type</b></th>
                        <th><b>No Pin</b></th>
                        <th><b>Pin Pitch</b></th>
                        <th><b>Edgefinger Thickness</b></th>
                        <th><b>Maximum DUT Quantity per Motherboard</b></th>
                        <th><b>Hardware ID</b></th>
                        <th>Action</th>
                </thead>
            </table>
        </div>
    </body>
</html>