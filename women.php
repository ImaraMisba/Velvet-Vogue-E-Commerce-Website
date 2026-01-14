<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Women | Velvet Vogue</title>
    <link rel="stylesheet" href="css/women.css">
</head>
<body>
    <!-- HEADER -->
<header class="header">
    <!-- LOGO -->
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

         <!-- Cart Icon -->
    <a href="cart.php" class="icon-link" title="Cart">
        <img src="images/icon/cart.jpg" alt="Cart">
    </a>

    <!-- Profile Icon -->
    <a href="profile.php" class="icon-link" title="Profile">
        <img src="images/icon/pro.png" alt="Profile">
    </a>
    </div>
</header>


<section class="shop-container">

    <!-- SIDEBAR FILTERS -->
    <aside class="filters">
        <h3>Categories</h3>

<div class="category-list">
    <label>
        <input type="checkbox">
        T-Shirts
    </label>

    <label>
        <input type="checkbox">
        Frocks
    </label>

    <label>
        <input type="checkbox">
        Blouses
    </label>

    <label>
        <input type="checkbox">
        Women Pants
    </label>

    <label>
        <input type="checkbox">
        Shorts
    </label>
</div>


        <h3>Size</h3>
        <div class="size-grid">
            <span>XS</span>
            <span>S</span>
            <span>M</span>
            <span>L</span>
            <span>XL</span>
            <span>XXL</span>
        </div>

        
       <h3>Price Range</h3>

<label class="filter-label">Price (LKR)</label>

<div class="price-inputs">
    <input type="number" placeholder="Min">
    <input type="number" placeholder="Max">
</div>

        <button class="btn-dark full-width">Apply Filters</button>
    </aside>

    <!-- PRODUCTS -->
    <div class="products-section">

        <div class="products-header">
            <p>Showing 1–12 of 48 products</p>
            <select>
                <option>Sort by</option>
                <option>Price: Low to High</option>
                <option>Price: High to Low</option>
            </select>
        </div>

        <div class="product-grid">

            <!-- PRODUCT CARD -->
<div class="product-card">
    <div class="product-image">
        <img src="images/products/women1.webp" alt="Casual Day Dress">
    </div>
    <h4>Casual Day Dress</h4>
    <p class="price">LKR 3,500</p>

    <form method="POST" action="add_to_cart.php">
        <input type="hidden" name="id" value="101">
        <input type="hidden" name="name" value="Casual Day Dress">
        <input type="hidden" name="price" value="3500">
        <input type="hidden" name="image" value="images/products/women1.webp">
        <button type="submit" class="add-to-cart">Add to Cart</button>
    </form>
</div>

<div class="product-card">
    <div class="product-image">
        <img src="images/products/women2.jpg" alt="V-Neck Tee">
    </div>
    <h4>V-Neck Tee</h4>
    <p class="price">LKR 2,900</p>

    <form method="POST" action="add_to_cart.php">
        <input type="hidden" name="id" value="102">
        <input type="hidden" name="name" value="V-Neck Tee">
        <input type="hidden" name="price" value="2900">
        <input type="hidden" name="image" value="images/products/women2.jpg">
        <button type="submit" class="add-to-cart">Add to Cart</button>
    </form>
</div>


<div class="product-card">
    <div class="product-image">
        <img src="images/products/skirt.jpg" alt="Skirt">
    </div>
    <h4>Skirt</h4>
    <p class="price">LKR 4,000</p>

    <form method="POST" action="add_to_cart.php">
        <input type="hidden" name="id" value="103">
        <input type="hidden" name="name" value="Skirt">
        <input type="hidden" name="price" value="4000">
        <input type="hidden" name="image" value="images/products/skirt.jpg">
        <button type="submit" class="add-to-cart">Add to Cart</button>
    </form>
</div>


<div class="product-card">
    <div class="product-image">
        <img src="images/products/women3.avif" alt="Elegant Evening Dress">
    </div>
    <h4>Elegant Evening Dress</h4>
    <p class="price">LKR 6,550</p>

    <form method="POST" action="add_to_cart.php">
        <input type="hidden" name="id" value="104">
        <input type="hidden" name="name" value="Elegant Evening Dress">
        <input type="hidden" name="price" value="6550">
        <input type="hidden" name="image" value="images/products/women3.avif">
        <button type="submit" class="add-to-cart">Add to Cart</button>
    </form>
</div>


<div class="product-card">
    <div class="product-image">
        <img src="images/products/women4.jpg" alt="Office Wear Dress">
    </div>
    <h4>Office Wear Dress</h4>
    <p class="price">LKR 4,900</p>

    <form method="POST" action="add_to_cart.php">
        <input type="hidden" name="id" value="105">
        <input type="hidden" name="name" value="Office Wear Dress">
        <input type="hidden" name="price" value="4900">
        <input type="hidden" name="image" value="images/products/women4.jpg">
        <button type="submit" class="add-to-cart">Add to Cart</button>
    </form>
</div>

<div class="product-card">
    <div class="product-image">
        <img src="images/products/women5.jpg" alt="Women Pants">
    </div>
    <h4>Women Pants</h4>
    <p class="price">LKR 3,550</p>

    <form method="POST" action="add_to_cart.php">
        <input type="hidden" name="id" value="106">
        <input type="hidden" name="name" value="Women Pants">
        <input type="hidden" name="price" value="3550">
        <input type="hidden" name="image" value="images/products/women5.jpg">
        <button type="submit" class="add-to-cart">Add to Cart</button>
    </form>
</div>


         <!-- PAGINATION -->
        <div class="pagination">
            <span>‹</span>
            <span class="active">1</span>
            <span>2</span>
            <span>3</span>
            <span>4</span>
            <span>›</span>
        </div>

    </div>
</section>

<!-- FOOTER  -->
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
</html>