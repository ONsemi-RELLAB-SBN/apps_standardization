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
        
    </head>
    <body>
        <?php include '../navigation/hardware.php';?>
        <div class="twelve columns">&nbsp;</div>
        <div class="twelve columns">&nbsp;</div>
        <div class="twelve columns">&nbsp;</div>
        <!--<h5 style="border-left: none;">Hardware Details</h5>-->
        <form id="view_hardware_form" role="form" action="" method="get">
            <?php
            $sqlFormData = "SELECT * FROM gest_form_hw WHERE id = '$id'";
            $resForm = mysqli_query($con, $sqlFormData);
            while ($rowForm = mysqli_fetch_array($resForm)): ?>
            
            <h6 id="general">General</h6>
            <div class="row">
                <div class="two columns"><label for="lab_location">Lab Location *</label></div>
                <div class="three columns">
                    <input type="text" id="lab_location" name="lab_location" value="<?php echo getParameterValue($rowForm['lab_location']); ?>" required readonly />
                </div>
                <div class="one columns">&nbsp;</div>
                <div class="two columns"><label for="strategy">onsemi Strategy *</label></div>
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

            <h6 id="identity">Hardware Identity</h6>
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

            <h6 id="capability">Capability</h6>
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
                    <input type="text" id="support_stress" name="support_stress" value="<?php echo getParameterValue($rowForm['support_stress']); ?>" required readonly />
                </div>
                <div class="one columns">&nbsp;</div>
            </div>
            <div class="row">
                <div class="two columns"><label for="daq_capability">DAQ Monitoring Capability *</label></div>
                <div class="three columns">
                    <input type="text" id="daq_capability" name="daq_capability" value="<?php echo getParameterValue($rowForm['daq_monitoring']); ?>" required readonly />
                </div>
            </div>

            <h6 id="characteristic">Characteristic</h6>
            <div class="row">
                <div class="two columns"><label for="pcb_material">PCB Material *</label></div>
                <div class="three columns">
                    <input type="text" id="pcb_material" name="pcb_material" value="<?php echo getParameterValue($rowForm['pcb_material']); ?>" required readonly />
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
                    <input type="text" id="frame_material" name="frame_material" value="<?php echo getParameterValue($rowForm['frame_material']); ?>" required readonly />
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
                    <input type="text" id="board_coat" name="board_coat" value="<?php echo getParameterValue($rowForm['board_coating']); ?>" required readonly />
                </div>
                <div class="one columns">&nbsp;</div>
                <div class="two columns"><label for="mb_dimension_t">(T) *</label></div>
                <div class="one columns"><input type="number" step="0.001" id="mb_dimension_t" name="mb_dimension_t" value="<?php echo $rowForm['mb_dimension_t']; ?>" required> </div>
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
                    <input type="text" id="universal" name="universal" value="<?php echo getParameterValue($rowForm['mb_universal_dedicated']); ?>" required readonly />
                </div>
                <div class="one columns">&nbsp;</div>
                <div class="two columns"><label for="socket_conn_type">Socket/connector type *</label></div>
                <div class="three columns">
                    <input type="text" id="socket_conn_type" name="socket_conn_type" value="<?php echo getParameterValue($rowForm['mb_socket_type']); ?>" required readonly />
                </div>
                <div class="one columns">&nbsp;</div>
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
                    <input type="text" id="support_package" name="support_package" value="<?php echo getParameterValue($rowForm['mb_support_card']); ?>" required readonly />
                </div>
                <div class="one columns">&nbsp;</div>
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
                <div class="two columns">&nbsp;</div>
            </div>
            <div class="row">
                <div class="two columns"><label for="load_card_pin_pitch">Load card pin pitch *</label></div>
                <div class="one columns"><input type="number" step="0.001" id="load_card_pin_pitch" name="load_card_pin_pitch" value="<?php echo $rowForm['lc_pin_pitch']; ?>" required></div>
                <div class="one columns"><label for="load_card_pin_pitch" style="text-align: left"><b>mm</b></label></div>
                <div class="two columns">&nbsp;</div>
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
                <div class="two columns">&nbsp;</div>
            </div>
            <div class="row">
                <div class="two columns"><label for="prog_card_pin_pitch">Program card pin pitch *</label></div>
                <div class="one columns"><input type="number" step="0.001" id="prog_card_pin_pitch" name="prog_card_pin_pitch" value="<?php echo $rowForm['pc_pin_pitch']; ?>" required></div>
                <div class="one columns"><label for="prog_card_pin_pitch" style="text-align: left"><b>mm</b></label></div>
                <div class="two columns">&nbsp;</div>
            </div>

            <h7 style="color:orange">Motherboard to chamber interface</h7>
            <div class="row">
                <div class="two columns"><label for="conn_type">Connector Type *</label></div>
                <div class="one columns"><input type="number" step="0.001" id="conn_type" name="conn_type" value="<?php echo $rowForm['connector_type']; ?>" required> </div>
                <div class="one columns"><label for="conn_type" style="text-align: left"><b>&nbsp;</b></label></div>
                <div class="two columns">&nbsp;</div>
                <div class="two columns"><label for="no_pins">Number of pins *</label></div>
                <div class="one columns"><input type="number" step="0.001" id="no_pins" name="no_pins" value="<?php echo $rowForm['no_pin']; ?>" required> </div>
                <div class="one columns"><label for="no_pins" style="text-align: left"><b>pins</b></label></div>
                <div class="two columns">&nbsp;</div>
            </div>
            <div class="row">
                <div class="two columns"><label for="pin_pitch">Pin pitch *</label></div>
                <div class="one columns"><input type="number" step="0.001" id="pin_pitch" name="pin_pitch" value="<?php echo $rowForm['pin_pitch']; ?>" required> </div>
                <div class="one columns"><label for="pin_pitch" style="text-align: left"><b>mm</b></label></div>
                <div class="two columns">&nbsp;</div>
                <div class="two columns"><label for="edge_thick">Edgefinger thickness *</label></div>
                <div class="one columns"><input type="number" step="0.001" id="edge_thick" name="edge_thick" value="<?php echo $rowForm['edgefinger_thickness']; ?>" required> </div>
                <div class="one columns"><label for="edge_thick" style="text-align: left"><b>mm</b></label></div>
                <div class="two columns">&nbsp;</div>
            </div>

            <h6 id="capacity">Capacity</h6>
            <div class="row">
                <div class="two columns"><label for="max_dut_mb">Max DUT qty per motherboard *</label></div>
                <div class="one columns"><input type="number" step="0.001" id="max_dut_mb" name="max_dut_mb" value="<?php echo $rowForm['max_dut_qty_mb']; ?>" required> </div>
                <div class="one columns"><label for="max_dut_mb" style="text-align: left"><b>DUTs</b></label></div>
            </div>

            <?php endwhile; ?>
            <button onclick="location.href = 'list.php'" type="button" id="backBtn"><i class='bx bxs-chevron-left bx-fw' ></i> Back</button>
            <button onclick="location.href = 'edit.php?edit=<?php echo $id; ?>'" type="button" id="editBtn"><i class='bx bxs-pencil bx-fw' ></i> Edit</button>
        </form>
    </body>
</html>