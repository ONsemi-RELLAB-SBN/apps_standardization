<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

include 'form_template_view.php';
include 'class/get_parameter.php';
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>LIST | Process List</title>
        <meta name="description" content="Circular Navigation Styles - Building a Circular Navigation with CSS Transforms | Codrops " />
        <meta name="keywords" content="css transforms, circular navigation, round navigation, circular menu, tutorial" />
        <meta name="author" content="Ayep" />
        <link rel="shortcut icon" href="image/logo/onsemi_logo.ico">

        <link rel="stylesheet" type="text/css" href="css/w3.css">
        <link rel="stylesheet" type="text/css" href="css/skeleton.css">
        <link rel='stylesheet' type="text/css" href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'>

        <style>
            body {
                font-size: 1em;
            }

            h2 {
                font-size: 1.5em;
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
        <div class="row">&nbsp;</div>
        <div class="sample-form">
            <div class="row">&nbsp;</div>
            <div class="row">&nbsp;</div>
            <div class="row">
                <h2 class="pull-left" style="border-left:none">Process List</h2>
                <button onClick="window.location.href = window.location.href" type="button" class="btn btn-default btn-lg u-pull-right"> <i class='bx bx-refresh bx-fw' ></i> Refresh Page</button>
            </div>
            <table class="u-full-width">
                <thead>
                    <tr>
                        <th style="text-align:center"><b>No</b></th>
                        <th><b>DAQ</b></th>
                        <th><b>Location</b></th>
                        <th><b>Manufacturer</b></th>
                        <th><b>Lab Manager</b></th>
                        <th><b>Manufacturer</b></th>
                        <th><b>Model</b></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $get_slides = "SELECT * FROM gest_form_process WHERE flag = '1' ORDER BY id ASC";
                    $run_slides = mysqli_query($con, $get_slides);
                    $t = 0;
                    while ($row_slides = mysqli_fetch_array($run_slides)):
                        $t += 1;
                        ?>
                        <tr>
                            <!-- FETCHING DATA FROM EACH ROW OF EVERY COLUMN -->
                            <td style="text-align:center"><?php echo $t; ?></td>
                            <td><?php echo getParameterValue($row_slides['daq_id']); ?></td>
                            <td><?php echo getParameterValue($row_slides['lab_location']); ?></td>
                            <td><?php echo getParameterValue($row_slides['manufacturer']); ?></td>
                            <td><?php echo getParameterValue($row_slides['champion']); ?></td>
                            <td><?php echo getParameterValues($row_slides['manufacturer']); ?></td>
                            <td><?php echo getParameterValues($row_slides['model']); ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </body>
</html>