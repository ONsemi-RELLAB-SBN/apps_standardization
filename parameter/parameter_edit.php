<?php
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

include '../template/form.php';

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
        <link rel="shortcut icon" href="image/logo/onsemi_logo.ico">

        <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'>

        <style>
            body {
                font-size: 1em;
            }

            h2 {
                font-size: 1.5em;
            }
            
            #backButton:hover {
                color: orange;
                border-color: orange;
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
        <div class="sample-form">
            <?php if ($id == '') { ?>
                <h1>Access denied! Please go back to <a href="parameter.php" class="btn"> main page</a></h1>
            <?php } else { ?>
                <div class="table">
                    <div class="row">&nbsp;</div>
                    <div class="row">&nbsp;</div>
                    <div class="row">
                        <h2 class="pull-left" style="border-left:none">Parameter Master | Edit Page</h2>
                    </div>
                    <div class="row">
                        <?php
                        $select = mysqli_query($con, "SELECT * FROM gest_parameter_master WHERE id = '$id'");
                        while ($row = mysqli_fetch_assoc($select)) {
                            ?>
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="three columns">
                                        <label for="name"><b>Parameter Name <font color="red">*</font></b></label>
                                    </div>
                                    <div class="six columns">
                                        <input type="text" placeholder="Enter parameter name" name="parameter_name" value="<?php echo $row['name']; ?>" style="width: 100%" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="three columns">
                                        <label for="code"><b>Parameter Code</b></label>
                                    </div>
                                    <div class="six columns">
                                        <input type="text" placeholder="Enter parameter code" name="parameter_code" value='<?php echo $row['code']; ?>' style="width: 100%" readonly>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="three columns">
                                        <label for="image"><b>Image</b></label>
                                    </div>
                                    <div class="six columns">
                                        <img src="uploaded_img/<?php echo $row['link_image']; ?>" height="100" alt=""><br>
                                        <label>&nbsp;</label>
                                        <input type="file" class="file-upload-wrapper" accept="image/png, image/jpeg, image/jpg" name="parameter_image" style="width: 100%">
                                    </div>
                                </div>
                                <a class="button u-pull-left" href="parameter.php" id="backButton"><i class='bx bxs-chevron-left bx-fade-left-hover bx-fw' ></i>Go Back!</a>
                                <button type="submit" value="Update Parameter Master" name="update_parameter" id="update_parameter" class="u-pull-right">
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