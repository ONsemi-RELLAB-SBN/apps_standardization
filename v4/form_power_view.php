<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

include 'form_template.php';
include 'class/get_parameter.php';
$id = $_GET['view'];
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>P Supply | Standardization</title>
        <meta name="author" content="Ayep" />
        <link rel="shortcut icon" href="image/logo/onsemi_logo.ico">

        <link rel="stylesheet" type="text/css" href="css/w3.css">
        <link rel="stylesheet" type="text/css" href="css/skeleton.css">
        <link rel='stylesheet' type="text/css" href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'>

        <style>

        </style>
        
        <script type="text/javascript">

        </script>
        
    </head>
    <body>
        <?php include './navigation_power_supply.php';?>
        <div class="twelve columns">&nbsp;</div>
        <div class="twelve columns">&nbsp;</div>
        <div class="twelve columns">&nbsp;</div>
        <!--<h5 style="border-left: none;">Power Supply Details</h5>-->
        <form id="view_power_form" action="" method="get">
            <?php
            $sqlFormData = "SELECT * FROM gest_form_ps WHERE id = '$id'";
            $resForm = mysqli_query($con, $sqlFormData);
            while ($rowForm = mysqli_fetch_array($resForm)): ?>
            
                <h6 id="general">General</h6>
                <div class="row">
                    <div class="two columns"><label for="lab_location">Lab Location *</label></div>
                    <div class="three columns">
                        <input type="text" id="lab_location" name="lab_location" value="<?php echo getParameterValue($rowForm['lab_location']); ?>" required readonly />
                    </div>
                    <div class="one columns">&nbsp;</div>
                    <div class="two columns label"><label for="strategy">Product Group *</label></div>
                    <div class="three columns">
                        <input type="text" id="lab_location" name="lab_location" value="<?php echo getParameterValue($rowForm['strategy']); ?>" required readonly />
                    </div>
                    <div class="one columns">&nbsp;</div>
                </div>
                <div class="row">
                    <div class="two columns"><label for="standardization">Standardization Category *</label></div>
                    <div class="three columns">
                        <input type="text" id="lab_location" name="lab_location" value="<?php echo getParameterValue($rowForm['standard_category']); ?>" required readonly />
                    </div>
                    <div class="one columns">&nbsp;</div>
                    <div class="two columns"><label for="champion">Lab Manager *</label></div>
                    <div class="three columns">
                        <input type="text" id="lab_location" name="lab_location" value="<?php echo getParameterValue($rowForm['champion']); ?>" required readonly />
                    </div>
                    <div class="one columns">&nbsp;</div>
                </div>

                <h6 id="identity">Power Supply Identity</h6>
                <div class="row">
                    <div class="two columns"><label for="manufacturer">Manufacturer *</label></div>
                    <div class="three columns">
                        <input type="text" id="lab_location" name="lab_location" value="<?php echo getParameterValue($rowForm['manufacturer']); ?>" required readonly />
                    </div>
                    <div class="one columns">&nbsp;</div>
                    <div class="two columns"><label for="model">Model *</label></div>
                    <div class="three columns">
                        <input type="text" id="lab_location" name="lab_location" value="<?php echo getParameterValue($rowForm['model']); ?>" required readonly />
                    </div>
                    <div class="one columns">&nbsp;</div>
                </div>

                <h6 id="capability">Capability</h6>
                <div class="row">
                    <div class="two columns"><label for="volt_rating">Voltage Rating *</label></div>
                    <div class="one columns"><input type="number" step="0.001" id="volt_rating" name="volt_rating" value="<?php echo $rowForm['voltage_rating']; ?>" required readonly> </div>
                    <div class="one columns"><b>V</b></div>
                    <div class="two columns">&nbsp;</div>
                    <div class="two columns"><label for="curr_rating">Current Rating *</label></div>
                    <div class="one columns"><input type="number" step="0.001" id="curr_rating" name="curr_rating" value="<?php echo $rowForm['current_rating']; ?>" required readonly> </div>
                    <div class="one columns"><b>`C</b></div>
                    <div class="two columns">&nbsp;</div>
                </div>
                <div class="row">
                    <div class="two columns"><label for="max_power">Max Power *</label></div>
                    <div class="one columns"><input type="number" step="0.001" id="max_power" name="max_power" value="<?php echo $rowForm['max_power']; ?>" required readonly> </div>
                    <div class="one columns"><b>Watt</b></div>
                    <div class="two columns">&nbsp;</div>
                    <div class="two columns"><label for="volt_display_digit">Number of voltage display digits *</label></div>
                    <div class="one columns"><input type="number" step="0.001" id="volt_display_digit" name="volt_display_digit" value="<?php echo $rowForm['no_voltage_display']; ?>" required readonly> </div>
                    <div class="one columns"><b></b></div>
                    <div class="two columns">&nbsp;</div>
                </div>
                <div class="row">
                    <div class="two columns"><label for="curr_display_digit">Number of current display digits *</label></div>
                    <div class="one columns"><input type="number" step="0.001" id="curr_display_digit" name="curr_display_digit" value="<?php echo $rowForm['no_current_display']; ?>" required readonly> </div>
                    <div class="one columns"><b>&nbsp;</b></div>
                    <div class="two columns">&nbsp;</div>
                    <div class="two columns"><label for="volt_protection">Overvoltage protection *</label></div>
                    <div class="three columns">
                        <input type="text" id="lab_location" name="lab_location" value="<?php echo getParameterValue($rowForm['ovp']); ?>" required readonly />
                    </div>
                    <div class="one columns">&nbsp;</div>
                </div>
                <div class="row">
                    <div class="two columns"><label for="curr_protection">Overcurrent protection *</label></div>
                    <div class="three columns">
                        <input type="text" id="lab_location" name="lab_location" value="<?php echo getParameterValue($rowForm['ocp']); ?>" required readonly />
                    </div>
                </div>

                <h6 id="characteristic">Characteristics</h6>
                <div class="row">
                    <div class="two columns"><label for="dimension_w">Dimensions (W) *</label></div>
                    <div class="one columns"><input type="number" step="0.001" id="dimension_w" name="dimension_w" value="<?php echo $rowForm['ps_dimension_w']; ?>" required readonly> </div>
                    <div class="one columns"><label for="dimension_w" style="text-align: left"><b>mm</b></label></div>
                    <div class="two columns">&nbsp;</div>
                    <div class="two columns"><label for="weight">Weight (kg) *</label></div>
                    <div class="one columns"><input type="number" step="0.001" id="weight" name="weight" value="<?php echo $rowForm['weight']; ?>" required readonly> </div>
                    <div class="one columns"><label for="weight" style="text-align: left"><b>Kg</b></label></div>
                    <div class="two columns">&nbsp;</div>
                </div>
                <div class="row">
                    <div class="two columns"><label for="dimension_d">Dimensions (D) *</label></div>
                    <div class="one columns"><input type="number" step="0.001" id="dimension_d" name="dimension_d" value="<?php echo $rowForm['ps_dimension_d']; ?>" required readonly> </div>
                    <div class="one columns"><label for="maxTemp" style="text-align: left"><b>mm</b></label></div>
                    <div class="two columns">&nbsp;</div>
                    <div class="two columns"><label for="input_volt">Input voltage (facilities) *</label></div>
                    <div class="one columns"><input type="number" step="0.001" id="input_volt" name="input_volt" value="<?php echo $rowForm['input_voltage']; ?>" required readonly> </div>
                    <div class="one columns"><label for="minTemp" style="text-align: left"><b>V</b></label></div>
                    <div class="two columns">&nbsp;</div>
                </div>
                <div class="row">
                    <div class="two columns"><label for="dimension_h">Dimensions (H) *</label></div>
                    <div class="one columns"><input type="number" step="0.001" id="dimension_h" name="dimension_h" value="<?php echo $rowForm['ps_dimension_h']; ?>" required readonly> </div>
                    <div class="one columns"><label for="minTemp" style="text-align: left"><b>mm</b></label></div>
                    <div class="two columns">&nbsp;</div>
                    <div class="two columns"><label for="remote_operation_capability">Remote operation capability *</label></div>
                    <div class="three columns">
                        <input type="text" id="lab_location" name="lab_location" value="<?php echo getParameterValue($rowForm['remote_operation_cap']); ?>" required readonly />
                    </div>
                    <div class="one columns">&nbsp;</div>
                </div>
                <div class="row">
                    <div class="two columns"><label for="output_voltage_monitor">Output voltage monitor *</label></div>
                    <div class="three columns">
                        <input type="text" id="lab_location" name="lab_location" value="<?php echo getParameterValue($rowForm['output_voltage_mon']); ?>" required readonly />
                    </div>
                    <div class="one columns">&nbsp;</div>
                    <div class="two columns"><label for="output_curr_monitor">Output current monitor  *</label></div>
                    <div class="three columns">
                        <input type="text" id="lab_location" name="lab_location" value="<?php echo getParameterValue($rowForm['output_current_mon']); ?>" required readonly />
                    </div>
                    <div class="one columns">&nbsp;</div>
                </div>
                <div class="row">
                    <div class="two columns"><label for="pc_to_eqpt_interface">PS to eqpt interface *</label></div>
                    <div class="three columns">
                        <input type="text" id="lab_location" name="lab_location" value="<?php echo getParameterValue($rowForm['eqpt_interface']); ?>" required readonly />
                    </div>
                    <div class="one columns">&nbsp;</div>
                    <div class="two columns">
                        <label for="lan_port">LAN Port *</label>
                    </div>
                    <div class="three columns">
                        <input type="text" id="lab_location" name="lab_location" value="<?php echo getParameterValue($rowForm['lan_port']); ?>" required readonly />
                    </div>
                </div>
                <div class="row">
                    <div class="two columns">
                        <label for="gpib_interface">GPIB interface *</label>
                    </div>
                    <div class="three columns">
                        <input type="text" id="lab_location" name="lab_location" value="<?php echo getParameterValue($rowForm['gpib_interface']); ?>" required readonly />
                    </div>
                    <div class="one columns">&nbsp;</div>
                    <div class="two columns">
                        <label for="other_interface_port">Other interface ports *</label>
                    </div>
                    <div class="three columns">
                        <input type="text" id="lab_location" name="lab_location" value="<?php echo getParameterValue($rowForm['other_interface']); ?>" required readonly />
                    </div>
                    <div class="one columns">&nbsp;</div>
                </div>

                <h6 id="capacity">Capacity</h6>
                <div class="row">
                    <div class="two columns">
                        <label for="no_output_channel">Number of output channels *</label>
                    </div>
                    <div class="one columns"><input type="number" step="0.001" id="no_output_channel" name="no_output_channel" value="<?php echo $rowForm['no_output']; ?>" required readonly> </div>
                    <div class="one columns"><label for="no_output_channel" style="text-align: left"><b>V</b></label></div>
                    <div class="two columns">&nbsp;</div>
                </div>
            <?php endwhile; ?>
            <button onclick="location.href = 'form_power_list.php'" type="button" id="backBtn"><i class='bx bxs-chevron-left bx-fw' ></i> Back</button>
            <button onclick="location.href = 'form_power_edit.php?edit=<?php echo $id; ?>'" type="button" id="editBtn"><i class='bx bxs-pencil bx-fw' ></i> Edit</button>
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
    </body>
</html>