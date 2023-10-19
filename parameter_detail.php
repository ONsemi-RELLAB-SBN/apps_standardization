<?php
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

include './form_template.php';
$id = $_GET['update'];
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
            <?php if ($id == '') { ?>
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
                <?php
                $select = mysqli_query($con, "SELECT * FROM gest_parameter_master WHERE id = '$id'");
                while ($row = mysqli_fetch_assoc($select)) {
                    ?>
                    <div class="table-responsive">
                        <hr>
                        <div class="mt-5 mb-3">
                            <h2>Add Parameter Details</h2>
                        </div>
                        <div class="form-group mt-3 mb-3">
                            <form class="form-horizontal" name='add_details' id='add_details' method="pot" action='parameter_add_detail.php'>
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
                                <div class="form-group form-group-lg">
                                    <?php
                                    $getData = "SELECT COUNT(*) as count FROM gest_parameter_detail WHERE master_code = '" . $row['code'] . "'";
                                    $rData = mysqli_query($con, $getData);
                                    $rowMaklumat = mysqli_fetch_assoc($rData);
                                    $data = $rowMaklumat['count'] + 1;
                                    $s_number = $row['code'] . str_pad($data, 3, "0", STR_PAD_LEFT);
                                    ?>
                                    <label for=" detailsCode" class="col-lg-3 form-label">Details Code </label>
                                    <div>
                                        <input type="text" class="col-lg-4 form-control-lg" id="detailsCode" name="detailsCode" placeholder="Details Code" value="<?php echo $s_number; ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="detailsName" class="col-lg-3 form-label">Details Name *</label>
                                    <div>
                                        <input type="text" class="col-lg-4 form-control-lg" id="detailsName" name="detailsName" placeholder="Details Name" value="" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="remarks" class="col-lg-3 form-label">Remarks </label>
                                    <div>
                                        <textarea class="col-lg-4 form-control" rows="5" id="remarks" name="remarks"></textarea>
                                    </div>
                                </div>
                                <a href="parameter.php" class="btn btn-default btn-lg" id="backButton"><i class='bx bx-arrow-back bx-fade-left-hover bx-fw' ></i>Go Back!</a>
                                <button type="submit" value="Add Parameter Detail" name="update_detail" id="update_parameter" class="btn btn-default btn-lg" >
                                    <i class='bx bx-list-plus bx-flashing-hover bx-fw bx-md' ></i> Add Parameter Detail
                                </button>
                            </form>
                        </div>
                        <div class="mt-5 mb-3 clearfix">
                            <h2 class="pull-left">Parameter Details List</h2>
                        </div>
                        <table class="table table-hover table-striped">
                            <tr>
                                <th><span>No</span></th>
                                <th><span>Detail Code</span></th>
                                <th><span>Name</span></th>
                                <th><span>Remarks</span></th>
                                <th style="text-align: center"><span>Manage</span></th>
                            </tr>
                            <?php
                            $get_slides2 = "SELECT * FROM gest_parameter_detail WHERE master_code = '" . $row['code'] . "' AND flag = '1' ORDER BY code ASC";
                            $run_slides2 = mysqli_query($con, $get_slides2);
                            // LOOP TILL END OF DATA
                            $no = 0;
                            while ($row_slides2 = mysqli_fetch_array($run_slides2)):
                                $no += 1;
                                ?>
                                <tr>
                                    <!-- FETCHING DATA FROM EACH ROW OF EVERY COLUMN -->
                                    <td><?php echo $no; ?></td>
                                    <td><?php echo $row_slides2['code']; ?></td>
                                    <td><?php echo $row_slides2['name']; ?></td>
                                    <td><?php echo $row_slides2['remark']; ?></td>
                                    <td style="text-align: center">
                                        <a href="parameter_edit_detail.php?edit=<?php echo $row_slides2['id']; ?>&id=<?php echo $row['id']; ?>" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span><i class='bx bxs-pencil bx-fw' ></i> EDIT </a>
                                        <a href="parameter_delete_detail.php?delete=<?php echo $row_slides2['id']; ?>&id=<?php echo $row['id']; ?>" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span><i class='bx bxs-trash bx-fw' ></i> DELETE </a>
                                    </td>
                                </tr>
                                <?php
                            endwhile;
                            ?>
                        </table>
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
    </body>
</html>