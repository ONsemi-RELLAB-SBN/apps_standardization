<?php
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

include '../class/ldap.php';
include '../class/db.php';
$id = $_GET['delete'];

// sql to delete a record
$sql = "UPDATE gest_form_daq SET flag = '0', delete_by = '$username', delete_date = NOW() WHERE id = '$id'";

if ($con->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $con->error;
}
$con->close();
?>
<script>
    alert('Record DAQ deleted successfully');
    window.location.href = 'list.php';
</script>