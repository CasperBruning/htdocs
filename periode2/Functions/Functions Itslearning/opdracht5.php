<?php

$weekdagen = ["maandag", "dinsdag", "woensdag", "donderdag", "vrijdag", "zaterdag", "zondag"];

function printDagen($weekdagen)
{
    $output = "";
    foreach ($weekdagen as $index) {
        $output = $output . "Dag: " . $index . "<br>";
    }
    return $output;
}

echo printDagen($weekdagen);