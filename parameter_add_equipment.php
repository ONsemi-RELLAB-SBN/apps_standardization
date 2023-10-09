<?php
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
include 'class/db.php';
?>
THIS IS THE PAGE TO ADD THE EQUIPMENT - IN PHP

<?php
$labLocation = $_GET['labLocation'];
$strategy = $_GET['strategy'];
$standardization = $_GET['standardization'];
$champion = $_GET['champion'];
$eqptId = $_GET['eqptId'];
$dedicated = $_GET['dedicated'];
//$rel_test = $_GET['relTest'];



echo '<br>$labLocation >>>> ' . $labLocation;
echo '<br>$strategy >>>> ' . $strategy;
echo '<br>$standardization >>>> ' . $standardization;
echo '<br>$champion >>>> ' . $champion;
echo '<br>$eqptId >>>> ' . $eqptId;
echo '<br>$dedicated >>>> ' . $dedicated;
//echo '<br>$rel_test >>>> '. $rel_test;


echo '<br>baca data rel test (multi) <br>';
foreach ($_GET['relTest'] as $subject)
        print "You selected $subject<br/>";

if (isset($_GET["relTest"])) {
    echo '<br>some selected';
    // Retrieving each selected option
    foreach ($_GET['relTest'] as $subject)
        print "<br>You selected $subject<br/>";
} else {
    echo '<br>nothing is selected, not detected';
}


if (isset($_GET["relTest"])) {
    echo '<br> OK, teKAN SUBMIT';
} else {
    echo '<br> TAKDE DEETECT ANY CUBMIT PUN';
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $selectedOptions = $_POST['relTest'];

    if (!empty($selectedOptions)) {
        foreach ($selectedOptions as $option) {
            echo $option . '<br>';
        }
    } else {
        echo 'No options selected.';
    }
}