<?php
$tijd = date("G");
if ($tijd >= 18 && $tijd <= 24) {
    echo "Avond (18u tot 24u)";
}elseif ($tijd >= 12 && $tijd < 18){
    echo "Middag (12u tot 18u)";
}elseif ($tijd >= 6 && $tijd < 12){
    echo "Ochtend (6u tot 12u)";
}elseif ($tijd >= 0 && $tijd <6){
    echo ("Nacht (24u tot 6u");

}

$result = match ((int)$tijd){
      18  => "Avond (18u tot 24u)",


};



