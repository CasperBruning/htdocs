<?php

// Cookie PHP
setcookie("username", "Merlijn Teunissen");

if(isset($_COOKIE["username"]))
{
    echo "Hallo " . $_COOKIE["username"];
} else{
    echo "Welcome Guest!";
}

echo "<br>";
echo "<br>";
//---------------------------------------------------------------------------------------
// Function
function myFunction()
{
    echo "Hello world!";
}

myFunction();

echo "<br>";
echo "<br>";
//---------------------------------------------------------------------------------------
// Foreach-loop Door array
$days = array();

sort($days);

$days[0] = "Maandag";
$days[1] = "Dinsdag";
$days[2] = "Woensdag";
$days[3] = "Donderdag";
$days[4] = "Vrijdag";
$days[5] = "Zaterdag";
$days[6] = "Zondag";

$teller = 0;

foreach($days as $day)
{
    $teller++;
    echo "$teller $day <br>";
}
//---------------------------------------------------------------------------------------
//PHP Post
?>

<html>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Name: <input type="text" name="fname">
    <input type="submit">
</form>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_POST['fname'];
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
}
?>


<?php
//---------------------------------------------------------------------------------------

//PHP Get
if( $_GET["name"] || $_GET["age"] ) {
    echo "Welcome ". $_GET['name']. "<br />";
    echo "You are ". $_GET['age']. " years old.";

    exit();
}
?>

<html>
<body>

<form action = "#" method = "GET">
    Name: <input type = "text" name = "name" />
    Age: <input type = "text" name = "age" />
    <input type = "submit" />
</form>

</body>
</html>