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
            header('location:page001.php');
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
        <title>Circular Navigation - Demo 1 | Codrops</title>
        <meta name="description" content="Circular Navigation Styles - Building a Circular Navigation with CSS Transforms | Codrops " />
        <meta name="keywords" content="css transforms, circular navigation, round navigation, circular menu, tutorial" />
        <meta name="author" content="Sara Soueidan for Codrops" />
        <link rel="shortcut icon" href="../favicon.ico">
        <link rel="stylesheet" type="text/css" href="css/normalize.css" />
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/component1.css" />
        <script src="js/modernizr-2.6.2.min.js"></script>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

        <script type="text/javascript">
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-7243260-2']);
            _gaq.push(['_trackPageview']);
            (function () {
                var ga = document.createElement('script');
                ga.type = 'text/javascript';
                ga.async = true;
                ga.src = ('https:' === document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(ga, s);
            })();
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
            <!-- Top Navigation -->
            <header>
                <h1>Circular Navigation <span>Building a Circular Navigation with CSS Transforms</span></h1>	
            </header>
            <?php if ($id == '') { ?>
                <h1>Access denied! Please go back to <a href="page001.php" class="btn"> main page</a></h1>
            <?php } else { ?>
                <section>
                    <p>Parameter Master - Edit Page</p>
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
                                <label for="image"><b>Image</b></label>
                                <input type="file" class="box" name="parameter_image" accept="image/png, image/jpeg, image/jpg">
                                <img src="uploaded_img/<?php echo $row['link_image']; ?>" height="100" alt="">
                                <br>
                                <br>
                                <a href="page001.php" class="button-78"><i class='bx bx-arrow-back bx-fw' style='color:#ffffff' ></i>Go Back!</a>
                                <button type="submit" value="Update Parameter Master" name="update_parameter" class="button-78" >
                                    <i class='bx bx-loader-circle bx-fw bx-fw' style='color:#ffffff' ></i>Update Parameter Master
                                </button>
                            </form>
                        <?php }; ?>
                    </div>
                </section>
            <?php } ?>
            <div class="component">
                <!-- Start Nav Structure -->
                <button class="cn-button" id="cn-button">+</button>
                <div class="cn-wrapper" id="cn-wrapper">
                    <ul>
                        <li><a href="page001.php#"><span class="icon-picture"></span></a></li>
                        <li><a href="page002.php#"><span class="icon-headphones"></span></a></li>
                        <li><a href="page003.php#"><span class="icon-home"></span></a></li>
                        <li><a href="page004.php#"><span class="icon-facetime-video"></span></a></li>
                        <li><a href="page005.php#"><span class="icon-envelope-alt"></span></a></li>
                    </ul>
                </div>
                <div id="cn-overlay" class="cn-overlay"></div>
                <!-- End Nav Structure -->
            </div>
        </div><!-- /container -->
        <script src="js/polyfills.js"></script>
        <script src="js/demo1.js"></script>
        <!-- For the demo ad only -->   
        <script src="http://tympanus.net/codrops/adpacks/demoad.js"></script>
    </body>
</html>