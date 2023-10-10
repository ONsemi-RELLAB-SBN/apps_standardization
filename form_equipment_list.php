<?php
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
include 'class/db.php';
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>LIST | Equipment Form List</title>
        <meta name="description" content="Circular Navigation Styles - Building a Circular Navigation with CSS Transforms | Codrops " />
        <meta name="keywords" content="css transforms, circular navigation, round navigation, circular menu, tutorial" />
        <meta name="author" content="Ayep" />
        <link rel="shortcut icon" href="image/dribbble.ico">
        <link rel="stylesheet" type="text/css" href="css/normalize.css" />
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/component1.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'>
        <script src="js/modernizr-2.6.2.min.js"></script>
        <script type="text/javascript">
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-7243260-2']);
            _gaq.push(['_trackPageview']);
            (function () {
                var ga = document.createElement('script');
                ga.type = 'text/javascript';
                ga.async = true;
                ga.src = ('https:' === document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(ga, s);
            })();
        </script>
        <style>
            #addBtn {
                display: block;
                position: fixed;
                /*bottom: 20px;*/
                /*right: 30px;*/
                /*z-index: 99;*/
                font-size: 18px;
                border: none;
                outline: none;
                background-color: gray;
                color: white;
                cursor: pointer;
                padding: 15px;
                border-radius: 4px;
            }

            #addBtn:hover {
                background-color: #17a2b8;
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
        <div clE
             <div class="container">
                 <!--<table style="margin-top: 25px;">-->
            <table class="customers">
                <hr>
                <tr>
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
                            <a href="form_equipment_view.php?view=<?php echo $row_slides['id']; ?>" title="View Record" data-toggle="tooltip"><span class="fa fa-book"></span> VIEW </a>
                            <a href="form_equipment_edit.php?edit=<?php echo $row_slides['id']; ?>" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span> EDIT </a>
                            <a href="form_delete_equipment.php?delete=<?php echo $row_slides['id']; ?>" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span> DELETE </a>
                        </td>
                    </tr>
                    <?php
                endwhile;
                ?>
            </table>
            <hr>
            <button onclick="location.href='form_equipment.php'" type="button" id="addBtn">Create</button>
        </div><!-- /container -->
    </body>
</html>

<?php

function getParameterValue($code) {
    $servername = "localhost";
    $username = "ayep";
    $password = "mysql@2023";
    $dbname = "gest";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $query = "SELECT name FROM gest_parameter_detail WHERE CODE = '$code'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $data = $row['name'];
        }
    } else {
        echo "No data found";
    }

    $conn->close();
    return $data;
}

function getParameterValues($string) {
    $mysqli = new mysqli('localhost', 'ayep', 'mysql@2023', 'gest');
    if ($mysqli->connect_errno) {
        echo 'Failed to connect to MySQL: (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error;
        exit;
    }

    $codes = explode(',', $string);
    $values = [];
    foreach ($codes as $code) {
        $query = 'SELECT name FROM gest_parameter_detail WHERE code = \'' . $code . '\'';
        $result = $mysqli->query($query);
        if (!$result) {
            echo 'Failed to execute query: (' . $mysqli->errno . ') ' . $mysqli->error;
            exit;
        }

        $row = $result->fetch_assoc();
        $values[] = $row['name'];
    }
    $mysqli->close();

    return implode(', ', $values);
}