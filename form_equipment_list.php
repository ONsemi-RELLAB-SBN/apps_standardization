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
        <title>Parameter</title>
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
                <tr>
                    <th style="text-align:center"><b>No</b></th>
                    <th><b>Equipment</b></th>
                    <th><b>Location</b></th>
                    <th><b>Strategy</b></th>
                    <th><b>Champion</b></th>
                    <th><b>Test</b></th>
                    <th style="text-align:center"><b>Action</b></th>
                </tr>
                <!-- PHP CODE TO FETCH DATA FROM ROWS -->
                <?php
                $get_slides = "SELECT * FROM gest_eqpt_form WHERE flag = '1' ORDER BY id ASC";
                $run_slides = mysqli_query($con, $get_slides);
                // LOOP TILL END OF DATA
                $t = 0;
                while ($row_slides = mysqli_fetch_array($run_slides)):
                    $t +=1;
                    ?>
                    <tr>
                        <!-- FETCHING DATA FROM EACH ROW OF EVERY COLUMN -->
                        <td style="text-align:center"><?php echo $t; ?></td>
                        <td><?php echo $row_slides['eqpt_id']; ?></td>
                        <td><?php echo $row_slides['lab_location']; ?></td>
                        <td><?php echo $row_slides['strategy']; ?></td>
                        <td><?php echo $row_slides['champion']; ?></td>
                        <td><?php echo $row_slides['champion']; ?></td>
                        <td style="text-align:center">
                            <a href="form_equipment_edit.php?edit=<?php echo $row_slides['id']; ?>" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span> EDIT </a>
                            <a href="form_delete_equipment.php?delete=<?php echo $row_slides['id']; ?>" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span> DELETE </a>
                        </td>
                    </tr>
                    <?php
                endwhile;
                ?>
            </table>

        </div><!-- /container -->
        <script src="js/polyfills.js"></script>
        <script src="js/demo1.js"></script>
        <!-- For the demo ad only -->   
        <script src="http://tympanus.net/codrops/adpacks/demoad.js"></script>
    </body>
</html>