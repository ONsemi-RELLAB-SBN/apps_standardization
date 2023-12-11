<?php
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
// Process form data
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $selectedRelTest = $_POST['rel_test']; // Get selected rel test
    $showVoltage = $showCurrent = $showTemperature = $showPhase = $showPower = $showTimer = false; // Initial visibility

    switch ($selectedRelTest) {
        case 'set_a':
            $showVoltage = $showCurrent = true;
            break;
        case 'set_b':
            $showTemperature = $showVoltage = $showTimer = true;
            break;
        case 'set_c':
            $showTemperature = $showCurrent = true;
            break;
        case 'set_d':
            $showTimer = $showPhase = $showPower = true;
            break;
        case 'set_e':
            $showPower = $showPhase = true;
            break;
        case 'set_f':
            // Hide all fields
            break;
    }
}

include './class/db.php';
?>

<html>
    <head>
        
        <script src="js/jquery-3.7.0.js"></script>
        <style>
            .hidden {
                display: none;
            }
        </style>
        <script>
            // Update field visibility on change
//            $(document).ready(function () {
            jQuery(document).ready(function ($) {
                $('#rel_test').change(function () {
                    console.log("MASUK KE SINI");
                    const selectedRelTest = $(this).val();
                    let showVoltage = false,
                        showCurrent = false,
                        showTemperature = false,
                        showPhase = false,
                        showPower = false,
                        showTimer = false;

                    switch (selectedRelTest) {
                        case 'set_a':
                            showVoltage = showCurrent = true;
                            break;
                        case 'set_b':
                            showTemperature = showVoltage = showTimer = true;
                            break;
                        case 'set_c':
                            showTemperature = showCurrent = true;
                            break;
                        case 'set_d':
                            showTimer = showPhase = showPower = true;
                            break;
                        case 'set_e':
                            showPower = showPhase = true;
                            break;
                        case 'set_f':
                            // Hide all fields
                            break;
                    }

                    $('.voltage').toggleClass('hidden', !showVoltage);
                    $('.current').toggleClass('hidden', !showCurrent);
                    $('.temperature').toggleClass('hidden', !showTemperature);
                    $('.phase').toggleClass('hidden', !showPhase);
                    $('.power').toggleClass('hidden', !showPower);
                    $('.timer').toggleClass('hidden', !showTimer);
                });
            });
        </script>
    </head>
    <body>
        <form id="add_equipment_form" action="../crud/crud_add_equipment.php" method="get">
            <div class="row">
                <h6 id="general">General</h6>
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

                <h6 id="identity">Equipment Identity</h6>
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
<!--                        <input type="text" list="eqpt_id_list" autocomplete="off" id="eqpt_id" name="eqpt_id">
                        <datalist id="eqpt_id_list">
                            <?php 
                            $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '006' ORDER BY code ASC";
                            $result = mysqli_query($con, $sqlDdSite);
                            while($row = mysqli_fetch_array($result)) { ?>
                                <option value="<?php echo $row['code']; ?>"><?php echo $row['name']; ?></option>
                            <?php } ?>
                        </datalist>-->
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
<!--                        <input type="text" list="manufacturer_list" autocomplete="off" id="manufacturer" name="manufacturer">
                        <datalist id="manufacturer_list">
                            <?php 
                            $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '009' ORDER BY code ASC";
                            $result = mysqli_query($con, $sqlDdSite);
                            while($row = mysqli_fetch_array($result)) { ?>
                                <option value="<?php echo $row['code']; ?>"><?php echo $row['name']; ?></option>
                            <?php } ?>
                        </datalist>-->
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
<!--                        <input type="text" list="model_list" autocomplete="off" id="model" name="model">
                        <datalist id="model_list">
                            <?php 
                            $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '010' ORDER BY code ASC";
                            $result = mysqli_query($con, $sqlDdSite);
                            while($row = mysqli_fetch_array($result)) { ?>
                                <option value="<?php echo $row['code']; ?>"><?php echo $row['name']; ?></option>
                            <?php } ?>
                        </datalist>-->
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
                
                <h6 id="capability">Capability</h6>
                <div class="row">
                    <div class="two columns"><label for="volt_rating">Voltage Rating *</label></div>
                    <div class="one columns"><input type="number" step="0.001" id="volt_rating" name="volt_rating" value="" > </div>
                    <div class="one columns"><label for="volt_rating" style="text-align: left"><b>V</b></label></div>
                    <div class="two columns">&nbsp;</div>
                    <div class="two columns"><label for="volt_control">Voltage Control Accuracy *</label></div>
                    <div class="one columns"><input type="number" step="0.001" id="volt_control" name="volt_control" value="" > </div>
                    <div class="one columns"><label for="volt_control" style="text-align: left"><b>%</b></label></div>
                    <div class="two columns">&nbsp;</div>
                </div>
                <div class="row">
                    <div class="two columns"><label for="curr_rating">Current Rating *</label></div>
                    <div class="one columns"><input type="number" step="0.001" id="curr_rating" name="curr_rating" value="" > </div>
                    <div class="one columns"><label for="curr_rating" style="text-align: left"><b>A</b></label></div>
                    <div class="two columns">&nbsp;</div>
                    <div class="two columns"><label for="power_rating">Power Rating *</label></div>
                    <div class="one columns"><input type="number" step="0.001" id="power_rating" name="power_rating" value="" > </div>
                    <div class="one columns"><label for="power_rating" style="text-align: left"><b>W</b></label></div>
                    <div class="two columns">&nbsp;</div>
                </div>
                <div class="row">
                    <div class="two columns"><label for="min_time">Min. Timer Setting *</label></div>
                    <div class="one columns"><input type="number" step="0.001" id="min_time" name="min_time" value="" > </div>
                    <div class="one columns"><label for="min_time" style="text-align: left"><b>s</b></label></div>
                    <div class="two columns">&nbsp;</div>
                    <div class="two columns"><label for="max_time">Max. Timer Setting *</label></div>
                    <div class="one columns"><input type="number" step="0.001" id="max_time" name="max_time" value="" > </div>
                    <div class="one columns"><label for="max_time" style="text-align: left"><b>s</b></label></div>
                    <div class="two columns">&nbsp;</div>
                </div>
                <div class="row">
                    <div class="two columns"><label for="min_temp">Min. Temperature *</label></div>
                    <div class="one columns"><input type="number" step="0.001" id="min_temp" name="min_temp" value="" > </div>
                    <div class="one columns"><label for="min_temp" style="text-align: left"><b>`C</b></label></div>
                    <div class="two columns">&nbsp;</div>
                    <div class="two columns"><label for="max_temp">Max. Temperature *</label></div>
                    <div class="one columns"><input type="number" step="0.001" id="max_temp" name="max_temp" value="" > </div>
                    <div class="one columns"><label for="max_temp" style="text-align: left"><b>`C</b></label></div>
                    <div class="two columns">&nbsp;</div>
                </div>
                <div class="row">
                    <div class="two columns"><label for="minRh">Min. RH *</label></div>
                    <div class="one columns"><input type="number" step="0.001" id="minRh" name="minRh" value="" > </div>
                    <div class="one columns"><label for="minRh" style="text-align: left"><b>%</b></label></div>
                    <div class="two columns">&nbsp;</div>
                    <div class="two columns"><label for="maxRh">Max. RH *</label></div>
                    <div class="one columns"><input type="number" step="0.001" id="maxRh" name="maxRh" value="" > </div>
                    <div class="one columns"><label for="maxRh" style="text-align: left"><b>%</b></label></div>
                    <div class="two columns">&nbsp;</div>
                </div>
                <div class="row">
                    <div class="two columns"><label for="min_pressure">Minimum Pressure *</label></div>
                    <div class="one columns"><input type="number" step="0.001" id="min_pressure" name="min_pressure" value="" > </div>
                    <div class="one columns"><label for="min_pressure" style="text-align: left"><b>psi</b></label></div>
                    <div class="two columns">&nbsp;</div>
                    <div class="two columns"><label for="max_pressure">Maximum Pressure *</label></div>
                    <div class="one columns"><input type="number" step="0.001" id="max_pressure" name="max_pressure" value="" > </div>
                    <div class="one columns"><label for="max_pressure" style="text-align: left"><b>psi</b></label></div>
                    <div class="two columns">&nbsp;</div>
                </div>
                <div class="row">
                    <div class="two columns"><label for="heat_dissipation">Heat Dissipation *</label></div>
                    <div class="two columns"><input type="text" id="heat_dissipation" name="heat_dissipation" value="" > </div>
                    <div class="two columns"><label for="heat_dissipation" style="text-align: left"><b>Watt</b></label></div>
                    <!--<div class="two columns">&nbsp;</div>-->
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
                        <input type="number" step="0.001" id="temp_fluctuation" name="temp_fluctuation" value="" >
                        </div>
                    <div class="one columns"><label for="temp_fluctuation" style="text-align: left"><b>`C</b></label></div>
                    <div class="two columns">&nbsp;</div>
                </div>
                <div class="row">
                    <div class="one columns"><input type="number" step="0.001" id="humid_fluctuation" name="humid_fluctuation" value="" > </div>
                    <div class="two columns">
                        <label for="temp_uniform">Temperature Uniformity *</label>
                        <label for="toggle_02" class="view-image">Image</label>
                        <input type="checkbox" id="toggle_02">
                        <dialog>
                            <label for="toggle_02" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                            <img id="myImg" src="image/equipment/002.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                        </dialog>
                    </div>
                    <div class="one columns"><input type="number" step="0.001" id="temp_uniform" name="temp_uniform" value="" ></div>
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
                    <div class="one columns"><input type="number" step="0.001" id="humid_fluctuation" name="humid_fluctuation" value="" > </div>
                    <div class="one columns"><label for="humid_fluctuation" style="text-align: left"><b>%</b></label></div>
                    <div class="two columns">&nbsp;</div>
                </div>
                
            </div>
        </form>
        
    </body>
</html>