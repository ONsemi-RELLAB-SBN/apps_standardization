<?php
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
include '../class/db.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="This is Standardization Project">
        <meta name="author" content="Ayep">
        <link rel="icon" type="image/png" href="images/favicon.png">
        <title>SAMPLE STANDARD</title>

        <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/skeleton.css">
        <script src="../js/jquery-3.7.1.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        


        <style>
            /*This command sets the width of the tag you working with*/
            input[type = text] {
                width : 100%;
            }

            /*This part ensures the text after each form element stays in place after the float command.*/
            .row:after {
                content: "";
                display: table;
                clear: both;
            }

        </style>

        <script type="text/javascript">
            $(document).ready(function () {
                $('select').select2({
                    placeholder: 'Please choose an options',
                    allowClear: true
                });
                $('.js-example-basic-multiple').select2({
                    placeholder: "Multi Select",
                    allowClear: true
                });

                $(".js-example-basic-single").select2({
                    placeholder: "Choose one",
                    allowClear: true
                });
            });
        </script>
    </head>
    <body>
        <div class="sample-form-1280">
            <h1>Hardware Detail</h1>
            <form id="add_hardware_form" class="form-horizontal" role="form" action="crud_add_hardware.php" method="get">
                <h2>General</h2>
                <div class="row">
                    <div class="three columns">
                        <label for="labLocation">Lab Location *</label>
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
                    <div class="three columns">
                        <label for="strategy" >onsemi Strategy *</label>
                        <select id="strategy" name="strategy" class="js-example-basic-multiple" style="width: 100%" required>
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
                    <label for="id_label_multiple">
                        Click this to highlight the multiple select element

                        <select class="js-example-basic-multiple js-states form-control" id="id_label_multiple" multiple="multiple" style="width: 100%">
                            <?php
                            $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '008' ORDER BY code ASC";
                            $resSite = mysqli_query($con, $sqlDdSite);
                            while ($rowSite = mysqli_fetch_array($resSite)):
                                ?>
                                <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                            <?php endwhile; ?>
                        </select>
                    </label>
                </div>
                <div class="row">
                    <label for="id_label_multiple">
                        Click this to highlight the multiple select element

                        <select class="js-example-basic-multiple js-states form-control" id="id_label_multiple" multiple="multiple" style="width: 100%">
                            <?php
                            $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '008' ORDER BY code ASC";
                            $resSite = mysqli_query($con, $sqlDdSite);
                            while ($rowSite = mysqli_fetch_array($resSite)):
                                ?>
                                <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                            <?php endwhile; ?>
                        </select>
                    </label>
                </div>
                
                <div class="row">
                    <label for="id_label_single">
                        Click this to highlight the single select element

                        <select class="js-example-basic-single js-states form-control" id="id_label_single"></select>
                    </label>

                    <label for="id_label_multiple">
                        Click this to highlight the multiple select element

                        <select class="js-example-basic-multiple js-states form-control" id="id_label_multiple" multiple="multiple" style="width: 100%">
                            <?php
                            $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '008' ORDER BY code ASC";
                            $resSite = mysqli_query($con, $sqlDdSite);
                            while ($rowSite = mysqli_fetch_array($resSite)):
                                ?>
                                <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                            <?php endwhile; ?>
                        </select>
                    </label>
                </div>
                <h2>Test</h2>
                <div class="row">
                    <div class="pjg-25">
                        <label for="name" id="name-label">
                            Name
                        </label>
                    </div>
                    <div class="pjg-75">
                        <input type="text" id="name" name="name" placeholder="your name" required>
                    </div>

                    <div class="pjg-20">
                        <label>Label kita</label>
                    </div>
                    <div class="pjg-25">
                        <input type="text" id="huhu" name="huhu" placeholder="test" required>
                    </div>
                    <div class="pjg-5">
                        <label>`C</label>
                    </div>
                    <div class="pjg-25">
                        <label>Watt</label>
                    </div>
                    <div class="pjg-75">
                        <label>
                            this is the description yang kita nk letak
                        </label> 
                    </div>
                    <div class="pjg-5">
                        <label>kita tengok kat atas ke</label>
                    </div>
                </div>
                <div class="row">
                    <div class="pjg-20">
                        <label>Label kita</label>
                    </div>
                    <div class="pjg-25">
                        <input type="text" id="huhu" name="huhu" placeholder="test" required>
                    </div>
                    <div class="pjg-5">
                        <label>`C</label>
                    </div>
                    <div class="pjg-50">
                        <label>
                            this is the description yang kita nk letak
                        </label> 
                    </div>
                </div>
                <div class="row">
                    <div class="pjg-25">
                        <input type="text" id="huhu" name="huhu" placeholder="test" required>
                    </div>
                    <div class="pjg-25">
                        <label>`C</label>
                    </div>
                    <div class="pjg-25">
                        <input type="text" id="huhu" name="huhu" placeholder="test" required>
                    </div>
                    <div class="pjg-25">
                        <label>Volt</label>
                    </div>
                </div>
                <div class="row">
                    <label for="id_label_single">
                        Click this to highlight the single select element

                        <select class="js-example-basic-single js-states form-control" id="id_label_single"></select>
                    </label>

                    <label for="id_label_multiple">
                        Click this to highlight the multiple select element

                        <select class="js-example-basic-multiple js-states form-control" id="id_label_multiple" multiple="multiple" style="width: 100%">
                            <?php
                            $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '008' ORDER BY code ASC";
                            $resSite = mysqli_query($con, $sqlDdSite);
                            while ($rowSite = mysqli_fetch_array($resSite)):
                                ?>
                                <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                            <?php endwhile; ?>
                        </select>
                    </label>
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
                </div>
            </form>
        </div>

    </body>
</html>