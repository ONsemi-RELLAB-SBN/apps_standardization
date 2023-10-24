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
/*            #backBtn {
                display: block;
                position: fixed;
                bottom: 70px;
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
            &nbsp; he
        </div>
        <div class="col-lg-12">
            &nbsp; he
        </div>
        <h1>Hardware Detail</h1>
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-box">
                        <h2>General</h2>
                        <form id="add_hardware_form" class="form-horizontal" role="form" action="crud_add_hardware.php" method="get">
                            <div class="row">
                                <div class="two columns"><label for="labLocation" class="col-lg-2 control-label">Lab Location *</label></div>
                                <div class="three columns">
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

                            <h2>Hardware Identity</h2>
                            <div class="row">
                                <div class="two columns"><label for="hwType" class="col-lg-2 control-label">Hardware Type *</label></div>
                                <div class="three columns">
                                    <select id="hwType" name="hwType" class="js-example-basic-single" style="width: 100%" required>
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
                                <div class="two columns"><label for="assemblyNo" class="col-lg-2 control-label">Assembly Number *</label></div>
                                <div class="three columns"><input type="text" class="form-control" id="assemblyNo" name="assemblyNo" placeholder="Asset Number" value="" required> </div>
                            </div>

                            <h2>Capability</h2>
                            <div class="row">
                                <div class="two columns"><label for="voltRating" class="col-lg-2 control-label">Voltage Rating *</label></div>
                                <div class="one columns"><input type="number" 0 class="form-control" id="voltRating" name="voltRating" value="" required> </div>
                                <div class="one columns"><label for="voltRating" class="col-lg-2 control-label pull-left" style="text-align: left"><b>V</b></label></div>
                                <div class="two columns">&nbsp;</div>
                                <div class="two columns"><label for="currRating" class="col-lg-2 control-label">Current Rating *</label></div>
                                <div class="one columns"><input type="number" step="0.001" class="form-control" id="currRating" name="currRating" value="" required> </div>
                                <div class="one columns"><label for="currRating" class="col-lg-2 control-label pull-left" style="text-align: left"><b>%</b></label></div>
                                <div class="two columns">&nbsp;</div>
                            </div>
                            <div class="row">
                                <div class="two columns"><label for="tempRating" class="col-lg-2 control-label">Temp Rating *</label></div>
                                <div class="one columns"><input type="number" step="0.001" class="form-control" id="tempRating" name="tempRating" value="" required> </div>
                                <div class="one columns"><label for="tempRating" class="col-lg-2 control-label pull-left" style="text-align: left"><b>`C</b></label></div>
                                <div class="two columns">&nbsp;</div>
                                <div class="two columns"><label for="sprtStress" class="col-lg-2 control-label">Supported Stresses *</label></div>
                                <div class="three columns">
                                    <select id="sprtStress" name="sprtStress" class="js-example-basic-single" style="width: 100%" required>
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
                                <div class="two columns"><label for="daqCapability" class="col-lg-2 control-label">DAQ Monitoring Capability *</label></div>
                                <div class="three columns">
                                    <select id="daqCapability" name="daqCapability" class="js-example-basic-single" style="width: 100%" required>
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

                            <h2>Characteristic</h2>
                            <div class="row">
                                <div class="two columns"><label for="pcbMaterial" class="col-lg-2 control-label">PCB Material *</label></div>
                                <div class="three columns">
                                     <select id="pcbMaterial" name="pcbMaterial" class="js-example-basic-single" style="width: 100%" required>
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
                                <div class="two columns"><label for="mbDimensionL" class="col-lg-2 control-label">Motherboard Dimension (L) *</label></div>
                                <div class="one columns"><input type="number" step="0.001" class="form-control" id="mbDimensionL" name="mbDimensionL" value="" required> </div>
                                <div class="one columns"><label for="mbDimensionL" class="col-lg-2 control-label pull-left" style="text-align: left"><b>mm</b></label></div>
                                <div class="two columns">&nbsp;</div>
                            </div>
                            <div class="row">
                                <div class="two columns"><label for="frameMaterial" class="col-lg-2 control-label">Frame Material *</label></div>
                                <div class="three columns">
                                    <select id="frameMaterial" name="frameMaterial" class="js-example-basic-single" style="width: 100%" required>
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
                                <div class="two columns"><label for="mbDimensionW" class="col-lg-2 control-label">(W) *</label></div>
                                <div class="one columns"><input type="number" step="0.001" class="form-control" id="mbDimensionW" name="mbDimensionW" value="" required> </div>
                                <div class="one columns"><label for="mbDimensionW" class="col-lg-2 control-label pull-left" style="text-align: left"><b>mm</b></label></div>
                                <div class="two columns">&nbsp;</div>
                            </div>
                            <div class="row">
                                <div class="two columns"><label for="boardCoat" class="col-lg-2 control-label">Board Coating *</label></div>
                                <div class="three columns">
                                    <select id="boardCoat" name="boardCoat" class="js-example-basic-single" style="width: 100%" required>
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
                                <div class="two columns"><label for="mbDimensionT" class="col-lg-2 control-label">(T) *</label></div>
                                <div class="one columns"><input type="number" step="0.001" class="form-control" id="mbDimensionT" name="mbDimensionT" value="" required> </div>
                                <div class="one columns"><label for="mbDimensionT" class="col-lg-2 control-label pull-left" style="text-align: left"><b>mm</b></label></div>
                                <div class="two columns">&nbsp;</div>
                            </div>
                            <div class="row">
                                <div class="two columns"><label for="noLayers" class="col-lg-2 control-label">Number of Layers *</label></div>
                                <div class="one columns"><input type="number" step="0.001" class="form-control" id="noLayers" name="noLayers" value="" required> </div>
                                <div class="one columns"><label for="noLayers" class="col-lg-2 control-label pull-left" style="text-align: left"><b>mm</b></label></div>
                            </div>
                            
                            <h4>Motherboard to DUT interface</h4>
                            <div class="row">
                                <div class="two columns"><label for="uni" class="col-lg-2 control-label">Universal/dedicated *</label></div>
                                <div class="one columns"><input type="number" step="0.001" class="form-control" id="uni" name="uni" value="" required> </div>
                                <div class="one columns"><label for="uni" class="col-lg-2 control-label pull-left" style="text-align: left"><b>mm</b></label></div>
                                <div class="two columns">&nbsp;</div>
                                <div class="two columns"><label for="socketType" class="col-lg-2 control-label">Socket/connector type *</label></div>
                                <div class="one columns"><input type="number" step="0.001" class="form-control" id="socketType" name="socketType" value="" required> </div>
                                <div class="one columns"><label for="socketType" class="col-lg-2 control-label pull-left" style="text-align: left"><b>mm</b></label></div>
                                <div class="two columns">&nbsp;</div>
                            </div>
                            <div class="row">
                                <div class="two columns"><label for="socketQty" class="col-lg-2 control-label">Socket/connector qty *</label></div>
                                <div class="one columns"><input type="number" step="0.001" class="form-control" id="socketQty" name="socketQty" value="" required> </div>
                                <div class="one columns"><label for="socketQty" class="col-lg-2 control-label pull-left" style="text-align: left"><b>Kg</b></label></div>
                                <div class="two columns">&nbsp;</div>
                                <div class="two columns"><label for="socketPinQty" class="col-lg-2 control-label">Socket/connector pin qty *</label></div>
                                <div class="one columns"><input type="number" step="0.001" class="form-control" id="socketPinQty" name="socketPinQty" value="" required> </div>
                                <div class="one columns"><label for="socketPinQty" class="col-lg-2 control-label pull-left" style="text-align: left"><b>mm</b></label></div>
                                <div class="two columns">&nbsp;</div>
                            </div>
                            <div class="row">
                                <div class="two columns"><label for="socketPitch" class="col-lg-2 control-label">Socket/connector pin pitch *</label></div>
                                <div class="one columns"><input type="number" step="0.001" class="form-control" id="socketPitch" name="socketPitch" value="" required> </div>
                                <div class="one columns"><label for="socketPitch" class="col-lg-2 control-label pull-left" style="text-align: left"><b>Kg</b></label></div>
                                <div class="two columns">&nbsp;</div>
                                <div class="two columns"><label for="sptPackage" class="col-lg-2 control-label">Supported cards/packages *</label></div>
                                <div class="one columns"><input type="number" step="0.001" class="form-control" id="sptPackage" name="sptPackage" value="" required> </div>
                                <div class="one columns"><label for="sptPackage" class="col-lg-2 control-label pull-left" style="text-align: left"><b>mm</b></label></div>
                                <div class="two columns">&nbsp;</div>
                            </div>
                            
                            <h4>Load Cards</h4>
                            <div class="row">
                                <div class="two columns"><label for="maxCardQty" class="col-lg-2 control-label">Max load card qty *</label></div>
                                <div class="one columns"><input type="number" step="0.001" class="form-control" id="maxCardQty" name="maxCardQty" value="" required></div>
                                <div class="one columns"><label for="maxCardQty" class="col-lg-2 control-label pull-left" style="text-align: left"><b>Slot</b></label></div>
                                <div class="two columns">&nbsp;</div>
                                <div class="two columns"><label for="loadPinQty" class="col-lg-2 control-label">Load card pin qty *</label></div>
                                <div class="one columns"><input type="number" step="0.001" class="form-control" id="loadPinQty" name="loadPinQty" value="" required> </div>
                                <div class="one columns"><label for="loadPinQty" class="col-lg-2 control-label pull-left" style="text-align: left"><b>mm</b></label></div>
                                <div class="two columns">&nbsp;</div>
                            </div>
                            <div class="row">
                                <div class="two columns"><label for="loadPinPitch" class="col-lg-2 control-label">Load card pin pitch *</label></div>
                                <div class="one columns"><input type="number" step="0.001" class="form-control" id="loadPinPitch" name="loadPinPitch" value="" required></div>
                                <div class="one columns"><label for="loadPinPitch" class="col-lg-2 control-label pull-left" style="text-align: left"><b>Slot</b></label></div>
                            </div>
                            
                            <h4>Program Cards</h4>
                            <div class="row">
                                <div class="two columns"><label for="maxCard" class="col-lg-2 control-label">Max program card qty *</label></div>
                                <div class="one columns"><input type="number" step="0.001" class="form-control" id="maxCard" name="maxCard" value="" required></div>
                                <div class="one columns"><label for="maxCard" class="col-lg-2 control-label pull-left" style="text-align: left"><b>Slot</b></label></div>
                                <div class="two columns">&nbsp;</div>
                                <div class="two columns"><label for="cardQty" class="col-lg-2 control-label">Program card pin qty *</label></div>
                                <div class="one columns"><input type="number" step="0.001" class="form-control" id="cardQty" name="cardQty" value="" required> </div>
                                <div class="one columns"><label for="cardQty" class="col-lg-2 control-label pull-left" style="text-align: left"><b>mm</b></label></div>
                                <div class="two columns">&nbsp;</div>
                            </div>
                            <div class="row">
                                <div class="two columns"><label for="cardPinPitch" class="col-lg-2 control-label">Program card pin pitch *</label></div>
                                <div class="one columns"><input type="number" step="0.001" class="form-control" id="cardPinPitch" name="cardPinPitch" value="" required></div>
                                <div class="one columns"><label for="cardPinPitch" class="col-lg-2 control-label pull-left" style="text-align: left"><b>Slot</b></label></div>
                            </div>
                            
                            <h4>Motherboard to chamber interface</h4>
                            <div class="row">
                                <div class="two columns"><label for="maxPsBs" class="col-lg-2 control-label">Max number of power supplies per board slot *</label></div>
                                <div class="one columns"><input type="number" step="0.001" class="form-control" id="maxPsBs" name="maxPsBs" value="" required> </div>
                                <div class="one columns"><label for="maxPsBs" class="col-lg-2 control-label pull-left" style="text-align: left"><b>Slot</b></label></div>
                                <div class="two columns">&nbsp;</div>
                                <div class="two columns"><label for="rackDimension" class="col-lg-2 control-label">(H) *</label></div>
                                <div class="one columns"><input type="number" step="0.001" class="form-control" id="rackDimensionH" name="rackDimensionH" value="" required> </div>
                                <div class="one columns"><label for="rackDimensionH" class="col-lg-2 control-label pull-left" style="text-align: left"><b>mm</b></label></div>
                                <div class="two columns">&nbsp;</div>
                            </div>
                            <div class="row">
                                <div class="two columns"><label for="connType" class="col-lg-2 control-label">Connector Type *</label></div>
                                <div class="one columns"><input type="number" step="0.001" class="form-control" id="connType" name="connType" value="" required> </div>
                                <div class="one columns"><label for="connType" class="col-lg-2 control-label pull-left" style="text-align: left"><b>Unit</b></label></div>
                                <div class="two columns">&nbsp;</div>
                                <div class="two columns"><label for="noPins" class="col-lg-2 control-label">Number of pins *</label></div>
                                <div class="one columns"><input type="number" step="0.001" class="form-control" id="noPins" name="noPins" value="" required> </div>
                                <div class="one columns"><label for="noPins" class="col-lg-2 control-label pull-left" style="text-align: left"><b>Unit</b></label></div>
                                <div class="two columns">&nbsp;</div>
                            </div>
                            <div class="row">
                                <div class="two columns"><label for="pinPitch" class="col-lg-2 control-label">Pin pitch *</label></div>
                                <div class="one columns"><input type="number" step="0.001" class="form-control" id="pinPitch" name="pinPitch" value="" required> </div>
                                <div class="one columns"><label for="pinPitch" class="col-lg-2 control-label pull-left" style="text-align: left"><b>Unit</b></label></div>
                                <div class="two columns">&nbsp;</div>
                                <div class="two columns"><label for="edgeThick" class="col-lg-2 control-label">Edgefinger thickness *</label></div>
                                <div class="one columns"><input type="number" step="0.001" class="form-control" id="edgeThick" name="edgeThick" value="" required> </div>
                                <div class="one columns"><label for="edgeThick" class="col-lg-2 control-label pull-left" style="text-align: left"><b>Unit</b></label></div>
                                <div class="two columns">&nbsp;</div>
                            </div>
                            
                            <h2>Capacity</h2>
                            <div class="row">
                                <div class="two columns"><label for="maxDutMb" class="col-lg-2 control-label">Max DUT qty per motherboard *</label></div>
                                <div class="one columns"><input type="number" step="0.001" class="form-control" id="maxDutMb" name="maxDutMb" value="" required> </div>
                                <div class="one columns"><label for="maxDutMb" class="col-lg-2 control-label pull-left" style="text-align: left"><b>mm</b></label></div>
                            </div>

                            <button onclick="location.href = 'form_hardware_list.php'" type="button" id="backBtn"><i class='bx bx-list-ol bx-fw' ></i> List</button>
                            <button type="submit" id="myBtn" class="btn btn-primary"><i class='bx bx-send bx-fw' ></i> Send</button>
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