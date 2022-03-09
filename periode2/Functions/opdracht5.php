<?php

function snelheidBerkenen($remvertraging, $remweg){
    $snelheid = sqrt(2 * $remvertraging * $remweg * 3.6);
    return $snelheid;
}


$remvertraging = 5.5; // a
$remweg = 50; // s
echo "Snelheid van een auto met remspoor van " . $remweg . " meter is: ";
echo snelheidBerkenen($remvertraging, $remweg);
echo "km/h";
