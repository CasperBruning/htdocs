<?php
require_once ("databaseFunctions.php");

function registerUser($naam, $email, $tel, $password){
    $result = db_insertData("INSERT INTO gebruikers (naam, telefoonnummer,email, wachtwoord) 
                                    VALUES ('$naam', '$email', '$tel', '$password')");
    return $result;
}

function getUser($email, $password){
    $user = db_getData("SELECT * FROM gebruikers WHERE email = '$email' AND wachtwoord = '$password'");
//    print_r($user);
    if ( $user->num_rows > 0){
        // User found, return data
        return $user->fetch_assoc();
    } else {
        return "No user Found";
    }
}
