<?php
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

// Load the database configuration file 
include_once './class/db.php';

// Get status message 
if (!empty($_GET['status'])) {
    switch ($_GET['status']) {
        case 'succ':
            $statusType = 'alert-success';
            $statusMsg = 'Member data has been imported successfully.';
            break;
        case 'err':
            $statusType = 'alert-danger';
            $statusMsg = 'Something went wrong, please try again.';
            break;
        case 'invalid_file':
            $statusType = 'alert-danger';
            $statusMsg = 'Please upload a valid Excel file.';
            break;
        default:
            $statusType = '';
            $statusMsg = '';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Import Excel File Data with PHP</title>

        <!-- Bootstrap library -->
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <!-- Stylesheet file -->
        <link rel="stylesheet" href="css/style.css">

        <!-- Show/hide Excel file upload form -->
        <script>
            function formToggle(ID) {
                var element = document.getElementById(ID);
                if (element.style.display === "none") {
                    element.style.display = "block";
                } else {
                    element.style.display = "none";
                }
            }
        </script>
    </head>
    <body>

        <!-- Display status message -->
        <?php if (!empty($statusMsg)) { ?>
            <div class="col-xs-12 p-3">
                <div class="alert <?php echo $statusType; ?>"><?php echo $statusMsg; ?></div>
            </div>
        <?php } ?>

        <div class="row p-3">
            <!-- Import link -->
            <div class="col-md-12 head">
                <div class="float-end">
                    <a href="javascript:void(0);" class="btn btn-success" onclick="formToggle('importFrm');"><i class="plus"></i> Import Excel</a>
                </div>
            </div>
            <!-- Excel file upload form -->
            <div class="col-md-12" id="importFrm" style="display: none;">
                <form class="row g-3" action="form_equipment_upload_import.php" method="post" enctype="multipart/form-data">
                    <div class="col-auto">
                        <label for="fileInput" class="visually-hidden">File</label>
                        <input type="file" class="form-control" name="file" id="fileInput" />
                    </div>
                    <div class="col-auto">
                        <input type="submit" class="btn btn-primary mb-3" name="importSubmit" value="Import">
                    </div>
                </form>
            </div>

            <!-- Data list table --> 
            <table class="table table-striped table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>EQUIPMENT ID</th>
                        <th>LAB LOCATION</th>
                        <th>CATEGORY</th>
                        <th>LAB MANAGER</th>
                        <th>MANUFACTURER</th>
                        <th>MODEL</th>
                        <th>ASSET NO</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM gest_form_eqpt ORDER BY id ASC";
                    $resSite = mysqli_query($con, $sql);
                    $i = 0;
                    while ($row = mysqli_fetch_array($resSite)):
                        $i += 1;
                        ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $row['eqpt_id']; ?></td>
                            <td><?php echo $row['lab_location']; ?></td>
                            <td><?php echo $row['standard_category']; ?></td>
                            <td><?php echo $row['champion']; ?></td>
                            <td><?php echo $row['eqpt_manufacturer']; ?></td>
                            <td><?php echo $row['eqpt_model']; ?></td>
                            <td><?php echo $row['eqpt_asset_no']; ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
        <!--        <div class="outer-container">
                    <div class="row">
                        <form class="form-horizontal" action="" method="post" name="frmExcelImport" id="frmExcelImport" enctype="multipart/form-data" onsubmit="return validateFile()">
                            <div Class="input-row">
                                <label>Choose your file. <a href="Template/import-template.xlsx" download>Download excel template</a></label>
                                <div>
                                    <input type="file" name="file" id="file" class="file" accept=".xls,.xlsx">
                                </div>
                                <div class="import">
                                    <button type="submit" id="submit" name="import" class="btn-submit">Import Excel and Save Data</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>-->

        <form action="form_equipment_upload_import.php" method="post" enctype="multipart/form-data">
            <label for="file">Select Excel File:</label>
            <input type="file" id="file" name="file" accept=".xls,.xlsx,.xlsm">
            <br>
            <input type="submit" value="Upload">
        </form>

    </body>
</html>