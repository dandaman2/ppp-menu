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
    <link rel="stylesheet" href="menuformat.css" type="text/css">

</head>
<body>
    <div class ="leftbanner">
        <img src="bgsmoke.jpg" height = "100%"/>
    </div>
    <div class = "mainBody">
        <h1 align = "center">Welcome to RipAFat.Cloud!!</h1>
        <h2 align = "center"> You've just been jebaited into taking a fat rip!</h2>
        <h3>What is RipAFat.Cloud?</h3>
        <p>RipAFat.Cloud is currently an iterative development platform meant for educating the masses about
            the greatest plant on God's greenest planet: that dank kush!</p>
        <p>Now you may be saying "But I already know that marijuana is Satan's spinach. The Devil's Lettuce!"
            While this statement may not be wrong, perhaps we can rip a fat cloud in your mind, and delve into the
            reasoning behind it's widepsread, and increasingly casual use. </p>
        <div><p class="pformat"><?php include('strinfo.txt'); ?></p></div>
        <div>
            <img src="compchart.jpg" width = "100%"/>
            <p align="center"><small><i>https://www.crescolabs.com/wp-content/uploads/2016/02/indica-and-sativa-1024x983.jpg </i></small></p>
        </div>

        <h3>But what makes marijuana do these things?</h3>
        <div <p class = "pformat"><?php include('cheminfo.txt'); ?></p></div>
        <div>
            <img src="WM_BrainImg.png.jpg" width = "100%"/>
        </div>
    

    </div>
    <div class ="rightbanner">
        <img src="bgsmoke.jpg" height = "100%"/>
    </div>

<div id="bbCont" style="height: 200px; width: 100%;"></div>
</body>
</html>