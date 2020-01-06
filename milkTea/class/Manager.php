<?php


class Manager
{
    public $processDB;

    public function __construct()
    {
        $dsn = "mysql:host=localhost;dbname=MilkTea";
        $username = "quang";
        $password = "@Quang1997";
        $connect=new DBConnect($dsn,$username,$password);
        $this->processDB=new ProcessDB($connect->connect());
    }

    public function index()
    {

    }

    public function add($product)
    {
        $this->processDB->addProduct($product);
    }

    public function getListProduct()
    {
       return $this->processDB->getListProduct();
    }

    public function getListShop()
    {
        return $this->processDB->getListShop();
    }

    public function addCart($product)
    {
        $this->processDB->addCart($product);
    }

    public function getValue($id)
    {
        return $this->processDB->getValue($id);
    }

    public function getListCart()
    {
        return $this->processDB->getListCart();
    }

    public function delete($id,$table)
    {
        $this->processDB->delete($id,$table);
    }

    public function edit($productName,$price,$img,$id)
    {
        $this->processDB->edit($productName,$price,$img,$id);
    }
}