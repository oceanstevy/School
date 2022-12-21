<?php
include '../Include_Functions/Functions.php';

$dbc = f_db_Connect(false);
$query = "SELECT idCharacter, dtName
          FROM tblCharacter;";

$result = f_db_queryWithResultSet($dbc,$query);

    $Characters = [];
// Schleife geht durch jeden Character durch
    for ($i=0;$i<mysqli_num_rows($result);$i++){

        //Neues Character suchen
        $row = mysqli_fetch_assoc($result);

        // Starter Waffe Suchen
        // Query erstellen für die Waffen suche
        $query = "SELECT  tblCharacter.dtName , tblCharacterStartItem.dtCount ,tblItem.dtName AS ItemName
                  FROM tblCharacter
                   LEFT JOIN tblCharacterStartItem ON tblCharacterStartItem.fiCharacter = tblCharacter.idCharacter
                   LEFT JOIN tblItem ON fiItem = tblItem.idName
                  WHERE idCharacter = ".$row['idCharacter'];
        $resultWeapon = f_db_queryWithResultSet($dbc,$query);
        $StarterWeapon = [];

        // Schauen ob ich ein Resultat bekamm
        if (mysqli_num_rows($resultWeapon) > 0){
            for ($j=0;$j<mysqli_num_rows($resultWeapon);$j++){
                $rowWeapon = mysqli_fetch_assoc($resultWeapon);

                // Schauen ob ich das Resultat nicht NULL oder Leer ist
                if (!empty($rowWeapon['ItemName'])){
                    $StarterWeapon = [$rowWeapon['ItemName'] => $rowWeapon['dtCount']];
                }
            }
        }


        // Starter Stats Suchen
        // Query erstellen für die Stats zusuche
        $query = "SELECT  tblCharacter.dtName , tblCharacterStartStats.dtCount, tblStats.dtName AS StatsName
                  FROM tblCharacter
                      LEFT JOIN tblCharacterStartStats ON tblCharacterStartStats.fiCharacter = tblCharacter.idCharacter
                      LEFT JOIN tblStats ON fiStats = tblStats.idName
                  WHERE idCharacter = ".$row['idCharacter'];
        $resultStats = f_db_queryWithResultSet($dbc,$query);
        $StarterStats = [];

        // Schauen ob ich ein Resultat bekamm
        if (mysqli_num_rows($resultStats) > 0){
            for ($j=0;$j<mysqli_num_rows($resultStats);$j++){
                $rowStats = mysqli_fetch_assoc($resultStats);

                // Schauen ob ich das Resultat nicht NULL oder Leer ist
                if (!empty($rowStats['StatsName'])){
                    $StarterStats = [$rowStats['StatsName'] => $rowStats['dtCount']];
                }
            }
        }



        // Erstellt den ein Neuen eintrag vom neuen Character
        $Characters[$row['idCharacter']] = ['Name' => $row['dtName'],
                                            'Starter Waffe' => $StarterWeapon,
                                            'Stats' => $StarterStats];












    }

mysqli_close($dbc);

echo '<pre>';
print_r($Characters);
echo  '</pre>';

?>