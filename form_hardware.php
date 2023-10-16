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
        <title>Hardware | Standardization Survey</title>
        <meta name="author" content="Ayep" />
        <link rel="shortcut icon" href="image/dribble.ico">
        
        <!--        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
                <link rel="stylesheet" type="text/css" href="css/demo.css" />
                <link rel="stylesheet" type="text/css" href="css/elements.css" />
                <link rel="stylesheet" type="text/css" href="css/layout.css">
                <link rel="stylesheet" type="text/css" href="css/readonly.css" />
                <link rel="stylesheet" type="text/css" href="css/select2.css"/>
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
                <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'>
        
                <script src="js/bootstrap.js"></script>
                <script src="js/jquery.js"></script>
                <script src="js/select2.min.js"></script>-->

        <style>
            
        </style>
        <script type="text/javascript">
            
        </script>

    </head>
    <body>
        <hr>
        <div>
            <h1>Hardware Form</h1>
            <div>
                <div>
                    <form>
                        <div>
                            <label for="labLocation">Lab Location *</label>
                            <div>
                                <select id="labLocation" name="labLocation" style="width: 100%" required>
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
                            <label for="strategy">onsemi Strategy *</label>
                            <div>
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
                        </div>
                        <div >
                            <label for="standardization">Standardization Category *</label>
                            <div>
                                <select id="standardization" name="standardization" style="width: 100%" required>
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
                            <label for="champion">Champion *</label>
                            <div>
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
                        </div>

                        <h2>Equipment Identity</h2>
                        <div >
                            <label for="eqptId">Equipment ID *</label>
                            <div>
                                <select id="eqptId" name="eqptId" style="width: 100%" required>
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
                            <label for="dedicated">Dedicated/Share *</label>
                            <div>
                                <select id="dedicated" name="dedicated" style="width: 100%" required>
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
                        <div >
                            <label for="relTest">Rel Test (Multiselect) *</label>
                            <div>
                                <select id="relTest" name="relTest[]" class="js-example-basic-multiple" multiple="multiple" style="width: 100%" required>
                                <?php
                                $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '008' ORDER BY code ASC";
                                $resSite = mysqli_query($con, $sqlDdSite);
                                while ($rowSite = mysqli_fetch_array($resSite)):
                                    ?>
                                        <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                                    <?php endwhile; ?>
                                </select>
                            </div>
                            <label for="manufacturer">Equipment Manufacturer *</label>
                            <div>
                                <select id="manufacturer" name="manufacturer" style="width: 100%" required>
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
                        </div>
                        <div >
                            <label for="model">Equipment Model *</label>
                            <div>
                                <select id="model" name="model" style="width: 100%" required>
                                    <option value="" selected=""></option>
                                    <?php
                                    $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '010' ORDER BY code ASC";
                                    $resSite = mysqli_query($con, $sqlDdSite);
                                    while ($rowSite = mysqli_fetch_array($resSite)):
                                        ?>
                                        <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                                    <?php endwhile; ?>
                                </select>
                            </div>
                            <label for="mfgDate">Equipment Mfg Date *</label>
                            <div>
                                <input type="date" id="mfgDate" name="mfgDate" value="" required> 
                            </div>
                        </div>

                        <script>
                            function updateToField() {
                                var newTransferDropdown = document.getElementById('newTransfer');
                                var toField = document.getElementById('to');
                                var transField = document.getElementById('transfer');

                                if (newTransferDropdown.value === '013001') {
                                    toField.readOnly = true;
                                    toField.required = false;
                                    $('#to').val('');
                                    transField.style.display = 'none';
                                } else {
                                    toField.readOnly = false;
                                    toField.required = true;
                                    transField.style.display = 'block';
                                }
                            }
                        </script>

                        <div >
                            <label for="assetNo">Equipment Asset No *</label>
                            <div>
                                <input type="text" id="assetNo" name="assetNo" placeholder="Asset Number" value="" required> 
                            </div>
                            <label for="newTransfer">New/Transfer Equipment *</label>
                            <div>
                                <select id="newTransfer" name="newTransfer" style="width: 100%" onchange="updateToField()" required >
                                    <option value="" selected=""></option>
                                    <?php
                                    $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '013' ORDER BY code ASC";
                                    $resSite = mysqli_query($con, $sqlDdSite);
                                    while ($rowSite = mysqli_fetch_array($resSite)):
                                        ?>
                                        <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                                    <?php endwhile; ?>
                                </select>
                            </div>
                        </div>
                        <div  style="display: none;" id="transfer">
                            <label for="to">From? *</label>
                            <div>
                                <select id="to" name="to" style="width: 100%" readonly required>
                                    <option value="" selected=""></option>
                                    <?php
                                    $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '014' ORDER BY code ASC";
                                    $resSite = mysqli_query($con, $sqlDdSite);
                                    while ($rowSite = mysqli_fetch_array($resSite)):
                                        ?>
                                        <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                                    <?php endwhile; ?>
                                </select>
                            </div>
                        </div>

                        <h2>Capability</h2>
                        <div >
                            <label for="voltRating">Voltage Rating *</label>
                            <div>
                                <input type="number" 0 id="voltRating" name="voltRating" value="" required> 
                            </div> 
                            <label for="voltRating" style="text-align: left"><b>V</b></label>
                            <label for="voltControl">Voltage Control Accuracy *</label>
                            <div>
                                <input type="number" step="0.001" id="voltControl" name="voltControl" value="" required> 
                            </div> 
                            <label for="voltControl" style="text-align: left"><b>mV</b></label>
                        </div>
                        <div >
                            <label for="minTemp">Min. Temperature *</label>
                            <div>
                                <input type="number" step="0.001" id="minTemp" name="minTemp" value="" required> 
                            </div> 
                            <label for="minTemp" style="text-align: left"><b>`C</b></label>
                            <label for="maxTemp">Max. Temperature *</label>
                            <div>
                                <input type="number" step="0.001" id="maxTemp" name="maxTemp" value="" required> 
                            </div>
                            <label for="maxTemp" style="text-align: left"><b>`C</b></label>
                        </div>
                        <div >
                            <label for="minRh">Min. RH *</label>
                            <div>
                                <input type="number" step="0.001" id="minRh" name="minRh" value="" required> 
                            </div> 
                            <label for="minRh" style="text-align: left"><b>%</b></label>
                            <label for="maxRh">Max. RH *</label>
                            <div>
                                <input type="number" step="0.001" id="maxRh" name="maxRh" value="" required> 
                            </div> 
                            <label for="maxRh" style="text-align: left"><b>%</b></label>
                        </div>
                        <div >
                            <label for="heatDissipation">Heat Dissipation *</label>
                            <div>
                                <input type="number" step="0.001" id="heatDissipation" name="heatDissipation" value="" required> 
                            </div>
                            <label for="heatDissipation" style="text-align: left"><b>`C</b></label>
                            <label for="tempFluctuation">Temperature Fluctuation *</label>
                            <div>
                                <input type="number" step="0.001" id="tempFluctuation" name="tempFluctuation" value="" required>
                                <button class="myBtn_multi">View Sample Temperature Fluctuation</button>
                                <div class="modal modal_multi">
                                    <div class="modal-content">
                                        <span class="close close_multi">×</span>
                                        <img id="myImg" src="image/reference/001.png" alt="image" style="width:100%;max-width:800px;">
                                        <p>Sample Temperature Fluctuation Description</p>
                                    </div>
                                </div>
                            </div>
                            <label for="tempFluctuation" style="text-align: left"><b>`C</b></label>
                        </div>
                        <div >
                            <label for="tempUniform">Temperature Uniformity *</label>
                            <div>
                                <input type="number" step="0.001" id="tempUniform" name="tempUniform" value="" required> 
                                <button class="myBtn_multi">View Sample Temperature Uniformity</button>
                                <div class="modal modal_multi">
                                    <div class="modal-content">
                                        <span class="close close_multi">×</span>
                                        <img id="myImg" src="image/reference/002.png" alt="image" style="width:100%;max-width:800px;">
                                        <p>Sample Temperature Uniformity Description</p>
                                    </div>
                                </div>
                            </div> 
                            <label for="tempUniform" style="text-align: left"><b>`C</b></label>
                            <label for="humidFluctuation">Humidity Fluctuation *</label>
                            <div>
                                <input type="number" step="0.001" id="humidFluctuation" name="humidFluctuation" value="" required> 
                                <button class="myBtn_multi">View Sample Humid Fluctuation</button>
                                <div class="modal modal_multi">
                                    <div class="modal-content">
                                        <span class="close close_multi">×</span>
                                        <img id="myImg" src="image/reference/003.png" alt="Snow" style="width:100%;max-width:800px;">
                                        <p>Sample Humid Fluctuation Description</p>
                                    </div>
                                </div>
                            </div> 
                            <label for="humidFluctuation" style="text-align: left"><b>%</b></label>
                        </div>

                        <h2>Characteristic</h2>
                        <div >
                            <label for="noInterior">No. Interior Zones (doors) *</label>
                            <div>
                                <input type="number" step="0.001" id="noInterior" name="noInterior" value="" required> 
                                <button class="myBtn_multi">View Sample No Interior Zone</button>
                                <div class="modal modal_multi">
                                    <div class="modal-content">
                                        <span class="close close_multi">×</span>
                                        <img id="myImg" src="image/reference/006.png" alt="Snow" style="width:100%;max-width:800px;">
                                        <p>Sample No Interior Zone Description</p>
                                    </div>
                                </div>
                            </div>
                            <label for="noInterior" style="text-align: left"><b></b></label>
                            <label for="extDimension">External Dimension (W) *</label>
                            <div>
                                <input type="number" step="0.001" id="extDimensionW" name="extDimensionW" value="" required> 
                            </div>
                            <label for="extDimensionW" style="text-align: left"><b>mm</b></label>
                        </div>
                        <div >
                            <label for="intVolume">Internal Volume *</label>
                            <div>
                                <input type="number" step="0.001" id="intVolume" name="intVolume" value="" required> 
                                <button class="myBtn_multi">View Sample Internal Volume</button>
                                <div  class="modal modal_multi">
                                    <div class="modal-content">
                                        <span class="close close_multi">×</span>
                                        <img id="myImg" src="image/reference/008.png" alt="Snow" style="width:100%;max-width:800px;">
                                        <p>Sample Internal Volume Description</p>
                                    </div>
                                </div>
                            </div> 
                            <label for="intVolume" style="text-align: left"><b>L</b></label>
                            <label for="extDimension">(D) *</label>
                            <div>
                                <input type="number" step="0.001" id="extDimensionD" name="extDimensionD" value="" required> 
                            </div>
                            <label for="extDimensionD" style="text-align: left"><b>mm</b></label>
                        </div>
                        <div >
                            <label for="boardOrientation">Board Orientation*</label>
                            <div>
                                <select id="boardOrientation" name="boardOrientation" style="width: 100%" required>
                                    <option value="" selected=""></option>
                                    <?php
                                    $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '015' ORDER BY code ASC";
                                    $resSite = mysqli_query($con, $sqlDdSite);
                                    while ($rowSite = mysqli_fetch_array($resSite)):
                                        ?>
                                        <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                                    <?php endwhile; ?>
                                </select>
                                <button class="myBtn_multi">View Sample Board Orientation</button>
                                <div  class="modal modal_multi">
                                    <div class="modal-content">
                                        <span class="close close_multi">×</span>
                                        <img id="myImg" src="image/reference/009.png" alt="Snow" style="width:100%;max-width:800px;">
                                        <p>Sample Board Orientation Description</p>
                                    </div>
                                </div>
                            </div>
                            <label for="extDimension">(H) *</label>
                            <div>
                                <input type="number" step="0.001" id="extDimensionH" name="extDimensionH" value="" required> 
                                <button class="myBtn_multi">View Sample External Dimension</button>
                                <div class="modal modal_multi">
                                    <div class="modal-content">
                                        <span class="close close_multi">×</span>
                                        <img id="myImg" src="image/reference/004.png" alt="Snow" style="width:100%;max-width:800px;">
                                        <p>Sample External Dimension Description</p>
                                    </div>
                                </div>
                            </div>
                            <label for="extDimensionH" style="text-align: left"><b>mm</b></label>
                        </div>
                        <div >
                            <label for="rackMaterial">Rack Material *</label>
                            <div>
                                <select id="rackMaterial" name="rackMaterial" style="width: 100%" required>
                                    <option value="" selected=""></option>
                                    <?php
                                    $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '016' ORDER BY code ASC";
                                    $resSite = mysqli_query($con, $sqlDdSite);
                                    while ($rowSite = mysqli_fetch_array($resSite)):
                                        ?>
                                        <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                                    <?php endwhile; ?>
                                </select>
                            </div>
                            <label for="intDimension">Internal Dimension (W) *</label>
                            <div>
                                <input type="number" step="0.001" id="intDimensionW" name="intDimensionW" value="" required> 
                            </div> 
                            <label for="intDimensionW" style="text-align: left"><b>mm</b></label>
                        </div>
                        <div >
                            <label for="rackSlotPitch">Rack Slot-to-Slot Pitch *</label>
                            <div>
                                <input type="number" step="0.001" id="rackSlotPitch" name="rackSlotPitch" value="" required>
                                <button class="myBtn_multi">View Sample Rack Slot-to-Slot Pitch</button>
                                <div  class="modal modal_multi">
                                    <div class="modal-content">
                                        <span class="close close_multi">×</span>
                                        <img id="myImg" src="image/reference/010.png" alt="Snow" style="width:100%;max-width:800px;">
                                        <p>Sample Rack Slot-to-Slot Pitch Description</p>
                                    </div>
                                </div>
                            </div> 
                            <label for="rackSlotPitch" style="text-align: left"><b>mm</b></label>
                            <label for="intDimension">(D) *</label>
                            <div>
                                <input type="number" step="0.001" id="intDimensionD" name="intDimensionD" value="" required> 
                            </div> 
                            <label for="intDimensionD" style="text-align: left"><b>mm</b></label>
                        </div>
                        <div >
                            <label for="rackSLotWidth">Rack Slot Width *</label>
                            <div>
                                <input type="number" step="0.001" id="rackSLotWidth" name="rackSLotWidth" value="" required> 
                                <button class="myBtn_multi">View Sample Rack Slot Width</button>
                                <div  class="modal modal_multi">
                                    <div class="modal-content">
                                        <span class="close close_multi">×</span>
                                        <img id="myImg" src="image/reference/011.png" alt="Snow" style="width:100%;max-width:800px;">
                                        <p>Sample Rack Slot Width Description</p>
                                    </div>
                                </div>
                            </div> 
                            <label for="rackSLotWidth" style="text-align: left"><b>mm</b></label>
                            <label for="intDimension">(H) *</label>
                            <div>
                                <input type="number" step="0.001" id="intDimensionH" name="intDimensionH" value="" required> 
                                <button class="myBtn_multi">View Sample Internal Dimension</button>
                                <div class="modal modal_multi">
                                    <div class="modal-content">
                                        <span class="close close_multi">×</span>
                                        <img id="myImg" src="image/reference/005.png" alt="Snow" style="width:100%;max-width:800px;">
                                        <p>Sample Internal Dimension Description</p>
                                    </div>
                                </div>
                            </div> 
                            <label for="intDimensionH" style="text-align: left"><b>mm</b></label>
                        </div>
                        <div >
                            <label for="eqptWeight">Equipment Weight *</label>
                            <div>
                                <input type="number" step="0.001" id="eqptWeight" name="eqptWeight" value="" required> 
                            </div> 
                            <label for="eqptWeight" style="text-align: left"><b>Kg</b></label>
                            <label for="rackDimension">Rack Dimension (W) *</label>
                            <div>
                                <input type="number" step="0.001" id="rackDimensionW" name="rackDimensionW" value="" required> 
                            </div>
                            <label for="rackDimensionW" style="text-align: left"><b>mm</b></label>
                        </div>
                        <div >
                            <label for="noMbSlot">Number of motherboard slots *</label>
                            <div>
                                <input type="number" step="0.001" id="noMbSlot" name="noMbSlot" value="" required>
                                <button class="myBtn_multi">View Sample Motherboard Slots</button>
                                <div  class="modal modal_multi">
                                    <div class="modal-content">
                                        <span class="close close_multi">×</span>
                                        <img id="myImg" src="image/reference/012.png" alt="Snow" style="width:100%;max-width:800px;">
                                        <p>Sample Motherboard Slots Description</p>
                                    </div>
                                </div>
                            </div> 
                            <label for="noMbSlot" style="text-align: left"><b> </b></label>
                            <label for="rackDimension">(D) *</label>
                            <div>
                                <input type="number" step="0.001" id="rackDimensionD" name="rackDimensionD" value="" required> 
                            </div> 
                            <label for="rackDimensionD" style="text-align: left"><b>mm</b></label>
                        </div>
                        <div >
                            <label for="maxPsBs">Max number of power supplies per board slot *</label>
                            <div>
                                <input type="number" step="0.001" id="maxPsBs" name="maxPsBs" value="" required> 
                                <button class="myBtn_multi">View Sample Power Supplies</button>
                                <div  class="modal modal_multi">
                                    <div class="modal-content">
                                        <span class="close close_multi">×</span>
                                        <img id="myImg" src="image/reference/013.png" alt="Snow" style="width:100%;max-width:800px;">
                                        <p>Sample Power Supplies Description</p>
                                    </div>
                                </div>
                            </div> 
                            <label for="maxPsBs" style="text-align: left"><b> </b></label>
                            <label for="rackDimension">(H) *</label>
                            <div>
                                <input type="number" step="0.001" id="rackDimensionH" name="rackDimensionH" value="" required> 
                                <button class="myBtn_multi">View Sample Rack Dimension</button>
                                <div  class="modal modal_multi">
                                    <div class="modal-content">
                                        <span class="close close_multi">×</span>
                                        <img id="myImg" src="image/reference/007.png" alt="Snow" style="width:100%;max-width:800px;">
                                        <p>Sample Rack Dimension Description</p>
                                    </div>
                                </div>
                            </div> 
                            <label for="rackDimensionH" style="text-align: left"><b>mm</b></label>
                        </div>
                        <div >
                            <label for="maxPs">Max number of power supplies for the entire Equipment *</label>
                            <div>
                                <input type="number" step="0.001" id="maxPs" name="maxPs" value="" required> 
                                <button class="myBtn_multi">View Sample Power Supplies</button>
                                <div  class="modal modal_multi">
                                    <!-- Modal content -->
                                    <div class="modal-content">
                                        <span class="close close_multi">×</span>
                                        <img id="myImg" src="image/reference/014.png" alt="Snow" style="width:100%;max-width:800px;">
                                        <p>Sample Power Supplies Description</p>
                                    </div>
                                </div>
                            </div> 
                            <label for="maxPs" style="text-align: left"><b> </b></label>
                        </div>
                        <div >
                            <label for="airflow">Airflow *</label>
                            <div>
                                <select id="airflow" name="airflow" style="width: 100%" required>
                                    <option value="" selected=""></option>
                                    <?php
                                    $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '017' ORDER BY code ASC";
                                    $resSite = mysqli_query($con, $sqlDdSite);
                                    while ($rowSite = mysqli_fetch_array($resSite)):
                                        ?>
                                        <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                                    <?php endwhile; ?>
                                </select>
                                <button class="myBtn_multi">View Sample Airflow</button>
                                <div  class="modal modal_multi">
                                    <div class="modal-content">
                                        <span class="close close_multi">×</span>
                                        <img id="myImg" src="image/reference/015.png" alt="Snow" style="width:100%;max-width:800px;">
                                        <p>Sample Airflow Description</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h2>Safety</h2>
                        <div >
                            <label for="tempProtection1">Temperature Protection 1 *</label>
                            <div>
                                <select id="tempProtection1" name="tempProtection1" style="width: 100%" required>
                                    <option value="" selected=""></option>
                                    <?php
                                    $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '020' ORDER BY code ASC";
                                    $resSite = mysqli_query($con, $sqlDdSite);
                                    while ($rowSite = mysqli_fetch_array($resSite)):
                                        ?>
                                        <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                                    <?php endwhile; ?>
                                </select>
                            </div>
                            <label for="tempProtection2">Temperature Protection 2 *</label>
                            <div>
                                <select id="tempProtection2" name="tempProtection2" style="width: 100%" required>
                                    <option value="" selected=""></option>
                                    <?php
                                    $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '020' ORDER BY code ASC";
                                    $resSite = mysqli_query($con, $sqlDdSite);
                                    while ($rowSite = mysqli_fetch_array($resSite)):
                                        ?>
                                        <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                                    <?php endwhile; ?>
                                </select>
                            </div>
                        </div>
                        <div >
                            <label for="tempThermostat3">Temperature Protection / Thermostat 3 *</label>
                            <div>
                                <select id="tempThermostat3" name="tempThermostat3" style="width: 100%" required>
                                    <option value="" selected=""></option>
                                    <?php
                                    $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '020' ORDER BY code ASC";
                                    $resSite = mysqli_query($con, $sqlDdSite);
                                    while ($rowSite = mysqli_fetch_array($resSite)):
                                        ?>
                                        <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                                    <?php endwhile; ?>
                                </select>
                            </div>
                            <label for="smokeDetector">Smoke Detector/Alarm *</label>
                            <div>
                                <select id="smokeDetector" name="smokeDetector" style="width: 100%" required>
                                    <option value="" selected=""></option>
                                    <?php
                                    $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '020' ORDER BY code ASC";
                                    $resSite = mysqli_query($con, $sqlDdSite);
                                    while ($rowSite = mysqli_fetch_array($resSite)):
                                        ?>
                                        <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                                    <?php endwhile; ?>
                                </select>
                            </div>
                        </div>
                        <div >
                            <label for="emo">EMO button *</label>
                            <div>
                                <select id="emo" name="emo" style="width: 100%" required>
                                    <option value="" selected=""></option>
                                    <?php
                                    $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '020' ORDER BY code ASC";
                                    $resSite = mysqli_query($con, $sqlDdSite);
                                    while ($rowSite = mysqli_fetch_array($resSite)):
                                        ?>
                                        <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                                    <?php endwhile; ?>
                                </select>
                            </div>
                            <label></label>
                            <div></div>
                        </div>

                        <h2>Utilities</h2>
                        <div >
                            <label for="voltagePhase">Voltage/Phase/Current *</label>
                            <div>
                                <input type="number" step="0.001" id="voltagePhase" name="voltagePhase" value="" required> 
                            </div> 
                            <label for="voltagePhase" style="text-align: left"><b>VAC</b></label>
                            <label for="phase">Phase *</label>
                            <div>
                                <input type="number" step="0.001" id="phase" name="phase" value="" required> 
                            </div> 
                            <label for="phase" style="text-align: left"><b>Phase</b></label>
                        </div>
                        <div >
                            <label for="exhaust">Exhaust *</label>
                            <div>
                                <select id="exhaust" name="exhaust" style="width: 100%" required>
                                    <option value="" selected=""></option>
                                    <?php
                                    $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '028' ORDER BY code ASC";
                                    $resSite = mysqli_query($con, $sqlDdSite);
                                    while ($rowSite = mysqli_fetch_array($resSite)):
                                        ?>
                                        <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                                    <?php endwhile; ?>
                                </select>
                            </div>
                            <label for="diWater">DI Water *</label>
                            <div>
                                <select id="diWater" name="diWater" style="width: 100%" onchange="updateToFieldWater()" required>
                                    <option value="" selected=""></option>
                                    <?php
                                    $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '029' ORDER BY code ASC";
                                    $resSite = mysqli_query($con, $sqlDdSite);
                                    while ($rowSite = mysqli_fetch_array($resSite)):
                                        ?>
                                        <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                                    <?php endwhile; ?>
                                </select>
                            </div>
                        </div>

                        <script>
                            function updateToFieldWater() {
                                var diWaterDropdown = document.getElementById('diWater');
                                var waterField = document.getElementById('waterTopup');
                                var topapField = document.getElementById('topup');

                                if (diWaterDropdown.value !== '029003') {
                                    waterField.readOnly = true;
                                    waterField.required = false;
                                    topapField.style.display = 'none';
                                } else {
                                    waterField.readOnly = false;
                                    waterField.required = true;
                                    topapField.style.display = 'block';
                                }
                            }
                        </script>

                        <div  style="display: none;" id="topup">
                            <label></label>
                            <div></div>
                            <label for="waterTopup">Water Top-up System *</label>
                            <div>
                                <select id="waterTopup" name="waterTopup" style="width: 100%" required>
                                    <option value="" selected=""></option>
                                    <?php
                                    $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '030' ORDER BY code ASC";
                                    $resSite = mysqli_query($con, $sqlDdSite);
                                    while ($rowSite = mysqli_fetch_array($resSite)):
                                        ?>
                                        <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                                    <?php endwhile; ?>
                                </select>
                            </div>
                        </div>

                        <h2>DAQ</h2>
                        <div >
                            <label for="daq">DAQ (Realtime Leakage Monitoring) *</label>
                            <div>
                                <select id="daq" name="daq" style="width: 100%" required>
                                    <option value="" selected=""></option>
                                    <?php
                                    $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '027' ORDER BY code ASC";
                                    $resSite = mysqli_query($con, $sqlDdSite);
                                    while ($rowSite = mysqli_fetch_array($resSite)):
                                        ?>
                                        <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                                    <?php endwhile; ?>
                                </select>
                            </div>
                        </div>

                        <h2>Internal Chamber Configuration</h2>
                        <div >
                            <label for="intConfigType">Configuration Type *</label>
                            <div>
                                <select id="intConfigType" name="intConfigType" style="width: 100%" onchange="updateDiv()" required>
                                    <option value="" selected=""></option>
                                    <?php
                                    $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '031' ORDER BY code ASC";
                                    $resSite = mysqli_query($con, $sqlDdSite);
                                    while ($rowSite = mysqli_fetch_array($resSite)):
                                        ?>
                                        <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                                    <?php endwhile; ?>
                                </select>
                                <button class="myBtn_multi">View Sample Internal Chamber Configuration</button>
                                <div  class="modal modal_multi">
                                    <div class="modal-content">
                                        <span class="close close_multi">×</span>
                                        <img id="myImg" src="image/reference/016.png" alt="Snow" style="width:100%;max-width:800px;">
                                        <p>Sample Internal Chamber Configuration Description</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <script>
                            function updateDiv() {
                                var dropdown = document.getElementById('intConfigType');
                                var bananaDiv = document.getElementById('BananaDiv');
                                var edgeDiv = document.getElementById('EdgeDiv');
                                var winDiv = document.getElementById('WinchestorDiv');
                                var wireDiv = document.getElementById('WireDiv');
                                var selectedValue = dropdown.value;

                                $('#bananaJackHole').val("");
                                $('#connVoltRating').val("");
                                $('#connCurrRating').val("");
                                $('#connTempRating').val("");
                                $('#noPins').val("");
                                $('#pinPitch').val("");
                                $('#connRack').val("");
                                $('#wireVoltRating').val("");
                                $('#wireCurrRating').val("");
                                $('#wireTempRating').val("");

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

                        <!--Banana-->
                        <div  name="BananaDiv" id="BananaDiv" style="display: none;">
                            <div >
                                <label></label>
                                <div>
                                    <button class="myBtn_multi">View Sample Banana Configuration</button>
                                    <div  class="modal modal_multi">
                                        <div class="modal-content">
                                            <span class="close close_multi">×</span>
                                            <img id="myImg" src="image/reference/017.png" alt="Snow" style="width:100%;max-width:800px;">
                                            <p>Sample Banana Configuration Description</p>
                                        </div>
                                    </div>
                                </div>
                                <label></label>
                                <div></div>
                            </div>
                            <div >
                                <label for="bananaJackHole">No. Banana Jack Holes *</label>
                                <div>
                                    <input type="number" step="0.001" id="bananaJackHole" name="bananaJackHole" value="" > 
                                </div> 
                                <label for="bananaJackHole" style="text-align: left"><b>Pins</b></label>
                                <label for="connVoltRating">Connector Voltage Rating *</label>
                                <div>
                                    <input type="number" step="0.001" id="connVoltRating" name="connVoltRating" value="" > 
                                </div> 
                                <label for="connVoltRating" style="text-align: left"><b>V</b></label>
                            </div>
                            <div >
                                <label for="connCurrRating">Connector Current Rating *</label>
                                <div>
                                    <input type="number" step="0.001" id="connCurrRating" name="connCurrRating" value="" > 
                                </div> 
                                <label for="connCurrRating" style="text-align: left"><b>A</b></label>
                                <label for="connTempRating">Connector Temp Rating *</label>
                                <div>
                                    <input type="number" step="0.001" id="connTempRating" name="connTempRating" value="" > 
                                </div> 
                                <label for="connTempRating" style="text-align: left"><b>`C</b></label>
                            </div>
                        </div>

                        <!--Edge Connector-->
                        <div  name="EdgeDiv" id="EdgeDiv" style="display: none;">
                            <div >
                                <label></label>
                                <div>
                                    <button class="myBtn_multi">View Sample Edge Configuration</button>
                                    <div  class="modal modal_multi">
                                        <div class="modal-content">
                                            <span class="close close_multi">×</span>
                                            <img id="myImg" src="image/reference//017.png" alt="Snow" style="width:100%;max-width:800px;">
                                            <p>Sample Edge Configuration Description</p>
                                        </div>
                                    </div>
                                </div>
                                <label></label>
                                <div></div>
                            </div>
                            <div >
                                <label for="noPins">No. of Pins *</label>
                                <div>
                                    <input type="number" step="0.001" id="noPins" name="noPins" value="" > 
                                </div> 
                                <label for="noPins" style="text-align: left"><b>Pins</b></label>

                                <label for="pinPitch">Pin Pitch *</label>
                                <div>
                                    <input type="number" step="0.001" id="pinPitch" name="pinPitch" value="" > 
                                </div> 
                                <label for="pinPitch" style="text-align: left"><b>mm</b></label>
                            </div>
                            <div >
                                <label for="connVoltRating">Connector Voltage Rating *</label>
                                <div>
                                    <input type="number" step="0.001" id="connVoltRating" name="connVoltRating" value="" > 
                                </div> 
                                <label for="connVoltRating" style="text-align: left"><b>V</b></label>

                                <label for="connCurrRating">Connector Current Rating *</label>
                                <div>
                                    <input type="number" step="0.001" id="connCurrRating" name="connCurrRating" value="" > 
                                </div> 
                                <label for="connCurrRating" style="text-align: left"><b>A</b></label>
                            </div>
                            <div >
                                <label for="connTempRating">Connector Temp Rating *</label>
                                <div>
                                    <input type="number" step="0.001" id="connTempRating" name="connTempRating" value="" > 
                                </div> 
                                <label for="connTempRating" style="text-align: left"><b>`C</b></label>
                            </div>
                        </div> 

                        <!--Winchestor-->
                        <div  name="WinchestorDiv" id="WinchestorDiv" style="display: none;">
                            <div >
                                <label></label>
                                <div>
                                    <button class="myBtn_multi">View Sample Winchestor Configuration</button>
                                    <div  class="modal modal_multi">
                                        <div class="modal-content">
                                            <span class="close close_multi">×</span>
                                            <img id="myImg" src="image/reference/018.png" alt="Snow" style="width:100%;max-width:800px;">
                                            <p>Sample Winchestor Configuration Description</p>
                                        </div>
                                    </div>
                                </div>
                                <label></label>
                                <div></div>
                            </div>
                            <div >
                                <label for="noPins">No. of Pins *</label>
                                <div>
                                    <input type="number" step="0.001" id="noPins" name="noPins" value="" > 
                                </div> 
                                <label for="noPins" style="text-align: left"><b>Pins</b></label>
                                <label for="pinPitch">Pin Pitch *</label>
                                <div>
                                    <input type="number" step="0.001" id="pinPitch" name="pinPitch" value="" > 
                                </div> 
                                <label for="pinPitch" style="text-align: left"><b>mm</b></label>
                            </div>
                            <div >
                                <label for="connVoltRating">Connector Voltage Rating *</label>
                                <div>
                                    <input type="number" step="0.001" id="connVoltRating" name="connVoltRating" value="" > 
                                </div> 
                                <label for="connVoltRating" style="text-align: left"><b>V</b></label>
                                <label for="connCurrRating">Connector Current Rating *</label>
                                <div>
                                    <input type="number" step="0.001" id="connCurrRating" name="connCurrRating" value="" > 
                                </div> 
                                <label for="connCurrRating" style="text-align: left"><b>A</b></label>
                            </div>
                            <div >
                                <label for="connRack">No. Wires Connected to Rack *</label>
                                <div>
                                    <input type="number" step="0.001" id="connRack" name="connRack" value="" > 
                                </div> 
                                <label for="connRack" style="text-align: left"><b></b></label>
                            </div>
                        </div>  

                        <!--Wire-->
                        <div  name="WireDiv" id="WireDiv" style="display: none;">
                            <div >
                                <label></label>
                                <div>
                                    <button class="myBtn_multi">View Sample Wire Configuration</button>
                                    <div  class="modal modal_multi">
                                        <div class="modal-content">
                                            <span class="close close_multi">×</span>
                                            <img id="myImg" src="image/reference/019.png" alt="Snow" style="width:100%;max-width:800px;">
                                            <p>Sample Wire Configuration Description</p>
                                        </div>
                                    </div>
                                </div>
                                <label></label>
                                <div></div>
                            </div>
                            <div >
                                <label for="wireVoltRating">Wire Voltage Rating *</label>
                                <div>
                                    <input type="number" step="0.001" id="wireVoltRating" name="wireVoltRating" value="" > 
                                </div> 
                                <label for="wireVoltRating" style="text-align: left"><b>V</b></label>
                                <label for="wireCurrRating">Wire Current Rating *</label>
                                <div>
                                    <input type="number" step="0.001" id="wireCurrRating" name="wireCurrRating" value="" > 
                                </div> 
                                <label for="wireCurrRating" style="text-align: left"><b>A</b></label>
                            </div>
                            <div >
                                <label for="wireTempRating">Wire Temp Rating *</label>
                                <div>
                                    <input type="number" step="0.001" id="wireTempRating" name="wireTempRating" value="" > 
                                </div>
                                <label for="wireTempRating" style="text-align: left"><b>`C</b></label>
                            </div>
                        </div> 

                        <h2>External Chamber Configuration</h2>
                        <div >
                            <label for="extConfigType">Configuration Type *</label>
                            <div>
                                <select id="extConfigType" name="extConfigType" style="width: 100%" onchange="updateView()" required>
                                    <option value="" selected=""></option>
                                    <?php
                                    $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '032' ORDER BY code ASC";
                                    $resSite = mysqli_query($con, $sqlDdSite);
                                    while ($rowSite = mysqli_fetch_array($resSite)):
                                        ?>
                                        <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                                    <?php endwhile; ?>
                                </select>
                                <button class="myBtn_multi">View External Chamber Configuration Configuration</button>
                                <div  class="modal modal_multi">
                                    <div class="modal-content">
                                        <span class="close close_multi">×</span>
                                        <img id="myImg" src="image/reference/020.png" alt="Snow" style="width:100%;max-width:800px;">
                                        <p>Sample External Chamber Configuration Description</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <script>
                            function updateView() {
                                var dd = document.getElementById('extConfigType');
                                var extDiv = document.getElementById('viewExternalDiv');
                                var selectedValue = dd.value;

                                if (selectedValue === '032003') {
                                    extDiv.style.display = 'none';
                                } else {
                                    extDiv.style.display = 'block';
                                }
                            }
                        </script>

                        <div  id="viewExternalDiv">
                            <label for="interfaceVoltRating">Interface Voltage Rating *</label>
                            <div>
                                <input type="number" step="0.001" id="interfaceVoltRating" name="interfaceVoltRating" value="" > 
                            </div> 
                            <label for="interfaceVoltRating" style="text-align: left"><b>V</b></label>
                            <label for="interfaceCurrRating">Interface Current Rating *</label>
                            <div>
                                <input type="number" step="0.001" id="interfaceCurrRating" name="interfaceCurrRating" value="" > 
                            </div> 
                            <label for="interfaceCurrRating" style="text-align: left"><b>A</b></label>
                        </div>

                        <div class="pull-right">
                            <button onclick="location.href = 'form_equipment_list.php'" type="button" id="backBtn">List</button>
                        </div>
                        <div class="pull-right">
                            <button type="submit" id="myBtn" class="btn btn-primary">Send</button>
                        </div>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>