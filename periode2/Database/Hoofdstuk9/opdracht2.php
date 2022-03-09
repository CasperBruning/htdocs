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
//echo "Connected succesfully" . "<br>";

//query
$result = $conn->query("SELECT * FROM fietsen");

//resultaat weergeven

if ($result->num_rows > 0) {
    echo "<table class='table' border='1'>";
    while ($row = $result->fetch_assoc()){
        echo "<a href='detail.php?id=" . $row['id'] . "'>";
        echo $row["merk"] . " " . $row["type"];
        echo "</a>";
        echo "<br>";
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
