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
            background-blend-mode: screen;
            background: linear-gradient(to right, #e6ffe6, #b3e0ff);
            min-width: 1000px;
        }
        #Info{
            color: dimgrey;
            font-weight: bolder;
            font-family: Monocraft;
            margin: 5% 20% 5% 20%;
            padding: 10% 5% 10% 5%;
            text-align: center;
            backdrop-filter: sepia(35%);
            border-radius: 25px;

        }
    </style>
</head>
<body>
<div id="Info">
    <h1>
        Space Engineers Ship stats
    </h1>
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
?>

</div>
</body>
</html>

