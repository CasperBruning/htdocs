<?php

$getal = 1;
$somUitkomst = 1;

while ($getal <= 5) {

    $somUitkomst = $getal * $somUitkomst;

    $getal++;
}
echo "De faciliteit van " . $getal - 1 . " is " . $somUitkomst;