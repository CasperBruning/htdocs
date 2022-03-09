<?php
if (isset($_POST['send'])) {
    $zoekArray = [4, 6, "appels", 8, "peren", 21, "volvo", 87];
    $text = $_POST['text'];
    
    if (in_array($text, $zoekArray)) {
        echo "waar";
    } else {
        echo "Niet waar";
    }
    
}