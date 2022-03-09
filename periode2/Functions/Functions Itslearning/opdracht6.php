<?php
$aantalKeerDobbelen = 10;

function rollDice($aantalKeerDobbelen)
{
    $output = "";

    for ($i = 1; $i <= $aantalKeerDobbelen; $i++) {
        $output = $output . "Dobbelsteen " . $i . ": " . rand(1, 6) . "<br>";
    }
    return $output;
}

echo rollDice($aantalKeerDobbelen);
