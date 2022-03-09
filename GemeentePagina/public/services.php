<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Brand</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic">
    <link rel="stylesheet" href="fonts/font-awesome.min.css">
    <link rel="stylesheet" href="css/Login-Form-Clean.css">
    <link rel="stylesheet" href="css/Pretty-Registration-Form.css">
    <link rel="stylesheet" href="css/untitled-1.css">
    <link rel="stylesheet" href="css/untitled.css">
    <link rel="stylesheet" href="css/afsprakenFormulier.css">
    <script src="js/Jquery/jquery-3.6.0.min.js"></script>
    <script src="js/services.js"></script>
</head>
<nav class="navbar navbar-light navbar-expand bg-light navigation-clean">
    <div class="container"><a class="navbar-brand" href="index.php" style="font-size: 31px;">Nieuwe-Ijsselstreek</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"></button>
        <div class="collapse navbar-collapse" id="navcol-1">
            <div class="btn-group" role="group" style="margin-left: 600px;"><button class="btn btn-primary" type="button"><a href="register.php" style="color: #ffffff;text-decoration: none;">Registreer</a></button><button class="btn btn-primary" type="button" style="margin-left: 10px;"><a href="login.php" style="color: rgb(255,255,255);text-decoration: none;">Log in</a></button></div>
        </div>
    </div>
</nav>

<div class="container">
    <div class="page-header hidden-print">
        <a id="header-logo" class="hide-text" title="home" href="/"></a>
        <div class="pull-right hidden">
        </div>
        <h1>Afspraak maken en aanvragen</h1>
        <small class="productListing">&nbsp;</small>
    </div>
    <h2>Product (stap 1/5)</h2>
    <div>
        <form method="post" id="appointment-step1" accept-charset="UTF-8" class="form-horizontal" role="form">
            <input type="hidden" name="authenticityToken" value="9bd233477cb4791c91e19af36484ed3ac68787ef"/>

            <div class="form-group hidden hidden ">
                <label for="theme" class="col-sm-4 control-label">Kies een thema</label>

                <div class="col-sm-8 col-md-6">

                    <select name="theme" size="1" class="form-control" id="theme" >
                        <option id="themeOptions" value="1" selected="selected" >Paspoort en ID-kaart</option>
                        <option class="themeOptions1" value="2" selected="selected" >Vergunningen</option>
                        <option class="themeOptions1" value="3" selected="selected" >Afval</option>
                        <option class="themeOptions1" value="4" selected="selected" >Belastingen</option>
                        <option class="themeOptions1" value="5" selected="selected" >Sociaal Domein</option>
                        <option class="themeOptions1" value="6" selected="selected" >Trouwen</option>
                    </select>
                </div>
            </div>

            <div class="form-group ">
                <label for="service" class="col-sm-4 control-label">Voor welk product wilt u een afspraak maken?</label>

                <div class="col-sm-8 col-md-6">
                    <select name="service" size="1" class="form-control" id="service">
                        <option value="1" data-customer="5" selected="selected">Maak een keuze</option>
                        <option class="serviceOption1" value="2" data-customer="5" selected="selected">Diefstal of vermissing Paspoort / ID-kaart</option>
                        <option class="serviceOption1" value="3" data-customer="5" selected="selected">Paspoort aanvragen</option>
                        <option class="serviceOption1" value="4" data-customer="5" selected="selected">ID-kaart aanvragen</option>
                        <option class="serviceOption1" value="5" data-customer="5" selected="selected">Reizen met kinderen</option>
                        <option class="serviceOption1" value="6" data-customer="5" selected="selected">Tweede paspoort</option>
                        <option class="serviceOption1" value="7" data-customer="5" selected="selected">Diefstal of vermissing rijbewijs</option>
                    </select>

                </div>
            </div>

            <div id="customerSelect" class="hidden">
                <div class="form-group">
                    <div class="col-sm-offset-4 col-sm-10">Als u het product meer dan 1 keer wilt aanvragen, kunt u dat hieronder aangeven.</div>
                </div>
                <div class="form-group ">
                    <label for="numberOfCustomers" class="col-sm-4 control-label">Aantal</label>

                    <div class="col-sm-2">

                        <select name="numberOfCustomers" size="1" class="form-control" >
                            <option value="1"  >1
                            </option>
                            <option value="2"  >2
                            </option>
                            <option value="3"  >3
                            </option>
                            <option value="4"  >4
                            </option>
                            <option value="5"  >5
                            </option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-4 col-sm-8">

                    <button id="addService" class="btn btn-success hidden"><i
                            class="glyphicon glyphicon-ok"></i> Bevestigen
                    </button>
                </div>
            </div>
            <input type="hidden" id="service-action" name="action" value="0" aria-hidden="true">

            <div class="form-group">
                <div class="col-sm-offset-4 col-sm-8">
                    <div class="col-sm-2 btn-pad">
                        &nbsp;
                    </div>
                    <div class="col-sm-2 btn-pad">
                        <button name="service.action" class="btn btn-primary btn-block" type="submit">Volgende</button>
                    </div>
                    <div class="col-sm-2 btn-pad">
                        <a href="/cancel" class="btn btn-default btn-block" id="cancelBtn">Stoppen</a>
                    </div>
                </div>
            </div>

        </form
</div>

