<?php
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

//include 'form_template.php';
//$user = $_SESSION["user"];

include './class/db.php';
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>FORM | Standardization Survey</title>
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

            #toggle_01, #toggle_02, #toggle_03, #toggle_04, #toggle_05, #toggle_06, #toggle_07, #toggle_08, #toggle_09, #toggle_10, #toggle_11, #toggle_12, #toggle_13, #toggle_14, #toggle_15, #toggle_16, #toggle_17, #toggle_18, #toggle_19, #toggle_20 {
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
            #toggle_11:checked ~ dialog {
                display: block;
            }
            #toggle_12:checked ~ dialog {
                display: block;
            }
            #toggle_13:checked ~ dialog {
                display: block;
            }
            #toggle_14:checked ~ dialog {
                display: block;
            }
            #toggle_15:checked ~ dialog {
                display: block;
            }
            #toggle_16:checked ~ dialog {
                display: block;
            }
            #toggle_17:checked ~ dialog {
                display: block;
            }
            #toggle_18:checked ~ dialog {
                display: block;
            }
            #toggle_19:checked ~ dialog {
                display: block;
            }
            #toggle_20:checked ~ dialog {
                display: block;
            }
        </style>

        <script type="text/javascript">

        </script>

    </head>
    <body>

        <div class="twelve columns">&nbsp;</div>
        <div class="twelve columns">&nbsp;</div>
        <h5 style="border-left: none;">Equipment Details</h5>
        <form id="add_equipment_form" action="crud_add_equipment.php" method="get">
            <div class="row">
                <main>
                    <div id="aspect-content">

                        <div class="aspect-tab ">
                            <h6>General</h6>
                            <input id="tabGeneral" type="checkbox" class="aspect-input" name="aspect" style="display: none">
                            <label for="tabGeneral" class="aspect-label"></label>
                            <div class="aspect-content"></div>
                            <div class="aspect-tab-content">
                                <div class="row">&nbsp;</div>
                                <div class="row">
                                    <div class="two columns"><label for="lab_location">Lab Location *</label></div>
                                    <div class="three columns">
                                        <select id="lab_location" name="lab_location" style="width: 100%" required>
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
                                    <div class="two columns"><label for="strategy">Product Group *</label></div>
                                    <div class="three columns">
                                        <select id="strategy" name="strategy" style="width: 100%" required>
                                            <option value="" selected=""></option>
                                            <?php
                                            $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '003' ORDER BY code ASC";
                                            $resSite = mysqli_query($con, $sqlDdSite);
                                            while ($rowSite = mysqli_fetch_array($resSite)):?>
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
                                            while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                                <option value="<?php echo $rowSite['code']; ?>" <?php if ($rowSite['code'] === "004001") { ?>selected<?php } ?>><?php echo $rowSite['name']; ?></option>
                                            <?php endwhile; ?>
                                        </select>
                                    </div>
                                    <div class="one columns">&nbsp;</div>
                                    <div class="two columns"><label for="champion">Lab Manager *</label></div>
                                    <div class="three columns">
                                        <select id="champion" name="champion" style="width: 100%" required>
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
                            </div>
                        </div>
                        
                        <div class="aspect-tab ">
                            <div class="aspect-tab ">
                                <h6>Equipment Identity</h6>
                                <input id="tabIdentity" type="checkbox" class="aspect-input" name="aspect" style="display: none">
                                <label for="tabIdentity" class="aspect-label"></label>
                                <div class="aspect-content"></div>
                                <div class="aspect-tab-content">
                                    
                                </div>
                            </div>
                        </div>
                        
                        <div class="aspect-tab ">
                            <h6>Capability</h6>
                            
                        </div>
                        
                        <div class="aspect-tab ">
                            <h6>Characteristic</h6>
                        </div>
                        
                        <div class="aspect-tab ">
                            <h6>Safety</h6>
                        </div>
                        
                        <div class="aspect-tab ">
                            <h6>Utilities</h6>
                        </div>
                        
                        <div class="aspect-tab ">
                            <h6>DAQ</h6>
                            <input id="tabDaq" type="checkbox" class="aspect-input" name="aspect">
                            <label for="tabDaq" class="aspect-label"></label>
                            <div class="aspect-content"></div>
                                <label for="daq">DAQ (Realtime Leakage Monitoring) *</label>
                                <select id="daq" name="daq" style="width: 100%" required>
                                    <option value="" selected=""></option>
                                    <?php
                                    $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '027' ORDER BY code ASC";
                                    $resSite = mysqli_query($con, $sqlDdSite);
                                    while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                        <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                                    <?php endwhile; ?>
                                </select>
                            <div class="aspect-tab-content">
                                
                                <label for="daq">DAQ (Realtime Leakage Monitoring) *</label>
                                <select id="daq" name="daq" style="width: 100%" required>
                                    <option value="" selected=""></option>
                                    <?php
                                    $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '027' ORDER BY code ASC";
                                    $resSite = mysqli_query($con, $sqlDdSite);
                                    while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                        <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                                    <?php endwhile; ?>
                                </select>
<!--                                <div class="row">
                                    <div class="two columns"><label for="daq">DAQ (Realtime Leakage Monitoring) *</label></div>
                                    <div class="three columns">
                                        <select id="daq" name="daq" style="width: 100%" required>
                                            <option value="" selected=""></option>
                                            <?php
                                            $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '027' ORDER BY code ASC";
                                            $resSite = mysqli_query($con, $sqlDdSite);
                                            while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                                <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                                            <?php endwhile; ?>
                                        </select>
                                    </div>
                                </div>-->
                            </div>
                        </div>
                        
                        <div class="aspect-tab ">
                            <h6>Internal Chamber Configuration</h6>
                                <div class="row">
                                    <div class="two columns">
                                        <label for="int_config_type">Configuration Type *</label>
                                        <label for="toggle_16" class="view-image">Image</label>
                                        <input type="checkbox" id="toggle_16">
                                        <dialog>
                                            <label for="toggle_16" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                                            <img id="myImg" src="image/equipment/016.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                        </dialog>
                                    </div>
                                    <div class="three columns">
                                        <select id="int_config_type" name="int_config_type" style="width: 100%" onchange="updateDiv()" required>
                                            <option value="" selected=""></option>
                                            <?php
                                            $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '031' ORDER BY code ASC";
                                            $resSite = mysqli_query($con, $sqlDdSite);
                                            while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                                <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                                            <?php endwhile; ?>
                                        </select>
                                    </div>
                                </div>

                                <script>
                                    function updateDiv() {
                                        var dropdown = document.getElementById('int_config_type');
                                        var bananaDiv = document.getElementById('BananaDiv');
                                        var edgeDiv = document.getElementById('EdgeDiv');
                                        var winDiv = document.getElementById('WinchestorDiv');
                                        var wireDiv = document.getElementById('WireDiv');
                                        var selectedValue = dropdown.value;

                                        $("#banana_jack_hole").val('');
                                        $("#conn_volt_rating").val('');
                                        $("#conn_curr_rating").val('');
                                        $("#conn_temp_rating").val('');
                                        $("#no_pins").val('');
                                        $("#pin_pitch").val('');
                                        $("#conn_rack").val('');
                                        $("#wire_volt_rating").val('');
                                        $("#wire_curr_rating").val('');
                                        $("#wire_temp_rating").val('');

                                        if (selectedValue === '031001') {
                                            bananaDiv.style.display = 'block';
                                            edgeDiv.style.display = 'none';
                                            winDiv.style.display = 'none';
                                            wireDiv.style.display = 'none';
                                        } else if (selectedValue === '031002') {
                                            bananaDiv.style.display = 'none';
                                            edgeDiv.style.display = 'block';
                                            winDiv.style.display = 'none';
                                            wireDiv.style.display = 'none';
                                        } else if (selectedValue === '031003') {
                                            bananaDiv.style.display = 'none';
                                            edgeDiv.style.display = 'none';
                                            winDiv.style.display = 'block';
                                            wireDiv.style.display = 'none';
                                        } else if (selectedValue === '031004') {
                                            bananaDiv.style.display = 'none';
                                            edgeDiv.style.display = 'none';
                                            winDiv.style.display = 'none';
                                            wireDiv.style.display = 'block';
                                        } else {
                                            bananaDiv.style.display = 'none';
                                            edgeDiv.style.display = 'none';
                                            winDiv.style.display = 'none';
                                            wireDiv.style.display = 'none';
                                        }
                                    }
                                </script>

                                <!--TODO - please reassign semua data dekat bawah, set bagi data tu satu persatu, sbb duplicate data dia tak bole reset the second value-->

                                <div id="BananaDiv" name="BananaDiv" style="display: none;">
                                    <div class="row">
                                        <div class="two columns"><label for="banana_jack_hole">No. Banana Jack Holes *</label></div>
                                        <div class="one columns"><input type="number" step="0.001" id="banana_jack_hole" name="banana_jack_hole" value="" > </div>
                                        <div class="one columns"><label for="banana_jack_hole" style="text-align: left"><b>Pins</b></label></div>
                                        <div class="two columns">
                                            <label for="toggle_17" class="view-image">Image</label>
                                            <input type="checkbox" id="toggle_17">
                                            <dialog>
                                                <label for="toggle_17" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                                                <img id="myImg" src="image/equipment/017.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                            </dialog>
                                        </div>
                                        <div class="two columns"><label for="conn_volt_rating">Connector Voltage Rating *</label></div>
                                        <div class="one columns"><input type="number" step="0.001" id="conn_volt_rating" name="conn_volt_rating" value="" > </div>
                                        <div class="one columns"><label for="conn_volt_rating" style="text-align: left"><b>V</b></label></div>
                                        <div class="two columns">&nbsp;</div>
                                    </div>
                                    <div class="row">
                                        <div class="two columns"><label for="conn_curr_rating">Connector Current Rating *</label></div>
                                        <div class="one columns"><input type="number" step="0.001" id="conn_curr_rating" name="conn_curr_rating" value="" > </div>
                                        <div class="one columns"><label for="conn_curr_rating" style="text-align: left"><b>A</b></label></div>
                                        <div class="two columns">&nbsp;</div>
                                        <div class="two columns"><label for="conn_temp_rating">Connector Temp Rating *</label></div>
                                        <div class="one columns"><input type="number" step="0.001" id="conn_temp_rating" name="conn_temp_rating" value="" > </div>
                                        <div class="one columns"><label for="conn_temp_rating" style="text-align: left"><b>`C</b></label></div>
                                        <div class="two columns">&nbsp;</div>
                                    </div>
                                </div>

                                <div id="EdgeDiv" name="EdgeDiv" style="display: none;">
                                    <div class="row">
                                        <div class="two columns"><label for="no_pins">No. of Pins *</label></div>
                                        <div class="one columns"><input type="number" step="0.001" id="no_pins" name="no_pins" value="" > </div>
                                        <div class="one columns"><label for="no_pins" style="text-align: left"><b>Pins</b></label></div>
                                        <div class="two columns">
                                            <label for="toggle_18" class="view-image">Image</label>
                                            <input type="checkbox" id="toggle_18">
                                            <dialog>
                                                <label for="toggle_18" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                                                <img id="myImg" src="image/equipment/018.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                            </dialog>
                                        </div>
                                        <div class="two columns"><label for="pin_pitch">Pin Pitch *</label></div>
                                        <div class="one columns"><input type="number" step="0.001" id="pin_pitch" name="pin_pitch" value="" > </div>
                                        <div class="one columns"><label for="pin_pitch" style="text-align: left"><b>mm</b></label></div>
                                        <div class="two columns">&nbsp;</div>
                                    </div>
                                    <div class="row">
                                        <div class="two columns"><label for="conn_volt_rating">Connector Voltage Rating *</label></div>
                                        <div class="one columns"><input type="number" step="0.001" id="conn_volt_rating" name="conn_volt_rating" value="" > </div>
                                        <div class="one columns"><label for="conn_volt_rating" style="text-align: left"><b>V</b></label></div>
                                        <div class="two columns">&nbsp;</div>
                                        <div class="two columns"><label for="conn_curr_rating">Connector Current Rating *</label></div>
                                        <div class="one columns"><input type="number" step="0.001" id="conn_curr_rating" name="conn_curr_rating" value="" > </div>
                                        <div class="one columns"><label for="conn_curr_rating" style="text-align: left"><b>A</b></label></div>
                                        <div class="two columns">&nbsp;</div>
                                    </div>
                                    <div class="row">
                                        <div class="two columns"><label for="conn_temp_rating">Connector Temp Rating *</label></div>
                                        <div class="one columns"><input type="number" step="0.001" id="conn_temp_rating" name="conn_temp_rating" value="" > </div>
                                        <div class="one columns"><label for="conn_temp_rating" style="text-align: left"><b>`C</b></label></div>
                                    </div>
                                </div>

                                <div id="WinchestorDiv" name="WinchestorDiv" style="display: none;">
                                    <div class="row">
                                        <div class="two columns"><label for="no_pins">No. of Pins *</label></div>
                                        <div class="one columns"><input type="number" step="0.001" id="no_pins" name="no_pins" value="" > </div>
                                        <div class="one columns"><label for="no_pins" style="text-align: left"><b>Pins</b></label></div>
                                        <div class="two columns">
                                            <label for="toggle_19" class="view-image">Image</label>
                                            <input type="checkbox" id="toggle_19">
                                            <dialog>
                                                <label for="toggle_19" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                                                <img id="myImg" src="image/equipment/019.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                            </dialog>
                                        </div>
                                        <div class="two columns"><label for="pin_pitch">Pin Pitch *</label></div>
                                        <div class="one columns"><input type="number" step="0.001" id="pin_pitch" name="pin_pitch" value="" > </div>
                                        <div class="one columns"><label for="pin_pitch" style="text-align: left"><b>mm</b></label></div>
                                        <div class="two columns">&nbsp;</div>
                                    </div>
                                    <div class="row">
                                        <div class="two columns"><label for="conn_volt_rating">Connector Voltage Rating *</label></div>
                                        <div class="one columns"><input type="number" step="0.001" id="conn_volt_rating" name="conn_volt_rating" value="" > </div>
                                        <div class="one columns"><label for="conn_volt_rating" style="text-align: left"><b>V</b></label></div>
                                        <div class="two columns">&nbsp;</div>
                                        <div class="two columns"><label for="conn_curr_rating">Connector Current Rating *</label></div>
                                        <div class="one columns"><input type="number" step="0.001" id="conn_curr_rating" name="conn_curr_rating" value="" > </div>
                                        <div class="one columns"><label for="conn_curr_rating" style="text-align: left"><b>A</b></label></div>
                                        <div class="two columns">&nbsp;</div>
                                    </div>
                                    <div class="row">
                                        <div class="two columns"><label for="conn_rack">No. Wires Connected to Rack *</label></div>
                                        <div class="one columns"><input type="number" step="0.001" id="conn_rack" name="conn_rack" value="" > </div>
                                        <div class="one columns"><label for="conn_rack" style="text-align: left"><b>`C</b></label></div>
                                    </div>
                                </div>

                                <div class="row" id="WireDiv" name="WireDiv"" style="display: none;">
                                    <div class="row">
                                        <div class="two columns"><label for="wire_volt_rating">Wire Voltage Rating *</label></div>
                                        <div class="one columns"><input type="number" step="0.001" id="wire_volt_rating" name="wire_volt_rating" value="" > </div>
                                        <div class="one columns"><label for="wire_volt_rating" style="text-align: left"><b>V</b></label></div>
                                        <div class="two columns">&nbsp;</div>
                                        <div class="two columns"><label for="wire_curr_rating">Wire Current Rating *</label></div>
                                        <div class="one columns"><input type="number" step="0.001" id="wire_curr_rating" name="wire_curr_rating" value="" > </div>
                                        <div class="one columns"><label for="wire_curr_rating" style="text-align: left"><b>A</b></label></div>
                                        <div class="two columns">&nbsp;</div>
                                    </div>
                                    <div class="row">
                                        <div class="two columns"><label for="wire_temp_rating">Wire Temp Rating *</label></div>
                                        <div class="one columns"><input type="number" step="0.001" id="wire_temp_rating" name="wire_temp_rating" value="" > </div>
                                        <div class="one columns"><label for="wire_temp_rating" style="text-align: left"><b>`C</b></label></div>
                                    </div>
                                </div>
                            
                        </div>
                        <div class="aspect-tab ">
                            <h6>External Chamber Configuration</h6>
                            <div class="row">
                                <div class="two columns">
                                    <label for="ext_config_type">Configuration Type *</label>
                                    <label for="toggle_20" class="view-image">Image</label>
                                    <input type="checkbox" id="toggle_20">
                                    <dialog>
                                        <label for="toggle_20" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                                        <img id="myImg" src="image/equipment/020.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                    </dialog>
                                </div>
                                <div class="three columns">
                                    <select id="ext_config_type" name="ext_config_type" style="width: 100%" onchange="updateView()" required>
                                        <option value="" selected=""></option>
                                        <?php
                                        $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '032' ORDER BY code ASC";
                                        $resSite = mysqli_query($con, $sqlDdSite);
                                        while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                            <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                                        <?php endwhile; ?>
                                    </select>
                                </div>
                            </div>

                            <script>
                                function updateView() {
                                    var dd = document.getElementById('ext_config_type');
                                    var extDiv = document.getElementById('viewExternalDiv');
                                    var selectedValue = dd.value;

                                    $("#interface_volt_rating").val('');
                                    $("#interface_curr_rating").val('');

                                    if (selectedValue === '032003') {
                                        extDiv.style.display = 'none';
                                    } else {
                                        extDiv.style.display = 'block';
                                    }
                                }
                            </script>

                            <div class="row" id="viewExternalDiv" name="viewExternalDiv" style="display: none;">
                                <div class="row">
                                    <div class="two columns"><label for="interface_volt_rating">Interface Voltage Rating *</label></div>
                                    <div class="one columns"><input type="number" step="0.001" id="interface_volt_rating" name="interface_volt_rating" value="" > </div>
                                    <div class="one columns"><label for="interface_volt_rating" style="text-align: left"><b>V</b></label></div>
                                    <div class="two columns">&nbsp;</div>
                                    <div class="two columns"><label for="interface_curr_rating">Interface Current Rating *</label></div>
                                    <div class="one columns"><input type="number" step="0.001" id="interface_curr_rating" name="interface_curr_rating" value="" > </div>
                                    <div class="one columns"><label for="interface_curr_rating" style="text-align: left"><b>A</b></label></div>
                                    <div class="two columns">&nbsp;</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button onclick="location.href = 'form_equipment_list.php'" type="button" id="backBtn"><i class='bx bx-list-ol bx-fw' ></i> List</button>
                    <button type="submit" id="myBtn" class="btn btn-primary"><i class='bx bx-send bx-fw' ></i> SAVE</button>
                </main>
            </div>
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    </body>
</html>