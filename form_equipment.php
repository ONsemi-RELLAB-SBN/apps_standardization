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
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/normalize.css" />
        <link rel="stylesheet" type="text/css" href="css/component1.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'>
        <link rel="stylesheet" type="text/css" href="css/select2.css"/>
        <script src="js/select2.min.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/modernizr-2.6.2.min.js"></script>
        
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="css/readonly.css" />
        <link rel="stylesheet" type="text/css" href="css/font-awesome.css" />
        <link rel="stylesheet" type="text/css" href="css/layout.css">
        <link rel="stylesheet" type="text/css" href="css/elements.css">
        <link rel="stylesheet" type="text/css" href="css/sweetalert.css">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/css3-mediaqueries.js"></script> 
        <script src="js/scripts.js"></script>
        <script src="js/jquery.blockUI.js"></script>
        <script src="js/sweetalert.min.js"></script>
            
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
                        equipmentType: {
                            required: true
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
                <a href="index.php#home">Home</a>
            </div>
            <!-- Left-aligned links (default) -->
            <a href="form_equipment.php#eqp" class="active">Form Equipment</a>
            <a href="form2.php#hw">Form Hardware</a>
            <!-- Right-aligned links -->
            <div class="topnav-right">
                <a href="page001.php#parameter">Parameter</a>
            </div>
        </div>
        <div class="col-lg-12">
            <h1>Equipment Survey Form</h1>
            <div class="row">
                <div class="col-lg-11">
                    <div class="main-box">
                        <h2>General</h2>
                        <form id="add_hardwarequest_form" class="form-horizontal" role="form" action="${contextPath}/wh/whShipping/testEqptStand" method="get">
                            <div class="form-group">
                                <label for="labLocation" class="col-lg-2 control-label">Lab Location *</label>
                                <div class="col-lg-3">
                                    <select id="labLocation" name="labLocation" class="js-example-basic-single" style="width: 100%">
                                        <option value="" selected=""></option>
                                        <c:forEach items="${equipmentType}" var="group">
                                            <option value="${group.name}" ${group.selected}>${group.name}</option>
                                        </c:forEach>
                                    </select>
                                </div>
                                <label for="strategy" class="col-lg-2 control-label">onsemi Strategy *</label>
                                <div class="col-lg-3">
                                    <select id="strategy" name="strategy" class="js-example-basic-single" style="width: 100%">
                                        <option value="" selected=""></option>
                                        <c:forEach items="${equipmentType}" var="group">
                                            <option value="${group.name}" ${group.selected}>${group.name}</option>
                                        </c:forEach>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="standardization" class="col-lg-2 control-label">Standardization Category *</label>
                                <div class="col-lg-3">
                                    <select id="standardization" name="standardization" class="js-example-basic-single" style="width: 100%">
                                        <option value="" selected=""></option>
                                        <c:forEach items="${equipmentType}" var="group">
                                            <option value="${group.name}" ${group.selected}>${group.name}</option>
                                        </c:forEach>
                                    </select>
                                </div>
                                <label for="champion" class="col-lg-2 control-label">Champion *</label>
                                <div class="col-lg-3">
                                    <select id="champion" name="champion" class="js-example-basic-single" style="width: 100%">
                                        <option value="" selected=""></option>
                                        <c:forEach items="${equipmentType}" var="group">
                                            <option value="${group.name}" ${group.selected}>${group.name}</option>
                                        </c:forEach>
                                    </select>
                                </div>
                            </div>

                            <h2>Equipment Identity</h2>
                            <div class="form-group">
                                <label for="eqptId" class="col-lg-2 control-label">Equipment ID *</label>
                                <div class="col-lg-3">
                                    <select id="eqptId" name="eqptId" class="js-example-basic-single" style="width: 100%">
                                        <option value="" selected=""></option>
                                        <c:forEach items="${equipmentType}" var="group">
                                            <option value="${group.name}" ${group.selected}>${group.name}</option>
                                        </c:forEach>
                                    </select>
                                </div>
                                <label for="dedicated" class="col-lg-2 control-label">Dedicated/Share *</label>
                                <div class="col-lg-3">
                                    <select id="dedicated" name="dedicated" class="js-example-basic-single" style="width: 100%">
                                        <option value="" selected=""></option>
                                        <c:forEach items="${equipmentType}" var="group">
                                            <option value="${group.name}" ${group.selected}>${group.name}</option>
                                        </c:forEach>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="relTest" class="col-lg-2 control-label">Rel Test (Multiselect) *</label>
                                <div class="col-lg-3">
                                    <select id="relTest" name="relTest" class="js-example-basic-multiple" multiple="multiple" style="width: 100%">
                                        <option value="1">IOL</option>
                                        <option value="2" >HTRB</option>
                                        <option value="3" >HTSL</option>
                                        <option value="4" >THS</option>
                                    </select>
                                </div>
                                <label for="manufacturer" class="col-lg-2 control-label">Equipment Manufacturer *</label>
                                <div class="col-lg-3">
                                    <select id="manufacturer" name="manufacturer" class="js-example-basic-single" style="width: 100%">
                                        <option value="" selected=""></option>
                                        <c:forEach items="${equipmentType}" var="group">
                                            <option value="${group.name}" ${group.selected}>${group.name}</option>
                                        </c:forEach>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="model" class="col-lg-2 control-label">Equipment Model *</label>
                                <div class="col-lg-3">
                                    <select id="model" name="model" class="js-example-basic-single" style="width: 100%">
                                        <option value="" selected=""></option>
                                        <c:forEach items="${equipmentType}" var="group">
                                            <option value="${group.name}" ${group.selected}>${group.name}</option>
                                        </c:forEach>
                                    </select>
                                </div>
                                <label for="mfgDate" class="col-lg-2 control-label">Equipment Mfg Date *</label>
                                <div class="col-lg-3">
                                    <select id="mfgDate" name="mfgDate" class="js-example-basic-single" style="width: 100%">
                                        <option value="" selected=""></option>
                                        <c:forEach items="${equipmentType}" var="group">
                                            <option value="${group.name}" ${group.selected}>${group.name}</option>
                                        </c:forEach>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="assetNo" class="col-lg-2 control-label">Equipment Asset No *</label>
                                <div class="col-lg-3">
                                    <select id="assetNo" name="assetNo" class="js-example-basic-single" style="width: 100%">
                                        <option value="" selected=""></option>
                                        <c:forEach items="${equipmentType}" var="group">
                                            <option value="${group.name}" ${group.selected}>${group.name}</option>
                                        </c:forEach>
                                    </select>
                                </div>
                                <label for="newTransfer" class="col-lg-2 control-label">New/Transfer Equipment *</label>
                                <div class="col-lg-3">
                                    <select id="newTransfer" name="newTransfer" class="js-example-basic-single" style="width: 100%">
                                        <option value="" selected=""></option>
                                        <c:forEach items="${equipmentType}" var="group">
                                            <option value="${group.name}" ${group.selected}>${group.name}</option>
                                        </c:forEach>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="to" class="col-lg-7 control-label">To? *</label>
                                <div class="col-lg-3">
                                    <select id="to" name="to" class="js-example-basic-single" style="width: 100%">
                                        <option value="" selected=""></option>
                                        <c:forEach items="${equipmentType}" var="group">
                                            <option value="${group.name}" ${group.selected}>${group.name}</option>
                                        </c:forEach>
                                    </select>
                                </div>
                            </div>

                            <h2>Capability</h2>
                            <div class="form-group">
                                <label for="voltRating" class="col-lg-2 control-label">Voltage Rating *</label>
                                <div class="col-lg-2">
                                    <input type="text" class="form-control" id="voltRating" name="voltRating" value="${equipmentType1}" > 
                                </div> 
                                <label for="voltRating" class="col-lg-1 control-label pull-left" style="text-align: left"><b>V</b></label>

                                <label for="voltControl" class="col-lg-2 control-label">Voltage Control Accuracy *</label>
                                <div class="col-lg-2">
                                    <input type="text" class="form-control" id="voltControl" name="voltControl" value="${equipmentType1}" > 
                                </div> 
                                <label for="voltControl" class="col-lg-1 control-label pull-left" style="text-align: left"><b>mV</b></label>
                            </div>
                            <div class="form-group">
                                <label for="minTemp" class="col-lg-2 control-label">Min. Temperature *</label>
                                <div class="col-lg-2">
                                    <input type="text" class="form-control" id="minTemp" name="minTemp" value="${equipmentType1}" > 
                                </div> 
                                <label for="minTemp" class="col-lg-1 control-label pull-left" style="text-align: left"><b>`C</b></label>

                                <label for="maxTemp" class="col-lg-2 control-label">Max. Temperature *</label>
                                <div class="col-lg-2">
                                    <input type="text" class="form-control" id="maxTemp" name="maxTemp" value="${equipmentType1}" > 
                                </div> 
                                <label for="maxTemp" class="col-lg-1 control-label pull-left" style="text-align: left"><b>`C</b></label>
                            </div>
                            <div class="form-group">
                                <label for="minRh" class="col-lg-2 control-label">Min. RH *</label>
                                <div class="col-lg-2">
                                    <input type="text" class="form-control" id="minRh" name="minRh" value="${equipmentType1}" > 
                                </div> 
                                <label for="minRh" class="col-lg-1 control-label pull-left" style="text-align: left"><b>%</b></label>

                                <label for="maxRh" class="col-lg-2 control-label">Max. RH *</label>
                                <div class="col-lg-2">
                                    <input type="text" class="form-control" id="maxRh" name="maxRh" value="${equipmentType1}" > 
                                </div> 
                                <label for="maxRh" class="col-lg-1 control-label pull-left" style="text-align: left"><b>%</b></label>
                            </div>
                            <div class="form-group">
                                <label for="tempFluctuation" class="col-lg-2 control-label">Temperature Fluctuation *</label>
                                <div class="col-lg-2">
                                    <input type="text" class="form-control" id="tempFluctuation" name="tempFluctuation" value="${equipmentType1}" > 
                                </div> 
                                <label for="tempFluctuation" class="col-lg-1 control-label pull-left" style="text-align: left"><b>`C</b></label>

                                <label for="tempUniform" class="col-lg-2 control-label">Temperature Uniformity *</label>
                                <div class="col-lg-2">
                                    <input type="text" class="form-control" id="tempUniform" name="tempUniform" value="${equipmentType1}" > 
                                </div> 
                                <label for="tempUniform" class="col-lg-1 control-label pull-left" style="text-align: left"><b>`C</b></label>
                            </div>
                            <div class="form-group">
                                <label for="humidFluctuation" class="col-lg-2 control-label">Humidity Fluctuation *</label>
                                <div class="col-lg-2">
                                    <input type="text" class="form-control" id="humidFluctuation" name="humidFluctuation" value="${equipmentType1}" > 
                                </div> 
                                <label for="humidFluctuation" class="col-lg-1 control-label pull-left" style="text-align: left"><b>%</b></label>
                            </div>

                            <h2>Characteristic</h2>
                            <div class="form-group">
                                <label for="extDimension" class="col-lg-2 control-label">External Dimension *</label>
                                <div class="col-lg-2">
                                    <input type="text" class="form-control" id="extDimension" name="extDimension" value="${equipmentType1}" > 
                                </div> 
                                <label for="extDimension" class="col-lg-1 control-label pull-left" style="text-align: left"><b>mm</b></label>

                                <label for="intDimension" class="col-lg-2 control-label">Internal Dimension *</label>
                                <div class="col-lg-2">
                                    <input type="text" class="form-control" id="intDimension" name="intDimension" value="${equipmentType1}" > 
                                </div> 
                                <label for="intDimension" class="col-lg-1 control-label pull-left" style="text-align: left"><b>mm</b></label>
                            </div>
                            <div class="form-group">
                                <label for="noInterior" class="col-lg-2 control-label">No. Interior Zones (doors) *</label>
                                <div class="col-lg-2">
                                    <input type="text" class="form-control" id="noInterior" name="noInterior" value="${equipmentType1}" > 
                                </div> 

                                <label for="rackDimension" class="col-lg-3 control-label">Rack Dimension *</label>
                                <div class="col-lg-2">
                                    <input type="text" class="form-control" id="rackDimension" name="rackDimension" value="${equipmentType1}" > 
                                </div> 
                                <label for="rackDimension" class="col-lg-1 control-label pull-left" style="text-align: left"><b>mm</b></label>
                            </div>
                            <div class="form-group">
                                <label for="intVolume" class="col-lg-2 control-label">Internal Volume *</label>
                                <div class="col-lg-2">
                                    <input type="text" class="form-control" id="intVolume" name="intVolume" value="${equipmentType1}" > 
                                </div> 
                                <label for="intVolume" class="col-lg-1 control-label pull-left" style="text-align: left"><b>L</b></label>

                                <label for="boardOrientation" class="col-lg-2 control-label">Board Orientation*</label>
                                <div class="col-lg-3">
                                    <select id="boardOrientation" name="boardOrientation" class="js-example-basic-single" style="width: 100%">
                                        <option value="" selected=""></option>
                                        <c:forEach items="${equipmentType}" var="group">
                                            <option value="${group.name}" ${group.selected}>${group.name}</option>
                                        </c:forEach>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="rackMaterial" class="col-lg-2 control-label">Rack Material *</label>
                                <div class="col-lg-3">
                                    <select id="rackMaterial" name="rackMaterial" class="js-example-basic-single" style="width: 100%">
                                        <option value="" selected=""></option>
                                        <c:forEach items="${equipmentType}" var="group">
                                            <option value="${group.name}" ${group.selected}>${group.name}</option>
                                        </c:forEach>
                                    </select>
                                </div>
                                <label for="rackSlotPitch" class="col-lg-2 control-label">Rack Slot-to-Slot Pitch *</label>
                                <div class="col-lg-2">
                                    <input type="text" class="form-control" id="rackSlotPitch" name="rackSlotPitch" value="${equipmentType1}" > 
                                </div> 
                                <label for="rackSlotPitch" class="col-lg-1 control-label pull-left" style="text-align: left"><b>Inch</b></label>
                            </div>
                            <div class="form-group">
                                <label for="rackSLotWidth" class="col-lg-2 control-label">Rack Slot Width *</label>
                                <div class="col-lg-2">
                                    <input type="text" class="form-control" id="rackSLotWidth" name="rackSLotWidth" value="${equipmentType1}" > 
                                </div> 
                                <label for="rackSLotWidth" class="col-lg-1 control-label pull-left" style="text-align: left"><b>Inch</b></label>

                                <label for="eqptWeight" class="col-lg-2 control-label">Equipment Weight *</label>
                                <div class="col-lg-2">
                                    <input type="text" class="form-control" id="eqptWeight" name="eqptWeight" value="${equipmentType1}" > 
                                </div> 
                                <label for="eqptWeight" class="col-lg-1 control-label pull-left" style="text-align: left"><b>Kg</b></label>
                            </div>
                            <div class="form-group">
                                <label for="airflow" class="col-lg-2 control-label">Airflow *</label>
                                <div class="col-lg-3">
                                    <select id="airflow" name="airflow" class="js-example-basic-single" style="width: 100%">
                                        <option value="" selected=""></option>
                                        <c:forEach items="${equipmentType}" var="group">
                                            <option value="${group.name}" ${group.selected}>${group.name}</option>
                                        </c:forEach>
                                    </select>
                                </div>
                            </div>

                            <h2>Safety</h2>
                            <div class="form-group">
                                <label for="tempProtection1" class="col-lg-2 control-label">Temperature Protection 1 *</label>
                                <div class="col-lg-3">
                                    <select id="tempProtection1" name="tempProtection1" class="js-example-basic-single" style="width: 100%">
                                        <option value="" selected=""></option>
                                        <c:forEach items="${equipmentType}" var="group">
                                            <option value="${group.name}" ${group.selected}>${group.name}</option>
                                        </c:forEach>
                                    </select>
                                </div>
                                <label for="tempProtection2" class="col-lg-2 control-label">Temperature Protection 2 *</label>
                                <div class="col-lg-3">
                                    <select id="tempProtection2" name="tempProtection2" class="js-example-basic-single" style="width: 100%">
                                        <option value="" selected=""></option>
                                        <c:forEach items="${equipmentType}" var="group">
                                            <option value="${group.name}" ${group.selected}>${group.name}</option>
                                        </c:forEach>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="smokeDetector" class="col-lg-2 control-label">Smoke Detector/Alarm *</label>
                                <div class="col-lg-3">
                                    <select id="smokeDetector" name="smokeDetector" class="js-example-basic-single" style="width: 100%">
                                        <option value="" selected=""></option>
                                        <c:forEach items="${equipmentType}" var="group">
                                            <option value="${group.name}" ${group.selected}>${group.name}</option>
                                        </c:forEach>
                                    </select>
                                </div>
                                <label for="emo" class="col-lg-2 control-label">EMO button *</label>
                                <div class="col-lg-3">
                                    <select id="emo" name="emo" class="js-example-basic-single" style="width: 100%">
                                        <option value="" selected=""></option>
                                        <c:forEach items="${equipmentType}" var="group">
                                            <option value="${group.name}" ${group.selected}>${group.name}</option>
                                        </c:forEach>
                                    </select>
                                </div>
                            </div>

                            <h2>Utilities</h2>
                            <div class="form-group">
                                <label for="voltagePhase" class="col-lg-2 control-label">Voltage/Phase/Current *</label>
                                <div class="col-lg-2">
                                    <input type="text" class="form-control" id="voltagePhase" name="voltagePhase" value="${equipmentType1}" > 
                                </div> 
                                <label for="voltagePhase" class="col-lg-1 control-label pull-left" style="text-align: left"><b>VAC</b></label>

                                <label for="airflowRegulator" class="col-lg-2 control-label">Air Flow Regulator *</label>
                                <div class="col-lg-3">
                                    <select id="airflowRegulator" name="airflowRegulator" class="js-example-basic-single" style="width: 100%">
                                        <option value="" selected=""></option>
                                        <c:forEach items="${equipmentType}" var="group">
                                            <option value="${group.name}" ${group.selected}>${group.name}</option>
                                        </c:forEach>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="diWater" class="col-lg-2 control-label">DI Water *</label>
                                <div class="col-lg-3">
                                    <select id="diWater" name="diWater" class="js-example-basic-single" style="width: 100%">
                                        <option value="" selected=""></option>
                                        <c:forEach items="${equipmentType}" var="group">
                                            <option value="${group.name}" ${group.selected}>${group.name}</option>
                                        </c:forEach>
                                    </select>
                                </div>
                                <label for="waterTopup" class="col-lg-2 control-label">Water Top-up System *</label>
                                <div class="col-lg-3">
                                    <select id="waterTopup" name="waterTopup" class="js-example-basic-single" style="width: 100%">
                                        <option value="" selected=""></option>
                                        <c:forEach items="${equipmentType}" var="group">
                                            <option value="${group.name}" ${group.selected}>${group.name}</option>
                                        </c:forEach>
                                    </select>
                                </div>
                            </div>

                            <h2>Hardware/PS/DAQ Type</h2>
                            <div class="form-group">
                                <label for="motherboard" class="col-lg-2 control-label">Motherboard *</label>
                                <div class="col-lg-3">
                                    <select id="motherboard" name="motherboard" class="js-example-basic-single" style="width: 100%">
                                        <option value="" selected=""></option>
                                        <c:forEach items="${equipmentType}" var="group">
                                            <option value="${group.name}" ${group.selected}>${group.name}</option>
                                        </c:forEach>
                                    </select>
                                </div>
                                <label for="driveboard" class="col-lg-2 control-label">Driverboard *</label>
                                <div class="col-lg-3">
                                    <select id="driveboard" name="driveboard" class="js-example-basic-single" style="width: 100%">
                                        <option value="" selected=""></option>
                                        <c:forEach items="${equipmentType}" var="group">
                                            <option value="${group.name}" ${group.selected}>${group.name}</option>
                                        </c:forEach>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="powerSupply" class="col-lg-2 control-label">Power Supply *</label>
                                <div class="col-lg-3">
                                    <select id="powerSupply" name="powerSupply" class="js-example-basic-single" style="width: 100%">
                                        <option value="" selected=""></option>
                                        <c:forEach items="${equipmentType}" var="group">
                                            <option value="${group.name}" ${group.selected}>${group.name}</option>
                                        </c:forEach>
                                    </select>
                                </div>
                                <label for="daq" class="col-lg-2 control-label">DAQ *</label>
                                <div class="col-lg-3">
                                    <select id="daq" name="daq" class="js-example-basic-single" style="width: 100%">
                                        <option value="" selected=""></option>
                                        <c:forEach items="${equipmentType}" var="group">
                                            <option value="${group.name}" ${group.selected}>${group.name}</option>
                                        </c:forEach>
                                    </select>
                                </div>
                            </div>

                            <h2>Chamber to Motherboard Interface</h2>
                            <div class="form-group">
                                <label for="noPins" class="col-lg-2 control-label">No of Pins *</label>
                                <div class="col-lg-2">
                                    <input type="text" class="form-control" id="noPins" name="noPins" value="${equipmentType1}" > 
                                </div> 
                                <label for="noPins" class="col-lg-1 control-label pull-left" style="text-align: left"><b>Pins</b></label>

                                <label for="pinPitch" class="col-lg-2 control-label">Pin Pitch *</label>
                                <div class="col-lg-2">
                                    <input type="text" class="form-control" id="pinPitch" name="pinPitch" value="${equipmentType1}" > 
                                </div> 
                                <label for="pinPitch" class="col-lg-1 control-label pull-left" style="text-align: left"><b>Inch</b></label>
                            </div>
                            <div class="form-group">
                                <label for="connVoltRating" class="col-lg-2 control-label">Connector Voltage Rating *</label>
                                <div class="col-lg-2">
                                    <input type="text" class="form-control" id="connVoltRating" name="connVoltRating" value="${equipmentType1}" > 
                                </div> 
                                <label for="connVoltRating" class="col-lg-1 control-label pull-left" style="text-align: left"><b>V</b></label>

                                <label for="connCurrRating" class="col-lg-2 control-label">Connector Current Rating *</label>
                                <div class="col-lg-2">
                                    <input type="text" class="form-control" id="connCurrRating" name="connCurrRating" value="${equipmentType1}" > 
                                </div> 
                                <label for="connCurrRating" class="col-lg-1 control-label pull-left" style="text-align: left"><b>A</b></label>
                            </div>
                            <div class="form-group">
                                <label for="connTempRating" class="col-lg-2 control-label">Connector Temp Rating *</label>
                                <div class="col-lg-2">
                                    <input type="text" class="form-control" id="connTempRating" name="connTempRating" value="${equipmentType1}" > 
                                </div> 
                                <label for="connTempRating" class="col-lg-1 control-label pull-left" style="text-align: left"><b>`C</b></label>
                            </div>

                            <h2>Chamber to PS Interface</h2>
                            <div class="form-group">
                                <label for="interfaceVoltRating" class="col-lg-2 control-label">Interface Voltage Rating *</label>
                                <div class="col-lg-2">
                                    <input type="text" class="form-control" id="interfaceVoltRating" name="interfaceVoltRating" value="${equipmentType1}" > 
                                </div> 
                                <label for="interfaceVoltRating" class="col-lg-1 control-label pull-left" style="text-align: left"><b>V</b></label>

                                <label for="interfaceCurrRating" class="col-lg-2 control-label">Interface Current Rating *</label>
                                <div class="col-lg-2">
                                    <input type="text" class="form-control" id="interfaceCurrRating" name="interfaceCurrRating" value="${equipmentType1}" > 
                                </div> 
                                <label for="interfaceCurrRating" class="col-lg-1 control-label pull-left" style="text-align: left"><b>A</b></label>
                            </div>

                            <h2>Chamber to DAQ Interface</h2>
                            <div class="form-group">
                                <label for="noMotherboardSlot" class="col-lg-2 control-label">No of Motherboard Slot *</label>
                                <div class="col-lg-2">
                                    <input type="text" class="form-control" id="noMotherboardSlot" name="noMotherboardSlot" value="${equipmentType1}" > 
                                </div> 
                                <label for="noMotherboardSlot" class="col-lg-1 control-label pull-left" style="text-align: left"><b>Slot</b></label>

                                <label for="maxPsBoardSLot" class="col-lg-2 control-label">Max No of PS per Board Slot *</label>
                                <div class="col-lg-2">
                                    <input type="text" class="form-control" id="maxPsBoardSLot" name="maxPsBoardSLot" value="${equipmentType1}" > 
                                </div> 
                                <label for="maxPsBoardSLot" class="col-lg-1 control-label pull-left" style="text-align: left"><b></b></label>
                            </div>
                            <div class="form-group">
                                <label for="maxPsEqpt" class="col-lg-2 control-label">Max No of PS for the Entire Eqpt *</label>
                                <div class="col-lg-2">
                                    <input type="text" class="form-control" id="maxPsEqpt" name="maxPsEqpt" value="${equipmentType1}" > 
                                </div> 
                            </div>
                            <a href="${contextPath}/wh/whShipping" class="btn btn-info pull-left"><i class="fa fa-reply"></i> Back</a>
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
        <div class="component">
            <!-- Start Nav Structure -->
            <button class="cn-button" id="cn-button">+</button>
            <div class="cn-wrapper" id="cn-wrapper">
                <ul>
                    <li><a href="page001.php#"><span class="icon-picture"></span></a></li>
                    <li><a href="page002.php#"><span class="icon-headphones"></span></a></li>
                    <li><a href="page003.php#"><span class="icon-home"></span></a></li>
                    <li><a href="page004.php#"><span class="icon-facetime-video"></span></a></li>
                    <li><a href="page005.php#"><span class="icon-envelope-alt"></span></a></li>
                </ul>
            </div>
            <div id="cn-overlay" class="cn-overlay"></div>
            <!-- End Nav Structure -->
        </div>
        <script src="js/polyfills.js"></script>
        <script src="js/demo1.js"></script>
        <!-- For the demo ad only -->   
        <script src="http://tympanus.net/codrops/adpacks/demoad.js"></script>
    </body>
</html>