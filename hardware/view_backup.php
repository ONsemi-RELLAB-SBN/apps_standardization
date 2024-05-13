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
            
            #edit-button {
                display: block;
                position: fixed;
                top: 20px;
                right: 195px;
                z-index: 99;
                font-size: 18px;
                outline: none;
                cursor: pointer;
            }

            #edit-button:hover {
                background-color: orange;
                color: white;
            }
        </style>
    </head>
    <body>
        <form id="view_hardware_form" role="form" action="" method="get">
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
                        <input type="text" id="lab_location" name="lab_location" value="<?php echo getParameterValue($rowForm['lab_location']); ?>" required readonly />
                    </div>
                    <div class="one columns">&nbsp;</div>
                    <div class="two columns"><label for="strategy">Product Group *</label></div>
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
                    <li class="active" data-tab="tabIdentity">Hardware Identity</li>
                    <li data-tab="tabCapability">Capability</li>
                    <li data-tab="tabCharacter">Characteristics</li>
                    <li data-tab="tabCapacity">Capacity</li>
                </ul>
                
                <div class="tab-content active" id="tabIdentity">
                    <div class="row">
                        <div class="two columns"><label for="hw_type">Hardware Type *</label></div>
                        <div class="three columns">
                            <input type="text" id="hw_type" name="hw_type" value="<?php echo getParameterValue($rowForm['hw_type']); ?>" required readonly />
                        </div>
                        <div class="one columns">&nbsp;</div>
                        <div class="two columns"><label for="manufacturer">Manufacturer *</label></div>
                        <div class="three columns">
                            <input type="text" id="manufacturer" name="manufacturer" value="<?php echo getParameterValue($rowForm['manufacturer']); ?>" required readonly />
                        </div>
                        <div class="one columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="assembly_no">Assembly Number *</label></div>
                        <div class="three columns"><input type="text" id="assembly_no" name="assembly_no" value="<?php echo $rowForm['assembly_no']; ?>" required readonly></div>
                    </div>
                </div>
                
                <div class="tab-content" id="tabCapability">
                    <div class="row">
                        <div class="two columns"><label for="volt_rating">Voltage Rating</label></div>
                        <div class="two columns"><input type="number" step="0.001" id="volt_rating" name="volt_rating" value="<?php echo $rowForm['voltage_rating']; ?>" required readonly> </div>
                        <div class="one columns"><label for="volt_rating" style="text-align: left"><b>V</b></label></div>
                        <div class="one columns">&nbsp;</div>
                        <div class="two columns"><label for="curr_rating">Current Rating</label></div>
                        <div class="two columns"><input type="number" step="0.001" id="curr_rating" name="curr_rating" value="<?php echo $rowForm['current_rating']; ?>" required readonly> </div>
                        <div class="one columns"><label for="curr_rating" style="text-align: left"><b>A</b></label></div>
                        <div class="one columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="temp_rating">Temp Rating</label></div>
                        <div class="two columns"><input type="number" step="0.001" id="temp_rating" name="temp_rating" value="<?php echo $rowForm['temp_rating']; ?>" required readonly> </div>
                        <div class="one columns"><label for="temp_rating" style="text-align: left"><b>&#8451;</b></label></div>
                        <div class="one columns">&nbsp;</div>
                        <div class="two columns"><label for="support_stress">Supported Stresses</label></div>
                        <div class="three columns"><input type="text" id="support_stress" name="support_stress" value="<?php echo getParameterValue($rowForm['support_stress']); ?>" required readonly /></div>
                        <div class="one columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="daq_capability">DAQ Monitoring Capability</label></div>
                        <div class="three columns"><input type="text" id="daq_capability" name="daq_capability" value="<?php echo getParameterValue($rowForm['daq_monitoring']); ?>" required readonly /></div>
                        <div class="one columns">&nbsp;</div>
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
                                    <div class="three columns"><input type="text" id="pcb_material" name="pcb_material" value="<?php echo getParameterValue($rowForm['pcb_material']); ?>" required readonly /></div>
                                    <div class="one columns">&nbsp;</div>
                                    <div class="two columns"><label for="mb_dimension_l">Motherboard Dimension (L)</label></div>
                                    <div class="two columns"><input type="number" step="0.001" id="mb_dimension_l" name="mb_dimension_l" value="<?php echo $rowForm['mb_dimension_l']; ?>" required readonly> </div>
                                    <div class="one columns"><label for="mb_dimension_l" style="text-align: left"><b>mm</b></label></div>
                                    <div class="one columns">&nbsp;</div>
                                </div>
                                <div class="row">
                                    <div class="two columns"><label for="frame_material">Frame Material</label></div>
                                    <div class="three columns"><input type="text" id="frame_material" name="frame_material" value="<?php echo getParameterValue($rowForm['frame_material']); ?>" required readonly /></div>
                                    <div class="one columns">&nbsp;</div>
                                    <div class="two columns"><label for="mb_dimension_w">(W)</label></div>
                                    <div class="two columns"><input type="number" step="0.001" id="mb_dimension_w" name="mb_dimension_w" value="<?php echo $rowForm['mb_dimension_w']; ?>" required readonly> </div>
                                    <div class="one columns"><label for="mb_dimension_w" style="text-align: left"><b>mm</b></label></div>
                                    <div class="one columns">&nbsp;</div>
                                </div>
                                <div class="row">
                                    <div class="two columns"><label for="board_coat">Board Coating</label></div>
                                    <div class="three columns"><input type="text" id="board_coat" name="board_coat" value="<?php echo getParameterValue($rowForm['board_coating']); ?>" required readonly /></div>
                                    <div class="one columns">&nbsp;</div>
                                    <div class="two columns"><label for="mb_dimension_t">(T)</label></div>
                                    <div class="two columns"><input type="number" step="0.001" id="mb_dimension_t" name="mb_dimension_t" value="<?php echo $rowForm['mb_dimension_t']; ?>" required readonly> </div>
                                    <div class="one columns"><label for="mb_dimension_t" style="text-align: left"><b>mm</b></label></div>
                                    <div class="one columns">&nbsp;</div>
                                </div>
                                <div class="row">
                                    <div class="two columns"><label for="no_layers">Number of Layers</label></div>
                                    <div class="two columns"><input type="number" step="0.001" id="no_layers" name="no_layers" value="<?php echo $rowForm['no_layer']; ?>" required readonly> </div>
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
                                    <div class="three columns"><input type="text" id="universal" name="universal" value="<?php echo getParameterValue($rowForm['mb_universal_dedicated']); ?>" required readonly /></div>
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
                                    <div class="three columns"><input type="text" id="socket_conn_type" name="socket_conn_type" value="<?php echo getParameterValue($rowForm['mb_socket_type']); ?>" required readonly /></div>
                                </div>
                                <div class="row">
                                    <div class="two columns"><label for="socket_conn_qty">Socket/connector qty</label></div>
                                    <div class="two columns"><input type="number" step="0.001" id="socket_conn_qty" name="socket_conn_qty" value="<?php echo $rowForm['mb_socket_qty']; ?>" required readonly> </div>
                                    <div class="one columns"><label for="socket_conn_qty" style="text-align: left"><b>pcs</b></label></div>
                                    <div class="one columns">&nbsp;</div>
                                    <div class="two columns"><label for="socket_conn_pin_qty">Socket/connector pin qty</label></div>
                                    <div class="two columns"><input type="number" step="0.001" id="socket_conn_pin_qty" name="socket_conn_pin_qty" value="<?php echo $rowForm['mb_socket_pin_qty']; ?>" required readonly> </div>
                                    <div class="one columns"><label for="socket_conn_pin_qty" style="text-align: left"><b>pins</b></label></div>
                                    <div class="one columns">&nbsp;</div>
                                </div>
                                <div class="row">
                                    <div class="two columns"><label for="socket_con_pin_pitch">Socket/connector pin pitch</label></div>
                                    <div class="two columns"><input type="number" step="0.001" id="socket_con_pin_pitch" name="socket_con_pin_pitch" value="<?php echo $rowForm['mb_socket_pin_pitch']; ?>" required readonly> </div>
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
                                    <div class="three columns"><input type="text" id="support_package" name="support_package" value="<?php echo getParameterValue($rowForm['mb_support_card']); ?>" required readonly /></div>
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
                                    <div class="two columns"><input type="number" step="0.001" id="max_load_card_qty" name="max_load_card_qty" value="<?php echo $rowForm['lc_max_qty']; ?>" required readonly></div>
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
                                    <div class="two columns"><input type="number" step="0.001" id="load_card_pin_qty" name="load_card_pin_qty" value="<?php echo $rowForm['lc_pin_qty']; ?>" required readonly> </div>
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
                                    <div class="two columns"><input type="number" step="0.001" id="load_card_pin_pitch" name="load_card_pin_pitch" value="<?php echo $rowForm['lc_pin_pitch']; ?>" required readonly></div>
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
                                    <div class="two columns"><input type="number" step="0.001" id="max_prog_card_qty" name="max_prog_card_qty" value="<?php echo $rowForm['pc_max_qty']; ?>" required readonly></div>
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
                                    <div class="two columns"><input type="number" step="0.001" id="prog_card_pin_qty" name="prog_card_pin_qty" value="<?php echo $rowForm['pc_pin_qty']; ?>" required readonly> </div>
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
                                    <div class="two columns"><input type="number" step="0.001" id="prog_card_pin_pitch" name="prog_card_pin_pitch" value="<?php echo $rowForm['pc_pin_pitch']; ?>" required readonly></div>
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
                                    <div class="three columns"><input type="text" id="conn_type" name="conn_type" value="<?php echo getParameterValue($rowForm['connector_type']); ?>" required readonly> </div>
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
                                    <div class="two columns"><input type="number" step="0.001" id="no_pins" name="no_pins" value="<?php echo $rowForm['no_pin']; ?>" required readonly> </div>
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
                                    <div class="two columns"><input type="number" step="0.001" id="pin_pitch" name="pin_pitch" value="<?php echo $rowForm['pin_pitch']; ?>" required readonly> </div>
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
                                    <div class="two columns"><input type="number" step="0.001" id="edge_thick" name="edge_thick" value="<?php echo $rowForm['edgefinger_thickness']; ?>" required readonly> </div>
                                    <div class="one columns"><label for="edge_thick" style="text-align: left"><b>mm</b></label></div>
                                    <div class="one columns">&nbsp;</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="tab-content" id="tabCapacity">
                    <div class="row">
                        <div class="two columns"><label for="max_dut_mb">Max DUT qty per motherboard</label></div>
                        <div class="two columns"><input type="number" step="0.001" id="max_dut_mb" name="max_dut_mb" value="<?php echo $rowForm['max_dut_qty_mb']; ?>" readonly> </div>
                        <div class="one columns"><label for="max_dut_mb" style="text-align: left"><b>DUTs</b></label></div>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
            <button onclick="location.href = '../list/list_hardware.php'" type="button" id="listBtn"><i class='bx bxs-chevron-left bx-fw' ></i> Back</button>
            <button onclick="location.href = 'edit.php?edit=<?php echo $id; ?>'" type="button" id="edit-button"><i class='bx bxs-pencil bx-fw' ></i> Edit</button>
        </form>
        
        <script src="../js/jquery-3.7.0.js"></script>
        <script src="accordian.js"></script>
        <script>
            const tabs = document.getElementById('tabs');
            const tabContents = document.querySelectorAll('.tab-content');
            const form = document.getElementById('view_hardware_form');

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