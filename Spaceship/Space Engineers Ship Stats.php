<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Space Engineers Ship stats</title>
</head>
<body>
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
    }else
    echo $_SERVER['SERVER_NAME'];
    //Test image from steam
    echo '<img src="https://steamuserimages-a.akamaihd.net/ugc/1783966736434772570/9DC9EAE4E950CA7616ED51E4C4E7F2E1921EDAB1/?imw=1024&imh=576&ima=fit&impolicy=Letterbox&imcolor=%23000000&letterbox=true" alt="img">';
?>

</body>
</html>

