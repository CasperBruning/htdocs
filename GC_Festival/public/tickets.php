<?php require 'header.php';
       require '../src/userFunctions.php'; ?>
<?php
$tickets = db_getData("SELECT * FROM tickets");
// Check users login
$user = null;
if(isset($_POST['login'])){
    $user = getUser($_POST['email'], $_POST['password']);
}
?>

<div class="page tickets">
        <div class="container">
            <h1>Tickets bestellen</h1>
            <div class="ticketList">
                <?php if ($user !== "No user found" && $user !== null){?>
                    <form action="orderConfirmation.php" method="post">
                        <table>
                            <tr>
                                <?php
                                while($userdata = $user->fetch_assoc()) { ?>
                                    <td><label for="userID">Gebruikers ID</label></td>
                                    <td><input readonly type="number" name="userID" value="<?php echo $userdata['id']; ?>"></td>
                                    <?php
                                }
                                ?>
                            </tr>
                            <tr>
                                <td><label for="ticketSelect">Tickets</label></td>
                                <td><select name="ticketSelect">
                                        <?php
                                        while ($ticket = $tickets->fetch_assoc()){
                                            ?>
                                            <option value="<?php echo $ticket['id'];?>"><?php echo $ticket['name'];?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><label for="amount">Hoeveelheid</label></td>
                                <td><input type="number" name="amount"></td>
                            </tr>
                            <tr>
                                <td><input type="submit" name="order" value="Bestellen"></td>
                            </tr>
                        </table>
                    </form>
                <?php }else{?>
                    <form action="#" method="post">
                        <table>
                            <tr>
                                <td><label for="email">Email</label></td>
                                <td><input type="email" name="email"></td>
                            </tr>
                            <tr>
                                <td><label for="password">Wachtwoord</label></td>
                                <td><input type="password" name="password"></td>
                            </tr>
                            <tr>
                                <td><input type="submit" name="login" value="Login"></td>
                            </tr>
                        </table>
                    </form>
                <?php }?>
            </div>
        </div>
</div>
<?php require 'footer.php'?>