<?php
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

include 'template/form.php';
include 'class/get_parameter.php';
include 'template/list.php';
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
        <link rel="shortcut icon" href="image/logo/onsemi_logo.ico">

        <style>
            body {
                font-size: 1em;
            }

            h2 {
                font-size: 1.5em;
            }
        </style>

        <script type="text/javascript">
            jQuery(document).ready(function($) {
//                $('#myTable').DataTable();

                
                var table = $('#myTable').DataTable( {
                    dom: 'Blfrtip',
                    buttons: [
                        {
                            extend: 'copyHtml5',
                            exportOptions: {
                                columns: ':visible'
//                                columns: [ 0, 1, 2, 3, 4, 5, 6]
                            }
                        },
                        {
                            extend: 'excelHtml5',
                            exportOptions: {
                                columns: [ 0, 1, 2, 3, 4, 5, 6]
                            }
                        },
                        {
                            extend: 'csvHtml5',
                            exportOptions: {
                                columns: [ 0, 1, 2, 3, 4, 5, 6]
                            }
                        },
                        {
                            extend: 'pdfHtml5',
                            exportOptions: {
                                columns: [ 0, 1, 2, 3, 4, 5, 6]
                            }
                        },
                        'colvis'
                    ]
                } );
                
            /* USE CODE ABOVE TO CONTROL WHICH COLUMN WILL BE DOWNLOADED*/
            /* use below code to hide the column
             * DEFINE ALL COLUMN IN DATABASE INTO THIS FIELD
             * */
//            table.columns( [1,2] ).visible( false );
            });
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
        <div class="row">&nbsp;</div>
        <div class="sample-form">
            <div class="row">&nbsp;</div>
            <div class="row">&nbsp;</div>
            <div class="row">
                <h2 class="u-pull-left" style="border-left:none">Equipment [Chamber] List</h2>
                <button onClick="window.location.href = window.location.href" type="button" class="btn btn-default btn-lg u-pull-right"> <i class='bx bx-refresh bx-fw' ></i> Refresh Page</button>
            </div>
            
            <table id="myTable" class="u-full-width" style="width:100%">
                <thead>
                    <tr>
                        <th style="text-align:center"><b>No</b></th>
                        <th><b>Equipment</b></th>
                        <th><b>Location</b></th>
                        <th><b>Manufacturer</b></th>
                        <th><b>Lab Manager</b></th>
                        <th><b>Asset No</b></th>
                        <th><b>Rel Test</b></th>
                        <th style="text-align:center"><b>Action</b></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $get_slides = "SELECT * FROM gest_form_eqpt WHERE flag = '1' ORDER BY id ASC";
                    $run_slides = mysqli_query($con, $get_slides);
                    $t = 0;
                    while ($row_slides = mysqli_fetch_array($run_slides)):
                        $t += 1; ?>
                        <tr>
                            <!-- FETCHING DATA FROM EACH ROW OF EVERY COLUMN -->
                            <td style="text-align:center"><?php echo $t; ?></td>
                            <td><?php echo getParameterValue($row_slides['eqpt_id']); ?></td>
                            <td><?php echo getParameterValue($row_slides['lab_location']); ?></td>
                            <td><?php echo getParameterValue($row_slides['manufacturer']); ?></td>
                            <td><?php echo getParameterValue($row_slides['champion']); ?></td>
                            <td><?php echo $row_slides['eqpt_asset_no']; ?></td>
                            <td><?php echo getParameterValues($row_slides['rel_test']); ?></td>
                            <td style="text-align:center;width: 400px;">
                                <a href="form_equipment_view.php?view=<?php echo $row_slides['id']; ?>" title="View Record" data-toggle="tooltip"><i class='bx bx-search-alt bx-fw'></i> VIEW </a>
                                <a href="form_equipment_edit.php?edit=<?php echo $row_slides['id']; ?>" title="Update Record" data-toggle="tooltip"><i class='bx bxs-pencil bx-fw' ></i> EDIT </a>
                                <a href="form_equipment_delete.php?delete=<?php echo $row_slides['id']; ?>" title="Delete Record" data-toggle="tooltip"><i class='bx bxs-trash bx-fw' ></i> DELETE </a>
                                <a href="form_equipment_copy.php?edit=<?php echo $row_slides['id']; ?>" title="Replicate Record" data-toggle="tooltip"><i class='bx bx-copy bx-fw'></i></i> COPY </a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
            <button onclick="location.href = 'form_equipment.php'" type="button" id="addBtn"><i class='bx bx-plus bx-fw'></i> Add New Equipment</button>
            <button onclick="location.href = 'crud_export_equipment.php'" type="button" id="dlBtn"><i class='bx bx-cloud-download bx-fw'></i> Download List</button>
        </div>
    </body>
</html>