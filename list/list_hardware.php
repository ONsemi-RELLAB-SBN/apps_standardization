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
        <title>Hardware List</title>

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
            
            thead input {
                width: 100%;
            }
            
            tfoot input {
                width: 100%;
                padding: 3px;
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
                        url: 'dao_hardware.php',
                        type: 'POST'
                    },
                    initComplete: function () {
                    this.api()
                        .columns()
                        .every(function () {
                            let column = this;
                            let title = column.footer().textContent;

                            // Create input element
                            let input = document.createElement('input');
                            input.placeholder = title;
                            column.footer().replaceChildren(input);

                            // Event listener for user input
                            input.addEventListener('keyup', () => {
                                if (column.search() !== this.value) {
                                    column.search(input.value).draw();
                                }
                            });
                        });
                    },
                    buttons: [
                        {
                            extend: 'copyHtml5',
                            split: ['csvHtml5', 'excelHtml5'],
                            exportOptions: {
                                columns: ':visible'
                            },
                            title: 'Hardware Listing from Standardization Platform',
                            sheetName: 'HW'
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
                    pageLength: 10,
                    lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "All"]],
                    columnDefs: [
                        {targets: 66,
                            render: function (data, type, row, meta) {
                                return '<a href="../hardware/view.php?view='+ row[65] +'" title="View Record" data-toggle="tooltip"><i class=\'bx bx-search-alt bx-fw\'></i> VIEW </a>\n\
                                        <a href="../hardware/edit.php?edit='+ row[65] +'" title="Update Record" data-toggle="tooltip"><i class=\'bx bxs-pencil bx-fw\' ></i> EDIT </a>\n\
                                        <a href="../hardware/delete.php?delete='+ row[65] +'" title="Delete Record" data-toggle="tooltip" onclick="return confirm(\'Are You Sure ?\')"><i class=\'bx bxs-trash bx-fw\' ></i> DELETE </a>\n\
                                        <a href="../hardware/copy.php?edit='+ row[65] +'" title="Replicate Record" data-toggle="tooltip"><i class=\'bx bx-copy bx-fw\'></i></i> COPY </a>';
                            }
                        },
                        {"visible": false, "targets": 2 },
//                        {"visible": false, "targets": 5 },
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
//                        {"visible": false, "targets": 63 },
                        {"visible": false, "targets": 64 },
                        {"visible": false, "targets": 65 }
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
                <h5 class="u-pull-left" style="border-left:none">Hardware List</h5>
                <button onClick="window.location.href = window.location.href" type="button" class="btn btn-default btn-lg u-pull-right"> <i class='bx bx-refresh bx-fw' ></i> Reset Page</button>
            </div>
            <table id="example" class="u-full-width" width="100%" cellspacing="0">
                <thead>
                    
                    <tr>
                        <th><b>Location</b></th>
                        <th><b>Product Group</b></th>
                        <th><b>Category</b></th>
                        <th><b>Lab Manager</b></th>
                        <th><b>Assembly Number</b></th>
                        <th><b>Category</b></th>
                        <th><b>Sub Category</b></th>
                        <th><b>Temperature Rating</b></th>
                        <th><b>Humidity Rating</b></th>
                        <th><b>Voltage Rating</b></th>
                        <th><b>Current Rating</b></th>
                        <th><b>PCB Material</b></th>
                        <th><b>PCB Temperature</b></th>
                        <th><b>PCB Moisture</b></th>
                        <th><b>PCB Copper</b></th>
                        <th><b>PCB Thickness</b></th>
                        <th><b>PCB Width</b></th>
                        <th><b>PCB Spacing</b></th>
                        <th><b>PCB Drill</b></th>
                        <th><b>PCB Control</b></th>
                        <th><b>Material</b></th>
                        <th><b>Screw</b></th>
                        <th><b>Handle</b></th>
                        <th><b>Component</b></th>
                        <th><b>Motherboard Socket Part</b></th>
                        <th><b>Motherboard Socket Available</b></th>
                        <th><b>Motherboard Socket Quantity</b></th>
                        <th><b>Motherboard Socket Pin Quantity</b></th>
                        <th><b>Motherboard Socket Pin Pitch</b></th>
                        <th><b>Motherboard Socket Body</b></th>
                        <th><b>Motherboard Socket Pin</b></th>
                        <th><b>Motherboard Socket Configuration</b></th>
                        <th><b>Motherboard Socket Voltage</b></th>
                        <th><b>Motherboard Socket Current</b></th>
                        <th><b>Motherboard Socket Temperature</b></th>
                        <th><b>Marking Voltage </b></th>
                        <th><b>Marking Current </b></th>
                        <th><b>Marking Temperature </b></th>
                        <th><b>Marking Board </b></th>
                        <th><b>Marking Assembly </b></th>
                        <th><b>Marking Stress </b></th>
                        <th><b>Marking Socket </b></th>
                        <th><b>Marking Pin </b></th>
                        <th><b>Marking Vendor </b></th>
                        <th><b>Marking Layer </b></th>
                        <th><b>Marking Artwork </b></th>
                        <th><b>Marking Cat </b></th>
                        <th><b>Marking DUT </b></th>
                        <th><b>Marking Loose </b></th>
                        <th><b>Marking Bug </b></th>
                        <th><b>Marking BIB </b></th>
                        <th><b>Marking Logo </b></th>
                        <th><b>App - Verify</b></th>
                        <th><b>App - Component</b></th>
                        <th><b>App - Temperature</b></th>
                        <th><b>App - Tight</b></th>
                        <th><b>App - Select</b></th>
                        <th><b>App - Heatsink</b></th>
                        <th>A1</th>
                        <th>B1</th>
                        <th>C1</th>
                        <th>A2</th>
                        <th>B2</th>
                        <th>Status</th>                                         
                        <th>Flag</th>
                        <th><b>Hardware ID</b></th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th><b>Location</b></th>
                        <th><b>Product Group</b></th>
                        <th><b>Category</b></th>
                        <th><b>Lab Manager</b></th>
                        <th><b>Assembly Number</b></th>
                        <th><b>Category</b></th>
                        <th><b>Sub Category</b></th>
                        <th><b>Temperature Rating</b></th>
                        <th><b>Humidity Rating</b></th>
                        <th><b>Voltage Rating</b></th>
                        <th><b>Current Rating</b></th>
                        <th><b>PCB Material</b></th>
                        <th><b>PCB Temperature</b></th>
                        <th><b>PCB Moisture</b></th>
                        <th><b>PCB Copper</b></th>
                        <th><b>PCB Thickness</b></th>
                        <th><b>PCB Width</b></th>
                        <th><b>PCB Spacing</b></th>
                        <th><b>PCB Drill</b></th>
                        <th><b>PCB Control</b></th>
                        <th><b>Material</b></th>
                        <th><b>Screw</b></th>
                        <th><b>Handle</b></th>
                        <th><b>Component</b></th>
                        <th><b>Motherboard Socket Part</b></th>
                        <th><b>Motherboard Socket Available</b></th>
                        <th><b>Motherboard Socket Quantity</b></th>
                        <th><b>Motherboard Socket Pin Quantity</b></th>
                        <th><b>Motherboard Socket Pin Pitch</b></th>
                        <th><b>Motherboard Socket Body</b></th>
                        <th><b>Motherboard Socket Pin</b></th>
                        <th><b>Motherboard Socket Configuration</b></th>
                        <th><b>Motherboard Socket Voltage</b></th>
                        <th><b>Motherboard Socket Current</b></th>
                        <th><b>Motherboard Socket Temperature</b></th>
                        <th><b>Marking Voltage </b></th>
                        <th><b>Marking Current </b></th>
                        <th><b>Marking Temperature </b></th>
                        <th><b>Marking Board </b></th>
                        <th><b>Marking Assembly </b></th>
                        <th><b>Marking Stress </b></th>
                        <th><b>Marking Socket </b></th>
                        <th><b>Marking Pin </b></th>
                        <th><b>Marking Vendor </b></th>
                        <th><b>Marking Layer </b></th>
                        <th><b>Marking Artwork </b></th>
                        <th><b>Marking Cat </b></th>
                        <th><b>Marking DUT </b></th>
                        <th><b>Marking Loose </b></th>
                        <th><b>Marking Bug </b></th>
                        <th><b>Marking BIB </b></th>
                        <th><b>Marking Logo </b></th>
                        <th><b>App - Verify</b></th>
                        <th><b>App - Component</b></th>
                        <th><b>App - Temperature</b></th>
                        <th><b>App - Tight</b></th>
                        <th><b>App - Select</b></th>
                        <th><b>App - Heatsink</b></th>
                        <th style="visibility: collapse;">A1</th>
                        <th style="visibility: collapse;">B1</th>
                        <th style="visibility: collapse;">C1</th>
                        <th style="visibility: collapse;">A2</th>
                        <th style="visibility: collapse;">B2</th>
                        <th>Status</th>                                         
                        <th style="visibility: collapse;">Flag</th>
                        <th style="visibility: collapse;"><b>Hardware ID</b></th>
                        <th style="visibility: collapse;">Action</th>
                    </tr>
                </tfoot>
            </table>
            <div class="row">&nbsp;</div>
            <button onclick="location.href = '../hardware/add.php'" type="button" id="addBtn"><i class='bx bx-plus bx-fw'></i> Add New Hardware</button>
            <button onclick="location.href = '../xlsm/upload_hardware.php'" type="button" id="upBtn"><i class='bx bx-cloud-upload bx-fw'></i> Batch Upload</button>
            <!--<button onclick="location.href = '../hardware/add_03.php'" type="button" id="newModule" style="background-color: #e7e7e7"><i class='bx bx-universal-access'></i> New Module</button>-->
            <button onclick="location.href = '../template/template_hardware.xlsm'" type="button" id="dlBtn" class="u-pull-right"><i class='bx bx-cloud-download bx-fw'></i> Download Excel Template</button>
        </div>
    </body>
</html>