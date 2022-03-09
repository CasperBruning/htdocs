<?php
require '../src/databaseFunctions.php';

function registerUser($name, $email, $password){
    $kwerrie = "INSERT INTO users (name, email, password) 
                                    VALUES ('$name', '$email', '$password') ";
    db_insertData($kwerrie);

}

function getUser($email, $password){
    $user = db_getData("SELECT * FROM users WHERE email= '$email' AND password= '$password' ");
    if ( $user->num_rows > 0){
        // User found, return data
        return $user;
    } else {
        return "No user Found";
    }
}