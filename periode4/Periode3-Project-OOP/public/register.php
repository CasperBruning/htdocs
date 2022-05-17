<?php
require_once ('header.php');

$newuser = null;

if (isset($_POST['register'])){

    if ($_POST['password'] === $_POST['repeatPassword']){

        $newuser = registerUser($_POST['naam'], $_POST['telefoon'], $_POST['email'], $_POST['password']);

    } else {
        ?>
            <script>
                $(document).ready(function(){
                    alert("wachtwoord onjuist")
                })
            </script>
        <?php
    }
}


?>

<footer class="bg-light footer">
    <div class="row register-form">
        <div class="col-md-8 offset-md-2">
            <form class="custom-form" action="#" method="post">
                <h1>Registreren</h1>
                <div class="row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Naam</label></div>
                    <div class="col-sm-6 input-column"><input required name="naam" class="form-control margin" type="text"></div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Telefoonnummer</label></div>
                    <div class="col-sm-6 input-column"><input required name="telefoon" class="form-control margin" type="text"></div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="email-input-field">Email </label></div>
                    <div class="col-sm-6 input-column"><input required name="email" class="form-control margin" type="email"></div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="pawssword-input-field">Wachtwoord</label></div>
                    <div class="col-sm-6 input-column"><input required name="password" class="form-control margin" type="password"></div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="repeat-pawssword-input-field">Herhaal Wachtwoord</label></div>
                    <div class="col-sm-6 input-column"><input required name="repeatPassword" class="form-control margin" type="password"></div>
                </div>
                <input class="btn btn-light submit-button" name="register" type="submit" value="Registreren">
            </form>
        </div>
    </div>
