<?php
//setcookie('views',1+$_COOKIE['views'],time()+0);
//$views = $_COOKIE['views'] +1;
//print "Deze pagina heb je in totaal al ".$views." keer bekeken";


session_start();

if (!isset($_SESSION['views'])) {
    $_SESSION['views'] = 0;

}

if(isset($_SESSION['reload'])){
    $_SESSION['views'] = $_SESSION['views'] + 1;
    echo "Aantal keer bekeken in deze sessie: " . $_SESSION['views'] . "<br>";
} else {
    $_SESSION['reload'] = 1;


}
if (!isset($_COOKIE['visitcount'])) {
    $_COOKIE['visitcount'] = 0;
}
setcookie('visitcount', 1 + $_COOKIE['visitcount'], time() + 999999);
$visitcount = $_COOKIE['visitcount'];
print "Totaal keer bekeken: " . $visitcount;