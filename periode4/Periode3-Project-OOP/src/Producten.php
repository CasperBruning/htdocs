<?php

class Producten
{
    public $productID;
    public $naam;
    public $typecomponent;
    public $merk;
    public $prijs;
    public $db;

    function __construct()
    {
        $this->db = new mysqli('localhost', 'root', '', 'computerDesignWebsitePHP');
    }
    public function getProduct($productID){
        $product = $this->db->query("SELECT * FROM producten WHERE id = " . $productID);
        if ($product->num_rows > 0){
            $productArray = $product -> fetch_array();
            $foundProduct = new User();

            $foundProduct->productID = $productArray['productID'];
            $foundProduct->naam = $productArray['naam'];
            $foundProduct->typecomponent = $productArray['typecomponent'];
            $foundProduct->merk = $productArray['merk'];
            $foundProduct->prijs = $productArray['prijs'];

            return $foundProduct;
        } else {
            return "No Product Found";
        }
    }

    function save(){
        $this->db->query("INSERT INTO producten (naam, typecomponent, merk, prijs) VALUES ('$this->naam', '$this->typecomponent', '$this->merk', '$this->merk', '$this->prijs')");
        return "Gebruiker is toegevoegd";
    }

    function update(){
        $this->db->query("UPDATE producten SET firstName='$this->naam', '$this->typecomponent', '$this->merk', '$this->merk', '$this->prijs' WHERE productID=$this->productID");
        return "Gebruiker is bijgewerkt";
    }

    function delete(){
        $this->db->query("DELETE FROM producten WHERE productID=$this->productID");
        return "Gebruiker is verwijderd";
    }
}