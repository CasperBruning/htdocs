<?php

$eigenwaarde = rand(2,21);
$dealerwaarde = rand(2,21);
echo "De dealer heeft " . $dealerwaarde . " punten";
echo "<br>";
echo "Jij hebt " . $eigenwaarde . " punten";
echo "<br>";

if ($dealerwaarde < 17){
    $rand = rand(1,10);
    $dealerwaarde = $dealerwaarde + $rand;
    echo "De dealer heeft een nieuwe waarde van " . $dealerwaarde . " punten";
    echo "<br>";
}

if ($dealerwaarde == $eigenwaarde){
    echo "draw";

} elseif ($dealerwaarde <= $eigenwaarde){
    echo "win";
} elseif ($dealerwaarde >= $eigenwaarde){
    echo "lose";
} elseif ($dealerwaarde > 21){
    echo "win";
} elseif ($eigenwaarde == 21){
    echo "win";
}