<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
include 'class/db.php';
echo 'THIS IS PAGE TO ADD NEW PARAMETER DETAILS';

//echo '$parameter_id >> ' . $parameter_id;
//echo '$parameter_code >> ' . $parameter_code;
//echo '$parameter_name >> ' . $parameter_name;
//echo '$detail_code >> ' . $detail_code;
//echo '$detail_name >> ' . $detail_name;
//echo '$detail_remark >> ' . $detail_remark;

//echo $_POST['add_details'];

$parameter_id = $_GET['masterId'];
$parameter_code = $_GET['masterCode'];
$parameter_nama = $_GET['paramName'];
$detail_code = $_GET['detailsCode'];
$detail_name = $_GET['detailsName'];
$detail_remark = $_GET['remarks'];

echo '<br>SECOND ROUND';
echo '<br>$parameter_id >> ' . $parameter_id;
echo '<br>$parameter_code >> ' . $parameter_code;
echo '<br>$parameter_nama >> ' . $parameter_nama;
echo '<br>$detail_code >> ' . $detail_code;
echo '<br>$detail_name >> ' . $detail_name;
echo '<br>$detail_remark >> ' . $detail_remark;


$insert = "INSERT INTO gest_parameter_detail(master_code, code, name, remark, created_date, created_by, flag) VALUES('$parameter_code', '$detail_code', '$detail_name', '$detail_remark', NOW(), 'System', '1')";
$upload = mysqli_query($con, $insert);
//$rcustomer2 = mysql_query($insert);
//$new_customer_id = mysql_insert_id();

?>
<script>
    alert('Parameter details successfully added.');
    window.location.href = 'page003.php?update=<?php echo $parameter_id; ?>&search=1';
</script>
<?php mysql_close($handle); ?>