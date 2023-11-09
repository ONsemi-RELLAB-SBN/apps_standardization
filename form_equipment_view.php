<?php
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

include 'form_template.php';
include './class/get_parameter.php';
$id = $_GET['view'];
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>VIEW | Standardization Survey</title>
        <meta name="author" content="Ayep" />
        <link rel="shortcut icon" href="image/logo/onsemi_logo.ico">

        <link rel="stylesheet" type="text/css" href="css/w3.css">
        <link rel="stylesheet" type="text/css" href="css/skeleton.css">
        <link rel='stylesheet' type="text/css" href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'>
    </head>
    <body>
        <?php include './navigation_equipment.php';?>
        <div class="twelve columns">&nbsp;</div>
        <div class="twelve columns">&nbsp;</div>
        <div class="twelve columns">&nbsp;</div>
        <!--<h5 style="border-left: none;">Equipment Details</h5>-->
        <form id="view_equipment_form" action="" method="get">
            <div class="row">
                <?php
                $sqlFormData = "SELECT * FROM gest_form_eqpt WHERE id = '$id'";
                $resForm = mysqli_query($con, $sqlFormData);
                while ($rowForm = mysqli_fetch_array($resForm)):
                    ?>

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

                    <h6 id="identity">Equipment Identity</h6>
                    <div class="row">
                        <div class="two columns"><label for="eqpt_id">Equipment ID *</label></div>
                        <div class="three columns">
                            <input type="text" id="eqpt_id" name="eqpt_id" value="<?php echo getParameterValue($rowForm['eqpt_id']); ?>" required readonly>
                        </div>
                        <div class="one columns">&nbsp;</div>
                        <div class="two columns"><label for="dedicated">Dedicated/Share *</label></div>
                        <div class="three columns">
                            <input type="text" id="dedicated" name="dedicated" value="<?php echo getParameterValue($rowForm['dedicate_usage']); ?>" required readonly>
                        </div>
                        <div class="one columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="manufacturer">Equipment Manufacturer *</label></div>
                        <div class="three columns">
                            <input type="text" id="manufacturer" name="manufacturer" value="<?php echo getParameterValue($rowForm['eqpt_manufacturer']); ?>" required readonly>
                        </div>
                        <div class="one columns">&nbsp;</div>
                        <div class="two columns"><label for="model">Equipment Model *</label></div>
                        <div class="three columns">
                            <input type="text" id="model" name="model" value="<?php echo getParameterValue($rowForm['eqpt_model']); ?>" required readonly>
                        </div>
                        <div class="one columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="mfg_date">Equipment Mfg Date *</label></div>
                        <div class="three columns"><input type="text" id="mfg_date" name="mfg_date" value="<?php echo $rowForm['eqpt_mfg_date']; ?>" required readonly></div>
                        <div class="one columns">&nbsp;</div>
                        <div class="two columns"><label for="asset_no">Equipment Asset No *</label></div>
                        <div class="three columns"><input type="text" id="asset_no" name="asset_no" value="<?php echo $rowForm['eqpt_asset_no']; ?>" required readonly></div>
                        <div class="one columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="new_transfer">New/Transfer Equipment *</label></div>
                        <div class="three columns">
                            <input type="text" id="new_transfer" name="new_transfer" value="<?php echo getParameterValue($rowForm['new_transfer_eqpt']); ?>" required readonly>
                        </div>
                        <?php
                        $checkLocation = getParameterValue($rowForm['new_transfer_eqpt']);
                        if ($checkLocation == "Transfer") {
                            ?>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns">
                                <label for="from">From? </label>
                            </div>
                            <div class="three columns">
                                <input type="text" id="from" name="from" value="<?php echo getParameterValue($rowForm['transfer_eqpt_location']); ?>" required readonly>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="relTest">Rel Test (Multiselect) *</label></div>
                        <div class="three columns">
                            <input type="text" id="relTest" name="relTest" value="<?php echo getParameterValues($rowForm['rel_test']); ?>" required readonly>
                        </div>
                        <?php
                        $checkZone = getParameterValues($rowForm['rel_test']);
                        $data01 = "TC";
                        $data02 = "THS";
                        if (strpos($checkZone, $data02) === false && strpos($checkZone, $data01) === false) {

                            } else {
                            ?>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="zone">Zone *</label></div>
                            <div class="three columns"><input type="number" step="0.001" id="zone" name="zone" value="<?php echo $rowForm['zone']; ?>" required readonly></div>
                        <?php } ?>
                    </div>

                    <h6 id="capability">Capability</h6>
                    <div class="row">
                        <div class="two columns"><label for="volt_rating">Voltage Rating *</label></div>
                        <div class="one columns"><input type="number" step="0.01" id="voltRating" name="voltRating" value="<?php echo $rowForm['eqpt_volt_rating']; ?>" required readonly> </div>
                        <div class="one columns"><label for="volt_rating" style="text-align: left"><b>V</b></label></div>
                        <div class="two columns">&nbsp;</div>
                        <div class="two columns"><label for="volt_control">Voltage Control Accuracy *</label></div>
                        <div class="one columns"><input type="number" step="0.01" id="voltControl" name="voltControl" value="<?php echo $rowForm['volt_control_accuracy']; ?>" required readonly> </div>
                        <div class="one columns"><label for="volt_control" style="text-align: left"><b>%</b></label></div>
                        <div class="two columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="min_temp">Min. Temperature *</label></div>
                        <div class="one columns"><input type="number" step="0.01" id="minTemp" name="minTemp" value="<?php echo $rowForm['min_temp']; ?>" required readonly> </div>
                        <div class="one columns"><label for="min_temp" style="text-align: left"><b>`C</b></label></div>
                        <div class="two columns">&nbsp;</div>
                        <div class="two columns"><label for="max_temp">Max. Temperature *</label></div>
                        <div class="one columns"><input type="number" step="0.01" id="maxTemp" name="maxTemp" value="<?php echo $rowForm['max_temp']; ?>" required readonly> </div>
                        <div class="one columns"><label for="max_temp" style="text-align: left"><b>`C</b></label></div>
                        <div class="two columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="minRh">Min. RH *</label></div>
                        <div class="one columns"><input type="number" step="0.01" id="minRh" name="minRh" value="<?php echo $rowForm['min_rh']; ?>" required readonly> </div>
                        <div class="one columns"><label for="minRh" style="text-align: left"><b>%</b></label></div>
                        <div class="two columns">&nbsp;</div>
                        <div class="two columns"><label for="maxRh">Max. RH *</label></div>
                        <div class="one columns"><input type="number" step="0.01" id="maxRh" name="maxRh" value="<?php echo $rowForm['max_rh']; ?>" required readonly> </div>
                        <div class="one columns"><label for="maxRh" style="text-align: left"><b>%</b></label></div>
                        <div class="two columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="min_pressure">Minimum Pressure *</label></div>
                        <div class="one columns"><input type="number" step="0.01" id="min_pressure" name="min_pressure" value="<?php echo $rowForm['min_pressure']; ?>" required readonly> </div>
                        <div class="one columns"><label for="min_pressure" style="text-align: left"><b>psi</b></label></div>
                        <div class="two columns">&nbsp;</div>
                        <div class="two columns"><label for="max_pressure">Maximum Pressure *</label></div>
                        <div class="one columns"><input type="number" step="0.01" id="max_pressure" name="max_pressure" value="<?php echo $rowForm['max_pressure']; ?>" required readonly> </div>
                        <div class="one columns"><label for="max_pressure" style="text-align: left"><b>psi</b></label></div>
                        <div class="two columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="heat_dissipation">Heat Dissipation *</label></div>
                        <div class="one columns"><input type="number" step="0.001" id="heatDissipation" name="heatDissipation" value="<?php echo $rowForm['heat_dissipation']; ?>" required readonly> </div>
                        <div class="one columns"><label for="heat_dissipation" style="text-align: left"><b>Watt</b></label></div>
                        <div class="two columns">&nbsp;</div>
                        <div class="two columns"><label for="temp_fluctuation">Temperature Fluctuation *</label></div>
                        <div class="one columns"><input type="number" step="0.01" id="tempFluctuation" name="tempFluctuation" value="<?php echo $rowForm['temp_fluctuation']; ?>" required readonly> </div>
                        <div class="one columns"><label for="temp_fluctuation" style="text-align: left"><b>`C</b></label></div>
                        <div class="two columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="temp_uniform">Temperature Uniformity *</label></div>
                        <div class="one columns"><input type="number" step="0.01" id="tempUniform" name="tempUniform" value="<?php echo $rowForm['temp_uniformity']; ?>" required readonly> </div>
                        <div class="one columns"><label for="temp_uniform" style="text-align: left"><b>`C</b></label></div>
                        <div class="two columns">&nbsp;</div>
                        <div class="two columns"><label for="humid_fluctuation">Humidity Fluctuation *</label></div>
                        <div class="one columns"><input type="number" step="0.01" id="humidFluctuation" name="humidFluctuation" value="<?php echo $rowForm['humid_fluctuation']; ?>" required readonly> </div>
                        <div class="one columns"><label for="humid_fluctuation" style="text-align: left"><b>%</b></label></div>
                        <div class="two columns">&nbsp;</div>
                    </div>

                    <h6 id="characteristic">Characteristic</h6>
                    <div class="row">
                        <div class="two columns"><label for="no_interior">No. Interior Zones (doors) *</label></div>
                        <div class="one columns"><input type="number" step="0.001" id="noInterior" name="noInterior" value="<?php echo $rowForm['no_interior_zone']; ?>" required readonly> </div>
                        <div class="one columns"><label for="no_interior" style="text-align: left"><b>Zone</b></label></div>
                        <div class="two columns">&nbsp;</div>
                        <div class="two columns"><label for="ext_dimension_w">External Dimension (W) *</label></div>
                        <div class="one columns"><input type="number" step="0.001" id="extDimensionW" name="extDimensionW" value="<?php echo $rowForm['ext_dimension_w']; ?>" required readonly></div>
                        <div class="one columns"><label for="ext_dimension_w" style="text-align: left"><b>mm</b></label></div>
                        <div class="two columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="int_volume">Internal Volume *</label></div>
                        <div class="one columns"><input type="number" step="0.001" id="intVolume" name="intVolume" value="<?php echo $rowForm['int_vol']; ?>" required readonly> </div>
                        <div class="one columns"><label for="int_volume" style="text-align: left"><b>L</b></label></div>
                        <div class="two columns">&nbsp;</div>
                        <div class="two columns"><label for="ext_dimension_d">(D) *</label></div>
                        <div class="one columns"><input type="number" step="0.001" id="extDimensionD" name="extDimensionD" value="<?php echo $rowForm['ext_dimension_d']; ?>" required readonly> </div>
                        <div class="one columns"><label for="ext_dimension_d" style="text-align: left"><b>mm</b></label></div>
                        <div class="two columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="board_orientation">Board Orientation*</label></div>
                        <div class="three columns">
                            <input type="text" id="boardOrientation" name="boardOrientation" value="<?php echo getParameterValue($rowForm['board_orientation']); ?>" required readonly>
                        </div>
                        <div class="one columns">&nbsp;</div>
                        <div class="two columns"><label for="ext_dimension_h">(H) *</label></div>
                        <div class="one columns"><input type="number" step="0.001" id="extDimensionH" name="extDimensionH" value="<?php echo $rowForm['ext_dimension_h']; ?>" required readonly> </div>
                        <div class="one columns"><label for="ext_dimension_h" style="text-align: left"><b>mm</b></label></div>
                        <div class="two columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="rack_material">Rack Material *</label></div>
                        <div class="three columns">
                            <input type="text" id="rackMaterial" name="rackMaterial" value="<?php echo getParameterValue($rowForm['rack_material']); ?>" required readonly>
                        </div>
                        <div class="one columns">&nbsp;</div>
                        <div class="two columns"><label for="int_dimension_w">Internal Dimension (W) *</label></div>
                        <div class="one columns"><input type="number" step="0.001" id="intDimensionW" name="intDimensionW" value="<?php echo $rowForm['int_dimension_w']; ?>" required readonly> </div>
                        <div class="one columns"><label for="int_dimension_w" style="text-align: left"><b>mm</b></label></div>
                        <div class="two columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="rack_slot_pitch">Rack Slot-to-Slot Pitch *</label></div>
                        <div class="one columns"><input type="number" step="0.001" id="rackSlotPitch" name="rackSlotPitch" value="<?php echo $rowForm['rack_slot_pitch']; ?>" required readonly></div>
                        <div class="one columns"><label for="rack_slot_pitch" style="text-align: left"><b>mm</b></label></div>
                        <div class="two columns">&nbsp;</div>
                        <div class="two columns"><label for="int_dimension_d">(D) *</label></div>
                        <div class="one columns"><input type="number" step="0.001" id="intDimensionD" name="intDimensionD" value="<?php echo $rowForm['int_dimension_d']; ?>" required readonly></div>
                        <div class="one columns"><label for="int_dimension_d" style="text-align: left"><b>mm</b></label></div>
                        <div class="two columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="rack_slot_width">Rack Slot Width *</label></div>
                        <div class="one columns"><input type="number" step="0.001" id="rackSLotWidth" name="rackSLotWidth" value="<?php echo $rowForm['rack_slot_width']; ?>" required readonly> </div>
                        <div class="one columns"><label for="rack_slot_width" style="text-align: left"><b>mm</b></label></div>
                        <div class="two columns">&nbsp;</div>
                        <div class="two columns"><label for="int_dimension_h">(H) *</label></div>
                        <div class="one columns"><input type="number" step="0.001" id="intDimensionH" name="intDimensionH" value="<?php echo $rowForm['int_dimension_h']; ?>" required readonly> </div>
                        <div class="one columns"><label for="int_dimension_h" style="text-align: left"><b>mm</b></label></div>
                        <div class="two columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="eqpt_weight">Equipment Weight *</label></div>
                        <div class="one columns"><input type="number" step="0.001" id="eqptWeight" name="eqptWeight" value="<?php echo $rowForm['eqpt_weight']; ?>" required readonly> </div>
                        <div class="one columns"><label for="eqpt_weight" style="text-align: left"><b>Kg</b></label></div>
                        <div class="two columns">&nbsp;</div>
                        <div class="two columns"><label for="rack_dimension_w">Rack Dimension (W) *</label></div>
                        <div class="one columns"><input type="number" step="0.001" id="rackDimensionW" name="rackDimensionW" value="<?php echo $rowForm['rack_dimension_w']; ?>" required readonly> </div>
                        <div class="one columns"><label for="rack_dimension_w" style="text-align: left"><b>mm</b></label></div>
                        <div class="two columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="no_mb_slot">Number of motherboard slots *</label></div>
                        <div class="one columns"><input type="number" step="0.001" id="noMbSlot" name="noMbSlot" value="<?php echo $rowForm['no_mb_slot']; ?>" required readonly></div>
                        <div class="one columns"><label for="no_mb_slot" style="text-align: left"><b>Slot</b></label></div>
                        <div class="two columns">&nbsp;</div>
                        <div class="two columns"><label for="rack_dimension_d">(D) *</label></div>
                        <div class="one columns"><input type="number" step="0.001" id="rackDimensionD" name="rackDimensionD" value="<?php echo $rowForm['rack_dimension_d']; ?>" required readonly> </div>
                        <div class="one columns"><label for="rack_dimension_d" style="text-align: left"><b>mm</b></label></div>
                        <div class="two columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="max_ps_bs">Max number of power supplies per board slot *</label></div>
                        <div class="one columns"><input type="number" step="0.001" id="maxPsBs" name="maxPsBs" value="<?php echo $rowForm['max_ps_slot']; ?>" required readonly> </div>
                        <div class="one columns"><label for="max_ps_bs" style="text-align: left"><b>Slot</b></label></div>
                        <div class="two columns">&nbsp;</div>
                        <div class="two columns"><label for="rack_dimension_h">(H) *</label></div>
                        <div class="one columns"><input type="number" step="0.001" id="rackDimensionH" name="rackDimensionH" value="<?php echo $rowForm['rack_dimension_h']; ?>" required readonly> </div>
                        <div class="one columns"><label for="rack_dimension_h" style="text-align: left"><b>mm</b></label></div>
                        <div class="two columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="max_ps">Max number of power supplies for the entire Equipment *</label></div>
                        <div class="one columns"><input type="number" step="0.001" id="maxPs" name="maxPs" value="<?php echo $rowForm['max_ps_eqpt']; ?>" required readonly> </div>
                        <div class="one columns"><label for="max_ps" style="text-align: left"><b>Unit</b></label></div>
                        <div class="two columns">&nbsp;</div>
                        <div class="two columns"><label for="airflow">Airflow *</label></div>
                        <div class="three columns">
                            <input type="text" id="airflow" name="airflow" value="<?php echo getParameterValue($rowForm['airflow']); ?>" required readonly>
                        </div>
                    </div>

                    <h6 id="safety">Safety</h6>
                    <div class="row">
                        <div class="two columns"><label for="tempProtection1">Temperature Protection 1 *</label></div>
                        <div class="three columns">
                            <input type="text" id="tempProtection1" name="tempProtection1" value="<?php echo getParameterValue($rowForm['temp_protection_1']); ?>" required readonly>
                        </div>
                        <div class="one columns">&nbsp;</div>
                        <div class="two columns"><label for="tempProtection2">Temperature Protection 2 *</label></div>
                        <div class="three columns">
                            <input type="text" id="tempProtection2" name="tempProtection2" value="<?php echo getParameterValue($rowForm['temp_protection_2']); ?>" required readonly>
                        </div>
                        <div class="one columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="tempThermostat3">Temperature Protection / Thermostat 3 *</label></div>
                        <div class="three columns">
                            <input type="text" id="tempThermostat3" name="tempThermostat3" value="<?php echo getParameterValue($rowForm['temp_protection_3']); ?>" required readonly>
                        </div>
                        <div class="one columns">&nbsp;</div>
                        <div class="two columns"><label for="smoke_detector">Smoke Detector/Alarm *</label></div>
                        <div class="three columns">
                            <input type="text" id="smokeDetector" name="smokeDetector" value="<?php echo getParameterValue($rowForm['smoke_alarm']); ?>" required readonly>
                        </div>
                        <div class="one columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="emo">EMO button *</label></div>
                        <div class="three columns">
                            <input type="text" id="emo" name="emo" value="<?php echo getParameterValue($rowForm['emo_btn']); ?>" required readonly>
                        </div>
                    </div>

                    <h6 id="utilities">Utilities</h6>
                    <div class="row">
                        <div class="two columns"><label for="voltage_phase">Voltage/Phase/Current *</label></div>
                        <div class="one columns"><input type="number" step="0.01" id="voltagePhase" name="voltagePhase" value="<?php echo $rowForm['volt_phase_current']; ?>" required readonly> </div>
                        <div class="one columns"><label for="voltage_phase" style="text-align: left"><b>VAC</b></label></div>
                        <div class="two columns">&nbsp;</div>
                        <div class="two columns"><label for="phase">Phase *</label></div>
                        <div class="one columns"><input type="number" step="0.001" id="phase" name="phase" value="<?php echo $rowForm['phase']; ?>" required readonly> </div>
                        <div class="one columns"><label for="phase" style="text-align: left"><b>Phase</b></label></div>
                        <div class="two columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="exhaust">Exhaust *</label></div>
                        <div class="three columns">
                            <input type="text" id="exhaust" name="exhaust" value="<?php echo getParameterValue($rowForm['exhaust']); ?>" required readonly>
                        </div>
                        <div class="one columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="liquid_nitrogen">Liquid Nitrogen *</label></div>
                        <div class="three columns">
                            <input type="text" id="liquid_nitrogen" name="liquid_nitrogen" value="<?php echo getParameterValue($rowForm['liquid_nitrogen']); ?>" required readonly>
                        </div>
                        <div class="one columns">&nbsp;</div>
                        <div class="two columns"><label for="chilled_water">Chilled Water *</label></div>
                        <div class="three columns">
                            <input type="text" id="chilled_water" name="chilled_water" value="<?php echo getParameterValue($rowForm['chilled_water']); ?>" required readonly>
                        </div>
                        <div class="one columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="n2gas">N2 Gas *</label></div>
                        <div class="three columns">
                            <input type="text" id="n2gas" name="n2gas" value="<?php echo getParameterValue($rowForm['n2_gas']); ?>" required readonly>
                        </div>
                        <div class="six columns" id="oxygen" style="display: none;">
                            <div class="three columns"><label for="oxygen_level">Oxygen Level Detector *</label></div>
                            <div class="three columns">
                                <input type="text" id="oxygen_level" name="oxygen_level" value="<?php echo getParameterValue($rowForm['oxygen_level_detector']); ?>" required readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="di_water">DI Water *</label></div>
                        <div class="three columns">
                            <input type="text" id="diWater" name="diWater" value="<?php echo getParameterValue($rowForm['di_water']); ?>" required readonly>
                        </div>
                        <?php
                        $checkWater = getParameterValue($rowForm['di_water']);
                        if ($checkWater == "Available") {
                            ?>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="water_topup">Water Top-up System *</label></div>
                            <div class="three columns">
                                <input type="text" id="waterTopup" name="waterTopup" value="<?php echo getParameterValue($rowForm['water_topup_system']); ?>" required readonly>
                            </div>
                        <?php } ?>
                    </div>

                    <h6 id="daqt">DAQ</h6>
                    <div class="row">
                        <div class="two columns"><label for="daq">DAQ (Realtime Leakage Monitoring) *</label></div>
                        <div class="three columns">
                            <input type="text" id="daq" name="daq" value="<?php echo getParameterValue($rowForm['daq']); ?>" required readonly>
                        </div>
                    </div>

                    <h6 id="intconfig">Internal Chamber Configuration</h6>
                    <div class="row">
                        <div class="two columns"><label for="int_config_type">Configuration Type *</label></div>
                        <div class="three columns">
                            <input type="text" id="int_config_type" name="int_config_type" value="<?php echo getParameterValue($rowForm['internal_config_type']); ?>" required readonly>
                        </div>
                    </div>

                    <?php
                    $dataCheck = getParameterValue($rowForm['internal_config_type']);
                    if ($dataCheck == "Banana") { ?>
                        <div class="row">
                            <div class="two columns"><label for="banana_jack_hole">No. Banana Jack Holes *</label></div>
                            <div class="one columns"><input type="number" step="0.001" id="banana_jack_hole" name="banana_jack_hole" value="<?php echo $rowForm['no_banana_jack_hole']; ?>" > </div>
                            <div class="one columns"><label for="banana_jack_hole" style="text-align: left"><b>Pins</b></label></div>
                            <div class="two columns">&nbsp;</div>
                            <div class="two columns"><label for="conn_volt_rating">Connector Voltage Rating *</label></div>
                            <div class="one columns"><input type="number" step="0.001" id="conn_volt_rating" name="conn_volt_rating" value="<?php echo $rowForm['conn_volt_rating']; ?>" > </div>
                            <div class="one columns"><label for="conn_volt_rating" style="text-align: left"><b>V</b></label></div>
                            <div class="two columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="conn_curr_rating">Connector Current Rating *</label></div>
                            <div class="one columns"><input type="number" step="0.001" id="conn_curr_rating" name="conn_curr_rating" value="<?php echo $rowForm['conn_current_rating']; ?>" > </div>
                            <div class="one columns"><label for="conn_curr_rating" style="text-align: left"><b>A</b></label></div>
                            <div class="two columns">&nbsp;</div>
                            <div class="two columns"><label for="conn_temp_rating">Connector Temp Rating *</label></div>
                            <div class="one columns"><input type="number" step="0.001" id="conn_temp_rating" name="conn_temp_rating" value="<?php echo $rowForm['conn_temp_rating']; ?>" > </div>
                            <div class="one columns"><label for="conn_temp_rating" style="text-align: left"><b>`C</b></label></div>
                            <div class="two columns">&nbsp;</div>
                        </div>
                    <?php } else if ($dataCheck === "Edge Connector") { ?>
                        <div class="row">
                            <div class="two columns"><label for="no_pins">No. of Pins *</label></div>
                            <div class="one columns"><input type="number" step="0.001" id="no_pins" name="no_pins" value="<?php echo $rowForm['no_pin']; ?>" > </div>
                            <div class="one columns"><label for="no_pins" style="text-align: left"><b>Pins</b></label></div>
                            <div class="two columns">&nbsp;</div>
                            <div class="two columns"><label for="pin_pitch">Pin Pitch *</label></div>
                            <div class="one columns"><input type="number" step="0.001" id="pin_pitch" name="pin_pitch" value="<?php echo $rowForm['pin_pitch']; ?>" > </div>
                            <div class="one columns"><label for="pin_pitch" style="text-align: left"><b>mm</b></label></div>
                            <div class="two columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="conn_volt_rating">Connector Voltage Rating *</label></div>
                            <div class="one columns"><input type="number" step="0.001" id="conn_volt_rating" name="conn_volt_rating" value="<?php echo $rowForm['conn_volt_rating']; ?>" > </div>
                            <div class="one columns"><label for="conn_volt_rating" style="text-align: left"><b>V</b></label></div>
                            <div class="two columns">&nbsp;</div>
                            <div class="two columns"><label for="conn_curr_rating">Connector Current Rating *</label></div>
                            <div class="one columns"><input type="number" step="0.001" id="conn_curr_rating" name="conn_curr_rating" value="<?php echo $rowForm['conn_current_rating']; ?>" > </div>
                            <div class="one columns"><label for="conn_curr_rating" style="text-align: left"><b>A</b></label></div>
                            <div class="two columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="conn_temp_rating">Connector Temp Rating *</label></div>
                            <div class="one columns"><input type="number" step="0.001" id="conn_temp_rating" name="conn_temp_rating" value="<?php echo $rowForm['conn_temp_rating']; ?>" > </div>
                            <div class="one columns"><label for="conn_temp_rating" style="text-align: left"><b>`C</b></label></div>
                        </div>
                    <?php } else if ($dataCheck === "Winchestor") { ?>
                        <div class="row">
                            <div class="two columns"><label for="no_pins">No. of Pins *</label></div>
                            <div class="one columns"><input type="number" step="0.001" id="no_pins" name="no_pins" value="<?php echo $rowForm['no_pin']; ?>" > </div>
                            <div class="one columns"><label for="no_pins" style="text-align: left"><b>Pins</b></label></div>
                            <div class="two columns">&nbsp;</div>
                            <div class="two columns"><label for="pin_pitch">Pin Pitch *</label></div>
                            <div class="one columns"><input type="number" step="0.001" id="pin_pitch" name="pin_pitch" value=<?php echo $rowForm['pin_pitch']; ?>" > </div>
                                                            <div class="one columns"><label for="pin_pitch" style="text-align: left"><b>mm</b></label></div>
                            <div class="two columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="conn_volt_rating">Connector Voltage Rating *</label></div>
                            <div class="one columns"><input type="number" step="0.001" id="conn_volt_rating" name="conn_volt_rating" value="<?php echo $rowForm['conn_volt_rating']; ?>" > </div>
                            <div class="one columns"><label for="conn_volt_rating" style="text-align: left"><b>V</b></label></div>
                            <div class="two columns">&nbsp;</div>
                            <div class="two columns"><label for="conn_curr_rating">Connector Current Rating *</label></div>
                            <div class="one columns"><input type="number" step="0.001" id="conn_curr_rating" name="conn_curr_rating" value="<?php echo $rowForm['conn_current_rating']; ?>" > </div>
                            <div class="one columns"><label for="conn_curr_rating" style="text-align: left"><b>A</b></label></div>
                            <div class="two columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="conn_rack">No. Wires Connected to Rack *</label></div>
                            <div class="one columns"><input type="number" step="0.001" id="conn_rack" name="conn_rack" value="<?php echo $rowForm['no_wire_conn_rack']; ?>" > </div>
                            <div class="one columns"><label for="conn_rack" style="text-align: left"><b>`C</b></label></div>
                        </div>
                    <?php } else if ($dataCheck === "Wires") { ?>
                        <div class="row">
                            <div class="two columns"><label for="wire_volt_rating">Wire Voltage Rating *</label></div>
                            <div class="one columns"><input type="number" step="0.001" id="wire_volt_rating" name="wire_volt_rating" value="<?php echo $rowForm['wire_volt_rating']; ?>" > </div>
                            <div class="one columns"><label for="wire_volt_rating" style="text-align: left"><b>V</b></label></div>
                            <div class="two columns">&nbsp;</div>
                            <div class="two columns"><label for="wire_curr_rating">Wire Current Rating *</label></div>
                            <div class="one columns"><input type="number" step="0.001" id="wire_curr_rating" name="wire_curr_rating" value="<?php echo $rowForm['wire_curr_rating']; ?>" > </div>
                            <div class="one columns"><label for="wire_curr_rating" style="text-align: left"><b>A</b></label></div>
                            <div class="two columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="wire_temp_rating">Wire Temp Rating *</label></div>
                            <div class="one columns"><input type="number" step="0.001" id="wire_temp_rating" name="wire_temp_rating" value="<?php echo $rowForm['wire_temp_rating']; ?>" > </div>
                            <div class="one columns"><label for="wire_temp_rating" style="text-align: left"><b>`C</b></label></div>
                        </div>
                    <?php } ?>

                    <h6 id="extconfig">External Chamber Configuration</h6>
                    <div class="row">
                        <div class="two columns"><label for="ext_config_type">Configuration Type *</label></div>
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
                                <div class="two columns"><label for="interface_volt_rating">Interface Voltage Rating *</label></div>
                                <div class="one columns"><input type="number" step="0.001" id="interface_volt_rating" name="interface_volt_rating" value="<?php echo $rowForm['interface_volt_rating']; ?>" > </div>
                                <div class="one columns"><label for="interface_volt_rating" style="text-align: left"><b>V</b></label></div>
                                <div class="two columns">&nbsp;</div>
                                <div class="one columns"><input type="number" step="0.001" id="interface_curr_rating" name="interface_curr_rating" value="<?php echo $rowForm['interface_current_rating']; ?>" > </div>
                                <div class="one columns"><label for="interface_curr_rating" style="text-align: left"><b>A</b></label></div>
                                <div class="two columns">&nbsp;</div>
                            </div>
                        </div>
                    <?php } endwhile; ?>
                <button onclick="location.href = 'form_equipment_list.php'" type="button" id="backBtn"><i class='bx bxs-chevron-left bx-fw' ></i> Back</button>
                <button onclick="location.href = 'form_equipment_edit.php?edit=<?php echo $id; ?>'" type="button" id="editBtn"><i class='bx bxs-pencil bx-fw' ></i> Edit</button>
            </div>
        </form>
    </body>
</html>