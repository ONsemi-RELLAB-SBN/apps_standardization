<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
include 'class/db.php';

$master_id = $_GET['masterId'];
$master_name = $_GET['masterName'];
$master_code = $_GET['masterCode'];
$detail_code = $_GET['detailsCode'];
$detail_name = $_GET['detailsName'];
$remark = $_GET['remarks'];
$updatek = $_GET['update_details'];
$detail_id = $_GET['detailId'];

$update = "UPDATE gest_parameter_detail SET flag = '1', name = '$detail_name', remark = '$remark' WHERE id = '$detail_id'";
$upload = mysqli_query($con, $update);
?>
<script>
    alert('Parameter details successful1y updated');
    window.location.href = 'parameter_detail.php?update=<?php echo $master_id; ?>';
</script>
<?php mysql_close($handle);