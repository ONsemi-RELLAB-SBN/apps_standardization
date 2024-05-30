<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

include '../template/form.php';
include '../class/get_parameter.php';
$id = $_GET['view'];
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <link rel="stylesheet" href="accordian.css"/>
        <style>
            .cascade {
                display: none;
            }
            
            #listBtn {
                display: block;
                position: fixed;
                top: 20px;
                right: 40px;
                z-index: 99;
                font-size: 18px;
                outline: none;
                cursor: pointer;
            }

            #listBtn:hover {
                background-color: orange;
                color: white;
            }
            
            #edit-button {
                display: block;
                position: fixed;
                top: 20px;
                right: 195px;
                z-index: 99;
                font-size: 18px;
                outline: none;
                cursor: pointer;
            }

            #edit-button:hover {
                background-color: orange;
                color: white;
            }
            
            ::placeholder {
                color: orange;
                opacity: 0.3;
            }
        </style>
        
        <script type="text/javascript">
        
        </script>
    </head>
    <body>
        <form id="update_hardware_form" role="form" action="../crud/crud_update_hardware.php" method="get">
            <input type="hidden" id="id" name="id" value="<?php echo $id; ?>">
            <?php
            $sqlFormData = "SELECT * FROM gest_form_hw0 hw0
                            INNER JOIN gest_form_hw1 hw1 ON hw1.hw_id = hw0.id
                            INNER JOIN gest_form_hw2 hw2 ON hw2.hw_id = hw0.id
                            INNER JOIN gest_form_hw3 hw3 ON hw3.hw_id = hw0.id
                            WHERE hw0.id = '$id'";
            $resForm = mysqli_query($con, $sqlFormData);
            while ($rowForm = mysqli_fetch_array($resForm)): ?>
                <div id="main-page">
                    <div class="twelve columns">&nbsp;</div>
                    <h5>General</h5>
                    <div class="row">
                        <div class="two columns"><label for="lab_location">Lab Location *</label></div>
                        <div class="three columns">
                            <input type="text" id="lab_location" name="lab_location" value="<?php echo getParameterValue($rowForm['lab_location']); ?>" required readonly />
                        </div>
                        <div class="one columns">&nbsp;</div>
                        <div class="two columns"><label for="strategy">Product Group *</label></div>
                        <div class="three columns">
                            <input type="text" id="strategy" name="strategy" value="<?php echo getParameterValue($rowForm['strategy']); ?>" required readonly />
                        </div>
                        <div class="one columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="standardization">Standardization Category *</label></div>
                        <div class="three columns">
                            <input type="text" id="standardization" name="standardization" value="<?php echo getParameterValue($rowForm['standard_category']); ?>" required readonly />
                        </div>
                        <div class="one columns">&nbsp;</div>
                        <div class="two columns"><label for="champion">Lab Manager *</label></div>
                        <div class="three columns">
                            <input type="text" id="champion" name="champion" value="<?php echo getParameterValue($rowForm['champion']); ?>" required readonly />
                        </div>
                        <div class="one columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="assembly_no">Assembly Number *</label></div>
                        <div class="three columns"><input type="text" id="assembly_no" name="assembly_no" placeholder="Eg: Assembly Number" value="<?php echo $rowForm['assembly_no']; ?>" required readonly> </div>
                    </div>
                </div>

                <div id="content-page">
                    <ul id="tabs">
                        <li class="active" data-tab="tabCategory">Category</li>
                        <li data-tab="tabRating">Ratings</li>
                        <li data-tab="tabPcb">PCB</li>
                        <li data-tab="tabEdge">Edgefinger</li>
                        <li data-tab="tabPth">Traces & PTH</li>
                        <li data-tab="tabBoard">Board Frame & Screws</li>
                        <li data-tab="tabComponent">Components on Motherboard</li>
                        <li data-tab="tabSocket">Sockets</li>
                        <li data-tab="tabConnector">Connectors</li>
                        <li data-tab="tabMarking">Markings</li>
                        <li data-tab="tabReview">Application Review</li>
                    </ul>

                    <div class="tab-content active" id="tabCategory">
                        <p style="color:red; font-size: 11px;margin-bottom: 0.5rem;">* is mandatory field to enable draft saving.</p>
                        <div class="row">
                            <div class="two columns"><label for="category">Category</label></div>
                            <div class="three columns">
                                <input type="text" id="catId" name="category" value="<?php echo $rowForm['category']; ?>" placeholder="Eg: Universal / Dedicated" readonly />
                            </div>
                        </div> 
                        <div class="row">
                            <div class="two columns"><label for="sub_category">&nbsp;</label></div>
                            <div class="three columns">
                                <input type="text" id="subId" name="sub_category" value="<?php echo $rowForm['sub_category']; ?>" placeholder="Eg: Eg: Motherboard with fixed socket" readonly />
                            </div>
                            <div class="one columns">&nbsp;</div>   
                        </div> 
                    </div>

                    <div class="tab-content" id="tabRating">
                        <div class="row">
                            <div class="two columns"><label for="temperature">Temperature, &#8451;</label></div>
                            <div class="three columns"><input type="text" id="temperature" name="temperature" value="<?php echo $rowForm['temp_rating']; ?>" placeholder="Eg: 200 &#8451;" readonly> </div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="humidity">Humidity, &#37</label></div>
                            <div class="three columns"><input type="text" id="humidity" name="humidity" value="<?php echo $rowForm['humid_rating']; ?>" placeholder="Eg: 85 &#37" readonly> </div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="voltage">Voltage, V</label></div>
                            <div class="three columns"><input type="text" id="voltage" name="voltage" value="<?php echo $rowForm['voltage_rating']; ?>" placeholder="Eg: 200 V" readonly> </div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="current">Overall Current, A</label></div>
                            <div class="three columns"><input type="text" id="current" name="current" value="<?php echo $rowForm['current_rating']; ?>" placeholder="Eg: 3 A" readonly> </div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                    </div>

                    <div class="tab-content" id="tabPcb">
                        <div class="row">
                            <div class="two columns"><label for="pcb_material">PCB Material</label></div>
                            <div class="three columns"><input type="text" id="pcb_material" name="pcb_material" value="<?php echo $rowForm['pcb_material']; ?>" placeholder="Eg: Polyimide Arlon 85N" readonly> </div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="pcb_material2">PCB Material Tg, &#8451;</label></div>
                            <div class="three columns"><input type="text" id="pcb_material2" name="pcb_material2" value="<?php echo $rowForm['pcb_temp']; ?>" placeholder="Eg: 25 &#8451;" readonly> </div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="pcb_moisture">PCB Material Moisture Absorption, &#37</label></div>
                            <div class="three columns"><input type="text" id="pcb_moisture" name="pcb_moisture" value="<?php echo $rowForm['pcb_moisture']; ?>" placeholder="Eg: 0.27 &#37" readonly> </div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="edge_copper">Edge-to nearest copper distance</label></div>
                            <div class="three columns"><input type="text" id="edge_copper" name="edge_copper" value="<?php echo $rowForm['pcb_copper']; ?>" placeholder="Eg: 2.6" readonly> </div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="pcb_thickness">PCB thickness, mm</label></div>
                            <div class="three columns"><input type="text" id="pcb_thickness" name="pcb_thickness" value="<?php echo $rowForm['pcb_thick']; ?>" placeholder="Eg: 1.56mm &#177 10%mm" readonly> </div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="edge_chamfered">Board Edges should be chamfered</label></div>
                            <div class="three columns">
                                <input type="text" id="edge_chamfered" name="edge_chamfered" value="<?php echo $rowForm['pcb_edge']; ?>" placeholder="Eg: Yes / No" readonly />
                            </div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="surface_coat">Surface coating</label></div>
                            <div class="three columns">
                                <input type="text" id="surface_coat" name="surface_coat" value="<?php echo $rowForm['pcb_coating']; ?>"  placeholder="Eg: Yes / No" readonly />
                            </div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="no_layer">Number of layers</label></div>
                            <div class="three columns"><input type="text" id="no_layer" name="no_layer" value="<?php echo $rowForm['pcb_layer']; ?>" placeholder="Eg: 8" readonly> </div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                    </div>

                    <div class="tab-content" id="tabEdge">
                        <div class="row">
                            <div class="two columns"><label for="edge_pitch">Edge Finger Pitch</label></div>
                            <div class="three columns"><input type="text" id="edge_pitch" name="edge_pitch" value="<?php echo $rowForm['edge_pitch']; ?>" placeholder="Eg: 0.156 &#x22;" readonly> </div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="copper_thickness">Copper Thickness, oz.</label></div>
                            <div class="three columns"><input type="text" id="copper_thickness" name="copper_thickness" value="<?php echo $rowForm['edge_thick']; ?>" placeholder="Eg: 2 oz" readonly> </div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="trace_width">Trace Width, mil</label></div>
                            <div class="three columns"><input type="text" id="trace_width" name="trace_width" value="<?php echo $rowForm['edge_width']; ?>" placeholder="Eg: 54 mil" readonly> </div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="trace_space">Trace Spacing, mil</label></div>
                            <div class="three columns"><input type="text" id="trace_space" name="trace_space" value="<?php echo $rowForm['edge_spacing']; ?>" placeholder="Eg: 116 mil" readonly> </div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                    </div>

                    <div class="tab-content" id="tabPth">
                        <div class="row">
                            <div class="two columns"><label for="trace_internal">Traces placed in internal layers only</label></div>
                            <div class="three columns">
                                <input type="text" id="trace_internal" name="trace_internal" value="<?php echo $rowForm['trace_layer']; ?>" placeholder="Eg: Yes / No" readonly>
                            </div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="final_thickness">Final Copper Thickness, oz</label></div>
                            <div class="three columns"><input type="text" id="final_thickness" name="final_thickness" value="<?php echo $rowForm['trace_thick']; ?>" placeholder="Eg: 2 oz" readonly> </div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="min_trace">Minimum Trace Width, mil</label></div>
                            <div class="three columns"><input type="text" id="min_trace" name="min_trace" value="<?php echo $rowForm['trace_width']; ?>" placeholder="Eg: 47 mil" readonly> </div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="min_space">Minimum Trace Spacing, mil</label></div>
                            <div class="three columns"><input type="text" id="min_space" name="min_space" value="<?php echo $rowForm['trace_spacing']; ?>" placeholder="Eg: 80 mil" readonly> </div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="plated_drill">Plated Through Hole minimum drill size, mil</label></div>
                            <div class="three columns"><input type="text" id="plated_drill" name="plated_drill" value="<?php echo $rowForm['trace_drill']; ?>" placeholder="Eg: 20 mil" readonly> </div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="impedance">Impedance controlled traces?</label></div>
                            <div class="three columns">
                                <input type="text" id="impedance" name="impedance" value="<?php echo $rowForm['trace_control']; ?>" placeholder="Eg: Yes / No" readonly>
                            </div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                    </div>

                    <div class="tab-content" id="tabBoard">
                        <div class="row">
                            <div class="two columns"><label for="frame_chasis">Board Frame/Chassis material</label></div>
                            <div class="three columns"><input type="text" id="frame_chasis" name="frame_chasis" value="<?php echo $rowForm['bf_material']; ?>" placeholder="Eg: SS316" readonly> </div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="frame_screw">Board Frame/Chassis > No protruding screw tips</label></div>
                            <div class="three columns">
                                <input type="text" id="frame_screw" name="frame_screw" value="<?php echo $rowForm['bf_screw']; ?>" placeholder="Eg: Yes / No" readonly>
                            </div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="frame_handle">Board Frame/Chassis > Handle</label></div>
                            <div class="three columns">
                                <input type="text" id="frame_handle" name="frame_handle" value="<?php echo $rowForm['bf_handle']; ?>" placeholder="Eg: Yes / No" readonly>
                            </div>
                        </div>
                    </div>

                    <div class="tab-content" id="tabComponent">
                        <div class="row">
                            <label for="component" style="text-align: left">List components vs part number vs ratings</label>
                            <textarea id="component" name="component" rows="7" cols="100" readonly placeholder="Eg: Turret Terminal Pin: 6821-0-00-15-00-00-08-0
Temp rating: melting point 1000C"><?php echo $rowForm['component']; ?></textarea>
                        </div>
                    </div>

                    <div class="tab-content" id="tabSocket">
                        <div class="row">
                            <div class="two columns"><label for="socket_partno">Socket part number</label></div>
                            <div class="three columns"><input type="text" id="socket_partno" name="socket_partno" value="<?php echo $rowForm['mb_socket_part']; ?>" placeholder="Eg: T062-231015-D01-A450-R00" readonly> </div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="socket_avail">Socket availability</label></div>
                            <div class="three columns"><input type="text" id="socket_avail" name="socket_avail" value="<?php echo $rowForm['mb_socket_avail']; ?>" placeholder="Eg: Customized" readonly> </div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="socket_qty">Socket qty</label></div>
                            <div class="three columns"><input type="text" id="socket_qty" name="socket_qty" value="<?php echo $rowForm['mb_socket_qty']; ?>" placeholder="Eg: 6" readonly> </div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="socket_pin_qty">Socket pin qty</label></div>
                            <div class="three columns"><input type="text" id="socket_pin_qty" name="socket_pin_qty" value="<?php echo $rowForm['mb_socket_pin_qty']; ?>" placeholder="Eg: 96" readonly> </div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="socket_pin_pitch">Socket pin pitch</label></div>
                            <div class="three columns"><input type="text" id="socket_pin_pitch" name="socket_pin_pitch" value="<?php echo $rowForm['mb_socket_pin_pitch']; ?>" placeholder="Eg: 8.30mm" readonly> </div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="socket_body_material">Socket body material</label></div>
                            <div class="three columns"><input type="text" id="socket_body_material" name="socket_body_material" value="<?php echo $rowForm['mb_socket_body']; ?>" placeholder="Eg: Ketron Peek" readonly> </div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="socket_pin_material">Socket pin material</label></div>
                            <div class="three columns"><input type="text" id="socket_pin_material" name="socket_pin_material" value="<?php echo $rowForm['mb_socket_pin']; ?>" placeholder="Eg: Berrylium Copper" readonly> </div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="socket_config">Socket configuration</label></div>
                            <div class="three columns"><input type="text" id="socket_config" name="socket_config" value="<?php echo $rowForm['mb_socket_config']; ?>" placeholder="Eg: Open Top" readonly> </div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="socket_vol_rate">Socket voltage rating, V</label></div>
                            <div class="three columns"><input type="text" id="socket_vol_rate" name="socket_vol_rate" value="<?php echo $rowForm['mb_socket_volt']; ?>" placeholder="Eg: 2000 V" readonly> </div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="socket_curr_rate">Socket current rating, A</label></div>
                            <div class="three columns"><input type="text" id="socket_curr_rate" name="socket_curr_rate" value="<?php echo $rowForm['mb_socket_curr']; ?>" placeholder="Eg: 3 A" readonly> </div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="socket_temp_rate">Socket temperature rating, &#8451;</label></div>
                            <div class="three columns"><input type="text" id="socket_temp_rate" name="socket_temp_rate" value="<?php echo $rowForm['mb_socket_temp']; ?>" placeholder="Eg: 200 &#8451;" readonly> </div>
                        </div>
                    </div>

                    <div class="tab-content" id="tabConnector">
                        <div class="row">
                            <div class="two columns"><label for="conn_part">Voltage rating label</label></div>
                            <div class="three columns"><input type="text" id="conn_part" name="conn_part" value="<?php echo $rowForm['conn_number']; ?>" placeholder="Eg: TMM15DRSD-S664" readonly> </div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="conn_avail">Connector availability</label></div>
                            <div class="three columns"><input type="text" id="conn_avail" name="conn_avail" value="<?php echo $rowForm['conn_avail']; ?>" placeholder="Eg: Yes" readonly> </div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="conn_pin_qty">Connector pin qty</label></div>
                            <div class="three columns"><input type="text" id="conn_pin_qty" name="conn_pin_qty" value="<?php echo $rowForm['conn_pin_qty']; ?>" placeholder="Eg: 14" readonly> </div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="conn_pin_pitch">Connector pin pitch</label></div>
                            <div class="three columns"><input type="text" id="conn_pin_pitch" name="conn_pin_pitch" value="<?php echo $rowForm['conn_pin_pitch']; ?>" placeholder="Eg: 15" readonly> </div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="conn_body_material">Connector body material</label></div>
                            <div class="three columns"><input type="text" id="conn_body_material" name="conn_body_material" value="<?php echo $rowForm['conn_body']; ?>" placeholder="Eg: 0.156 &#x22;" readonly> </div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="conn_pin_material">Connector pin material</label></div>
                            <div class="three columns"><input type="text" id="conn_pin_material" name="conn_pin_material" value="<?php echo $rowForm['conn_pin']; ?>" placeholder="Eg: PPS" readonly> </div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="rate_body">Connector > Stress Rating_Body Mold, <b>&#8451;</b> </label></div>
                            <div class="three columns"><input type="text" id="rate_body" name="rate_body" value="<?php echo $rowForm['conn_mold']; ?>" placeholder="Eg: Berrylium Copper" readonly> </div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="rate_contact">Connector > Stress Rating_Contact, <b>&#8451;</b></label></div>
                            <div class="three columns"><input type="text" id="rate_contact" name="rate_contact" value="<?php echo $rowForm['conn_contact']; ?>" placeholder="Eg: Dual Row" readonly> </div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="conn_volt_rate">Connector voltage rating</label></div>
                            <div class="three columns"><input type="text" id="conn_volt_rate" name="conn_volt_rate" value="<?php echo $rowForm['conn_volt']; ?>" placeholder="Eg: 950 VAC pitch to pitch" readonly> </div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="conn_curr_rate">Connector current rating</label></div>
                            <div class="three columns"><input type="text" id="conn_curr_rate" name="conn_curr_rate" value="<?php echo $rowForm['conn_curr']; ?>" placeholder="Eg: 3 A" readonly> </div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="conn_temp_rate">Connector temperature rating</label></div>
                            <div class="three columns"><input type="text" id="conn_temp_rate" name="conn_temp_rate" value="<?php echo $rowForm['conn_temp']; ?>" placeholder="Eg: 175" readonly> </div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                    </div>

                    <div class="tab-content" id="tabMarking">
                        <div class="row">
                            <div class="two columns"><label for="volt_rate">Voltage rating label</label></div>
                            <div class="three columns">
                                <input type="text" id="volt_rate" name="volt_rate" value="<?php echo $rowForm['mark_volt']; ?>" placeholder="Eg: Yes / No" readonly />
                            </div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="curr_rate">Current rating label</label></div>
                            <div class="three columns">
                                <input type="text" id="curr_rate" name="curr_rate" value="<?php echo $rowForm['mark_curr']; ?>" placeholder="Eg: Yes / No" readonly />
                            </div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="temp_rate">Temperature rating label</label></div>
                            <div class="three columns">
                                <input type="text" id="temp_rate" name="temp_rate" value="<?php echo $rowForm['mark_temp']; ?>" placeholder="Eg: Yes / No" readonly />
                            </div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="board">Board name</label></div>
                            <div class="three columns">
                                <input type="text" id="board" name="board" value="<?php echo $rowForm['mark_board']; ?>" placeholder="Eg: Yes / No" readonly />
                            </div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="ass_number">Assembly number</label></div>
                            <div class="three columns">
                                <input type="text" id="ass_number" name="ass_number" value="<?php echo $rowForm['mark_assembly']; ?>" placeholder="Eg: Yes / No" readonly />
                            </div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="stress_test">Stress Test Name</label></div>
                            <div class="three columns">
                                <input type="text" id="stress_test" name="stress_test" value="<?php echo $rowForm['mark_stress']; ?>" placeholder="Eg: Yes / No" readonly />
                            </div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="socket_number">Socket Numbers</label></div>
                            <div class="three columns">
                                <input type="text" id="socket_number" name="socket_number" value="<?php echo $rowForm['mark_socket']; ?>" placeholder="Eg: Yes / No" readonly />
                            </div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="pin_indicator">Pin "1" Indicator</label></div>
                            <div class="three columns">
                                <input type="text" id="pin_indicator" name="pin_indicator" value="<?php echo $rowForm['mark_pin']; ?>" placeholder="Eg: Yes / No" readonly />
                            </div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="vendor">Vendor Logo dimension</label></div>
                            <div class="three columns">
                                <input type="text" id="vendor" name="vendor" value="<?php echo $rowForm['mark_vendor']; ?>" placeholder="Eg: Yes / No" readonly />
                            </div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="stackup">Stack-up Layer</label></div>
                            <div class="three columns">
                                <input type="text" id="stackup" name="stackup" value="<?php echo $rowForm['mark_layer']; ?>" placeholder="Eg: Yes / No" readonly />
                            </div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="artwork">Artwork Date</label></div>
                            <div class="three columns">
                                <input type="text" id="artwork" name="artwork" value="<?php echo $rowForm['mark_artwork']; ?>" placeholder="Eg: Yes / No" readonly />
                            </div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="unidedi">Universal or Dedicated</label></div>
                            <div class="three columns">
                                <input type="text" id="unidedi" name="unidedi" value="<?php echo $rowForm['mark_cat']; ?>" placeholder="Eg: Yes / No" readonly />
                            </div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="dut_density">DUT Density</label></div>
                            <div class="three columns">
                                <input type="text" id="dut_density" name="dut_density" value="<?php echo $rowForm['mark_dut']; ?>" placeholder="Eg: Yes / No" readonly />
                            </div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="loose_dut">Loose Component DUT Orientation</label></div>
                            <div class="three columns">
                                <input type="text" id="loose_dut" name="loose_dut" value="<?php echo $rowForm['mark_loose']; ?>" placeholder="Eg: Yes / No" readonly />
                            </div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="live_bug">Live bug/Dead Bug Orientation</label></div>
                            <div class="three columns">
                                <input type="text" id="live_bug" name="live_bug" value="<?php echo $rowForm['mark_bug']; ?>" placeholder="Eg: Yes / No" readonly />
                            </div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="bib_ori">Device and Socket to BIB Orientation</label></div>
                            <div class="three columns">
                                <input type="text" id="bib_ori" name="bib_ori" value="<?php echo $rowForm['mark_bib']; ?>" placeholder="Eg: Yes / No" readonly />
                            </div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="onsemi_logo">Onsemi Logo</label></div>
                            <div class="three columns">
                                <input type="text" id="onsemi_logo" name="onsemi_logo" value="<?php echo $rowForm['mark_logo']; ?>" placeholder="Eg: Yes / No" readonly />
                            </div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                    </div>

                    <div class="tab-content" id="tabReview">
                        <div class="row">
                            <div class="eleven columns"><label for="r1" style="text-align: left">Verify if the total device current rating is lower than the hardware rating.</label></div>
                        </div>
                        <div class="row">
                            <div class="seven columns"><input type="text" id="r1" name="r1" value="<?php echo $rowForm['app_verify']; ?>" placeholder="Eg: TBD for the OPN to be run" readonly> </div>
                        </div>
                        <div class="row">
                            <div class="eleven columns"><label for="r2" style="text-align: left">Check components and interconnect wires in schematic vs actual hardware design.</label></div>
                        </div>
                        <div class="row">
                            <div class="seven columns"><input type="text" id="r2" name="r2" value="<?php echo $rowForm['app_component']; ?>" placeholder="Eg: TBD for the OPN to be run" readonly> </div>
                        </div>
                        <div class="row">
                            <div class="eleven columns"><label for="r3" style="text-align: left">Check temperature rating (consider derating factor)
                                    <br/>Check power dissipation
                                    <br/>Check humidity rating
                                    <br/>Check current rating
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="seven columns"><input type="text" id="r3" name="r3" value="<?php echo $rowForm['app_temp']; ?>" placeholder="Eg: TBD for the OPN to be run" readonly> </div>
                        </div>
                        <div class="row">
                            <div class="eleven columns"><label for="r4" style="text-align: left">Check socket fit tightness after x hrs. Socket should not fall off.</label></div>
                        </div>
                        <div class="row">
                            <div class="seven columns"><input type="text" id="r4" name="r4" value="<?php echo $rowForm['app_tight']; ?>" placeholder="Eg: TBD for the OPN to be run" readonly> </div>
                        </div>
                        <div class="row">
                            <div class="eleven columns"><label for="r5" style="text-align: left">Socket selection. Socket should be open top so that ISG device won’t be damaged. Socket should consider fitting of the heatsink if required.</label></div>
                        </div>
                        <div class="row">
                            <div class="seven columns"><input type="text" id="r5" name="r5" value="<?php echo $rowForm['app_select']; ?>" placeholder="Eg: TBD for the OPN to be run" readonly> </div>
                        </div>
                        <div class="row">
                            <div class="eleven columns"><label for="r6" style="text-align: left">If heatsink/load card/flexible wiring is required:
                                    <br/>1. Check if board capacity is impacted
                                    <br/>2. Check if chamber capacity is impacted
                                    <br/>3. Check airflow impact
                                    <br/>4. For flexible wire setup, make sure there is no hindrance to insertion of motherboards.
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="seven columns"><input type="text" id="r6" name="r6" value="<?php echo $rowForm['app_heatsink']; ?>" placeholder="Eg: Review chamber slot to slot height" readonly> </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
            <button onclick="location.href = '../list/list_hardware.php'" type="button" id="listBtn" class="btn"><i class='bx bx-list-ol bx-fw' ></i>List</button>
            <button onclick="location.href = 'edit.php?edit=<?php echo $id; ?>'" type="button" id="edit-button"><i class='bx bxs-pencil bx-fw' ></i> Edit</button>
        </form>

        <script src="../js/jquery-3.7.0.js"></script>
        <script src="accordian.js"></script>
        
        <script>
                const tabs = document.getElementById('tabs');
                const tabContents = document.querySelectorAll('.tab-content');
                const form = document.getElementById('update_hardware_form');
                const draftButton = document.getElementById('draft-button');
                const saveButton = document.getElementById('save-button');

                $(document).ready(function () {
                    console.log("ready");
                    draftButton.style.display = 'none';
                    saveButton.style.display = 'none';
                });

                tabs.addEventListener('click', (event) => {
                    const target = event.target;
                    if (target.tagName !== 'LI') {
                        return;
                    }

                    const activeTab = document.querySelector('.active');
                    activeTab.classList.remove('active');

                    const newActiveTab = target;
                    newActiveTab.classList.add('active');

                    const activeTabContent = document.querySelector('.active.tab-content');
                    activeTabContent.classList.remove('active');

                    const newActiveTabContentId = newActiveTab.getAttribute('data-tab');
                    const newActiveTabContent = document.getElementById(newActiveTabContentId);
                    newActiveTabContent.classList.add('active');
                });

                $(".button").click(function () {
                    var buttonId = $(this).attr("id");
                    $("#modal-container").removeAttr("class").addClass(buttonId);
                    $("body").addClass("modal-active");
                });

                $("#modal-container").click(function () {
                    $(this).addClass("out");
                    $("body").removeClass("modal-active");
                });

                function hasAllVisibleFilled() {
                    const visibleInputs = form.querySelectorAll('input:not([hidden]):not([disabled])');
                    const visibleSelects = form.querySelectorAll('select:not([hidden]):not([disabled])');
                    return [...visibleSelects, ...visibleInputs].every(input => input.value);
                }

                function hasAllRequiredFilled() {
                    const requiredInputs = form.querySelectorAll('input:required:not([hidden]):not([disabled])');
                    const requiredSelects = form.querySelectorAll('select:required:not([hidden]):not([disabled])');
                    return [...requiredInputs, ...requiredSelects].every(input => input.value);
                }

                form.addEventListener('input', () => {
                    if (hasAllRequiredFilled()) {
                        if (hasAllVisibleFilled()) {
                            console.log("KAT SINI ADA SAVE BUTTON");
                            saveButton.style.display = 'block';
                            draftButton.style.display = 'none';
                        } else {
                            console.log("SINI DAH DRAFT SAHAJA");
                            draftButton.style.display = 'block';
                            saveButton.style.display = 'none';
                        }
                    } else {
                        console.log("MASIH TAK COMPLETE");
                        draftButton.style.display = 'none';
                        saveButton.style.display = 'none';
                    }
                });
                
                function getSubCategory() {
                    var catId = $("#catId").val();
                    $.post("../class/get_parameter.php", {getSubCategory: 'getSubCategory', catId: catId}, function (response) {
                        var data = response.split('^');
                        $("#subId").html(data[1]);
                    });

                    var newTransferDropdown = document.getElementById('catId');
                    var toField = document.getElementById('subId');

                    toField.readOnly = true;
                    toField.style.display = 'none';

                    // AJAX request to load data
                    var selectedValue = newTransferDropdown.value;

                    if (selectedValue === "045001") {
                        console.log("045001 >> ");
                        toField.readOnly = false;
                        toField.style.display = 'block';
                    } else if (selectedValue === "045002") {
                        console.log("045002 +++ ");
                        toField.readOnly = false;
                        toField.style.display = 'block';
                    } else {
                        console.log("SINI MASUK YANG LAIN2 da 045 code");
                    }

                }
        </script>
    </body>
</html>