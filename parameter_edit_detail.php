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
    <body>
        <?php
        if (isset($message)) {
            foreach ($message as $message) {
                echo '<span class="message">' . $message . '</span>';
            }
        }
        ?>
        <div class="sample-form">
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
                <div class="u-full-width">
                    <div class="row">&nbsp;</div>
                    <div class="row">&nbsp;</div>
                    <div class="row">
                        <h2 class="pull-left" style="border-left:none">Update Parameter Details</h2>
                    </div>
                    <div class="row">
                        <?php
                        $select = mysqli_query($con, "SELECT * FROM gest_parameter_master WHERE id = '$master_id'");
                        while ($row = mysqli_fetch_assoc($select)) {
                            ?>
                            <form name='update_details' id='update_details' method="pot" action='parameter_update_detail.php'>
                                <div class="row">
                                    <div class="three columns">
                                        <label for="masterName">Master Name </label>
                                    </div>
                                    <div class="six columns">
                                        <input type="text" id="masterName" name="masterName" value="<?php echo $row['name']; ?>" style="width: 100%" readonly>
                                    </div>
                                </div>
                                <div hidden>
                                    <div class="three columns">
                                        <label for=" masterCode">Master Code</label>
                                    </div>
                                    <div class="six columns">
                                        <input type="text" id="masterCode" name="masterCode" value="<?php echo $row['code']; ?>" readonly>
                                        <input type="text" id="masterId" name="masterId" value="<?php echo $row['id']; ?>" readonly>
                                    </div>
                                </div>
                                <?php
                                $select2 = mysqli_query($con, "SELECT * FROM gest_parameter_detail WHERE id = '$detail_id'");
                                while ($row2 = mysqli_fetch_assoc($select2)) {
                                    ?>
                                    <div class="row">
                                        <div class="three columns">
                                            <label for=" detailsCode">Details Code </label>
                                        </div>
                                        <div class="six columns">
                                            <input type="text" id="detailsCode" name="detailsCode" placeholder="Details Code" value="<?php echo $row2['code']; ?>" style="width: 100%" readonly>
                                            <input type="text" id="detailId" name="detailId" placeholder="Details Id" value="<?php echo $detail_id; ?>" readonly hidden>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="three columns">
                                            <label for="detailsName">Details Name *</label>
                                        </div>
                                        <div class="six columns">
                                            <input type="text" id="detailsName" name="detailsName" placeholder="Details Name" value="<?php echo $row2['name']; ?>" style="width: 100%">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="three columns">
                                            <label for="remarks">Remarks </label>
                                        </div>
                                        <div class="six columns">
                                            <textarea class="col-lg-4 form-control" rows="5" id="remarks" name="remarks" style="width: 100%"><?php echo $row2['remark']; ?></textarea>
                                        </div>
                                    </div>
                                    <?php
                                }
                                ?>
                                <!--<a href="parameter_detail.php?update=<?php echo $master_id; ?>" class="btn btn-default btn-lg" id="backButton"><i class='bx bx-arrow-back bx-fade-left-hover bx-fw' ></i>Go Back!</a>-->
                                <a class="button pull-left" href="parameter_detail.php?update=<?php echo $master_id; ?>" id="backButton"><i class='bx bxs-chevron-left bx-fade-left-hover bx-fw' ></i>Go Back!</a>
                                <button type="submit" value="Update Parameter Detail" name="update_details" id="update_details" class="btn pull-right" >
                                    <i class='bx bx-list-plus bx-flashing-hover bx-fw'></i> Update Parameter Detail
                                </button>
                            </form>
    <?php }; ?>
                    </div>
                </div>
<?php } ?>
        </div>
    </body>
</html>