<?php

$getal1 = 30;
$getal2 = 40;

function optellen($getal1, $getal2)
{
    $som = $getal1 + $getal2;
    $output = $getal1 . " + " . $getal2 . " = " . $som . "<br>";
    return $output;
}
echo optellen($getal1, $getal2);