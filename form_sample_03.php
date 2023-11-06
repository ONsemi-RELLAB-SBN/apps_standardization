<?php
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
?>

<!DOCTYPE html>
<html>
    <script>
        function includeHTML() {
            var z, i, elmnt, file, xhttp;
            /*loop through a collection of all HTML elements:*/
            z = document.getElementsByTagName("*");
            for (i = 0; i < z.length; i++) {
                elmnt = z[i];
                /*search for elements with a certain atrribute:*/
                file = elmnt.getAttribute("w3-include-html");
                if (file) {
                    /*make an HTTP request using the attribute value as the file name:*/
                    xhttp = new XMLHttpRequest();
                    xhttp.onreadystatechange = function () {
                        if (this.readyState === 4) {
                            if (this.status === 200) {
                                elmnt.innerHTML = this.responseText;
                            }
                            if (this.status === 404) {
                                elmnt.innerHTML = "Page not found.";
                            }
                            /*remove the attribute, and call this function once more:*/
                            elmnt.removeAttribute("w3-include-html");
                            includeHTML();
                        }
                    };
                    xhttp.open("GET", file, true);
                    xhttp.send();
                    /*exit the function:*/
                    return;
                }
            }
        };
    </script>
    <body>
        <!--THIS IS SAMPLE UNTUK INCLUDE HTML PAGE-->
        <div w3-include-html="parameter.php"></div> 
        <div w3-include-html="form_equipment.php"></div> 
        <div w3-include-html="form_hardware.php"></div> 
        <div w3-include-html="form_daq.php"></div> 
        <div w3-include-html="form_power.php"></div> 
        <div w3-include-html="form_power123.php"></div> 
        <div w3-include-html="form_design.php"></div> 
        <div w3-include-html="form_process.php"></div> 
        <div w3-include-html="form_test.php"></div> 

        <script>
            includeHTML();
        </script>

    </body>
</html>