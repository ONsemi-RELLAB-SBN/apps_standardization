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

$insert = "";
$upload = mysqli_query($con, $insert);
?>
<script>
    alert('Parameter details successfully added.');
    window.location.href = 'page003.php?update=<?php echo $parameter_id; ?>&search=1';
</script>
<?php mysql_close($handle); ?>