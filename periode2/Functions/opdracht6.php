<?php
function wisselkoersBerkenen($dollar, $waardeeuro){
    $som = $dollar / $waardeeuro;
    return $som;
}

//1 euro is 1,15 dollar
$dollar= 1;
$waardeeuro = 0.87;
echo "$" . "$dollar" . " is gelijk aan €" ;
echo wisselkoersBerkenen($dollar, $waardeeuro);