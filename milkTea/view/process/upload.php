<?php
$file_name = $_FILES['img']['name'];
$file_tmp = $_FILES['img']['tmp_name'];
$file_type = $_FILES['img']['type'];

$file_ext = strtolower(end(explode('/', $_FILES['img']['type'])));

$ext = ["jpg", "png", "jpeg"];
if (in_array($file_ext, $ext)) {
    move_uploaded_file($file_tmp, "img/" . date("H:i:s") . $file_name);
}