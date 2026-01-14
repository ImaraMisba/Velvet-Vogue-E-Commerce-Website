<?php
session_start();
include "config/db.php";

/* Protect page */
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

/* Get user data */
$id = $_SESSION['user_id'];
$result = mysqli_query($conn, "SELECT * FROM users WHERE id=$id");
$user = mysqli_fetch_assoc($result);
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>My Profile | Velvet Vogue</title>

<style>
body {
    font-family: Arial, sans-serif;
    background: #f5f6fa;
    margin: 0;
}

/* HEADER */
header {
    background: #fff;
    padding: 15px 40px;
    border-bottom: 1px solid #ddd;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

header h2 {
    margin: 0;
}

/* LAYOUT */
.container {
    display: flex;
    padding: 30px;
}

/* SIDEBAR */
.sidebar {
    width: 260px;
    background: #fff;
    padding: 25px;
    border-radius: 8px;
}

.avatar {
    width: 80px;
    height: 80px;
    background: #ccc;
    border-radius: 50%;
    margin-bottom: 10px;
}

.sidebar h3 {
    margin: 5px 0;
}

.sidebar p {
    font-size: 14px;
    color: gray;
}

.menu a {
    display: block;
    padding: 10px;
    margin-top: 10px;
    text-decoration: none;
    color: #333;
    border-radius: 5px;
}

.menu a:hover {
    background: #f1f1f1;
}

.logout {
    color: red;
}

/* CONTENT */
.content {
    flex: 1;
    margin-left: 30px;
    background: #fff;
    padding: 30px;
    border-radius: 8px;
}

.content h2 {
    margin-bottom: 20px;
}

/* FORM */
.form-row {
    display: flex;
    gap: 20px;
}

.form-group {
    flex: 1;
    margin-bottom: 15px;
}

label {
    display: block;
    font-size: 14px;
    margin-bottom: 5px;
}

input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

button {
    background: #111;
    color: white;
    padding: 12px 25px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}
</style>
</head>

<body>

<header>
    <h2>Velvet Vogue</h2>
</header>

<div class="container">

    <!-- SIDEBAR -->
    <div class="sidebar">
        <div class="avatar"></div>
        <h3><?php echo $user['first_name']; ?></h3>
        <p><?php echo $user['email']; ?></p>

        <div class="menu">
            <a href="#">Profile Information</a>
            <a href="#">Order History</a>
            <a href="#">Wishlist</a>
            <a href="#">Addresses</a>
            <a href="#">Payment Methods</a>
            <a href="logout.php" class="logout">Logout</a>
        </div>
    </div>

    <!-- PROFILE CONTENT -->
    <div class="content">
        <h2>Profile Information</h2>

        <form>
            <div class="form-row">
                <div class="form-group">
                    <label>First Name</label>
                    <input type="text" value="<?php echo $user['first_name']; ?>" readonly>
                </div>

                <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" value="<?php echo $user['last_name']; ?>" readonly>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" value="<?php echo $user['email']; ?>" readonly>
                </div>

                <div class="form-group">
                    <label>Phone</label>
                    <input type="text" value="<?php echo $user['phone']; ?>" readonly>
                </div>
            </div>

            <div class="form-group">
                <label>Date of Birth</label>
                <input type="text" value="<?php echo $user['dob']; ?>" readonly>
            </div>
        </form>
    </div>

</div>

</body>
</html>
