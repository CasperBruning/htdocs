<?php

    if(isset($_POST['submit'])){

        //DB VARIABELES
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "dataIntoDatabaseOpdracht";

        //DB CONNECTION
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        //DATA FOR DB
        $naam = $_POST['name'];
        $mail = $_POST['email'];
        $msg = $_POST['message'];

        //DATA INTO DB
        $sql = "INSERT INTO contactForm (Naam, email, message)
        VALUES ('$naam', '$mail', '$msg')";
        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        //CONN CLOSE
        mysqli_close($conn);

    }