<?php
$price = 100;
if ($price <= 55){
    $endPrice11 = $price * 1.11;
    echo "Oude prijs: " . $price . " Euro" . ". Na verhoging van 11% is de prijs: " . $endPrice11 . " Euro";
}elseif ($price <= 149){
    $endPrice16 = $price * 1.16;
    echo "Oude prijs: " . $price . " Euro" . ". Na verhoging van 16% is de prijs: " . $endPrice16 . " Euro";
}elseif ($price >= 150){
    $endPrice19 = $price * 1.19;
    echo "Oude prijs: " . $price . " Euro" . ". Na verhoging van 19% is de prijs: " . $endPrice19 . " Euro";
};