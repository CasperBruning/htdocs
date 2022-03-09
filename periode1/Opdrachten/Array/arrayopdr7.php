<?php

$uitslag = array("120", "999", "1056");
     echo "De eerste waarde: " . $uitslag[0] . "<br>";
     echo "De tweede waarde: " . $uitslag[1] . "<br>";
     echo "De derde waarde: " . $uitslag[2] . "<br>";

echo "<hr>";

rsort($uitslag);    
    echo "De eerste waarde: " . $uitslag[0] . "<br>";
    echo "De tweede waarde: " . $uitslag[1] . "<br>";
    echo "De derde waarde: " . $uitslag[2] . "<br>";

echo "<hr>";

array_push($uitslag, 75);
    echo "De eerste waarde: " . $uitslag[0] . "<br>";
    echo "De tweede waarde: " . $uitslag[1] . "<br>";
    echo "De derde waarde: " . $uitslag[2] . "<br>";
    echo "De vierde waarde: " . $uitslag[3] . "<br>";