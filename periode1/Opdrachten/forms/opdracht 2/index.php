<?php
if (isset($_POST['send'])){
    if ($_POST['leeftijd'] >= 18){
        $hypotheek = $_POST['salaris'] * 45;
        if($hypotheek >= $_POST['vraagprijs']){
            echo "Leeftijd: " . $_POST['leeftijd'] . ", " .  "Salaris: " . $_POST['salaris']. ", " . "Vraagprijs: " . $_POST['vraagprijs'] . " = " . "Gefeliciteerd je kan het het huis betalen:)";
        } elseif ($hypotheek < $_POST['vraagprijs']){
            $nodig = $_POST['vraagprijs'] - $hypotheek;
            echo "Leeftijd: " . $_POST['leeftijd'] . ", " .  "Salaris: " . $_POST['salaris']. ", " . "Vraagprijs: " . $_POST['vraagprijs'] . " = " . "Helaas je kan het nog niet betalen:(, je hebt nog " . $nodig . " euro eigen geld nodig.";
        }
    } else {
        echo "Leeftijd: " . $_POST['leeftijd'] . ", " .  "Salaris: " . $_POST['salaris']. ", " . "Vraagprijs: " . $_POST['vraagprijs'] . " = " . "Je bent nog te jong om een hypotheek af te sluiten, noob :P";
    }
}