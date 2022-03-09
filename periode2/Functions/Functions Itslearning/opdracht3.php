<?php

$temperatuur = 30;


function warmte($temperatuur)
{
    $output = "";
    if ($temperatuur >= 28) {
        $output = "Pak de koelbox maar, we gaan naar het strand";
    } else {
        $output = "Laten we maar gaan scrabbelen";
    }
    return $output;
}

echo warmte($temperatuur);