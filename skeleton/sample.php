<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

//include '../form_template.php';
include 'form_template.php';

$query1 = "SELECT MAX(id) as data FROM gest_parameter_master";
$getData = mysqli_query($con, $query1);

if ($getData->num_rows > 0) {
    // output data of each row
    while ($rowF = $getData->fetch_assoc()) {
        $hehe = $rowF['data'];
        $f_number = str_pad($hehe + 1, 3, "0", STR_PAD_LEFT);
    }
} else {
    echo "0 results";
}

if (isset($_POST['add_parameter'])) {

    $parameter_name = $_POST['parameter_name'];
    $parameter_price = $_POST['parameter_price'];
    $parameter_image = $_FILES['parameter_image']['name'];
    $parameter_image_tmp_name = $_FILES['parameter_image']['tmp_name'];
    $parameter_image_folder = 'uploaded_img/' . $parameter_image;

//    if (empty($parameter_name) || empty($parameter_price) || empty($parameter_image)) {
    if (empty($parameter_name) || empty($parameter_price)) {
        $message[] = 'Please fill out this parameter name field.';
    } else {
        $insert = "INSERT INTO gest_parameter_master(name, code, link_image, remark, created_date, created_by, flag) VALUES('$parameter_name', '$parameter_price', '$parameter_image', ' ', NOW(), 'System', '1')";
        $upload = mysqli_query($con, $insert);
        if ($upload) {
            move_uploaded_file($parameter_image_tmp_name, $parameter_image_folder);
            $message[] = 'new parameter added successfully';
        } else {
            $message[] = 'could not add the parameter';
        }
        $last_id = $con->insert_id;
        $s_number = str_pad($last_id, 3, "0", STR_PAD_LEFT);
        $update = "UPDATE gest_parameter_master SET code = '$s_number' WHERE id = '$last_id'";
        $upload = mysqli_query($con, $update);
    }
};

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
//    mysqli_query($con, "DELETE FROM gest_parameter_master WHERE id = $id");
    mysqli_query($con, "UPDATE gest_parameter_master SET flag = 0 WHERE id = $id");
    header('location:parameter.php');
};
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>SAMPLE STANDARD</title>
        <meta name="description" content="">
        <meta name="author" content="Ayep">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="images/favicon.png">

        <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/skeleton.css">

        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    </head>
    <body>
        <div class="sample-form">
            <div class="card">
                <form class="form-horizontal" action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
                    <h4>Parameter Master</h4>
                    <label class="form-group">
                        <input class="input__field" type="text" placeholder="Parameter Name" required/>
                        <span class="input__label">Parameter Name</span>
                    </label>
                    <label class="form-group">
                        <input class="input__field" type="text" placeholder="Parameter Code" value='<?php echo $f_number; ?>' readonly/>
                        <span class="input__label">Parameter Code</span>
                    </label>
                    <div class="form-group">
                        <label for="image"><b style="color:orange">Image</b></label>
                        <input type="file" accept="image/png, image/jpeg, image/jpg" name="parameter_image">
                    </div>
                    <div class="button-group">
                        <button><i class='bx bx-plus-circle bx-fw'></i>Add Parameter</button>
                        <button type="reset"><i class='bx bx-refresh bx-fw'></i>Reset</button>
                    </div>
                </form>
            </div>
            <table class="u-full-width">
                <thead>
                    <tr>
                        <th>Parameter Name</th>
                        <th>Parameter Code</th>
                        <th>Link</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $get_slides = "SELECT * FROM gest_parameter_master WHERE flag = '1' ORDER BY code ASC";
                    $run_slides = mysqli_query($con, $get_slides);
                    while ($row_slides = mysqli_fetch_array($run_slides)):
                        ?>
                        <tr>
                            <!-- FETCHING DATA FROM EACH ROW OF EVERY COLUMN -->
                            <td><?php echo $row_slides['name']; ?></td>
                            <td><?php echo $row_slides['code']; ?></td>
                            <td><?php echo $row_slides['link_image']; ?></td>
                            <td><img src="uploaded_img/<?php echo $row_slides['link_image']; ?>" height="100" alt=""></td>
                            <td style="text-align: center">
                                <a href="parameter_edit.php?edit=<?php echo $row_slides['id']; ?>" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span><i class='bx bxs-pencil bx-fw' ></i> EDIT </a>
                                <a href="parameter_detail.php?update=<?php echo $row_slides['id']; ?>" title="Add Details" data-toggle="tooltip"><span class="fa fa-plus"></span><i class='bx bx-list-plus bx-fw' ></i> ADD DETAIL </a>
                                <a href="parameter.php?delete=<?php echo $row_slides['id']; ?>" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span><i class='bx bxs-trash bx-fw' ></i> DELETE </a>
                            </td>
                        </tr>
                        <?php
                    endwhile;
                    ?>
<!--                    <tr>
                        <td>Dave Gamache</td>
                        <td>26</td>
                        <td>Male</td>
                        <td>Male</td>
                        <td>
                            <a href="parameter_edit.php?edit=<?php echo $row_slides['id']; ?>" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span><i class='bx bxs-pencil bx-fw' ></i> EDIT </a>
                            <a href="parameter_detail.php?update=<?php echo $row_slides['id']; ?>" title="Add Details" data-toggle="tooltip"><span class="fa fa-plus"></span><i class='bx bx-list-plus bx-fw' ></i> ADD DETAIL </a>
                            <a href="parameter.php?delete=<?php echo $row_slides['id']; ?>" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span><i class='bx bxs-trash bx-fw' ></i> DELETE </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Dwayne Johnson</td>
                        <td>42</td>
                        <td>Male</td>
                        <td>Male</td>
                        <td>
                            <a href="parameter_edit.php?edit=<?php echo $row_slides['id']; ?>" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span><i class='bx bxs-pencil bx-fw'></i> EDIT </a>
                            <a href="parameter_detail.php?update=<?php echo $row_slides['id']; ?>" title="Add Details" data-toggle="tooltip"><span class="fa fa-plus"></span><i class='bx bx-list-plus bx-fw'></i> ADD DETAIL </a>
                            <a href="parameter.php?delete=<?php echo $row_slides['id']; ?>" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span><i class='bx bxs-trash bx-fw'></i> DELETE </a>
                        </td>
                    </tr>-->
                </tbody>
            </table>
        </div>
    </body>
</html>