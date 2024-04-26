<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

function getParameterDetail($code) {
    include 'db.php';
    $getData = "SELECT * FROM gest_parameter_detail WHERE master_code = '$code' ORDER BY code ASC";
    $rData = mysqli_query($con, $getData);
    while ($rowSite = mysqli_fetch_array($resSite)):
        $data = $row['name'];
    endwhile;
    return $data;
}

function getMultipleParameter($string) {
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

function getDropdown($code, $value) {
    include 'db.php';
    $conn = new mysqli($host, $user, $pass, $db);
    echo 'masuk dekat functoipn sini';
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $data = "<option value=\"\" selected=\"\"></option>";
    $getData = "SELECT * FROM gest_parameter_detail WHERE master_code = '$code' ORDER BY code ASC";
    $result = $conn->query($getData);
    
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            if ($row['code'] == $value) {
                $data .= '<option value="' . $row['code'] . '" selected>' . $row['name'] . '</option>';
            } else {
                $data .= '<option value="' . $row['code'] . '">' . $row['name'] . '</option>';
            }
        }
    } else {
        echo "No data found";
    }
    $conn->close();
    return $data;
}

function getDropdown02($code, $value) {
    include 'db.php';
    $conn = new mysqli($host, $user, $pass, $db);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $data = "";
    $getData = "SELECT * FROM gest_parameter_detail WHERE master_code = '$code' ORDER BY code ASC";
    $result = $conn->query($getData);
    
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            if ($row['code'] == $value) {
                $data .= '<option value="' . $row['code'] . '" selected>' . $row['name'] . '</option>';
            } else {
                $data .= '<option value="' . $row['code'] . '">' . $row['name'] . '</option>';
            }
        }
    } else {
        echo "No data found";
    }
    $conn->close();
    return $data;
}

function getDataList($code, $value) {
    include 'db.php';
    $conn = new mysqli($host, $user, $pass, $db);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $data = "";
    $getData = "SELECT * FROM gest_parameter_detail WHERE master_code = '$code' ORDER BY code ASC";
    $result = $conn->query($getData);
    
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            if ($row['code'] == $value) {
                $data .= '<option value="' . $row['name'] . '" selected>' . $row['name'] . '</option>';
            } else {
                $data .= '<option value="' . $row['name'] . '">' . $row['name'] . '</option>';
            }
        }
    } else {
        echo "No data found";
    }
    $conn->close();
    return $data;
}

/* GET DROPDOWN WITH SUB START */
include "../class/db.php";

if (isset($_POST['getSubCategory']) == "getSubCategory") {
    $countryId = $_POST['catId'];
    $common = new Common();
    $states = $common->getSubCategory($con, $countryId);
    $stateData = '<option value="">Please select categeory</option>';
    if ($states->num_rows > 0) {
        while ($state = $states->fetch_object()) {
            $stateData .= '<option value="' . $state->name . '">' . $state->name . '</option>';
        }
    }
    echo "test^" . $stateData;
}
if (isset($_POST['getStateByCountry']) == "getStateByCountry") {
    $countryId = $_POST['countryId'];
    $common = new Common();
    $states = $common->getSubCategory($con, $countryId);
    $stateData = '<option value="">State</option>';
    if ($states->num_rows > 0) {
        while ($state = $states->fetch_object()) {
            $stateData .= '<option value="' . $state->code . '">' . $state->name . '</option>';
        }
    }
    echo "test^" . $stateData;
}
if (isset($_POST['getStateByCountry']) == "getStateByCountry") {
    $countryId = $_POST['countryId'];
    $common = new Common();
    $states = $common->getStateByCountry($con, $countryId);
    $stateData = '<option value="">State</option>';
    if ($states->num_rows > 0) {
        while ($state = $states->fetch_object()) {
            $stateData .= '<option value="' . $state->code . '">' . $state->name . '</option>';
        }
    }
    echo "test^" . $stateData;
}
if (isset($_POST['getCityByState']) == "getCityByState") {
    $stateId = $_POST['stateId'];
    $common = new Common();
    $cities = $common->getCityByState($con, $stateId);
    $cityData = '<option value="">City</option>';
    if ($cities->num_rows > 0) {
        while ($city = $cities->fetch_object()) {
            $cityData .= '<option value="' . $city->code . '">' . $city->name . '</option>';
        }
    }
    echo "test^" . $cityData;
}

class Common {
    
    public function getSubCategory($con, $catId) {
        $query = "";
        if ($catId == "045001") {
            $query = "SELECT * FROM gest_parameter_detail WHERE master_code = '048'";
        } else if ($catId == "045002") {
            $query = "SELECT * FROM gest_parameter_detail WHERE master_code = '049'";
        } else {
            $query = "SELECT * FROM gest_parameter_detail WHERE master_code = '1049'";
        }
        $result = $con->query($query) or die("Error in  Query" . $con->error);
        return $result;
    }

    public function getCountry($con) {
        $mainQuery = "SELECT * FROM gest_parameter_detail WHERE master_code = '045'";
        $result1 = $con->query($mainQuery) or die("Error in main Query" . $con->error);
        return $result1;
    }

    public function getStateByCountry($con, $countryId) {
        $query = "SELECT * FROM gest_parameter_detail WHERE master_code = '020'";
        $result = $con->query($query) or die("Error in  Query" . $con->error);
        return $result;
    }

    public function getCityByState($con, $stateId) {
        $query = "SELECT * FROM gest_parameter_detail WHERE master_code = '030'";
        $result = $con->query($query) or die("Error in  Query" . $con->error);
        return $result;
    }

}
/* GET DROPDOWN WITH SUB END */