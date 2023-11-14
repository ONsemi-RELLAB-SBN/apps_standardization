<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

use ayep\SimpleXLSX;

ini_set('error_reporting', E_ALL);
ini_set('display_errors', true);

require_once __DIR__.'\SimpleXLSX.php';
$data = '';
echo '<h1>EQUIPMENT FORM - MASS UPLOAD</h1>';

if (isset($_FILES['file'])) {
    if ($xlsx = SimpleXLSX::parse($_FILES['file']['tmp_name'])) {
        echo '<h2>Parsing Result</h2>';
        echo '<table border="1" cellpadding="3" style="border-collapse: collapse">';

        $dim = $xlsx->dimension();
        $cols = $dim[0];

        foreach ($xlsx->readRows() as $k => $r) {
//            if ($k == 0) continue; // skip first row
//            if ($k == 1) continue; // skip second row
//            if ($k == 2) continue; // skip third row
            echo '<tr>';
            for ($i = 0; $i < $cols; $i ++) {
                echo '<td>' . ( isset($r[ $i ]) ? $r[ $i ] : '&nbsp;' ) . '</td>';
                $data[$i] .= $r[$i];
            }
            echo '</tr>';
        }
        echo '</table>';
    } else {
        echo SimpleXLSX::parseError();
    }
    
}
echo '<h2>Upload equipment form excel below</h2>
<form method="post" enctype="multipart/form-data">
*.XLSX <input type="file" name="file"  />&nbsp;&nbsp;<input type="submit" value="Parse" />
</form>';

echo 'DATA RAW KITA >> ' . $data;
