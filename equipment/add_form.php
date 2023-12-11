<?php
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

include '../template/form.php';
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
        <link rel="stylesheet" href="../css/skeleton.css"/>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="../js/jquery-3.7.0.js"></script>
        <script src="../js/multiselect-dropdown.js" ></script>
        
        <style>
            input[type=text], input[type=password] {
                width: 100%;
                /*padding: 15px;*/
                /*margin: 5px 0 22px 0;*/
                display: inline-block;
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
                right: 240px;
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
                right: 140px;
                z-index: 99;
                font-size: 18px;
                border: none;
                outline: none;
                cursor: pointer;
            }

            #draft-button:hover {
                background-color: orange;
                color: white;
            }
            
            .accordion-header .subtitle .accordion-button {
                border-left-color: orange;
                color: orange;
            }
        </style>

        <script type="text/javascript">
            
        </script>
    </head>

    <body>
        <div>&nbsp;</div>
        <div>&nbsp;</div>
        <div>&nbsp;</div>
        <form id="add_equipment_form" action="../crud/crud_add_equipment.php" method="get">
            <h6 id="general" class="subtitle">General</h6>
            <div class="row">
                <div class="two columns"><label for="lab_location">Lab Location *</label></div>
                <div class="three columns">
                    <select id="lab_location" name="lab_location" style="width: 100%" required>
                        <option value="" selected=""></option>
                        <?php 
                        $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '002' ORDER BY code ASC";
                        $resSite = mysqli_query($con, $sqlDdSite);
                        while ($rowSite = mysqli_fetch_array($resSite)): ?>
                            <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
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
                            <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
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
                            <option value="<?php echo $rowSite['code']; ?>" <?php if ($rowSite['code'] === "004001") { ?>selected<?php } ?>><?php echo $rowSite['name']; ?></option>
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
                            <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                        <?php endwhile; ?>
                    </select>
                </div>
                <div class="one columns">&nbsp;</div>
            </div>
            
            <div class="accordion accordion-flush" id="accordionGeneral">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-head-identity">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coll-identity" aria-expanded="false" aria-controls="flush-coll-identity">
                            Equipment Identity
                        </button>
                    </h2>
                    <div id="flush-coll-identity" class="accordion-collapse collapse" aria-labelledby="flush-head-identity" data-bs-parent="#accordionGeneral">
                        <div class="row">
                            <div class="two columns"><label for="eqpt_id">Equipment ID *</label></div>
                            <div class="three columns">
        <!--                        <select id="eqpt_id" name="eqpt_id" style="width: 100%" required>
                                    <option value="" selected=""></option>
                                    <?php 
                                    $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '006' ORDER BY code ASC";
                                    $resSite = mysqli_query($con, $sqlDdSite);
                                    while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                        <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                                    <?php endwhile; ?>
                                </select>-->
                                <input type="text" list="eqpt_id_list" autocomplete="off" id="eqpt_id" name="eqpt_id">
                                <datalist id="eqpt_id_list">
                                    <?php 
                                    $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '006' ORDER BY code ASC";
                                    $result = mysqli_query($con, $sqlDdSite);
                                    while($row = mysqli_fetch_array($result)) { ?>
                                        <option value="<?php echo $row['code']; ?>"><?php echo $row['name']; ?></option>
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
                                        <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                                    <?php endwhile; ?>
                                </select>
                            </div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="manufacturer">Equipment Manufacturer *</label></div>
                            <div class="three columns">
                                <select id="manufacturer" name="manufacturer" style="width: 100%" required>
                                    <option value="" selected=""></option>
                                    <?php 
                                    $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '009' ORDER BY code ASC";
                                    $resSite = mysqli_query($con, $sqlDdSite);
                                    while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                        <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                                    <?php endwhile; ?>
                                </select>
        <!--                        <input type="text" list="manufacturer_list" autocomplete="off" id="manufacturer" name="manufacturer">
                                <datalist id="manufacturer_list">
                                    <?php 
                                    $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '009' ORDER BY code ASC";
                                    $result = mysqli_query($con, $sqlDdSite);
                                    while($row = mysqli_fetch_array($result)) { ?>
                                        <option value="<?php echo $row['code']; ?>"><?php echo $row['name']; ?></option>
                                    <?php } ?>
                                </datalist>-->
                            </div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="model">Equipment Model *</label></div>
                            <div class="three columns">
                                <select id="model" name="model" style="width: 100%" required>
                                    <option value="" selected=""></option>
                                    <?php 
                                    $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '010' ORDER BY code ASC";
                                    $resSite = mysqli_query($con, $sqlDdSite);
                                    while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                        <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                                    <?php endwhile; ?>
                                </select>
        <!--                        <input type="text" list="model_list" autocomplete="off" id="model" name="model">
                                <datalist id="model_list">
                                    <?php 
                                    $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '010' ORDER BY code ASC";
                                    $result = mysqli_query($con, $sqlDdSite);
                                    while($row = mysqli_fetch_array($result)) { ?>
                                        <option value="<?php echo $row['code']; ?>"><?php echo $row['name']; ?></option>
                                    <?php } ?>
                                </datalist>-->
                            </div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="mfg_date">Equipment Mfg Date *</label></div>
                            <div class="three columns"><input type="date" id="mfg_date" name="mfg_date" value="" style="width:55%" required></div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="asset_no">Equipment Asset No *</label></div>
                            <div class="three columns"><input type="text" id="asset_no" name="asset_no" placeholder="Asset Number" value="" required> </div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        <div class="row">
                            <div class="two columns"><label for="relTest">Rel Test (Multiselect) *</label></div>
                            <div class="three columns">
                                <select name="relTest[]" id="relTest" multiselect-search="true" multiselect-select-all="false" style="width:100%" onchange="updateRelTest()" >
                                    <option value="" selected=""></option>
                                    <?php
                                    $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '008' ORDER BY code ASC";
                                    $resSite = mysqli_query($con, $sqlDdSite);
                                    while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                            <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                                    <?php endwhile; ?>
                                </select>
                            </div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="zone">Zone *</label></div>
                            <div class="three columns"><input type="number" step="0.001" id="zone" name="zone" value="" required></div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                        
                        <script>
                            function updateRelTest() {
                                var newreltest = document.getElementById('relTest');
                                var zoneF = document.getElementById('zoneField');
                                var zone = document.getElementById('zone');
                                var selected = [...newreltest.selectedOptions].map(option => option.value);

                                if (selected.includes("008019") || selected.includes("008021")) {
//                                    zone.readOnly = false;
//                                    zone.required = true;
//                                    $("#zone").val('');
//                                    zoneF.style.display = 'block';
                                } else {
//                                    zone.readOnly = true;
//                                    zone.required = false;
//                                    zoneF.style.display = 'none';
                                }
                            }
                            
                            function updateToField() {
                                var newTransferDropdown = document.getElementById('new_transfer');
                                var toField = document.getElementById('from');
                                var fromlabel = document.getElementById('fromlabel');

                                if (newTransferDropdown.value === '013001') {
                                    toField.readOnly = true;
                                    toField.required = false;
                                    $("#from").val('');
                                    toField.style.display = 'none';
                                    fromlabel.style.display = 'none';
                                } else {
                                    toField.readOnly = false;
                                    toField.required = true;
                                    toField.style.display = 'block';
                                    fromlabel.style.display = 'block';
                                }
                            }
                        </script>
                        
                        <div class="row">
                            <div class="two columns"><label for="new_transfer">New/Transfer Equipment *</label></div>
                            <div class="three columns">
                                <select id="new_transfer" name="new_transfer" style="width: 100%" onchange="updateToField()" required>
                                    <option value="" selected=""></option>
                                    <?php
                                    $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '013' ORDER BY code ASC";
                                    $resSite = mysqli_query($con, $sqlDdSite);
                                    while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                        <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                                        <?php endwhile; ?>
                                </select>
                            </div>
                            <div class="one columns">&nbsp;</div>
                            <div class="two columns"><label for="from" id="fromlabel">From? *</label></div>
                            <div class="three columns">
                                <select id="from" name="from" style="width: 100%" readonly required>
                                    <option value="" selected=""></option>
                                    <?php
                                    $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '014' ORDER BY code ASC";
                                    $resSite = mysqli_query($con, $sqlDdSite);
                                    while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                        <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                                    <?php endwhile; ?>
                                </select>
                            </div>
                            <div class="one columns">&nbsp;</div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-head-capability">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coll-capability" aria-expanded="false" aria-controls="flush-coll-capability">
                            Capability
                        </button>
                    </h2>
                    <div id="flush-coll-capability" class="accordion-collapse collapse" aria-labelledby="flush-head-capability" data-bs-parent="#accordionGeneral">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-head-characteristic">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coll-characteristic" aria-expanded="false" aria-controls="flush-coll-characteristic">
                            Characteristic
                        </button>
                    </h2>
                    <div id="flush-coll-characteristic" class="accordion-collapse collapse" aria-labelledby="flush-head-characteristic" data-bs-parent="#accordionGeneral">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-head-safety">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coll-safety" aria-expanded="false" aria-controls="flush-coll-safety">
                            Safety
                        </button>
                    </h2>
                    <div id="flush-coll-safety" class="accordion-collapse collapse" aria-labelledby="flush-head-safety" data-bs-parent="#accordionGeneral">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-head-utility">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coll-utility" aria-expanded="false" aria-controls="flush-coll-utility">
                            Utilities
                        </button>
                    </h2>
                    <div id="flush-coll-utility" class="accordion-collapse collapse" aria-labelledby="flush-head-utility" data-bs-parent="#accordionGeneral">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-head-daq">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coll-daq" aria-expanded="false" aria-controls="flush-coll-daq">
                            DAQ
                        </button>
                    </h2>
                    <div id="flush-coll-daq" class="accordion-collapse collapse" aria-labelledby="flush-head-daq" data-bs-parent="#accordionGeneral">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-head-internal">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coll-internal" aria-expanded="false" aria-controls="flush-coll-internal">
                            Internal Chamber Configuration
                        </button>
                    </h2>
                    <div id="flush-coll-internal" class="accordion-collapse collapse" aria-labelledby="flush-head-internal" data-bs-parent="#accordionGeneral">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-head-external">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-coll-external" aria-expanded="false" aria-controls="flush-coll-external">
                            External Chamber Configuration
                        </button>
                    </h2>
                    <div id="flush-coll-external" class="accordion-collapse collapse" aria-labelledby="flush-head-external" data-bs-parent="#accordionGeneral">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                    </div>
                </div>
            </div>
            
            <button type="submit" id="draft-button" class="btn"><i class='bx bx-send bx-fw' ></i> DRAFT</button>
            <button type="submit" id="save-button" class="btn"><i class='bx bx-send bx-fw' ></i> SAVE</button>
            <button onclick="location.href = '../list/list_equipment.php'" type="button" id="listBtn" class="btn"><i class='bx bx-list-ol bx-fw' ></i>List</button>
        </form>
        
        <script>
            const form = document.getElementById('add_equipment_form');
            const draftButton = document.getElementById('draft-button');
            const saveButton = document.getElementById('save-button');
            
            $( document ).ready(function() {
                console.log( "ready!" );
//                draftButton.style.display = 'none';
//                saveButton.style.display = 'none';
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
                    console.log("111");
                    draftButton.style.display = 'block';
                    saveButton.style.display = 'none';
                } else {
                    console.log("2222");
                    draftButton.style.display = 'none';
                    saveButton.style.display = 'none';
                }

                if (hasAllVisibleFilled()) {
                    console.log("333");
                    saveButton.style.display = 'block';
                    draftButton.style.display = 'none';
                } else {
                    console.log("4444");
                    saveButton.style.display = 'none';
                }
            });
        </script>
    </body>
</html>