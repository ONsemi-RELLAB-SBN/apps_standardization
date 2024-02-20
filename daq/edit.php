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
        <link rel="stylesheet" href="daq.css"/>
    </head>

    <body>
        <form id="update_daq_form" role="form" action="../crud/crud_update_daq.php" method="get">
        <input type="hidden" id="id" name="id" value="<?php echo $id; ?>">
            <?php
            $sqlFormData = "SELECT * FROM gest_form_daq WHERE id = '$id'";
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
                        <div class="two columns"><label for="strategy">Product Group *</label></div>
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
                        <li class="active" data-tab="tabIdentity">Hardware Identity</li>
                        <li data-tab="tabCapacity">Capacity</li>
                        <li data-tab="tabCapability">Capability</li>
                        <li data-tab="tabCharacter">Characteristics</li>
                    </ul>

                    <div class="tab-content active" id="tabIdentity">
                        <div class="row">
                            <div class="two columns"><label for="manufacturer">Manufacturer *</label></div>
                            <div class="three columns">
                                <input type="text" list="manufacturer_list" autocomplete="off" id="manufacturer" name="manufacturer" value="<?php echo getParameterValue($rowForm['manufacturer']); ?>" required>
                                <datalist id="manufacturer_list">
                                    <?php echo getDataList('025', $rowForm['manufacturer']); ?>
                                </datalist>
                            </div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="model">Model *</label></div>
                            <div class="three columns">
                                <input type="text" list="model_list" autocomplete="off" id="model" name="model" value="<?php echo getParameterValue($rowForm['model']); ?>" required>
                                <datalist id="model_list">
                                    <?php echo getDataList('026', $rowForm['model']); ?>
                                </datalist>
                            </div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="daq_id">DAQ ID *</label></div>
                            <div class="three columns">
                                <input type="text" list="daq_list" autocomplete="off" id="daq_id" name="daq_id" value="<?php echo getParameterValue($rowForm['daq_id']); ?>" required>
                                <datalist id="daq_list">
                                    <?php echo getDataList('024', $rowForm['daq_id']); ?>
                                </datalist>
                            </div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                    </div>

                    <div class="tab-content" id="tabCapacity">
                        <div class="row">
                            <div class="two columns"><label for="no_temp_channel">Number of temperature channels</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="no_temp_channel" name="no_temp_channel" value="<?php echo $rowForm['no_temp_channel']; ?>" > </div>
                            <div class="one columns"><label for="no_temp_channel" style="text-align: left"><b>&nbsp;</b></label></div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="no_volt_channel">Number of voltage channels</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="no_volt_channel" name="no_volt_channel" value="<?php echo $rowForm['no_voltage_channel']; ?>" > </div>
                            <div class="one columns"><label for="no_volt_channel" style="text-align: left"><b>&nbsp;</b></label></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="no_leakage_channel">Number of leakage channels</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="no_leakage_channel" name="no_leakage_channel" value="<?php echo $rowForm['no_leakage_channel']; ?>" > </div>
                            <div class="one columns"><label for="no_leakage_channel" style="text-align: left"><b>&nbsp;</b></label></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                    </div>

                    <div class="tab-content" id="tabCapability">
                        <div class="row">
                            <div class="two columns"><label for="max_voltage">Max voltage measurement capability</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="max_voltage" name="max_voltage" value="<?php echo $rowForm['max_voltage_measure']; ?>" > </div>
                            <div class="one columns"><label for="max_voltage" style="text-align: left"><b>V</b></label></div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="min_voltage">Min voltage measurement capability</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="min_voltage" name="min_voltage" value="<?php echo $rowForm['min_voltage_measure']; ?>" > </div>
                            <div class="one columns"><label for="min_voltage" style="text-align: left"><b>mV</b></label></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="max_leakage">Max leakage current measurement range</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="max_leakage" name="max_leakage" value="<?php echo $rowForm['max_leakage_measure']; ?>" > </div>
                            <div class="one columns"><label for="max_leakage" style="text-align: left"><b>A</b></label></div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="min_leakage">Min leakage current measurement range</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="min_leakage" name="min_leakage" value="<?php echo $rowForm['min_leakage_measure']; ?>" > </div>
                            <div class="one columns"><label for="min_leakage" style="text-align: left"><b>&#181A</b></label></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="max_temp">Max temperature measurement capability</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="max_temp" name="max_temp" value="<?php echo $rowForm['max_temp_measure']; ?>" > </div>
                            <div class="one columns"><label for="max_temp" style="text-align: left"><b>&#8451;</b></label></div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="min_temp">Min temperature measurement capability</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="min_temp" name="min_temp" value="<?php echo $rowForm['min_temp_measure']; ?>" > </div>
                            <div class="one columns"><label for="min_temp" style="text-align: left"><b>&#8451;</b></label></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="display_volt_drop">Display Rdaq Voltage Drop</label></div>
                            <div class="three columns">
                                <select id="display_volt_drop" name="display_volt_drop" style="width: 100%" readonly >
                                    <?php echo getDropdown('020', $rowForm['rdaq_voltage_drop']); ?>
                                </select>
                            </div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="board_insert_check">Board Insert Check</label></div>
                            <div class="three columns">
                                <select id="board_insert_check" name="board_insert_check" style="width: 100%" onchange="updateToField()"  >
                                    <?php echo getDropdown('020', $rowForm['board_insert_check']); ?>
                                </select>
                            </div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="measure_prior_start_test">Rdaq Measurement prior start the test</label></div>
                            <div class="three columns">
                                <select id="measure_prior_start_test" name="measure_prior_start_test" style="width: 100%" onchange="updateToField()"  >
                                    <?php echo getDropdown('020', $rowForm['rdaq_measure_start']); ?>
                                </select>
                            </div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="scan_time">Scan Time</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="scan_time" name="scan_time" value="<?php echo $rowForm['scan_time'] ?>" > </div>
                            <div class="one columns"><label for="scan_time" style="text-align: left"><b>s</b></label></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="leakage_measure_reso">Leakage measurement resolution</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="leakage_measure_reso" name="leakage_measure_reso" value="<?php echo $rowForm['leakage_measure_resolution']; ?>" > </div>
                            <div class="one columns"><label for="leakage_measure_reso" style="text-align: left"><b>A</b></label></div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="leakage_measure_accuracy">Leakage measurement accuracy</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="leakage_measure_accuracy" name="leakage_measure_accuracy" value="<?php echo $rowForm['leakage_measure_accuracy']; ?>" > </div>
                            <div class="one columns"><label for="leakage_measure_accuracy" style="text-align: left"><b>&nbsp;</b></label></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns">
                                <label for="volt_measure_reso">Voltage measurement resolution</label>
                                <label for="toggle_01" class="view-image">Image</label>
                                <input type="checkbox" id="toggle_01">
                                <dialog>
                                    <label for="toggle_01" style="color:red"><i class='bx bx-x bx-fw'></i> close</label>
                                    <img id="myImg" src="../image/daq/001.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                </dialog>
                            </div>
                            <div class="two columns"><input type="number" step="0.001" id="volt_measure_reso" name="volt_measure_reso" value="<?php echo $rowForm['voltage_measure_resolution']; ?>" > </div>
                            <div class="one columns"><label for="volt_measure_reso" style="text-align: left"><b>&nbsp;</b></label></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns">
                                <label for="offline_data_plot">Offline software to review historical data and plotting with data analysis</label>
                                <label for="toggle_02" class="view-image">Image</label>
                                <input type="checkbox" id="toggle_02">
                                <dialog>
                                    <label for="toggle_02" style="color:red"><i class='bx bx-x bx-fw'></i> close</label>
                                    <img id="myImg" src="../image/daq/002.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                </dialog>
                            </div>
                            <div class="three columns">
                                <select id="offline_data_plot" name="offline_data_plot" style="width: 100%" >
                                    <?php echo getDropdown('022', $rowForm['data_plot']); ?>
                                </select>
                            </div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns">
                                <label for="measure_type_hardware">Measurement type for hardware design</label>
                                <label for="toggle_03" class="view-image">Image</label>
                                <input type="checkbox" id="toggle_03">
                                <dialog>
                                    <label for="toggle_03" style="color:red"><i class='bx bx-x bx-fw'></i> close</label>
                                    <img id="myImg" src="../image/daq/003.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                </dialog>
                            </div>
                            <div class="three columns">
                                <select id="measure_type_hardware" name="measure_type_hardware" style="width: 100%" >
                                    <?php echo getDropdown('033', $rowForm['hw_design']); ?>
                                </select>
                            </div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                    </div>

                    <div class="tab-content" id="tabCharacter">
                        <div class="row">
                            <div class="two columns">
                                <label for="analog_input_single">Number of analog inputs (single ended)</label>
                                <label for="toggle_040" class="view-image">Image</label>
                                <input type="checkbox" id="toggle_040">
                                <dialog>
                                    <label for="toggle_040" style="color:red"><i class='bx bx-x bx-fw'></i> close</label>
                                    <img id="myImg" src="../image/daq/004_0.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                </dialog>
                            </div>
                            <div class="two columns"><input type="number" step="0.001" id="analog_input_single" name="analog_input_single" value="<?php echo $rowForm['no_analog_input_single']; ?>" > </div>
                            <div class="one columns"><label for="analog_input_single" style="text-align: left"><b>V</b></label></div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns">
                                <label for="analog_input_diff">Number of analog inputs (differential)</label>
                                <label for="toggle_041" class="view-image">Image</label>
                                <input type="checkbox" id="toggle_041">
                                <dialog>
                                    <label for="toggle_041" style="color:red"><i class='bx bx-x bx-fw'></i> close</label>
                                    <img id="myImg" src="../image/daq/004_1.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                </dialog>
                            </div>
                            <div class="two columns"><input type="number" step="0.001" id="analog_input_diff" name="analog_input_diff" value="<?php echo $rowForm['no_analog_input_diff']; ?>"> </div>
                            <div class="one columns"><label for="analog_input_diff" style="text-align: left"><b>V</b></label></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns">
                                <label for="resolution">Resolution</label>
                                <label for="toggle_042" class="view-image">Image</label>
                                <input type="checkbox" id="toggle_042">
                                <dialog>
                                    <label for="toggle_042" style="color:red"><i class='bx bx-x bx-fw'></i> close</label>
                                    <img id="myImg" src="../image/daq/004_2.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                </dialog>
                            </div>
                            <div class="two columns"><input type="number" step="0.001" id="resolution" name="resolution" value="<?php echo $rowForm['resolution']; ?>"> </div>
                            <div class="one columns"><label for="resolution" style="text-align: left"><b>&nbsp;</b></label></div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns">
                                <label for="sampling_frequency">Sampling frequency</label>
                                <label for="toggle_050" class="view-image">Image</label>
                                <input type="checkbox" id="toggle_050">
                                <dialog>
                                    <label for="toggle_050" style="color:red"><i class='bx bx-x bx-fw'></i> close</label>
                                    <img id="myImg" src="../image/daq/005_0.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                </dialog>
                            </div>
                            <div class="two columns"><input type="number" step="0.001" id="sampling_frequency" name="sampling_frequency" value="<?php echo $rowForm['sampling_freq']; ?>"> </div>
                            <div class="one columns"><label for="sampling_frequency" style="text-align: left"><b>s</b></label></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns">
                                <label for="supported_eqpt">Supported eqpt</label>
                                <label for="toggle_051" class="view-image">Image</label>
                                <input type="checkbox" id="toggle_051">
                                <dialog>
                                    <label for="toggle_051" style="color:red"><i class='bx bx-x bx-fw'></i> close</label>
                                    <img id="myImg" src="../image/daq/005_1.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                </dialog>
                            </div>
                            <div class="three columns">
                                <select id="supported_eqpt" name="supported_eqpt" style="width: 100%" >
                                    <?php echo getDropdown('034', $rowForm['supported_eqpt']); ?>
                                </select>
                            </div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns">
                                <label for="hw_resistence_measure">Hardware for resistance measurement</label>
                                <label for="toggle_052" class="view-image">Image</label>
                                <input type="checkbox" id="toggle_052">
                                <dialog>
                                    <label for="toggle_052" style="color:red"><i class='bx bx-x bx-fw'></i> close</label>
                                    <img id="myImg" src="../image/daq/005_2.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                </dialog>
                            </div>
                            <div class="three columns">
                                <select id="hw_resistence_measure" name="hw_resistence_measure" style="width: 100%" >
                                    <?php echo getDropdown('035', $rowForm['hw_resistance_measure']); ?>
                                </select>
                            </div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns">
                                <label for="hw_volt_measure">Hardware for voltage measurement</label>
                                <label for="toggle_06" class="view-image">Image</label>
                                <input type="checkbox" id="toggle_06">
                                <dialog>
                                    <label for="toggle_06" style="color:red"><i class='bx bx-x bx-fw'></i> close</label>
                                    <img id="myImg" src="../image/daq/006.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                </dialog>
                            </div>
                            <div class="three columns">
                                <select id="hw_volt_measure" name="hw_volt_measure" style="width: 100%" >
                                    <?php echo getDropdown('036', $rowForm['hw_voltage_measure']); ?>
                                </select>
                            </div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns">
                                <label for="hw_temp_measure">Hardware for temperature measurement</label>
                                <label for="toggle_070" class="view-image">Image</label>
                                <input type="checkbox" id="toggle_070">
                                <dialog>
                                    <label for="toggle_070" style="color:red"><i class='bx bx-x bx-fw'></i> close</label>
                                    <img id="myImg" src="../image/daq/007_0.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                </dialog>
                            </div>
                            <div class="three columns">
                                <select id="hw_temp_measure" name="hw_temp_measure" style="width: 100%" >
                                    <?php echo getDropdown('037', $rowForm['hw_temp_measure']); ?>
                                </select>
                            </div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns">
                                <label for="daq_eqpt_interface">DAQ to Eqpt Interface</label>
                                <label for="toggle_071" class="view-image">Image</label>
                                <input type="checkbox" id="toggle_071">
                                <dialog>
                                    <label for="toggle_071" style="color:red"><i class='bx bx-x bx-fw'></i> close</label>
                                    <img id="myImg" src="../image/daq/007_1.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                </dialog>
                            </div>
                            <div class="three columns">
                                <select id="daq_eqpt_interface" name="daq_eqpt_interface" style="width: 100%" >
                                    <?php echo getDropdown('038', $rowForm['daq_eqpt_interface']); ?>
                                </select>
                            </div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns">
                                <label for="daq_ps_interface">DAQ to PS Interface</label>
                                <label for="toggle_072" class="view-image">Image</label>
                                <input type="checkbox" id="toggle_072">
                                <dialog>
                                    <label for="toggle_072" style="color:red"><i class='bx bx-x bx-fw'></i> close</label>
                                    <img id="myImg" src="../image/daq/007_2.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                </dialog>
                            </div>
                            <div class="three columns">
                                <select id="daq_ps_interface" name="daq_ps_interface" style="width: 100%" >
                                    <?php echo getDropdown('038', $rowForm['daq_ps_interface']); ?>
                                </select>
                            </div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                    </div>

                </div>
            <?php endwhile; ?>
            <button onclick="location.href = '../list/list_daq.php'" type="button" id="listBtn"><i class='bx bx-list-ol bx-fw' ></i> List</button>
            <button type="submit" id="draft-button" name="draft-button" class="btn"><i class='bx bx-send bx-fw' ></i> DRAFT</button>
            <button type="submit" id="save-button" name="save-button" class="btn btn-primary"><i class='bx bx-send bx-fw' ></i> UPDATE</button>
        </form>
        <script src="../js/jquery-3.7.0.js"></script>
        <script src="../js/accordian.js"></script>
        <script>
                const tabs = document.getElementById('tabs');
                const tabContents = document.querySelectorAll('.tab-content');
                const form = document.getElementById('update_daq_form');
                const draftButton = document.getElementById('draft-button');
                const saveButton = document.getElementById('save-button');

                $(document).ready(function () {
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