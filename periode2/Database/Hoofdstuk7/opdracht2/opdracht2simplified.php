<body>

<?php

$getal1 = "";
$getal2 = "";
$status = "";
$berekening = "";
$text = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $getal1 = test_input($_POST["getal1"]);
    $getal2 = test_input($_POST["getal2"]);
    $status = test_input($_POST["status"]);

    if ($status == "optellen") {
        $berekening =  $getal1 + $getal2;
        $text = $getal1 . " + " . $getal2 . " = " . $berekening;
    } elseif ($status == "aftrekken") {
        $berekening =  $x`xgetal1 - $getal2;
        $text = $getal1 . " - " . $getal2 . " = " . $berekening;
    } elseif ($status == "vermenigvuldigen") {
        $berekening =  $getal1 * $getal2;
        $text = $getal1 . " x " . $getal2 . " = " . $berekening;
    } else {
        $berekening =  $getal1 / $getal2;
        $text = $getal1 . " : " . $getal2 . " = " . $berekening;
    }


}
function test_input($data) {
    $date = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<form method = "POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Getal 1 <input type="number" name="getal1" value=" <?php echo $getal1 ?> "> <br>
    <input type="Radio" name="status" <?php if (isset($status) && $status =="optellen") echo "checked"; ?> value="optellen">Optellen
    <input type="Radio" name="status" <?php if (isset($status) && $status =="aftrekken") echo "checked"; ?> value="aftrekken">Aftrekken
    <input type="Radio" name="status" <?php if (isset($status) && $status =="vermenigvuldigen") echo "checked"; ?> value="vermenigvuldigen"> Vermenigvuldigen
    <input type="Radio" name="status" <?php if (isset($status) && $status =="delen") echo "checked"; ?> value="delen"> Delen <br>
    Getal 2 <input type="number" name="getal2" value=" <?php echo $getal2 ?> "> <br> <br>
    <input type="Submit" name="Submit" value = "Berekenen">


</form>

<?php
echo "<br>" . "<br>";
echo $text;

?>

</body>