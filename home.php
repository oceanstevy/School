<main>
<?php
    if($_SERVER['SERVER_NAME'] == "foxi.ltam.lu"){
        $serverName = "https://foxi.ltam.lu/1TPIF2/thesa152/WEBAP";
    }elseif($_SERVER['SERVER_NAME'] == "89.58.47.144"){
        $serverName = "http://89.58.47.144/1TPIF2/WEBAP/API_Collection";
    }
?>
        <h2>Teams</h2>
        <h3><?php echo $serverName?>/F1/teams</h3>
    <div id="box">
        <p>"id": 0</p>
        <p>"name": "Mercedes"</p>
        <p>"constructor": "Mercedes-AMG Petronas Formula One Team"</p><br>
        <p>"id": 1</p>
        <p>"name": "Red Bull Racing"</p>
        <p>"constructor": "Red Bull Racing Honda"</p>
    </div>

        <h2>Drivers</h2>
        <h3><?php echo $serverName?>/F1/drivers</h3>
    <div id="box">
        <p>"id": 1</p>
        <p>"name": "Lewis Hamilton"</p>
        <p>"teamId": 1</p><br>
        <p>"id": 2</p>
        <p>"name": "Max Verstappen"</p>
        <p>"teamId": 2</p>
    </div>

        <h2>Races</h2>
        <h3><?php echo $serverName?>/F1/races</h3>
    <div id="box">
        <p>"id": 1</p>
        <p>"name": "Australian Grand Prix"</p>
        <p>"location": "Melbourne Grand Prix Circuit, Melbourne, Australia"</p><br>
        <p>"id": 2</p>
        <p>"name": "Bahrain Grand Prix"</p>
        <p>"location": "Bahrain International Circuit, Sakhir, Bahrain"</p>
    </div>

        <h2>Seasons</h2>
        <h3><?php echo $serverName?>/F1/seasons</h3>
    <div id="box">
        <p>"id": 1</p>
        <p>"year": 2021</p><br>
        <p>"id": 2</p>
        <p>"year": 2022</p>
    </div>

</main>
