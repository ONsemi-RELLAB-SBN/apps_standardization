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
        <title>P Supply | Standardization</title>
        <meta name="author" content="Ayep" />
        <link rel="shortcut icon" href="image/logo/onsemi_logo.ico">

        <link rel="stylesheet" type="text/css" href="css/w3.css">
        <link rel="stylesheet" type="text/css" href="css/skeleton.css">
        <link rel='stylesheet' type="text/css" href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'>

        <style>
/*            #listBtn {
                display: block;
                position: fixed;
                bottom: 95px;
                right: 30px;
                z-index: 99;
                font-size: 18px;
                border: none;
                outline: none;
                background-color: gray;
                color: white;
                cursor: pointer;
                padding: 15px;
                border-radius: 5px;

                display: block;
                min-width: 7.5rem;
                height: 3.5rem;
                line-height: 2.75rem;
                padding: 0 1.25rem 0 1.45rem;
                text-transform: uppercase;
                letter-spacing: 0.2rem;
            }

            #myBtn {
                display: block;
                position: fixed;
                bottom: 25px;
                right: 30px;
                z-index: 99;
                font-size: 18px;
                border: none;
                outline: none;
                background-color: gray;
                color: white;
                cursor: pointer;
                padding: 15px;
                border-radius: 5px;

                display: block;
                min-width: 7.5rem;
                height: 3.5rem;
                line-height: 2.75rem;
                padding: 0 1.25rem 0 1.45rem;
                text-transform: uppercase;
                letter-spacing: 0.2rem;
            }*/

            #myBtn:hover {
                background-color: orange;
            }
            #listBtn:hover {
                background-color: orange;
            }
        </style>
        <script type="text/javascript">
            $(document).ready(function () {
                $('.js-example-basic-multiple').select2({
                    placeholder: "Multi Select",
                    allowClear: true
                });

                $(".js-example-basic-single").select2({
                    placeholder: "Choose one",
                    allowClear: true
                });
            });
            
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
        <div class="col-lg-12">
            &nbsp; he
        </div>
        <div class="col-lg-12">
            &nbsp; he
        </div>
        <h5 style="border-left: none;">Power Supply Details</h5>
        <form id="add_power_form" action="crud_add_power.php" method="get">
            <h6>General</h6>
            <div class="row">
                <div class="two columns"><label for="lab_location">Lab Location *</label></div>
                <div class="three columns">
                    <select id="lab_location" name="lab_location" class="js-example-basic-single" style="width: 100%" required>
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
                    <select id="strategy" name="strategy" class="js-example-basic-single" style="width: 100%" required>
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
                    <select id="standardization" name="standardization" class="js-example-basic-single" style="width: 100%" required>
                        <option value="" selected=""></option>
                        <?php
                        $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '004' ORDER BY code ASC";
                        $resSite = mysqli_query($con, $sqlDdSite);
                        while ($rowSite = mysqli_fetch_array($resSite)):
                            ?>
                            <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                        <?php endwhile; ?>
                    </select>
                </div>
                <div class="one columns">&nbsp;</div>
                <div class="two columns"><label for="champion">Champion *</label></div>
                <div class="three columns">
                    <select id="champion" name="champion" class="js-example-basic-single" style="width: 100%" required>
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

            <h6>Power Supply Identity</h6>
            <div class="row">
                <div class="two columns"><label for="manufacturer">Manufacturer *</label></div>
                <div class="three columns">
                    <select id="manufacturer" name="manufacturer" class="js-example-basic-single" style="width: 100%" required>
                        <option value="" selected=""></option>
                        <?php
                        $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '006' ORDER BY code ASC";
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
                    <select id="model" name="model" class="js-example-basic-single" style="width: 100%" required>
                        <option value="" selected=""></option>
                        <?php
                        $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '007' ORDER BY code ASC";
                        $resSite = mysqli_query($con, $sqlDdSite);
                        while ($rowSite = mysqli_fetch_array($resSite)):
                            ?>
                            <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                        <?php endwhile; ?>
                    </select>
                </div>
                <div class="one columns">&nbsp;</div>
            </div>

            <h6>Capability</h6>
            <div class="row">
                <div class="two columns"><label for="volt_rating">Voltage Rating *</label></div>
                <div class="one columns"><input type="number" step="0.001" id="volt_rating" name="volt_rating" value="" required> </div>
                <div class="one columns"><b>V</b></div>
                <div class="two columns">&nbsp;</div>
                <div class="two columns"><label for="curr_rating">Current Rating *</label></div>
                <div class="one columns"><input type="number" step="0.001" id="curr_rating" name="curr_rating" value="" required> </div>
                <div class="one columns"><b>%</b></div>
                <div class="two columns">&nbsp;</div>
            </div>
            <div class="row">
                <div class="two columns"><label for="max_power">Max Power *</label></div>
                <div class="one columns"><input type="number" step="0.001" id="max_power" name="max_power" value="" required> </div>
                <div class="one columns"><b>V</b></div>
                <div class="two columns">&nbsp;</div>
                <div class="two columns"><label for="volt_display_digit">Number of voltage display digits *</label></div>
                <div class="one columns"><input type="number" step="0.001" id="volt_display_digit" name="volt_display_digit" value="" required> </div>
                <div class="one columns"><b>%</b></div>
                <div class="two columns">&nbsp;</div>
            </div>
            <div class="row">
                <div class="two columns"><label for="curr_display_digit">Number of current display digits *</label></div>
                <div class="one columns"><input type="number" step="0.001" id="curr_display_digit" name="curr_display_digit" value="" required> </div>
                <div class="one columns"><b>V</b></div>
                <div class="two columns">&nbsp;</div>
                <div class="two columns"><label for="volt_protection">Overvoltage protection *</label></div>
                <div class="three columns">
                    <select id="volt_protection" name="volt_protection" class="js-example-basic-single" style="width: 100%" required>
                        <option value="" selected=""></option>
                        <?php
                        $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '007' ORDER BY code ASC";
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
                <div class="two columns"><label for="curr_protection">Overcurrent protection *</label></div>
                <div class="three columns">
                    <select id="curr_protection" name="curr_protection" class="js-example-basic-single" style="width: 100%" required>
                        <option value="" selected=""></option>
                        <?php
                        $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '007' ORDER BY code ASC";
                        $resSite = mysqli_query($con, $sqlDdSite);
                        while ($rowSite = mysqli_fetch_array($resSite)):
                            ?>
                            <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                        <?php endwhile; ?>
                    </select>
                </div>
            </div>

            <h6>Characteristics</h6>
            <div class="row">
                <div class="two columns"><label for="dimension_w">Dimensions (W) *</label></div>
                <div class="one columns"><input type="number" step="0.001" class="form-control" id="dimension_w" name="dimension_w" value="" required> </div>
                <div class="one columns"><label for="voltRating" class="col-lg-2 control-label pull-left" style="text-align: left"><b>V</b></label></div>
                <div class="two columns">&nbsp;</div>
                <div class="two columns"><label for="weight">Weight (kg) *</label></div>
                <div class="one columns"><input type="number" step="0.001" class="form-control" id="weight" name="weight" value="" required> </div>
                <div class="one columns"><label for="voltControl" class="col-lg-2 control-label pull-left" style="text-align: left"><b>%</b></label></div>
                <div class="two columns">&nbsp;</div>
            </div>
            <div class="row">
                <div class="two columns"><label for="dimension_d">Dimensions (D) *</label></div>
                <div class="one columns"><input type="number" step="0.001" class="form-control" id="dimension_d" name="dimension_d" value="" required> </div>
                <div class="one columns"><label for="maxTemp" class="col-lg-2 control-label pull-left" style="text-align: left"><b>`C</b></label></div>
                <div class="two columns">&nbsp;</div>
                <div class="two columns"><label for="input_volt">Input voltage (facilities) *</label></div>
                <div class="one columns"><input type="number" step="0.001" class="form-control" id="input_volt" name="input_volt" value="" required> </div>
                <div class="one columns"><label for="minTemp" class="col-lg-2 control-label pull-left" style="text-align: left"><b>`C</b></label></div>
                <div class="two columns">&nbsp;</div>
            </div>
            <div class="row">
                <div class="two columns"><label for="dimension_h">Dimensions (H) *</label></div>
                <div class="one columns"><input type="number" step="0.001" class="form-control" id="dimension_h" name="dimension_h" value="" required> </div>
                <div class="one columns"><label for="minTemp" class="col-lg-2 control-label pull-left" style="text-align: left"><b>`C</b></label></div>
                <div class="two columns">&nbsp;</div>
                <div class="two columns"><label for="remote_operation_capability">Remote operation capability *</label></div>
                <div class="three columns">
                    <select id="remote_operation_capability" name="remote_operation_capability" class="js-example-basic-single" style="width: 100%" required>
                        <option value="" selected=""></option>
                        <?php
                        $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '009' ORDER BY code ASC";
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
                <div class="two columns"><label for="output_voltage_monitor">Output voltage monitor *</label></div>
                <div class="three columns">
                    <select id="output_voltage_monitor" name="output_voltage_monitor" class="js-example-basic-single" style="width: 100%" required>
                        <option value="" selected=""></option>
                        <?php
                        $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '008' ORDER BY code ASC";
                        $resSite = mysqli_query($con, $sqlDdSite);
                        while ($rowSite = mysqli_fetch_array($resSite)):
                            ?>
                            <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                        <?php endwhile; ?>
                    </select>
                </div>
                <div class="one columns">&nbsp;</div>
                <div class="two columns"><label for="output_curr_monitor">Output current monitor  *</label></div>
                <div class="three columns">
                    <select id="output_curr_monitor" name="output_curr_monitor" class="js-example-basic-single" style="width: 100%" required>
                        <option value="" selected=""></option>
                        <?php
                        $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '009' ORDER BY code ASC";
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
                <div class="two columns"><label for="pc_to_eqpt_interface">PS to eqpt interface *</label></div>
                <div class="three columns">
                    <select id="pc_to_eqpt_interface" name="pc_to_eqpt_interface" class="js-example-basic-single" style="width: 100%" required>
                        <option value="" selected=""></option>
                        <?php
                        $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '008' ORDER BY code ASC";
                        $resSite = mysqli_query($con, $sqlDdSite);
                        while ($rowSite = mysqli_fetch_array($resSite)):
                            ?>
                            <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                        <?php endwhile; ?>
                    </select>
                </div>
                <div class="one columns">&nbsp;</div>
                <div class="two columns"><label for="lan_port">LAN Port *</label></div>
                <div class="three columns">
                    <select id="lan_port" name="lan_port" class="js-example-basic-single" style="width: 100%" required>
                        <option value="" selected=""></option>
                        <?php
                        $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '009' ORDER BY code ASC";
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
                <div class="two columns"><label for="gpib_interface">GPIB interface *</label></div>
                <div class="three columns">
                    <select id="gpib_interface" name="gpib_interface" class="js-example-basic-single" style="width: 100%" required>
                        <option value="" selected=""></option>
                        <?php
                        $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '008' ORDER BY code ASC";
                        $resSite = mysqli_query($con, $sqlDdSite);
                        while ($rowSite = mysqli_fetch_array($resSite)):
                            ?>
                            <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                        <?php endwhile; ?>
                    </select>
                </div>
                <div class="one columns">&nbsp;</div>
                <div class="two columns"><label for="other_interface_port">Other interface ports *</label></div>
                <div class="three columns">
                    <select id="other_interface_port" name="other_interface_port" class="js-example-basic-single" style="width: 100%" required>
                        <option value="" selected=""></option>
                        <?php
                        $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '009' ORDER BY code ASC";
                        $resSite = mysqli_query($con, $sqlDdSite);
                        while ($rowSite = mysqli_fetch_array($resSite)):
                            ?>
                            <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                        <?php endwhile; ?>
                    </select>
                </div>
                <div class="one columns">&nbsp;</div>
            </div>

            <h6>Capacity</h6>
            <div class="row">
                <div class="two columns"><label for="no_output_channel">Number of output channels *</label></div>
                <div class="one columns"><input type="number" step="0.001" class="form-control" id="no_output_channel" name="no_output_channel" value="" required> </div>
                <div class="one columns"><label for="maxTemp" class="col-lg-2 control-label pull-left" style="text-align: left"><b>`C</b></label></div>
            </div>

<!--            <h6>Test Multi Select</h6>
            <div class="row">
                <div class="six columns">
                    <label for="relTest">Rel Test (Multiselect) *</label>
                    <select name="relTest[]" id="relTest" multiple multiselect-search="true" multiselect-select-all="false" style="width:100%" required>
                        <?php
                        $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '008' ORDER BY code ASC";
                        $resSite = mysqli_query($con, $sqlDdSite);
                        while ($rowSite = mysqli_fetch_array($resSite)):
                            ?>
                            <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                        <?php endwhile; ?>
                    </select>
                </div>
            </div>-->
<!--
            2 NUMBER INPUT
            <div class="row">
                <div class="two columns">Label</div>
                <div class="one columns">Input</div>
                <div class="one columns">Label</div>
                <div class="two columns">&nbsp;</div>
                <div class="two columns">Label</div>
                <div class="one columns">Input</div>
                <div class="one columns">Label</div>
                <div class="two columns">&nbsp;</div>
            </div>
            2 DROPDOWN
            <div class="row">
                <div class="two columns">Label</div>
                <div class="three columns">Input</div>
                <div class="one columns">&nbsp;</div>
                <div class="two columns">Label</div>
                <div class="three columns">Input</div>
                <div class="one columns">&nbsp;</div>
            </div>
            <div class="row">
                <div class="two columns">Label</div>
                <div class="three columns">Input</div>
                <div class="one columns">&nbsp;</div>
                <div class="two columns">Label</div>
                <div class="one columns">Input</div>
                <div class="one columns">Label</div>
                <div class="two columns">&nbsp;</div>
            </div>
-->

            <button onclick="location.href = 'form_power_list.php'" type="button" id="listBtn"><i class='bx bx-list-ol bx-fw' ></i> List</button>
            <button type="submit" id="myBtn" class="btn btn-primary"><i class='bx bx-send bx-fw' ></i> Send</button>
        </form>
        <script>
            // Get the modal
            var modalparent = document.getElementsByClassName("modal_multi");

            // Get the button that opens the modal
            var modal_btn_multi = document.getElementsByClassName("myBtn_multi");

            // Get the <span> element that closes the modal
            var span_close_multi = document.getElementsByClassName("close_multi");

            // When the user clicks the button, open the modal
            function setDataIndex() {
                for (i = 0; i < modal_btn_multi.length; i++) {
                    modal_btn_multi[i].setAttribute('data-index', i);
                    modalparent[i].setAttribute('data-index', i);
                    span_close_multi[i].setAttribute('data-index', i);
                }
            }

            for (i = 0; i < modal_btn_multi.length; i++) {
                modal_btn_multi[i].onclick = function () {
                    var ElementIndex = this.getAttribute('data-index');
                    modalparent[ElementIndex].style.display = "block";
                };

                // When the user clicks on <span> (x), close the modal
                span_close_multi[i].onclick = function () {
                    var ElementIndex = this.getAttribute('data-index');
                    modalparent[ElementIndex].style.display = "none";
                };
            }

            window.onload = function () {
                setDataIndex();
            };

            window.onclick = function (event) {
                if (event.target === modalparent[event.target.getAttribute('data-index')]) {
                    modalparent[event.target.getAttribute('data-index')].style.display = "none";
                }
            };
        </script>
        <script src="js/multiselect-dropdown.js" ></script>
    </body>
</html>