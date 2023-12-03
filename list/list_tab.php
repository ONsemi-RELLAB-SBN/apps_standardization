<?php
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
                float: left;
                border: none;
                outline: none;
                cursor: pointer;
                padding: 14px 16px;
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
                padding: 6px 12px;
                border: 1px solid #ccc;
                border-top: none;
            }
        </style>
    </head>
    <body>

        <div class="tab">
            <button class="tablinks" onclick="openCategory(event, 'eq')">Equipment</button>
            <button class="tablinks" onclick="openCategory(event, 'hw')">Hardware</button>
            <button class="tablinks" onclick="openCategory(event, 'dq')">DAQ</button>
            <button class="tablinks" onclick="openCategory(event, 'ps')">Power Supply</button>
            <button class="tablinks" onclick="openCategory(event, 'ds')">Design</button>
            <button class="tablinks" onclick="openCategory(event, 'pc')">Process</button>
            <button class="tablinks" onclick="openCategory(event, 'et')">Electrical Test</button>
        </div>

        <div id="eq" class="tabcontent">
            <h3>Equipment List</h3>
            <iframe src="list_equipment.php" style="height:700px;width:100%;" title="Equipment List"></iframe>
        </div>

        <div id="hw" class="tabcontent">
            <h3>Hardware</h3>
            <p>Paris is the capital of France.</p> 
        </div>

        <div id="dq" class="tabcontent">
            <h3>DAQ</h3>
            <p>Tokyo is the capital of Japan.</p>
        </div>

        <div id="ps" class="tabcontent">
            <h3>Power Supply</h3>
            <p>Tokyo is the capital of Japan.</p>
        </div>

        <div id="ds" class="tabcontent">
            <h3>Design</h3>
            <p>Tokyo is the capital of Japan.</p>
        </div>

        <div id="pc" class="tabcontent">
            <h3>Process</h3>
            <p>Tokyo is the capital of Japan.</p>
        </div>

        <div id="et" class="tabcontent">
            <h3>Electrical Test</h3>
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
