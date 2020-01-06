<?php


class Shop
{
    public $shopName;

    public function __construct($shopName)
    {
        $this->shopName=$shopName;
    }

    /**
     * @return mixed
     */
    public function getShopName()
    {
        return $this->shopName;
    }
}