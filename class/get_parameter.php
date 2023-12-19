<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

//include 'db.php';

//echo '<br> 001 :: ' . $host;
//echo '<br> 002 :: ' . $user;
//echo '<br> 003 :: ' . $pass;
//echo '<br> 004 :: ' . $db;

function getParameterDetail($code) {
    include 'db.php';
    $getData = "SELECT * FROM gest_parameter_detail WHERE master_code = '$code' ORDER BY code ASC";
    $rData = mysqli_query($con, $getData);
    while ($rowSite = mysqli_fetch_array($resSite)):
        $data = $row['name'];
    endwhile;
//    echo 'test query' . $data;
    return $data;
}

function getMultipleParameter($string) {
//    $mysqli = new mysqli('localhost', 'ayep', 'mysql@2023', 'gest');
    include 'db.php';
    $mysqli = new mysqli($host, $user, $pass, $db);
    if ($mysqli->connect_errno) {
        echo 'Failed to connect to MySQL: (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error;
        exit;
    }

    $codes = explode(',', $string);
    $values = [];
    foreach ($codes as $code) {
        $query = 'SELECT name FROM gest_parameter_detail WHERE code = \'' . $code . '\'';
        $result = $mysqli->query($query);
        if (!$result) {
            echo 'Failed to execute query: (' . $mysqli->errno . ') ' . $mysqli->error;
            exit;
        }

        $row = $result->fetch_assoc();
        $values[] = $row['name'];
    }
    $mysqli->close();

    return implode(', ', $values);
}

function getParameterValue($code) {
//    $servername = "localhost";
//    $username = "ayep";
//    $password = "mysql@2023";
//    $dbname = "gest";
    $data = "";
    
    if ($code == "") {
        echo "";
    } else {
        include 'db.php';
        $conn = new mysqli($host, $user, $pass, $db);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $query = "SELECT name FROM gest_parameter_detail WHERE CODE = '$code'";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data = $row['name'];
            }
        } else {
            echo "No data found";
        }

        $conn->close();
    }
    return $data;
}

function getParameterValues($string) {
    include 'db.php';
    $mysqli = new mysqli($host, $user, $pass, $db);
    if ($mysqli->connect_errno) {
        echo 'Failed to connect to MySQL: (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error;
        exit;
    }

    $codes = explode(',', $string);
    $values = [];
    foreach ($codes as $code) {
        $query = 'SELECT name FROM gest_parameter_detail WHERE code = \'' . $code . '\'';
        $result = $mysqli->query($query);
        if (!$result) {
            echo 'Failed to execute query: (' . $mysqli->errno . ') ' . $mysqli->error;
            exit;
        }

        $row = $result->fetch_assoc();
        $values[] = $row['name'];
    }
    $mysqli->close();

    return implode(', ', $values);
}

function getCode($value, $code, $username) {
    
    $latestCode = '';
    if ($value == '') {
        $code = '';
    } else {
        include 'db.php';

        $qry = "SELECT * FROM gest_parameter_detail WHERE master_code = '$code' AND name = '$value'";
        $result = $con->query($qry);

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $latestCode = $row['code'];
            }
        } else {
            $slt = "SELECT LPAD(MAX(CODE)+1, 6, 0) as data FROM gest_parameter_detail WHERE master_code = '$code'";
            $result = $con->query($slt);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $latestCode = $row['data'];
                }
            }
            $qeyAdd = "INSERT INTO gest_parameter_detail (master_code, code, name, remark, created_date, created_by, flag) VALUES ('$code', '$latestCode', '$value', NULL, NOW(), '$username', 1)";
            $upload = mysqli_query($con, $qeyAdd);
        }
        $con->close();
    }
    return $latestCode;
}

function getDropdown($code) {
    $getData = "SELECT * FROM gest_parameter_detail WHERE master_code = '$code' ORDER BY code ASC";
    $rData = mysqli_query($con, $getData);
    while ($rowSite = mysqli_fetch_array($resSite)):
        $data = $row['name'];
    endwhile;
    echo 'test query' . $data;
    return "";
}

function getDropdownValue($code, $value) {
    return "";
}