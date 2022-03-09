<?php
if (isset($_POST['send'])) {
    $cijfer = $_POST['cijfer'];
    if ($cijfer <= 3) {
        echo "cijfer: " . $cijfer . "<br>";
        echo "je hebt een slecht gehaald";
    } elseif ($cijfer <= 5.5) {
        echo "cijfer: " . $cijfer . "<br>";
        echo "je hebt een onvoldoende gehaald";
    } elseif ($cijfer < 7.5) {
        echo "cijfer: " . $cijfer . "<br>";
        echo "je hebt een voldoende gehaald";
    } elseif ($cijfer >= 7.5) {
        echo "cijfer: " . $cijfer . "<br>";
        echo "je hebt een goed gehaald";
    }
}