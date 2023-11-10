<?php
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

use ayep\SimpleXLSXGen;

ini_set('error_reporting', E_ALL );
ini_set('display_errors', 1 );

require_once __DIR__.'\SimpleXLSXGen.php';

//$data = [
//    ['Debug', 123]
//];
//
//$hehehe = SimpleXLSXGen::fromArray( $data )->saveAs('debug.xlsx');

if (isset($_POST['array2excel'])) {
    require __DIR__ . '/simplexlsxgen/src/SimpleXLSXGen.php';
    $data = json_decode($_POST['array2excel'], false);
    SimpleXLSXGen::fromArray($data)->downloadAs('file.xlsx');
    return;
}
?>
<html lang="en">
    <head>
        <title>JS array to Excel</title>
    </head>
    <script>

        function array2excel() {
            var books = [
                ["ISBN", "title", "author", "publisher", "ctry"],
                [618260307, "The Hobbit", "J. R. R. Tolkien", "Houghton Mifflin", "USA"],
                [908606664, "Slinky Malinki", "Lynley Dodd", "Mallinson Rendel", "NZ"]
            ];
            var json = JSON.stringify(books);

            var request = new XMLHttpRequest();

            request.onload = function () {
                if (this.status === 200) {
                    var file = new Blob([this.response], {type: this.getResponseHeader('Content-Type')});
                    var fileURL = URL.createObjectURL(file);
                    var filename = "", m;
                    var disposition = this.getResponseHeader('Content-Disposition');
                    if (disposition && (m = /"([^"]+)"/.exec(disposition)) !== null) {
                        filename = m[1];
                    }
                    var a = document.createElement("a");
                    if (typeof a.download === 'undefined') {
                        window.location = fileURL;
                    } else {
                        a.href = fileURL;
                        a.download = filename;
                        document.body.appendChild(a);
                        a.click();
                    }
                } else {
                    alert("Error: " + this.status + "  " + this.statusText);
                }
            }

            request.open('POST', "array2excel.php");
            request.responseType = "blob";
            request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            request.send("array2excel=" + encodeURIComponent(json));
        }
    </script>
    <body>
        <input type="button" onclick="array2excel()" value="array2excel" />
    </body>
</html>