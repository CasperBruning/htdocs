<?php
if( isset($_POST['send'])){
$number1 = $_POST ['number1'];
$number2 = $_POST ['number2'];
$operator = $_POST ['operator'];
$simpleoperator = "";


    if($operator == "+"){
        $som = $number1 + $number2;
        $simpleoperator .= "+";
    } elseif ($operator == "*"){
        $som = $number1 * $number2;
        $simpleoperator .= "x";
    } elseif($operator == "-") {
        $som = $number1 - $number2;
        $simpleoperator .= "-";
    }


echo $number1 . " " . $simpleoperator . " " . $number2  . " = " . $som;
}
