<?php
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
//include 'class/db.php';
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
<html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Parameter</title>
        <meta name="author" content="Ayep" />
        <link rel="shortcut icon" href="image/dribbble.ico">

        <link rel="stylesheet" type="text/css" href="css/layout.css">
        <link rel="stylesheet" type="text/css" href="css/elements.css" />
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="css/main01.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'>
        <script src="js/bootstrap.js"></script>

        <style>
            #refreshButton:hover {
                background-color: orange;
            }

            .btn-add-parameter {
                background-color: lightgray;
                border-color: #2fb2a0;
            }

            .btn-add-parameter:hover {
                background-color: orange;
            }

            body {
                font-size: 1.5em;
            }

            h2 {
                font-size: 1.5em;
            }
        </style>
    </head>
    <body>
        <?php
        if (isset($message)) {
            foreach ($message as $message) {
                echo '<br><br><span class="message" style="color:red">' . $message . '</span>';
            }
        }
        ?>
        <div class="container">
            <div class="table-responsive">
                <hr>
                <div class="mt-5 mb-3 clearfix">
                    <h2 class="pull-left">Parameter Master Details</h2>
                    <button onClick="window.location.href = window.location.href" class="btn btn-default btn-lg pull-right" id="refreshButton"> <i class='bx bx-refresh bx-fw' ></i> Refresh Page</button>
                </div>
                <div class="form-group mt-3 mb-3">
                    <form class="form-horizontal" action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group form-group-lg">
                            <label for="name" class="col-lg-3 form-label"><b>Parameter Name <font color="red">*</font></b></label>
                            <input type="text" class="col-lg-4 form-control-lg" placeholder="Enter parameter name" name="parameter_name" class="box" required>
                        </div>
                        <div class="form-group">
                            <label for="code" class="col-lg-3 form-label"><b>Parameter Code</b></label>
                            <input type="text" class="col-lg-4 form-control-lg" placeholder="Enter parameter code" name="parameter_price" class="box", value='<?php echo $f_number; ?>' readonly>
                        </div>
                        <div class="form-group">
                            <label for="image" class="col-lg-3 form-label"><b>Image</b></label>
                            <input type="file" class="col-lg-4 form-control-lg" accept="image/png, image/jpeg, image/jpg" name="parameter_image">
                        </div>
                        <br>
                        <button name="add_parameter" class="btn btn-add-parameter btn-lg"><i class='bx bx-plus bx-flashing-hover bx-fw' ></i>Add New Parameter</button>
                        <br>
                    </form>
                </div>
                <br>
                <table class="table table-hover table-striped">
                    <tr>
                        <th><b>Parameter Name</b></th>
                        <th><b>Parameter Code</b></th>
                        <th><b>Link</b></th>
                        <th><b>Image</b></th>
                        <th style="text-align: center"><b>Action</b></th>
                    </tr>
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
                </table>
            </div>
        </div>
    </body>
</html>