<?php
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

include 'class/db.php';
?>

<script>
    function includeHTML() {
        var z, i, elmnt, file, xhttp;
        /*loop through a collection of all HTML elements:*/
        z = document.getElementsByTagName("*");
        for (i = 0; i < z.length; i++) {
            elmnt = z[i];
            /*search for elements with a certain atrribute:*/
            file = elmnt.getAttribute("w3-include-html");
            if (file) {
                /*make an HTTP request using the attribute value as the file name:*/
                xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function () {
                    if (this.readyState === 4) {
                        if (this.status === 200) {
                            elmnt.innerHTML = this.responseText;
                        }
                        if (this.status === 404) {
                            elmnt.innerHTML = "Page not found.";
                        }
                        /*remove the attribute, and call this function once more:*/
                        elmnt.removeAttribute("w3-include-html");
                        includeHTML();
                    }
                };
                xhttp.open("GET", file, true);
                xhttp.send();
                /*exit the function:*/
                return;
            }
        }
    };
</script>

<h6>General</h6>
<div class="row">
    <div class="two columns"><label for="lab_location">Lab Location *</label></div>
    <div class="three columns">
        <select id="lab_location" name="lab_location" style="width: 100%" required>
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
    <div class="two columns"><label for="strategy">Product Group *</label></div>
    <div class="three columns">
        <select id="strategy" name="strategy" style="width: 100%" required>
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
        <select id="standardization" name="standardization" style="width: 100%" required>
            <option value="" selected=""></option>
            <?php
            $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '004' ORDER BY code ASC";
            $resSite = mysqli_query($con, $sqlDdSite);
            while ($rowSite = mysqli_fetch_array($resSite)):
                ?>
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
            while ($rowSite = mysqli_fetch_array($resSite)):
                ?>
                <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
            <?php endwhile; ?>
        </select>
    </div>
    <div class="one columns">&nbsp;</div>
</div>
<div class="row">
    <div class="two columns"><label for="eqpt_id">Equipment ID *</label></div>
    <div class="three columns">
        <select id="eqpt_id" name="eqpt_id" style="width: 100%" required>
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
    <div class="two columns"><label for="dedicated">Dedicated/Share *</label></div>
    <div class="three columns">
        <select id="dedicated" name="dedicated" style="width: 100%" required>
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
    <div class="two columns"><label for="manufacturer">Equipment Manufacturer *</label></div>
    <div class="three columns">
        <select id="manufacturer" name="manufacturer" style="width: 100%" required>
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
    <div class="two columns"><label for="model">Equipment Model *</label></div>
    <div class="three columns">
        <select id="model" name="model" style="width: 100%" required>
            <option value="" selected=""></option>
            <?php
            $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '010' ORDER BY code ASC";
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
    <div class="two columns"><label for="mfg_date">Equipment Mfg Date *</label></div>
    <div class="three columns"><input type="date" id="mfg_date" name="mfg_date" value="" style="width:55%" required></div>
    <div class="one columns">&nbsp;</div>
    <div class="two columns"><label for="asset_no">Equipment Asset No *</label></div>
    <div class="three columns"><input type="text" id="asset_no" name="asset_no" placeholder="Asset Number" value="" required> </div>
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
            while ($rowSite = mysqli_fetch_array($resSite)):
                ?>
                <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
            <?php endwhile; ?>
        </select>
    </div>
    <div class="six columns" id="transfer" style="display: none">
        <div class="three columns"><label for="from">From? *</label></div>
        <div class="three columns">
            <select id="from" name="from" style="width: 100%" readonly required>
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
</div>

<script>
    function updateToField() {
        var newTransferDropdown = document.getElementById('new_transfer');
        var toField = document.getElementById('from');
        var transField = document.getElementById('transfer');

        if (newTransferDropdown.value === '013001') {
            toField.readOnly = true;
            toField.required = false;
            transField.style.display = 'none';
            $("#from").val('');
        } else {
            toField.readOnly = false;
            toField.required = true;
            transField.style.display = 'block';
        }
    }
</script>

<div class="row">
    <div class="two columns"><label for="relTest">Rel Test (Multiselect) *</label></div>
    <div class="three columns">
        <select name="relTest[]" id="relTest" multiple multiselect-search="true" multiselect-select-all="false" style="width:100%" onchange="updateRelTest()" required>
            <?php
            $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '008' ORDER BY code ASC";
            $resSite = mysqli_query($con, $sqlDdSite);
            while ($rowSite = mysqli_fetch_array($resSite)):
                ?>
                <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
            <?php endwhile; ?>
        </select>
    </div>
    <div class="six columns" id="zoneField" style="display: none">
        <div class="three columns"><label for="zone">Zone *</label></div>
        <div class="three columns"><input type="number" step="0.001" id="zone" name="zone" value="" required></div>
    </div>
</div>

<script>
    function updateRelTest() {
        var newreltest = document.getElementById('relTest');
        var zoneF = document.getElementById('zoneField');
        var zone = document.getElementById('zone');
        var selected = [...newreltest.selectedOptions].map(option => option.value);

        if (selected.includes("008019") || selected.includes("008021")) {
            zone.readOnly = false;
            zone.required = true;
            $("#zone").val('');
            zoneF.style.display = 'block';
        } else {
            zone.readOnly = true;
            zone.required = false;
            zoneF.style.display = 'none';
        }
    }
</script>