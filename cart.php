<?php
session_start();
$cart = $_SESSION['cart'] ?? [];

$subtotal = 0;
$shipping = 500; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shopping Cart | Velvet Vogue</title>
    <link rel="stylesheet" href="css/cart.css">
</head>
<body>

<h2 class="page-title">Shopping Cart</h2>

<div class="cart-container">

    <!-- LEFT -->
    <div class="cart-items">

        <?php if (empty($cart)) : ?>
            <p class="empty-cart">Your cart is empty.</p>
        <?php else : ?>

            <?php foreach ($cart as $id => $item) :
                $quantity  = $item['quantity'] ?? 1;
                $itemTotal = $item['price'] * $quantity;
                $subtotal += $itemTotal;
            ?>

            <div class="cart-item">

                <!-- REMOVE BUTTON -->
                <form action="remove_from_cart.php" method="POST" class="remove-form">
                    <input type="hidden" name="id" value="<?= $id; ?>">
                    <button type="submit" class="remove-btn">✖</button>
                </form>

                
                <img src="<?= htmlspecialchars($item['image']); ?>" 
                     alt="<?= htmlspecialchars($item['name']); ?>">

                
                <div class="item-info">
                    <h4><?= htmlspecialchars($item['name']); ?></h4>
                    <p class="unit-price">LKR <?= number_format($item['price']); ?></p>

                    <!-- QUANTITY CONTROLS -->
                    <div class="quantity-controls">

                        <form action="update_quantity.php" method="POST" class="qty-form">
                            <input type="hidden" name="id" value="<?= $id; ?>">
                            <input type="hidden" name="action" value="decrease">
                            <button type="submit" class="qty-btn">−</button>
                        </form>

                        <span class="qty-number"><?= $quantity; ?></span>

                        <form action="update_quantity.php" method="POST" class="qty-form">
                            <input type="hidden" name="id" value="<?= $id; ?>">
                            <input type="hidden" name="action" value="increase">
                            <button type="submit" class="qty-btn">+</button>
                        </form>

                    </div>
                </div>

                <!-- ITEM TOTAL -->
                <div class="item-price">
                    LKR <?= number_format($itemTotal); ?>
                </div>

            </div>

            <?php endforeach; ?>
        <?php endif; ?>

        <a href="men.php" class="continue">← Continue Shopping</a>
    </div>

    <!-- RIGHT -->
    <div class="order-summary">
        <h3>Order Summary</h3>

        <div class="summary-row">
            <span>Subtotal</span>
            <span>LKR <?= number_format($subtotal); ?></span>
        </div>

        <div class="summary-row">
            <span>Shipping</span>
            <span>LKR <?= number_format($shipping); ?></span>
        </div>

        <hr>

        <div class="summary-row total">
            <span>Total</span>
            <span>LKR <?= number_format($subtotal + $shipping); ?></span>
        </div>
           <a href="checkout.php" class="checkout-btn <?= empty($cart) ? 'disabled' : ''; ?>">
              Proceed to Checkout
           </a>
    </div>

</div>

</body>
</html>
