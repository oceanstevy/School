<!DOCTYPE html>
<html lang="en" dir="ltr">
<div id="wrapper">
    <head>
        <meta charset="utf-8">
        <title>Index der F1 Api Seite</title>
        <link rel="stylesheet" href="F1Api.css">
    </head>
    <body>
    <?php
    $page = "";
    if(isset($_GET['page'])){
        $page = $_GET['page'];
    }
    include_once ("navigation.php");
    if($page == "home") {
        include_once("home.php");
    }elseif ($page == "api"){
        include_once("api.php");
    }
    ?>
    </body>
    <footer>

    </footer>
</div>
</html>
