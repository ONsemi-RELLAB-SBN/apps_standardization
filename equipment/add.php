<?php
/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

include '../template/form.php';
include '../class/get_parameter.php';
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
    
    <script src="../js/jquery-3.7.0.js"></script>
    <script src="../js/multiselect-dropdown.js" ></script>
    
    <head>
        <link rel="stylesheet" href="equipment.css"/>
    </head>

    <body>
        <form id="add_equipment_form" action="../crud/crud_add_equipment_new.php" method="get">
            
                <div id="main-page">
                    <div class="twelve columns">&nbsp;</div>
                    <h5>General</h5>
                    <div class="row">
                        <div class="two columns"><label for="lab_location">Lab Location *</label></div>
                        <div class="three columns">
                            <select id="lab_location" name="lab_location" style="width: 100%" required>
                                <?php echo getDropdown('002', ''); ?>
                            </select>
                        </div>
                        <div class="one columns">&nbsp;</div>
                        <div class="two columns"><label for="strategy">Product Group *</label></div>
                        <div class="three columns">
                            <select id="strategy" name="strategy" style="width: 100%" required>
                                <?php echo getDropdown('003', ''); ?>  
                            </select>
                        </div>
                        <div class="one columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="standardization">Standardization Category *</label></div>
                        <div class="three columns">
                            <select id="standardization" name="standardization" style="width: 100%" required>
                                <?php echo getDropdown('004', '004001'); ?>
                            </select>
                        </div>
                        <div class="one columns">&nbsp;</div>
                        <div class="two columns"><label for="champion">Lab Manager *</label></div>
                        <div class="three columns">
                            <select id="champion" name="champion" style="width: 100%" required>
                                <?php echo getDropdown('005', ''); ?>
                            </select>
                        </div>
                        <div class="one columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="relTest">Rel Test *</label></div>
                        <div class="three columns">
                            <select name="relTest[]" id="relTest" multiple multiselect-search="true" multiselect-select-all="false" style="width:100%" onchange="updateRelTest()" required>
                            <?php echo getDropdown02('008', ''); ?>
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
                                <input type="text" list="eqpt_id_list" autocomplete="off" id="eqpt_id" name="eqpt_id" required>
                                <datalist id="eqpt_id_list">
                                    <?php echo getDataList('006', ''); ?>
                                </datalist>
                            </div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="dedicated">Dedicated/Share</label></div>
                            <div class="three columns">
                                <select id="dedicated" name="dedicated" style="width: 100%">
                                    <?php echo getDropdown('007', ''); ?>
                                </select>
                            </div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="manufacturer">Equipment Manufacturer *</label></div>
                            <div class="three columns">
                                <input type="text" list="manufacturer_list" autocomplete="off" id="manufacturer" name="manufacturer" required>
                                <datalist id="manufacturer_list">
                                    <?php echo getDataList('009', ''); ?>
                                </datalist>
                            </div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="model">Equipment Model *</label></div>
                            <div class="three columns">
                                <input type="text" list="model_list" autocomplete="off" id="model" name="model" required>
                                <datalist id="model_list">
                                    <?php echo getDataList('010', ''); ?>
                                </datalist>
                            </div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="mfg_date">Equipment Mfg Date</label></div>
                        <div class="three columns"><input type="date" id="mfg_date" name="mfg_date" value="" style="width:55%" ></div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="asset_no">Equipment Asset No</label></div>
                        <div class="three columns"><input type="text" id="asset_no" name="asset_no" placeholder="Asset Number" value="" > </div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="new_transfer">New/Transfer Equipment</label></div>
                            <div class="three columns">
                                <select id="new_transfer" name="new_transfer" style="width: 100%" onchange="updateToField()" >
                                    <?php echo getDropdown('013', ''); ?>
                                </select>
                            </div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="from" id="fromLabel">From</label></div>
                            <div class="three columns">
                                <select id="from" name="from" style="width: 100%">
                                   <?php echo getDropdown('014', ''); ?>
                                </select>
                            </div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="zone">Zone</label></div>
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
//                                    toField.required = true;
                                    transField.style.display = 'block';
                                    toField.style.display = 'block';
                                }
                            }

                            function updateRelTest() {
                                var newreltest = document.getElementById('relTest');
                                var reltest = [...newreltest.selectedOptions].map(option => option.value);
                                
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
                                
                                console.log("newreltest :: " + newreltest);
                                console.log("reltest :: " + reltest);
                                
//                                if (reltest === '008016') {                               // PTC
                                if (reltest.includes('008016')) {
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
                                } else if (reltest.includes('008012')) {                        // IOL
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
                                } else if (reltest.includes('008005')) {                        // HAST 008005
                                    console.log("HAST");
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
                                } else if (reltest.includes('008003') || reltest.includes('008004') || reltest.includes('008020')) {            // H3T, H3TRB, THB
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
                                } else if (reltest.includes('008002') || reltest.includes('008006') || reltest.includes('008007') || reltest.includes('008008') || reltest.includes('008010')) {            // ELFR, HTRB, HTGB, HTFB, HTOL
                                    console.log("ELFR, HTRB, HTGB, HTFB, HTOL");
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
                                } else if (reltest.includes('008013')) {                        // LTOL
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
                                } else if (reltest.includes('008018')) {                        // SSOL
                                    console.log("SSOL");
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
                                } else if (reltest.includes('008001') || reltest.includes('008023')) {          // AC, UHAST
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
                                } else if (reltest.includes('008022')) {                        // THU
                                    console.log("THU");
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
                                } else if (reltest.includes('008015')) {                        // MSL
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
                                } else if (reltest.includes('008017')) {                        // RTHS
                                    console.log("RTHS");
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
                                } else if (reltest.includes('008021')) {                        // THS
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
                                } else if (reltest.includes('008009')) {                        // HTHS
                                    console.log("HTHS");
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
                                } else if (reltest.includes('008011')) {                        // HTSL
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
                                } else if (reltest.includes('008014')) {                        // LTSL
                                    console.log("LTSL");
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
                                } else if (reltest.includes('008019')) {                        // TC
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
                                    console.log("APPEAR ALL");
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
                            <div class="two columns"><label for="volt_rating" id="labelvoltrating1">Voltage Rating</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="volt_rating" name="volt_rating" value="" > </div>
                            <div class="one columns"><label for="volt_rating" id="labelvoltrating2" style="text-align: left"><b>V</b></label></div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="volt_control" id="labelcoltcontrol1">Voltage Control Accuracy</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="volt_control" name="volt_control" value="" > </div>
                            <div class="one columns"><label for="volt_control" id="labelcoltcontrol2" style="text-align: left"><b>%</b></label></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="curr_rating" id="labelcurrrating1">Current Rating</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="curr_rating" name="curr_rating" value="" > </div>
                            <div class="one columns"><label for="curr_rating" id="labelcurrrating2" style="text-align: left"><b>A</b></label></div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="power_rating" id="labelpowerrating1">Power Rating</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="power_rating" name="power_rating" value="" > </div>
                            <div class="one columns"><label for="power_rating" id="labelpowerrating2" style="text-align: left"><b>W</b></label></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="min_time" id="labelmintimer1">Min. Timer Setting</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="min_time" name="min_time" value="" > </div>
                            <div class="one columns"><label for="min_time" id="labelmintimer2" style="text-align: left"><b>s</b></label></div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="max_time" id="labelmaxtimer1">Max. Timer Setting</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="max_time" name="max_time" value="" > </div>
                            <div class="one columns"><label for="max_time" id="labelmaxtimer2" style="text-align: left"><b>s</b></label></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="min_temp" id="labelmintemp1">Min. Temperature</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="min_temp" name="min_temp" value="" > </div>
                            <div class="one columns"><label for="min_temp" id="labelmintemp2" style="text-align: left"><b>&#176;C</b></label></div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="max_temp" id="labelmaxtemp1">Max. Temperature</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="max_temp" name="max_temp" value="" > </div>
                            <div class="one columns"><label for="max_temp" id="labelmaxtemp2" style="text-align: left"><b>&#176;C</b></label></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="minRh" id="labelminrh1">Min. RH</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="minRh" name="minRh" value="" > </div>
                            <div class="one columns"><label for="minRh" id="labelminrh2" style="text-align: left"><b>%</b></label></div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="maxRh" id="labelmaxrh1">Max. RH</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="maxRh" name="maxRh" value="" > </div>
                            <div class="one columns"><label for="maxRh" id="labelmaxrh2" style="text-align: left"><b>%</b></label></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="min_pressure" id="labelminpressure1">Minimum Pressure</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="min_pressure" name="min_pressure" value="" > </div>
                            <div class="one columns"><label for="min_pressure" id="labelminpressure2" style="text-align: left"><b>psi</b></label></div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="max_pressure" id="labelmaxpressure1">Maximum Pressure</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="max_pressure" name="max_pressure" value="" > </div>
                            <div class="one columns"><label for="max_pressure" id="labelmaxpressure2" style="text-align: left"><b>psi</b></label></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="heat_dissipation" id="labelheat1">Heat Dissipation</label></div>
                            <div class="two columns"><input type="text" id="heat_dissipation" name="heat_dissipation" value="" > </div>
                            <div class="two columns"><label for="heat_dissipation" id="labelheat2" style="text-align: left"><b>W</b></label></div>
                            <div class="two columns" id="labeltempfluc1">
                                <label for="temp_fluctuation">Temperature Fluctuation</label>
                                <label for="toggle_01" class="view-image">Image</label>
                                <input type="checkbox" id="toggle_01">
                                <dialog>
                                    <label for="toggle_01" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                                    <img id="myImg" src="../image/equipment/001.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                </dialog>
                            </div>
                            <div class="two columns">
                                <input type="number" step="0.001" id="temp_fluctuation" name="temp_fluctuation" value="" >
                                </div>
                            <div class="one columns"><label for="temp_fluctuation" id="labeltempfluc2" style="text-align: left"><b>&#176;C</b></label></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns" id="labeltempuniform1">
                                <label for="temp_uniform">Temperature Uniformity</label>
                                <label for="toggle_02" class="view-image">Image</label>
                                <input type="checkbox" id="toggle_02">
                                <dialog>
                                    <label for="toggle_02" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                                    <img id="myImg" src="../image/equipment/002.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                </dialog>
                            </div>
                            <div class="two columns"><input type="number" step="0.001" id="temp_uniform" name="temp_uniform" value="" ></div>
                            <div class="one columns"><label for="temp_uniform" id="labeltempuniform2" style="text-align: left"><b>&#176;C</b></label></div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns" id="labelhumid1">
                                <label for="humid_fluctuation">Humidity Fluctuation</label>
                                <label for="toggle_03" class="view-image">Image</label>
                                <input type="checkbox" id="toggle_03">
                                <dialog>
                                    <label for="toggle_03" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                                    <img id="myImg" src="../image/equipment/003.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                </dialog>
                            </div>
                            <div class="two columns"><input type="number" step="0.001" id="humid_fluctuation" name="humid_fluctuation" value="" > </div>
                            <div class="one columns"><label for="humid_fluctuation" id="labelhumid2" style="text-align: left"><b>%</b></label></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                    </div>

                    <div class="tab-content" id="tabCrtr">
                        <div class="row">
                            <div class="two columns">
                                <label for="no_interior">No. Interior Zones (doors)</label>
                                <label for="toggle_06" class="view-image">Image</label>
                                <input type="checkbox" id="toggle_06">
                                <dialog>
                                    <label for="toggle_06" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                                    <img id="myImg" src="../image/equipment/006.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                </dialog>
                            </div>
                            <div class="two columns"><input type="number" step="0.001" id="no_interior" name="no_interior" value="" > </div>
                            <div class="one columns"><label for="no_interior" style="text-align: left"><b>Zone</b></label></div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns">
                                <label for="ext_dimension_w">External Dimension (W)</label>
                                <label for="toggle_04" class="view-image">Image</label>
                                <input type="checkbox" id="toggle_04">
                                <dialog>
                                    <label for="toggle_04" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                                    <img id="myImg" src="../image/equipment/004.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                </dialog>
                            </div>
                            <div class="two columns"><input type="number" step="0.001" id="ext_dimension_w" name="ext_dimension_w" value="" > </div>
                            <div class="one columns"><label for="ext_dimension_w" style="text-align: left"><b>mm</b></label></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns">
                                <label for="int_volume">Internal Volume</label>
                                <label for="toggle_08" class="view-image">Image</label>
                                <input type="checkbox" id="toggle_08">
                                <dialog>
                                    <label for="toggle_08" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                                    <img id="myImg" src="../image/equipment/008.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                </dialog>
                            </div>
                            <div class="two columns"><input type="number" step="0.001" id="int_volume" name="int_volume" value="" > </div>
                            <div class="one columns"><label for="int_volume" style="text-align: left"><b>L</b></label></div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="ext_dimension_d">(D)</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="ext_dimension_d" name="ext_dimension_d" value="" > </div>
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
                                    <?php echo getDropdown('015', ''); ?>
                                </select>
                            </div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="ext_dimension_h">(H)</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="ext_dimension_h" name="ext_dimension_h" value="" > </div>
                            <div class="one columns"><label for="ext_dimension_h" style="text-align: left"><b>mm</b></label></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="rack_material">Rack Material</label></div>
<!--                            <div class="three columns">
                                <select id="rack_material" name="rack_material" style="width: 100%" >
                                    <?php // echo getDropdown('016', ''); ?>
                                </select>
                            </div>-->
                            <div class="three columns">
                                <input type="text" list="rack_list" autocomplete="off" id="rack_material" name="rack_material">
                                <datalist id="rack_list">
                                    <?php echo getDataList('016', ''); ?>
                                </datalist>
                            </div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns">
                                <label for="int_dimension_w">Internal Dimension (W)</label>
                                <label for="toggle_05" class="view-image">Image</label>
                                <input type="checkbox" id="toggle_05">
                                <dialog>
                                    <label for="toggle_05" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                                    <img id="myImg" src="../image/equipment/005.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                </dialog>
                            </div>
                            <div class="two columns"><input type="number" step="0.001" id="int_dimension_w" name="int_dimension_w" value="" > </div>
                            <div class="one columns"><label for="int_dimension_w" style="text-align: left"><b>mm</b></label></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns">
                                <label for="rack_slot_pitch">Rack Slot-to-Slot Pitch</label>
                                <label for="toggle_10" class="view-image">Image</label>
                                <input type="checkbox" id="toggle_10">
                                <dialog>
                                    <label for="toggle_10" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                                    <img id="myImg" src="../image/equipment/010.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                </dialog>
                            </div>
                            <div class="two columns"><input type="number" step="0.001" id="rack_slot_pitch" name="rack_slot_pitch" value="" ></div>
                            <div class="one columns"><label for="rack_slot_pitch" style="text-align: left"><b>mm</b></label></div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="int_dimension_d">(D)</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="int_dimension_d" name="int_dimension_d" value="" > </div>
                            <div class="one columns"><label for="int_dimension_d" style="text-align: left"><b>mm</b></label></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns">
                                <label for="rack_slot_width">Rack Slot Width</label>
                                <label for="toggle_11" class="view-image">Image</label>
                                <input type="checkbox" id="toggle_11">
                                <dialog>
                                    <label for="toggle_11" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                                    <img id="myImg" src="../image/equipment/011.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                </dialog>
                            </div>
                            <div class="two columns"><input type="number" step="0.001" id="rack_slot_width" name="rack_slot_width" value="" > </div>
                            <div class="one columns"><label for="rack_slot_width" style="text-align: left"><b>mm</b></label></div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="int_dimension_h">(H)</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="int_dimension_h" name="int_dimension_h" value="" > </div>
                            <div class="one columns"><label for="int_dimension_h" style="text-align: left"><b>mm</b></label></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="eqpt_weight">Equipment Weight</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="eqpt_weight" name="eqpt_weight" value="" > </div>
                            <div class="one columns"><label for="eqpt_weight" style="text-align: left"><b>Kg</b></label></div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns">
                                <label for="rack_dimension_w">Rack Dimension (W)</label>
                                <label for="toggle_07" class="view-image">Image</label>
                                <input type="checkbox" id="toggle_07">
                                <dialog>
                                    <label for="toggle_07" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                                    <img id="myImg" src="../image/equipment/007.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                </dialog>
                            </div>
                            <div class="two columns"><input type="number" step="0.001" id="rack_dimension_w" name="rack_dimension_w" value="" > </div>
                            <div class="one columns"><label for="rack_dimension_w" style="text-align: left"><b>mm</b></label></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns">
                                <label for="no_mb_slot">Number of motherboard slots</label>
                                <label for="toggle_12" class="view-image">Image</label>
                                <input type="checkbox" id="toggle_12">
                                <dialog>
                                    <label for="toggle_12" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                                    <img id="myImg" src="../image/equipment/012.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                </dialog>
                            </div>
                            <div class="two columns"><input type="number" step="0.001" id="no_mb_slot" name="no_mb_slot" value="" ></div>
                            <div class="one columns"><label for="no_mb_slot" style="text-align: left"><b>Slot</b></label></div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="rack_dimension_d">(D)</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="rack_dimension_d" name="rack_dimension_d" value="" > </div>
                            <div class="one columns"><label for="rack_dimension_d" style="text-align: left"><b>mm</b></label></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns">
                                <label for="max_ps_bs">Max number of power supplies per board slot</label>
                                <label for="toggle_13" class="view-image">Image</label>
                                <input type="checkbox" id="toggle_13">
                                <dialog>
                                    <label for="toggle_13" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                                    <img id="myImg" src="../image/equipment/013.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                </dialog>
                            </div>
                            <div class="two columns"><input type="number" step="0.001" id="max_ps_bs" name="max_ps_bs" value="" > </div>
                            <div class="one columns"><label for="max_ps_bs" style="text-align: left"><b>Slot</b></label></div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="rack_dimension_h">(H)</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="rack_dimension_h" name="rack_dimension_h" value="" > </div>
                            <div class="one columns"><label for="rack_dimension_h" style="text-align: left"><b>mm</b></label></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns">
                                <label for="max_ps">Max number of power supplies for the entire Equipment</label>
                                <label for="toggle_14" class="view-image">Image</label>
                                <input type="checkbox" id="toggle_14">
                                <dialog>
                                    <label for="toggle_14" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                                    <img id="myImg" src="../image/equipment/014.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                </dialog>
                            </div>
                            <div class="two columns"><input type="number" step="0.001" id="max_ps" name="max_ps" value="" > </div>
                            <div class="one columns"><label for="max_ps" style="text-align: left"><b>Unit</b></label></div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="diameter">Diameter</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="diameter" name="diameter" value="" > </div>
                            <div class="one columns"><label for="diameter" style="text-align: left"><b>mm</b></label></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns">
                                <label for="airflow">Airflow</label>
                                <label for="toggle_15" class="view-image">Image</label>
                                <input type="checkbox" id="toggle_15">
                                <dialog>
                                    <label for="toggle_15" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                                    <img id="myImg" src="../image/equipment/015.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                </dialog>
                            </div>
                            <div class="three columns">
                                <select id="airflow" name="airflow" style="width: 100%" >
                                    <?php echo getDropdown('017', ''); ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="tab-content" id="tabSafe">
                        <div class="row">
                            <div class="two columns"><label for="tempProtection1">Temperature Protection 1</label></div>
                            <div class="three columns">
                                <select id="tempProtection1" name="tempProtection1" style="width: 100%" >
                                    <?php echo getDropdown('022', ''); ?>
                                </select>
                            </div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="tempProtection2">Temperature Protection 2</label></div>
                            <div class="three columns">
                                <select id="tempProtection2" name="tempProtection2" style="width: 100%" >
                                    <?php echo getDropdown('022', ''); ?>
                                </select>
                            </div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="tempThermostat3">Temperature Protection / Thermostat 3</label></div>
                            <div class="three columns">
                                <select id="tempThermostat3" name="tempThermostat3" style="width: 100%" >
                                    <?php echo getDropdown('022', ''); ?>
                                </select>
                            </div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="smoke_detector">Smoke Detector/Alarm</label></div>
                            <div class="three columns">
                                <select id="smoke_detector" name="smoke_detector" style="width: 100%" >
                                    <?php echo getDropdown('022', ''); ?>
                                </select>
                            </div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="press_switch">Pressure Switch</label></div>
                            <div class="three columns">
                                <select id="press_switch" name="press_switch" style="width: 100%" >
                                    <?php echo getDropdown('022', ''); ?>
                                </select>
                            </div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="safety_valve">Safety Valve</label></div>
                            <div class="three columns">
                                <select id="safety_valve" name="safety_valve" style="width: 100%" >
                                    <?php echo getDropdown('022', ''); ?>
                                </select>
                            </div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="emo">EMO button</label></div>
                            <div class="three columns">
                                <select id="emo" name="emo" style="width: 100%" >
                                    <?php echo getDropdown('022', ''); ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="tab-content" id="tabUtlt">
                        <div class="row">
                            <div class="two columns"><label for="voltage" id="labelvoltage1">Voltage</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="voltage" name="voltage" value="" > </div>
                            <div class="one columns"><label for="voltage" id="labelvoltage2" style="text-align: left"><b>V</b></label></div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="current" id="labelcurrent1">Current</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="current" name="current" value="" > </div>
                            <div class="one columns"><label for="current" id="labelcurrent2" style="text-align: left"><b>A</b></label></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="phase" id="labelphase1">Phase</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="phase" name="phase" value="" > </div>
                            <div class="one columns"><label for="phase" id="labelphase2" style="text-align: left"><b>Phase</b></label></div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="exhaust" id="labelexhaust">Exhaust</label></div>
                            <div class="three columns">
                                <select id="exhaust" name="exhaust" style="width: 100%" >
                                    <?php echo getDropdown('028', ''); ?>
                                </select>
                            </div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="chilled_water" id="labelchill">Chilled Water</label></div>
                            <div class="three columns">
                                <select id="chilled_water" name="chilled_water" style="width: 100%">
                                    <?php echo getDropdown('022', ''); ?>
                                </select>
                            </div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="liquid_nitrogen" id="labelliquid">Liquid Nitrogen</label></div>
                            <div class="three columns">
                                <select id="liquid_nitrogen" name="liquid_nitrogen" style="width: 100%" >
                                    <?php echo getDropdown('022', ''); ?>
                                </select>
                            </div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="lan" id="labellan">LAN</label></div>
                            <div class="three columns">
                                <select id="lan" name="lan" style="width: 100%">
                                    <?php echo getDropdown('021', ''); ?>
                                </select>
                            </div>
                            <div class="one columns" >&nbsp;</div>
                            <div class="two columns"><label for="cda" id="labelcda">CDA</label></div>
                            <div class="three columns">
                                <select id="cda" name="cda" style="width: 100%" >
                                    <?php echo getDropdown('021', ''); ?>
                                </select>
                            </div>
                            <div class="one columns" >&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="n2gas" id="labelgas">N2 Gas</label></div>
                            <div class="three columns">
                                <select id="n2gas" name="n2gas" style="width: 100%" onchange="updateGas()">
                                    <?php echo getDropdown('022', ''); ?>
                                </select>
                            </div>
                            <div class="one columns" >&nbsp;</div>
                            <div class="two columns"><label for="oxygen_level" id="labelexygen">Oxygen Level Detector</label></div>
                            <div class="three columns">
                                <select id="oxygen_level" name="oxygen_level" style="width: 100%">
                                    <?php echo getDropdown('022', ''); ?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="di_water" id="labeldiwater">DI Water</label></div>
                            <div class="three columns">
                                <select id="di_water" name="di_water" style="width: 100%" onchange="updateToFieldWater()">
                                    <?php echo getDropdown('022', ''); ?>
                                </select>
                            </div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="water_topup" id="labeltopup">Water Top-up System</label></div>
                            <div class="three columns">
                                <select id="water_topup" name="water_topup" style="width: 100%">
                                    <?php echo getDropdown('030', ''); ?>
                                </select>
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
//                                    oxyField.required = true;
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
//                                    waterField.required = true;
                                    waterField.style.display = 'block';
                                    topapField.style.display = 'block';
                                }
                            }
                        </script>
                    </div>

                    <div class="tab-content" id="tabDaq">
                        <div class="row">
                            <div class="two columns"><label for="daq">DAQ (Realtime Leakage Monitoring)</label></div>
                            <div class="three columns">
                                <select id="daq" name="daq" style="width: 100%">
                                    <?php echo getDropdown('021', ''); ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="tab-content" id="tabInt">
                        <div class="row">
                            <div class="two columns">
                                <label for="int_config_type">Configuration Type</label>
                                <label for="toggle_16" class="view-image">Image</label>
                                <input type="checkbox" id="toggle_16">
                                <dialog>
                                    <label for="toggle_16" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                                    <img id="myImg" src="../image/equipment/016.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                </dialog>
                            </div>
                            <div class="three columns">
                                <select id="int_config_type" name="int_config_type" style="width: 100%" onchange="updateDiv()">
                                    <?php echo getDropdown('031', ''); ?>
                                </select>
                            </div>
<!--                            <div class="three columns">
                                <input type="text" list="internal_list" autocomplete="off" id="int_config_type" name="int_config_type" onchange="updateDiv()">
                                <datalist id="internal_list">
                                    <?php echo getDataList('031', ''); ?>
                                </datalist>
                            </div>-->
                        </div>
                        
                        <div class="row" id="divvoltcurrent">
                            <div class="two columns"><label for="conn_volt_rating">Connector Voltage Rating</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="conn_volt_rating" name="conn_volt_rating" value="" > </div>
                            <div class="one columns"><label for="conn_volt_rating" style="text-align: left"><b>V</b></label></div>
                            <div class="one columns">
                                <label for="toggle_17" class="view-image">Image</label>
                                <input type="checkbox" id="toggle_17">
                                <dialog>
                                    <label for="toggle_17" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                                    <img id="myImg" src="../image/equipment/017.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                </dialog>
                            </div>
                            <div class="two columns"><label for="conn_curr_rating">Connector Current Rating</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="conn_curr_rating" name="conn_curr_rating" value="" > </div>
                            <div class="one columns"><label for="conn_curr_rating" style="text-align: left"><b>A</b></label></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="conn_temp_rating" id="labelconntemprate1">Connector Temp Rating</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="conn_temp_rating" name="conn_temp_rating" value="" > </div>
                            <div class="one columns"><label for="conn_temp_rating" id="labelconntemprate2" style="text-align: left"><b>&#176;C</b></label></div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="banana_jack_hole" id="labelbananajack1">No. Banana Jack Holes</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="banana_jack_hole" name="banana_jack_hole" value="" > </div>
                            <div class="one columns"><label for="banana_jack_hole" id="labelbananajack2" style="text-align: left"><b>Pins</b></label></div>
                        </div>
                        <div class="row" id="divPin">
                            <div class="two columns"><label for="no_pins">No. of Pins</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="no_pins" name="no_pins" value="" > </div>
                            <div class="one columns"><label for="no_pins" style="text-align: left"><b>Pins</b></label></div>
                            <div class="one columns">
                                <label for="toggle_18" class="view-image">Image</label>
                                <input type="checkbox" id="toggle_18">
                                <dialog>
                                    <label for="toggle_18" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                                    <img id="myImg" src="../image/equipment/018.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                </dialog>
                            </div>
                            <div class="two columns"><label for="pin_pitch">Pin Pitch</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="pin_pitch" name="pin_pitch" value="" > </div>
                            <div class="one columns"><label for="pin_pitch" style="text-align: left"><b>mm</b></label></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row" id="divconrack">
                            <div class="two columns"><label for="conn_rack">No. Wires Connected to Rack</label></div>
                            <div class="two columns"><input type="number" step="0.001" id="conn_rack" name="conn_rack" value="" > </div>
                            <div class="one columns"><label for="conn_rack" style="text-align: left"><b>&#176;C</b></label></div>
                        </div>
                        <div class="row" id="WireDiv" name="WireDiv"" style="display: none;">
                            <div class="row">
                                <div class="two columns"><label for="wire_volt_rating">Wire Voltage Rating</label></div>
                                <div class="two columns"><input type="number" step="0.001" id="wire_volt_rating" name="wire_volt_rating" value="" > </div>
                                <div class="one columns"><label for="wire_volt_rating" style="text-align: left"><b>V</b></label></div>
                                <div class="one columns">&nbsp;</div>
                                <div class="two columns"><label for="wire_curr_rating">Wire Current Rating</label></div>
                                <div class="two columns"><input type="number" step="0.001" id="wire_curr_rating" name="wire_curr_rating" value="" > </div>
                                <div class="one columns"><label for="wire_curr_rating" style="text-align: left"><b>A</b></label></div>
                                <div class="one columns">&nbsp;</div>
                            </div>
                            <div class="row">
                                <div class="two columns"><label for="wire_temp_rating">Wire Temp Rating</label></div>
                                <div class="two columns"><input type="number" step="0.001" id="wire_temp_rating" name="wire_temp_rating" value=""> </div>
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
                                <label for="ext_config_type">Configuration Type</label>
                                <label for="toggle_20" class="view-image">Image</label>
                                <input type="checkbox" id="toggle_20">
                                <dialog>
                                    <label for="toggle_20" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                                    <img id="myImg" src="../image/equipment/020.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                </dialog>
                            </div>
                            <div class="three columns">
                                <select id="ext_config_type" name="ext_config_type" style="width: 100%" ">
                                    <?php echo getDropdown('032', ''); ?>
                                </select>
                            </div>
<!--                            <div class="three columns">
                                <input type="text" list="external_list" autocomplete="off" id="ext_config_type" name="ext_config_type" onchange="updateView()">
                                <datalist id="external_list">
                                    <?php echo getDataList('032', ''); ?>
                                </datalist>
                            </div>-->
                        </div>
                        <div class="row" id="viewExternalDiv" name="viewExternalDiv" style="display: none;">
                            <div class="row">
                                <div class="two columns"><label for="interface_volt_rating">Interface Voltage Rating</label></div>
                                <div class="two columns"><input type="number" step="0.001" id="interface_volt_rating" name="interface_volt_rating" value="" > </div>
                                <div class="one columns"><label for="interface_volt_rating" style="text-align: left"><b>V</b></label></div>
                                <div class="one columns">&nbsp;</div>
                                <div class="two columns"><label for="interface_curr_rating">Interface Current Rating</label></div>
                                <div class="two columns"><input type="number" step="0.001" id="interface_curr_rating" name="interface_curr_rating" value="" > </div>
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
            
            <button type="submit" id="draft-button" class="btn"><i class='bx bx-send bx-fw' ></i> DRAFT</button>
            <button type="submit" id="save-button" class="btn"><i class='bx bx-send bx-fw' ></i> SAVE</button>
            <button onclick="location.href = '../list/list_equipment.php'" type="button" id="listBtn" class="btn"><i class='bx bx-list-ol bx-fw' ></i>List</button>
        </form>

        <script>
            const tabs = document.getElementById('tabs');
            const tabContents = document.querySelectorAll('.tab-content');
            const form = document.getElementById('add_equipment_form');
            const draftButton = document.getElementById('draft-button');
            const saveButton = document.getElementById('save-button');
            
            $( document ).ready(function() {
                console.log("ready");
                draftButton.style.display = 'none';
                saveButton.style.display = 'none';
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
                const visibleInputs = form.querySelectorAll('input:not([hidden]):not([disabled])');
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
                        saveButton.style.display = 'block';
                        draftButton.style.display = 'none';
                    } else {
                        draftButton.style.display = 'block';
                        saveButton.style.display = 'none';
                    }
                } else {
                    draftButton.style.display = 'none';
                    saveButton.style.display = 'none';
                }
            });
        </script>
    </body>
</html>