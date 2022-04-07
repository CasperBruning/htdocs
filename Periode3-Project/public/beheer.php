<?php include_once("header.php");

if (isset($_POST['Awaiting Payment'])) {
    $order = $_SESSION['orderID'];
    $changeStatus = db_insertData("UPDATE orders SET status = 'Awaiting Payment' WHERE orderID = '$order'");
}
if (isset($_POST['Processing'])) {
    $order = $_SESSION['orderID'];
    $changeStatus = db_insertData("UPDATE orders SET status = 'Processing' WHERE orderID = '$order'");
}
if (isset($_POST['Verzonden'])) {
    $order = $_SESSION['orderID'];
    $changeStatus = db_insertData("UPDATE orders SET status = 'Verzonden' WHERE orderID = '$order'");
}
if (isset($_POST['Complete'])) {
    $order = $_SESSION['orderID'];
    $changeStatus = db_insertData("UPDATE orders SET status = 'Complete' WHERE orderID = '$order'");
}
if (isset($_POST['Cancelled'])) {
    $order = $_SESSION['orderID'];
    $changeStatus = db_insertData("UPDATE orders SET status = 'Cancelled' WHERE orderID = '$order'");
}

?>
<div class="containerBH">
    <div class="titleBH">
        <h1 align="center">ORDERS</h1>
    </div>
    <div class="leftContainerBH">
        <table style="background-color: gold">
            <tr>
                <th>orderID</th>
                <th>gebruikerID</th>
                <th>status</th>
            </tr>
            <?php $allOrders = db_getData("SELECT orderID, gebruikerID, status FROM orders");
            if ($allOrders->num_rows > 0) {
                while ($row = $allOrders->fetch_array()) {
                    ?>
                    <tr>
                        <td><?php echo $row['orderID'] ?></td>
                        <td><?php echo $row['gebruikerID'] ?></td>
                        <td><?php echo $row['status'] ?></td>
                    </tr>
                    <?php
                }
            } else {
                echo "0 results";
            }
            ?>
        </table>
    </div>
    <div class="rightContainerBH">
        <!--    <h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut culpa facilis harum in laudantium necessitatibus neque pariatur praesentium tenetur veritatis.</h1>-->
        <form action="#" method="post">
            <label for="orderID">OrderID</label>
            <input id="orderID" name="orderID" type="text">
            <input name="zoek" type="submit" value="Zoek Order">
        </form>
        <?php
        if (isset($_POST['orderID'], $_POST['zoek'])) {
            $orderID = $_POST['orderID'];
            $_SESSION['orderID'] = $orderID;
            $order = db_getData("SELECT * FROM orders WHERE orderID = '$orderID'");
            if ($order->num_rows > 0) {
                while ($row = $order->fetch_array()) {
                    ?>
                    <table class="orderTable">
                        <tr>
                            <th>orderID</th>
                            <td><?php echo $row['orderID'] ?></td>
                        </tr>
                        <tr>
                            <th>gebruikerID</th>
                            <td><?php echo $row['gebruikerID'] ?></td>
                        </tr>
                        <tr>
                            <th>status</th>
                            <td><?php echo $row['status'] ?></td>
                        </tr>
                        <tr>
                            <th>prebuild</th>
                            <td><?php echo $row['prebuild'] ?></td>
                        </tr>
                        <tr>
                            <th>verzend adres</th>
                            <td><?php echo $row['verzendadress'] ?></td>
                        </tr>
                        <tr>
                            <th>verzend postcode</th>
                            <td><?php echo $row['verzendpostcode'] ?></td>
                        </tr>
                        <tr>
                            <th>verzend woonplaats</th>
                            <td><?php echo $row['verzendwoonplaats'] ?></td>
                        </tr>
                        <tr>
                            <th>productID case</th>
                            <td><?php echo $row['productid_case'] ?></td>
                        </tr>
                        <tr>
                            <th>productID cpu</th>
                            <td><?php echo $row['productid_cpu'] ?></td>
                        </tr>
                        <tr>
                            <th>productID cpuCooler</th>
                            <td><?php echo $row['productid_cpucooler'] ?></td>
                        </tr>
                        <tr>
                            <th>productID ram</th>
                            <td><?php echo $row['productid_ram'] ?></td>
                        </tr>
                        <tr>
                            <th>productID mobo</th>
                            <td><?php echo $row['productid_mobo'] ?></td>
                        </tr>
                        <tr>
                            <th>productID gpu</th>
                            <td><?php echo $row['productid_gpu'] ?></td>
                        </tr>
                        <tr>
                            <th>productID fan</th>
                            <td><?php echo $row['productid_fan'] ?></td>
                        </tr>
                        <tr>
                            <th>fan aantal</th>
                            <td><?php echo $row['fan_Amount'] ?></td>
                        </tr>
                        <th>productID psu</th>
                        <td><?php echo $row['productid_psu'] ?></td>
                        <tr>
                            <th>productID opslag</th>
                            <td><?php echo $row['productid_opslag'] ?></td>
                        </tr>
                        <tr>
                            <th>productID kabelExtensions</th>
                            <td><?php echo $row['productid_kabels'] ?></td>
                        </tr>
                        <tr>
                            <th>TotaalPrijs</th>
                            <td><?php echo $row['productid_totaalPrijs'] ?></td>
                        </tr>
                    </table>
                    <?php
                }
            }
            ?>
            <table class="veranderStatusTable">
                <form method="post" action="#">
                    <tr>
                        <th colspan="5">Verander order status</th>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" value="Awaiting Payment" name="Awaiting Payment">
                        </td>
                        <td>
                            <input type="submit" value="Processing" name="Processing">
                        </td>
                        <td>
                            <input type="submit" value="Verzonden" name="Verzonden">
                        </td>
                        <td>
                            <input type="submit" value="Complete" name="Complete">
                        </td>
                        <td>
                            <input type="submit" value="Cancelled" name="Cancelled">
                        </td>
                    </tr>
                </form>
            </table>
            <?php
        }
        ?>

    </div>
</div>