<?php
$favkleur = "groen";
$result = match($favkleur){
    "groen" => "Jouw favoriete kleur is groen",
    "blauw" => "Jouw favoriete kleur is blauw",
    "rood" => "Jouw favoriete kleur is rood",
    "geel" => "Jouw favoriete kleur is geel",
    default => "Je hebt geen favoriete kleur",
};
echo $result;