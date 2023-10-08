<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

include 'class/db.php';

$parameter_id = $_GET['masterId'];
$parameter_code = $_GET['masterCode'];
$parameter_nama = $_GET['paramName'];
$detail_code = $_GET['detailsCode'];
$detail_name = $_GET['detailsName'];
$detail_remark = $_GET['remarks'];

$delete = "DELETE FROM gest_parameter_detail WHERE id=25 AND master_code='017' AND code='017002' AND name='air flow 2' AND remark='etst 2' AND flag=1 LIMIT 1";
$update = mysqli_query($con, $delete);
?>
<script>
    alert('Parameter details successful1ly dele1ted');
    window.location.href = 'page003.php?update=<?php echo $parameter_id; ?>';
</script>
<?php mysql_close($handle); ?>