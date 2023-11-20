<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

//$serverName = "mysed-rel-lrt01"; //serverName\instanceName
$user = "sa";
$pass = "bef165!1a";
$db = "LRT_SBN";
//$conn = mysqli_connect($serverName, $user, $pass);




$serverName = "mysed-rel-lrt01";
//$serverName = "10.242.130.87\sqlexpress";
//$serverName = "10.242.130.87";
$connectionInfo = array("Database"=>$db, "UID"=>$user, "PWD"=>$pass);
//$conn = sqlsrv_connect( $serverName, $connectionInfo);
//$conn = mysqli_connect($serverName, $user, $pass);

new mysqli( $serverName );  



//$conn = odbc_connect("DRIVER={Devart ODBC Driver for SQL Server};Server=$serverName;Database=$db; String Types=Unicode", $user, $pass);
//$conn=odbc_connect($serverName,$user,$pass);
//$conn = sqlsrv_connect( $serverName, $connectionInfo);


$conn = new mysqli($serverName, $user, $pass);

if (!$conn) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
mysql_close($link);


?>