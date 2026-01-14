<?php
session_start();

/* Clear cart */
unset($_SESSION['cart']);

echo "<h2>Order Placed Successfully!</h2>";
echo "<p>Thank you for shopping with Velvet Vogue.</p>";
echo "<a href='index.php'>Back to Home</a>";
