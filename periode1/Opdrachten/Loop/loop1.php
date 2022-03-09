<?php
$getal = 0;
$getal2 = 12;
echo "Waarde van de variable \$getal is: " . $getal2 . "<br>";
echo "Optelling is als volgt:" . "<br>";

$somTekst = "";
$somUitkomst = 0;

while($getal <= 12){

    $somTekst .= "+" . $getal;
    $somUitkomst = $somUitkomst + $getal;

    $getal++;
}

echo $somTekst . " = ". $somUitkomst;