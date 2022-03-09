<?php
echo "<table border='1'";
for ($row=1; $row <= 3000; $row++) {
echo "<tr> \n";
    for ($col=1; $col <= 25; $col++) {
        $p = $col * $row;
        echo "<td>celinhoud</td> \n";
    }
    echo "</tr>";
}
echo "</table>";
