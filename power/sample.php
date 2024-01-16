<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

include '../template/form.php';
include '../class/get_parameter.php';
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
    
    <script src="../js/jquery-3.7.0.js"></script>
    <script src="../js/multiselect-dropdown.js" ></script>
    
    <head>
        <style>
            h5, h6 {
               border-left: none; 
            }
            
            body {
                margin: 0;
                padding: 0;
                height: 90vh;
            }

            #main-page {
                position: relative;
                top: 0;
                left: 0;
                width: 100%;
                height: 30%;
                background-color: #f2f2f2;
                padding: 20px;
            }

            #content-page {
                position: relative;
                top: 30%;
                left: 0;
                width: 100%;
                max-height: 70%;
                background-color: #fff;
                padding: 20px;
                overflow-x: visible;
            }

            #tabs {
                display: flex;
                list-style: none;
                margin: 0;
                padding: 0;
            }

            #tabs li {
                margin-right: 10px;
                padding: 10px;
                /*border: 1px solid #ccc;*/
                cursor: pointer;
            }

            #tabs li.active {
                background-color: orange;
                border-radius: 5px;
            }

            .tab-content {
                display: none;
                padding: 20px;
            }

            .tab-content.active {
                display: block;
            }
            
            #listBtn {
                display: block;
                position: fixed;
                top: 20px;
                right: 40px;
                z-index: 99;
                font-size: 18px;
                border: none;
                outline: none;
                cursor: pointer;
            }

            #listBtn:hover {
                background-color: orange;
                color: white;
            }
            
            #save-button {
                display: block;
                position: fixed;
                top: 20px;
                right: 160px;
                z-index: 99;
                font-size: 18px;
                border: none;
                outline: none;
                cursor: pointer;
            }

            #save-button:hover {
                background-color: orange;
                color: white;
            }
            
            #draft-button {
                display: block;
                position: fixed;
                top: 20px;
                right: 160px;
                z-index: 99;
                font-size: 18px;
                border: none;
                outline: none;
                cursor: pointer;
            }
            
            #toggle_1, #toggle_2, #toggle_3, #toggle_4{
                visibility: hidden;
                opacity: 0;
                position: relative;
                z-index: -1;
            }

            #toggle_1:checked ~ dialog, #toggle_2:checked ~ dialog, #toggle_3:checked ~ dialog, #toggle_4:checked ~ dialog {
                position: absolute;
                top: 50%;
                transform: translate(0, -50%);
                text-align: left;
                display: flex;
                flex-direction: column;
            }
        </style>

        <script type="text/javascript">

        </script>
    </head>
    <body>
        <form id="add_power_form" action="../crud/crud_add_power.php" method="get">
            
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
                    <div class="two columns label"><label for="strategy">Product Group *</label></div>
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
                            <?php echo getDropdown('004', '004004'); ?>
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
                            <input type="text" list="manufacturer_list" autocomplete="off" id="manufacturer" name="manufacturer" required>
                            <datalist id="manufacturer_list">
                                <?php echo getDataList('039', ''); ?>
                            </datalist>
                        </div>
                        <div class="one columns">&nbsp;</div>
                        <div class="two columns"><label for="model">Model *</label></div>
                        <div class="three columns">
                            <input type="text" list="model_list" autocomplete="off" id="model" name="model" required>
                            <datalist id="model_list">
                                <?php echo getDataList('040', ''); ?>
                            </datalist>
                        </div>
                        <div class="one columns">&nbsp;</div>
                    </div>
                </div>
                
                <div class="tab-content" id="tabCapability">
                    <div class="row">
                        <div class="two columns"><label for="volt_rating">Voltage Rating *</label></div>
                        <div class="two columns"><input type="number" step="0.001" id="volt_rating" name="volt_rating" value="" > </div>
                        <div class="one columns"><b>V</b></div>
                        <div class="one columns">&nbsp;</div>
                        <div class="two columns"><label for="curr_rating">Current Rating *</label></div>
                        <div class="two columns"><input type="number" step="0.001" id="curr_rating" name="curr_rating" value="" > </div>
                        <div class="one columns"><b>&#176;C</b></div>
                        <div class="one columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="max_power">Max Power *</label></div>
                        <div class="two columns"><input type="number" step="0.001" id="max_power" name="max_power" value="" > </div>
                        <div class="one columns"><b>W</b></div>
                        <div class="one columns">&nbsp;</div>
                        <div class="two columns"><label for="volt_display_digit">Number of voltage display digits *</label></div>
                        <div class="two columns"><input type="number" step="0.001" id="volt_display_digit" name="volt_display_digit" value="" > </div>
                        <div class="one columns"><b></b></div>
                        <div class="one columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="curr_display_digit">Number of current display digits *</label></div>
                        <div class="two columns"><input type="number" step="0.001" id="curr_display_digit" name="curr_display_digit" value="" > </div>
                        <div class="one columns"><b>&nbsp;</b></div>
                        <div class="one columns">&nbsp;</div>
                        <div class="two columns"><label for="volt_protection">Overvoltage protection *</label></div>
                        <div class="three columns">
                            <select id="volt_protection" name="volt_protection" style="width: 100%" >
                                <?php echo getDropdown('022', ''); ?>
                            </select>
                        </div>
                        <div class="one columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="curr_protection">Overcurrent protection *</label></div>
                        <div class="three columns">
                            <select id="curr_protection" name="curr_protection" style="width: 100%" >
                                <?php echo getDropdown('022', ''); ?>
                            </select>
                        </div>
                    </div>
                </div>
                
                <div class="tab-content" id="tabCharacter">
                    <div class="row">
                        <div class="two columns"><label for="dimension_w">Dimensions (W) *</label></div>
                        <div class="two columns"><input type="number" step="0.001" id="dimension_w" name="dimension_w" value="" > </div>
                        <div class="one columns"><label for="dimension_w" style="text-align: left"><b>mm</b></label></div>
                        <div class="one columns">&nbsp;</div>
                        <div class="two columns"><label for="weight">Weight (kg) *</label></div>
                        <div class="two columns"><input type="number" step="0.001" id="weight" name="weight" value="" > </div>
                        <div class="one columns"><label for="weight" style="text-align: left"><b>Kg</b></label></div>
                        <div class="one columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="dimension_d">Dimensions (D) *</label></div>
                        <div class="two columns"><input type="number" step="0.001" id="dimension_d" name="dimension_d" value="" > </div>
                        <div class="one columns"><label for="dimension_d" style="text-align: left"><b>mm</b></label></div>
                        <div class="one columns">&nbsp;</div>
                        <div class="two columns"><label for="min_volt">Min Input Voltage (Facilities) *</label></div>
                        <div class="two columns"><input type="number" step="0.001" id="min_volt" name="min_volt" value="" > </div>
                        <div class="one columns"><label for="min_volt" style="text-align: left"><b>V</b></label></div>
                        <div class="one columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="dimension_h">Dimensions (H) *</label></div>
                        <div class="two columns"><input type="number" step="0.001" id="dimension_h" name="dimension_h" value="" > </div>
                        <div class="one columns"><label for="dimension_h" style="text-align: left"><b>mm</b></label></div>
                        <div class="one columns">&nbsp;</div>
                        <div class="two columns"><label for="max_volt">Max Input Voltage (Alternative) *</label></div>
                        <div class="two columns"><input type="number" step="0.001" id="max_volt" name="max_volt" value="" > </div>
                        <div class="one columns"><label for="max_volt" style="text-align: left"><b>V</b></label></div>
                        <div class="one columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="remote_operation_capability">Remote operation capability *</label></div>
                        <div class="three columns">
                            <select id="remote_operation_capability" name="remote_operation_capability" style="width: 100%" >
                                <?php echo getDropdown('022', ''); ?>
                            </select>
                        </div>
                        <div class="one columns">&nbsp;</div>
                        <div class="two columns"><label for="pc_to_eqpt_interface">PS to eqpt interface *</label></div>
                        <div class="three columns">
                            <select id="pc_to_eqpt_interface" name="pc_to_eqpt_interface" style="width: 100%" >
                                <?php echo getDropdown('027', ''); ?>
                            </select>
                        </div>
                        <div class="one columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="output_voltage_monitor">Output voltage monitor *</label></div>
                        <div class="three columns">
                            <select id="output_voltage_monitor" name="output_voltage_monitor" style="width: 100%" >
                                <?php echo getDropdown('022', ''); ?>
                            </select>
                        </div>
                        <div class="one columns">&nbsp;</div>
                        <div class="two columns"><label for="output_curr_monitor">Output current monitor  *</label></div>
                        <div class="three columns">
                            <select id="output_curr_monitor" name="output_curr_monitor" style="width: 100%" >
                                <?php echo getDropdown('022', ''); ?>
                            </select>
                        </div>
                        <div class="one columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns">
                            <label for="lan_port">LAN Port *</label>
                            <label for="toggle_3" class="view-image">Image</label>
                            <input type="checkbox" id="toggle_3">
                            <dialog>
                                <label for="toggle_3" style="color:orange"><i class='bx bx-x bx-fw'></i> close</label>
                                <img id="myImg" src="../image/powersupply/001.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                            </dialog>
                        </div>
                        <div class="three columns">
                            <select id="lan_port" name="lan_port" style="width: 100%" >
                                <?php echo getDropdown('022', ''); ?>
                            </select>
                        </div>
                        <div class="one columns">&nbsp;</div>
                        <div class="two columns">
                            <label for="gpib_interface">GPIB interface *</label>
                            <label for="toggle_4" class="view-image">Image</label>
                            <input type="checkbox" id="toggle_4">
                            <dialog>
                                <label for="toggle_4" style="color:orange"><i class='bx bx-x bx-fw'></i> close</label>
                                <img id="myImg" src="../image/powersupply/002.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                            </dialog>
                        </div>
                        <div class="three columns">
                            <select id="gpib_interface" name="gpib_interface" style="width: 100%" >
                                <?php echo getDropdown('022', ''); ?>
                            </select>
                        </div>
                        <div class="one columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns">
                            <label for="other_interface_port">Other interface ports *</label>
                            <label for="toggle_2" class="view-image">Image</label>
                            <input type="checkbox" id="toggle_2">
                            <dialog>
                                <label for="toggle_2" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                                <img id="myImg" src="../image/powersupply/003.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                            </dialog>
                        </div>
                        <div class="three columns">
                            <select id="other_interface_port" name="other_interface_port" style="width: 100%" >
                                <?php echo getDropdown('029', ''); ?>
                            </select>
                        </div>
                    </div>
                </div>
                
                <div class="tab-content" id="tabCapacity">
                    <div class="row">
                        <div class="two columns">
                            <label for="no_output_channel">Number of output channels *</label>
                            <label for="toggle_1" class="view-image">Image</label>
                            <input type="checkbox" id="toggle_1">
                            <dialog>
                                <label for="toggle_1" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                                <img id="myImg" src="../image/powersupply/004.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                            </dialog>
                        </div>
                        <div class="two columns"><input type="number" step="0.001" id="no_output_channel" name="no_output_channel" value="" > </div>
                        <div class="one columns"><label for="no_output_channel" style="text-align: left"><b>V</b></label></div>
                    </div>
                </div>
                
            </div>
            
            <button type="submit" id="draft-button" class="btn"><i class='bx bx-send bx-fw' ></i> DRAFT</button>
            <button type="submit" id="save-button" class="btn"><i class='bx bx-send bx-fw' ></i> SAVE</button>
            <button onclick="location.href = '../list/list_power_supply.php'" type="button" id="listBtn" class="btn"><i class='bx bx-list-ol bx-fw' ></i>List</button>
        </form>
        
        <script src="../js/jquery-3.7.0.js"></script>
        <script>
            const tabs = document.getElementById('tabs');
            const tabContents = document.querySelectorAll('.tab-content');
            const form = document.getElementById('add_power_form');
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
                        console.log("KAT SINI ADA SAVE BUTTON");
                        saveButton.style.display = 'block';
                        draftButton.style.display = 'none';
                    } else {
                        console.log("SINI DAH DRAFT SAHAJA");
                        draftButton.style.display = 'block';
                        saveButton.style.display = 'none';
                    }
                } else {
                    console.log("SILA ISI MAKLUMAT");
                    draftButton.style.display = 'none';
                    saveButton.style.display = 'none';
                }
            });
        </script>
    </body>
</html>