<?php
 $timeOfDay = date("G");
if($timeOfDay >= 0){
    echo "Nacht (24u tot 6u)";
}elseif ($timeOfDay >= 6){
    echo "Ochtend (6u tot 12u)";
}elseif ($timeOfDay >= 12){
     echo "Middag (12u tot 18u)";
}elseif($timeOfDay >=18){
    echo "Avond (18u tot 24u";
}
