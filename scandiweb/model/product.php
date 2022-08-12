<?php
include_once 'DbConfig.php';
abstract class Product
{
    private $sku;
    private $name;
    private $price;
    private $type;
	private $db;

    public function __construct()
    {
       $this->db=$connection;
    }

    public function getSKU()
    {
        return $this->sku;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setSKU($sku)
    {
        $this->sku = $sku;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function setType($type)
    {
        $this->type = $type;
    }
    
    abstract function getAttribute();
    abstract function setAttribute();
}
