<?php
require_once('header.php');

$id = '';
$brand= '';
$model='';
$price='';
$mileage='';
$scooterType='';


$update = false;
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $update = true;
    $scooter = new Scooter();
    $scooters = $scooter->getScooter($id);

    $id = $scooters['id'];
    $brand = $scooters['brand'];
    $model = $scooters['model'];
    $price = $scooters['price'];
    $mileage = $scooters['mileage'];
    $scooterType = $scooters['scooterType'];
}

?>
<div class="adminContainer">
    <div class="adminContent">
        <div class="productenContainerOverzicht">
            <div>
                <table>
                    <thead>
                    <tr>
                        <th class="productenTableTH">orderID</th>
                        <th class="productenTableTH">lastName</th>
                        <th class="productenTableTH">orderStatus</th>
                        <th colspan="2" class="productenTableTH">Action</th>
                    </tr>
                    </thead>
            </div>
            <div>
                <?php
                $db = new mysqli('localhost', 'root', '', 'garage_bromsnor');
                $order = $db->query("SELECT * FROM `scooter`"); ?>
                <?php if ($order->num_rows > 0) {
                    while ($rows = $order->fetch_array()) {
                        ?>
                        <tr>
                            <td class="productenTableTD"><?php echo $rows['id'] ?></td>
                            <td class="productenTableTD"><?php echo $rows['brand'] ?></td>
                            <td class="productenTableTD"><?php echo $rows['model'] ?></td>
                            <td>
                                <a href="adminScooters.php?edit=<?php echo $rows['id']; ?>"
                                   class="edit_btn">View</a>
                            </td>
                            <td>
                                <a href="../src/server.php?delS=<?php echo $rows['id']; ?>"
                                   class="del_btn">Delete</a>
                            </td>
                        </tr>
                        <?php
                    }
                } ?>
                </table>
            </div>
        </div>
        <div class="productenContainerCRUD">
            <div>
                <form method="post" action="../src/server.php">
                    <label>id</label>
                    <input readonly type="text" name="id" value="<?php echo $id ?>">
                    <label>Brand</label>
                    <input type="text" name="brand" value="<?php echo $brand ?>">
                    <label>Model</label>
                    <input type="text" name="model" value="<?php echo $model ?>">
                    <label>Price</label>
                    <input type="text" name="price" value="<?php echo $price ?>">
                    <label>Mileage</label>
                    <input type="text" name="mileage" value="<?php echo $mileage ?>">
                    <label>ScooterType</label>
                    <input type="text" name="scooterType" value="<?php echo $scooterType ?>">
                    <div class="input-group">
                        <?php if ($update == true) { ?>
                            <button class="btn" type="submit" name="updateS" style="background: #556B2F;">update</button>
                            <button class="btn" type="submit" name="cancelS" style="background: orangered;">cancel
                            </button>
                        <?php } else { ?>
                            <button class="btn" type="submit" name="saveScooter">Save</button>
                        <?php } ?>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
