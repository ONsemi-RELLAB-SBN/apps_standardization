<?php
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

include 'form_template.php';
include 'class/get_parameter.php';
$id = $_GET['edit'];
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>HW FORM EDIT | Standardization Survey</title>
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
        
        </script>
        
    </head>
    <body>
        <div class="twelve columns">&nbsp;</div>
        <div class="twelve columns">&nbsp;</div>
        <h5 style="border-left: none;">Hardware Details</h5>
        <form id="update_hardware_form" role="form" action="crud_update_hardware.php" method="get">
            <input type="hidden" id="id" name="id" value="<?php echo $id; ?>">
            <?php
                $sqlFormData = "SELECT * FROM gest_form_hw WHERE id = '$id'";
                $resForm = mysqli_query($con, $sqlFormData);
                while ($rowForm = mysqli_fetch_array($resForm)): ?>
                <h6>General</h6>
                <div class="row">
                    <div class="two columns"><label for="lab_location">Lab Location *</label></div>
                    <div class="three columns">
                        <select id="lab_location" name="lab_location" style="width: 100%" required>
                            <option value="" selected=""></option>
                            <?php
                            $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '002' ORDER BY code ASC";
                            $resSite = mysqli_query($con, $sqlDdSite);
                            while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                <option value="<?php echo $rowSite['code']; ?>" <?php if ($rowSite['code'] === $rowForm['lab_location']) { ?>selected<?php } ?>><?php echo $rowSite['name']; ?></option>
                            <?php endwhile; ?>
                        </select>
                    </div>
                    <div class="one columns">&nbsp;</div>
                    <div class="two columns"><label for="strategy">onsemi Strategy *</label></div>
                    <div class="three columns">
                        <select id="strategy" name="strategy" style="width: 100%" required>
                            <option value="" selected=""></option>
                            <?php
                            $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '003' ORDER BY code ASC";
                            $resSite = mysqli_query($con, $sqlDdSite);
                            while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                <option value="<?php echo $rowSite['code']; ?>" <?php if ($rowSite['code'] === $rowForm['strategy']) { ?>selected<?php } ?>><?php echo $rowSite['name']; ?></option>
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
                                <option value="<?php echo $rowSite['code']; ?>" <?php if ($rowSite['code'] === $rowForm['standard_category']) { ?>selected<?php } ?>><?php echo $rowSite['name']; ?></option>
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
                            while ($rowSite = mysqli_fetch_array($resSite)): ?>
                            <option value="<?php echo $rowSite['code']; ?>" <?php if ($rowSite['code'] === $rowForm['champion']) { ?>selected<?php } ?>><?php echo $rowSite['name']; ?></option>
                            <?php endwhile; ?>
                        </select>
                    </div>
                    <div class="one columns">&nbsp;</div>
                </div>

                <h6>Hardware Identity</h6>
                <div class="row">
                    <div class="two columns"><label for="hw_type">Hardware Type *</label></div>
                    <div class="three columns">
                        <select id="hw_type" name="hw_type" style="width: 100%" required>
                            <option value="" selected=""></option>
                            <?php
                            $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '022' ORDER BY code ASC";
                            $resSite = mysqli_query($con, $sqlDdSite);
                            while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                <option value="<?php echo $rowSite['code']; ?>" <?php if ($rowSite['code'] === $rowForm['hw_type']) { ?>selected<?php } ?>><?php echo $rowSite['name']; ?></option>
                            <?php endwhile; ?>
                        </select>
                    </div>
                    <div class="one columns">&nbsp;</div>
                    <div class="two columns"><label for="manufacturer">Manufacturer *</label></div>
                    <div class="three columns">
                        <select id="manufacturer" name="manufacturer" style="width: 100%" required>
                            <option value="" selected=""></option>
                            <?php
                            $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '022' ORDER BY code ASC";
                            $resSite = mysqli_query($con, $sqlDdSite);
                            while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                <option value="<?php echo $rowSite['code']; ?>" <?php if ($rowSite['code'] === $rowForm['manufacturer']) { ?>selected<?php } ?>><?php echo $rowSite['name']; ?></option>
                            <?php endwhile; ?>
                        </select>
                    </div>
                    <div class="one columns">&nbsp;</div>
                </div>
                <div class="row">
                    <div class="two columns"><label for="assembly_no">Assembly Number *</label></div>
                    <div class="three columns"><input type="text" id="assembly_no" name="assembly_no" placeholder="Assembly Number" value="<?php echo $rowForm['assembly_no']; ?>" required> </div>
                </div>

                <h6>Capability</h6>
                <div class="row">
                    <div class="two columns"><label for="volt_rating">Voltage Rating *</label></div>
                    <div class="one columns"><input type="number" step="0.001" id="volt_rating" name="volt_rating" value="<?php echo $rowForm['voltage_rating']; ?>" required> </div>
                    <div class="one columns"><label for="volt_rating" style="text-align: left"><b>V</b></label></div>
                    <div class="two columns">&nbsp;</div>
                    <div class="two columns"><label for="curr_rating">Current Rating *</label></div>
                    <div class="one columns"><input type="number" step="0.001" id="curr_rating" name="curr_rating" value="<?php echo $rowForm['current_rating']; ?>" required> </div>
                    <div class="one columns"><label for="curr_rating" style="text-align: left"><b>A</b></label></div>
                    <div class="two columns">&nbsp;</div>
                </div>
                <div class="row">
                    <div class="two columns"><label for="temp_rating">Temp Rating *</label></div>
                    <div class="one columns"><input type="number" step="0.001" id="temp_rating" name="temp_rating" value="<?php echo $rowForm['temp_rating']; ?>" required> </div>
                    <div class="one columns"><label for="temp_rating" style="text-align: left"><b>`C</b></label></div>
                    <div class="two columns">&nbsp;</div>
                    <div class="two columns"><label for="support_stress">Supported Stresses *</label></div>
                    <div class="three columns">
                        <select id="support_stress" name="support_stress" style="width: 100%" required>
                            <option value="" selected=""></option>
                            <?php
                            $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '022' ORDER BY code ASC";
                            $resSite = mysqli_query($con, $sqlDdSite);
                            while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                <option value="<?php echo $rowSite['code']; ?>" <?php if ($rowSite['code'] === $rowForm['support_stress']) { ?>selected<?php } ?>><?php echo $rowSite['name']; ?></option>
                            <?php endwhile; ?>
                        </select>
                    </div>
                    <div class="one columns">&nbsp;</div>
                </div>
                <div class="row">
                    <div class="two columns"><label for="daq_capability">DAQ Monitoring Capability *</label></div>
                    <div class="three columns">
                        <select id="daq_capability" name="daq_capability" style="width: 100%" required>
                            <option value="" selected=""></option>
                            <?php
                            $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '022' ORDER BY code ASC";
                            $resSite = mysqli_query($con, $sqlDdSite);
                            while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                <option value="<?php echo $rowSite['code']; ?>" <?php if ($rowSite['code'] === $rowForm['daq_monitoring']) { ?>selected<?php } ?>><?php echo $rowSite['name']; ?></option>
                            <?php endwhile; ?>
                        </select>
                    </div>
                </div>

                <h6>Characteristic</h6>
                <div class="row">
                    <div class="two columns"><label for="pcb_material">PCB Material *</label></div>
                    <div class="three columns">
                        <select id="pcb_material" name="pcb_material" style="width: 100%" required>
                            <option value="" selected=""></option>
                            <?php
                            $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '022' ORDER BY code ASC";
                            $resSite = mysqli_query($con, $sqlDdSite);
                            while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                <option value="<?php echo $rowSite['code']; ?>" <?php if ($rowSite['code'] === $rowForm['pcb_material']) { ?>selected<?php } ?>><?php echo $rowSite['name']; ?></option>
                            <?php endwhile; ?>
                        </select>
                    </div>
                    <div class="one columns">&nbsp;</div>
                    <div class="two columns"><label for="mb_dimension_l">Motherboard Dimension (L) *</label></div>
                    <div class="one columns"><input type="number" step="0.001" id="mb_dimension_l" name="mb_dimension_l" value="<?php echo $rowForm['mb_dimension_l']; ?>" required> </div>
                    <div class="one columns"><label for="mb_dimension_l" style="text-align: left"><b>mm</b></label></div>
                    <div class="two columns">&nbsp;</div>
                </div>
                <div class="row">
                    <div class="two columns"><label for="frame_material">Frame Material *</label></div>
                    <div class="three columns">
                        <select id="frame_material" name="frame_material" style="width: 100%" required>
                            <option value="" selected=""></option>
                            <?php
                            $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '022' ORDER BY code ASC";
                            $resSite = mysqli_query($con, $sqlDdSite);
                            while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                <option value="<?php echo $rowSite['code']; ?>" <?php if ($rowSite['code'] === $rowForm['frame_material']) { ?>selected<?php } ?>><?php echo $rowSite['name']; ?></option>
                            <?php endwhile; ?>
                        </select>
                    </div>
                    <div class="one columns">&nbsp;</div>
                    <div class="two columns"><label for="mb_dimension_w">(W) *</label></div>
                    <div class="one columns"><input type="number" step="0.001" id="mb_dimension_w" name="mb_dimension_w" value="<?php echo $rowForm['mb_dimension_w']; ?>" required> </div>
                    <div class="one columns"><label for="mb_dimension_w" style="text-align: left"><b>mm</b></label></div>
                    <div class="two columns">&nbsp;</div>
                </div>
                <div class="row">
                    <div class="two columns"><label for="board_coat">Board Coating *</label></div>
                    <div class="three columns">
                        <select id="board_coat" name="board_coat" style="width: 100%" required>
                            <option value="" selected=""></option>
                            <?php
                            $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '022' ORDER BY code ASC";
                            $resSite = mysqli_query($con, $sqlDdSite);
                            while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                <option value="<?php echo $rowSite['code']; ?>" <?php if ($rowSite['code'] === $rowForm['board_coating']) { ?>selected<?php } ?>><?php echo $rowSite['name']; ?></option>
                            <?php endwhile; ?>
                        </select>
                    </div>
                    <div class="one columns">&nbsp;</div>
                    <div class="two columns"><label for="mb_dimension_t">(T) *</label></div>
                    <div class="one columns"><input type="number" step="0.001" id="mb_dimension_t" name="mb_dimension_t" value="<?php echo $rowForm['no_layer']; ?>" required> </div>
                    <div class="one columns"><label for="mb_dimension_t" style="text-align: left"><b>mm</b></label></div>
                    <div class="two columns">&nbsp;</div>
                </div>
                <div class="row">
                    <div class="two columns"><label for="no_layers">Number of Layers *</label></div>
                    <div class="one columns"><input type="number" step="0.001" id="no_layers" name="no_layers" value="<?php echo $rowForm['no_layer']; ?>" required> </div>
                    <div class="one columns"><label for="no_layers" style="text-align: left"><b>layers</b></label></div>
                </div>

                <h7 style="color:orange">Motherboard to DUT interface</h7>
                <div class="row">
                    <div class="two columns"><label for="universal">Universal/dedicated *</label></div>
                    <div class="three columns">
                        <select id="universal" name="universal" style="width: 100%" required>
                            <option value="" selected=""></option>
                            <?php
                            $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '011' ORDER BY code ASC";
                            $resSite = mysqli_query($con, $sqlDdSite);
                            while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                <option value="<?php echo $rowSite['code']; ?>" <?php if ($rowSite['code'] === $rowForm['mb_universal_dedicated']) { ?>selected<?php } ?>><?php echo $rowSite['name']; ?></option>
                            <?php endwhile; ?>
                        </select>
                    </div>
                    <div class="one columns">
                        <label for="toggle_01" class="view-image">Image</label>
                        <input type="checkbox" id="toggle_01">
                        <dialog>
                            <label for="toggle_01" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                            <img id="myImg" src="image/hardware/001.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                        </dialog>
                    </div>
                    <div class="two columns"><label for="socket_conn_type">Socket/connector type *</label></div>
                    <div class="three columns">
                        <select id="socket_conn_type" name="socket_conn_type" style="width: 100%" required>
                            <option value="" selected=""></option>
                            <?php
                            $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '012' ORDER BY code ASC";
                            $resSite = mysqli_query($con, $sqlDdSite);
                            while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                <option value="<?php echo $rowSite['code']; ?>" <?php if ($rowSite['code'] === $rowForm['mb_socket_type']) { ?>selected<?php } ?>><?php echo $rowSite['name']; ?></option>
                            <?php endwhile; ?>
                        </select>
                    </div>
                    <div class="one columns">
                        <label for="toggle_02" class="view-image">Image</label>
                        <input type="checkbox" id="toggle_02">
                        <dialog>
                            <label for="toggle_02" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                            <img id="myImg" src="image/hardware/002.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                        </dialog>
                    </div>
                </div>
                <div class="row">
                    <div class="two columns"><label for="socket_conn_qty">Socket/connector qty *</label></div>
                    <div class="one columns"><input type="number" step="0.001" id="socket_conn_qty" name="socket_conn_qty" value="<?php echo $rowForm['mb_socket_qty']; ?>" required> </div>
                    <div class="one columns"><label for="socket_conn_qty" style="text-align: left"><b>pcs</b></label></div>
                    <div class="two columns">&nbsp;</div>
                    <div class="two columns"><label for="socket_conn_pin_qty">Socket/connector pin qty *</label></div>
                    <div class="one columns"><input type="number" step="0.001" id="socket_conn_pin_qty" name="socket_conn_pin_qty" value="<?php echo $rowForm['mb_socket_pin_qty']; ?>" required> </div>
                    <div class="one columns"><label for="socket_conn_pin_qty" style="text-align: left"><b>pins</b></label></div>
                    <div class="two columns">&nbsp;</div>
                </div>
                <div class="row">
                    <div class="two columns"><label for="socket_con_pin_pitch">Socket/connector pin pitch *</label></div>
                    <div class="one columns"><input type="number" step="0.001" id="socket_con_pin_pitch" name="socket_con_pin_pitch" value="<?php echo $rowForm['mb_socket_pin_pitch']; ?>" required> </div>
                    <div class="one columns"><label for="socket_con_pin_pitch" style="text-align: left"><b>mm</b></label></div>
                    <div class="two columns">&nbsp;</div>
                    <div class="two columns"><label for="support_package">Supported cards/packages *</label></div>
                    <div class="three columns">
                        <select id="support_package" name="support_package" style="width: 100%" required>
                            <option value="" selected=""></option>
                            <?php
                            $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '022' ORDER BY code ASC";
                            $resSite = mysqli_query($con, $sqlDdSite);
                            while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                <option value="<?php echo $rowSite['code']; ?>" <?php if ($rowSite['code'] === $rowForm['mb_support_card']) { ?>selected<?php } ?>><?php echo $rowSite['name']; ?></option>
                            <?php endwhile; ?>
                        </select>
                    </div>
                    <div class="one columns">
                        <label for="toggle_03" class="view-image">Image</label>
                        <input type="checkbox" id="toggle_03">
                        <dialog>
                            <label for="toggle_03" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                            <img id="myImg" src="image/hardware/003.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                        </dialog>
                    </div>
                </div>

                <h7 style="color:orange">Load Cards</h7>
                <div class="row">
                    <div class="two columns"><label for="max_load_card_qty">Max load card qty *</label></div>
                    <div class="one columns"><input type="number" step="0.001" id="max_load_card_qty" name="max_load_card_qty" value="<?php echo $rowForm['lc_max_qty']; ?>" required></div>
                    <div class="one columns"><label for="max_load_card_qty" style="text-align: left"><b>pcs</b></label></div>
                    <div class="two columns">&nbsp;</div>
                    <div class="two columns"><label for="load_card_pin_qty">Load card pin qty *</label></div>
                    <div class="one columns"><input type="number" step="0.001" id="load_card_pin_qty" name="load_card_pin_qty" value="<?php echo $rowForm['lc_pin_qty']; ?>" required> </div>
                    <div class="one columns"><label for="load_card_pin_qty" style="text-align: left"><b>pins</b></label></div>
                    <div class="one columns">&nbsp;</div>
                    <div class="one columns">
                        <label for="toggle_04" class="view-image">Image</label>
                        <input type="checkbox" id="toggle_04">
                        <dialog>
                            <label for="toggle_04" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                            <img id="myImg" src="image/hardware/004.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                        </dialog>
                    </div>
                </div>
                <div class="row">
                    <div class="two columns"><label for="load_card_pin_pitch">Load card pin pitch *</label></div>
                    <div class="one columns"><input type="number" step="0.001" id="load_card_pin_pitch" name="load_card_pin_pitch" value="<?php echo $rowForm['lc_pin_pitch']; ?>" required></div>
                    <div class="one columns"><label for="load_card_pin_pitch" style="text-align: left"><b>mm</b></label></div>
                    <div class="one columns">&nbsp;</div>
                    <div class="one columns">
                        <label for="toggle_05" class="view-image">Image</label>
                        <input type="checkbox" id="toggle_05">
                        <dialog>
                            <label for="toggle_05" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                            <img id="myImg" src="image/hardware/005.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                        </dialog>
                    </div>
                </div>

                <h7 style="color:orange">Program Cards</h7>
                <div class="row">
                    <div class="two columns"><label for="max_prog_card_qty">Max program card qty *</label></div>
                    <div class="one columns"><input type="number" step="0.001" id="max_prog_card_qty" name="max_prog_card_qty" value="<?php echo $rowForm['pc_max_qty']; ?>" required></div>
                    <div class="one columns"><label for="max_prog_card_qty" style="text-align: left"><b>pcs</b></label></div>
                    <div class="two columns">&nbsp;</div>
                    <div class="two columns"><label for="prog_card_pin_qty">Program card pin qty *</label></div>
                    <div class="one columns"><input type="number" step="0.001" id="prog_card_pin_qty" name="prog_card_pin_qty" value="<?php echo $rowForm['pc_pin_qty']; ?>" required> </div>
                    <div class="one columns"><label for="prog_card_pin_qty" style="text-align: left"><b>pins</b></label></div>
                    <div class="one columns">&nbsp;</div>
                    <div class="one columns">
                        <label for="toggle_06" class="view-image">Image</label>
                        <input type="checkbox" id="toggle_06">
                        <dialog>
                            <label for="toggle_06" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                            <img id="myImg" src="image/hardware/006.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                        </dialog>
                    </div>
                </div>
                <div class="row">
                    <div class="two columns"><label for="prog_card_pin_pitch">Program card pin pitch *</label></div>
                    <div class="one columns"><input type="number" step="0.001" id="prog_card_pin_pitch" name="prog_card_pin_pitch" value="<?php echo $rowForm['pc_pin_pitch']; ?>" required></div>
                    <div class="one columns"><label for="prog_card_pin_pitch" style="text-align: left"><b>mm</b></label></div>
                    <div class="one columns">&nbsp;</div>
                    <div class="one columns">
                        <label for="toggle_07" class="view-image">Image</label>
                        <input type="checkbox" id="toggle_07">
                        <dialog>
                            <label for="toggle_07" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                            <img id="myImg" src="image/hardware/007.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                        </dialog>
                    </div>
                </div>

                <h7 style="color:orange">Motherboard to chamber interface</h7>
                <div class="row">
                    <div class="two columns"><label for="conn_type">Connector Type *</label></div>
                    <div class="one columns"><input type="number" step="0.001" id="conn_type" name="conn_type" value="<?php echo $rowForm['connector_type']; ?>" required> </div>
                    <div class="one columns"><label for="conn_type" style="text-align: left"><b>&nbsp;</b></label></div>
                    <div class="one columns">&nbsp;</div>
                    <div class="one columns">
                        <label for="toggle_07" class="view-image">Image</label>
                        <input type="checkbox" id="toggle_07">
                        <dialog>
                            <label for="toggle_07" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                            <img id="myImg" src="image/hardware/008.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                        </dialog>
                    </div>
                    <div class="two columns"><label for="no_pins">Number of pins *</label></div>
                    <div class="one columns"><input type="number" step="0.001" id="no_pins" name="no_pins" value="<?php echo $rowForm['no_pin']; ?>" required> </div>
                    <div class="one columns"><label for="no_pins" style="text-align: left"><b>pins</b></label></div>
                    <div class="one columns">&nbsp;</div>
                    <div class="one columns">
                        <label for="toggle_08" class="view-image">Image</label>
                        <input type="checkbox" id="toggle_08">
                        <dialog>
                            <label for="toggle_08" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                            <img id="myImg" src="image/hardware/009.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                        </dialog>
                    </div>
                </div>
                <div class="row">
                    <div class="two columns"><label for="pin_pitch">Pin pitch *</label></div>
                    <div class="one columns"><input type="number" step="0.001" id="pin_pitch" name="pin_pitch" value="<?php echo $rowForm['pin_pitch']; ?>" required> </div>
                    <div class="one columns"><label for="pin_pitch" style="text-align: left"><b>mm</b></label></div>
                    <div class="one columns">&nbsp;</div>
                    <div class="one columns">
                        <label for="toggle_09" class="view-image">Image</label>
                        <input type="checkbox" id="toggle_09">
                        <dialog>
                            <label for="toggle_09" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                            <img id="myImg" src="image/hardware/009.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                        </dialog>
                    </div>
                    <div class="two columns"><label for="edge_thick">Edgefinger thickness *</label></div>
                    <div class="one columns"><input type="number" step="0.001" id="edge_thick" name="edge_thick" value="<?php echo $rowForm['edgefinger_thickness']; ?>" required> </div>
                    <div class="one columns"><label for="edge_thick" style="text-align: left"><b>mm</b></label></div>
                    <div class="one columns">&nbsp;</div>
                    <div class="one columns">
                        <label for="toggle_10" class="view-image">Image</label>
                        <input type="checkbox" id="toggle_10">
                        <dialog>
                            <label for="toggle_10" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                            <img id="myImg" src="image/hardware/010.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                        </dialog>
                    </div>
                </div>

                <h6>Capacity</h6>
                <div class="row">
                    <div class="two columns"><label for="max_dut_mb">Max DUT qty per motherboard *</label></div>
                    <div class="one columns"><input type="number" step="0.001" id="max_dut_mb" name="max_dut_mb" value="<?php echo $rowForm['max_dut_qty_mb']; ?>" required> </div>
                    <div class="one columns"><label for="max_dut_mb" style="text-align: left"><b>DUTs</b></label></div>
                </div>
            <?php endwhile; ?>
            <button onclick="location.href = 'form_hardware_list.php'" type="button" id="listBtn"><i class='bx bx-list-ol bx-fw' ></i> List</button>
            <button type="submit" id="myBtn" class="btn btn-primary"><i class='bx bx-send bx-fw' ></i> Update</button>
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