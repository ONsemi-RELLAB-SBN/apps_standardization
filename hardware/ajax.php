<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

include "../class/db.php";

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