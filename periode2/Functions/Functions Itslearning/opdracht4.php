<?php

$lengte = 10;
$breedte = 20;
$hoogte = 10;

function inhoudBerekenen ($lengte, $breedte, $hoogte){
    $inhoud = $lengte * $breedte * $hoogte;
    $output = "De inhoud is van mijn kubus is: " . $inhoud;
    return $output;
}
echo inhoudBerekenen($lengte, $breedte ,$hoogte);
