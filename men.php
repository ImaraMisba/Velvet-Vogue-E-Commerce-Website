<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Men | Velvet Vogue</title>
    <link rel="stylesheet" href="css/men.css">
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

        
        <a href="cart.php" class="icon-link" title="Cart">
           <img src="images/icon/cart.jpg" alt="Cart">
        </a>

    
        <a href="profile.php" class="icon-link" title="Profile">
           <img src="images/icon/pro.png" alt="Profile">
        </a>
    </div>
</header>


<section class="shop-container">

    
    <aside class="filters">
        <h3>Categories</h3>

<div class="category-list">
    <label>
        <input type="checkbox">
        Shirts
    </label>

    <label>
        <input type="checkbox">
        Pants
    </label>

    <label>
        <input type="checkbox">
        Jackets
    </label>

    <label>
        <input type="checkbox">
        T-Shirts
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
            <p>Showing 1–6 of 48 products</p>
            <select>
                <option>Sort by</option>
                <option>Price: Low to High</option>
                <option>Price: High to Low</option>
            </select>
        </div>

        <div class="product-grid">

    
    <div class="product-card">
        <div class="product-image">
            <a href="ProductDetails.php">
                <img src="images/products/shirt1.webp" alt="Classic Oxford Shirt">
            </a>
        </div>
        <h4>Classic Oxford Shirt</h4>
        <p class="price">LKR 4,900</p>
        <form method="POST" action="add_to_cart.php">
            <input type="hidden" name="id" value="1">
            <input type="hidden" name="name" value="Classic Oxford Shirt">
            <input type="hidden" name="price" value="4900">
            <input type="hidden" name="image" value="images/products/shirt1.webp">
            <button type="submit">Add to Cart</button>
        </form>
    </div>

   
    <div class="product-card">
        <div class="product-image">
            <img src="images/products/slim.webp" alt="Slim Fit T-Shirt">
        </div>
        <h4>Slim Fit T-Shirt</h4>
        <p class="price">LKR 3,900</p>
        <form method="POST" action="add_to_cart.php">
            <input type="hidden" name="id" value="2">
            <input type="hidden" name="name" value="Slim Fit T-Shirt">
            <input type="hidden" name="price" value="3900">
            <input type="hidden" name="image" value="images/products/slim.webp">
            <button type="submit">Add to Cart</button>
        </form>
    </div>

    
    <div class="product-card">
        <div class="product-image">
            <img src="images/products/de.webp" alt="Denim Jacket">
        </div>
        <h4>Denim Jacket</h4>
        <p class="price">LKR 4,000</p>
        <form method="POST" action="add_to_cart.php">
            <input type="hidden" name="id" value="3">
            <input type="hidden" name="name" value="Denim Jacket">
            <input type="hidden" name="price" value="4000">
            <input type="hidden" name="image" value="images/products/de.webp">
            <button type="submit">Add to Cart</button>
        </form>
    </div>

   
    <div class="product-card">
        <div class="product-image">
            <img src="images/products/polo.avif" alt="Cotton Polo Shirt">
        </div>
        <h4>Cotton Polo Shirt</h4>
        <p class="price">LKR 4,550</p>
        <form method="POST" action="add_to_cart.php">
            <input type="hidden" name="id" value="4">
            <input type="hidden" name="name" value="Cotton Polo Shirt">
            <input type="hidden" name="price" value="4550">
            <input type="hidden" name="image" value="images/products/polo.avif">
            <button type="submit">Add to Cart</button>
        </form>
    </div>

    
    <div class="product-card">
        <div class="product-image">
            <img src="images/products/short.webp" alt="Casual Shorts">
        </div>
        <h4>Casual Shorts</h4>
        <p class="price">LKR 4,900</p>
        <form method="POST" action="add_to_cart.php">
            <input type="hidden" name="id" value="5">
            <input type="hidden" name="name" value="Casual Shorts">
            <input type="hidden" name="price" value="4900">
            <input type="hidden" name="image" value="images/products/short.webp">
            <button type="submit">Add to Cart</button>
        </form>
    </div>

   
    <div class="product-card">
        <div class="product-image">
            <img src="images/products/cargo.avif" alt="Cargo Pants">
        </div>
        <h4>Cargo Pants</h4>
        <p class="price">LKR 7,550</p>
        <form method="POST" action="add_to_cart.php">
            <input type="hidden" name="id" value="6">
            <input type="hidden" name="name" value="Cargo Pants">
            <input type="hidden" name="price" value="7550">
            <input type="hidden" name="image" value="images/products/cargo.avif">
            <button type="submit">Add to Cart</button>
        </form>
    </div>

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