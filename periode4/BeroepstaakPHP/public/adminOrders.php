<?php
require_once('header.php');

$id = '';
$scooterID = '';
$firstName = '  ';
$lastName = '';
$email = '';
$phone = '';
$message = '';
$orderStatus = '';


$update = false;
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $update = true;
    $order = new Order();
    $order = $order->getOrder($id);

    $id = $order['id'];
    $scooterID = $order['scooterID'];
    $firstName = $order['firstName'];
    $lastName = $order['lastName'];
    $email = $order['email'];
    $phone = $order['phone'];
    $message = $order['message'];
    $orderStatus = $order['orderStatus'];
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
                $order = $db->query("SELECT * FROM `order`"); ?>
                <?php if ($order->num_rows > 0) {
                    while ($rows = $order->fetch_array()) {
                        ?>
                        <tr>
                            <td class="productenTableTD"><?php echo $rows['id'] ?></td>
                            <td class="productenTableTD"><?php echo $rows['lastName'] ?></td>
                            <td class="productenTableTD"><?php echo $rows['orderStatus'] ?></td>
                            <td>
                                <a href="adminOrders.php?edit=<?php echo $rows['id']; ?>"
                                   class="edit_btn">View</a>
                            </td>
                            <td>
                                <a href="../src/server.php?delO=<?php echo $rows['id']; ?>"
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
                    <label>scooterID</label>
                    <input type="text" name="scooterID" value="<?php echo $scooterID ?>">
                    <label>firstName</label>
                    <input type="text" name="firstName" value="<?php echo $firstName ?>">
                    <label>lastName</label>
                    <input type="text" name="lastName" value="<?php echo $lastName ?>">
                    <label>email</label>
                    <input type="email" name="email" value="<?php echo $email ?>">
                    <label>phone</label>
                    <input type="text" name="phone" value="<?php echo $phone ?>">
                    <label>message</label>
                    <input type="text" name="message" value="<?php echo $message ?>">
                    <label>orderStatus</label>
                    <input type="text" name="orderStatus" value="<?php echo $orderStatus ?>">
                    <div class="input-group">
                        <?php if ($update == true) { ?>
                            <button class="btn" type="submit" name="updateO" style="background: #556B2F;">update</button>
                            <button class="btn" type="submit" name="cancelO" style="background: orangered;">cancel
                            </button>
                        <?php } else { ?>
                            <button class="btn" type="submit" name="saveOrderAdmin">Save</button>
                        <?php } ?>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
