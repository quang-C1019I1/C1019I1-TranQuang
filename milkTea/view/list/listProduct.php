<?php
include_once "view/process/delete.php";
if($id!==null & empty($process)){
    $productId = $manager->getValue($id);
    $manager->addCart($productId);
}
$products = $manager->getListProduct();
?>
<ul class="nav">
    <li class="nav-item">
        <a class="nav-link active" href="index.php?page=add.php">Add</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="index.php?page=listProduct.php&process=edit.php">Edit</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="index.php?page=listProduct.php&process=delete.php">Delete</a>
    </li>
</ul>

<?php foreach ($products as $product) : ?>
    <div style="float: left; margin: 15px">
        <img src="img/<?php echo $product->getImg() ?> ">
        <table style="text-align: left; width: 209px;">
            <tr>
                <th>Tên trà sữa:</th>
                <td style="text-align: center"><?php echo $product->getProductName() ?></td>
            </tr>
            <tr>
                <th>Giá:</th>
                <td style="text-align: center"><?php echo $product->getPrice() ?></td>
            </tr>
            <tr>
                <td>
                    <a href="index.php?page=listProduct.php&id=<?php echo $product->getId() ?>">
                        <button class="btn btn-outline-primary">Thêm giỏ hàng</button>
                    </a>
                </td>
                <td>
                    <?php if($page=='listProduct.php'&$process=='delete.php') : ?>
                        <a href="index.php?page=listProduct.php&process=delete.php&id=<?php echo $product->getId();?>"><button class="btn btn-danger">Delete</button></a>
                    <?php endif; ?>
                    <?php if($page=='listProduct.php'&$process=='edit.php') : ?>
                        <a href="index.php?page=edit.php&id=<?php echo $product->getId();?>"><button class="btn btn-primary">Edit</button></a>
                    <?php endif; ?>
                </td>
            </tr>
        </table>
    </div>
<?php endforeach; ?>

