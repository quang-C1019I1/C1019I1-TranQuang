<?php


class ProcessDB
{
    public $conn;

    public function __construct($connect)
    {
        $this->conn=$connect;
    }

    public function addProduct($product)
    {
        $productName=$product->getProductName();
        $price=$product->getPrice();
        $imgProduct=$product->getImg();

        $sql="INSERT INTO products (productName,price,imgProduct) VALUE (?,?,?)";

        $stmt = $this->conn->prepare($sql);

        $stmt->bindParam(1,$productName);
        $stmt->bindParam(2,$price);
        $stmt->bindParam(3,$imgProduct);
        $stmt->execute();
    }

    public function getListProduct()
    {
        $sql="SELECT * FROM products";
        $stmt=$this->conn->query($sql);
        $result=$stmt->fetchALl();
        $arr=[];
        foreach ($result as $item){
            $product=new Product($item['productName'],$item['price'],$item['imgProduct']);
            array_push($arr,$product);
            $product->setId($item['id']);
        }
        return $arr;
    }

    public function getListShop()
    {
        $sql="SELECT shopName FROM shopMilkTea";
        $stmt=$this->conn->query($sql);
        $result=$stmt->fetchALl();
        $arr=[];
        foreach ($result as $item){
            $product=new Shop($item['shopName']);
            array_push($arr,$product);
        }
        return $arr;
    }

    public function getListCart()
    {
        $sql="SELECT * FROM cart";
        $stmt=$this->conn->query($sql);
        $result=$stmt->fetchALl();
        $arr=[];
        foreach ($result as $item){
            $cart=new Cart($item['productName'],$item['price'],$item['imgProduct']);
            array_push($arr,$cart);
            $cart->setId($item['id']);
        }
        return $arr;
    }

    public function addCart($product)
    {
        $productName=$product->getProductName();
        $price=$product->getPrice();
        $imgProduct=$product->getImg();

        $sql="INSERT INTO cart (productName,price,imgProduct) VALUE (?,?,?)";
        $stmt = $this->conn->prepare($sql);

        $stmt->bindParam(1,$productName);
        $stmt->bindParam(2,$price);
        $stmt->bindParam(3,$imgProduct);
        $stmt->execute();
        echo'<script> alert("Thêm thành công") </script>';
    }

    public function delete($id,$table)
    {
        $sql = "DELETE FROM $table WHERE id='$id'";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
    }
    public function edit($productName,$price,$img,$id)
    {
        $sql = "UPDATE products SET productName= '$productName', price = '$price',imgProduct='$img' WHERE id=$id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
    }

    public function getValue($id)
    {
        $spl = "SELECT productName,price,imgProduct FROM products  WHERE id='$id'";
        $stmt = $this->conn->prepare($spl);
        $stmt->execute();
        $result = $stmt->fetchAll();
        $product = new Product($result[0]['productName'], $result[0]['price'],$result[0]['imgProduct']);
        return $product;
    }
}