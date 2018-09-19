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
<div class = "ultRow">
    <h2 align = "center"> You've just been jebaited into taking a fat rip! Now enjoy the rest fo this shit</h2>
    <div align="center" class ="adsenseLeft">
        <a href="http://www.google.com">
            <img src="bgsmoke.jpg"
            />
        </a>
    </div>

    <div align="center" class ="adsenseRight">
        <a href="http://www.google.com">
            <img src="bgsmoke.jpg"
            />
        </a>
    </div>
    <div id="chartContainer" style="height: 370px; width: 100%;"></div>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</div>
<div id="bbCont" style="height: 200px; width: 100%;"></div>
</body>
</html>