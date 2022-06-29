<?php

class Scooter
{
    public $id;
    public $brand;
    public $model;
    public $price;
    public $mileage;
    public $scooterType;

    function __construct()
    {
        $this->db = new mysqli('localhost', 'root', '', 'garage_bromsnor');
    }

    public function getScooter($id){
        $scooter = $this->db->query("SELECT * FROM `scooter` WHERE id ='$id'");
        if ($scooter->num_rows > 0){
            $scooterArray = $scooter -> fetch_array();
            $foundScooter = new Scooter();

            $foundScooter->id = $scooterArray['id'];
            $foundScooter->brand = $scooterArray['brand'];
            $foundScooter->model = $scooterArray['model'];
            $foundScooter->price = $scooterArray['price'];
            $foundScooter->mileage = $scooterArray['mileage'];
            $foundScooter->scooterType = $scooterArray['scooterType'];

            return $scooterArray;
        } else {
            return "No Scooter Found";
        }
    }

    function save(){
        $this->db->query("INSERT INTO `scooter` (brand, model, price, mileage, scooterType) VALUES ('$this->brand', '$this->model', '$this->price', '$this->mileage', '$this->scooterType')");
        return "Scooter is toegevoegd";
    }

    function update(){
        $this->db->query("UPDATE `scooter` SET brand='$this->brand', model='$this->model', price='$this->price', mileage='$this->mileage', scooterType='$this->scooterType' WHERE id=$this->id");
        return "Scooter is bijgewerkt";
    }

    function delete($id){
        $this->db->query("DELETE FROM `scooter` WHERE id='$id'");
        return "Scooter is verwijderd";
    }
}