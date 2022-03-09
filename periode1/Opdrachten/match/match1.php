<?php
$favkleur = "groen";
$resultaat = match($favkleur){
    "groen" => "jouw favoriete kleur is groen",
    "blauw" => "jouw favoriete kleur is blauw",
    "rood" => "jouw favoriete kleur is blauw",
    "geel" => "jouw favoriete kleur is geel",
};
echo $resultaat;