<?php
function db_connect(){
    $mysqli = "new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);";
    return $mysqli;
}

function db_getData($query){
    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
    $result = $mysqli -> query($query);
    $mysqli->close();
    return $result;
}

function db_insertData($query){
    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
    $result = "";
    if ($mysqli->query($query) === TRUE){
        // Return row id for succes
        $result = $mysqli->insert_id;
    } else {
        $result = "Error: " . $query . "<br>" . $mysqli->error;
    }
    $mysqli->close();
    return $result;
}