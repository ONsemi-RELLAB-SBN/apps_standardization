<?php
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

include './class/db.php';
include './class/get_parameter.php';
$query = '';

if (isset($_POST['cari'])) {
    $data01 = $_POST['labLocation'];
    $data02 = $_POST['productGroup'];
    $data03 = $_POST['category'];
//    $data04 = $_POST['labManager'];
//    $data05 = $_POST['labLocation'];

    if (empty($data03)) {
        $message[] = 'Please fill out this category.';
    } else if ($data03 == '004001') {
        $query = 'SELECT * FROM gest_form_eqpt';
    } else if ($data03 == '004002') {
        $query = 'SELECT * FROM gest_form_hw';
    } else if ($data03 == '004003') {
        $query = 'SELECT * FROM gest_form_daq';
    } else if ($data03 == '004004') {
        $query = 'SELECT * FROM gest_form_ps';
    } else if ($data03 == '004005') {
        $query = 'SELECT * FROM gest_form_design';
    } else if ($data03 == '004006') {
        $query = 'SELECT * FROM gest_form_process';
    } else if ($data03 == '004007') {
        $query = 'SELECT * FROM gest_form_et';
    }

//    echo '<br>data dapat :: ' . $data01;
//    echo '<br>data dapat :: ' . $data02;
//    echo '<br>data dapat :: ' . $data03;
//    echo '<br>data dapat :: ' . $data04;
};
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Query</title>
        <meta name="author" content="Ayep" />
        <link rel="shortcut icon" href="image/logo/onsemi_logo.ico">

        <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="css/normalize.css">
        <link rel="stylesheet" type="text/css" href="css/skeleton_query.css">
        <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'>

        <style>
            body {
                font-size: 1em;
            }

            h2 {
                font-size: 1.5em;
            }
        </style>

        <script>

        </script>
    </head>
    <body>
        <?php
        if (isset($message)) {
            foreach ($message as $message) {
                echo '<br><br><span class="message" style="color:red">' . $message . '</span>';
            }
        }
        ?>
        <div class="row" >
            <h5 style="">Query Page <button onClick="window.location.href = window.location.href" type="button" class="btn btn-default btn-lg u-pull-right"> <i class='bx bx-refresh bx-fw' ></i> Refresh Page</button></h5>
        </div>
        <details>
            <summary>
            <h2 style="border-left: none;">Filter</h2>
            </summary>
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
                <!--<form id="form_query">-->
                <div class="row">
                    <h6>General</h6>
                    <div class="five columns">
                        <label for="labLocation">Lab Location</label>
                        <select class="u-full-width" id="labLocation" name="labLocation" required>
                            <option value=""></option>
                            <?php
                            $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '002' ORDER BY code ASC";
                            $resSite = mysqli_query($con, $sqlDdSite);
                            while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                            <?php endwhile; ?>
                        </select>
                    </div>
                    <div class="five columns">
                        <label for="productGroup">Product Group</label>
                        <select class="u-full-width" id="productGroup" name="productGroup">
                            <option value=""></option>
                            <?php
                            $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '003' ORDER BY code ASC";
                            $resSite = mysqli_query($con, $sqlDdSite);
                            while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                            <?php endwhile; ?>
                        </select>
                    </div>
                    <div class="five columns">
                        <label for="category">Standardization Category</label>
                        <select class="u-full-width" id="category" name="category" required>
                            <option value=""></option>
                            <?php
                            $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '004' ORDER BY code ASC";
                            $resSite = mysqli_query($con, $sqlDdSite);
                            while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                            <?php endwhile; ?>
                        </select>
                    </div>
                </div>
                <div class="row" >
                    <h6>Details</h6>
                    <div class="three columns">
                        <label for="manufacturer">Manufacturer</label>
                        <input type="text" id="asset_no" name="manufacturer" placeholder="Manufacturer" value="" style="width: 100%">
                    </div>
                    <div class="three columns">
                        <label for="test2">Filter apa?</label>
                        <select class="u-full-width" id="test2" name="test2">
                            <option value=""></option>
                            <?php
                            $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '009' ORDER BY code ASC";
                            $resSite = mysqli_query($con, $sqlDdSite);
                            while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                            <?php endwhile; ?>
                        </select>
                    </div>
                    <div class="three columns">
                        <label for="test1">Another filter?</label>
                        <select class="u-full-width" id="test1" name="test1">
                            <option value=""></option>
                            <?php
                            $sqlDdSite = "SELECT * FROM gest_parameter_detail WHERE master_code = '009' ORDER BY code ASC";
                            $resSite = mysqli_query($con, $sqlDdSite);
                            while ($rowSite = mysqli_fetch_array($resSite)): ?>
                                <option value="<?php echo $rowSite['code']; ?>"><?php echo $rowSite['name']; ?></option>
                            <?php endwhile; ?>
                        </select>
                    </div>
                </div>
                <button class="button-primary" type="submit" value="Submit" name="cari"> Search </button>
            </form>
        </details>

        <?php
        if ($query == '') {
//            echo 'display nothing at first';
            ?>
            <details>
                <summary></summary>
            </details>
        <?php } else {
            ?>
            <table class="u-full-width">
                <h2 style="border-left: none;margin-top:50px">Result List</h2>
                <thead>
                    <tr>
                        <th><b>Lab Location</b></th>
                        <th><b>Product Group</b></th>
                        <th><b>Category</b></th>
                        <th><b>Champion</b></th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $run_slides = mysqli_query($con, $query);
                while ($row_slides = mysqli_fetch_array($run_slides)): ?>
                    <tr>
                        <!-- FETCHING DATA FROM EACH ROW OF EVERY COLUMN -->
                        <td><?php echo getParameterValue($row_slides['lab_location']); ?></td>
                        <td><?php echo getParameterValue($row_slides['strategy']); ?></td>
                        <td><?php echo getParameterValue($row_slides['standard_category']); ?></td>
                        <td><?php echo getParameterValue($row_slides['champion']); ?></td>
                    </tr>
                 <?php endwhile; ?>
                </tbody>
            </table>
        <?php } ?>
    </body>
</html>