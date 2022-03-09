<?php require 'header.php';
require '../config/database.php';
require '../src/userFunctions.php';


$newUser = null;
if (isset($_POST['firstName'], $_POST['email'], $_POST['password'], $_POST)){
    if ($_POST['password'] == $_POST["repeatPassword"]){
        $newUser = registerUser($_POST['firstName'], $_POST['email'], $_POST['password']);
    } else {
        echo "VUL ALSTUBLIEFT HETZELFDE WACHTWOORD IN";
    }
}

?>
<a href="index.php"><img class="returnimg" src="img/return..png"></a>

<footer class="bg-light footer">
    <div class="row register-form">
        <div class="col-md-8 offset-md-2">
            <form class="custom-form">
                <h1>Registreren</h1>
                <div class="row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Naam</label></div>
                    <div class="col-sm-6 input-column"><input name="name" class="form-control" type="text"></div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="email-input-field">Email </label></div>
                    <div class="col-sm-6 input-column"><input name="email" class="form-control" type="email"></div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="pawssword-input-field">Wachtwoord</label></div>
                    <div class="col-sm-6 input-column"><input name="password" class="form-control" type="password"></div>
                </div>
                <div class="row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="repeat-pawssword-input-field">Herhaal Wachtwoord</label></div>
                    <div class="col-sm-6 input-column"><input name="repeatPassword" class="form-control" type="password"></div>
                </div>
                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-1"><label class="form-check-label" for="formCheck-1">Ik heb de<a href="#"></a>&nbsp;voorwaarde gelezen en accepteer deze</label></div>
                <input class="btn btn-light submit-button" type="submit" value="Registreren">
            </form>
        </div>
    </div>

<?php require 'footer.php'?>