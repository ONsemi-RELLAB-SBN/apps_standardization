<?php
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
include 'class/db.php';
include 'form_template.php';
//$user = $_SESSION["user"];
?>


<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>FORM | Standardization Survey</title>
        <meta name="author" content="Ayep" />
        <link rel="shortcut icon" href="image/logo/onsemi_logo.ico">

        <link rel="stylesheet" href="css/sample01.css"/>
        <link rel='stylesheet' type="text/css" href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'>

        <style>
/*            h2 {
                text-align: center;
                position: relative;
                letter-spacing: 0;
            }
            h1 {
                font-size: 2rem;
                text-align: left;
                border-left: 10px;
            }*/
            label {
                text-align: center;
            }
        </style>
    </head>
    <body>
        <h1>Equipment</h1>
        <div class="tabs">

            <input type="radio" id="tab1" name="tab-control" checked>
            <input type="radio" id="tab2" name="tab-control">
            <input type="radio" id="tab3" name="tab-control">
            <input type="radio" id="tab4" name="tab-control">
            <input type="radio" id="tab5" name="tab-control">
            <input type="radio" id="tab6" name="tab-control">
            <input type="radio" id="tab7" name="tab-control">
            <input type="radio" id="tab8" name="tab-control">
            <ul>
                <li title="General"><label for="tab1" role="button"><i class='bx bx-check-double bx-fw bx-md'></i><span>General</span></label></li>
                <li title="Equipment Identity"><label for="tab2" role="button"><i class='bx bx-box bx-fw bx-md'></i><span>Equipment Identity</span></label></li>
                <li title="Capability"><label for="tab3" role="button"><i class='bx bxs-truck bx-fw bx-md'></i><span>Capability</span></label></li>
                <li title="Characteristic"><label for="tab4" role="button"><i class='bx bx-calendar-exclamation bx-fw bx-md'></i><span>Characteristic</span></label></li>
                <li title="Safety"><label for="tab5" role="button"><i class='bx bx-calendar-exclamation bx-fw bx-md'></i><span>Safety</span></label></li>
                <li title="Utilities"><label for="tab6" role="button"><i class='bx bx-calendar-exclamation bx-fw bx-md'></i><span>Utilities</span></label></li>
                <li title="Internal Chamber Configuration"><label for="tab7" role="button"><i class='bx bx-calendar-exclamation bx-fw bx-md'></i><span>Internal Chamber Configuration</span></label></li>
                <li title="External Chamber Configuration"><label for="tab8" role="button"><i class='bx bx-calendar-exclamation bx-fw bx-md'></i><span>External Chamber Configuration</span></label></li>
            </ul>

            <div class="slider">
                <div class="indicator"></div>
            </div>
            <div class="content">
                <section>
                    <h2>General</h2>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea dolorem sequi, quo tempore in eum obcaecati atque quibusdam officiis est dolorum minima deleniti ratione molestias numquam. Voluptas voluptates quibusdam cum?
                </section>
                <section>
                    <h2>Equipment Identity</h2>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem quas adipisci a accusantium eius ut voluptatibus ad impedit nulla, ipsa qui. Quasi temporibus eos commodi aliquid impedit amet, similique nulla.
                </section>
                <section>
                    <h2>Capability</h2>
                    <div class="row">
                        <div class="two columns"><label for="volt_rating">Voltage Rating *</label></div>
                        <div class="one columns"><input type="number" step="0.001" id="volt_rating" name="volt_rating" value="" required> </div>
                        <div class="one columns"><label for="volt_rating" style="text-align: left"><b>V</b></label></div>
                        <div class="two columns">&nbsp;</div>
                        <div class="two columns"><label for="volt_control">Voltage Control Accuracy *</label></div>
                        <div class="one columns"><input type="number" step="0.001" id="volt_control" name="volt_control" value="" required> </div>
                        <div class="one columns"><label for="volt_control" style="text-align: left"><b>%</b></label></div>
                        <div class="two columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="min_temp">Min. Temperature *</label></div>
                        <div class="one columns"><input type="number" step="0.001" id="min_temp" name="min_temp" value="" required> </div>
                        <div class="one columns"><label for="min_temp" style="text-align: left"><b>`C</b></label></div>
                        <div class="two columns">&nbsp;</div>
                        <div class="two columns"><label for="max_temp">Max. Temperature *</label></div>
                        <div class="one columns"><input type="number" step="0.001" id="max_temp" name="max_temp" value="" required> </div>
                        <div class="one columns"><label for="max_temp" style="text-align: left"><b>`C</b></label></div>
                        <div class="two columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="minRh">Min. RH *</label></div>
                        <div class="one columns"><input type="number" step="0.001" id="minRh" name="minRh" value="" required> </div>
                        <div class="one columns"><label for="minRh" style="text-align: left"><b>%</b></label></div>
                        <div class="two columns">&nbsp;</div>
                        <div class="two columns"><label for="maxRh">Max. RH *</label></div>
                        <div class="one columns"><input type="number" step="0.001" id="maxRh" name="maxRh" value="" required> </div>
                        <div class="one columns"><label for="maxRh" style="text-align: left"><b>%</b></label></div>
                        <div class="two columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="min_pressure">Minimum Pressure *</label></div>
                        <div class="one columns"><input type="number" step="0.001" id="min_pressure" name="min_pressure" value="" required> </div>
                        <div class="one columns"><label for="min_pressure" style="text-align: left"><b>psi</b></label></div>
                        <div class="two columns">&nbsp;</div>
                        <div class="two columns"><label for="max_pressure">Maximum Pressure *</label></div>
                        <div class="one columns"><input type="number" step="0.001" id="max_pressure" name="max_pressure" value="" required> </div>
                        <div class="one columns"><label for="max_pressure" style="text-align: left"><b>psi</b></label></div>
                        <div class="two columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="heat_dissipation">Heat Dissipation *</label></div>
                        <div class="one columns"><input type="number" step="0.001" id="heat_dissipation" name="heat_dissipation" value="" required> </div>
                        <div class="one columns"><label for="heat_dissipation" style="text-align: left"><b>Watt</b></label></div>
                        <div class="two columns">&nbsp;</div>
                        <div class="two columns">
                            <label for="temp_fluctuation">Temperature Fluctuation *</label>
                            <label for="toggle_01" class="view-image">Image</label>
                            <input type="checkbox" id="toggle_01">
                            <dialog>
                                <label for="toggle_01" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                                <img id="myImg" src="image/equipment/001.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                            </dialog>
                        </div>
                        <div class="one columns">
                            <input type="number" step="0.001" id="temp_fluctuation" name="temp_fluctuation" value="" required>
                            </div>
                        <div class="one columns"><label for="temp_fluctuation" style="text-align: left"><b>`C</b></label></div>
                        <div class="two columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns">
                            <label for="temp_uniform">Temperature Uniformity *</label>
                            <label for="toggle_02" class="view-image">Image</label>
                            <input type="checkbox" id="toggle_02">
                            <dialog>
                                <label for="toggle_02" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                                <img id="myImg" src="image/equipment/002.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                            </dialog>
                        </div>
                        <div class="one columns"><input type="number" step="0.001" id="temp_uniform" name="temp_uniform" value="" required></div>
                        <div class="one columns"><label for="temp_uniform" style="text-align: left"><b>`C</b></label></div>
                        <div class="two columns">&nbsp;</div>
                        <div class="two columns">
                            <label for="humid_fluctuation">Humidity Fluctuation *</label>
                            <label for="toggle_03" class="view-image">Image</label>
                            <input type="checkbox" id="toggle_03">
                            <dialog>
                                <label for="toggle_03" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                                <img id="myImg" src="image/equipment/003.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                            </dialog>
                        </div>
                        <div class="one columns"><input type="number" step="0.001" id="humid_fluctuation" name="humid_fluctuation" value="" required> </div>
                        <div class="one columns"><label for="humid_fluctuation" style="text-align: left"><b>%</b></label></div>
                        <div class="two columns">&nbsp;</div>
                    </div>
                </section>
                <section>
                    <h2>Characteristic</h2>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa dicta vero rerum? Eaque repudiandae architecto libero reprehenderit aliquam magnam ratione quidem? Nobis doloribus molestiae enim deserunt necessitatibus eaque quidem incidunt.
                </section>
                <section>
                    <h2>Safety</h2>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa dicta vero rerum? Eaque repudiandae architecto libero reprehenderit aliquam magnam ratione quidem? Nobis doloribus molestiae enim deserunt necessitatibus eaque quidem incidunt.
                </section>
                <section>
                    <h2>Utilities</h2>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa dicta vero rerum? Eaque repudiandae architecto libero reprehenderit aliquam magnam ratione quidem? Nobis doloribus molestiae enim deserunt necessitatibus eaque quidem incidunt.
                </section>
                <section>
                    <h2>Internal Chamber Configuration</h2>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa dicta vero rerum? Eaque repudiandae architecto libero reprehenderit aliquam magnam ratione quidem? Nobis doloribus molestiae enim deserunt necessitatibus eaque quidem incidunt.
                </section>
                <section>
                    <h2>External Chamber Configuration</h2>
                    <div class="row">
                        <div class="two columns">
                            <label for="ext_config_type">Configuration Type *</label>
                            <label for="toggle_20" class="view-image">Image</label>
                            <input type="checkbox" id="toggle_20">
                            <dialog>
                                <label for="toggle_20" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                                <img id="myImg" src="image/equipment/020.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                            </dialog>
                        </div>
                        <div class="three columns">
                            <select id="ext_config_type" name="ext_config_type" style="width: 100%" onchange="updateView()" required>
                                <option value="" selected=""></option>
                                <?php
                                $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '032' ORDER BY code ASC";
                                $resSite = mysqli_query($con, $sqlDdSite);
                                while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                    <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                                <?php endwhile; ?>
                            </select>
                        </div>
                    </div>

                    <script>
                        function updateView() {
                            var dd = document.getElementById('ext_config_type');
                            var extDiv = document.getElementById('viewExternalDiv');
                            var selectedValue = dd.value;

                            $("#interface_volt_rating").val('');
                            $("#interface_curr_rating").val('');

                            if (selectedValue === '032003') {
                                extDiv.style.display = 'none';
                            } else {
                                extDiv.style.display = 'block';
                            }
                        }
                    </script>

                    <div class="row" id="viewExternalDiv" name="viewExternalDiv" style="display: none;">
                        <div class="row">
                            <div class="two columns"><label for="interface_volt_rating">Interface Voltage Rating *</label></div>
                            <div class="one columns"><input type="number" step="0.001" id="interface_volt_rating" name="interface_volt_rating" value="" > </div>
                            <div class="one columns"><label for="interface_volt_rating" style="text-align: left"><b>V</b></label></div>
                            <div class="two columns">&nbsp;</div>
                            <div class="two columns"><label for="interface_curr_rating">Interface Current Rating *</label></div>
                            <div class="one columns"><input type="number" step="0.001" id="interface_curr_rating" name="interface_curr_rating" value="" > </div>
                            <div class="one columns"><label for="interface_curr_rating" style="text-align: left"><b>A</b></label></div>
                            <div class="two columns">&nbsp;</div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <script>
        </script>
    </body>
</html>