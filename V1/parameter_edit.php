<?php
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

include 'class/db.php';

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
        <meta name="description" content="Circular Navigation Styles - Building a Circular Navigation with CSS Transforms | Codrops " />
        <meta name="keywords" content="css transforms, circular navigation, round navigation, circular menu, tutorial" />
        
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'>
        
        <style>
            
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
                <section>
                    <!--<p>Parameter Master - Edit Page</p>-->
                    <h2 class="pull-left">Parameter Master - Edit Page</h2>
                    <div class="admin-product-form-container centered">
                        <?php
                        $select = mysqli_query($con, "SELECT * FROM gest_parameter_master WHERE id = '$id'");
                        while ($row = mysqli_fetch_assoc($select)) {
                            ?>
                            <form action="" method="post" enctype="multipart/form-data">
                                
                                <label for="name"><b>Parameter Name</b></label>
                                <input type="text" class="box" name="parameter_name" value="<?php echo $row['name']; ?>" placeholder="Enter the parameter name">
                                <label for="code"><b>Parameter Code</b></label>
                                <input type="text" min="0" class="box" name="parameter_code" value="<?php echo $row['code']; ?>" placeholder="enter the parameter code">
                                <label for="image"><b>Image</b></label><br>
                                <img src="uploaded_img/<?php echo $row['link_image']; ?>" height="100" alt=""><br>
                                <input type="file" class="box" name="parameter_image" accept="image/png, image/jpeg, image/jpg">
                                <br>
                                <br>
                                <a href="parameter.php" class="btn-3d"><i class='bx bx-arrow-back bx-fade-left-hover bx-fw' style='color:#ffffff' ></i>Go Back!</a>
                                <!--<a href="parameter.php" class="btn-3d"><i class='bx bx-arrow-back bx-fw' style='color:#ffffff' ></i>Go Back!</a>-->
                                <button type="submit" value="Update Parameter Master" name="update_parameter" class="btn-3d" >
                                    <i class='bx bx-loader-circle bx-spin-hover bx-fw' style='color:#ffffff' ></i>Update Parameter Master
                                </button>
<!--                                <button type="submit" value="Update Parameter Master" name="update_parameter" class="btn btn-success" >
                                    <i class='bx bx-loader-circle bx-fw bx-fw' style='color:#ffffff' ></i>Update Parameter Master
                                </button>-->
                            </form>
                        <?php }; ?>
                    </div>
                </section>
            <?php } ?>
        </div>
    </body>
</html>