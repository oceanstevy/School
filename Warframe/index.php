<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="index.css" rel="stylesheet">
    <title>Warframe API</title>
</head>
<body>
    <h1 class="title">Warframe API</h1>
    <h2 class="title">Here you can find all the Warframe data in one place.</h2>
<br>
<form method="post">
    <div class="middleDiv">
        <label id="linkLabel" for="link">index.php/</label>
        <input id="link" type="text" name="link">
        <button onclick="myFunction()">Copy text</button>

        <input id="submit" type="submit" name="submit">
    </div>
</form>

<br>

<?php
    if (isset($_POST['submit'])) {
        $item = $_POST['link'];
        echo "<h3 class='title'>Resources for $item</h3>";
    }
?>

    <script>
        function myFunction() {

            var copyText = document.getElementById("link");

            copyText.select();

            var link = "Warframe/index.php/";
            navigator.clipboard.writeText(link + copyText.value);

        }
    </script>

<div>

</div>

</body>
</html>