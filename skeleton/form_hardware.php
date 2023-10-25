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
        <link rel="shortcut icon" href="../image/dribbble.ico">

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
            
            #toggle_01, #toggle_02, #toggle_03, #toggle_04, #toggle_05, #toggle_06, #toggle_07, #toggle_08, #toggle_09, #toggle_10{
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
        <div class="twelve columns">&nbsp;</div>
        <div class="twelve columns">&nbsp;</div>
        <h5 style="border-left: none;">Hardware Details</h5>
        <form id="add_hardware_form" class="form-horizontal" role="form" action="crud_add_hardware.php" method="get">
            <h6>General</h6>
            <div class="row">
                <div class="two columns"><label for="lab_location" class="col-lg-2 control-label">Lab Location *</label></div>
                <div class="three columns">
                    <select id="lab_location" name="lab_location" class="js-example-basic-single" style="width: 100%" required>
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
                <div class="two columns"><label for="strategy" class="col-lg-2 control-label">onsemi Strategy *</label></div>
                <div class="three columns">
                    <select id="strategy" name="strategy" class="js-example-basic-single" style="width: 100%" required>
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
                <div class="two columns"><label for="standardization" class="col-lg-2 control-label">Standardization Category *</label></div>
                <div class="three columns">
                    <select id="standardization" name="standardization" class="js-example-basic-single" style="width: 100%" required>
                        <option value="" selected=""></option>
                        <?php
                        $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '004' ORDER BY code ASC";
                        $resSite = mysqli_query($con, $sqlDdSite);
                        while ($rowSite = mysqli_fetch_array($resSite)): ?>
                            <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                        <?php endwhile; ?>
                    </select>
                </div>
                <div class="one columns">&nbsp;</div>
                <div class="two columns"><label for="champion" class="col-lg-2 control-label">Champion *</label></div>
                <div class="three columns">
                    <select id="champion" name="champion" class="js-example-basic-single" style="width: 100%" required>
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

            <h6>Hardware Identity</h6>
            <div class="row">
                <div class="two columns"><label for="hw_type" class="col-lg-2 control-label">Hardware Type *</label></div>
                <div class="three columns">
                    <select id="hw_type" name="hw_type" class="js-example-basic-single" style="width: 100%" required>
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
                <div class="two columns"><label for="manufacturer" class="col-lg-2 control-label">Manufacturer *</label></div>
                <div class="three columns">
                    <select id="manufacturer" name="manufacturer" class="js-example-basic-single" style="width: 100%" required>
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
            </div>
            <div class="row">
                <div class="two columns"><label for="assembly_no" class="col-lg-2 control-label">Assembly Number *</label></div>
                <div class="three columns"><input type="text" class="form-control" id="assembly_no" name="assembly_no" placeholder="Assembly Number" value="" required> </div>
            </div>

            <h6>Capability</h6>
            <div class="row">
                <div class="two columns"><label for="volt_rating" class="col-lg-2 control-label">Voltage Rating *</label></div>
                <div class="one columns"><input type="number" 0 class="form-control" id="volt_rating" name="volt_rating" value="" required> </div>
                <div class="one columns"><label for="volt_rating" class="col-lg-2 control-label pull-left" style="text-align: left"><b>V</b></label></div>
                <div class="two columns">&nbsp;</div>
                <div class="two columns"><label for="curr_rating" class="col-lg-2 control-label">Current Rating *</label></div>
                <div class="one columns"><input type="number" step="0.001" class="form-control" id="curr_rating" name="curr_rating" value="" required> </div>
                <div class="one columns"><label for="curr_rating" class="col-lg-2 control-label pull-left" style="text-align: left"><b>A</b></label></div>
                <div class="two columns">&nbsp;</div>
            </div>
            <div class="row">
                <div class="two columns"><label for="temp_rating" class="col-lg-2 control-label">Temp Rating *</label></div>
                <div class="one columns"><input type="number" step="0.001" class="form-control" id="temp_rating" name="temp_rating" value="" required> </div>
                <div class="one columns"><label for="temp_rating" class="col-lg-2 control-label pull-left" style="text-align: left"><b>`C</b></label></div>
                <div class="two columns">&nbsp;</div>
                <div class="two columns"><label for="support_stress" class="col-lg-2 control-label">Supported Stresses *</label></div>
                <div class="three columns">
                    <select id="support_stress" name="support_stress" class="js-example-basic-single" style="width: 100%" required>
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
            </div>
            <div class="row">
                <div class="two columns"><label for="daq_capability" class="col-lg-2 control-label">DAQ Monitoring Capability *</label></div>
                <div class="three columns">
                    <select id="daq_capability" name="daq_capability" class="js-example-basic-single" style="width: 100%" required>
                        <option value="" selected=""></option>
                        <?php
                        $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '015' ORDER BY code ASC";
                        $resSite = mysqli_query($con, $sqlDdSite);
                        while ($rowSite = mysqli_fetch_array($resSite)): ?>
                            <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                        <?php endwhile; ?>
                    </select>
                </div>
            </div>

            <h6>Characteristic</h6>
            <div class="row">
                <div class="two columns"><label for="pcb_material" class="col-lg-2 control-label">PCB Material *</label></div>
                <div class="three columns">
                    <select id="pcb_material" name="pcb_material" class="js-example-basic-single" style="width: 100%" required>
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
                <div class="two columns"><label for="mb_dimension_l" class="col-lg-2 control-label">Motherboard Dimension (L) *</label></div>
                <div class="one columns"><input type="number" step="0.001" class="form-control" id="mb_dimension_l" name="mb_dimension_l" value="" required> </div>
                <div class="one columns"><label for="mb_dimension_l" class="col-lg-2 control-label pull-left" style="text-align: left"><b>mm</b></label></div>
                <div class="two columns">&nbsp;</div>
            </div>
            <div class="row">
                <div class="two columns"><label for="frame_material" class="col-lg-2 control-label">Frame Material *</label></div>
                <div class="three columns">
                    <select id="frame_material" name="frame_material" class="js-example-basic-single" style="width: 100%" required>
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
                <div class="two columns"><label for="mb_dimension_w" class="col-lg-2 control-label">(W) *</label></div>
                <div class="one columns"><input type="number" step="0.001" class="form-control" id="mb_dimension_w" name="mb_dimension_w" value="" required> </div>
                <div class="one columns"><label for="mb_dimension_w" class="col-lg-2 control-label pull-left" style="text-align: left"><b>mm</b></label></div>
                <div class="two columns">&nbsp;</div>
            </div>
            <div class="row">
                <div class="two columns"><label for="board_coat" class="col-lg-2 control-label">Board Coating *</label></div>
                <div class="three columns">
                    <select id="board_coat" name="board_coat" class="js-example-basic-single" style="width: 100%" required>
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
                <div class="two columns"><label for="mb_dimension_t" class="col-lg-2 control-label">(T) *</label></div>
                <div class="one columns"><input type="number" step="0.001" class="form-control" id="mb_dimension_t" name="mb_dimension_t" value="" required> </div>
                <div class="one columns"><label for="mb_dimension_t" class="col-lg-2 control-label pull-left" style="text-align: left"><b>mm</b></label></div>
                <div class="two columns">&nbsp;</div>
            </div>
            <div class="row">
                <div class="two columns"><label for="no_layers" class="col-lg-2 control-label">Number of Layers *</label></div>
                <div class="one columns"><input type="number" step="0.001" class="form-control" id="no_layers" name="no_layers" value="" required> </div>
                <div class="one columns"><label for="no_layers" class="col-lg-2 control-label pull-left" style="text-align: left"><b>layers</b></label></div>
            </div>

            <h7 style="color:orange">Motherboard to DUT interface</h7>
            <div class="row">
                <div class="two columns"><label for="universal" class="col-lg-2 control-label">Universal/dedicated *</label></div>
                <div class="three columns">
                    <select id="universal" name="universal" class="js-example-basic-single" style="width: 100%" required>
                        <option value="" selected=""></option>
                        <?php
                        $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '015' ORDER BY code ASC";
                        $resSite = mysqli_query($con, $sqlDdSite);
                        while ($rowSite = mysqli_fetch_array($resSite)): ?>
                            <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                        <?php endwhile; ?>
                    </select>
                </div>
                <div class="one columns">
                    <label for="toggle_01">View Sample</label>
                    <input type="checkbox" id="toggle_01">
                    <dialog>
                        <label for="toggle_01" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                        <img id="myImg" src="../image/hardware/001.png" alt="image">
                    </dialog>
                </div>
                <div class="two columns"><label for="socket_conn_type" class="col-lg-2 control-label">Socket/connector type *</label></div>
                <div class="three columns">
                    <select id="socket_conn_type" name="socket_conn_type" class="js-example-basic-single" style="width: 100%" required>
                        <option value="" selected=""></option>
                        <?php
                        $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '015' ORDER BY code ASC";
                        $resSite = mysqli_query($con, $sqlDdSite);
                        while ($rowSite = mysqli_fetch_array($resSite)): ?>
                            <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                        <?php endwhile; ?>
                    </select>
                </div>
                <div class="one columns">
                    <label for="toggle_02">View Sample</label>
                    <input type="checkbox" id="toggle_02">
                    <dialog>
                        <label for="toggle_02" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                        <img id="myImg" src="../image/hardware/002.png" alt="image">
                    </dialog>
                </div>
            </div>
            <div class="row">
                <div class="two columns"><label for="socket_conn_qty" class="col-lg-2 control-label">Socket/connector qty *</label></div>
                <div class="one columns"><input type="number" step="0.001" class="form-control" id="socket_conn_qty" name="socket_conn_qty" value="" required> </div>
                <div class="one columns"><label for="socket_conn_qty" class="col-lg-2 control-label pull-left" style="text-align: left"><b>pcs</b></label></div>
                <div class="two columns">&nbsp;</div>
                <div class="two columns"><label for="socket_conn_pin_qty" class="col-lg-2 control-label">Socket/connector pin qty *</label></div>
                <div class="one columns"><input type="number" step="0.001" class="form-control" id="socket_conn_pin_qty" name="socket_conn_pin_qty" value="" required> </div>
                <div class="one columns"><label for="socket_conn_pin_qty" class="col-lg-2 control-label pull-left" style="text-align: left"><b>pins</b></label></div>
                <div class="two columns">&nbsp;</div>
            </div>
            <div class="row">
                <div class="two columns"><label for="socket_con_pin_pitch" class="col-lg-2 control-label">Socket/connector pin pitch *</label></div>
                <div class="one columns"><input type="number" step="0.001" class="form-control" id="socket_con_pin_pitch" name="socket_con_pin_pitch" value="" required> </div>
                <div class="one columns"><label for="socket_con_pin_pitch" class="col-lg-2 control-label pull-left" style="text-align: left"><b>mm</b></label></div>
                <div class="two columns">&nbsp;</div>
                <div class="two columns"><label for="support_package" class="col-lg-2 control-label">Supported cards/packages *</label></div>
                <div class="three columns">
                    <select id="support_package" name="support_package" class="js-example-basic-single" style="width: 100%" required>
                        <option value="" selected=""></option>
                        <?php
                        $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '015' ORDER BY code ASC";
                        $resSite = mysqli_query($con, $sqlDdSite);
                        while ($rowSite = mysqli_fetch_array($resSite)): ?>
                            <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                        <?php endwhile; ?>
                    </select>
                </div>
                <div class="one columns">
                    <label for="toggle_03">View Sample</label>
                    <input type="checkbox" id="toggle_03">
                    <dialog>
                        <label for="toggle_03" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                        <img id="myImg" src="../image/hardware/003.png" alt="image">
                    </dialog>
                </div>
            </div>

            <h7 style="color:orange">Load Cards</h7>
            <div class="row">
                <div class="two columns"><label for="max_load_card_qty" class="col-lg-2 control-label">Max load card qty *</label></div>
                <div class="one columns"><input type="number" step="0.001" class="form-control" id="max_load_card_qty" name="max_load_card_qty" value="" required></div>
                <div class="one columns"><label for="max_load_card_qty" class="col-lg-2 control-label pull-left" style="text-align: left"><b>pcs</b></label></div>
                <div class="two columns">&nbsp;</div>
                <div class="two columns"><label for="load_card_pin_qty" class="col-lg-2 control-label">Load card pin qty *</label></div>
                <div class="one columns"><input type="number" step="0.001" class="form-control" id="load_card_pin_qty" name="load_card_pin_qty" value="" required> </div>
                <div class="one columns"><label for="load_card_pin_qty" class="col-lg-2 control-label pull-left" style="text-align: left"><b>pins</b></label></div>
                <div class="one columns">&nbsp;</div>
                <div class="one columns">
                    <label for="toggle_04">View Sample</label>
                    <input type="checkbox" id="toggle_04">
                    <dialog>
                        <label for="toggle_04" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                        <img id="myImg" src="../image/hardware/004.png" alt="image">
                    </dialog>
                </div>
            </div>
            <div class="row">
                <div class="two columns"><label for="load_card_pin_pitch" class="col-lg-2 control-label">Load card pin pitch *</label></div>
                <div class="one columns"><input type="number" step="0.001" class="form-control" id="load_card_pin_pitch" name="load_card_pin_pitch" value="" required></div>
                <div class="one columns"><label for="load_card_pin_pitch" class="col-lg-2 control-label pull-left" style="text-align: left"><b>mm</b></label></div>
                <div class="one columns">&nbsp;</div>
                <div class="one columns">
                    <label for="toggle_05">View Sample</label>
                    <input type="checkbox" id="toggle_05">
                    <dialog>
                        <label for="toggle_05" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                        <img id="myImg" src="../image/hardware/005.png" alt="image">
                    </dialog>
                </div>
            </div>

            <h7 style="color:orange">Program Cards</h7>
            <div class="row">
                <div class="two columns"><label for="max_prog_card_qty" class="col-lg-2 control-label">Max program card qty *</label></div>
                <div class="one columns"><input type="number" step="0.001" class="form-control" id="max_prog_card_qty" name="max_prog_card_qty" value="" required></div>
                <div class="one columns"><label for="max_prog_card_qty" class="col-lg-2 control-label pull-left" style="text-align: left"><b>pcs</b></label></div>
                <div class="two columns">&nbsp;</div>
                <div class="two columns"><label for="prog_card_pin_qty" class="col-lg-2 control-label">Program card pin qty *</label></div>
                <div class="one columns"><input type="number" step="0.001" class="form-control" id="prog_card_pin_qty" name="prog_card_pin_qty" value="" required> </div>
                <div class="one columns"><label for="prog_card_pin_qty" class="col-lg-2 control-label pull-left" style="text-align: left"><b>pins</b></label></div>
                <div class="one columns">&nbsp;</div>
                <div class="one columns">
                    <label for="toggle_06">View Sample</label>
                    <input type="checkbox" id="toggle_06">
                    <dialog>
                        <label for="toggle_06" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                        <img id="myImg" src="../image/hardware/006.png" alt="image">
                    </dialog>
                </div>
            </div>
            <div class="row">
                <div class="two columns"><label for="prog_card_pin_pitch" class="col-lg-2 control-label">Program card pin pitch *</label></div>
                <div class="one columns"><input type="number" step="0.001" class="form-control" id="prog_card_pin_pitch" name="prog_card_pin_pitch" value="" required></div>
                <div class="one columns"><label for="prog_card_pin_pitch" class="col-lg-2 control-label pull-left" style="text-align: left"><b>mm</b></label></div>
                <div class="one columns">&nbsp;</div>
                <div class="one columns">
                    <label for="toggle_07">View Sample</label>
                    <input type="checkbox" id="toggle_07">
                    <dialog>
                        <label for="toggle_07" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                        <img id="myImg" src="../image/hardware/007.png" alt="image">
                    </dialog>
                </div>
            </div>

            <h7 style="color:orange">Motherboard to chamber interface</h7>
            <div class="row">
                <div class="two columns"><label for="conn_type" class="col-lg-2 control-label">Connector Type *</label></div>
                <div class="one columns"><input type="number" step="0.001" class="form-control" id="conn_type" name="conn_type" value="" required> </div>
                <div class="one columns"><label for="conn_type" class="col-lg-2 control-label pull-left" style="text-align: left"><b>&nbsp;</b></label></div>
                <div class="one columns">&nbsp;</div>
                <div class="one columns">
                    <label for="toggle_07">View Sample</label>
                    <input type="checkbox" id="toggle_07">
                    <dialog>
                        <label for="toggle_07" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                        <img id="myImg" src="../image/hardware/008.png" alt="image">
                    </dialog>
                </div>
                <div class="two columns"><label for="no_pins" class="col-lg-2 control-label">Number of pins *</label></div>
                <div class="one columns"><input type="number" step="0.001" class="form-control" id="no_pins" name="no_pins" value="" required> </div>
                <div class="one columns"><label for="no_pins" class="col-lg-2 control-label pull-left" style="text-align: left"><b>pins</b></label></div>
                <div class="one columns">&nbsp;</div>
                <div class="one columns">
                    <label for="toggle_08">View Sample</label>
                    <input type="checkbox" id="toggle_08">
                    <dialog>
                        <label for="toggle_08" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                        <img id="myImg" src="../image/hardware/009.png" alt="image">
                    </dialog>
                </div>
            </div>
            <div class="row">
                <div class="two columns"><label for="pin_pitch" class="col-lg-2 control-label">Pin pitch *</label></div>
                <div class="one columns"><input type="number" step="0.001" class="form-control" id="pin_pitch" name="pin_pitch" value="" required> </div>
                <div class="one columns"><label for="pin_pitch" class="col-lg-2 control-label pull-left" style="text-align: left"><b>mm</b></label></div>
                <div class="one columns">&nbsp;</div>
                <div class="one columns">
                    <label for="toggle_09">View Sample</label>
                    <input type="checkbox" id="toggle_09">
                    <dialog>
                        <label for="toggle_09" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                        <img id="myImg" src="../image/hardware/009.png" alt="image">
                    </dialog>
                </div>
                <div class="two columns"><label for="edge_thick" class="col-lg-2 control-label">Edgefinger thickness *</label></div>
                <div class="one columns"><input type="number" step="0.001" class="form-control" id="edge_thick" name="edge_thick" value="" required> </div>
                <div class="one columns"><label for="edge_thick" class="col-lg-2 control-label pull-left" style="text-align: left"><b>mm</b></label></div>
                <div class="one columns">&nbsp;</div>
                <div class="one columns">
                    <label for="toggle_10">View Sample</label>
                    <input type="checkbox" id="toggle_10">
                    <dialog>
                        <label for="toggle_10" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                        <img id="myImg" src="../image/hardware/010.png" alt="image">
                    </dialog>
                </div>
            </div>

            <h6>Capacity</h6>
            <div class="row">
                <div class="two columns"><label for="max_dut_mb" class="col-lg-2 control-label">Max DUT qty per motherboard *</label></div>
                <div class="one columns"><input type="number" step="0.001" class="form-control" id="max_dut_mb" name="max_dut_mb" value="" required> </div>
                <div class="one columns"><label for="max_dut_mb" class="col-lg-2 control-label pull-left" style="text-align: left"><b>DUTs</b></label></div>
            </div>

            <button onclick="location.href = 'form_hardware_list.php'" type="button" id="backBtn"><i class='bx bx-list-ol bx-fw' ></i> List</button>
            <button type="submit" id="myBtn" class="btn btn-primary"><i class='bx bx-send bx-fw' ></i> Send</button>
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
    </body>
</html>