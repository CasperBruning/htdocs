<?php


echo "<br>"; echo "patroon 1. <hr>";
echo "<table>";
for ($i=1; $i < 8; $i++) {
    echo "<tr>";
    for ($a=7; $a < $i; $a--) {
        echo "<td>"."</td>";

    }

    for ($a = $i; $a > 1 ; $a--) {
        echo "<td>" . $a-1 . "</td>";

    }
    echo "</tr>";
}
echo "</table>";



echo "<br>"; echo "patroon 2. <hr>";
echo "<table>";
for ($i=1; $i < 8; $i++) {
    echo "<tr>";
    for ($b= 0; $b > $i; $b++) {
        echo "<td></td>";

    }
    for ($a = $i; $a < 7 ; $a++) {
        echo "<td>" . $a . "</td>";

    }
    echo "</tr>";
}
echo "</table>";

echo "<br>";




echo "<br>"; echo "patroon 3. <hr>";
echo "<table>";
for ($i=1; $i < 8; $i++) {
    echo "<tr>";
    for ($a=7; $a > $i; $a--) {
        echo "<td>"."</td>";

    }

    for ($a = $i; $a > 1 ; $a--) {
        echo "<td>" . $a-1 . "</td>";

    }
    echo "</tr>";
}
echo "</table>";

echo "<br>";


echo "<br>"; echo "patroon 4. <hr>";
echo "<table>";
for ($i=1; $i < 8; $i++) {
    echo "<tr>";
    for ($b= 0; $b < $i; $b++) {
        echo "<td></td>";

    }
    for ($a = $i; $a < 7 ; $a++) {
        echo "<td>" . $a . "</td>";

    }
    echo "</tr>";
}
echo "</table>";

echo "<br>";