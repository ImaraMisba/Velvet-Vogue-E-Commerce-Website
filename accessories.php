<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Accessories | Velvet Vogue</title>
    <link rel="stylesheet" href="css/accessories.css">
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

        
        <a href="cart.php" class="icon-link" title="Cart">
            <img src="images/icon/cart.jpg" alt="Cart">
        </a>

        
        <a href="profile.php" class="icon-link" title="Profile">
            <img src="images/icon/pro.png" alt="Profile">
        </a>

    </div>
</header>

<!--  ACCESSORIES PAGE  -->
<section class="shop-container">

    <!-- SIDEBAR -->
    <aside class="filters">

        <h3>Categories</h3>

        <div class="category-list">
            <label><input type="checkbox"> Caps</label>
            <label><input type="checkbox"> Socks</label>
            <label><input type="checkbox"> Bags</label>
            <label><input type="checkbox"> Bottels</label>
            <label><input type="checkbox"> Jewelry</label>
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

            
            <div class="product-card">
                <div class="product-image">
                    <img src="images/products/acc1.webp" alt="Men’s Wrist Watch">
                </div>
                <h4>Men’s Wrist Watch</h4>
                <p class="price">LKR 6,500</p>

                <form method="POST" action="add_to_cart.php">
                    <input type="hidden" name="id" value="111">
                    <input type="hidden" name="name" value="Men’s Wrist Watch">
                    <input type="hidden" name="price" value="6500">
                    <input type="hidden" name="image" value="images/products/acc1.webp">
                    <button type="submit" class="add-to-cart">Add to Cart</button>
                </form>
            </div>

            
            <div class="product-card">
                <div class="product-image">
                    <img src="images/products/acc2.webp" alt="V-Neck Tee">
                </div>
                <h4>V-Neck Tee</h4>
                <p class="price">LKR 2,900</p>

                <form method="POST" action="add_to_cart.php">
                    <input type="hidden" name="id" value="112">
                    <input type="hidden" name="name" value="V-Neck Tee">
                    <input type="hidden" name="price" value="2900">
                    <input type="hidden" name="image" value="images/products/acc2.webp">
                    <button type="submit" class="add-to-cart">Add to Cart</button>
                </form>
            </div>

            
            <div class="product-card">
                <div class="product-image">
                    <img src="images/products/acc3.webp" alt="Earrings">
                </div>
                <h4>Earrings</h4>
                <p class="price">LKR 1,500</p>

                <form method="POST" action="add_to_cart.php">
                    <input type="hidden" name="id" value="113">
                    <input type="hidden" name="name" value="Earrings">
                    <input type="hidden" name="price" value="1500">
                    <input type="hidden" name="image" value="images/products/acc3.webp">
                    <button type="submit" class="add-to-cart">Add to Cart</button>
                </form>
            </div>

            
            <div class="product-card">
                <div class="product-image">
                    <img src="images/products/acc4.avif" alt="Men’s Wallet">
                </div>
                <h4>Men’s Wallet</h4>
                <p class="price">LKR 6,550</p>

                <form method="POST" action="add_to_cart.php">
                    <input type="hidden" name="id" value="114">
                    <input type="hidden" name="name" value="Men’s Wallet">
                    <input type="hidden" name="price" value="6550">
                    <input type="hidden" name="image" value="images/products/acc4.avif">
                    <button type="submit" class="add-to-cart">Add to Cart</button>
                </form>
            </div>

          
            <div class="product-card">
                <div class="product-image">
                    <img src="images/products/acc5.jpg" alt="Women Ring">
                </div>
                <h4>Women Rings</h4>
                <p class="price">LKR 1,900</p>

                <form method="POST" action="add_to_cart.php">
                    <input type="hidden" name="id" value="115">
                    <input type="hidden" name="name" value="Women Ring">
                    <input type="hidden" name="price" value="1900">
                    <input type="hidden" name="image" value="images/products/acc5.jpg">
                    <button type="submit" class="add-to-cart">Add to Cart</button>
                </form>
            </div>

            
            <div class="product-card">
                <div class="product-image">
                    <img src="images/products/acc6.jpg" alt="Fashion Bucket Hat">
                </div>
                <h4>Fashion Bucket Hat</h4>
                <p class="price">LKR 2,550</p>

                <form method="POST" action="add_to_cart.php">
                    <input type="hidden" name="id" value="116">
                    <input type="hidden" name="name" value="Fashion Bucket Hat">
                    <input type="hidden" name="price" value="2550">
                    <input type="hidden" name="image" value="images/products/acc6.jpg">
                    <button type="submit" class="add-to-cart">Add to Cart</button>
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
            <p>
                Luxury fashion for modern lifestyles.<br>
                Discover timeless style and confidence.
            </p>
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
