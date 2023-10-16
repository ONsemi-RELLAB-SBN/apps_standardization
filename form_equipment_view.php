<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

include 'form_template.php';
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
        <link rel="shortcut icon" href="image/dribbble.ico">

        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/elements.css" />
        <link rel="stylesheet" type="text/css" href="css/layout.css">
        <link rel="stylesheet" type="text/css" href="css/readonly.css" />
        <link rel="stylesheet" type="text/css" href="css/select2.css"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'>

        <script src="js/bootstrap.js"></script>
        <script src="js/jquery.js"></script>
        <script src="js/select2.min.js"></script>

        <style>
            .select2-container-active .select2-choice,
            .select2-container-active .select2-choices {
                /*border: 1px solid $input-border-focus !important;*/
                -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #009d9b !important;
                box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #009d9b !important;
            }

            .select2-dropdown-open .select2-choice {
                border-bottom: 0 !important;
                background-image: none;
                background-color: #fff;
                filter: none;
                -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #009d9b !important;
                box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #009d9b !important;
            }

            .select2-dropdown-open.select2-drop-above .select2-choice,
            .select2-dropdown-open.select2-drop-above .select2-choices {
                /*border: 1px solid $input-border-focus !important;*/
                border-top: 0 !important;
                background-image: none;
                background-color: #fff;
                filter: none;
                -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #009d9b !important;
                box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #009d9b !important;
            }

            .no-border {
                border: 0;
                box-shadow: none; /* You may want to include this as bootstrap applies these styles too */
            }

            span.tab-space {
                padding-left:20em;
            }

            #editBtn {
                display: block;
                position: fixed;
                top: 160px;
                right: 30px;
                z-index: 99;
                font-size: 18px;
                border: none;
                outline: none;
                background-color: gray;
                color: white;
                cursor: pointer;
                padding: 15px;
                border-radius: 4px;
            }
            #backBtn {
                display: block;
                position: fixed;
                top: 80px;
                right: 30px;
                z-index: 99;
                font-size: 18px;
                border: none;
                outline: none;
                background-color: gray;
                color: white;
                cursor: pointer;
                padding: 15px;
                border-radius: 4px;
            }
            #myBtn {
                display: block;
                position: fixed;
                bottom: 20px;
                right: 30px;
                z-index: 99;
                font-size: 18px;
                border: none;
                outline: none;
                background-color: gray;
                color: white;
                cursor: pointer;
                padding: 15px;
                border-radius: 4px;
            }

            #myBtn:hover {
                background-color: #17a2b8;
            }
        </style>
        <script type="text/javascript">
            $(document).ready(function () {

                $('.js-example-basic-multiple').select2({
                    placeholder: "Multi Select",
                    allowClear: true
                });

                $(".js-example-basic-single").select2({
                    placeholder: "Choose one",
                    allowClear: true
                });
            });

            $("input[type='text'], textarea").on("input", function () {
                canChangeColor();
            });

            function canChangeColor() {
                var can = true;
                $("input[type='text'], textarea").each(function () {
                    if ($(this).val() == '') {
                        can = false;
                    }
                });
                if (can) {
                    $('.btn').css({background: 'red'})
                } else {
                    $('.btn').css({background: 'transparent'})
                }

            }
        </script>
    </head>
    <body>
        <div class="col-lg-12">
            <h1>Equipment Survey Form | View</h1>
            <div class="row">
                <div class="col-lg-11">
                    <div class="main-box">
                        <h2>General</h2>
                        <form id="view_equipment_form" class="form-horizontal" role="form" action="parameter_view_equipment.php" method="get">
                            <?php 
                            $sqlFormData = "SELECT * FROM gest_eqpt_form WHERE id = '$id'";
                            $resForm = mysqli_query($con, $sqlFormData);
                            while ($rowForm = mysqli_fetch_array($resForm)): ?>
                            <div class="form-group">
                                <label for="labLocation" class="col-lg-2 control-label">Lab Location *</label>
                                <div class="col-lg-3">
                                    <input type="text" class="form-control" id="labLocation" name="labLocation" value="<?php echo getParameterValue($rowForm['lab_location']); ?>" required readonly />
                                </div>
                                <label for="strategy" class="col-lg-2 control-label">onsemi Strategy *</label>
                                <div class="col-lg-3">
                                    <input type="text" class="form-control" id="strategy" name="strategy" value="<?php echo getParameterValue($rowForm['strategy']); ?>" required readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="standardization" class="col-lg-2 control-label">Standardization Category *</label>
                                <div class="col-lg-3">
                                    <input type="text" class="form-control" id="standardization" name="standardization" value="<?php echo getParameterValue($rowForm['standard_category']); ?>" required readonly>
                                </div>
                                <label for="champion" class="col-lg-2 control-label">Champion *</label>
                                <div class="col-lg-3">
                                    <input type="text" class="form-control" id="champion" name="champion" value="<?php echo getParameterValue($rowForm['champion']); ?>" required readonly>
                                </div>
                            </div>

                            <h2>Equipment Identity</h2>
                            <div class="form-group">
                                <label for="eqptId" class="col-lg-2 control-label">Equipment ID *</label>
                                <div class="col-lg-3">
                                    <input type="text" class="form-control" id="eqptId" name="eqptId" value="<?php echo getParameterValue($rowForm['eqpt_id']); ?>" required readonly>
                                </div>
                                <label for="dedicated" class="col-lg-2 control-label">Dedicated/Share *</label>
                                <div class="col-lg-3">
                                    <input type="text" class="form-control" id="dedicated" name="dedicated" value="<?php echo getParameterValue($rowForm['dedicate_usage']); ?>" required readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="relTest" class="col-lg-2 control-label">Rel Test (Multiselect) *</label>
                                <div class="col-lg-3">
                                    <input type="text" class="form-control" id="relTest" name="relTest" value="<?php echo getParameterValues($rowForm['rel_test']); ?>" required readonly>
                                </div>
                                <label for="manufacturer" class="col-lg-2 control-label">Equipment Manufacturer *</label>
                                <div class="col-lg-3">
                                    <input type="text" class="form-control" id="manufacturer" name="manufacturer" value="<?php echo getParameterValue($rowForm['eqpt_manufacturer']); ?>" required readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="model" class="col-lg-2 control-label">Equipment Model *</label>
                                <div class="col-lg-3">
                                    <input type="text" class="form-control" id="model" name="model" value="<?php echo getParameterValue($rowForm['eqpt_model']); ?>" required readonly>
                                </div>
                                <label for="mfgDate" class="col-lg-2 control-label">Equipment Mfg Date *</label>
                                <div class="col-lg-3">
                                    <input type="text" class="form-control" id="mfgDate" name="mfgDate" value="<?php echo $rowForm['eqpt_mfg_date']; ?>" required readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="assetNo" class="col-lg-2 control-label">Equipment Asset No *</label>
                                <div class="col-lg-3">
                                    <input type="text" class="form-control" id="assetNo" name="assetNo" value="<?php echo $rowForm['eqpt_asset_no']; ?>" required readonly>
                                </div>
                                <label for="newTransfer" class="col-lg-2 control-label">New/Transfer Equipment *</label>
                                <div class="col-lg-3">
                                    <input type="text" class="form-control" id="newTransfer" name="newTransfer" value="<?php echo getParameterValue($rowForm['new_transfer_eqpt']); ?>" required readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="to" class="col-lg-7 control-label">To? *</label>
                                <div class="col-lg-3">
                                    <input type="text" class="form-control" id="to" name="to" value="<?php echo getParameterValue($rowForm['transfer_eqpt_location']); ?>" required readonly>
                                </div>
                            </div>

                            <h2>Capability</h2>
                            <div class="form-group">
                                <label for="voltRating" class="col-lg-2 control-label">Voltage Rating *</label>
                                <div class="col-lg-2">
                                    <input type="number" step="0.01" class="form-control" id="voltRating" name="voltRating" value="<?php echo $rowForm['eqpt_volt_rating']; ?>" required readonly> 
                                </div> 
                                <label for="voltRating" class="col-lg-1 control-label pull-left" style="text-align: left"><b>V</b></label>
                                <label for="voltControl" class="col-lg-2 control-label">Voltage Control Accuracy *</label>
                                <div class="col-lg-2">
                                    <input type="number" step="0.01" class="form-control" id="voltControl" name="voltControl" value="<?php echo $rowForm['volt_control_accuracy']; ?>" required readonly> 
                                </div> 
                                <label for="voltControl" class="col-lg-1 control-label pull-left" style="text-align: left"><b>mV</b></label>
                            </div>
                            <div class="form-group">
                                <label for="minTemp" class="col-lg-2 control-label">Min. Temperature *</label>
                                <div class="col-lg-2">
                                    <input type="number" step="0.01" class="form-control" id="minTemp" name="minTemp" value="<?php echo $rowForm['min_temp']; ?>" required readonly> 
                                </div> 
                                <label for="minTemp" class="col-lg-1 control-label pull-left" style="text-align: left"><b>`C</b></label>
                                <label for="maxTemp" class="col-lg-2 control-label">Max. Temperature *</label>
                                <div class="col-lg-2">
                                    <input type="number" step="0.01" class="form-control" id="maxTemp" name="maxTemp" value="<?php echo $rowForm['max_temp']; ?>" required readonly> 
                                </div> 5
                                <label for="maxTemp" class="col-lg-1 control-label pull-left" style="text-align: left"><b>`C</b></label>
                            </div>
                            <div class="form-group">
                                <label for="minRh" class="col-lg-2 control-label">Min. RH *</label>
                                <div class="col-lg-2">
                                    <input type="number" step="0.01" class="form-control" id="minRh" name="minRh" value="<?php echo $rowForm['min_rh']; ?>" required readonly> 
                                </div> 
                                <label for="minRh" class="col-lg-1 control-label pull-left" style="text-align: left"><b>%</b></label>
                                <label for="maxRh" class="col-lg-2 control-label">Max. RH *</label>
                                <div class="col-lg-2">
                                    <input type="number" step="0.01" class="form-control" id="maxRh" name="maxRh" value="<?php echo $rowForm['max_rh']; ?>" required readonly> 
                                </div> 
                                <label for="maxRh" class="col-lg-1 control-label pull-left" style="text-align: left"><b>%</b></label>
                            </div>
                            <div class="form-group">
                                <label for="heatDissipation" class="col-lg-2 control-label">Heat Dissipation *</label>
                                <div class="col-lg-2">
                                    <input type="number" step="0.001" class="form-control" id="heatDissipation" name="heatDissipation" value="<?php echo $rowForm['heat_dissipation']; ?>" required> 
                                </div>
                                <label for="heatDissipation" class="col-lg-1 control-label pull-left" style="text-align: left"><b>`C</b></label>
                                <label for="tempFluctuation" class="col-lg-2 control-label">Temperature Fluctuation *</label>
                                <div class="col-lg-2">
                                    <input type="number" step="0.01" class="form-control" id="tempFluctuation" name="tempFluctuation" value="<?php echo $rowForm['temp_fluctuation']; ?>" required readonly> 
                                </div> 
                                <label for="tempFluctuation" class="col-lg-1 control-label pull-left" style="text-align: left"><b>`C</b></label>
                            </div>
                            <div class="form-group">
                                <label for="tempUniform" class="col-lg-2 control-label">Temperature Uniformity *</label>
                                <div class="col-lg-2">
                                    <input type="number" step="0.01" class="form-control" id="tempUniform" name="tempUniform" value="<?php echo $rowForm['temp_uniformity']; ?>" required readonly> 
                                </div> 
                                <label for="tempUniform" class="col-lg-1 control-label pull-left" style="text-align: left"><b>`C</b></label>
                                <label for="humidFluctuation" class="col-lg-2 control-label">Humidity Fluctuation *</label>
                                <div class="col-lg-2">
                                    <input type="number" step="0.01" class="form-control" id="humidFluctuation" name="humidFluctuation" value="<?php echo $rowForm['humid_fluctuation']; ?>" required readonly> 
                                </div> 
                                <label for="humidFluctuation" class="col-lg-1 control-label pull-left" style="text-align: left"><b>%</b></label>
                            </div>

                            <h2>Characteristic</h2>
                            <div class="form-group">
                                <label for="noInterior" class="col-lg-2 control-label">No. Interior Zones (doors) *</label>
                                <div class="col-lg-2">
                                    <input type="number" step="0.001" class="form-control" id="noInterior" name="noInterior" value="<?php echo $rowForm['no_interior_zone']; ?>" required readonly> 
                                </div>
                                <label for="noInterior" class="col-lg-1 control-label pull-left" style="text-align: left"><b></b></label>
                                <label for="extDimension" class="col-lg-2 control-label">External Dimension (W) *</label>
                                <div class="col-lg-2">
                                    <input type="number" step="0.001" class="form-control" id="extDimensionW" name="extDimensionW" value="<?php echo $rowForm['ext_dimension_w']; ?>" required readonly> 
                                </div>
                                <label for="extDimensionW" class="col-lg-1 control-label pull-left" style="text-align: left"><b>mm</b></label>
                            </div>
                            <div class="form-group">
                                <label for="intVolume" class="col-lg-2 control-label">Internal Volume *</label>
                                <div class="col-lg-2">
                                    <input type="number" step="0.001" class="form-control" id="intVolume" name="intVolume" value="<?php echo $rowForm['int_vol']; ?>" required readonly> 
                                </div> 
                                <label for="intVolume" class="col-lg-1 control-label pull-left" style="text-align: left"><b>L</b></label>
                                <label for="extDimension" class="col-lg-2 control-label">(D) *</label>
                                <div class="col-lg-2">
                                    <input type="number" step="0.001" class="form-control" id="extDimensionD" name="extDimensionD" value="<?php echo $rowForm['ext_dimension_d']; ?>" required readonly> 
                                </div>
                                <label for="extDimensionD" class="col-lg-1 control-label pull-left" style="text-align: left"><b>mm</b></label>
                            </div>
                            <div class="form-group">
                                <label for="boardOrientation" class="col-lg-2 control-label">Board Orientation*</label>
                                <div class="col-lg-3">
                                    <input type="text" class="form-control" id="boardOrientation" name="boardOrientation" value="<?php echo getParameterValue($rowForm['board_orientation']); ?>" required readonly>
                                </div>
                                <label for="extDimension" class="col-lg-2 control-label">(H) *</label>
                                <div class="col-lg-2">
                                    <input type="number" step="0.001" class="form-control" id="extDimensionH" name="extDimensionH" value="<?php echo $rowForm['ext_dimension_h']; ?>" required readonly> 
                                </div>
                                <label for="extDimensionH" class="col-lg-1 control-label pull-left" style="text-align: left"><b>mm</b></label>
                            </div>
                            <div class="form-group">
                                <label for="rackMaterial" class="col-lg-2 control-label">Rack Material *</label>
                                <div class="col-lg-3">
                                    <input type="text" class="form-control" id="rackMaterial" name="rackMaterial" value="<?php echo getParameterValue($rowForm['rack_material']); ?>" required readonly>
                                </div>
                                <label for="intDimension" class="col-lg-2 control-label">Internal Dimension (W) *</label>
                                <div class="col-lg-2">
                                    <input type="number" step="0.001" class="form-control" id="intDimensionW" name="intDimensionW" value="<?php echo $rowForm['int_dimension_w']; ?>" required readonly> 
                                </div> 
                                <label for="intDimensionW" class="col-lg-1 control-label pull-left" style="text-align: left"><b>mm</b></label>
                            </div>
                            <div class="form-group">
                                <label for="rackSlotPitch" class="col-lg-2 control-label">Rack Slot-to-Slot Pitch *</label>
                                <div class="col-lg-2">
                                    <input type="number" step="0.001" class="form-control" id="rackSlotPitch" name="rackSlotPitch" value="<?php echo $rowForm['rack_slot_pitch']; ?>" required readonly>
                                </div> 
                                <label for="rackSlotPitch" class="col-lg-1 control-label pull-left" style="text-align: left"><b>mm</b></label>
                                <label for="intDimension" class="col-lg-2 control-label">(D) *</label>
                                <div class="col-lg-2">
                                    <input type="number" step="0.001" class="form-control" id="intDimensionD" name="intDimensionD" value="<?php echo $rowForm['int_dimension_d']; ?>" required readonly> 
                                </div> 
                                <label for="intDimensionD" class="col-lg-1 control-label pull-left" style="text-align: left"><b>mm</b></label>
                            </div>
                            <div class="form-group">
                                <label for="rackSLotWidth" class="col-lg-2 control-label">Rack Slot Width *</label>
                                <div class="col-lg-2">
                                    <input type="number" step="0.001" class="form-control" id="rackSLotWidth" name="rackSLotWidth" value="<?php echo $rowForm['rack_slot_width']; ?>" required readonly> 
                                </div> 
                                <label for="rackSLotWidth" class="col-lg-1 control-label pull-left" style="text-align: left"><b>mm</b></label>
                                <label for="intDimension" class="col-lg-2 control-label">(H) *</label>
                                <div class="col-lg-2">
                                    <input type="number" step="0.001" class="form-control" id="intDimensionH" name="intDimensionH" value="<?php echo $rowForm['int_dimension_h']; ?>" required readonly> 
                                </div> 
                                <label for="intDimensionH" class="col-lg-1 control-label pull-left" style="text-align: left"><b>mm</b></label>
                            </div>
                            <div class="form-group">
                                <label for="eqptWeight" class="col-lg-2 control-label">Equipment Weight *</label>
                                <div class="col-lg-2">
                                    <input type="number" step="0.001" class="form-control" id="eqptWeight" name="eqptWeight" value="<?php echo $rowForm['eqpt_weight']; ?>" required readonly> 
                                </div> 
                                <label for="eqptWeight" class="col-lg-1 control-label pull-left" style="text-align: left"><b>Kg</b></label>
                                <label for="rackDimension" class="col-lg-2 control-label">Rack Dimension (W) *</label>
                                <div class="col-lg-2">
                                    <input type="number" step="0.001" class="form-control" id="rackDimensionW" name="rackDimensionW" value="<?php echo $rowForm['rack_dimension_w']; ?>" required readonly> 
                                </div>
                                <label for="rackDimensionW" class="col-lg-1 control-label pull-left" style="text-align: left"><b>mm</b></label>
                            </div>
                            <div class="form-group">
                                <label for="noMbSlot" class="col-lg-2 control-label">Number of motherboard slots *</label>
                                <div class="col-lg-2">
                                    <input type="number" step="0.001" class="form-control" id="noMbSlot" name="noMbSlot" value="<?php echo $rowForm['no_mb_slot']; ?>" required readonly>
                                </div> 
                                <label for="noMbSlot" class="col-lg-1 control-label pull-left" style="text-align: left"><b> </b></label>
                                <label for="rackDimension" class="col-lg-2 control-label">(D) *</label>
                                <div class="col-lg-2">
                                    <input type="number" step="0.001" class="form-control" id="rackDimensionD" name="rackDimensionD" value="<?php echo $rowForm['rack_dimension_d']; ?>" required readonly> 
                                </div> 
                                <label for="rackDimensionD" class="col-lg-1 control-label pull-left" style="text-align: left"><b>mm</b></label>
                            </div>
                            <div class="form-group">
                                <label for="maxPsBs" class="col-lg-2 control-label">Max number of power supplies per board slot *</label>
                                <div class="col-lg-2">
                                    <input type="number" step="0.001" class="form-control" id="maxPsBs" name="maxPsBs" value="<?php echo $rowForm['max_ps_slot']; ?>" required readonly> 
                                </div> 
                                <label for="maxPsBs" class="col-lg-1 control-label pull-left" style="text-align: left"><b> </b></label>
                                <label for="rackDimension" class="col-lg-2 control-label">(H) *</label>
                                <div class="col-lg-2">
                                    <input type="number" step="0.001" class="form-control" id="rackDimensionH" name="rackDimensionH" value="<?php echo $rowForm['rack_dimension_h']; ?>" required readonly> 
                                </div> 
                                <label for="rackDimensionH" class="col-lg-1 control-label pull-left" style="text-align: left"><b>mm</b></label>
                            </div>
                            <div class="form-group">
                                <label for="maxPs" class="col-lg-2 control-label">Max number of power supplies for the entire Equipment *</label>
                                <div class="col-lg-2">
                                    <input type="number" step="0.001" class="form-control" id="maxPs" name="maxPs" value="<?php echo $rowForm['max_ps_eqpt']; ?>" required readonly> 
                                </div> 
                                <label for="maxPs" class="col-lg-1 control-label pull-left" style="text-align: left"><b> </b></label>
                            </div>
                            <div class="form-group">
                                <label for="airflow" class="col-lg-2 control-label">Airflow *</label>
                                <div class="col-lg-3">
                                    <input type="text" class="form-control" id="airflow" name="airflow" value="<?php echo getParameterValue($rowForm['airflow']); ?>" required readonly>
                                </div>
                            </div>

                            <h2>Safety</h2>
                            <div class="form-group">
                                <label for="tempProtection1" class="col-lg-2 control-label">Temperature Protection 1 *</label>
                                <div class="col-lg-3">
                                    <input type="text" class="form-control" id="tempProtection1" name="tempProtection1" value="<?php echo getParameterValue($rowForm['temp_protection_1']); ?>" required readonly>
                                </div>
                                <label for="tempProtection2" class="col-lg-2 control-label">Temperature Protection 2 *</label>
                                <div class="col-lg-3">
                                    <input type="text" class="form-control" id="tempProtection2" name="tempProtection2" value="<?php echo getParameterValue($rowForm['temp_protection_2']); ?>" required readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="tempThermostat3" class="col-lg-2 control-label">Temperature Protection / Thermostat 3 *</label>
                                <div class="col-lg-3">
                                    <input type="text" class="form-control" id="tempThermostat3" name="tempThermostat3" value="<?php echo getParameterValue($rowForm['temp_protection_3']); ?>" required readonly>
                                </div>
                                <label for="smokeDetector" class="col-lg-2 control-label">Smoke Detector/Alarm *</label>
                                <div class="col-lg-3">
                                    <input type="text" class="form-control" id="smokeDetector" name="smokeDetector" value="<?php echo getParameterValue($rowForm['smoke_alarm']); ?>" required readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="emo" class="col-lg-2 control-label">EMO button *</label>
                                <div class="col-lg-3">
                                    <input type="text" class="form-control" id="emo" name="emo" value="<?php echo getParameterValue($rowForm['emo_btn']); ?>" required readonly>
                                </div>
                                <label class="col-lg-2 control-label"></label>
                                <div class="col-lg-3"></div>
                            </div>

<!--                            <h2>Safety</h2>
                            <div class="form-group">
                                <label for="tempProtection1" class="col-lg-2 control-label">Temperature Protection 1 *</label>
                                <div class="col-lg-3">
                                    <input type="text" class="form-control" id="tempProtection1" name="tempProtection1" value="<?php echo getParameterValue($rowForm['temp_protection_1']); ?>" required readonly>
                                </div>
                                <label for="tempProtection2" class="col-lg-2 control-label">Temperature Protection 2 *</label>
                                <div class="col-lg-3">
                                    <input type="text" class="form-control" id="tempProtection2" name="tempProtection2" value="<?php echo getParameterValue($rowForm['temp_protection_2']); ?>" required readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="smokeDetector" class="col-lg-2 control-label">Smoke Detector/Alarm *</label>
                                <div class="col-lg-3">
                                    <input type="text" class="form-control" id="smokeDetector" name="smokeDetector" value="<?php echo getParameterValue($rowForm['smoke_alarm']); ?>" required readonly>
                                </div>
                                <label for="emo" class="col-lg-2 control-label">EMO button *</label>
                                <div class="col-lg-3">
                                    <input type="text" class="form-control" id="emo" name="emo" value="<?php echo getParameterValue($rowForm['emo_btn']); ?>" required readonly>
                                </div>
                            </div>-->

                            <h2>Utilities</h2>
                            <div class="form-group">
                                <label for="voltagePhase" class="col-lg-2 control-label">Voltage/Phase/Current *</label>
                                <div class="col-lg-2">
                                    <input type="number" step="0.01" class="form-control" id="voltagePhase" name="voltagePhase" value="<?php echo $rowForm['volt_phase_current']; ?>" required readonly> 
                                </div> 
                                <label for="voltagePhase" class="col-lg-1 control-label pull-left" style="text-align: left"><b>VAC</b></label>
                                <label for="phase" class="col-lg-2 control-label">Phase *</label>
                                <div class="col-lg-2">
                                    <input type="number" step="0.001" class="form-control" id="phase" name="phase" value="<?php echo $rowForm['phase']; ?>" required readonly> 
                                </div> 
                                <label for="phase" class="col-lg-1 control-label pull-left" style="text-align: left"><b>Phase</b></label>
                            </div>
                            <div class="form-group">
                                <label for="exhaust" class="col-lg-2 control-label">Exhaust *</label>
                                <div class="col-lg-3">
                                    <input type="text" class="form-control" id="exhaust" name="exhaust" value="<?php echo getParameterValue($rowForm['exhaust']); ?>" required readonly>
                                </div>
                                <label for="diWater" class="col-lg-2 control-label">DI Water *</label>
                                <div class="col-lg-3">
                                    <input type="text" class="form-control" id="diWater" name="diWater" value="<?php echo getParameterValue($rowForm['di_water']); ?>" required readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 control-label"></label>
                                <div class="col-lg-3"></div>
                                <label for="waterTopup" class="col-lg-2 control-label">Water Top-up System *</label>
                                <div class="col-lg-3">
                                    <input type="text" class="form-control" id="waterTopup" name="waterTopup" value="<?php echo getParameterValue($rowForm['water_topup_system']); ?>" required readonly>
                                </div>
                            </div>

                            <h2>DAQ</h2>
                            <div class="form-group">
                                <label for="daq" class="col-lg-2 control-label">DAQ (Realtime Leakage Monitoring) *</label>
                                <div class="col-lg-3">
                                    <input type="text" class="form-control" id="daq" name="daq" value="<?php echo getParameterValue($rowForm['daq']); ?>" required readonly>
                                </div>
                            </div>

                            <h2>Internal Chamber Configuration</h2>
                            <div class="form-group">
                                <label for="intConfigType" class="col-lg-2 control-label">Configuration Type *</label>
                                <div class="col-lg-3">
                                    <input type="text" class="form-control" id="intConfigType" name="intConfigType" value="<?php echo getParameterValue($rowForm['internal_config_type']); ?>" required readonly>
                                </div>
                            </div>
                            
                            <?php 
                            $dataCheck = getParameterValue($rowForm['internal_config_type']);
                            if ($dataCheck == "Banana") {
                            ?>
                                <!--<hr class="hr hr-blurry" />-->
                                <!--Banana-->
                                <div class="form-group" name="BananaDiv" id="BananaDiv" >
                                    <div class="form-group">
                                        <label for="bananaJackHole" class="col-lg-2 control-label">No. Banana Jack Holes *</label>
                                        <div class="col-lg-2">
                                            <input type="number" step="0.001" class="form-control" id="bananaJackHole" name="bananaJackHole" value="<?php echo $rowForm['no_banana_jack_hole']; ?>" readonly> 
                                        </div> 
                                        <label for="bananaJackHole" class="col-lg-1 control-label pull-left" style="text-align: left"><b>Pins</b></label>
                                        <label for="connVoltRating" class="col-lg-2 control-label">Connector Voltage Rating *</label>
                                        <div class="col-lg-2">
                                            <input type="number" step="0.001" class="form-control" id="connVoltRating" name="connVoltRating" value="<?php echo $rowForm['conn_volt_rating']; ?>" readonly> 
                                        </div> 
                                        <label for="connVoltRating" class="col-lg-1 control-label pull-left" style="text-align: left"><b>V</b></label>
                                    </div>
                                    <div class="form-group">
                                        <label for="connCurrRating" class="col-lg-2 control-label">Connector Current Rating *</label>
                                        <div class="col-lg-2">
                                            <input type="number" step="0.001" class="form-control" id="connCurrRating" name="connCurrRating" value="<?php echo $rowForm['conn_current_rating']; ?>" readonly> 
                                        </div> 
                                        <label for="connCurrRating" class="col-lg-1 control-label pull-left" style="text-align: left"><b>A</b></label>

                                        <label for="connTempRating" class="col-lg-2 control-label">Connector Temp Rating *</label>
                                        <div class="col-lg-2">
                                            <input type="number" step="0.001" class="form-control" id="connTempRating" name="connTempRating" value="<?php echo $rowForm['conn_temp_rating']; ?>" readonly> 
                                        </div> 
                                        <label for="connTempRating" class="col-lg-1 control-label pull-left" style="text-align: left"><b>`C</b></label>
                                    </div>
                                </div>    
                            <?php
                            } else if ($dataCheck === "Edge Connector") {
                            ?>
                                <!--<hr class="hr hr-blurry" />-->
                                <!--Edge Connector-->
                                <div class="form-group" name="EdgeDiv" id="EdgeDiv" >
                                    <div class="form-group">
                                        <label for="noPins" class="col-lg-2 control-label">No. of Pins *</label>
                                        <div class="col-lg-2">
                                            <input type="number" step="0.001" class="form-control" id="noPins" name="noPins" value="<?php echo $rowForm['no_pin']; ?>" readonly> 
                                        </div> 
                                        <label for="noPins" class="col-lg-1 control-label pull-left" style="text-align: left"><b>Pins</b></label>

                                        <label for="pinPitch" class="col-lg-2 control-label">Pin Pitch *</label>
                                        <div class="col-lg-2">
                                            <input type="number" step="0.001" class="form-control" id="pinPitch" name="pinPitch" value="<?php echo $rowForm['pin_pitch']; ?>" readonly> 
                                        </div> 
                                        <label for="pinPitch" class="col-lg-1 control-label pull-left" style="text-align: left"><b>mm</b></label>
                                    </div>
                                    <div class="form-group">
                                        <label for="connVoltRating" class="col-lg-2 control-label">Connector Voltage Rating *</label>
                                        <div class="col-lg-2">
                                            <input type="number" step="0.001" class="form-control" id="connVoltRating" name="connVoltRating" value="<?php echo $rowForm['conn_volt_rating']; ?>" readonly> 
                                        </div> 
                                        <label for="connVoltRating" class="col-lg-1 control-label pull-left" style="text-align: left"><b>V</b></label>

                                        <label for="connCurrRating" class="col-lg-2 control-label">Connector Current Rating *</label>
                                        <div class="col-lg-2">
                                            <input type="number" step="0.001" class="form-control" id="connCurrRating" name="connCurrRating" value="<?php echo $rowForm['conn_current_rating']; ?>" readonly> 
                                        </div> 
                                        <label for="connCurrRating" class="col-lg-1 control-label pull-left" style="text-align: left"><b>A</b></label>
                                    </div>
                                    <div class="form-group">
                                        <label for="connTempRating" class="col-lg-2 control-label">Connector Temp Rating *</label>
                                        <div class="col-lg-2">
                                            <input type="number" step="0.001" class="form-control" id="connTempRating" name="connTempRating" value="<?php echo $rowForm['conn_temp_rating']; ?>" readonly> 
                                        </div> 
                                        <label for="connTempRating" class="col-lg-1 control-label pull-left" style="text-align: left"><b>`C</b></label>
                                    </div>
                                </div>  
                            <?php    
                            } else if ($dataCheck === "Winchestor") {
                            ?>
                                <!--<hr class="hr hr-blurry" />-->
                                <!--Winchestor-->
                                <div class="form-group" name="WinchestorDiv" id="WinchestorDiv" >
                                    <div class="form-group">
                                        <label for="noPins" class="col-lg-2 control-label">No. of Pins *</label>
                                        <div class="col-lg-2">
                                            <input type="number" step="0.001" class="form-control" id="noPins" name="noPins" value="<?php echo $rowForm['no_pin']; ?>" readonly> 
                                        </div> 
                                        <label for="noPins" class="col-lg-1 control-label pull-left" style="text-align: left"><b>Pins</b></label>

                                        <label for="pinPitch" class="col-lg-2 control-label">Pin Pitch *</label>
                                        <div class="col-lg-2">
                                            <input type="number" step="0.001" class="form-control" id="pinPitch" name="pinPitch" value="<?php echo $rowForm['pin_pitch']; ?>" readonly> 
                                        </div> 
                                        <label for="pinPitch" class="col-lg-1 control-label pull-left" style="text-align: left"><b>mm</b></label>
                                    </div>
                                    <div class="form-group">
                                        <label for="connVoltRating" class="col-lg-2 control-label">Connector Voltage Rating *</label>
                                        <div class="col-lg-2">
                                            <input type="number" step="0.001" class="form-control" id="connVoltRating" name="connVoltRating" value="<?php echo $rowForm['conn_volt_rating']; ?>" readonly> 
                                        </div> 
                                        <label for="connVoltRating" class="col-lg-1 control-label pull-left" style="text-align: left"><b>V</b></label>

                                        <label for="connCurrRating" class="col-lg-2 control-label">Connector Current Rating *</label>
                                        <div class="col-lg-2">
                                            <input type="number" step="0.001" class="form-control" id="connCurrRating" name="connCurrRating" value="<?php echo $rowForm['conn_current_rating']; ?>" readonly> 
                                        </div> 
                                        <label for="connCurrRating" class="col-lg-1 control-label pull-left" style="text-align: left"><b>A</b></label>
                                    </div>
                                    <div class="form-group">
                                        <label for="connRack" class="col-lg-2 control-label">No. Wires Connected to Rack *</label>
                                        <div class="col-lg-2">
                                            <input type="number" step="0.001" class="form-control" id="connRack" name="connRack" value="<?php echo $rowForm['no_wire_conn_rack']; ?>" readonly> 
                                        </div> 
                                        <label for="connRack" class="col-lg-1 control-label pull-left" style="text-align: left"><b></b></label>
                                    </div>
                                </div>     
                            <?php    
                            } else if ($dataCheck === "Wires") {
                            ?>
                                <!--<hr class="hr hr-blurry" />-->
                                <!--Wire-->
                                <div class="form-group" name="WireDiv" id="WireDiv" >
                                    <div class="form-group">
                                        <label for="wireVoltRating" class="col-lg-2 control-label">Wire Voltage Rating *</label>
                                        <div class="col-lg-2">
                                            <input type="number" step="0.001" class="form-control" id="wireVoltRating" name="wireVoltRating" value="<?php echo $rowForm['wire_volt_rating']; ?>" readonly> 
                                        </div> 
                                        <label for="wireVoltRating" class="col-lg-1 control-label pull-left" style="text-align: left"><b>V</b></label>

                                        <label for="wireCurrRating" class="col-lg-2 control-label">Wire Current Rating *</label>
                                        <div class="col-lg-2">
                                            <input type="number" step="0.001" class="form-control" id="wireCurrRating" name="wireCurrRating" value="<?php echo $rowForm['wire_curr_rating']; ?>" readonly> 
                                        </div> 
                                        <label for="wireCurrRating" class="col-lg-1 control-label pull-left" style="text-align: left"><b>A</b></label>
                                    </div>
                                    <div class="form-group">
                                        <label for="wireTempRating" class="col-lg-2 control-label">Wire Temp Rating *</label>
                                        <div class="col-lg-2">
                                            <input type="number" step="0.001" class="form-control" id="wireTempRating" name="wireTempRating" value="<?php echo $rowForm['conn_temp_rating']; ?>" readonly> 
                                        </div> 
                                        <label for="wireTempRating" class="col-lg-1 control-label pull-left" style="text-align: left"><b>`C</b></label>
                                    </div>
                                </div>   
                            <?php    
                            }
                            ?>

                            <h2>External Chamber Configuration</h2>
                            <div class="form-group">
                                <label for="extConfigType" class="col-lg-2 control-label">Configuration Type *</label>
                                <div class="col-lg-3">
                                    <input type="text" class="form-control" id="extConfigType" name="extConfigType" value="<?php echo getParameterValue($rowForm['ext_config_type']); ?>" required readonly>
                                </div>
                            </div>
                            <div class="form-group" id="viewExternalDiv">
                                <label for="interfaceVoltRating" class="col-lg-2 control-label">Interface Voltage Rating *</label>
                                <div class="col-lg-2">
                                    <input type="number" step="0.001" class="form-control" id="interfaceVoltRating" name="interfaceVoltRating" value="<?php echo $rowForm['interface_volt_rating']; ?>" readonly> 
                                </div> 
                                <label for="interfaceVoltRating" class="col-lg-1 control-label pull-left" style="text-align: left"><b>V</b></label>

                                <label for="interfaceCurrRating" class="col-lg-2 control-label">Interface Current Rating *</label>
                                <div class="col-lg-2">
                                    <input type="number" step="0.001" class="form-control" id="interfaceCurrRating" name="interfaceCurrRating" value="<?php echo $rowForm['interface_current_rating']; ?>" readonly> 
                                </div> 
                                <label for="interfaceCurrRating" class="col-lg-1 control-label pull-left" style="text-align: left"><b>A</b></label>
                            </div>
                            
                            <div class="pull-right">
                                <button onclick="location.href='form_equipment_edit.php?edit=<?php echo $id;?>'" type="button" id="editBtn">Edit</button>
                            </div>
                            <div class="pull-right">
                                <button onclick="location.href='form_equipment_list.php'" type="button" id="backBtn">Back</button>
                            </div>
                            <div class="clearfix"></div>
                            <?php endwhile; ?>
                        </form>
                    </div>
                </div>	
            </div>
        </div>
    </body>
</html>

<?php

function getParameterValue($code) {
    $servername = "localhost";
    $username = "ayep";
    $password = "mysql@2023";
    $dbname = "gest";
    
    if ($code == "") {
        echo "";
        $data = "";
    } else {
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $query = "SELECT name FROM gest_parameter_detail WHERE CODE = '$code'";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data = $row['name'];
            }
        } else {
            echo "No data found";
        }

        $conn->close();
    }
    return $data;
}

function getParameterValues($string) {
    $mysqli = new mysqli('localhost', 'ayep', 'mysql@2023', 'gest');
    if ($mysqli->connect_errno) {
        echo 'Failed to connect to MySQL: (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error;
        exit;
    }

    $codes = explode(',', $string);
    $values = [];
    foreach ($codes as $code) {
        $query = 'SELECT name FROM gest_parameter_detail WHERE code = \'' . $code . '\'';
        $result = $mysqli->query($query);
        if (!$result) {
            echo 'Failed to execute query: (' . $mysqli->errno . ') ' . $mysqli->error;
            exit;
        }

        $row = $result->fetch_assoc();
        $values[] = $row['name'];
    }
    $mysqli->close();

    return implode(', ', $values);
}