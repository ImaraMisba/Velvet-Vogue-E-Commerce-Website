<?php
session_start();

if (isset($_POST['id'], $_POST['action'])) {
    $id = $_POST['id'];

    if (isset($_SESSION['cart'][$id])) {

        if ($_POST['action'] === 'increase') {
            $_SESSION['cart'][$id]['quantity']++;
        }

        if ($_POST['action'] === 'decrease') {
            if ($_SESSION['cart'][$id]['quantity'] > 1) {
                $_SESSION['cart'][$id]['quantity']--;
            }
        }
    }
}

header("Location: cart.php");
exit;
