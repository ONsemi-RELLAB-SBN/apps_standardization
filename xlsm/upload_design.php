<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

use ayep\SimpleXLSX;

ini_set('error_reporting', E_ALL);
ini_set('display_errors', true);

require_once __DIR__ . '/../\template\SimpleXLSX.php';

echo '<h2>Upload Design</h2>
<form method="post" enctype="multipart/form-data">
*.XLSM <input type="file" name="file"  />&nbsp;&nbsp;<input type="submit" value="Load" />
</form>';

//echo '<h1>Read several sheets</h1>';

if (isset($_FILES['file'])) {
    if ($xlsx = SimpleXLSX::parse($_FILES['file']['tmp_name'])) {
//        echo '<pre>' . print_r($xlsx->sheetNames(), true) . '</pre>';
        
        if ($xlsx->sheetName(0) == 'DESIGN') {
            echo '<table cellpadding="10">
                <tr><td valign="top">';

            $dim = $xlsx->dimension();
            $num_cols = $dim[0];
            $num_rows = $dim[1];

            echo '<h2>' . $xlsx->sheetName(0) . '</h2>';
            echo '<table border=1 border-collapse=collapse>';
            foreach ($xlsx->rows() as $k => $r) {
                // SKIP first 3 column for the labelling
                if ($k == 0)
                    continue;
                if ($k == 1)
                    continue;
                if ($k == 3)
                    continue;
                for ($j = 0; $j < $num_cols; $j++) {
                    if ($j == 1) {
                        if ($r[$j] == '') {
                            if ($k == 4) {
                                echo '<tr><td colspan=' . $num_cols . '>No Data</td></tr>';
                            }
                        } else {
                            echo '<tr>';
                            for ($i = 0; $i < $num_cols; $i++) {
                                echo '<td>' . (!empty($r[$i]) ? $r[$i] : '&nbsp;' ) . '</td>';
                            }
                            echo '</tr>';
                        }
                    }
                }
            }
            echo '</table>';
            echo '</td></tr></table>';
        } else {
            echo 'You have uploaded an incorrect template. <br>The uploaded template is a ' . $xlsx->sheetName(0) . ' template, but the required template is an Design template. <br>Please check the files before uploading.
                    <br><br>Severity: Medium
                    <br>Action: Please upload the correct template [Design].';
        }
    } else {
        echo SimpleXLSX::parseError();
    }
}