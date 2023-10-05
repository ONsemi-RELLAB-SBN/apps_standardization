<?php
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

include 'config.php';

$id = $_GET['edit'];

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
            <section>
                <p>Parameter Details</p>
                <div class="admin-product-form-container centered">
                    <?php
                    $select = mysqli_query($conn, "SELECT * FROM gest_parameter_master WHERE id = '$id'");
                    while ($row = mysqli_fetch_assoc($select)) {
                        ?>
                        <form action="" method="post" enctype="multipart/form-data">
                            <h3 class="title">update the product</h3>
                            <input type="text" class="box" name="parameter_name" value="<?php echo $row['name']; ?>" placeholder="Enter the parameter name">
                            <input type="number" min="0" class="box" name="parameter_code" value="<?php echo $row['code']; ?>" placeholder="enter the parameter code">
                            <input type="file" class="box" name="parameter_image" accept="image/png, image/jpeg, image/jpg">
                            <input type="submit" value="Update Parameter Master" name="update_parameter" class="btn">
                            <a href="page001.php" class="btn">Go Back!</a>
                        </form>
                    <?php } ?>
                    <form name="form1" id="form1" action="/action_page.php">
                        Subjects: <select name="subject" id="subject">
                            <option value="" selected="selected">Select subject</option>
                        </select>
                        <br><br>
                        Topics: <select name="topic" id="topic">
                            <option value="" selected="selected">Please select subject first</option>
                        </select>
                        <br><br>
                        Chapters: <select name="chapter" id="chapter">
                            <option value="" selected="selected">Please select topic first</option>
                        </select>
                        <br><br>
                        <input type="submit" value="Submit">  
                    </form>
                </div>
            </section>
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
        </div><!-- /container -->
        <script src="js/polyfills.js"></script>
        <script src="js/demo1.js"></script>
        <!-- For the demo ad only -->   
        <script src="http://tympanus.net/codrops/adpacks/demoad.js"></script>
    </body>
</html>