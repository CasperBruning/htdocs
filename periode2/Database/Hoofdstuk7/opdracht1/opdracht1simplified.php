<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$bedrag = $btwHoogte = "";
$uitkomst = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bedrag = test_input($_POST["bedrag"]);
    $btwHoogte = test_input($_POST["BTW%"]);

    if ($btwHoogte == "Laag") {
        $uitkomst = "Bedrag inclusief 9% BTW: €"  .   $bedrag / 100 * 109;
    } else {
        $uitkomst = "Bedrag inclusief 21% BTW: €" .   $bedrag / 100 * 121;
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
    Bedrag exclusief BTW <input type="number" value = " <?php echo $bedrag ?> " name = "bedrag"><br>
    <input type="radio" name = "BTW%" <?php if (isset($btwHoogte) && $btwHoogte =="Laag") echo "checked"; ?> value = "Laag">
    <label for="Laag">Laag, 9%</label> <br>
    <input type="radio" name = "BTW%" <?php if (isset($btwHoogte) && $btwHoogte =="Hoog") echo "checked"; ?> value = "Hoog">
    <label for="Hoog">Hoog, 21%</label> <br> <br>
    <input type="Submit" name = "Submit" value = "Uitrekenen">


</form>

<?php

echo "<br>" . "<br>";
echo $uitkomst



?>
</body>
</html>