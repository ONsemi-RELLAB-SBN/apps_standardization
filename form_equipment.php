<?php
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
include 'form_template.php';
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>FORM | Standardization Survey</title>
        <meta name="author" content="Ayep" />
        <link rel="shortcut icon" href="image/logo/onsemi_logo.ico">

        <link rel="stylesheet" type="text/css" href="css/w3.css">
        <link rel="stylesheet" type="text/css" href="css/skeleton.css">
        <link rel='stylesheet' type="text/css" href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'>

        <style>
            input[type=text], input[type=password] {
                width: 100%;
                padding: 15px;
                margin: 5px 0 22px 0;
                display: inline-block;
            }
            
            #toggle_01, #toggle_02, #toggle_03, #toggle_04, #toggle_05, #toggle_06, #toggle_07, #toggle_08, #toggle_09, #toggle_10, #toggle_11, #toggle_12, #toggle_13, #toggle_14, #toggle_15, #toggle_16, #toggle_17, #toggle_18, #toggle_19, #toggle_20 {
                visibility: hidden;
                opacity: 0;
                position: relative;
                z-index: -1;
            }

            #toggle_01:checked ~ dialog {
                display: block;
            }
            #toggle_02:checked ~ dialog {
                display: block;
            }
            #toggle_03:checked ~ dialog {
                display: block;
            }
            #toggle_04:checked ~ dialog {
                display: block;
            }
            #toggle_05:checked ~ dialog {
                display: block;
            }
            #toggle_06:checked ~ dialog {
                display: block;
            }
            #toggle_07:checked ~ dialog {
                display: block;
            }
            #toggle_08:checked ~ dialog {
                display: block;
            }
            #toggle_09:checked ~ dialog {
                display: block;
            }
            #toggle_10:checked ~ dialog {
                display: block;
            }
            #toggle_11:checked ~ dialog {
                display: block;
            }
            #toggle_12:checked ~ dialog {
                display: block;
            }
            #toggle_13:checked ~ dialog {
                display: block;
            }
            #toggle_14:checked ~ dialog {
                display: block;
            }
            #toggle_15:checked ~ dialog {
                display: block;
            }
            #toggle_16:checked ~ dialog {
                display: block;
            }
            #toggle_17:checked ~ dialog {
                display: block;
            }
            #toggle_18:checked ~ dialog {
                display: block;
            }
            #toggle_19:checked ~ dialog {
                display: block;
            }
            #toggle_20:checked ~ dialog {
                display: block;
            }
        </style>
        <script type="text/javascript">
            $("input[type='text'], textarea").on("input", function () {
                canChangeColor();
            });

            function canChangeColor() {
                var can = true;
                $("input[type='text'], textarea").each(function () {
                    if ($(this).val() === '') {
                        can = false;
                    }
                });
                if (can) {
                    $('.btn').css({background: 'red'});
                } else {
                    $('.btn').css({background: 'transparent'});
                }
            }
        </script>
    </head>
    <body>
        <div class="twelve columns">&nbsp;</div>
        <div class="twelve columns">&nbsp;</div>
        <h5 style="border-left: none;">Equipment Details</h5>
        <form id="add_equipment_form" action="crud_add_equipment.php" method="get">
            <div class="row">
                <h6>General</h6>
                <div class="row">
                    <div class="two columns"><label for="labLocation">Lab Location *</label></div>
                    <div class="three columns">
                        <select id="labLocation" name="labLocation" style="width: 100%" required>
                            <option value="" selected=""></option>
                            <?php
                            $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '002' ORDER BY code ASC";
                            $resSite = mysqli_query($con, $sqlDdSite);
                            while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                            <?php endwhile; ?>
                        </select>
                    </div>
                    <div class="one columns">&nbsp;</div>
                    <div class="two columns"><label for="strategy">onsemi Strategy *</label></div>
                    <div class="three columns">
                        <select id="strategy" name="strategy" style="width: 100%" required>
                            <option value="" selected=""></option>
                            <?php
                            $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '003' ORDER BY code ASC";
                            $resSite = mysqli_query($con, $sqlDdSite);
                            while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                            <?php endwhile; ?>  
                        </select>
                    </div>
                    <div class="one columns">&nbsp;</div>
                </div>
                <div class="row">
                    <div class="two columns"><label for="standardization">Standardization Category *</label></div>
                    <div class="three columns">
                        <select id="standardization" name="standardization" style="width: 100%" required>
                            <option value="" selected=""></option>
                            <?php
                            $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '004' ORDER BY code ASC";
                            $resSite = mysqli_query($con, $sqlDdSite);
                            while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                            <?php endwhile; ?>
                        </select>
                    </div>
                    <div class="one columns">&nbsp;</div>
                    <div class="two columns"><label for="champion">Champion *</label></div>
                    <div class="three columns">
                        <select id="champion" name="champion" style="width: 100%" required>
                            <option value="" selected=""></option>
                            <?php
                            $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '005' ORDER BY code ASC";
                            $resSite = mysqli_query($con, $sqlDdSite);
                            while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                            <?php endwhile; ?>
                        </select>
                    </div>
                    <div class="one columns">&nbsp;</div>
                </div>
                
                <h6>Equipment Identity</h6>
                <div class="row">
                    <div class="two columns"><label for="eqptId">Equipment ID *</label></div>
                    <div class="three columns">
                        <select id="eqptId" name="eqptId" style="width: 100%" required>
                            <option value="" selected=""></option>
                            <?php
                            $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '006' ORDER BY code ASC";
                            $resSite = mysqli_query($con, $sqlDdSite);
                            while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                            <?php endwhile; ?>
                        </select>
                    </div>
                    <div class="one columns">&nbsp;</div>
                    <div class="two columns"><label for="dedicated">Dedicated/Share *</label></div>
                    <div class="three columns">
                        <select id="dedicated" name="dedicated" style="width: 100%" required>
                            <option value="" selected=""></option>
                            <?php
                            $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '007' ORDER BY code ASC";
                            $resSite = mysqli_query($con, $sqlDdSite);
                            while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                            <?php endwhile; ?>
                        </select>
                    </div>
                    <div class="one columns">&nbsp;</div>
                </div>
                <div class="row">
                    <div class="two columns"><label for="manufacturer">Equipment Manufacturer *</label></div>
                    <div class="three columns">
                        <select id="manufacturer" name="manufacturer" style="width: 100%" required>
                            <option value="" selected=""></option>
                            <?php
                            $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '009' ORDER BY code ASC";
                            $resSite = mysqli_query($con, $sqlDdSite);
                            while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                            <?php endwhile; ?>
                        </select>
                    </div>
                    <div class="one columns">&nbsp;</div>
                    <div class="two columns"><label for="model">Equipment Model *</label></div>
                    <div class="three columns">
                        <select id="model" name="model" style="width: 100%" required>
                            <option value="" selected=""></option>
                            <?php
                            $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '010' ORDER BY code ASC";
                            $resSite = mysqli_query($con, $sqlDdSite);
                            while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                            <?php endwhile; ?>
                        </select>
                    </div>
                    <div class="one columns">&nbsp;</div>
                </div>
                <div class="row">
                    <div class="two columns"><label for="mfgDate">Equipment Mfg Date *</label></div>
                    <div class="three columns"><input type="date" id="mfgDate" name="mfgDate" value="" style="width:55%" required></div>
                    <div class="one columns">&nbsp;</div>
                    <div class="two columns"><label for="assetNo">Equipment Asset No *</label></div>
                    <div class="three columns"><input type="text" id="assetNo" name="assetNo" placeholder="Asset Number" value="" required> </div>
                    <div class="one columns">&nbsp;</div>
                </div>
                <div class="row">
                    <div class="two columns"><label for="newTransfer">New/Transfer Equipment *</label></div>
                    <div class="three columns">
                        <select id="newTransfer" name="newTransfer" style="width: 100%" onchange="updateToField()" required >
                            <option value="" selected=""></option>
                            <?php
                            $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '013' ORDER BY code ASC";
                            $resSite = mysqli_query($con, $sqlDdSite);
                            while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                            <?php endwhile; ?>
                        </select>
                    </div>
                    <div class="six columns" id="transfer" style="display: none">
                        <div class="three columns"><label for="to">From? *</label></div>
                        <div class="three columns">
                            <select id="to" name="to" style="width: 100%" readonly required>
                                <option value="" selected=""></option>
                                <?php
                                $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '014' ORDER BY code ASC";
                                $resSite = mysqli_query($con, $sqlDdSite);
                                while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                    <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                                <?php endwhile; ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="two columns"><label for="relTest">Rel Test (Multiselect) *</label></div>
                    <div class="three columns">
                        <select name="relTest[]" id="relTest" multiple multiselect-search="true" multiselect-select-all="false" style="width:100%" onchange="updateRelTest()" required>
                            <?php
                            $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '008' ORDER BY code ASC";
                            $resSite = mysqli_query($con, $sqlDdSite);
                            while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                            <?php endwhile; ?>
                        </select>
                    </div>
                    <div class="six columns" id="zoneField" style="display: none">
                        <div class="three columns"><label for="zone">Zone *</label></div>
                        <div class="three columns"><input type="number" step="0.001" id="zone" name="zone" value="" required></div>
                    </div>
                </div>
                
                <script>
                    function updateRelTest() {
                        var newreltest = document.getElementById('relTest');
                        var zoneF = document.getElementById('zoneField');
                        var zone = document.getElementById('zone');
                        
                        if (newreltest.value === "008019" || newreltest.value === "008021") {
                            zone.readOnly = false;
                            zone.required = true;
                            zone.value = '';
                            zoneF.style.display = 'block';
                        } else {
                            zone.readOnly = true;
                            zone.required = false;
                            zoneF.style.display = 'none';
                        }
                    }
                    
                    function updateToField() {
                        var newTransferDropdown = document.getElementById('newTransfer');
                        var toField = document.getElementById('to');
                        var transField = document.getElementById('transfer');
                        
                        if (newTransferDropdown.value === '013001') {
                            toField.readOnly = true;
                            toField.required = false;
                            toField.value = '';
                            transField.style.display = 'none';
                        } else {
                            toField.readOnly = false;
                            toField.required = true;
                            transField.style.display = 'block';
                        }
                    }
                </script>
                
                <h6>Capability</h6>
                <div class="row">
                    <div class="two columns"><label for="voltRating">Voltage Rating *</label></div>
                    <div class="one columns"><input type="number" step="0.001" id="voltRating" name="voltRating" value="" required> </div>
                    <div class="one columns"><label for="voltRating" style="text-align: left"><b>V</b></label></div>
                    <div class="two columns">&nbsp;</div>
                    <div class="two columns"><label for="voltControl">Voltage Control Accuracy *</label></div>
                    <div class="one columns"><input type="number" step="0.001" id="voltControl" name="voltControl" value="" required> </div>
                    <div class="one columns"><label for="voltControl" style="text-align: left"><b>%</b></label></div>
                    <div class="two columns">&nbsp;</div>
                </div>
                <div class="row">
                    <div class="two columns"><label for="minTemp">Min. Temperature *</label></div>
                    <div class="one columns"><input type="number" step="0.001" id="minTemp" name="minTemp" value="" required> </div>
                    <div class="one columns"><label for="minTemp" style="text-align: left"><b>`C</b></label></div>
                    <div class="two columns">&nbsp;</div>
                    <div class="two columns"><label for="maxTemp">Max. Temperature *</label></div>
                    <div class="one columns"><input type="number" step="0.001" id="maxTemp" name="maxTemp" value="" required> </div>
                    <div class="one columns"><label for="maxTemp" style="text-align: left"><b>`C</b></label></div>
                    <div class="two columns">&nbsp;</div>
                </div>
                <div class="row">
                    <div class="two columns"><label for="minRh">Min. RH *</label></div>
                    <div class="one columns"><input type="number" step="0.001" id="minRh" name="minRh" value="" required> </div>
                    <div class="one columns"><label for="minRh" style="text-align: left"><b>%</b></label></div>
                    <div class="two columns">&nbsp;</div>
                    <div class="two columns"><label for="maxRh">Max. RH *</label></div>
                    <div class="one columns"><input type="number" step="0.001" id="maxRh" name="maxRh" value="" required> </div>
                    <div class="one columns"><label for="maxRh" style="text-align: left"><b>%</b></label></div>
                    <div class="two columns">&nbsp;</div>
                </div>
                <div class="row">
                    <div class="two columns"><label for="min_pressure">Minimum Pressure *</label></div>
                    <div class="one columns"><input type="number" step="0.001" id="min_pressure" name="min_pressure" value="" required> </div>
                    <div class="one columns"><label for="min_pressure" style="text-align: left"><b>psi</b></label></div>
                    <div class="two columns">&nbsp;</div>
                    <div class="two columns"><label for="max_pressure">Maximum Pressure *</label></div>
                    <div class="one columns"><input type="number" step="0.001" id="max_pressure" name="max_pressure" value="" required> </div>
                    <div class="one columns"><label for="max_pressure" style="text-align: left"><b>psi</b></label></div>
                    <div class="two columns">&nbsp;</div>
                </div>
                <div class="row">
                    <div class="two columns"><label for="heatDissipation">Heat Dissipation *</label></div>
                    <div class="one columns"><input type="number" step="0.001" id="heatDissipation" name="heatDissipation" value="" required> </div>
                    <div class="one columns"><label for="heatDissipation" style="text-align: left"><b>Watt</b></label></div>
                    <div class="two columns">&nbsp;</div>
                    <div class="two columns"><label for="tempFluctuation">Temperature Fluctuation *</label></div>
                    <div class="one columns"><input type="number" step="0.001" id="tempFluctuation" name="tempFluctuation" value="" required></div>
                    <div class="one columns"><label for="tempFluctuation" style="text-align: left"><b>`C</b></label></div>
                    <div class="one columns">&nbsp;</div>
                    <div class="one columns">
                        <label for="toggle_01">View Sample</label>
                        <input type="checkbox" id="toggle_01">
                        <dialog>
                            <label for="toggle_01" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                            <img id="myImg" src="image/equipment/001.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                        </dialog>
                    </div>
                </div>
                <div class="row">
                    <div class="two columns"><label for="tempUniform">Temperature Uniformity *</label></div>
                    <div class="one columns"><input type="number" step="0.001" id="tempUniform" name="tempUniform" value="" required> </div>
                    <div class="one columns"><label for="tempUniform" style="text-align: left"><b>`C</b></label></div>
                    <div class="one columns">&nbsp;</div>
                    <div class="one columns">
                        <label for="toggle_02">View Sample</label>
                        <input type="checkbox" id="toggle_02">
                        <dialog>
                            <label for="toggle_02" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                            <img id="myImg" src="image/equipment/002.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                        </dialog>
                    </div>
                    <div class="two columns"><label for="humidFluctuation">Humidity Fluctuation *</label></div>
                    <div class="one columns"><input type="number" step="0.001" id="humidFluctuation" name="humidFluctuation" value="" required> </div>
                    <div class="one columns"><label for="humidFluctuation" style="text-align: left"><b>%</b></label></div>
                    <div class="one columns">&nbsp;</div>
                    <div class="one columns">
                        <label for="toggle_03">View Sample</label>
                        <input type="checkbox" id="toggle_03">
                        <dialog>
                            <label for="toggle_03" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                            <img id="myImg" src="image/equipment/003.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                        </dialog>
                    </div>
                </div>
                
                <h6>Characteristic</h6>
                <div class="row">
                    <div class="two columns"><label for="noInterior">No. Interior Zones (doors) *</label></div>
                    <div class="one columns"><input type="number" step="0.001" id="noInterior" name="noInterior" value="" required> </div>
                    <div class="one columns"><label for="noInterior" style="text-align: left"><b>Zone</b></label></div>
                    <div class="one columns">&nbsp;</div>
                    <div class="one columns">
                        <label for="toggle_06">View Sample</label>
                        <input type="checkbox" id="toggle_06">
                        <dialog>
                            <label for="toggle_06" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                            <img id="myImg" src="image/equipment/006.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                        </dialog>
                    </div>
                    <div class="two columns"><label for="extDimension">External Dimension (W) *</label></div>
                    <div class="one columns"><input type="number" step="0.001" id="extDimensionW" name="extDimensionW" value="" required> </div>
                    <div class="one columns"><label for="extDimensionW" style="text-align: left"><b>mm</b></label></div>
                    <div class="two columns">&nbsp;</div>
                </div>
                <div class="row">
                    <div class="two columns"><label for="intVolume">Internal Volume *</label></div>
                    <div class="one columns"><input type="number" step="0.001" id="intVolume" name="intVolume" value="" required> </div>
                    <div class="one columns"><label for="intVolume" style="text-align: left"><b>L</b></label></div>
                    <div class="one columns">&nbsp;</div>
                    <div class="one columns">
                        <label for="toggle_08">View Sample</label>
                        <input type="checkbox" id="toggle_08">
                        <dialog>
                            <label for="toggle_08" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                            <img id="myImg" src="image/equipment/008.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                        </dialog>
                    </div>
                    <div class="two columns"><label for="extDimension">(D) *</label></div>
                    <div class="one columns"><input type="number" step="0.001" id="extDimensionD" name="extDimensionD" value="" required> </div>
                    <div class="one columns"><label for="extDimensionD" style="text-align: left"><b>mm</b></label></div>
                    <div class="two columns">&nbsp;</div>
                </div>
                <div class="row">
                    <div class="two columns"><label for="boardOrientation">Board Orientation*</label></div>
                    <div class="three columns">
                        <select id="boardOrientation" name="boardOrientation" style="width: 100%" required>
                            <option value="" selected=""></option>
                            <?php
                            $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '015' ORDER BY code ASC";
                            $resSite = mysqli_query($con, $sqlDdSite);
                            while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                            <?php endwhile; ?>
                        </select>
                    </div>
                    <div class="one columns">
                        <label for="toggle_09">View Sample</label>
                        <input type="checkbox" id="toggle_09">
                        <dialog>
                            <label for="toggle_09" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                            <img id="myImg" src="image/equipment/009.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                        </dialog>
                    </div>
                    <div class="two columns"><label for="extDimension">(H) *</label></div>
                    <div class="one columns"><input type="number" step="0.001" id="extDimensionH" name="extDimensionH" value="" required> </div>
                    <div class="one columns"><label for="extDimensionH" style="text-align: left"><b>mm</b></label></div>
                    <div class="one columns">&nbsp;</div>
                    <div class="one columns">
                        <label for="toggle_04">View Sample</label>
                        <input type="checkbox" id="toggle_04">
                        <dialog>
                            <label for="toggle_04" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                            <img id="myImg" src="image/equipment/004.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                        </dialog>
                    </div>
                </div>
                <div class="row">
                    <div class="two columns"><label for="rackMaterial">Rack Material *</label></div>
                    <div class="three columns">
                        <select id="rackMaterial" name="rackMaterial" style="width: 100%" required>
                            <option value="" selected=""></option>
                            <?php
                            $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '016' ORDER BY code ASC";
                            $resSite = mysqli_query($con, $sqlDdSite);
                            while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                            <?php endwhile; ?>
                        </select>
                    </div>
                    <div class="one columns">&nbsp;</div>
                    <div class="two columns"><label for="intDimension">Internal Dimension (W) *</label></div>
                    <div class="one columns"><input type="number" step="0.001" id="intDimensionW" name="intDimensionW" value="" required> </div>
                    <div class="one columns"><label for="intDimensionW" style="text-align: left"><b>mm</b></label></div>
                    <div class="two columns">&nbsp;</div>
                </div>
                <div class="row">
                    <div class="two columns"><label for="rackSlotPitch">Rack Slot-to-Slot Pitch *</label></div>
                    <div class="one columns"><input type="number" step="0.001" id="rackSlotPitch" name="rackSlotPitch" value="" required></div>
                    <div class="one columns"><label for="rackSlotPitch" style="text-align: left"><b>mm</b></label></div>
                    <div class="one columns">&nbsp;</div>
                    <div class="one columns">
                        <label for="toggle_10">View Sample</label>
                        <input type="checkbox" id="toggle_10">
                        <dialog>
                            <label for="toggle_10" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                            <img id="myImg" src="image/equipment/010.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                        </dialog>
                    </div>
                    <div class="two columns"><label for="intDimension">(D) *</label></div>
                    <div class="one columns"><input type="number" step="0.001" id="intDimensionD" name="intDimensionD" value="" required> </div>
                    <div class="one columns"><label for="intDimensionD" style="text-align: left"><b>mm</b></label></div>
                    <div class="two columns">&nbsp;</div>
                </div>
                <div class="row">
                    <div class="two columns"><label for="rackSLotWidth">Rack Slot Width *</label></div>
                    <div class="one columns"><input type="number" step="0.001" id="rackSLotWidth" name="rackSLotWidth" value="" required> </div>
                    <div class="one columns"><label for="rackSLotWidth" style="text-align: left"><b>mm</b></label></div>
                    <div class="one columns">&nbsp;</div>
                    <div class="one columns">
                        <label for="toggle_11">View Sample</label>
                        <input type="checkbox" id="toggle_11">
                        <dialog>
                            <label for="toggle_11" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                            <img id="myImg" src="image/equipment/011.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                        </dialog>
                    </div>
                    <div class="two columns"><label for="intDimension">(H) *</label></div>
                    <div class="one columns"><input type="number" step="0.001" id="intDimensionH" name="intDimensionH" value="" required> </div>
                    <div class="one columns"><label for="intDimensionH" style="text-align: left"><b>mm</b></label></div>
                    <div class="one columns">&nbsp;</div>
                    <div class="one columns">
                        <label for="toggle_05">View Sample</label>
                        <input type="checkbox" id="toggle_05">
                        <dialog>
                            <label for="toggle_05" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                            <img id="myImg" src="image/equipment/005.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                        </dialog>
                    </div>
                </div>
                <div class="row">
                    <div class="two columns"><label for="eqptWeight">Equipment Weight *</label></div>
                    <div class="one columns"><input type="number" step="0.001" id="eqptWeight" name="eqptWeight" value="" required> </div>
                    <div class="one columns"><label for="eqptWeight" style="text-align: left"><b>Kg</b></label></div>
                    <div class="two columns">&nbsp;</div>
                    <div class="two columns"><label for="rackDimension">Rack Dimension (W) *</label></div>
                    <div class="one columns"><input type="number" step="0.001" id="rackDimensionW" name="rackDimensionW" value="" required> </div>
                    <div class="one columns"><label for="rackDimensionW" style="text-align: left"><b>mm</b></label></div>
                    <div class="two columns">&nbsp;</div>
                </div>
                <div class="row">
                    <div class="two columns"><label for="noMbSlot">Number of motherboard slots *</label></div>
                    <div class="one columns"><input type="number" step="0.001" id="noMbSlot" name="noMbSlot" value="" required></div>
                    <div class="one columns"><label for="noMbSlot" style="text-align: left"><b>Slot</b></label></div>
                    <div class="one columns">&nbsp;</div>
                    <div class="one columns">
                        <label for="toggle_12">View Sample</label>
                        <input type="checkbox" id="toggle_12">
                        <dialog>
                            <label for="toggle_12" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                            <img id="myImg" src="image/equipment/012.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                        </dialog>
                    </div>
                    <div class="two columns"><label for="rackDimension">(D) *</label></div>
                    <div class="one columns"><input type="number" step="0.001" id="rackDimensionD" name="rackDimensionD" value="" required> </div>
                    <div class="one columns"><label for="rackDimensionD" style="text-align: left"><b>mm</b></label></div>
                    <div class="two columns">&nbsp;</div>
                </div>
                <div class="row">
                    <div class="two columns"><label for="maxPsBs">Max number of power supplies per board slot *</label></div>
                    <div class="one columns"><input type="number" step="0.001" id="maxPsBs" name="maxPsBs" value="" required> </div>
                    <div class="one columns"><label for="maxPsBs" style="text-align: left"><b>Slot</b></label></div>
                    <div class="one columns">&nbsp;</div>
                    <div class="one columns">
                        <label for="toggle_13">View Sample</label>
                        <input type="checkbox" id="toggle_13">
                        <dialog>
                            <label for="toggle_13" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                            <img id="myImg" src="image/equipment/013.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                        </dialog>
                    </div>
                    <div class="two columns"><label for="rackDimension">(H) *</label></div>
                    <div class="one columns"><input type="number" step="0.001" id="rackDimensionH" name="rackDimensionH" value="" required> </div>
                    <div class="one columns"><label for="rackDimensionH" style="text-align: left"><b>mm</b></label></div>
                    <div class="one columns">&nbsp;</div>
                    <div class="one columns">
                        <label for="toggle_07">View Sample</label>
                        <input type="checkbox" id="toggle_07">
                        <dialog>
                            <label for="toggle_07" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                            <img id="myImg" src="image/equipment/007.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                        </dialog>
                    </div>
                </div>
                <div class="row">
                    <div class="two columns"><label for="maxPs">Max number of power supplies for the entire Equipment *</label></div>
                    <div class="one columns"><input type="number" step="0.001" id="maxPs" name="maxPs" value="" required> </div>
                    <div class="one columns"><label for="maxPs" style="text-align: left"><b>Unit</b></label></div>
                    <div class="one columns">&nbsp;</div>
                    <div class="one columns">
                        <label for="toggle_14">View Sample</label>
                        <input type="checkbox" id="toggle_14">
                        <dialog>
                            <label for="toggle_14" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                            <img id="myImg" src="image/equipment/014.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                        </dialog>
                    </div>
                    <div class="two columns"><label for="airflow">Airflow *</label></div>
                    <div class="three columns">
                        <select id="airflow" name="airflow" style="width: 100%" required>
                            <option value="" selected=""></option>
                            <?php
                            $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '017' ORDER BY code ASC";
                            $resSite = mysqli_query($con, $sqlDdSite);
                            while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                            <?php endwhile; ?>
                        </select>
                    </div>
                    <div class="one columns">
                        <label for="toggle_15">View Sample</label>
                        <input type="checkbox" id="toggle_15">
                        <dialog>
                            <label for="toggle_15" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                            <img id="myImg" src="image/equipment/015.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                        </dialog>
                    </div>
                </div>
                
                <h6>Safety</h6>
                <div class="row">
                    <div class="two columns"><label for="tempProtection1">Temperature Protection 1 *</label></div>
                    <div class="three columns">
                        <select id="tempProtection1" name="tempProtection1" style="width: 100%" required>
                            <option value="" selected=""></option>
                            <?php
                            $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '022' ORDER BY code ASC";
                            $resSite = mysqli_query($con, $sqlDdSite);
                            while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                            <?php endwhile; ?>
                        </select>
                    </div>
                    <div class="one columns">&nbsp;</div>
                    <div class="two columns"><label for="tempProtection2">Temperature Protection 2 *</label></div>
                    <div class="three columns">
                        <select id="tempProtection2" name="tempProtection2" style="width: 100%" required>
                            <option value="" selected=""></option>
                            <?php
                            $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '022' ORDER BY code ASC";
                            $resSite = mysqli_query($con, $sqlDdSite);
                            while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                            <?php endwhile; ?>
                        </select>
                    </div>
                    <div class="one columns">&nbsp;</div>
                </div>
                <div class="row">
                    <div class="two columns"><label for="tempThermostat3">Temperature Protection / Thermostat 3 *</label></div>
                    <div class="three columns">
                        <select id="tempThermostat3" name="tempThermostat3" style="width: 100%" required>
                            <option value="" selected=""></option>
                            <?php
                            $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '022' ORDER BY code ASC";
                            $resSite = mysqli_query($con, $sqlDdSite);
                            while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                            <?php endwhile; ?>
                        </select>
                    </div>
                    <div class="one columns">&nbsp;</div>
                    <div class="two columns"><label for="smokeDetector">Smoke Detector/Alarm *</label></div>
                    <div class="three columns">
                        <select id="smokeDetector" name="smokeDetector" style="width: 100%" required>
                            <option value="" selected=""></option>
                            <?php
                            $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '022' ORDER BY code ASC";
                            $resSite = mysqli_query($con, $sqlDdSite);
                            while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                            <?php endwhile; ?>
                        </select>
                    </div>
                    <div class="one columns">&nbsp;</div>
                </div>
                <div class="row">
                    <div class="two columns"><label for="emo">EMO button *</label></div>
                    <div class="three columns">
                        <select id="emo" name="emo" style="width: 100%" required>
                            <option value="" selected=""></option>
                            <?php
                            $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '022' ORDER BY code ASC";
                            $resSite = mysqli_query($con, $sqlDdSite);
                            while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                            <?php endwhile; ?>
                        </select>
                    </div>
                </div>
                
                <h6>Utilities</h6>
                <div class="row">
                    <div class="two columns"><label for="voltagePhase">Voltage/Phase/Current *</label></div>
                    <div class="one columns"><input type="number" step="0.001" id="voltagePhase" name="voltagePhase" value="" required> </div>
                    <div class="one columns"><label for="voltagePhase" style="text-align: left"><b>VAC</b></label></div>
                    <div class="two columns">&nbsp;</div>
                    <div class="two columns"><label for="phase">Phase *</label></div>
                    <div class="one columns"><input type="number" step="0.001" id="phase" name="phase" value="" required> </div>
                    <div class="one columns"><label for="phase" style="text-align: left"><b>Phase</b></label></div>
                    <div class="two columns">&nbsp;</div>
                </div>
                <div class="row">
                    <div class="two columns"><label for="exhaust">Exhaust *</label></div>
                    <div class="three columns">
                        <select id="exhaust" name="exhaust" style="width: 100%" required>
                            <option value="" selected=""></option>
                            <?php
                            $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '028' ORDER BY code ASC";
                            $resSite = mysqli_query($con, $sqlDdSite);
                            while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                            <?php endwhile; ?>
                        </select>
                    </div>
                    <div class="one columns">&nbsp;</div>
                </div>
                <div class="row">
                    <div class="two columns"><label for="liquid_nitrogen">Liquid Nitrogen *</label></div>
                    <div class="three columns">
                        <select id="liquid_nitrogen" name="liquid_nitrogen" style="width: 100%" required>
                            <option value="" selected=""></option>
                            <?php
                            $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '022' ORDER BY code ASC";
                            $resSite = mysqli_query($con, $sqlDdSite);
                            while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                            <?php endwhile; ?>
                        </select>
                    </div>
                    <div class="one columns">&nbsp;</div>
                    <div class="two columns"><label for="chilled_water">Chilled Water *</label></div>
                    <div class="three columns">
                        <select id="chilled_water" name="chilled_water" style="width: 100%" required>
                            <option value="" selected=""></option>
                            <?php
                            $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '022' ORDER BY code ASC";
                            $resSite = mysqli_query($con, $sqlDdSite);
                            while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                            <?php endwhile; ?>
                        </select>
                    </div>
                    <div class="one columns">&nbsp;</div>
                </div>
                
                <script>
                    function updateGas() {
                        var diWaterDropdown = document.getElementById('n2gas');
                        var oxyField = document.getElementById('oxygen_level');
                        var oxyId = document.getElementById('oxygen');

                        if (diWaterDropdown.value !== '022003') {
                            oxyField.readOnly = true;
                            oxyField.required = false;
                            oxyField.value = '';
                            oxyId.style.display = 'none';
                        } else {
                            oxyField.readOnly = false;
                            oxyField.required = true;
                            oxyId.style.display = 'block';
                        }
                    }
                </script>
                
                <div class="row">
                    <div class="two columns"><label for="n2gas">N2 Gas *</label></div>
                    <div class="three columns">
                        <select id="n2gas" name="n2gas" style="width: 100%" onchange="updateGas()" required>
                            <option value="" selected=""></option>
                            <?php
                            $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '022' ORDER BY code ASC";
                            $resSite = mysqli_query($con, $sqlDdSite);
                            while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                            <?php endwhile; ?>
                        </select>
                    </div>
                    <div class="six columns" id="oxygen" style="display: none;">
                        <div class="three columns"><label for="oxygen_level">Oxygen Level Detector *</label></div>
                        <div class="three columns">
                            <select id="oxygen_level" name="oxygen_level" style="width: 100%" required>
                                <option value="" selected=""></option>
                                <?php
                                $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '022' ORDER BY code ASC";
                                $resSite = mysqli_query($con, $sqlDdSite);
                                while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                    <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                                <?php endwhile; ?>
                            </select>
                        </div>
                    </div>
                </div>
                
                <script>
                    function updateToFieldWater() {
                        var diWaterDropdown = document.getElementById('diWater');
                        var waterField = document.getElementById('waterTopup');
                        var topapField = document.getElementById('topup');

                        if (diWaterDropdown.value !== '022003') {
                            waterField.readOnly = true;
                            waterField.required = false;
                            topapField.style.display = 'none';
                            waterField.value = '';
                        } else {
                            waterField.readOnly = false;
                            waterField.required = true;
                            topapField.style.display = 'block';
                        }
                    }
                </script>
                
                <div class="row">
                    <div class="two columns"><label for="diWater">DI Water *</label></div>
                    <div class="three columns">
                        <select id="diWater" name="diWater" style="width: 100%" onchange="updateToFieldWater()" required>
                            <option value="" selected=""></option>
                            <?php
                            $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '022' ORDER BY code ASC";
                            $resSite = mysqli_query($con, $sqlDdSite);
                            while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                            <?php endwhile; ?>
                        </select>
                    </div>
                    <div class="six columns" id="topup" style="display: none;">
                        <div class="three columns"><label for="waterTopup">Water Top-up System *</label></div>
                        <div class="three columns">
                            <select id="waterTopup" name="waterTopup" style="width: 100%" required>
                                <option value="" selected=""></option>
                                <?php
                                $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '030' ORDER BY code ASC";
                                $resSite = mysqli_query($con, $sqlDdSite);
                                while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                    <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                                <?php endwhile; ?>
                            </select>
                        </div>
                    </div>
                </div>
                
                <h6>DAQ</h6>
                <div class="row">
                    <div class="two columns"><label for="daq">DAQ (Realtime Leakage Monitoring) *</label></div>
                    <div class="three columns">
                        <select id="daq" name="daq" style="width: 100%" required>
                            <option value="" selected=""></option>
                            <?php
                            $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '027' ORDER BY code ASC";
                            $resSite = mysqli_query($con, $sqlDdSite);
                            while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                            <?php endwhile; ?>
                        </select>
                    </div>
                </div>
                
                <h6>Internal Chamber Configuration</h6>
                <div class="row">
                    <div class="two columns"><label for="intConfigType">Configuration Type *</label></div>
                    <div class="three columns">
                        <select id="intConfigType" name="intConfigType" style="width: 100%" onchange="updateDiv()" required>
                            <option value="" selected=""></option>
                            <?php
                            $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '031' ORDER BY code ASC";
                            $resSite = mysqli_query($con, $sqlDdSite);
                            while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                            <?php endwhile; ?>
                        </select>
                    </div>
                    <div class="one columns">
                        <label for="toggle_16">View Sample</label>
                        <input type="checkbox" id="toggle_16">
                        <dialog>
                            <label for="toggle_16" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                            <img id="myImg" src="image/equipment/016.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                        </dialog>
                    </div>
                </div>
                
                <script>
                    function updateDiv() {
                        var dropdown = document.getElementById('intConfigType');
                        var bananaDiv = document.getElementById('BananaDiv');
                        var edgeDiv = document.getElementById('EdgeDiv');
                        var winDiv = document.getElementById('WinchestorDiv');
                        var wireDiv = document.getElementById('WireDiv');
                        var selectedValue = dropdown.value;

                        document.getElementById('bananaJackHole').value = '';
                        document.getElementById('connVoltRating').value = '';
                        document.getElementById('connCurrRating').value = '';
                        document.getElementById('connTempRating').value = '';
                        document.getElementById('noPins').value = '';
                        document.getElementById('pinPitch').value = '';
                        document.getElementById('connRack').value = '';
                        document.getElementById('wireVoltRating').value = '';
                        document.getElementById('wireCurrRating').value = '';
                        document.getElementById('wireTempRating').value = '';

                        if (selectedValue === '031001') {
                            bananaDiv.style.display = 'block';
                            edgeDiv.style.display = 'none';
                            winDiv.style.display = 'none';
                            wireDiv.style.display = 'none';
                        } else if (selectedValue === '031002') {
                            bananaDiv.style.display = 'none';
                            edgeDiv.style.display = 'block';
                            winDiv.style.display = 'none';
                            wireDiv.style.display = 'none';
                        } else if (selectedValue === '031003') {
                            bananaDiv.style.display = 'none';
                            edgeDiv.style.display = 'none';
                            winDiv.style.display = 'block';
                            wireDiv.style.display = 'none';
                        } else if (selectedValue === '031004') {
                            bananaDiv.style.display = 'none';
                            edgeDiv.style.display = 'none';
                            winDiv.style.display = 'none';
                            wireDiv.style.display = 'block';
                        } else {
                            bananaDiv.style.display = 'none';
                            edgeDiv.style.display = 'none';
                            winDiv.style.display = 'none';
                            wireDiv.style.display = 'none';
                        }
                    }
                </script>
                
                <div id="BananaDiv" name="BananaDiv" style="display: none;">
                    <div class="row">
                        <div class="two columns"><label for="bananaJackHole">No. Banana Jack Holes *</label></div>
                        <div class="one columns"><input type="number" step="0.001" id="bananaJackHole" name="bananaJackHole" value="" > </div>
                        <div class="one columns"><label for="bananaJackHole" style="text-align: left"><b>Pins</b></label></div>
                        <div class="two columns">&nbsp;</div>
                        <div class="two columns"><label for="connVoltRating">Connector Voltage Rating *</label></div>
                        <div class="one columns"><input type="number" step="0.001" id="connVoltRating" name="connVoltRating" value="" > </div>
                        <div class="one columns"><label for="connVoltRating" style="text-align: left"><b>V</b></label></div>
                        <div class="two columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="connCurrRating">Connector Current Rating *</label></div>
                        <div class="one columns"><input type="number" step="0.001" id="connCurrRating" name="connCurrRating" value="" > </div>
                        <div class="one columns"><label for="connCurrRating" style="text-align: left"><b>A</b></label></div>
                        <div class="two columns">&nbsp;</div>
                        <div class="two columns"><label for="connTempRating">Connector Temp Rating *</label></div>
                        <div class="one columns"><input type="number" step="0.001" id="connTempRating" name="connTempRating" value="" > </div>
                        <div class="one columns"><label for="connTempRating" style="text-align: left"><b>`C</b></label></div>
                        <div class="two columns">&nbsp;</div>
                    </div>
                </div>
                
                <div id="EdgeDiv" name="EdgeDiv" style="display: none;">
                    <div class="row">
                        <div class="two columns"><label for="noPins">No. of Pins *</label></div>
                        <div class="one columns"><input type="number" step="0.001" id="noPins" name="noPins" value="" > </div>
                        <div class="one columns"><label for="noPins" style="text-align: left"><b>Pins</b></label></div>
                        <div class="two columns">&nbsp;</div>
                        <div class="two columns"><label for="pinPitch">Pin Pitch *</label></div>
                        <div class="one columns"><input type="number" step="0.001" id="pinPitch" name="pinPitch" value="" > </div>
                        <div class="one columns"><label for="pinPitch" style="text-align: left"><b>mm</b></label></div>
                        <div class="two columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="connVoltRating">Connector Voltage Rating *</label></div>
                        <div class="one columns"><input type="number" step="0.001" id="connVoltRating" name="connVoltRating" value="" > </div>
                        <div class="one columns"><label for="connVoltRating" style="text-align: left"><b>V</b></label></div>
                        <div class="two columns">&nbsp;</div>
                        <div class="two columns"><label for="connCurrRating">Connector Current Rating *</label></div>
                        <div class="one columns"><input type="number" step="0.001" id="connCurrRating" name="connCurrRating" value="" > </div>
                        <div class="one columns"><label for="connCurrRating" style="text-align: left"><b>A</b></label></div>
                        <div class="two columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="connTempRating">Connector Temp Rating *</label></div>
                        <div class="one columns"><input type="number" step="0.001" id="connTempRating" name="connTempRating" value="" > </div>
                        <div class="one columns"><label for="connTempRating" style="text-align: left"><b>`C</b></label></div>
                    </div>
                </div>
                
                <div id="WinchestorDiv" name="WinchestorDiv" style="display: none;">
                    <div class="row">
                        <div class="two columns"><label for="noPins">No. of Pins *</label></div>
                        <div class="one columns"><input type="number" step="0.001" id="noPins" name="noPins" value="" > </div>
                        <div class="one columns"><label for="noPins" style="text-align: left"><b>Pins</b></label></div>
                        <div class="two columns">&nbsp;</div>
                        <div class="two columns"><label for="pinPitch">Pin Pitch *</label></div>
                        <div class="one columns"><input type="number" step="0.001" id="pinPitch" name="pinPitch" value="" > </div>
                        <div class="one columns"><label for="pinPitch" style="text-align: left"><b>mm</b></label></div>
                        <div class="two columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="connVoltRating">Connector Voltage Rating *</label></div>
                        <div class="one columns"><input type="number" step="0.001" id="connVoltRating" name="connVoltRating" value="" > </div>
                        <div class="one columns"><label for="connVoltRating" style="text-align: left"><b>V</b></label></div>
                        <div class="two columns">&nbsp;</div>
                        <div class="two columns"><label for="connCurrRating">Connector Current Rating *</label></div>
                        <div class="one columns"><input type="number" step="0.001" id="connCurrRating" name="connCurrRating" value="" > </div>
                        <div class="one columns"><label for="connCurrRating" style="text-align: left"><b>A</b></label></div>
                        <div class="two columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="connRack">No. Wires Connected to Rack *</label></div>
                        <div class="one columns"><input type="number" step="0.001" id="connRack" name="connRack" value="" > </div>
                        <div class="one columns"><label for="connRack" style="text-align: left"><b>`C</b></label></div>
                    </div>
                </div>
                
                <div class="row" id="WireDiv" name="WireDiv"" style="display: none;">
                    <div class="row">
                        <div class="two columns"><label for="wireVoltRating">Wire Voltage Rating *</label></div>
                        <div class="one columns"><input type="number" step="0.001" id="wireVoltRating" name="wireVoltRating" value="" > </div>
                        <div class="one columns"><label for="wireVoltRating" style="text-align: left"><b>V</b></label></div>
                        <div class="two columns">&nbsp;</div>
                        <div class="two columns"><label for="wireCurrRating">Wire Current Rating *</label></div>
                        <div class="one columns"><input type="number" step="0.001" id="wireCurrRating" name="wireCurrRating" value="" > </div>
                        <div class="one columns"><label for="wireCurrRating" style="text-align: left"><b>A</b></label></div>
                        <div class="two columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="wireTempRating">Wire Temp Rating *</label></div>
                        <div class="one columns"><input type="number" step="0.001" id="wireTempRating" name="wireTempRating" value="" > </div>
                        <div class="one columns"><label for="wireTempRating" style="text-align: left"><b>`C</b></label></div>
                    </div>
                </div>
                
                <h6>External Chamber Configuration</h6>
                <div class="row">
                    <div class="two columns"><label for="extConfigType">Configuration Type *</label></div>
                    <div class="three columns">
                        <select id="extConfigType" name="extConfigType" style="width: 100%" onchange="updateView()" required>
                            <option value="" selected=""></option>
                            <?php
                            $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '032' ORDER BY code ASC";
                            $resSite = mysqli_query($con, $sqlDdSite);
                            while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                            <?php endwhile; ?>
                        </select>
                    </div>
                    <div class="one columns">
                        <label for="toggle_20">View Sample</label>
                        <input type="checkbox" id="toggle_20">
                        <dialog>
                            <label for="toggle_20" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                            <img id="myImg" src="image/equipment/020.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                        </dialog>
                    </div>
                </div>
                
                <script>
                    function updateView() {
                        var dd = document.getElementById('extConfigType');
                        var extDiv = document.getElementById('viewExternalDiv');
                        var selectedValue = dd.value;

                        if (selectedValue === '032003') {
                            extDiv.style.display = 'none';
                        } else {
                            extDiv.style.display = 'block';
                        }
                    }
                </script>
                
                <div class="row" id="viewExternalDiv" name="viewExternalDiv" style="display: none;">
                    <div class="row">
                        <div class="two columns"><label for="interfaceVoltRating">Interface Voltage Rating *</label></div>
                        <div class="one columns"><input type="number" step="0.001" id="interfaceVoltRating" name="interfaceVoltRating" value="" > </div>
                        <div class="one columns"><label for="interfaceVoltRating" style="text-align: left"><b>V</b></label></div>
                        <div class="two columns">&nbsp;</div>
                        <div class="two columns"><label for="interfaceCurrRating">Interface Current Rating *</label></div>
                        <div class="one columns"><input type="number" step="0.001" id="interfaceCurrRating" name="interfaceCurrRating" value="" > </div>
                        <div class="one columns"><label for="interfaceCurrRating" style="text-align: left"><b>A</b></label></div>
                        <div class="two columns">&nbsp;</div>
                    </div>
                </div>
                
                <button onclick="location.href = 'form_equipment_list.php'" type="button" id="backBtn"><i class='bx bx-list-ol bx-fw' ></i> List</button>
                <button type="submit" id="myBtn" class="btn btn-primary"><i class='bx bx-send bx-fw' ></i> Send</button>
            </div>
        </form>
        <script>
            $(".button").click(function () {
                var buttonId = $(this).attr("id");
                $("#modal-container").removeAttr("class").addClass(buttonId);
                $("body").addClass("modal-active");
            });

            $("#modal-container").click(function () {
                $(this).addClass("out");
                $("body").removeClass("modal-active");
            });
        </script>
        <script src="js/multiselect-dropdown.js" ></script>
    </body>
</html>