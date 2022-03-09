<?php require 'header.php';
require '../src/userFunctions.php';?>
<?php

//check user registration
$newUser = null;
if (isset($_POST['firstName'], $_POST['lastName'],$_POST['email'], $_POST['password'])){
    $newUser = registerUser($_POST['firstName'], $_POST['lastName'],$_POST['email'], $_POST['password']);
}

?>
<div class="page registreren">
        <div class="container">
            <h1>Registreren</h1>
            <?php if ($newUser === 1){?>
            <p>Nieuwe gebruiker succesvol toegevoegd!</p>
            <?php }else{ ?>
            <div class="inputRow">
            <form action="#" method="post">
                <table>
                    <tr>
                        <td><label for="firstName">Voornaam</label></td>
                        <td><input type="text" name="firstName" ></td>
                    </tr>
                    <tr>
                        <td><label for="lastName">Achternaam</label></td>
                        <td><input type="text" name="lastName" required></td>
                    </tr>
                    <tr>
                        <td><label for="email">Email</label></td>
                        <td><input type="email" name="email" required></td>
                    </tr>
                    <tr>
                        <td><label for="password">Wachtwoord</label></td>
                        <td><input type="password" name="password" required></td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="register" value="Registreer"></td>
                    </tr>
                </table>
            </form>
                <?php } ?>
            </div>
        </div>
    </div>

<?php require 'footer.php';?>