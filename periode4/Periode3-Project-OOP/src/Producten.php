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
        $product = $this->db->query("SELECT * FROM producten WHERE productID = " . $productID);
        if ($product->num_rows > 0){
            $productArray = $product -> fetch_array();
            $foundProduct = new Producten();

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
        $this->db->query("INSERT INTO producten (naam, typecomponent, merk, prijs) VALUES ('$this->naam', '$this->typecomponent', '$this->merk', '$this->prijs')");
        return "Product is toegevoegd";
    }

    function update(){
        $this->db->query("UPDATE producten SET naam='$this->naam', typecomponent='$this->typecomponent', merk='$this->merk', prijs='$this->prijs' WHERE productID=$this->productID");
        return "Product is bijgewerkt";
    }

    function delete(){
        $this->db->query("DELETE FROM producten WHERE productID=$this->productID");
        return "Product is verwijderd";
    }
}