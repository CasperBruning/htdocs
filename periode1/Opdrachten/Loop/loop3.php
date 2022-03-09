<?php
    echo "<table border='1'>";
    echo "<tr>";
    echo "<td> <b>Euro</b></td>";
    echo "<td><b>Amerikaanse Dollar</b> </td>";
    echo "<td><b>Britse Pond</b></td>";
    echo "<td><b>Japanse Yen</b></td>";
    echo "<td><b>Ant. Gulden</b></td>";
    echo "</tr>";
    for($getal = 1 ;$getal <= 10; $getal++ ) {

        $usDollar = $getal * 1.21934;
        $britishPound = $getal * 0.915551;
        $japaneseYen = $getal * 126.226;
        $antGulden = $getal * 2.18243;

        echo "<tr>";
            echo "<td>$getal</td>";
            echo "<td>$usDollar</td>";
            echo "<td>$britishPound</td>";
            echo "<td>$japaneseYen</td>";
            echo "<td>$antGulden</td>";
        echo "</tr>";
    }
echo "</table>";
