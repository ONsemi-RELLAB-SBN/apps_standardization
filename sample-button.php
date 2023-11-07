<?php
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <link rel="stylesheet" href="css/sample-button.css"/>
        <link rel='stylesheet' type="text/css" href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'>
        <link rel="stylesheet" href="css/sample-button-02.css"/>
    </head>
    <body>
        <h1>
            CSS Button Pending / Success / Fail Animation
        </h1>
        <p>Click button below to see the states in an sequenced animation: </p>

        <span class="loading-btn-wrapper">
            <button class="loading-btn js_success-animation-trigger">
                <span class="loading-btn__text">
                    Submit n success
                </span>
            </button>
        </span>

        <span class="loading-btn-wrapper">
            <button class="loading-btn js_fail-animation-trigger">
                <span class="loading-btn__text">
                    Submit then failed
                </span>
            </button>
        </span>

        <span class="loading-btn-wrapper">
            <button class="loading-btn">
                <span class="loading-btn__text">
                    Hantar Biasa
                </span>
            </button>
        </span>

        <div class="buttoneffect" id="button-7">
            <!--<div id="dub-arrow"><img src="https://github.com/atloomer/atloomer.github.io/blob/master/img/iconmonstr-arrow-48-240.png?raw=true" alt="" /></div>-->
            <i class='bx bxl-telegram bx-fw bx-md' style='color:#71041c' id="dub-arrow"></i>
            <a href="#">Submit!</a>
        </div>

        <div id="container">
            <button class="learn-more">
                <span class="circle" aria-hidden="true">
                    <span class="icon arrow"></span>
                </span>
                <span class="button-text">Learn More</span>
            </button>
        </div>
        
        <button class="learn-more">
            <span class="circle" aria-hidden="true">
                <span class="icon arrow"></span>
            </span>
            <span class="button-text">Learn More</span>
        </button>

        <script src="js/sample-button.js"></script>
    </body>
</html>