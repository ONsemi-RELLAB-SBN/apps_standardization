<?php
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
?>

<!DOCTYPE HTML>
<html>
    <head>  
        <script type="text/javascript">
            window.onload = function () {

                var chart = new CanvasJS.Chart("chartContainer", {
                    animationEnabled: true,
                    title: {
                        text: "Standardization Platform"
                    },
                    axisY: {
                        title: "Category",
                        includeZero: true
                    },
                    legend: {
                        cursor: "pointer",
                        itemclick: toggleDataSeries
                    },
                    toolTip: {
                        shared: true,
                        content: toolTipFormatter
                    },
                    data: [{
                            type: "bar",
                            showInLegend: true,
                            name: "Equipment",
                            color: "#E7823A",
                            dataPoints: [
                                {y: 8, label: "SBN"},
                                {y: 92, label: "CEBU"},
                                {y: 63, label: "OSPI"},
                                {y: 22, label: "SUZHOU"},
                                {y: 1, label: "OSV"}
                            ]
                        },
                        {
                            type: "bar",
                            showInLegend: true,
                            name: "Hardware",
                            color: "purple",
                            dataPoints: [
                                {y: 2, label: "SBN"},
                                {y: 0, label: "CEBU"},
                                {y: 0, label: "OSPI"},
                                {y: 0, label: "SUZHOU"},
                                {y: 0, label: "OSV"}
                            ]
                        },
                        {
                            type: "bar",
                            showInLegend: true,
                            name: "DAQ",
                            color: "blue",
                            dataPoints: [
                                {y: 3, label: "SBN"},
                                {y: 0, label: "CEBU"},
                                {y: 0, label: "OSPI"},
                                {y: 0, label: "SUZHOU"},
                                {y: 0, label: "OSV"}
                            ]
                        },
                        {
                            type: "bar",
                            showInLegend: true,
                            name: "Power Supply",
                            color: "green",
                            dataPoints: [
                                {y: 4, label: "SBN"},
                                {y: 0, label: "CEBU"},
                                {y: 0, label: "OSPI"},
                                {y: 3, label: "SUZHOU"},
                                {y: 0, label: "OSV"}
                            ]
                        },
                        {
                            type: "bar",
                            showInLegend: true,
                            name: "Design",
                            color: "$ff1a1a",
                            dataPoints: [
                                {y: 0, label: "SBN"},
                                {y: 0, label: "CEBU"},
                                {y: 0, label: "OSPI"},
                                {y: 0, label: "SUZHOU"},
                                {y: 0, label: "OSV"}
                            ]
                        },
                        {
                            type: "bar",
                            showInLegend: true,
                            name: "Process",
                            color: "orange",
                            dataPoints: [
                                {y: 2, label: "SBN"},
                                {y: 0, label: "CEBU"},
                                {y: 0, label: "OSPI"},
                                {y: 0, label: "SUZHOU"},
                                {y: 0, label: "OSV"}
                            ]
                        },
                        {
                            type: "bar",
                            showInLegend: true,
                            name: "Electrical Test",
                            color: "#A57164",
                            dataPoints: [
                                {y: 2, label: "SBN"},
                                {y: 0, label: "CEBU"},
                                {y: 0, label: "OSPI"},
                                {y: 0, label: "SUZHOU"},
                                {y: 0, label: "OSV"}
                            ]
                        }]
                });
                chart.render();

                function toolTipFormatter(e) {
                    var str = "";
                    var total = 0;
                    var str3;
                    var str2;
                    for (var i = 0; i < e.entries.length; i++) {
                        var str1 = "<span style= \"color:" + e.entries[i].dataSeries.color + "\">" + e.entries[i].dataSeries.name + "</span>: <strong>" + e.entries[i].dataPoint.y + "</strong> <br/>";
                        total = e.entries[i].dataPoint.y + total;
                        str = str.concat(str1);
                    }
                    str2 = "<strong>" + e.entries[0].dataPoint.label + "</strong> <br/>";
                    str3 = "<span style = \"color:Tomato\">Total: </span><strong>" + total + "</strong><br/>";
                    return (str2.concat(str)).concat(str3);
                }

                function toggleDataSeries(e) {
                    if (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                        e.dataSeries.visible = false;
                    } else {
                        e.dataSeries.visible = true;
                    }
                    chart.render();
                }

            }
        </script>
    </head>
    <body>
        <div id="chartContainer" style="height: 900px; width: 100%;"></div>
        <script type="text/javascript" src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
        <script type="text/javascript" src="https://cdn.canvasjs.com/jquery.canvasjs.min.js"></script>
        <script type="text/javascript" src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
    </body>
</html>