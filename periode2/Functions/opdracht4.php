<?php
function omtrekCirkel($straal){
        $som = 2 * (pi()) * $straal;
        return $som;
}
function oppervlakteCirkel($straal){
        $som = (pi()) * $straal * $straal;
        return $som;
}
$straal = 5;
echo "De omtrek van een cirkel met straal " . $straal .  " is: ";
echo omtrekCirkel($straal);
echo "<br>";
echo "De oppervlakte van een cirkel met straal " . $straal . " is: ";
echo  oppervlakteCirkel($straal);
