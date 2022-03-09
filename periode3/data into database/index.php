<?php
if (isset($_POST['name'], $_POST['email'], $_POST['message']))
    echo "De volgende aanvraag is verzonden:" . "<br>".
        "Naam: " . $_POST['name'] . "<br>" .
        "Email: " . $_POST['email'] . "<br>".
        "Bericht: " . $_POST['message'] . "<br>";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post" action="functions.php">
<table>
    <tr>
        <td>    <label for="name">Naam</label></td>
    </tr>
    <tr>
        <td>    <input type="text" name="name"></td>
    </tr>
    <tr>
        <td>    <label for="email">Email</label></td>
    </tr>
    <tr>
        <td>    <input type="email" name="email"></td>
    </tr>
    <tr>
        <td>    <label for="message">Bericht</label></td>
    </tr>
    <tr>
        <td>    <input name="message" type="text"></td>
    </tr>
    <tr>
        <td> <input type="submit" name="submit" value="Verzenden"></td>
    </tr>
</table>
</form>
</body>
</html>
