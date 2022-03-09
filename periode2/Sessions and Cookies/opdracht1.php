<?php
session_start();
$_SESSION['views'] = $_SESSION['views'] + 1;
echo "Het aantal keer bekeken: " . $_SESSION['views'];
