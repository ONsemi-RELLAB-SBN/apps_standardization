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
        <link rel="shortcut icon" href="../image/dribble.ico">

        <link rel="stylesheet" type="text/css" href="css/w3.css">
        <link rel="stylesheet" type="text/css" href="css/skeleton.css">
        <link rel='stylesheet' type="text/css" href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'>

        <style>
/*            #myBtn {
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
            }

            #myBtn:hover {
                background-color: orange;
            }*/

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
            &nbsp; he
        </div>
        <div class="col-lg-12">
            &nbsp; he
        </div>
        <div class="col-lg-12">
            <h5 style="border-left: none;">DAQ Detail</h5>
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-box">
                        <form id="add_daq_form" class="form-horizontal" role="form" action="crud_add_daq.php" method="get">
                            <div class="w3-section" style="width:100%">
                                <button onclick="myFunction('sectionGeneral')" class="w3-button w3-block"> General</button>
                                <div id="sectionGeneral" class="w3-hide w3-container">
                                    <div class="row">
                                        <div class="two columns"><label for="labLocation">Lab Location *</label></div>
                                        <div class="three columns">
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
                                        <div class="one columns">&nbsp;</div>
                                        <div class="two columns label"><label for="strategy">onsemi Strategy *</label></div>
                                        <div class="three columns">
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
                                        <div class="one columns">&nbsp;</div>
                                    </div>
                                    <div class="row">
                                        <div class="two columns"><label for="standardization">Standardization Category *</label></div>
                                        <div class="three columns">
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
                                        <div class="one columns">&nbsp;</div>
                                        <div class="two columns"><label for="champion">Champion *</label></div>
                                        <div class="three columns">
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
                                        <div class="one columns">&nbsp;</div>
                                    </div>
                                </div>
                            </div>

                            <div class="w3-section" style="width:100%">
                                <button onclick="myFunction('sectionIdentity')" class="w3-button w3-block"> DAQ Identity</button>
                                <div id="sectionIdentity" class="w3-hide w3-container">
                                    <div class="row">
                                        <div class="two columns"><label for="eqptId">Manufacturer *</label></div>
                                        <div class="three columns">
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
                                        <div class="one columns">&nbsp;</div>
                                        <div class="two columns"><label for="dedicated">Model *</label></div>
                                        <div class="three columns">
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
                                        <div class="one columns">&nbsp;</div>
                                    </div>
                                    <div class="row">
                                        <div class="two columns"><label for="eqptId">DAQ ID *</label></div>
                                        <div class="three columns">
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
                                        <div class="one columns">&nbsp;</div>
                                    </div>
                                </div>
                            </div>
                            <div class="w3-section" style="width:100%">
                                <button onclick="myFunction('setionCapacity')" class="w3-button w3-block"> Capacity</button>
                                <div id="setionCapacity" class="w3-hide w3-container">
                                    <div class="row">
                                        <div class="two columns"><label for="voltRating">Number of temperature channels *</label></div>
                                        <div class="one columns"><input type="number" step="0.001" class="form-control" id="voltRating" name="voltRating" value="" required> </div>
                                        <div class="one columns"><label for="voltRating" style="text-align: left"><b>V</b></label></div>
                                        <div class="two columns">&nbsp;</div>
                                        <div class="two columns"><label for="voltControl">Number of voltage channels *</label></div>
                                        <div class="one columns"><input type="number" step="0.001" class="form-control" id="voltControl" name="voltControl" value="" required> </div>
                                        <div class="one columns"><label for="voltControl" style="text-align: left"><b>%</b></label></div>
                                        <div class="two columns">&nbsp;</div>
                                    </div>
                                    <div class="row">
                                        <div class="two columns"><label for="maxTemp">Number of leakage channels *</label></div>
                                        <div class="one columns"><input type="number" step="0.001" class="form-control" id="maxTemp" name="maxTemp" value="" required> </div>
                                        <div class="one columns"><label for="maxTemp" style="text-align: left"><b>`C</b></label></div>
                                        <div class="two columns">&nbsp;</div>
                                    </div>
                                </div>
                            </div>

                            <div class="w3-section" style="width:100%">
                                <button onclick="myFunction('sectionCapability')" class="w3-button w3-block"> Capability</button>
                                <div id="sectionCapability" class="w3-hide w3-container">
                                    <div class="row">
                                        <div class="two columns"><label for="voltRating">Voltage measurement range *</label></div>
                                        <div class="one columns"><input type="number" step="0.001" class="form-control" id="voltRating" name="voltRating" value="" required> </div>
                                        <div class="one columns"><label for="voltRating" style="text-align: left"><b>V</b></label></div>
                                        <div class="two columns">&nbsp;</div>
                                        <div class="two columns"><label for="voltControl">Temperature measurement range *</label></div>
                                        <div class="one columns"><input type="number" step="0.001" class="form-control" id="voltControl" name="voltControl" value="" required> </div>
                                        <div class="one columns"><label for="voltControl" style="text-align: left"><b>%</b></label></div>
                                        <div class="two columns">&nbsp;</div>
                                    </div>
                                    <div class="row">
                                        <div class="two columns"><label for="maxTemp">Leakage current measurement range *</label></div>
                                        <div class="one columns"><input type="number" step="0.001" class="form-control" id="maxTemp" name="maxTemp" value="" required> </div>
                                        <div class="one columns"><label for="maxTemp" style="text-align: left"><b>`C</b></label></div>
                                        <div class="two columns">&nbsp;</div>
                                        <div class="two columns"><label for="to">Display Rdaq Voltage Drop *</label></div>
                                        <div class="three columns">
                                            <select id="to" name="to" class="js-example-basic-single" style="   width: 100%" readonly required>
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
                                        <div class="one columns">&nbsp;</div>
                                    </div>
                                    <div class="row">
                                        <div class="two columns"><label for="newTransfer">Board Insert Check *</label></div>
                                        <div class="three columns">
                                            <select id="newTransfer" name="newTransfer" class="js-example-basic-single" style="width: 100%" onchange="updateToField()" required >
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
                                        <div class="one columns">&nbsp;</div>
                                        <div class="two columns"><label for="newTransfer">Rdaq Measurement prior start the test *</label></div>
                                        <div class="three columns">
                                            <select id="newTransfer" name="newTransfer" class="js-example-basic-single" style="width: 100%" onchange="updateToField()" required >
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
                                        <div class="one columns">&nbsp;</div>
                                    </div>
                                    <div class="row">
                                        <div class="two columns"><label for="newTransfer">Monitoring speed *</label></div>
                                        <div class="three columns">
                                            <select id="newTransfer" name="newTransfer" class="js-example-basic-single" style="width: 100%" onchange="updateToField()" required >
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
                                        <div class="one columns">&nbsp;</div>
                                        <div class="two columns"><label for="voltRating">Leakage measurement resolution *</label></div>
                                        <div class="one columns"><input type="number" step="0.001" class="form-control" id="voltRating" name="voltRating" value="" required> </div>
                                        <div class="one columns"><label for="voltRating" style="text-align: left"><b>V</b></label></div>
                                        <div class="two columns">&nbsp;</div>
                                    </div>
                                    <div class="row">
                                        <div class="two columns"><label for="voltRating">Leakage measurement accuracy *</label></div>
                                        <div class="one columns"><input type="number" step="0.001" class="form-control" id="voltRating" name="voltRating" value="" required> </div>
                                        <div class="one columns"><label for="voltRating" style="text-align: left"><b>V</b></label></div>
                                        <div class="two columns">&nbsp;</div>
                                        <div class="two columns"><label for="voltControl">Voltage measurement resolution *</label></div>
                                        <div class="one columns"><input type="number" step="0.001" class="form-control" id="voltControl" name="voltControl" value="" required> </div>
                                        <div class="one columns"><label for="voltControl" style="text-align: left"><b>%</b></label></div>
                                        <div class="two columns">&nbsp;</div>
                                    </div>
                                    <div class="row">
                                        <div class="two columns"><label for="relTest">Offline software to review historical data and plotting with data analysis *</label></div>
                                        <div class="three columns">
                                            <select id="relTest" name="relTest[]" class="js-example-basic-single" style="width: 100%" required>
                                                <?php
                                                $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '008' ORDER BY code ASC";
                                                $resSite = mysqli_query($con, $sqlDdSite);
                                                while ($rowSite = mysqli_fetch_array($resSite)):
                                                    ?>
                                                    <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                                                <?php endwhile; ?>
                                            </select>
                                        </div>
                                        <div class="one columns">&nbsp;</div>
                                        <div class="two columns"><label for="manufacturer">Measurement type for hardware design *</label></div>
                                        <div class="three columns">
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
                                        <div class="one columns">&nbsp;</div>
                                    </div>
                                </div>
                            </div>

                            <div class="w3-section">
                                <button onclick="myFunction('sectionCharacteristic')" class="w3-button w3-block"> Characteristics</button>
                                <div id="sectionCharacteristic" class="w3-hide w3-container">
                                    <div class="row">
                                        <div class="two columns"><label for="voltRating">Number of analog inputs (single ended) *</label></div>
                                        <div class="one columns"><input type="number" 0 class="form-control" id="voltRating" name="voltRating" value="" required> </div>
                                        <div class="one columns"><label for="voltRating" style="text-align: left"><b>V</b></label></div>
                                        <div class="two columns">&nbsp;</div>
                                        <div class="two columns"><label for="voltControl">Number of analog inputs (differential) *</label></div>
                                        <div class="one columns"><input type="number" step="0.001" class="form-control" id="voltControl" name="voltControl" value="" required> </div>
                                        <div class="one columns"><label for="voltControl" style="text-align: left"><b>%</b></label></div>
                                        <div class="two columns">&nbsp;</div>
                                    </div>
                                    <div class="row">
                                        <div class="two columns"><label for="maxTemp">Resolution *</label></div>
                                        <div class="one columns"><input type="number" step="0.001" class="form-control" id="maxTemp" name="maxTemp" value="" required> </div>
                                        <div class="one columns"><label for="maxTemp" style="text-align: left"><b>`C</b></label></div>
                                        <div class="two columns">&nbsp;</div>
                                        <div class="two columns"><label for="minTemp">Sampling frequency *</label></div>
                                        <div class="one columns"><input type="number" step="0.001" class="form-control" id="minTemp" name="minTemp" value="" required> </div>
                                        <div class="one columns"><label for="minTemp" style="text-align: left"><b>`C</b></label></div>
                                        <div class="two columns">&nbsp;</div>
                                    </div>
                                    <div class="row">
                                        <div class="two columns"><label for="relTest">Supported eqpt *</label></div>
                                        <div class="three columns">
                                            <select id="relTest" name="relTest[]" class="js-example-basic-single" style="width: 100%" required>
                                                <?php
                                                $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '008' ORDER BY code ASC";
                                                $resSite = mysqli_query($con, $sqlDdSite);
                                                while ($rowSite = mysqli_fetch_array($resSite)):
                                                    ?>
                                                    <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                                                <?php endwhile; ?>
                                            </select>
                                        </div>
                                        <div class="one columns">&nbsp;</div>
                                        <div class="two columns"><label for="manufacturer">Hardware for resistance measurement *</label></div>
                                        <div class="three columns">
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
                                        <div class="one columns">&nbsp;</div>
                                    </div>
                                    <div class="row">
                                        <div class="two columns"><label for="relTest">Hardware for voltage measurement *</label></div>
                                        <div class="three columns">
                                            <select id="relTest" name="relTest[]" class="js-example-basic-single" style="width: 100%" required>
                                                <?php
                                                $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '008' ORDER BY code ASC";
                                                $resSite = mysqli_query($con, $sqlDdSite);
                                                while ($rowSite = mysqli_fetch_array($resSite)):
                                                    ?>
                                                    <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                                                <?php endwhile; ?>
                                            </select>
                                        </div>
                                        <div class="one columns">&nbsp;</div>
                                        <div class="two columns"><label for="manufacturer">Hardware for temperature measurement *</label></div>
                                        <div class="three columns">
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
                                        <div class="one columns">&nbsp;</div>
                                    </div>
                                    <div class="row">
                                        <div class="two columns"><label for="relTest">DAQ to Eqpt Interface *</label></div>
                                        <div class="three columns">
                                            <select id="relTest" name="relTest[]" class="js-example-basic-single" style="width: 100%" required>
                                                <?php
                                                $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '008' ORDER BY code ASC";
                                                $resSite = mysqli_query($con, $sqlDdSite);
                                                while ($rowSite = mysqli_fetch_array($resSite)):
                                                    ?>
                                                    <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                                                <?php endwhile; ?>
                                            </select>
                                        </div>
                                        <div class="one columns">&nbsp;</div>
                                        <div class="two columns"><label for="manufacturer">DAQ to PS Interface *</label></div>
                                        <div class="three columns">
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
                                        <div class="one columns">&nbsp;</div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="pull-right">
                                <button type="submit" id="myBtn" class="btn btn-primary"><i class='bx bx-send bx-fw' ></i> Send</button>
                            </div>
                            <div class="pull-right">
                                <button onclick="location.href = 'form_daq_list.php'" type="button" id="backBtn"><i class='bx bx-list-ol bx-fw' ></i> List</button>
                            </div>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>	
            </div>
        </div>
        <script>
            function myFunction(id) {
                var x = document.getElementById(id);
                if (x.className.indexOf("w3-show") == -1) {
                    x.className += " w3-show";
                } else {
                    x.className = x.className.replace(" w3-show", "");
                }
            }
        </script>
    </body>
</html>