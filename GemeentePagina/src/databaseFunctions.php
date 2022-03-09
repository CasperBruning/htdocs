<?php
require "../config/database.php";
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
    if (mysqli_query($mysqli, $query)){
    } else {
        $result = "Error: " . $query . "<br>" . $mysqli->error;
        echo "cum";
    }
    $mysqli->close();
    echo $result;
}