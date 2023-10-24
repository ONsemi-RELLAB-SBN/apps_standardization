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
        <link rel="shortcut icon" href="image/dribbble.ico">

        <link rel="stylesheet" type="text/css" href="css/skeleton.css">
<!--        <link rel="stylesheet" type="text/css" href="../css/select2.css"/>
        <link rel="stylesheet" type="text/css" href="../css/layout.css">
        <link rel="stylesheet" type="text/css" href="../css/elements.css" />
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="css/skeleton.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'>

        <script src="../js/bootstrap.js"></script>
        <script src="../js/jquery.js"></script>
        <script src="../js/select2.min.js"></script>-->

        <style>
            #backBtn {
                display: block;
                position: fixed;
                bottom: 70px;
                right: 30px;
                /*z-index: 99;*/
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
                /*z-index: 99;*/
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

            #myBtn:hover {
                /*background-color: #17a2b8;*/
                background-color: orange;
            }
            #backBtn:hover {
                background-color: orange;
            }

            input[type=text], input[type=password] {
                width: 100%;
                padding: 15px;
                margin: 5px 0 22px 0;
                display: inline-block;
                /*border: none;*/
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
            <hr>
            <hr>
            <hr>
            <h1>Equipment Detail</h1>
            <hr>
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-box">
                        <form id="add_equipment_form" class="form-horizontal" role="form" action="crud_add_equipment.php" method="get">
                            <h2>General</h2>
                            <div class="form-group">
                                <label for="labLocation" class="col-lg-2 control-label">Lab Location *</label>
                                <div class="col-lg-3">
                                    <select id="labLocation" name="labLocation" class="js-example-basic-single" style="width: 100%" required>
                                        <option value="" selected=""></option>
                                        <?php
                                        $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '002' ORDER BY code ASC";
                                        $resSite = mysqli_query($con, $sqlDdSite);
                                        while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                            <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                                        <?php endwhile; ?>
                                    </select>
                                </div>
                                <label for="strategy" class="col-lg-2 control-label">onsemi Strategy *</label>
                                <div class="col-lg-3">
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
                            </div>
                            <div class="form-group">
                                <label for="standardization" class="col-lg-2 control-label">Standardization Category *</label>
                                <div class="col-lg-3">
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
                                <label for="champion" class="col-lg-2 control-label">Champion *</label>
                                <div class="col-lg-3">
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
                            </div>

                            <h2>Equipment Identity</h2>
                            <div class="form-group">
                                <label for="eqptId" class="col-lg-2 control-label">Equipment ID *</label>
                                <div class="col-lg-3">
                                    <select id="eqptId" name="eqptId" class="js-example-basic-single" style="width: 100%" required>
                                        <option value="" selected=""></option>
                                        <?php
                                        $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '006' ORDER BY code ASC";
                                        $resSite = mysqli_query($con, $sqlDdSite);
                                        while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                            <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                                        <?php endwhile; ?>
                                    </select>
                                </div>
                                <label for="dedicated" class="col-lg-2 control-label">Dedicated/Share *</label>
                                <div class="col-lg-3">
                                    <select id="dedicated" name="dedicated" class="js-example-basic-single" style="width: 100%" required>
                                        <option value="" selected=""></option>
                                        <?php
                                        $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '007' ORDER BY code ASC";
                                        $resSite = mysqli_query($con, $sqlDdSite);
                                        while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                            <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                                        <?php endwhile; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="relTest" class="col-lg-2 control-label">Rel Test (Multiselect) *</label>
                                <div class="col-lg-3">
                                    <select name="relTest[]" id="relTest" multiple multiselect-search="true" multiselect-select-all="false" style="width:100%" required>
                                    <!--<select id="relTest" name="relTest[]" class="js-example-basic-multiple" multiple="multiple" style="width: 100%" required>-->
                                    <?php
                                    $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '008' ORDER BY code ASC";
                                    $resSite = mysqli_query($con, $sqlDdSite);
                                    while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                        <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                                    <?php endwhile; ?>
                                    </select>
                                </div>
                                <label for="manufacturer" class="col-lg-2 control-label">Equipment Manufacturer *</label>
                                <div class="col-lg-3">
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
                            </div>
                            <div class="form-group">
                                <label for="model" class="col-lg-2 control-label">Equipment Model *</label>
                                <div class="col-lg-3">
                                    <select id="model" name="model" class="js-example-basic-single" style="width: 100%" required>
                                        <option value="" selected=""></option>
                                        <?php
                                        $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '010' ORDER BY code ASC";
                                        $resSite = mysqli_query($con, $sqlDdSite);
                                        while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                            <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                                        <?php endwhile; ?>
                                    </select>
                                </div>
                                <label for="mfgDate" class="col-lg-2 control-label">Equipment Mfg Date *</label>
                                <div class="col-lg-2">
                                    <input type="date" class="form-control" id="mfgDate" name="mfgDate" value="" required> 
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

                            <div class="form-group">
                                <label for="assetNo" class="col-lg-2 control-label">Equipment Asset No *</label>
                                <div class="col-lg-3">
                                    <input type="text" class="form-control" id="assetNo" name="assetNo" placeholder="Asset Number" value="" required> 
                                </div>
                                <label for="newTransfer" class="col-lg-2 control-label">New/Transfer Equipment *</label>
                                <div class="col-lg-3">
                                    <select id="newTransfer" name="newTransfer" class="js-example-basic-single" style="width: 100%" onchange="updateToField()" required >
                                        <option value="" selected=""></option>
                                        <?php
                                        $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '013' ORDER BY code ASC";
                                        $resSite = mysqli_query($con, $sqlDdSite);
                                        while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                            <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                                        <?php endwhile; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group" style="display: none;" id="transfer">
                                <label for="to" class="col-lg-7 control-label">From? *</label>
                                <div class="col-lg-3">
                                    <select id="to" name="to" class="js-example-basic-single" style="width: 100%" readonly required>
                                        <option value="" selected=""></option>
                                        <?php
                                        $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '014' ORDER BY code ASC";
                                        $resSite = mysqli_query($con, $sqlDdSite);
                                        while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                            <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                                        <?php endwhile; ?>
                                    </select>
                                </div>
                            </div>

                            <h2>Capability</h2>
                            <div class="form-group">
                                <label for="voltRating" class="col-lg-2 control-label">Voltage Rating *</label>
                                <div class="col-lg-1">
                                    <input type="number" 0 class="form-control" id="voltRating" name="voltRating" value="" required> 
                                </div> 
                                <label for="voltRating" class="col-lg-2 control-label pull-left" style="text-align: left"><b>V</b></label>
                                <label for="voltControl" class="col-lg-2 control-label">Voltage Control Accuracy *</label>
                                <div class="col-lg-1">
                                    <input type="number" step="0.001" class="form-control" id="voltControl" name="voltControl" value="" required> 
                                </div> 
                                <label for="voltControl" class="col-lg-2 control-label pull-left" style="text-align: left"><b>%</b></label>
                            </div>
                            <div class="form-group">
                                <label for="minTemp" class="col-lg-2 control-label">Min. Temperature *</label>
                                <div class="col-lg-1">
                                    <input type="number" step="0.001" class="form-control" id="minTemp" name="minTemp" value="" required> 
                                </div> 
                                <label for="minTemp" class="col-lg-2 control-label pull-left" style="text-align: left"><b>`C</b></label>
                                <label for="maxTemp" class="col-lg-2 control-label">Max. Temperature *</label>
                                <div class="col-lg-1">
                                    <input type="number" step="0.001" class="form-control" id="maxTemp" name="maxTemp" value="" required> 
                                </div>
                                <label for="maxTemp" class="col-lg-2 control-label pull-left" style="text-align: left"><b>`C</b></label>
                            </div>
                            <div class="form-group">
                                <label for="minRh" class="col-lg-2 control-label">Min. RH *</label>
                                <div class="col-lg-1">
                                    <input type="number" step="0.001" class="form-control" id="minRh" name="minRh" value="" required> 
                                </div> 
                                <label for="minRh" class="col-lg-2 control-label pull-left" style="text-align: left"><b>%</b></label>
                                <label for="maxRh" class="col-lg-2 control-label">Max. RH *</label>
                                <div class="col-lg-1">
                                    <input type="number" step="0.001" class="form-control" id="maxRh" name="maxRh" value="" required> 
                                </div> 
                                <label for="maxRh" class="col-lg-2 control-label pull-left" style="text-align: left"><b>%</b></label>
                            </div>
                            <div class="form-group">
                                <label for="heatDissipation" class="col-lg-2 control-label">Heat Dissipation *</label>
                                <div class="col-lg-1">
                                    <input type="number" step="0.001" class="form-control" id="heatDissipation" name="heatDissipation" value="" required> 
                                </div>
                                <label for="heatDissipation" class="col-lg-2 control-label pull-left" style="text-align: left"><b>Watt</b></label>
                                <label for="tempFluctuation" class="col-lg-2 control-label">Temperature Fluctuation *</label>
                                <div class="col-lg-1">
                                    <input type="number" step="0.001" class="form-control" id="tempFluctuation" name="tempFluctuation" value="" required>
                                    <button class="myBtn_multi btn-link">View Sample</button>
                                    <div class="modal modal_multi">
                                        <div class="modal-content">
                                            <span class="close close_multi">×</span>
                                            <img id="myImg" src="image/reference/001.png" alt="image" style="width:90%;max-width:800px;">
                                            <p>Sample Temperature Fluctuation Description</p>
                                        </div>
                                    </div>
                                </div>
                                <label for="tempFluctuation" class="col-lg-2 control-label pull-left" style="text-align: left"><b>`C</b></label>
                            </div>
                            <div class="form-group">
                                <label for="tempUniform" class="col-lg-2 control-label">Temperature Uniformity *</label>
                                <div class="col-lg-1">
                                    <input type="number" step="0.001" class="form-control" id="tempUniform" name="tempUniform" value="" required> 
                                    <button class="myBtn_multi btn-link">View Sample</button>
                                    <div class="modal modal_multi">
                                        <div class="modal-content">
                                            <span class="close close_multi">×</span>
                                            <img id="myImg" src="image/reference/002.png" alt="image" style="width:90%;max-width:800px;">
                                            <p>Sample Temperature Uniformity Description</p>
                                        </div>
                                    </div>
                                </div> 
                                <label for="tempUniform" class="col-lg-2 control-label pull-left" style="text-align: left"><b>`C</b></label>
                                <label for="humidFluctuation" class="col-lg-2 control-label">Humidity Fluctuation *</label>
                                <div class="col-lg-1">
                                    <input type="number" step="0.001" class="form-control" id="humidFluctuation" name="humidFluctuation" value="" required> 
                                    <button class="myBtn_multi btn-link">View Sample</button>
                                    <div class="modal modal_multi">
                                        <div class="modal-content">
                                            <span class="close close_multi">×</span>
                                            <img id="myImg" src="image/reference/003.png" alt="Snow" style="width:90%;max-width:800px;">
                                            <p>Sample Humid Fluctuation Description</p>
                                        </div>
                                    </div>
                                </div> 
                                <label for="humidFluctuation" class="col-lg-2 control-label pull-left" style="text-align: left"><b>%</b></label>
                            </div>

                            <h2>Characteristic</h2>
                            <div class="form-group">
                                <label for="noInterior" class="col-lg-2 control-label">No. Interior Zones (doors) *</label>
                                <div class="col-lg-1">
                                    <input type="number" step="0.001" class="form-control" id="noInterior" name="noInterior" value="" required> 
                                    <button class="myBtn_multi btn-link">View Sample</button>
                                    <div class="modal modal_multi">
                                        <div class="modal-content">
                                            <span class="close close_multi">×</span>
                                            <img id="myImg" src="image/reference/006.png" alt="Snow" style="width:90%;max-width:800px;">
                                            <p>Sample No Interior Zone Description</p>
                                        </div>
                                    </div>
                                </div>
                                <label for="noInterior" class="col-lg-2 control-label pull-left" style="text-align: left"><b>Zone</b></label>
                                <label for="extDimension" class="col-lg-2 control-label">External Dimension (W) *</label>
                                <div class="col-lg-1">
                                    <input type="number" step="0.001" class="form-control" id="extDimensionW" name="extDimensionW" value="" required> 
                                </div>
                                <label for="extDimensionW" class="col-lg-2 control-label pull-left" style="text-align: left"><b>mm</b></label>
                            </div>
                            <div class="form-group">
                                <label for="intVolume" class="col-lg-2 control-label">Internal Volume *</label>
                                <div class="col-lg-1">
                                    <input type="number" step="0.001" class="form-control" id="intVolume" name="intVolume" value="" required> 
                                    <button class="myBtn_multi btn-link">View Sample</button>
                                    <div  class="modal modal_multi">
                                        <div class="modal-content">
                                            <span class="close close_multi">×</span>
                                            <img id="myImg" src="image/reference/008.png" alt="Snow" style="width:90%;max-width:800px;">
                                            <p>Sample Internal Volume Description</p>
                                        </div>
                                    </div>
                                </div> 
                                <label for="intVolume" class="col-lg-2 control-label pull-left" style="text-align: left"><b>L</b></label>
                                <label for="extDimension" class="col-lg-2 control-label">(D) *</label>
                                <div class="col-lg-1">
                                    <input type="number" step="0.001" class="form-control" id="extDimensionD" name="extDimensionD" value="" required> 
                                </div>
                                <label for="extDimensionD" class="col-lg-2 control-label pull-left" style="text-align: left"><b>mm</b></label>
                            </div>
                            <div class="form-group">
                                <label for="boardOrientation" class="col-lg-2 control-label">Board Orientation*</label>
                                <div class="col-lg-3">
                                    <select id="boardOrientation" name="boardOrientation" class="js-example-basic-single" style="width: 100%" required>
                                        <option value="" selected=""></option>
                                        <?php
                                        $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '015' ORDER BY code ASC";
                                        $resSite = mysqli_query($con, $sqlDdSite);
                                        while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                            <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                                        <?php endwhile; ?>
                                    </select>
                                    <button class="myBtn_multi btn-link">View Sample</button>
                                    <div  class="modal modal_multi">
                                        <div class="modal-content">
                                            <span class="close close_multi">×</span>
                                            <img id="myImg" src="image/reference/009.png" alt="Snow" style="width:90%;max-width:800px;">
                                            <p>Sample Board Orientation Description</p>
                                        </div>
                                    </div>
                                </div>
                                <label for="extDimension" class="col-lg-2 control-label">(H) *</label>
                                <div class="col-lg-1">
                                    <input type="number" step="0.001" class="form-control" id="extDimensionH" name="extDimensionH" value="" required> 
                                    <button class="myBtn_multi btn-link">View Sample</button>
                                    <div class="modal modal_multi">
                                        <div class="modal-content">
                                            <span class="close close_multi">×</span>
                                            <img id="myImg" src="image/reference/004.png" alt="Snow" style="width:90%;max-width:800px;">
                                            <p>Sample External Dimension Description</p>
                                        </div>
                                    </div>
                                </div>
                                <label for="extDimensionH" class="col-lg-2 control-label pull-left" style="text-align: left"><b>mm</b></label>
                            </div>
                            <div class="form-group">
                                <label for="rackMaterial" class="col-lg-2 control-label">Rack Material *</label>
                                <div class="col-lg-3">
                                    <select id="rackMaterial" name="rackMaterial" class="js-example-basic-single" style="width: 100%" required>
                                        <option value="" selected=""></option>
                                        <?php
                                        $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '016' ORDER BY code ASC";
                                        $resSite = mysqli_query($con, $sqlDdSite);
                                        while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                            <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                                        <?php endwhile; ?>
                                    </select>
                                </div>
                                <label for="intDimension" class="col-lg-2 control-label">Internal Dimension (W) *</label>
                                <div class="col-lg-1">
                                    <input type="number" step="0.001" class="form-control" id="intDimensionW" name="intDimensionW" value="" required> 
                                </div> 
                                <label for="intDimensionW" class="col-lg-2 control-label pull-left" style="text-align: left"><b>mm</b></label>
                            </div>
                            <div class="form-group">
                                <label for="rackSlotPitch" class="col-lg-2 control-label">Rack Slot-to-Slot Pitch *</label>
                                <div class="col-lg-1">
                                    <input type="number" step="0.001" class="form-control" id="rackSlotPitch" name="rackSlotPitch" value="" required>
                                    <button class="myBtn_multi btn-link">View Sample</button>
                                    <div  class="modal modal_multi">
                                        <div class="modal-content">
                                            <span class="close close_multi">×</span>
                                            <img id="myImg" src="image/reference/010.png" alt="Snow" style="width:90%;max-width:800px;">
                                            <p>Sample Rack Slot-to-Slot Pitch Description</p>
                                        </div>
                                    </div>
                                </div> 
                                <label for="rackSlotPitch" class="col-lg-2 control-label pull-left" style="text-align: left"><b>mm</b></label>
                                <label for="intDimension" class="col-lg-2 control-label">(D) *</label>
                                <div class="col-lg-1">
                                    <input type="number" step="0.001" class="form-control" id="intDimensionD" name="intDimensionD" value="" required> 
                                </div> 
                                <label for="intDimensionD" class="col-lg-2 control-label pull-left" style="text-align: left"><b>mm</b></label>
                            </div>
                            <div class="form-group">
                                <label for="rackSLotWidth" class="col-lg-2 control-label">Rack Slot Width *</label>
                                <div class="col-lg-1">
                                    <input type="number" step="0.001" class="form-control" id="rackSLotWidth" name="rackSLotWidth" value="" required> 
                                    <button class="myBtn_multi btn-link">View Sample</button>
                                    <div  class="modal modal_multi">
                                        <div class="modal-content">
                                            <span class="close close_multi">×</span>
                                            <img id="myImg" src="image/reference/011.png" alt="Snow" style="width:90%;max-width:800px;">
                                            <p>Sample Rack Slot Width Description</p>
                                        </div>
                                    </div>
                                </div> 
                                <label for="rackSLotWidth" class="col-lg-2 control-label pull-left" style="text-align: left"><b>mm</b></label>
                                <label for="intDimension" class="col-lg-2 control-label">(H) *</label>
                                <div class="col-lg-1">
                                    <input type="number" step="0.001" class="form-control" id="intDimensionH" name="intDimensionH" value="" required> 
                                    <button class="myBtn_multi btn-link">View Sample</button>
                                    <div class="modal modal_multi">
                                        <div class="modal-content">
                                            <span class="close close_multi">×</span>
                                            <img id="myImg" src="image/reference/005.png" alt="Snow" style="width:90%;max-width:800px;">
                                            <p>Sample Internal Dimension Description</p>
                                        </div>
                                    </div>
                                </div> 
                                <label for="intDimensionH" class="col-lg-2 control-label pull-left" style="text-align: left"><b>mm</b></label>
                            </div>
                            <div class="form-group">
                                <label for="eqptWeight" class="col-lg-2 control-label">Equipment Weight *</label>
                                <div class="col-lg-1">
                                    <input type="number" step="0.001" class="form-control" id="eqptWeight" name="eqptWeight" value="" required> 
                                </div> 
                                <label for="eqptWeight" class="col-lg-2 control-label pull-left" style="text-align: left"><b>Kg</b></label>
                                <label for="rackDimension" class="col-lg-2 control-label">Rack Dimension (W) *</label>
                                <div class="col-lg-1">
                                    <input type="number" step="0.001" class="form-control" id="rackDimensionW" name="rackDimensionW" value="" required> 
                                </div>
                                <label for="rackDimensionW" class="col-lg-2 control-label pull-left" style="text-align: left"><b>mm</b></label>
                            </div>
                            <div class="form-group">
                                <label for="noMbSlot" class="col-lg-2 control-label">Number of motherboard slots *</label>
                                <div class="col-lg-1">
                                    <input type="number" step="0.001" class="form-control" id="noMbSlot" name="noMbSlot" value="" required>
                                    <button class="myBtn_multi btn-link">View Sample</button>
                                    <div  class="modal modal_multi">
                                        <div class="modal-content">
                                            <span class="close close_multi">×</span>
                                            <img id="myImg" src="image/reference/012.png" alt="Snow" style="width:90%;max-width:800px;">
                                            <p>Sample Motherboard Slots Description</p>
                                        </div>
                                    </div>
                                </div> 
                                <label for="noMbSlot" class="col-lg-2 control-label pull-left" style="text-align: left"><b>Slot</b></label>
                                <label for="rackDimension" class="col-lg-2 control-label">(D) *</label>
                                <div class="col-lg-1">
                                    <input type="number" step="0.001" class="form-control" id="rackDimensionD" name="rackDimensionD" value="" required> 
                                </div> 
                                <label for="rackDimensionD" class="col-lg-2 control-label pull-left" style="text-align: left"><b>mm</b></label>
                            </div>
                            <div class="form-group">
                                <label for="maxPsBs" class="col-lg-2 control-label">Max number of power supplies per board slot *</label>
                                <div class="col-lg-1">
                                    <input type="number" step="0.001" class="form-control" id="maxPsBs" name="maxPsBs" value="" required> 
                                    <button class="myBtn_multi btn-link">View Sample</button>
                                    <div  class="modal modal_multi">
                                        <div class="modal-content">
                                            <span class="close close_multi">×</span>
                                            <img id="myImg" src="image/reference/013.png" alt="Snow" style="width:90%;max-width:800px;">
                                            <p>Sample Power Supplies Description</p>
                                        </div>
                                    </div>
                                </div> 
                                <label for="maxPsBs" class="col-lg-2 control-label pull-left" style="text-align: left"><b>Slot</b></label>
                                <label for="rackDimension" class="col-lg-2 control-label">(H) *</label>
                                <div class="col-lg-1">
                                    <input type="number" step="0.001" class="form-control" id="rackDimensionH" name="rackDimensionH" value="" required> 
                                    <button class="myBtn_multi btn-link">View Sample</button>
                                    <div  class="modal modal_multi">
                                        <div class="modal-content">
                                            <span class="close close_multi">×</span>
                                            <img id="myImg" src="image/reference/007.png" alt="Snow" style="width:90%;max-width:800px;">
                                            <p>Sample Rack Dimension Description</p>
                                        </div>
                                    </div>
                                </div> 
                                <label for="rackDimensionH" class="col-lg-2 control-label pull-left" style="text-align: left"><b>mm</b></label>
                            </div>
                            <div class="form-group">
                                <label for="maxPs" class="col-lg-2 control-label">Max number of power supplies for the entire Equipment *</label>
                                <div class="col-lg-1">
                                    <input type="number" step="0.001" class="form-control" id="maxPs" name="maxPs" value="" required> 
                                    <button class="myBtn_multi btn-link">View Sample</button>
                                    <div  class="modal modal_multi">
                                        <!-- Modal content -->
                                        <div class="modal-content">
                                            <span class="close close_multi">×</span>
                                            <img id="myImg" src="image/reference/014.png" alt="Snow" style="width:90%;max-width:800px;">
                                            <p>Sample Power Supplies Description</p>
                                        </div>
                                    </div>
                                </div> 
                                <label for="maxPs" class="col-lg-2 control-label pull-left" style="text-align: left"><b>Unit</b></label>
                            </div>
                            <div class="form-group">
                                <label for="airflow" class="col-lg-2 control-label">Airflow *</label>
                                <div class="col-lg-3">
                                    <select id="airflow" name="airflow" class="js-example-basic-single" style="width: 100%" required>
                                        <option value="" selected=""></option>
                                        <?php
                                        $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '017' ORDER BY code ASC";
                                        $resSite = mysqli_query($con, $sqlDdSite);
                                        while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                            <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                                        <?php endwhile; ?>
                                    </select>
                                    <button class="myBtn_multi btn-link">View Sample</button>
                                    <div  class="modal modal_multi">
                                        <div class="modal-content">
                                            <span class="close close_multi">×</span>
                                            <img id="myImg" src="image/reference/015.png" alt="Snow" style="width:90%;max-width:800px;">
                                            <p>Sample Airflow Description</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h2>Safety</h2>
                            <div class="form-group">
                                <label for="tempProtection1" class="col-lg-2 control-label">Temperature Protection 1 *</label>
                                <div class="col-lg-3">
                                    <select id="tempProtection1" name="tempProtection1" class="js-example-basic-single" style="width: 100%" required>
                                        <option value="" selected=""></option>
                                        <?php
                                        $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '020' ORDER BY code ASC";
                                        $resSite = mysqli_query($con, $sqlDdSite);
                                        while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                            <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                                        <?php endwhile; ?>
                                    </select>
                                </div>
                                <label for="tempProtection2" class="col-lg-2 control-label">Temperature Protection 2 *</label>
                                <div class="col-lg-3">
                                    <select id="tempProtection2" name="tempProtection2" class="js-example-basic-single" style="width: 100%" required>
                                        <option value="" selected=""></option>
                                        <?php
                                        $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '020' ORDER BY code ASC";
                                        $resSite = mysqli_query($con, $sqlDdSite);
                                        while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                            <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                                        <?php endwhile; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="tempThermostat3" class="col-lg-2 control-label">Temperature Protection / Thermostat 3 *</label>
                                <div class="col-lg-3">
                                    <select id="tempThermostat3" name="tempThermostat3" class="js-example-basic-single" style="width: 100%" required>
                                        <option value="" selected=""></option>
                                        <?php
                                        $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '020' ORDER BY code ASC";
                                        $resSite = mysqli_query($con, $sqlDdSite);
                                        while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                            <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                                        <?php endwhile; ?>
                                    </select>
                                </div>
                                <label for="smokeDetector" class="col-lg-2 control-label">Smoke Detector/Alarm *</label>
                                <div class="col-lg-3">
                                    <select id="smokeDetector" name="smokeDetector" class="js-example-basic-single" style="width: 100%" required>
                                        <option value="" selected=""></option>
                                        <?php
                                        $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '020' ORDER BY code ASC";
                                        $resSite = mysqli_query($con, $sqlDdSite);
                                        while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                            <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                                        <?php endwhile; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="emo" class="col-lg-2 control-label">EMO button *</label>
                                <div class="col-lg-3">
                                    <select id="emo" name="emo" class="js-example-basic-single" style="width: 100%" required>
                                        <option value="" selected=""></option>
                                        <?php
                                        $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '020' ORDER BY code ASC";
                                        $resSite = mysqli_query($con, $sqlDdSite);
                                        while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                            <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                                        <?php endwhile; ?>
                                    </select>
                                </div>
                                <label class="col-lg-2 control-label"></label>
                                <div class="col-lg-3"></div>
                            </div>

                            <h2>Utilities</h2>
                            <div class="form-group">
                                <label for="voltagePhase" class="col-lg-2 control-label">Voltage/Phase/Current *</label>
                                <div class="col-lg-1">
                                    <input type="number" step="0.001" class="form-control" id="voltagePhase" name="voltagePhase" value="" required> 
                                </div> 
                                <label for="voltagePhase" class="col-lg-2 control-label pull-left" style="text-align: left"><b>VAC</b></label>
                                <label for="phase" class="col-lg-2 control-label">Phase *</label>
                                <div class="col-lg-1">
                                    <input type="number" step="0.001" class="form-control" id="phase" name="phase" value="" required> 
                                </div> 
                                <label for="phase" class="col-lg-2 control-label pull-left" style="text-align: left"><b>Phase</b></label>
                            </div>
                            <div class="form-group">
                                <label for="exhaust" class="col-lg-2 control-label">Exhaust *</label>
                                <div class="col-lg-3">
                                    <select id="exhaust" name="exhaust" class="js-example-basic-single" style="width: 100%" required>
                                        <option value="" selected=""></option>
                                        <?php
                                        $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '028' ORDER BY code ASC";
                                        $resSite = mysqli_query($con, $sqlDdSite);
                                        while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                            <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                                        <?php endwhile; ?>
                                    </select>
                                </div>
                                <label for="diWater" class="col-lg-2 control-label">DI Water *</label>
                                <div class="col-lg-3">
                                    <select id="diWater" name="diWater" class="js-example-basic-single" style="width: 100%" onchange="updateToFieldWater()" required>
                                        <option value="" selected=""></option>
                                        <?php
                                        $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '029' ORDER BY code ASC";
                                        $resSite = mysqli_query($con, $sqlDdSite);
                                        while ($rowSite = mysqli_fetch_array($resSite)): ?>
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

                            <div class="form-group" style="display: none;" id="topup">
                                <label class="col-lg-2 control-label"></label>
                                <div class="col-lg-3"></div>
                                <label for="waterTopup" class="col-lg-2 control-label">Water Top-up System *</label>
                                <div class="col-lg-3">
                                    <select id="waterTopup" name="waterTopup" class="js-example-basic-single" style="width: 100%" required>
                                        <option value="" selected=""></option>
                                        <?php
                                        $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '030' ORDER BY code ASC";
                                        $resSite = mysqli_query($con, $sqlDdSite);
                                        while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                            <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                                        <?php endwhile; ?>
                                    </select>
                                </div>
                            </div>

                            <h2>DAQ</h2>
                            <div class="form-group">
                                <label for="daq" class="col-lg-2 control-label">DAQ (Realtime Leakage Monitoring) *</label>
                                <div class="col-lg-3">
                                    <select id="daq" name="daq" class="js-example-basic-single" style="width: 100%" required>
                                        <option value="" selected=""></option>
                                        <?php
                                        $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '027' ORDER BY code ASC";
                                        $resSite = mysqli_query($con, $sqlDdSite);
                                        while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                            <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                                        <?php endwhile; ?>
                                    </select>
                                </div>
                            </div>

                            <h2>Internal Chamber Configuration</h2>
                            <div class="form-group">
                                <label for="intConfigType" class="col-lg-2 control-label">Configuration Type *</label>
                                <div class="col-lg-3">
                                    <select id="intConfigType" name="intConfigType" class="js-example-basic-single" style="width: 100%" onchange="updateDiv()" required>
                                        <option value="" selected=""></option>
                                        <?php
                                        $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '031' ORDER BY code ASC";
                                        $resSite = mysqli_query($con, $sqlDdSite);
                                        while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                            <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                                        <?php endwhile; ?>
                                    </select>
                                    <button class="myBtn_multi btn-link">View Sample</button>
                                    <div  class="modal modal_multi">
                                        <div class="modal-content">
                                            <span class="close close_multi">×</span>
                                            <img id="myImg" src="image/reference/016.png" alt="Snow" style="width:90%;max-width:800px;">
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
                            <div class="form-group" name="BananaDiv" id="BananaDiv" style="display: none;">
                                <div class="form-group">
                                    <label class="col-lg-2 control-label"></label>
                                    <div class="col-lg-3">
                                        <button class="myBtn_multi btn-link">View Sample</button>
                                        <div  class="modal modal_multi">
                                            <div class="modal-content">
                                                <span class="close close_multi">×</span>
                                                <img id="myImg" src="image/reference/017.png" alt="Snow" style="width:90%;max-width:800px;">
                                                <p>Sample Banana Configuration Description</p>
                                            </div>
                                        </div>
                                    </div>
                                    <label class="col-lg-2 control-label"></label>
                                    <div class="col-lg-3"></div>
                                </div>
                                <div class="form-group">
                                    <label for="bananaJackHole" class="col-lg-2 control-label">No. Banana Jack Holes *</label>
                                    <div class="col-lg-1">
                                        <input type="number" step="0.001" class="form-control" id="bananaJackHole" name="bananaJackHole" value="" > 
                                    </div> 
                                    <label for="bananaJackHole" class="col-lg-2 control-label pull-left" style="text-align: left"><b>Pins</b></label>
                                    <label for="connVoltRating" class="col-lg-2 control-label">Connector Voltage Rating *</label>
                                    <div class="col-lg-1">
                                        <input type="number" step="0.001" class="form-control" id="connVoltRating" name="connVoltRating" value="" > 
                                    </div> 
                                    <label for="connVoltRating" class="col-lg-2 control-label pull-left" style="text-align: left"><b>V</b></label>
                                </div>
                                <div class="form-group">
                                    <label for="connCurrRating" class="col-lg-2 control-label">Connector Current Rating *</label>
                                    <div class="col-lg-1">
                                        <input type="number" step="0.001" class="form-control" id="connCurrRating" name="connCurrRating" value="" > 
                                    </div> 
                                    <label for="connCurrRating" class="col-lg-2 control-label pull-left" style="text-align: left"><b>A</b></label>
                                    <label for="connTempRating" class="col-lg-2 control-label">Connector Temp Rating *</label>
                                    <div class="col-lg-1">
                                        <input type="number" step="0.001" class="form-control" id="connTempRating" name="connTempRating" value="" > 
                                    </div> 
                                    <label for="connTempRating" class="col-lg-2 control-label pull-left" style="text-align: left"><b>`C</b></label>
                                </div>
                            </div>

                            <!--Edge Connector-->
                            <div class="form-group" name="EdgeDiv" id="EdgeDiv" style="display: none;">
                                <div class="form-group">
                                    <label class="col-lg-2 control-label"></label>
                                    <div class="col-lg-3">
                                        <button class="myBtn_multi btn-link">View Sample</button>
                                        <div  class="modal modal_multi">
                                            <div class="modal-content">
                                                <span class="close close_multi">×</span>
                                                <img id="myImg" src="image/reference//017.png" alt="Snow" style="width:90%;max-width:800px;">
                                                <p>Sample Edge Configuration Description</p>
                                            </div>
                                        </div>
                                    </div>
                                    <label class="col-lg-2 control-label"></label>
                                    <div class="col-lg-3"></div>
                                </div>
                                <div class="form-group">
                                    <label for="noPins" class="col-lg-2 control-label">No. of Pins *</label>
                                    <div class="col-lg-1">
                                        <input type="number" step="0.001" class="form-control" id="noPins" name="noPins" value="" > 
                                    </div> 
                                    <label for="noPins" class="col-lg-2 control-label pull-left" style="text-align: left"><b>Pins</b></label>

                                    <label for="pinPitch" class="col-lg-2 control-label">Pin Pitch *</label>
                                    <div class="col-lg-1">
                                        <input type="number" step="0.001" class="form-control" id="pinPitch" name="pinPitch" value="" > 
                                    </div> 
                                    <label for="pinPitch" class="col-lg-2 control-label pull-left" style="text-align: left"><b>mm</b></label>
                                </div>
                                <div class="form-group">
                                    <label for="connVoltRating" class="col-lg-2 control-label">Connector Voltage Rating *</label>
                                    <div class="col-lg-1">
                                        <input type="number" step="0.001" class="form-control" id="connVoltRating" name="connVoltRating" value="" > 
                                    </div> 
                                    <label for="connVoltRating" class="col-lg-2 control-label pull-left" style="text-align: left"><b>V</b></label>

                                    <label for="connCurrRating" class="col-lg-2 control-label">Connector Current Rating *</label>
                                    <div class="col-lg-1">
                                        <input type="number" step="0.001" class="form-control" id="connCurrRating" name="connCurrRating" value="" > 
                                    </div> 
                                    <label for="connCurrRating" class="col-lg-2 control-label pull-left" style="text-align: left"><b>A</b></label>
                                </div>
                                <div class="form-group">
                                    <label for="connTempRating" class="col-lg-2 control-label">Connector Temp Rating *</label>
                                    <div class="col-lg-1">
                                        <input type="number" step="0.001" class="form-control" id="connTempRating" name="connTempRating" value="" > 
                                    </div> 
                                    <label for="connTempRating" class="col-lg-2 control-label pull-left" style="text-align: left"><b>`C</b></label>
                                </div>
                            </div> 

                            <!--Winchestor-->
                            <div class="form-group" name="WinchestorDiv" id="WinchestorDiv" style="display: none;">
                                <div class="form-group">
                                    <label class="col-lg-2 control-label"></label>
                                    <div class="col-lg-3">
                                        <button class="myBtn_multi btn-link">View Sample</button>
                                        <div  class="modal modal_multi">
                                            <div class="modal-content">
                                                <span class="close close_multi">×</span>
                                                <img id="myImg" src="image/reference/018.png" alt="Snow" style="width:90%;max-width:800px;">
                                                <p>Sample Winchestor Configuration Description</p>
                                            </div>
                                        </div>
                                    </div>
                                    <label class="col-lg-2 control-label"></label>
                                    <div class="col-lg-3"></div>
                                </div>
                                <div class="form-group">
                                    <label for="noPins" class="col-lg-2 control-label">No. of Pins *</label>
                                    <div class="col-lg-1">
                                        <input type="number" step="0.001" class="form-control" id="noPins" name="noPins" value="" > 
                                    </div> 
                                    <label for="noPins" class="col-lg-2 control-label pull-left" style="text-align: left"><b>Pins</b></label>
                                    <label for="pinPitch" class="col-lg-2 control-label">Pin Pitch *</label>
                                    <div class="col-lg-1">
                                        <input type="number" step="0.001" class="form-control" id="pinPitch" name="pinPitch" value="" > 
                                    </div> 
                                    <label for="pinPitch" class="col-lg-2 control-label pull-left" style="text-align: left"><b>mm</b></label>
                                </div>
                                <div class="form-group">
                                    <label for="connVoltRating" class="col-lg-2 control-label">Connector Voltage Rating *</label>
                                    <div class="col-lg-1">
                                        <input type="number" step="0.001" class="form-control" id="connVoltRating" name="connVoltRating" value="" > 
                                    </div> 
                                    <label for="connVoltRating" class="col-lg-2 control-label pull-left" style="text-align: left"><b>V</b></label>
                                    <label for="connCurrRating" class="col-lg-2 control-label">Connector Current Rating *</label>
                                    <div class="col-lg-1">
                                        <input type="number" step="0.001" class="form-control" id="connCurrRating" name="connCurrRating" value="" > 
                                    </div> 
                                    <label for="connCurrRating" class="col-lg-2 control-label pull-left" style="text-align: left"><b>A</b></label>
                                </div>
                                <div class="form-group">
                                    <label for="connRack" class="col-lg-2 control-label">No. Wires Connected to Rack *</label>
                                    <div class="col-lg-1">
                                        <input type="number" step="0.001" class="form-control" id="connRack" name="connRack" value="" > 
                                    </div> 
                                    <label for="connRack" class="col-lg-2 control-label pull-left" style="text-align: left"><b>`C</b></label>
                                </div>
                            </div>  

                            <!--Wire-->
                            <div class="form-group" name="WireDiv" id="WireDiv" style="display: none;">
                                <div class="form-group">
                                    <label class="col-lg-2 control-label"></label>
                                    <div class="col-lg-3">
                                        <button class="myBtn_multi btn-link">View Sample</button>
                                        <div  class="modal modal_multi">
                                            <div class="modal-content">
                                                <span class="close close_multi">×</span>
                                                <img id="myImg" src="image/reference/019.png" alt="Snow" style="width:90%;max-width:800px;">
                                                <p>Sample Wire Configuration Description</p>
                                            </div>
                                        </div>
                                    </div>
                                    <label class="col-lg-2 control-label"></label>
                                    <div class="col-lg-3"></div>
                                </div>
                                <div class="form-group">
                                    <label for="wireVoltRating" class="col-lg-2 control-label">Wire Voltage Rating *</label>
                                    <div class="col-lg-1">
                                        <input type="number" step="0.001" class="form-control" id="wireVoltRating" name="wireVoltRating" value="" > 
                                    </div> 
                                    <label for="wireVoltRating" class="col-lg-2 control-label pull-left" style="text-align: left"><b>V</b></label>
                                    <label for="wireCurrRating" class="col-lg-2 control-label">Wire Current Rating *</label>
                                    <div class="col-lg-1">
                                        <input type="number" step="0.001" class="form-control" id="wireCurrRating" name="wireCurrRating" value="" > 
                                    </div> 
                                    <label for="wireCurrRating" class="col-lg-2 control-label pull-left" style="text-align: left"><b>A</b></label>
                                </div>
                                <div class="form-group">
                                    <label for="wireTempRating" class="col-lg-2 control-label">Wire Temp Rating *</label>
                                    <div class="col-lg-1">
                                        <input type="number" step="0.001" class="form-control" id="wireTempRating" name="wireTempRating" value="" > 
                                    </div>
                                    <label for="wireTempRating" class="col-lg-2 control-label pull-left" style="text-align: left"><b>`C</b></label>
                                </div>
                            </div> 

                            <h2>External Chamber Configuration</h2>
                            <div class="form-group">
                                <label for="extConfigType" class="col-lg-2 control-label">Configuration Type *</label>
                                <div class="col-lg-3">
                                    <select id="extConfigType" name="extConfigType" class="js-example-basic-single" style="width: 100%" onchange="updateView()" required>
                                        <option value="" selected=""></option>
                                        <?php
                                        $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '032' ORDER BY code ASC";
                                        $resSite = mysqli_query($con, $sqlDdSite);
                                        while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                            <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                                        <?php endwhile; ?>
                                    </select>
                                    <button class="myBtn_multi btn-link">View Sample</button>
                                    <div  class="modal modal_multi">
                                        <div class="modal-content">
                                            <span class="close close_multi">×</span>
                                            <img id="myImg" src="image/reference/020.png" alt="Snow" style="width:90%;max-width:800px;">
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

                            <div class="form-group" id="viewExternalDiv">
                                <label for="interfaceVoltRating" class="col-lg-2 control-label">Interface Voltage Rating *</label>
                                <div class="col-lg-1">
                                    <input type="number" step="0.001" class="form-control" id="interfaceVoltRating" name="interfaceVoltRating" value="" > 
                                </div> 
                                <label for="interfaceVoltRating" class="col-lg-2 control-label pull-left" style="text-align: left"><b>V</b></label>
                                <label for="interfaceCurrRating" class="col-lg-2 control-label">Interface Current Rating *</label>
                                <div class="col-lg-1">
                                    <input type="number" step="0.001" class="form-control" id="interfaceCurrRating" name="interfaceCurrRating" value="" > 
                                </div> 
                                <label for="interfaceCurrRating" class="col-lg-2 control-label pull-left" style="text-align: left"><b>A</b></label>
                            </div>

                            <div class="pull-right">
                                <button onclick="location.href = 'form_equipment_list.php'" type="button" id="backBtn"><i class='bx bx-list-ol bx-fw' ></i> List</button>
                            </div>
                            <div class="pull-right">
                                <button type="submit" id="myBtn" class="btn btn-primary"><i class='bx bx-send bx-fw' ></i> Send</button>
                            </div>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>	
            </div>
        </div>
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