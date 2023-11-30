<?php
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

include '../template/form.php';
include '../template/list.php';
include '../class/get_parameter.php';
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <style>
            body {
                font-size: .85em;
            }

            h2 {
                font-size: 1.5em;
            }
        </style>

        <script type="text/javascript">
            jQuery(document).ready(function($) {
                
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
                <h2 class="pull-left" style="border-left:none">Power Supply List</h2>
                <button onClick="window.location.href = window.location.href" type="button" class="btn btn-default btn-lg u-pull-right"> <i class='bx bx-refresh bx-fw' ></i> Refresh Page</button>
            </div>
            <table class="u-full-width" id="myTable">
                <thead>
                    <tr>
                        <th style="text-align:center"><b>No</b></th>
                        <th><b>Location</b></th>
                        <th><b>Manufacturer</b></th>
                        <th><b>Lab Manager</b></th>
                        <th><b>Model</b></th>
                        <th style="text-align:center"><b>Action</b></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $get_slides = "SELECT * FROM gest_form_ps WHERE flag = '1' ORDER BY id ASC";
                    $run_slides = mysqli_query($con, $get_slides);
                    $t = 0;
                    while ($row_slides = mysqli_fetch_array($run_slides)):
                        $t += 1;
                        ?>
                        <tr>
                            <!-- FETCHING DATA FROM EACH ROW OF EVERY COLUMN -->
                            <td style="text-align:center"><?php echo $t; ?></td>
                            <td><?php echo getParameterValue($row_slides['lab_location']); ?></td>
                            <td><?php echo getParameterValue($row_slides['manufacturer']); ?></td>
                            <td><?php echo getParameterValue($row_slides['champion']); ?></td>
                            <td><?php echo getParameterValues($row_slides['model']); ?></td>
                            <td style="text-align:center">
                                <a href="view.php?view=<?php echo $row_slides['id']; ?>" title="View Record" data-toggle="tooltip"><i class='bx bx-search-alt bx-fw'></i> VIEW </a>
                                <a href="edit.php?edit=<?php echo $row_slides['id']; ?>" title="Update Record" data-toggle="tooltip"><i class='bx bxs-pencil bx-fw' ></i> EDIT </a>
                                <a href="delete.php?delete=<?php echo $row_slides['id']; ?>" title="Delete Record" data-toggle="tooltip" onclick="return confirm('Are You Sure ?')"><i class='bx bxs-trash bx-fw' ></i> DELETE </a>
                                <a href="copy.php?edit=<?php echo $row_slides['id']; ?>" title="Replicate Record" data-toggle="tooltip"><i class='bx bx-copy bx-fw'></i></i> COPY </a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                    <!--<a href="crud_export_power.php" title="Download" data-toggle="tooltip"><i class='bx bx-cloud-download bx-fw'></i></i> DOWNLOAD </a>-->
                </tbody>
            </table>
            <button onclick="location.href = '../power/add.php'" type="button" id="addBtn"><i class='bx bx-plus bx-fw'></i> Add New Power Supply</button>
            <button onclick="location.href = '../xlsm/upload_powersupply.php'" type="button" id="upBtn"><i class='bx bx-cloud-upload bx-fw'></i> Batch Upload</button>
            <button onclick="location.href = '../template/template_power_supply.xlsm'" type="button" id="dlBtn" class="u-pull-right"><i class='bx bx-cloud-download bx-fw'></i> Download Excel Template</button>
        </div>
    </body>
</html>