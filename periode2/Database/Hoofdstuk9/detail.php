<?php
//database connectie
$servername = "localhost";
$username="root";
$password="";
$dbname="fietsenmaker";

// create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//check connection
if($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}
echo "Connected succesfully" . "<br>";

//query
$result = $conn->query("Select * FROM fietsen WHERE id = " . $_GET['id']);

//resultaat weergeven
if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "Artikelnummer: " . $row["id"] . "<br>";
        echo "Merk: " . $row["merk"] . "<br>";
        echo "Type: " . $row["type"] . "<br>";
        echo "Prijs: €" . number_format($row["prijs"], 2,",",".") . "<br>";
        echo "<br>" ."<a href='opdracht2.php'> terug naar hoofdpagina </a>";
    }
}



//connectie sluiten
$conn->close();