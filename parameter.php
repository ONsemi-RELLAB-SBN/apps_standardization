<?php
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
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
    $parameter_code = $_POST['parameter_code'];
    $parameter_image = $_FILES['parameter_image']['name'];
    $parameter_image_tmp_name = $_FILES['parameter_image']['tmp_name'];
    $parameter_image_folder = 'uploaded_img/' . $parameter_image;

//    if (empty($parameter_name) || empty($parameter_price) || empty($parameter_image)) {
    if (empty($parameter_name) || empty($parameter_code)) {
        $message[] = 'Please fill out this parameter name field.';
    } else {
        $insert = "INSERT INTO gest_parameter_master(name, code, link_image, remark, created_date, created_by, flag) VALUES('$parameter_name', '$parameter_code', '$parameter_image', ' ', NOW(), 'System', '1')";
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
<html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Parameter</title>
        <meta name="author" content="Ayep" />
        <link rel="shortcut icon" href="image/logo/onsemi_logo.ico">

        <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="css/normalize.css">
        <link rel="stylesheet" type="text/css" href="css/skeleton.css">
        <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'>

        <style>
            body {
                font-size: 1em;
            }

            h2 {
                font-size: 1.5em;
            }
        </style>

        <script>

        </script>

    </head>
    <body>
        <?php
        if (isset($message)) {
            foreach ($message as $message) {
                echo '<br><br><span class="message" style="color:red">' . $message . '</span>';
            }
        }
        ?>
        <div class="row">&nbsp;</div>
        <div class="sample-form">
            <div class="row">&nbsp;</div>
            <div>
                <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
                    <h2 style="border-left: none">Parameter Master</h2>
                    <label class="form-row">
                        <input class="form-row-field" type="text" placeholder="Parameter Name" name="parameter_name" required/>
                        <span class="form-row-label">Parameter Name</span>
                    </label>
                    <label class="form-row">
                        <input class="form-row-field" type="text" placeholder="Parameter Code" name="parameter_code" value='<?php echo $f_number; ?>' />
                        <span class="form-row-label">Parameter Code</span>
                    </label>
                    <div class="form-row" id="drop-area">
                        <label for="image" class="u-pull-left"><b style="color:orange">Image</b></label>
                        <input type="file" accept="image/png, image/jpeg, image/jpg" name="parameter_image" class="file-upload-wrapper">
                    </div>
                    <div class="button-group">
                        <button name="add_parameter" class="btn btn-lg"><i class='bx bx-plus bx-flashing-hover bx-fw' ></i>Add Parameter</button>
                        <button type="reset"><i class='bx bx-refresh bx-fw'></i>Reset</button>
                    </div>
                </form>
            </div>
            <table class="u-full-width">
                <h2 style="border-left: none;margin-top:50px">Parameter Master List</h2>
                <thead>
                    <tr>
                        <th><b>Parameter Name</b></th>
                        <th><b>Parameter Code</b></th>
                        <th><b>Link</b></th>
                        <th><b>Image</b></th>
                        <th style="text-align: center"><b>Action</b></th>
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
                                <a href="parameter_detail.php?update=<?php echo $row_slides['id']; ?>" title="Add Details" data-toggle="tooltip"><span class="fa fa-plus"></span><i class='bx bx-list-plus bx-fw' ></i> DETAIL </a>
                                <a href="parameter.php?delete=<?php echo $row_slides['id']; ?>" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span><i class='bx bxs-trash bx-fw' ></i> DELETE </a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </body>
</html>