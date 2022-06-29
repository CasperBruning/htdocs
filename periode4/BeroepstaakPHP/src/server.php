<?php
require_once ('Scooter.php');
require_once ('Order.php');

//slaat order van klant op
if (isset($_POST['saveOrder'])){
    $newOrder = new Order();

    $newOrder->scooterID = $_POST['id'];
    $newOrder->firstName = $_POST['firstName'];
    $newOrder->lastName = $_POST['lastName'];
    $newOrder->email = $_POST['email'];
    $newOrder->phone = $_POST['phone'];
    $newOrder->message = $_POST['message'];
    $newOrder->orderStatus = 1;

    $newOrder->save();

    header('location: ../public/index.php');
}
//slaat order op van admin
if (isset($_POST['saveOrderAdmin'])){
    $newOrder = new Order();

    $newOrder->scooterID = $_POST['id'];
    $newOrder->firstName = $_POST['firstName'];
    $newOrder->lastName = $_POST['lastName'];
    $newOrder->email = $_POST['email'];
    $newOrder->phone = $_POST['phone'];
    $newOrder->message = $_POST['message'];
    $newOrder->orderStatus = $_POST['orderStatus'];

    $newOrder->save();

    header('location: ../public/adminOrders.php');
}
//delete order
if (isset($_GET['delO'])){
    $id = $_GET['delO'];

    $order = new Order();

    $order = $order->delete($id);
    header('location: ../public/adminOrders.php');
}

//cancelt de Edit van de orders
if (isset($_POST['cancelO'])){
    header('location: ../public/adminOrders.php');
}

//update order
if (isset($_POST['updateO'])){
    $id = $_POST['id'];
    $order = new Order();
    $orders = $order->getOrder($id);

    $order->scooterID = $_POST['scooterID'];
    $order->firstName = $_POST['firstName'];
    $order->lastName = $_POST['lastName'];
    $order->email = $_POST['email'];
    $order->phone = $_POST['phone'];
    $order->message = $_POST['message'];
    $order->orderStatus = $_POST['orderStatus'];

    $orders = $order->update();
    header('location: ../public/adminOrders.php');
}

//update Scooter
if (isset($_POST['updateS'])){
    $id = $_POST['id'];
    $scooter = new Scooter();
    $scooters = $scooter->getScooter($id);

    $scooter->id = $_POST['id'];
    $scooter->brand = $_POST['brand'];
    $scooter->model = $_POST['model'];
    $scooter->price = $_POST['price'];
    $scooter->mileage = $_POST['mileage'];
    $scooter->scooterType = $_POST['scooterType'];

    $scooters = $scooter->update();
    header('location: ../public/adminScooters.php');
}

//cancelt de Edit van de Scooters
if (isset($_POST['cancelS'])){
    header('location: ../public/adminScooters.php');
}

//Delete scooter
if (isset($_GET['delS'])){
    $id = $_GET['delS'];

    $scooter = new Scooter();

    $scooter = $scooter->delete($id);
    header('location: ../public/adminScooters.php');
}
//slaat scooter op
if (isset($_POST['saveScooter'])){
    $newScooter = new Scooter();

    $newScooter->id = $_POST['id'];
    $newScooter->brand = $_POST['brand'];
    $newScooter->model = $_POST['model'];
    $newScooter->price = $_POST['price'];
    $newScooter->mileage = $_POST['mileage'];
    $newScooter->scooterType = $_POST['scooterType'];

    $newScooter->save();

    header('location: ../public/adminScooters.php');
}