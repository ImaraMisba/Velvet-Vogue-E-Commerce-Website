<?php
session_start();
?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Login | Velvet Vogue</title>

<style>
body {
    margin: 0;
    font-family: Arial, sans-serif;
    background: #f4f6f8;
}

.container {
    display: flex;
    height: 100vh;
    align-items: center;
    justify-content: center;
}

.box {
    display: flex;
    width: 900px;
    background: #fff;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 10px 25px rgba(0,0,0,0.1);
}

/* LEFT IMAGE */
.left {
    width: 50%;
    background: #ddd;
}

.left img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* RIGHT FORM */
.right {
    width: 50%;
    padding: 60px;
}

h2 {
    margin-bottom: 30px;
}

input {
    width: 100%;
    padding: 12px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

button {
    width: 100%;
    padding: 12px;
    background: #111;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background: #333;
}

p {
    margin-top: 15px;
    font-size: 14px;
}

a {
    color: #007bff;
    text-decoration: none;
}
</style>
</head>

<body>

<div class="container">
    <div class="box">

     
        <div class="left">
            <img src="images\Products\register.jpg" alt="Login Image">
        </div>

        <!-- LOGIN FORM --> 
        <div class="right">
            <h2>LOGIN</h2>

            <?php if (isset($_SESSION['error'])): ?>
                <p style="color:red;"><?php echo $_SESSION['error']; unset($_SESSION['error']); ?></p>
            <?php endif; ?>

            <form action="login_process.php" method="POST">
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>

                <button type="submit">LOGIN</button>
            </form>

            <p>Don't have an account?
                <a href="register.php">Register</a>
            </p>
        </div>

    </div>
</div>

</body>
</html>
