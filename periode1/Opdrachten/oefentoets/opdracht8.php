<?php
$leeftijd = 18;
$stempas = false;
if ($leeftijd < 16){
    echo "Je mag geen praktijkexamen voor je scooterrijbewijs doen" . "<br>";
}else{
    echo "Je mag praktijkexamen voor je scooterrijbewijs doen" . "<br>";
}
if ($leeftijd <18 && $stempas == false){
    echo "Je mag niet stemmen, want je bent niet oud genoeg";
}elseif($leeftijd >= 18 && $stempas ==false ){
    echo "Je mag niet stemmen, want je hebt geen stempas";
}elseif($leeftijd <18 && $stempas ==true){
    echo "Je mag niet stemmen, want je bent niet oud genoeg";
}else{
    echo "Je mag stemmen, want je bent oud genoeg en hebt een stempas";
}