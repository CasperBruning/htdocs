<?php
require '../src/databaseFunctions.php';

function registerUser($name, $email, $password){
    $kwerrie = "INSERT INTO users (name, email, password) 
                                    VALUES ('$name', '$email', '$password') ";
    db_insertData($kwerrie);

}

function getUser($email, $password){
    $user = db_getData('SELECT email, password FROM users');
    if ( $user->num_rows > 0){
        // User found, return data
        return $user;
    } else {
        return "No user Found";
    }
}