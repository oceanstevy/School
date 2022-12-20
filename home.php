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
        <p>"id": 0</p>
        <p>"name": "Mercedes"</p>
        <p>"constructor": "Mercedes-AMG Petronas Formula One Team"</p><br>
        <p>"id": 1</p>
        <p>"name": "Red Bull Racing"</p>
        <p>"constructor": "Red Bull Racing Honda"</p>

        <h2>Drivers</h2>
        <h3><?php echo $serverName?>/F1/drivers</h3>
        <p>"id": 1</p>
        <p>"name": "Lewis Hamilton"</p>
        <p>"teamId": 1</p><br>
        <p>"id": 2</p>
        <p>"name": "Max Verstappen"</p>
        <p>"teamId": 2</p>

        <h2>Races</h2>
        <h3><?php echo $serverName?>/F1/races</h3>
        <p>"id": 1</p>
        <p>"name": "Australian Grand Prix"</p>
        <p>"location": "Melbourne Grand Prix Circuit, Melbourne, Australia"</p>
        <p>"id": 2</p>
        <p>"name": "Bahrain Grand Prix"</p>
        <p>"location": "Bahrain International Circuit, Sakhir, Bahrain"</p>
        <h2>Seasons</h2>
        <h3><?php echo $serverName?>/F1/seasons</h3>
        <p>"id": 1</p>
        <p>"year": 1950</p>
        <p>"id": 2</p>
        <p>"year": 1951</p>
        <h2></h2>
        <h3><?php echo $serverName?>/F1/seasons/{seasonId}/standings</h3>
        <p>"teamId": 1</p>
        <p>"points": 739</p>
        <p>"teamId": 2 </p>
        <p>"points": 634</p>
        <h3><?php echo $serverName?>/F1/races/{raceId}/results</h3>
        <p>"driverId": 1</p>
        <p>"teamId": 1</p>
        <p>"position": 1</p>
        <p>"driverId": 2</p>
        <p>"teamId": 2</p>
        <p>"position": 2</p>
    </div>
</main>
