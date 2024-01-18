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
        <link rel="stylesheet" href="equipment.css"/>
    </head>
    <body>
        <form id="view_equipment_form" action="" method="get">
            <div class="row">
                <?php
                $sqlFormData = "SELECT * FROM gest_form_eqpt WHERE id = '$id'";
                $resForm = mysqli_query($con, $sqlFormData);
                while ($rowForm = mysqli_fetch_array($resForm)): ?>
                
                    <div id="main-page">
                    <div class="twelve columns">&nbsp;</div>
                    <h5>General</h5>
                    <div class="row">
                        <div class="two columns"><label for="lab_location">Lab Location *</label></div>
                        <div class="three columns">
                            <select id="lab_location" name="lab_location" style="width: 100%" required>
                                <?php echo getDropdown('002', ''); ?>
                            </select>
                        </div>
                        <div class="one columns">&nbsp;</div>
                        <div class="two columns"><label for="strategy">Product Group *</label></div>
                        <div class="three columns">
                            <select id="strategy" name="strategy" style="width: 100%" required>
                                <?php echo getDropdown('003', ''); ?>  
                            </select>
                        </div>
                        <div class="one columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="standardization">Standardization Category *</label></div>
                        <div class="three columns">
                            <select id="standardization" name="standardization" style="width: 100%" required>
                                <?php echo getDropdown('004', '004001'); ?>
                            </select>
                        </div>
                        <div class="one columns">&nbsp;</div>
                        <div class="two columns"><label for="champion">Lab Manager *</label></div>
                        <div class="three columns">
                            <select id="champion" name="champion" style="width: 100%" required>
                                <?php echo getDropdown('005', ''); ?>
                            </select>
                        </div>
                        <div class="one columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="relTest">Rel Test *</label></div>
                        <div class="three columns">
                            <select name="relTest[]" id="relTest" multiple multiselect-search="true" multiselect-select-all="false" style="width:100%" onchange="updateRelTest()" required>
                            <?php echo getDropdown02('008', ''); ?>
                            </select>
                        </div>
                        <div class="one columns">&nbsp;</div>
                    </div>
                </div>

                <div id="content-page">
                    <ul id="tabs">
                        <li class="active" data-tab="tabIdtt">Equipment Identity</li>
                        <li data-tab="tabCpbl">Capability</li>
                        <li data-tab="tabCrtr">Characteristics</li>
                        <li data-tab="tabSafe">Safety</li>
                        <li data-tab="tabUtlt">Utilities</li>
                        <li data-tab="tabDaq">DAQ</li>
                        <li data-tab="tabInt" id="tb07">Internal Chamber Configuration</li>
                        <li data-tab="tabExt" id="tb08">External Chamber Configuration</li>
                    </ul>

                    <div class="tab-content active" id="tabIdtt">
                        <div class="row">
                            <div class="two columns"><label for="eqpt_id">Equipment ID *</label></div>
                            <div class="three columns">
                                <input type="text" list="eqpt_id_list" autocomplete="off" id="eqpt_id" name="eqpt_id" required>
                                <datalist id="eqpt_id_list">
                                    <?php echo getDataList('006', ''); ?>
                                </datalist>
                            </div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="dedicated">Dedicated/Share</label></div>
                            <div class="three columns">
                                <select id="dedicated" name="dedicated" style="width: 100%">
                                    <?php echo getDropdown('007', ''); ?>
                                </select>
                            </div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="manufacturer">Equipment Manufacturer *</label></div>
                            <div class="three columns">
                                <input type="text" list="manufacturer_list" autocomplete="off" id="manufacturer" name="manufacturer" required>
                                <datalist id="manufacturer_list">
                                    <?php echo getDataList('009', ''); ?>
                                </datalist>
                            </div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="model">Equipment Model *</label></div>
                            <div class="three columns">
                                <input type="text" list="model_list" autocomplete="off" id="model" name="model" required>
                                <datalist id="model_list">
                                    <?php echo getDataList('010', ''); ?>
                                </datalist>
                            </div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="mfg_date">Equipment Mfg Date</label></div>
                        <div class="three columns"><input type="date" id="mfg_date" name="mfg_date" value="" style="width:55%" ></div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="asset_no">Equipment Asset No *</label></div>
                        <div class="three columns"><input type="text" id="asset_no" name="asset_no" placeholder="Asset Number" value="" > </div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="new_transfer">New/Transfer Equipment</label></div>
                            <div class="three columns">
                                <select id="new_transfer" name="new_transfer" style="width: 100%" onchange="updateToField()" >
                                    <?php echo getDropdown('013', ''); ?>
                                </select>
                            </div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="from" id="fromLabel">From</label></div>
                            <div class="three columns">
                                <select id="from" name="from" style="width: 100%">
                                   <?php echo getDropdown('014', ''); ?>
                                </select>
                            </div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="zone">Zone</label></div>
                            <div class="three columns"><input type="number" step="0.001" id="zone" name="zone" value=""></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                    </div>

                    <div class="tab-content" id="tabCpbl">
                        <div class="row">
                            <div class="two columns"><label for="volt_rating" id="labelvoltrating1">Voltage Rating</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="volt_rating" name="volt_rating" value="" > </div>
                            <div class="one columns"><label for="volt_rating" id="labelvoltrating2" style="text-align: left"><b>V</b></label></div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="volt_control" id="labelcoltcontrol1">Voltage Control Accuracy</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="volt_control" name="volt_control" value="" > </div>
                            <div class="one columns"><label for="volt_control" id="labelcoltcontrol2" style="text-align: left"><b>%</b></label></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="curr_rating" id="labelcurrrating1">Current Rating</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="curr_rating" name="curr_rating" value="" > </div>
                            <div class="one columns"><label for="curr_rating" id="labelcurrrating2" style="text-align: left"><b>A</b></label></div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="power_rating" id="labelpowerrating1">Power Rating</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="power_rating" name="power_rating" value="" > </div>
                            <div class="one columns"><label for="power_rating" id="labelpowerrating2" style="text-align: left"><b>W</b></label></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="min_time" id="labelmintimer1">Min. Timer Setting</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="min_time" name="min_time" value="" > </div>
                            <div class="one columns"><label for="min_time" id="labelmintimer2" style="text-align: left"><b>s</b></label></div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="max_time" id="labelmaxtimer1">Max. Timer Setting</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="max_time" name="max_time" value="" > </div>
                            <div class="one columns"><label for="max_time" id="labelmaxtimer2" style="text-align: left"><b>s</b></label></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="min_temp" id="labelmintemp1">Min. Temperature</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="min_temp" name="min_temp" value="" > </div>
                            <div class="one columns"><label for="min_temp" id="labelmintemp2" style="text-align: left"><b>&#176;C</b></label></div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="max_temp" id="labelmaxtemp1">Max. Temperature</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="max_temp" name="max_temp" value="" > </div>
                            <div class="one columns"><label for="max_temp" id="labelmaxtemp2" style="text-align: left"><b>&#176;C</b></label></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="minRh" id="labelminrh1">Min. RH</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="minRh" name="minRh" value="" > </div>
                            <div class="one columns"><label for="minRh" id="labelminrh2" style="text-align: left"><b>%</b></label></div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="maxRh" id="labelmaxrh1">Max. RH</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="maxRh" name="maxRh" value="" > </div>
                            <div class="one columns"><label for="maxRh" id="labelmaxrh2" style="text-align: left"><b>%</b></label></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="min_pressure" id="labelminpressure1">Minimum Pressure</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="min_pressure" name="min_pressure" value="" > </div>
                            <div class="one columns"><label for="min_pressure" id="labelminpressure2" style="text-align: left"><b>psi</b></label></div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="max_pressure" id="labelmaxpressure1">Maximum Pressure</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="max_pressure" name="max_pressure" value="" > </div>
                            <div class="one columns"><label for="max_pressure" id="labelmaxpressure2" style="text-align: left"><b>psi</b></label></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="heat_dissipation" id="labelheat1">Heat Dissipation</label></div>
                            <div class="two columns"><input type="text" id="heat_dissipation" name="heat_dissipation" value="" > </div>
                            <div class="two columns"><label for="heat_dissipation" id="labelheat2" style="text-align: left"><b>W</b></label></div>
                            <div class="two columns" id="labeltempfluc1">
                                <label for="temp_fluctuation">Temperature Fluctuation</label>
                                <label for="toggle_01" class="view-image">Image</label>
                                <input type="checkbox" id="toggle_01">
                                <dialog>
                                    <label for="toggle_01" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                                    <img id="myImg" src="../image/equipment/001.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                </dialog>
                            </div>
                            <div class="two columns">
                                <input type="number" step="0.001" id="temp_fluctuation" name="temp_fluctuation" value="" >
                                </div>
                            <div class="one columns"><label for="temp_fluctuation" id="labeltempfluc2" style="text-align: left"><b>&#176;C</b></label></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns" id="labeltempuniform1">
                                <label for="temp_uniform">Temperature Uniformity</label>
                                <label for="toggle_02" class="view-image">Image</label>
                                <input type="checkbox" id="toggle_02">
                                <dialog>
                                    <label for="toggle_02" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                                    <img id="myImg" src="../image/equipment/002.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                </dialog>
                            </div>
                            <div class="two columns"><input type="number" step="0.001" id="temp_uniform" name="temp_uniform" value="" ></div>
                            <div class="one columns"><label for="temp_uniform" id="labeltempuniform2" style="text-align: left"><b>&#176;C</b></label></div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns" id="labelhumid1">
                                <label for="humid_fluctuation">Humidity Fluctuation</label>
                                <label for="toggle_03" class="view-image">Image</label>
                                <input type="checkbox" id="toggle_03">
                                <dialog>
                                    <label for="toggle_03" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                                    <img id="myImg" src="../image/equipment/003.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                </dialog>
                            </div>
                            <div class="two columns"><input type="number" step="0.001" id="humid_fluctuation" name="humid_fluctuation" value="" > </div>
                            <div class="one columns"><label for="humid_fluctuation" id="labelhumid2" style="text-align: left"><b>%</b></label></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                    </div>

                    <div class="tab-content" id="tabCrtr">
                        <div class="row">
                            <div class="two columns">
                                <label for="no_interior">No. Interior Zones (doors)</label>
                                <label for="toggle_06" class="view-image">Image</label>
                                <input type="checkbox" id="toggle_06">
                                <dialog>
                                    <label for="toggle_06" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                                    <img id="myImg" src="../image/equipment/006.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                </dialog>
                            </div>
                            <div class="two columns"><input type="number" step="0.001" id="no_interior" name="no_interior" value="" > </div>
                            <div class="one columns"><label for="no_interior" style="text-align: left"><b>Zone</b></label></div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns">
                                <label for="ext_dimension_w">External Dimension (W)</label>
                                <label for="toggle_04" class="view-image">Image</label>
                                <input type="checkbox" id="toggle_04">
                                <dialog>
                                    <label for="toggle_04" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                                    <img id="myImg" src="../image/equipment/004.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                </dialog>
                            </div>
                            <div class="two columns"><input type="number" step="0.001" id="ext_dimension_w" name="ext_dimension_w" value="" > </div>
                            <div class="one columns"><label for="ext_dimension_w" style="text-align: left"><b>mm</b></label></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns">
                                <label for="int_volume">Internal Volume</label>
                                <label for="toggle_08" class="view-image">Image</label>
                                <input type="checkbox" id="toggle_08">
                                <dialog>
                                    <label for="toggle_08" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                                    <img id="myImg" src="../image/equipment/008.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                </dialog>
                            </div>
                            <div class="two columns"><input type="number" step="0.001" id="int_volume" name="int_volume" value="" > </div>
                            <div class="one columns"><label for="int_volume" style="text-align: left"><b>L</b></label></div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="ext_dimension_d">(D)</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="ext_dimension_d" name="ext_dimension_d" value="" > </div>
                            <div class="one columns"><label for="ext_dimension_d" style="text-align: left"><b>mm</b></label></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns">
                                <label for="board_orientation">Board Orientation*</label>
                                <label for="toggle_09" class="view-image">Image</label>
                                <input type="checkbox" id="toggle_09">
                                <dialog>
                                    <label for="toggle_09" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                                    <img id="myImg" src="../image/equipment/009.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                </dialog>
                            </div>
                            <div class="three columns">
                                <select id="board_orientation" name="board_orientation" style="width: 100%" >
                                    <?php echo getDropdown('015', ''); ?>
                                </select>
                            </div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="ext_dimension_h">(H)</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="ext_dimension_h" name="ext_dimension_h" value="" > </div>
                            <div class="one columns"><label for="ext_dimension_h" style="text-align: left"><b>mm</b></label></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="rack_material">Rack Material</label></div>
                            <div class="three columns">
                                <input type="text" list="rack_list" autocomplete="off" id="rack_material" name="rack_material">
                                <datalist id="rack_list">
                                    <?php echo getDataList('016', ''); ?>
                                </datalist>
                            </div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns">
                                <label for="int_dimension_w">Internal Dimension (W)</label>
                                <label for="toggle_05" class="view-image">Image</label>
                                <input type="checkbox" id="toggle_05">
                                <dialog>
                                    <label for="toggle_05" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                                    <img id="myImg" src="../image/equipment/005.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                </dialog>
                            </div>
                            <div class="two columns"><input type="number" step="0.001" id="int_dimension_w" name="int_dimension_w" value="" > </div>
                            <div class="one columns"><label for="int_dimension_w" style="text-align: left"><b>mm</b></label></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns">
                                <label for="rack_slot_pitch">Rack Slot-to-Slot Pitch</label>
                                <label for="toggle_10" class="view-image">Image</label>
                                <input type="checkbox" id="toggle_10">
                                <dialog>
                                    <label for="toggle_10" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                                    <img id="myImg" src="../image/equipment/010.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                </dialog>
                            </div>
                            <div class="two columns"><input type="number" step="0.001" id="rack_slot_pitch" name="rack_slot_pitch" value="" ></div>
                            <div class="one columns"><label for="rack_slot_pitch" style="text-align: left"><b>mm</b></label></div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="int_dimension_d">(D)</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="int_dimension_d" name="int_dimension_d" value="" > </div>
                            <div class="one columns"><label for="int_dimension_d" style="text-align: left"><b>mm</b></label></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns">
                                <label for="rack_slot_width">Rack Slot Width</label>
                                <label for="toggle_11" class="view-image">Image</label>
                                <input type="checkbox" id="toggle_11">
                                <dialog>
                                    <label for="toggle_11" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                                    <img id="myImg" src="../image/equipment/011.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                </dialog>
                            </div>
                            <div class="two columns"><input type="number" step="0.001" id="rack_slot_width" name="rack_slot_width" value="" > </div>
                            <div class="one columns"><label for="rack_slot_width" style="text-align: left"><b>mm</b></label></div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="int_dimension_h">(H)</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="int_dimension_h" name="int_dimension_h" value="" > </div>
                            <div class="one columns"><label for="int_dimension_h" style="text-align: left"><b>mm</b></label></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="eqpt_weight">Equipment Weight</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="eqpt_weight" name="eqpt_weight" value="" > </div>
                            <div class="one columns"><label for="eqpt_weight" style="text-align: left"><b>Kg</b></label></div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns">
                                <label for="rack_dimension_w">Rack Dimension (W)</label>
                                <label for="toggle_07" class="view-image">Image</label>
                                <input type="checkbox" id="toggle_07">
                                <dialog>
                                    <label for="toggle_07" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                                    <img id="myImg" src="../image/equipment/007.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                </dialog>
                            </div>
                            <div class="two columns"><input type="number" step="0.001" id="rack_dimension_w" name="rack_dimension_w" value="" > </div>
                            <div class="one columns"><label for="rack_dimension_w" style="text-align: left"><b>mm</b></label></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns">
                                <label for="no_mb_slot">Number of motherboard slots</label>
                                <label for="toggle_12" class="view-image">Image</label>
                                <input type="checkbox" id="toggle_12">
                                <dialog>
                                    <label for="toggle_12" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                                    <img id="myImg" src="../image/equipment/012.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                </dialog>
                            </div>
                            <div class="two columns"><input type="number" step="0.001" id="no_mb_slot" name="no_mb_slot" value="" ></div>
                            <div class="one columns"><label for="no_mb_slot" style="text-align: left"><b>Slot</b></label></div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="rack_dimension_d">(D)</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="rack_dimension_d" name="rack_dimension_d" value="" > </div>
                            <div class="one columns"><label for="rack_dimension_d" style="text-align: left"><b>mm</b></label></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns">
                                <label for="max_ps_bs">Max number of power supplies per board slot</label>
                                <label for="toggle_13" class="view-image">Image</label>
                                <input type="checkbox" id="toggle_13">
                                <dialog>
                                    <label for="toggle_13" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                                    <img id="myImg" src="../image/equipment/013.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                </dialog>
                            </div>
                            <div class="two columns"><input type="number" step="0.001" id="max_ps_bs" name="max_ps_bs" value="" > </div>
                            <div class="one columns"><label for="max_ps_bs" style="text-align: left"><b>Slot</b></label></div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="rack_dimension_h">(H)</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="rack_dimension_h" name="rack_dimension_h" value="" > </div>
                            <div class="one columns"><label for="rack_dimension_h" style="text-align: left"><b>mm</b></label></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns">
                                <label for="max_ps">Max number of power supplies for the entire Equipment</label>
                                <label for="toggle_14" class="view-image">Image</label>
                                <input type="checkbox" id="toggle_14">
                                <dialog>
                                    <label for="toggle_14" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                                    <img id="myImg" src="../image/equipment/014.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                </dialog>
                            </div>
                            <div class="two columns"><input type="number" step="0.001" id="max_ps" name="max_ps" value="" > </div>
                            <div class="one columns"><label for="max_ps" style="text-align: left"><b>Unit</b></label></div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="diameter">Diameter</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="diameter" name="diameter" value="" > </div>
                            <div class="one columns"><label for="diameter" style="text-align: left"><b>mm</b></label></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns">
                                <label for="airflow">Airflow</label>
                                <label for="toggle_15" class="view-image">Image</label>
                                <input type="checkbox" id="toggle_15">
                                <dialog>
                                    <label for="toggle_15" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                                    <img id="myImg" src="../image/equipment/015.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                </dialog>
                            </div>
                            <div class="three columns">
                                <select id="airflow" name="airflow" style="width: 100%" >
                                    <?php echo getDropdown('017', ''); ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="tab-content" id="tabSafe">
                        <div class="row">
                            <div class="two columns"><label for="tempProtection1">Temperature Protection 1</label></div>
                            <div class="three columns">
                                <select id="tempProtection1" name="tempProtection1" style="width: 100%" >
                                    <?php echo getDropdown('022', ''); ?>
                                </select>
                            </div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="tempProtection2">Temperature Protection 2</label></div>
                            <div class="three columns">
                                <select id="tempProtection2" name="tempProtection2" style="width: 100%" >
                                    <?php echo getDropdown('022', ''); ?>
                                </select>
                            </div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="tempThermostat3">Temperature Protection / Thermostat 3</label></div>
                            <div class="three columns">
                                <select id="tempThermostat3" name="tempThermostat3" style="width: 100%" >
                                    <?php echo getDropdown('022', ''); ?>
                                </select>
                            </div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="smoke_detector">Smoke Detector/Alarm</label></div>
                            <div class="three columns">
                                <select id="smoke_detector" name="smoke_detector" style="width: 100%" >
                                    <?php echo getDropdown('022', ''); ?>
                                </select>
                            </div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="press_switch">Pressure Switch</label></div>
                            <div class="three columns">
                                <select id="press_switch" name="press_switch" style="width: 100%" >
                                    <?php echo getDropdown('022', ''); ?>
                                </select>
                            </div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="safety_valve">Safety Valve</label></div>
                            <div class="three columns">
                                <select id="safety_valve" name="safety_valve" style="width: 100%" >
                                    <?php echo getDropdown('022', ''); ?>
                                </select>
                            </div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="emo">EMO button</label></div>
                            <div class="three columns">
                                <select id="emo" name="emo" style="width: 100%" >
                                    <?php echo getDropdown('022', ''); ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="tab-content" id="tabUtlt">
                        <div class="row">
                            <div class="two columns"><label for="voltage" id="labelvoltage1">Voltage</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="voltage" name="voltage" value="" > </div>
                            <div class="one columns"><label for="voltage" id="labelvoltage2" style="text-align: left"><b>V</b></label></div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="current" id="labelcurrent1">Current</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="current" name="current" value="" > </div>
                            <div class="one columns"><label for="current" id="labelcurrent2" style="text-align: left"><b>A</b></label></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="phase" id="labelphase1">Phase</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="phase" name="phase" value="" > </div>
                            <div class="one columns"><label for="phase" id="labelphase2" style="text-align: left"><b>Phase</b></label></div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="exhaust" id="labelexhaust">Exhaust</label></div>
                            <div class="three columns">
                                <select id="exhaust" name="exhaust" style="width: 100%" >
                                    <?php echo getDropdown('028', ''); ?>
                                </select>
                            </div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="chilled_water" id="labelchill">Chilled Water</label></div>
                            <div class="three columns">
                                <select id="chilled_water" name="chilled_water" style="width: 100%">
                                    <?php echo getDropdown('022', ''); ?>
                                </select>
                            </div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="liquid_nitrogen" id="labelliquid">Liquid Nitrogen</label></div>
                            <div class="three columns">
                                <select id="liquid_nitrogen" name="liquid_nitrogen" style="width: 100%" >
                                    <?php echo getDropdown('022', ''); ?>
                                </select>
                            </div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="lan" id="labellan">LAN</label></div>
                            <div class="three columns">
                                <select id="lan" name="lan" style="width: 100%">
                                    <?php echo getDropdown('021', ''); ?>
                                </select>
                            </div>
                            <div class="one columns" >&nbsp;</div>
                            <div class="two columns"><label for="cda" id="labelcda">CDA</label></div>
                            <div class="three columns">
                                <select id="cda" name="cda" style="width: 100%" >
                                    <?php echo getDropdown('021', ''); ?>
                                </select>
                            </div>
                            <div class="one columns" >&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="n2gas" id="labelgas">N2 Gas</label></div>
                            <div class="three columns">
                                <select id="n2gas" name="n2gas" style="width: 100%" onchange="updateGas()">
                                    <?php echo getDropdown('022', ''); ?>
                                </select>
                            </div>
                            <div class="one columns" >&nbsp;</div>
                            <div class="two columns"><label for="oxygen_level" id="labelexygen">Oxygen Level Detector</label></div>
                            <div class="three columns">
                                <select id="oxygen_level" name="oxygen_level" style="width: 100%">
                                    <?php echo getDropdown('022', ''); ?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="di_water" id="labeldiwater">DI Water</label></div>
                            <div class="three columns">
                                <select id="di_water" name="di_water" style="width: 100%" onchange="updateToFieldWater()">
                                    <?php echo getDropdown('022', ''); ?>
                                </select>
                            </div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="water_topup" id="labeltopup">Water Top-up System</label></div>
                            <div class="three columns">
                                <select id="water_topup" name="water_topup" style="width: 100%">
                                    <?php echo getDropdown('030', ''); ?>
                                </select>
                            </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-content" id="tabDaq">
                        <div class="row">
                            <div class="two columns"><label for="daq">DAQ (Realtime Leakage Monitoring)</label></div>
                            <div class="three columns">
                                <select id="daq" name="daq" style="width: 100%">
                                    <?php echo getDropdown('021', ''); ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="tab-content" id="tabInt">
                        <div class="row">
                            <div class="two columns">
                                <label for="int_config_type">Configuration Type</label>
                                <label for="toggle_16" class="view-image">Image</label>
                                <input type="checkbox" id="toggle_16">
                                <dialog>
                                    <label for="toggle_16" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                                    <img id="myImg" src="../image/equipment/016.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                </dialog>
                            </div>
                            <div class="three columns">
                                <select id="int_config_type" name="int_config_type" style="width: 100%" onchange="updateDiv()">
                                    <?php echo getDropdown('031', ''); ?>
                                </select>
                            </div>
                        </div>
                        
                        <div class="row" id="divvoltcurrent">
                            <div class="two columns"><label for="conn_volt_rating">Connector Voltage Rating</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="conn_volt_rating" name="conn_volt_rating" value="" > </div>
                            <div class="one columns"><label for="conn_volt_rating" style="text-align: left"><b>V</b></label></div>
                            <div class="one columns">
                                <label for="toggle_17" class="view-image">Image</label>
                                <input type="checkbox" id="toggle_17">
                                <dialog>
                                    <label for="toggle_17" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                                    <img id="myImg" src="../image/equipment/017.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                </dialog>
                            </div>
                            <div class="two columns"><label for="conn_curr_rating">Connector Current Rating</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="conn_curr_rating" name="conn_curr_rating" value="" > </div>
                            <div class="one columns"><label for="conn_curr_rating" style="text-align: left"><b>A</b></label></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="conn_temp_rating" id="labelconntemprate1">Connector Temp Rating</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="conn_temp_rating" name="conn_temp_rating" value="" > </div>
                            <div class="one columns"><label for="conn_temp_rating" id="labelconntemprate2" style="text-align: left"><b>&#176;C</b></label></div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="banana_jack_hole" id="labelbananajack1">No. Banana Jack Holes</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="banana_jack_hole" name="banana_jack_hole" value="" > </div>
                            <div class="one columns"><label for="banana_jack_hole" id="labelbananajack2" style="text-align: left"><b>Pins</b></label></div>
                        </div>
                        <div class="row" id="divPin">
                            <div class="two columns"><label for="no_pins">No. of Pins</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="no_pins" name="no_pins" value="" > </div>
                            <div class="one columns"><label for="no_pins" style="text-align: left"><b>Pins</b></label></div>
                            <div class="one columns">
                                <label for="toggle_18" class="view-image">Image</label>
                                <input type="checkbox" id="toggle_18">
                                <dialog>
                                    <label for="toggle_18" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                                    <img id="myImg" src="../image/equipment/018.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                </dialog>
                            </div>
                            <div class="two columns"><label for="pin_pitch">Pin Pitch</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="pin_pitch" name="pin_pitch" value="" > </div>
                            <div class="one columns"><label for="pin_pitch" style="text-align: left"><b>mm</b></label></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row" id="divconrack">
                            <div class="two columns"><label for="conn_rack">No. Wires Connected to Rack</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="conn_rack" name="conn_rack" value="" > </div>
                            <div class="one columns"><label for="conn_rack" style="text-align: left"><b>&#176;C</b></label></div>
                        </div>
                        <div class="row" id="WireDiv" name="WireDiv"" style="display: none;">
                            <div class="row">
                                <div class="two columns"><label for="wire_volt_rating">Wire Voltage Rating</label></div>
                                <div class="two columns"><input type="number" step="0.001" id="wire_volt_rating" name="wire_volt_rating" value="" > </div>
                                <div class="one columns"><label for="wire_volt_rating" style="text-align: left"><b>V</b></label></div>
                                <div class="one columns">&nbsp;</div>
                                <div class="two columns"><label for="wire_curr_rating">Wire Current Rating</label></div>
                                <div class="two columns"><input type="number" step="0.001" id="wire_curr_rating" name="wire_curr_rating" value="" > </div>
                                <div class="one columns"><label for="wire_curr_rating" style="text-align: left"><b>A</b></label></div>
                                <div class="one columns">&nbsp;</div>
                            </div>
                            <div class="row">
                                <div class="two columns"><label for="wire_temp_rating">Wire Temp Rating</label></div>
                                <div class="two columns"><input type="number" step="0.001" id="wire_temp_rating" name="wire_temp_rating" value=""> </div>
                                <div class="one columns"><label for="wire_temp_rating" style="text-align: left"><b>&#176;C</b></label></div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-content" id="tabExt">
                        <div class="row">
                            <div class="two columns">
                                <label for="ext_config_type">Configuration Type</label>
                                <label for="toggle_20" class="view-image">Image</label>
                                <input type="checkbox" id="toggle_20">
                                <dialog>
                                    <label for="toggle_20" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                                    <img id="myImg" src="../image/equipment/020.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                </dialog>
                            </div>
                            <div class="three columns">
                                <select id="ext_config_type" name="ext_config_type" style="width: 100%" ">
                                    <?php echo getDropdown('032', ''); ?>
                                </select>
                            </div>
                        </div>
                        <div class="row" id="viewExternalDiv" name="viewExternalDiv" style="display: none;">
                            <div class="row">
                                <div class="two columns"><label for="interface_volt_rating">Interface Voltage Rating</label></div>
                                <div class="two columns"><input type="number" step="0.001" id="interface_volt_rating" name="interface_volt_rating" value="" > </div>
                                <div class="one columns"><label for="interface_volt_rating" style="text-align: left"><b>V</b></label></div>
                                <div class="one columns">&nbsp;</div>
                                <div class="two columns"><label for="interface_curr_rating">Interface Current Rating</label></div>
                                <div class="two columns"><input type="number" step="0.001" id="interface_curr_rating" name="interface_curr_rating" value="" > </div>
                                <div class="one columns"><label for="interface_curr_rating" style="text-align: left"><b>A</b></label></div>
                                <div class="one columns">&nbsp;</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                

                    <h6 id="general">General</h6>
                    <div class="row">
                        <div class="two columns"><label for="lab_location">Lab Location *</label></div>
                        <div class="three columns">
                            <input type="text" id="lab_location" name="lab_location" value="<?php echo getParameterValue($rowForm['lab_location']); ?>" required readonly />
                        </div>
                        <div class="one columns">&nbsp;</div>
                        <div class="two columns"><label for="strategy">onsemi Strategy *</label></div>
                        <div class="three columns">
                            <input type="text" id="strategy" name="strategy" value="<?php echo getParameterValue($rowForm['strategy']); ?>" required readonly>
                        </div>
                        <div class="one columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="standardization">Standardization Category *</label></div>
                        <div class="three columns">
                            <input type="text" id="standardization" name="standardization" value="<?php echo getParameterValue($rowForm['standard_category']); ?>" required readonly>
                        </div>
                        <div class="one columns">&nbsp;</div>
                        <div class="two columns"><label for="champion">Champion *</label></div>
                        <div class="three columns">
                            <input type="text" id="champion" name="champion" value="<?php echo getParameterValue($rowForm['champion']); ?>" required readonly>
                        </div>
                        <div class="one columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="relTest">Rel Test *</label></div>
                        <div class="three columns">
                            <input type="text" id="relTest" name="relTest" value="<?php echo getParameterValues($rowForm['rel_test']); ?>" required readonly>
                        </div>
                        <div class="one columns">&nbsp;</div>
                    </div>

                    <h6 id="identity">Equipment Identity</h6>
                    <div class="row">
                        <div class="two columns"><label for="eqpt_id">Equipment ID *</label></div>
                        <div class="three columns">
                            <input type="text" id="eqpt_id" name="eqpt_id" value="<?php echo getParameterValue($rowForm['eqpt_id']); ?>" required readonly>
                        </div>
                        <div class="one columns">&nbsp;</div>
                        <div class="two columns"><label for="dedicated">Dedicated/Share</label></div>
                        <div class="three columns">
                            <input type="text" id="dedicated" name="dedicated" value="<?php echo getParameterValue($rowForm['dedicate_usage']); ?>" required readonly>
                        </div>
                        <div class="one columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="manufacturer">Equipment Manufacturer *</label></div>
                        <div class="three columns">
                            <input type="text" id="manufacturer" name="manufacturer" value="<?php echo getParameterValue($rowForm['manufacturer']); ?>" required readonly>
                        </div>
                        <div class="one columns">&nbsp;</div>
                        <div class="two columns"><label for="model">Equipment Model *</label></div>
                        <div class="three columns">
                            <input type="text" id="model" name="model" value="<?php echo getParameterValue($rowForm['eqpt_model']); ?>" required readonly>
                        </div>
                        <div class="one columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="mfg_date">Equipment Mfg Date</label></div>
                        <div class="three columns"><input type="text" id="mfg_date" name="mfg_date" value="<?php echo $rowForm['eqpt_mfg_date']; ?>" required readonly></div>
                        <div class="one columns">&nbsp;</div>
                        <div class="two columns"><label for="asset_no">Equipment Asset No</label></div>
                        <div class="three columns"><input type="text" id="asset_no" name="asset_no" value="<?php echo $rowForm['eqpt_asset_no']; ?>" required readonly></div>
                        <div class="one columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="new_transfer">New/Transfer Equipment</label></div>
                        <div class="three columns">
                            <input type="text" id="new_transfer" name="new_transfer" value="<?php echo getParameterValue($rowForm['new_transfer_eqpt']); ?>" required readonly>
                        </div>
                        <?php
                        $checkLocation = getParameterValue($rowForm['new_transfer_eqpt']);
                        if ($checkLocation == "Transfer") {
                            ?>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns">
                                <label for="from">From</label>
                            </div>
                            <div class="three columns">
                                <input type="text" id="from" name="from" value="<?php echo getParameterValue($rowForm['transfer_eqpt_location']); ?>" required readonly>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="zone">Zone</label></div>
                        <div class="three columns"><input type="number" step="0.001" id="zone" name="zone" value="<?php echo $rowForm['zone']; ?>" required readonly></div>
                    </div>

                    <h6 id="capability">Capability</h6>
                    <div class="row">
                        <div class="two columns"><label for="volt_rating">Voltage Rating</label></div>
                        <div class="two columns"><input type="number" step="0.001" id="voltRating" name="voltRating" value="<?php echo $rowForm['eqpt_volt_rating']; ?>" required readonly> </div>
                        <div class="one columns"><label for="volt_rating" style="text-align: left"><b>V</b></label></div>
                        <div class="one columns">&nbsp;</div>
                        <div class="two columns"><label for="volt_control">Voltage Control Accuracy</label></div>
                        <div class="two columns"><input type="number" step="0.001" id="voltControl" name="voltControl" value="<?php echo $rowForm['volt_control_accuracy']; ?>" required readonly> </div>
                        <div class="one columns"><label for="volt_control" style="text-align: left"><b>%</b></label></div>
                        <div class="one columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="curr_rating">Current Rating</label></div>
                        <div class="two columns"><input type="number" step="0.001" id="curr_rating" name="curr_rating" value="<?php echo $rowForm['current_rating']; ?>" required readonly> </div>
                        <div class="one columns"><label for="curr_rating" style="text-align: left"><b>A</b></label></div>
                        <div class="one columns">&nbsp;</div>
                        <div class="two columns"><label for="power_rating">Power Rating</label></div>
                        <div class="two columns"><input type="number" step="0.001" id="power_rating" name="power_rating" value="<?php echo $rowForm['power_rating']; ?>" required readonly> </div>
                        <div class="one columns"><label for="power_rating" style="text-align: left"><b>%</b></label></div>
                        <div class="one columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="min_time">Min. Timer Setting</label></div>
                        <div class="two columns"><input type="number" step="0.001" id="min_time" name="min_time" value="<?php echo $rowForm['min_time_setting']; ?>" required readonly> </div>
                        <div class="one columns"><label for="min_time" style="text-align: left"><b>s</b></label></div>
                        <div class="one columns">&nbsp;</div>
                        <div class="two columns"><label for="max_time">Max. Timer Setting</label></div>
                        <div class="two columns"><input type="number" step="0.001" id="max_time" name="max_time" value="<?php echo $rowForm['max_time_setting']; ?>" required readonly> </div>
                        <div class="one columns"><label for="max_time" style="text-align: left"><b>s</b></label></div>
                        <div class="one columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="min_temp">Min. Temperature</label></div>
                        <div class="two columns"><input type="number" step="0.001" id="minTemp" name="minTemp" value="<?php echo $rowForm['min_temp']; ?>" required readonly> </div>
                        <div class="one columns"><label for="min_temp" style="text-align: left"><b>&#176;C</b></label></div>
                        <div class="one columns">&nbsp;</div>
                        <div class="two columns"><label for="max_temp">Max. Temperature</label></div>
                        <div class="two columns"><input type="number" step="0.001" id="maxTemp" name="maxTemp" value="<?php echo $rowForm['max_temp']; ?>" required readonly> </div>
                        <div class="one columns"><label for="max_temp" style="text-align: left"><b>&#176;C</b></label></div>
                        <div class="one columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="minRh">Min. RH</label></div>
                        <div class="two columns"><input type="number" step="0.001" id="minRh" name="minRh" value="<?php echo $rowForm['min_rh']; ?>" required readonly> </div>
                        <div class="one columns"><label for="minRh" style="text-align: left"><b>%</b></label></div>
                        <div class="one columns">&nbsp;</div>
                        <div class="two columns"><label for="maxRh">Max. RH</label></div>
                        <div class="two columns"><input type="number" step="0.001" id="maxRh" name="maxRh" value="<?php echo $rowForm['max_rh']; ?>" required readonly> </div>
                        <div class="one columns"><label for="maxRh" style="text-align: left"><b>%</b></label></div>
                        <div class="one columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="min_pressure">Minimum Pressure</label></div>
                        <div class="two columns"><input type="number" step="0.001" id="min_pressure" name="min_pressure" value="<?php echo $rowForm['min_pressure']; ?>" required readonly> </div>
                        <div class="one columns"><label for="min_pressure" style="text-align: left"><b>psi</b></label></div>
                        <div class="one columns">&nbsp;</div>
                        <div class="two columns"><label for="max_pressure">Maximum Pressure</label></div>
                        <div class="two columns"><input type="number" step="0.001" id="max_pressure" name="max_pressure" value="<?php echo $rowForm['max_pressure']; ?>" required readonly> </div>
                        <div class="one columns"><label for="max_pressure" style="text-align: left"><b>psi</b></label></div>
                        <div class="one columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="heat_dissipation">Heat Dissipation</label></div>
                        <div class="two columns"><input type="text" id="heatDissipation" name="heatDissipation" value="<?php echo $rowForm['heat_dissipation']; ?>" required readonly> </div>
                        <div class="two columns"><label for="heat_dissipation" style="text-align: left"><b>W</b></label></div>
                        <!--<div class="two columns">&nbsp;</div>-->
                        <div class="two columns"><label for="temp_fluctuation">Temperature Fluctuation</label></div>
                        <div class="two columns"><input type="number" step="0.001" id="tempFluctuation" name="tempFluctuation" value="<?php echo $rowForm['temp_fluctuation']; ?>" required readonly> </div>
                        <div class="one columns"><label for="temp_fluctuation" style="text-align: left"><b>&#176;C</b></label></div>
                        <div class="one columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="temp_uniform">Temperature Uniformity</label></div>
                        <div class="two columns"><input type="number" step="0.001" id="tempUniform" name="tempUniform" value="<?php echo $rowForm['temp_uniformity']; ?>" required readonly> </div>
                        <div class="one columns"><label for="temp_uniform" style="text-align: left"><b>&#176;C</b></label></div>
                        <div class="one columns">&nbsp;</div>
                        <div class="two columns"><label for="humid_fluctuation">Humidity Fluctuation</label></div>
                        <div class="two columns"><input type="number" step="0.001" id="humidFluctuation" name="humidFluctuation" value="<?php echo $rowForm['humid_fluctuation']; ?>" required readonly> </div>
                        <div class="one columns"><label for="humid_fluctuation" style="text-align: left"><b>%</b></label></div>
                        <div class="one columns">&nbsp;</div>
                    </div>

                    <h6 id="characteristic">Characteristic</h6>
                    <div class="row">
                        <div class="two columns"><label for="no_interior">No. Interior Zones (doors)</label></div>
                        <div class="two columns"><input type="number" step="0.001" id="noInterior" name="noInterior" value="<?php echo $rowForm['no_interior_zone']; ?>" required readonly> </div>
                        <div class="one columns"><label for="no_interior" style="text-align: left"><b>Zone</b></label></div>
                        <div class="one columns">&nbsp;</div>
                        <div class="two columns"><label for="ext_dimension_w">External Dimension (W)</label></div>
                        <div class="two columns"><input type="number" step="0.001" id="extDimensionW" name="extDimensionW" value="<?php echo $rowForm['ext_dimension_w']; ?>" required readonly></div>
                        <div class="one columns"><label for="ext_dimension_w" style="text-align: left"><b>mm</b></label></div>
                        <div class="one columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="int_volume">Internal Volume</label></div>
                        <div class="two columns"><input type="number" step="0.001" id="intVolume" name="intVolume" value="<?php echo $rowForm['int_vol']; ?>" required readonly> </div>
                        <div class="one columns"><label for="int_volume" style="text-align: left"><b>L</b></label></div>
                        <div class="one columns">&nbsp;</div>
                        <div class="two columns"><label for="ext_dimension_d">(D)</label></div>
                        <div class="two columns"><input type="number" step="0.001" id="extDimensionD" name="extDimensionD" value="<?php echo $rowForm['ext_dimension_d']; ?>" required readonly> </div>
                        <div class="one columns"><label for="ext_dimension_d" style="text-align: left"><b>mm</b></label></div>
                        <div class="one columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="board_orientation">Board Orientation*</label></div>
                        <div class="three columns">
                            <input type="text" id="boardOrientation" name="boardOrientation" value="<?php echo getParameterValue($rowForm['board_orientation']); ?>" required readonly>
                        </div>
                        <div class="one columns">&nbsp;</div>
                        <div class="two columns"><label for="ext_dimension_h">(H)</label></div>
                        <div class="two columns"><input type="number" step="0.001" id="extDimensionH" name="extDimensionH" value="<?php echo $rowForm['ext_dimension_h']; ?>" required readonly> </div>
                        <div class="one columns"><label for="ext_dimension_h" style="text-align: left"><b>mm</b></label></div>
                        <div class="one columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="rack_material">Rack Material</label></div>
                        <div class="three columns">
                            <input type="text" id="rackMaterial" name="rackMaterial" value="<?php echo getParameterValue($rowForm['rack_material']); ?>" required readonly>
                        </div>
                        <div class="one columns">&nbsp;</div>
                        <div class="two columns"><label for="int_dimension_w">Internal Dimension (W)</label></div>
                        <div class="two columns"><input type="number" step="0.001" id="intDimensionW" name="intDimensionW" value="<?php echo $rowForm['int_dimension_w']; ?>" required readonly> </div>
                        <div class="one columns"><label for="int_dimension_w" style="text-align: left"><b>mm</b></label></div>
                        <div class="one columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="rack_slot_pitch">Rack Slot-to-Slot Pitch</label></div>
                        <div class="two columns"><input type="number" step="0.001" id="rackSlotPitch" name="rackSlotPitch" value="<?php echo $rowForm['rack_slot_pitch']; ?>" required readonly></div>
                        <div class="one columns"><label for="rack_slot_pitch" style="text-align: left"><b>mm</b></label></div>
                        <div class="one columns">&nbsp;</div>
                        <div class="two columns"><label for="int_dimension_d">(D)</label></div>
                        <div class="two columns"><input type="number" step="0.001" id="intDimensionD" name="intDimensionD" value="<?php echo $rowForm['int_dimension_d']; ?>" required readonly></div>
                        <div class="one columns"><label for="int_dimension_d" style="text-align: left"><b>mm</b></label></div>
                        <div class="one columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="rack_slot_width">Rack Slot Width</label></div>
                        <div class="two columns"><input type="number" step="0.001" id="rackSLotWidth" name="rackSLotWidth" value="<?php echo $rowForm['rack_slot_width']; ?>" required readonly> </div>
                        <div class="one columns"><label for="rack_slot_width" style="text-align: left"><b>mm</b></label></div>
                        <div class="one columns">&nbsp;</div>
                        <div class="two columns"><label for="int_dimension_h">(H)</label></div>
                        <div class="two columns"><input type="number" step="0.001" id="intDimensionH" name="intDimensionH" value="<?php echo $rowForm['int_dimension_h']; ?>" required readonly> </div>
                        <div class="one columns"><label for="int_dimension_h" style="text-align: left"><b>mm</b></label></div>
                        <div class="one columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="eqpt_weight">Equipment Weight</label></div>
                        <div class="two columns"><input type="number" step="0.001" id="eqptWeight" name="eqptWeight" value="<?php echo $rowForm['eqpt_weight']; ?>" required readonly> </div>
                        <div class="one columns"><label for="eqpt_weight" style="text-align: left"><b>Kg</b></label></div>
                        <div class="one columns">&nbsp;</div>
                        <div class="two columns"><label for="rack_dimension_w">Rack Dimension (W)</label></div>
                        <div class="two columns"><input type="number" step="0.001" id="rackDimensionW" name="rackDimensionW" value="<?php echo $rowForm['rack_dimension_w']; ?>" required readonly> </div>
                        <div class="one columns"><label for="rack_dimension_w" style="text-align: left"><b>mm</b></label></div>
                        <div class="one columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="no_mb_slot">Number of motherboard slots</label></div>
                        <div class="two columns"><input type="number" step="0.001" id="noMbSlot" name="noMbSlot" value="<?php echo $rowForm['no_mb_slot']; ?>" required readonly></div>
                        <div class="one columns"><label for="no_mb_slot" style="text-align: left"><b>Slot</b></label></div>
                        <div class="one columns">&nbsp;</div>
                        <div class="two columns"><label for="rack_dimension_d">(D)</label></div>
                        <div class="two columns"><input type="number" step="0.001" id="rackDimensionD" name="rackDimensionD" value="<?php echo $rowForm['rack_dimension_d']; ?>" required readonly> </div>
                        <div class="one columns"><label for="rack_dimension_d" style="text-align: left"><b>mm</b></label></div>
                        <div class="one columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="max_ps_bs">Max number of power supplies per board slot</label></div>
                        <div class="two columns"><input type="number" step="0.001" id="maxPsBs" name="maxPsBs" value="<?php echo $rowForm['max_ps_slot']; ?>" required readonly> </div>
                        <div class="one columns"><label for="max_ps_bs" style="text-align: left"><b>Slot</b></label></div>
                        <div class="one columns">&nbsp;</div>
                        <div class="two columns"><label for="rack_dimension_h">(H)</label></div>
                        <div class="two columns"><input type="number" step="0.001" id="rackDimensionH" name="rackDimensionH" value="<?php echo $rowForm['rack_dimension_h']; ?>" required readonly> </div>
                        <div class="one columns"><label for="rack_dimension_h" style="text-align: left"><b>mm</b></label></div>
                        <div class="one columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="max_ps">Max number of power supplies for the entire Equipment</label></div>
                        <div class="two columns"><input type="number" step="0.001" id="maxPs" name="maxPs" value="<?php echo $rowForm['max_ps_eqpt']; ?>" required readonly> </div>
                        <div class="one columns"><label for="max_ps" style="text-align: left"><b>Unit</b></label></div>
                        <div class="one columns">&nbsp;</div>
                        <div class="two columns"><label for="diameter">Diameter</label></div>
                        <div class="two columns"><input type="number" step="0.001" id="diameter" name="diameter" value="<?php echo $rowForm['diameter']; ?>" required readonly> </div>
                        <div class="one columns"><label for="diameter" style="text-align: left"><b>mm</b></label></div>
                        <div class="one columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="airflow">Airflow</label></div>
                        <div class="three columns">
                            <input type="text" id="airflow" name="airflow" value="<?php echo getParameterValue($rowForm['airflow']); ?>" required readonly>
                        </div>
                    </div>

                    <h6 id="safety">Safety</h6>
                    <div class="row">
                        <div class="two columns"><label for="tempProtection1">Temperature Protection 1</label></div>
                        <div class="three columns">
                            <input type="text" id="tempProtection1" name="tempProtection1" value="<?php echo getParameterValue($rowForm['temp_protection_1']); ?>" required readonly>
                        </div>
                        <div class="one columns">&nbsp;</div>
                        <div class="two columns"><label for="tempProtection2">Temperature Protection 2</label></div>
                        <div class="three columns">
                            <input type="text" id="tempProtection2" name="tempProtection2" value="<?php echo getParameterValue($rowForm['temp_protection_2']); ?>" required readonly>
                        </div>
                        <div class="one columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="tempThermostat3">Temperature Protection / Thermostat 3</label></div>
                        <div class="three columns">
                            <input type="text" id="tempThermostat3" name="tempThermostat3" value="<?php echo getParameterValue($rowForm['temp_protection_3']); ?>" required readonly>
                        </div>
                        <div class="one columns">&nbsp;</div>
                        <div class="two columns"><label for="smoke_detector">Smoke Detector/Alarm</label></div>
                        <div class="three columns">
                            <input type="text" id="smokeDetector" name="smokeDetector" value="<?php echo getParameterValue($rowForm['smoke_alarm']); ?>" required readonly>
                        </div>
                        <div class="one columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="press_switch">Pressure Switch</label></div>
                        <div class="three columns">
                            <input type="text" id="press_switch" name="press_switch" value="<?php echo getParameterValue($rowForm['pressure_switch']); ?>" required readonly>
                        </div>
                        <div class="one columns">&nbsp;</div>
                        <div class="two columns"><label for="safety_valve">Safety Valve</label></div>
                        <div class="three columns">
                            <input type="text" id="safety_valve" name="safety_valve" value="<?php echo getParameterValue($rowForm['safety_valve']); ?>" required readonly>
                        </div>
                        <div class="one columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="emo">EMO button</label></div>
                        <div class="three columns">
                            <input type="text" id="emo" name="emo" value="<?php echo getParameterValue($rowForm['emo_btn']); ?>" required readonly>
                        </div>
                    </div>

                    <h6 id="utilities">Utilities</h6>
                    <div class="row">
                        <div class="two columns"><label for="voltage">Voltage</label></div>
                        <div class="two columns"><input type="number" step="0.001" id="voltage" name="voltage" value="<?php echo $rowForm['voltage']; ?>" required readonly> </div>
                        <div class="one columns"><label for="voltage" style="text-align: left"><b>V</b></label></div>
                        <div class="one columns">&nbsp;</div>
                        <div class="two columns"><label for="phase">Phase</label></div>
                        <div class="two columns"><input type="number" step="0.001" id="phase" name="phase" value="<?php echo $rowForm['phase']; ?>" required readonly> </div>
                        <div class="one columns"><label for="phase" style="text-align: left"><b>Phase</b></label></div>
                        <div class="one columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="current">Current</label></div>
                        <div class="two columns"><input type="number" step="0.001" id="current" name="current" value="<?php echo $rowForm['current']; ?>" required readonly> </div>
                        <div class="one columns"><label for="current" style="text-align: left"><b>A</b></label></div>
                        <div class="one columns">&nbsp;</div>
                        <div class="two columns"><label for="exhaust">Exhaust</label></div>
                        <div class="three columns">
                            <input type="text" id="exhaust" name="exhaust" value="<?php echo getParameterValue($rowForm['exhaust']); ?>" required readonly>
                        </div>
                        <div class="one columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="liquid_nitrogen">Liquid Nitrogen</label></div>
                        <div class="three columns">
                            <input type="text" id="liquid_nitrogen" name="liquid_nitrogen" value="<?php echo getParameterValue($rowForm['liquid_nitrogen']); ?>" required readonly>
                        </div>
                        <div class="one columns">&nbsp;</div>
                        <div class="two columns"><label for="chilled_water">Chilled Water</label></div>
                        <div class="three columns">
                            <input type="text" id="chilled_water" name="chilled_water" value="<?php echo getParameterValue($rowForm['chilled_water']); ?>" required readonly>
                        </div>
                        <div class="one columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="cda">CDA</label></div>
                        <div class="three columns">
                            <input type="text" id="cda" name="cda" value="<?php echo getParameterValue($rowForm['cda']); ?>" required readonly>
                        </div>
                        <div class="one columns">&nbsp;</div>
                        <div class="two columns"><label for="lan">LAN</label></div>
                        <div class="three columns">
                            <input type="text" id="lan" name="lan" value="<?php echo getParameterValue($rowForm['lan']); ?>" required readonly>
                        </div>
                        <div class="one columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="n2gas">N2 Gas</label></div>
                        <div class="three columns">
                            <input type="text" id="n2gas" name="n2gas" value="<?php echo getParameterValue($rowForm['n2_gas']); ?>" required readonly>
                        </div>
                        <div class="six columns" id="oxygen" style="display: none;">
                            <div class="three columns"><label for="oxygen_level">Oxygen Level Detector</label></div>
                            <div class="three columns">
                                <input type="text" id="oxygen_level" name="oxygen_level" value="<?php echo getParameterValue($rowForm['oxygen_level_detector']); ?>" required readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="di_water">DI Water</label></div>
                        <div class="three columns">
                            <input type="text" id="diWater" name="diWater" value="<?php echo getParameterValue($rowForm['di_water']); ?>" required readonly>
                        </div>
                        <?php
                        $checkWater = getParameterValue($rowForm['di_water']);
                        if ($checkWater == "Available") {
                            ?>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="water_topup">Water Top-up System</label></div>
                            <div class="three columns">
                                <input type="text" id="waterTopup" name="waterTopup" value="<?php echo getParameterValue($rowForm['water_topup_system']); ?>" required readonly>
                            </div>
                        <?php } ?>
                    </div>

                    <h6 id="daqt">DAQ</h6>
                    <div class="row">
                        <div class="two columns"><label for="daq">DAQ (Realtime Leakage Monitoring)</label></div>
                        <div class="three columns">
                            <input type="text" id="daq" name="daq" value="<?php echo getParameterValue($rowForm['daq']); ?>" required readonly>
                        </div>
                    </div>

                    <h6 id="intconfig">Internal Chamber Configuration</h6>
                    <div class="row">
                        <div class="two columns"><label for="int_config_type">Configuration Type</label></div>
                        <div class="three columns">
                            <input type="text" id="int_config_type" name="int_config_type" value="<?php echo getParameterValue($rowForm['internal_config_type']); ?>" required readonly>
                        </div>
                    </div>

                    <?php
                    $dataCheck = getParameterValue($rowForm['internal_config_type']);
                    if ($dataCheck == "Banana") { ?>
                        <div class="row">
                            <div class="two columns"><label for="banana_jack_hole">No. Banana Jack Holes</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="banana_jack_hole" name="banana_jack_hole" value="<?php echo $rowForm['no_banana_jack_hole']; ?>" > </div>
                            <div class="one columns"><label for="banana_jack_hole" style="text-align: left"><b>Pins</b></label></div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="conn_volt_rating">Connector Voltage Rating</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="conn_volt_rating" name="conn_volt_rating" value="<?php echo $rowForm['conn_volt_rating']; ?>" > </div>
                            <div class="one columns"><label for="conn_volt_rating" style="text-align: left"><b>V</b></label></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="conn_curr_rating">Connector Current Rating</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="conn_curr_rating" name="conn_curr_rating" value="<?php echo $rowForm['conn_current_rating']; ?>" > </div>
                            <div class="one columns"><label for="conn_curr_rating" style="text-align: left"><b>A</b></label></div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="conn_temp_rating">Connector Temp Rating</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="conn_temp_rating" name="conn_temp_rating" value="<?php echo $rowForm['conn_temp_rating']; ?>" > </div>
                            <div class="one columns"><label for="conn_temp_rating" style="text-align: left"><b>&#176;C</b></label></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                    <?php } else if ($dataCheck === "Edge Connector") { ?>
                        <div class="row">
                            <div class="two columns"><label for="no_pins">No. of Pins</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="no_pins" name="no_pins" value="<?php echo $rowForm['no_pin']; ?>" > </div>
                            <div class="one columns"><label for="no_pins" style="text-align: left"><b>Pins</b></label></div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="pin_pitch">Pin Pitch</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="pin_pitch" name="pin_pitch" value="<?php echo $rowForm['pin_pitch']; ?>" > </div>
                            <div class="one columns"><label for="pin_pitch" style="text-align: left"><b>mm</b></label></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="conn_volt_rating">Connector Voltage Rating</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="conn_volt_rating" name="conn_volt_rating" value="<?php echo $rowForm['conn_volt_rating']; ?>" > </div>
                            <div class="one columns"><label for="conn_volt_rating" style="text-align: left"><b>V</b></label></div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="conn_curr_rating">Connector Current Rating</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="conn_curr_rating" name="conn_curr_rating" value="<?php echo $rowForm['conn_current_rating']; ?>" > </div>
                            <div class="one columns"><label for="conn_curr_rating" style="text-align: left"><b>A</b></label></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="conn_temp_rating">Connector Temp Rating</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="conn_temp_rating" name="conn_temp_rating" value="<?php echo $rowForm['conn_temp_rating']; ?>" > </div>
                            <div class="one columns"><label for="conn_temp_rating" style="text-align: left"><b>&#176;C</b></label></div>
                        </div>
                    <?php } else if ($dataCheck === "Winchestor") { ?>
                        <div class="row">
                            <div class="two columns"><label for="no_pins">No. of Pins</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="no_pins" name="no_pins" value="<?php echo $rowForm['no_pin']; ?>" > </div>
                            <div class="one columns"><label for="no_pins" style="text-align: left"><b>Pins</b></label></div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="pin_pitch">Pin Pitch</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="pin_pitch" name="pin_pitch" value="<?php echo $rowForm['pin_pitch']; ?>" > </div>
                            <div class="one columns"><label for="pin_pitch" style="text-align: left"><b>mm</b></label></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="conn_volt_rating">Connector Voltage Rating</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="conn_volt_rating" name="conn_volt_rating" value="<?php echo $rowForm['conn_volt_rating']; ?>" > </div>
                            <div class="one columns"><label for="conn_volt_rating" style="text-align: left"><b>V</b></label></div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="conn_curr_rating">Connector Current Rating</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="conn_curr_rating" name="conn_curr_rating" value="<?php echo $rowForm['conn_current_rating']; ?>" > </div>
                            <div class="one columns"><label for="conn_curr_rating" style="text-align: left"><b>A</b></label></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="conn_rack">No. Wires Connected to Rack</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="conn_rack" name="conn_rack" value="<?php echo $rowForm['no_wire_conn_rack']; ?>" > </div>
                            <div class="one columns"><label for="conn_rack" style="text-align: left"><b>&#176;C</b></label></div>
                        </div>
                    <?php } else if ($dataCheck === "Wires") { ?>
                        <div class="row">
                            <div class="two columns"><label for="wire_volt_rating">Wire Voltage Rating</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="wire_volt_rating" name="wire_volt_rating" value="<?php echo $rowForm['wire_volt_rating']; ?>" > </div>
                            <div class="one columns"><label for="wire_volt_rating" style="text-align: left"><b>V</b></label></div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="wire_curr_rating">Wire Current Rating</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="wire_curr_rating" name="wire_curr_rating" value="<?php echo $rowForm['wire_curr_rating']; ?>" > </div>
                            <div class="one columns"><label for="wire_curr_rating" style="text-align: left"><b>A</b></label></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="wire_temp_rating">Wire Temp Rating</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="wire_temp_rating" name="wire_temp_rating" value="<?php echo $rowForm['wire_temp_rating']; ?>" > </div>
                            <div class="one columns"><label for="wire_temp_rating" style="text-align: left"><b>&#176;C</b></label></div>
                        </div>
                    <?php } ?>

                    <h6 id="extconfig">External Chamber Configuration</h6>
                    <div class="row">
                        <div class="two columns"><label for="ext_config_type">Configuration Type</label></div>
                        <div class="three columns">
                            <input type="text" id="ext_config_type" name="ext_config_type" value="<?php echo getParameterValue($rowForm['ext_config_type']); ?>" required readonly>
                        </div>
                    </div>
                    <?php
                    $dataCheckExt = getParameterValue($rowForm['ext_config_type']);
                    if ($dataCheckExt !== "NA") {
                        ?>
                        <div class="row">
                            <div class="row">
                                <div class="two columns"><label for="interface_volt_rating">Interface Voltage Rating</label></div>
                                <div class="two columns"><input type="number" step="0.001" id="interface_volt_rating" name="interface_volt_rating" value="<?php echo $rowForm['interface_volt_rating']; ?>" > </div>
                                <div class="one columns"><label for="interface_volt_rating" style="text-align: left"><b>V</b></label></div>
                                <div class="one columns">&nbsp;</div>
                                <div class="two columns"><label for="interface_curr_rating">Interface Current Rating</label></div>
                                <div class="two columns"><input type="number" step="0.001" id="interface_curr_rating" name="interface_curr_rating" value="<?php echo $rowForm['interface_current_rating']; ?>" > </div>
                                <div class="one columns"><label for="interface_curr_rating" style="text-align: left"><b>A</b></label></div>
                                <div class="one columns">&nbsp;</div>
                            </div>
                        </div>
                    <?php } endwhile; ?>
                <button onclick="location.href = '../list/list_equipment.php'" type="button" id="backBtn"><i class='bx bxs-chevron-left bx-fw' ></i> Back</button>
                <button onclick="location.href = 'edit.php?edit=<?php echo $id; ?>'" type="button" id="editBtn"><i class='bx bxs-pencil bx-fw' ></i> Edit</button>
            </div>
        </form>
        
        <script>
            const tabs = document.getElementById('tabs');
            const tabContents = document.querySelectorAll('.tab-content');

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
        </script>
    </body>
</html>