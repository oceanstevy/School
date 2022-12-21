<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Space Engineers Ship stats</title>
    <style>
        body{
            margin-left: 10%;
            margin-right: 10%;
            background-image: url("https://cdn5.idcgames.com/storage/image/1282/game_home_bg_section_2/default.jpg");
            min-width: 1000px;
        }
        #Info{
            background: rgba(200,200,200,0.8);
            color: dimgray;
            font-weight: bolder;
            font-family: Monocraft;
            margin: 5% 20% 5% 20%;
            padding: 10% 5% 10% 5%;
            text-align: center;
            border-radius: 25px;


        }
        h1{
            color: floralwhite;
            font-weight: bolder;
            font-family: Monocraft;
            text-align: center;
        }
        #Logo{
            position: absolute;
            float: left;
            margin-left: -10%;
        }
    </style>
</head>
<body>
<img src="https://images.launchbox-app.com/13a7eff1-c242-4efd-94fa-107af8be0a2e.png" alt="SE Logo" id="Logo">
    <h1>
        Space Engineers Ship stats
    </h1>
<div id="Info">
    <p>
        <h2>To get a Ships stats use following URL:</h2>

<?php
    if ($_SERVER['SERVER_NAME'] == "foxi.ltam.lu" ){
        echo"
            https://foxi.ltam.lu/1TPIF2/gromi088/public/WEBAP1/Stats/{Name}
            </p><br>
        ";
    }elseif ($_SERVER['SERVER_NAME'] == "http://89.58.47.144"){
        echo"
            https://89.58.47.144/1TPIF2/WEBAP/API_Collection/Spaceship/Stats/{Name}
            </p><br>
        ";
    }else {
        echo $_SERVER['SERVER_NAME'];
        //Test image from steam
        echo "Server Error";
    }
?>     <p> This API is meant to display ship stats like the weight or armaments.
        <br> Have fun engineering
       </p>
</div>
</body>
</html>

