<?php
include_once ('header.php');
$username ='';
$password ='';
$logIn = false;

if (isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $db = new mysqli('localhost', 'root', '', 'garage_bromsnor');
    $results = $db->query("SELECT * FROM admin WHERE username='$username' AND password='$password'");
    if ($results->fetch_row() > 0){
        $logIn = true;
    }
}
if ($logIn == true)
{
?>
    <a href="adminOrders.php">orders</a>
    <a href="adminScooters.php">scooters</a>
<?php
} else {
?>
<div class="adminloginContainer">
    <form method="post" action="#">
        <h1>Admin Login</h1>
        <label>Username</label>
        <input class="field" type="text" name="username">
        <label>Password</label>
        <input class="field" type="password" name="password">
        <input class="bestelKnop" type="submit" name="submit" value="Login">
    </form>
</div>
<?php }
