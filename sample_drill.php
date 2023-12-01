<?php
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
?>

<!DOCTYPE HTML>
<html>
    <head>
        <script>
            window.onload = function () {

                var totalVisitors = 200;
                var visitorsData = {
                    "Standardization Platform": [{
                            click: visitorsChartDrilldownHandler,
                            cursor: "pointer",
                            explodeOnClick: false,
                            innerRadius: "75%",
                            legendMarkerType: "square",
                            name: "New vs Returning Visitors",
                            radius: "100%",
                            showInLegend: true,
                            startAngle: 90,
                            type: "doughnut",
                            dataPoints: [
                                {y: 186, name: "Equipment", color: "#3366ff"},
                                {y: 2, name: "Hardware", color: "#E7823A"},
                                {y: 3, name: "DAQ", color: "#66ff99"},
                                {y: 8, name: "Returning Visitors", color: "#b366ff"}
                            ]
                        }],
                    "Equipment": [{
                            color: "#E7823A",
                            name: "Equipment",
                            type: "column",
                            dataPoints: [
                                {x: new Date("Jan 2015"), y: 8},
                                {x: new Date("Feb 2015"), y: 92},
                                {x: new Date("Mar 2015"), y: 63},
                                {x: new Date("Apr 2015"), y: 22},
                                {x: new Date("May 2015"), y: 1}
                            ]
                        }],
                    "Hardware": [{
                            color: "#E7823A",
                            name: "Hardware",
                            type: "column",
                            dataPoints: [
                                {x: new Date("Jan 2015"), y: 2},
                                {x: new Date("Feb 2015"), y: 0},
                                {x: new Date("Mar 2015"), y: 0},
                                {x: new Date("Apr 2015"), y: 0},
                                {x: new Date("May 2015"), y: 0}
                            ]
                        }],
                    "DAQ": [{
                            color: "#E7823A",
                            name: "DAQ",
                            type: "column",
                            dataPoints: [
                                {x: new Date("Jan 2015"), y: 3},
                                {x: new Date("Feb 2015"), y: 0},
                                {x: new Date("Mar 2015"), y: 0},
                                {x: new Date("Apr 2015"), y: 0},
                                {x: new Date("May 2015"), y: 0}
                            ]
                        }],
                    "Returning Visitors": [{
                            color: "#546BC1",
                            name: "Returning Visitors",
                            type: "column",
                            dataPoints: [
                                {x: new Date("Jan 2015"), y: 4},
                                {x: new Date("Feb 2015"), y: 0},
                                {x: new Date("Mar 2015"), y: 0},
                                {x: new Date("Apr 2015"), y: 3},
                                {x: new Date("May 2015"), y: 0}
                            ]
                        }]
                };

                var newVSReturningVisitorsOptions = {
                    animationEnabled: true,
                    theme: "light2",
                    title: {
                        text: "New VS Returning Visitors"
                    },
                    subtitles: [{
                            text: "Click on Any Segment to Drilldown",
                            backgroundColor: "#2eacd1",
                            fontSize: 16,
                            fontColor: "white",
                            padding: 5
                        }],
                    legend: {
                        fontFamily: "calibri",
                        fontSize: 14,
                        itemTextFormatter: function (e) {
                            return e.dataPoint.name + ": " + Math.round(e.dataPoint.y / totalVisitors * 100) + "%";
                        }
                    },
                    data: []
                };

                var visitorsDrilldownedChartOptions = {
                    animationEnabled: true,
                    theme: "light2",
                    axisX: {
                        labelFontColor: "#717171",
                        lineColor: "#a2a2a2",
                        tickColor: "#a2a2a2"
                    },
                    axisY: {
                        gridThickness: 0,
                        includeZero: false,
                        labelFontColor: "#717171",
                        lineColor: "#a2a2a2",
                        tickColor: "#a2a2a2",
                        lineThickness: 1
                    },
                    data: []
                };

                var chart = new CanvasJS.Chart("chartContainer", newVSReturningVisitorsOptions);
                chart.options.data = visitorsData["Standardization Platform"];
                chart.render();

                function visitorsChartDrilldownHandler(e) {
                    chart = new CanvasJS.Chart("chartContainer", visitorsDrilldownedChartOptions);
                    chart.options.data = visitorsData[e.dataPoint.name];
                    chart.options.title = {text: e.dataPoint.name}
                    chart.render();
                    $("#backButton").toggleClass("invisible");
                }

                $("#backButton").click(function () {
                    $(this).toggleClass("invisible");
                    chart = new CanvasJS.Chart("chartContainer", newVSReturningVisitorsOptions);
                    chart.options.data = visitorsData["Standardization Platform"];
                    chart.render();
                });

            }
        </script>
        <style>
            #backButton {
                border-radius: 4px;
                padding: 8px;
                border: none;
                font-size: 16px;
                background-color: #2eacd1;
                color: white;
                position: absolute;
                top: 10px;
                right: 10px;
                cursor: pointer;
            }
            .invisible {
                display: none;
            }
        </style>
    </head>
    <body>
        <div id="chartContainer" style="height: 370px; width: 100%;"></div>
        <button class="btn invisible" id="backButton">< Back</button>
        <script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
        <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
    </body>
</html>