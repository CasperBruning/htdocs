<?php
function machten (){
    $outputString = "";
    for ($getal = 1; $getal <= 25; $getal++)
    {
        $machtVanGetal = $getal * $getal * $getal;
        $outputString = $outputString . $getal . " x " . $getal . " x " . $getal . " = " . $machtVanGetal . "<br>";
    }
    return $outputString;
}
echo machten();