<?php

if($_SERVER['REQUEST_METHOD']=="POST"){
    include_once "upload.php";
    $productName=$_POST['productName'];
    $price=$_POST['price'];
    $img=date('H:i:s').$_FILES['img']['name'];
    $product=new Product($productName,$price,$img);
    $manager->add($product);

}
?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <form method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleInputEmail1"><h5>Tên trà sữa</h5></label>
                    <input type="text" class="form-control" name="productName">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1"><h5>Giá</h5></label>
                    <input type="number" class="form-control" name="price">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1"><h5>Ảnh</h5></label>
                    <div class="input-group mb-3">
                        <div class="custom-file">
                            <label class="custom-file-label" for="inputGroupFile03">Choose file</label>
                            <input type="file" class="custom-file-input" name="img">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <button class="btn btn-outline-info">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>
