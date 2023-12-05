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
                var charts = [];
                var axisX = {
                    labelFormatter: function () {
                        return "";
                    },
                    tickLength: 0,
                    lineThickness: 0
                },
                axisY = {
                    labelFormatter: function () {
                        return "";
                    },
                    tickLength: 0,
                    gridThickness: 0
                };

                var psOptions = {
                    animationEnabled: true,
                    theme: "light2",
                    title: {
                        text: "Power Supply",
                        fontSize: 18,
                        verticalAlign: "bottom"
                    },
                    axisX: axisX,
                    axisY: axisY,
                    data: [{    
//                            type: "splineArea", //change type to bar, line, area, pie, etc
                            type: "line", //change type to bar, line, area, pie, etc
                            markerSize: 0,
                            dataPoints: [
                                {label: "SBN", y: 3},
                                {label: "CEBU", y: 0},
                                {label: "OSPI", y: 0},
                                {label: "SUZHOU", y: 4},
                                {label: "OSV", y: 0}
                            ]
                        }]
                };
                var daqOptions = {
                    animationEnabled: true,
                    theme: "light3",
                    title: {
                        text: "DAQ",
                        fontSize: 18,
                        verticalAlign: "bottom"
                    },
                    axisX: axisX,
                    axisY: axisY,
                    data: [{
                            type: "area", //change type to bar, line, area, pie, etc, splineArea
                            markerSize: 0,
                            yValueFormatString: "#.##%",
                            dataPoints: [
                                {label: "SBN", y: 3},
                                {label: "CEBU", y: 0},
                                {label: "OSPI", y: 0},
                                {label: "SUZHOU", y: 0},
                                {label: "OSV", y: 0}
                            ]
                        }]
                };
                var hwOptions = {
                    animationEnabled: true,
                    theme: "light4",
                    title: {
                        text: "Hardware",
                        fontSize: 18,
                        verticalAlign: "bottom"
                    },
                    axisX: axisX,
                    axisY: axisY,
                    data: [{
                            type: "column", //change type to bar, line, area, pie, etc
                            markerSize: 0,
                            dataPoints: [
                                {label: "SBN", y: 2},
                                {label: "CEBU", y: 0},
                                {label: "OSPI", y: 0},
                                {label: "SUZHOU", y: 0},
                                {label: "OSV", y: 0}
                            ]
                        }]
                };
                var eqOptions = {
                    animationEnabled: true,
                    theme: "light2",
                    title: {
                        text: "Equipment",
                        fontSize: 18,
                        verticalAlign: "bottom"
                    },
                    axisX: axisX,
                    axisY: axisY,
                    data: [{
                            type: "bar", //change type to bar, line, area, pie, etc
                            markerSize: 0,
                            dataPoints: [
                                {label: "SBN", y: 41},
                                {label: "CEBU", y: 92},
                                {label: "OSPI", y: 56},
                                {label: "SUZHOU", y: 22},
                                {label: "OSV", y: 1}
                            ]
                        }]
                };

                var totalOptions = {
                    animationEnabled: true,
                    theme: "light1", // "light1", "light2", "dark1", "dark2"
                    title: {
                        text: "Standardization Platform"
                    },
                    axisY: {
                        labelFormatter: addSymbols
                    },
                    data: [{
                            type: "column", //change type to bar, line, area, pie, etc
                            color: "#6D78AD",
                            dataPoints: [
                                {label: "SBN", y: 49},
                                {label: "CEBU", y: 92},
                                {label: "OSPI", y: 56},
                                {label: "SUZHOU", y: 26},
                                {label: "OSV", y: 1}
                            ]
                        }]
                };

                charts.push(new CanvasJS.Chart("chartContainer1", totalOptions));
                charts.push(new CanvasJS.Chart("chartContainer2", eqOptions));
                charts.push(new CanvasJS.Chart("chartContainer3", hwOptions));
                charts.push(new CanvasJS.Chart("chartContainer4", daqOptions));
                charts.push(new CanvasJS.Chart("chartContainer5", psOptions));
                syncTooltip(charts);

                for (var i = 0; i < charts.length; i++) {
                    charts[i].render();
                }

                function syncTooltip(charts) {

                    if (!this.onToolTipUpdated) {
                        this.onToolTipUpdated = function (e) {
                            for (var j = 0; j < charts.length; j++) {
                                if (charts[j] != e.chart)
                                    charts[j].toolTip.showAtX(e.entries[0].xValue);
                            }
                        }
                    }

                    if (!this.onToolTipHidden) {
                        this.onToolTipHidden = function (e) {
                            for (var j = 0; j < charts.length; j++) {
                                if (charts[j] != e.chart)
                                    charts[j].toolTip.hide();
                            }
                        }
                    }

                    for (var i = 0; i < charts.length; i++) {
                        if (!charts[i].options.toolTip)
                            charts[i].options.toolTip = {};

                        charts[i].options.toolTip.updated = this.onToolTipUpdated;
                        charts[i].options.toolTip.hidden = this.onToolTipHidden;
                    }
                }

                function addSymbols(e) {
                    var suffixes = ["", "K", "M", "B"];

                    var order = Math.max(Math.floor(Math.log(Math.abs(e.value)) / Math.log(1000)), 0);
                    if (order > suffixes.length - 1)
                        order = suffixes.length - 1;

                    var suffix = suffixes[order];
                    return CanvasJS.formatNumber(e.value / Math.pow(1000, order)) + suffix;
                }
            }
        </script>
        <style>
            .row:after {
                content: "";
                display: table;
                clear: both;
            }
            .col {
                float: left;
                width: 25%;
                height: 100px;
            }
        </style>
    </head>
    <body>
        <div id="chartContainer1" style="height: 370px; width: 100%;"></div>
        <div class="row">
            <div class="col" id="chartContainer2"></div>
            <div class="col" id="chartContainer3"></div>
            <div class="col" id="chartContainer4"></div>
            <div class="col" id="chartContainer5"></div>
        </div>
        <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
    </body>
</html>