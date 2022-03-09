<?php
$timeOfDay = date("G");
$result = match($timeOfDay){
    "0" => "Nacht (24u tot 6u)",
    "6" => "Ochtend (6u tot 12u",
    "12" => "Middag (12u tot 18u)",
    "18" => "Avond (18u tot 24u)",
};
echo $result;
