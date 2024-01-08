<?php
/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */


include '../template/form.php';
include '../class/get_parameter.php';
$id = $_GET['edit'];
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
    
    <script src="../js/jquery-3.7.0.js"></script>
    <script src="../js/multiselect-dropdown.js" ></script>
    
    <head>
        <style>
            h5, h6 {
               border-left: none; 
            }
            
            body {
                margin: 0;
                padding: 0;
                height: 90vh;
            }

            #main-page {
                position: relative;
                top: 0;
                left: 0;
                width: 100%;
                height: 30%;
                background-color: #f2f2f2;
                padding: 20px;
            }

            #content-page {
                position: relative;
                top: 30%;
                left: 0;
                width: 100%;
                max-height: 70%;
                background-color: #fff;
                padding: 20px;
                overflow-x: visible;
            }

            #tabs {
                display: flex;
                list-style: none;
                margin: 0;
                padding: 0;
            }

            #tabs li {
                margin-right: 10px;
                padding: 10px;
                /*border: 1px solid #ccc;*/
                cursor: pointer;
            }

            #tabs li.active {
                background-color: orange;
            }

            .tab-content {
                display: none;
                padding: 20px;
            }

            .tab-content.active {
                display: block;
            }
            
            #listBtn {
                display: block;
                position: fixed;
                top: 20px;
                right: 40px;
                z-index: 99;
                font-size: 18px;
                border: none;
                outline: none;
                cursor: pointer;
            }

            #listBtn:hover {
                background-color: orange;
                color: white;
            }
            
            #save-button {
                display: block;
                position: fixed;
                top: 20px;
                right: 160px;
                z-index: 99;
                font-size: 18px;
                border: none;
                outline: none;
                cursor: pointer;
            }

            #save-button:hover {
                background-color: orange;
                color: white;
            }
            
            #draft-button {
                display: block;
                position: fixed;
                top: 20px;
                right: 160px;
                z-index: 99;
                font-size: 18px;
                border: none;
                outline: none;
                cursor: pointer;
            }
            
            #toggle_01, #toggle_02, #toggle_03, #toggle_04, #toggle_05, #toggle_06, #toggle_07, #toggle_08, #toggle_09, #toggle_10, #toggle_11, #toggle_12, #toggle_13, #toggle_14, #toggle_15, #toggle_16, #toggle_17, #toggle_18, #toggle_19, #toggle_20 {
                visibility: hidden;
                opacity: 0;
                position: absolute;
                z-index: -1;
            }

            #toggle_01:checked ~ dialog, #toggle_02:checked ~ dialog, #toggle_03:checked ~ dialog, #toggle_04:checked ~ dialog, #toggle_05:checked ~ dialog, #toggle_06:checked ~ dialog, #toggle_07:checked ~ dialog, #toggle_08:checked ~ dialog, #toggle_09:checked ~ dialog, #toggle_10:checked ~ dialog,
            #toggle_11:checked ~ dialog, #toggle_12:checked ~ dialog, #toggle_13:checked ~ dialog, #toggle_14:checked ~ dialog, #toggle_15:checked ~ dialog, #toggle_16:checked ~ dialog, #toggle_17:checked ~ dialog, #toggle_18:checked ~ dialog, #toggle_19:checked ~ dialog, #toggle_20:checked ~ dialog {
                display: block;
                position: absolute;
                transform: translate(0, -50%);
                box-shadow: 0px 0px 10px #cccccc;
                border-radius: 10px;
                z-index:1000;
            }
        </style>

        <script type="text/javascript">

        </script>
    </head>

    <body>
        <form id="update_equipment_form" action="../crud/crud_update_equipment.php" method="get">
<!--        <form id="add_equipment_form" action="../crud/crud_add_equipment_new.php" method="get">-->
            <?php
            $sqlFormData = "SELECT * FROM gest_form_eqpt WHERE id = '$id'";
            $resForm = mysqli_query($con, $sqlFormData);
            while ($rowForm = mysqli_fetch_array($resForm)): ?>
                <input type="hidden" id="id" name="id" value="<?php echo $id; ?>">
                <div id="main-page">
                    <div class="twelve columns">&nbsp;</div>
                    <h5>General</h5>
                    <div class="row">
                        <div class="two columns"><label for="lab_location">Lab Location *</label></div>
                        <div class="three columns">
                            <select id="lab_location" name="lab_location" style="width: 100%" required>
                                <option value="" selected=""></option>
                                <?php 
                                $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '002' ORDER BY code ASC";
                                $resSite = mysqli_query($con, $sqlDdSite);
                                while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                    <!--<option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>-->
                                    <option value="<?php echo $rowSite['code']; ?>" <?php if ($rowSite['code'] === $rowForm['lab_location']) { ?>selected<?php } ?>><?php echo $rowSite['name']; ?></option>
                                <?php endwhile; ?>
                            </select>
                        </div>
                        <div class="one columns">&nbsp;</div>
                        <div class="two columns"><label for="strategy">Product Group *</label></div>
                        <div class="three columns">
                            <select id="strategy" name="strategy" style="width: 100%" required>
                                <option value="" selected=""></option>
                                <?php 
                                $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '003' ORDER BY code ASC";
                                $resSite = mysqli_query($con, $sqlDdSite);
                                while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                    <!--<option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>-->
                                    <option value="<?php echo $rowSite['code']; ?>" <?php if ($rowSite['code'] === $rowForm['strategy']) { ?>selected<?php } ?>><?php echo $rowSite['name']; ?></option>
                                <?php endwhile; ?>  
                            </select>
                        </div>
                        <div class="one columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="standardization">Standardization Category *</label></div>
                        <div class="three columns">
                            <select id="standardization" name="standardization" style="width: 100%" required>
                                <option value="" selected=""></option>
                                <?php
                                $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '004' ORDER BY code ASC";
                                $resSite = mysqli_query($con, $sqlDdSite);
                                while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                    <!--<option value="<?php echo $rowSite['code']; ?>" <?php if ($rowSite['code'] === "004001") { ?>selected<?php } ?>><?php echo $rowSite['name']; ?></option>-->
                                    <option value="<?php echo $rowSite['code']; ?>" <?php if ($rowSite['code'] === $rowForm['standard_category']) { ?>selected<?php } ?>><?php echo $rowSite['name']; ?></option>
                                <?php endwhile; ?>
                            </select>
                        </div>
                        <div class="one columns">&nbsp;</div>
                        <div class="two columns"><label for="champion">Lab Manager *</label></div>
                        <div class="three columns">
                            <select id="champion" name="champion" style="width: 100%" required>
                                <option value="" selected=""></option>
                                <?php 
                                $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '005' ORDER BY code ASC";
                                $resSite = mysqli_query($con, $sqlDdSite);
                                while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                    <!--<option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>-->
                                    <option value="<?php echo $rowSite['code']; ?>" <?php if ($rowSite['code'] === $rowForm['champion']) { ?>selected<?php } ?>><?php echo $rowSite['name']; ?></option>
                                <?php endwhile; ?>
                            </select>
                        </div>
                        <div class="one columns">&nbsp;</div>
                    </div>
                </div>

                <div id="content-page">
                    <ul id="tabs">
                        <li class="active" data-tab="tabIdtt">Equipment Identity</li>
                        <li data-tab="tabCpbl">Capability</li>
                        <li data-tab="tabCrtr">Characteristics</li>
                        <li data-tab="tabSafe">Safety</li>
                        <li data-tab="tabUtlt">Utilities</li>
                        <li data-tab="tabDaq">DAQ</li>
                        <li data-tab="tabInt" id="tb07">Internal Chamber Configuration</li>
                        <li data-tab="tabExt" id="tb08">External Chamber Configuration</li>
                    </ul>

                    <div class="tab-content active" id="tabIdtt">
                        <div class="row">
                            <div class="two columns"><label for="eqpt_id">Equipment ID *</label></div>
                            <div class="three columns">
                                <input type="text" list="eqpt_id_list" autocomplete="off" id="eqpt_id" name="eqpt_id" value="<?php echo getParameterValue($rowForm['eqpt_id']);?>" multiselect>
                                <datalist id="eqpt_id_list">
                                    <?php 
                                    $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '006' ORDER BY code ASC";
                                    $result = mysqli_query($con, $sqlDdSite);
                                    while($rowSite = mysqli_fetch_array($result)) { ?>
                                        <option value="<?php echo $rowSite['name']; ?>" <?php if ($rowSite['name'] === getParameterValue($rowForm['eqpt_id'])) { ?>selected<?php } ?>><?php echo $rowSite['name']; ?></option>
                                    <?php } ?>
                                </datalist>
                            </div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="dedicated">Dedicated/Share *</label></div>
                            <div class="three columns">
                                <select id="dedicated" name="dedicated" style="width: 100%" required>
                                    <option value="" selected=""></option>
                                    <?php 
                                    $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '007' ORDER BY code ASC";
                                    $resSite = mysqli_query($con, $sqlDdSite);
                                    while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                        <option value="<?php echo $rowSite['code']; ?>" <?php if ($rowSite['code'] === $rowForm['dedicate_usage']) { ?>selected<?php } ?>><?php echo $rowSite['name']; ?></option>
                                    <?php endwhile; ?>
                                </select>
                            </div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="manufacturer">Equipment Manufacturer *</label></div>
                            <div class="three columns">
                                <input type="text" list="manufacturer_list" autocomplete="off" id="manufacturer" name="manufacturer" value="<?php echo getParameterValue($rowForm['manufacturer']); ?>">
                                <datalist id="manufacturer_list">
                                    <?php 
                                    $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '009' ORDER BY code ASC";
                                    $result = mysqli_query($con, $sqlDdSite);
                                    while($rowSite = mysqli_fetch_array($result)) { ?>
                                        <option value="<?php echo $rowSite['name']; ?>" <?php if ($rowSite['name'] === getParameterValue($rowForm['manufacturer'])) { ?>selected<?php } ?>><?php echo $rowSite['name']; ?></option>
                                    <?php } ?>
                                </datalist>
                            </div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="model">Equipment Model *</label></div>
                            <div class="three columns">
                                <input type="text" list="model_list" autocomplete="off" id="model" name="model" value="<?php echo getParameterValue($rowForm['eqpt_model']); ?>">
                                <datalist id="model_list">
                                    <?php 
                                    $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '010' ORDER BY code ASC";
                                    $result = mysqli_query($con, $sqlDdSite);
                                    while($rowSite = mysqli_fetch_array($result)) { ?>
                                        <option value="<?php echo $rowSite['name']; ?>" <?php if ($rowSite['name'] === getParameterValue($rowForm['eqpt_model'])) { ?>selected<?php } ?>><?php echo $rowSite['name']; ?></option>
                                    <?php } ?>
                                </datalist>
                            </div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="mfg_date">Equipment Mfg Date *</label></div>
                            <div class="three columns"><input type="date" id="mfg_date" name="mfg_date" value="<?php echo date('Y-m-d', strtotime($rowForm['eqpt_mfg_date'])); ?>" style="width:55%" ></div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="asset_no">Equipment Asset No *</label></div>
                            <div class="three columns"><input type="text" id="asset_no" name="asset_no" placeholder="Asset Number" value="<?php echo $rowForm['eqpt_asset_no']; ?>" required> </div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="new_transfer">New/Transfer Equipment *</label></div>
                            <div class="three columns">
                                <select id="new_transfer" name="new_transfer" style="width: 100%" onchange="updateToField()" required>
                                    <option value="" selected=""></option>
                                    <?php
                                    $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '013' ORDER BY code ASC";
                                    $resSite = mysqli_query($con, $sqlDdSite);
                                    while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                        <option value="<?php echo $rowSite['code']; ?>" <?php if ($rowSite['code'] === $rowForm['new_transfer_eqpt']) { ?>selected<?php } ?>><?php echo $rowSite['name']; ?></option>
                                        <?php endwhile; ?>
                                </select>
                            </div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="from" id="fromLabel">From? *</label></div>
                            <div class="three columns">
                                <select id="from" name="from" style="width: 100%">
                                    <option value="" selected=""></option>
                                    <?php
                                    $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '014' ORDER BY code ASC";
                                    $resSite = mysqli_query($con, $sqlDdSite);
                                    while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                        <option value="<?php echo $rowSite['code']; ?>" <?php if ($rowSite['code'] === $rowForm['transfer_eqpt_location']) { ?>selected<?php } ?>><?php echo $rowSite['name']; ?></option>
                                    <?php endwhile; ?>
                                </select>
                            </div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="relTest">Rel Test (Multiselect) *</label></div>
                            <div class="three columns">
                                <select name="relTest[]" id="relTest" multiple multiselect-search="true" multiselect-select-all="false" style="width:100%" onchange="updateRelTest()" required>
                                <?php
                                $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '008' ORDER BY code ASC";
                                $resSite = mysqli_query($con, $sqlDdSite);
                                while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                    <option value="<?php echo $rowSite['code']; ?>" <?php if (strpos($rowForm['rel_test'], $rowSite['code']) !== false) { ?>selected<?php } ?>><?php echo $rowSite['name']; ?></option>
                                <?php endwhile; ?>
                                </select>
                            </div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="zone">Zone *</label></div>
                            <div class="three columns"><input type="number" step="0.001" id="zone" name="zone" value=""></div>
                            <div class="one columns">&nbsp;</div>
                        </div>

                        <script>
                            function updateToField() {
                                var newTransferDropdown = document.getElementById('new_transfer');
                                var toField = document.getElementById('from');
                                var transField = document.getElementById('fromLabel');

                                if (newTransferDropdown.value === '013001') {
                                    toField.readOnly = true;
                                    toField.required = false;
                                    $("#from").val('');
                                    transField.style.display = 'none';
                                    toField.style.display = 'none';
                                } else {
                                    toField.readOnly = false;
                                    toField.required = true;
                                    transField.style.display = 'block';
                                    toField.style.display = 'block';
                                }
                            }

                            function updateRelTest() {
                                var newreltest = document.getElementById('relTest');
//                                var zoneF = document.getElementById('zoneField');
//                                var zone = document.getElementById('zone');
                                var selected = [...newreltest.selectedOptions].map(option => option.value);

    //                            if (selected.includes("008019") || selected.includes("008021")) {
    //                                zone.readOnly = false;
    //                                zone.required = true;
    //                                $("#zone").val('');
    //                                zoneF.style.display = 'block';
    //                            } else {
    //                                zone.readOnly = true;
    //                                zone.required = false;
    //                                zoneF.style.display = 'none';
    //                            }
                                
                                var tab7 = document.getElementById('tb07');
                                var tab8 = document.getElementById('tb08');
                                
                                var cp_vr1 = document.getElementById('labelvoltrating1');
                                var cp_vr2 = document.getElementById('labelvoltrating2');
                                var cp_vr3 = document.getElementById('volt_rating');
                                var cp_ct1 = document.getElementById('labelcoltcontrol1');
                                var cp_ct2 = document.getElementById('labelcoltcontrol2');
                                var cp_ct3 = document.getElementById('volt_control');
                                var cp_cr1 = document.getElementById('labelcurrrating1');
                                var cp_cr2 = document.getElementById('labelcurrrating2');
                                var cp_cr3 = document.getElementById('curr_rating');
                                var cp_pw1 = document.getElementById('labelpowerrating1');
                                var cp_pw2 = document.getElementById('labelpowerrating2');
                                var cp_pw3 = document.getElementById('power_rating');
                                var cp_mt1 = document.getElementById('labelmintimer1');
                                var cp_mt2 = document.getElementById('labelmintimer2');
                                var cp_mt3 = document.getElementById('min_time');
                                var cp_mt4 = document.getElementById('labelmaxtimer1');
                                var cp_mt5 = document.getElementById('labelmaxtimer2');
                                var cp_mt6 = document.getElementById('max_time');
                                var cp_mtp1 = document.getElementById('labelmintemp1');
                                var cp_mtp2 = document.getElementById('labelmintemp2');
                                var cp_mtp3 = document.getElementById('min_temp');
                                var cp_mtp4 = document.getElementById('labelmaxtemp1');
                                var cp_mtp5 = document.getElementById('labelmaxtemp2');
                                var cp_mtp6 = document.getElementById('max_temp');
                                var cp_rh1 = document.getElementById('labelminrh1');
                                var cp_rh2 = document.getElementById('labelminrh2');
                                var cp_rh3 = document.getElementById('minRh');
                                var cp_rh4 = document.getElementById('labelmaxrh1');
                                var cp_rh5 = document.getElementById('labelmaxrh2');
                                var cp_rh6 = document.getElementById('maxRh');
                                var cp_ps1 = document.getElementById('labelminpressure1');
                                var cp_ps2 = document.getElementById('labelminpressure2');
                                var cp_ps3 = document.getElementById('min_pressure');
                                var cp_ps4 = document.getElementById('labelmaxpressure1');
                                var cp_ps5 = document.getElementById('labelmaxpressure2');
                                var cp_ps6 = document.getElementById('max_pressure');
                                var cp_ht1 = document.getElementById('labelheat1');
                                var cp_ht2 = document.getElementById('labelheat2');
                                var cp_ht3 = document.getElementById('heat_dissipation');
                                var cp_tf1 = document.getElementById('labeltempfluc1');
                                var cp_tf2 = document.getElementById('labeltempfluc2');
                                var cp_tf3 = document.getElementById('temp_fluctuation');
                                var cp_tu1 = document.getElementById('labeltempuniform1');
                                var cp_tu2 = document.getElementById('labeltempuniform2');
                                var cp_tu3 = document.getElementById('temp_uniform');
                                var cp_hu1 = document.getElementById('labelhumid1');
                                var cp_hu2 = document.getElementById('labelhumid2');
                                var cp_hu3 = document.getElementById('humid_fluctuation');
                                
                                var ut_v1 = document.getElementById('labelvoltage1');
                                var ut_v2 = document.getElementById('labelvoltage2');
                                var ut_v3 = document.getElementById('voltage');
                                var ut_c1 = document.getElementById('labelcurrent1');
                                var ut_c2 = document.getElementById('labelcurrent2');
                                var ut_c3 = document.getElementById('current');
                                var ut_p1 = document.getElementById('labelphase1');
                                var ut_p2 = document.getElementById('labelphase2');
                                var ut_p3 = document.getElementById('phase');
                                var ut_x1 = document.getElementById('labelexhaust');
                                var ut_x2 = document.getElementById('exhaust');
                                var ut_q1 = document.getElementById('labelliquid');
                                var ut_q2 = document.getElementById('liquid_nitrogen');
                                var ut_cw1 = document.getElementById('labelchill');
                                var ut_cw2 = document.getElementById('chilled_water');
                                var ut_cda1 = document.getElementById('labelcda');
                                var ut_cda2 = document.getElementById('cda');
                                var ut_l1 = document.getElementById('labellan');
                                var ut_l2 = document.getElementById('lan');
                                var ut_g1 = document.getElementById('labelgas');
                                var ut_g2 = document.getElementById('n2gas');
                                var ut_xx1 = document.getElementById('labelexygen');
                                var ut_xx2 = document.getElementById('oxygen_level');
                                var ut_d1 = document.getElementById('labeldiwater');
                                var ut_d2 = document.getElementById('di_water');
                                var ut_t1 = document.getElementById('labeltopup');
                                var ut_t2 = document.getElementById('water_topup');
                                
                                if (transfer.value === '013001') {
                                    inputfrom.style.display = 'none';
                                    labelfrom.style.display = 'none';
                                } else {
                                    inputfrom.style.display = 'block';
                                    labelfrom.style.display = 'block';
                                }

                                if (reltest.value === '008016') {                               // PTC
                                    tab7.style.display = 'block';
                                    tab8.style.display = 'block';
                                
                                    cp_vr1.style.display = 'block';
                                    cp_vr2.style.display = 'block';
                                    cp_vr3.style.display = 'block';
                                    cp_ct1.style.display = 'block';
                                    cp_ct2.style.display = 'block';
                                    cp_ct3.style.display = 'block';
                                    cp_cr1.style.display = 'block';
                                    cp_cr2.style.display = 'block';
                                    cp_cr3.style.display = 'block';
                                    cp_pw1.style.display = 'block';
                                    cp_pw2.style.display = 'block';
                                    cp_pw3.style.display = 'block';
                                    cp_mt1.style.display = 'block';
                                    cp_mt2.style.display = 'block';
                                    cp_mt3.style.display = 'block';
                                    cp_mt4.style.display = 'block';
                                    cp_mt5.style.display = 'block';
                                    cp_mt6.style.display = 'block';
                                    cp_mtp1.style.display = 'block';
                                    cp_mtp2.style.display = 'block';
                                    cp_mtp3.style.display = 'block';
                                    cp_mtp4.style.display = 'block';
                                    cp_mtp5.style.display = 'block';
                                    cp_mtp6.style.display = 'block';
                                    cp_rh1.style.display = 'none';
                                    cp_rh2.style.display = 'none';
                                    cp_rh3.style.display = 'none';
                                    cp_rh4.style.display = 'none';
                                    cp_rh5.style.display = 'none';
                                    cp_rh6.style.display = 'none';
                                    cp_ps1.style.display = 'none';
                                    cp_ps2.style.display = 'none';
                                    cp_ps3.style.display = 'none';
                                    cp_ps4.style.display = 'none';
                                    cp_ps5.style.display = 'none';
                                    cp_ps6.style.display = 'none';
                                    cp_ht1.style.display = 'block';
                                    cp_ht2.style.display = 'block';
                                    cp_ht3.style.display = 'block';
                                    cp_tf1.style.display = 'block';
                                    cp_tf2.style.display = 'block';
                                    cp_tf3.style.display = 'block';
                                    cp_tu1.style.display = 'block';
                                    cp_tu2.style.display = 'block';
                                    cp_tu3.style.display = 'block';
                                    cp_hu1.style.display = 'none';
                                    cp_hu2.style.display = 'none';
                                    cp_hu3.style.display = 'none';
                                    
                                    ut_v1.style.display = 'block';
                                    ut_v2.style.display = 'block';
                                    ut_v3.style.display = 'block';
                                    ut_c1.style.display = 'block';
                                    ut_c2.style.display = 'block';
                                    ut_c3.style.display = 'block';
                                    ut_p1.style.display = 'block';
                                    ut_p2.style.display = 'block';
                                    ut_p3.style.display = 'block';
                                    ut_x1.style.display = 'block';
                                    ut_x2.style.display = 'block';
                                    ut_g1.style.display = 'block';
                                    ut_g2.style.display = 'block';
                                    ut_xx1.style.display = 'block';
                                    ut_xx2.style.display = 'block';
                                    ut_q1.style.display = 'none';
                                    ut_q2.style.display = 'none';
                                    ut_cw1.style.display = 'block';
                                    ut_cw2.style.display = 'block';
                                    ut_d1.style.display = 'none';
                                    ut_d2.style.display = 'none';
                                    ut_t1.style.display = 'none';
                                    ut_t2.style.display = 'none';
                                    ut_cda1.style.display = 'block';
                                    ut_cda2.style.display = 'block';
                                    ut_l1.style.display = 'block';
                                    ut_l2.style.display = 'block';
                                } else if (reltest.value === '008012') {                        // IOL
                                    tab7.style.display = 'block';
                                    tab8.style.display = 'block';
                                    
                                    cp_vr1.style.display = 'block';
                                    cp_vr2.style.display = 'block';
                                    cp_vr3.style.display = 'block';
                                    cp_ct1.style.display = 'block';
                                    cp_ct2.style.display = 'block';
                                    cp_ct3.style.display = 'block';
                                    cp_cr1.style.display = 'block';
                                    cp_cr2.style.display = 'block';
                                    cp_cr3.style.display = 'block';
                                    cp_pw1.style.display = 'block';
                                    cp_pw2.style.display = 'block';
                                    cp_pw3.style.display = 'block';
                                    cp_mt1.style.display = 'block';
                                    cp_mt2.style.display = 'block';
                                    cp_mt3.style.display = 'block';
                                    cp_mt4.style.display = 'block';
                                    cp_mt5.style.display = 'block';
                                    cp_mt6.style.display = 'block';
                                    cp_mtp1.style.display = 'none';
                                    cp_mtp2.style.display = 'none';
                                    cp_mtp3.style.display = 'none';
                                    cp_mtp4.style.display = 'none';
                                    cp_mtp5.style.display = 'none';
                                    cp_mtp6.style.display = 'none';
                                    cp_rh1.style.display = 'none';
                                    cp_rh2.style.display = 'none';
                                    cp_rh3.style.display = 'none';
                                    cp_rh4.style.display = 'none';
                                    cp_rh5.style.display = 'none';
                                    cp_rh6.style.display = 'none';
                                    cp_ps1.style.display = 'none';
                                    cp_ps2.style.display = 'none';
                                    cp_ps3.style.display = 'none';
                                    cp_ps4.style.display = 'none';
                                    cp_ps5.style.display = 'none';
                                    cp_ps6.style.display = 'none';
                                    cp_ht1.style.display = 'none';
                                    cp_ht2.style.display = 'none';
                                    cp_ht3.style.display = 'none';
                                    cp_tf1.style.display = 'none';
                                    cp_tf2.style.display = 'none';
                                    cp_tf3.style.display = 'none';
                                    cp_tu1.style.display = 'none';
                                    cp_tu2.style.display = 'none';
                                    cp_tu3.style.display = 'none';
                                    cp_hu1.style.display = 'none';
                                    cp_hu2.style.display = 'none';
                                    cp_hu3.style.display = 'none';
                                    
                                    ut_v1.style.display = 'block';
                                    ut_v2.style.display = 'block';
                                    ut_v3.style.display = 'block';
                                    ut_c1.style.display = 'block';
                                    ut_c2.style.display = 'block';
                                    ut_c3.style.display = 'block';
                                    ut_p1.style.display = 'block';
                                    ut_p2.style.display = 'block';
                                    ut_p3.style.display = 'block';
                                    ut_x1.style.display = 'block';
                                    ut_x2.style.display = 'block';
                                    ut_g1.style.display = 'none';
                                    ut_g2.style.display = 'none';
                                    ut_xx1.style.display = 'none';
                                    ut_xx2.style.display = 'none';
                                    ut_q1.style.display = 'none';
                                    ut_q2.style.display = 'none';
                                    ut_cw1.style.display = 'none';
                                    ut_cw2.style.display = 'none';
                                    ut_d1.style.display = 'none';
                                    ut_d2.style.display = 'none';
                                    ut_t1.style.display = 'none';
                                    ut_t2.style.display = 'none';
                                    ut_cda1.style.display = 'none';
                                    ut_cda2.style.display = 'none';
                                    ut_l1.style.display = 'block';
                                    ut_l2.style.display = 'block';
                                } else if (reltest.value === '008005') {                        // HAST
                                    tab7.style.display = 'block';
                                    tab8.style.display = 'block';
                                    
                                    cp_vr1.style.display = 'block';
                                    cp_vr2.style.display = 'block';
                                    cp_vr3.style.display = 'block';
                                    cp_ct1.style.display = 'block';
                                    cp_ct2.style.display = 'block';
                                    cp_ct3.style.display = 'block';
                                    cp_cr1.style.display = 'block';
                                    cp_cr2.style.display = 'block';
                                    cp_cr3.style.display = 'block';
                                    cp_pw1.style.display = 'block';
                                    cp_pw2.style.display = 'block';
                                    cp_pw3.style.display = 'block';
                                    cp_mt1.style.display = 'none';
                                    cp_mt2.style.display = 'none';
                                    cp_mt3.style.display = 'none';
                                    cp_mt4.style.display = 'none';
                                    cp_mt5.style.display = 'none';
                                    cp_mt6.style.display = 'none';
                                    cp_mtp1.style.display = 'block';
                                    cp_mtp2.style.display = 'block';
                                    cp_mtp3.style.display = 'block';
                                    cp_mtp4.style.display = 'block';
                                    cp_mtp5.style.display = 'block';
                                    cp_mtp6.style.display = 'block';
                                    cp_rh1.style.display = 'block';
                                    cp_rh2.style.display = 'block';
                                    cp_rh3.style.display = 'block';
                                    cp_rh4.style.display = 'block';
                                    cp_rh5.style.display = 'block';
                                    cp_rh6.style.display = 'block';
                                    cp_ps1.style.display = 'block';
                                    cp_ps2.style.display = 'block';
                                    cp_ps3.style.display = 'block';
                                    cp_ps4.style.display = 'block';
                                    cp_ps5.style.display = 'block';
                                    cp_ps6.style.display = 'block';
                                    cp_ht1.style.display = 'block';
                                    cp_ht2.style.display = 'block';
                                    cp_ht3.style.display = 'block';
                                    cp_tf1.style.display = 'block';
                                    cp_tf2.style.display = 'block';
                                    cp_tf3.style.display = 'block';
                                    cp_tu1.style.display = 'block';
                                    cp_tu2.style.display = 'block';
                                    cp_tu3.style.display = 'block';
                                    cp_hu1.style.display = 'block';
                                    cp_hu2.style.display = 'block';
                                    cp_hu3.style.display = 'block';
                                    
                                    ut_v1.style.display = 'block';
                                    ut_v2.style.display = 'block';
                                    ut_v3.style.display = 'block';
                                    ut_c1.style.display = 'block';
                                    ut_c2.style.display = 'block';
                                    ut_c3.style.display = 'block';
                                    ut_p1.style.display = 'block';
                                    ut_p2.style.display = 'block';
                                    ut_p3.style.display = 'block';
                                    ut_x1.style.display = 'block';
                                    ut_x2.style.display = 'block';
                                    ut_g1.style.display = 'none';
                                    ut_g2.style.display = 'none';
                                    ut_xx1.style.display = 'none';
                                    ut_xx2.style.display = 'none';
                                    ut_q1.style.display = 'none';
                                    ut_q2.style.display = 'none';
                                    ut_cw1.style.display = 'none';
                                    ut_cw2.style.display = 'none';
                                    ut_d1.style.display = 'block';
                                    ut_d2.style.display = 'block';
                                    ut_t1.style.display = 'block';
                                    ut_t2.style.display = 'block';
                                    ut_cda1.style.display = 'block';
                                    ut_cda2.style.display = 'block';
                                    ut_l1.style.display = 'block';
                                    ut_l2.style.display = 'block';
                                } else if (reltest.value === '008003' || reltest.value === '008004' || reltest.value === '008020') {            // H3T, H3TRB, THB
                                    tab7.style.display = 'block';
                                    tab8.style.display = 'block';
                                    
                                    cp_vr1.style.display = 'block';
                                    cp_vr2.style.display = 'block';
                                    cp_vr3.style.display = 'block';
                                    cp_ct1.style.display = 'block';
                                    cp_ct2.style.display = 'block';
                                    cp_ct3.style.display = 'block';
                                    cp_cr1.style.display = 'block';
                                    cp_cr2.style.display = 'block';
                                    cp_cr3.style.display = 'block';
                                    cp_pw1.style.display = 'block';
                                    cp_pw2.style.display = 'block';
                                    cp_pw3.style.display = 'block';
                                    cp_mt1.style.display = 'none';
                                    cp_mt2.style.display = 'none';
                                    cp_mt3.style.display = 'none';
                                    cp_mt4.style.display = 'none';
                                    cp_mt5.style.display = 'none';
                                    cp_mt6.style.display = 'none';
                                    cp_mtp1.style.display = 'block';
                                    cp_mtp2.style.display = 'block';
                                    cp_mtp3.style.display = 'block';
                                    cp_mtp4.style.display = 'block';
                                    cp_mtp5.style.display = 'block';
                                    cp_mtp6.style.display = 'block';
                                    cp_rh1.style.display = 'block';
                                    cp_rh2.style.display = 'block';
                                    cp_rh3.style.display = 'block';
                                    cp_rh4.style.display = 'block';
                                    cp_rh5.style.display = 'block';
                                    cp_rh6.style.display = 'block';
                                    cp_ps1.style.display = 'none';
                                    cp_ps2.style.display = 'none';
                                    cp_ps3.style.display = 'none';
                                    cp_ps4.style.display = 'none';
                                    cp_ps5.style.display = 'none';
                                    cp_ps6.style.display = 'none';
                                    cp_ht1.style.display = 'block';
                                    cp_ht2.style.display = 'block';
                                    cp_ht3.style.display = 'block';
                                    cp_tf1.style.display = 'block';
                                    cp_tf2.style.display = 'block';
                                    cp_tf3.style.display = 'block';
                                    cp_tu1.style.display = 'block';
                                    cp_tu2.style.display = 'block';
                                    cp_tu3.style.display = 'block';
                                    cp_hu1.style.display = 'block';
                                    cp_hu2.style.display = 'block';
                                    cp_hu3.style.display = 'block';
                                    
                                    ut_v1.style.display = 'block';
                                    ut_v2.style.display = 'block';
                                    ut_v3.style.display = 'block';
                                    ut_c1.style.display = 'block';
                                    ut_c2.style.display = 'block';
                                    ut_c3.style.display = 'block';
                                    ut_p1.style.display = 'block';
                                    ut_p2.style.display = 'block';
                                    ut_p3.style.display = 'block';
                                    ut_x1.style.display = 'block';
                                    ut_x2.style.display = 'block';
                                    ut_g1.style.display = 'none';
                                    ut_g2.style.display = 'none';
                                    ut_xx1.style.display = 'none';
                                    ut_xx2.style.display = 'none';
                                    ut_q1.style.display = 'none';
                                    ut_q2.style.display = 'none';
                                    ut_cw1.style.display = 'none';
                                    ut_cw2.style.display = 'none';
                                    ut_d1.style.display = 'block';
                                    ut_d2.style.display = 'block';
                                    ut_t1.style.display = 'block';
                                    ut_t2.style.display = 'block';
                                    ut_cda1.style.display = 'block';
                                    ut_cda2.style.display = 'block';
                                    ut_l1.style.display = 'block';
                                    ut_l2.style.display = 'block';
                                } else if (reltest.value === '008002' || reltest.value === '008006' || reltest.value === '008007' || reltest.value === '008008' || reltest.value === '008010') {            // ELFR, HTRB, HTGB, HTFB, HTOL
                                    tab7.style.display = 'block';
                                    tab8.style.display = 'block';
                                    
                                    cp_vr1.style.display = 'block';
                                    cp_vr2.style.display = 'block';
                                    cp_vr3.style.display = 'block';
                                    cp_ct1.style.display = 'block';
                                    cp_ct2.style.display = 'block';
                                    cp_ct3.style.display = 'block';
                                    cp_cr1.style.display = 'block';
                                    cp_cr2.style.display = 'block';
                                    cp_cr3.style.display = 'block';
                                    cp_pw1.style.display = 'block';
                                    cp_pw2.style.display = 'block';
                                    cp_pw3.style.display = 'block';
                                    cp_mt1.style.display = 'none';
                                    cp_mt2.style.display = 'none';
                                    cp_mt3.style.display = 'none';
                                    cp_mt4.style.display = 'none';
                                    cp_mt5.style.display = 'none';
                                    cp_mt6.style.display = 'none';
                                    cp_mtp1.style.display = 'block';
                                    cp_mtp2.style.display = 'block';
                                    cp_mtp3.style.display = 'block';
                                    cp_mtp4.style.display = 'block';
                                    cp_mtp5.style.display = 'block';
                                    cp_mtp6.style.display = 'block';
                                    cp_rh1.style.display = 'none';
                                    cp_rh2.style.display = 'none';
                                    cp_rh3.style.display = 'none';
                                    cp_rh4.style.display = 'none';
                                    cp_rh5.style.display = 'none';
                                    cp_rh6.style.display = 'none';
                                    cp_ps1.style.display = 'none';
                                    cp_ps2.style.display = 'none';
                                    cp_ps3.style.display = 'none';
                                    cp_ps4.style.display = 'none';
                                    cp_ps5.style.display = 'none';
                                    cp_ps6.style.display = 'none';
                                    cp_ht1.style.display = 'block';
                                    cp_ht2.style.display = 'block';
                                    cp_ht3.style.display = 'block';
                                    cp_tf1.style.display = 'block';
                                    cp_tf2.style.display = 'block';
                                    cp_tf3.style.display = 'block';
                                    cp_tu1.style.display = 'block';
                                    cp_tu2.style.display = 'block';
                                    cp_tu3.style.display = 'block';
                                    cp_hu1.style.display = 'none';
                                    cp_hu2.style.display = 'none';
                                    cp_hu3.style.display = 'none';
                                    
                                    ut_v1.style.display = 'block';
                                    ut_v2.style.display = 'block';
                                    ut_v3.style.display = 'block';
                                    ut_c1.style.display = 'block';
                                    ut_c2.style.display = 'block';
                                    ut_c3.style.display = 'block';
                                    ut_p1.style.display = 'block';
                                    ut_p2.style.display = 'block';
                                    ut_p3.style.display = 'block';
                                    ut_x1.style.display = 'block';
                                    ut_x2.style.display = 'block';
                                    ut_g1.style.display = 'block';
                                    ut_g2.style.display = 'block';
                                    ut_xx1.style.display = 'block';
                                    ut_xx2.style.display = 'block';
                                    ut_q1.style.display = 'none';
                                    ut_q2.style.display = 'none';
                                    ut_cw1.style.display = 'none';
                                    ut_cw2.style.display = 'none';
                                    ut_d1.style.display = 'none';
                                    ut_d2.style.display = 'none';
                                    ut_t1.style.display = 'none';
                                    ut_t2.style.display = 'none';
                                    ut_cda1.style.display = 'block';
                                    ut_cda2.style.display = 'block';
                                    ut_l1.style.display = 'block';
                                    ut_l2.style.display = 'block';
                                } else if (reltest.value === '008013') {                        // LTOL
                                    tab7.style.display = 'block';
                                    tab8.style.display = 'block';
                                    
                                    cp_vr1.style.display = 'block';
                                    cp_vr2.style.display = 'block';
                                    cp_vr3.style.display = 'block';
                                    cp_ct1.style.display = 'block';
                                    cp_ct2.style.display = 'block';
                                    cp_ct3.style.display = 'block';
                                    cp_cr1.style.display = 'block';
                                    cp_cr2.style.display = 'block';
                                    cp_cr3.style.display = 'block';
                                    cp_pw1.style.display = 'block';
                                    cp_pw2.style.display = 'block';
                                    cp_pw3.style.display = 'block';
                                    cp_mt1.style.display = 'none';
                                    cp_mt2.style.display = 'none';
                                    cp_mt3.style.display = 'none';
                                    cp_mt4.style.display = 'none';
                                    cp_mt5.style.display = 'none';
                                    cp_mt6.style.display = 'none';
                                    cp_mtp1.style.display = 'block';
                                    cp_mtp2.style.display = 'block';
                                    cp_mtp3.style.display = 'block';
                                    cp_mtp4.style.display = 'block';
                                    cp_mtp5.style.display = 'block';
                                    cp_mtp6.style.display = 'block';
                                    cp_rh1.style.display = 'none';
                                    cp_rh2.style.display = 'none';
                                    cp_rh3.style.display = 'none';
                                    cp_rh4.style.display = 'none';
                                    cp_rh5.style.display = 'none';
                                    cp_rh6.style.display = 'none';
                                    cp_ps1.style.display = 'none';
                                    cp_ps2.style.display = 'none';
                                    cp_ps3.style.display = 'none';
                                    cp_ps4.style.display = 'none';
                                    cp_ps5.style.display = 'none';
                                    cp_ps6.style.display = 'none';
                                    cp_ht1.style.display = 'block';
                                    cp_ht2.style.display = 'block';
                                    cp_ht3.style.display = 'block';
                                    cp_tf1.style.display = 'block';
                                    cp_tf2.style.display = 'block';
                                    cp_tf3.style.display = 'block';
                                    cp_tu1.style.display = 'block';
                                    cp_tu2.style.display = 'block';
                                    cp_tu3.style.display = 'block';
                                    cp_hu1.style.display = 'none';
                                    cp_hu2.style.display = 'none';
                                    cp_hu3.style.display = 'none';
                                    
                                    ut_v1.style.display = 'block';
                                    ut_v2.style.display = 'block';
                                    ut_v3.style.display = 'block';
                                    ut_c1.style.display = 'block';
                                    ut_c2.style.display = 'block';
                                    ut_c3.style.display = 'block';
                                    ut_p1.style.display = 'block';
                                    ut_p2.style.display = 'block';
                                    ut_p3.style.display = 'block';
                                    ut_x1.style.display = 'block';
                                    ut_x2.style.display = 'block';
                                    ut_g1.style.display = 'block';
                                    ut_g2.style.display = 'block';
                                    ut_xx1.style.display = 'block';
                                    ut_xx2.style.display = 'block';
                                    ut_q1.style.display = 'none';
                                    ut_q2.style.display = 'none';
                                    ut_cw1.style.display = 'block';
                                    ut_cw2.style.display = 'block';
                                    ut_d1.style.display = 'block';
                                    ut_d2.style.display = 'block';
                                    ut_t1.style.display = 'block';
                                    ut_t2.style.display = 'block';
                                    ut_cda1.style.display = 'block';
                                    ut_cda2.style.display = 'block';
                                    ut_l1.style.display = 'block';
                                    ut_l2.style.display = 'block';
                                } else if (reltest.value === '008018') {                        // SSOL
                                    tab7.style.display = 'block';
                                    tab8.style.display = 'block';
                                    
                                    cp_vr1.style.display = 'block';
                                    cp_vr2.style.display = 'block';
                                    cp_vr3.style.display = 'block';
                                    cp_ct1.style.display = 'block';
                                    cp_ct2.style.display = 'block';
                                    cp_ct3.style.display = 'block';
                                    cp_cr1.style.display = 'block';
                                    cp_cr2.style.display = 'block';
                                    cp_cr3.style.display = 'block';
                                    cp_pw1.style.display = 'block';
                                    cp_pw2.style.display = 'block';
                                    cp_pw3.style.display = 'block';
                                    cp_mt1.style.display = 'none';
                                    cp_mt2.style.display = 'none';
                                    cp_mt3.style.display = 'none';
                                    cp_mt4.style.display = 'none';
                                    cp_mt5.style.display = 'none';
                                    cp_mt6.style.display = 'none';
                                    cp_mtp1.style.display = 'block';
                                    cp_mtp2.style.display = 'block';
                                    cp_mtp3.style.display = 'block';
                                    cp_mtp4.style.display = 'block';
                                    cp_mtp5.style.display = 'block';
                                    cp_mtp6.style.display = 'block';
                                    cp_rh1.style.display = 'none';
                                    cp_rh2.style.display = 'none';
                                    cp_rh3.style.display = 'none';
                                    cp_rh4.style.display = 'none';
                                    cp_rh5.style.display = 'none';
                                    cp_rh6.style.display = 'none';
                                    cp_ps1.style.display = 'none';
                                    cp_ps2.style.display = 'none';
                                    cp_ps3.style.display = 'none';
                                    cp_ps4.style.display = 'none';
                                    cp_ps5.style.display = 'none';
                                    cp_ps6.style.display = 'none';
                                    cp_ht1.style.display = 'none';
                                    cp_ht2.style.display = 'none';
                                    cp_ht3.style.display = 'none';
                                    cp_tf1.style.display = 'block';
                                    cp_tf2.style.display = 'block';
                                    cp_tf3.style.display = 'block';
                                    cp_tu1.style.display = 'block';
                                    cp_tu2.style.display = 'block';
                                    cp_tu3.style.display = 'block';
                                    cp_hu1.style.display = 'none';
                                    cp_hu2.style.display = 'none';
                                    cp_hu3.style.display = 'none';
                                    
                                    ut_v1.style.display = 'block';
                                    ut_v2.style.display = 'block';
                                    ut_v3.style.display = 'block';
                                    ut_c1.style.display = 'block';
                                    ut_c2.style.display = 'block';
                                    ut_c3.style.display = 'block';
                                    ut_p1.style.display = 'block';
                                    ut_p2.style.display = 'block';
                                    ut_p3.style.display = 'block';
                                    ut_x1.style.display = 'block';
                                    ut_x2.style.display = 'block';
                                    ut_g1.style.display = 'none';
                                    ut_g2.style.display = 'none';
                                    ut_xx1.style.display = 'none';
                                    ut_xx2.style.display = 'none';
                                    ut_q1.style.display = 'none';
                                    ut_q2.style.display = 'none';
                                    ut_cw1.style.display = 'none';
                                    ut_cw2.style.display = 'none';
                                    ut_d1.style.display = 'none';
                                    ut_d2.style.display = 'none';
                                    ut_t1.style.display = 'none';
                                    ut_t2.style.display = 'none';
                                    ut_cda1.style.display = 'none';
                                    ut_cda2.style.display = 'none';
                                    ut_l1.style.display = 'block';
                                    ut_l2.style.display = 'block';
                                } else if (reltest.value === '008001' || reltest.value === '008023') {          // AC, UHAST
                                    tab7.style.display = 'none';
                                    tab8.style.display = 'none';
                                    
                                    cp_vr1.style.display = 'none';
                                    cp_vr2.style.display = 'none';
                                    cp_vr3.style.display = 'none';
                                    cp_ct1.style.display = 'none';
                                    cp_ct2.style.display = 'none';
                                    cp_ct3.style.display = 'none';
                                    cp_cr1.style.display = 'none';
                                    cp_cr2.style.display = 'none';
                                    cp_cr3.style.display = 'none';
                                    cp_pw1.style.display = 'none';
                                    cp_pw2.style.display = 'none';
                                    cp_pw3.style.display = 'none';
                                    cp_mt1.style.display = 'none';
                                    cp_mt2.style.display = 'none';
                                    cp_mt3.style.display = 'none';
                                    cp_mt4.style.display = 'none';
                                    cp_mt5.style.display = 'none';
                                    cp_mt6.style.display = 'none';
                                    cp_mtp1.style.display = 'block';
                                    cp_mtp2.style.display = 'block';
                                    cp_mtp3.style.display = 'block';
                                    cp_mtp4.style.display = 'block';
                                    cp_mtp5.style.display = 'block';
                                    cp_mtp6.style.display = 'block';
                                    cp_rh1.style.display = 'block';
                                    cp_rh2.style.display = 'block';
                                    cp_rh3.style.display = 'block';
                                    cp_rh4.style.display = 'block';
                                    cp_rh5.style.display = 'block';
                                    cp_rh6.style.display = 'block';
                                    cp_ps1.style.display = 'block';
                                    cp_ps2.style.display = 'block';
                                    cp_ps3.style.display = 'block';
                                    cp_ps4.style.display = 'block';
                                    cp_ps5.style.display = 'block';
                                    cp_ps6.style.display = 'block';
                                    cp_ht1.style.display = 'block';
                                    cp_ht2.style.display = 'block';
                                    cp_ht3.style.display = 'block';
                                    cp_tf1.style.display = 'block';
                                    cp_tf2.style.display = 'block';
                                    cp_tf3.style.display = 'block';
                                    cp_tu1.style.display = 'block';
                                    cp_tu2.style.display = 'block';
                                    cp_tu3.style.display = 'block';
                                    cp_hu1.style.display = 'block';
                                    cp_hu2.style.display = 'block';
                                    cp_hu3.style.display = 'block';
                                    
                                    ut_v1.style.display = 'block';
                                    ut_v2.style.display = 'block';
                                    ut_v3.style.display = 'block';
                                    ut_c1.style.display = 'block';
                                    ut_c2.style.display = 'block';
                                    ut_c3.style.display = 'block';
                                    ut_p1.style.display = 'block';
                                    ut_p2.style.display = 'block';
                                    ut_p3.style.display = 'block';
                                    ut_x1.style.display = 'block';
                                    ut_x2.style.display = 'block';
                                    ut_g1.style.display = 'none';
                                    ut_g2.style.display = 'none';
                                    ut_xx1.style.display = 'none';
                                    ut_xx2.style.display = 'none';
                                    ut_q1.style.display = 'none';
                                    ut_q2.style.display = 'none';
                                    ut_cw1.style.display = 'none';
                                    ut_cw2.style.display = 'none';
                                    ut_d1.style.display = 'block';
                                    ut_d2.style.display = 'block';
                                    ut_t1.style.display = 'block';
                                    ut_t2.style.display = 'block';
                                    ut_cda1.style.display = 'block';
                                    ut_cda2.style.display = 'block';
                                    ut_l1.style.display = 'block';
                                    ut_l2.style.display = 'block';
                                } else if (reltest.value === '008022') {                        // THU
                                    tab7.style.display = 'none';
                                    tab8.style.display = 'none';
                                    
                                    cp_vr1.style.display = 'none';
                                    cp_vr2.style.display = 'none';
                                    cp_vr3.style.display = 'none';
                                    cp_ct1.style.display = 'none';
                                    cp_ct2.style.display = 'none';
                                    cp_ct3.style.display = 'none';
                                    cp_cr1.style.display = 'none';
                                    cp_cr2.style.display = 'none';
                                    cp_cr3.style.display = 'none';
                                    cp_pw1.style.display = 'none';
                                    cp_pw2.style.display = 'none';
                                    cp_pw3.style.display = 'none';
                                    cp_mt1.style.display = 'none';
                                    cp_mt2.style.display = 'none';
                                    cp_mt3.style.display = 'none';
                                    cp_mt4.style.display = 'none';
                                    cp_mt5.style.display = 'none';
                                    cp_mt6.style.display = 'none';
                                    cp_mtp1.style.display = 'block';
                                    cp_mtp2.style.display = 'block';
                                    cp_mtp3.style.display = 'block';
                                    cp_mtp4.style.display = 'block';
                                    cp_mtp5.style.display = 'block';
                                    cp_mtp6.style.display = 'block';
                                    cp_rh1.style.display = 'block';
                                    cp_rh2.style.display = 'block';
                                    cp_rh3.style.display = 'block';
                                    cp_rh4.style.display = 'block';
                                    cp_rh5.style.display = 'block';
                                    cp_rh6.style.display = 'block';
                                    cp_ps1.style.display = 'block';
                                    cp_ps2.style.display = 'block';
                                    cp_ps3.style.display = 'block';
                                    cp_ps4.style.display = 'block';
                                    cp_ps5.style.display = 'block';
                                    cp_ps6.style.display = 'block';
                                    cp_ht1.style.display = 'block';
                                    cp_ht2.style.display = 'block';
                                    cp_ht3.style.display = 'block';
                                    cp_tf1.style.display = 'block';
                                    cp_tf2.style.display = 'block';
                                    cp_tf3.style.display = 'block';
                                    cp_tu1.style.display = 'block';
                                    cp_tu2.style.display = 'block';
                                    cp_tu3.style.display = 'block';
                                    cp_hu1.style.display = 'block';
                                    cp_hu2.style.display = 'block';
                                    cp_hu3.style.display = 'block';
                                    
                                    ut_v1.style.display = 'block';
                                    ut_v2.style.display = 'block';
                                    ut_v3.style.display = 'block';
                                    ut_c1.style.display = 'block';
                                    ut_c2.style.display = 'block';
                                    ut_c3.style.display = 'block';
                                    ut_p1.style.display = 'block';
                                    ut_p2.style.display = 'block';
                                    ut_p3.style.display = 'block';
                                    ut_x1.style.display = 'block';
                                    ut_x2.style.display = 'block';
                                    ut_g1.style.display = 'block';
                                    ut_g2.style.display = 'block';
                                    ut_xx1.style.display = 'block';
                                    ut_xx2.style.display = 'block';
                                    ut_q1.style.display = 'none';
                                    ut_q2.style.display = 'none';
                                    ut_cw1.style.display = 'none';
                                    ut_cw2.style.display = 'none';
                                    ut_d1.style.display = 'block';
                                    ut_d2.style.display = 'block';
                                    ut_t1.style.display = 'block';
                                    ut_t2.style.display = 'block';
                                    ut_cda1.style.display = 'block';
                                    ut_cda2.style.display = 'block';
                                    ut_l1.style.display = 'block';
                                    ut_l2.style.display = 'block';
                                } else if (reltest.value === '008015') {                        // MSL
                                    tab7.style.display = 'none';
                                    tab8.style.display = 'none';
                                    
                                    cp_vr1.style.display = 'none';
                                    cp_vr2.style.display = 'none';
                                    cp_vr3.style.display = 'none';
                                    cp_ct1.style.display = 'none';
                                    cp_ct2.style.display = 'none';
                                    cp_ct3.style.display = 'none';
                                    cp_cr1.style.display = 'none';
                                    cp_cr2.style.display = 'none';
                                    cp_cr3.style.display = 'none';
                                    cp_pw1.style.display = 'none';
                                    cp_pw2.style.display = 'none';
                                    cp_pw3.style.display = 'none';
                                    cp_mt1.style.display = 'none';
                                    cp_mt2.style.display = 'none';
                                    cp_mt3.style.display = 'none';
                                    cp_mt4.style.display = 'none';
                                    cp_mt5.style.display = 'none';
                                    cp_mt6.style.display = 'none';
                                    cp_mtp1.style.display = 'block';
                                    cp_mtp2.style.display = 'block';
                                    cp_mtp3.style.display = 'block';
                                    cp_mtp4.style.display = 'block';
                                    cp_mtp5.style.display = 'block';
                                    cp_mtp6.style.display = 'block';
                                    cp_rh1.style.display = 'block';
                                    cp_rh2.style.display = 'block';
                                    cp_rh3.style.display = 'block';
                                    cp_rh4.style.display = 'block';
                                    cp_rh5.style.display = 'block';
                                    cp_rh6.style.display = 'block';
                                    cp_ps1.style.display = 'none';
                                    cp_ps2.style.display = 'none';
                                    cp_ps3.style.display = 'none';
                                    cp_ps4.style.display = 'none';
                                    cp_ps5.style.display = 'none';
                                    cp_ps6.style.display = 'none';
                                    cp_ht1.style.display = 'block';
                                    cp_ht2.style.display = 'block';
                                    cp_ht3.style.display = 'block';
                                    cp_tf1.style.display = 'block';
                                    cp_tf2.style.display = 'block';
                                    cp_tf3.style.display = 'block';
                                    cp_tu1.style.display = 'block';
                                    cp_tu2.style.display = 'block';
                                    cp_tu3.style.display = 'block';
                                    cp_hu1.style.display = 'block';
                                    cp_hu2.style.display = 'block';
                                    cp_hu3.style.display = 'block';
                                    
                                    ut_v1.style.display = 'block';
                                    ut_v2.style.display = 'block';
                                    ut_v3.style.display = 'block';
                                    ut_c1.style.display = 'block';
                                    ut_c2.style.display = 'block';
                                    ut_c3.style.display = 'block';
                                    ut_p1.style.display = 'block';
                                    ut_p2.style.display = 'block';
                                    ut_p3.style.display = 'block';
                                    ut_x1.style.display = 'block';
                                    ut_x2.style.display = 'block';
                                    ut_g1.style.display = 'none';
                                    ut_g2.style.display = 'none';
                                    ut_xx1.style.display = 'none';
                                    ut_xx2.style.display = 'none';
                                    ut_q1.style.display = 'none';
                                    ut_q2.style.display = 'none';
                                    ut_cw1.style.display = 'none';
                                    ut_cw2.style.display = 'none';
                                    ut_d1.style.display = 'block';
                                    ut_d2.style.display = 'block';
                                    ut_t1.style.display = 'block';
                                    ut_t2.style.display = 'block';
                                    ut_cda1.style.display = 'block';
                                    ut_cda2.style.display = 'block';
                                    ut_l1.style.display = 'block';
                                    ut_l2.style.display = 'block';
                                } else if (reltest.value === '008017') {                        // RTHS
                                    tab7.style.display = 'none';
                                    tab8.style.display = 'none';
                                    
                                    cp_vr1.style.display = 'none';
                                    cp_vr2.style.display = 'none';
                                    cp_vr3.style.display = 'none';
                                    cp_ct1.style.display = 'none';
                                    cp_ct2.style.display = 'none';
                                    cp_ct3.style.display = 'none';
                                    cp_cr1.style.display = 'none';
                                    cp_cr2.style.display = 'none';
                                    cp_cr3.style.display = 'none';
                                    cp_pw1.style.display = 'none';
                                    cp_pw2.style.display = 'none';
                                    cp_pw3.style.display = 'none';
                                    cp_mt1.style.display = 'none';
                                    cp_mt2.style.display = 'none';
                                    cp_mt3.style.display = 'none';
                                    cp_mt4.style.display = 'none';
                                    cp_mt5.style.display = 'none';
                                    cp_mt6.style.display = 'none';
                                    cp_mtp1.style.display = 'block';
                                    cp_mtp2.style.display = 'block';
                                    cp_mtp3.style.display = 'block';
                                    cp_mtp4.style.display = 'block';
                                    cp_mtp5.style.display = 'block';
                                    cp_mtp6.style.display = 'block';
                                    cp_rh1.style.display = 'block';
                                    cp_rh2.style.display = 'block';
                                    cp_rh3.style.display = 'block';
                                    cp_rh4.style.display = 'block';
                                    cp_rh5.style.display = 'block';
                                    cp_rh6.style.display = 'block';
                                    cp_ps1.style.display = 'none';
                                    cp_ps2.style.display = 'none';
                                    cp_ps3.style.display = 'none';
                                    cp_ps4.style.display = 'none';
                                    cp_ps5.style.display = 'none';
                                    cp_ps6.style.display = 'none';
                                    cp_ht1.style.display = 'block';
                                    cp_ht2.style.display = 'block';
                                    cp_ht3.style.display = 'block';
                                    cp_tf1.style.display = 'block';
                                    cp_tf2.style.display = 'block';
                                    cp_tf3.style.display = 'block';
                                    cp_tu1.style.display = 'block';
                                    cp_tu2.style.display = 'block';
                                    cp_tu3.style.display = 'block';
                                    cp_hu1.style.display = 'block';
                                    cp_hu2.style.display = 'block';
                                    cp_hu3.style.display = 'block';
                                    
                                    ut_v1.style.display = 'block';
                                    ut_v2.style.display = 'block';
                                    ut_v3.style.display = 'block';
                                    ut_c1.style.display = 'block';
                                    ut_c2.style.display = 'block';
                                    ut_c3.style.display = 'block';
                                    ut_p1.style.display = 'block';
                                    ut_p2.style.display = 'block';
                                    ut_p3.style.display = 'block';
                                    ut_x1.style.display = 'block';
                                    ut_x2.style.display = 'block';
                                    ut_g1.style.display = 'block';
                                    ut_g2.style.display = 'block';
                                    ut_xx1.style.display = 'block';
                                    ut_xx2.style.display = 'block';
                                    ut_q1.style.display = 'none';
                                    ut_q2.style.display = 'none';
                                    ut_cw1.style.display = 'none';
                                    ut_cw2.style.display = 'none';
                                    ut_d1.style.display = 'block';
                                    ut_d2.style.display = 'block';
                                    ut_t1.style.display = 'block';
                                    ut_t2.style.display = 'block';
                                    ut_cda1.style.display = 'block';
                                    ut_cda2.style.display = 'block';
                                    ut_l1.style.display = 'block';
                                    ut_l2.style.display = 'block';
                                } else if (reltest.value === '008021') {                        // THS
                                    tab7.style.display = 'none';
                                    tab8.style.display = 'none';
                                    
                                    cp_vr1.style.display = 'none';
                                    cp_vr2.style.display = 'none';
                                    cp_vr3.style.display = 'none';
                                    cp_ct1.style.display = 'none';
                                    cp_ct2.style.display = 'none';
                                    cp_ct3.style.display = 'none';
                                    cp_cr1.style.display = 'none';
                                    cp_cr2.style.display = 'none';
                                    cp_cr3.style.display = 'none';
                                    cp_pw1.style.display = 'none';
                                    cp_pw2.style.display = 'none';
                                    cp_pw3.style.display = 'none';
                                    cp_mt1.style.display = 'none';
                                    cp_mt2.style.display = 'none';
                                    cp_mt3.style.display = 'none';
                                    cp_mt4.style.display = 'none';
                                    cp_mt5.style.display = 'none';
                                    cp_mt6.style.display = 'none';
                                    cp_mtp1.style.display = 'block';
                                    cp_mtp2.style.display = 'block';
                                    cp_mtp3.style.display = 'block';
                                    cp_mtp4.style.display = 'block';
                                    cp_mtp5.style.display = 'block';
                                    cp_mtp6.style.display = 'block';
                                    cp_rh1.style.display = 'block';
                                    cp_rh2.style.display = 'block';
                                    cp_rh3.style.display = 'block';
                                    cp_rh4.style.display = 'block';
                                    cp_rh5.style.display = 'block';
                                    cp_rh6.style.display = 'block';
                                    cp_ps1.style.display = 'none';
                                    cp_ps2.style.display = 'none';
                                    cp_ps3.style.display = 'none';
                                    cp_ps4.style.display = 'none';
                                    cp_ps5.style.display = 'none';
                                    cp_ps6.style.display = 'none';
                                    cp_ht1.style.display = 'block';
                                    cp_ht2.style.display = 'block';
                                    cp_ht3.style.display = 'block';
                                    cp_tf1.style.display = 'block';
                                    cp_tf2.style.display = 'block';
                                    cp_tf3.style.display = 'block';
                                    cp_tu1.style.display = 'block';
                                    cp_tu2.style.display = 'block';
                                    cp_tu3.style.display = 'block';
                                    cp_hu1.style.display = 'block';
                                    cp_hu2.style.display = 'block';
                                    cp_hu3.style.display = 'block';
                                    
                                    ut_v1.style.display = 'block';
                                    ut_v2.style.display = 'block';
                                    ut_v3.style.display = 'block';
                                    ut_c1.style.display = 'block';
                                    ut_c2.style.display = 'block';
                                    ut_c3.style.display = 'block';
                                    ut_p1.style.display = 'block';
                                    ut_p2.style.display = 'block';
                                    ut_p3.style.display = 'block';
                                    ut_x1.style.display = 'block';
                                    ut_x2.style.display = 'block';
                                    ut_g1.style.display = 'block';
                                    ut_g2.style.display = 'block';
                                    ut_xx1.style.display = 'block';
                                    ut_xx2.style.display = 'block';
                                    ut_q1.style.display = 'none';
                                    ut_q2.style.display = 'none';
                                    ut_cw1.style.display = 'block';
                                    ut_cw2.style.display = 'block';
                                    ut_d1.style.display = 'block';
                                    ut_d2.style.display = 'block';
                                    ut_t1.style.display = 'block';
                                    ut_t2.style.display = 'block';
                                    ut_cda1.style.display = 'block';
                                    ut_cda2.style.display = 'block';
                                    ut_l1.style.display = 'block';
                                    ut_l2.style.display = 'block';
                                } else if (reltest.value === '008009') {                        // HTHS
                                    tab7.style.display = 'none';
                                    tab8.style.display = 'none';
                                    
                                    cp_vr1.style.display = 'none';
                                    cp_vr2.style.display = 'none';
                                    cp_vr3.style.display = 'none';
                                    cp_ct1.style.display = 'none';
                                    cp_ct2.style.display = 'none';
                                    cp_ct3.style.display = 'none';
                                    cp_cr1.style.display = 'none';
                                    cp_cr2.style.display = 'none';
                                    cp_cr3.style.display = 'none';
                                    cp_pw1.style.display = 'none';
                                    cp_pw2.style.display = 'none';
                                    cp_pw3.style.display = 'none';
                                    cp_mt1.style.display = 'none';
                                    cp_mt2.style.display = 'none';
                                    cp_mt3.style.display = 'none';
                                    cp_mt4.style.display = 'none';
                                    cp_mt5.style.display = 'none';
                                    cp_mt6.style.display = 'none';
                                    cp_mtp1.style.display = 'block';
                                    cp_mtp2.style.display = 'block';
                                    cp_mtp3.style.display = 'block';
                                    cp_mtp4.style.display = 'block';
                                    cp_mtp5.style.display = 'block';
                                    cp_mtp6.style.display = 'block';
                                    cp_rh1.style.display = 'none';
                                    cp_rh2.style.display = 'none';
                                    cp_rh3.style.display = 'none';
                                    cp_rh4.style.display = 'none';
                                    cp_rh5.style.display = 'none';
                                    cp_rh6.style.display = 'none';
                                    cp_ps1.style.display = 'none';
                                    cp_ps2.style.display = 'none';
                                    cp_ps3.style.display = 'none';
                                    cp_ps4.style.display = 'none';
                                    cp_ps5.style.display = 'none';
                                    cp_ps6.style.display = 'none';
                                    cp_ht1.style.display = 'block';
                                    cp_ht2.style.display = 'block';
                                    cp_ht3.style.display = 'block';
                                    cp_tf1.style.display = 'block';
                                    cp_tf2.style.display = 'block';
                                    cp_tf3.style.display = 'block';
                                    cp_tu1.style.display = 'block';
                                    cp_tu2.style.display = 'block';
                                    cp_tu3.style.display = 'block';
                                    cp_hu1.style.display = 'none';
                                    cp_hu2.style.display = 'none';
                                    cp_hu3.style.display = 'none';
                                    
                                    ut_v1.style.display = 'block';
                                    ut_v2.style.display = 'block';
                                    ut_v3.style.display = 'block';
                                    ut_c1.style.display = 'block';
                                    ut_c2.style.display = 'block';
                                    ut_c3.style.display = 'block';
                                    ut_p1.style.display = 'block';
                                    ut_p2.style.display = 'block';
                                    ut_p3.style.display = 'block';
                                    ut_x1.style.display = 'block';
                                    ut_x2.style.display = 'block';
                                    ut_g1.style.display = 'block';
                                    ut_g2.style.display = 'block';
                                    ut_xx1.style.display = 'block';
                                    ut_xx2.style.display = 'block';
                                    ut_q1.style.display = 'none';
                                    ut_q2.style.display = 'none';
                                    ut_cw1.style.display = 'none';
                                    ut_cw2.style.display = 'none';
                                    ut_d1.style.display = 'block';
                                    ut_d2.style.display = 'block';
                                    ut_t1.style.display = 'block';
                                    ut_t2.style.display = 'block';
                                    ut_cda1.style.display = 'block';
                                    ut_cda2.style.display = 'block';
                                    ut_l1.style.display = 'block';
                                    ut_l2.style.display = 'block';
                                } else if (reltest.value === '008011') {                        // HTSL
                                    tab7.style.display = 'none';
                                    tab8.style.display = 'none';
                                    
                                    cp_vr1.style.display = 'none';
                                    cp_vr2.style.display = 'none';
                                    cp_vr3.style.display = 'none';
                                    cp_ct1.style.display = 'none';
                                    cp_ct2.style.display = 'none';
                                    cp_ct3.style.display = 'none';
                                    cp_cr1.style.display = 'none';
                                    cp_cr2.style.display = 'none';
                                    cp_cr3.style.display = 'none';
                                    cp_pw1.style.display = 'none';
                                    cp_pw2.style.display = 'none';
                                    cp_pw3.style.display = 'none';
                                    cp_mt1.style.display = 'none';
                                    cp_mt2.style.display = 'none';
                                    cp_mt3.style.display = 'none';
                                    cp_mt4.style.display = 'none';
                                    cp_mt5.style.display = 'none';
                                    cp_mt6.style.display = 'none';
                                    cp_mtp1.style.display = 'block';
                                    cp_mtp2.style.display = 'block';
                                    cp_mtp3.style.display = 'block';
                                    cp_mtp4.style.display = 'block';
                                    cp_mtp5.style.display = 'block';
                                    cp_mtp6.style.display = 'block';
                                    cp_rh1.style.display = 'none';
                                    cp_rh2.style.display = 'none';
                                    cp_rh3.style.display = 'none';
                                    cp_rh4.style.display = 'none';
                                    cp_rh5.style.display = 'none';
                                    cp_rh6.style.display = 'none';
                                    cp_ps1.style.display = 'none';
                                    cp_ps2.style.display = 'none';
                                    cp_ps3.style.display = 'none';
                                    cp_ps4.style.display = 'none';
                                    cp_ps5.style.display = 'none';
                                    cp_ps6.style.display = 'none';
                                    cp_ht1.style.display = 'block';
                                    cp_ht2.style.display = 'block';
                                    cp_ht3.style.display = 'block';
                                    cp_tf1.style.display = 'block';
                                    cp_tf2.style.display = 'block';
                                    cp_tf3.style.display = 'block';
                                    cp_tu1.style.display = 'block';
                                    cp_tu2.style.display = 'block';
                                    cp_tu3.style.display = 'block';
                                    cp_hu1.style.display = 'none';
                                    cp_hu2.style.display = 'none';
                                    cp_hu3.style.display = 'none';
                                    
                                    ut_v1.style.display = 'block';
                                    ut_v2.style.display = 'block';
                                    ut_v3.style.display = 'block';
                                    ut_c1.style.display = 'block';
                                    ut_c2.style.display = 'block';
                                    ut_c3.style.display = 'block';
                                    ut_p1.style.display = 'block';
                                    ut_p2.style.display = 'block';
                                    ut_p3.style.display = 'block';
                                    ut_x1.style.display = 'block';
                                    ut_x2.style.display = 'block';
                                    ut_g1.style.display = 'block';
                                    ut_g2.style.display = 'block';
                                    ut_xx1.style.display = 'block';
                                    ut_xx2.style.display = 'block';
                                    ut_q1.style.display = 'none';
                                    ut_q2.style.display = 'none';
                                    ut_cw1.style.display = 'none';
                                    ut_cw2.style.display = 'none';
                                    ut_d1.style.display = 'none';
                                    ut_d2.style.display = 'none';
                                    ut_t1.style.display = 'none';
                                    ut_t2.style.display = 'none';
                                    ut_cda1.style.display = 'block';
                                    ut_cda2.style.display = 'block';
                                    ut_l1.style.display = 'block';
                                    ut_l2.style.display = 'block';
                                } else if (reltest.value === '008014') {                        // LTSL
                                    tab7.style.display = 'none';
                                    tab8.style.display = 'none';
                                    
                                    cp_vr1.style.display = 'none';
                                    cp_vr2.style.display = 'none';
                                    cp_vr3.style.display = 'none';
                                    cp_ct1.style.display = 'none';
                                    cp_ct2.style.display = 'none';
                                    cp_ct3.style.display = 'none';
                                    cp_cr1.style.display = 'none';
                                    cp_cr2.style.display = 'none';
                                    cp_cr3.style.display = 'none';
                                    cp_pw1.style.display = 'none';
                                    cp_pw2.style.display = 'none';
                                    cp_pw3.style.display = 'none';
                                    cp_mt1.style.display = 'none';
                                    cp_mt2.style.display = 'none';
                                    cp_mt3.style.display = 'none';
                                    cp_mt4.style.display = 'none';
                                    cp_mt5.style.display = 'none';
                                    cp_mt6.style.display = 'none';
                                    cp_mtp1.style.display = 'block';
                                    cp_mtp2.style.display = 'block';
                                    cp_mtp3.style.display = 'block';
                                    cp_mtp4.style.display = 'block';
                                    cp_mtp5.style.display = 'block';
                                    cp_mtp6.style.display = 'block';
                                    cp_rh1.style.display = 'none';
                                    cp_rh2.style.display = 'none';
                                    cp_rh3.style.display = 'none';
                                    cp_rh4.style.display = 'none';
                                    cp_rh5.style.display = 'none';
                                    cp_rh6.style.display = 'none';
                                    cp_ps1.style.display = 'none';
                                    cp_ps2.style.display = 'none';
                                    cp_ps3.style.display = 'none';
                                    cp_ps4.style.display = 'none';
                                    cp_ps5.style.display = 'none';
                                    cp_ps6.style.display = 'none';
                                    cp_ht1.style.display = 'block';
                                    cp_ht2.style.display = 'block';
                                    cp_ht3.style.display = 'block';
                                    cp_tf1.style.display = 'block';
                                    cp_tf2.style.display = 'block';
                                    cp_tf3.style.display = 'block';
                                    cp_tu1.style.display = 'block';
                                    cp_tu2.style.display = 'block';
                                    cp_tu3.style.display = 'block';
                                    cp_hu1.style.display = 'none';
                                    cp_hu2.style.display = 'none';
                                    cp_hu3.style.display = 'none';
                                    
                                    ut_v1.style.display = 'block';
                                    ut_v2.style.display = 'block';
                                    ut_v3.style.display = 'block';
                                    ut_c1.style.display = 'block';
                                    ut_c2.style.display = 'block';
                                    ut_c3.style.display = 'block';
                                    ut_p1.style.display = 'block';
                                    ut_p2.style.display = 'block';
                                    ut_p3.style.display = 'block';
                                    ut_x1.style.display = 'block';
                                    ut_x2.style.display = 'block';
                                    ut_g1.style.display = 'block';
                                    ut_g2.style.display = 'block';
                                    ut_xx1.style.display = 'block';
                                    ut_xx2.style.display = 'block';
                                    ut_q1.style.display = 'none';
                                    ut_q2.style.display = 'none';
                                    ut_cw1.style.display = 'block';
                                    ut_cw2.style.display = 'block';
                                    ut_d1.style.display = 'block';
                                    ut_d2.style.display = 'block';
                                    ut_t1.style.display = 'block';
                                    ut_t2.style.display = 'block';
                                    ut_cda1.style.display = 'block';
                                    ut_cda2.style.display = 'block';
                                    ut_l1.style.display = 'block';
                                    ut_l2.style.display = 'block';
                                } else if (reltest.value === '008019') {                        // TC
                                    tab7.style.display = 'none';
                                    tab8.style.display = 'none';
                                    
                                    cp_vr1.style.display = 'none';
                                    cp_vr2.style.display = 'none';
                                    cp_vr3.style.display = 'none';
                                    cp_ct1.style.display = 'none';
                                    cp_ct2.style.display = 'none';
                                    cp_ct3.style.display = 'none';
                                    cp_cr1.style.display = 'none';
                                    cp_cr2.style.display = 'none';
                                    cp_cr3.style.display = 'none';
                                    cp_pw1.style.display = 'none';
                                    cp_pw2.style.display = 'none';
                                    cp_pw3.style.display = 'none';
                                    cp_mt1.style.display = 'none';
                                    cp_mt2.style.display = 'none';
                                    cp_mt3.style.display = 'none';
                                    cp_mt4.style.display = 'none';
                                    cp_mt5.style.display = 'none';
                                    cp_mt6.style.display = 'none';
                                    cp_mtp1.style.display = 'block';
                                    cp_mtp2.style.display = 'block';
                                    cp_mtp3.style.display = 'block';
                                    cp_mtp4.style.display = 'block';
                                    cp_mtp5.style.display = 'block';
                                    cp_mtp6.style.display = 'block';
                                    cp_rh1.style.display = 'none';
                                    cp_rh2.style.display = 'none';
                                    cp_rh3.style.display = 'none';
                                    cp_rh4.style.display = 'none';
                                    cp_rh5.style.display = 'none';
                                    cp_rh6.style.display = 'none';
                                    cp_ps1.style.display = 'none';
                                    cp_ps2.style.display = 'none';
                                    cp_ps3.style.display = 'none';
                                    cp_ps4.style.display = 'none';
                                    cp_ps5.style.display = 'none';
                                    cp_ps6.style.display = 'none';
                                    cp_ht1.style.display = 'block';
                                    cp_ht2.style.display = 'block';
                                    cp_ht3.style.display = 'block';
                                    cp_tf1.style.display = 'block';
                                    cp_tf2.style.display = 'block';
                                    cp_tf3.style.display = 'block';
                                    cp_tu1.style.display = 'block';
                                    cp_tu2.style.display = 'block';
                                    cp_tu3.style.display = 'block';
                                    cp_hu1.style.display = 'none';
                                    cp_hu2.style.display = 'none';
                                    cp_hu3.style.display = 'none';
                                    
                                    ut_v1.style.display = 'block';
                                    ut_v2.style.display = 'block';
                                    ut_v3.style.display = 'block';
                                    ut_c1.style.display = 'block';
                                    ut_c2.style.display = 'block';
                                    ut_c3.style.display = 'block';
                                    ut_p1.style.display = 'block';
                                    ut_p2.style.display = 'block';
                                    ut_p3.style.display = 'block';
                                    ut_x1.style.display = 'block';
                                    ut_x2.style.display = 'block';
                                    ut_g1.style.display = 'block';
                                    ut_g2.style.display = 'block';
                                    ut_xx1.style.display = 'block';
                                    ut_xx2.style.display = 'block';
                                    ut_q1.style.display = 'block';
                                    ut_q2.style.display = 'block';
                                    ut_cw1.style.display = 'block';
                                    ut_cw2.style.display = 'block';
                                    ut_d1.style.display = 'none';
                                    ut_d2.style.display = 'none';
                                    ut_t1.style.display = 'none';
                                    ut_t2.style.display = 'none';
                                    ut_cda1.style.display = 'block';
                                    ut_cda2.style.display = 'block';
                                    ut_l1.style.display = 'block';
                                    ut_l2.style.display = 'block';
                                } else {
                                    tab7.style.display = 'block';
                                    tab8.style.display = 'block';
                                    
                                    cp_vr1.style.display = 'block';
                                    cp_vr2.style.display = 'block';
                                    cp_vr3.style.display = 'block';
                                    cp_ct1.style.display = 'block';
                                    cp_ct2.style.display = 'block';
                                    cp_ct3.style.display = 'block';
                                    cp_cr1.style.display = 'block';
                                    cp_cr2.style.display = 'block';
                                    cp_cr3.style.display = 'block';
                                    cp_pw1.style.display = 'block';
                                    cp_pw2.style.display = 'block';
                                    cp_pw3.style.display = 'block';
                                    cp_mt1.style.display = 'block';
                                    cp_mt2.style.display = 'block';
                                    cp_mt3.style.display = 'block';
                                    cp_mt4.style.display = 'block';
                                    cp_mt5.style.display = 'block';
                                    cp_mt6.style.display = 'block';
                                    cp_mtp1.style.display = 'block';
                                    cp_mtp2.style.display = 'block';
                                    cp_mtp3.style.display = 'block';
                                    cp_mtp4.style.display = 'block';
                                    cp_mtp5.style.display = 'block';
                                    cp_mtp6.style.display = 'block';
                                    cp_rh1.style.display = 'block';
                                    cp_rh2.style.display = 'block';
                                    cp_rh3.style.display = 'block';
                                    cp_rh4.style.display = 'block';
                                    cp_rh5.style.display = 'block';
                                    cp_rh6.style.display = 'block';
                                    cp_ps1.style.display = 'block';
                                    cp_ps2.style.display = 'block';
                                    cp_ps3.style.display = 'block';
                                    cp_ps4.style.display = 'block';
                                    cp_ps5.style.display = 'block';
                                    cp_ps6.style.display = 'block';
                                    cp_ht1.style.display = 'block';
                                    cp_ht2.style.display = 'block';
                                    cp_ht3.style.display = 'block';
                                    cp_tf1.style.display = 'block';
                                    cp_tf2.style.display = 'block';
                                    cp_tf3.style.display = 'block';
                                    cp_tu1.style.display = 'block';
                                    cp_tu2.style.display = 'block';
                                    cp_tu3.style.display = 'block';
                                    cp_hu1.style.display = 'block';
                                    cp_hu2.style.display = 'block';
                                    cp_hu3.style.display = 'block';
                                    
                                    ut_v1.style.display = 'block';
                                    ut_v2.style.display = 'block';
                                    ut_v3.style.display = 'block';
                                    ut_c1.style.display = 'block';
                                    ut_c2.style.display = 'block';
                                    ut_c3.style.display = 'block';
                                    ut_p1.style.display = 'block';
                                    ut_p2.style.display = 'block';
                                    ut_p3.style.display = 'block';
                                    ut_x1.style.display = 'block';
                                    ut_x2.style.display = 'block';
                                    ut_g1.style.display = 'block';
                                    ut_g2.style.display = 'block';
                                    ut_xx1.style.display = 'block';
                                    ut_xx2.style.display = 'block';
                                    ut_q1.style.display = 'block';
                                    ut_q2.style.display = 'block';
                                    ut_cw1.style.display = 'block';
                                    ut_cw2.style.display = 'block';
                                    ut_d1.style.display = 'block';
                                    ut_d2.style.display = 'block';
                                    ut_t1.style.display = 'block';
                                    ut_t2.style.display = 'block';
                                    ut_cda1.style.display = 'block';
                                    ut_cda2.style.display = 'block';
                                    ut_l1.style.display = 'block';
                                    ut_l2.style.display = 'block';
                                }
                            }
                        </script>
                    </div>

                    <div class="tab-content" id="tabCpbl">
                        <div class="row">
                            <div class="two columns"><label for="volt_rating" id="labelvoltrating1">Voltage Rating *</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="volt_rating" name="volt_rating" value="<?php echo $rowForm['eqpt_volt_rating']; ?>" > </div>
                            <div class="one columns"><label for="volt_rating" id="labelvoltrating2" style="text-align: left"><b>V</b></label></div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="volt_control" id="labelcoltcontrol1">Voltage Control Accuracy *</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="volt_control" name="volt_control" value="<?php echo $rowForm['volt_control_accuracy']; ?>" > </div>
                            <div class="one columns"><label for="volt_control" id="labelcoltcontrol2" style="text-align: left"><b>%</b></label></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="curr_rating" id="labelcurrrating1">Current Rating *</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="curr_rating" name="curr_rating" value="<?php echo $rowForm['current_rating']; ?>" > </div>
                            <div class="one columns"><label for="curr_rating" id="labelcurrrating2" style="text-align: left"><b>A</b></label></div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="power_rating" id="labelpowerrating1">Power Rating *</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="power_rating" name="power_rating" value="<?php echo $rowForm['power_rating']; ?>" > </div>
                            <div class="one columns"><label for="power_rating" id="labelpowerrating2" style="text-align: left"><b>W</b></label></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="min_time" id="labelmintimer1">Min. Timer Setting *</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="min_time" name="min_time" value="<?php echo $rowForm['min_time_setting']; ?>" > </div>
                            <div class="one columns"><label for="min_time" id="labelmintimer2" style="text-align: left"><b>s</b></label></div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="max_time" id="labelmaxtimer1">Max. Timer Setting *</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="max_time" name="max_time" value="<?php echo $rowForm['max_time_setting']; ?>" > </div>
                            <div class="one columns"><label for="max_time" id="labelmaxtimer2" style="text-align: left"><b>s</b></label></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="min_temp" id="labelmintemp1">Min. Temperature *</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="min_temp" name="min_temp" value="<?php echo $rowForm['min_temp']; ?>" > </div>
                            <div class="one columns"><label for="min_temp" id="labelmintemp2" style="text-align: left"><b>&#176;C</b></label></div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="max_temp" id="labelmaxtemp1">Max. Temperature *</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="max_temp" name="max_temp" value="<?php echo $rowForm['max_temp']; ?>" > </div>
                            <div class="one columns"><label for="max_temp" id="labelmaxtemp2" style="text-align: left"><b>&#176;C</b></label></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="minRh" id="labelminrh1">Min. RH *</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="minRh" name="minRh" value="<?php echo $rowForm['min_rh']; ?>" > </div>
                            <div class="one columns"><label for="minRh" id="labelminrh2" style="text-align: left"><b>%</b></label></div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="maxRh" id="labelmaxrh1">Max. RH *</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="maxRh" name="maxRh" value="<?php echo $rowForm['max_rh']; ?>" > </div>
                            <div class="one columns"><label for="maxRh" id="labelmaxrh2" style="text-align: left"><b>%</b></label></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="min_pressure" id="labelminpressure1">Minimum Pressure *</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="min_pressure" name="min_pressure" value="<?php echo $rowForm['min_pressure']; ?>" > </div>
                            <div class="one columns"><label for="min_pressure" id="labelminpressure2" style="text-align: left"><b>psi</b></label></div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="max_pressure" id="labelmaxpressure1">Maximum Pressure *</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="max_pressure" name="max_pressure" value="<?php echo $rowForm['max_pressure']; ?>" > </div>
                            <div class="one columns"><label for="max_pressure" id="labelmaxpressure2" style="text-align: left"><b>psi</b></label></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="heat_dissipation" id="labelheat1">Heat Dissipation *</label></div>
                            <div class="two columns"><input type="text" id="heat_dissipation" name="heat_dissipation" value="<?php echo $rowForm['heat_dissipation']; ?>" > </div>
                            <div class="two columns"><label for="heat_dissipation" id="labelheat2" style="text-align: left"><b>W</b></label></div>
                            <div class="two columns" id="labeltempfluc1">
                                <label for="temp_fluctuation">Temperature Fluctuation *</label>
                                <label for="toggle_01" class="view-image">Image</label>
                                <input type="checkbox" id="toggle_01">
                                <dialog>
                                    <label for="toggle_01" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                                    <img id="myImg" src="../image/equipment/001.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                </dialog>
                            </div>
                            <div class="two columns">
                                <input type="number" step="0.001" id="temp_fluctuation" name="temp_fluctuation" value="<?php echo $rowForm['temp_fluctuation']; ?>" >
                                </div>
                            <div class="one columns"><label for="temp_fluctuation" id="labeltempfluc2" style="text-align: left"><b>&#176;C</b></label></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns" id="labeltempuniform1">
                                <label for="temp_uniform">Temperature Uniformity *</label>
                                <label for="toggle_02" class="view-image">Image</label>
                                <input type="checkbox" id="toggle_02">
                                <dialog>
                                    <label for="toggle_02" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                                    <img id="myImg" src="../image/equipment/002.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                </dialog>
                            </div>
                            <div class="two columns"><input type="number" step="0.001" id="temp_uniform" name="temp_uniform" value="<?php echo $rowForm['temp_uniformity']; ?>" ></div>
                            <div class="one columns"><label for="temp_uniform" id="labeltempuniform2" style="text-align: left"><b>&#176;C</b></label></div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns" id="labelhumid1">
                                <label for="humid_fluctuation">Humidity Fluctuation *</label>
                                <label for="toggle_03" class="view-image">Image</label>
                                <input type="checkbox" id="toggle_03">
                                <dialog>
                                    <label for="toggle_03" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                                    <img id="myImg" src="../image/equipment/003.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                </dialog>
                            </div>
                            <div class="two columns"><input type="number" step="0.001" id="humid_fluctuation" name="humid_fluctuation" value="<?php echo $rowForm['humid_fluctuation']; ?>" > </div>
                            <div class="one columns"><label for="humid_fluctuation" id="labelhumid2" style="text-align: left"><b>%</b></label></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                    </div>

                    <div class="tab-content" id="tabCrtr">
                        <div class="row">
                            <div class="two columns">
                                <label for="no_interior">No. Interior Zones (doors) *</label>
                                <label for="toggle_06" class="view-image">Image</label>
                                <input type="checkbox" id="toggle_06">
                                <dialog>
                                    <label for="toggle_06" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                                    <img id="myImg" src="../image/equipment/006.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                </dialog>
                            </div>
                            <div class="two columns"><input type="number" step="0.001" id="no_interior" name="no_interior" value="<?php echo $rowForm['no_interior_zone']; ?>" > </div>
                            <div class="one columns"><label for="no_interior" style="text-align: left"><b>Zone</b></label></div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns">
                                <label for="ext_dimension_w">External Dimension (W) *</label>
                                <label for="toggle_04" class="view-image">Image</label>
                                <input type="checkbox" id="toggle_04">
                                <dialog>
                                    <label for="toggle_04" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                                    <img id="myImg" src="../image/equipment/004.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                </dialog>
                            </div>
                            <div class="two columns"><input type="number" step="0.001" id="ext_dimension_w" name="ext_dimension_w" value="<?php echo $rowForm['ext_dimension_w']; ?>" > </div>
                            <div class="one columns"><label for="ext_dimension_w" style="text-align: left"><b>mm</b></label></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns">
                                <label for="int_volume">Internal Volume *</label>
                                <label for="toggle_08" class="view-image">Image</label>
                                <input type="checkbox" id="toggle_08">
                                <dialog>
                                    <label for="toggle_08" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                                    <img id="myImg" src="../image/equipment/008.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                </dialog>
                            </div>
                            <div class="two columns"><input type="number" step="0.001" id="int_volume" name="int_volume" value="<?php echo $rowForm['int_vol']; ?>" > </div>
                            <div class="one columns"><label for="int_volume" style="text-align: left"><b>L</b></label></div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="ext_dimension_d">(D) *</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="ext_dimension_d" name="ext_dimension_d" value="<?php echo $rowForm['ext_dimension_d']; ?>" > </div>
                            <div class="one columns"><label for="ext_dimension_d" style="text-align: left"><b>mm</b></label></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns">
                                <label for="board_orientation">Board Orientation*</label>
                                <label for="toggle_09" class="view-image">Image</label>
                                <input type="checkbox" id="toggle_09">
                                <dialog>
                                    <label for="toggle_09" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                                    <img id="myImg" src="../image/equipment/009.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                </dialog>
                            </div>
                            <div class="three columns">
                                <select id="board_orientation" name="board_orientation" style="width: 100%" >
                                    <option value="" selected=""></option>
                                    <?php
                                    $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '015' ORDER BY code ASC";
                                    $resSite = mysqli_query($con, $sqlDdSite);
                                    while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                        <option value="<?php echo $rowSite['code']; ?>" <?php if ($rowSite['code'] === $rowForm['board_orientation']) { ?>selected<?php } ?>><?php echo $rowSite['name']; ?></option>
                                    <?php endwhile; ?>
                                </select>
                            </div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="ext_dimension_h">(H) *</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="ext_dimension_h" name="ext_dimension_h" value="<?php echo $rowForm['ext_dimension_h']; ?>" > </div>
                            <div class="one columns"><label for="ext_dimension_h" style="text-align: left"><b>mm</b></label></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="rack_material">Rack Material *</label></div>
                            <div class="three columns">
                                <select id="rack_material" name="rack_material" style="width: 100%" >
                                    <option value="" selected=""></option>
                                    <?php
                                    $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '016' ORDER BY code ASC";
                                    $resSite = mysqli_query($con, $sqlDdSite);
                                    while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                        <option value="<?php echo $rowSite['code']; ?>" <?php if ($rowSite['code'] === $rowForm['rack_material']) { ?>selected<?php } ?>><?php echo $rowSite['name']; ?></option>
                                    <?php endwhile; ?>
                                </select>
                            </div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns">
                                <label for="int_dimension_w">Internal Dimension (W) *</label>
                                <label for="toggle_05" class="view-image">Image</label>
                                <input type="checkbox" id="toggle_05">
                                <dialog>
                                    <label for="toggle_05" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                                    <img id="myImg" src="../image/equipment/005.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                </dialog>
                            </div>
                            <div class="two columns"><input type="number" step="0.001" id="int_dimension_w" name="int_dimension_w" value="<?php echo $rowForm['int_dimension_w']; ?>" > </div>
                            <div class="one columns"><label for="int_dimension_w" style="text-align: left"><b>mm</b></label></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns">
                                <label for="rack_slot_pitch">Rack Slot-to-Slot Pitch *</label>
                                <label for="toggle_10" class="view-image">Image</label>
                                <input type="checkbox" id="toggle_10">
                                <dialog>
                                    <label for="toggle_10" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                                    <img id="myImg" src="../image/equipment/010.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                </dialog>
                            </div>
                            <div class="two columns"><input type="number" step="0.001" id="rack_slot_pitch" name="rack_slot_pitch" value="<?php echo $rowForm['rack_slot_pitch']; ?>" ></div>
                            <div class="one columns"><label for="rack_slot_pitch" style="text-align: left"><b>mm</b></label></div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="int_dimension_d">(D) *</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="int_dimension_d" name="int_dimension_d" value="<?php echo $rowForm['int_dimension_d']; ?>" > </div>
                            <div class="one columns"><label for="int_dimension_d" style="text-align: left"><b>mm</b></label></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns">
                                <label for="rack_slot_width">Rack Slot Width *</label>
                                <label for="toggle_11" class="view-image">Image</label>
                                <input type="checkbox" id="toggle_11">
                                <dialog>
                                    <label for="toggle_11" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                                    <img id="myImg" src="../image/equipment/011.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                </dialog>
                            </div>
                            <div class="two columns"><input type="number" step="0.001" id="rack_slot_width" name="rack_slot_width" value="<?php echo $rowForm['rack_slot_width']; ?>" > </div>
                            <div class="one columns"><label for="rack_slot_width" style="text-align: left"><b>mm</b></label></div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="int_dimension_h">(H) *</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="int_dimension_h" name="int_dimension_h" value="<?php echo $rowForm['int_dimension_h']; ?>" > </div>
                            <div class="one columns"><label for="int_dimension_h" style="text-align: left"><b>mm</b></label></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="eqpt_weight">Equipment Weight *</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="eqpt_weight" name="eqpt_weight" value="<?php echo $rowForm['eqpt_weight']; ?>" > </div>
                            <div class="one columns"><label for="eqpt_weight" style="text-align: left"><b>Kg</b></label></div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns">
                                <label for="rack_dimension_w">Rack Dimension (W) *</label>
                                <label for="toggle_07" class="view-image">Image</label>
                                <input type="checkbox" id="toggle_07">
                                <dialog>
                                    <label for="toggle_07" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                                    <img id="myImg" src="../image/equipment/007.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                </dialog>
                            </div>
                            <div class="two columns"><input type="number" step="0.001" id="rack_dimension_w" name="rack_dimension_w" value="<?php echo $rowForm['rack_dimension_w']; ?>" > </div>
                            <div class="one columns"><label for="rack_dimension_w" style="text-align: left"><b>mm</b></label></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns">
                                <label for="no_mb_slot">Number of motherboard slots *</label>
                                <label for="toggle_12" class="view-image">Image</label>
                                <input type="checkbox" id="toggle_12">
                                <dialog>
                                    <label for="toggle_12" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                                    <img id="myImg" src="../image/equipment/012.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                </dialog>
                            </div>
                            <div class="two columns"><input type="number" step="0.001" id="no_mb_slot" name="no_mb_slot" value="<?php echo $rowForm['no_mb_slot']; ?>" ></div>
                            <div class="one columns"><label for="no_mb_slot" style="text-align: left"><b>Slot</b></label></div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="rack_dimension_d">(D) *</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="rack_dimension_d" name="rack_dimension_d" value="<?php echo $rowForm['rack_dimension_d']; ?>" > </div>
                            <div class="one columns"><label for="rack_dimension_d" style="text-align: left"><b>mm</b></label></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns">
                                <label for="max_ps_bs">Max number of power supplies per board slot *</label>
                                <label for="toggle_13" class="view-image">Image</label>
                                <input type="checkbox" id="toggle_13">
                                <dialog>
                                    <label for="toggle_13" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                                    <img id="myImg" src="../image/equipment/013.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                </dialog>
                            </div>
                            <div class="two columns"><input type="number" step="0.001" id="max_ps_bs" name="max_ps_bs" value="<?php echo $rowForm['max_ps_slot']; ?>" > </div>
                            <div class="one columns"><label for="max_ps_bs" style="text-align: left"><b>Slot</b></label></div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="rack_dimension_h">(H) *</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="rack_dimension_h" name="rack_dimension_h" value="<?php echo $rowForm['rack_dimension_h']; ?>" > </div>
                            <div class="one columns"><label for="rack_dimension_h" style="text-align: left"><b>mm</b></label></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns">
                                <label for="max_ps">Max number of power supplies for the entire Equipment *</label>
                                <label for="toggle_14" class="view-image">Image</label>
                                <input type="checkbox" id="toggle_14">
                                <dialog>
                                    <label for="toggle_14" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                                    <img id="myImg" src="../image/equipment/014.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                </dialog>
                            </div>
                            <div class="two columns"><input type="number" step="0.001" id="max_ps" name="max_ps" value="<?php echo $rowForm['max_ps_eqpt']; ?>" > </div>
                            <div class="one columns"><label for="max_ps" style="text-align: left"><b>Unit</b></label></div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="diameter">Diameter *</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="diameter" name="diameter" value="<?php echo $rowForm['diameter']; ?>" > </div>
                            <div class="one columns"><label for="diameter" style="text-align: left"><b>mm</b></label></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns">
                                <label for="airflow">Airflow *</label>
                                <label for="toggle_15" class="view-image">Image</label>
                                <input type="checkbox" id="toggle_15">
                                <dialog>
                                    <label for="toggle_15" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                                    <img id="myImg" src="../image/equipment/015.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                </dialog>
                            </div>
                            <div class="three columns">
                                <select id="airflow" name="airflow" style="width: 100%" >
                                    <option value="" selected=""></option>
                                    <?php
                                    $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '017' ORDER BY code ASC";
                                    $resSite = mysqli_query($con, $sqlDdSite);
                                    while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                        <option value="<?php echo $rowSite['code']; ?>" <?php if ($rowSite['code'] === $rowForm['airflow']) { ?>selected<?php } ?>><?php echo $rowSite['name']; ?></option>
                                    <?php endwhile; ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="tab-content" id="tabSafe">
                        <div class="row">
                            <div class="two columns"><label for="tempProtection1">Temperature Protection 1 *</label></div>
                            <div class="three columns">
                                <select id="tempProtection1" name="tempProtection1" style="width: 100%" >
                                    <option value="" selected=""></option>
                                    <?php
                                    $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '022' ORDER BY code ASC";
                                    $resSite = mysqli_query($con, $sqlDdSite);
                                    while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                        <option value="<?php echo $rowSite['code']; ?>" <?php if ($rowSite['code'] === $rowForm['temp_protection_1']) { ?>selected<?php } ?>><?php echo $rowSite['name']; ?></option>
                                    <?php endwhile; ?>
                                </select>
                            </div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="tempProtection2">Temperature Protection 2 *</label></div>
                            <div class="three columns">
                                <select id="tempProtection2" name="tempProtection2" style="width: 100%" >
                                    <option value="" selected=""></option>
                                    <?php
                                    $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '022' ORDER BY code ASC";
                                    $resSite = mysqli_query($con, $sqlDdSite);
                                    while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                        <option value="<?php echo $rowSite['code']; ?>" <?php if ($rowSite['code'] === $rowForm['temp_protection_2']) { ?>selected<?php } ?>><?php echo $rowSite['name']; ?></option>
                                    <?php endwhile; ?>
                                </select>
                            </div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="tempThermostat3">Temperature Protection / Thermostat 3 *</label></div>
                            <div class="three columns">
                                <select id="tempThermostat3" name="tempThermostat3" style="width: 100%" >
                                    <option value="" selected=""></option>
                                    <?php
                                    $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '022' ORDER BY code ASC";
                                    $resSite = mysqli_query($con, $sqlDdSite);
                                    while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                        <option value="<?php echo $rowSite['code']; ?>" <?php if ($rowSite['code'] === $rowForm['temp_protection_3']) { ?>selected<?php } ?>><?php echo $rowSite['name']; ?></option>
                                    <?php endwhile; ?>
                                </select>
                            </div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="smoke_detector">Smoke Detector/Alarm *</label></div>
                            <div class="three columns">
                                <select id="smoke_detector" name="smoke_detector" style="width: 100%" >
                                    <option value="" selected=""></option>
                                    <?php
                                    $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '022' ORDER BY code ASC";
                                    $resSite = mysqli_query($con, $sqlDdSite);
                                    while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                        <option value="<?php echo $rowSite['code']; ?>" <?php if ($rowSite['code'] === $rowForm['smoke_alarm']) { ?>selected<?php } ?>><?php echo $rowSite['name']; ?></option>
                                    <?php endwhile; ?>
                                </select>
                            </div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="press_switch">Pressure Switch *</label></div>
                            <div class="three columns">
                                <select id="press_switch" name="press_switch" style="width: 100%" >
                                    <option value="" selected=""></option>
                                    <?php
                                    $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '022' ORDER BY code ASC";
                                    $resSite = mysqli_query($con, $sqlDdSite);
                                    while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                        <option value="<?php echo $rowSite['code']; ?>" <?php if ($rowSite['code'] === $rowForm['pressure_switch']) { ?>selected<?php } ?>><?php echo $rowSite['name']; ?></option>
                                    <?php endwhile; ?>
                                </select>
                            </div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="safety_valve">Safety Valve *</label></div>
                            <div class="three columns">
                                <select id="safety_valve" name="safety_valve" style="width: 100%" >
                                    <option value="" selected=""></option>
                                    <?php
                                    $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '022' ORDER BY code ASC";
                                    $resSite = mysqli_query($con, $sqlDdSite);
                                    while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                        <option value="<?php echo $rowSite['code']; ?>" <?php if ($rowSite['code'] === $rowForm['safety_valve']) { ?>selected<?php } ?>><?php echo $rowSite['name']; ?></option>
                                    <?php endwhile; ?>
                                </select>
                            </div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="emo">EMO button *</label></div>
                            <div class="three columns">
                                <select id="emo" name="emo" style="width: 100%" >
                                    <option value="" selected=""></option>
                                    <?php
                                    $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '022' ORDER BY code ASC";
                                    $resSite = mysqli_query($con, $sqlDdSite);
                                    while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                        <option value="<?php echo $rowSite['code']; ?>" <?php if ($rowSite['code'] === $rowForm['emo_btn']) { ?>selected<?php } ?>><?php echo $rowSite['name']; ?></option>
                                    <?php endwhile; ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="tab-content" id="tabUtlt">
                        <div class="row">
                            <div class="two columns"><label for="voltage" id="labelvoltage1">Voltage *</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="voltage" name="voltage" value="<?php echo $rowForm['voltage']; ?>" > </div>
                            <div class="one columns"><label for="voltage" id="labelvoltage2" style="text-align: left"><b>V</b></label></div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="phase" id="labelphase1">Phase *</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="phase" name="phase" value="<?php echo $rowForm['phase']; ?>" > </div>
                            <div class="one columns"><label for="phase" id="labelphase2" style="text-align: left"><b>Phase</b></label></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="current" id="labelcurrent1">Current *</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="current" name="current" value="<?php echo $rowForm['current']; ?>" > </div>
                            <div class="one columns"><label for="current" id="labelcurrent2" style="text-align: left"><b>A</b></label></div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="exhaust" id="labelexhaust">Exhaust *</label></div>
                            <div class="three columns">
                                <select id="exhaust" name="exhaust" style="width: 100%" >
                                    <option value="" selected=""></option>
                                    <?php
                                    $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '028' ORDER BY code ASC";
                                    $resSite = mysqli_query($con, $sqlDdSite);
                                    while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                        <option value="<?php echo $rowSite['code']; ?>" <?php if ($rowSite['code'] === $rowForm['exhaust']) { ?>selected<?php } ?>><?php echo $rowSite['name']; ?></option>
                                    <?php endwhile; ?>
                                </select>
                            </div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="chilled_water" id="labelchill">Chilled Water *</label></div>
                            <div class="three columns">
                                <select id="chilled_water" name="chilled_water" style="width: 100%">
                                    <option value="" selected=""></option>
                                    <?php
                                    $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '022' ORDER BY code ASC";
                                    $resSite = mysqli_query($con, $sqlDdSite);
                                    while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                        <option value="<?php echo $rowSite['code']; ?>" <?php if ($rowSite['code'] === $rowForm['chilled_water']) { ?>selected<?php } ?>><?php echo $rowSite['name']; ?></option>
                                    <?php endwhile; ?>
                                </select>
                            </div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="liquid_nitrogen" id="labelliquid">Liquid Nitrogen *</label></div>
                            <div class="three columns">
                                <select id="liquid_nitrogen" name="liquid_nitrogen" style="width: 100%" >
                                    <option value="" selected=""></option>
                                    <?php
                                    $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '022' ORDER BY code ASC";
                                    $resSite = mysqli_query($con, $sqlDdSite);
                                    while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                        <option value="<?php echo $rowSite['code']; ?>" <?php if ($rowSite['code'] === $rowForm['liquid_nitrogen']) { ?>selected<?php } ?>><?php echo $rowSite['name']; ?></option>
                                    <?php endwhile; ?>
                                </select>
                            </div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="lan" id="labellan">LAN *</label></div>
                            <div class="three columns">
                                <select id="lan" name="lan" style="width: 100%">
                                    <option value="" selected=""></option>
                                    <?php
                                    $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '021' ORDER BY code ASC";
                                    $resSite = mysqli_query($con, $sqlDdSite);
                                    while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                        <option value="<?php echo $rowSite['code']; ?>" <?php if ($rowSite['code'] === $rowForm['lan']) { ?>selected<?php } ?>><?php echo $rowSite['name']; ?></option>
                                    <?php endwhile; ?>
                                </select>
                            </div>
                            <div class="one columns" >&nbsp;</div>
                            <div class="two columns"><label for="cda" id="labelcda">CDA *</label></div>
                            <div class="three columns">
                                <select id="cda" name="cda" style="width: 100%" >
                                    <option value="" selected=""></option>
                                    <?php
                                    $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '021' ORDER BY code ASC";
                                    $resSite = mysqli_query($con, $sqlDdSite);
                                    while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                        <option value="<?php echo $rowSite['code']; ?>" <?php if ($rowSite['code'] === $rowForm['cda']) { ?>selected<?php } ?>><?php echo $rowSite['name']; ?></option>
                                    <?php endwhile; ?>
                                </select>
                            </div>
                            <div class="one columns" >&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="n2gas" id="labelgas">N2 Gas *</label></div>
                            <div class="three columns">
                                <select id="n2gas" name="n2gas" style="width: 100%" onchange="updateGas()">
                                    <option value="" selected=""></option>
                                    <?php
                                    $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '022' ORDER BY code ASC";
                                    $resSite = mysqli_query($con, $sqlDdSite);
                                    while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                        <option value="<?php echo $rowSite['code']; ?>" <?php if ($rowSite['code'] === $rowForm['n2_gas']) { ?>selected<?php } ?>><?php echo $rowSite['name']; ?></option>
                                    <?php endwhile; ?>
                                </select>
                            </div>
                            <div class="one columns" >&nbsp;</div>
                            <div class="two columns"><label for="oxygen_level" id="labelexygen">Oxygen Level Detector *</label></div>
                            <div class="three columns">
                                <select id="oxygen_level" name="oxygen_level" style="width: 100%">
                                    <option value="" selected=""></option>
                                    <?php
                                    $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '022' ORDER BY code ASC";
                                    $resSite = mysqli_query($con, $sqlDdSite);
                                    while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                        <option value="<?php echo $rowSite['code']; ?>" <?php if ($rowSite['code'] === $rowForm['oxygen_level_detector']) { ?>selected<?php } ?>><?php echo $rowSite['name']; ?></option>
                                    <?php endwhile; ?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="di_water" id="labeldiwater">DI Water *</label></div>
                            <div class="three columns">
                                <select id="di_water" name="di_water" style="width: 100%" onchange="updateToFieldWater()">
                                    <option value="" selected=""></option>
                                    <?php
                                    $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '022' ORDER BY code ASC";
                                    $resSite = mysqli_query($con, $sqlDdSite);
                                    while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                        <option value="<?php echo $rowSite['code']; ?>" <?php if ($rowSite['code'] === $rowForm['di_water']) { ?>selected<?php } ?>><?php echo $rowSite['name']; ?></option>
                                    <?php endwhile; ?>
                                </select>
                            </div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="water_topup" id="labeltopup">Water Top-up System *</label></div>
                            <div class="three columns">
                                <select id="water_topup" name="water_topup" style="width: 100%">
                                    <option value="" selected=""></option>
                                    <?php
                                    $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '030' ORDER BY code ASC";
                                    $resSite = mysqli_query($con, $sqlDdSite);
                                    while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                        <option value="<?php echo $rowSite['code']; ?>" <?php if ($rowSite['code'] === $rowForm['water_topup_system']) { ?>selected<?php } ?>><?php echo $rowSite['name']; ?></option>
                                    <?php endwhile; ?>
                                </select>
                            </div>
                            </div>
                        </div>

                        <script>
                            function updateGas() {
                                var diWaterDropdown = document.getElementById('n2gas');
                                var oxyField = document.getElementById('oxygen_level');
                                var oxylabel = document.getElementById('labelexygen');

                                if (diWaterDropdown.value !== '022003') {
                                    oxyField.readOnly = true;
                                    oxyField.required = false;
                                    $("#oxygen_level").val('');
                                    oxylabel.style.display = 'none';
                                    oxyField.style.display = 'none';
                                } else {
                                    oxyField.readOnly = false;
                                    oxyField.required = true;
                                    oxylabel.style.display = 'block';
                                    oxyField.style.display = 'block';
                                }
                            }
                            function updateToFieldWater() {
                                var diWaterDropdown = document.getElementById('di_water');
                                var waterField = document.getElementById('water_topup');
                                var topapField = document.getElementById('labeltopup');

                                if (diWaterDropdown.value !== '022003') {
                                    waterField.readOnly = true;
                                    waterField.required = false;
                                    waterField.style.display = 'none';
                                    topapField.style.display = 'none';
                                    $("#water_topup").val('');
                                } else {
                                    waterField.readOnly = false;
                                    waterField.required = true;
                                    waterField.style.display = 'block';
                                    topapField.style.display = 'block';
                                }
                            }
                        </script>
                    </div>

                    <div class="tab-content" id="tabDaq">
                        <div class="row">
                            <div class="two columns"><label for="daq">DAQ (Realtime Leakage Monitoring) *</label></div>
                            <div class="three columns">
                                <select id="daq" name="daq" style="width: 100%">
                                    <option value="" selected=""></option>
                                    <?php
                                    $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '021' ORDER BY code ASC";
                                    $resSite = mysqli_query($con, $sqlDdSite);
                                    while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                        <option value="<?php echo $rowSite['code']; ?>" <?php if ($rowSite['code'] === $rowForm['daq']) { ?>selected<?php } ?>><?php echo $rowSite['name']; ?></option>
                                    <?php endwhile; ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="tab-content" id="tabInt">
                        <div class="row">
                            <div class="two columns">
                                <label for="int_config_type">Configuration Type *</label>
                                <label for="toggle_16" class="view-image">Image</label>
                                <input type="checkbox" id="toggle_16">
                                <dialog>
                                    <label for="toggle_16" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                                    <img id="myImg" src="../image/equipment/016.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                </dialog>
                            </div>
                            <div class="three columns">
                                <select id="int_config_type" name="int_config_type" style="width: 100%" onchange="updateDiv()">
                                    <option value="" selected=""></option>
                                    <?php
                                    $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '031' ORDER BY code ASC";
                                    $resSite = mysqli_query($con, $sqlDdSite);
                                    while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                        <option value="<?php echo $rowSite['code']; ?>" <?php if ($rowSite['code'] === $rowForm['internal_config_type']) { ?>selected<?php } ?>><?php echo $rowSite['name']; ?></option>
                                    <?php endwhile; ?>
                                </select>
                            </div>
                        </div>
                        
                        <div class="row" id="divvoltcurrent">
                            <div class="two columns"><label for="conn_volt_rating">Connector Voltage Rating *</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="conn_volt_rating" name="conn_volt_rating" value="<?php echo $rowForm['conn_volt_rating']; ?>" > </div>
                            <div class="one columns"><label for="conn_volt_rating" style="text-align: left"><b>V</b></label></div>
                            <div class="one columns">
                                <label for="toggle_17" class="view-image">Image</label>
                                <input type="checkbox" id="toggle_17">
                                <dialog>
                                    <label for="toggle_17" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                                    <img id="myImg" src="../image/equipment/017.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                </dialog>
                            </div>
                            <div class="two columns"><label for="conn_curr_rating">Connector Current Rating *</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="conn_curr_rating" name="conn_curr_rating" value="<?php echo $rowForm['conn_current_rating']; ?>" > </div>
                            <div class="one columns"><label for="conn_curr_rating" style="text-align: left"><b>A</b></label></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="conn_temp_rating" id="labelconntemprate1">Connector Temp Rating *</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="conn_temp_rating" name="conn_temp_rating" value="<?php echo $rowForm['conn_temp_rating']; ?>" > </div>
                            <div class="one columns"><label for="conn_temp_rating" id="labelconntemprate2" style="text-align: left"><b>&#176;C</b></label></div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="banana_jack_hole" id="labelbananajack1">No. Banana Jack Holes *</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="banana_jack_hole" name="banana_jack_hole" value="<?php echo $rowForm['no_banana_jack_hole']; ?>" > </div>
                            <div class="one columns"><label for="banana_jack_hole" id="labelbananajack2" style="text-align: left"><b>Pins</b></label></div>
                        </div>
                        <div class="row" id="divPin">
                            <div class="two columns"><label for="no_pins">No. of Pins *</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="no_pins" name="no_pins" value="<?php echo $rowForm['no_pin']; ?>" > </div>
                            <div class="one columns"><label for="no_pins" style="text-align: left"><b>Pins</b></label></div>
                            <div class="one columns">
                                <label for="toggle_18" class="view-image">Image</label>
                                <input type="checkbox" id="toggle_18">
                                <dialog>
                                    <label for="toggle_18" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                                    <img id="myImg" src="../image/equipment/018.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                </dialog>
                            </div>
                            <div class="two columns"><label for="pin_pitch">Pin Pitch *</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="pin_pitch" name="pin_pitch" value="<?php echo $rowForm['pin_pitch']; ?>" > </div>
                            <div class="one columns"><label for="pin_pitch" style="text-align: left"><b>mm</b></label></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row" id="divconrack">
                            <div class="two columns"><label for="conn_rack">No. Wires Connected to Rack *</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="conn_rack" name="conn_rack" value="<?php echo $rowForm['no_wire_conn_rack']; ?>" > </div>
                            <div class="one columns"><label for="conn_rack" style="text-align: left"><b>&#176;C</b></label></div>
                        </div>
                        <div class="row" id="WireDiv" name="WireDiv"" style="display: none;">
                            <div class="row">
                                <div class="two columns"><label for="wire_volt_rating">Wire Voltage Rating *</label></div>
                                <div class="two columns"><input type="number" step="0.001" id="wire_volt_rating" name="wire_volt_rating" value="<?php echo $rowForm['wire_volt_rating']; ?>" > </div>
                                <div class="one columns"><label for="wire_volt_rating" style="text-align: left"><b>V</b></label></div>
                                <div class="one columns">&nbsp;</div>
                                <div class="two columns"><label for="wire_curr_rating">Wire Current Rating *</label></div>
                                <div class="two columns"><input type="number" step="0.001" id="wire_curr_rating" name="wire_curr_rating" value="<?php echo $rowForm['wire_curr_rating']; ?>" > </div>
                                <div class="one columns"><label for="wire_curr_rating" style="text-align: left"><b>A</b></label></div>
                                <div class="one columns">&nbsp;</div>
                            </div>
                            <div class="row">
                                <div class="two columns"><label for="wire_temp_rating">Wire Temp Rating *</label></div>
                                <div class="two columns"><input type="number" step="0.001" id="wire_temp_rating" name="wire_temp_rating" value="<?php echo $rowForm['wire_temp_rating']; ?>" > </div>
                                <div class="one columns"><label for="wire_temp_rating" style="text-align: left"><b>&#176;C</b></label></div>
                            </div>
                        </div>

                        <script>
                            function updateDiv() {
                                var dropdown = document.getElementById('int_config_type');
                                var selectedValue = dropdown.value;
                                
                                var div01 = document.getElementById('divvoltcurrent');
                                var ic_t1 = document.getElementById('labelconntemprate1');
                                var ic_t2 = document.getElementById('labelconntemprate2');
                                var ic_t3 = document.getElementById('conn_temp_rating');
                                var ic_j1 = document.getElementById('labelbananajack1');
                                var ic_j2 = document.getElementById('labelbananajack2');
                                var ic_j3 = document.getElementById('banana_jack_hole');
                                var div03 = document.getElementById('divPin');
                                var div04 = document.getElementById('divconrack');
                                var div05 = document.getElementById('WireDiv');

                                $("#conn_volt_rating").val('');
                                $("#conn_curr_rating").val('');
                                $("#conn_temp_rating").val('');
                                $("#banana_jack_hole").val('');
                                $("#no_pins").val('');
                                $("#pin_pitch").val('');
                                $("#conn_rack").val('');
                                $("#wire_volt_rating").val('');
                                $("#wire_curr_rating").val('');
                                $("#wire_temp_rating").val('');

                                if (selectedValue === '031001') {               // Banana
                                    div01.style.display = 'block';
                                    ic_t1.style.display = 'block';
                                    ic_t2.style.display = 'block';
                                    ic_t3.style.display = 'block';
                                    ic_j1.style.display = 'block';
                                    ic_j2.style.display = 'block';
                                    ic_j3.style.display = 'block';
                                    div03.style.display = 'none';
                                    div04.style.display = 'none';
                                    div05.style.display = 'none';
                                } else if (selectedValue === '031002') {        // Edge
                                    div01.style.display = 'block';
                                    ic_t1.style.display = 'block';
                                    ic_t2.style.display = 'block';
                                    ic_t3.style.display = 'block';
                                    ic_j1.style.display = 'none';
                                    ic_j2.style.display = 'none';
                                    ic_j3.style.display = 'none';
                                    div03.style.display = 'block';
                                    div04.style.display = 'none';
                                    div05.style.display = 'none';
                                } else if (selectedValue === '031003') {        // Winchester
                                    div01.style.display = 'block';
                                    ic_t1.style.display = 'none';
                                    ic_t2.style.display = 'none';
                                    ic_t3.style.display = 'none';
                                    ic_j1.style.display = 'none';
                                    ic_j2.style.display = 'none';
                                    ic_j3.style.display = 'none';
                                    div03.style.display = 'block';
                                    div04.style.display = 'block';
                                    div05.style.display = 'none';
                                } else if (selectedValue === '031004') {        // Wire
                                    div01.style.display = 'none';
                                    ic_t1.style.display = 'none';
                                    ic_t2.style.display = 'none';
                                    ic_t3.style.display = 'none';
                                    ic_j1.style.display = 'none';
                                    ic_j2.style.display = 'none';
                                    ic_j3.style.display = 'none';
                                    div03.style.display = 'none';
                                    div04.style.display = 'none';
                                    div05.style.display = 'block';
                                } else {
                                    div01.style.display = 'none';
                                    ic_t1.style.display = 'none';
                                    ic_t2.style.display = 'none';
                                    ic_t3.style.display = 'none';
                                    ic_j1.style.display = 'none';
                                    ic_j2.style.display = 'none';
                                    ic_j3.style.display = 'none';
                                    div03.style.display = 'none';
                                    div04.style.display = 'none';
                                    div05.style.display = 'none';
                                }
                            }
                        </script>
                    </div>

                    <div class="tab-content" id="tabExt">
                        <div class="row">
                            <div class="two columns">
                                <label for="ext_config_type">Configuration Type *</label>
                                <label for="toggle_20" class="view-image">Image</label>
                                <input type="checkbox" id="toggle_20">
                                <dialog>
                                    <label for="toggle_20" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                                    <img id="myImg" src="../image/equipment/020.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                </dialog>
                            </div>
                            <div class="three columns">
                                <select id="ext_config_type" name="ext_config_type" style="width: 100%" onchange="updateView()">
                                    <option value="" selected=""></option>
                                    <?php
                                    $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '032' ORDER BY code ASC";
                                    $resSite = mysqli_query($con, $sqlDdSite);
                                    while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                        <option value="<?php echo $rowSite['code']; ?>" <?php if ($rowSite['code'] === $rowForm['ext_config_type']) { ?>selected<?php } ?>><?php echo $rowSite['name']; ?></option>
                                    <?php endwhile; ?>
                                </select>
                            </div>
                        </div>
                        <div class="row" id="viewExternalDiv" name="viewExternalDiv" style="display: none;">
                            <div class="row">
                                <div class="two columns"><label for="interface_volt_rating">Interface Voltage Rating *</label></div>
                                <div class="two columns"><input type="number" step="0.001" id="interface_volt_rating" name="interface_volt_rating" value="<?php echo $rowForm['interface_volt_rating']; ?>" > </div>
                                <div class="one columns"><label for="interface_volt_rating" style="text-align: left"><b>V</b></label></div>
                                <div class="one columns">&nbsp;</div>
                                <div class="two columns"><label for="interface_curr_rating">Interface Current Rating *</label></div>
                                <div class="two columns"><input type="number" step="0.001" id="interface_curr_rating" name="interface_curr_rating" value="<?php echo $rowForm['interface_current_rating']; ?>" > </div>
                                <div class="one columns"><label for="interface_curr_rating" style="text-align: left"><b>A</b></label></div>
                                <div class="one columns">&nbsp;</div>
                            </div>
                        </div>
                        <script>
                            function updateView() {
                                var dd = document.getElementById('ext_config_type');
                                var extDiv = document.getElementById('viewExternalDiv');
                                var selectedValue = dd.value;

                                $("#interface_volt_rating").val('');
                                $("#interface_curr_rating").val('');

                                // 032003 - NA
                                // 032005 - Not Applicable
                                // 032006 - Unknown
                                if (selectedValue === '032003' || selectedValue === '032005' || selectedValue === '032006') {
                                    extDiv.style.display = 'none';
                                } else {
                                    extDiv.style.display = 'block';
                                }
                            }
                        </script>
                    </div>
                </div>
            
            <?php endwhile; ?>
            <button type="submit" id="draft-button" class="btn"><i class='bx bx-send bx-fw' ></i> DRAFT</button>
            <button type="submit" id="save-button" class="btn"><i class='bx bx-send bx-fw' ></i> SAVE</button>
            <button onclick="location.href = '../list/list_equipment.php'" type="button" id="listBtn" class="btn"><i class='bx bx-list-ol bx-fw' ></i>List</button>
        </form>

        <script>
            const tabs = document.getElementById('tabs');
            const tabContents = document.querySelectorAll('.tab-content');
            const form = document.getElementById('update_equipment_form');
            const draftButton = document.getElementById('draft-button');
            const saveButton = document.getElementById('save-button');
            
            var transfer = document.getElementById('new_transfer');
            var reltest = document.getElementById('relTest');
            var inputfrom = document.getElementById('from');
            var labelfrom = document.getElementById('fromLabel');
            
            var tab7 = document.getElementById('tb07');
            var tab8 = document.getElementById('tb08');
            
            var cp_vr1 = document.getElementById('labelvoltrating1');
            var cp_vr2 = document.getElementById('labelvoltrating2');
            var cp_vr3 = document.getElementById('volt_rating');
            var cp_ct1 = document.getElementById('labelcoltcontrol1');
            var cp_ct2 = document.getElementById('labelcoltcontrol2');
            var cp_ct3 = document.getElementById('volt_control');
            var cp_cr1 = document.getElementById('labelcurrrating1');
            var cp_cr2 = document.getElementById('labelcurrrating2');
            var cp_cr3 = document.getElementById('curr_rating');
            var cp_pw1 = document.getElementById('labelpowerrating1');
            var cp_pw2 = document.getElementById('labelpowerrating2');
            var cp_pw3 = document.getElementById('power_rating');
            var cp_mt1 = document.getElementById('labelmintimer1');
            var cp_mt2 = document.getElementById('labelmintimer2');
            var cp_mt3 = document.getElementById('min_time');
            var cp_mt4 = document.getElementById('labelmaxtimer1');
            var cp_mt5 = document.getElementById('labelmaxtimer2');
            var cp_mt6 = document.getElementById('max_time');
            var cp_mtp1 = document.getElementById('labelmintemp1');
            var cp_mtp2 = document.getElementById('labelmintemp2');
            var cp_mtp3 = document.getElementById('min_temp');
            var cp_mtp4 = document.getElementById('labelmaxtemp1');
            var cp_mtp5 = document.getElementById('labelmaxtemp2');
            var cp_mtp6 = document.getElementById('max_temp');
            var cp_rh1 = document.getElementById('labelminrh1');
            var cp_rh2 = document.getElementById('labelminrh2');
            var cp_rh3 = document.getElementById('minRh');
            var cp_rh4 = document.getElementById('labelmaxrh1');
            var cp_rh5 = document.getElementById('labelmaxrh2');
            var cp_rh6 = document.getElementById('maxRh');
            var cp_ps1 = document.getElementById('labelminpressure1');
            var cp_ps2 = document.getElementById('labelminpressure2');
            var cp_ps3 = document.getElementById('min_pressure');
            var cp_ps4 = document.getElementById('labelmaxpressure1');
            var cp_ps5 = document.getElementById('labelmaxpressure2');
            var cp_ps6 = document.getElementById('max_pressure');
            var cp_ht1 = document.getElementById('labelheat1');
            var cp_ht2 = document.getElementById('labelheat2');
            var cp_ht3 = document.getElementById('heat_dissipation');
            var cp_tf1 = document.getElementById('labeltempfluc1');
            var cp_tf2 = document.getElementById('labeltempfluc2');
            var cp_tf3 = document.getElementById('temp_fluctuation');
            var cp_tu1 = document.getElementById('labeltempuniform1');
            var cp_tu2 = document.getElementById('labeltempuniform2');
            var cp_tu3 = document.getElementById('temp_uniform');
            var cp_hu1 = document.getElementById('labelhumid1');
            var cp_hu2 = document.getElementById('labelhumid2');
            var cp_hu3 = document.getElementById('humid_fluctuation');
            
            var ut_v1 = document.getElementById('labelvoltage1');
            var ut_v2 = document.getElementById('labelvoltage2');
            var ut_v3 = document.getElementById('voltage');
            var ut_c1 = document.getElementById('labelcurrent1');
            var ut_c2 = document.getElementById('labelcurrent2');
            var ut_c3 = document.getElementById('current');
            var ut_p1 = document.getElementById('labelphase1');
            var ut_p2 = document.getElementById('labelphase2');
            var ut_p3 = document.getElementById('phase');
            var ut_x1 = document.getElementById('labelexhaust');
            var ut_x2 = document.getElementById('exhaust');
            var ut_q1 = document.getElementById('labelliquid');
            var ut_q2 = document.getElementById('liquid_nitrogen');
            var ut_cw1 = document.getElementById('labelchill');
            var ut_cw2 = document.getElementById('chilled_water');
            var ut_cda1 = document.getElementById('labelcda');
            var ut_cda2 = document.getElementById('cda');
            var ut_l1 = document.getElementById('labellan');
            var ut_l2 = document.getElementById('lan');
            var ut_g1 = document.getElementById('labelgas');
            var ut_g2 = document.getElementById('n2gas');
            var ut_xx1 = document.getElementById('labelexygen');
            var ut_xx2 = document.getElementById('oxygen_level');
            var ut_d1 = document.getElementById('labeldiwater');
            var ut_d2 = document.getElementById('di_water');
            var ut_t1 = document.getElementById('labeltopup');
            var ut_t2 = document.getElementById('water_topup');
            
            var dd = document.getElementById('ext_config_type');
            var extDiv = document.getElementById('viewExternalDiv');
            var selectedValue = dd.value;
            
            var dropdown = document.getElementById('int_config_type');
            var selectedValueInt = dropdown.value;
            var div01 = document.getElementById('divvoltcurrent');
            var ic_t1 = document.getElementById('labelconntemprate1');
            var ic_t2 = document.getElementById('labelconntemprate2');
            var ic_t3 = document.getElementById('conn_temp_rating');
            var ic_j1 = document.getElementById('labelbananajack1');
            var ic_j2 = document.getElementById('labelbananajack2');
            var ic_j3 = document.getElementById('banana_jack_hole');
            var div03 = document.getElementById('divPin');
            var div04 = document.getElementById('divconrack');
            var div05 = document.getElementById('WireDiv');
            
            $( document ).ready(function() {
                draftButton.style.display = 'none';
                saveButton.style.display = 'none';
                
                // BELOW TO COVER THE HIDE SHOW VALUE FROM THE EXISTING DATA - START
                if (transfer.value === '013001') {
                    inputfrom.style.display = 'none';
                    labelfrom.style.display = 'none';
                } else {
                    inputfrom.style.display = 'block';
                    labelfrom.style.display = 'block';
                }
                
                if (selectedValue === '032003' || selectedValue === '032005' || selectedValue === '032006') {
                    extDiv.style.display = 'none';
                } else {
                    extDiv.style.display = 'block';
                }
                
                if (selectedValueInt === '031001') {               // Banana
                    div01.style.display = 'block';
                    ic_t1.style.display = 'block';
                    ic_t2.style.display = 'block';
                    ic_t3.style.display = 'block';
                    ic_j1.style.display = 'block';
                    ic_j2.style.display = 'block';
                    ic_j3.style.display = 'block';
                    div03.style.display = 'none';
                    div04.style.display = 'none';
                    div05.style.display = 'none';
                } else if (selectedValueInt === '031002') {        // Edge
                    div01.style.display = 'block';
                    ic_t1.style.display = 'block';
                    ic_t2.style.display = 'block';
                    ic_t3.style.display = 'block';
                    ic_j1.style.display = 'none';
                    ic_j2.style.display = 'none';
                    ic_j3.style.display = 'none';
                    div03.style.display = 'block';
                    div04.style.display = 'none';
                    div05.style.display = 'none';
                } else if (selectedValueInt === '031003') {        // Winchester
                    div01.style.display = 'block';
                    ic_t1.style.display = 'none';
                    ic_t2.style.display = 'none';
                    ic_t3.style.display = 'none';
                    ic_j1.style.display = 'none';
                    ic_j2.style.display = 'none';
                    ic_j3.style.display = 'none';
                    div03.style.display = 'block';
                    div04.style.display = 'block';
                    div05.style.display = 'none';
                } else if (selectedValueInt === '031004') {        // Wire
                    div01.style.display = 'none';
                    ic_t1.style.display = 'none';
                    ic_t2.style.display = 'none';
                    ic_t3.style.display = 'none';
                    ic_j1.style.display = 'none';
                    ic_j2.style.display = 'none';
                    ic_j3.style.display = 'none';
                    div03.style.display = 'none';
                    div04.style.display = 'none';
                    div05.style.display = 'block';
                } else {
                    div01.style.display = 'none';
                    ic_t1.style.display = 'none';
                    ic_t2.style.display = 'none';
                    ic_t3.style.display = 'none';
                    ic_j1.style.display = 'none';
                    ic_j2.style.display = 'none';
                    ic_j3.style.display = 'none';
                    div03.style.display = 'none';
                    div04.style.display = 'none';
                    div05.style.display = 'none';
                }
                
                if (reltest.value === '008016') {                               // PTC
                    tab7.style.display = 'block';
                    tab8.style.display = 'block';
                                    
                    cp_vr1.style.display = 'block';
                    cp_vr2.style.display = 'block';
                    cp_vr3.style.display = 'block';
                    cp_ct1.style.display = 'block';
                    cp_ct2.style.display = 'block';
                    cp_ct3.style.display = 'block';
                    cp_cr1.style.display = 'block';
                    cp_cr2.style.display = 'block';
                    cp_cr3.style.display = 'block';
                    cp_pw1.style.display = 'block';
                    cp_pw2.style.display = 'block';
                    cp_pw3.style.display = 'block';
                    cp_mt1.style.display = 'block';
                    cp_mt2.style.display = 'block';
                    cp_mt3.style.display = 'block';
                    cp_mt4.style.display = 'block';
                    cp_mt5.style.display = 'block';
                    cp_mt6.style.display = 'block';
                    cp_mtp1.style.display = 'block';
                    cp_mtp2.style.display = 'block';
                    cp_mtp3.style.display = 'block';
                    cp_mtp4.style.display = 'block';
                    cp_mtp5.style.display = 'block';
                    cp_mtp6.style.display = 'block';
                    cp_rh1.style.display = 'none';
                    cp_rh2.style.display = 'none';
                    cp_rh3.style.display = 'none';
                    cp_rh4.style.display = 'none';
                    cp_rh5.style.display = 'none';
                    cp_rh6.style.display = 'none';
                    cp_ps1.style.display = 'none';
                    cp_ps2.style.display = 'none';
                    cp_ps3.style.display = 'none';
                    cp_ps4.style.display = 'none';
                    cp_ps5.style.display = 'none';
                    cp_ps6.style.display = 'none';
                    cp_ht1.style.display = 'block';
                    cp_ht2.style.display = 'block';
                    cp_ht3.style.display = 'block';
                    cp_tf1.style.display = 'block';
                    cp_tf2.style.display = 'block';
                    cp_tf3.style.display = 'block';
                    cp_tu1.style.display = 'block';
                    cp_tu2.style.display = 'block';
                    cp_tu3.style.display = 'block';
                    cp_hu1.style.display = 'none';
                    cp_hu2.style.display = 'none';
                    cp_hu3.style.display = 'none';
                    
                    ut_v1.style.display = 'block';
                    ut_v2.style.display = 'block';
                    ut_v3.style.display = 'block';
                    ut_c1.style.display = 'block';
                    ut_c2.style.display = 'block';
                    ut_c3.style.display = 'block';
                    ut_p1.style.display = 'block';
                    ut_p2.style.display = 'block';
                    ut_p3.style.display = 'block';
                    ut_x1.style.display = 'block';
                    ut_x2.style.display = 'block';
                    ut_g1.style.display = 'block';
                    ut_g2.style.display = 'block';
                    ut_xx1.style.display = 'block';
                    ut_xx2.style.display = 'block';
                    ut_q1.style.display = 'none';
                    ut_q2.style.display = 'none';
                    ut_cw1.style.display = 'block';
                    ut_cw2.style.display = 'block';
                    ut_d1.style.display = 'none';
                    ut_d2.style.display = 'none';
                    ut_t1.style.display = 'none';
                    ut_t2.style.display = 'none';
                    ut_cda1.style.display = 'block';
                    ut_cda2.style.display = 'block';
                    ut_l1.style.display = 'block';
                    ut_l2l.style.display = 'block';
                } else if (reltest.value === '008012') {                        // IOL
                    tab7.style.display = 'block';
                    tab8.style.display = 'block';
                    
                    cp_vr1.style.display = 'block';
                    cp_vr2.style.display = 'block';
                    cp_vr3.style.display = 'block';
                    cp_ct1.style.display = 'block';
                    cp_ct2.style.display = 'block';
                    cp_ct3.style.display = 'block';
                    cp_cr1.style.display = 'block';
                    cp_cr2.style.display = 'block';
                    cp_cr3.style.display = 'block';
                    cp_pw1.style.display = 'block';
                    cp_pw2.style.display = 'block';
                    cp_pw3.style.display = 'block';
                    cp_mt1.style.display = 'block';
                    cp_mt2.style.display = 'block';
                    cp_mt3.style.display = 'block';
                    cp_mt4.style.display = 'block';
                    cp_mt5.style.display = 'block';
                    cp_mt6.style.display = 'block';
                    cp_mtp1.style.display = 'none';
                    cp_mtp2.style.display = 'none';
                    cp_mtp3.style.display = 'none';
                    cp_mtp4.style.display = 'none';
                    cp_mtp5.style.display = 'none';
                    cp_mtp6.style.display = 'none';
                    cp_rh1.style.display = 'none';
                    cp_rh2.style.display = 'none';
                    cp_rh3.style.display = 'none';
                    cp_rh4.style.display = 'none';
                    cp_rh5.style.display = 'none';
                    cp_rh6.style.display = 'none';
                    cp_ps1.style.display = 'none';
                    cp_ps2.style.display = 'none';
                    cp_ps3.style.display = 'none';
                    cp_ps4.style.display = 'none';
                    cp_ps5.style.display = 'none';
                    cp_ps6.style.display = 'none';
                    cp_ht1.style.display = 'none';
                    cp_ht2.style.display = 'none';
                    cp_ht3.style.display = 'none';
                    cp_tf1.style.display = 'none';
                    cp_tf2.style.display = 'none';
                    cp_tf3.style.display = 'none';
                    cp_tu1.style.display = 'none';
                    cp_tu2.style.display = 'none';
                    cp_tu3.style.display = 'none';
                    cp_hu1.style.display = 'none';
                    cp_hu2.style.display = 'none';
                    cp_hu3.style.display = 'none';
                    
                    ut_v1.style.display = 'block';
                    ut_v2.style.display = 'block';
                    ut_v3.style.display = 'block';
                    ut_c1.style.display = 'block';
                    ut_c2.style.display = 'block';
                    ut_c3.style.display = 'block';
                    ut_p1.style.display = 'block';
                    ut_p2.style.display = 'block';
                    ut_p3.style.display = 'block';
                    ut_x1.style.display = 'block';
                    ut_x2.style.display = 'block';
                    ut_g1.style.display = 'none';
                    ut_g2.style.display = 'none';
                    ut_xx1.style.display = 'none';
                    ut_xx2.style.display = 'none';
                    ut_q1.style.display = 'none';
                    ut_q2.style.display = 'none';
                    ut_cw1.style.display = 'none';
                    ut_cw2.style.display = 'none';
                    ut_d1.style.display = 'none';
                    ut_d2.style.display = 'none';
                    ut_t1.style.display = 'none';
                    ut_t2.style.display = 'none';
                    ut_cda1.style.display = 'none';
                    ut_cda2.style.display = 'none';
                    ut_l1.style.display = 'block';
                    ut_l2.style.display = 'block';
                } else if (reltest.value === '008005') {                        // HAST
                    tab7.style.display = 'block';
                    tab8.style.display = 'block';
                    
                    cp_vr1.style.display = 'block';
                    cp_vr2.style.display = 'block';
                    cp_vr3.style.display = 'block';
                    cp_ct1.style.display = 'block';
                    cp_ct2.style.display = 'block';
                    cp_ct3.style.display = 'block';
                    cp_cr1.style.display = 'block';
                    cp_cr2.style.display = 'block';
                    cp_cr3.style.display = 'block';
                    cp_pw1.style.display = 'block';
                    cp_pw2.style.display = 'block';
                    cp_pw3.style.display = 'block';
                    cp_mt1.style.display = 'none';
                    cp_mt2.style.display = 'none';
                    cp_mt3.style.display = 'none';
                    cp_mt4.style.display = 'none';
                    cp_mt5.style.display = 'none';
                    cp_mt6.style.display = 'none';
                    cp_mtp1.style.display = 'block';
                    cp_mtp2.style.display = 'block';
                    cp_mtp3.style.display = 'block';
                    cp_mtp4.style.display = 'block';
                    cp_mtp5.style.display = 'block';
                    cp_mtp6.style.display = 'block';
                    cp_rh1.style.display = 'block';
                    cp_rh2.style.display = 'block';
                    cp_rh3.style.display = 'block';
                    cp_rh4.style.display = 'block';
                    cp_rh5.style.display = 'block';
                    cp_rh6.style.display = 'block';
                    cp_ps1.style.display = 'block';
                    cp_ps2.style.display = 'block';
                    cp_ps3.style.display = 'block';
                    cp_ps4.style.display = 'block';
                    cp_ps5.style.display = 'block';
                    cp_ps6.style.display = 'block';
                    cp_ht1.style.display = 'block';
                    cp_ht2.style.display = 'block';
                    cp_ht3.style.display = 'block';
                    cp_tf1.style.display = 'block';
                    cp_tf2.style.display = 'block';
                    cp_tf3.style.display = 'block';
                    cp_tu1.style.display = 'block';
                    cp_tu2.style.display = 'block';
                    cp_tu3.style.display = 'block';
                    cp_hu1.style.display = 'block';
                    cp_hu2.style.display = 'block';
                    cp_hu3.style.display = 'block';
                    
                    ut_v1.style.display = 'block';
                    ut_v2.style.display = 'block';
                    ut_v3.style.display = 'block';
                    ut_c1.style.display = 'block';
                    ut_c2.style.display = 'block';
                    ut_c3.style.display = 'block';
                    ut_p1.style.display = 'block';
                    ut_p2.style.display = 'block';
                    ut_p3.style.display = 'block';
                    ut_x1.style.display = 'block';
                    ut_x2.style.display = 'block';
                    ut_g1.style.display = 'none';
                    ut_g2.style.display = 'none';
                    ut_xx1.style.display = 'none';
                    ut_xx2.style.display = 'none';
                    ut_q1.style.display = 'none';
                    ut_q2.style.display = 'none';
                    ut_cw1.style.display = 'none';
                    ut_cw2.style.display = 'none';
                    ut_d1.style.display = 'block';
                    ut_d2.style.display = 'block';
                    ut_t1.style.display = 'block';
                    ut_t2.style.display = 'block';
                    ut_cda1.style.display = 'block';
                    ut_cda2.style.display = 'block';
                    ut_l1.style.display = 'block';
                    ut_l2.style.display = 'block';
                } else if (reltest.value === '008003' || reltest.value === '008004' || reltest.value === '008020') {            // H3T, H3TRB, THB
                    tab7.style.display = 'block';
                    tab8.style.display = 'block';
                    
                    cp_vr1.style.display = 'block';
                    cp_vr2.style.display = 'block';
                    cp_vr3.style.display = 'block';
                    cp_ct1.style.display = 'block';
                    cp_ct2.style.display = 'block';
                    cp_ct3.style.display = 'block';
                    cp_cr1.style.display = 'block';
                    cp_cr2.style.display = 'block';
                    cp_cr3.style.display = 'block';
                    cp_pw1.style.display = 'block';
                    cp_pw2.style.display = 'block';
                    cp_pw3.style.display = 'block';
                    cp_mt1.style.display = 'none';
                    cp_mt2.style.display = 'none';
                    cp_mt3.style.display = 'none';
                    cp_mt4.style.display = 'none';
                    cp_mt5.style.display = 'none';
                    cp_mt6.style.display = 'none';
                    cp_mtp1.style.display = 'block';
                    cp_mtp2.style.display = 'block';
                    cp_mtp3.style.display = 'block';
                    cp_mtp4.style.display = 'block';
                    cp_mtp5.style.display = 'block';
                    cp_mtp6.style.display = 'block';
                    cp_rh1.style.display = 'block';
                    cp_rh2.style.display = 'block';
                    cp_rh3.style.display = 'block';
                    cp_rh4.style.display = 'block';
                    cp_rh5.style.display = 'block';
                    cp_rh6.style.display = 'block';
                    cp_ps1.style.display = 'none';
                    cp_ps2.style.display = 'none';
                    cp_ps3.style.display = 'none';
                    cp_ps4.style.display = 'none';
                    cp_ps5.style.display = 'none';
                    cp_ps6.style.display = 'none';
                    cp_ht1.style.display = 'block';
                    cp_ht2.style.display = 'block';
                    cp_ht3.style.display = 'block';
                    cp_tf1.style.display = 'block';
                    cp_tf2.style.display = 'block';
                    cp_tf3.style.display = 'block';
                    cp_tu1.style.display = 'block';
                    cp_tu2.style.display = 'block';
                    cp_tu3.style.display = 'block';
                    cp_hu1.style.display = 'block';
                    cp_hu2.style.display = 'block';
                    cp_hu3.style.display = 'block';
                    
                    ut_v1.style.display = 'block';
                    ut_v2.style.display = 'block';
                    ut_v3.style.display = 'block';
                    ut_c1.style.display = 'block';
                    ut_c2.style.display = 'block';
                    ut_c3.style.display = 'block';
                    ut_p1.style.display = 'block';
                    ut_p2.style.display = 'block';
                    ut_p3.style.display = 'block';
                    ut_x1.style.display = 'block';
                    ut_x2.style.display = 'block';
                    ut_g1.style.display = 'none';
                    ut_g2.style.display = 'none';
                    ut_xx1.style.display = 'none';
                    ut_xx2.style.display = 'none';
                    ut_q1.style.display = 'none';
                    ut_q2.style.display = 'none';
                    ut_cw1.style.display = 'none';
                    ut_cw2.style.display = 'none';
                    ut_d1.style.display = 'block';
                    ut_d2.style.display = 'block';
                    ut_t1.style.display = 'block';
                    ut_t2.style.display = 'block';
                    ut_cda1.style.display = 'block';
                    ut_cda2.style.display = 'block';
                    ut_l1.style.display = 'block';
                    ut_l2.style.display = 'block';
                } else if (reltest.value === '008002' || reltest.value === '008006' || reltest.value === '008007' || reltest.value === '008008' || reltest.value === '008010') {            // ELFR, HTRB, HTGB, HTFB, HTOL
                    tab7.style.display = 'block';
                    tab8.style.display = 'block';
                    
                    cp_vr1.style.display = 'block';
                    cp_vr2.style.display = 'block';
                    cp_vr3.style.display = 'block';
                    cp_ct1.style.display = 'block';
                    cp_ct2.style.display = 'block';
                    cp_ct3.style.display = 'block';
                    cp_cr1.style.display = 'block';
                    cp_cr2.style.display = 'block';
                    cp_cr3.style.display = 'block';
                    cp_pw1.style.display = 'block';
                    cp_pw2.style.display = 'block';
                    cp_pw3.style.display = 'block';
                    cp_mt1.style.display = 'none';
                    cp_mt2.style.display = 'none';
                    cp_mt3.style.display = 'none';
                    cp_mt4.style.display = 'none';
                    cp_mt5.style.display = 'none';
                    cp_mt6.style.display = 'none';
                    cp_mtp1.style.display = 'block';
                    cp_mtp2.style.display = 'block';
                    cp_mtp3.style.display = 'block';
                    cp_mtp4.style.display = 'block';
                    cp_mtp5.style.display = 'block';
                    cp_mtp6.style.display = 'block';
                    cp_rh1.style.display = 'none';
                    cp_rh2.style.display = 'none';
                    cp_rh3.style.display = 'none';
                    cp_rh4.style.display = 'none';
                    cp_rh5.style.display = 'none';
                    cp_rh6.style.display = 'none';
                    cp_ps1.style.display = 'none';
                    cp_ps2.style.display = 'none';
                    cp_ps3.style.display = 'none';
                    cp_ps4.style.display = 'none';
                    cp_ps5.style.display = 'none';
                    cp_ps6.style.display = 'none';
                    cp_ht1.style.display = 'block';
                    cp_ht2.style.display = 'block';
                    cp_ht3.style.display = 'block';
                    cp_tf1.style.display = 'block';
                    cp_tf2.style.display = 'block';
                    cp_tf3.style.display = 'block';
                    cp_tu1.style.display = 'block';
                    cp_tu2.style.display = 'block';
                    cp_tu3.style.display = 'block';
                    cp_hu1.style.display = 'none';
                    cp_hu2.style.display = 'none';
                    cp_hu3.style.display = 'none';
                    
                    ut_v1.style.display = 'block';
                    ut_v2.style.display = 'block';
                    ut_v3.style.display = 'block';
                    ut_c1.style.display = 'block';
                    ut_c2.style.display = 'block';
                    ut_c3.style.display = 'block';
                    ut_p1.style.display = 'block';
                    ut_p2.style.display = 'block';
                    ut_p3.style.display = 'block';
                    ut_x1.style.display = 'block';
                    ut_x2.style.display = 'block';
                    ut_g1.style.display = 'block';
                    ut_g2.style.display = 'block';
                    ut_xx1.style.display = 'block';
                    ut_xx2.style.display = 'block';
                    ut_q1.style.display = 'none';
                    ut_q2.style.display = 'none';
                    ut_cw1.style.display = 'none';
                    ut_cw2.style.display = 'none';
                    ut_d1.style.display = 'none';
                    ut_d2.style.display = 'none';
                    ut_t1.style.display = 'none';
                    ut_t2.style.display = 'none';
                    ut_cda1.style.display = 'block';
                    ut_cda2.style.display = 'block';
                    ut_l1.style.display = 'block';
                    ut_l2.style.display = 'block';
                } else if (reltest.value === '008013') {                        // LTOL
                    tab7.style.display = 'block';
                    tab8.style.display = 'block';
                    
                    cp_vr1.style.display = 'block';
                    cp_vr2.style.display = 'block';
                    cp_vr3.style.display = 'block';
                    cp_ct1.style.display = 'block';
                    cp_ct2.style.display = 'block';
                    cp_ct3.style.display = 'block';
                    cp_cr1.style.display = 'block';
                    cp_cr2.style.display = 'block';
                    cp_cr3.style.display = 'block';
                    cp_pw1.style.display = 'block';
                    cp_pw2.style.display = 'block';
                    cp_pw3.style.display = 'block';
                    cp_mt1.style.display = 'none';
                    cp_mt2.style.display = 'none';
                    cp_mt3.style.display = 'none';
                    cp_mt4.style.display = 'none';
                    cp_mt5.style.display = 'none';
                    cp_mt6.style.display = 'none';
                    cp_mtp1.style.display = 'block';
                    cp_mtp2.style.display = 'block';
                    cp_mtp3.style.display = 'block';
                    cp_mtp4.style.display = 'block';
                    cp_mtp5.style.display = 'block';
                    cp_mtp6.style.display = 'block';
                    cp_rh1.style.display = 'none';
                    cp_rh2.style.display = 'none';
                    cp_rh3.style.display = 'none';
                    cp_rh4.style.display = 'none';
                    cp_rh5.style.display = 'none';
                    cp_rh6.style.display = 'none';
                    cp_ps1.style.display = 'none';
                    cp_ps2.style.display = 'none';
                    cp_ps3.style.display = 'none';
                    cp_ps4.style.display = 'none';
                    cp_ps5.style.display = 'none';
                    cp_ps6.style.display = 'none';
                    cp_ht1.style.display = 'block';
                    cp_ht2.style.display = 'block';
                    cp_ht3.style.display = 'block';
                    cp_tf1.style.display = 'block';
                    cp_tf2.style.display = 'block';
                    cp_tf3.style.display = 'block';
                    cp_tu1.style.display = 'block';
                    cp_tu2.style.display = 'block';
                    cp_tu3.style.display = 'block';
                    cp_hu1.style.display = 'none';
                    cp_hu2.style.display = 'none';
                    cp_hu3.style.display = 'none';
                    
                    ut_v1.style.display = 'block';
                    ut_v2.style.display = 'block';
                    ut_v3.style.display = 'block';
                    ut_c1.style.display = 'block';
                    ut_c2.style.display = 'block';
                    ut_c3.style.display = 'block';
                    ut_p1.style.display = 'block';
                    ut_p2.style.display = 'block';
                    ut_p3.style.display = 'block';
                    ut_x1.style.display = 'block';
                    ut_x2.style.display = 'block';
                    ut_g1.style.display = 'block';
                    ut_g2.style.display = 'block';
                    ut_xx1.style.display = 'block';
                    ut_xx2.style.display = 'block';
                    ut_q1.style.display = 'none';
                    ut_q2.style.display = 'none';
                    ut_cw1.style.display = 'block';
                    ut_cw2.style.display = 'block';
                    ut_d1.style.display = 'block';
                    ut_d2.style.display = 'block';
                    ut_t1.style.display = 'block';
                    ut_t2.style.display = 'block';
                    ut_cda1.style.display = 'block';
                    ut_cda2.style.display = 'block';
                    ut_l1.style.display = 'block';
                    ut_l2.style.display = 'block';
                } else if (reltest.value === '008018') {                        // SSOL
                    tab7.style.display = 'block';
                    tab8.style.display = 'block';
                    
                    cp_vr1.style.display = 'block';
                    cp_vr2.style.display = 'block';
                    cp_vr3.style.display = 'block';
                    cp_ct1.style.display = 'block';
                    cp_ct2.style.display = 'block';
                    cp_ct3.style.display = 'block';
                    cp_cr1.style.display = 'block';
                    cp_cr2.style.display = 'block';
                    cp_cr3.style.display = 'block';
                    cp_pw1.style.display = 'block';
                    cp_pw2.style.display = 'block';
                    cp_pw3.style.display = 'block';
                    cp_mt1.style.display = 'none';
                    cp_mt2.style.display = 'none';
                    cp_mt3.style.display = 'none';
                    cp_mt4.style.display = 'none';
                    cp_mt5.style.display = 'none';
                    cp_mt6.style.display = 'none';
                    cp_mtp1.style.display = 'block';
                    cp_mtp2.style.display = 'block';
                    cp_mtp3.style.display = 'block';
                    cp_mtp4.style.display = 'block';
                    cp_mtp5.style.display = 'block';
                    cp_mtp6.style.display = 'block';
                    cp_rh1.style.display = 'none';
                    cp_rh2.style.display = 'none';
                    cp_rh3.style.display = 'none';
                    cp_rh4.style.display = 'none';
                    cp_rh5.style.display = 'none';
                    cp_rh6.style.display = 'none';
                    cp_ps1.style.display = 'none';
                    cp_ps2.style.display = 'none';
                    cp_ps3.style.display = 'none';
                    cp_ps4.style.display = 'none';
                    cp_ps5.style.display = 'none';
                    cp_ps6.style.display = 'none';
                    cp_ht1.style.display = 'none';
                    cp_ht2.style.display = 'none';
                    cp_ht3.style.display = 'none';
                    cp_tf1.style.display = 'block';
                    cp_tf2.style.display = 'block';
                    cp_tf3.style.display = 'block';
                    cp_tu1.style.display = 'block';
                    cp_tu2.style.display = 'block';
                    cp_tu3.style.display = 'block';
                    cp_hu1.style.display = 'none';
                    cp_hu2.style.display = 'none';
                    cp_hu3.style.display = 'none';
                    
                    ut_v1.style.display = 'block';
                    ut_v2.style.display = 'block';
                    ut_v3.style.display = 'block';
                    ut_c1.style.display = 'block';
                    ut_c2.style.display = 'block';
                    ut_c3.style.display = 'block';
                    ut_p1.style.display = 'block';
                    ut_p2.style.display = 'block';
                    ut_p3.style.display = 'block';
                    ut_x1.style.display = 'block';
                    ut_x2.style.display = 'block';
                    ut_g1.style.display = 'none';
                    ut_g2.style.display = 'none';
                    ut_xx1.style.display = 'none';
                    ut_xx2.style.display = 'none';
                    ut_q1.style.display = 'none';
                    ut_q2.style.display = 'none';
                    ut_cw1.style.display = 'none';
                    ut_cw2.style.display = 'none';
                    ut_d1.style.display = 'none';
                    ut_d2.style.display = 'none';
                    ut_t1.style.display = 'none';
                    ut_t2.style.display = 'none';
                    ut_cda1.style.display = 'none';
                    ut_cda2.style.display = 'none';
                    ut_l1.style.display = 'block';
                    ut_l2.style.display = 'block';
                } else if (reltest.value === '008001' || reltest.value === '008023') {          // AC, UHAST
                    tab7.style.display = 'none';
                    tab8.style.display = 'none';
                    
                    cp_vr1.style.display = 'none';
                    cp_vr2.style.display = 'none';
                    cp_vr3.style.display = 'none';
                    cp_ct1.style.display = 'none';
                    cp_ct2.style.display = 'none';
                    cp_ct3.style.display = 'none';
                    cp_cr1.style.display = 'none';
                    cp_cr2.style.display = 'none';
                    cp_cr3.style.display = 'none';
                    cp_pw1.style.display = 'none';
                    cp_pw2.style.display = 'none';
                    cp_pw3.style.display = 'none';
                    cp_mt1.style.display = 'none';
                    cp_mt2.style.display = 'none';
                    cp_mt3.style.display = 'none';
                    cp_mt4.style.display = 'none';
                    cp_mt5.style.display = 'none';
                    cp_mt6.style.display = 'none';
                    cp_mtp1.style.display = 'block';
                    cp_mtp2.style.display = 'block';
                    cp_mtp3.style.display = 'block';
                    cp_mtp4.style.display = 'block';
                    cp_mtp5.style.display = 'block';
                    cp_mtp6.style.display = 'block';
                    cp_rh1.style.display = 'block';
                    cp_rh2.style.display = 'block';
                    cp_rh3.style.display = 'block';
                    cp_rh4.style.display = 'block';
                    cp_rh5.style.display = 'block';
                    cp_rh6.style.display = 'block';
                    cp_ps1.style.display = 'block';
                    cp_ps2.style.display = 'block';
                    cp_ps3.style.display = 'block';
                    cp_ps4.style.display = 'block';
                    cp_ps5.style.display = 'block';
                    cp_ps6.style.display = 'block';
                    cp_ht1.style.display = 'block';
                    cp_ht2.style.display = 'block';
                    cp_ht3.style.display = 'block';
                    cp_tf1.style.display = 'block';
                    cp_tf2.style.display = 'block';
                    cp_tf3.style.display = 'block';
                    cp_tu1.style.display = 'block';
                    cp_tu2.style.display = 'block';
                    cp_tu3.style.display = 'block';
                    cp_hu1.style.display = 'block';
                    cp_hu2.style.display = 'block';
                    cp_hu3.style.display = 'block';
                    
                    ut_v1.style.display = 'block';
                    ut_v2.style.display = 'block';
                    ut_v3.style.display = 'block';
                    ut_c1.style.display = 'block';
                    ut_c2.style.display = 'block';
                    ut_c3.style.display = 'block';
                    ut_p1.style.display = 'block';
                    ut_p2.style.display = 'block';
                    ut_p3.style.display = 'block';
                    ut_x1.style.display = 'block';
                    ut_x2.style.display = 'block';
                    ut_g1.style.display = 'none';
                    ut_g2.style.display = 'none';
                    ut_xx1.style.display = 'none';
                    ut_xx2.style.display = 'none';
                    ut_q1.style.display = 'none';
                    ut_q2.style.display = 'none';
                    ut_cw1.style.display = 'none';
                    ut_cw2.style.display = 'none';
                    ut_d1.style.display = 'block';
                    ut_d2.style.display = 'block';
                    ut_t1.style.display = 'block';
                    ut_t2.style.display = 'block';
                    ut_cda1.style.display = 'block';
                    ut_cda2.style.display = 'block';
                    ut_l1.style.display = 'block';
                    ut_l2.style.display = 'block';
                } else if (reltest.value === '008022') {                        // THU
                    tab7.style.display = 'none';
                    tab8.style.display = 'none';
                    
                    cp_vr1.style.display = 'none';
                    cp_vr2.style.display = 'none';
                    cp_vr3.style.display = 'none';
                    cp_ct1.style.display = 'none';
                    cp_ct2.style.display = 'none';
                    cp_ct3.style.display = 'none';
                    cp_cr1.style.display = 'none';
                    cp_cr2.style.display = 'none';
                    cp_cr3.style.display = 'none';
                    cp_pw1.style.display = 'none';
                    cp_pw2.style.display = 'none';
                    cp_pw3.style.display = 'none';
                    cp_mt1.style.display = 'none';
                    cp_mt2.style.display = 'none';
                    cp_mt3.style.display = 'none';
                    cp_mt4.style.display = 'none';
                    cp_mt5.style.display = 'none';
                    cp_mt6.style.display = 'none';
                    cp_mtp1.style.display = 'block';
                    cp_mtp2.style.display = 'block';
                    cp_mtp3.style.display = 'block';
                    cp_mtp4.style.display = 'block';
                    cp_mtp5.style.display = 'block';
                    cp_mtp6.style.display = 'block';
                    cp_rh1.style.display = 'block';
                    cp_rh2.style.display = 'block';
                    cp_rh3.style.display = 'block';
                    cp_rh4.style.display = 'block';
                    cp_rh5.style.display = 'block';
                    cp_rh6.style.display = 'block';
                    cp_ps1.style.display = 'block';
                    cp_ps2.style.display = 'block';
                    cp_ps3.style.display = 'block';
                    cp_ps4.style.display = 'block';
                    cp_ps5.style.display = 'block';
                    cp_ps6.style.display = 'block';
                    cp_ht1.style.display = 'block';
                    cp_ht2.style.display = 'block';
                    cp_ht3.style.display = 'block';
                    cp_tf1.style.display = 'block';
                    cp_tf2.style.display = 'block';
                    cp_tf3.style.display = 'block';
                    cp_tu1.style.display = 'block';
                    cp_tu2.style.display = 'block';
                    cp_tu3.style.display = 'block';
                    cp_hu1.style.display = 'block';
                    cp_hu2.style.display = 'block';
                    cp_hu3.style.display = 'block';
                    
                    ut_v1.style.display = 'block';
                    ut_v2.style.display = 'block';
                    ut_v3.style.display = 'block';
                    ut_c1.style.display = 'block';
                    ut_c2.style.display = 'block';
                    ut_c3.style.display = 'block';
                    ut_p1.style.display = 'block';
                    ut_p2.style.display = 'block';
                    ut_p3.style.display = 'block';
                    ut_x1.style.display = 'block';
                    ut_x2.style.display = 'block';
                    ut_g1.style.display = 'block';
                    ut_g2.style.display = 'block';
                    ut_xx1.style.display = 'block';
                    ut_xx2.style.display = 'block';
                    ut_q1.style.display = 'none';
                    ut_q2.style.display = 'none';
                    ut_cw1.style.display = 'none';
                    ut_cw2.style.display = 'none';
                    ut_d1.style.display = 'block';
                    ut_d2.style.display = 'block';
                    ut_t1.style.display = 'block';
                    ut_t2.style.display = 'block';
                    ut_cda1.style.display = 'block';
                    ut_cda2.style.display = 'block';
                    ut_l1.style.display = 'block';
                    ut_l2.style.display = 'block';
                } else if (reltest.value === '008015') {                        // MSL
                    tab7.style.display = 'none';
                    tab8.style.display = 'none';
                    
                    cp_vr1.style.display = 'none';
                    cp_vr2.style.display = 'none';
                    cp_vr3.style.display = 'none';
                    cp_ct1.style.display = 'none';
                    cp_ct2.style.display = 'none';
                    cp_ct3.style.display = 'none';
                    cp_cr1.style.display = 'none';
                    cp_cr2.style.display = 'none';
                    cp_cr3.style.display = 'none';
                    cp_pw1.style.display = 'none';
                    cp_pw2.style.display = 'none';
                    cp_pw3.style.display = 'none';
                    cp_mt1.style.display = 'none';
                    cp_mt2.style.display = 'none';
                    cp_mt3.style.display = 'none';
                    cp_mt4.style.display = 'none';
                    cp_mt5.style.display = 'none';
                    cp_mt6.style.display = 'none';
                    cp_mtp1.style.display = 'block';
                    cp_mtp2.style.display = 'block';
                    cp_mtp3.style.display = 'block';
                    cp_mtp4.style.display = 'block';
                    cp_mtp5.style.display = 'block';
                    cp_mtp6.style.display = 'block';
                    cp_rh1.style.display = 'block';
                    cp_rh2.style.display = 'block';
                    cp_rh3.style.display = 'block';
                    cp_rh4.style.display = 'block';
                    cp_rh5.style.display = 'block';
                    cp_rh6.style.display = 'block';
                    cp_ps1.style.display = 'none';
                    cp_ps2.style.display = 'none';
                    cp_ps3.style.display = 'none';
                    cp_ps4.style.display = 'none';
                    cp_ps5.style.display = 'none';
                    cp_ps6.style.display = 'none';
                    cp_ht1.style.display = 'block';
                    cp_ht2.style.display = 'block';
                    cp_ht3.style.display = 'block';
                    cp_tf1.style.display = 'block';
                    cp_tf2.style.display = 'block';
                    cp_tf3.style.display = 'block';
                    cp_tu1.style.display = 'block';
                    cp_tu2.style.display = 'block';
                    cp_tu3.style.display = 'block';
                    cp_hu1.style.display = 'block';
                    cp_hu2.style.display = 'block';
                    cp_hu3.style.display = 'block';
                    
                    ut_v1.style.display = 'block';
                    ut_v2.style.display = 'block';
                    ut_v3.style.display = 'block';
                    ut_c1.style.display = 'block';
                    ut_c2.style.display = 'block';
                    ut_c3.style.display = 'block';
                    ut_p1.style.display = 'block';
                    ut_p2.style.display = 'block';
                    ut_p3.style.display = 'block';
                    ut_x1.style.display = 'block';
                    ut_x2.style.display = 'block';
                    ut_g1.style.display = 'none';
                    ut_g2.style.display = 'none';
                    ut_xx1.style.display = 'none';
                    ut_xx2.style.display = 'none';
                    ut_q1.style.display = 'none';
                    ut_q2.style.display = 'none';
                    ut_cw1.style.display = 'none';
                    ut_cw2.style.display = 'none';
                    ut_d1.style.display = 'block';
                    ut_d2.style.display = 'block';
                    ut_t1.style.display = 'block';
                    ut_t2.style.display = 'block';
                    ut_cda1.style.display = 'block';
                    ut_cda2.style.display = 'block';
                    ut_l1.style.display = 'block';
                    ut_l2.style.display = 'block';
                } else if (reltest.value === '008017') {                        // RTHS
                    tab7.style.display = 'none';
                    tab8.style.display = 'none';
                    
                    cp_vr1.style.display = 'none';
                    cp_vr2.style.display = 'none';
                    cp_vr3.style.display = 'none';
                    cp_ct1.style.display = 'none';
                    cp_ct2.style.display = 'none';
                    cp_ct3.style.display = 'none';
                    cp_cr1.style.display = 'none';
                    cp_cr2.style.display = 'none';
                    cp_cr3.style.display = 'none';
                    cp_pw1.style.display = 'none';
                    cp_pw2.style.display = 'none';
                    cp_pw3.style.display = 'none';
                    cp_mt1.style.display = 'none';
                    cp_mt2.style.display = 'none';
                    cp_mt3.style.display = 'none';
                    cp_mt4.style.display = 'none';
                    cp_mt5.style.display = 'none';
                    cp_mt6.style.display = 'none';
                    cp_mtp1.style.display = 'block';
                    cp_mtp2.style.display = 'block';
                    cp_mtp3.style.display = 'block';
                    cp_mtp4.style.display = 'block';
                    cp_mtp5.style.display = 'block';
                    cp_mtp6.style.display = 'block';
                    cp_rh1.style.display = 'block';
                    cp_rh2.style.display = 'block';
                    cp_rh3.style.display = 'block';
                    cp_rh4.style.display = 'block';
                    cp_rh5.style.display = 'block';
                    cp_rh6.style.display = 'block';
                    cp_ps1.style.display = 'none';
                    cp_ps2.style.display = 'none';
                    cp_ps3.style.display = 'none';
                    cp_ps4.style.display = 'none';
                    cp_ps5.style.display = 'none';
                    cp_ps6.style.display = 'none';
                    cp_ht1.style.display = 'block';
                    cp_ht2.style.display = 'block';
                    cp_ht3.style.display = 'block';
                    cp_tf1.style.display = 'block';
                    cp_tf2.style.display = 'block';
                    cp_tf3.style.display = 'block';
                    cp_tu1.style.display = 'block';
                    cp_tu2.style.display = 'block';
                    cp_tu3.style.display = 'block';
                    cp_hu1.style.display = 'block';
                    cp_hu2.style.display = 'block';
                    cp_hu3.style.display = 'block';
                    
                    ut_v1.style.display = 'block';
                    ut_v2.style.display = 'block';
                    ut_v3.style.display = 'block';
                    ut_c1.style.display = 'block';
                    ut_c2.style.display = 'block';
                    ut_c3.style.display = 'block';
                    ut_p1.style.display = 'block';
                    ut_p2.style.display = 'block';
                    ut_p3.style.display = 'block';
                    ut_x1.style.display = 'block';
                    ut_x2.style.display = 'block';
                    ut_g1.style.display = 'block';
                    ut_g2.style.display = 'block';
                    ut_xx1.style.display = 'block';
                    ut_xx2.style.display = 'block';
                    ut_q1.style.display = 'none';
                    ut_q2.style.display = 'none';
                    ut_cw1.style.display = 'none';
                    ut_cw2.style.display = 'none';
                    ut_d1.style.display = 'block';
                    ut_d2.style.display = 'block';
                    ut_t1.style.display = 'block';
                    ut_t2.style.display = 'block';
                    ut_cda1.style.display = 'block';
                    ut_cda2.style.display = 'block';
                    ut_l1.style.display = 'block';
                    ut_l2.style.display = 'block';
                } else if (reltest.value === '008021') {                        // THS
                    tab7.style.display = 'none';
                    tab8.style.display = 'none';
                    
                    cp_vr1.style.display = 'none';
                    cp_vr2.style.display = 'none';
                    cp_vr3.style.display = 'none';
                    cp_ct1.style.display = 'none';
                    cp_ct2.style.display = 'none';
                    cp_ct3.style.display = 'none';
                    cp_cr1.style.display = 'none';
                    cp_cr2.style.display = 'none';
                    cp_cr3.style.display = 'none';
                    cp_pw1.style.display = 'none';
                    cp_pw2.style.display = 'none';
                    cp_pw3.style.display = 'none';
                    cp_mt1.style.display = 'none';
                    cp_mt2.style.display = 'none';
                    cp_mt3.style.display = 'none';
                    cp_mt4.style.display = 'none';
                    cp_mt5.style.display = 'none';
                    cp_mt6.style.display = 'none';
                    cp_mtp1.style.display = 'block';
                    cp_mtp2.style.display = 'block';
                    cp_mtp3.style.display = 'block';
                    cp_mtp4.style.display = 'block';
                    cp_mtp5.style.display = 'block';
                    cp_mtp6.style.display = 'block';
                    cp_rh1.style.display = 'block';
                    cp_rh2.style.display = 'block';
                    cp_rh3.style.display = 'block';
                    cp_rh4.style.display = 'block';
                    cp_rh5.style.display = 'block';
                    cp_rh6.style.display = 'block';
                    cp_ps1.style.display = 'none';
                    cp_ps2.style.display = 'none';
                    cp_ps3.style.display = 'none';
                    cp_ps4.style.display = 'none';
                    cp_ps5.style.display = 'none';
                    cp_ps6.style.display = 'none';
                    cp_ht1.style.display = 'block';
                    cp_ht2.style.display = 'block';
                    cp_ht3.style.display = 'block';
                    cp_tf1.style.display = 'block';
                    cp_tf2.style.display = 'block';
                    cp_tf3.style.display = 'block';
                    cp_tu1.style.display = 'block';
                    cp_tu2.style.display = 'block';
                    cp_tu3.style.display = 'block';
                    cp_hu1.style.display = 'block';
                    cp_hu2.style.display = 'block';
                    cp_hu3.style.display = 'block';
                    
                    ut_v1.style.display = 'block';
                    ut_v2.style.display = 'block';
                    ut_v3.style.display = 'block';
                    ut_c1.style.display = 'block';
                    ut_c2.style.display = 'block';
                    ut_c3.style.display = 'block';
                    ut_p1.style.display = 'block';
                    ut_p2.style.display = 'block';
                    ut_p3.style.display = 'block';
                    ut_x1.style.display = 'block';
                    ut_x2.style.display = 'block';
                    ut_g1.style.display = 'block';
                    ut_g2.style.display = 'block';
                    ut_xx1.style.display = 'block';
                    ut_xx2.style.display = 'block';
                    ut_q1.style.display = 'none';
                    ut_q2.style.display = 'none';
                    ut_cw1.style.display = 'block';
                    ut_cw2.style.display = 'block';
                    ut_d1.style.display = 'block';
                    ut_d2.style.display = 'block';
                    ut_t1.style.display = 'block';
                    ut_t2.style.display = 'block';
                    ut_cda1.style.display = 'block';
                    ut_cda2.style.display = 'block';
                    ut_l1.style.display = 'block';
                    ut_l2.style.display = 'block';
                } else if (reltest.value === '008009') {                        // HTHS
                    tab7.style.display = 'none';
                    tab8.style.display = 'none';
                    
                    cp_vr1.style.display = 'none';
                    cp_vr2.style.display = 'none';
                    cp_vr3.style.display = 'none';
                    cp_ct1.style.display = 'none';
                    cp_ct2.style.display = 'none';
                    cp_ct3.style.display = 'none';
                    cp_cr1.style.display = 'none';
                    cp_cr2.style.display = 'none';
                    cp_cr3.style.display = 'none';
                    cp_pw1.style.display = 'none';
                    cp_pw2.style.display = 'none';
                    cp_pw3.style.display = 'none';
                    cp_mt1.style.display = 'none';
                    cp_mt2.style.display = 'none';
                    cp_mt3.style.display = 'none';
                    cp_mt4.style.display = 'none';
                    cp_mt5.style.display = 'none';
                    cp_mt6.style.display = 'none';
                    cp_mtp1.style.display = 'block';
                    cp_mtp2.style.display = 'block';
                    cp_mtp3.style.display = 'block';
                    cp_mtp4.style.display = 'block';
                    cp_mtp5.style.display = 'block';
                    cp_mtp6.style.display = 'block';
                    cp_rh1.style.display = 'none';
                    cp_rh2.style.display = 'none';
                    cp_rh3.style.display = 'none';
                    cp_rh4.style.display = 'none';
                    cp_rh5.style.display = 'none';
                    cp_rh6.style.display = 'none';
                    cp_ps1.style.display = 'none';
                    cp_ps2.style.display = 'none';
                    cp_ps3.style.display = 'none';
                    cp_ps4.style.display = 'none';
                    cp_ps5.style.display = 'none';
                    cp_ps6.style.display = 'none';
                    cp_ht1.style.display = 'block';
                    cp_ht2.style.display = 'block';
                    cp_ht3.style.display = 'block';
                    cp_tf1.style.display = 'block';
                    cp_tf2.style.display = 'block';
                    cp_tf3.style.display = 'block';
                    cp_tu1.style.display = 'block';
                    cp_tu2.style.display = 'block';
                    cp_tu3.style.display = 'block';
                    cp_hu1.style.display = 'none';
                    cp_hu2.style.display = 'none';
                    cp_hu3.style.display = 'none';
                    
                    ut_v1.style.display = 'block';
                    ut_v2.style.display = 'block';
                    ut_v3.style.display = 'block';
                    ut_c1.style.display = 'block';
                    ut_c2.style.display = 'block';
                    ut_c3.style.display = 'block';
                    ut_p1.style.display = 'block';
                    ut_p2.style.display = 'block';
                    ut_p3.style.display = 'block';
                    ut_x1.style.display = 'block';
                    ut_x2.style.display = 'block';
                    ut_g1.style.display = 'block';
                    ut_g2.style.display = 'block';
                    ut_xx1.style.display = 'block';
                    ut_xx2.style.display = 'block';
                    ut_q1.style.display = 'none';
                    ut_q2.style.display = 'none';
                    ut_cw1.style.display = 'none';
                    ut_cw2.style.display = 'none';
                    ut_d1.style.display = 'block';
                    ut_d2.style.display = 'block';
                    ut_t1.style.display = 'block';
                    ut_t2.style.display = 'block';
                    ut_cda1.style.display = 'block';
                    ut_cda2.style.display = 'block';
                    ut_l1.style.display = 'block';
                    ut_l2.style.display = 'block';
                } else if (reltest.value === '008011') {                        // HTSL
                    tab7.style.display = 'none';
                    tab8.style.display = 'none';
                    
                    cp_vr1.style.display = 'none';
                    cp_vr2.style.display = 'none';
                    cp_vr3.style.display = 'none';
                    cp_ct1.style.display = 'none';
                    cp_ct2.style.display = 'none';
                    cp_ct3.style.display = 'none';
                    cp_cr1.style.display = 'none';
                    cp_cr2.style.display = 'none';
                    cp_cr3.style.display = 'none';
                    cp_pw1.style.display = 'none';
                    cp_pw2.style.display = 'none';
                    cp_pw3.style.display = 'none';
                    cp_mt1.style.display = 'none';
                    cp_mt2.style.display = 'none';
                    cp_mt3.style.display = 'none';
                    cp_mt4.style.display = 'none';
                    cp_mt5.style.display = 'none';
                    cp_mt6.style.display = 'none';
                    cp_mtp1.style.display = 'block';
                    cp_mtp2.style.display = 'block';
                    cp_mtp3.style.display = 'block';
                    cp_mtp4.style.display = 'block';
                    cp_mtp5.style.display = 'block';
                    cp_mtp6.style.display = 'block';
                    cp_rh1.style.display = 'none';
                    cp_rh2.style.display = 'none';
                    cp_rh3.style.display = 'none';
                    cp_rh4.style.display = 'none';
                    cp_rh5.style.display = 'none';
                    cp_rh6.style.display = 'none';
                    cp_ps1.style.display = 'none';
                    cp_ps2.style.display = 'none';
                    cp_ps3.style.display = 'none';
                    cp_ps4.style.display = 'none';
                    cp_ps5.style.display = 'none';
                    cp_ps6.style.display = 'none';
                    cp_ht1.style.display = 'block';
                    cp_ht2.style.display = 'block';
                    cp_ht3.style.display = 'block';
                    cp_tf1.style.display = 'block';
                    cp_tf2.style.display = 'block';
                    cp_tf3.style.display = 'block';
                    cp_tu1.style.display = 'block';
                    cp_tu2.style.display = 'block';
                    cp_tu3.style.display = 'block';
                    cp_hu1.style.display = 'none';
                    cp_hu2.style.display = 'none';
                    cp_hu3.style.display = 'none';
                    
                    ut_v1.style.display = 'block';
                    ut_v2.style.display = 'block';
                    ut_v3.style.display = 'block';
                    ut_c1.style.display = 'block';
                    ut_c2.style.display = 'block';
                    ut_c3.style.display = 'block';
                    ut_p1.style.display = 'block';
                    ut_p2.style.display = 'block';
                    ut_p3.style.display = 'block';
                    ut_x1.style.display = 'block';
                    ut_x2.style.display = 'block';
                    ut_g1.style.display = 'block';
                    ut_g2.style.display = 'block';
                    ut_xx1.style.display = 'block';
                    ut_xx2.style.display = 'block';
                    ut_q1.style.display = 'none';
                    ut_q2.style.display = 'none';
                    ut_cw1.style.display = 'none';
                    ut_cw2.style.display = 'none';
                    ut_d1.style.display = 'none';
                    ut_d2.style.display = 'none';
                    ut_t1.style.display = 'none';
                    ut_t2.style.display = 'none';
                    ut_cda1.style.display = 'block';
                    ut_cda2.style.display = 'block';
                    ut_l1.style.display = 'block';
                    ut_l2.style.display = 'block';
                } else if (reltest.value === '008014') {                        // LTSL
                    tab7.style.display = 'none';
                    tab8.style.display = 'none';
                    
                    cp_vr1.style.display = 'none';
                    cp_vr2.style.display = 'none';
                    cp_vr3.style.display = 'none';
                    cp_ct1.style.display = 'none';
                    cp_ct2.style.display = 'none';
                    cp_ct3.style.display = 'none';
                    cp_cr1.style.display = 'none';
                    cp_cr2.style.display = 'none';
                    cp_cr3.style.display = 'none';
                    cp_pw1.style.display = 'none';
                    cp_pw2.style.display = 'none';
                    cp_pw3.style.display = 'none';
                    cp_mt1.style.display = 'none';
                    cp_mt2.style.display = 'none';
                    cp_mt3.style.display = 'none';
                    cp_mt4.style.display = 'none';
                    cp_mt5.style.display = 'none';
                    cp_mt6.style.display = 'none';
                    cp_mtp1.style.display = 'block';
                    cp_mtp2.style.display = 'block';
                    cp_mtp3.style.display = 'block';
                    cp_mtp4.style.display = 'block';
                    cp_mtp5.style.display = 'block';
                    cp_mtp6.style.display = 'block';
                    cp_rh1.style.display = 'none';
                    cp_rh2.style.display = 'none';
                    cp_rh3.style.display = 'none';
                    cp_rh4.style.display = 'none';
                    cp_rh5.style.display = 'none';
                    cp_rh6.style.display = 'none';
                    cp_ps1.style.display = 'none';
                    cp_ps2.style.display = 'none';
                    cp_ps3.style.display = 'none';
                    cp_ps4.style.display = 'none';
                    cp_ps5.style.display = 'none';
                    cp_ps6.style.display = 'none';
                    cp_ht1.style.display = 'block';
                    cp_ht2.style.display = 'block';
                    cp_ht3.style.display = 'block';
                    cp_tf1.style.display = 'block';
                    cp_tf2.style.display = 'block';
                    cp_tf3.style.display = 'block';
                    cp_tu1.style.display = 'block';
                    cp_tu2.style.display = 'block';
                    cp_tu3.style.display = 'block';
                    cp_hu1.style.display = 'none';
                    cp_hu2.style.display = 'none';
                    cp_hu3.style.display = 'none';
                    
                    ut_v1.style.display = 'block';
                    ut_v2.style.display = 'block';
                    ut_v3.style.display = 'block';
                    ut_c1.style.display = 'block';
                    ut_c2.style.display = 'block';
                    ut_c3.style.display = 'block';
                    ut_p1.style.display = 'block';
                    ut_p2.style.display = 'block';
                    ut_p3.style.display = 'block';
                    ut_x1.style.display = 'block';
                    ut_x2.style.display = 'block';
                    ut_g1.style.display = 'block';
                    ut_g2.style.display = 'block';
                    ut_xx1.style.display = 'block';
                    ut_xx2.style.display = 'block';
                    ut_q1.style.display = 'none';
                    ut_q2.style.display = 'none';
                    ut_cw1.style.display = 'block';
                    ut_cw2.style.display = 'block';
                    ut_d1.style.display = 'block';
                    ut_d2.style.display = 'block';
                    ut_t1.style.display = 'block';
                    ut_t2.style.display = 'block';
                    ut_cda1.style.display = 'block';
                    ut_cda2.style.display = 'block';
                    ut_l1.style.display = 'block';
                    ut_l2.style.display = 'block';
                } else if (reltest.value === '008019') {                        // TC
                    tab7.style.display = 'none';
                    tab8.style.display = 'none';
                    
                    cp_vr1.style.display = 'none';
                    cp_vr2.style.display = 'none';
                    cp_vr3.style.display = 'none';
                    cp_ct1.style.display = 'none';
                    cp_ct2.style.display = 'none';
                    cp_ct3.style.display = 'none';
                    cp_cr1.style.display = 'none';
                    cp_cr2.style.display = 'none';
                    cp_cr3.style.display = 'none';
                    cp_pw1.style.display = 'none';
                    cp_pw2.style.display = 'none';
                    cp_pw3.style.display = 'none';
                    cp_mt1.style.display = 'none';
                    cp_mt2.style.display = 'none';
                    cp_mt3.style.display = 'none';
                    cp_mt4.style.display = 'none';
                    cp_mt5.style.display = 'none';
                    cp_mt6.style.display = 'none';
                    cp_mtp1.style.display = 'block';
                    cp_mtp2.style.display = 'block';
                    cp_mtp3.style.display = 'block';
                    cp_mtp4.style.display = 'block';
                    cp_mtp5.style.display = 'block';
                    cp_mtp6.style.display = 'block';
                    cp_rh1.style.display = 'none';
                    cp_rh2.style.display = 'none';
                    cp_rh3.style.display = 'none';
                    cp_rh4.style.display = 'none';
                    cp_rh5.style.display = 'none';
                    cp_rh6.style.display = 'none';
                    cp_ps1.style.display = 'none';
                    cp_ps2.style.display = 'none';
                    cp_ps3.style.display = 'none';
                    cp_ps4.style.display = 'none';
                    cp_ps5.style.display = 'none';
                    cp_ps6.style.display = 'none';
                    cp_ht1.style.display = 'block';
                    cp_ht2.style.display = 'block';
                    cp_ht3.style.display = 'block';
                    cp_tf1.style.display = 'block';
                    cp_tf2.style.display = 'block';
                    cp_tf3.style.display = 'block';
                    cp_tu1.style.display = 'block';
                    cp_tu2.style.display = 'block';
                    cp_tu3.style.display = 'block';
                    cp_hu1.style.display = 'none';
                    cp_hu2.style.display = 'none';
                    cp_hu3.style.display = 'none';
                    
                    ut_v1.style.display = 'block';
                    ut_v2.style.display = 'block';
                    ut_v3.style.display = 'block';
                    ut_c1.style.display = 'block';
                    ut_c2.style.display = 'block';
                    ut_c3.style.display = 'block';
                    ut_p1.style.display = 'block';
                    ut_p2.style.display = 'block';
                    ut_p3.style.display = 'block';
                    ut_x1.style.display = 'block';
                    ut_x2.style.display = 'block';
                    ut_g1.style.display = 'block';
                    ut_g2.style.display = 'block';
                    ut_xx1.style.display = 'block';
                    ut_xx2.style.display = 'block';
                    ut_q1.style.display = 'block';
                    ut_q2.style.display = 'block';
                    ut_cw1.style.display = 'block';
                    ut_cw2.style.display = 'block';
                    ut_d1.style.display = 'none';
                    ut_d2.style.display = 'none';
                    ut_t1.style.display = 'none';
                    ut_t2.style.display = 'none';
                    ut_cda1.style.display = 'block';
                    ut_cda2.style.display = 'block';
                    ut_l1.style.display = 'block';
                    ut_l2.style.display = 'block';
                } else {
                    tab7.style.display = 'block';
                    tab8.style.display = 'block';
                    
                    cp_vr1.style.display = 'block';
                    cp_vr2.style.display = 'block';
                    cp_vr3.style.display = 'block';
                    cp_ct1.style.display = 'block';
                    cp_ct2.style.display = 'block';
                    cp_ct3.style.display = 'block';
                    cp_cr1.style.display = 'block';
                    cp_cr2.style.display = 'block';
                    cp_cr3.style.display = 'block';
                    cp_pw1.style.display = 'block';
                    cp_pw2.style.display = 'block';
                    cp_pw3.style.display = 'block';
                    cp_mt1.style.display = 'block';
                    cp_mt2.style.display = 'block';
                    cp_mt3.style.display = 'block';
                    cp_mt4.style.display = 'block';
                    cp_mt5.style.display = 'block';
                    cp_mt6.style.display = 'block';
                    cp_mtp1.style.display = 'block';
                    cp_mtp2.style.display = 'block';
                    cp_mtp3.style.display = 'block';
                    cp_mtp4.style.display = 'block';
                    cp_mtp5.style.display = 'block';
                    cp_mtp6.style.display = 'block';
                    cp_rh1.style.display = 'block';
                    cp_rh2.style.display = 'block';
                    cp_rh3.style.display = 'block';
                    cp_rh4.style.display = 'block';
                    cp_rh5.style.display = 'block';
                    cp_rh6.style.display = 'block';
                    cp_ps1.style.display = 'block';
                    cp_ps2.style.display = 'block';
                    cp_ps3.style.display = 'block';
                    cp_ps4.style.display = 'block';
                    cp_ps5.style.display = 'block';
                    cp_ps6.style.display = 'block';
                    cp_ht1.style.display = 'block';
                    cp_ht2.style.display = 'block';
                    cp_ht3.style.display = 'block';
                    cp_tf1.style.display = 'block';
                    cp_tf2.style.display = 'block';
                    cp_tf3.style.display = 'block';
                    cp_tu1.style.display = 'block';
                    cp_tu2.style.display = 'block';
                    cp_tu3.style.display = 'block';
                    cp_hu1.style.display = 'block';
                    cp_hu2.style.display = 'block';
                    cp_hu3.style.display = 'block';
                    
                    ut_v1.style.display = 'block';
                    ut_v2.style.display = 'block';
                    ut_v3.style.display = 'block';
                    ut_c1.style.display = 'block';
                    ut_c2.style.display = 'block';
                    ut_c3.style.display = 'block';
                    ut_p1.style.display = 'block';
                    ut_p2.style.display = 'block';
                    ut_p3.style.display = 'block';
                    ut_x1.style.display = 'block';
                    ut_x2.style.display = 'block';
                    ut_g1.style.display = 'block';
                    ut_g2.style.display = 'block';
                    ut_xx1.style.display = 'block';
                    ut_xx2.style.display = 'block';
                    ut_q1.style.display = 'block';
                    ut_q2.style.display = 'block';
                    ut_cw1.style.display = 'block';
                    ut_cw2.style.display = 'block';
                    ut_d1.style.display = 'block';
                    ut_d2.style.display = 'block';
                    ut_t1.style.display = 'block';
                    ut_t2.style.display = 'block';
                    ut_cda1.style.display = 'block';
                    ut_cda2.style.display = 'block';
                    ut_l1.style.display = 'block';
                    ut_l2.style.display = 'block';
                }
                // ABOVE TO COVER THE HIDE SHOW VALUE FROM THE EXISTING DATA - END
            });

            tabs.addEventListener('click', (event) => {
                const target = event.target;
                if (target.tagName !== 'LI') {
                    return;
                }

                const activeTab = document.querySelector('.active');
                activeTab.classList.remove('active');

                const newActiveTab = target;
                newActiveTab.classList.add('active');

                const activeTabContent = document.querySelector('.active.tab-content');
                activeTabContent.classList.remove('active');

                const newActiveTabContentId = newActiveTab.getAttribute('data-tab');
                const newActiveTabContent = document.getElementById(newActiveTabContentId);
                newActiveTabContent.classList.add('active');
            });

            $(".button").click(function () {
                var buttonId = $(this).attr("id");
                $("#modal-container").removeAttr("class").addClass(buttonId);
                $("body").addClass("modal-active");
            });

            $("#modal-container").click(function () {
                $(this).addClass("out");
                $("body").removeClass("modal-active");
            });

            function hasAllVisibleFilled() {
                const visibleSelects = form.querySelectorAll('select:not([hidden]):not([disabled])');
                return [...visibleSelects].every(input => input.value);
            }

            function hasAllRequiredFilled() {
                const requiredInputs = form.querySelectorAll('input:required:not([hidden]):not([disabled])');
                const requiredSelects = form.querySelectorAll('select:required:not([hidden]):not([disabled])');
                return [...requiredInputs, ...requiredSelects].every(input => input.value);
            }

            form.addEventListener('input', () => {
                if (hasAllRequiredFilled()) {
                    if (hasAllVisibleFilled()) {
                        console.log("333");
                        saveButton.style.display = 'block';
                        draftButton.style.display = 'none';
                    } else {
                        console.log("111");
                        draftButton.style.display = 'block';
                        saveButton.style.display = 'none';
                    }
                } else {
                    console.log("2222");
                    draftButton.style.display = 'none';
                    saveButton.style.display = 'none';
                }
            });
        </script>
    </body>
</html>