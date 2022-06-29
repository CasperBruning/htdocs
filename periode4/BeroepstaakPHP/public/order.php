<?php require_once ('header.php');

if (isset($_POST['submit'])){
    //haalt geselecteerde scooter uit de database
    $id = $_POST["id"];
    $db = new mysqli('localhost', 'root', '', 'garage_bromsnor');
    $results = $db->query("SELECT * FROM scooter WHERE id='$id'");
    $row = $results->fetch_assoc();
?>
<div class="orderContainer">
    <form action="../src/server.php" method="post">
        <input type="text" style="display: none" name="id" value="<?php echo $id?>">
        <h1>Geselecteerde Scooter: <?php echo $row['brand'] . " " . $row['model'] ?></h1>
        <label>Voornaam</label>
        <input class="field" type="text" name="firstName">
        <label>Achternaam</label>
        <input class="field" type="text" name="lastName">
        <label>Email</label>
        <input class="field" type="email" name="email">
        <label>Telefoon</label>
        <input class="field" type="text" name="phone">
        <label>Opmerking</label>
        <input class="field" type="tel" name="message">
        <input class="bestelKnop" type="submit" name="saveOrder" value="Order bevestigen">
    </form>
</div>

<?php } ?>

