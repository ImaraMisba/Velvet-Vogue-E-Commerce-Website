<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Classic Oxford Shirt | Velvet Vogue</title>
    <link rel="stylesheet" href="css/ProductDetails.css">
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

<!-- PRODUCT DETAILS -->

<section class="product-details">

    <div class="product-details-container">
       
       <div class="product-gallery">
           <div class="main-image">
               <img id="mainProductImage" src="images/products/shirt1.webp" alt="Classic Oxford Shirt">
           </div>

           <div class="thumbnail-row">
              <img src="images/products/shirt1.webp" class="thumb active">
              <img src="images/shirt2.png" class="thumb">
              <img src="images/shirt3.png" class="thumb">
           </div>
       </div>


        <!-- RIGHT -->
        <div class="product-info">
    <h1>Classic Oxford Shirt</h1>

    <div class="price">LKR 4,900</div>

    <div class="rating">
        ★★★★☆ <span>(128 reviews)</span>
    </div>

    <p class="description">
        Experience timeless style and superior comfort with our Classic Oxford Shirt.
        Crafted from premium cotton fabric, perfect for both formal and casual occasions.
    </p>

    <div class="option-group">
        <label>Select Size</label>
        <div class="sizes">
            <button>XS</button>
            <button>S</button>
            <button class="active">M</button>
            <button>L</button>
            <button>XL</button>
        </div>
    </div>

    <div class="option-group">
        <label>Select Color</label>
        <div class="colors">
            <span class="color white"></span>
            <span class="color light"></span>
            <span class="color dark"></span>
        </div>
    </div>

    <div class="cart-row">
        <input type="number" value="1" min="1">
        <button class="add-cart">Add to Cart</button>
    </div>

    <ul class="benefits">
        <li>Free shipping on orders over LKR 10,000</li>
        <li>30-day return policy</li>
        <li>Secure payment options</li>
    </ul>
</div>


    </div>
</section>

<!-- YOU MAY ALSO LIKE  -->
<section class="related-products">
    <h2>You May Also Like</h2>

    <div class="related-grid">

        <div class="related-card">
            <img src="images/products/de.webp" alt="Denim Jacket">
            <h4>Denim Jacket</h4>
            <p>LKR 4,000</p>
        </div>

        <div class="related-card">
            <img src="images/products/polo.avif" alt="Polo Shirt">
            <h4>Cotton Polo Shirt</h4>
            <p>LKR 4,550</p>
        </div>

        <div class="related-card">
            <img src="images/products/cargo.avif" alt="Cargo Pants">
            <h4>Cargo Pants</h4>
            <p>LKR 7,550</p>
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


<script>
    const mainImage = document.getElementById("mainProductImage");
    const thumbnails = document.querySelectorAll(".thumb");

    thumbnails.forEach(thumb => {
        thumb.addEventListener("click", () => {
            
            mainImage.src = thumb.src;
            
            thumbnails.forEach(t => t.classList.remove("active"));

            thumb.classList.add("active");
        });
    });
</script>

</body>
</html>
