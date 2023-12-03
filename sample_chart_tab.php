<?php
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
?>

<!DOCTYPE HTML>
<html>
    <head>
        <link href="https://canvasjs.com/assets/css/jquery-ui.1.11.2.min.css" rel="stylesheet" />
        <style>
            .ui-tabs-anchor {
                outline: none;
            }
        </style>
        <script>
            window.onload = function () {
                var options1 = {
                    animationEnabled: true,
                    title: {
                        text: "Spline Chart using jQuery Plugin"
                    },
                    axisX: {
                        labelFontSize: 14
                    },
                    axisY: {
                        labelFontSize: 14
                    },
                    data: [{
                        type: "spline", //change it to line, area, bar, pie, etc
                        dataPoints: [
                            {y: 10},
                            {y: 6},
                            {y: 14},
                            {y: 12},
                            {y: 19},
                            {y: 14},
                            {y: 26},
                            {y: 10},
                            {y: 22}
                        ]
                    }]
                };

                var options2 = {
                    title: {
                        text: "Spline Area Chart using jQuery Plugin"
                    },
                    axisX: {
                        labelFontSize: 14
                    },
                    axisY: {
                        labelFontSize: 14
                    },
                    data: [{
                        type: "splineArea", //change it to line, area, bar, pie, etc
                        dataPoints: [
                            {y: 10},
                            {y: 6},
                            {y: 14},
                            {y: 12},
                            {y: 19},
                            {y: 14},
                            {y: 26},
                            {y: 10},
                            {y: 22}
                        ]
                    }]
                };
                
                
                /* BAR STACK START 03 */
                var chartStack = new CanvasJS.Chart("chartContainer3", {
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
                chartStack.render();

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
                    chartStack.render();
                }
                /* BAR STACK END */
                
                /* BAR STACK HORIZONTAL START 04 */
                var chart02 = new CanvasJS.Chart("chartContainer4", {
                    animationEnabled: true,
                    title: {
                        text: "Standardization Platform"
                    },
                    axisY: {
                        title: " ",
                        titleFontColor: "#4F81BC",
                        lineColor: "#4F81BC",
                        labelFontColor: "#4F81BC",
                        tickColor: "#4F81BC"
                    },
//                    axisY2: {
//                        title: "Millions of Barrels/day",
//                        titleFontColor: "#C0504E",
//                        lineColor: "#C0504E",
//                        labelFontColor: "#C0504E",
//                        tickColor: "#C0504E"
//                    },
                    toolTip: {
                        shared: true
                    },
                    legend: {
                        cursor: "pointer",
                        itemclick: toggleDataSeries
                    },
                    data: [{
                            type: "column",
                            name: "Equipment",
                            legendText: "Equipment",
                            showInLegend: true,
                            dataPoints: [
                                {label: "SBN", y: 8},
                                {label: "CEBU", y: 92},
                                {label: "OSPI", y: 63},
                                {label: "SUZHOU", y: 22},
                                {label: "OSV", y: 1}
                            ]
                        },
                        {
                            type: "column",
                            name: "Hardware",
                            legendText: "Hardware",
//                            axisYType: "secondary",
                            showInLegend: true,
                            dataPoints: [
                                {label: "SBN", y: 2},
                                {label: "CEBU", y: 0},
                                {label: "OSPI", y: 0},
                                {label: "SUZHOU", y: 0},
                                {label: "OSV", y: 0}
                            ]
                        },
                        {
                            type: "column",
                            name: "DAQ",
                            legendText: "DAQ",
//                            axisYType: "secondary",
                            showInLegend: true,
                            dataPoints: [
                                {label: "SBN", y: 3},
                                {label: "CEBU", y: 0},
                                {label: "OSPI", y: 0},
                                {label: "SUZHOU", y: 0},
                                {label: "OSV", y: 0}
                            ]
                        },
                        {
                            type: "column",
                            name: "Power Supply",
                            legendText: "Power Supply",
//                            axisYType: "secondary",
                            showInLegend: true,
                            dataPoints: [
                                {label: "SBN", y: 4},
                                {label: "CEBU", y: 0},
                                {label: "OSPI", y: 0},
                                {label: "SUZHOU", y: 3},
                                {label: "OSV", y: 0}
                            ]
                        },
                        {
                            type: "column",
                            name: "Design",
                            legendText: "Design",
//                            axisYType: "secondary",
                            showInLegend: true,
                            dataPoints: [
                                {label: "SBN", y: 0},
                                {label: "CEBU", y: 0},
                                {label: "OSPI", y: 0},
                                {label: "SUZHOU", y: 0},
                                {label: "OSV", y: 0}
                            ]
                        },
                        {
                            type: "column",
                            name: "Process",
                            legendText: "Process",
//                            axisYType: "secondary",
                            showInLegend: true,
                            dataPoints: [
                                {label: "SBN", y: 0},
                                {label: "CEBU", y: 0},
                                {label: "OSPI", y: 0},
                                {label: "SUZHOU", y: 0},
                                {label: "OSV", y: 0}
                            ]
                        },
                        {
                            type: "column",
                            name: "Electrical Test",
                            legendText: "Electrical Test",
//                            axisYType: "secondary",
                            showInLegend: true,
                            dataPoints: [
                                {label: "SBN", y: 0},
                                {label: "CEBU", y: 0},
                                {label: "OSPI", y: 0},
                                {label: "SUZHOU", y: 0},
                                {label: "OSV", y: 0}
                            ]
                        }]
                });
                chart02.render();

                function toggleDataSeries(e) {
                    if (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                        e.dataSeries.visible = false;
                    } else {
                        e.dataSeries.visible = true;
                    }
                    chart02.render();
                }
                /* BAR STACK HORIZONTAL END */
                
                /* BAR STACK VERTICAL START 05 */
                var chartStack05 = new CanvasJS.Chart("chartContainer5", {
                    animationEnabled: true,
                    theme: "light2", //"light1", "dark1", "dark2"
                    title: {
                        text: "Standardization Platform"
                    },
                    axisY: {
                        interval: 10,
                        suffix: "%"
                    },
                    toolTip: {
                        shared: true
                    },
                    data: [{
                            type: "stackedBar100",
                            toolTipContent: "{label}<br><b>{name}:</b> {y} (#percent%)",
                            showInLegend: true,
                            name: "SBN",
                            dataPoints: [
                                {y: 8, label: "Equipment"},
                                {y: 2, label: "Hardware"},
                                {y: 3, label: "DAQ"},
                                {y: 4, label: "Power Supply"},
                                {y: 0, label: "Design"},
                                {y: 0, label: "Process"},
                                {y: 0, label: "Electrical Test"}
                            ]
                        },
                        {
                            type: "stackedBar100",
                            toolTipContent: "<b>{name}:</b> {y} (#percent%)",
                            showInLegend: true,
                            name: "CEBU",
                            dataPoints: [
                                {y: 92, label: "Equipment"},
                                {y: 0, label: "Hardware"},
                                {y: 0, label: "DAQ"},
                                {y: 0, label: "Power Supply"},
                                {y: 0, label: "Design"},
                                {y: 0, label: "Process"},
                                {y: 0, label: "Electrical Test"}
                            ]
                        },
                        {
                            type: "stackedBar100",
                            toolTipContent: "<b>{name}:</b> {y} (#percent%)",
                            showInLegend: true,
                            name: "OSPI",
                            dataPoints: [
                                {y: 63, label: "Equipment"},
                                {y: 0, label: "Hardware"},
                                {y: 0, label: "DAQ"},
                                {y: 0, label: "Power Supply"},
                                {y: 0, label: "Design"},
                                {y: 0, label: "Process"},
                                {y: 0, label: "Electrical Test"}
                            ]
                        },
                        {
                            type: "stackedBar100",
                            toolTipContent: "<b>{name}:</b> {y} (#percent%)",
                            showInLegend: true,
                            name: "SUZHOU",
                            dataPoints: [
                                {y: 22, label: "Equipment"},
                                {y: 0, label: "Hardware"},
                                {y: 0, label: "DAQ"},
                                {y: 0, label: "Power Supply"},
                                {y: 0, label: "Design"},
                                {y: 0, label: "Process"},
                                {y: 0, label: "Electrical Test"}
                            ]
                        },
                        {
                            type: "stackedBar100",
                            toolTipContent: "<b>{name}:</b> {y} (#percent%)",
                            showInLegend: true,
                            name: "OSV",
                            dataPoints: [
                                {y: 1, label: "Equipment"},
                                {y: 0, label: "Hardware"},
                                {y: 0, label: "DAQ"},
                                {y: 0, label: "Power Supply"},
                                {y: 0, label: "Design"},
                                {y: 0, label: "Process"},
                                {y: 0, label: "Electrical Test"}
                            ]
                        }]
                });
                chartStack05.render();
                /* BAR STACK VERTICAL END */

                $("#tabs").tabs({
                    create: function (event, ui) {
                        //Render Charts after tabs have been created.
//                        $("#chartContainer1").CanvasJSChart(options1);
//                        $("#chartContainer2").CanvasJSChart(options2);
                        $("#chartContainer3").CanvasJSChart(chartStack);
                        $("#chartContainer4").CanvasJSChart(chart02);
                        $("#chartContainer5").CanvasJSChart(chartStack05);
                    },
                    activate: function (event, ui) {
                        //Updates the chart to its container size if it has changed.
                        ui.newPanel.children().first().CanvasJSChart().render();
                    }
                });

            }
        </script>
    </head>
    <body>
        <div id="tabs" style="height: 850px">
            <ul>
<!--                <li ><a href="#tabs01" style="font-size: 12px">Spline</a></li>
                <li ><a href="#tabs02"  style="font-size: 12px">Spline Area</a></li>-->
                <li ><a href="#tabs03"  style="font-size: 12px">Sample Mew</a></li>
                <li ><a href="#tabs04"  style="font-size: 12px">Horizontal</a></li>
                <li ><a href="#tabs05"  style="font-size: 12px">Bar Stack</a></li>
            </ul>
<!--            <div id="tabs01" style="height: 850px">
                <div id="chartContainer1" style="height: 800px; width: 100%;"></div>
            </div>
            <div id="tabs02" style="height: 850px">
                <div id="chartContainer2" style="height: 800px; width: 100%;"></div>
            </div>-->
            <div id="tabs03" style="height: 850px">
                <div id="chartContainer3" style="height: 800px; width: 100%;"></div>
            </div>
            <div id="tabs04" style="height: 850px">
                <div id="chartContainer4" style="height: 800px; width: 100%;"></div>
            </div>
            <div id="tabs05" style="height: 850px">
                <div id="chartContainer5" style="height: 800px; width: 100%;"></div>
            </div>
        </div>
        <script type="text/javascript" src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="https://canvasjs.com/assets/script/jquery-ui.1.11.2.min.js"></script>
        <script type="text/javascript" src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
        <script type="text/javascript" src="https://cdn.canvasjs.com/jquery.canvasjs.min.js"></script>
    </body>
</html>