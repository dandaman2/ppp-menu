<?php

$dataPoints = array(
    array("label"=> "Food + Drinks", "y"=> 590),
    array("label"=> "Activities and Entertainments", "y"=> 261),
    array("label"=> "Health and Fitness", "y"=> 158),
    array("label"=> "Shopping & Misc", "y"=> 72),
    array("label"=> "Transportation", "y"=> 191),
    array("label"=> "Rent", "y"=> 573),
    array("label"=> "Travel Insurance", "y"=> 126)
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
                    text: "Average Expense Per Day  in Thai Baht"
                },
                subtitles: [{
                    text: "Currency Used: Thai Baht (฿)"
                }],
                data: [{
                    type: "pie",
                    showInLegend: "true",
                    legendText: "{label}",
                    indexLabelFontSize: 16,
                    indexLabel: "{label} - #percent%",
                    yValueFormatString: "฿#,##0",
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