<?php
function f_db_Connect($debuggingIsTurnedOn){
    require_once 'Credentials.php';

    // Connect to dbserver and dbwsers
    $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PW, DB_NAME);

    if (mysqli_connect_errno()) {
        die('Connection Error ' . mysqli_connect_errno() .' : ' . mysqli_connect_error());
    } else {
        if ($debuggingIsTurnedOn) echo 'Connected to db : ' . DB_NAME;
    }

    // Set charset
    mysqli_set_charset($dbc, 'utf8');

    //return the mysqli object
    return $dbc;
}

function f_db_queryWithResultSet($dbc,$query) {

    $result = mysqli_query($dbc, $query);

    if (mysqli_errno($dbc)) {
        echo 'Error ' . mysqli_errno($dbc) . 'Error : ' . mysqli_error($dbc);
    }
    return $result;
}

function f_db_queryWithoutResultSet($dbc,$query) {

    mysqli_query($dbc, $query);

    if (mysqli_errno($dbc)) {
        echo 'Error ' . mysqli_errno($dbc) . 'Error : ' . mysqli_error($dbc);
    }
}
?>