<?php

if (isset($_POST['send'])) {
    $cijfer = $_POST['cijfer'];
    if ($cijfer >= 6) {
        echo "Je hebt een voldoende gehaald";
    } else {
        echo "Je hebt een onvoldoende gehaald";
    }
}