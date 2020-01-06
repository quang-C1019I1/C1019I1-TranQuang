<?php
include_once "view/process/deleteCart.php";
$listCart = $manager->getListCart();
?>

<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">STT</th>
        <th scope="col">Ảnh</th>
        <th scope="col">Tên trà sữa</th>
        <th scope="col">Giá</th>
        <td></td>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($listCart as $key => $cart) : ?>
        <tr>
            <th scope="row"><?php echo ++$key ?></th>
            <td><img src="img/<?php echo $cart->getImg() ?>" style="width: 40px; height: 48px"></td>
            <td><?php echo $cart->getProductName() ?></td>
            <td><?php echo $cart->getPrice()?></td>
            <td><a href="index.php?page=listCart.php&id=<?php echo $cart->getId() ?>"><button class="btn btn-danger">Delete</button></a></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
