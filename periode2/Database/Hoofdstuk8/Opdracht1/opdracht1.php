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
$result = $conn->query("SELECT * FROM fietsen");

//resultaat weergeven

if ($result->num_rows > 0) {
    echo "<table class='table' border='1'>";
    while ($row = $result->fetch_assoc()){
//        print_r($row);
//        echo "<br>";
        echo "<tr>";
        echo "<td>" . "Merk: " . $row["merk"];
        echo "<td>" . "Type: " . $row["type"];
        echo "<td>" . "Prijs: € "  . number_format($row["prijs"], 2,",",".");
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo"0 Resultaten";
}


//connectie sluiten
$conn->close();

?>
<style>
    .table{
        border-collapse: collapse;
        border: 1px solid black;
    }
    td{
        border: 1px solid black;
        width: 250px;
    }
</style>
