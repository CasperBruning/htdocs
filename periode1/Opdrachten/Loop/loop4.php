<?php

echo "<table border='1'>";
echo "<tr>";
echo "<td> <b>Miles</b></td>";
echo "<td><b>Kilometers</b> </td>";

echo "</tr>";
for ($getal = 1; $getal <= 20; $getal++) {

    $kilometer = $getal * 1.609;

    echo "<tr>";
    echo "<td>$getal</td>";
    echo "<td>$kilometer</td>";

    echo "</tr>";
}
echo "</table>";
