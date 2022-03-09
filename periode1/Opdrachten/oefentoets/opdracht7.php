<?php
$spaargeld = 90;
$currentPrice= 1000;
$negatifDifference = $currentPrice - $spaargeld;
$postiveDifference = $spaargeld - $currentPrice;
if($negatifDifference > 250){
    echo "Je spaargeld is nu: " . $spaargeld . " euro, je komt dus ". $negatifDifference . " euro te kort! je kan beter nog even een baantje zoeken.";
}elseif ($negatifDifference <= 0){
    echo "Je spaargeld is nu: " . $spaargeld . " euro, hiermee is het mogelijk om de iPhone te kopen! je hebt nog " . $postiveDifference . " euro over voor bijvoorbeeld een hoesje. ";
}elseif ($negatifDifference < 250) {
    echo "Je spaargeld is nu: " . $spaargeld . " euro, je komt dus ". $negatifDifference . " euro te kort! je bent er bijna.";
}