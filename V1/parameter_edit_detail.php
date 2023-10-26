<?php
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
include 'class/db.php';

$detail_id = $_GET['edit'];
$master_id = $_GET['id'];
//echo '$master_id >>> ' . $master_id;
//echo '$detail_id >>> ' . $detail_id;
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Survey - Standardization</title>
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
    <body>
        <?php
        if (isset($message)) {
            foreach ($message as $message) {
                echo '<span class="message">' . $message . '</span>';
            }
        }
        ?>
        <div class="container">
            <?php if ($master_id == '') { ?>
                <h1>Access denied! Please go back to <a href="parameter.php" class="btn"> main page</a></h1>
                <div class="component">
                    <!-- Start Nav Structure -->
                    <button class="cn-button" id="cn-button">+</button>
                    <div class="cn-wrapper" id="cn-wrapper">
                        <ul>
                            <li><a href="parameter.php#"><span class="icon-picture"></span></a></li>
                            <li><a href="form_equipment.php#"><span class="icon-headphones"></span></a></li>
                            <li><a href="main.php#"><span class="icon-facetime-video"></span></a></li>
                            <li><a href="form_hardware.php#"><span class="icon-home"></span></a></li>
                            <li><a href="page005.php#"><span class="icon-envelope-alt"></span></a></li>
                        </ul>
                    </div>
                    <div id="cn-overlay" class="cn-overlay"></div>
                    <!-- End Nav Structure -->
                </div>
            <?php } else { ?>
                <section>
                    <div>
                        <h2>Update Parameter Details</h2>
                        <form name='update_details' id='update_details' method="pot" action='parameter_update_detail.php'>
                            <?php
                            $select = mysqli_query($con, "SELECT * FROM gest_parameter_master WHERE id = '$master_id'");
                            while ($row = mysqli_fetch_assoc($select)) {
                                ?>
                                <div>
                                    <div>
                                        <label for="masterName">Master Name </label>
                                        <div>
                                            <input type="text" id="masterName" name="masterName" value="<?php echo $row['name']; ?>" readonly>
                                        </div>
                                    </div>
                                    <div hidden>
                                        <label for=" masterCode">Master Code</label>
                                        <div>
                                            <input type="text" id="masterCode" name="masterCode" value="<?php echo $row['code']; ?>" readonly>
                                            <input type="text" id="masterId" name="masterId" value="<?php echo $row['id']; ?>" readonly>
                                        </div>
                                    </div>
                                    <?php
                                    $select2 = mysqli_query($con, "SELECT * FROM gest_parameter_detail WHERE id = '$detail_id'");
                                    while ($row2 = mysqli_fetch_assoc($select2)) {
                                        ?>
                                        <div>
                                            <label for=" detailsCode">Details Code </label>
                                            <div>
                                                <input type="text" id="detailsCode" name="detailsCode" placeholder="Details Code" value="<?php echo $row2['code']; ?>" readonly>
                                                <input type="text" id="detailId" name="detailId" placeholder="Details Id" value="<?php echo $detail_id; ?>" readonly hidden>
                                            </div>
                                        </div>
                                        <div>
                                            <label for="detailsName">Details Name *</label>
                                            <div>
                                                <input type="text" id="detailsName" name="detailsName" placeholder="Details Name" value="<?php echo $row2['name']; ?>" >
                                            </div>
                                        </div>
                                        <div>
                                            <label for="remarks">Remarks </label>
                                            <div>
                                                <textarea rows="5" cols="97" id="remarks" name="remarks"><?php echo $row2['remark']; ?></textarea>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                    ?>

                                    <br>
                                    <a href="parameter_detail.php?update=<?php echo $master_id; ?>" class="btn-3d"><i class='bx bx-arrow-back bx-fade-left-hover bx-fw' style='color:#ffffff' ></i>Go Back!</a>
                                    <button type="submit" value="Update Parameter Master" name="update_detail" class="btn-3d" >
                                        <i class='bx bx-list-plus bx-flashing-hover bx-fw bx-md'></i> Update Detail
                                    </button>
                                    <br>
                                    <br>
                                </div>
                            <?php } ?>
                        </form>
                    </div>
                </section>
            <?php } ?>
        </div>
    </body>
</html>