<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

//connect to mysql database
$connection = mysqli_connect("localhost","ayep","mysql@2023","gest") or die("Error " . mysqli_error($connection));

//fetch data from database
$sql = "SELECT * FROM gest_parameter_detail WHERE master_code = '006'";
$result = mysqli_query($connection, $sql) or die("Error " . mysqli_error($connection));
?>
<!DOCTYPE html>
<html>
<head>
    <title>Autocomplete Textbox in HTML5 PHP and MySQL</title>
</head>
<body>
    <label for="pcategory">Product Category</label>
    <input type="text" list="categoryname" autocomplete="off" id="pcategory">
    <datalist id="categoryname">
        <?php while($row = mysqli_fetch_array($result)) { ?>
            <option value="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></option>
        <?php } ?>
    </datalist>
    <?php mysqli_close($connection); ?>
</body>
</html>