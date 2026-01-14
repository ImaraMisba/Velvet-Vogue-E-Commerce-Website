<?php
session_start();

if (empty($_SESSION['cart'])) {
    header("Location: cart.php");
    exit;
}

$cart = $_SESSION['cart'];
$shipping = 500;
$subtotal = 0;

foreach ($cart as $item) {
    $subtotal += $item['price'] * $item['quantity'];
}

$total = $subtotal + $shipping;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Checkout | Velvet Vogue</title>
    <link rel="stylesheet" href="css/checkout.css">
</head>
<body>

<h2 class="page-title">Checkout</h2>

<div class="checkout-container">

    <!-- LEFT  -->
    <div class="checkout-form">

        <h3>Billing Details</h3>

        <form action="place_order.php" method="POST">

            <div class="form-row">
                <input type="text" name="first_name" placeholder="First Name" required>
                <input type="text" name="last_name" placeholder="Last Name" required>
            </div>

            <input type="email" name="email" placeholder="Email Address" required>

            <input type="text" name="phone" placeholder="Phone Number" required>

            <textarea name="address" placeholder="Delivery Address" required></textarea>

            <h3>Payment Method</h3>

            <label class="radio">
                <input type="radio" name="payment" checked>
                Cash on Delivery
            </label>

            <button type="submit" class="place-order-btn">
                Place Order
            </button>

        </form>

    </div>

    <!-- RIGHT -->
    <div class="checkout-summary">

        <h3>Order Summary</h3>

        <?php foreach ($cart as $item): ?>
            <div class="summary-item">
                <span>
                    <?= htmlspecialchars($item['name']); ?> × <?= $item['quantity']; ?>
                </span>
                <span>
                    LKR <?= number_format($item['price'] * $item['quantity']); ?>
                </span>
            </div>
        <?php endforeach; ?>

        <hr>

        <div class="summary-row">
            <span>Subtotal</span>
            <span>LKR <?= number_format($subtotal); ?></span>
        </div>

        <div class="summary-row">
            <span>Shipping</span>
            <span>LKR <?= number_format($shipping); ?></span>
        </div>

        <div class="summary-row total">
            <span>Total</span>
            <span>LKR <?= number_format($total); ?></span>
        </div>

    </div>

</div>

</body>
</html>
