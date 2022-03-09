<?php
$oudPrijs = 20;
$nieuwPrijs= 25;
$resultaat = procentBerekenen($oudPrijs, $nieuwPrijs);
echo $resultaat;




function procentBerekenen($oudPrijs, $nieuwPrijs){
    $berekening = (($oudPrijs - $nieuwPrijs) / $oudPrijs) / 100;
    $berekening.round($berekening,0);
    $resultaat = "Korting is: " . $berekening . "%";

    echo "Korting is" . procentBerekenen(25, 20);
    return $resultaat;
}

