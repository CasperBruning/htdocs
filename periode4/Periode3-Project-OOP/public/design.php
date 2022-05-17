<?php require_once("header.php");
if (isset($_SESSION['userID'])) {
    ?>

    <div class="designContainer">
        <div class="designLeftContainer">
            <img src="img/Product-07b.png">
        </div>
        <div class="designRightContainer">
            <form action="bestel.php" method="post">
                <div class="designpagina1">
                    <div class="navbalk">
                        <ol>
                            <li class="categorie1">Design jouw computer hier</li>
                        </ol>
                        <hr>
                    </div>

                    <div class="selecteerGrootte">
                        <div class="selecteerGrootteH1">
                            <h1>Selecteer jouw grootte</h1>
                        </div>

                        <div class="div-inline-list">

                            <div class="product-container">
                                <input style="display: none" id="prod1" value="atx" type="radio" name="myradio">
                                <label for="prod1" id="clickProd1" class="clickable"><span
                                            class="checked-box">&#10004;</span>
                                    <div class="imageDiv">
                                        <img class="prod1Img"
                                             src="img/-base-5000d-airflow-Gallery-5000D-AF-BLACK-001.png_515Wx515H.png">
                                    </div>
                                    <div class="divText">
                                        <h1 class="producth1">ATX</h1>
                                        <p class="productP">Een ATX-moederbord is 305mm lang en 244mm breed. De gaatjes
                                            zitten op vaste plaatsen, zodat het plaatsen in een kast uniform blijft.</p>
                                    </div>
                                </label>
                            </div>
                            <div class="product-container">
                                <input style="display: none" value="microatx" id="prod2" type="radio" name="myradio">
                                <label for="prod2" id="clickProd2" class="clickable"><span
                                            class="checked-box">&#10004;</span>
                                    <div class="imageDiv">
                                        <img class="prod1Img" src="img/S100TG.png">
                                    </div>
                                    <div class="divText">
                                        <h1 class="producth1">Micro-ATX</h1>
                                        <p class="productP">MicroATX-moederborden zijn op zijn grootst 244 mm bij 244
                                            mm,
                                            maar soms zijn ze maar 171mm bij 171mm. De standaard ATX grootte is 25%
                                            langer</p>
                                    </div>
                                </label>
                            </div>
                            <div class="product-container">
                                <input style="display: none" value="miniitx" id="prod3" type="radio" name="myradio">
                                <label for="prod3" id="clickProd3" class="clickable"><span
                                            class="checked-box">&#10004;</span>
                                    <div class="imageDiv">
                                        <img class="prod1Img" src="img/mini-ITX.jpeg">
                                    </div>
                                    <div class="divText">
                                        <h1 class="producth1">Mini-ITX</h1>
                                        <p class="productP">Een ATX-moederbord is 305mm lang en 244mm breed. De gaatjes
                                            zitten op vaste plaatsen, zodat het plaatsen in een kast uniform blijft.</p>
                                    </div>
                                </label>
                            </div>
                            <h1 class="chooseCaseH1">Case</h1>
                            <div class="chooseCase">
                                <select disabled class="placeholder caseSelect">
                                    <option class="caseOption">Kies eerst een formaat voordat je een case kiest</option>
                                </select>
                                <select name="case" class="caseSelect caseOptions">
                                    <option name="geen product" value="0" class="caseOption">Geen product gekozen
                                    </option>

                                    <?php
                                    $atxCase = db_getData('SELECT * FROM producten  WHERE typecomponent = "case_atx"');
                                    if ($atxCase->num_rows > 0) {
                                        while ($row = $atxCase->fetch_array()) {
                                            ?>
                                            <option name="case" value="<?php echo $row['productID'] ?>"
                                                    class="caseOption atx"><?php echo $row['naam'] . " €" . $row['prijs'] ?></option>
                                            <?php
                                        }
                                    } else {
                                        echo "0 results";
                                    }
                                    ?>
                                    <?php
                                    $microatxCase = db_getData('SELECT * FROM producten  WHERE typecomponent = "case_microatx"');
                                    if ($microatxCase->num_rows > 0) {
                                        while ($row = $microatxCase->fetch_array()) {
                                            ?>
                                            <option name="case" value="<?php echo $row['productID'] ?>"
                                                    class="caseOption microatx"><?php echo $row['naam'] . " €" . $row['prijs'] ?></option>
                                            <?php
                                        }
                                    } else {
                                        echo "0 results";
                                    }
                                    ?>
                                    <?php
                                    $miniitx = db_getData('SELECT * FROM producten  WHERE typecomponent = "case_miniitx"');
                                    if ($miniitx->num_rows > 0) {
                                        while ($row = $miniitx->fetch_array()) {
                                            ?>
                                            <option name="case" value="<?php echo $row['productID'] ?>"
                                                    class="caseOption miniitx"><?php echo $row['naam'] . " €" . $row['prijs'] ?></option>
                                            <?php
                                        }
                                    } else {
                                        echo "0 results";
                                    }
                                    ?>
                                </select>

                            </div>

                            <h1 class="chooseCPUH1">Kies een CPU</h1>
                            <div class="div-inline-list1">
                                <div class="product-container1">
                                    <input style="display: none;" value="intel" id="cpu1" type="radio" name="myradio1">
                                    <label for="cpu1" id="clickProd3" class="clickable1"><span
                                                class="checked-box1">&#10004;</span>
                                        <div class="imageDiv">
                                            <img class="cpu1IMG" src="img/intelLogo.png">
                                        </div>
                                    </label>
                                </div>
                                <div class="product-container1">
                                    <input style="display: none" value="amd" id="cpu2" type="radio" name="myradio1">
                                    <label for="cpu2" id="clickProd3" class="clickable1"><span
                                                class="checked-box1">&#10004;</span>
                                        <div class="imageDiv">
                                            <img class="cpu2IMG" src="img/amdLogo.jpg">
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div class="chooseCPU">
                                <select name="cpu" class="cpuselect">
                                    <option disabled class="caseOption placeholder1">Kies eerst een Merk</option>
                                    <option name="geen product" value="0" class="caseOption">Geen product gekozen
                                    </option>

                                    <!--                                    INTEL CPU-->
                                    <?php
                                    $intelCpu = db_getData('SELECT * FROM producten  WHERE typecomponent = "cpu_intel"');
                                    if ($intelCpu->num_rows > 0) {
                                        while ($row = $intelCpu->fetch_array()) {
                                            ?>
                                            <option name="cpu" value="<?php echo $row['productID'] ?>"
                                                    class="caseOption intel"><?php echo $row['naam'] . " €" . $row['prijs'] ?></option>
                                            <?php
                                        }
                                    } else {
                                        echo "0 results";
                                    }
                                    ?>

                                    <!--                                    AMD CPU-->
                                    <?php
                                    $amdCpu = db_getData('SELECT * FROM producten  WHERE typecomponent = "cpu_amd"');
                                    if ($amdCpu->num_rows > 0) {
                                        while ($row = $amdCpu->fetch_array()) {
                                            ?>
                                            <option name="cpu" value="<?php echo $row['productID'] ?>"
                                                    class="caseOption amd"><?php echo $row['naam'] . " €" . $row['prijs'] ?></option>
                                            <?php
                                        }
                                    } else {
                                        echo "0 results";
                                    }
                                    ?>
                                </select>
                            </div>

                            <h1 class="chooseGPUH1">Werkgeheugen</h1>
                            <select name="ram" class="ramselect">
                                <option name="geen product" value="0" class="caseOption">Geen product gekozen</option>

                                <!--                                RAM-->
                                <?php
                                $ram = db_getData('SELECT * FROM producten  WHERE typecomponent = "ram"');
                                if ($ram->num_rows > 0) {
                                    while ($row = $ram->fetch_array()) {
                                        ?>
                                        <option name="ram" value="<?php echo $row['productID'] ?>"
                                                class="caseOption ram"><?php echo $row['naam'] . " €" . $row['prijs'] ?></option>
                                        <?php
                                    }
                                } else {
                                    echo "0 results";
                                }
                                ?>
                            </select>

                            <h1 class="chooseGPUH1">CPU Koeler</h1>
                            <select name="cpucooler" class="cpucoolerselect">
                                <option name="geen product" value="0" class="caseOption">Geen product gekozen</option>


                                <!--                                CPU COOLER-->
                                <?php
                                $cpuCooler = db_getData('SELECT * FROM producten  WHERE typecomponent = "cpukoeler"');
                                if ($cpuCooler->num_rows > 0) {
                                    while ($row = $cpuCooler->fetch_array()) {
                                        ?>
                                        <option name="cpucooler" value="<?php echo $row['productID'] ?>"
                                                class="caseOption cpucooler"><?php echo $row['naam'] . " €" . $row['prijs'] ?></option>
                                        <?php
                                    }
                                } else {
                                    echo "0 results";
                                }
                                ?>
                            </select>

                            <h1 class="chooseGPUH1">Moederbord</h1>
                            <select name="mobo" class="moboselect">
                                <option disabled class="caseOption placeholder">Kies eerst een Merk</option>
                                <option name="geen product" value="0" class="caseOption">Geen product gekozen</option>

                                <!--                                ATX MOBO-->
                                <?php
                                $moboAtx = db_getData('SELECT * FROM producten  WHERE typecomponent = "mobo_atx"');
                                if ($moboAtx->num_rows > 0) {
                                    while ($row = $moboAtx->fetch_array()) {
                                        ?>
                                        <option name="mobo" value="<?php echo $row['productID'] ?>"
                                                class="caseOption atx"><?php echo $row['naam'] . " €" . $row['prijs'] ?></option>
                                        <?php
                                    }
                                } else {
                                    echo "0 results";
                                }
                                ?>

                                <!--                                MICRO ATX MOBO-->
                                <?php
                                $moboMicroAtx = db_getData('SELECT * FROM producten  WHERE typecomponent = "mobo_microatx"');
                                if ($moboMicroAtx->num_rows > 0) {
                                    while ($row = $moboMicroAtx->fetch_array()) {
                                        ?>
                                        <option name="mobo" value="<?php echo $row['productID'] ?>"
                                                class="caseOption microatx"><?php echo $row['naam'] . " €" . $row['prijs'] ?></option>
                                        <?php
                                    }
                                } else {
                                    echo "0 results";
                                }
                                ?>

                                <!--                                MINI ITX MOBO-->
                                <?php
                                $moboMiniItx = db_getData('SELECT * FROM producten  WHERE typecomponent = "mobo_miniitx"');
                                if ($moboMiniItx->num_rows > 0) {
                                    while ($row = $moboMiniItx->fetch_array()) {
                                        ?>
                                        <option name="mobo" value="<?php echo $row['productID'] ?>"
                                                class="caseOption miniitx"><?php echo $row['naam'] . " €" . $row['prijs'] ?></option>
                                        <?php
                                    }
                                } else {
                                    echo "0 results";
                                }
                                ?>
                            </select>

                            <h1 class="chooseGPUH1">GPU</h1>

                            <div class="div-inline-list2">
                                <div class="product-container2">
                                    <input style="display: none;" value="nvidia" id="gpu1" type="radio" name="myradio2">
                                    <label for="gpu1" id="clickProd3" class="clickable2"><span
                                                class="checked-box2">&#10004;</span>
                                        <div class="imageDiv">
                                            <img class="gpu1IMG" src="img/nividiaLogo.png">
                                        </div>

                                    </label>
                                </div>
                                <div class="product-container2">
                                    <input style="display: none" value="radeon" id="gpu2" type="radio" name="myradio2">
                                    <label for="gpu2" id="clickProd3" class="clickable2"><span
                                                class="checked-box2">&#10004;</span>
                                        <div class="imageDiv">
                                            <img class="gpu2IMG" src="img/radeonLogo.png">
                                        </div>

                                    </label>
                                </div>
                            </div>
                            <div class="chooseGPU">
                                <select name="gpu" class="gpuselect">
                                    <option disabled class="caseOption placeholder2">Kies eerst een Merk</option>
                                    <option name="geen product" value="0" class="caseOption">Geen product gekozen
                                    </option>

                                    <!--                                    NVIDIA GPU-->
                                    <?php
                                    $nvidiaGPU = db_getData('SELECT * FROM producten  WHERE typecomponent = "gpu_nvidia"');
                                    if ($nvidiaGPU->num_rows > 0) {
                                        while ($row = $nvidiaGPU->fetch_array()) {
                                            ?>
                                            <option name="gpu" value="<?php echo $row['productID'] ?>"
                                                    class="caseOption nvidia"><?php echo $row['naam'] . " €" . $row['prijs'] ?></option>
                                            <?php
                                        }
                                    } else {
                                        echo "0 results";
                                    }
                                    ?>

                                    <!--                                    RADEON GPU-->
                                    <?php
                                    $radeonGPU = db_getData('SELECT * FROM producten  WHERE typecomponent = "gpu_radeon"');
                                    if ($radeonGPU->num_rows > 0) {
                                        while ($row = $radeonGPU->fetch_array()) {
                                            ?>
                                            <option name="gpu" value="<?php echo $row['productID'] ?>"
                                                    class="caseOption radeon"><?php echo $row['naam'] . " €" . $row['prijs'] ?></option>
                                            <?php
                                        }
                                    } else {
                                        echo "0 results";
                                    }

                                    ?>
                                </select>
                            </div>

                            <h1 class="chooseGPUH1">Case Fans</h1>

                            <div class="chooseFAN">
                                <select name="fan" class="fanselect">
                                    <option name="geen product" value="0" class="caseOption">Geen product gekozen
                                    </option>

                                    <!--                                    FAN-->
                                    <?php
                                    $fan = db_getData('SELECT * FROM producten  WHERE typecomponent = "fan"');
                                    if ($fan->num_rows > 0) {
                                        while ($row = $fan->fetch_array()) {
                                            ?>
                                            <option name="fan" value="<?php echo $row['productID'] ?>"
                                                    class="caseOption"><?php echo $row['naam'] . " €" . $row['prijs'] ?></option>
                                            <?php
                                        }
                                    } else {
                                        echo "0 results";
                                    }
                                    ?>
                                </select>
                                <p>Kies aantal</p>
                                <input name="fanAmount" class="fanselect fanAmount" type="number" min="0" max="10">
                            </div>

                            <h1 class="chooseGPUH1">Opslag</h1>

                            <select id="opslag" name="opslag" class="opslagselect">
                                <option name="geen product" value="0" class="caseOption">Geen product gekozen</option>

                                <!--                                OPSLAG-->
                                <?php
                                $opslag = db_getData('SELECT * FROM producten  WHERE typecomponent = "opslag"');
                                if ($opslag->num_rows > 0) {
                                    while ($row = $opslag->fetch_array()) {
                                        ?>
                                        <option name="opslag" value="<?php echo $row['productID'] ?>"
                                                class="caseOption"><?php echo $row['naam'] . " €" . $row['prijs'] ?></option>
                                        <?php
                                    }
                                } else {
                                    echo "0 results";
                                }
                                ?>
                            </select>

                            <h1 class="chooseGPUH1">PSU</h1>

                            <select name="psu" class="kabelSelect">
                                <option name="geen product" value="0" class="caseOption">Geen product gekozen</option>

                                <!--                                PSU-->
                                <?php
                                $psu = db_getData('SELECT * FROM producten  WHERE typecomponent = "psu"');
                                if ($psu->num_rows > 0) {
                                    while ($row = $psu->fetch_array()) {
                                        ?>
                                        <option name="psu" value="<?php echo $row['productID'] ?>"
                                                class="caseOption"><?php echo $row['naam'] . " €" . $row['prijs'] ?></option>
                                        <?php
                                    }
                                } else {
                                    echo "0 results";
                                }
                                ?>
                            </select>

                            <h1 class="chooseGPUH1">Kabel extension</h1>

                            <select name="kabel" class="kabelSelect">
                                <!--                                Kabel EXTENSIONS-->
                                <option name="geen product" value="0" class="caseOption">Geen product gekozen</option>

                                <?php
                                $kabels = db_getData('SELECT * FROM producten  WHERE typecomponent = "kabels"');
                                if ($kabels->num_rows > 0) {
                                    while ($row = $kabels->fetch_array()) {
                                        print_r($row)
                                        ?>
                                        <option name="kabel" value="<?php echo $row['productID'] ?>"
                                                class="caseOption"><?php echo $row['naam'] . " €" . $row['prijs']; ?></option>
                                        <?php
                                    }
                                } else {
                                    echo "0 results";
                                }
                                ?>
                            </select>

                            <h1 class="chooseGPUH1">Moeten wij de PC al in elkaar zetten?</h1>
                            <select name="prebuild" class="kabelSelect">
                                <option name="prebuild" value="Ja" class="caseOption">Zet hem maar in elkaar voor mij!
                                </option>
                                <option name="prebuild" value="Nee" class="caseOption">Dat doe ik zelf wel</option>

                            </select>
                        </div>
                        <input href="bestel.php" class="bestelKnop" name="order" type="submit" value="Bestel Nu">
                    </div>
            </form>

        </div>

    </div>


    <?php
} else {
    header("location: login.php");
}
?>
