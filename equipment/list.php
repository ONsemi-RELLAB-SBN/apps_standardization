<?php
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

include '../template/form.php';
include '../template/list.php';
include '../class/get_parameter.php';
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <style>
            body {
                font-size: .85em;
            }

            h2 {
                font-size: 1.5em;
            }
        </style>

        <script type="text/javascript">
            jQuery(document).ready(function($) {
                
                var table = $('#myTable').DataTable( {
                    dom: 'Blfrtip',
                    buttons: [
                        {
                            extend: 'copyHtml5',
                            exportOptions: {
                                columns: ':visible'
                            }
                        },
                        {
                            extend: 'excelHtml5',
                            exportOptions: {
//                                columns: ':visible'
                                columns: [ 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84]
                            }
                        },
                        {
                            extend: 'csvHtml5',
                            exportOptions: {
                                columns: ':visible'
                            }
                        },
                        {
                            extend: 'pdfHtml5',
                            exportOptions: {
                                columns: ':visible'
                            }
                        },
                        'colvis'
                    ],
//                    columnDefs: [
//                        { "visible": false, "targets": 5 },
//                        { "visible": false, "targets": 6 },
//                        { "visible": false, "targets": 7 },
//                        { "visible": false, "targets": 8 },
//                        { "visible": false, "targets": 9 },
//                        { "visible": false, "targets": 10 },
//                        { "visible": false, "targets": 11 },
//                        { "visible": false, "targets": 12 },
//                        { "visible": false, "targets": 13 },
//                        { "visible": false, "targets": 14 },
//                        { "visible": false, "targets": 15 },
//                        { "visible": false, "targets": 16 },
//                        { "visible": false, "targets": 17 },
//                        { "visible": false, "targets": 18 },
//                        { "visible": false, "targets": 19 },
//                        { "visible": false, "targets": 20 },
//                        { "visible": false, "targets": 21 },
//                        { "visible": false, "targets": 22 },
//                        { "visible": false, "targets": 23 },
//                        { "visible": false, "targets": 24 },
//                        { "visible": false, "targets": 25 },
//                        { "visible": false, "targets": 26 },
//                        { "visible": false, "targets": 27 },
//                        { "visible": false, "targets": 28 },
//                        { "visible": false, "targets": 29 },
//                        { "visible": false, "targets": 30 },
//                        { "visible": false, "targets": 31 },
//                        { "visible": false, "targets": 32 },
//                        { "visible": false, "targets": 33 },
//                        { "visible": false, "targets": 34 },
//                        { "visible": false, "targets": 35 },
//                        { "visible": false, "targets": 36 },
//                        { "visible": false, "targets": 37 },
//                        { "visible": false, "targets": 38 },
//                        { "visible": false, "targets": 39 },
//                        { "visible": false, "targets": 40 },
//                        { "visible": false, "targets": 41 },
//                        { "visible": false, "targets": 42 },
//                        { "visible": false, "targets": 43 },
//                        { "visible": false, "targets": 44 },
//                        { "visible": false, "targets": 45 },
//                        { "visible": false, "targets": 46 },
//                        { "visible": false, "targets": 47 },
//                        { "visible": false, "targets": 48 },
//                        { "visible": false, "targets": 49 },
//                        { "visible": false, "targets": 50 },
//                        { "visible": false, "targets": 51 },
//                        { "visible": false, "targets": 52 },
//                        { "visible": false, "targets": 53 },
//                        { "visible": false, "targets": 54 },
//                        { "visible": false, "targets": 55 },
//                        { "visible": false, "targets": 56 },
//                        { "visible": false, "targets": 57 },
//                        { "visible": false, "targets": 58 },
//                        { "visible": false, "targets": 59 },
//                        { "visible": false, "targets": 60 },
//                        { "visible": false, "targets": 61 },
//                        { "visible": false, "targets": 62 },
//                        { "visible": false, "targets": 63 },
//                        { "visible": false, "targets": 64 },
//                        { "visible": false, "targets": 65 },
//                        { "visible": false, "targets": 66 },
//                        { "visible": false, "targets": 67 },
//                        { "visible": false, "targets": 68 },
//                        { "visible": false, "targets": 69 },
//                        { "visible": false, "targets": 70 },
//                        { "visible": false, "targets": 71 },
//                        { "visible": false, "targets": 72 },
//                        { "visible": false, "targets": 73 },
//                        { "visible": false, "targets": 74 },
//                        { "visible": false, "targets": 75 },
//                        { "visible": false, "targets": 76 },
//                        { "visible": false, "targets": 77 },
//                        { "visible": false, "targets": 78 },
//                        { "visible": false, "targets": 79 },
//                        { "visible": false, "targets": 80 },
//                        { "visible": false, "targets": 81 },
//                        { "visible": false, "targets": 82 },
//                        { "visible": false, "targets": 83 },
//                        { "visible": false, "targets": 84 }
//                    ]
                } );
            });
        </script>

    </head>
    <body>
        <?php
        if (isset($message)) {
            foreach ($message as $message) {
                echo '<span class="message">' . $message . '</span>';
            }
        }
        ?>
        <div class="row">&nbsp;</div>
        <div class="sample-form" style="overflow-x:auto;">
            <div class="row">&nbsp;</div>
            <div class="row">&nbsp;</div>
            <div class="row">
                <h2 class="u-pull-left" style="border-left:none">Equipment [Chamber] List</h2>
                <button onClick="window.location.href = window.location.href" type="button" class="btn btn-default btn-lg u-pull-right"> <i class='bx bx-refresh bx-fw' ></i> Refresh Page</button>
            </div>
            
            <table id="myTable" class="u-full-width" style="width:100%">
                <thead>
                    <tr>
                        <th style="text-align:center"><b>No</b></th>
                        <th><b>Equipment</b></th>
                        <th><b>Location</b></th>
                        <th><b>Product Group</b></th>
                        <th><b>Lab Manager</b></th>
                        <!--<th><b>Usage</b></th>-->
                        <th><b>Rel Test</b></th>
                        <!--<th><b>Zone</b></th>-->
                        <th><b>Manufacturer</b></th>
                        <th><b>Model</b></th>
                        <!--<th><b>Mfg Date</b></th>-->
                        <th><b>Asset No</b></th>
<!--                        <th><b>New/Transfer?</b></th>
                        <th><b>Location</b></th>-->
<!--                        <th><b>Voltage Rating</b></th>
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
                        <th><b>Diameter</b></th>-->
<!--                        <th><b>No of Interior Zone</b></th>
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
                        <th><b>Interface Current Rating</b></th>-->
                        <th style="text-align:center"><b>Action</b></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $get_slides = "SELECT * FROM gest_form_eqpt WHERE flag = '1' ORDER BY id ASC";
                    $run_slides = mysqli_query($con, $get_slides);
                    $t = 0;
                    while ($row_slides = mysqli_fetch_array($run_slides)):
                        $t += 1; ?>
                        <tr>
                            <!-- FETCHING DATA FROM EACH ROW OF EVERY COLUMN -->
                            <td style="text-align:center"><?php echo $t; ?></td>
                            <td><?php echo getParameterValue($row_slides['eqpt_id']); ?></td>
                            <td><?php echo getParameterValue($row_slides['lab_location']); ?></td>
                            <td><?php echo getParameterValue($row_slides['strategy']); ?></td>
                            <td><?php echo getParameterValue($row_slides['champion']); ?></td>
                            <!--<td><?php // echo getParameterValues($row_slides['dedicate_usage']); ?></td>-->
                            <td><?php echo getParameterValues($row_slides['rel_test']); ?></td>
                            <!--<td><?php // echo $row_slides['zone']; ?></td>-->
                            <td><?php echo getParameterValue($row_slides['manufacturer']); ?></td>
                            <td><?php echo getParameterValue($row_slides['eqpt_model']); ?></td>
                            <!--<td><?php // echo $row_slides['eqpt_mfg_date']; ?></td>-->
                            <td><?php echo $row_slides['eqpt_asset_no']; ?></td>
                            <!--<td><?php // echo getParameterValue($row_slides['new_transfer_eqpt']); ?></td>-->
                            <!--<td><?php echo getParameterValue($row_slides['transfer_eqpt_location']); ?></td>-->
<!--                            <td><?php echo $row_slides['eqpt_volt_rating']; ?></td>
                            <td><?php echo $row_slides['volt_control_accuracy']; ?></td>
                            <td><?php echo $row_slides['current_rating']; ?></td>
                            <td><?php echo $row_slides['power_rating']; ?></td>
                            <td><?php echo $row_slides['min_time_setting']; ?></td>
                            <td><?php echo $row_slides['max_time_setting']; ?></td>
                            <td><?php echo $row_slides['min_temp']; ?></td>
                            <td><?php echo $row_slides['max_temp']; ?></td>
                            <td><?php echo $row_slides['min_rh']; ?></td>
                            <td><?php echo $row_slides['max_rh']; ?></td>
                            <td><?php echo $row_slides['min_pressure']; ?></td>
                            <td><?php echo $row_slides['max_pressure']; ?></td>
                            <td><?php echo $row_slides['heat_dissipation']; ?></td>
                            <td><?php echo $row_slides['temp_fluctuation']; ?></td>
                            <td><?php echo $row_slides['temp_uniformity']; ?></td>
                            <td><?php echo $row_slides['humid_fluctuation']; ?></td>
                            <td><?php echo $row_slides['ext_dimension_w']; ?></td>
                            <td><?php echo $row_slides['ext_dimension_d']; ?></td>
                            <td><?php echo $row_slides['ext_dimension_h']; ?></td>
                            <td><?php echo $row_slides['int_dimension_w']; ?></td>
                            <td><?php echo $row_slides['int_dimension_d']; ?></td>
                            <td><?php echo $row_slides['int_dimension_h']; ?></td>
                            <td><?php echo $row_slides['diameter']; ?></td>-->
<!--                            <td><?php echo $row_slides['no_interior_zone']; ?></td>
                            <td><?php echo $row_slides['rack_dimension_w']; ?></td>
                            <td><?php echo $row_slides['rack_dimension_d']; ?></td>
                            <td><?php echo $row_slides['rack_dimension_h']; ?></td>
                            <td><?php echo $row_slides['int_vol']; ?></td>
                            <td><?php echo getParameterValue($row_slides['board_orientation']); ?></td>
                            <td><?php echo getParameterValue($row_slides['rack_material']); ?></td>
                            <td><?php echo $row_slides['rack_slot_pitch']; ?></td>
                            <td><?php echo $row_slides['rack_slot_width']; ?></td>
                            <td><?php echo $row_slides['eqpt_weight']; ?></td>
                            <td><?php echo $row_slides['no_mb_slot']; ?></td>
                            <td><?php echo $row_slides['max_ps_slot']; ?></td>
                            <td><?php echo $row_slides['max_ps_eqpt']; ?></td>
                            <td><?php echo getParameterValue($row_slides['airflow']); ?></td>
                            <td><?php echo getParameterValue($row_slides['temp_protection_1']); ?></td>
                            <td><?php echo getParameterValue($row_slides['temp_protection_2']); ?></td>
                            <td><?php echo getParameterValue($row_slides['temp_protection_3']); ?></td>
                            <td><?php echo getParameterValue($row_slides['pressure_switch']); ?></td>
                            <td><?php echo getParameterValue($row_slides['safety_valve']); ?></td>
                            <td><?php echo getParameterValue($row_slides['smoke_alarm']); ?></td>
                            <td><?php echo getParameterValue($row_slides['emo_btn']); ?></td>
                            <td><?php echo $row_slides['voltage']; ?></td>
                            <td><?php echo $row_slides['current']; ?></td>
                            <td><?php echo $row_slides['phase']; ?></td>
                            <td><?php echo getParameterValue($row_slides['exhaust']); ?></td>
                            <td><?php echo getParameterValue($row_slides['n2_gas']); ?></td>
                            <td><?php echo getParameterValue($row_slides['oxygen_level_detector']); ?></td>
                            <td><?php echo getParameterValue($row_slides['liquid_nitrogen']); ?></td>
                            <td><?php echo getParameterValue($row_slides['chilled_water']); ?></td>
                            <td><?php echo getParameterValue($row_slides['di_water']); ?></td>
                            <td><?php echo getParameterValue($row_slides['water_topup_system']); ?></td>
                            <td><?php echo getParameterValue($row_slides['cda']); ?></td>
                            <td><?php echo getParameterValue($row_slides['lan']); ?></td>
                            <td><?php echo getParameterValue($row_slides['daq']); ?></td>
                            <td><?php echo getParameterValue($row_slides['internal_config_type']); ?></td>
                            <td><?php echo $row_slides['no_banana_jack_hole']; ?></td>
                            <td><?php echo $row_slides['conn_volt_rating']; ?></td>
                            <td><?php echo $row_slides['conn_current_rating']; ?></td>
                            <td><?php echo $row_slides['conn_temp_rating']; ?></td>
                            <td><?php echo $row_slides['no_pin']; ?></td>
                            <td><?php echo $row_slides['pin_pitch']; ?></td>
                            <td><?php echo $row_slides['no_wire_conn_rack']; ?></td>
                            <td><?php echo $row_slides['wire_volt_rating']; ?></td>
                            <td><?php echo $row_slides['wire_curr_rating']; ?></td>
                            <td><?php echo $row_slides['wire_temp_rating']; ?></td>
                            <td><?php echo getParameterValue($row_slides['ext_config_type']); ?></td>
                            <td><?php echo $row_slides['interface_volt_rating']; ?></td>
                            <td><?php echo $row_slides['interface_current_rating']; ?></td>-->
                            <td style="text-align:center;width: 400px;">
                                <a href="view.php?view=<?php echo $row_slides['id']; ?>" title="View Record" data-toggle="tooltip"><i class='bx bx-search-alt bx-fw'></i> VIEW </a>
                                <a href="edit.php?edit=<?php echo $row_slides['id']; ?>" title="Update Record" data-toggle="tooltip"><i class='bx bxs-pencil bx-fw' ></i> EDIT </a>
                                <a href="delete.php?delete=<?php echo $row_slides['id']; ?>" title="Delete Record" data-toggle="tooltip" onclick="return confirm('Are You Sure ?')"><i class='bx bxs-trash bx-fw' ></i> DELETE </a>
                                <a href="copy.php?edit=<?php echo $row_slides['id']; ?>" title="Replicate Record" data-toggle="tooltip"><i class='bx bx-copy bx-fw'></i></i> COPY </a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
            <button onclick="location.href = '../equipment/add.php'" type="button" id="addBtn"><i class='bx bx-plus bx-fw'></i> Add New Equipment</button>
            <button onclick="location.href = '../xlsm/upload_equipment.php'" type="button" id="upBtn"><i class='bx bx-cloud-upload bx-fw'></i> Batch Upload</button>
            <button onclick="location.href = '../template/template_equipment.xlsm'" type="button" id="dlBtn" class="u-pull-right"><i class='bx bx-cloud-download bx-fw'></i> Download Excel Template</button>
        </div>
    </body>
</html>