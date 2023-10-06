<?php
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
include 'class/db.php';

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
        $message[] = 'please fill out all';
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
    header('location:page001.php');
};
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
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'>
        <script src="js/modernizr-2.6.2.min.js"></script>
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
    <body>
        <?php
        if (isset($message)) {
            foreach ($message as $message) {
                echo '<span class="message">' . $message . '</span>';
            }
        }
        ?>
        <div class="container">
            <div class="mt-5 mb-3 clearfix">
                <h2 class="pull-left">Parameter Details</h2>
                <button onClick="window.location.href=window.location.href" class="pull-right"> <i class='bx bx-refresh bx-fw' ></i> Refresh Page</button>
            </div>
            <div class="admin-product-form-container">
                <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
                    <!--<h3>Add New Parameter</h3>-->
                    <label for="name"><b>Parameter Name</b></label>
                    <input type="text" placeholder="Enter parameter name" name="parameter_name" class="box">

                    <label for="code"><b>Parameter Code</b></label>
                    <input type="text" placeholder="Enter parameter code" name="parameter_price" class="box", value='<?php echo $f_number; ?>' readonly>

                    <label for="image"><b>Image</b></label>
                    <input type="file" accept="image/png, image/jpeg, image/jpg" name="parameter_image" class="box">
                    <input type="submit" class="btn btn-success pull-right" name="add_parameter" value="Add New Parameter">
                    <hr>
                </form>
            </div>
            <hr>
            <!--<table style="margin-top: 25px;">-->
            <table class="customers">
                <tr>
                    <th><b>Parameter Name</b></th>
                    <th><b>Parameter Code</b></th>
                    <th><b>Link</b></th>
                    <th><b>Image</b></th>
                    <th><b>Action</b></th>
                </tr>
                <!-- PHP CODE TO FETCH DATA FROM ROWS -->
                <?php
                $get_slides = "SELECT * FROM gest_parameter_master WHERE flag = '1' ORDER BY code ASC";
                $run_slides = mysqli_query($con, $get_slides);
                // LOOP TILL END OF DATA
                while ($row_slides = mysqli_fetch_array($run_slides)):
                    ?>
                    <tr>
                        <!-- FETCHING DATA FROM EACH ROW OF EVERY COLUMN -->
                        <td><?php echo $row_slides['name']; ?></td>
                        <td><?php echo $row_slides['code']; ?></td>
                        <td><?php echo $row_slides['link_image']; ?></td>
                        <td><img src="uploaded_img/<?php echo $row_slides['link_image']; ?>" height="100" alt=""></td>
                        <td>
                            <a href="page002.php?edit=<?php echo $row_slides['id']; ?>" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span> EDIT </a>
                            <a href="page003.php?update=<?php echo $row_slides['id']; ?>" title="Add Details" data-toggle="tooltip"><span class="fa fa-plus"></span> ADD DETAIL </a>
                            <a href="page001.php?delete=<?php echo $row_slides['id']; ?>" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span> DELETE </a>
                        </td>
                    </tr>
                    <?php
                endwhile;
                ?>
            </table>

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