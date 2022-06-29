<?php
require_once('header.php');

$productID = '';
$productNaam = '';
$typeComponent = '  ';
$merk = '';
$prijs = '';
$update = false;
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $update = true;
    $product = new Producten();
    $product = $product->getProduct($id);

    $productID = $product->productID;
    $productNaam = $product->naam;
    $typeComponent = $product->typecomponent;
    $merk = $product->merk;
    $prijs = $product->prijs;
}

?>
<div class="adminContainer">
    <div class="adminNavMenu">
        <div class="klantenBTN">Klanten</div>
        <div class="productenBTN">Producten</div>
        <div class="ordersBTN">Orders</div>
    </div>
    <div class="adminContent">
        <div class="productenContainerOverzicht">
            <div>
                <label class="filterLabel">Filter producten</label>
                <input type="text" id="search">
                <table>
                    <thead>
                    <tr>
                        <th class="productenTableTH">ProductID</th>
                        <th class="productenTableTH">Product Naam</th>
                        <th class="productenTableTH">Type Component</th>
                        <th colspan="2" class="productenTableTH">Action</th>
                    </tr>
                    </thead>
            </div>
            <div>
                <tbody id="filter">
                <?php $producten = db_getData("SELECT * FROM producten") ?>
                <?php if ($producten->num_rows > 0) {
                    while ($rows = $producten->fetch_array()) {
                        ?>
                        <tr>
                            <td class="productenTableTD"><?php echo $rows['productID'] ?></td>
                            <td class="productenTableTD"><?php echo $rows['naam'] ?></td>
                            <td class="productenTableTD"><?php echo $rows['typecomponent'] ?></td>
                            <td>
                                <a href="AdminOmgeving.php?edit=<?php echo $rows['productID']; ?>"
                                   class="edit_btn">View</a>
                            </td>
                            <td>
                                <a href="../src/server.php?del=<?php echo $rows['productID']; ?>"
                                   class="del_btn">Delete</a>
                            </td>
                        </tr>
                        <?php
                    }
                } ?>
                </tbody>
                </table>
            </div>
        </div>
        <div class="productenContainerCRUD">
            <div>
                <form method="post" action="../src/server.php">
                    <div class="msgPlaceholder">
                        <?php
                        if (isset($_SESSION['message'])){
                            ?>
                            <div class="msg">
                                <?php
                                echo $_SESSION['message'];
                                unset($_SESSION['message'])
                                ?>
                            </div>
                        <?php
                        }

                        ?>

                    </div>
                    <label>ProductID</label>
                    <input readonly type="text" name="productID" value="<?php echo $productID ?>">
                    <label>ProductNaam</label>
                    <input type="text" name="naam" value="<?php echo $productNaam ?>">
                    <label>typeComponent</label>
                    <!--                    <input type="text" name="typecomponent" value="-->
                    <?php //echo $typeComponent?><!--">-->
                    <select class="dropdown" name="typecomponent">
                        <option <?php if ($typeComponent == "case_atx") {echo 'selected';} ?> value="case_atx">case_atx</option>
                        <option <?php if ($typeComponent == "case_microatx") {echo 'selected';} ?> value="case_microatx">case_microatx</option>
                        <option <?php if ($typeComponent == "case_miniitx") {echo 'selected';} ?> value="case_miniitx">case_miniitx</option>
                        <option <?php if ($typeComponent == "cpu_amd") {echo 'selected';} ?> value="cpu_amd">cpu_amd</option>
                        <option <?php if ($typeComponent == "cpu_intel") {echo 'selected';} ?> value="cpu_intel">cpu_intel</option>
                        <option <?php if ($typeComponent == "ram") {echo 'selected';} ?> value="ram">ram</option>
                        <option <?php if ($typeComponent == "cpukoeler") {echo 'selected';} ?> value="cpukoeler">cpukoeler</option>
                        <option <?php if ($typeComponent == "mobo_atx") {echo 'selected';} ?> value="mobo_atx">mobo_atx</option>
                        <option <?php if ($typeComponent == "mobo_microatx") {echo 'selected';} ?> value="mobo_microatx">mobo_microatx</option>
                        <option <?php if ($typeComponent == "mobo_miniitx") {echo 'selected';} ?> value="mobo_miniitx">mobo_miniitx</option>
                        <option <?php if ($typeComponent == "gpu_nvidia") {echo 'selected';} ?> value="gpu_nvidia">gpu_nvidia</option>
                        <option <?php if ($typeComponent == "gpu_radeon") {echo 'selected';} ?> value="gpu_radeon">gpu_radeon</option>
                        <option <?php if ($typeComponent == "fan") {echo 'selected';} ?> value="fan">fan</option>
                        <option <?php if ($typeComponent == "opslag") {echo 'selected';} ?> value="opslag">opslag</option>
                        <option <?php if ($typeComponent == "psu") {echo 'selected';} ?> value="psu">psu</option>
                        <option <?php if ($typeComponent == "kabels") {echo 'selected';} ?> value="kabels">kabels</option>
                    </select>
                    <label>merk</label>
                    <input type="text" name="merk" value="<?php echo $merk ?>">
                    <label>prijs</label>
                    <input id="prijs" type="text" name="prijs" value="<?php echo $prijs ?>">
                    <div class="input-group">
                        <?php if ($update == true) { ?>
                            <button class="btn" type="submit" name="update" style="background: #556B2F;">update</button>
                            <button class="btn" type="submit" name="cancel" style="background: orangered;">cancel
                            </button>
                        <?php } else { ?>
                            <button class="btn" type="submit" name="save">Save</button>
                        <?php } ?>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
