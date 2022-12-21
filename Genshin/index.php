<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Genshin</title>
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
<div class="bg">

<?php

echo $_SERVER['SERVER_NAME'];
if($_SERVER['SERVER_NAME'] == "foxi.ltam.lu"){
    $serverName = "https://foxi.ltam.lu/www/1TPIF2/kozda362/public/Genshin";
}else if($_SERVER['SERVER_NAME'] == "89.58.47.144"){
    $serverName = "http://89.58.47.144/1TPIF2/WEBAP/API_Collection";
}
?>
    <img id="logo" src="https://upload.wikimedia.org/wikipedia/en/5/5d/Genshin_Impact_logo.svg">
    <div class="textbg">
<h1>Characters</h1>
<p><?php echo $serverName ?> </p>
<h1> Locations</h1>
<p> <?php echo $serverName ?></p>
<h1> Archonts</h1>
<p><?php echo $serverName ?></p>
<?php
include_once 'script.php';

?>
    </div>
</div>
</body>

</html>



