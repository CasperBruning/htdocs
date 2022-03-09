<?php
if (isset($_POST['send'])){
    $getal1 = $_POST['getal1'];
    $getal2 = $_POST['getal2'];
    $operator = $_POST['operator'];
    if ($operator == 1){
        echo $getal1 . " + " . $getal2 . " = " . $getal1 + $getal2;
    }
    if ($operator == 2){
        echo $getal1 . " - " . $getal2 . " = " . $getal1 - $getal2;
    }
    if ($operator == 3){
        echo $getal1 . " x " . $getal2 . " = " . $getal1 * $getal2;
    }
    if ($operator == 4){
        echo $getal1 . " / " . $getal2 . " = " . $getal1 / $getal2;
    }

}