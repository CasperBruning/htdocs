<?php
require_once('header.php');

?>
    <div class="bestelContainer">
        <div class="besteldeproductenDiv">
            <h1>Bedankt voor je bestelling!</h1>
            <p>De factuur word per mail naar u verzonden. daar kunt u ook meteen betalen. Zodra er betaald is word het
                verzonden</p>

            <table class="besteldeproductenTable" border="border">

                <?php
                $caseID = db_getData("SELECT * FROM producten WHERE productID = '" . $_SESSION['case'] . "' ");
                $kabels = db_getData('SELECT * FROM producten  WHERE typecomponent = "kabels"');
                $case = $caseID->fetch_array();
                ?>
                <tr>
                    <td>Case</td>
                    <td> <?php echo $case['naam']; ?></td>
                    <td>€ <?php echo $case['prijs'] ?></td>
                </tr>
                <?php
                $cpuID = db_getData("SELECT * FROM producten WHERE productID = '" . $_SESSION['cpu'] . "' ");
                $kabels = db_getData('SELECT * FROM producten  WHERE typecomponent = "kabels"');
                $cpu = $cpuID->fetch_array();
                ?>
                <tr>
                    <td>CPU</td>
                    <td><?php echo $cpu['naam'] ?></td>
                    <td><?php echo " € " . $cpu['prijs'] ?></td>
                </tr>
                <?php
                $ramID = db_getData("SELECT * FROM producten WHERE productID = '" . $_SESSION['ram'] . "' ");
                $kabels = db_getData('SELECT * FROM producten  WHERE typecomponent = "kabels"');
                $ram = $ramID->fetch_array();
                ?>
                <tr>
                    <td>Werkgeheugen</td>
                    <td><?php echo $ram['naam'] ?></td>
                    <td><?php echo " € " . $ram['prijs'] ?></td>
                </tr>
                <?php
                $cpuKoelerID = db_getData("SELECT * FROM producten WHERE productID = '" . $_SESSION['cpucooler'] . "' ");
                $kabels = db_getData('SELECT * FROM producten  WHERE typecomponent = "kabels"');
                $cpuKoeler = $cpuKoelerID->fetch_array();
                ?>
                <tr>
                    <td>CPU Koeler</td>
                    <td><?php echo $cpuKoeler['naam'] ?></td>
                    <td><?php echo " € " . $cpuKoeler['prijs'] ?></td>
                </tr>
                <?php
                $moboID = db_getData("SELECT * FROM producten WHERE productID = '" . $_SESSION['mobo'] . "' ");
                $kabels = db_getData('SELECT * FROM producten  WHERE typecomponent = "kabels"');
                $mobo = $moboID->fetch_array();
                ?>
                <tr>
                    <td>Moederbord</td>
                    <td><?php echo $mobo['naam'] ?></td>
                    <td><?php echo " € " . $mobo['prijs'] ?></td>
                </tr>
                <?php
                $gpuID = db_getData("SELECT * FROM producten WHERE productID = '" . $_SESSION['gpu'] . "' ");
                $kabels = db_getData('SELECT * FROM producten  WHERE typecomponent = "kabels"');
                $gpu = $gpuID->fetch_array();
                ?>
                <tr>
                    <td>GPU</td>
                    <td><?php echo $gpu['naam'] ?></td>
                    <td><?php echo " € " . $gpu['prijs'] ?></td>
                </tr>
                <?php
                $fanID = db_getData("SELECT * FROM producten WHERE productID = '" . $_SESSION['fan'] . "' ");
                $kabels = db_getData('SELECT * FROM producten  WHERE typecomponent = "kabels"');
                $fan = $fanID->fetch_array();
                ?>
                <tr>
                    <td>Fan</td>
                    <td><?php echo $_SESSION['fanAmount'] . " x " . $fan['naam'] ?></td>
                    <td><?php
                        $totaLFanPrice = $_SESSION['fanAmount'] * $fan['prijs'];
                        echo " € " . $totaLFanPrice ?></td>
                </tr>
                <?php
                $opslagID = db_getData("SELECT * FROM producten WHERE productID = '" . $_SESSION['opslag'] . "' ");
                $kabels = db_getData('SELECT * FROM producten  WHERE typecomponent = "kabels"');
                $opslag = $opslagID->fetch_array();
                ?>
                <tr>
                    <td>Opslag</td>
                    <td><?php echo $opslag['naam'] ?></td>
                    <td><?php echo " € " . $opslag['prijs'] ?></td>
                </tr>
                <?php
                $psuID = db_getData("SELECT * FROM producten WHERE productID = '" . $_SESSION['psu'] . "' ");
                $kabels = db_getData('SELECT * FROM producten  WHERE typecomponent = "kabels"');
                $psu = $psuID->fetch_array();
                ?>
                <tr>
                    <td>PSU</td>
                    <td><?php echo $psu['naam'] ?></td>
                    <td><?php echo " € " . $psu['prijs'] ?></td>
                </tr>
                <?php
                $kabelID = db_getData("SELECT * FROM producten WHERE productID = '" . $_SESSION['kabel'] . "' ");
                $kabels = db_getData('SELECT * FROM producten  WHERE typecomponent = "kabels"');
                $kabel = $kabelID->fetch_array();
                ?>
                <tr>
                    <td>Kabel extensions</td>
                    <td><?php echo $kabel['naam']; ?></td>
                    <td><?php echo " € " . $kabel['prijs'] ?></td>
                </tr>
                <tr>
                    <td>Totaal</td>
                    <td></td>
                    <td><?php
                        $totaalprijs = $case['prijs'] + $cpu['prijs'] + $ram['prijs'] + $cpuKoeler['prijs'] +
                            $mobo['prijs'] + $gpu['prijs'] + $totaLFanPrice + $opslag['prijs'] +
                            $psu['prijs'] + $kabel["prijs"];
                        echo " € " . $totaalprijs ?></td>
                </tr>

            </table>
        </div>


    </div>

<?php
if (isset($_POST['bestel'], $_POST['adres'], $_POST['postcode'], $_POST['woonplaats'])) {
    $userID = $_SESSION['userID'];
    $status = "Awaiting Payment";
    $prebuild = $_SESSION['prebuild'];
    $adres = $_POST['adres'];
    $postcode = $_POST['postcode'];
    $woonplaats = $_POST['woonplaats'];

    $case = $_SESSION['case'];
    $fan = $_SESSION['fan'];
    $fanamount = $_SESSION['fanAmount'];
    $cpu = $_SESSION['cpu'];
    $cpucooler = $_SESSION['cpucooler'];
    $mobo = $_SESSION['mobo'];
    $ram = $_SESSION['ram'];
    $gpu = $_SESSION['gpu'];
    $psu = $_SESSION['psu'];
    $kabel = $_SESSION['kabel'];
    $opslag = $_SESSION['opslag'];


    $orderProducten = db_insertData("INSERT INTO orders (gebruikerID, status, prebuild, verzendadress, verzendpostcode,verzendwoonplaats,productid_case, productid_cpu, productid_cpucooler, productid_ram, productid_mobo, productid_gpu, productid_fan, fan_Amount, productid_psu, productid_opslag,  productid_kabels, totaalPrijs)
                                    VALUES ('$userID','$status' ,'$prebuild', '$adres', '$postcode', '$woonplaats', '$case', '$cpu', '$cpucooler','$ram', '$mobo', '$gpu', '$fan', '$fanamount', '$psu', '$opslag', '$kabel', '$totaalprijs')");
}
?>