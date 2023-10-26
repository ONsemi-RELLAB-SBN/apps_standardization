<?php
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
include 'form_template.php';
include 'class/get_parameter.php';
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>LIST | Equipment [Chamber] List</title>
        <meta name="description" content="Circular Navigation Styles - Building a Circular Navigation with CSS Transforms | Codrops " />
        <meta name="keywords" content="css transforms, circular navigation, round navigation, circular menu, tutorial" />
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
            #addBtn {
                display: block;
                position: absolute;
                font-size: 12px;
                border: none;
                outline: none;
                background-color: gray;
                color: white;
                cursor: pointer;
                padding: 10px;
                border-radius: 5px;

                display: block;
                min-width: 7.5rem;
                height: 3rem;
                line-height: 2.75rem;
                padding: 0 1.25rem 0 1.45rem;
                text-transform: uppercase;
                letter-spacing: 0.2rem;
            }

            #addBtn:hover {
                background-color: orange;
            }
            
            body {
                font-size: 1.5em;
            }
            
            h2 {
                font-size: 1.5em;
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
            <div class="table-responsive">
                <hr>
                <div class="mt-5 mb-3 clearfix">
                    <h2 class="pull-left">Equipment [Chamber] List</h2>
                    <button onClick="window.location.href = window.location.href" type="button" class="btn btn-default btn-lg pull-right"> <i class='bx bx-refresh bx-fw' ></i> Refresh Page</button>
                </div>
                <table class="table table-hover table-striped">
                    <hr>
                    <tr class="">
                        <th style="text-align:center"><b>No</b></th>
                        <th><b>Equipment</b></th>
                        <th><b>Location</b></th>
                        <th><b>Manufacturer</b></th>
                        <th><b>Champion</b></th>
                        <th><b>Rel Test</b></th>
                        <th style="text-align:center"><b>Action</b></th>
                    </tr>
                    <!-- PHP CODE TO FETCH DATA FROM ROWS -->
                    <?php
                    $get_slides = "SELECT * FROM gest_eqpt_form WHERE flag = '1' ORDER BY id ASC";
                    $run_slides = mysqli_query($con, $get_slides);
                    // LOOP TILL END OF DATA
                    $t = 0;
                    while ($row_slides = mysqli_fetch_array($run_slides)):
                        $t += 1;
                        ?>
                        <tr>
                            <!-- FETCHING DATA FROM EACH ROW OF EVERY COLUMN -->
                            <td style="text-align:center"><?php echo $t; ?></td>
                            <td><?php echo getParameterValue($row_slides['eqpt_id']); ?></td>
                            <td><?php echo getParameterValue($row_slides['lab_location']); ?></td>
                            <td><?php echo getParameterValue($row_slides['eqpt_manufacturer']); ?></td>
                            <td><?php echo getParameterValue($row_slides['champion']); ?></td>
                            <td><?php echo getParameterValues($row_slides['rel_test']); ?></td>
                            <td style="text-align:center">
                                <a href="form_equipment_view.php?view=<?php echo $row_slides['id']; ?>" title="View Record" data-toggle="tooltip"><i class='bx bx-search-alt bx-fw'></i> VIEW </a>
                                <a href="form_equipment_edit.php?edit=<?php echo $row_slides['id']; ?>" title="Update Record" data-toggle="tooltip"><i class='bx bxs-pencil bx-fw' ></i> EDIT </a>
                                <a href="form_equipment_delete.php?delete=<?php echo $row_slides['id']; ?>" title="Delete Record" data-toggle="tooltip"><i class='bx bxs-trash bx-fw' ></i> DELETE </a>
                            </td>
                        </tr>
                        <?php
                    endwhile;
                    ?>
                </table>
                <hr>
                <button onclick="location.href = 'form_equipment.php'" type="button" id="addBtn"><i class='bx bx-plus bx-fw'></i> Create</button>

            </div>
        </div><!-- /container -->
    </body>
</html>