<?php
include 'Producten.php';

if (isset($_POST['cancel'])){
    header('location: ../public/AdminOmgeving.php');
}

if (isset($_POST['save'])){
    $newProduct = new Producten();
    $newProduct->naam = $_POST['naam'];
    $newProduct->typecomponent = $_POST['typecomponent'];
    $newProduct->merk = $_POST['merk'];
    $newProduct->prijs = $_POST['prijs'];

    $newProduct->save();

    header("location: ../public/AdminOmgeving.php");
}

if (isset($_GET['del'])){
    $id = $_GET['del'];

    $product = new Producten();
    $product = $product->getProduct($id);
    $product->delete();

    header("location: ../public/AdminOmgeving.php");
}
if (isset($_POST['update'])){
    $id = $_POST['productID'];
    $product = new Producten();
    $product = $product->getProduct($id);

    $product->naam = $_POST['naam'];
    $product->typecomponent = $_POST['typecomponent'];
    $product->merk = $_POST['merk'];
    $product->prijs = $_POST['prijs'];

    $product->update();
    header('location: ../public/AdminOmgeving.php');
}