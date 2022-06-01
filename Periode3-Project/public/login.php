<?php
require_once('header.php');


$user = null;

if (isset($_POST["login"])) {
    echo "$user";

    $user = getUser($_POST['email'], $_POST['password']);
    if ($user != null && $user != "No user Found") {
        $_SESSION['userID'] = $user['gebruikersID'];
        $_SESSION['userMAIL'] = $user['email'];
        $_SESSION['userTEL'] = $user['telefoonnummer'];
        $_SESSION['userPASS'] = $user['wachtwoord'];

        header("Refresh:0");
        header("location: index.php");
    } else {
        ?>
        <script>
            $(document).ready(function () {
                alert("Email of Wachtwoord onjuist")
            })
        </script>
        <?php
    }

}

?>
<div class="logincontainer">
    <div class="logincontainerbox">
        <div class="row register-form">
            <div class="col-md-8 offset-md-2">
                <form class="custom-form" action="#" method="post">
                    <h1>Inloggen</h1>
                    <div class="row form-group">
                        <div class="col-sm-4 label-column"><label class="col-form-label"
                                                                  for="email-input-field">Email </label></div>
                        <div class="col-sm-6 input-column"><input required name="email" class="form-control"
                                                                  type="email"></div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-4 label-column"><label class="col-form-label" for="pawssword-input-field">Wachtwoord</label>
                        </div>
                        <div class="col-sm-6 input-column"><input required name="password" class="form-control"
                                                                  type="password"></div>
                    </div>
                    <div class="form-check"></div>
                    <button class="btn btn-light submit-button" name="login" type="submit">Inloggen</button>
                </form>
            </div>
        </div>
    </div>
</div>