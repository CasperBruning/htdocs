<?php
if (isset($_POST['send'])) {
    $geslacht = $_POST['geslacht'];
    if ($geslacht === "man" || $geslacht === "Man") {
        echo "Je gaat naar een voetbalwedstrijd";
    } else {
        echo "Je gaat een dagje shoppen";
    }
}