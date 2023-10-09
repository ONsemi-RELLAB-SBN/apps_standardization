<?php
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

include 'class/db.php';
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Standardization Survey</title>
        <meta name="author" content="Ayep" />
        <link rel="shortcut icon" href="image/dribble.ico">
        
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
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
                /* -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, .6) !important;
                                   box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, .6) !important;*/
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
                var validator = $("#add_hardwarequest_form").validate({
                    rules: {
                        labLocation: {
                            required: true
                        },
                        strategy: {
                            required: true
                        },
                        standardization: {
                            required: true
                        },
                        champion: {
                            required: true
                        },
                        eqptId: {
                            required: true
                        },
                        dedicated: {
                            required: true
                        },
                        relTest: {
                            required: true
                        },
                        manufacturer: {
                            required: true
                        },
                        model: {
                            required: true
                        },
                        mfgDate: {
                            required: true
                        },
                        assetNo: {
                            required: true
                        },
                        newTransfer: {
                            required: true
                        },
                        to: {
                            required: true
                        },
                        voltRating: {
                            required: true
                        },
                        voltControl: {
                            required: true
                        },
                        minTemp: {
                            required: true,
                            number: true
                        },
                        maxTemp: {
                            required: true,
                            number: true
                        },
                        minRh: {
                            required: true
                        },
                        maxRh: {
                            required: true
                        },
                        tempFluctuation: {
                            required: true
                        },
                        tempUniform: {
                            required: true
                        },
                        humidFluctuation: {
                            required: true
                        },
                        extDimension: {
                            required: true,
                            number: true
                        },
                        intDimension: {
                            required: true,
                            number: true
                        },
                        noInterior: {
                            required: true,
                            number: true
                        },
                        rackDimension: {
                            required: true,
                            number: true
                        },
                        intVolume: {
                            required: true,
                            number: true
                        },
                        boardOrientation: {
                            required: true
                        },
                        rackMaterial: {
                            required: true
                        },
                        rackSlotPitch: {
                            required: true,
                            number: true
                        },
                        rackSLotWidth: {
                            required: true,
                            number: true
                        },
                        eqptWeight: {
                            required: true,
                            number: true
                        },
                        airflow: {
                            required: true
                        },
                        tempProtection1: {
                            required: true
                        },
                        tempProtection2: {
                            required: true
                        },
                        smokeDetector: {
                            required: true
                        },
                        emo: {
                            required: true
                        },
                        voltagePhase: {
                            required: true,
                            number: true
                        },
                        airflowRegulator: {
                            required: true
                        },
                        diWater: {
                            required: true
                        },
                        waterTopup: {
                            required: true
                        },
                        motherboard: {
                            required: true
                        },
                        driveboard: {
                            required: true
                        },
                        powerSupply: {
                            required: true
                        },
                        daq: {
                            required: true
                        },
                        noPins: {
                            required: true,
                            number: true
                        },
                        pinPitch: {
                            required: true,
                            number: true
                        },
                        connVoltRating: {
                            required: true,
                            number: true
                        },
                        connCurrRating: {
                            required: true,
                            number: true
                        },
                        connTempRating: {
                            required: true,
                            number: true
                        },
                        interfaceVoltRating: {
                            required: true,
                            number: true
                        },
                        interfaceCurrRating: {
                            required: true,
                            number: true
                        },
                        noMotherboardSlot: {
                            required: true,
                            number: true
                        },
                        maxPsBoardSLot: {
                            required: true,
                            number: true
                        },
                        maxPsEqpt: {
                            required: true,
                            number: true
                        }
                    }
                });
                $(".cancel").click(function () {
                    validator.resetForm();
                });
            });
        </script>
    </head>
    <body>
        <!-- Top navigation -->
        <div class="topnav">
            <!-- Centered link -->
            <div class="topnav-centered">
                <a href="main.php#home">Home</a>
            </div>
            <!-- Left-aligned links (default) -->
            <a href="form_equipment.php#eqp" class="active">Form Equipment</a>
            <a href="form_hardware.php#hw">Form Hardware</a>
            <!-- Right-aligned links -->
            <div class="topnav-right">
                <a href="parameter.php#parameter">Parameter</a>
            </div>
        </div>

        <div class="col-lg-12">
            <h1>Equipment Survey Form</h1>
            <div class="row">
                <div class="col-lg-11">
                    <div class="main-box">
                        <h2>General</h2>
                        <form id="add_equipment_form" class="form-horizontal" role="form" action="parameter_add_equipment.php" method="get">
                            <div class="form-group">
                                <label for="labLocation" class="col-lg-2 control-label">Lab Location *</label>
                                <div class="col-lg-3">
                                    <select id="labLocation" name="labLocation" class="js-example-basic-single" style="width: 100%">
                                        <option value="" selected=""></option>
                                        <?php
                                        $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '002' ORDER BY code ASC";
                                        $resSite = mysqli_query($con, $sqlDdSite);
                                        while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                            <option value="<?php echo $rowSite['id']; ?>"><?php echo $rowSite['name']; ?></option>
                                        <?php endwhile; ?>
                                    </select>
                                </div>
                                <label for="strategy" class="col-lg-2 control-label">onsemi Strategy *</label>
                                <div class="col-lg-3">
                                    <select id="strategy" name="strategy" class="js-example-basic-single" style="width: 100%">
                                        <option value="" selected=""></option>
                                        <?php
                                        $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '003' ORDER BY code ASC";
                                        $resSite = mysqli_query($con, $sqlDdSite);
                                        while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                            <option value="<?php echo $rowSite['id']; ?>"><?php echo $rowSite['name']; ?></option>
                                        <?php endwhile; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="standardization" class="col-lg-2 control-label">Standardization Category *</label>
                                <div class="col-lg-3">
                                    <select id="standardization" name="standardization" class="js-example-basic-single" style="width: 100%">
                                        <option value="" selected=""></option>
                                        <?php
                                        $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '004' ORDER BY code ASC";
                                        $resSite = mysqli_query($con, $sqlDdSite);
                                        while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                            <option value="<?php echo $rowSite['id']; ?>"><?php echo $rowSite['name']; ?></option>
                                        <?php endwhile; ?>
                                    </select>
                                </div>
                                <label for="champion" class="col-lg-2 control-label">Champion *</label>
                                <div class="col-lg-3">
                                    <select id="champion" name="champion" class="js-example-basic-single" style="width: 100%">
                                        <option value="" selected=""></option>
                                        <?php
                                        $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '005' ORDER BY code ASC";
                                        $resSite = mysqli_query($con, $sqlDdSite);
                                        while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                            <option value="<?php echo $rowSite['id']; ?>"><?php echo $rowSite['name']; ?></option>
                                        <?php endwhile; ?>
                                    </select>
                                </div>
                            </div>

                            <h2>Equipment Identity</h2>
                            <div class="form-group">
                                <label for="eqptId" class="col-lg-2 control-label">Equipment ID *</label>
                                <div class="col-lg-3">
                                    <select id="eqptId" name="eqptId" class="js-example-basic-single" style="width: 100%">
                                        <option value="" selected=""></option>
                                        <?php
                                        $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '006' ORDER BY code ASC";
                                        $resSite = mysqli_query($con, $sqlDdSite);
                                        while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                            <option value="<?php echo $rowSite['id']; ?>"><?php echo $rowSite['name']; ?></option>
                                        <?php endwhile; ?>
                                    </select>
                                </div>
                                <label for="dedicated" class="col-lg-2 control-label">Dedicated/Share *</label>
                                <div class="col-lg-3">
                                    <select id="dedicated" name="dedicated" class="js-example-basic-single" style="width: 100%">
                                        <option value="" selected=""></option>
                                        <?php
                                        $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '007' ORDER BY code ASC";
                                        $resSite = mysqli_query($con, $sqlDdSite);
                                        while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                            <option value="<?php echo $rowSite['id']; ?>"><?php echo $rowSite['name']; ?></option>
                                        <?php endwhile; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="relTest" class="col-lg-2 control-label">Rel Test (Multiselect) *</label>
                                <div class="col-lg-3">
                                    <select id="relTest" name="relTest[]" class="js-example-basic-multiple" multiple="multiple" style="width: 100%">
                                        <?php
                                        $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '008' ORDER BY code ASC";
                                        $resSite = mysqli_query($con, $sqlDdSite);
                                        while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                            <option value="<?php echo $rowSite['id']; ?>"><?php echo $rowSite['name']; ?></option>
                                        <?php endwhile; ?>
                                    </select>
                                </div>
                                <label for="manufacturer" class="col-lg-2 control-label">Equipment Manufacturer *</label>
                                <div class="col-lg-3">
                                    <select id="manufacturer" name="manufacturer" class="js-example-basic-single" style="width: 100%">
                                        <option value="" selected=""></option>
                                        <?php
                                        $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '009' ORDER BY code ASC";
                                        $resSite = mysqli_query($con, $sqlDdSite);
                                        while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                            <option value="<?php echo $rowSite['id']; ?>"><?php echo $rowSite['name']; ?></option>
                                        <?php endwhile; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="model" class="col-lg-2 control-label">Equipment Model *</label>
                                <div class="col-lg-3">
                                    <select id="model" name="model" class="js-example-basic-single" style="width: 100%">
                                        <option value="" selected=""></option>
                                        <?php
                                        $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '010' ORDER BY code ASC";
                                        $resSite = mysqli_query($con, $sqlDdSite);
                                        while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                            <option value="<?php echo $rowSite['id']; ?>"><?php echo $rowSite['name']; ?></option>
                                        <?php endwhile; ?>
                                    </select>
                                </div>
                                <label for="mfgDate" class="col-lg-2 control-label">Equipment Mfg Date *</label>
                                <div class="col-lg-3">
                                    <select id="mfgDate" name="mfgDate" class="js-example-basic-single" style="width: 100%">
                                        <option value="" selected=""></option>
                                        <?php
                                        $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '011' ORDER BY code ASC";
                                        $resSite = mysqli_query($con, $sqlDdSite);
                                        while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                            <option value="<?php echo $rowSite['id']; ?>"><?php echo $rowSite['name']; ?></option>
                                        <?php endwhile; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="assetNo" class="col-lg-2 control-label">Equipment Asset No *</label>
                                <div class="col-lg-3">
                                    <select id="assetNo" name="assetNo" class="js-example-basic-single" style="width: 100%">
                                        <option value="" selected=""></option>
                                        <?php
                                        $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '012' ORDER BY code ASC";
                                        $resSite = mysqli_query($con, $sqlDdSite);
                                        while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                            <option value="<?php echo $rowSite['id']; ?>"><?php echo $rowSite['name']; ?></option>
                                        <?php endwhile; ?>
                                    </select>
                                </div>
                                <label for="newTransfer" class="col-lg-2 control-label">New/Transfer Equipment *</label>
                                <div class="col-lg-3">
                                    <select id="newTransfer" name="newTransfer" class="js-example-basic-single" style="width: 100%">
                                        <option value="" selected=""></option>
                                        <?php
                                        $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '013' ORDER BY code ASC";
                                        $resSite = mysqli_query($con, $sqlDdSite);
                                        while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                            <option value="<?php echo $rowSite['id']; ?>"><?php echo $rowSite['name']; ?></option>
                                        <?php endwhile; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="to" class="col-lg-7 control-label">To? *</label>
                                <div class="col-lg-3">
                                    <select id="to" name="to" class="js-example-basic-single" style="width: 100%">
                                        <option value="" selected=""></option>
                                        <?php
                                        $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '014' ORDER BY code ASC";
                                        $resSite = mysqli_query($con, $sqlDdSite);
                                        while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                            <option value="<?php echo $rowSite['id']; ?>"><?php echo $rowSite['name']; ?></option>
                                        <?php endwhile; ?>
                                    </select>
                                </div>
                            </div>

                            <h2>Capability</h2>
                            <div class="form-group">
                                <label for="voltRating" class="col-lg-2 control-label">Voltage Rating *</label>
                                <div class="col-lg-2">
                                    <input type="text" class="form-control" id="voltRating" name="voltRating" value="" > 
                                </div> 
                                <label for="voltRating" class="col-lg-1 control-label pull-left" style="text-align: left"><b>V</b></label>

                                <label for="voltControl" class="col-lg-2 control-label">Voltage Control Accuracy *</label>
                                <div class="col-lg-2">
                                    <input type="text" class="form-control" id="voltControl" name="voltControl" value="" > 
                                </div> 
                                <label for="voltControl" class="col-lg-1 control-label pull-left" style="text-align: left"><b>mV</b></label>
                            </div>
                            <div class="form-group">
                                <label for="minTemp" class="col-lg-2 control-label">Min. Temperature *</label>
                                <div class="col-lg-2">
                                    <input type="text" class="form-control" id="minTemp" name="minTemp" value="" > 
                                </div> 
                                <label for="minTemp" class="col-lg-1 control-label pull-left" style="text-align: left"><b>`C</b></label>

                                <label for="maxTemp" class="col-lg-2 control-label">Max. Temperature *</label>
                                <div class="col-lg-2">
                                    <input type="text" class="form-control" id="maxTemp" name="maxTemp" value="" > 
                                </div> 
                                <label for="maxTemp" class="col-lg-1 control-label pull-left" style="text-align: left"><b>`C</b></label>
                            </div>
                            <div class="form-group">
                                <label for="minRh" class="col-lg-2 control-label">Min. RH *</label>
                                <div class="col-lg-2">
                                    <input type="text" class="form-control" id="minRh" name="minRh" value="" > 
                                </div> 
                                <label for="minRh" class="col-lg-1 control-label pull-left" style="text-align: left"><b>%</b></label>

                                <label for="maxRh" class="col-lg-2 control-label">Max. RH *</label>
                                <div class="col-lg-2">
                                    <input type="text" class="form-control" id="maxRh" name="maxRh" value="" > 
                                </div> 
                                <label for="maxRh" class="col-lg-1 control-label pull-left" style="text-align: left"><b>%</b></label>
                            </div>
                            <div class="form-group">
                                <label for="tempFluctuation" class="col-lg-2 control-label">Temperature Fluctuation *</label>
                                <div class="col-lg-2">
                                    <input type="text" class="form-control" id="tempFluctuation" name="tempFluctuation" value="" > 
                                </div> 
                                <label for="tempFluctuation" class="col-lg-1 control-label pull-left" style="text-align: left"><b>`C</b></label>

                                <label for="tempUniform" class="col-lg-2 control-label">Temperature Uniformity *</label>
                                <div class="col-lg-2">
                                    <input type="text" class="form-control" id="tempUniform" name="tempUniform" value="" > 
                                </div> 
                                <label for="tempUniform" class="col-lg-1 control-label pull-left" style="text-align: left"><b>`C</b></label>
                            </div>
                            <div class="form-group">
                                <label for="humidFluctuation" class="col-lg-2 control-label">Humidity Fluctuation *</label>
                                <div class="col-lg-2">
                                    <input type="text" class="form-control" id="humidFluctuation" name="humidFluctuation" value="" > 
                                </div> 
                                <label for="humidFluctuation" class="col-lg-1 control-label pull-left" style="text-align: left"><b>%</b></label>
                            </div>

                            <h2>Characteristic</h2>
                            <div class="form-group">
                                <label for="extDimension" class="col-lg-2 control-label">External Dimension *</label>
                                <div class="col-lg-2">
                                    <input type="text" class="form-control" id="extDimension" name="extDimension" value="" > 
                                </div> 
                                <label for="extDimension" class="col-lg-1 control-label pull-left" style="text-align: left"><b>mm</b></label>

                                <label for="intDimension" class="col-lg-2 control-label">Internal Dimension *</label>
                                <div class="col-lg-2">
                                    <input type="text" class="form-control" id="intDimension" name="intDimension" value="" > 
                                </div> 
                                <label for="intDimension" class="col-lg-1 control-label pull-left" style="text-align: left"><b>mm</b></label>
                            </div>
                            <div class="form-group">
                                <label for="noInterior" class="col-lg-2 control-label">No. Interior Zones (doors) *</label>
                                <div class="col-lg-2">
                                    <input type="text" class="form-control" id="noInterior" name="noInterior" value="" > 
                                </div> 

                                <label for="rackDimension" class="col-lg-3 control-label">Rack Dimension *</label>
                                <div class="col-lg-2">
                                    <input type="text" class="form-control" id="rackDimension" name="rackDimension" value="" > 
                                </div> 
                                <label for="rackDimension" class="col-lg-1 control-label pull-left" style="text-align: left"><b>mm</b></label>
                            </div>
                            <div class="form-group">
                                <label for="intVolume" class="col-lg-2 control-label">Internal Volume *</label>
                                <div class="col-lg-2">
                                    <input type="text" class="form-control" id="intVolume" name="intVolume" value="" > 
                                </div> 
                                <label for="intVolume" class="col-lg-1 control-label pull-left" style="text-align: left"><b>L</b></label>

                                <label for="boardOrientation" class="col-lg-2 control-label">Board Orientation*</label>
                                <div class="col-lg-3">
                                    <select id="boardOrientation" name="boardOrientation" class="js-example-basic-single" style="width: 100%">
                                        <option value="" selected=""></option>
                                        <?php
                                        $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '015' ORDER BY code ASC";
                                        $resSite = mysqli_query($con, $sqlDdSite);
                                        while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                            <option value="<?php echo $rowSite['id']; ?>"><?php echo $rowSite['name']; ?></option>
                                        <?php endwhile; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="rackMaterial" class="col-lg-2 control-label">Rack Material *</label>
                                <div class="col-lg-3">
                                    <select id="rackMaterial" name="rackMaterial" class="js-example-basic-single" style="width: 100%">
                                        <option value="" selected=""></option>
                                        <?php
                                        $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '016' ORDER BY code ASC";
                                        $resSite = mysqli_query($con, $sqlDdSite);
                                        while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                            <option value="<?php echo $rowSite['id']; ?>"><?php echo $rowSite['name']; ?></option>
                                        <?php endwhile; ?>
                                    </select>
                                </div>
                                <label for="rackSlotPitch" class="col-lg-2 control-label">Rack Slot-to-Slot Pitch *</label>
                                <div class="col-lg-2">
                                    <input type="text" class="form-control" id="rackSlotPitch" name="rackSlotPitch" value="" > 
                                </div> 
                                <label for="rackSlotPitch" class="col-lg-1 control-label pull-left" style="text-align: left"><b>Inch</b></label>
                            </div>
                            <div class="form-group">
                                <label for="rackSLotWidth" class="col-lg-2 control-label">Rack Slot Width *</label>
                                <div class="col-lg-2">
                                    <input type="text" class="form-control" id="rackSLotWidth" name="rackSLotWidth" value="" > 
                                </div> 
                                <label for="rackSLotWidth" class="col-lg-1 control-label pull-left" style="text-align: left"><b>Inch</b></label>

                                <label for="eqptWeight" class="col-lg-2 control-label">Equipment Weight *</label>
                                <div class="col-lg-2">
                                    <input type="text" class="form-control" id="eqptWeight" name="eqptWeight" value="" > 
                                </div> 
                                <label for="eqptWeight" class="col-lg-1 control-label pull-left" style="text-align: left"><b>Kg</b></label>
                            </div>
                            <div class="form-group">
                                <label for="airflow" class="col-lg-2 control-label">Airflow *</label>
                                <div class="col-lg-3">
                                    <select id="airflow" name="airflow" class="js-example-basic-single" style="width: 100%">
                                        <option value="" selected=""></option>
                                        <?php
                                        $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '017' ORDER BY code ASC";
                                        $resSite = mysqli_query($con, $sqlDdSite);
                                        while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                            <option value="<?php echo $rowSite['id']; ?>"><?php echo $rowSite['name']; ?></option>
                                        <?php endwhile; ?>
                                    </select>
                                </div>
                            </div>

                            <h2>Safety</h2>
                            <div class="form-group">
                                <label for="tempProtection1" class="col-lg-2 control-label">Temperature Protection 1 *</label>
                                <div class="col-lg-3">
                                    <select id="tempProtection1" name="tempProtection1" class="js-example-basic-single" style="width: 100%">
                                        <option value="" selected=""></option>
                                        <?php
                                        $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '018' ORDER BY code ASC";
                                        $resSite = mysqli_query($con, $sqlDdSite);
                                        while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                            <option value="<?php echo $rowSite['id']; ?>"><?php echo $rowSite['name']; ?></option>
                                        <?php endwhile; ?>
                                    </select>
                                </div>
                                <label for="tempProtection2" class="col-lg-2 control-label">Temperature Protection 2 *</label>
                                <div class="col-lg-3">
                                    <select id="tempProtection2" name="tempProtection2" class="js-example-basic-single" style="width: 100%">
                                        <option value="" selected=""></option>
                                        <?php
                                        $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '019' ORDER BY code ASC";
                                        $resSite = mysqli_query($con, $sqlDdSite);
                                        while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                            <option value="<?php echo $rowSite['id']; ?>"><?php echo $rowSite['name']; ?></option>
                                        <?php endwhile; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="smokeDetector" class="col-lg-2 control-label">Smoke Detector/Alarm *</label>
                                <div class="col-lg-3">
                                    <select id="smokeDetector" name="smokeDetector" class="js-example-basic-single" style="width: 100%">
                                        <option value="" selected=""></option>
                                        <?php
                                        $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '020' ORDER BY code ASC";
                                        $resSite = mysqli_query($con, $sqlDdSite);
                                        while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                            <option value="<?php echo $rowSite['id']; ?>"><?php echo $rowSite['name']; ?></option>
                                        <?php endwhile; ?>
                                    </select>
                                </div>
                                <label for="emo" class="col-lg-2 control-label">EMO button *</label>
                                <div class="col-lg-3">
                                    <select id="emo" name="emo" class="js-example-basic-single" style="width: 100%">
                                        <option value="" selected=""></option>
                                        <?php
                                        $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '021' ORDER BY code ASC";
                                        $resSite = mysqli_query($con, $sqlDdSite);
                                        while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                            <option value="<?php echo $rowSite['id']; ?>"><?php echo $rowSite['name']; ?></option>
                                        <?php endwhile; ?>
                                    </select>
                                </div>
                            </div>

                            <h2>Utilities</h2>
                            <div class="form-group">
                                <label for="voltagePhase" class="col-lg-2 control-label">Voltage/Phase/Current *</label>
                                <div class="col-lg-2">
                                    <input type="text" class="form-control" id="voltagePhase" name="voltagePhase" value="" > 
                                </div> 
                                <label for="voltagePhase" class="col-lg-1 control-label pull-left" style="text-align: left"><b>VAC</b></label>

                                <label for="airflowRegulator" class="col-lg-2 control-label">Air Flow Regulator *</label>
                                <div class="col-lg-3">
                                    <select id="airflowRegulator" name="airflowRegulator" class="js-example-basic-single" style="width: 100%">
                                        <option value="" selected=""></option>
                                        <?php
                                        $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '022' ORDER BY code ASC";
                                        $resSite = mysqli_query($con, $sqlDdSite);
                                        while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                            <option value="<?php echo $rowSite['id']; ?>"><?php echo $rowSite['name']; ?></option>
                                        <?php endwhile; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="diWater" class="col-lg-2 control-label">DI Water *</label>
                                <div class="col-lg-3">
                                    <select id="diWater" name="diWater" class="js-example-basic-single" style="width: 100%">
                                        <option value="" selected=""></option>
                                        <?php
                                        $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '023' ORDER BY code ASC";
                                        $resSite = mysqli_query($con, $sqlDdSite);
                                        while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                            <option value="<?php echo $rowSite['id']; ?>"><?php echo $rowSite['name']; ?></option>
                                        <?php endwhile; ?>
                                    </select>
                                </div>
                                <label for="waterTopup" class="col-lg-2 control-label">Water Top-up System *</label>
                                <div class="col-lg-3">
                                    <select id="waterTopup" name="waterTopup" class="js-example-basic-single" style="width: 100%">
                                        <option value="" selected=""></option>
                                        <?php
                                        $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '024' ORDER BY code ASC";
                                        $resSite = mysqli_query($con, $sqlDdSite);
                                        while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                            <option value="<?php echo $rowSite['id']; ?>"><?php echo $rowSite['name']; ?></option>
                                        <?php endwhile; ?>
                                    </select>
                                </div>
                            </div>

                            <h2>Hardware/PS/DAQ Type</h2>
                            <div class="form-group">
                                <label for="motherboard" class="col-lg-2 control-label">Motherboard *</label>
                                <div class="col-lg-3">
                                    <select id="motherboard" name="motherboard" class="js-example-basic-single" style="width: 100%">
                                        <option value="" selected=""></option>
                                        <?php
                                        $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '024' ORDER BY code ASC";
                                        $resSite = mysqli_query($con, $sqlDdSite);
                                        while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                            <option value="<?php echo $rowSite['id']; ?>"><?php echo $rowSite['name']; ?></option>
                                        <?php endwhile; ?>
                                    </select>
                                </div>
                                <label for="driveboard" class="col-lg-2 control-label">Driverboard *</label>
                                <div class="col-lg-3">
                                    <select id="driveboard" name="driveboard" class="js-example-basic-single" style="width: 100%">
                                        <option value="" selected=""></option>
                                        <?php
                                        $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '025' ORDER BY code ASC";
                                        $resSite = mysqli_query($con, $sqlDdSite);
                                        while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                            <option value="<?php echo $rowSite['id']; ?>"><?php echo $rowSite['name']; ?></option>
                                        <?php endwhile; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="powerSupply" class="col-lg-2 control-label">Power Supply *</label>
                                <div class="col-lg-3">
                                    <select id="powerSupply" name="powerSupply" class="js-example-basic-single" style="width: 100%">
                                        <option value="" selected=""></option>
                                        <?php
                                        $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '026' ORDER BY code ASC";
                                        $resSite = mysqli_query($con, $sqlDdSite);
                                        while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                            <option value="<?php echo $rowSite['id']; ?>"><?php echo $rowSite['name']; ?></option>
                                        <?php endwhile; ?>
                                    </select>
                                </div>
                                <label for="daq" class="col-lg-2 control-label">DAQ *</label>
                                <div class="col-lg-3">
                                    <select id="daq" name="daq" class="js-example-basic-single" style="width: 100%">
                                        <option value="" selected=""></option>
                                        <?php
                                        $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '027' ORDER BY code ASC";
                                        $resSite = mysqli_query($con, $sqlDdSite);
                                        while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                            <option value="<?php echo $rowSite['id']; ?>"><?php echo $rowSite['name']; ?></option>
                                        <?php endwhile; ?>
                                    </select>
                                </div>
                            </div>

                            <h2>Chamber to Motherboard Interface</h2>
                            <div class="form-group">
                                <label for="noPins" class="col-lg-2 control-label">No of Pins *</label>
                                <div class="col-lg-2">
                                    <input type="text" class="form-control" id="noPins" name="noPins" value="" > 
                                </div> 
                                <label for="noPins" class="col-lg-1 control-label pull-left" style="text-align: left"><b>Pins</b></label>

                                <label for="pinPitch" class="col-lg-2 control-label">Pin Pitch *</label>
                                <div class="col-lg-2">
                                    <input type="text" class="form-control" id="pinPitch" name="pinPitch" value="" > 
                                </div> 
                                <label for="pinPitch" class="col-lg-1 control-label pull-left" style="text-align: left"><b>Inch</b></label>
                            </div>
                            <div class="form-group">
                                <label for="connVoltRating" class="col-lg-2 control-label">Connector Voltage Rating *</label>
                                <div class="col-lg-2">
                                    <input type="text" class="form-control" id="connVoltRating" name="connVoltRating" value="" > 
                                </div> 
                                <label for="connVoltRating" class="col-lg-1 control-label pull-left" style="text-align: left"><b>V</b></label>

                                <label for="connCurrRating" class="col-lg-2 control-label">Connector Current Rating *</label>
                                <div class="col-lg-2">
                                    <input type="text" class="form-control" id="connCurrRating" name="connCurrRating" value="" > 
                                </div> 
                                <label for="connCurrRating" class="col-lg-1 control-label pull-left" style="text-align: left"><b>A</b></label>
                            </div>
                            <div class="form-group">
                                <label for="connTempRating" class="col-lg-2 control-label">Connector Temp Rating *</label>
                                <div class="col-lg-2">
                                    <input type="text" class="form-control" id="connTempRating" name="connTempRating" value="" > 
                                </div> 
                                <label for="connTempRating" class="col-lg-1 control-label pull-left" style="text-align: left"><b>`C</b></label>
                            </div>

                            <h2>Chamber to PS Interface</h2>
                            <div class="form-group">
                                <label for="interfaceVoltRating" class="col-lg-2 control-label">Interface Voltage Rating *</label>
                                <div class="col-lg-2">
                                    <input type="text" class="form-control" id="interfaceVoltRating" name="interfaceVoltRating" value="" > 
                                </div> 
                                <label for="interfaceVoltRating" class="col-lg-1 control-label pull-left" style="text-align: left"><b>V</b></label>

                                <label for="interfaceCurrRating" class="col-lg-2 control-label">Interface Current Rating *</label>
                                <div class="col-lg-2">
                                    <input type="text" class="form-control" id="interfaceCurrRating" name="interfaceCurrRating" value="" > 
                                </div> 
                                <label for="interfaceCurrRating" class="col-lg-1 control-label pull-left" style="text-align: left"><b>A</b></label>
                            </div>

                            <h2>Chamber to DAQ Interface</h2>
                            <div class="form-group">
                                <label for="noMotherboardSlot" class="col-lg-2 control-label">No of Motherboard Slot *</label>
                                <div class="col-lg-2">
                                    <input type="text" class="form-control" id="noMotherboardSlot" name="noMotherboardSlot" value="" > 
                                </div> 
                                <label for="noMotherboardSlot" class="col-lg-1 control-label pull-left" style="text-align: left"><b>Slot</b></label>

                                <label for="maxPsBoardSLot" class="col-lg-2 control-label">Max No of PS per Board Slot *</label>
                                <div class="col-lg-2">
                                    <input type="text" class="form-control" id="maxPsBoardSLot" name="maxPsBoardSLot" value="" > 
                                </div> 
                                <label for="maxPsBoardSLot" class="col-lg-1 control-label pull-left" style="text-align: left"><b></b></label>
                            </div>
                            <div class="form-group">
                                <label for="maxPsEqpt" class="col-lg-2 control-label">Max No of PS for the Entire Eqpt *</label>
                                <div class="col-lg-2">
                                    <input type="text" class="form-control" id="maxPsEqpt" name="maxPsEqpt" value="" > 
                                </div> 
                            </div>
                            <a href="main.php" class="btn btn-info pull-left"><i class="fa fa-reply"></i> Back</a>
                            <div class="pull-right">
                                <button type="reset" class="btn btn-secondary cancel">Reset</button>
                                <button type="submit" id="submit" class="btn btn-primary">Send</button>
                            </div>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>	
            </div>
        </div>
    </body>
</html>