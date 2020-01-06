<?php
class Product
{
    public $id;
    public $productName;
    public $price;
    public $img;

    public function __construct($productName,$price,$img)
    {
        $this->productName=$productName;
        $this->price=$price;
        $this->img=$img;
    }

    /**
     * @return mixed
     */
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return mixed
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
}