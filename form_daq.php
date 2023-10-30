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
        <title>DAQ | Standardization</title>
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

            #toggle_01, #toggle_02, #toggle_03, #toggle_040, #toggle_041, #toggle_042, #toggle_050, #toggle_051, #toggle_052, #toggle_06, #toggle_070, #toggle_071, #toggle_072 {
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
            #toggle_040:checked ~ dialog {
                display: block;
            }
            #toggle_041:checked ~ dialog {
                display: block;
            }
            #toggle_042:checked ~ dialog {
                display: block;
            }
            #toggle_050:checked ~ dialog {
                display: block;
            }
            #toggle_051:checked ~ dialog {
                display: block;
            }
            #toggle_052:checked ~ dialog {
                display: block;
            }
            #toggle_06:checked ~ dialog {
                display: block;
            }
            #toggle_070:checked ~ dialog {
                display: block;
            }
            #toggle_071:checked ~ dialog {
                display: block;
            }
            #toggle_072:checked ~ dialog {
                display: block;
            }
        </style>
        
        <script type="text/javascript">
            
        </script>
        
    </head>
    <body>
        <div class="row">&nbsp;</div>
        <div class="row">&nbsp;</div>
        <div class="row">
            <h5 style="border-left: none;">DAQ Detail</h5>
            <form id="add_daq_form" role="form" action="crud_add_daq.php" method="get">
                <div class="w3-section" style="width:100%">
                    <button class="w3-button w3-block"> General</button>
                    <div id="sectionGeneral" class="w3-show w3-container">
                        <div class="row">
                            <div class="two columns"><label for="lab_location">Lab Location *</label></div>
                            <div class="three columns">
                                <select id="lab_location" name="lab_location" style="width: 100%" required>
                                    <option value="" selected=""></option>
                                    <?php
                                    $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '002' ORDER BY code ASC";
                                    $resSite = mysqli_query($con, $sqlDdSite);
                                    while ($rowSite = mysqli_fetch_array($resSite)):
                                        ?>
                                        <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                                    <?php endwhile; ?>
                                </select>
                            </div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns label"><label for="strategy">onsemi Strategy *</label></div>
                            <div class="three columns">
                                <select id="strategy" name="strategy" style="width: 100%" required>
                                    <option value="" selected=""></option>
                                    <?php
                                    $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '003' ORDER BY code ASC";
                                    $resSite = mysqli_query($con, $sqlDdSite);
                                    while ($rowSite = mysqli_fetch_array($resSite)):
                                        ?>
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
                                    while ($rowSite = mysqli_fetch_array($resSite)):
                                        ?>
                                        <option value="<?php echo $rowSite['code']; ?>" <?php if ($rowSite['code'] === "004003") { ?>selected<?php } ?>><?php echo $rowSite['name']; ?></option>
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
                                    while ($rowSite = mysqli_fetch_array($resSite)):
                                        ?>
                                        <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                                    <?php endwhile; ?>
                                </select>
                            </div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                    </div>
                </div>
                <div class="w3-section" style="width:100%">
                    <button class="w3-button w3-block"> DAQ Identity</button>
                    <div id="sectionIdentity" class="w3-show w3-container">
                        <div class="row">
                            <div class="two columns"><label for="manufacturer">Manufacturer *</label></div>
                            <div class="three columns">
                                <select id="manufacturer" name="manufacturer" style="width: 100%" required>
                                    <option value="" selected=""></option>
                                    <?php
                                    $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '022' ORDER BY code ASC";
                                    $resSite = mysqli_query($con, $sqlDdSite);
                                    while ($rowSite = mysqli_fetch_array($resSite)):
                                        ?>
                                        <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                                    <?php endwhile; ?>
                                </select>
                            </div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="model">Model *</label></div>
                            <div class="three columns">
                                <select id="model" name="model" style="width: 100%" required>
                                    <option value="" selected=""></option>
                                    <?php
                                    $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '022' ORDER BY code ASC";
                                    $resSite = mysqli_query($con, $sqlDdSite);
                                    while ($rowSite = mysqli_fetch_array($resSite)):
                                        ?>
                                        <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                                    <?php endwhile; ?>
                                </select>
                            </div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="daq_id">DAQ ID *</label></div>
                            <div class="three columns">
                                <select id="daq_id" name="daq_id" style="width: 100%" required>
                                    <option value="" selected=""></option>
                                    <?php
                                    $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '022' ORDER BY code ASC";
                                    $resSite = mysqli_query($con, $sqlDdSite);
                                    while ($rowSite = mysqli_fetch_array($resSite)):
                                        ?>
                                        <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                                    <?php endwhile; ?>
                                </select>
                            </div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                    </div>
                </div>
                <div class="w3-section" style="width:100%">
                    <button class="w3-button w3-block"> Capacity</button>
                    <div id="setionCapacity" class="w3-show w3-container">
                        <div class="row">
                            <div class="two columns"><label for="no_temp_channel">Number of temperature channels *</label></div>
                            <div class="one columns"><input type="number" step="0.001" id="no_temp_channel" name="no_temp_channel" value="" required> </div>
                            <div class="one columns"><label for="no_temp_channel" style="text-align: left"><b>&nbsp;</b></label></div>
                            <div class="two columns">&nbsp;</div>
                            <div class="two columns"><label for="no_volt_channel">Number of voltage channels *</label></div>
                            <div class="one columns"><input type="number" step="0.001" id="no_volt_channel" name="no_volt_channel" value="" required> </div>
                            <div class="one columns"><label for="no_volt_channel" style="text-align: left"><b>&nbsp;</b></label></div>
                            <div class="two columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="no_leakage_channel">Number of leakage channels *</label></div>
                            <div class="one columns"><input type="number" step="0.001" id="no_leakage_channel" name="no_leakage_channel" value="" required> </div>
                            <div class="one columns"><label for="no_leakage_channel" style="text-align: left"><b>&nbsp;</b></label></div>
                            <div class="two columns">&nbsp;</div>
                        </div>
                    </div>
                </div>
                <div class="w3-section" style="width:100%">
                    <button class="w3-button w3-block"> Capability</button>
                    <div id="sectionCapability" class="w3-show w3-container">
                        <div class="row">
                            <div class="two columns"><label for="volt_measure_range">Voltage measurement range *</label></div>
                            <div class="one columns"><input type="number" step="0.001" id="volt_measure_range" name="volt_measure_range" value="" required> </div>
                            <div class="one columns"><label for="volt_measure_range" style="text-align: left"><b>V</b></label></div>
                            <div class="two columns">&nbsp;</div>
                            <div class="two columns"><label for="temp_measure_range">Temperature measurement range *</label></div>
                            <div class="one columns"><input type="number" step="0.001" id="temp_measure_range" name="temp_measure_range" value="" required> </div>
                            <div class="one columns"><label for="temp_measure_range" style="text-align: left"><b>`C</b></label></div>
                            <div class="two columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="curr_measure_range">Leakage current measurement range *</label></div>
                            <div class="one columns"><input type="number" step="0.001" id="curr_measure_range" name="curr_measure_range" value="" required> </div>
                            <div class="one columns"><label for="curr_measure_range" style="text-align: left"><b>A</b></label></div>
                            <div class="two columns">&nbsp;</div>
                            <div class="two columns"><label for="display_volt_drop">Display Rdaq Voltage Drop *</label></div>
                            <div class="three columns">
                                <select id="display_volt_drop" name="display_volt_drop" style="width: 100%" readonly required>
                                    <option value="" selected=""></option>
                                    <?php
                                    $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '022' ORDER BY code ASC";
                                    $resSite = mysqli_query($con, $sqlDdSite);
                                    while ($rowSite = mysqli_fetch_array($resSite)):
                                        ?>
                                        <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                                    <?php endwhile; ?>
                                </select>
                            </div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="board_insert_check">Board Insert Check *</label></div>
                            <div class="three columns">
                                <select id="board_insert_check" name="board_insert_check" style="width: 100%" onchange="updateToField()" required >
                                    <option value="" selected=""></option>
                                    <?php
                                    $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '022' ORDER BY code ASC";
                                    $resSite = mysqli_query($con, $sqlDdSite);
                                    while ($rowSite = mysqli_fetch_array($resSite)):
                                        ?>
                                        <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                                    <?php endwhile; ?>
                                </select>
                            </div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="measure_prior_start_test">Rdaq Measurement prior start the test *</label></div>
                            <div class="three columns">
                                <select id="measure_prior_start_test" name="measure_prior_start_test" style="width: 100%" onchange="updateToField()" required >
                                    <option value="" selected=""></option>
                                    <?php
                                    $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '022' ORDER BY code ASC";
                                    $resSite = mysqli_query($con, $sqlDdSite);
                                    while ($rowSite = mysqli_fetch_array($resSite)):
                                        ?>
                                        <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                                    <?php endwhile; ?>
                                </select>
                            </div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="monitoring_speed">Monitoring speed *</label></div>
                            <div class="three columns">
                                <select id="monitoring_speed" name="monitoring_speed" style="width: 100%" onchange="updateToField()" required >
                                    <option value="" selected=""></option>
                                    <?php
                                    $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '022' ORDER BY code ASC";
                                    $resSite = mysqli_query($con, $sqlDdSite);
                                    while ($rowSite = mysqli_fetch_array($resSite)):
                                        ?>
                                        <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                                    <?php endwhile; ?>
                                </select>
                            </div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="leakage_measure_reso">Leakage measurement resolution *</label></div>
                            <div class="one columns"><input type="number" step="0.001" id="leakage_measure_reso" name="leakage_measure_reso" value="" required> </div>
                            <div class="one columns"><label for="leakage_measure_reso" style="text-align: left"><b>A</b></label></div>
                            <div class="two columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="leakage_measure_accuracy">Leakage measurement accuracy *</label></div>
                            <div class="one columns"><input type="number" step="0.001" id="leakage_measure_accuracy" name="leakage_measure_accuracy" value="" required> </div>
                            <div class="one columns"><label for="leakage_measure_accuracy" style="text-align: left"><b>&nbsp;</b></label></div>
                            <div class="two columns">&nbsp;</div>
                            <div class="two columns"><label for="volt_measure_reso">Voltage measurement resolution *</label></div>
                            <div class="one columns"><input type="number" step="0.001" id="volt_measure_reso" name="volt_measure_reso" value="" required> </div>
                            <div class="one columns"><label for="volt_measure_reso" style="text-align: left"><b>&nbsp;</b></label></div>
                            <div class="two columns">
                                <label for="toggle_01" class="view-image">Image</label>
                                <input type="checkbox" id="toggle_01">
                                <dialog>
                                    <label for="toggle_01" style="color:red"><i class='bx bx-x bx-fw'></i> close</label>
                                    <img id="myImg" src="image/daq/001.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                </dialog>
                            </div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="offline_data_plot">Offline software to review historical data and plotting with data analysis *</label></div>
                            <div class="three columns">
                                <select id="offline_data_plot" name="offline_data_plot" style="width: 100%" required>
                                    <option value="" selected=""></option>
                                    <?php
                                    $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '022' ORDER BY code ASC";
                                    $resSite = mysqli_query($con, $sqlDdSite);
                                    while ($rowSite = mysqli_fetch_array($resSite)):
                                        ?>
                                        <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                                    <?php endwhile; ?>
                                </select>
                            </div>
                            <div class="one columns">
                                <label for="toggle_02" class="view-image">Image</label>
                                <input type="checkbox" id="toggle_02">
                                <dialog>
                                    <label for="toggle_02" style="color:red"><i class='bx bx-x bx-fw'></i> close</label>
                                    <img id="myImg" src="image/daq/002.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                </dialog>
                            </div>
                            <div class="two columns"><label for="measure_type_hardware">Measurement type for hardware design *</label></div>
                            <div class="three columns">
                                <select id="measure_type_hardware" name="measure_type_hardware" style="width: 100%" required>
                                    <option value="" selected=""></option>
                                    <?php
                                    $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '022' ORDER BY code ASC";
                                    $resSite = mysqli_query($con, $sqlDdSite);
                                    while ($rowSite = mysqli_fetch_array($resSite)):
                                        ?>
                                        <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                                    <?php endwhile; ?>
                                </select>
                            </div>
                            <div class="one columns">
                                <label for="toggle_03" class="view-image">Image</label>
                                <input type="checkbox" id="toggle_03">
                                <dialog>
                                    <label for="toggle_03" style="color:red"><i class='bx bx-x bx-fw'></i> close</label>
                                    <img id="myImg" src="image/daq/003.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                </dialog>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w3-section">
                    <button class="w3-button w3-block"> Characteristics</button>
                    <div id="sectionCharacteristic" class="w3-show w3-container">
                        <div class="row">
                            <div class="two columns"><label for="analog_input_single">Number of analog inputs (single ended) *</label></div>
                            <div class="one columns"><input type="number" step="0.001" id="analog_input_single" name="analog_input_single" value="" required> </div>
                            <div class="one columns"><label for="analog_input_single" style="text-align: left"><b>V</b></label></div>
                            <div class="two columns">
                                <label for="toggle_040" class="view-image">Image</label>
                                <input type="checkbox" id="toggle_040">
                                <dialog>
                                    <label for="toggle_040" style="color:red"><i class='bx bx-x bx-fw'></i> close</label>
                                    <img id="myImg" src="image/daq/004_0.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                </dialog>
                            </div>
                            <div class="two columns"><label for="analog_input_diff">Number of analog inputs (differential) *</label></div>
                            <div class="one columns"><input type="number" step="0.001" id="analog_input_diff" name="analog_input_diff" value="" required> </div>
                            <div class="one columns"><label for="analog_input_diff" style="text-align: left"><b>V</b></label></div>
                            <div class="two columns">
                                <label for="toggle_041" class="view-image">Image</label>
                                <input type="checkbox" id="toggle_041">
                                <dialog>
                                    <label for="toggle_041" style="color:red"><i class='bx bx-x bx-fw'></i> close</label>
                                    <img id="myImg" src="image/daq/004_1.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                </dialog>
                            </div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="resolution">Resolution *</label></div>
                            <div class="one columns"><input type="number" step="0.001" id="resolution" name="resolution" value="" required> </div>
                            <div class="one columns"><label for="resolution" style="text-align: left"><b>&nbsp;</b></label></div>
                            <div class="two columns">
                                <label for="toggle_042" class="view-image">Image</label>
                                <input type="checkbox" id="toggle_042">
                                <dialog>
                                    <label for="toggle_042" style="color:red"><i class='bx bx-x bx-fw'></i> close</label>
                                    <img id="myImg" src="image/daq/004_2.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                </dialog>
                            </div>
                            <div class="two columns"><label for="sampling_frequency">Sampling frequency *</label></div>
                            <div class="one columns"><input type="number" step="0.001" id="sampling_frequency" name="sampling_frequency" value="" required> </div>
                            <div class="one columns"><label for="sampling_frequency" style="text-align: left"><b>s</b></label></div>
                            <div class="two columns">
                                <label for="toggle_050" class="view-image">Image</label>
                                <input type="checkbox" id="toggle_050">
                                <dialog>
                                    <label for="toggle_050" style="color:red"><i class='bx bx-x bx-fw'></i> close</label>
                                    <img id="myImg" src="image/daq/005_0.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                </dialog>
                            </div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="supported_eqpt">Supported eqpt *</label></div>
                            <div class="three columns">
                                <select id="supported_eqpt" name="supported_eqpt" style="width: 100%" required>
                                    <option value="" selected=""></option>
                                    <?php
                                    $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '022' ORDER BY code ASC";
                                    $resSite = mysqli_query($con, $sqlDdSite);
                                    while ($rowSite = mysqli_fetch_array($resSite)):
                                        ?>
                                        <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                                    <?php endwhile; ?>
                                </select>
                            </div>
                            <div class="one columns">
                                <label for="toggle_051" class="view-image">Image</label>
                                <input type="checkbox" id="toggle_051">
                                <dialog>
                                    <label for="toggle_051" style="color:red"><i class='bx bx-x bx-fw'></i> close</label>
                                    <img id="myImg" src="image/daq/005_1.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                </dialog>
                            </div>
                            <div class="two columns"><label for="hw_resistence_measure">Hardware for resistance measurement *</label></div>
                            <div class="three columns">
                                <select id="hw_resistence_measure" name="hw_resistence_measure" style="width: 100%" required>
                                    <option value="" selected=""></option>
                                    <?php
                                    $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '022' ORDER BY code ASC";
                                    $resSite = mysqli_query($con, $sqlDdSite);
                                    while ($rowSite = mysqli_fetch_array($resSite)):
                                        ?>
                                        <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                                    <?php endwhile; ?>
                                </select>
                            </div>
                            <div class="one columns">
                                <label for="toggle_052" class="view-image">Image</label>
                                <input type="checkbox" id="toggle_052">
                                <dialog>
                                    <label for="toggle_052" style="color:red"><i class='bx bx-x bx-fw'></i> close</label>
                                    <img id="myImg" src="image/daq/005_2.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                </dialog>
                            </div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="hw_volt_measure">Hardware for voltage measurement *</label></div>
                            <div class="three columns">
                                <select id="hw_volt_measure" name="hw_volt_measure" style="width: 100%" required>
                                    <option value="" selected=""></option>
                                    <?php
                                    $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '022' ORDER BY code ASC";
                                    $resSite = mysqli_query($con, $sqlDdSite);
                                    while ($rowSite = mysqli_fetch_array($resSite)):
                                        ?>
                                        <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                                    <?php endwhile; ?>
                                </select>
                            </div>
                            <div class="one columns">
                                <label for="toggle_06" class="view-image">Image</label>
                                <input type="checkbox" id="toggle_06">
                                <dialog>
                                    <label for="toggle_06" style="color:red"><i class='bx bx-x bx-fw'></i> close</label>
                                    <img id="myImg" src="image/daq/006.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                </dialog>
                            </div>
                            <div class="two columns"><label for="hw_temp_measure">Hardware for temperature measurement *</label></div>
                            <div class="three columns">
                                <select id="hw_temp_measure" name="hw_temp_measure" style="width: 100%" required>
                                    <option value="" selected=""></option>
                                    <?php
                                    $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '022' ORDER BY code ASC";
                                    $resSite = mysqli_query($con, $sqlDdSite);
                                    while ($rowSite = mysqli_fetch_array($resSite)):
                                        ?>
                                        <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                                    <?php endwhile; ?>
                                </select>
                            </div>
                            <div class="one columns">
                                <label for="toggle_070" class="view-image">Image</label>
                                <input type="checkbox" id="toggle_070">
                                <dialog>
                                    <label for="toggle_070" style="color:red"><i class='bx bx-x bx-fw'></i> close</label>
                                    <img id="myImg" src="image/daq/007_0.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                </dialog>
                            </div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="daq_eqpt_interface">DAQ to Eqpt Interface *</label></div>
                            <div class="three columns">
                                <select id="daq_eqpt_interface" name="daq_eqpt_interface" style="width: 100%" required>
                                    <option value="" selected=""></option>
                                    <?php
                                    $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '022' ORDER BY code ASC";
                                    $resSite = mysqli_query($con, $sqlDdSite);
                                    while ($rowSite = mysqli_fetch_array($resSite)):
                                        ?>
                                        <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                                    <?php endwhile; ?>
                                </select>
                            </div>
                            <div class="one columns">
                                <label for="toggle_071" class="view-image">Image</label>
                                <input type="checkbox" id="toggle_071">
                                <dialog>
                                    <label for="toggle_071" style="color:red"><i class='bx bx-x bx-fw'></i> close</label>
                                    <img id="myImg" src="image/daq/007_1.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                </dialog>
                            </div>
                            <div class="two columns"><label for="daq_ps_interface">DAQ to PS Interface *</label></div>
                            <div class="three columns">
                                <select id="daq_ps_interface" name="daq_ps_interface" style="width: 100%" required>
                                    <option value="" selected=""></option>
                                    <?php
                                    $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '022' ORDER BY code ASC";
                                    $resSite = mysqli_query($con, $sqlDdSite);
                                    while ($rowSite = mysqli_fetch_array($resSite)):
                                        ?>
                                        <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                                    <?php endwhile; ?>
                                </select>
                            </div>
                            <div class="one columns">
                                <label for="toggle_072" class="view-image">Image</label>
                                <input type="checkbox" id="toggle_072">
                                <dialog>
                                    <label for="toggle_072" style="color:red"><i class='bx bx-x bx-fw'></i> close</label>
                                    <img id="myImg" src="image/daq/007_2.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                </dialog>
                            </div>
                        </div>
                    </div>
                </div>

                <button onclick="location.href = 'form_daq_list.php'" type="button" id="backBtn"><i class='bx bx-list-ol bx-fw' ></i> List</button>
                <button type="submit" id="myBtn" class="btn btn-primary"><i class='bx bx-send bx-fw' ></i> Send</button>
                <div class="clearfix"></div>
            </form>
        </div>
        <script>
            function myFunction(id) {
                var x = document.getElementById(id);
                if (x.className.indexOf("w3-show") == -1) {
                    x.className += " w3-show";
                } else {
                    x.className = x.className.replace(" w3-show", "");
                }
            }
        </script>
    </body>
</html>