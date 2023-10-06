<?php
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

include 'class/db.php';
$id = $_GET['update'];
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Circular Navigation - Demo 1 | Codrops</title>
        <meta name="description" content="Circular Navigation Styles - Building a Circular Navigation with CSS Transforms | Codrops " />
        <meta name="keywords" content="css transforms, circular navigation, round navigation, circular menu, tutorial" />
        <meta name="author" content="Sara Soueidan for Codrops" />
        <link rel="shortcut icon" href="../favicon.ico">
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
            .customers {
                font-family: Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            .customers td, #customers th {
                border: 1px solid #ddd;
                padding: 8px;
            }

            .customers tr:nth-child(even){
                background-color: #f2f2f2;
            }

            .customers tr:hover {
                background-color: #ddd;
            }

            .customers th {
                padding-top: 12px;
                padding-bottom: 12px;
                text-align: left;
                background-color: #04AA6D;
                color: white;
            }
        </style>
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
    <div class="topnav">
        <!-- Centered link -->
        <div class="topnav-centered">
            <a href="index.php#home">Home</a>
        </div>
        <!-- Left-aligned links (default) -->
        <a href="form.php#eqp">Form Equipment</a>
        <a href="form2.php#hw">Form Hardware</a>
        <!-- Right-aligned links -->
        <div class="topnav-right">
            <a href="page001.php#parameter" class="active">Parameter</a>
        </div>
    </div>
    <div class="container">
        <?php if ($id == '') { ?>
            <h1>Access denied! Please go back to <a href="page001.php" class="btn"> main page</a></h1>
            <div class="component">
                <!-- Start Nav Structure -->
                <button class="cn-button" id="cn-button">+</button>
                <div class="cn-wrapper" id="cn-wrapper">
                    <ul>
                        <li><a href="page001.php#"><span class="icon-picture"></span></a></li>
                        <li><a href="page002.php#"><span class="icon-headphones"></span></a></li>
                        <li><a href="page003.php#"><span class="icon-home"></span></a></li>
                        <li><a href="page004.php#"><span class="icon-facetime-video"></span></a></li>
                        <li><a href="page005.php#"><span class="icon-envelope-alt"></span></a></li>
                    </ul>
                </div>
                <div id="cn-overlay" class="cn-overlay"></div>
                <!-- End Nav Structure -->
            </div>
        <?php } else { ?>
            <section>
                <div>
                    <h2>Add Parameter Details</h2>
                    <form name='add_details' id='add_details' method="pot" action='page_add_detail.php'>
                        <?php
                        $select = mysqli_query($con, "SELECT * FROM gest_parameter_master WHERE id = '$id'");
//                        $s_number = str_pad($no, 3, "0", STR_PAD_LEFT );
                        while ($row = mysqli_fetch_assoc($select)) {
                            ?>
                            <div>
                                <div>
                                    <label for=" masterName">Master Name </label>
                                    <div>
                                        <input type="text" id="paramName" name="paramName" value="<?php echo $row['name']; ?>" readonly>
                                    </div>
                                </div>
                                <div hidden>
                                    <label for=" masterCode">Master Code</label>
                                    <div>
                                        <input type="text" id="masterCode" name="masterCode" value="<?php echo $row['code']; ?>" readonly>
                                        <input type="text" id="masterId" name="masterId" value="<?php echo $row['id']; ?>" readonly>
                                    </div>
                                </div>
                                <div>
                                    <?php
                                    $getData = "SELECT COUNT(*) as count FROM gest_parameter_detail WHERE master_code = '" . $row['code'] . "'";
                                    //                                echo 'query kat dalam >>> ' . $getData;
                                    $rData = mysqli_query($con, $getData);
                                    $rowMaklumat = mysqli_fetch_assoc($rData);
                                    $data = $rowMaklumat['count'] + 1;
                                    //                                echo 'HEHEHEH >>> '.$data;
                                    $s_number = $row['code'] . str_pad($data, 3, "0", STR_PAD_LEFT);
                                    //                                echo 'oi oi '.$s_number;
                                    ?>
                                    <label for=" detailsCode">Details Code </label>
                                    <div>
                                        <input type="text" id="detailsCode" name="detailsCode" placeholder="Details Code" value="<?php echo $s_number; ?>" readonly>
                                    </div>
                                </div>
                                <div>
                                    <label for="detailsName">Details Name *</label>
                                    <div>
                                        <input type="text" id="detailsName" name="detailsName" placeholder="Details Name" value="" >
                                    </div>
                                </div>
                                <div>
                                    <label for="remarks">Remarks </label>
                                    <div>
                                        <textarea rows="5" cols="97" id="remarks" name="remarks"></textarea>
                                    </div>
                                </div>
                                <br>
                                <a href="page001.php" class="button-78"><i class='bx bx-arrow-back bx-fw' style='color:#ffffff' ></i>Go Back!</a>
                                <button type="submit" value="Update Parameter Master" name="update_detail" class="button-78" >
                                    <i class='bx bx-list-plus bx-fw bx-md'></i> Add Parameter Detail
                                </button>
                                <br>
                                <br>
                            </div>
                            <div>
                                <div>
                                    <h2>Parameter Details List</h2>
                                </div>
                                <div>
                                    <table class="customers">
                                        <thead>
                                            <tr>
                                                <!--<th><span>No</span></th>-->
                                                <th><span>Detail Code</span></th>
                                                <th><span>Name</span></th>
                                                <th><span>Remarks</span></th>
                                                <th><span>Manage</span></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $get_slides2 = "SELECT * FROM gest_parameter_detail WHERE master_code = '" . $row['code'] . "' ORDER BY code ASC";
                                            $run_slides2 = mysqli_query($con, $get_slides2);
                                            // LOOP TILL END OF DATA
                                            while ($row_slides2 = mysqli_fetch_array($run_slides2)):
                                                ?>
                                                <tr>
                                                    <!-- FETCHING DATA FROM EACH ROW OF EVERY COLUMN -->
                                                    <td><?php echo $row_slides2['name']; ?></td>
                                                    <td><?php echo $row_slides2['code']; ?></td>
                                                    <td><?php echo $row_slides2['remark']; ?></td>
                                                    <td>
                                                        <a href="page_update_detail.php?edit=<?php echo $row_slides2['id']; ?>" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span> EDIT </a>
                                                        <!--<a href="page003.php?update=<?php echo $row_slides2['id']; ?>" title="Add Details" data-toggle="tooltip"><span class="fa fa-plus"></span> ADD DETAIL </a>-->
                                                        <a href="page_remove_detail.php?delete=<?php echo $row_slides2['id']; ?>" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span> DELETE </a>
                                                    </td>
                                                </tr>
                                                <?php
                                            endwhile;
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        <?php } ?>
                    </form>
                </div>
            </section>
        <?php } ?>
    </div><!-- /container -->
    <script src="js/polyfills.js"></script>
    <script src="js/demo1.js"></script>
    <!-- For the demo ad only -->   
    <script src="http://tympanus.net/codrops/adpacks/demoad.js"></script>
</body>
</html>