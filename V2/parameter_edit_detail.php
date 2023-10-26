<?php
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
include './form_template.php';

$detail_id = $_GET['edit'];
$master_id = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Standardization</title>
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
                <div class="table">
                    <br>
                    <div class="mt-5 mb-3 clearfix">
                        <h2 class="pull-left">Update Parameter Details</h2>
                    </div>
                    <div class="form-group mt-5 mb-3">
                        <?php
                        $select = mysqli_query($con, "SELECT * FROM gest_parameter_master WHERE id = '$master_id'");
                        while ($row = mysqli_fetch_assoc($select)) { ?>
                            <form name='update_details' class="form-horizontal" id='update_details' method="pot" action='parameter_update_detail.php'>
                                <div class="form-group form-group-lg">
                                    <label for="masterName" class="col-lg-3 form-label">Master Name </label>
                                    <div>
                                        <input type="text" class="col-lg-4 form-control-lg" id="masterName" name="masterName" value="<?php echo $row['name']; ?>" readonly>
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
                                    <div class="form-group form-group-lg">
                                        <label for=" detailsCode" class="col-lg-3 form-label">Details Code </label>
                                        <div>
                                            <input type="text" class="col-lg-4 form-control-lg" id="detailsCode" name="detailsCode" placeholder="Details Code" value="<?php echo $row2['code']; ?>" readonly>
                                            <input type="text" class="col-lg-4 form-control-lg" id="detailId" name="detailId" placeholder="Details Id" value="<?php echo $detail_id; ?>" readonly hidden>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="detailsName" class="col-lg-3 form-label">Details Name *</label>
                                        <div>
                                            <input type="text" class="col-lg-4 form-control-lg" id="detailsName" name="detailsName" placeholder="Details Name" value="<?php echo $row2['name']; ?>" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="remarks" class="col-lg-3 form-label">Remarks </label>
                                        <div>
                                            <textarea class="col-lg-4 form-control" rows="5" id="remarks" name="remarks"><?php echo $row2['remark']; ?></textarea>
                                        </div>
                                    </div>
                                    <?php
                                }
                                ?>
                                <a href="parameter_detail.php?update=<?php echo $master_id; ?>" class="btn btn-default btn-lg" id="backButton"><i class='bx bx-arrow-back bx-fade-left-hover bx-fw' ></i>Go Back!</a>
                                <button type="submit" value="Update Parameter Detail" name="update_details" id="update_details" class="btn btn-default btn-lg" >
                                    <i class='bx bx-list-plus bx-flashing-hover bx-fw bx-md'></i> Update Parameter Detail
                                </button>
                            </form>
                        <?php }; ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </body>
</html>