<?php
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

include 'form_template.php';
$id = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>EDIT | Standardization Survey</title>
        <meta name="author" content="Ayep" />
        <link rel="shortcut icon" href="image/dribbble.ico">

        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/elements.css" />
        <link rel="stylesheet" type="text/css" href="css/layout.css">
        <link rel="stylesheet" type="text/css" href="css/readonly.css" />
        <link rel="stylesheet" type="text/css" href="css/select2.css"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'>

        <script src="js/bootstrap.js"></script>
        <script src="js/jquery.js"></script>
        <script src="js/select2.min.js"></script>

        <style>
            .select2-container-active .select2-choice,
            .select2-container-active .select2-choices {
                /*border: 1px solid $input-border-focus !important;*/
                -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #009d9b !important;
                box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #009d9b !important;
            }

            .select2-dropdown-open .select2-choice {
                border-bottom: 0 !important;
                background-image: none;
                background-color: #fff;
                filter: none;
                -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #009d9b !important;
                box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #009d9b !important;
            }

            .select2-dropdown-open.select2-drop-above .select2-choice,
            .select2-dropdown-open.select2-drop-above .select2-choices {
                /*border: 1px solid $input-border-focus !important;*/
                border-top: 0 !important;
                background-image: none;
                background-color: #fff;
                filter: none;
                -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #009d9b !important;
                box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #009d9b !important;
            }

            .no-border {
                border: 0;
                box-shadow: none; /* You may want to include this as bootstrap applies these styles too */
            }

            span.tab-space {
                padding-left:20em;
            }

            #backBtn {
                display: block;
                position: fixed;
                top: 80px;
                right: 30px;
                z-index: 99;
                font-size: 18px;
                border: none;
                outline: none;
                background-color: gray;
                color: white;
                cursor: pointer;
                padding: 15px;
                border-radius: 4px;
            }
            #myBtn {
                display: block;
                position: fixed;
                bottom: 20px;
                right: 30px;
                z-index: 99;
                font-size: 18px;
                border: none;
                outline: none;
                background-color: gray;
                color: white;
                cursor: pointer;
                padding: 15px;
                border-radius: 4px;
            }

            #myBtn:hover {
                background-color: #17a2b8;
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
                    if ($(this).val() == '') {
                        can = false;
                    }
                });
                if (can) {
                    $('.btn').css({background: 'red'})
                } else {
                    $('.btn').css({background: 'transparent'})
                }

            }
        </script>
    </head>
    <body>
        <div class="col-lg-12">
            <h1>Equipment Survey Form | Update</h1>
            <?php if ($id == "") { ?>
                <div class="row">
                    <div class="col-lg-11">
                        <div class="main-box">
                            <h2>No data found in database, please check with system administrator</h2>
                        </div>
                    </div>
                </div>
            <?php } else { ?>
                <div class="row">
                    <div class="col-lg-11">
                        <div class="main-box">
                            <h2>General</h2>
                            <form id="add_equipment_form" class="form-horizontal" role="form" action="parameter_add_equipment.php" method="get">
                                <div class="form-group">
                                    <label for="labLocation" class="col-lg-2 control-label">Lab Location *</label>
                                    <div class="col-lg-3">
                                        <select id="labLocation" name="labLocation" class="js-example-basic-single" style="width: 100%" required>
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
                                    <label for="strategy" class="col-lg-2 control-label">onsemi Strategy *</label>
                                    <div class="col-lg-3">
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
                                </div>
                                <div class="form-group">
                                    <label for="standardization" class="col-lg-2 control-label">Standardization Category *</label>
                                    <div class="col-lg-3">
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
                                    <label for="champion" class="col-lg-2 control-label">Champion *</label>
                                    <div class="col-lg-3">
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
                                            while ($rowSite = mysqli_fetch_array($resSite)):
                                                ?>
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
                                            while ($rowSite = mysqli_fetch_array($resSite)):
                                                ?>
                                                <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                                            <?php endwhile; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="relTest" class="col-lg-2 control-label">Rel Test (Multiselect) *</label>
                                    <div class="col-lg-3">
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
                                    <label for="manufacturer" class="col-lg-2 control-label">Equipment Manufacturer *</label>
                                    <div class="col-lg-3">
                                        <select id="manufacturer" name="manufacturer" class="js-example-basic-single" style="width: 100%" required>
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
                                <div class="form-group">
                                    <label for="model" class="col-lg-2 control-label">Equipment Model *</label>
                                    <div class="col-lg-3">
                                        <select id="model" name="model" class="js-example-basic-single" style="width: 100%" required>
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
                                    <label for="mfgDate" class="col-lg-2 control-label">Equipment Mfg Date *</label>
                                    <div class="col-lg-3">
                                        <select id="mfgDate" name="mfgDate" class="js-example-basic-single" style="width: 100%" required>
                                            <option value="" selected=""></option>
                                            <?php
                                            $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '011' ORDER BY code ASC";
                                            $resSite = mysqli_query($con, $sqlDdSite);
                                            while ($rowSite = mysqli_fetch_array($resSite)):
                                                ?>
                                                <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                                            <?php endwhile; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="assetNo" class="col-lg-2 control-label">Equipment Asset No *</label>
                                    <div class="col-lg-3">
                                        <select id="assetNo" name="assetNo" class="js-example-basic-single" style="width: 100%" required>
                                            <option value="" selected=""></option>
                                            <?php
                                            $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '012' ORDER BY code ASC";
                                            $resSite = mysqli_query($con, $sqlDdSite);
                                            while ($rowSite = mysqli_fetch_array($resSite)):
                                                ?>
                                                <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                                            <?php endwhile; ?>
                                        </select>
                                    </div>
                                    <label for="newTransfer" class="col-lg-2 control-label">New/Transfer Equipment *</label>
                                    <div class="col-lg-3">
                                        <select id="newTransfer" name="newTransfer" class="js-example-basic-single" style="width: 100%" required>
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
                                <div class="form-group">
                                    <label for="to" class="col-lg-7 control-label">To? *</label>
                                    <div class="col-lg-3">
                                        <select id="to" name="to" class="js-example-basic-single" style="width: 100%" required>
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
                                <div class="form-group">
                                    <label for="voltRating" class="col-lg-2 control-label">Voltage Rating *</label>
                                    <div class="col-lg-2">
                                        <input type="number" step="0.01" class="form-control" id="voltRating" name="voltRating" value="" required> 
                                    </div> 
                                    <label for="voltRating" class="col-lg-1 control-label pull-left" style="text-align: left"><b>V</b></label>
                                    <label for="voltControl" class="col-lg-2 control-label">Voltage Control Accuracy *</label>
                                    <div class="col-lg-2">
                                        <input type="number" step="0.01" class="form-control" id="voltControl" name="voltControl" value="" required> 
                                    </div> 
                                    <label for="voltControl" class="col-lg-1 control-label pull-left" style="text-align: left"><b>mV</b></label>
                                </div>
                                <div class="form-group">
                                    <label for="minTemp" class="col-lg-2 control-label">Min. Temperature *</label>
                                    <div class="col-lg-2">
                                        <input type="number" step="0.01" class="form-control" id="minTemp" name="minTemp" value="" required> 
                                    </div> 
                                    <label for="minTemp" class="col-lg-1 control-label pull-left" style="text-align: left"><b>`C</b></label>
                                    <label for="maxTemp" class="col-lg-2 control-label">Max. Temperature *</label>
                                    <div class="col-lg-2">
                                        <input type="number" step="0.01" class="form-control" id="maxTemp" name="maxTemp" value="" required> 
                                    </div> 5
                                    <label for="maxTemp" class="col-lg-1 control-label pull-left" style="text-align: left"><b>`C</b></label>
                                </div>
                                <div class="form-group">
                                    <label for="minRh" class="col-lg-2 control-label">Min. RH *</label>
                                    <div class="col-lg-2">
                                        <input type="number" step="0.01" class="form-control" id="minRh" name="minRh" value="" required> 
                                    </div> 
                                    <label for="minRh" class="col-lg-1 control-label pull-left" style="text-align: left"><b>%</b></label>
                                    <label for="maxRh" class="col-lg-2 control-label">Max. RH *</label>
                                    <div class="col-lg-2">
                                        <input type="number" step="0.01" class="form-control" id="maxRh" name="maxRh" value="" required> 
                                    </div> 
                                    <label for="maxRh" class="col-lg-1 control-label pull-left" style="text-align: left"><b>%</b></label>
                                </div>
                                <div class="form-group">
                                    <label for="tempFluctuation" class="col-lg-2 control-label">Temperature Fluctuation *</label>
                                    <div class="col-lg-2">
                                        <input type="number" step="0.01" class="form-control" id="tempFluctuation" name="tempFluctuation" value="" required> 
                                    </div> 
                                    <label for="tempFluctuation" class="col-lg-1 control-label pull-left" style="text-align: left"><b>`C</b></label>
                                    <label for="tempUniform" class="col-lg-2 control-label">Temperature Uniformity *</label>
                                    <div class="col-lg-2">
                                        <input type="number" step="0.01" class="form-control" id="tempUniform" name="tempUniform" value="" required> 
                                    </div> 
                                    <label for="tempUniform" class="col-lg-1 control-label pull-left" style="text-align: left"><b>`C</b></label>
                                </div>
                                <div class="form-group">
                                    <label for="humidFluctuation" class="col-lg-2 control-label">Humidity Fluctuation *</label>
                                    <div class="col-lg-2">
                                        <input type="number" step="0.01" class="form-control" id="humidFluctuation" name="humidFluctuation" value="" required> 
                                    </div> 
                                    <label for="humidFluctuation" class="col-lg-1 control-label pull-left" style="text-align: left"><b>%</b></label>
                                </div>

                                <h2>Characteristic</h2>
                                <div class="form-group">
                                    <label for="extDimension" class="col-lg-2 control-label">External Dimension *</label>
                                    <div class="col-lg-2">
                                        <input type="number" step="0.01" class="form-control" id="extDimension" name="extDimension" value="" required> 
                                    </div> 
                                    <label for="extDimension" class="col-lg-1 control-label pull-left" style="text-align: left"><b>mm</b></label>
                                    <label for="intDimension" class="col-lg-2 control-label">Internal Dimension *</label>
                                    <div class="col-lg-2">
                                        <input type="number" step="0.01" class="form-control" id="intDimension" name="intDimension" value="" required> 
                                    </div> 
                                    <label for="intDimension" class="col-lg-1 control-label pull-left" style="text-align: left"><b>mm</b></label>
                                </div>
                                <div class="form-group">
                                    <label for="noInterior" class="col-lg-2 control-label">No. Interior Zones (doors) *</label>
                                    <div class="col-lg-2">
                                        <input type="number" step="0.01" class="form-control" id="noInterior" name="noInterior" value="" required> 
                                    </div> 
                                    <label for="rackDimension" class="col-lg-3 control-label">Rack Dimension *</label>
                                    <div class="col-lg-2">
                                        <input type="number" step="0.01" class="form-control" id="rackDimension" name="rackDimension" value="" required> 
                                    </div> 
                                    <label for="rackDimension" class="col-lg-1 control-label pull-left" style="text-align: left"><b>mm</b></label>
                                </div>
                                <div class="form-group">
                                    <label for="intVolume" class="col-lg-2 control-label">Internal Volume *</label>
                                    <div class="col-lg-2">
                                        <input type="number" step="0.01" class="form-control" id="intVolume" name="intVolume" value="" required> 
                                    </div> 
                                    <label for="intVolume" class="col-lg-1 control-label pull-left" style="text-align: left"><b>L</b></label>
                                    <label for="boardOrientation" class="col-lg-2 control-label">Board Orientation*</label>
                                    <div class="col-lg-3">
                                        <select id="boardOrientation" name="boardOrientation" class="js-example-basic-single" style="width: 100%" required>
                                            <option value="" selected=""></option>
                                            <?php
                                            $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '015' ORDER BY code ASC";
                                            $resSite = mysqli_query($con, $sqlDdSite);
                                            while ($rowSite = mysqli_fetch_array($resSite)):
                                                ?>
                                                <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                                            <?php endwhile; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="rackMaterial" class="col-lg-2 control-label">Rack Material *</label>
                                    <div class="col-lg-3">
                                        <select id="rackMaterial" name="rackMaterial" class="js-example-basic-single" style="width: 100%" required>
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
                                    <label for="rackSlotPitch" class="col-lg-2 control-label">Rack Slot-to-Slot Pitch *</label>
                                    <div class="col-lg-2">
                                        <input type="number" step="0.01" class="form-control" id="rackSlotPitch" name="rackSlotPitch" value="" required> 
                                    </div> 
                                    <label for="rackSlotPitch" class="col-lg-1 control-label pull-left" style="text-align: left"><b>Inch</b></label>
                                </div>
                                <div class="form-group">
                                    <label for="rackSLotWidth" class="col-lg-2 control-label">Rack Slot Width *</label>
                                    <div class="col-lg-2">
                                        <input type="number" step="0.01" class="form-control" id="rackSLotWidth" name="rackSLotWidth" value="" required> 
                                    </div> 
                                    <label for="rackSLotWidth" class="col-lg-1 control-label pull-left" style="text-align: left"><b>Inch</b></label>
                                    <label for="eqptWeight" class="col-lg-2 control-label">Equipment Weight *</label>
                                    <div class="col-lg-2">
                                        <input type="number" step="0.01" class="form-control" id="eqptWeight" name="eqptWeight" value="" required> 
                                    </div> 
                                    <label for="eqptWeight" class="col-lg-1 control-label pull-left" style="text-align: left"><b>Kg</b></label>
                                </div>
                                <div class="form-group">
                                    <label for="airflow" class="col-lg-2 control-label">Airflow *</label>
                                    <div class="col-lg-3">
                                        <select id="airflow" name="airflow" class="js-example-basic-single" style="width: 100%" required>
                                            <option value="" selected=""></option>
                                            <?php
                                            $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '017' ORDER BY code ASC";
                                            $resSite = mysqli_query($con, $sqlDdSite);
                                            while ($rowSite = mysqli_fetch_array($resSite)):
                                                ?>
                                                <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                                            <?php endwhile; ?>
                                        </select>
                                    </div>
                                </div>

                                <h2>Safety</h2>
                                <div class="form-group">
                                    <label for="tempProtection1" class="col-lg-2 control-label">Temperature Protection 1 *</label>
                                    <div class="col-lg-3">
                                        <select id="tempProtection1" name="tempProtection1" class="js-example-basic-single" style="width: 100%" required>
                                            <option value="" selected=""></option>
                                            <?php
                                            $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '018' ORDER BY code ASC";
                                            $resSite = mysqli_query($con, $sqlDdSite);
                                            while ($rowSite = mysqli_fetch_array($resSite)):
                                                ?>
                                                <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                                            <?php endwhile; ?>
                                        </select>
                                    </div>
                                    <label for="tempProtection2" class="col-lg-2 control-label">Temperature Protection 2 *</label>
                                    <div class="col-lg-3">
                                        <select id="tempProtection2" name="tempProtection2" class="js-example-basic-single" style="width: 100%" required>
                                            <option value="" selected=""></option>
                                            <?php
                                            $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '019' ORDER BY code ASC";
                                            $resSite = mysqli_query($con, $sqlDdSite);
                                            while ($rowSite = mysqli_fetch_array($resSite)):
                                                ?>
                                                <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                                            <?php endwhile; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="smokeDetector" class="col-lg-2 control-label">Smoke Detector/Alarm *</label>
                                    <div class="col-lg-3">
                                        <select id="smokeDetector" name="smokeDetector" class="js-example-basic-single" style="width: 100%" required>
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
                                    <label for="emo" class="col-lg-2 control-label">EMO button *</label>
                                    <div class="col-lg-3">
                                        <select id="emo" name="emo" class="js-example-basic-single" style="width: 100%" required>
                                            <option value="" selected=""></option>
                                            <?php
                                            $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '021' ORDER BY code ASC";
                                            $resSite = mysqli_query($con, $sqlDdSite);
                                            while ($rowSite = mysqli_fetch_array($resSite)):
                                                ?>
                                                <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                                            <?php endwhile; ?>
                                        </select>
                                    </div>
                                </div>

                                <h2>Utilities</h2>
                                <div class="form-group">
                                    <label for="voltagePhase" class="col-lg-2 control-label">Voltage/Phase/Current *</label>
                                    <div class="col-lg-2">
                                        <input type="number" step="0.01" class="form-control" id="voltagePhase" name="voltagePhase" value="" required> 
                                    </div> 
                                    <label for="voltagePhase" class="col-lg-1 control-label pull-left" style="text-align: left"><b>VAC</b></label>
                                    <label for="airflowRegulator" class="col-lg-2 control-label">Air Flow Regulator *</label>
                                    <div class="col-lg-3">
                                        <select id="airflowRegulator" name="airflowRegulator" class="js-example-basic-single" style="width: 100%" required>
                                            <option value="" selected=""></option>
                                            <?php
                                            $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '022' ORDER BY code ASC";
                                            $resSite = mysqli_query($con, $sqlDdSite);
                                            while ($rowSite = mysqli_fetch_array($resSite)):
                                                ?>
                                                <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                                            <?php endwhile; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="diWater" class="col-lg-2 control-label">DI Water *</label>
                                    <div class="col-lg-3">
                                        <select id="diWater" name="diWater" class="js-example-basic-single" style="width: 100%" required>
                                            <option value="" selected=""></option>
                                            <?php
                                            $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '023' ORDER BY code ASC";
                                            $resSite = mysqli_query($con, $sqlDdSite);
                                            while ($rowSite = mysqli_fetch_array($resSite)):
                                                ?>
                                                <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                                            <?php endwhile; ?>
                                        </select>
                                    </div>
                                    <label for="waterTopup" class="col-lg-2 control-label">Water Top-up System *</label>
                                    <div class="col-lg-3">
                                        <select id="waterTopup" name="waterTopup" class="js-example-basic-single" style="width: 100%" required>
                                            <option value="" selected=""></option>
                                            <?php
                                            $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '024' ORDER BY code ASC";
                                            $resSite = mysqli_query($con, $sqlDdSite);
                                            while ($rowSite = mysqli_fetch_array($resSite)):
                                                ?>
                                                <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                                            <?php endwhile; ?>
                                        </select>
                                    </div>
                                </div>

                                <h2>Hardware/PS/DAQ Type</h2>
                                <div class="form-group">
                                    <label for="motherboard" class="col-lg-2 control-label">Motherboard *</label>
                                    <div class="col-lg-3">
                                        <select id="motherboard" name="motherboard" class="js-example-basic-single" style="width: 100%" required>
                                            <option value="" selected=""></option>
                                            <?php
                                            $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '024' ORDER BY code ASC";
                                            $resSite = mysqli_query($con, $sqlDdSite);
                                            while ($rowSite = mysqli_fetch_array($resSite)):
                                                ?>
                                                <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                                            <?php endwhile; ?>
                                        </select>
                                    </div>
                                    <label for="driveboard" class="col-lg-2 control-label">Driverboard *</label>
                                    <div class="col-lg-3">
                                        <select id="driveboard" name="driveboard" class="js-example-basic-single" style="width: 100%" required>
                                            <option value="" selected=""></option>
                                            <?php
                                            $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '025' ORDER BY code ASC";
                                            $resSite = mysqli_query($con, $sqlDdSite);
                                            while ($rowSite = mysqli_fetch_array($resSite)):
                                                ?>
                                                <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                                            <?php endwhile; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="powerSupply" class="col-lg-2 control-label">Power Supply *</label>
                                    <div class="col-lg-3">
                                        <select id="powerSupply" name="powerSupply" class="js-example-basic-single" style="width: 100%" required>
                                            <option value="" selected=""></option>
                                            <?php
                                            $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '026' ORDER BY code ASC";
                                            $resSite = mysqli_query($con, $sqlDdSite);
                                            while ($rowSite = mysqli_fetch_array($resSite)):
                                                ?>
                                                <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                                            <?php endwhile; ?>
                                        </select>
                                    </div>
                                    <label for="daq" class="col-lg-2 control-label">DAQ *</label>
                                    <div class="col-lg-3">
                                        <select id="daq" name="daq" class="js-example-basic-single" style="width: 100%" required>
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

                                <h2>Chamber to Motherboard Interface</h2>
                                <div class="form-group">
                                    <label for="noPins" class="col-lg-2 control-label">No of Pins *</label>
                                    <div class="col-lg-2">
                                        <input type="number" step="0.01" class="form-control" id="noPins" name="noPins" value="" required> 
                                    </div> 
                                    <label for="noPins" class="col-lg-1 control-label pull-left" style="text-align: left"><b>Pins</b></label>
                                    <label for="pinPitch" class="col-lg-2 control-label">Pin Pitch *</label>
                                    <div class="col-lg-2">
                                        <input type="number" step="0.01" class="form-control" id="pinPitch" name="pinPitch" value="" required> 
                                    </div> 
                                    <label for="pinPitch" class="col-lg-1 control-label pull-left" style="text-align: left"><b>Inch</b></label>
                                </div>
                                <div class="form-group">
                                    <label for="connVoltRating" class="col-lg-2 control-label">Connector Voltage Rating *</label>
                                    <div class="col-lg-2">
                                        <input type="number" step="0.01" class="form-control" id="connVoltRating" name="connVoltRating" value="" required> 
                                    </div> 
                                    <label for="connVoltRating" class="col-lg-1 control-label pull-left" style="text-align: left"><b>V</b></label>
                                    <label for="connCurrRating" class="col-lg-2 control-label">Connector Current Rating *</label>
                                    <div class="col-lg-2">
                                        <input type="number" step="0.01" class="form-control" id="connCurrRating" name="connCurrRating" value="" required> 
                                    </div> 
                                    <label for="connCurrRating" class="col-lg-1 control-label pull-left" style="text-align: left"><b>A</b></label>
                                </div>
                                <div class="form-group">
                                    <label for="connTempRating" class="col-lg-2 control-label">Connector Temp Rating *</label>
                                    <div class="col-lg-2">
                                        <input type="number" step="0.01" class="form-control" id="connTempRating" name="connTempRating" value="" required> 
                                    </div> 
                                    <label for="connTempRating" class="col-lg-1 control-label pull-left" style="text-align: left"><b>`C</b></label>
                                </div>

                                <h2>Chamber to PS Interface</h2>
                                <div class="form-group">
                                    <label for="interfaceVoltRating" class="col-lg-2 control-label">Interface Voltage Rating *</label>
                                    <div class="col-lg-2">
                                        <input type="number" step="0.01" class="form-control" id="interfaceVoltRating" name="interfaceVoltRating" value="" required> 
                                    </div> 
                                    <label for="interfaceVoltRating" class="col-lg-1 control-label pull-left" style="text-align: left"><b>V</b></label>
                                    <label for="interfaceCurrRating" class="col-lg-2 control-label">Interface Current Rating *</label>
                                    <div class="col-lg-2">
                                        <input type="number" step="0.01" class="form-control" id="interfaceCurrRating" name="interfaceCurrRating" value="" required> 
                                    </div> 
                                    <label for="interfaceCurrRating" class="col-lg-1 control-label pull-left" style="text-align: left"><b>A</b></label>
                                </div>

                                <h2>Chamber to DAQ Interface</h2>
                                <div class="form-group">
                                    <label for="noMotherboardSlot" class="col-lg-2 control-label">No of Motherboard Slot *</label>
                                    <div class="col-lg-2">
                                        <input type="number" step="0.01" class="form-control" id="noMotherboardSlot" name="noMotherboardSlot" value="" required> 
                                    </div> 
                                    <label for="noMotherboardSlot" class="col-lg-1 control-label pull-left" style="text-align: left"><b>Slot</b></label>
                                    <label for="maxPsBoardSLot" class="col-lg-2 control-label">Max No of PS per Board Slot *</label>
                                    <div class="col-lg-2">
                                        <input type="number" step="0.01" class="form-control" id="maxPsBoardSLot" name="maxPsBoardSLot" value="" required> 
                                    </div> 
                                    <label for="maxPsBoardSLot" class="col-lg-1 control-label pull-left" style="text-align: left"><b></b></label>
                                </div>
                                <div class="form-group">
                                    <label for="maxPsEqpt" class="col-lg-2 control-label">Max No of PS for the Entire Eqpt *</label>
                                    <div class="col-lg-2">
                                        <input type="number" step="0.01" class="form-control" id="maxPsEqpt" name="maxPsEqpt" value="" required> 
                                    </div> 
                                </div>

                                <div class="pull-right">
                                    <button onclick="location.href = 'form_equipment_list.php'" type="button" id="backBtn">Back</button>
                                </div>
                                <div class="pull-right">
                                    <button type="submit" id="myBtn" class="btn btn-primary">Send</button>
                                </div>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>	
                </div>
            <?php } ?>
        </div>
    </body>
</html>