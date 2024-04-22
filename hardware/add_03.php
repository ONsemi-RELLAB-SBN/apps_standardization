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
    <head>
        <link rel="stylesheet" href="accordian.css"/>
    </head>
    <body>
        <form id="add_hardware_form" role="form" action="../crud/crud_add_hardware.php" method="get">

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
                            <?php echo getDropdown('004', '004002'); ?>
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
                    <div class="two columns"><label for="assembly_no">Assembly Number *</label></div>
                    <div class="three columns"><input type="text" id="assembly_no" name="assembly_no" placeholder="Assembly Number" value="" required> </div>
                </div>
            </div>

            <div id="content-page">
                <ul id="tabs">
                    <li class="active" data-tab="tabCategory">Category</li>
                    <li data-tab="tabRating">Ratings</li>
                    <li data-tab="tabPcb">PCB</li>
                    <li data-tab="tabEdge">Edgefinger</li>
                    <li data-tab="tabPth">Traces & PTH</li>
                    <li data-tab="tabBoard">Board Frame & Screws</li>
                    <li data-tab="tabComponent">Components on Motherboard</li>
                    <li data-tab="tabSocket">Sockets</li>
                    <li data-tab="tabConnector">Connectors</li>
                    <li data-tab="tabMarking">Markings</li>
                    <li data-tab="tabReview">Application Review</li>
                </ul>

                <div class="tab-content active" id="tabCategory">
                    <p style="color:red; font-size: 11px;margin-bottom: 0.5rem;">* is mandatory field to enable draft saving.</p>
                    <div class="row">
                        <div class="two columns"><label for="category">Category</label></div>
                        <div class="three columns">
                            <select id="category" name="category" style="width: 100%" required onchange="updateSubDropdown()">
                                <?php echo getDropdown('045', ''); ?>
                            </select>
                        </div>
                        <div class="one columns">&nbsp;</div>
                        <div class="two columns"><label for="sub_category">&nbsp;</label></div>
                        <div class="three columns" id="sub-dropdown">
                            <select name="sub_category" id="sub_category" disabled>
                                <option value="">Select Sub Category</option>
                            </select></div>
                        <div class="one columns">&nbsp;</div>
                    </div>
                </div>

                <div class="tab-content" id="tabRating">
                    <div class="row">
                        <div class="two columns"><label for="temperature">Temperature, °C</label></div>
                        <div class="three columns"><input type="text" id="temperature" name="temperature" value="" > </div>
                        <div class="one columns">&nbsp;</div>
                        <div class="two columns"><label for="humidity">Humidity, %</label></div>
                        <div class="three columns"><input type="text" id="humidity" name="humidity" value="" > </div>
                        <div class="one columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="voltage">Voltage, V</label></div>
                        <div class="three columns"><input type="text" id="voltage" name="voltage" value="" > </div>
                        <div class="one columns">&nbsp;</div>
                        <div class="two columns"><label for="current">Overall Current, A</label></div>
                        <div class="three columns"><input type="text" id="current" name="current" value="" > </div>
                        <div class="one columns">&nbsp;</div>
                    </div>
                </div>

                <div class="tab-content" id="tabPcb">
                    <div class="row">
                        <div class="two columns"><label for="pcbMaterial">PCB Material</label></div>
                        <div class="three columns"><input type="text" id="pcbMaterial" name="pcbMaterial" value="" > </div>
                        <div class="one columns">&nbsp;</div>
                        <div class="two columns"><label for="pcbMaterial2">PCB Material Tg, °C</label></div>
                        <div class="three columns"><input type="text" id="pcbMaterial2" name="pcbMaterial2" value="" > </div>
                        <div class="one columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="pcbMoisture">PCB Material Moisture Absorption, %</label></div>
                        <div class="three columns"><input type="text" id="pcbMoisture" name="pcbMoisture" value="" > </div>
                        <div class="one columns">&nbsp;</div>
                        <div class="two columns"><label for="edgeCopper">Edge-to nearest copper distance</label></div>
                        <div class="three columns"><input type="text" id="edgeCopper" name="edgeCopper" value="" > </div>
                        <div class="one columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="pcbThickness">PCB thickness</label></div>
                        <div class="three columns"><input type="text" id="pcbThickness" name="pcbThickness" value="" > </div>
                        <div class="one columns">&nbsp;</div>
                        <div class="two columns"><label for="edgeChamfered">Board Edges should be chamfered</label></div>
                        <div class="three columns"><input type="text" id="edgeChamfered" name="edgeChamfered" value="" > </div>
                        <div class="one columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="surfaceCoat">Surface coating</label></div>
                        <div class="three columns"><input type="text" id="surfaceCoat" name="surfaceCoat" value="" > </div>
                        <div class="one columns">&nbsp;</div>
                        <div class="two columns"><label for="noLayer">Number of layers</label></div>
                        <div class="three columns"><input type="text" id="noLayer" name="noLayer" value="" > </div>
                        <div class="one columns">&nbsp;</div>
                    </div>
                </div>

                <div class="tab-content" id="tabEdge">
                    <div class="row">
                        <div class="two columns"><label for="edgePitch">Edge Finger Pitch</label></div>
                        <div class="three columns"><input type="text" id="edgePitch" name="edgePitch" value="" > </div>
                        <div class="one columns">&nbsp;</div>
                        <div class="two columns"><label for="copperThickness">Copper Thickness, oz.</label></div>
                        <div class="three columns"><input type="text" id="copperThickness" name="copperThickness" value="" > </div>
                        <div class="one columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="traceWidth">Trace Width, mil</label></div>
                        <div class="three columns"><input type="text" id="traceWidth" name="traceWidth" value="" > </div>
                        <div class="one columns">&nbsp;</div>
                        <div class="two columns"><label for="traceSpace">Trace Spacing, mil</label></div>
                        <div class="three columns"><input type="text" id="traceSpace" name="traceSpace" value="" > </div>
                        <div class="one columns">&nbsp;</div>
                    </div>
                </div>

                <div class="tab-content" id="tabPth">
                    <div class="row">
                        <div class="two columns"><label for="traceInternal">Traces placed in internal layers only</label></div>
                        <div class="three columns">
                            <select id="traceInternal" name="traceInternal" style="width: 100%">
                                <?php echo getDropdown('020', ''); ?>
                            </select>
                        </div>
                        <div class="one columns">&nbsp;</div>
                        <div class="two columns"><label for="finalThickness">Final Copper Thickness, oz.</label></div>
                        <div class="three columns"><input type="text" id="finalThickness" name="finalThickness" value="" > </div>
                        <div class="one columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="minTrace">Minimum Trace Width, mil</label></div>
                        <div class="three columns"><input type="text" id="minTrace" name="minTrace" value="" > </div>
                        <div class="one columns">&nbsp;</div>
                        <div class="two columns"><label for="minSpace">Minimum Trace Spacing, mil</label></div>
                        <div class="three columns"><input type="text" id="minSpace" name="minSpace" value="" > </div>
                        <div class="one columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="platedDrill">Plated Through Hole minimum drill size, mil</label></div>
                        <div class="three columns"><input type="text" id="platedDrill" name="platedDrill" value="" > </div>
                        <div class="one columns">&nbsp;</div>
                        <div class="two columns"><label for="impedance">Impedance controlled traces?</label></div>
                        <div class="three columns">
                            <select id="impedance" name="impedance" style="width: 100%">
                                <?php echo getDropdown('020', ''); ?>
                            </select>
                        </div>
                        <div class="one columns">&nbsp;</div>
                    </div>
                </div>

                <div class="tab-content" id="tabBoard">
                    <div class="row">
                        <div class="two columns"><label for="frameChasis">Board Frame/Chassis material</label></div>
                        <div class="three columns"><input type="text" id="frameChasis" name="frameChasis" value="" > </div>
                        <div class="one columns">&nbsp;</div>
                        <div class="two columns"><label for="frameScrew">Board Frame/Chassis > No protruding screw tips</label></div>
                        <div class="three columns">
                            <select id="frameScrew" name="frameScrew" style="width: 100%">
                                <?php echo getDropdown('020', ''); ?>
                            </select>
                        </div>
                        <div class="one columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="frameHandle">Board Frame/Chassis > Handle</label></div>
                        <div class="three columns">
                            <select id="frameHandle" name="frameHandle" style="width: 100%">
                                <?php echo getDropdown('020', ''); ?>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="tab-content" id="tabComponent">
                    <div class="row">
                        <label for="component" style="text-align: left">List components vs part number vs ratings</label>
                        <textarea id="component" name="component" rows="7" cols="100" placeholder="Turret Terminal Pin: 6821-0-00-15-00-00-08-0
                                  Temp rating: melting point 1000C"></textarea>
                    </div>
                </div>

                <div class="tab-content" id="tabSocket">
                    <div class="row">
                        <div class="two columns"><label for="socketPartNo">Socket part number</label></div>
                        <div class="three columns"><input type="text" id="socketPartNo" name="socketPartNo" value="" > </div>
                        <div class="one columns">&nbsp;</div>
                        <div class="two columns"><label for="socketAvail">Socket availability</label></div>
                        <div class="three columns"><input type="text" id="socketAvail" name="socketAvail" value="" > </div>
                        <div class="one columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="socketQty">Socket qty</label></div>
                        <div class="three columns"><input type="text" id="socketQty" name="socketQty" value="" > </div>
                        <div class="one columns">&nbsp;</div>
                        <div class="two columns"><label for="socketPinQty">Socket pin qty</label></div>
                        <div class="three columns"><input type="text" id="socketPinQty" name="socketPinQty" value="" > </div>
                        <div class="one columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="socketPinPitch">Socket pin pitch</label></div>
                        <div class="three columns"><input type="text" id="socketPinPitch" name="socketPinPitch" value="" > </div>
                        <div class="one columns">&nbsp;</div>
                        <div class="two columns"><label for="socketBodyMaterial">Socket body material</label></div>
                        <div class="three columns"><input type="text" id="socketBodyMaterial" name="socketBodyMaterial" value="" > </div>
                        <div class="one columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="socketPinmaterial">Socket pin material</label></div>
                        <div class="three columns"><input type="text" id="socketPinmaterial" name="socketPinmaterial" value="" > </div>
                        <div class="one columns">&nbsp;</div>
                        <div class="two columns"><label for="socketConfig">Socket configuration</label></div>
                        <div class="three columns"><input type="text" id="socketConfig" name="socketConfig" value="" > </div>
                        <div class="one columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="socketVolRate">Socket voltage rating</label></div>
                        <div class="three columns"><input type="text" id="socketVolRate" name="socketVolRate" value="" > </div>
                        <div class="one columns">&nbsp;</div>
                        <div class="two columns"><label for="socketCurrRate">Socket current rating</label></div>
                        <div class="three columns"><input type="text" id="socketCurrRate" name="socketCurrRate" value="" > </div>
                        <div class="one columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="socketTempRate">Socket temperature rating</label></div>
                        <div class="three columns"><input type="text" id="socketTempRate" name="socketTempRate" value="" > </div>
                    </div>
                </div>

                <div class="tab-content" id="tabConnector">
                    <div class="row">
                        <div class="two columns"><label for="connPart">Voltage rating label</label></div>
                        <div class="three columns"><input type="text" id="connPart" name="connPart" value="" > </div>
                        <div class="one columns">&nbsp;</div>
                        <div class="two columns"><label for="connAvail">Connector availability</label></div>
                        <div class="three columns"><input type="text" id="connAvail" name="connAvail" value="" > </div>
                        <div class="one columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="connPinQty">Connector pin qty</label></div>
                        <div class="three columns"><input type="text" id="connPinQty" name="connPinQty" value="" > </div>
                        <div class="one columns">&nbsp;</div>
                        <div class="two columns"><label for="connPinPitch">Connector pin pitch</label></div>
                        <div class="three columns"><input type="text" id="connPinPitch" name="connPinPitch" value="" > </div>
                        <div class="one columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="connBodyMaterial">Connector body material</label></div>
                        <div class="three columns"><input type="text" id="connBodyMaterial" name="connBodyMaterial" value="" > </div>
                        <div class="one columns">&nbsp;</div>
                        <div class="two columns"><label for="connPinMaterial">Connector pin material</label></div>
                        <div class="three columns"><input type="text" id="connPinMaterial" name="connPinMaterial" value="" > </div>
                        <div class="one columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="rateBody">Connector > Stress Rating_Body Mold, <b>&#8451;</b> </label></div>
                        <div class="three columns"><input type="text" id="rateBody" name="rateBody" value="" > </div>
                        <div class="one columns">&nbsp;</div>
                        <div class="two columns"><label for="rateContact">Connector > Stress Rating_Contact, <b>&#8451;</b></label></div>
                        <div class="three columns"><input type="text" id="rateContact" name="rateContact" value="" > </div>
                        <div class="one columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="connVoltRate">Connector voltage rating</label></div>
                        <div class="three columns"><input type="text" id="connVoltRate" name="connVoltRate" value="" > </div>
                        <div class="one columns">&nbsp;</div>
                        <div class="two columns"><label for="connCurrRate">Connector current rating</label></div>
                        <div class="three columns"><input type="text" id="connCurrRate" name="connCurrRate" value="" > </div>
                        <div class="one columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="connTempRate">Connector temperature rating</label></div>
                        <div class="three columns"><input type="text" id="connTempRate" name="connTempRate" value="" > </div>
                        <div class="one columns">&nbsp;</div>
                    </div>
                </div>

                <div class="tab-content" id="tabMarking">
                    <div class="row">
                        <div class="two columns"><label for="voltRate">Voltage rating label</label></div>
                        <div class="three columns">
                            <select id="voltRate" name="voltRate" style="width: 100%" >
                                <?php echo getDropdown('020', ''); ?>
                            </select>
                        </div>
                        <div class="one columns">&nbsp;</div>
                        <div class="two columns"><label for="currRate">Current rating label</label></div>
                        <div class="three columns">
                            <select id="currRate" name="currRate" style="width: 100%" >
                                <?php echo getDropdown('020', ''); ?>
                            </select>
                        </div>
                        <div class="one columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="tempRate">Temperature rating label</label></div>
                        <div class="three columns">
                            <select id="tempRate" name="tempRate" style="width: 100%" >
                                <?php echo getDropdown('020', ''); ?>
                            </select>
                        </div>
                        <div class="one columns">&nbsp;</div>
                        <div class="two columns"><label for="board">Board name</label></div>
                        <div class="three columns">
                            <select id="board" name="board" style="width: 100%" >
                                <?php echo getDropdown('020', ''); ?>
                            </select>
                        </div>
                        <div class="one columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="assNo">Assembly number</label></div>
                        <div class="three columns">
                            <select id="assNo" name="assNo" style="width: 100%" >
                                <?php echo getDropdown('020', ''); ?>
                            </select>
                        </div>
                        <div class="one columns">&nbsp;</div>
                        <div class="two columns"><label for="stressTest">Stress Test Name</label></div>
                        <div class="three columns">
                            <select id="stressTest" name="stressTest" style="width: 100%" >
                                <?php echo getDropdown('020', ''); ?>
                            </select>
                        </div>
                        <div class="one columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="socketNumber">Socket Numbers</label></div>
                        <div class="three columns">
                            <select id="socketNumber" name="socketNumber" style="width: 100%" >
                                <?php echo getDropdown('020', ''); ?>
                            </select>
                        </div>
                        <div class="one columns">&nbsp;</div>
                        <div class="two columns"><label for="pinIndicator">Pin "1" Indicator</label></div>
                        <div class="three columns">
                            <select id="pinIndicator" name="pinIndicator" style="width: 100%" >
                                <?php echo getDropdown('020', ''); ?>
                            </select>
                        </div>
                        <div class="one columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="vendor">Vendor Logo dimension</label></div>
                        <div class="three columns">
                            <select id="vendor" name="vendor" style="width: 100%" >
                                <?php echo getDropdown('020', ''); ?>
                            </select>
                        </div>
                        <div class="one columns">&nbsp;</div>
                        <div class="two columns"><label for="stackup">Stack-up Layer</label></div>
                        <div class="three columns">
                            <select id="stackup" name="stackup" style="width: 100%" >
                                <?php echo getDropdown('020', ''); ?>
                            </select>
                        </div>
                        <div class="one columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="artwork">Artwork Date</label></div>
                        <div class="three columns">
                            <select id="artwork" name="artwork" style="width: 100%" >
                                <?php echo getDropdown('020', ''); ?>
                            </select>
                        </div>
                        <div class="one columns">&nbsp;</div>
                        <div class="two columns"><label for="unidedi">Universal or Dedicated</label></div>
                        <div class="three columns">
                            <select id="unidedi" name="unidedi" style="width: 100%" >
                                <?php echo getDropdown('020', ''); ?>
                            </select>
                        </div>
                        <div class="one columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="dutDensity">DUT Density</label></div>
                        <div class="three columns">
                            <select id="dutDensity" name="dutDensity" style="width: 100%" >
                                <?php echo getDropdown('020', ''); ?>
                            </select>
                        </div>
                        <div class="one columns">&nbsp;</div>
                        <div class="two columns"><label for="looseDut">Loose Component DUT Orientation</label></div>
                        <div class="three columns">
                            <select id="looseDut" name="looseDut" style="width: 100%" >
                                <?php echo getDropdown('020', ''); ?>
                            </select>
                        </div>
                        <div class="one columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="liveBug">Live bug/Dead Bug Orientation</label></div>
                        <div class="three columns">
                            <select id="liveBug" name="liveBug" style="width: 100%" >
                                <?php echo getDropdown('020', ''); ?>
                            </select>
                        </div>
                        <div class="one columns">&nbsp;</div>
                        <div class="two columns"><label for="bibOri">Device and Socket to BIB Orientation</label></div>
                        <div class="three columns">
                            <select id="bibOri" name="bibOri" style="width: 100%" >
                                <?php echo getDropdown('020', ''); ?>
                            </select>
                        </div>
                        <div class="one columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="onsemiLogo">Onsemi Logo</label></div>
                        <div class="three columns">
                            <select id="onsemiLogo" name="onsemiLogo" style="width: 100%" >
                                <?php echo getDropdown('020', ''); ?>
                            </select>
                        </div>
                        <div class="one columns">&nbsp;</div>
                    </div>
                </div>

                <div class="tab-content" id="tabReview">
                    <div class="row">
                        <div class="eleven columns"><label for="r1" style="text-align: left">Verify if the total device current rating is lower than the hardware rating.</label></div>
                    </div>
                    <div class="row">
                        <div class="seven columns"><input type="text" id="r1" name="r1" value="" placeholder="Eg: TBD for the OPN to be run"> </div>
                    </div>
                    <div class="row">
                        <div class="eleven columns"><label for="r2" style="text-align: left">Check components and interconnect wires in schematic vs actual hardware design.</label></div>
                    </div>
                    <div class="row">
                        <div class="seven columns"><input type="text" id="r2" name="r2" value="" placeholder="Eg: TBD for the OPN to be run" > </div>
                    </div>
                    <div class="row">
                        <div class="eleven columns"><label for="r3" style="text-align: left">Check temperature rating (consider derating factor)
                                <br/>Check power dissipation
                                <br/>Check humidity rating
                                <br/>Check current rating
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="seven columns"><input type="text" id="r3" name="r3" value="" placeholder="Eg: TBD for the OPN to be run" > </div>
                    </div>
                    <div class="row">
                        <div class="eleven columns"><label for="r4" style="text-align: left">Check socket fit tightness after x hrs. Socket should not fall off.</label></div>
                    </div>
                    <div class="row">
                        <div class="seven columns"><input type="text" id="r4" name="r4" value="" placeholder="Eg: TBD for the OPN to be run" > </div>
                    </div>
                    <div class="row">
                        <div class="eleven columns"><label for="r5" style="text-align: left">Socket selection. Socket should be open top so that ISG device won’t be damaged. Socket should consider fitting of the heatsink if required.</label></div>
                    </div>
                    <div class="row">
                        <div class="seven columns"><input type="text" id="r5" name="r5" value="" placeholder="Eg: TBD for the OPN to be run" > </div>
                    </div>
                    <div class="row">
                        <div class="eleven columns"><label for="r6" style="text-align: left">If heatsink/load card/flexible wiring is required:
                                <br/>1. Check if board capacity is impacted
                                <br/>2. Check if chamber capacity is impacted
                                <br/>3. Check airflow impact
                                <br/>4. For flexible wire setup, make sure there is no hindrance to insertion of motherboards.
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="seven columns"><input type="text" id="r6" name="r6" value="" placeholder="Eg: Review chamber slot to slot height " > </div>
                    </div>
                </div>


                <div class="tab-content" id="tabCategory">
                    <div class="row">
                        <div class="two columns"><label for="hw_type">Hardware Type *</label></div>
                        <div class="three columns">
                            <select id="hw_type" name="hw_type" style="width: 100%" required>
                                <?php echo getDropdown('019', ''); ?>
                            </select>
                        </div>
                        <div class="one columns">&nbsp;</div>
                        <div class="two columns"><label for="manufacturer">Manufacturer *</label></div>
                        <div class="three columns">
                            <input type="text" list="manufacturer_list" autocomplete="off" id="manufacturer" name="manufacturer" required>
                            <datalist id="manufacturer_list">
                                <?php echo getDataList('018', ''); ?>
                            </datalist>
                        </div>
                        <div class="one columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="assembly_no">Assembly Number *</label></div>
                        <div class="three columns"><input type="text" id="assembly_no" name="assembly_no" placeholder="Assembly Number" value="" required> </div>
                    </div>
                </div>

                <div class="tab-content" id="tabCapability">
                    <div class="row">
                        <div class="two columns"><label for="volt_rating">Voltage Rating</label></div>
                        <div class="two columns"><input type="number" step="0.001" id="volt_rating" name="volt_rating" value="" > </div>
                        <div class="one columns"><label for="volt_rating" style="text-align: left"><b>V</b></label></div>
                        <div class="one columns">&nbsp;</div>
                        <div class="two columns"><label for="curr_rating">Current Rating</label></div>
                        <div class="two columns"><input type="number" step="0.001" id="curr_rating" name="curr_rating" value="" > </div>
                        <div class="one columns"><label for="curr_rating" style="text-align: left"><b>A</b></label></div>
                        <div class="one columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="temp_rating">Temp Rating</label></div>
                        <div class="two columns"><input type="number" step="0.001" id="temp_rating" name="temp_rating" value="" > </div>
                        <div class="one columns"><label for="temp_rating" style="text-align: left"><b>&#8451;</b></label></div>
                        <div class="one columns">&nbsp;</div>
                        <div class="two columns"><label for="support_stress">Supported Stresses</label></div>
                        <div class="three columns">
                            <select id="support_stress" name="support_stress" style="width: 100%" >
                                <?php echo getDropdown('041', ''); ?>
                            </select>
                        </div>
                        <div class="one columns">&nbsp;</div>
                    </div>
                    <div class="row">
                        <div class="two columns"><label for="daq_capability">DAQ Monitoring Capability</label></div>
                        <div class="three columns">
                            <select id="daq_capability" name="daq_capability" style="width: 100%" >
                                <?php echo getDropdown('022', ''); ?>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="tab-content" id="tabCharacter">

                    <div class="accordion">
                        <div class="accordion-item">
                            <a href="#" class="heading">
                                <div class="icon"></div>
                                <div class="title">General</div>
                            </a>
                            <div class="content">
                                <div class="row">
                                    <div class="two columns"><label for="pcb_material">PCB Material</label></div>
                                    <div class="three columns">
                                        <select id="pcb_material" name="pcb_material" style="width: 100%" >
                                            <?php echo getDropdown('042', ''); ?>
                                        </select>
                                    </div>
                                    <div class="one columns">&nbsp;</div>
                                    <div class="two columns"><label for="mb_dimension_l">Motherboard Dimension (L)</label></div>
                                    <div class="two columns"><input type="number" step="0.001" id="mb_dimension_l" name="mb_dimension_l" value="" > </div>
                                    <div class="one columns"><label for="mb_dimension_l" style="text-align: left"><b>mm</b></label></div>
                                    <div class="one columns">&nbsp;</div>
                                </div>
                                <div class="row">
                                    <div class="two columns"><label for="frame_material">Frame Material</label></div>
                                    <div class="three columns">
                                        <select id="frame_material" name="frame_material" style="width: 100%" >
                                            <?php echo getDropdown('043', ''); ?>
                                        </select>
                                    </div>
                                    <div class="one columns">&nbsp;</div>
                                    <div class="two columns"><label for="mb_dimension_w">(W)</label></div>
                                    <div class="two columns"><input type="number" step="0.001" id="mb_dimension_w" name="mb_dimension_w" value="" > </div>
                                    <div class="one columns"><label for="mb_dimension_w" style="text-align: left"><b>mm</b></label></div>
                                    <div class="one columns">&nbsp;</div>
                                </div>
                                <div class="row">
                                    <div class="two columns"><label for="board_coat">Board Coating</label></div>
                                    <div class="three columns">
                                        <select id="board_coat" name="board_coat" style="width: 100%" >
                                            <?php echo getDropdown('044', ''); ?>
                                        </select>
                                    </div>
                                    <div class="one columns">&nbsp;</div>
                                    <div class="two columns"><label for="mb_dimension_t">(T)</label></div>
                                    <div class="two columns"><input type="number" step="0.001" id="mb_dimension_t" name="mb_dimension_t" value="" > </div>
                                    <div class="one columns"><label for="mb_dimension_t" style="text-align: left"><b>mm</b></label></div>
                                    <div class="one columns">&nbsp;</div>
                                </div>
                                <div class="row">
                                    <div class="two columns"><label for="no_layers">Number of Layers</label></div>
                                    <div class="two columns"><input type="number" step="0.001" id="no_layers" name="no_layers" value="" > </div>
                                    <div class="one columns"><label for="no_layers" style="text-align: left"><b>layers</b></label></div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <a href="#" class="heading">
                                <div class="icon"></div>
                                <div class="title">Motherboard to DUT interface</div>
                            </a>
                            <div class="content">
                                <div class="row">
                                    <div class="two columns">
                                        <label for="universal">Universal/dedicated</label>
                                        <label for="toggle_01" class="view-image">Image</label>
                                        <input type="checkbox" id="toggle_01">
                                        <dialog>
                                            <label for="toggle_01" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                                            <img id="myImg" src="../image/hardware/001.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                        </dialog>
                                    </div>
                                    <div class="three columns">
                                        <select id="universal" name="universal" style="width: 100%" >
                                            <?php echo getDropdown('045', ''); ?>
                                        </select>
                                    </div>
                                    <div class="one columns">&nbsp;</div>
                                    <div class="two columns">
                                        <label for="socket_conn_type">Socket/connector type</label>
                                        <label for="toggle_02" class="view-image">Image</label>
                                        <input type="checkbox" id="toggle_02">
                                        <dialog>
                                            <label for="toggle_02" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                                            <img id="myImg" src="../image/hardware/002.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                        </dialog>
                                    </div>
                                    <div class="three columns">
                                        <select id="socket_conn_type" name="socket_conn_type" style="width: 100%" >
                                            <?php echo getDropdown('046', ''); ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="two columns"><label for="socket_conn_qty">Socket/connector qty</label></div>
                                    <div class="two columns"><input type="number" step="0.001" id="socket_conn_qty" name="socket_conn_qty" value="" > </div>
                                    <div class="one columns"><label for="socket_conn_qty" style="text-align: left"><b>pcs</b></label></div>
                                    <div class="one columns">&nbsp;</div>
                                    <div class="two columns"><label for="socket_conn_pin_qty">Socket/connector pin qty</label></div>
                                    <div class="two columns"><input type="number" step="0.001" id="socket_conn_pin_qty" name="socket_conn_pin_qty" value="" > </div>
                                    <div class="one columns"><label for="socket_conn_pin_qty" style="text-align: left"><b>pins</b></label></div>
                                    <div class="one columns">&nbsp;</div>
                                </div>
                                <div class="row">
                                    <div class="two columns"><label for="socket_con_pin_pitch">Socket/connector pin pitch</label></div>
                                    <div class="two columns"><input type="number" step="0.001" id="socket_con_pin_pitch" name="socket_con_pin_pitch" value="" > </div>
                                    <div class="one columns"><label for="socket_con_pin_pitch" style="text-align: left"><b>mm</b></label></div>
                                    <div class="one columns">&nbsp;</div>
                                    <div class="two columns">
                                        <label for="support_package">Supported cards/packages</label>
                                        <label for="toggle_03" class="view-image">Image</label>
                                        <input type="checkbox" id="toggle_03">
                                        <dialog>
                                            <label for="toggle_03" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                                            <img id="myImg" src="../image/hardware/003.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                        </dialog>
                                    </div>
                                    <div class="three columns">
                                        <select id="support_package" name="support_package" style="width: 100%" >
                                            <?php echo getDropdown('047', ''); ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <a href="#" class="heading">
                                <div class="icon"></div>
                                <div class="title">Load Cards</div>
                            </a>
                            <div class="content">
                                <div class="row">
                                    <div class="two columns"><label for="max_load_card_qty">Max load card qty</label></div>
                                    <div class="two columns"><input type="number" step="0.001" id="max_load_card_qty" name="max_load_card_qty" value="" ></div>
                                    <div class="one columns"><label for="max_load_card_qty" style="text-align: left"><b>pcs</b></label></div>
                                    <div class="one columns">&nbsp;</div>
                                    <div class="two columns">
                                        <label for="load_card_pin_qty">Load card pin qty</label>
                                        <label for="toggle_04" class="view-image">Image</label>
                                        <input type="checkbox" id="toggle_04">
                                        <dialog>
                                            <label for="toggle_04" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                                            <img id="myImg" src="../image/hardware/004.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                        </dialog>
                                    </div>
                                    <div class="two columns"><input type="number" step="0.001" id="load_card_pin_qty" name="load_card_pin_qty" value="" > </div>
                                    <div class="one columns"><label for="load_card_pin_qty" style="text-align: left"><b>pins</b></label></div>
                                    <div class="one columns">&nbsp;</div>
                                </div>
                                <div class="row">
                                    <div class="two columns">
                                        <label for="load_card_pin_pitch">Load card pin pitch</label>
                                        <label for="toggle_05" class="view-image">Image</label>
                                        <input type="checkbox" id="toggle_05">
                                        <dialog>
                                            <label for="toggle_05" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                                            <img id="myImg" src="../image/hardware/005.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                        </dialog>
                                    </div>
                                    <div class="two columns"><input type="number" step="0.001" id="load_card_pin_pitch" name="load_card_pin_pitch" value="" ></div>
                                    <div class="one columns"><label for="load_card_pin_pitch" style="text-align: left"><b>mm</b></label></div>
                                    <div class="one columns">&nbsp;</div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <a href="#" class="heading">
                                <div class="icon"></div>
                                <div class="title">Program Cards</div>
                            </a>
                            <div class="content">
                                <div class="row">
                                    <div class="two columns"><label for="max_prog_card_qty">Max program card qty</label></div>
                                    <div class="two columns"><input type="number" step="0.001" id="max_prog_card_qty" name="max_prog_card_qty" value="" ></div>
                                    <div class="one columns"><label for="max_prog_card_qty" style="text-align: left"><b>pcs</b></label></div>
                                    <div class="one columns">&nbsp;</div>
                                    <div class="two columns">
                                        <label for="prog_card_pin_qty">Program card pin qty</label>
                                        <label for="toggle_06" class="view-image">Image</label>
                                        <input type="checkbox" id="toggle_06">
                                        <dialog>
                                            <label for="toggle_06" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                                            <img id="myImg" src="../image/hardware/006.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                        </dialog>
                                    </div>
                                    <div class="two columns"><input type="number" step="0.001" id="prog_card_pin_qty" name="prog_card_pin_qty" value="" > </div>
                                    <div class="one columns"><label for="prog_card_pin_qty" style="text-align: left"><b>pins</b></label></div>
                                    <div class="one columns">&nbsp;</div>
                                </div>
                                <div class="row">
                                    <div class="two columns">
                                        <label for="prog_card_pin_pitch">Program card pin pitch</label>
                                        <label for="toggle_07" class="view-image">Image</label>
                                        <input type="checkbox" id="toggle_07">
                                        <dialog>
                                            <label for="toggle_07" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                                            <img id="myImg" src="../image/hardware/007.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                        </dialog>
                                    </div>
                                    <div class="two columns"><input type="number" step="0.001" id="prog_card_pin_pitch" name="prog_card_pin_pitch" value="" ></div>
                                    <div class="one columns"><label for="prog_card_pin_pitch" style="text-align: left"><b>mm</b></label></div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <a href="#" class="heading">
                                <div class="icon"></div>
                                <div class="title">Motherboard to chamber interface</div>
                            </a>
                            <div class="content">
                                <div class="row">
                                    <div class="two columns">
                                        <label for="conn_type">Connector Type</label>
                                        <label for="toggle_08" class="view-image">Image</label>
                                        <input type="checkbox" id="toggle_08">
                                        <dialog>
                                            <label for="toggle_08" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                                            <img id="myImg" src="../image/hardware/008.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                        </dialog>
                                    </div>
                                    <div class="three columns">
                                        <select id="conn_type" name="conn_type" style="width: 100%" >
                                            <?php echo getDropdown('046', ''); ?>
                                        </select>
                                    </div>
                                    <div class="one columns">&nbsp;</div>
                                    <div class="two columns">
                                        <label for="no_pins">Number of pins</label>
                                        <label for="toggle_09" class="view-image">Image</label>
                                        <input type="checkbox" id="toggle_09">
                                        <dialog>
                                            <label for="toggle_09" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                                            <img id="myImg" src="../image/hardware/009.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                        </dialog>
                                    </div>
                                    <div class="two columns"><input type="number" step="0.001" id="no_pins" name="no_pins" value="" > </div>
                                    <div class="one columns"><label for="no_pins" style="text-align: left"><b>pins</b></label></div>
                                    <div class="one columns">&nbsp;</div>
                                </div>
                                <div class="row">
                                    <div class="two columns">
                                        <label for="pin_pitch">Pin pitch</label>
                                        <label for="toggle_09" class="view-image">Image</label>
                                        <input type="checkbox" id="toggle_09">
                                        <dialog>
                                            <label for="toggle_09" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                                            <img id="myImg" src="../image/hardware/009.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                        </dialog>
                                    </div>
                                    <div class="two columns"><input type="number" step="0.001" id="pin_pitch" name="pin_pitch" value="" > </div>
                                    <div class="one columns"><label for="pin_pitch" style="text-align: left"><b>mm</b></label></div>
                                    <div class="one columns">&nbsp;</div>
                                    <div class="two columns">
                                        <label for="edge_thick">Edgefinger thickness</label>
                                        <label for="toggle_10" class="view-image">Image</label>
                                        <input type="checkbox" id="toggle_10">
                                        <dialog>
                                            <label for="toggle_10" style="color:red"><i class='bx bx-x bx-fw'></i> CLOSE</label>
                                            <img id="myImg" src="../image/hardware/010.png" alt="image" style="width:100%" class="w3-modal-content w3-animate-zoom">
                                        </dialog>
                                    </div>
                                    <div class="two columns"><input type="number" step="0.001" id="edge_thick" name="edge_thick" value="" > </div>
                                    <div class="one columns"><label for="edge_thick" style="text-align: left"><b>mm</b></label></div>
                                    <div class="one columns">&nbsp;</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-content" id="tabCapacity">
                    <div class="row">
                        <div class="two columns"><label for="max_dut_mb">Max DUT qty per motherboard</label></div>
                        <div class="two columns"><input type="number" step="0.001" id="max_dut_mb" name="max_dut_mb" value="" > </div>
                        <div class="one columns"><label for="max_dut_mb" style="text-align: left"><b>DUTs</b></label></div>
                    </div>
                </div>
            </div>

            <button type="submit" id="draft-button" name="draft-button" class="btn"><i class='bx bx-send bx-fw' ></i> DRAFT</button>
            <button type="submit" id="save-button" name="save-button" class="btn"><i class='bx bx-send bx-fw' ></i> SAVE</button>
            <button onclick="location.href = '../list/list_hardware.php'" type="button" id="listBtn" class="btn"><i class='bx bx-list-ol bx-fw' ></i>List</button>
        </form>

        <script src="../js/jquery-3.7.0.js"></script>
        <script src="accordian.js"></script>
        <script>
                const tabs = document.getElementById('tabs');
                const tabContents = document.querySelectorAll('.tab-content');
                const form = document.getElementById('add_hardware_form');
                const draftButton = document.getElementById('draft-button');
                const saveButton = document.getElementById('save-button');

                $(document).ready(function () {
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
                    return [...visibleSelects, ...visibleInputs].every(input => input.value);
                }

                function hasAllRequiredFilled() {
                    const requiredInputs = form.querySelectorAll('input:required:not([hidden]):not([disabled])');
                    const requiredSelects = form.querySelectorAll('select:required:not([hidden]):not([disabled])');
                    return [...requiredInputs, ...requiredSelects].every(input => input.value);
                }

                /*
                 form.addEventListener('input', () => {
                 if (hasAllRequiredFilled()) {
                 if (hasAllVisibleFilled()) {
                 console.log("KAT SINI ADA SAVE BUTTON");
                 saveButton.style.display = 'block';
                 draftButton.style.display = 'none';
                 } else {
                 console.log("SINI DAH DRAFT SAHAJA");
                 draftButton.style.display = 'block';
                 saveButton.style.display = 'none';
                 }
                 } else {
                 console.log("SILA ISI MAKLUMAT");
                 draftButton.style.display = 'none';
                 saveButton.style.display = 'none';
                 }
                 });
                 */

                function updateSubDropdown() {
                    console.log("MASUK BAWAH");
                    var newTransferDropdown = document.getElementById('category');
                    var toField = document.getElementById('sub_category');

                    toField.readOnly = true;
                    toField.style.display = 'none';

                    // AJAX request to load data
                    var selectedValue = newTransferDropdown.value;
                    var targetCode = "";

                    if (selectedValue === "045001") {
                        targetCode = "021";
                        console.log("045001 >> ");
                        toField.readOnly = false;
                        toField.style.display = 'block';
                    } else if (selectedValue === "045002") {
                        targetCode = "023";
                        console.log("045002 +++ ");
                        toField.readOnly = false;
                        toField.style.display = 'block';
                    } else {
                        console.log("SINI MASUK YANG LAIN2 da 045 code");
                    }

                    // Use AJAX to fetch sub-category data based on targetCode
                    var url = "../class/get_parameter.php"; // Replace with your script URL
                    $.ajax({
                        url: url,
                        type: "POST",
                        data: {targetCode: targetCode}, // Send target code to server script
                        success: function (data) {
                            // Clear existing options
                            toField.innerHTML = "";

                            // Parse the data (assuming JSON format)
                            var options = JSON.parse(data);

                            // Create and append new options
                            options.forEach(function (option) {
                                var optionElement = document.createElement("option");
                                optionElement.value = option.value;
                                optionElement.text = option.text;
                                toField.appendChild(optionElement);
                            });

                            // Enable and show the sub-category dropdown
                            toField.disabled = false;
                            toField.style.display = 'block';
                        },
                        error: function (jqXHR, textStatus, errorThrown) {
                            console.error("Error fetching data:", textStatus, errorThrown);
                            // Handle errors (e.g., display an error message)
                        }
                    });

                }
        </script>
    </body>
</html>