<?php
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

include 'config.php';

$id = $_GET['update'];

if (isset($_POST['update_parameter'])) {

    $parameter_name = $_POST['parameter_name'];
    $parameter_code = $_POST['parameter_code'];
    $parameter_image = $_FILES['parameter_image']['name'];
    $parameter_image_tmp_name = $_FILES['parameter_image']['tmp_name'];
    $parameter_image_folder = 'uploaded_img/' . $parameter_image;

    if (empty($parameter_name) || empty($parameter_code)) {
        $message[] = 'please fill out all!';
    } else {
        $update_data = "UPDATE gest_parameter_master SET name='$parameter_name', code='$parameter_code', link_image='$parameter_image' WHERE id = '$id'";
        $upload = mysqli_query($conn, $update_data);

        if ($upload) {
            move_uploaded_file($parameter_image_tmp_name, $parameter_image_folder);
            header('location:page001.php');
        } else {
            $$message[] = 'please fill out all!';
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
        <title>Circular Navigation - Demo 1 | Codrops</title>
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

        <script>
            var subjectObject = {
                "Front-end": {
                    "HTML": ["Links", "Images", "Tables", "Lists"],
                    "CSS": ["Borders", "Margins", "Backgrounds", "Float"],
                    "JavaScript": ["Variables", "Operators", "Functions", "Conditions"]
                },
                "Back-end": {
                    "PHP": ["Variables", "Strings", "Arrays"],
                    "SQL": ["SELECT", "UPDATE", "DELETE"]
                }
            };
            window.onload = function () {
                var subjectSel = document.getElementById("subject");
                var topicSel = document.getElementById("topic");
                var chapterSel = document.getElementById("chapter");
                for (var x in subjectObject) {
                    subjectSel.options[subjectSel.options.length] = new Option(x, x);
                }
                subjectSel.onchange = function () {
                        //empty Chapters- and Topics- dropdowns
                        chapterSel.length = 1;
                        topicSel.length = 1;
                    //display correct values
                    for (var y in subjectObject[this.value]) {
                        topicSel.options[topicSel.options.length] = new Option(y, y);
                    }
                };
                topicSel.onchange = function () {
                        //empty Chapters dropdown
                        chapterSel.length = 1;
                    //display correct values
                    var z = subjectObject[subjectSel.value][this.value];
                    for (var i = 0; i < z.length; i++) {
                        chapterSel.options[chapterSel.options.length] = new Option(z[i], z[i]);
                    }
                };
            };
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
                        while ($row = mysqli_fetch_assoc($select)) {
                            ?>
                            <div class="form-group">
                                <label for=" masterName" class="col-lg-4 control-label">Master Name </label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" id="masterName" name="masterName" placeholder="Code" value="<?php echo $row['name']; ?>" disabled>
                                </div>
                            </div>
                            <div class="form-group" hidden>
                                <label for=" masterCode" class="col-lg-4 control-label">master Code</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" id="masterCode" name="masterCode" value="<?php echo $row['code']; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for=" detailsCode" class="col-lg-4 control-label">Details Code </label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" id="detailsCode" name="detailsCode" placeholder="Details Code" value="<?php echo $row['code']; ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="detailsName" class="col-lg-4 control-label">Details Name *</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" id="detailsName" name="detailsName" placeholder="Details Name" value="" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="remarks" class="col-lg-4 control-label">Remarks </label>
                                <div class="col-lg-8">
                                    <textarea class="form-control" rows="5" id="remarks" name="remarks"></textarea>
                                </div>
                            </div>
                            <br>
                            <a href="page001.php" class="btn"><i class='bx bx-arrow-back'></i>Go Back!</a>
                            <i class='bx bx-refresh' style='color:#ffffff' ></i><input type="submit" value="Update Parameter Master" name="update_parameter" class="btn">
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