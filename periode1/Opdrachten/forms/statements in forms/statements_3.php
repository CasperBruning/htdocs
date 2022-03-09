<?php
if (isset($_POST['send'])) {
    $geslacht = $_POST['geslacht'];

    if ($geslacht == "man") {
        echo "Je gaat naar een voetbalwedstrijd";
    } elseif ($geslacht == "vrouw") {
        echo "Je gaat een dagje shoppen";
    }
}