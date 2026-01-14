<?php
session_start();

$id = $_POST['id'] ?? null;

if ($id !== null && isset($_SESSION['cart'][$id])) {
    unset($_SESSION['cart'][$id]); // remove item
}

header("Location: cart.php");
exit;
