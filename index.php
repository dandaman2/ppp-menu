<?php

$dataPoints = array(
    array("label"=> "Indica", "y"=> 8),
    array("label"=> "Sativa", "y"=> 8),
    array("label"=> "50-50 Hybrid", "y"=> 2)
);

?>
<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" href="menuformat.css">
    <script>
        window.onload = function () {

            var chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                exportEnabled: true,
                title:{
                    text: "Overall Strain Ratios"
                },
                subtitles: [{
                    text: "Informatyion is Cumulative, and independent of current stock"
                }],
                data: [{
                    type: "pie",
                    showInLegend: "true",
                    legendText: "{label}",
                    indexLabelFontSize: 16,
                    indexLabel: "{label} - #percent%",
                    yValueFormatString: "#,##0",
                    dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
                }]
            });
            chart.render();

        }

    </script>
</head>
<body>
    <div class ="leftbanner">
        <img src="bgsmoke.jpg"/>
    </div>
    <div class = chartCont">
        <h2 align = "center"> You've just been jebaited into taking a fat rip!</h2>
        <div id="chartContainer" style="height: 370px; width: 100%;"></div>
    </div>
    <div class ="rightbanner">
        <img src="bgsmoke.jpg"/>
    </div>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>


<div id="bbCont" style="height: 200px; width: 100%;"></div>
</body>
</html>