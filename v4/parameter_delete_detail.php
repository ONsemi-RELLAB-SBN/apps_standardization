<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
include 'class/db.php';

$detail_id = $_GET['delete'];
$master_id = $_GET['id'];

$delete = "UPDATE gest_parameter_detail SET flag = '0' WHERE id = '$detail_id'";
$update = mysqli_query($con, $delete);
?>
<script>
    alert('Parameter details successful1y deleted');
    window.location.href = 'parameter_detail.php?update=<?php echo $master_id; ?>';
</script>
<?php mysql_close($handle);