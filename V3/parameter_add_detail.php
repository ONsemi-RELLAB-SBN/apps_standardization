<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
include 'class/db.php';

$parameter_id = $_GET['masterId'];
$parameter_code = $_GET['masterCode'];
$parameter_nama = $_GET['masterName'];
$detail_code = $_GET['detailsCode'];
$detail_name = $_GET['detailsName'];
$detail_remark = $_GET['remarks'];

$insert = "INSERT INTO gest_parameter_detail(master_code, code, name, remark, created_date, created_by, flag) VALUES('$parameter_code', '$detail_code', '$detail_name', '$detail_remark', NOW(), 'System', '1')";
$upload = mysqli_query($con, $insert);
?>
<script>
    alert('Parameter details successfully added.');
    window.location.href = 'parameter_detail.php?update=<?php echo $parameter_id; ?>';
</script>
<?php mysql_close($handle);