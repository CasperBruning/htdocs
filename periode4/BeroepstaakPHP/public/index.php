<?php
require_once ('header.php');

//getAllScooters
$db = new mysqli('localhost', 'root', '', 'garage_bromsnor');
$results = $db->query("SELECT * FROM scooter");
?>
<!--scooter lijst-->
<div class="scooterContainer">
<?php
while ($row = $results->fetch_assoc()) {?>
    <div class="scooter">
        <form action="order.php" method="post">
            <h2><?php echo $row['brand']?></h2>
            <p class="model">Model: <?php echo $row['model']?></p>
            <p class="kilometerstand">Kilometerstand: <?php echo $row['mileage']?> km</p>
            <p class="type">type: <?php if ($row['scooterType'] == "1"){ echo "Brommer";} else { echo "Scooter";}?></p>
            <p class="prijs">Prijs <?php echo $row['price']?> euro</p>
            <input name="id" style="display: none" type="text" value="<?php echo $row['id']?>">
            <input class="bestelKnop" name="submit" type="submit" value="bestel Scooter">
        </form>
    </div>
    <?php }?>


</div>

