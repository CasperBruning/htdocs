<?php require 'header.php';
require '../src/userFunctions.php';
// Check for order
if (isset($_POST['userID'], $_POST['ticketSelect'], $_POST['amount'])){
    $userID = $_POST['userID'];
    $ticketID = $_POST['ticketSelect'];
    $amount = $_POST['amount'];

    //Insert
    $order = db_insertData("INSERT INTO gc_festival.orders (userID, ticketID, amount)
                            VALUES ('$userID', '$ticketID', '$amount');");

    $newOrder = db_getData("SELECT * FROM orders INNER JOIN tickets ON orders.ticketID = tickets.id WHERE orders.id =" . $order);

}
?>

<div class="page orderConfirmation">
        <div class="container">
            <h1>Bedankt voor de bestelling!</h1>
            <table class="orderOverview" border="1">
                <tr>
                    <th>Ticket ID</th>
                    <th>Aantal</th>
                    <th>Prijs</th>
                </tr>
                <tr>
                    <?php
                    while ($orderData = $newOrder -> fetch_assoc()){
                        ?>
                        <td><?php echo $orderData['name']?></td>
                        <td><?php echo $orderData['amount']?></td>
                        <td><?php echo "€ " . $orderData['price']?></td>
                        <?php
                    }
                    ?>
                </tr>
            </table>
        </div>
    </div>
<?php require 'footer.php'?>