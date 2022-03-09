<?php
if (isset($_POST['send'])) {
    echo "<table border='1'";
    $rij = $_POST['row'];
    $kolommen = $_POST['col'];
    for ($row = 1; $row <= $rij; $row++) {
        echo "<tr> \n";

        for ($col = 1; $col <= $kolommen; $col++) {
            $p = $col * $row;
            echo "<td>celinhoud</td> \n";
        }

        echo "</tr>";
    }

    echo "</table>";
}