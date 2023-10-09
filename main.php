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
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(ga, s);
            })();
        </script>

        <style>
            #main {
                padding: 0;
                border-right: none;
                width:100%;
                margin-top:88px;
            }
            #mypagediv2,#user-profile-bottom-wrapper {
                height:0px;
                overflow:hidden;
                display:block;
            }
            #footer {
                padding:0;
            }
            h1, h2, h3, h4, h5, h6, p {
                font-family: 'Source Sans Pro', sans-serif;
            }
            .b-headings {
                border-radius: 15%;
                border: 2px solid white;
                padding: 20px 35px;
                display: inline-block;
                font-size: 105px;
            }
            .colx-container {
                display: flex;
                width: 100%;
            }
            .colx {
                flex: 1;
                padding-top:60px;
                padding-bottom:30px;
                padding-left:24px;
                padding-right:24px;
            }

            .colx.firstx {
                border-top-left-radius:6px;
                border-bottom-left-radius:6px;
            }

            .colx.lastx {
                border-top-right-radius:6px;
                border-bottom-right-radius:6px;
            }

            @media screen and (max-width: 800px) {
                .colx-container {
                    flex-direction:column;
                }
                .colx {
                    border-radius:6px;
                    margin-bottom:24px;
                }
            }
        </style>

    </head>
    <body>
        <div class="container">
            <section>
                <div class="ws-black w3-center" style="padding-top:90px;padding-bottom:70px;">
                    <div class="w3-content" style="padding-left:20px;padding-right:20px;max-width:1200px">
                        <h1 style="font-size:67px;font-weight:700;" class="textsmallerscreens">onsemi</h1>
                        <h3 style="margin-top:50px;margin-bottom:20px;">Equipment Standardization Survey Data Entry</h3>
                        MAIN PHP FILES
                        <br><br>
                        <div class="colx-container">
                            <a href="parameter.php" class="w3-hover-text-light-grey">
                            </a><div class="colx firstx" style="background-color:#846bae;color:white"><a href="parameter.php" class="w3-hover-text-light-grey">
                                    <h4 class="b-headings">PM</h4>
                                </a><p><a href="parameter.php" class="w3-hover-text-light-grey"></a><a href="parameter.php" class="w3-button w3-round w3-margin-top w3-margin-bottom w3-border w3-hover-white" style="font-size:19px">View Parameter Master »</a></p>
                                <p style="font-size:17px;">Parameter master.</p>
                            </div>
                            <a href="form_equipment.php" class="w3-hover-text-light-grey">
                            </a><div class="colx" style="background-color:#5f4884;color:white"><a href="form_equipment.php" class="w3-hover-text-light-grey">
                                    <h4 class="b-headings">FM</h4>
                                </a><p><a href="form_equipment.php" class="w3-hover-text-light-grey"></a><a href="form_equipment.php" class="w3-button w3-round w3-margin-top w3-margin-bottom w3-border w3-hover-white" style="font-size:19px">Equipment Form »</a></p>
                                <p style="font-size:17px;">This form is to add an equipment.</p>
                            </div>
                            <a href="https://www.w3schools.com/bootstrap5/index.php" class="w3-hover-text-light-grey">
                            </a><div class="colx lastx" style="background-color:#6c3ec1;color:white"><a href="https://www.w3schools.com/bootstrap5/index.php" class="w3-hover-text-light-grey">
                                    <h4 class="b-headings">RF</h4>
                                </a><p><a href="https://www.w3schools.com/bootstrap5/index.php" class="w3-hover-text-light-grey"></a><a href="https://www.w3schools.com/bootstrap5/index.php" class="w3-button w3-round w3-margin-top w3-margin-bottom w3-border w3-hover-white" style="font-size:19px">Reference »</a></p>
                                <p style="font-size:17px;">Reference Page.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="component">
                <!-- Start Nav Structure -->
                <button class="cn-button" id="cn-button">+</button>
                <div class="cn-wrapper" id="cn-wrapper">
                    <ul>
                        <li><a href="parameter.php#"><span class="icon-picture"></span></a></li>
                        <li><a href="form_equipment.php#"><span class="icon-headphones"></span></a></li>
                        <li><a href="main.php#"><span class="icon-facetime-video"></span></a></li>
                        <li><a href="form_hardware.php#"><span class="icon-home"></span></a></li>
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