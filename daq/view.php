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
        <link rel="stylesheet" href="daq.css"/>
        <style>

        </style>

        <script type="text/javascript">

        </script>
    </head>

    <body>
        <form id="view_daq_form" role="form" action="" method="get">
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
                            <input type="text" id="lab_location" name="lab_location" value="<?php echo getParameterValue($rowForm['lab_location']); ?>" required readonly />
                        </div>
                        <div class="one columns">&nbsp;</div>
                        <div class="two columns label"><label for="strategy">onsemi Strategy *</label></div>
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
                        <div class="two columns"><label for="champion">Champion *</label></div>
                        <div class="three columns">
                            <input type="text" id="champion" name="champion" value="<?php echo getParameterValue($rowForm['champion']); ?>" required readonly />
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
                                <input type="text" id="manufacturer" name="manufacturer" value="<?php echo getParameterValue($rowForm['manufacturer']); ?>" required readonly />
                            </div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="model">Model *</label></div>
                            <div class="three columns">
                                <input type="text" id="model" name="model" value="<?php echo getParameterValue($rowForm['model']); ?>" required readonly />
                            </div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="daq_id">DAQ ID *</label></div>
                            <div class="three columns">
                                <input type="text" id="daq_id" name="daq_id" value="<?php echo getParameterValue($rowForm['daq_id']); ?>" required readonly />
                            </div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                    </div>

                    <div class="tab-content" id="tabCapacity">
                        <div class="row">
                            <div class="two columns"><label for="no_temp_channel">Number of temperature channels</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="no_temp_channel" name="no_temp_channel" value="<?php echo $rowForm['no_temp_channel']; ?>" required readonly> </div>
                            <div class="one columns"><label for="no_temp_channel" style="text-align: left"><b>&nbsp;</b></label></div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="no_volt_channel">Number of voltage channels</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="no_volt_channel" name="no_volt_channel" value="<?php echo $rowForm['no_voltage_channel']; ?>" required readonly> </div>
                            <div class="one columns"><label for="no_volt_channel" style="text-align: left"><b>&nbsp;</b></label></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="no_leakage_channel">Number of leakage channels</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="no_leakage_channel" name="no_leakage_channel" value="<?php echo $rowForm['no_leakage_channel']; ?>" required readonly> </div>
                            <div class="one columns"><label for="no_leakage_channel" style="text-align: left"><b>&nbsp;</b></label></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                    </div>

                    <div class="tab-content" id="tabCapability">
                        <div class="row">
                            <div class="two columns"><label for="max_voltage">Max voltage measurement capability</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="max_voltage" name="max_voltage" value="<?php echo $rowForm['max_voltage_measure']; ?>" required readonly> </div>
                            <div class="one columns"><label for="max_voltage" style="text-align: left"><b>V</b></label></div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="min_voltage">Min voltage measurement capability</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="min_voltage" name="min_voltage" value="<?php echo $rowForm['min_voltage_measure']; ?>" required readonly> </div>
                            <div class="one columns"><label for="min_voltage" style="text-align: left"><b>mV</b></label></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="max_leakage">Max leakage current measurement range</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="max_leakage" name="max_leakage" value="<?php echo $rowForm['max_leakage_measure']; ?>" required readonly> </div>
                            <div class="one columns"><label for="max_leakage" style="text-align: left"><b>A</b></label></div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="min_leakage">Min leakage current measurement range</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="min_leakage" name="min_leakage" value="<?php echo $rowForm['min_leakage_measure']; ?>" required readonly> </div>
                            <div class="one columns"><label for="min_leakage" style="text-align: left"><b>&#181A</b></label></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="max_temp">Max temperature measurement capability</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="max_temp" name="max_temp" value="<?php echo $rowForm['max_temp_measure']; ?>" required readonly> </div>
                            <div class="one columns"><label for="max_temp" style="text-align: left"><b>&#8451;</b></label></div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="min_temp">Min temperature measurement capability</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="min_temp" name="min_temp" value="<?php echo $rowForm['min_temp_measure']; ?>" required readonly> </div>
                            <div class="one columns"><label for="min_temp" style="text-align: left"><b>&#8451;</b></label></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="display_volt_drop">Display Rdaq Voltage Drop</label></div>
                            <div class="three columns">
                                <input type="text" id="display_volt_drop" name="display_volt_drop" value="<?php echo getParameterValue($rowForm['rdaq_voltage_drop']); ?>" required readonly />
                            </div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="board_insert_check">Board Insert Check</label></div>
                            <div class="three columns">
                                <input type="text" id="board_insert_check" name="board_insert_check" value="<?php echo getParameterValue($rowForm['board_insert_check']); ?>" required readonly />
                            </div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="measure_prior_start_test">Rdaq Measurement prior start the test</label></div>
                            <div class="three columns">
                                <input type="text" id="measure_prior_start_test" name="measure_prior_start_test" value="<?php echo getParameterValue($rowForm['rdaq_measure_start']); ?>" required readonly />
                            </div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="scan_time">Monitoring speed</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="scan_time" name="scan_time" value="<?php echo $rowForm['scan_time'] ?>" required readonly> </div>
                            <div class="one columns"><label for="scan_time" style="text-align: left"><b>s</b></label></div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="leakage_measure_reso">Leakage measurement resolution</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="leakage_measure_reso" name="leakage_measure_reso" value="<?php echo $rowForm['leakage_measure_resolution']; ?>" required readonly> </div>
                            <div class="one columns"><label for="leakage_measure_reso" style="text-align: left"><b>A</b></label></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="leakage_measure_accuracy">Leakage measurement accuracy</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="leakage_measure_accuracy" name="leakage_measure_accuracy" value="<?php echo $rowForm['leakage_measure_accuracy']; ?>" required readonly> </div>
                            <div class="one columns"><label for="leakage_measure_accuracy" style="text-align: left"><b>&nbsp;</b></label></div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="volt_measure_reso">Voltage measurement resolution</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="volt_measure_reso" name="volt_measure_reso" value="<?php echo $rowForm['voltage_measure_resolution']; ?>" required readonly> </div>
                            <div class="one columns"><label for="volt_measure_reso" style="text-align: left"><b>&nbsp;</b></label></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="offline_data_plot">Offline software to review historical data and plotting with data analysis</label></div>
                            <div class="three columns">
                                <input type="text" id="offline_data_plot" name="offline_data_plot" value="<?php echo getParameterValue($rowForm['data_plot']); ?>" required readonly />
                            </div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="measure_type_hardware">Measurement type for hardware design</label></div>
                            <div class="three columns">
                                <input type="text" id="measure_type_hardware" name="measure_type_hardware" value="<?php echo getParameterValue($rowForm['hw_design']); ?>" required readonly />
                            </div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                    </div>

                    <div class="tab-content" id="tabCharacter">
                        <div class="row">
                            <div class="two columns"><label for="analog_input_single">Number of analog inputs (single ended)</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="analog_input_single" name="analog_input_single" value="<?php echo $rowForm['no_analog_input_single']; ?>" required readonly> </div>
                            <div class="one columns"><label for="analog_input_single" style="text-align: left"><b>V</b></label></div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="analog_input_diff">Number of analog inputs (differential)</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="analog_input_diff" name="analog_input_diff" value="<?php echo $rowForm['no_analog_input_diff']; ?>" required readonly> </div>
                            <div class="one columns"><label for="analog_input_diff" style="text-align: left"><b>V</b></label></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="resolution">Resolution</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="resolution" name="resolution" value="<?php echo $rowForm['resolution']; ?>" required readonly> </div>
                            <div class="one columns"><label for="resolution" style="text-align: left"><b>&nbsp;</b></label></div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="sampling_frequency">Sampling frequency</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="sampling_frequency" name="sampling_frequency" value="<?php echo $rowForm['sampling_freq']; ?>" required readonly> </div>
                            <div class="one columns"><label for="sampling_frequency" style="text-align: left"><b>s</b></label></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="supported_eqpt">Supported eqpt</label></div>
                            <div class="three columns">
                                <input type="text" id="supported_eqpt" name="supported_eqpt" value="<?php echo getParameterValue($rowForm['supported_eqpt']); ?>" required readonly />
                            </div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="hw_resistence_measure">Hardware for resistance measurement</label></div>
                            <div class="three columns">
                                <input type="text" id="hw_resistence_measure" name="hw_resistence_measure" value="<?php echo getParameterValue($rowForm['hw_resistance_measure']); ?>" required readonly />
                            </div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="hw_volt_measure">Hardware for voltage measurement</label></div>
                            <div class="three columns">
                                <input type="text" id="hw_volt_measure" name="hw_volt_measure" value="<?php echo getParameterValue($rowForm['hw_voltage_measure']); ?>" required readonly />
                            </div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="hw_temp_measure">Hardware for temperature measurement</label></div>
                            <div class="three columns">
                                <input type="text" id="hw_temp_measure" name="hw_temp_measure" value="<?php echo getParameterValue($rowForm['hw_temp_measure']); ?>" required readonly />
                            </div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="daq_eqpt_interface">DAQ to Eqpt Interface</label></div>
                            <div class="three columns">
                                <input type="text" id="daq_eqpt_interface" name="daq_eqpt_interface" value="<?php echo getParameterValue($rowForm['daq_eqpt_interface']); ?>" required readonly />
                            </div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="daq_ps_interface">DAQ to PS Interface</label></div>
                            <div class="three columns">
                                <input type="text" id="daq_ps_interface" name="daq_ps_interface" value="<?php echo getParameterValue($rowForm['daq_ps_interface']); ?>" required readonly />
                            </div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                    </div>

                </div>
            <?php endwhile; ?>
            <button onclick="location.href = '../list/list_daq.php'" type="button" id="listBtn"><i class='bx bxs-chevron-left bx-fw' ></i> Back</button>
            <button onclick="location.href = 'edit.php?edit=<?php echo $id; ?>'" type="button" id="save-button"><i class='bx bxs-pencil bx-fw' ></i> Edit</button>
        </form>
        
        <script src="../js/jquery-3.7.0.js"></script>
        <script src="accordian.js"></script>
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
    </body>
</html>