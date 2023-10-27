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
        <title>DAQ | Standardization</title>
        <meta name="author" content="Ayep" />
        <link rel="shortcut icon" href="image/dribble.ico">

        <link rel="stylesheet" type="text/css" href="css/select2.css"/>
        <link rel="stylesheet" type="text/css" href="css/layout.css">
        <link rel="stylesheet" type="text/css" href="css/elements.css" />
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="css/main01.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'>

        <script src="js/bootstrap.js"></script>
        <script src="js/jquery.js"></script>
        <script src="js/select2.min.js"></script>

        <style>
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

            input[type=text], input[type=password] {
                width: 100%;
                padding: 15px;
                margin: 5px 0 22px 0;
                display: inline-block;
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
            <h1>DAQ Detail</h1>
            <hr>
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-box">
                        <form id="add_daq_form" class="form-horizontal" role="form" action="crud_add_daq.php" method="get">
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
                            
                            <h2>DAQ Identity</h2>
                            <div class="form-group">
                                <label for="eqptId" class="col-lg-2 control-label">Manufacturer *</label>
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
                                <label for="dedicated" class="col-lg-2 control-label">Model *</label>
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
                                <label for="eqptId" class="col-lg-2 control-label">DAQ ID *</label>
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
                            </div>
                            
                            <h2>Capacity</h2>
                            <div class="form-group">
                                <label for="voltRating" class="col-lg-2 control-label">Number of temperature channels *</label>
                                <div class="col-lg-1">
                                    <input type="number" step="0.001" class="form-control" id="voltRating" name="voltRating" value="" required> 
                                </div> 
                                <label for="voltRating" class="col-lg-2 control-label pull-left" style="text-align: left"><b>V</b></label>
                                <label for="voltControl" class="col-lg-2 control-label">Number of voltage channels *</label>
                                <div class="col-lg-1">
                                    <input type="number" step="0.001" class="form-control" id="voltControl" name="voltControl" value="" required> 
                                </div> 
                                <label for="voltControl" class="col-lg-2 control-label pull-left" style="text-align: left"><b>%</b></label>
                            </div>
                            <div class="form-group">
                                <label for="maxTemp" class="col-lg-2 control-label">Number of leakage channels *</label>
                                <div class="col-lg-1">
                                    <input type="number" step="0.001" class="form-control" id="maxTemp" name="maxTemp" value="" required> 
                                </div>
                                <label for="maxTemp" class="col-lg-2 control-label pull-left" style="text-align: left"><b>`C</b></label>
                            </div>
                            
                            <h2>Capability</h2>
                            <div class="form-group">
                                <label for="voltRating" class="col-lg-2 control-label">Voltage measurement range *</label>
                                <div class="col-lg-1">
                                    <input type="number" step="0.001" class="form-control" id="voltRating" name="voltRating" value="" required> 
                                </div> 
                                <label for="voltRating" class="col-lg-2 control-label pull-left" style="text-align: left"><b>V</b></label>
                                <label for="voltControl" class="col-lg-2 control-label">Temperature measurement range *</label>
                                <div class="col-lg-1">
                                    <input type="number" step="0.001" class="form-control" id="voltControl" name="voltControl" value="" required> 
                                </div> 
                                <label for="voltControl" class="col-lg-2 control-label pull-left" style="text-align: left"><b>%</b></label>
                            </div>
                            <div class="form-group">
                                <label for="maxTemp" class="col-lg-2 control-label">Leakage current measurement range *</label>
                                <div class="col-lg-1">
                                    <input type="number" step="0.001" class="form-control" id="maxTemp" name="maxTemp" value="" required> 
                                </div>
                                <label for="maxTemp" class="col-lg-2 control-label pull-left" style="text-align: left"><b>`C</b></label>
                                <label for="to" class="col-lg-2 control-label">Display Rdaq Voltage Drop *</label>
                                <div class="col-lg-3">
                                    <select id="to" name="to" class="js-example-basic-single" style="   width: 100%" readonly required>
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
                            <div class="form-group">
                                <label for="newTransfer" class="col-lg-2 control-label">Board Insert Check *</label>
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
                                <label for="newTransfer" class="col-lg-2 control-label">Rdaq Measurement prior start the test *</label>
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
                            <div class="form-group">
                                <label for="newTransfer" class="col-lg-2 control-label">Monitoring speed *</label>
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
                                <label for="voltRating" class="col-lg-2 control-label">Leakage measurement resolution *</label>
                                <div class="col-lg-1">
                                    <input type="number" step="0.001" class="form-control" id="voltRating" name="voltRating" value="" required> 
                                </div> 
                                <label for="voltRating" class="col-lg-2 control-label pull-left" style="text-align: left"><b>V</b></label>
                            </div>
                            <div class="form-group">
                                <label for="voltRating" class="col-lg-2 control-label">Leakage measurement accuracy *</label>
                                <div class="col-lg-1">
                                    <input type="number" step="0.001" class="form-control" id="voltRating" name="voltRating" value="" required> 
                                </div> 
                                <label for="voltRating" class="col-lg-2 control-label pull-left" style="text-align: left"><b>V</b></label>
                                <label for="voltControl" class="col-lg-2 control-label">Voltage measurement resolution *</label>
                                <div class="col-lg-1">
                                    <input type="number" step="0.001" class="form-control" id="voltControl" name="voltControl" value="" required> 
                                </div> 
                                <label for="voltControl" class="col-lg-2 control-label pull-left" style="text-align: left"><b>%</b></label>
                            </div>
                            <div class="form-group">
                                <label for="relTest" class="col-lg-2 control-label">Offline software to review historical data and plotting with data analysis *</label>
                                <div class="col-lg-3">
                                    <select id="relTest" name="relTest[]" class="js-example-basic-single" style="width: 100%" required>
                                    <?php
                                    $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '008' ORDER BY code ASC";
                                    $resSite = mysqli_query($con, $sqlDdSite);
                                    while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                        <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                                    <?php endwhile; ?>
                                    </select>
                                </div>
                                <label for="manufacturer" class="col-lg-2 control-label">Measurement type for hardware design *</label>
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
                            
                            <h2>Characteristics</h2>
                            <div class="form-group">
                                <label for="voltRating" class="col-lg-2 control-label">Number of analog inputs (single ended) *</label>
                                <div class="col-lg-1">
                                    <input type="number" step="0.001" class="form-control" id="voltRating" name="voltRating" value="" required> 
                                </div> 
                                <label for="voltRating" class="col-lg-2 control-label pull-left" style="text-align: left"><b>V</b></label>
                                <label for="voltControl" class="col-lg-2 control-label">Number of analog inputs (differential) *</label>
                                <div class="col-lg-1">
                                    <input type="number" step="0.001" class="form-control" id="voltControl" name="voltControl" value="" required> 
                                </div> 
                                <label for="voltControl" class="col-lg-2 control-label pull-left" style="text-align: left"><b>%</b></label>
                            </div>
                            <div class="form-group">
                                <label for="maxTemp" class="col-lg-2 control-label">Resolution *</label>
                                <div class="col-lg-1">
                                    <input type="number" step="0.001" class="form-control" id="maxTemp" name="maxTemp" value="" required> 
                                </div>
                                <label for="maxTemp" class="col-lg-2 control-label pull-left" style="text-align: left"><b>`C</b></label>
                                <label for="minTemp" class="col-lg-2 control-label">Sampling frequency *</label>
                                <div class="col-lg-1">
                                    <input type="number" step="0.001" class="form-control" id="minTemp" name="minTemp" value="" required> 
                                </div> 
                                <label for="minTemp" class="col-lg-2 control-label pull-left" style="text-align: left"><b>`C</b></label>
                            </div>
                            <div class="form-group">
                                <label for="relTest" class="col-lg-2 control-label">Supported eqpt *</label>
                                <div class="col-lg-3">
                                    <select id="relTest" name="relTest[]" class="js-example-basic-single" style="width: 100%" required>
                                    <?php
                                    $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '008' ORDER BY code ASC";
                                    $resSite = mysqli_query($con, $sqlDdSite);
                                    while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                        <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                                    <?php endwhile; ?>
                                    </select>
                                </div>
                                <label for="manufacturer" class="col-lg-2 control-label">Hardware for resistance measurement *</label>
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
                                <label for="relTest" class="col-lg-2 control-label">Hardware for voltage measurement *</label>
                                <div class="col-lg-3">
                                    <select id="relTest" name="relTest[]" class="js-example-basic-single" style="width: 100%" required>
                                    <?php
                                    $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '008' ORDER BY code ASC";
                                    $resSite = mysqli_query($con, $sqlDdSite);
                                    while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                        <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                                    <?php endwhile; ?>
                                    </select>
                                </div>
                                <label for="manufacturer" class="col-lg-2 control-label">Hardware for temperature measurement *</label>
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
                                <label for="relTest" class="col-lg-2 control-label">DAQ to Eqpt Interface *</label>
                                <div class="col-lg-3">
                                    <select id="relTest" name="relTest[]" class="js-example-basic-single" style="width: 100%" required>
                                    <?php
                                    $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '008' ORDER BY code ASC";
                                    $resSite = mysqli_query($con, $sqlDdSite);
                                    while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                        <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                                    <?php endwhile; ?>
                                    </select>
                                </div>
                                <label for="manufacturer" class="col-lg-2 control-label">DAQ to PS Interface *</label>
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
                            
                            <div class="pull-right">
                                <button onclick="location.href = 'form_daq_list.php'" type="button" id="backBtn"><i class='bx bx-list-ol bx-fw' ></i> List</button>
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
    </body>
</html>