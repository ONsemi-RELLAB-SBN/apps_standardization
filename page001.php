<?php
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
include 'class/db.php';

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
        $insert = "INSERT INTO gest_parameter_master(name, code, link_image, remark, flag) VALUES('$parameter_name', '$parameter_price', '$parameter_image', ' ', '1')";
        $upload = mysqli_query($con, $insert);
        if ($upload) {
            move_uploaded_file($parameter_image_tmp_name, $parameter_image_folder);
            $message[] = 'new parameter added successfully';
        } else {
            $message[] = 'could not add the parameter';
        }
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
        <script src="js/modernizr-2.6.2.min.js"></script>

        <style>
            table, th, td {
                border: 1px solid black;
                border-collapse: collapse;
                padding: 1px 10px;
                /*font-weight: 10;*/
            }
        </style>

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
            <!-- Top Navigation -->
<!--            <header>
                <h1>Circular Navigation <span>Building a Circular Navigation with CSS Transforms</span></h1>	
            </header>-->
            
                <div class="mt-5 mb-3 clearfix">
                    <h2 class="pull-left">Parameter Details</h2>
                    <!--<a href="page02.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add New Parameter</a>-->
                </div>
                <div class="admin-product-form-container">
                    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
                        <h3>Add New Parameter</h3>
                        <input type="text" placeholder="Enter parameter name" name="parameter_name" class="box">
                        <input type="number" placeholder="Enter parameter code" name="parameter_price" class="box">
                        <input type="file" accept="image/png, image/jpeg, image/jpg" name="parameter_image" class="box">
                        <br>
                        <input type="submit" class="btn btn-success " name="add_parameter" value="Add New Parameter">
                        <!--<a href="page02.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add New Parameter</a>-->
                    </form>
                </div>
                
                <table style="margin-top: 25px;">
                    <tr>
                        <th><b>Parameter Name</b></th>
                        <!--<th><b>Parent Code</b></th>-->
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
                            <!--<td><?php echo $row_slides['remark']; ?></td>-->
                            <td><?php echo $row_slides['code']; ?></td>
                            <td><?php echo $row_slides['link_image']; ?></td>
                            <td><img src="uploaded_img/<?php echo $row_slides['link_image']; ?>" height="100" alt=""></td>
                            <td>
<!--                                <a href="read.php?id=<?php echo $row_slides['id']; ?>" class="mr-3"     title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>
                                <a href="update.php?id=<?php echo $row_slides['id']; ?>" class="mr-3"   title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>
                                <a href="delete.php?id=<?php echo $row_slides['id']; ?>"                title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>-->
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