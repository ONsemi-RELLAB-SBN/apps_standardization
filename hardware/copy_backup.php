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
        <link rel="stylesheet" href="accordian.css"/>
        <style>
            #listBtn {
                display: block;
                position: fixed;
                top: 20px;
                right: 40px;
                z-index: 99;
                font-size: 18px;
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
                right: 180px;
                z-index: 99;
                font-size: 18px;
                outline: none;
                cursor: pointer;
            }

            #save-button:hover {
                background-color: orange;
                color: white;
            }
        </style>
        
        <script type="text/javascript">
        
        </script>
    </head>
    <body>
        <form id="copy_hardware_form" role="form" action="../crud/crud_add_hardware.php" method="get">
            <input type="hidden" id="id" name="id" value="<?php echo $id; ?>">
            <?php
                $sqlFormData = "SELECT * FROM gest_form_hw WHERE id = '$id'";
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
                        <li data-tab="tabCapability">Capability</li>
                        <li data-tab="tabCharacter">Characteristics</li>
                        <li data-tab="tabCapacity">Capacity</li>
                    </ul>
                    
                    <div class="tab-content active" id="tabIdentity">
                        <div class="row">
                            <div class="two columns"><label for="hw_type">Hardware Type *</label></div>
                            <div class="three columns">
                                <select id="hw_type" name="hw_type" style="width: 100%" required>
                                    <?php echo getDropdown('019', $rowForm['hw_type']); ?>
                                </select>
                            </div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="manufacturer">Manufacturer *</label></div>
                            <div class="three columns">
                                <input type="text" list="manufacturer_list" autocomplete="off" id="manufacturer" name="manufacturer" value="<?php echo getParameterValue($rowForm['manufacturer']); ?>" required>
                                <datalist id="manufacturer_list">
                                    <?php echo getDataList('018', $rowForm['manufacturer']); ?>
                                </datalist>
                            </div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="assembly_no">Assembly Number *</label></div>
                            <div class="three columns"><input type="text" id="assembly_no" name="assembly_no" placeholder="Assembly Number" value="<?php echo $rowForm['assembly_no']; ?>" required> </div>
                        </div>
                    </div>
                    
                    <div class="tab-content" id="tabCapability">
                        <div class="row">
                            <div class="two columns"><label for="volt_rating">Voltage Rating *</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="volt_rating" name="volt_rating" value="<?php echo $rowForm['voltage_rating']; ?>" > </div>
                            <div class="one columns"><label for="volt_rating" style="text-align: left"><b>V</b></label></div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="curr_rating">Current Rating *</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="curr_rating" name="curr_rating" value="<?php echo $rowForm['current_rating']; ?>" > </div>
                            <div class="one columns"><label for="curr_rating" style="text-align: left"><b>A</b></label></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="temp_rating">Temp Rating *</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="temp_rating" name="temp_rating" value="<?php echo $rowForm['temp_rating']; ?>" > </div>
                            <div class="one columns"><label for="temp_rating" style="text-align: left"><b>&#8451;</b></label></div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="support_stress">Supported Stresses *</label></div>
                            <div class="three columns">
                                <select id="support_stress" name="support_stress" style="width: 100%" >
                                    <option value="" selected=""></option>
                                    <?php
                                    $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '041' ORDER BY code ASC";
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
                                <select id="daq_capability" name="daq_capability" style="width: 100%" >
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
                    </div>
                    
                    <div class="tab-content" id="tabCharacter">
                        <div class="accordion">
                            <div class="accordion-item">
                                <a href="#" class="heading">
                                    <div class="icon"></div>
                                    <div class="title">General</div>
                                </a>
                                <div class="content">
                                    <div class="row">
                                        <div class="two columns"><label for="pcb_material">PCB Material</label></div>
                                        <div class="three columns">
                                            <select id="pcb_material" name="pcb_material" style="width: 100%" >
                                                <?php echo getDropdown('042', $rowForm['pcb_material']); ?>
                                            </select>
                                        </div>
                                        <div class="one columns">&nbsp;</div>
                                        <div class="two columns"><label for="mb_dimension_l">Motherboard Dimension (L)</label></div>
                                        <div class="two columns"><input type="number" step="0.001" id="mb_dimension_l" name="mb_dimension_l" value="<?php echo $rowForm['mb_dimension_l']; ?>" > </div>
                                        <div class="one columns"><label for="mb_dimension_l" style="text-align: left"><b>mm</b></label></div>
                                        <div class="one columns">&nbsp;</div>
                                    </div>
                                    <div class="row">
                                        <div class="two columns"><label for="frame_material">Frame Material</label></div>
                                        <div class="three columns">
                                            <select id="frame_material" name="frame_material" style="width: 100%" >
                                                <?php echo getDropdown('043', $rowForm['frame_material']); ?>
                                            </select>
                                        </div>
                                        <div class="one columns">&nbsp;</div>
                                        <div class="two columns"><label for="mb_dimension_w">(W)</label></div>
                                        <div class="two columns"><input type="number" step="0.001" id="mb_dimension_w" name="mb_dimension_w" value="<?php echo $rowForm['mb_dimension_w']; ?>" > </div>
                                        <div class="one columns"><label for="mb_dimension_w" style="text-align: left"><b>mm</b></label></div>
                                        <div class="one columns">&nbsp;</div>
                                    </div>
                                    <div class="row">
                                        <div class="two columns"><label for="board_coat">Board Coating</label></div>
                                        <div class="three columns">
                                            <select id="board_coat" name="board_coat" style="width: 100%" >
                                                <?php echo getDropdown('044', $rowForm['board_coating']); ?>
                                            </select>
                                        </div>
                                        <div class="one columns">&nbsp;</div>
                                        <div class="two columns"><label for="mb_dimension_t">(T)</label></div>
                                        <div class="two columns"><input type="number" step="0.001" id="mb_dimension_t" name="mb_dimension_t" value="<?php echo $rowForm['no_layer']; ?>" > </div>
                                        <div class="one columns"><label for="mb_dimension_t" style="text-align: left"><b>mm</b></label></div>
                                        <div class="one columns">&nbsp;</div>
                                    </div>
                                    <div class="row">
                                        <div class="two columns"><label for="no_layers">Number of Layers</label></div>
                                        <div class="two columns"><input type="number" step="0.001" id="no_layers" name="no_layers" value="<?php echo $rowForm['no_layer']; ?>" > </div>
                                        <div class="one columns"><label for="no_layers" style="text-align: left"><b>layers</b></label></div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <a href="#" class="heading">
                                    <div class="icon"></div>
                                    <div class="title">Motherboard to DUT interface</div>
                                </a>
                                <div class="content">
                                    <div class="row">
                                        <div class="two columns">
                                            <label for="universal">Universal/dedicated</label>
                                            <label for="toggle_01" class="view-image">Image</label>
                                            <input type="checkbox" id="toggle_01">
                                            <dialog>
                                                <label for="toggle_01" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                                                <img id="myImg" src="../image/hardware/001.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                            </dialog>
                                        </div>
                                        <div class="three columns">
                                            <select id="universal" name="universal" style="width: 100%" >
                                                <?php echo getDropdown('045', $rowForm['mb_universal_dedicated']); ?>
                                            </select>
                                        </div>
                                        <div class="one columns">&nbsp;</div>
                                        <div class="two columns">
                                            <label for="socket_conn_type">Socket/connector type</label>
                                            <label for="toggle_02" class="view-image">Image</label>
                                            <input type="checkbox" id="toggle_02">
                                            <dialog>
                                                <label for="toggle_02" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                                                <img id="myImg" src="../image/hardware/002.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                            </dialog>
                                        </div>
                                        <div class="three columns">
                                            <select id="socket_conn_type" name="socket_conn_type" style="width: 100%" >
                                                <?php echo getDropdown('046', $rowForm['mb_socket_type']); ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="two columns"><label for="socket_conn_qty">Socket/connector qty</label></div>
                                        <div class="two columns"><input type="number" step="0.001" id="socket_conn_qty" name="socket_conn_qty" value="<?php echo $rowForm['mb_socket_qty']; ?>" > </div>
                                        <div class="one columns"><label for="socket_conn_qty" style="text-align: left"><b>pcs</b></label></div>
                                        <div class="one columns">&nbsp;</div>
                                        <div class="two columns"><label for="socket_conn_pin_qty">Socket/connector pin qty</label></div>
                                        <div class="two columns"><input type="number" step="0.001" id="socket_conn_pin_qty" name="socket_conn_pin_qty" value="<?php echo $rowForm['mb_socket_pin_qty']; ?>" > </div>
                                        <div class="one columns"><label for="socket_conn_pin_qty" style="text-align: left"><b>pins</b></label></div>
                                        <div class="one columns">&nbsp;</div>
                                    </div>
                                    <div class="row">
                                        <div class="two columns"><label for="socket_con_pin_pitch">Socket/connector pin pitch</label></div>
                                        <div class="two columns"><input type="number" step="0.001" id="socket_con_pin_pitch" name="socket_con_pin_pitch" value="<?php echo $rowForm['mb_socket_pin_pitch']; ?>" > </div>
                                        <div class="one columns"><label for="socket_con_pin_pitch" style="text-align: left"><b>mm</b></label></div>
                                        <div class="one columns">&nbsp;</div>
                                        <div class="two columns">
                                            <label for="support_package">Supported cards/packages</label>
                                            <label for="toggle_03" class="view-image">Image</label>
                                            <input type="checkbox" id="toggle_03">
                                            <dialog>
                                                <label for="toggle_03" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                                                <img id="myImg" src="../image/hardware/003.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                            </dialog>
                                        </div>
                                        <div class="three columns">
                                            <select id="support_package" name="support_package" style="width: 100%" >
                                                <?php echo getDropdown('047', $rowForm['mb_support_card']); ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <a href="#" class="heading">
                                    <div class="icon"></div>
                                    <div class="title">Load Cards</div>
                                </a>
                                <div class="content">
                                    <div class="row">
                                        <div class="two columns"><label for="max_load_card_qty">Max load card qty</label></div>
                                        <div class="two columns"><input type="number" step="0.001" id="max_load_card_qty" name="max_load_card_qty" value="<?php echo $rowForm['lc_max_qty']; ?>" ></div>
                                        <div class="one columns"><label for="max_load_card_qty" style="text-align: left"><b>pcs</b></label></div>
                                        <div class="one columns">&nbsp;</div>
                                        <div class="two columns">
                                            <label for="load_card_pin_qty">Load card pin qty</label>
                                            <label for="toggle_04" class="view-image">Image</label>
                                            <input type="checkbox" id="toggle_04">
                                            <dialog>
                                                <label for="toggle_04" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                                                <img id="myImg" src="../image/hardware/004.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                            </dialog>
                                        </div>
                                        <div class="two columns"><input type="number" step="0.001" id="load_card_pin_qty" name="load_card_pin_qty" value="<?php echo $rowForm['lc_pin_qty']; ?>" > </div>
                                        <div class="one columns"><label for="load_card_pin_qty" style="text-align: left"><b>pins</b></label></div>
                                        <div class="one columns">&nbsp;</div>
                                    </div>
                                    <div class="row">
                                        <div class="two columns">
                                            <label for="load_card_pin_pitch">Load card pin pitch</label>
                                            <label for="toggle_05" class="view-image">Image</label>
                                            <input type="checkbox" id="toggle_05">
                                            <dialog>
                                                <label for="toggle_05" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                                                <img id="myImg" src="../image/hardware/005.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                            </dialog>
                                        </div>
                                        <div class="two columns"><input type="number" step="0.001" id="load_card_pin_pitch" name="load_card_pin_pitch" value="<?php echo $rowForm['lc_pin_pitch']; ?>" ></div>
                                        <div class="one columns"><label for="load_card_pin_pitch" style="text-align: left"><b>mm</b></label></div>
                                        <div class="one columns">&nbsp;</div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <a href="#" class="heading">
                                    <div class="icon"></div>
                                    <div class="title">Program Cards</div>
                                </a>
                                <div class="content">
                                    <div class="row">
                                        <div class="two columns"><label for="max_prog_card_qty">Max program card qty</label></div>
                                        <div class="two columns"><input type="number" step="0.001" id="max_prog_card_qty" name="max_prog_card_qty" value="<?php echo $rowForm['pc_max_qty']; ?>" ></div>
                                        <div class="one columns"><label for="max_prog_card_qty" style="text-align: left"><b>pcs</b></label></div>
                                        <div class="one columns">&nbsp;</div>
                                        <div class="two columns">
                                            <label for="prog_card_pin_qty">Program card pin qty</label>
                                            <label for="toggle_06" class="view-image">Image</label>
                                            <input type="checkbox" id="toggle_06">
                                            <dialog>
                                                <label for="toggle_06" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                                                <img id="myImg" src="../image/hardware/006.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                            </dialog>
                                        </div>
                                        <div class="two columns"><input type="number" step="0.001" id="prog_card_pin_qty" name="prog_card_pin_qty" value="<?php echo $rowForm['pc_pin_qty']; ?>" > </div>
                                        <div class="one columns"><label for="prog_card_pin_qty" style="text-align: left"><b>pins</b></label></div>
                                        <div class="one columns">&nbsp;</div>
                                    </div>
                                    <div class="row">
                                        <div class="two columns">
                                            <label for="prog_card_pin_pitch">Program card pin pitch</label>
                                            <label for="toggle_07" class="view-image">Image</label>
                                            <input type="checkbox" id="toggle_07">
                                            <dialog>
                                                <label for="toggle_07" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                                                <img id="myImg" src="../image/hardware/007.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                            </dialog>
                                        </div>
                                        <div class="two columns"><input type="number" step="0.001" id="prog_card_pin_pitch" name="prog_card_pin_pitch" value="<?php echo $rowForm['pc_pin_pitch']; ?>" ></div>
                                        <div class="one columns"><label for="prog_card_pin_pitch" style="text-align: left"><b>mm</b></label></div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <a href="#" class="heading">
                                    <div class="icon"></div>
                                    <div class="title">Motherboard to chamber interface</div>
                                </a>
                                <div class="content">
                                    <div class="row">
                                        <div class="two columns">
                                            <label for="conn_type">Connector Type</label>
                                            <label for="toggle_08" class="view-image">Image</label>
                                            <input type="checkbox" id="toggle_08">
                                            <dialog>
                                                <label for="toggle_08" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                                                <img id="myImg" src="../image/hardware/008.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                            </dialog>
                                        </div>
                                        <div class="three columns">
                                            <select id="conn_type" name="conn_type" style="width: 100%" >
                                                <?php echo getDropdown('046', $rowForm['connector_type']); ?>
                                            </select>
                                        </div>
                                        <div class="one columns">&nbsp;</div>
                                        <div class="two columns">
                                            <label for="no_pins">Number of pins</label>
                                            <label for="toggle_09" class="view-image">Image</label>
                                            <input type="checkbox" id="toggle_09">
                                            <dialog>
                                                <label for="toggle_09" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                                                <img id="myImg" src="../image/hardware/009.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                            </dialog>
                                        </div>
                                        <div class="two columns"><input type="number" step="0.001" id="no_pins" name="no_pins" value="<?php echo $rowForm['no_pin']; ?>" > </div>
                                        <div class="one columns"><label for="no_pins" style="text-align: left"><b>pins</b></label></div>
                                        <div class="one columns">&nbsp;</div>
                                    </div>
                                    <div class="row">
                                        <div class="two columns">
                                            <label for="pin_pitch">Pin pitch</label>
                                             <label for="toggle_09" class="view-image">Image</label>
                                            <input type="checkbox" id="toggle_09">
                                            <dialog>
                                                <label for="toggle_09" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                                                <img id="myImg" src="../image/hardware/009.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                            </dialog>
                                        </div>
                                        <div class="two columns"><input type="number" step="0.001" id="pin_pitch" name="pin_pitch" value="<?php echo $rowForm['pin_pitch']; ?>" > </div>
                                        <div class="one columns"><label for="pin_pitch" style="text-align: left"><b>mm</b></label></div>
                                        <div class="one columns">&nbsp;</div>
                                        <div class="two columns">
                                            <label for="edge_thick">Edgefinger thickness</label>
                                            <label for="toggle_10" class="view-image">Image</label>
                                            <input type="checkbox" id="toggle_10">
                                            <dialog>
                                                <label for="toggle_10" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                                                <img id="myImg" src="../image/hardware/010.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                            </dialog>
                                        </div>
                                        <div class="two columns"><input type="number" step="0.001" id="edge_thick" name="edge_thick" value="<?php echo $rowForm['edgefinger_thickness']; ?>" > </div>
                                        <div class="one columns"><label for="edge_thick" style="text-align: left"><b>mm</b></label></div>
                                        <div class="one columns">&nbsp;</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="tab-content" id="tabCapacity">
                        <div class="row">
                            <div class="two columns"><label for="max_dut_mb">Max DUT qty per motherboard *</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="max_dut_mb" name="max_dut_mb" value="<?php echo $rowForm['max_dut_qty_mb']; ?>" > </div>
                            <div class="one columns"><label for="max_dut_mb" style="text-align: left"><b>DUTs</b></label></div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
            <button onclick="location.href = '../list/list_hardware.php'" type="button" id="listBtn"><i class='bx bx-list-ol bx-fw' ></i> List</button>
            <button type="submit" id="draft-button" name="draft-button" class="btn"><i class='bx bx-send bx-fw' ></i> DRAFT</button>
            <button type="submit" id="save-button" name="save-button" class="btn btn-primary"><i class='bx bx-send bx-fw' ></i> COPY</button>
        </form>
        <script src="../js/jquery-3.7.0.js"></script>
        <script src="accordian.js"></script>
        <script>
            const tabs = document.getElementById('tabs');
            const tabContents = document.querySelectorAll('.tab-content');
            const form = document.getElementById('copy_hardware_form');
            const draftButton = document.getElementById('draft-button');
            const saveButton = document.getElementById('save-button');
            
            $( document ).ready(function() {
                console.log("ready");
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
                        console.log("SINI TAKDE GAK");
                        saveButton.style.display = 'none';
                        draftButton.style.display = 'block';
                    }
                } else {
                    console.log("SILA ISI MAKLUMAT");
                    saveButton.style.display = 'none';
                    draftButton.style.display = 'none';
                }
            });
        </script>
    </body>
</html>