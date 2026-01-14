<?php
session_start();
$cartCount = 0;

if (!empty($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $item) {
        $cartCount += $item['quantity'];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Velvet Vogue | Home</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- HEADER -->
<header class="header">
    
    <div class="logo">
        <img src="images/logo.png" alt="Velvet Vogue Logo">
        <span class="logo-text">Velvet Vogue</span>
    </div>

    <!-- NAVIGATION -->
    <nav class="nav">
        <a href="index.php">Home</a>
        <a href="men.php">Men</a>
        <a href="women.php">Women</a>
        <a href="accessories.php">Accessories</a>
    </nav>

 
    <div class="header-actions">
        <div class="search-box">
            <input type="text" placeholder="Search products">
        </div>

        <a href="login.php" class="btn-outline">Login</a>
        <a href="register.php" class="btn-dark">Sign Up</a>

         
        <a href="cart.php" class="icon-link cart-icon">
           <img src="images/icon/cart.jpg" alt="Cart">
           <span class="cart-badge"><?= $cartCount ?></span>
        </a>


    <a href="profile.php" class="icon-link" title="Profile">
        <img src="images/icon/pro.png" alt="Profile">
    </a>
    </div>
</header>


<!-- HERO SECTION -->
<section class="hero">
    <div class="hero-text">
        <h1>New Season<br>Collection</h1>
        <p>Discover the latest trends in fashion with our curated selection</p>
        <a href="men.php" class="btn-dark">Shop Now</a>
    </div>

    <div class="hero-image">
        <img src="images/products/logo 123.jpg" alt="New Season Collection">
    </div>
</section>

<!-- CATEGORIES -->
<section class="categories">
    <h2>Shop by Category</h2>

    <div class="category-grid">

        <div class="category-card">
            <div class="category-image">
                <a href="men.php"><img src="images/men1.png" alt="Men Clothing"></a>
            </div>
            <p>Men</p>
        </div>

        <div class="category-card">
            <div class="category-image">
                <a href="women.php"><img src="images/women.jpg" alt="Women Clothing"></a>
            </div>
            <p>Women</p>
        </div>

        <div class="category-card">
            <div class="category-image">
                <a href="accessories.php"><img src="images/acc.png" alt="Accessories"></a>
            </div>
            <p>Accessories</p>
        </div>

    </div>
</section>

<!-- FEATURED PRODUCTS -->
<section class="featured">
    <div class="featured-header">
        <h2>Featured Products</h2>
        <a href="#">View All →</a>
    </div>

    <div class="product-grid">

        <div class="product-card">
            <div class="product-image">
                <img src="images/products/tsh.jpg" alt="Casual Vibe Crew T-Shirt">
            </div>
            <h3>Casual Vibe Crew T-Shirt</h3>
            <p>Clean Refined Look</p>
            <span>LKR 5,500</span>
            <button>Add to Cart</button>
        </div>

        <div class="product-card">
            <div class="product-image">
                <img src="images/products/frock.jpg" alt="Blossom Charm Dress">
            </div>
            <h3>Blossom Charm Dress</h3>
            <p>Delicate Feminine Charm</p>
            <span>LKR 4,500</span>
            <button>Add to Cart</button>
        </div>

        <div class="product-card">
            <div class="product-image">
                <img src="images/products/bag.jpg" alt="Leather Handbag">
            </div>
            <h3>Leather Handbag</h3>
            <p>Timeless Design</p>
            <span>LKR 4,950</span>
            <button>Add to Cart</button>
        </div>

        <div class="product-card">
            <div class="product-image">
                <img src="images/products/coat.webp" alt="Wool Coat">
            </div>
            <h3>Wool Coat</h3>
            <p>Winter Essential</p>
            <span>LKR 10,500</span>
            <button>Add to Cart</button>
        </div>

    </div>
</section>

<!-- FEATURED PRODUCTS -->
<section class="featured">
    <div class="featured-header">
        <h2>New Arrivals</h2>
        <a href="#">View All →</a>
    </div>

    <div class="product-grid">

        <div class="product-card">
            <div class="product-image">
                <img src="images/products/new1.webp" alt="Shirt Collar Casual Blouse">
            </div>
            <h3>Shirt Collar Casual Blouse</h3>
            <span>LKR 4,500</span>
            <button>Add to Cart</button>
        </div>

        <div class="product-card">
            <div class="product-image">
                <img src="images/products/new3.webp" alt="Printed Embroidery T-Shirt">
            </div>
            <h3>Printed Embroidery T-Shirt</h3>
            <span>LKR 3,500</span>
            <button>Add to Cart</button>
        </div>

        <div class="product-card">
            <div class="product-image">
                <img src="images/products/new2.webp" alt="Regular Fit Casual Shirt">
            </div>
            <h3>Regular Fit Casual Shirt</h3>
            <span>LKR 4,950</span>
            <button>Add to Cart</button>
        </div>

        <div class="product-card">
            <div class="product-image">
                <img src="images/products/new4.webp" alt="Shirt Collar Denim Jacket">
            </div>
            <h3>Shirt Collar Denim Jacket</h3>
            <span>LKR 4,500</span>
            <button>Add to Cart</button>
        </div>

    </div>
</section>





<!-- FOOTER -->
<footer class="footer">
    <div class="footer-container">

        <div class="footer-column">
            <h4>Velvet Vogue</h4>
            <p>Luxury fashion for modern lifestyles.  
               Discover timeless style and confidence.</p>
        </div>

        <div class="footer-column">
            <h4>Customer Service</h4>
            <ul>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Shipping & Delivery</a></li>
                <li><a href="#">Returns & Exchanges</a></li>
                <li><a href="#">FAQs</a></li>
            </ul>
        </div>

        <div class="footer-column">
            <h4>About</h4>
            <ul>
                <li><a href="#">Our Story</a></li>
                <li><a href="#">Sustainability</a></li>
                <li><a href="#">Careers</a></li>
                <li><a href="#">Affiliates</a></li>
            </ul>
        </div>


    </div>

    <div class="footer-bottom">
        <p>© 2026 Velvet Vogue. All rights reserved.</p>
    </div>
</footer>


</body>

<script>
let cart = JSON.parse(localStorage.getItem("cart")) || {};
let count = 0;

for (let id in cart) {
    count += cart[id].quantity;
}

document.getElementById("cartCount").innerText = count;
</script>


</html>
