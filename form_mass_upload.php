<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

use ayep\SimpleXLSX;

ini_set('error_reporting', E_ALL);
ini_set('display_errors', true);

require_once __DIR__ . '\SimpleXLSX.php';

echo '<h2>Upload Standardization Form files below</h2>
<form method="post" enctype="multipart/form-data">
*.XLSM <input type="file" name="file"  />&nbsp;&nbsp;<input type="submit" value="Load" />
</form>';

//echo '<h1>Read several sheets</h1>';

if (isset($_FILES['file'])) {
    if ($xlsx = SimpleXLSX::parse($_FILES['file']['tmp_name'])) {
//        echo '<pre>' . print_r($xlsx->sheetNames(), true) . '</pre>';

        echo '<table cellpadding="10">
            <tr><td valign="top">';

        // output worksheet 1 (index = 0)

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
            if ($k == 2)
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

        // START TABLE HARDWARE
        echo '<table cellpadding="10">
            <tr><td valign="top">';

        $dim = $xlsx->dimension(1);
        $num_cols = $dim[0];
        $num_rows = $dim[1];

        echo '<h2>' . $xlsx->sheetName(1) . '</h2>';
        echo '<table border=1>';
        foreach ($xlsx->rows(1) as $k => $r) {
            if ($k == 0)
                continue;
            if ($k == 1)
                continue;
            for ($j = 0; $j < $num_cols; $j++) {
                if ($j == 1) {
                    if ($r[$j] == '') {
                        if ($k == 3) {
                            echo '<tr><td colspan=' . $num_cols . '>No Data</td></tr>';
                        }
                    } else {
                        echo '<tr>';
                        for ($i = 0; $i < $num_cols; $i++) {
                            echo '<td>' . (!empty($r[$i]) ? $r[$i] : '&nbsp;' ) . '</td>';
                        }
                    }
                }
            }
            echo '</tr>';
        }
        echo '</table>';
        echo '</td></tr></table>';
        // END TABLE HARDWARE
        // START TABLE DAQ
        echo '<table cellpadding="10">
            <tr><td valign="top">';

        $dim = $xlsx->dimension(2);
        $num_cols = $dim[0];
        $num_rows = $dim[1];

        echo '<h2>' . $xlsx->sheetName(2) . '</h2>';
        echo '<table border=1>';
        foreach ($xlsx->rows(1) as $k => $r) {
            if ($k == 0)
                continue;
            if ($k == 1)
                continue;
            for ($j = 0; $j < $num_cols; $j++) {
                if ($j == 1) {
                    if ($r[$j] == '') {
                        if ($k == 3) {
                            echo '<tr><td colspan=' . $num_cols . '>No Data</td></tr>';
                        }
                    } else {
                        echo '<tr>';
                        for ($i = 0; $i < $num_cols; $i++) {
                            echo '<td>' . (!empty($r[$i]) ? $r[$i] : '&nbsp;' ) . '</td>';
                        }
                    }
                }
            }
            echo '</tr>';
        }
        echo '</table>';
        echo '</td></tr></table>';
        // END TABLE DAQ
        // START TABLE PS
        echo '<table cellpadding="10">
            <tr><td valign="top">';

        $dim = $xlsx->dimension(3);
        $num_cols = $dim[0];
        $num_rows = $dim[1];

        echo '<h2>' . $xlsx->sheetName(3) . '</h2>';
        echo '<table border=1>';
        foreach ($xlsx->rows(1) as $k => $r) {
            // SKIP first 3 column for the labelling
            if ($k == 0)
                continue;
            if ($k == 1)
                continue;
            for ($j = 0; $j < $num_cols; $j++) {
                if ($j == 1) {
                    if ($r[$j] == '') {
                        if ($k == 3) {
                            echo '<tr><td colspan=' . $num_cols . '>No Data</td></tr>';
                        }
                    } else {
                        echo '<tr>';
                        for ($i = 0; $i < $num_cols; $i++) {
                            echo '<td>' . (!empty($r[$i]) ? $r[$i] : '&nbsp;' ) . '</td>';
                        }
                    }
                }
            }
            echo '</tr>';
        }
        echo '</table>';
        echo '</td></tr></table>';
        // END TABLE PS
        // START TABLE DESIGN
        echo '<table cellpadding="10">
            <tr><td valign="top">';

        $dim = $xlsx->dimension(4);
        $num_cols = $dim[0];
        $num_rows = $dim[1];

        echo '<h2>' . $xlsx->sheetName(4) . '</h2>';
        echo '<table border=1>';
        foreach ($xlsx->rows(1) as $k => $r) {
            if ($k == 0)
                continue;
            if ($k == 1)
                continue;
            for ($j = 0; $j < $num_cols; $j++) {
                if ($j == 1) {
                    if ($r[$j] == '') {
                        if ($k == 3) {
                            echo '<tr><td colspan=' . $num_cols . '>No Data</td></tr>';
                        }
                    } else {
                        echo '<tr>';
                        for ($i = 0; $i < $num_cols; $i++) {
                            echo '<td>' . (!empty($r[$i]) ? $r[$i] : '&nbsp;' ) . '</td>';
                        }
                    }
                }
            }
            echo '</tr>';
        }
        echo '</table>';
        echo '</td></tr></table>';
        // END TABLE DESIGN
        // START TABLE PROCESS
        echo '<table cellpadding="10">
            <tr><td valign="top">';

        $dim = $xlsx->dimension(5);
        $num_cols = $dim[0];
        $num_rows = $dim[1];

        echo '<h2>' . $xlsx->sheetName(5) . '</h2>';
        echo '<table border=1>';
        foreach ($xlsx->rows(1) as $k => $r) {
            if ($k == 0)
                continue;
            if ($k == 1)
                continue;
            for ($j = 0; $j < $num_cols; $j++) {
                if ($j == 1) {
                    if ($r[$j] == '') {
                        if ($k == 3) {
                            echo '<tr><td colspan=' . $num_cols . '>No Data</td></tr>';
                        }
                    } else {
                        echo '<tr>';
                        for ($i = 0; $i < $num_cols; $i++) {
                            echo '<td>' . (!empty($r[$i]) ? $r[$i] : '&nbsp;' ) . '</td>';
                        }
                    }
                }
            }
            echo '</tr>';
        }
        echo '</table>';
        echo '</td></tr></table>';
        // END TABLE PROCESS
        // START TABLE ELEC TEST
        echo '<table cellpadding="10">
            <tr><td valign="top">';

        $dim = $xlsx->dimension(6);
        $num_cols = $dim[0];
        $num_rows = $dim[1];

        echo '<h2>' . $xlsx->sheetName(6) . '</h2>';
        echo '<table border=1>';
        foreach ($xlsx->rows(1) as $k => $r) {
            if ($k == 0)
                continue;
            if ($k == 1)
                continue;
            for ($j = 0; $j < $num_cols; $j++) {
                if ($j == 1) {
                    if ($r[$j] == '') {
                        if ($k == 3) {
                            echo '<tr><td colspan=' . $num_cols . '>No Data</td></tr>';
                        }
                    } else {
                        echo '<tr>';
                        for ($i = 0; $i < $num_cols; $i++) {
                            echo '<td>' . (!empty($r[$i]) ? $r[$i] : '&nbsp;' ) . '</td>';
                        }
                    }
                }
            }
            echo '</tr>';
        }
        echo '</table>';
        echo '</td></tr></table>';
        // END TABLE ELEC TEST
    } else {
        echo SimpleXLSX::parseError();
    }
}