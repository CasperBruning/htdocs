<?php
include_once("header.php");


?>
<div class="bestelContainer">
    <div class="besteldeproductenDiv">
        <h1>Gekozen Producten</h1>
        <?php
        if (isset($_POST['order'], $_POST['case'], $_POST['cpu'], $_POST['ram'], $_POST['cpucooler'],
            $_POST['mobo'], $_POST['gpu'], $_POST['fan'], $_POST['opslag'],
            $_POST['psu'])) {
            $caseq = $_POST['case'];
            $fanq = $_POST['fan'];
            $fanamountq = $_POST['fanAmount'];
            $cpuq = $_POST['cpu'];
            $cpucoolerq = $_POST['cpucooler'];
            $moboq = $_POST['mobo'];
            $ramq = $_POST['ram'];
            $gpuq = $_POST['gpu'];
            $psuq = $_POST['psu'];
            $kabelq = $_POST['kabel'];
            $opslagq = $_POST['opslag'];
            ?>
            <table class="besteldeproductenTable" border="border">

                <?php
                $caseID = db_getData("SELECT * FROM producten WHERE productID = '" . $_POST['case'] . "' ");
                $kabels = db_getData('SELECT * FROM producten  WHERE typecomponent = "kabels"');
                $case = $caseID->fetch_array();
                ?>
                <tr>
                    <td>Case</td>
                    <td> <?php echo $case['naam']; ?></td>
                    <td>€ <?php echo $case['prijs'] ?></td>
                </tr>
                <?php
                $cpuID = db_getData("SELECT * FROM producten WHERE productID = '" . $_POST['cpu'] . "' ");
                $kabels = db_getData('SELECT * FROM producten  WHERE typecomponent = "kabels"');
                $cpu = $cpuID->fetch_array();
                ?>
                <tr>
                    <td>CPU</td>
                    <td><?php echo $cpu['naam'] ?></td>
                    <td><?php echo " € " . $cpu['prijs'] ?></td>
                </tr>
                <?php
                $ramID = db_getData("SELECT * FROM producten WHERE productID = '" . $_POST['ram'] . "' ");
                $kabels = db_getData('SELECT * FROM producten  WHERE typecomponent = "kabels"');
                $ram = $ramID->fetch_array();
                ?>
                <tr>
                    <td>Werkgeheugen</td>
                    <td><?php echo $ram['naam'] ?></td>
                    <td><?php echo " € " . $ram['prijs'] ?></td>
                </tr>
                <?php
                $cpuKoelerID = db_getData("SELECT * FROM producten WHERE productID = '" . $_POST['cpucooler'] . "' ");
                $kabels = db_getData('SELECT * FROM producten  WHERE typecomponent = "kabels"');
                $cpuKoeler = $cpuKoelerID->fetch_array();
                ?>
                <tr>
                    <td>CPU Koeler</td>
                    <td><?php echo $cpuKoeler['naam'] ?></td>
                    <td><?php echo " € " . $cpuKoeler['prijs'] ?></td>
                </tr>
                <?php
                $moboID = db_getData("SELECT * FROM producten WHERE productID = '" . $_POST['mobo'] . "' ");
                $kabels = db_getData('SELECT * FROM producten  WHERE typecomponent = "kabels"');
                $mobo = $moboID->fetch_array();
                ?>
                <tr>
                    <td>Moederbord</td>
                    <td><?php echo $mobo['naam'] ?></td>
                    <td><?php echo " € " . $mobo['prijs'] ?></td>
                </tr>
                <?php
                $gpuID = db_getData("SELECT * FROM producten WHERE productID = '" . $_POST['gpu'] . "' ");
                $kabels = db_getData('SELECT * FROM producten  WHERE typecomponent = "kabels"');
                $gpu = $gpuID->fetch_array();
                ?>
                <tr>
                    <td>GPU</td>
                    <td><?php echo $gpu['naam'] ?></td>
                    <td><?php echo " € " . $gpu['prijs'] ?></td>
                </tr>
                <?php
                $fanID = db_getData("SELECT * FROM producten WHERE productID = '" . $_POST['fan'] . "' ");
                $kabels = db_getData('SELECT * FROM producten  WHERE typecomponent = "kabels"');
                $fan = $fanID->fetch_array();
                ?>
                <tr>
                    <td>Fan</td>
                    <td><?php echo $_POST['fanAmount'] . " x " . $fan['naam'] ?></td>
                    <td><?php
                        $totaLFanPrice = $_POST['fanAmount'] * $fan['prijs'];
                        echo " € " . $totaLFanPrice ?></td>
                </tr>
                <?php
                $opslagID = db_getData("SELECT * FROM producten WHERE productID = '" . $_POST['opslag'] . "' ");
                $kabels = db_getData('SELECT * FROM producten  WHERE typecomponent = "kabels"');
                $opslag = $opslagID->fetch_array();
                ?>
                <tr>
                    <td>Opslag</td>
                    <td><?php echo $opslag['naam'] ?></td>
                    <td><?php echo " € " . $opslag['prijs'] ?></td>
                </tr>
                <?php
                $psuID = db_getData("SELECT * FROM producten WHERE productID = '" . $_POST['psu'] . "' ");
                $kabels = db_getData('SELECT * FROM producten  WHERE typecomponent = "kabels"');
                $psu = $psuID->fetch_array();
                ?>
                <tr>
                    <td>PSU</td>
                    <td><?php echo $opslag['naam'] ?></td>
                    <td><?php echo " € " . $opslag['prijs'] ?></td>
                </tr>
                <?php
                $psuID = db_getData("SELECT * FROM producten WHERE productID = '" . $_POST['psu'] . "' ");
                $kabels = db_getData('SELECT * FROM producten  WHERE typecomponent = "kabels"');
                $psu = $psuID->fetch_array();
                ?>
                <tr>
                    <td>PSU</td>
                    <td><?php echo $psu['naam'] ?></td>
                    <td><?php echo " € " . $psu['prijs'] ?></td>
                </tr>
                <?php
                $kabelID = db_getData("SELECT * FROM producten WHERE productID = '" . $_POST['kabel'] . "' ");
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
                    <td><?php echo " € " . $case['prijs'] + $cpu['prijs'] + $ram['prijs'] + $cpuKoeler['prijs'] +
                            $mobo['prijs'] + $gpu['prijs'] + $totaLFanPrice + $opslag['prijs'] +
                            $psu['prijs'] + $kabel["prijs"] ?></td>
                </tr>

            </table>
        <?php } ?>
    </div>
    <div class="addresFormDiv">
        <form method="post" action="#">
            <table>
                <tr>
                    <td>Adres</td>
                    <td><input name="adres" type="text"></td>
                </tr>
                <tr>
                    <td>Postcode</td>
                    <td><input name="postcode" type="text"></td>
                </tr>
                <tr>
                    <td>Woonplaats</td>
                    <td><input name="woonplaats" type="text"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="bestel" value="bestel nu"></td>
                    <td></td>
                </tr>
            </table>
        </form>
    </div>
</div>
<?php

if (isset($_POST['bestel'], $_POST['adres'], $_POST['postcode'],$_POST['woonplaats'])){
    echo "test";
    $userID = $_SESSION['userID'];
    $statusq = "Awaiting Payment";
    $prebuildq = $_POST['prebuild'];
    $adresq = $_POST['adres'];
    $postcodeq = $_POST['postcode'];
    $woonplaatsq = $_POST['woonplaats'];



//    $orderProducten = db_insertData("INSERT INTO orders (gebruikerID, status, prebuild, verzendadress, verzendpostcode,verzendwoonplaats,productid_case, productid_cpu, productid_cpucooler, productid_ram, productid_mobo, productid_gpu, productid_fan, fan_Amount, productid_psu, productid_opslag,  productid_kabels)
//                                    VALUES ('$userID','$statusq' ,'$prebuildq', '$adresq', '$postcodeq', '$woonplaatsq', '$caseq', '$cpuq', '$cpucoolerq','$ramq', '$moboq', '$gpuq', '$fanq', '$fanamountq', '$psuq', '$opslagq', '$kabelq')");
//
//    $orderProducten = db_insertData("INSERT INTO orders (gebruikerID, status, prebuild, verzendadress, verzendpostcode,verzendwoonplaats,productid_case, productid_cpu, productid_cpucooler, productid_ram, productid_mobo, productid_gpu, productid_fan, fan_Amount, productid_psu, productid_opslag,  productid_kabels)
//                                    VALUES ('$userID','$statusq' ,'$prebuildq', '$adresq', '$postcodeq', '$woonplaatsq', '$caseq', '$cpuq', '$cpucoolerq','$ramq', '$moboq', '$gpuq', '$fanq', '$fanamountq', '$psuq', '$opslagq', '$kabelq')");
    $orderProducten = db_insertData("INSERT INTO orders (gebruikerID, status, prebuild, verzendadress, verzendpostcode,verzendwoonplaats,productid_case, productid_cpu, productid_cpucooler, productid_ram, productid_mobo, productid_gpu, productid_fan, fan_Amount, productid_psu, productid_opslag,  productid_kabels)
                                    VALUES ('$userID','$statusq' ,'$prebuildq', '$adresq', '$postcodeq', '$woonplaatsq', '$caseq', '8', '9','0', '1', '2', '3', '4', '5', '6', '7')");

}
?>