<?php
if(isset($_POST['send'])) {
    $bedrag = $_POST['bedrag'];
    $aantalBTW = $_POST['aantalBTW'];
    $bedraginclusiefBTW = 0;


    if ($aantalBTW == 9){
        $bedraginclusiefBTW += $bedrag * 1.09;
        echo "Bedrag inclusief " . $aantalBTW .  "% BTW: €" . number_format($bedraginclusiefBTW, 2,",",".");
    } elseif ($aantalBTW == 21) {
        $bedraginclusiefBTW += $bedrag * 1.21;
        echo "Bedrag inclusief " . $aantalBTW .  "% BTW: €" . number_format($bedraginclusiefBTW, 2,",",".");
    }










} else {
    $invoer = "";
    echo "mislukt probeer opnieuw";
}
