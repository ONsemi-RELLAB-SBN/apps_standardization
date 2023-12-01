<?php
$data = array(
    array('oncid' => 'Ayep', 'username' => '', 'name' => '101', 'email' => '', 'title' => '', 'site' => ''),
    array('oncid' => 'Ali', 'username' => '', 'name' => '101', 'email' => '', 'title' => '', 'site' => ''),
    array('oncid' => 'Ahmad', 'username' => '', 'name' => '101', 'email' => '', 'title' => '', 'site' => ''),
    array('oncid' => 'Nik', 'username' => '', 'name' => '101', 'email' => '', 'title' => '', 'site' => ''),
    array('oncid' => 'Siti', 'username' => '', 'name' => '101', 'email' => '', 'title' => '', 'site' => ''),
    array('oncid' => 'Umairah', 'username' => '', 'name' => '101', 'email' => '', 'title' => '', 'site' => ''),
    array('oncid' => 'Nadh', 'username' => '', 'name' => '101', 'email' => '', 'title' => '', 'site' => ''),
    array('oncid' => 'Intan', 'username' => '', 'name' => '101', 'email' => '', 'title' => '', 'site' => ''),
    array('oncid' => 'Suria', 'username' => '', 'name' => '101', 'email' => '', 'title' => '', 'site' => '')
);

$results = array(
    "sEcho" => 1,
    "iTotalRecords" => count($data),
    "iTotalDisplayRecords" => count($data),
    "aaData" => $data);
/* while($row = $result->fetch_array(MYSQLI_ASSOC)){
  $results["data"][] = $row ;
  } */

echo json_encode($results);
?>
	