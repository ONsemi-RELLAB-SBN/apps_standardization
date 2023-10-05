<?php
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

include 'config.php';

$id = $_GET['update'];

if (isset($_POST['update_detail'])) {

    $parameter_id = $_POST['masterId'];
    $parameter_code = $_POST['masterCode'];
    $parameter_name = $_POST['masterName'];
    $detail_code = $_POST['detailsCode'];
    $detail_name = $_POST['detailsName'];
    $detail_remark = $_POST['remarks'];

    if (empty($parameter_code) || empty($parameter_name)) {
        echo 'ASUK SINI WEA';
        alert("ASHDASHDASHDAS");
        $message[] = 'please fill out all required field!';
    } else {
        $insert = "INSERT INTO gest_parameter_detail(master_code, code, name, remark, created_date, created_by, flag) VALUES('$parameter_code', '$detail_code', '$detail_name', '$detail_remark', NOW(), 'System', '1')";
        $upload = mysqli_query($con, $insert);
        echo 'NASOANSDOINAIOD (((( ((' . $insert;
        alert("HUHUHUHU");

        if ($upload) {
            echo 'masuk dekat sini';
            header('location:page002.php?update=1');
        } else {
            $$message[] = 'Please fill out all required field!';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Add Parameter Detail</title>
        <meta name="description" content="Circular Navigation Styles - Building a Circular Navigation with CSS Transforms | Codrops " />
        <meta name="keywords" content="css transforms, circular navigation, round navigation, circular menu, tutorial" />
        <meta name="author" content="Sara Soueidan for Codrops" />
        <link rel="shortcut icon" href="../favicon.ico">
        <link rel="stylesheet" type="text/css" href="css/normalize.css" />
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/component1.css" />
        <script src="js/modernizr-2.6.2.min.js"></script>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

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
        <div class="container">
            <!-- Top Navigation -->
            <header>
                <h1>Circular Navigation <span>Building a Circular Navigation with CSS Transforms</span></h1>	
            </header>
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
                    <div class="main-box">
                        <h2>Add Parameter Details</h2>
                        <form>
                        <?php
                        $select = mysqli_query($conn, "SELECT * FROM gest_parameter_master WHERE id = '$id'");
                        $no = $id + 1;
                        $s_number = str_pad($no, 4, "0", STR_PAD_LEFT );
//                        echo 'HEHEH >>> ' . $s_number;
                        while ($row = mysqli_fetch_assoc($select)) {
                            ?>
                            <div>
                                <label for=" masterName">Master Name </label>
                                <div>
                                    <input type="text" id="masterName" name="masterName" placeholder="Code" value="<?php echo $row['name']; ?>" disabled>
                                </div>
                            </div>
                            <!--<div hidden>--><div>
                                <label for=" masterCode">master Code</label>
                                <div>
                                    <input type="text" id="masterCode" name="masterCode" value="<?php echo $row['code']; ?>">
                                    <input type="text" id="masterId" name="masterId" value="<?php echo $row['id']; ?>">
                                </div>
                            </div>
                            <div>
                                <label for=" detailsCode">Details Code </label>
                                <div>
                                    <input type="text" id="detailsCode" name="detailsCode" placeholder="Details Code" value="<?php echo $row['code']; ?>" readonly>
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
                                    <textarea rows="5" cols="100" id="remarks" name="remarks"></textarea>
                                </div>
                            </div>
                            <br>
                            <!--<a href="page001.php" class="btn"><i class='bx bx-arrow-back'></i>Go Back!</a>-->
                            <!--<i class='bx bx-refresh' style='color:#ffffff' ></i><input type="submit" value="Update Parameter Master" name="update_detail" class="btn">-->
                            
                            <a href="page001.php" class="button-78"><i class='bx bx-arrow-back bx-fw' style='color:#ffffff' ></i>Go Back!</a>
                            <button type="submit" value="Update Parameter Master" name="update_detail" class="button-78" >
                                <i class='bx bx-list-plus bx-fw bx-md'></i> Add Parameter Detail
                            </button>
                            <a href="page003.php?update=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-edit"></i> Add details </a>
                            <input type="submit" value="update detais" name="update_detail" class="btn">
                            <div class="clearfix"></div>
                            <br>
                        <?php } ?>
                        </form>
                    </div>
                    <div class="col-lg-12">
                        <!--<h1>Parameter Details</h1>-->
                        <div class="main-box clearfix">
                            <div class="clearfix">
                                <h2 class="pull-left">Parameter Details List</h2>
                            </div>
                            <div class="table-responsive">
                                <table id="dt_spml" class="table">
                                    <thead>
                                        <tr>
                                            <th><span>No</span></th>
                                            <th><span>Detail Code</span></th>
                                            <th><span>Name</span></th>
                                            <th><span>Remarks</span></th>
                                            <th><span>Manage</span></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <c:forEach items="${parameterDetailsList}" var="parameterDetails" varStatus="parameterDetailsLoop">
                                        <tr>
                                            <td><c:out value="${parameterDetailsLoop.index+1}"/></td>
                                        <td><c:out value="${parameterDetails.detailCode}"/></td>
                                        <td id="modal_delete_info_${
                                            parameterDetails.id
                                        }"><c:out value="${parameterDetails.name}"/></td>
                                        <td><c:out value="${parameterDetails.remarks}"/></td>
                                        <td align="center">
                                            <a href="${contextPath}/admin/parameterMaster/editDetails/${parameterDetails.id}" class="table-link" title="Edit">
                                                <span class="fa-stack">
                                                    <i class="fa fa-square fa-stack-2x"></i>
                                                    <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                                                </span>
                                            </a>
                                            <a modaldeleteid="${parameterDetails.id}" data-toggle="modal" href="#delete_modal" class="table-link danger group_delete" onclick="modalDelete(this);">
                                                <span class="fa-stack">
                                                    <i class="fa fa-square fa-stack-2x"></i>
                                                    <i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
                                                </span>
                                            </a>
                                        </td>
                                        </tr>
                                    </c:forEach>
                                    </tbody>
                                </table>
                            </div>
                        </div>
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