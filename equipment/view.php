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
    <script src="../js/jquery-3.7.0.js"></script>
    
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
                            <input type="text" id="lab_location" name="lab_location" value="<?php echo getParameterValue($rowForm['lab_location']); ?>" required readonly />
                        </div>
                        <div class="one columns">&nbsp;</div>
                        <div class="two columns"><label for="strategy">Product Group *</label></div>
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
                        <div class="two columns"><label for="champion">Lab Manager *</label></div>
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
                            <div class="two columns"><label for="asset_no">Equipment Asset No *</label></div>
                            <div class="three columns"><input type="text" id="asset_no" name="asset_no" value="<?php echo $rowForm['eqpt_asset_no']; ?>" required readonly></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="new_transfer">New/Transfer Equipment</label></div>
                            <div class="three columns">
                                <input type="text" id="new_transfer" name="new_transfer" value="<?php echo getParameterValue($rowForm['new_transfer_eqpt']); ?>" required readonly>
                            </div>
                            <div class="one columns">&nbsp;</div>
                            <?php $checkLocation = getParameterValue($rowForm['new_transfer_eqpt']);
                            if ($checkLocation == "Transfer") { ?>
                                <div class="two columns"><label for="from" id="fromLabel">From</label></div>
                                <div class="three columns">
                                    <input type="text" id="from" name="from" value="<?php echo getParameterValue($rowForm['transfer_eqpt_location']); ?>" required readonly>
                                </div>
                                <div class="one columns">&nbsp;</div>
                            <?php } ?>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="zone">Zone</label></div>
                            <div class="three columns"><input type="number" step="0.001" id="zone" name="zone" value="<?php echo $rowForm['zone']; ?>" required readonly></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                    </div>

                    <div class="tab-content" id="tabCpbl">
                        <div class="row">
                            <div class="two columns"><label for="volt_rating" id="labelvoltrating1">Voltage Rating</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="volt_rating" name="voltRating" value="<?php echo $rowForm['eqpt_volt_rating']; ?>" required readonly> </div>
                            <div class="one columns"><label for="volt_rating" style="text-align: left" id="labelvoltrating2"><b>V</b></label></div>
                            <div class="one columns" id="labelvoltrating3">&nbsp;</div>
                            <div class="two columns"><label for="volt_control" id="labelcoltcontrol1">Voltage Control Accuracy</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="volt_control" name="voltControl" value="<?php echo $rowForm['volt_control_accuracy']; ?>" required readonly> </div>
                            <div class="one columns"><label for="volt_control" style="text-align: left" id="labelcoltcontrol2"><b>%</b></label></div>
                            <div class="one columns" id="labelcoltcontrol3">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="curr_rating" id="labelcurrrating1">Current Rating</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="curr_rating" name="curr_rating" value="<?php echo $rowForm['current_rating']; ?>" required readonly> </div>
                            <div class="one columns"><label for="curr_rating" style="text-align: left" id="labelcurrrating2"><b>A</b></label></div>
                            <div class="one columns" id="labelcurrrating3">&nbsp;</div>
                            <div class="two columns"><label for="power_rating" id="labelpowerrating1">Power Rating</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="power_rating" name="power_rating" value="<?php echo $rowForm['power_rating']; ?>" required readonly> </div>
                            <div class="one columns"><label for="power_rating" style="text-align: left" id="labelpowerrating2"><b>%</b></label></div>
                            <div class="one columns" id="labelpowerrating3">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="min_time" id="labelmintimer1">Min. Timer Setting</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="min_time" name="min_time" value="<?php echo $rowForm['min_time_setting']; ?>" required readonly> </div>
                            <div class="one columns"><label for="min_time" style="text-align: left" id="labelmintimer2"><b>s</b></label></div>
                            <div class="one columns" id="labelmintimer3">&nbsp;</div>
                            <div class="two columns"><label for="max_time" id="labelmaxtimer1">Max. Timer Setting</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="max_time" name="max_time" value="<?php echo $rowForm['max_time_setting']; ?>" required readonly> </div>
                            <div class="one columns"><label for="max_time" style="text-align: left" id="labelmaxtimer2"><b>s</b></label></div>
                            <div class="one columns" id="labelmaxtimer3">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="min_temp" id="labelmintemp1">Min. Temperature</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="min_temp" name="minTemp" value="<?php echo $rowForm['min_temp']; ?>" required readonly> </div>
                            <div class="one columns"><label for="min_temp" style="text-align: left" id="labelmintemp2"><b>&#176;C</b></label></div>
                            <div class="one columns" id="labelmintemp3">&nbsp;</div>
                            <div class="two columns"><label for="max_temp" id="labelmaxtemp1">Max. Temperature</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="max_temp" name="maxTemp" value="<?php echo $rowForm['max_temp']; ?>" required readonly> </div>
                            <div class="one columns"><label for="max_temp" style="text-align: left" id="labelmaxtemp2"><b>&#176;C</b></label></div>
                            <div class="one columns" id="labelmaxtemp3">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="minRh" id="labelminrh1">Min. RH</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="minRh" name="minRh" value="<?php echo $rowForm['min_rh']; ?>" required readonly> </div>
                            <div class="one columns"><label for="minRh" style="text-align: left" id="labelminrh2"><b>%</b></label></div>
                            <div class="one columns" id="labelminrh3">&nbsp;</div>
                            <div class="two columns"><label for="maxRh" id="labelmaxrh1">Max. RH</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="maxRh" name="maxRh" value="<?php echo $rowForm['max_rh']; ?>" required readonly> </div>
                            <div class="one columns"><label for="maxRh" style="text-align: left" id="labelmaxrh2"><b>%</b></label></div>
                            <div class="one columns" id="labelmaxrh3">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="min_pressure" id="labelminpressure1">Minimum Pressure</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="min_pressure" name="min_pressure" value="<?php echo $rowForm['min_pressure']; ?>" required readonly> </div>
                            <div class="one columns"><label for="min_pressure" style="text-align: left" id="labelminpressure2"><b>psi</b></label></div>
                            <div class="one columns" id="labelminpressure3">&nbsp;</div>
                            <div class="two columns"><label for="max_pressure" id="labelmaxpressure1">Maximum Pressure</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="max_pressure" name="max_pressure" value="<?php echo $rowForm['max_pressure']; ?>" required readonly> </div>
                            <div class="one columns"><label for="max_pressure" style="text-align: left" id="labelmaxpressure2"><b>psi</b></label></div>
                            <div class="one columns" id="labelmaxpressure3">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="heat_dissipation" id="labelheat1">Heat Dissipation</label></div>
                            <div class="two columns"><input type="text" id="heat_dissipation" name="heat_dissipation" value="<?php echo $rowForm['heat_dissipation']; ?>" required readonly> </div>
                            <div class="two columns"><label for="heat_dissipation" style="text-align: left" id="labelheat2"><b>W</b></label></div>
                            <div class="two columns"><label for="temp_fluctuation" id="labeltempfluc1">Temperature Fluctuation</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="temp_fluctuation" name="tempFluctuation" value="<?php echo $rowForm['temp_fluctuation']; ?>" required readonly> </div>
                            <div class="one columns"><label for="temp_fluctuation" style="text-align: left" id="labeltempfluc2"><b>&#176;C</b></label></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="temp_uniform"id="labeltempuniform1">Temperature Uniformity</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="temp_uniform" name="tempUniform" value="<?php echo $rowForm['temp_uniformity']; ?>" required readonly> </div>
                            <div class="one columns"><label for="temp_uniform" style="text-align: left"id="labeltempuniform2"><b>&#176;C</b></label></div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="humid_fluctuation" id="labelhumid1">Humidity Fluctuation</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="humid_fluctuation" name="humidFluctuation" value="<?php echo $rowForm['humid_fluctuation']; ?>" required readonly> </div>
                            <div class="one columns"><label for="humid_fluctuation" style="text-align: left" id="labelhumid2"><b>%</b></label></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                    </div>

                    <div class="tab-content" id="tabCrtr">
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
                    </div>

                    <div class="tab-content" id="tabSafe">
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
                    </div>

                    <div class="tab-content" id="tabUtlt">
                        <div class="row">
                            <div class="two columns"><label for="voltage" id="labelvoltage1">Voltage</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="voltage" name="voltage" value="<?php echo $rowForm['voltage']; ?>" required readonly> </div>
                            <div class="one columns"><label for="voltage" style="text-align: left" id="labelvoltage2"><b>V</b></label></div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="current" id="labelcurrent1">Current</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="current" name="current" value="<?php echo $rowForm['current']; ?>" required readonly> </div>
                            <div class="one columns"><label for="current" style="text-align: left" id="labelcurrent2"><b>A</b></label></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="phase" id="labelphase1">Phase</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="phase" name="phase" value="<?php echo $rowForm['phase']; ?>" required readonly> </div>
                            <div class="one columns"><label for="phase" style="text-align: left" id="labelphase2"><b>Phase</b></label></div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="exhaust" id="labelexhaust">Exhaust</label></div>
                            <div class="three columns">
                                <input type="text" id="exhaust" name="exhaust" value="<?php echo getParameterValue($rowForm['exhaust']); ?>" required readonly>
                            </div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="chilled_water" id="labelchill">Chilled Water</label></div>
                            <div class="three columns">
                                <input type="text" id="chilled_water" name="chilled_water" value="<?php echo getParameterValue($rowForm['chilled_water']); ?>" required readonly>
                            </div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="liquid_nitrogen" id="labelliquid">Liquid Nitrogen</label></div>
                            <div class="three columns">
                                <input type="text" id="liquid_nitrogen" name="liquid_nitrogen" value="<?php echo getParameterValue($rowForm['liquid_nitrogen']); ?>" required readonly>
                            </div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="lan" id="labellan">LAN</label></div>
                            <div class="three columns">
                                <input type="text" id="lan" name="lan" value="<?php echo getParameterValue($rowForm['lan']); ?>" required readonly>
                            </div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="cda" id="labelcda">CDA</label></div>
                            <div class="three columns">
                                <input type="text" id="cda" name="cda" value="<?php echo getParameterValue($rowForm['cda']); ?>" required readonly>
                            </div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="n2gas" id="labelgas">N2 Gas</label></div>
                            <div class="three columns">
                                <input type="text" id="n2gas" name="n2gas" value="<?php echo getParameterValue($rowForm['n2_gas']); ?>" required readonly>
                            </div>
                            <div class="six columns" id="oxygen" style="display: none;">
                                <div class="three columns"><label for="oxygen_level" id="labelexygen">Oxygen Level Detector</label></div>
                                <div class="three columns">
                                    <input type="text" id="oxygen_level" name="oxygen_level" value="<?php echo getParameterValue($rowForm['oxygen_level_detector']); ?>" required readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="di_water" id="labeldiwater">DI Water</label></div>
                            <div class="three columns">
                                <input type="text" id="di_water" name="di_water" value="<?php echo getParameterValue($rowForm['di_water']); ?>" required readonly>
                            </div>
                            <?php
                            $checkWater = getParameterValue($rowForm['di_water']);
                            if ($checkWater == "Available") {
                                ?>
                                <div class="one columns">&nbsp;</div>
                                <div class="two columns"><label for="water_topup" id="labeltopup">Water Top-up System</label></div>
                                <div class="three columns">
                                    <input type="text" id="water_topup" name="water_topup" value="<?php echo getParameterValue($rowForm['water_topup_system']); ?>" required readonly>
                                </div>
                            <?php } ?>
                        </div>
                    </div>

                    <div class="tab-content" id="tabDaq">
                        <div class="row">
                            <div class="two columns"><label for="daq">DAQ (Realtime Leakage Monitoring)</label></div>
                            <div class="three columns">
                                <input type="text" id="daq" name="daq" value="<?php echo getParameterValue($rowForm['daq']); ?>" required readonly>
                            </div>
                        </div>
                    </div>

                    <div class="tab-content" id="tabInt">
                        <div class="row">
                            <div class="two columns">
                                <label for="int_config_type">Configuration Type</label>
                            </div>
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
                    </div>

                    <div class="tab-content" id="tabExt">
                        <div class="row">
                            <div class="two columns">
                                <label for="ext_config_type">Configuration Type</label>
                            </div>
                            <div class="three columns">
                                <input type="text" id="ext_config_type" name="ext_config_type" value="<?php echo getParameterValue($rowForm['ext_config_type']); ?>" required readonly>
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
                        <?php
                        $dataCheckExt = getParameterValue($rowForm['ext_config_type']);
                        if ($dataCheckExt !== "NA" && $dataCheckExt !== "Not Applicable" && $dataCheckExt !== "Unknown") {
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
                        <?php } ?>
                    </div>
                </div>

                <?php endwhile; ?>
                <button onclick="location.href = '../list/list_equipment.php'" type="button" id="listBtn"><i class='bx bxs-chevron-left bx-fw' ></i> Back</button>
                <button onclick="location.href = 'edit.php?edit=<?php echo $id; ?>'" type="button" id="save-button"><i class='bx bxs-pencil bx-fw' ></i> Edit</button>
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
            
            $( document ).ready(function() {
//                console.log("ready");
                var newreltest = document.getElementById('relTest');
                var reltest = newreltest.value;

                var tab7 = document.getElementById('tb07');
                var tab8 = document.getElementById('tb08');

                var cp_vr1 = document.getElementById('labelvoltrating1');
                var cp_vr2 = document.getElementById('labelvoltrating2');
                var cp_vr4 = document.getElementById('labelvoltrating3');
                var cp_vr3 = document.getElementById('volt_rating');
                var cp_ct1 = document.getElementById('labelcoltcontrol1');
                var cp_ct2 = document.getElementById('labelcoltcontrol2');
                var cp_ct4 = document.getElementById('labelcoltcontrol3');
                var cp_ct3 = document.getElementById('volt_control');
                var cp_cr1 = document.getElementById('labelcurrrating1');
                var cp_cr2 = document.getElementById('labelcurrrating2');
                var cp_cr4 = document.getElementById('labelcurrrating3');
                var cp_cr3 = document.getElementById('curr_rating');
                var cp_pw1 = document.getElementById('labelpowerrating1');
                var cp_pw2 = document.getElementById('labelpowerrating2');
                var cp_pw4 = document.getElementById('labelpowerrating3');
                var cp_pw3 = document.getElementById('power_rating');
                var cp_mt1 = document.getElementById('labelmintimer1');
                var cp_mt2 = document.getElementById('labelmintimer2');
                var cp_mt8 = document.getElementById('labelmintimer3');
                var cp_mt3 = document.getElementById('min_time');
                var cp_mt4 = document.getElementById('labelmaxtimer1');
                var cp_mt5 = document.getElementById('labelmaxtimer2');
                var cp_mt7 = document.getElementById('labelmaxtimer3');
                var cp_mt6 = document.getElementById('max_time');
                var cp_mtp1 = document.getElementById('labelmintemp1');
                var cp_mtp2 = document.getElementById('labelmintemp2');
                var cp_mtp7 = document.getElementById('labelmintemp3');
                var cp_mtp3 = document.getElementById('min_temp');
                var cp_mtp4 = document.getElementById('labelmaxtemp1');
                var cp_mtp5 = document.getElementById('labelmaxtemp2');
                var cp_mtp8 = document.getElementById('labelmaxtemp3');
                var cp_mtp6 = document.getElementById('max_temp');
                var cp_rh1 = document.getElementById('labelminrh1');
                var cp_rh2 = document.getElementById('labelminrh2');
                var cp_rh7 = document.getElementById('labelminrh3');
                var cp_rh3 = document.getElementById('minRh');
                var cp_rh4 = document.getElementById('labelmaxrh1');
                var cp_rh5 = document.getElementById('labelmaxrh2');
                var cp_rh8 = document.getElementById('labelmaxrh3');
                var cp_rh6 = document.getElementById('maxRh');
                var cp_ps1 = document.getElementById('labelminpressure1');
                var cp_ps2 = document.getElementById('labelminpressure2');
                var cp_ps7 = document.getElementById('labelminpressure3');
                var cp_ps3 = document.getElementById('min_pressure');
                var cp_ps4 = document.getElementById('labelmaxpressure1');
                var cp_ps5 = document.getElementById('labelmaxpressure2');
                var cp_ps8 = document.getElementById('labelmaxpressure3');
                var cp_ps6 = document.getElementById('max_pressure');
                var cp_ht1 = document.getElementById('labelheat1');
                var cp_ht2 = document.getElementById('labelheat2');
                var cp_ht3 = document.getElementById('heat_dissipation');
                var cp_tf1 = document.getElementById('labeltempfluc1');
                var cp_tf2 = document.getElementById('labeltempfluc2');
                var cp_tf3 = document.getElementById('temp_fluctuation');
                var cp_tu1 = document.getElementById('labeltempuniform1');
                var cp_tu2 = document.getElementById('labeltempuniform2');
                var cp_tu3 = document.getElementById('temp_uniform');
                var cp_hu1 = document.getElementById('labelhumid1');
                var cp_hu2 = document.getElementById('labelhumid2');
                var cp_hu3 = document.getElementById('humid_fluctuation');

                var ut_v1 = document.getElementById('labelvoltage1');
                var ut_v2 = document.getElementById('labelvoltage2');
                var ut_v3 = document.getElementById('voltage');
                var ut_c1 = document.getElementById('labelcurrent1');
                var ut_c2 = document.getElementById('labelcurrent2');
                var ut_c3 = document.getElementById('current');
                var ut_p1 = document.getElementById('labelphase1');
                var ut_p2 = document.getElementById('labelphase2');
                var ut_p3 = document.getElementById('phase');
                var ut_x1 = document.getElementById('labelexhaust');
                var ut_x2 = document.getElementById('exhaust');
                var ut_q1 = document.getElementById('labelliquid');
                var ut_q2 = document.getElementById('liquid_nitrogen');
                var ut_cw1 = document.getElementById('labelchill');
                var ut_cw2 = document.getElementById('chilled_water');
                var ut_cda1 = document.getElementById('labelcda');
                var ut_cda2 = document.getElementById('cda');
                var ut_l1 = document.getElementById('labellan');
                var ut_l2 = document.getElementById('lan');
                var ut_g1 = document.getElementById('labelgas');
                var ut_g2 = document.getElementById('n2gas');
                var ut_xx1 = document.getElementById('labelexygen');
                var ut_xx2 = document.getElementById('oxygen_level');
                var ut_d1 = document.getElementById('labeldiwater');
                var ut_d2 = document.getElementById('di_water');
                var ut_t1 = document.getElementById('labeltopup');
                var ut_t2 = document.getElementById('water_topup');

                if (reltest.includes('PTC')) {                                  // PTC - 008016
                    tab7.style.display = 'block';
                    tab8.style.display = 'block';

                    cp_vr1.style.display = 'block';
                    cp_vr2.style.display = 'block';
                    cp_vr3.style.display = 'block';
                    cp_ct1.style.display = 'block';
                    cp_ct2.style.display = 'block';
                    cp_ct3.style.display = 'block';
                    cp_cr1.style.display = 'block';
                    cp_cr2.style.display = 'block';
                    cp_cr3.style.display = 'block';
                    cp_pw1.style.display = 'block';
                    cp_pw2.style.display = 'block';
                    cp_pw3.style.display = 'block';
                    cp_vr4.style.display = 'block';
                    cp_ct4.style.display = 'block';
                    cp_cr4.style.display = 'block';
                    cp_pw4.style.display = 'block';
                    cp_mt1.style.display = 'block';
                    cp_mt2.style.display = 'block';
                    cp_mt3.style.display = 'block';
                    cp_mt4.style.display = 'block';
                    cp_mt5.style.display = 'block';
                    cp_mt6.style.display = 'block';
                    cp_mt7.style.display = 'block';
                    cp_mt8.style.display = 'block';
                    cp_mtp1.style.display = 'block';
                    cp_mtp2.style.display = 'block';
                    cp_mtp3.style.display = 'block';
                    cp_mtp4.style.display = 'block';
                    cp_mtp5.style.display = 'block';
                    cp_mtp6.style.display = 'block';
                    cp_rh1.style.display = 'none';
                    cp_rh2.style.display = 'none';
                    cp_rh3.style.display = 'none';
                    cp_rh4.style.display = 'none';
                    cp_rh5.style.display = 'none';
                    cp_rh6.style.display = 'none';
                    cp_ps1.style.display = 'none';
                    cp_ps2.style.display = 'none';
                    cp_ps3.style.display = 'none';
                    cp_ps4.style.display = 'none';
                    cp_ps5.style.display = 'none';
                    cp_ps6.style.display = 'none';
                    cp_rh7.style.display = 'none';
                    cp_rh8.style.display = 'none';
                    cp_ps7.style.display = 'none';
                    cp_ps8.style.display = 'none';
                    cp_ht1.style.display = 'block';
                    cp_ht2.style.display = 'block';
                    cp_ht3.style.display = 'block';
                    cp_tf1.style.display = 'block';
                    cp_tf2.style.display = 'block';
                    cp_tf3.style.display = 'block';
                    cp_tu1.style.display = 'block';
                    cp_tu2.style.display = 'block';
                    cp_tu3.style.display = 'block';
                    cp_hu1.style.display = 'none';
                    cp_hu2.style.display = 'none';
                    cp_hu3.style.display = 'none';

                    ut_v1.style.display = 'block';
                    ut_v2.style.display = 'block';
                    ut_v3.style.display = 'block';
                    ut_c1.style.display = 'block';
                    ut_c2.style.display = 'block';
                    ut_c3.style.display = 'block';
                    ut_p1.style.display = 'block';
                    ut_p2.style.display = 'block';
                    ut_p3.style.display = 'block';
                    ut_x1.style.display = 'block';
                    ut_x2.style.display = 'block';
                    ut_g1.style.display = 'block';
                    ut_g2.style.display = 'block';
                    ut_xx1.style.display = 'block';
                    ut_xx2.style.display = 'block';
                    ut_q1.style.display = 'none';
                    ut_q2.style.display = 'none';
                    ut_cw1.style.display = 'block';
                    ut_cw2.style.display = 'block';
                    ut_d1.style.display = 'none';
                    ut_d2.style.display = 'none';
                    ut_t1.style.display = 'none';
                    ut_t2.style.display = 'none';
                    ut_cda1.style.display = 'block';
                    ut_cda2.style.display = 'block';
                    ut_l1.style.display = 'block';
                    ut_l2.style.display = 'block';
                } else if (reltest.includes('IOL')) {                        // IOL - 008012
                    tab7.style.display = 'block';
                    tab8.style.display = 'block';

                    cp_vr1.style.display = 'block';
                    cp_vr2.style.display = 'block';
                    cp_vr3.style.display = 'block';
                    cp_ct1.style.display = 'block';
                    cp_ct2.style.display = 'block';
                    cp_ct3.style.display = 'block';
                    cp_cr1.style.display = 'block';
                    cp_cr2.style.display = 'block';
                    cp_cr3.style.display = 'block';
                    cp_pw1.style.display = 'block';
                    cp_pw2.style.display = 'block';
                    cp_pw3.style.display = 'block';
                    cp_vr4.style.display = 'block';
                    cp_ct4.style.display = 'block';
                    cp_cr4.style.display = 'block';
                    cp_pw4.style.display = 'block';
                    cp_mt1.style.display = 'block';
                    cp_mt2.style.display = 'block';
                    cp_mt3.style.display = 'block';
                    cp_mt4.style.display = 'block';
                    cp_mt5.style.display = 'block';
                    cp_mt6.style.display = 'block';
                    cp_mt7.style.display = 'block';
                    cp_mt8.style.display = 'block';
                    cp_mtp1.style.display = 'none';
                    cp_mtp2.style.display = 'none';
                    cp_mtp3.style.display = 'none';
                    cp_mtp4.style.display = 'none';
                    cp_mtp5.style.display = 'none';
                    cp_mtp6.style.display = 'none';
                    cp_rh1.style.display = 'none';
                    cp_rh2.style.display = 'none';
                    cp_rh3.style.display = 'none';
                    cp_rh4.style.display = 'none';
                    cp_rh5.style.display = 'none';
                    cp_rh6.style.display = 'none';
                    cp_ps1.style.display = 'none';
                    cp_ps2.style.display = 'none';
                    cp_ps3.style.display = 'none';
                    cp_ps4.style.display = 'none';
                    cp_ps5.style.display = 'none';
                    cp_ps6.style.display = 'none';
                    cp_rh7.style.display = 'none';
                    cp_rh8.style.display = 'none';
                    cp_ps7.style.display = 'none';
                    cp_ps8.style.display = 'none';
                    cp_ht1.style.display = 'none';
                    cp_ht2.style.display = 'none';
                    cp_ht3.style.display = 'none';
                    cp_tf1.style.display = 'none';
                    cp_tf2.style.display = 'none';
                    cp_tf3.style.display = 'none';
                    cp_tu1.style.display = 'none';
                    cp_tu2.style.display = 'none';
                    cp_tu3.style.display = 'none';
                    cp_hu1.style.display = 'none';
                    cp_hu2.style.display = 'none';
                    cp_hu3.style.display = 'none';

                    ut_v1.style.display = 'block';
                    ut_v2.style.display = 'block';
                    ut_v3.style.display = 'block';
                    ut_c1.style.display = 'block';
                    ut_c2.style.display = 'block';
                    ut_c3.style.display = 'block';
                    ut_p1.style.display = 'block';
                    ut_p2.style.display = 'block';
                    ut_p3.style.display = 'block';
                    ut_x1.style.display = 'block';
                    ut_x2.style.display = 'block';
                    ut_g1.style.display = 'none';
                    ut_g2.style.display = 'none';
                    ut_xx1.style.display = 'none';
                    ut_xx2.style.display = 'none';
                    ut_q1.style.display = 'none';
                    ut_q2.style.display = 'none';
                    ut_cw1.style.display = 'none';
                    ut_cw2.style.display = 'none';
                    ut_d1.style.display = 'none';
                    ut_d2.style.display = 'none';
                    ut_t1.style.display = 'none';
                    ut_t2.style.display = 'none';
                    ut_cda1.style.display = 'none';
                    ut_cda2.style.display = 'none';
                    ut_l1.style.display = 'block';
                    ut_l2.style.display = 'block';
                } else if (reltest.includes('HAST')) {                          // HAST - 008005
                    console.log("HAST");
                    tab7.style.display = 'block';
                    tab8.style.display = 'block';

                    cp_vr1.style.display = 'block';
                    cp_vr2.style.display = 'block';
                    cp_vr3.style.display = 'block';
                    cp_ct1.style.display = 'block';
                    cp_ct2.style.display = 'block';
                    cp_ct3.style.display = 'block';
                    cp_cr1.style.display = 'block';
                    cp_cr2.style.display = 'block';
                    cp_cr3.style.display = 'block';
                    cp_pw1.style.display = 'block';
                    cp_pw2.style.display = 'block';
                    cp_pw3.style.display = 'block';
                    cp_vr4.style.display = 'block';
                    cp_ct4.style.display = 'block';
                    cp_cr4.style.display = 'block';
                    cp_pw4.style.display = 'block';
                    cp_mt1.style.display = 'none';
                    cp_mt2.style.display = 'none';
                    cp_mt3.style.display = 'none';
                    cp_mt4.style.display = 'none';
                    cp_mt5.style.display = 'none';
                    cp_mt6.style.display = 'none';
                    cp_mt7.style.display = 'none';
                    cp_mt8.style.display = 'none';
                    cp_mtp1.style.display = 'block';
                    cp_mtp2.style.display = 'block';
                    cp_mtp3.style.display = 'block';
                    cp_mtp4.style.display = 'block';
                    cp_mtp5.style.display = 'block';
                    cp_mtp6.style.display = 'block';
                    cp_rh1.style.display = 'block';
                    cp_rh2.style.display = 'block';
                    cp_rh3.style.display = 'block';
                    cp_rh4.style.display = 'block';
                    cp_rh5.style.display = 'block';
                    cp_rh6.style.display = 'block';
                    cp_ps1.style.display = 'block';
                    cp_ps2.style.display = 'block';
                    cp_ps3.style.display = 'block';
                    cp_ps4.style.display = 'block';
                    cp_ps5.style.display = 'block';
                    cp_ps6.style.display = 'block';
                    cp_rh7.style.display = 'block';
                    cp_rh8.style.display = 'block';
                    cp_ps7.style.display = 'block';
                    cp_ps8.style.display = 'block';
                    cp_ht1.style.display = 'block';
                    cp_ht2.style.display = 'block';
                    cp_ht3.style.display = 'block';
                    cp_tf1.style.display = 'block';
                    cp_tf2.style.display = 'block';
                    cp_tf3.style.display = 'block';
                    cp_tu1.style.display = 'block';
                    cp_tu2.style.display = 'block';
                    cp_tu3.style.display = 'block';
                    cp_hu1.style.display = 'block';
                    cp_hu2.style.display = 'block';
                    cp_hu3.style.display = 'block';

                    ut_v1.style.display = 'block';
                    ut_v2.style.display = 'block';
                    ut_v3.style.display = 'block';
                    ut_c1.style.display = 'block';
                    ut_c2.style.display = 'block';
                    ut_c3.style.display = 'block';
                    ut_p1.style.display = 'block';
                    ut_p2.style.display = 'block';
                    ut_p3.style.display = 'block';
                    ut_x1.style.display = 'block';
                    ut_x2.style.display = 'block';
                    ut_g1.style.display = 'none';
                    ut_g2.style.display = 'none';
                    ut_xx1.style.display = 'none';
                    ut_xx2.style.display = 'none';
                    ut_q1.style.display = 'none';
                    ut_q2.style.display = 'none';
                    ut_cw1.style.display = 'none';
                    ut_cw2.style.display = 'none';
                    ut_d1.style.display = 'block';
                    ut_d2.style.display = 'block';
                    ut_t1.style.display = 'block';
                    ut_t2.style.display = 'block';
                    ut_cda1.style.display = 'block';
                    ut_cda2.style.display = 'block';
                    ut_l1.style.display = 'block';
                    ut_l2.style.display = 'block';
                } else if (reltest.includes('H3T') || reltest.includes('H3TRB') || reltest.includes('THB')) {            // H3T, H3TRB, THB - [008003, 008004, 008004]
                    tab7.style.display = 'block';
                    tab8.style.display = 'block';

                    cp_vr1.style.display = 'block';
                    cp_vr2.style.display = 'block';
                    cp_vr3.style.display = 'block';
                    cp_ct1.style.display = 'block';
                    cp_ct2.style.display = 'block';
                    cp_ct3.style.display = 'block';
                    cp_cr1.style.display = 'block';
                    cp_cr2.style.display = 'block';
                    cp_cr3.style.display = 'block';
                    cp_pw1.style.display = 'block';
                    cp_pw2.style.display = 'block';
                    cp_pw3.style.display = 'block';
                    cp_vr4.style.display = 'block';
                    cp_ct4.style.display = 'block';
                    cp_cr4.style.display = 'block';
                    cp_pw4.style.display = 'block';
                    cp_mt1.style.display = 'none';
                    cp_mt2.style.display = 'none';
                    cp_mt3.style.display = 'none';
                    cp_mt4.style.display = 'none';
                    cp_mt5.style.display = 'none';
                    cp_mt6.style.display = 'none';
                    cp_mt7.style.display = 'none';
                    cp_mt8.style.display = 'none';
                    cp_mtp1.style.display = 'block';
                    cp_mtp2.style.display = 'block';
                    cp_mtp3.style.display = 'block';
                    cp_mtp4.style.display = 'block';
                    cp_mtp5.style.display = 'block';
                    cp_mtp6.style.display = 'block';
                    cp_rh1.style.display = 'block';
                    cp_rh2.style.display = 'block';
                    cp_rh3.style.display = 'block';
                    cp_rh4.style.display = 'block';
                    cp_rh5.style.display = 'block';
                    cp_rh6.style.display = 'block';
                    cp_ps1.style.display = 'none';
                    cp_ps2.style.display = 'none';
                    cp_ps3.style.display = 'none';
                    cp_ps4.style.display = 'none';
                    cp_ps5.style.display = 'none';
                    cp_ps6.style.display = 'none';
                    cp_rh7.style.display = 'block';
                    cp_rh8.style.display = 'block';
                    cp_ps7.style.display = 'none';
                    cp_ps8.style.display = 'none';
                    cp_ht1.style.display = 'block';
                    cp_ht2.style.display = 'block';
                    cp_ht3.style.display = 'block';
                    cp_tf1.style.display = 'block';
                    cp_tf2.style.display = 'block';
                    cp_tf3.style.display = 'block';
                    cp_tu1.style.display = 'block';
                    cp_tu2.style.display = 'block';
                    cp_tu3.style.display = 'block';
                    cp_hu1.style.display = 'block';
                    cp_hu2.style.display = 'block';
                    cp_hu3.style.display = 'block';

                    ut_v1.style.display = 'block';
                    ut_v2.style.display = 'block';
                    ut_v3.style.display = 'block';
                    ut_c1.style.display = 'block';
                    ut_c2.style.display = 'block';
                    ut_c3.style.display = 'block';
                    ut_p1.style.display = 'block';
                    ut_p2.style.display = 'block';
                    ut_p3.style.display = 'block';
                    ut_x1.style.display = 'block';
                    ut_x2.style.display = 'block';
                    ut_g1.style.display = 'none';
                    ut_g2.style.display = 'none';
                    ut_xx1.style.display = 'none';
                    ut_xx2.style.display = 'none';
                    ut_q1.style.display = 'none';
                    ut_q2.style.display = 'none';
                    ut_cw1.style.display = 'none';
                    ut_cw2.style.display = 'none';
                    ut_d1.style.display = 'block';
                    ut_d2.style.display = 'block';
                    ut_t1.style.display = 'block';
                    ut_t2.style.display = 'block';
                    ut_cda1.style.display = 'block';
                    ut_cda2.style.display = 'block';
                    ut_l1.style.display = 'block';
                    ut_l2.style.display = 'block';
                } else if (reltest.includes('ELFR') || reltest.includes('HTRB') || reltest.includes('HTGB') || reltest.includes('HTFB') || reltest.includes('HTOL')) {            // ELFR, HTRB, HTGB, HTFB, HTOL
                    // 008002, 008006, 008007, 008008, 008010
                    console.log("ELFR, HTRB, HTGB, HTFB, HTOL");
                    tab7.style.display = 'block';
                    tab8.style.display = 'block';

                    cp_vr1.style.display = 'block';
                    cp_vr2.style.display = 'block';
                    cp_vr3.style.display = 'block';
                    cp_ct1.style.display = 'block';
                    cp_ct2.style.display = 'block';
                    cp_ct3.style.display = 'block';
                    cp_cr1.style.display = 'block';
                    cp_cr2.style.display = 'block';
                    cp_cr3.style.display = 'block';
                    cp_pw1.style.display = 'block';
                    cp_pw2.style.display = 'block';
                    cp_pw3.style.display = 'block';
                    cp_vr4.style.display = 'block';
                    cp_ct4.style.display = 'block';
                    cp_cr4.style.display = 'block';
                    cp_pw4.style.display = 'block';
                    cp_mt1.style.display = 'none';
                    cp_mt2.style.display = 'none';
                    cp_mt3.style.display = 'none';
                    cp_mt4.style.display = 'none';
                    cp_mt5.style.display = 'none';
                    cp_mt6.style.display = 'none';
                    cp_mt7.style.display = 'none';
                    cp_mt8.style.display = 'none';
                    cp_mtp1.style.display = 'block';
                    cp_mtp2.style.display = 'block';
                    cp_mtp3.style.display = 'block';
                    cp_mtp4.style.display = 'block';
                    cp_mtp5.style.display = 'block';
                    cp_mtp6.style.display = 'block';
                    cp_rh1.style.display = 'none';
                    cp_rh2.style.display = 'none';
                    cp_rh3.style.display = 'none';
                    cp_rh4.style.display = 'none';
                    cp_rh5.style.display = 'none';
                    cp_rh6.style.display = 'none';
                    cp_ps1.style.display = 'none';
                    cp_ps2.style.display = 'none';
                    cp_ps3.style.display = 'none';
                    cp_ps4.style.display = 'none';
                    cp_ps5.style.display = 'none';
                    cp_ps6.style.display = 'none';
                    cp_rh7.style.display = 'none';
                    cp_rh8.style.display = 'none';
                    cp_ps7.style.display = 'none';
                    cp_ps8.style.display = 'none';
                    cp_ht1.style.display = 'block';
                    cp_ht2.style.display = 'block';
                    cp_ht3.style.display = 'block';
                    cp_tf1.style.display = 'block';
                    cp_tf2.style.display = 'block';
                    cp_tf3.style.display = 'block';
                    cp_tu1.style.display = 'block';
                    cp_tu2.style.display = 'block';
                    cp_tu3.style.display = 'block';
                    cp_hu1.style.display = 'none';
                    cp_hu2.style.display = 'none';
                    cp_hu3.style.display = 'none';

                    ut_v1.style.display = 'block';
                    ut_v2.style.display = 'block';
                    ut_v3.style.display = 'block';
                    ut_c1.style.display = 'block';
                    ut_c2.style.display = 'block';
                    ut_c3.style.display = 'block';
                    ut_p1.style.display = 'block';
                    ut_p2.style.display = 'block';
                    ut_p3.style.display = 'block';
                    ut_x1.style.display = 'block';
                    ut_x2.style.display = 'block';
                    ut_g1.style.display = 'block';
                    ut_g2.style.display = 'block';
                    ut_xx1.style.display = 'block';
                    ut_xx2.style.display = 'block';
                    ut_q1.style.display = 'none';
                    ut_q2.style.display = 'none';
                    ut_cw1.style.display = 'none';
                    ut_cw2.style.display = 'none';
                    ut_d1.style.display = 'none';
                    ut_d2.style.display = 'none';
                    ut_t1.style.display = 'none';
                    ut_t2.style.display = 'none';
                    ut_cda1.style.display = 'block';
                    ut_cda2.style.display = 'block';
                    ut_l1.style.display = 'block';
                    ut_l2.style.display = 'block';
                } else if (reltest.includes('LTOL')) {                        // LTOL - 008013
                    tab7.style.display = 'block';
                    tab8.style.display = 'block';

                    cp_vr1.style.display = 'block';
                    cp_vr2.style.display = 'block';
                    cp_vr3.style.display = 'block';
                    cp_ct1.style.display = 'block';
                    cp_ct2.style.display = 'block';
                    cp_ct3.style.display = 'block';
                    cp_cr1.style.display = 'block';
                    cp_cr2.style.display = 'block';
                    cp_cr3.style.display = 'block';
                    cp_pw1.style.display = 'block';
                    cp_pw2.style.display = 'block';
                    cp_pw3.style.display = 'block';
                    cp_vr4.style.display = 'block';
                    cp_ct4.style.display = 'block';
                    cp_cr4.style.display = 'block';
                    cp_pw4.style.display = 'block';
                    cp_mt1.style.display = 'none';
                    cp_mt2.style.display = 'none';
                    cp_mt3.style.display = 'none';
                    cp_mt4.style.display = 'none';
                    cp_mt5.style.display = 'none';
                    cp_mt6.style.display = 'none';
                    cp_mt7.style.display = 'none';
                    cp_mt8.style.display = 'none';
                    cp_mtp1.style.display = 'block';
                    cp_mtp2.style.display = 'block';
                    cp_mtp3.style.display = 'block';
                    cp_mtp4.style.display = 'block';
                    cp_mtp5.style.display = 'block';
                    cp_mtp6.style.display = 'block';
                    cp_rh1.style.display = 'none';
                    cp_rh2.style.display = 'none';
                    cp_rh3.style.display = 'none';
                    cp_rh4.style.display = 'none';
                    cp_rh5.style.display = 'none';
                    cp_rh6.style.display = 'none';
                    cp_ps1.style.display = 'none';
                    cp_ps2.style.display = 'none';
                    cp_ps3.style.display = 'none';
                    cp_ps4.style.display = 'none';
                    cp_ps5.style.display = 'none';
                    cp_ps6.style.display = 'none';
                    cp_rh7.style.display = 'none';
                    cp_rh8.style.display = 'none';
                    cp_ps7.style.display = 'none';
                    cp_ps8.style.display = 'none';
                    cp_ht1.style.display = 'block';
                    cp_ht2.style.display = 'block';
                    cp_ht3.style.display = 'block';
                    cp_tf1.style.display = 'block';
                    cp_tf2.style.display = 'block';
                    cp_tf3.style.display = 'block';
                    cp_tu1.style.display = 'block';
                    cp_tu2.style.display = 'block';
                    cp_tu3.style.display = 'block';
                    cp_hu1.style.display = 'none';
                    cp_hu2.style.display = 'none';
                    cp_hu3.style.display = 'none';

                    ut_v1.style.display = 'block';
                    ut_v2.style.display = 'block';
                    ut_v3.style.display = 'block';
                    ut_c1.style.display = 'block';
                    ut_c2.style.display = 'block';
                    ut_c3.style.display = 'block';
                    ut_p1.style.display = 'block';
                    ut_p2.style.display = 'block';
                    ut_p3.style.display = 'block';
                    ut_x1.style.display = 'block';
                    ut_x2.style.display = 'block';
                    ut_g1.style.display = 'block';
                    ut_g2.style.display = 'block';
                    ut_xx1.style.display = 'block';
                    ut_xx2.style.display = 'block';
                    ut_q1.style.display = 'none';
                    ut_q2.style.display = 'none';
                    ut_cw1.style.display = 'block';
                    ut_cw2.style.display = 'block';
                    ut_d1.style.display = 'block';
                    ut_d2.style.display = 'block';
                    ut_t1.style.display = 'block';
                    ut_t2.style.display = 'block';
                    ut_cda1.style.display = 'block';
                    ut_cda2.style.display = 'block';
                    ut_l1.style.display = 'block';
                    ut_l2.style.display = 'block';
                } else if (reltest.includes('SSOl')) {                        // SSOL - 008018
                    console.log("SSOL");
                    tab7.style.display = 'block';
                    tab8.style.display = 'block';

                    cp_vr1.style.display = 'block';
                    cp_vr2.style.display = 'block';
                    cp_vr3.style.display = 'block';
                    cp_ct1.style.display = 'block';
                    cp_ct2.style.display = 'block';
                    cp_ct3.style.display = 'block';
                    cp_cr1.style.display = 'block';
                    cp_cr2.style.display = 'block';
                    cp_cr3.style.display = 'block';
                    cp_pw1.style.display = 'block';
                    cp_pw2.style.display = 'block';
                    cp_pw3.style.display = 'block';
                    cp_vr4.style.display = 'block';
                    cp_ct4.style.display = 'block';
                    cp_cr4.style.display = 'block';
                    cp_pw4.style.display = 'block';
                    cp_mt1.style.display = 'none';
                    cp_mt2.style.display = 'none';
                    cp_mt3.style.display = 'none';
                    cp_mt4.style.display = 'none';
                    cp_mt5.style.display = 'none';
                    cp_mt6.style.display = 'none';
                    cp_mt7.style.display = 'none';
                    cp_mt8.style.display = 'none';
                    cp_mtp1.style.display = 'block';
                    cp_mtp2.style.display = 'block';
                    cp_mtp3.style.display = 'block';
                    cp_mtp4.style.display = 'block';
                    cp_mtp5.style.display = 'block';
                    cp_mtp6.style.display = 'block';
                    cp_rh1.style.display = 'none';
                    cp_rh2.style.display = 'none';
                    cp_rh3.style.display = 'none';
                    cp_rh4.style.display = 'none';
                    cp_rh5.style.display = 'none';
                    cp_rh6.style.display = 'none';
                    cp_ps1.style.display = 'none';
                    cp_ps2.style.display = 'none';
                    cp_ps3.style.display = 'none';
                    cp_ps4.style.display = 'none';
                    cp_ps5.style.display = 'none';
                    cp_ps6.style.display = 'none';
                    cp_rh7.style.display = 'none';
                    cp_rh8.style.display = 'none';
                    cp_ps7.style.display = 'none';
                    cp_ps8.style.display = 'none';
                    cp_ht1.style.display = 'none';
                    cp_ht2.style.display = 'none';
                    cp_ht3.style.display = 'none';
                    cp_tf1.style.display = 'block';
                    cp_tf2.style.display = 'block';
                    cp_tf3.style.display = 'block';
                    cp_tu1.style.display = 'block';
                    cp_tu2.style.display = 'block';
                    cp_tu3.style.display = 'block';
                    cp_hu1.style.display = 'none';
                    cp_hu2.style.display = 'none';
                    cp_hu3.style.display = 'none';

                    ut_v1.style.display = 'block';
                    ut_v2.style.display = 'block';
                    ut_v3.style.display = 'block';
                    ut_c1.style.display = 'block';
                    ut_c2.style.display = 'block';
                    ut_c3.style.display = 'block';
                    ut_p1.style.display = 'block';
                    ut_p2.style.display = 'block';
                    ut_p3.style.display = 'block';
                    ut_x1.style.display = 'block';
                    ut_x2.style.display = 'block';
                    ut_g1.style.display = 'none';
                    ut_g2.style.display = 'none';
                    ut_xx1.style.display = 'none';
                    ut_xx2.style.display = 'none';
                    ut_q1.style.display = 'none';
                    ut_q2.style.display = 'none';
                    ut_cw1.style.display = 'none';
                    ut_cw2.style.display = 'none';
                    ut_d1.style.display = 'none';
                    ut_d2.style.display = 'none';
                    ut_t1.style.display = 'none';
                    ut_t2.style.display = 'none';
                    ut_cda1.style.display = 'none';
                    ut_cda2.style.display = 'none';
                    ut_l1.style.display = 'block';
                    ut_l2.style.display = 'block';
                } else if (reltest.includes('AC') || reltest.includes('UHAST')) {          // AC, UHAST, 008001, 008023
                    tab7.style.display = 'none';
                    tab8.style.display = 'none';

                    cp_vr1.style.display = 'none';
                    cp_vr2.style.display = 'none';
                    cp_vr3.style.display = 'none';
                    cp_ct1.style.display = 'none';
                    cp_ct2.style.display = 'none';
                    cp_ct3.style.display = 'none';
                    cp_cr1.style.display = 'none';
                    cp_cr2.style.display = 'none';
                    cp_cr3.style.display = 'none';
                    cp_pw1.style.display = 'none';
                    cp_pw2.style.display = 'none';
                    cp_pw3.style.display = 'none';
                    cp_vr4.style.display = 'none';
                    cp_ct4.style.display = 'none';
                    cp_cr4.style.display = 'none';
                    cp_pw4.style.display = 'none';
                    cp_mt1.style.display = 'none';
                    cp_mt2.style.display = 'none';
                    cp_mt3.style.display = 'none';
                    cp_mt4.style.display = 'none';
                    cp_mt5.style.display = 'none';
                    cp_mt6.style.display = 'none';
                    cp_mt7.style.display = 'none';
                    cp_mt8.style.display = 'none';
                    cp_mtp1.style.display = 'block';
                    cp_mtp2.style.display = 'block';
                    cp_mtp3.style.display = 'block';
                    cp_mtp4.style.display = 'block';
                    cp_mtp5.style.display = 'block';
                    cp_mtp6.style.display = 'block';
                    cp_rh1.style.display = 'block';
                    cp_rh2.style.display = 'block';
                    cp_rh3.style.display = 'block';
                    cp_rh4.style.display = 'block';
                    cp_rh5.style.display = 'block';
                    cp_rh6.style.display = 'block';
                    cp_ps1.style.display = 'block';
                    cp_ps2.style.display = 'block';
                    cp_ps3.style.display = 'block';
                    cp_ps4.style.display = 'block';
                    cp_ps5.style.display = 'block';
                    cp_ps6.style.display = 'block';
                    cp_rh7.style.display = 'block';
                    cp_rh8.style.display = 'block';
                    cp_ps7.style.display = 'block';
                    cp_ps8.style.display = 'block';
                    cp_ht1.style.display = 'block';
                    cp_ht2.style.display = 'block';
                    cp_ht3.style.display = 'block';
                    cp_tf1.style.display = 'block';
                    cp_tf2.style.display = 'block';
                    cp_tf3.style.display = 'block';
                    cp_tu1.style.display = 'block';
                    cp_tu2.style.display = 'block';
                    cp_tu3.style.display = 'block';
                    cp_hu1.style.display = 'block';
                    cp_hu2.style.display = 'block';
                    cp_hu3.style.display = 'block';

                    ut_v1.style.display = 'block';
                    ut_v2.style.display = 'block';
                    ut_v3.style.display = 'block';
                    ut_c1.style.display = 'block';
                    ut_c2.style.display = 'block';
                    ut_c3.style.display = 'block';
                    ut_p1.style.display = 'block';
                    ut_p2.style.display = 'block';
                    ut_p3.style.display = 'block';
                    ut_x1.style.display = 'block';
                    ut_x2.style.display = 'block';
                    ut_g1.style.display = 'none';
                    ut_g2.style.display = 'none';
                    ut_xx1.style.display = 'none';
                    ut_xx2.style.display = 'none';
                    ut_q1.style.display = 'none';
                    ut_q2.style.display = 'none';
                    ut_cw1.style.display = 'none';
                    ut_cw2.style.display = 'none';
                    ut_d1.style.display = 'block';
                    ut_d2.style.display = 'block';
                    ut_t1.style.display = 'block';
                    ut_t2.style.display = 'block';
                    ut_cda1.style.display = 'block';
                    ut_cda2.style.display = 'block';
                    ut_l1.style.display = 'block';
                    ut_l2.style.display = 'block';
                } else if (reltest.includes('THU')) {                        // THU, 008022
                    console.log("THU");
                    tab7.style.display = 'none';
                    tab8.style.display = 'none';

                    cp_vr1.style.display = 'none';
                    cp_vr2.style.display = 'none';
                    cp_vr3.style.display = 'none';
                    cp_ct1.style.display = 'none';
                    cp_ct2.style.display = 'none';
                    cp_ct3.style.display = 'none';
                    cp_cr1.style.display = 'none';
                    cp_cr2.style.display = 'none';
                    cp_cr3.style.display = 'none';
                    cp_pw1.style.display = 'none';
                    cp_pw2.style.display = 'none';
                    cp_pw3.style.display = 'none';
                    cp_vr4.style.display = 'none';
                    cp_ct4.style.display = 'none';
                    cp_cr4.style.display = 'none';
                    cp_pw4.style.display = 'none';
                    cp_mt1.style.display = 'none';
                    cp_mt2.style.display = 'none';
                    cp_mt3.style.display = 'none';
                    cp_mt4.style.display = 'none';
                    cp_mt5.style.display = 'none';
                    cp_mt6.style.display = 'none';
                    cp_mt7.style.display = 'none';
                    cp_mt8.style.display = 'none';
                    cp_mtp1.style.display = 'block';
                    cp_mtp2.style.display = 'block';
                    cp_mtp3.style.display = 'block';
                    cp_mtp4.style.display = 'block';
                    cp_mtp5.style.display = 'block';
                    cp_mtp6.style.display = 'block';
                    cp_rh1.style.display = 'block';
                    cp_rh2.style.display = 'block';
                    cp_rh3.style.display = 'block';
                    cp_rh4.style.display = 'block';
                    cp_rh5.style.display = 'block';
                    cp_rh6.style.display = 'block';
                    cp_ps1.style.display = 'block';
                    cp_ps2.style.display = 'block';
                    cp_ps3.style.display = 'block';
                    cp_ps4.style.display = 'block';
                    cp_ps5.style.display = 'block';
                    cp_ps6.style.display = 'block';
                    cp_rh7.style.display = 'block';
                    cp_rh8.style.display = 'block';
                    cp_ps7.style.display = 'block';
                    cp_ps8.style.display = 'block';
                    cp_ht1.style.display = 'block';
                    cp_ht2.style.display = 'block';
                    cp_ht3.style.display = 'block';
                    cp_tf1.style.display = 'block';
                    cp_tf2.style.display = 'block';
                    cp_tf3.style.display = 'block';
                    cp_tu1.style.display = 'block';
                    cp_tu2.style.display = 'block';
                    cp_tu3.style.display = 'block';
                    cp_hu1.style.display = 'block';
                    cp_hu2.style.display = 'block';
                    cp_hu3.style.display = 'block';

                    ut_v1.style.display = 'block';
                    ut_v2.style.display = 'block';
                    ut_v3.style.display = 'block';
                    ut_c1.style.display = 'block';
                    ut_c2.style.display = 'block';
                    ut_c3.style.display = 'block';
                    ut_p1.style.display = 'block';
                    ut_p2.style.display = 'block';
                    ut_p3.style.display = 'block';
                    ut_x1.style.display = 'block';
                    ut_x2.style.display = 'block';
                    ut_g1.style.display = 'block';
                    ut_g2.style.display = 'block';
                    ut_xx1.style.display = 'block';
                    ut_xx2.style.display = 'block';
                    ut_q1.style.display = 'none';
                    ut_q2.style.display = 'none';
                    ut_cw1.style.display = 'none';
                    ut_cw2.style.display = 'none';
                    ut_d1.style.display = 'block';
                    ut_d2.style.display = 'block';
                    ut_t1.style.display = 'block';
                    ut_t2.style.display = 'block';
                    ut_cda1.style.display = 'block';
                    ut_cda2.style.display = 'block';
                    ut_l1.style.display = 'block';
                    ut_l2.style.display = 'block';
                } else if (reltest.includes('MSL')) {                        // MSL - 008015
                    tab7.style.display = 'none';
                    tab8.style.display = 'none';

                    cp_vr1.style.display = 'none';
                    cp_vr2.style.display = 'none';
                    cp_vr3.style.display = 'none';
                    cp_ct1.style.display = 'none';
                    cp_ct2.style.display = 'none';
                    cp_ct3.style.display = 'none';
                    cp_cr1.style.display = 'none';
                    cp_cr2.style.display = 'none';
                    cp_cr3.style.display = 'none';
                    cp_pw1.style.display = 'none';
                    cp_pw2.style.display = 'none';
                    cp_pw3.style.display = 'none';
                    cp_vr4.style.display = 'none';
                    cp_ct4.style.display = 'none';
                    cp_cr4.style.display = 'none';
                    cp_pw4.style.display = 'none';
                    cp_mt1.style.display = 'none';
                    cp_mt2.style.display = 'none';
                    cp_mt3.style.display = 'none';
                    cp_mt4.style.display = 'none';
                    cp_mt5.style.display = 'none';
                    cp_mt6.style.display = 'none';
                    cp_mt7.style.display = 'none';
                    cp_mt8.style.display = 'none';
                    cp_mtp1.style.display = 'block';
                    cp_mtp2.style.display = 'block';
                    cp_mtp3.style.display = 'block';
                    cp_mtp4.style.display = 'block';
                    cp_mtp5.style.display = 'block';
                    cp_mtp6.style.display = 'block';
                    cp_rh1.style.display = 'block';
                    cp_rh2.style.display = 'block';
                    cp_rh3.style.display = 'block';
                    cp_rh4.style.display = 'block';
                    cp_rh5.style.display = 'block';
                    cp_rh6.style.display = 'block';
                    cp_ps1.style.display = 'none';
                    cp_ps2.style.display = 'none';
                    cp_ps3.style.display = 'none';
                    cp_ps4.style.display = 'none';
                    cp_ps5.style.display = 'none';
                    cp_ps6.style.display = 'none';
                    cp_rh7.style.display = 'block';
                    cp_rh8.style.display = 'block';
                    cp_ps7.style.display = 'none';
                    cp_ps8.style.display = 'none';
                    cp_ht1.style.display = 'block';
                    cp_ht2.style.display = 'block';
                    cp_ht3.style.display = 'block';
                    cp_tf1.style.display = 'block';
                    cp_tf2.style.display = 'block';
                    cp_tf3.style.display = 'block';
                    cp_tu1.style.display = 'block';
                    cp_tu2.style.display = 'block';
                    cp_tu3.style.display = 'block';
                    cp_hu1.style.display = 'block';
                    cp_hu2.style.display = 'block';
                    cp_hu3.style.display = 'block';

                    ut_v1.style.display = 'block';
                    ut_v2.style.display = 'block';
                    ut_v3.style.display = 'block';
                    ut_c1.style.display = 'block';
                    ut_c2.style.display = 'block';
                    ut_c3.style.display = 'block';
                    ut_p1.style.display = 'block';
                    ut_p2.style.display = 'block';
                    ut_p3.style.display = 'block';
                    ut_x1.style.display = 'block';
                    ut_x2.style.display = 'block';
                    ut_g1.style.display = 'none';
                    ut_g2.style.display = 'none';
                    ut_xx1.style.display = 'none';
                    ut_xx2.style.display = 'none';
                    ut_q1.style.display = 'none';
                    ut_q2.style.display = 'none';
                    ut_cw1.style.display = 'none';
                    ut_cw2.style.display = 'none';
                    ut_d1.style.display = 'block';
                    ut_d2.style.display = 'block';
                    ut_t1.style.display = 'block';
                    ut_t2.style.display = 'block';
                    ut_cda1.style.display = 'block';
                    ut_cda2.style.display = 'block';
                    ut_l1.style.display = 'block';
                    ut_l2.style.display = 'block';
                } else if (reltest.includes('RTHS')) {                        // RTHS - 008017
                    console.log("RTHS");
                    tab7.style.display = 'none';
                    tab8.style.display = 'none';

                    cp_vr1.style.display = 'none';
                    cp_vr2.style.display = 'none';
                    cp_vr3.style.display = 'none';
                    cp_ct1.style.display = 'none';
                    cp_ct2.style.display = 'none';
                    cp_ct3.style.display = 'none';
                    cp_cr1.style.display = 'none';
                    cp_cr2.style.display = 'none';
                    cp_cr3.style.display = 'none';
                    cp_pw1.style.display = 'none';
                    cp_pw2.style.display = 'none';
                    cp_pw3.style.display = 'none';
                    cp_vr4.style.display = 'none';
                    cp_ct4.style.display = 'none';
                    cp_cr4.style.display = 'none';
                    cp_pw4.style.display = 'none';
                    cp_mt1.style.display = 'none';
                    cp_mt2.style.display = 'none';
                    cp_mt3.style.display = 'none';
                    cp_mt4.style.display = 'none';
                    cp_mt5.style.display = 'none';
                    cp_mt6.style.display = 'none';
                    cp_mt7.style.display = 'none';
                    cp_mt8.style.display = 'none';
                    cp_mtp1.style.display = 'block';
                    cp_mtp2.style.display = 'block';
                    cp_mtp3.style.display = 'block';
                    cp_mtp4.style.display = 'block';
                    cp_mtp5.style.display = 'block';
                    cp_mtp6.style.display = 'block';
                    cp_rh1.style.display = 'block';
                    cp_rh2.style.display = 'block';
                    cp_rh3.style.display = 'block';
                    cp_rh4.style.display = 'block';
                    cp_rh5.style.display = 'block';
                    cp_rh6.style.display = 'block';
                    cp_ps1.style.display = 'none';
                    cp_ps2.style.display = 'none';
                    cp_ps3.style.display = 'none';
                    cp_ps4.style.display = 'none';
                    cp_ps5.style.display = 'none';
                    cp_ps6.style.display = 'none';
                    cp_rh7.style.display = 'block';
                    cp_rh8.style.display = 'block';
                    cp_ps7.style.display = 'none';
                    cp_ps8.style.display = 'none';
                    cp_ht1.style.display = 'block';
                    cp_ht2.style.display = 'block';
                    cp_ht3.style.display = 'block';
                    cp_tf1.style.display = 'block';
                    cp_tf2.style.display = 'block';
                    cp_tf3.style.display = 'block';
                    cp_tu1.style.display = 'block';
                    cp_tu2.style.display = 'block';
                    cp_tu3.style.display = 'block';
                    cp_hu1.style.display = 'block';
                    cp_hu2.style.display = 'block';
                    cp_hu3.style.display = 'block';

                    ut_v1.style.display = 'block';
                    ut_v2.style.display = 'block';
                    ut_v3.style.display = 'block';
                    ut_c1.style.display = 'block';
                    ut_c2.style.display = 'block';
                    ut_c3.style.display = 'block';
                    ut_p1.style.display = 'block';
                    ut_p2.style.display = 'block';
                    ut_p3.style.display = 'block';
                    ut_x1.style.display = 'block';
                    ut_x2.style.display = 'block';
                    ut_g1.style.display = 'block';
                    ut_g2.style.display = 'block';
                    ut_xx1.style.display = 'block';
                    ut_xx2.style.display = 'block';
                    ut_q1.style.display = 'none';
                    ut_q2.style.display = 'none';
                    ut_cw1.style.display = 'none';
                    ut_cw2.style.display = 'none';
                    ut_d1.style.display = 'block';
                    ut_d2.style.display = 'block';
                    ut_t1.style.display = 'block';
                    ut_t2.style.display = 'block';
                    ut_cda1.style.display = 'block';
                    ut_cda2.style.display = 'block';
                    ut_l1.style.display = 'block';
                    ut_l2.style.display = 'block';
                } else if (reltest.includes('THS')) {                        // THS - 008021
                    tab7.style.display = 'none';
                    tab8.style.display = 'none';

                    cp_vr1.style.display = 'none';
                    cp_vr2.style.display = 'none';
                    cp_vr3.style.display = 'none';
                    cp_ct1.style.display = 'none';
                    cp_ct2.style.display = 'none';
                    cp_ct3.style.display = 'none';
                    cp_cr1.style.display = 'none';
                    cp_cr2.style.display = 'none';
                    cp_cr3.style.display = 'none';
                    cp_pw1.style.display = 'none';
                    cp_pw2.style.display = 'none';
                    cp_pw3.style.display = 'none';
                    cp_vr4.style.display = 'none';
                    cp_ct4.style.display = 'none';
                    cp_cr4.style.display = 'none';
                    cp_pw4.style.display = 'none';
                    cp_mt1.style.display = 'none';
                    cp_mt2.style.display = 'none';
                    cp_mt3.style.display = 'none';
                    cp_mt4.style.display = 'none';
                    cp_mt5.style.display = 'none';
                    cp_mt6.style.display = 'none';
                    cp_mt7.style.display = 'none';
                    cp_mt8.style.display = 'none';
                    cp_mtp1.style.display = 'block';
                    cp_mtp2.style.display = 'block';
                    cp_mtp3.style.display = 'block';
                    cp_mtp4.style.display = 'block';
                    cp_mtp5.style.display = 'block';
                    cp_mtp6.style.display = 'block';
                    cp_rh1.style.display = 'block';
                    cp_rh2.style.display = 'block';
                    cp_rh3.style.display = 'block';
                    cp_rh4.style.display = 'block';
                    cp_rh5.style.display = 'block';
                    cp_rh6.style.display = 'block';
                    cp_ps1.style.display = 'none';
                    cp_ps2.style.display = 'none';
                    cp_ps3.style.display = 'none';
                    cp_ps4.style.display = 'none';
                    cp_ps5.style.display = 'none';
                    cp_ps6.style.display = 'none';
                    cp_rh7.style.display = 'block';
                    cp_rh8.style.display = 'block';
                    cp_ps7.style.display = 'none';
                    cp_ps8.style.display = 'none';
                    cp_ht1.style.display = 'block';
                    cp_ht2.style.display = 'block';
                    cp_ht3.style.display = 'block';
                    cp_tf1.style.display = 'block';
                    cp_tf2.style.display = 'block';
                    cp_tf3.style.display = 'block';
                    cp_tu1.style.display = 'block';
                    cp_tu2.style.display = 'block';
                    cp_tu3.style.display = 'block';
                    cp_hu1.style.display = 'block';
                    cp_hu2.style.display = 'block';
                    cp_hu3.style.display = 'block';

                    ut_v1.style.display = 'block';
                    ut_v2.style.display = 'block';
                    ut_v3.style.display = 'block';
                    ut_c1.style.display = 'block';
                    ut_c2.style.display = 'block';
                    ut_c3.style.display = 'block';
                    ut_p1.style.display = 'block';
                    ut_p2.style.display = 'block';
                    ut_p3.style.display = 'block';
                    ut_x1.style.display = 'block';
                    ut_x2.style.display = 'block';
                    ut_g1.style.display = 'block';
                    ut_g2.style.display = 'block';
                    ut_xx1.style.display = 'block';
                    ut_xx2.style.display = 'block';
                    ut_q1.style.display = 'none';
                    ut_q2.style.display = 'none';
                    ut_cw1.style.display = 'block';
                    ut_cw2.style.display = 'block';
                    ut_d1.style.display = 'block';
                    ut_d2.style.display = 'block';
                    ut_t1.style.display = 'block';
                    ut_t2.style.display = 'block';
                    ut_cda1.style.display = 'block';
                    ut_cda2.style.display = 'block';
                    ut_l1.style.display = 'block';
                    ut_l2.style.display = 'block';
                } else if (reltest.includes('HTHS')) {                        // HTHS - 008009
                    console.log("HTHS");
                    tab7.style.display = 'none';
                    tab8.style.display = 'none';

                    cp_vr1.style.display = 'none';
                    cp_vr2.style.display = 'none';
                    cp_vr3.style.display = 'none';
                    cp_ct1.style.display = 'none';
                    cp_ct2.style.display = 'none';
                    cp_ct3.style.display = 'none';
                    cp_cr1.style.display = 'none';
                    cp_cr2.style.display = 'none';
                    cp_cr3.style.display = 'none';
                    cp_pw1.style.display = 'none';
                    cp_pw2.style.display = 'none';
                    cp_pw3.style.display = 'none';
                    cp_vr4.style.display = 'none';
                    cp_ct4.style.display = 'none';
                    cp_cr4.style.display = 'none';
                    cp_pw4.style.display = 'none';
                    cp_mt1.style.display = 'none';
                    cp_mt2.style.display = 'none';
                    cp_mt3.style.display = 'none';
                    cp_mt4.style.display = 'none';
                    cp_mt5.style.display = 'none';
                    cp_mt6.style.display = 'none';
                    cp_mt7.style.display = 'none';
                    cp_mt8.style.display = 'none';
                    cp_mtp1.style.display = 'block';
                    cp_mtp2.style.display = 'block';
                    cp_mtp3.style.display = 'block';
                    cp_mtp4.style.display = 'block';
                    cp_mtp5.style.display = 'block';
                    cp_mtp6.style.display = 'block';
                    cp_rh1.style.display = 'none';
                    cp_rh2.style.display = 'none';
                    cp_rh3.style.display = 'none';
                    cp_rh4.style.display = 'none';
                    cp_rh5.style.display = 'none';
                    cp_rh6.style.display = 'none';
                    cp_ps1.style.display = 'none';
                    cp_ps2.style.display = 'none';
                    cp_ps3.style.display = 'none';
                    cp_ps4.style.display = 'none';
                    cp_ps5.style.display = 'none';
                    cp_ps6.style.display = 'none';
                    cp_rh7.style.display = 'none';
                    cp_rh8.style.display = 'none';
                    cp_ps7.style.display = 'none';
                    cp_ps8.style.display = 'none';
                    cp_ht1.style.display = 'block';
                    cp_ht2.style.display = 'block';
                    cp_ht3.style.display = 'block';
                    cp_tf1.style.display = 'block';
                    cp_tf2.style.display = 'block';
                    cp_tf3.style.display = 'block';
                    cp_tu1.style.display = 'block';
                    cp_tu2.style.display = 'block';
                    cp_tu3.style.display = 'block';
                    cp_hu1.style.display = 'none';
                    cp_hu2.style.display = 'none';
                    cp_hu3.style.display = 'none';

                    ut_v1.style.display = 'block';
                    ut_v2.style.display = 'block';
                    ut_v3.style.display = 'block';
                    ut_c1.style.display = 'block';
                    ut_c2.style.display = 'block';
                    ut_c3.style.display = 'block';
                    ut_p1.style.display = 'block';
                    ut_p2.style.display = 'block';
                    ut_p3.style.display = 'block';
                    ut_x1.style.display = 'block';
                    ut_x2.style.display = 'block';
                    ut_g1.style.display = 'block';
                    ut_g2.style.display = 'block';
                    ut_xx1.style.display = 'block';
                    ut_xx2.style.display = 'block';
                    ut_q1.style.display = 'none';
                    ut_q2.style.display = 'none';
                    ut_cw1.style.display = 'none';
                    ut_cw2.style.display = 'none';
                    ut_d1.style.display = 'block';
                    ut_d2.style.display = 'block';
                    ut_t1.style.display = 'block';
                    ut_t2.style.display = 'block';
                    ut_cda1.style.display = 'block';
                    ut_cda2.style.display = 'block';
                    ut_l1.style.display = 'block';
                    ut_l2.style.display = 'block';
                } else if (reltest.includes('HTSL')) {                        // HTSL - 008011
                    tab7.style.display = 'none';
                    tab8.style.display = 'none';

                    cp_vr1.style.display = 'none';
                    cp_vr2.style.display = 'none';
                    cp_vr3.style.display = 'none';
                    cp_ct1.style.display = 'none';
                    cp_ct2.style.display = 'none';
                    cp_ct3.style.display = 'none';
                    cp_cr1.style.display = 'none';
                    cp_cr2.style.display = 'none';
                    cp_cr3.style.display = 'none';
                    cp_pw1.style.display = 'none';
                    cp_pw2.style.display = 'none';
                    cp_pw3.style.display = 'none';
                    cp_vr4.style.display = 'none';
                    cp_ct4.style.display = 'none';
                    cp_cr4.style.display = 'none';
                    cp_pw4.style.display = 'none';
                    cp_mt1.style.display = 'none';
                    cp_mt2.style.display = 'none';
                    cp_mt3.style.display = 'none';
                    cp_mt4.style.display = 'none';
                    cp_mt5.style.display = 'none';
                    cp_mt6.style.display = 'none';
                    cp_mt7.style.display = 'none';
                    cp_mt8.style.display = 'none';
                    cp_mtp1.style.display = 'block';
                    cp_mtp2.style.display = 'block';
                    cp_mtp3.style.display = 'block';
                    cp_mtp4.style.display = 'block';
                    cp_mtp5.style.display = 'block';
                    cp_mtp6.style.display = 'block';
                    cp_rh1.style.display = 'none';
                    cp_rh2.style.display = 'none';
                    cp_rh3.style.display = 'none';
                    cp_rh4.style.display = 'none';
                    cp_rh5.style.display = 'none';
                    cp_rh6.style.display = 'none';
                    cp_ps1.style.display = 'none';
                    cp_ps2.style.display = 'none';
                    cp_ps3.style.display = 'none';
                    cp_ps4.style.display = 'none';
                    cp_ps5.style.display = 'none';
                    cp_ps6.style.display = 'none';
                    cp_rh7.style.display = 'none';
                    cp_rh8.style.display = 'none';
                    cp_ps7.style.display = 'none';
                    cp_ps8.style.display = 'none';
                    cp_ht1.style.display = 'block';
                    cp_ht2.style.display = 'block';
                    cp_ht3.style.display = 'block';
                    cp_tf1.style.display = 'block';
                    cp_tf2.style.display = 'block';
                    cp_tf3.style.display = 'block';
                    cp_tu1.style.display = 'block';
                    cp_tu2.style.display = 'block';
                    cp_tu3.style.display = 'block';
                    cp_hu1.style.display = 'none';
                    cp_hu2.style.display = 'none';
                    cp_hu3.style.display = 'none';

                    ut_v1.style.display = 'block';
                    ut_v2.style.display = 'block';
                    ut_v3.style.display = 'block';
                    ut_c1.style.display = 'block';
                    ut_c2.style.display = 'block';
                    ut_c3.style.display = 'block';
                    ut_p1.style.display = 'block';
                    ut_p2.style.display = 'block';
                    ut_p3.style.display = 'block';
                    ut_x1.style.display = 'block';
                    ut_x2.style.display = 'block';
                    ut_g1.style.display = 'block';
                    ut_g2.style.display = 'block';
                    ut_xx1.style.display = 'block';
                    ut_xx2.style.display = 'block';
                    ut_q1.style.display = 'none';
                    ut_q2.style.display = 'none';
                    ut_cw1.style.display = 'none';
                    ut_cw2.style.display = 'none';
                    ut_d1.style.display = 'none';
                    ut_d2.style.display = 'none';
                    ut_t1.style.display = 'none';
                    ut_t2.style.display = 'none';
                    ut_cda1.style.display = 'block';
                    ut_cda2.style.display = 'block';
                    ut_l1.style.display = 'block';
                    ut_l2.style.display = 'block';
                } else if (reltest.includes('LTSL')) {                        // LTSL - 008014
                    console.log("LTSL");
                    tab7.style.display = 'none';
                    tab8.style.display = 'none';

                    cp_vr1.style.display = 'none';
                    cp_vr2.style.display = 'none';
                    cp_vr3.style.display = 'none';
                    cp_ct1.style.display = 'none';
                    cp_ct2.style.display = 'none';
                    cp_ct3.style.display = 'none';
                    cp_cr1.style.display = 'none';
                    cp_cr2.style.display = 'none';
                    cp_cr3.style.display = 'none';
                    cp_pw1.style.display = 'none';
                    cp_pw2.style.display = 'none';
                    cp_pw3.style.display = 'none';
                    cp_vr4.style.display = 'none';
                    cp_ct4.style.display = 'none';
                    cp_cr4.style.display = 'none';
                    cp_pw4.style.display = 'none';
                    cp_mt1.style.display = 'none';
                    cp_mt2.style.display = 'none';
                    cp_mt3.style.display = 'none';
                    cp_mt4.style.display = 'none';
                    cp_mt5.style.display = 'none';
                    cp_mt6.style.display = 'none';
                    cp_mt7.style.display = 'none';
                    cp_mt8.style.display = 'none';
                    cp_mtp1.style.display = 'block';
                    cp_mtp2.style.display = 'block';
                    cp_mtp3.style.display = 'block';
                    cp_mtp4.style.display = 'block';
                    cp_mtp5.style.display = 'block';
                    cp_mtp6.style.display = 'block';
                    cp_rh1.style.display = 'none';
                    cp_rh2.style.display = 'none';
                    cp_rh3.style.display = 'none';
                    cp_rh4.style.display = 'none';
                    cp_rh5.style.display = 'none';
                    cp_rh6.style.display = 'none';
                    cp_ps1.style.display = 'none';
                    cp_ps2.style.display = 'none';
                    cp_ps3.style.display = 'none';
                    cp_ps4.style.display = 'none';
                    cp_ps5.style.display = 'none';
                    cp_ps6.style.display = 'none';
                    cp_rh7.style.display = 'none';
                    cp_rh8.style.display = 'none';
                    cp_ps7.style.display = 'none';
                    cp_ps8.style.display = 'none';
                    cp_ht1.style.display = 'block';
                    cp_ht2.style.display = 'block';
                    cp_ht3.style.display = 'block';
                    cp_tf1.style.display = 'block';
                    cp_tf2.style.display = 'block';
                    cp_tf3.style.display = 'block';
                    cp_tu1.style.display = 'block';
                    cp_tu2.style.display = 'block';
                    cp_tu3.style.display = 'block';
                    cp_hu1.style.display = 'none';
                    cp_hu2.style.display = 'none';
                    cp_hu3.style.display = 'none';

                    ut_v1.style.display = 'block';
                    ut_v2.style.display = 'block';
                    ut_v3.style.display = 'block';
                    ut_c1.style.display = 'block';
                    ut_c2.style.display = 'block';
                    ut_c3.style.display = 'block';
                    ut_p1.style.display = 'block';
                    ut_p2.style.display = 'block';
                    ut_p3.style.display = 'block';
                    ut_x1.style.display = 'block';
                    ut_x2.style.display = 'block';
                    ut_g1.style.display = 'block';
                    ut_g2.style.display = 'block';
                    ut_xx1.style.display = 'block';
                    ut_xx2.style.display = 'block';
                    ut_q1.style.display = 'none';
                    ut_q2.style.display = 'none';
                    ut_cw1.style.display = 'block';
                    ut_cw2.style.display = 'block';
                    ut_d1.style.display = 'block';
                    ut_d2.style.display = 'block';
                    ut_t1.style.display = 'block';
                    ut_t2.style.display = 'block';
                    ut_cda1.style.display = 'block';
                    ut_cda2.style.display = 'block';
                    ut_l1.style.display = 'block';
                    ut_l2.style.display = 'block';
                } else if (reltest.includes('TC')) {                        // TC - 008019
                    tab7.style.display = 'none';
                    tab8.style.display = 'none';

                    cp_vr1.style.display = 'none';
                    cp_vr2.style.display = 'none';
                    cp_vr3.style.display = 'none';
                    cp_ct1.style.display = 'none';
                    cp_ct2.style.display = 'none';
                    cp_ct3.style.display = 'none';
                    cp_cr1.style.display = 'none';
                    cp_cr2.style.display = 'none';
                    cp_cr3.style.display = 'none';
                    cp_pw1.style.display = 'none';
                    cp_pw2.style.display = 'none';
                    cp_pw3.style.display = 'none';
                    cp_vr4.style.display = 'none';
                    cp_ct4.style.display = 'none';
                    cp_cr4.style.display = 'none';
                    cp_pw4.style.display = 'none';
                    cp_mt1.style.display = 'none';
                    cp_mt2.style.display = 'none';
                    cp_mt3.style.display = 'none';
                    cp_mt4.style.display = 'none';
                    cp_mt5.style.display = 'none';
                    cp_mt6.style.display = 'none';
                    cp_mt7.style.display = 'none';
                    cp_mt8.style.display = 'none';
                    cp_mtp1.style.display = 'block';
                    cp_mtp2.style.display = 'block';
                    cp_mtp3.style.display = 'block';
                    cp_mtp4.style.display = 'block';
                    cp_mtp5.style.display = 'block';
                    cp_mtp6.style.display = 'block';
                    cp_rh1.style.display = 'none';
                    cp_rh2.style.display = 'none';
                    cp_rh3.style.display = 'none';
                    cp_rh4.style.display = 'none';
                    cp_rh5.style.display = 'none';
                    cp_rh6.style.display = 'none';
                    cp_ps1.style.display = 'none';
                    cp_ps2.style.display = 'none';
                    cp_ps3.style.display = 'none';
                    cp_ps4.style.display = 'none';
                    cp_ps5.style.display = 'none';
                    cp_ps6.style.display = 'none';
                    cp_rh7.style.display = 'none';
                    cp_rh8.style.display = 'none';
                    cp_ps7.style.display = 'none';
                    cp_ps8.style.display = 'none';
                    cp_ht1.style.display = 'block';
                    cp_ht2.style.display = 'block';
                    cp_ht3.style.display = 'block';
                    cp_tf1.style.display = 'block';
                    cp_tf2.style.display = 'block';
                    cp_tf3.style.display = 'block';
                    cp_tu1.style.display = 'block';
                    cp_tu2.style.display = 'block';
                    cp_tu3.style.display = 'block';
                    cp_hu1.style.display = 'none';
                    cp_hu2.style.display = 'none';
                    cp_hu3.style.display = 'none';

                    ut_v1.style.display = 'block';
                    ut_v2.style.display = 'block';
                    ut_v3.style.display = 'block';
                    ut_c1.style.display = 'block';
                    ut_c2.style.display = 'block';
                    ut_c3.style.display = 'block';
                    ut_p1.style.display = 'block';
                    ut_p2.style.display = 'block';
                    ut_p3.style.display = 'block';
                    ut_x1.style.display = 'block';
                    ut_x2.style.display = 'block';
                    ut_g1.style.display = 'block';
                    ut_g2.style.display = 'block';
                    ut_xx1.style.display = 'block';
                    ut_xx2.style.display = 'block';
                    ut_q1.style.display = 'block';
                    ut_q2.style.display = 'block';
                    ut_cw1.style.display = 'block';
                    ut_cw2.style.display = 'block';
                    ut_d1.style.display = 'none';
                    ut_d2.style.display = 'none';
                    ut_t1.style.display = 'none';
                    ut_t2.style.display = 'none';
                    ut_cda1.style.display = 'block';
                    ut_cda2.style.display = 'block';
                    ut_l1.style.display = 'block';
                    ut_l2.style.display = 'block';
                } else {
                    console.log("APPEAR ALL");
                    tab7.style.display = 'block';
                    tab8.style.display = 'block';

                    cp_vr1.style.display = 'block';
                    cp_vr2.style.display = 'block';
                    cp_vr3.style.display = 'block';
                    cp_ct1.style.display = 'block';
                    cp_ct2.style.display = 'block';
                    cp_ct3.style.display = 'block';
                    cp_cr1.style.display = 'block';
                    cp_cr2.style.display = 'block';
                    cp_cr3.style.display = 'block';
                    cp_pw1.style.display = 'block';
                    cp_pw2.style.display = 'block';
                    cp_pw3.style.display = 'block';
                    cp_vr4.style.display = 'block';
                    cp_ct4.style.display = 'block';
                    cp_cr4.style.display = 'block';
                    cp_pw4.style.display = 'block';
                    cp_mt1.style.display = 'block';
                    cp_mt2.style.display = 'block';
                    cp_mt3.style.display = 'block';
                    cp_mt4.style.display = 'block';
                    cp_mt5.style.display = 'block';
                    cp_mt6.style.display = 'block';
                    cp_mt7.style.display = 'block';
                    cp_mt8.style.display = 'block';
                    cp_mtp1.style.display = 'block';
                    cp_mtp2.style.display = 'block';
                    cp_mtp3.style.display = 'block';
                    cp_mtp4.style.display = 'block';
                    cp_mtp5.style.display = 'block';
                    cp_mtp6.style.display = 'block';
                    cp_rh1.style.display = 'block';
                    cp_rh2.style.display = 'block';
                    cp_rh3.style.display = 'block';
                    cp_rh4.style.display = 'block';
                    cp_rh5.style.display = 'block';
                    cp_rh6.style.display = 'block';
                    cp_ps1.style.display = 'block';
                    cp_ps2.style.display = 'block';
                    cp_ps3.style.display = 'block';
                    cp_ps4.style.display = 'block';
                    cp_ps5.style.display = 'block';
                    cp_ps6.style.display = 'block';
                    cp_rh7.style.display = 'block';
                    cp_rh8.style.display = 'block';
                    cp_ps7.style.display = 'block';
                    cp_ps8.style.display = 'block';
                    cp_ht1.style.display = 'block';
                    cp_ht2.style.display = 'block';
                    cp_ht3.style.display = 'block';
                    cp_tf1.style.display = 'block';
                    cp_tf2.style.display = 'block';
                    cp_tf3.style.display = 'block';
                    cp_tu1.style.display = 'block';
                    cp_tu2.style.display = 'block';
                    cp_tu3.style.display = 'block';
                    cp_hu1.style.display = 'block';
                    cp_hu2.style.display = 'block';
                    cp_hu3.style.display = 'block';

                    ut_v1.style.display = 'block';
                    ut_v2.style.display = 'block';
                    ut_v3.style.display = 'block';
                    ut_c1.style.display = 'block';
                    ut_c2.style.display = 'block';
                    ut_c3.style.display = 'block';
                    ut_p1.style.display = 'block';
                    ut_p2.style.display = 'block';
                    ut_p3.style.display = 'block';
                    ut_x1.style.display = 'block';
                    ut_x2.style.display = 'block';
                    ut_g1.style.display = 'block';
                    ut_g2.style.display = 'block';
                    ut_xx1.style.display = 'block';
                    ut_xx2.style.display = 'block';
                    ut_q1.style.display = 'block';
                    ut_q2.style.display = 'block';
                    ut_cw1.style.display = 'block';
                    ut_cw2.style.display = 'block';
                    ut_d1.style.display = 'block';
                    ut_d2.style.display = 'block';
                    ut_t1.style.display = 'block';
                    ut_t2.style.display = 'block';
                    ut_cda1.style.display = 'block';
                    ut_cda2.style.display = 'block';
                    ut_l1.style.display = 'block';
                    ut_l2.style.display = 'block';
                }
            });
        </script>
    </body>
</html>