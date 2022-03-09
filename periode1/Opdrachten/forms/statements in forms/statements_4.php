<?php
if (isset($_POST['send'])) {
    $geslacht = $_POST['geslacht'];

    if ($geslacht === "man" || $geslacht === "m") {
        echo "Je gaat naar een voetbalwedstrijd";
    } elseif ($geslacht === "vrouw" || $geslacht === "v") {
        echo "Je gaat een dagje shoppen";
    }
}