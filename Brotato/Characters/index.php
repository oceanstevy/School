<?php
include '../Include_Functions/Functions.php';

$dbc = f_db_Connect(false);
$query = "SELECT idCharacter, dtName
          FROM tblCharacter;";

$result = f_db_queryWithResultSet($dbc,$query);

    for ($i=0;$i<mysqli_num_rows($result);$i++){
        $row = mysqli_fetch_assoc($result);
        $Output[$row['idCharacter']] = $row['dtName'];
    }
mysqli_close($dbc);

    var_dump($Output);

?>