<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

include '../template/form.php';
include '../class/get_parameter.php';
$id = $_GET['edit'];
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <link rel="stylesheet" href="power.css"/>
    </head>
        
    <body>
        <form id="copy_power_form" action="../crud/crud_add_power.php" method="get">
            <input type="hidden" id="id" name="id" value="<?php echo $id; ?>">
            <?php
            $sqlFormData = "SELECT * FROM gest_form_ps WHERE id = '$id'";
            $resForm = mysqli_query($con, $sqlFormData);
            while ($rowForm = mysqli_fetch_array($resForm)): ?>
            
                <div id="main-page">
                    <div class="twelve columns">&nbsp;</div>
                    <h5>General</h5>
                    <div class="row">
                        <div class="two columns"><label for="lab_location">Lab Location *</label></div>
                        <div class="three columns">
                            <select id="lab_location" name="lab_location" style="width: 100%" required>
                                <?php echo getDropdown('002', $rowForm['lab_location']); ?>
                            </select>
                        </div>
                        <div class="one columns">&nbsp;</div>
                        <div class="two columns label"><label for="strategy">Product Group *</label></div>
                        <div class="three columns">
                            <select id="strategy" name="strategy" style="width: 100%" required>
                                <?php echo getDropdown('003', $rowForm['strategy']); ?>
                            </select>
                        </div>
                        <div class="one columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="standardization">Standardization Category *</label></div>
                        <div class="three columns">
                            <select id="standardization" name="standardization" style="width: 100%" required>
                                <?php echo getDropdown('004', $rowForm['standard_category']); ?>
                            </select>
                        </div>
                        <div class="one columns">&nbsp;</div>
                        <div class="two columns"><label for="champion">Lab Manager *</label></div>
                        <div class="three columns">
                            <select id="champion" name="champion" style="width: 100%" required>
                                <?php echo getDropdown('005', $rowForm['champion']); ?>
                            </select>
                        </div>
                        <div class="one columns">&nbsp;</div>
                    </div>
                </div>
            
                <div id="content-page">
                    <ul id="tabs">
                        <li class="active" data-tab="tabIdentity">Power Supply Identity</li>
                        <li data-tab="tabCapability">Capability</li>
                        <li data-tab="tabCharacter">Characteristics</li>
                        <li data-tab="tabCapacity">Capacity</li>
                    </ul>
                
                    <div class="tab-content active" id="tabIdentity">
                        <div class="row">
                            <div class="two columns"><label for="manufacturer">Manufacturer *</label></div>
                            <div class="three columns">
                                <input type="text" list="manufacturer_list" autocomplete="off" id="manufacturer" name="manufacturer" value="<?php echo getParameterValue($rowForm['manufacturer']); ?>" required>
                                <datalist id="manufacturer_list">
                                    <?php echo getDataList('039', $rowForm['manufacturer']); ?>
                                </datalist>
                            </div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="model">Model *</label></div>
                            <div class="three columns">
                                <input type="text" list="model_list" autocomplete="off" id="model" name="model" value="<?php echo getParameterValue($rowForm['model']); ?>" required>r
                                <datalist id="model_list">
                                    <?php echo getDataList('040', $rowForm['model']); ?>
                                </datalist>
                            </div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                    </div>
                    
                    <div class="tab-content" id="tabCapability">
                        <div class="row">
                            <div class="two columns"><label for="volt_rating">Voltage Rating</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="volt_rating" name="volt_rating" value="<?php echo $rowForm['voltage_rating']; ?>" > </div>
                            <div class="one columns"><b>V</b></div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="curr_rating">Current Rating</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="curr_rating" name="curr_rating" value="<?php echo $rowForm['current_rating']; ?>" > </div>
                            <div class="one columns"><b>&#176;C</b></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="max_power">Max Power</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="max_power" name="max_power" value="<?php echo $rowForm['max_power']; ?>" > </div>
                            <div class="one columns"><b>W</b></div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="volt_display_digit">Number of voltage display digits</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="volt_display_digit" name="volt_display_digit" value="<?php echo $rowForm['no_voltage_display']; ?>" > </div>
                            <div class="one columns"><b></b></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="curr_display_digit">Number of current display digits</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="curr_display_digit" name="curr_display_digit" value="<?php echo $rowForm['no_current_display']; ?>" > </div>
                            <div class="one columns"><b>&nbsp;</b></div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="volt_protection">Overvoltage protection</label></div>
                            <div class="three columns">
                                <select id="volt_protection" name="volt_protection" style="width: 100%" >
                                    <?php echo getDropdown('022', $rowForm['ovp']); ?>
                                </select>
                            </div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="curr_protection">Overcurrent protection</label></div>
                            <div class="three columns">
                                <select id="curr_protection" name="curr_protection" style="width: 100%" >
                                    <?php echo getDropdown('022', $rowForm['ocp']); ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    <div class="tab-content" id="tabCharacter">
                        <div class="row">
                            <div class="two columns"><label for="dimension_w">Dimensions (W)</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="dimension_w" name="dimension_w" value="<?php echo $rowForm['ps_dimension_w']; ?>" > </div>
                            <div class="one columns"><label for="dimension_w" style="text-align: left"><b>mm</b></label></div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="weight">Weight (kg)</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="weight" name="weight" value="<?php echo $rowForm['weight']; ?>" > </div>
                            <div class="one columns"><label for="weight" style="text-align: left"><b>Kg</b></label></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="dimension_d">Dimensions (D)</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="dimension_d" name="dimension_d" value="<?php echo $rowForm['ps_dimension_d']; ?>" > </div>
                            <div class="one columns"><label for="dimension_d" style="text-align: left"><b>mm</b></label></div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="min_volt">Input voltage (facilities)</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="min_volt" name="min_volt" value="<?php echo $rowForm['input_voltage']; ?>" > </div>
                            <div class="one columns"><label for="min_volt" style="text-align: left"><b>V</b></label></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="dimension_h">Dimensions (H)</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="dimension_h" name="dimension_h" value="<?php echo $rowForm['ps_dimension_h']; ?>" > </div>
                            <div class="one columns"><label for="minTemp" style="text-align: left"><b>mm</b></label></div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="max_volt">Input voltage (facilities)</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="max_volt" name="max_volt" value="<?php echo $rowForm['input_voltage']; ?>" > </div>
                            <div class="one columns"><label for="max_volt" style="text-align: left"><b>V</b></label></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="remote_operation_capability">Remote operation capability</label></div>
                            <div class="three columns">
                                <select id="remote_operation_capability" name="remote_operation_capability" style="width: 100%" >
                                    <?php echo getDropdown('022', $rowForm['remote_operation']); ?>
                                </select>
                            </div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="pc_to_eqpt_interface">PS to eqpt interface</label></div>
                            <div class="three columns">
                                <select id="pc_to_eqpt_interface" name="pc_to_eqpt_interface" style="width: 100%" >
                                    <?php echo getDropdown('027', $rowForm['eqpt_interface']); ?>
                                </select>
                            </div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="output_voltage_monitor">Output voltage monitor</label></div>
                            <div class="three columns">
                                <select id="output_voltage_monitor" name="output_voltage_monitor" style="width: 100%" >
                                    <?php echo getDropdown('022', $rowForm['voltage_monitor']); ?>
                                </select>
                            </div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="output_curr_monitor">Output current monitor </label></div>
                            <div class="three columns">
                                <select id="output_curr_monitor" name="output_curr_monitor" style="width: 100%" >
                                    <?php echo getDropdown('022', $rowForm['current_monitor']); ?>
                                </select>
                            </div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns">
                                <label for="lan_port">LAN Port</label>
                                <label for="toggle_3" class="view-image">Image</label>
                                <input type="checkbox" id="toggle_3">
                                <dialog>
                                    <label for="toggle_3" style="color:orange"><i class='bx bx-x bx-fw'></i> close</label>
                                    <img id="myImg" src="../image/powersupply/001.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                </dialog>
                            </div>
                            <div class="three columns">
                                <select id="lan_port" name="lan_port" style="width: 100%" >
                                    <?php echo getDropdown('022', $rowForm['lan_port']); ?>
                                </select>
                            </div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns">
                                <label for="gpib_interface">GPIB interface</label>
                                <label for="toggle_4" class="view-image">Image</label>
                                <input type="checkbox" id="toggle_4">
                                <dialog>
                                    <label for="toggle_4" style="color:orange"><i class='bx bx-x bx-fw'></i> close</label>
                                    <img id="myImg" src="../image/powersupply/002.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                </dialog>
                            </div>
                            <div class="three columns">
                                <select id="gpib_interface" name="gpib_interface" style="width: 100%" >
                                    <?php echo getDropdown('022', $rowForm['gpib_interface']); ?>
                                </select>
                            </div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row" >
                            <div class="two columns">
                                <label for="other_interface_port">Other interface ports</label>
                                <label for="toggle_2" class="view-image">Image</label>
                                <input type="checkbox" id="toggle_2">
                                <dialog>
                                    <label for="toggle_2" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                                    <img id="myImg" src="../image/powersupply/003.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                </dialog>
                            </div>
                            <div class="three columns">
                                <select id="other_interface_port" name="other_interface_port" style="width: 100%" >
                                    <?php echo getDropdown('029', $rowForm['other_interface']); ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    <div class="tab-content" id="tabCapacity">
                        <div class="row">
                            <div class="two columns">
                                <label for="no_output_channel">Number of output channels</label>
                                <label for="toggle_1" class="view-image">Image</label>
                                <input type="checkbox" id="toggle_1">
                                <dialog>
                                    <label for="toggle_1" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                                    <img id="myImg" src="../image/powersupply/004.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                </dialog>
                            </div>
                            <div class="two columns"><input type="number" step="0.001" id="no_output_channel" name="no_output_channel" value="<?php echo $rowForm['no_output']; ?>" > </div>
                            <div class="one columns"><label for="no_output_channel" style="text-align: left"><b>V</b></label></div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
            <button onclick="location.href = '../list/list_power_supply.php'" type="button" id="listBtn"><i class='bx bx-list-ol bx-fw' ></i> List</button>
            <button type="submit" id="draft-button" name="draft-button" class="btn"><i class='bx bx-send bx-fw' ></i> DRAFT</button>
            <button type="submit" id="save-button" name="save-button" class="btn btn-primary"><i class='bx bx-send bx-fw' ></i> COPY</button>
        </form>
        <script src="../js/jquery-3.7.0.js" ></script>
        <script>
            const tabs = document.getElementById('tabs');
            const tabContents = document.querySelectorAll('.tab-content');
            const form = document.getElementById('copy_power_form');
            const draftButton = document.getElementById('draft-button');
            const saveButton = document.getElementById('save-button');
            
            $( document ).ready(function() {
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
                        saveButton.style.display = 'block';
                        draftButton.style.display = 'none';
                    } else {
                        draftButton.style.display = 'block';
                        saveButton.style.display = 'none';
                    }
                } else {
                    draftButton.style.display = 'none';
                    saveButton.style.display = 'none';
                }
            });
        </script>
    </body>
</html>