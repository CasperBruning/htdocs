<?php
include "User.php";

$user = new User();
session_start();
$db = $user->db_Connect();

// initialize variables
$firstName = "";
$lastName = "";
$email = "";
$password = "";
$id = 0;
$update = false;

if (isset($_POST['save'])) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $user->save($firstName, $lastName, $email, $password);

}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $user->update($id, $firstName, $lastName, $email, $password);
}

if (isset($_GET['del'])) {
    $id = $_GET['del'];

    $user->delete($id);
}