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
        <title>P Supply | Standardization</title>
        <meta name="author" content="Ayep" />

        <link rel="stylesheet" href="css/skeleton.css" type="text/css" />

        <style>
            #listBtn {
                display: block;
                position: fixed;
                bottom: 95px;
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
            }

            #myBtn:hover {
                background-color: orange;
            }
            #listBtn:hover {
                background-color: orange;
            }
        </style>
        <script type="text/javascript">
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
        <hr>
        <h5>Power Supply Details</h5>
        <form id="add_power_form" action="crud_add_power.php" method="get">
            <h6>General</h6>
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

            <h6>Power Supply Identity</h6>
            <div class="row">
                <div class="two columns"><label for="manufacturer">Manufacturer *</label></div>
                <div class="three columns">
                    <select id="manufacturer" name="manufacturer" class="js-example-basic-single" style="width: 100%" required>
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
                <div class="two columns"><label for="model">Model *</label></div>
                <div class="three columns">
                    <select id="model" name="model" class="js-example-basic-single" style="width: 100%" required>
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

            <h6>Capability</h6>
            <div class="row">
                <div class="two columns"><label for="voltRating">Voltage Rating *</label></div>
                <div class="one columns"><input type="number" step="0.001" id="voltRating" name="voltRating" value="" required> </div>
                <div class="one columns"><b>V</b></div>
                <div class="two columns">&nbsp;</div>
                <div class="two columns"><label for="voltControl">Current Rating *</label></div>
                <div class="one columns"><input type="number" step="0.001" id="voltControl" name="voltControl" value="" required> </div>
                <div class="one columns"><b>%</b></div>
                <div class="two columns">&nbsp;</div>
            </div>
            <div class="row">
                <div class="two columns"><label for="voltRating">Max Power *</label></div>
                <div class="one columns"><input type="number" step="0.001" id="voltRating" name="voltRating" value="" required> </div>
                <div class="one columns"><b>V</b></div>
                <div class="two columns">&nbsp;</div>
                <div class="two columns"><label for="voltControl">Number of voltage display digits *</label></div>
                <div class="one columns"><input type="number" step="0.001" id="voltControl" name="voltControl" value="" required> </div>
                <div class="one columns"><b>%</b></div>
                <div class="two columns">&nbsp;</div>
            </div>
            <div class="row">
                <div class="two columns"><label for="voltRating">Number of current display digits *</label></div>
                <div class="one columns"><input type="number" step="0.001" id="voltRating" name="voltRating" value="" required> </div>
                <div class="one columns"><b>V</b></div>
                <div class="two columns">&nbsp;</div>
                <div class="two columns"><label for="model">Overvoltage protection *</label></div>
                <div class="three columns">
                    <select id="model" name="model" class="js-example-basic-single" style="width: 100%" required>
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
                <div class="two columns"><label for="model">Overvoltage protection *</label></div>
                <div class="three columns">
                    <select id="model" name="model" class="js-example-basic-single" style="width: 100%" required>
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

            <h6>Characteristics</h6>

            <h6>Capacity</h6>


            <div class="row">
                <div class="two columns">Label</div>
                <div class="three columns">Input</div>
                <div class="one columns">Space</div>
                <div class="two columns">Label</div>
                <div class="three columns">Input</div>
                <div class="one columns">Space</div>
            </div>
            <div class="row">
                <div class="two columns">Label</div>
                <div class="one columns">Input</div>
                <div class="one columns">Label</div>
                <div class="two columns">Space</div>
                <div class="two columns">Label</div>
                <div class="one columns">Input</div>
                <div class="one columns">Label</div>
                <div class="two columns">Space</div>
            </div>
            <div class="row">
                <div class="two columns">Label</div>
                <div class="three columns">Input</div>
                <div class="one columns">Space</div>
                <div class="two columns">Label</div>
                <div class="three columns">Input</div>
                <div class="one columns">Space</div>
            </div>
            <div class="row">
                <div class="two columns">Label</div>
                <div class="one columns">Input</div>
                <div class="one columns">Label</div>
                <div class="two columns">Space</div>
                <div class="two columns">Label</div>
                <div class="one columns">Input</div>
                <div class="one columns">Label</div>
                <div class="two columns">Space</div>
            </div>
            <button onclick="location.href = 'form_power_list.php'" type="button" id="listBtn"><i class='bx bx-list-ol bx-fw' ></i> List</button>
            <button type="submit" id="myBtn" class="btn btn-primary"><i class='bx bx-send bx-fw' ></i> Send</button>
        </form>

        <!--        <div class="col-lg-12">
                    <hr>
                    <hr>
                    <hr>
                    <h1>Power Supply Detail</h1>
                    <hr>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="main-box">
                                <form id="add_power_form" class="form-horizontal" role="form" action="crud_add_power.php" method="get">
                                    
                                    
                                    <h2>Capability</h2>
                                    <div class="form-group">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="newTransfer" class="col-lg-2 control-label">Overcurrent protection *</label>
                                        <div class="col-lg-3">
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
                                    </div>
                                    
                                    <h2>Characteristics</h2>
                                    <div class="form-group">
                                        <label for="voltRating" class="col-lg-2 control-label">Dimensions (W) *</label>
                                        <div class="col-lg-1">
                                            <input type="number" 0 class="form-control" id="voltRating" name="voltRating" value="" required> 
                                        </div> 
                                        <label for="voltRating" class="col-lg-2 control-label pull-left" style="text-align: left"><b>V</b></label>
                                        <label for="voltControl" class="col-lg-2 control-label">Weight (kg) *</label>
                                        <div class="col-lg-1">
                                            <input type="number" step="0.001" class="form-control" id="voltControl" name="voltControl" value="" required> 
                                        </div> 
                                        <label for="voltControl" class="col-lg-2 control-label pull-left" style="text-align: left"><b>%</b></label>
                                    </div>
                                    <div class="form-group">
                                        <label for="maxTemp" class="col-lg-2 control-label">Dimensions (D) *</label>
                                        <div class="col-lg-1">
                                            <input type="number" step="0.001" class="form-control" id="maxTemp" name="maxTemp" value="" required> 
                                        </div>
                                        <label for="maxTemp" class="col-lg-2 control-label pull-left" style="text-align: left"><b>`C</b></label>
                                        <label for="minTemp" class="col-lg-2 control-label">Input voltage (facilities) *</label>
                                        <div class="col-lg-1">
                                            <input type="number" step="0.001" class="form-control" id="minTemp" name="minTemp" value="" required> 
                                        </div> 
                                        <label for="minTemp" class="col-lg-2 control-label pull-left" style="text-align: left"><b>`C</b></label>
                                    </div>
                                    <div class="form-group">
                                        <label for="minTemp" class="col-lg-2 control-label">Dimensions (H) *</label>
                                        <div class="col-lg-1">
                                            <input type="number" step="0.001" class="form-control" id="minTemp" name="minTemp" value="" required> 
                                        </div> 
                                        <label for="minTemp" class="col-lg-2 control-label pull-left" style="text-align: left"><b>`C</b></label>
                                        <label for="manufacturer" class="col-lg-2 control-label">Remote operation capability *</label>
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
                                        <label for="relTest" class="col-lg-2 control-label">Output voltage monitor *</label>
                                        <div class="col-lg-3">
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
                                        <label for="manufacturer" class="col-lg-2 control-label">Output current monitor  *</label>
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
                                        <label for="relTest" class="col-lg-2 control-label">PS to eqpt interface *</label>
                                        <div class="col-lg-3">
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
                                        <label for="manufacturer" class="col-lg-2 control-label">LAN Port *</label>
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
                                        <label for="relTest" class="col-lg-2 control-label">GPIB interface *</label>
                                        <div class="col-lg-3">
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
                                        <label for="manufacturer" class="col-lg-2 control-label">Other interface ports *</label>
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
                                    
                                    <h2>Capacity</h2>
                                    <div class="form-group">
                                        <label for="maxTemp" class="col-lg-2 control-label">Number of output channels *</label>
                                        <div class="col-lg-1">
                                            <input type="number" step="0.001" class="form-control" id="maxTemp" name="maxTemp" value="" required> 
                                        </div>
                                        <label for="maxTemp" class="col-lg-2 control-label pull-left" style="text-align: left"><b>`C</b></label>
                                    </div>
                                    
                                    <div class="pull-right">
                                        <button onclick="location.href = 'form_power_list.php'" type="button" id="listBtn"><i class='bx bx-list-ol bx-fw' ></i> List</button>
                                    </div>
                                    <div class="pull-right">
                                        <button type="submit" id="myBtn" class="btn btn-primary"><i class='bx bx-send bx-fw' ></i> Send</button>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>	
                    </div>
                </div>-->
        <script src="js/multiselect-dropdown.js" ></script>
    </body>
</html>