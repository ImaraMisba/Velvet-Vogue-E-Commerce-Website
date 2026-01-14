<?php
session_start();


if (
    !isset($_POST['id'], $_POST['name'], $_POST['price'], $_POST['image'])
) {
    header("Location: men.php");
    exit;
}

$id    = (int) $_POST['id'];
$name  = $_POST['name'];
$price = (int) $_POST['price'];
$image = $_POST['image'];


if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// increase quantity
if (isset($_SESSION['cart'][$id])) {
    $_SESSION['cart'][$id]['quantity'] += 1;
} else {
    // Add new product
    $_SESSION['cart'][$id] = [
        'id'       => $id,
        'name'     => $name,
        'price'    => $price,
        'image'    => $image,
        'quantity' => 1
    ];
}


header("Location: cart.php");
exit;
