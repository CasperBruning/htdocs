<?php
$cijfer = mt_rand(0,30);
if($cijfer <= 10){
    echo "Getal " . $cijfer . "<br>";
    echo "Het getal ligt tussen de 0 en de 10";
}elseif($cijfer <= 20){
    echo "Getal " . $cijfer . "<br>";
    echo "Het getal ligt tussen de 10 en de 20";
}elseif($cijfer <= 30){
    echo "Getal " . $cijfer . "<br>";
    echo "Het getal ligt tussen de 20 en de 30";
}