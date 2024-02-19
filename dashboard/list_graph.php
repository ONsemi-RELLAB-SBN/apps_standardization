<?php
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
include '../template/form.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>SUMMARY</title>
        <meta name="author" content="Ayep" />
        <link rel="shortcut icon" href="../image/logo/onsemi_logo.ico">
        <style>
            body {
                font-family: Arial;
            }

            /* Style the tab */
            .tab {
                overflow: hidden;
                border: 1px solid #ccc;
                background-color: #f1f1f1;
            }

            /* Style the buttons inside the tab */
            .tab button {
                background-color: inherit;
                float: right;
                border: none;
                outline: none;
                cursor: pointer;
                padding: 5px 16px;
                transition: 0.3s;
                font-size: 17px;
            }

            /* Change background color of buttons on hover */
            .tab button:hover {
                background-color: #ddd;
            }

            /* Create an active/current tablink class */
            .tab button.active {
                background-color: #ccc;
            }

            /* Style the tab content */
            .tabcontent {
                display: none;
                position: relative;
                padding: 6px 12px;
                border: 1px solid #ccc;
                border-top: none;
            }
        </style>
    </head>
    <body>
        <div class="tab" style="align-items: flex-start;">
            <button class="tablinks" onclick="openCategory(event, '001')">Drilldown</button>
            <button class="tablinks" onclick="openCategory(event, '002')">Multiple Item</button>
            <button class="tablinks" onclick="openCategory(event, '003')">Stack</button>
            <button class="tablinks" onclick="openCategory(event, '004')">Stack Item</button>
            <button class="tablinks" onclick="openCategory(event, '005')">Pie Chart</button>
        </div>

        <div id="001" class="tabcontent">
            <h5>Drill Down</h5>
            <iframe src="drilldown.php" style="height:800px;width:100%;" title="Drilldown Chart"></iframe>
        </div>
        <div id="002" class="tabcontent">
            <h5>Multiple</h5>
            <iframe src="bar_multiple.php" style="height:800px;width:100%;" title="Multiple Item"></iframe>
        </div>

        <div id="003" class="tabcontent">
            <h5>Stack</h5>
            <iframe src="bar_stack.php" style="height:800px;width:100%;" title="Stack"></iframe>
        </div>

        <div id="004" class="tabcontent">
            <h5>Stack Item</h5>
            <iframe src="stack_bar_chart.php" style="height:420px;width:100%;" title="Stack Item"></iframe>
        </div>

        <div id="005" class="tabcontent">
            <h5>Pie Chart</h5>
            <iframe src="pie_chart.php" style="height:550px;width:100%;" title="Pie Chart"></iframe>
        </div>

        <div id="006" class="tabcontent">
            <h5>Process</h5>
            <p>Tokyo is the capital of Japan.</p>
        </div>

        <div id="007" class="tabcontent">
            <h5>Electrical Test</h5>
            <p>Tokyo is the capital of Japan.</p>
        </div>

        <script>
            function openCategory(evt, cityName) {
                var i, tabcontent, tablinks;
                tabcontent = document.getElementsByClassName("tabcontent");
                for (i = 0; i < tabcontent.length; i++) {
                    tabcontent[i].style.display = "none";
                }
                tablinks = document.getElementsByClassName("tablinks");
                for (i = 0; i < tablinks.length; i++) {
                    tablinks[i].className = tablinks[i].className.replace(" active", "");
                }
                document.getElementById(cityName).style.display = "block";
                evt.currentTarget.className += " active";
            }
        </script>

    </body>
</html> 