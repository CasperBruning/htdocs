<?php

class Order
{
    public $id;
    public $scooterID;
    public $firstName;
    public $lastName;
    public $email;
    public $phone;
    public $message;
    public $orderStatus;

    function __construct()
    {
        $this->db = new mysqli('localhost', 'root', '', 'garage_bromsnor');
    }

    public function getOrder($id){
        $order = $this->db->query("SELECT * FROM `order` WHERE id ='$id'");
        if ($order->num_rows > 0){
            $orderArray = $order -> fetch_array();
            $foundOrder = new Order();

            $foundOrder->id = $orderArray['id'];
            $foundOrder->scooterID = $orderArray['scooterID'];
            $foundOrder->firstName = $orderArray['firstName'];
            $foundOrder->lastName = $orderArray['lastName'];
            $foundOrder->email = $orderArray['email'];
            $foundOrder->phone = $orderArray['phone'];
            $foundOrder->message = $orderArray['message'];
            $foundOrder->orderStatus = $orderArray['orderStatus'];


            return $orderArray;
        } else {
            return "No Order Found";
        }
    }

    function save(){
        $this->db->query("INSERT INTO `order`(`scooterID`, `firstName`, `lastName`, `email`, `phone`, `message`, `orderStatus`) VALUES (1,'$this->firstName','$this->lastName','$this->email','$this->phone','$this->message','$this->orderStatus'); ");
        return "Order is toegevoegd";
    }

    function update(){
        $this->db->query("UPDATE `order` SET `scooterID`='$this->scooterID',`firstName`='$this->firstName',`lastName`='$this->lastName',`email`='$this->email',`phone`='$this->phone',`message`='$this->message',`orderStatus`='$this->orderStatus' WHERE `id`='$this->id'");
        return "Order is bijgewerkt";
    }

    function delete($id){
        $this->db->query("DELETE FROM `order` WHERE id ='$id' ");
        return "Order is verwijderd";
    }
}