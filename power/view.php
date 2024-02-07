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
            
            #backBtn {
                display: block;
                position: fixed;
                top: 20px;
                right: 190px;
                z-index: 99;
                font-size: 18px;
                outline: none;
                cursor: pointer;
            }

            #backBtn:hover {
                background-color: orange;
                color: white;
            }
            
            #editBtn {
                display: block;
                position: fixed;
                top: 20px;
                right: 40px;
                z-index: 99;
                font-size: 18px;
                outline: none;
                cursor: pointer;
            }

            #editBtn:hover {
                background-color: orange;
                color: white;
            }
        </style>
        
        <script type="text/javascript">

        </script>
    </head>
        
    <body>
        <form id="view_power_form" action="" method="get">
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
                            <input type="text" id="lab_location" name="lab_location" value="<?php echo getParameterValue($rowForm['lab_location']); ?>" required readonly />
                        </div>
                        <div class="one columns">&nbsp;</div>
                        <div class="two columns label"><label for="strategy">Product Group *</label></div>
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
                                <input type="text" id="manufacturer" name="manufacturer" value="<?php echo getParameterValue($rowForm['manufacturer']); ?>" required readonly />
                            </div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="model">Model *</label></div>
                            <div class="three columns">
                                <input type="text" id="model" name="model" value="<?php echo getParameterValue($rowForm['model']); ?>" required readonly />
                            </div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                    </div>
                    
                    <div class="tab-content" id="tabCapability">
                        <div class="row">
                            <div class="two columns"><label for="volt_rating">Voltage Rating</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="volt_rating" name="volt_rating" value="<?php echo $rowForm['voltage_rating']; ?>" required readonly> </div>
                            <div class="one columns"><b>V</b></div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="curr_rating">Current Rating</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="curr_rating" name="curr_rating" value="<?php echo $rowForm['current_rating']; ?>" required readonly> </div>
                            <div class="one columns"><b>&#176;C</b></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="max_power">Max Power</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="max_power" name="max_power" value="<?php echo $rowForm['max_power']; ?>" required readonly> </div>
                            <div class="one columns"><b>W</b></div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="volt_display_digit">Number of voltage display digits</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="volt_display_digit" name="volt_display_digit" value="<?php echo $rowForm['no_voltage_display']; ?>" required readonly> </div>
                            <div class="one columns"><b></b></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="curr_display_digit">Number of current display digits</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="curr_display_digit" name="curr_display_digit" value="<?php echo $rowForm['no_current_display']; ?>" required readonly> </div>
                            <div class="one columns"><b>&nbsp;</b></div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="volt_protection">Overvoltage protection</label></div>
                            <div class="three columns">
                                <input type="text" id="lab_location" name="lab_location" value="<?php echo getParameterValue($rowForm['ovp']); ?>" required readonly />
                            </div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="curr_protection">Overcurrent protection</label></div>
                            <div class="three columns">
                                <input type="text" id="lab_location" name="lab_location" value="<?php echo getParameterValue($rowForm['ocp']); ?>" required readonly />
                            </div>
                        </div>
                    </div>
                    
                    <div class="tab-content" id="tabCharacter">
                        <div class="row">
                            <div class="two columns"><label for="dimension_w">Dimensions (W)</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="dimension_w" name="dimension_w" value="<?php echo $rowForm['ps_dimension_w']; ?>" required readonly> </div>
                            <div class="one columns"><label for="dimension_w" style="text-align: left"><b>mm</b></label></div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="weight">Weight (kg)</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="weight" name="weight" value="<?php echo $rowForm['weight']; ?>" required readonly> </div>
                            <div class="one columns"><label for="weight" style="text-align: left"><b>Kg</b></label></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="dimension_d">Dimensions (D)</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="dimension_d" name="dimension_d" value="<?php echo $rowForm['ps_dimension_d']; ?>" required readonly> </div>
                            <div class="one columns"><label for="dimension_d" style="text-align: left"><b>mm</b></label></div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="min_volt">Min Input Voltage (Facilities)</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="min_volt" name="min_volt" value="<?php echo $rowForm['min_voltage']; ?>" required readonly> </div>
                            <div class="one columns"><label for="min_volt" style="text-align: left"><b>V</b></label></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="dimension_h">Dimensions (H)</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="dimension_h" name="dimension_h" value="<?php echo $rowForm['ps_dimension_h']; ?>" required readonly> </div>
                            <div class="one columns"><label for="dimension_h" style="text-align: left"><b>mm</b></label></div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="max_volt">Max Input Voltage (Alternative)</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="max_volt" name="max_volt" value="<?php echo $rowForm['max_voltage']; ?>" required readonly> </div>
                            <div class="one columns"><label for="max_volt" style="text-align: left"><b>V</b></label></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="remote_operation_capability">Remote operation capability</label></div>
                            <div class="three columns">
                                <input type="text" id="lab_location" name="lab_location" value="<?php echo getParameterValue($rowForm['remote_operation']); ?>" required readonly />
                            </div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="pc_to_eqpt_interface">PS to eqpt interface</label></div>
                            <div class="three columns">
                                <input type="text" id="lab_location" name="lab_location" value="<?php echo getParameterValue($rowForm['eqpt_interface']); ?>" required readonly />
                            </div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="output_voltage_monitor">Output voltage monitor</label></div>
                            <div class="three columns">
                                <input type="text" id="lab_location" name="lab_location" value="<?php echo getParameterValue($rowForm['voltage_monitor']); ?>" required readonly />
                            </div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="output_curr_monitor">Output current monitor </label></div>
                            <div class="three columns">
                                <input type="text" id="lab_location" name="lab_location" value="<?php echo getParameterValue($rowForm['current_monitor']); ?>" required readonly />
                            </div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="lan_port">LAN Port</label></div>
                            <div class="three columns">
                                <input type="text" id="lab_location" name="lab_location" value="<?php echo getParameterValue($rowForm['lan_port']); ?>" required readonly />
                            </div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns">
                                <label for="gpib_interface">GPIB interface</label>
                            </div>
                            <div class="three columns">
                                <input type="text" id="lab_location" name="lab_location" value="<?php echo getParameterValue($rowForm['gpib_interface']); ?>" required readonly />
                            </div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="other_interface_port">Other interface ports</label></div>
                            <div class="three columns">
                                <input type="text" id="lab_location" name="lab_location" value="<?php echo getParameterValue($rowForm['other_interface']); ?>" required readonly />
                            </div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                    </div>
                    
                    <div class="tab-content" id="tabCapacity">
                        <div class="row">
                            <div class="two columns">
                                <label for="no_output_channel">Number of output channels</label>
                            </div>
                            <div class="two columns"><input type="number" step="0.001" id="no_output_channel" name="no_output_channel" value="<?php echo $rowForm['no_output']; ?>" required readonly> </div>
                            <div class="one columns"><label for="no_output_channel" style="text-align: left"><b>V</b></label></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
            <button onclick="location.href = '../list/list_power_supply.php'" type="button" id="backBtn"><i class='bx bxs-chevron-left bx-fw' ></i> Back</button>
            <button onclick="location.href = 'edit.php?edit=<?php echo $id; ?>'" type="button" id="editBtn"><i class='bx bxs-pencil bx-fw' ></i> Edit</button>
        </form>
        
        <script src="../js/jquery-3.7.0.js"></script>
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