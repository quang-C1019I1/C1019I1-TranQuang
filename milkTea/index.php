<?php
include_once "class/Product.php";
include_once "class/Cart.php";
include_once "class/Shop.php";
include_once "class/Manager.php";
include_once "database/DBConnect.php";
include_once "database/ProcessDB.php";
include_once "view/list/listShop.php";
$manager = new Manager();
$page = isset($_GET['page']) ? $_GET['page'] : null;
$process=$_GET['process'];
$id=$_GET['id'];




?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<?php include_once "view/navas/nava.php"?>
<div class="container">

    <div class="row">
        <div class="col-3" style="background-color: #ececf6;">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="#"><h3>Milk Tea Store</h3></a>
                </li>
                <?php foreach ($shops as $shop): ?>
                <li class="nav-item">
                    <a class="nav-link" href="#"><?php echo $shop->getShopName();?></a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="col-9" style="background-color: #e2e6ea;">
            <div class="col-11 container">

                <?php
                switch ($page) {
                    case "add.php":
                        include_once "view/process/add.php";
                        break;
                    case "listProduct.php":
                        include_once "view/list/listProduct.php";
                        break;
                    case "listCart.php":
                        include_once "view/list/listCart.php";
                        break;
                    case "deleteCart.php":
                        include_once "view/process/deleteCart.php";
                        break;
                    case "edit.php":
                        include_once "view/process/edit.php";
                        break;
                    default:
                        include_once "view/list/listProduct.php";
                }
                ?>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>
</html>
