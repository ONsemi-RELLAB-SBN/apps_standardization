<?php
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

include './form_template.php';

$id = $_GET['edit'];

if (isset($_POST['update_parameter'])) {

    $parameter_name = $_POST['parameter_name'];
    $parameter_code = $_POST['parameter_code'];
    $parameter_image = $_FILES['parameter_image']['name'];
    $parameter_image_tmp_name = $_FILES['parameter_image']['tmp_name'];
    $parameter_image_folder = 'uploaded_img/' . $parameter_image;

    if (empty($parameter_name) || empty($parameter_code)) {
        $message[] = 'please fill out all!';
    } else {
        $update_data = "UPDATE gest_parameter_master SET name='$parameter_name', code='$parameter_code', link_image='$parameter_image' WHERE id = '$id'";
        $upload = mysqli_query($con, $update_data);

        if ($upload) {
            move_uploaded_file($parameter_image_tmp_name, $parameter_image_folder);
            header('location:parameter.php');
        } else {
            $$message[] = 'please fill out all!';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Parameter | Edit</title>
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
            body {
                font-size: 1.5em;
            }

            h2 {
                font-size: 1.5em;
                color: orange;
            }

            #update_parameter:hover {
                background-color: orange;
            }

            #backButton:hover {
                background-color: orange;
            }

            .btn-default {
                background-color: lightgray;
                border-color: #2fb2a0;
            }

            .btn-default:hover {
                background-color: orange;
            }
        </style>

        <script type="text/javascript">

        </script>

    </head>
    <body class="body2">
        <?php
        if (isset($message)) {
            foreach ($message as $message) {
                echo '<span class="message">' . $message . '</span>';
            }
        }
        ?>
        <div class="container">
            <?php if ($id == '') { ?>
                <h1>Access denied! Please go back to <a href="parameter.php" class="btn"> main page</a></h1>
            <?php } else { ?>
                <div class="table">
                    <br>
                    <div class="mt-5 mb-3 clearfix">
                        <h2 class="pull-left">Parameter Master | Edit Page</h2>
                    </div>
                    <div class="form-group mt-5 mb-3">
                        <?php
                        $select = mysqli_query($con, "SELECT * FROM gest_parameter_master WHERE id = '$id'");
                        while ($row = mysqli_fetch_assoc($select)) {
                            ?>
                            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                <div class="form-group form-group-lg">
                                    <label for="name" class="col-lg-3 form-label"><b>Parameter Name <font color="red">*</font></b></label>
                                    <input type="text" class="col-lg-4 form-control-lg" placeholder="Enter parameter name" name="parameter_name" class="box" value="<?php echo $row['name']; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="code" class="col-lg-3 form-label"><b>Parameter Code</b></label>
                                    <input type="text" class="col-lg-4 form-control-lg" placeholder="Enter parameter code" name="parameter_code" class="box", value='<?php echo $row['code']; ?>' readonly>
                                </div>
                                <div class="form-group">
                                    <label for="image" class="col-lg-3 form-label"><b>Image</b></label>
                                    <img src="uploaded_img/<?php echo $row['link_image']; ?>" height="100" alt=""><br>
                                    <label class="col-lg-3 form-label">&nbsp;</label>
                                    <input type="file" class="col-lg-4 form-control-lg" accept="image/png, image/jpeg, image/jpg" name="parameter_image">
                                </div>
                                <br>
                                <a href="parameter.php" class="btn btn-default btn-lg" id="backButton"><i class='bx bxs-chevron-left bx-fade-left-hover bx-fw' ></i>Go Back!</a>
                                <button type="submit" value="Update Parameter Master" name="update_parameter" id="update_parameter" class="btn btn-default btn-lg" >
                                    <i class='bx bx-loader-circle bx-spin-hover bx-fw' ></i>Update Parameter Master
                                </button>
                            </form>
                        <?php }; ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </body>
</html>