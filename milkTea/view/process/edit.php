<?php
$product=$manager->getValue($id);
if($_SERVER['REQUEST_METHOD']=="POST") {
    include_once "view/process/upload.php";
    $productName = $_POST['productName'];
    $price = $_POST['price'];
    $img = $_POST['img'];

    if ($id !== null & $process == null) {
        unlink('img/' . $product->getImg());
        $manager->edit($productName, $price, $img,$id);
    }
    header("location:index.php");
}

?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <form method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleInputEmail1"><h5>Tên trà sữa</h5></label>
                    <input type="text" class="form-control" name="productName" value="<?php echo $product->getProductName() ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1"><h5>Giá</h5></label>
                    <input type="number" class="form-control" name="price" value="<?php echo $product->getPrice()?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1"><h5>Ảnh</h5></label>
                    <div class="input-group mb-3">
                        <div class="custom-file">
                            <img src="img/<?php echo $product->getImg() ?>" style="width: 30px; height: 34px">
                            <input type="file"  name="img" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <a href="index.php?page=listProduct.php"><button class="btn btn-primary">Edit</button></a>
                </div>
            </form>
        </div>
    </div>
</div>
