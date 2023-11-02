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
                    <div class="two columns"><label for="lab_location">Lab Location *</label></div>
                    <div class="three columns">
                        <select id="lab_location" name="lab_location" style="width: 100%" required>
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
                    <div class="two columns"><label for="strategy">Product Group *</label></div>
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
                                <option value="<?php echo $rowSite['code']; ?>" <?php if ($rowSite['code'] === "004001") { ?>selected<?php } ?>><?php echo $rowSite['name']; ?></option>
                            <?php endwhile; ?>
                        </select>
                    </div>
                    <div class="one columns">&nbsp;</div>
                    <div class="two columns"><label for="champion">Lab Manager *</label></div>
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
                    <div class="two columns"><label for="eqpt_id">Equipment ID *</label></div>
                    <div class="three columns">
                        <select id="eqpt_id" name="eqpt_id" style="width: 100%" required>
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
                    <div class="two columns"><label for="mfg_date">Equipment Mfg Date *</label></div>
                    <div class="three columns"><input type="date" id="mfg_date" name="mfg_date" value="" style="width:55%" required></div>
                    <div class="one columns">&nbsp;</div>
                    <div class="two columns"><label for="asset_no">Equipment Asset No *</label></div>
                    <div class="three columns"><input type="text" id="asset_no" name="asset_no" placeholder="Asset Number" value="" required> </div>
                    <div class="one columns">&nbsp;</div>
                </div>
                <div class="row">
                    <div class="two columns"><label for="new_transfer">New/Transfer Equipment *</label></div>
                    <div class="three columns">
                        <select id="new_transfer" name="new_transfer" style="width: 100%" onchange="updateToField()" required>
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
                        <div class="three columns"><label for="from">From? *</label></div>
                        <div class="three columns">
                            <select id="from" name="from" style="width: 100%" readonly required>
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

                <script>
                    function updateToField() {
                        var newTransferDropdown = document.getElementById('new_transfer');
                        var toField = document.getElementById('from');
                        var transField = document.getElementById('transfer');

                        if (newTransferDropdown.value === '013001') {
                            toField.readOnly = true;
                            toField.required = false;
                            $("#from").val('');
                            transField.style.display = 'none';
                        } else {
                            toField.readOnly = false;
                            toField.required = true;
                            transField.style.display = 'block';
                        }
                    }
                </script>

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
                        var selected = [...newreltest.selectedOptions].map(option => option.value);

                        if (selected.includes("008019") || selected.includes("008021")) {
                            zone.readOnly = false;
                            zone.required = true;
                            $("#zone").val('');
                            zoneF.style.display = 'block';
                        } else {
                            zone.readOnly = true;
                            zone.required = false;
                            zoneF.style.display = 'none';
                        }
                    }
                </script>

                <h6>Capability</h6>
                <div class="row">
                    <div class="two columns"><label for="volt_rating">Voltage Rating *</label></div>
                    <div class="one columns"><input type="number" step="0.001" id="volt_rating" name="volt_rating" value="" required> </div>
                    <div class="one columns"><label for="volt_rating" style="text-align: left"><b>V</b></label></div>
                    <div class="two columns">&nbsp;</div>
                    <div class="two columns"><label for="volt_control">Voltage Control Accuracy *</label></div>
                    <div class="one columns"><input type="number" step="0.001" id="volt_control" name="volt_control" value="" required> </div>
                    <div class="one columns"><label for="volt_control" style="text-align: left"><b>%</b></label></div>
                    <div class="two columns">&nbsp;</div>
                </div>
                <div class="row">
                    <div class="two columns"><label for="min_temp">Min. Temperature *</label></div>
                    <div class="one columns"><input type="number" step="0.001" id="min_temp" name="min_temp" value="" required> </div>
                    <div class="one columns"><label for="min_temp" style="text-align: left"><b>`C</b></label></div>
                    <div class="two columns">&nbsp;</div>
                    <div class="two columns"><label for="max_temp">Max. Temperature *</label></div>
                    <div class="one columns"><input type="number" step="0.001" id="max_temp" name="max_temp" value="" required> </div>
                    <div class="one columns"><label for="max_temp" style="text-align: left"><b>`C</b></label></div>
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
                    <div class="two columns"><label for="heat_dissipation">Heat Dissipation *</label></div>
                    <div class="one columns"><input type="number" step="0.001" id="heat_dissipation" name="heat_dissipation" value="" required> </div>
                    <div class="one columns"><label for="heat_dissipation" style="text-align: left"><b>Watt</b></label></div>
                    <div class="two columns">&nbsp;</div>
                    <div class="two columns">
                        <label for="temp_fluctuation">Temperature Fluctuation *</label>
                        <label for="toggle_01" class="view-image">Image</label>
                        <input type="checkbox" id="toggle_01">
                        <dialog>
                            <label for="toggle_01" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                            <img id="myImg" src="image/equipment/001.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                        </dialog>
                    </div>
                    <div class="one columns">
                        <input type="number" step="0.001" id="temp_fluctuation" name="temp_fluctuation" value="" required>
                        </div>
                    <div class="one columns"><label for="temp_fluctuation" style="text-align: left"><b>`C</b></label></div>
                    <div class="two columns">&nbsp;</div>
                    </div>
                </div>
                <div class="row">
                    <div class="two columns">
                        <label for="temp_uniform">Temperature Uniformity *</label>
                        <label for="toggle_02" class="view-image">Image</label>
                        <input type="checkbox" id="toggle_02">
                        <dialog>
                            <label for="toggle_02" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                            <img id="myImg" src="image/equipment/002.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                        </dialog>
                    </div>
                    <div class="one columns"><input type="number" step="0.001" id="temp_uniform" name="temp_uniform" value="" required></div>
                    <div class="one columns"><label for="temp_uniform" style="text-align: left"><b>`C</b></label></div>
                    <div class="two columns">&nbsp;</div>
                    <div class="two columns">
                        <label for="humid_fluctuation">Humidity Fluctuation *</label>
                        <label for="toggle_03" class="view-image">Image</label>
                        <input type="checkbox" id="toggle_03">
                        <dialog>
                            <label for="toggle_03" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                            <img id="myImg" src="image/equipment/003.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                        </dialog>
                    </div>
                    <div class="one columns"><input type="number" step="0.001" id="humid_fluctuation" name="humid_fluctuation" value="" required> </div>
                    <div class="one columns"><label for="humid_fluctuation" style="text-align: left"><b>%</b></label></div>
                    <div class="two columns">&nbsp;</div>
                </div>

                <h6>Characteristic</h6>
                <div class="row">
                    <div class="two columns">
                        <label for="no_interior">No. Interior Zones (doors) *</label>
                        <label for="toggle_06" class="view-image">Image</label>
                        <input type="checkbox" id="toggle_06">
                        <dialog>
                            <label for="toggle_06" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                            <img id="myImg" src="image/equipment/006.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                        </dialog>
                    </div>
                    <div class="one columns"><input type="number" step="0.001" id="no_interior" name="no_interior" value="" required> </div>
                    <div class="one columns"><label for="no_interior" style="text-align: left"><b>Zone</b></label></div>
                    <div class="two columns">&nbsp;</div>
                    <div class="two columns">
                        <label for="ext_dimension_w">External Dimension (W) *</label>
                        <label for="toggle_04" class="view-image">Image</label>
                        <input type="checkbox" id="toggle_04">
                        <dialog>
                            <label for="toggle_04" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                            <img id="myImg" src="image/equipment/004.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                        </dialog>
                    </div>
                    <div class="one columns"><input type="number" step="0.001" id="ext_dimension_w" name="ext_dimension_w" value="" required> </div>
                    <div class="one columns"><label for="ext_dimension_w" style="text-align: left"><b>mm</b></label></div>
                    <div class="two columns">&nbsp;</div>
                </div>
                <div class="row">
                    <div class="two columns">
                        <label for="int_volume">Internal Volume *</label>
                        <label for="toggle_08" class="view-image">Image</label>
                        <input type="checkbox" id="toggle_08">
                        <dialog>
                            <label for="toggle_08" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                            <img id="myImg" src="image/equipment/008.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                        </dialog>
                    </div>
                    <div class="one columns"><input type="number" step="0.001" id="int_volume" name="int_volume" value="" required> </div>
                    <div class="one columns"><label for="int_volume" style="text-align: left"><b>L</b></label></div>
                    <div class="two columns">&nbsp;</div>
                    <div class="two columns"><label for="ext_dimension_d">(D) *</label></div>
                    <div class="one columns"><input type="number" step="0.001" id="ext_dimension_d" name="ext_dimension_d" value="" required> </div>
                    <div class="one columns"><label for="ext_dimension_d" style="text-align: left"><b>mm</b></label></div>
                    <div class="two columns">&nbsp;</div>
                </div>
                <div class="row">
                    <div class="two columns">
                        <label for="board_orientation">Board Orientation*</label>
                        <label for="toggle_09" class="view-image">Image</label>
                        <input type="checkbox" id="toggle_09">
                        <dialog>
                            <label for="toggle_09" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                            <img id="myImg" src="image/equipment/009.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                        </dialog>
                    </div>
                    <div class="three columns">
                        <select id="board_orientation" name="board_orientation" style="width: 100%" required>
                            <option value="" selected=""></option>
                            <?php
                            $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '015' ORDER BY code ASC";
                            $resSite = mysqli_query($con, $sqlDdSite);
                            while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                            <?php endwhile; ?>
                        </select>
                    </div>
                    <div class="one columns">&nbsp;</div>
                    <div class="two columns"><label for="ext_dimension_h">(H) *</label></div>
                    <div class="one columns"><input type="number" step="0.001" id="ext_dimension_h" name="ext_dimension_h" value="" required> </div>
                    <div class="one columns"><label for="ext_dimension_h" style="text-align: left"><b>mm</b></label></div>
                    <div class="two columns">&nbsp;</div>
                </div>
                <div class="row">
                    <div class="two columns"><label for="rack_material">Rack Material *</label></div>
                    <div class="three columns">
                        <select id="rack_material" name="rack_material" style="width: 100%" required>
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
                    <div class="two columns">
                        <label for="int_dimension_w">Internal Dimension (W) *</label>
                        <label for="toggle_05" class="view-image">Image</label>
                        <input type="checkbox" id="toggle_05">
                        <dialog>
                            <label for="toggle_05" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                            <img id="myImg" src="image/equipment/005.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                        </dialog>
                    </div>
                    <div class="one columns"><input type="number" step="0.001" id="int_dimension_w" name="int_dimension_w" value="" required> </div>
                    <div class="one columns"><label for="int_dimension_w" style="text-align: left"><b>mm</b></label></div>
                    <div class="two columns">&nbsp;</div>
                </div>
                <div class="row">
                    <div class="two columns">
                        <label for="rack_slot_pitch">Rack Slot-to-Slot Pitch *</label>
                        <label for="toggle_10" class="view-image">Image</label>
                        <input type="checkbox" id="toggle_10">
                        <dialog>
                            <label for="toggle_10" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                            <img id="myImg" src="image/equipment/010.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                        </dialog>
                    </div>
                    <div class="one columns"><input type="number" step="0.001" id="rack_slot_pitch" name="rack_slot_pitch" value="" required></div>
                    <div class="one columns"><label for="rack_slot_pitch" style="text-align: left"><b>mm</b></label></div>
                    <div class="two columns">&nbsp;</div>
                    <div class="two columns"><label for="int_dimension_d">(D) *</label></div>
                    <div class="one columns"><input type="number" step="0.001" id="int_dimension_d" name="int_dimension_d" value="" required> </div>
                    <div class="one columns"><label for="int_dimension_d" style="text-align: left"><b>mm</b></label></div>
                    <div class="two columns">&nbsp;</div>
                </div>
                <div class="row">
                    <div class="two columns">
                        <label for="rack_slot_width">Rack Slot Width *</label>
                        <label for="toggle_11" class="view-image">Image</label>
                        <input type="checkbox" id="toggle_11">
                        <dialog>
                            <label for="toggle_11" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                            <img id="myImg" src="image/equipment/011.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                        </dialog>
                    </div>
                    <div class="one columns"><input type="number" step="0.001" id="rack_slot_width" name="rack_slot_width" value="" required> </div>
                    <div class="one columns"><label for="rack_slot_width" style="text-align: left"><b>mm</b></label></div>
                    <div class="two columns">&nbsp;</div>
                    <div class="two columns"><label for="int_dimension_h">(H) *</label></div>
                    <div class="one columns"><input type="number" step="0.001" id="int_dimension_h" name="int_dimension_h" value="" required> </div>
                    <div class="one columns"><label for="int_dimension_h" style="text-align: left"><b>mm</b></label></div>
                    <div class="two columns">&nbsp;</div>
                </div>
                <div class="row">
                    <div class="two columns"><label for="eqpt_weight">Equipment Weight *</label></div>
                    <div class="one columns"><input type="number" step="0.001" id="eqpt_weight" name="eqpt_weight" value="" required> </div>
                    <div class="one columns"><label for="eqpt_weight" style="text-align: left"><b>Kg</b></label></div>
                    <div class="two columns">&nbsp;</div>
                    <div class="two columns">
                        <label for="rack_dimension_w">Rack Dimension (W) *</label>
                        <label for="toggle_07" class="view-image">Image</label>
                        <input type="checkbox" id="toggle_07">
                        <dialog>
                            <label for="toggle_07" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                            <img id="myImg" src="image/equipment/007.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                        </dialog>
                    </div>
                    <div class="one columns"><input type="number" step="0.001" id="rack_dimension_w" name="rack_dimension_w" value="" required> </div>
                    <div class="one columns"><label for="rack_dimension_w" style="text-align: left"><b>mm</b></label></div>
                    <div class="two columns">&nbsp;</div>
                </div>
                <div class="row">
                    <div class="two columns">
                        <label for="no_mb_slot">Number of motherboard slots *</label>
                        <label for="toggle_12" class="view-image">Image</label>
                        <input type="checkbox" id="toggle_12">
                        <dialog>
                            <label for="toggle_12" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                            <img id="myImg" src="image/equipment/012.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                        </dialog>
                    </div>
                    <div class="one columns"><input type="number" step="0.001" id="no_mb_slot" name="no_mb_slot" value="" required></div>
                    <div class="one columns"><label for="no_mb_slot" style="text-align: left"><b>Slot</b></label></div>
                    <div class="two columns">&nbsp;</div>
                    <div class="two columns"><label for="rack_dimension_d">(D) *</label></div>
                    <div class="one columns"><input type="number" step="0.001" id="rack_dimension_d" name="rack_dimension_d" value="" required> </div>
                    <div class="one columns"><label for="rack_dimension_d" style="text-align: left"><b>mm</b></label></div>
                    <div class="two columns">&nbsp;</div>
                </div>
                <div class="row">
                    <div class="two columns">
                        <label for="max_ps_bs">Max number of power supplies per board slot *</label>
                        <label for="toggle_13" class="view-image">Image</label>
                        <input type="checkbox" id="toggle_13">
                        <dialog>
                            <label for="toggle_13" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                            <img id="myImg" src="image/equipment/013.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                        </dialog>
                    </div>
                    <div class="one columns"><input type="number" step="0.001" id="max_ps_bs" name="max_ps_bs" value="" required> </div>
                    <div class="one columns"><label for="max_ps_bs" style="text-align: left"><b>Slot</b></label></div>
                    <div class="two columns">&nbsp;</div>
                    <div class="two columns"><label for="rack_dimension_h">(H) *</label></div>
                    <div class="one columns"><input type="number" step="0.001" id="rack_dimension_h" name="rack_dimension_h" value="" required> </div>
                    <div class="one columns"><label for="rack_dimension_h" style="text-align: left"><b>mm</b></label></div>
                    <div class="two columns">&nbsp;</div>
                </div>
                <div class="row">
                    <div class="two columns">
                        <label for="max_ps">Max number of power supplies for the entire Equipment *</label>
                        <label for="toggle_14" class="view-image">Image</label>
                        <input type="checkbox" id="toggle_14">
                        <dialog>
                            <label for="toggle_14" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                            <img id="myImg" src="image/equipment/014.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                        </dialog>
                    </div>
                    <div class="one columns"><input type="number" step="0.001" id="max_ps" name="max_ps" value="" required> </div>
                    <div class="one columns"><label for="max_ps" style="text-align: left"><b>Unit</b></label></div>
                    <div class="two columns">&nbsp;</div>
                    <div class="two columns">
                        <label for="airflow">Airflow *</label>
                        <label for="toggle_15" class="view-image">Image</label>
                        <input type="checkbox" id="toggle_15">
                        <dialog>
                            <label for="toggle_15" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                            <img id="myImg" src="image/equipment/015.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                        </dialog>
                    </div>
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
                    <div class="two columns"><label for="smoke_detector">Smoke Detector/Alarm *</label></div>
                    <div class="three columns">
                        <select id="smoke_detector" name="smoke_detector" style="width: 100%" required>
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
                    <div class="two columns"><label for="voltage_phase">Voltage/Phase/Current *</label></div>
                    <div class="one columns"><input type="number" step="0.001" id="voltage_phase" name="voltage_phase" value="" required> </div>
                    <div class="one columns"><label for="voltage_phase" style="text-align: left"><b>VAC</b></label></div>
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
                            $("#oxygen_level").val('');
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
                        var diWaterDropdown = document.getElementById('di_water');
                        var waterField = document.getElementById('water_topup');
                        var topapField = document.getElementById('topup');

                        if (diWaterDropdown.value !== '022003') {
                            waterField.readOnly = true;
                            waterField.required = false;
                            topapField.style.display = 'none';
                            $("#water_topup").val('');
                        } else {
                            waterField.readOnly = false;
                            waterField.required = true;
                            topapField.style.display = 'block';
                        }
                    }
                </script>

                <div class="row">
                    <div class="two columns"><label for="di_water">DI Water *</label></div>
                    <div class="three columns">
                        <select id="di_water" name="di_water" style="width: 100%" onchange="updateToFieldWater()" required>
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
                        <div class="three columns"><label for="water_topup">Water Top-up System *</label></div>
                        <div class="three columns">
                            <select id="water_topup" name="water_topup" style="width: 100%" required>
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
                    <div class="two columns">
                        <label for="int_config_type">Configuration Type *</label>
                        <label for="toggle_16" class="view-image">Image</label>
                        <input type="checkbox" id="toggle_16">
                        <dialog>
                            <label for="toggle_16" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                            <img id="myImg" src="image/equipment/016.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                        </dialog>
                    </div>
                    <div class="three columns">
                        <select id="int_config_type" name="int_config_type" style="width: 100%" onchange="updateDiv()" required>
                            <option value="" selected=""></option>
                            <?php
                            $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '031' ORDER BY code ASC";
                            $resSite = mysqli_query($con, $sqlDdSite);
                            while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                            <?php endwhile; ?>
                        </select>
                    </div>
                </div>
                
                <script>
                    function updateDiv() {
                        var dropdown = document.getElementById('int_config_type');
                        var bananaDiv = document.getElementById('BananaDiv');
                        var edgeDiv = document.getElementById('EdgeDiv');
                        var winDiv = document.getElementById('WinchestorDiv');
                        var wireDiv = document.getElementById('WireDiv');
                        var selectedValue = dropdown.value;

                        $("#banana_jack_hole").val('');
                        $("#conn_volt_rating").val('');
                        $("#conn_curr_rating").val('');
                        $("#conn_temp_rating").val('');
                        $("#no_pins").val('');
                        $("#pin_pitch").val('');
                        $("#conn_rack").val('');
                        $("#wire_volt_rating").val('');
                        $("#wire_curr_rating").val('');
                        $("#wire_temp_rating").val('');

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

                <!--TODO - please reassign semua data dekat bawah, set bagi data tu satu persatu, sbb duplicate data dia tak bole reset the second value-->

                <div id="BananaDiv" name="BananaDiv" style="display: none;">
                    <div class="row">
                        <div class="two columns"><label for="banana_jack_hole">No. Banana Jack Holes *</label></div>
                        <div class="one columns"><input type="number" step="0.001" id="banana_jack_hole" name="banana_jack_hole" value="" > </div>
                        <div class="one columns"><label for="banana_jack_hole" style="text-align: left"><b>Pins</b></label></div>
                        <div class="two columns">
                            <label for="toggle_17" class="view-image">Image</label>
                            <input type="checkbox" id="toggle_17">
                            <dialog>
                                <label for="toggle_17" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                                <img id="myImg" src="image/equipment/017.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                            </dialog>
                        </div>
                        <div class="two columns"><label for="conn_volt_rating">Connector Voltage Rating *</label></div>
                        <div class="one columns"><input type="number" step="0.001" id="conn_volt_rating" name="conn_volt_rating" value="" > </div>
                        <div class="one columns"><label for="conn_volt_rating" style="text-align: left"><b>V</b></label></div>
                        <div class="two columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="conn_curr_rating">Connector Current Rating *</label></div>
                        <div class="one columns"><input type="number" step="0.001" id="conn_curr_rating" name="conn_curr_rating" value="" > </div>
                        <div class="one columns"><label for="conn_curr_rating" style="text-align: left"><b>A</b></label></div>
                        <div class="two columns">&nbsp;</div>
                        <div class="two columns"><label for="conn_temp_rating">Connector Temp Rating *</label></div>
                        <div class="one columns"><input type="number" step="0.001" id="conn_temp_rating" name="conn_temp_rating" value="" > </div>
                        <div class="one columns"><label for="conn_temp_rating" style="text-align: left"><b>`C</b></label></div>
                        <div class="two columns">&nbsp;</div>
                    </div>
                </div>

                <div id="EdgeDiv" name="EdgeDiv" style="display: none;">
                    <div class="row">
                        <div class="two columns"><label for="no_pins">No. of Pins *</label></div>
                        <div class="one columns"><input type="number" step="0.001" id="no_pins" name="no_pins" value="" > </div>
                        <div class="one columns"><label for="no_pins" style="text-align: left"><b>Pins</b></label></div>
                        <div class="two columns">
                            <label for="toggle_18" class="view-image">Image</label>
                            <input type="checkbox" id="toggle_18">
                            <dialog>
                                <label for="toggle_18" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                                <img id="myImg" src="image/equipment/018.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                            </dialog>
                        </div>
                        <div class="two columns"><label for="pin_pitch">Pin Pitch *</label></div>
                        <div class="one columns"><input type="number" step="0.001" id="pin_pitch" name="pin_pitch" value="" > </div>
                        <div class="one columns"><label for="pin_pitch" style="text-align: left"><b>mm</b></label></div>
                        <div class="two columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="conn_volt_rating">Connector Voltage Rating *</label></div>
                        <div class="one columns"><input type="number" step="0.001" id="conn_volt_rating" name="conn_volt_rating" value="" > </div>
                        <div class="one columns"><label for="conn_volt_rating" style="text-align: left"><b>V</b></label></div>
                        <div class="two columns">&nbsp;</div>
                        <div class="two columns"><label for="conn_curr_rating">Connector Current Rating *</label></div>
                        <div class="one columns"><input type="number" step="0.001" id="conn_curr_rating" name="conn_curr_rating" value="" > </div>
                        <div class="one columns"><label for="conn_curr_rating" style="text-align: left"><b>A</b></label></div>
                        <div class="two columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="conn_temp_rating">Connector Temp Rating *</label></div>
                        <div class="one columns"><input type="number" step="0.001" id="conn_temp_rating" name="conn_temp_rating" value="" > </div>
                        <div class="one columns"><label for="conn_temp_rating" style="text-align: left"><b>`C</b></label></div>
                    </div>
                </div>

                <div id="WinchestorDiv" name="WinchestorDiv" style="display: none;">
                    <div class="row">
                        <div class="two columns"><label for="no_pins">No. of Pins *</label></div>
                        <div class="one columns"><input type="number" step="0.001" id="no_pins" name="no_pins" value="" > </div>
                        <div class="one columns"><label for="no_pins" style="text-align: left"><b>Pins</b></label></div>
                        <div class="two columns">
                            <label for="toggle_19" class="view-image">Image</label>
                            <input type="checkbox" id="toggle_19">
                            <dialog>
                                <label for="toggle_19" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                                <img id="myImg" src="image/equipment/019.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                            </dialog>
                        </div>
                        <div class="two columns"><label for="pin_pitch">Pin Pitch *</label></div>
                        <div class="one columns"><input type="number" step="0.001" id="pin_pitch" name="pin_pitch" value="" > </div>
                        <div class="one columns"><label for="pin_pitch" style="text-align: left"><b>mm</b></label></div>
                        <div class="two columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="conn_volt_rating">Connector Voltage Rating *</label></div>
                        <div class="one columns"><input type="number" step="0.001" id="conn_volt_rating" name="conn_volt_rating" value="" > </div>
                        <div class="one columns"><label for="conn_volt_rating" style="text-align: left"><b>V</b></label></div>
                        <div class="two columns">&nbsp;</div>
                        <div class="two columns"><label for="conn_curr_rating">Connector Current Rating *</label></div>
                        <div class="one columns"><input type="number" step="0.001" id="conn_curr_rating" name="conn_curr_rating" value="" > </div>
                        <div class="one columns"><label for="conn_curr_rating" style="text-align: left"><b>A</b></label></div>
                        <div class="two columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="conn_rack">No. Wires Connected to Rack *</label></div>
                        <div class="one columns"><input type="number" step="0.001" id="conn_rack" name="conn_rack" value="" > </div>
                        <div class="one columns"><label for="conn_rack" style="text-align: left"><b>`C</b></label></div>
                    </div>
                </div>

                <div class="row" id="WireDiv" name="WireDiv"" style="display: none;">
                    <div class="row">
                        <div class="two columns"><label for="wire_volt_rating">Wire Voltage Rating *</label></div>
                        <div class="one columns"><input type="number" step="0.001" id="wire_volt_rating" name="wire_volt_rating" value="" > </div>
                        <div class="one columns"><label for="wire_volt_rating" style="text-align: left"><b>V</b></label></div>
                        <div class="two columns">&nbsp;</div>
                        <div class="two columns"><label for="wire_curr_rating">Wire Current Rating *</label></div>
                        <div class="one columns"><input type="number" step="0.001" id="wire_curr_rating" name="wire_curr_rating" value="" > </div>
                        <div class="one columns"><label for="wire_curr_rating" style="text-align: left"><b>A</b></label></div>
                        <div class="two columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="wire_temp_rating">Wire Temp Rating *</label></div>
                        <div class="one columns"><input type="number" step="0.001" id="wire_temp_rating" name="wire_temp_rating" value="" > </div>
                        <div class="one columns"><label for="wire_temp_rating" style="text-align: left"><b>`C</b></label></div>
                    </div>
                </div>

                <h6>External Chamber Configuration</h6>
                <div class="row">
                    <div class="two columns">
                        <label for="ext_config_type">Configuration Type *</label>
                        <label for="toggle_20" class="view-image">Image</label>
                        <input type="checkbox" id="toggle_20">
                        <dialog>
                            <label for="toggle_20" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                            <img id="myImg" src="image/equipment/020.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                        </dialog>
                    </div>
                    <div class="three columns">
                        <select id="ext_config_type" name="ext_config_type" style="width: 100%" onchange="updateView()" required>
                            <option value="" selected=""></option>
                            <?php
                            $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '032' ORDER BY code ASC";
                            $resSite = mysqli_query($con, $sqlDdSite);
                            while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                            <?php endwhile; ?>
                        </select>
                    </div>
                </div>

                <script>
                    function updateView() {
                        var dd = document.getElementById('ext_config_type');
                        var extDiv = document.getElementById('viewExternalDiv');
                        var selectedValue = dd.value;

                        $("#interface_volt_rating").val('');
                        $("#interface_curr_rating").val('');

                        if (selectedValue === '032003') {
                            extDiv.style.display = 'none';
                        } else {
                            extDiv.style.display = 'block';
                        }
                    }
                </script>

                <div class="row" id="viewExternalDiv" name="viewExternalDiv" style="display: none;">
                    <div class="row">
                        <div class="two columns"><label for="interface_volt_rating">Interface Voltage Rating *</label></div>
                        <div class="one columns"><input type="number" step="0.001" id="interface_volt_rating" name="interface_volt_rating" value="" > </div>
                        <div class="one columns"><label for="interface_volt_rating" style="text-align: left"><b>V</b></label></div>
                        <div class="two columns">&nbsp;</div>
                        <div class="two columns"><label for="interface_curr_rating">Interface Current Rating *</label></div>
                        <div class="one columns"><input type="number" step="0.001" id="interface_curr_rating" name="interface_curr_rating" value="" > </div>
                        <div class="one columns"><label for="interface_curr_rating" style="text-align: left"><b>A</b></label></div>
                        <div class="two columns">&nbsp;</div>
                    </div>
                </div>

                <button onclick="location.href = 'form_equipment_list.php'" type="button" id="backBtn"><i class='bx bx-list-ol bx-fw' ></i> List</button>
                <button type="submit" id="myBtn" class="btn btn-primary"><i class='bx bx-send bx-fw' ></i> SAVE</button>
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    </body>
</html>