<?php
$table = 'products';
$product = $manager->getValue($id);
if ($id !== null & $process == 'delete.php') {
    $manager->delete($id, $table);
    unlink("img/" . $product->getImg());
}