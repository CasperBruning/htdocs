<?php require 'header.php' ?>
<a href="index.php"><img class="returnimg" src="img/return..png"></a>

<div class="row register-form">
    <div class="col-md-8 offset-md-2">
        <form class="custom-form">
            <h1>Inloggen</h1>
            <div class="row form-group">
                <div class="col-sm-4 label-column"><label class="col-form-label" for="email-input-field">Email </label></div>
                <div class="col-sm-6 input-column"><input class="form-control" type="email"></div>
            </div>
            <div class="row form-group">
                <div class="col-sm-4 label-column"><label class="col-form-label" for="pawssword-input-field">Wachtwoord</label></div>
                <div class="col-sm-6 input-column"><input class="form-control" type="password"></div>
            </div>
            <div class="form-check"></div><button class="btn btn-light submit-button" type="button">Inloggen</button>
        </form>
    </div>
</div>

<?php require 'footer.php'?>
