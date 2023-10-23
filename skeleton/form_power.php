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

        <!--<link rel="stylesheet" href="css/multi.css" type="text/css" />-->
        <!--<script src="js/multi.js"></script>-->

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

            mobiscroll.select('#multiple-select', {
                inputElement: document.getElementById('my-input'),
                touchUi: false
            });
        </script>
    </head>
    <body data-theme="seafoam">
        <hr>
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
                    <select id="relTest" name="relTest[]" class="js-example-basic-multiple" multiple="multiple" style="width: 100%" required>
                        <?php
                        $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '008' ORDER BY code ASC";
                        $resSite = mysqli_query($con, $sqlDdSite);
                        while ($rowSite = mysqli_fetch_array($resSite)):
                            ?>
                            <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                        <?php endwhile; ?>
                    </select>
<!--                    <select id="manufacturer" name="manufacturer" class="js-example-basic-single" style="width: 100%" required>
                        <option value="" selected=""></option>
                    <?php
                    $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '006' ORDER BY code ASC";
                    $resSite = mysqli_query($con, $sqlDdSite);
                    while ($rowSite = mysqli_fetch_array($resSite)):
                        ?>
                                        <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                    <?php endwhile; ?>
                    </select>-->
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

            <h6>Characteristics</h6>
            <div class="row">
                <div class="two columns">
                    <label>Multi-select</label>
                </div>
                <div class="three columns">
                    <select id="sample01" name="sample01" size="5" multiple>
                        <option value="1">Books</option>
                        <option value="2">Movies, Music & Games</option>
                        <option value="3">Electronics & Computers</option>
                        <option value="4">Home, Garden & Tools</option>
                        <option value="5">Health & Beauty</option>
                        <option value="6">Toys, Kids & Baby</option>
                        <option value="7">Clothing & Jewelry</option>
                        <option value="8">Sports & Outdoors</option>
                    </select>
                </div>
                <div class="one columns">&nbsp;</div>
                <div class="two columns">
                    <div class="container">
                    <section>
                        <!--<p>Preselected</p>-->
                        <select multiple="multiple" size="5" id="sample02" name="sample02">
                            <option>Item 1</option>
                            <option>item 2</option>
                            <option>item 3</option>
                            <option>item 4</option>
                        </select>
                    </section>
                    </div>
                </div>
                <div class="three columns">Input</div>
                <div class="one columns">&nbsp;</div>
            </div>

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
                                    <h2>General</h2>
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
                                    
                                    <h2>Power Supply Identity</h2>
                                    <div class="form-group">
                                        <label for="eqptId" class="col-lg-2 control-label">Manufacturer *</label>
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
                                        <label for="dedicated" class="col-lg-2 control-label">Model *</label>
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
                                    
                                    <h2>Capability</h2>
                                    <div class="form-group">
                                        <label for="voltRating" class="col-lg-2 control-label">Voltage Rating *</label>
                                        <div class="col-lg-1">
                                            <input type="number" 0 class="form-control" id="voltRating" name="voltRating" value="" required> 
                                        </div> 
                                        <label for="voltRating" class="col-lg-2 control-label pull-left" style="text-align: left"><b>V</b></label>
                                        <label for="voltControl" class="col-lg-2 control-label">Current Rating *</label>
                                        <div class="col-lg-1">
                                            <input type="number" step="0.001" class="form-control" id="voltControl" name="voltControl" value="" required> 
                                        </div> 
                                        <label for="voltControl" class="col-lg-2 control-label pull-left" style="text-align: left"><b>%</b></label>
                                    </div>
                                    <div class="form-group">
                                        <label for="voltRating" class="col-lg-2 control-label">Max Power *</label>
                                        <div class="col-lg-1">
                                            <input type="number" 0 class="form-control" id="voltRating" name="voltRating" value="" required> 
                                        </div> 
                                        <label for="voltRating" class="col-lg-2 control-label pull-left" style="text-align: left"><b>V</b></label>
                                        <label for="voltControl" class="col-lg-2 control-label">Number of voltage display digits *</label>
                                        <div class="col-lg-1">
                                            <input type="number" step="0.001" class="form-control" id="voltControl" name="voltControl" value="" required> 
                                        </div> 
                                        <label for="voltControl" class="col-lg-2 control-label pull-left" style="text-align: left"><b>%</b></label>
                                    </div>
                                    <div class="form-group">
                                        <label for="maxTemp" class="col-lg-2 control-label">Number of current display digits *</label>
                                        <div class="col-lg-1">
                                            <input type="number" step="0.001" class="form-control" id="maxTemp" name="maxTemp" value="" required> 
                                        </div>
                                        <label for="maxTemp" class="col-lg-2 control-label pull-left" style="text-align: left"><b>`C</b></label>
                                        <label for="to" class="col-lg-2 control-label">Overvoltage protection *</label>
                                        <div class="col-lg-3">
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