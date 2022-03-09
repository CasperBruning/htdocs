<?php

session_start();


if (isset($_SESSION['reload'])) {
    $_SESSION['reload'] = $_SESSION['reload'] + 1;
    echo "Deze pagina heeft u al: " . $_SESSION['reload'] . " keer bekeken" . '<br>'
        . "voordat u de browser heeft afgesloten" . '<br>';
} else {
    $_SESSION['reload'] = 1;
}


if (isset($_COOKIE['reload'])) {
    setcookie("reload", ($_COOKIE['reload'] + 1), time() + 3600);
    echo "in totaal heb je de site al " . $_COOKIE['reload'] . " keer bekeken";
} else {
    setcookie("reload", 1, time() + 3600);
}

