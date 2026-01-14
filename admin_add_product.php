<?php
include "config/db.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin | Add Product</title>
    <style>
        body {
            font-family: Arial;
            background: #f5f5f5;
        }
        .admin-box {
            width: 400px;
            margin: 60px auto;
            background: #fff;
            padding: 25px;
            border-radius: 8px;
        }
        input, select, button {
            width: 100%;
            padding: 10px;
            margin-top: 12px;
        }
        button {
            background: #111;
            color: #fff;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>

<div class="admin-box">
    <h2>Add Product</h2>

    <form action="admin_add_product_process.php" method="POST">
        <input type="text" name="name" placeholder="Product Name" required>

        <input type="number" name="price" placeholder="Price" required>

        <input type="text" name="image" placeholder="Image path (e.g. images/shirt.jpg)" required>

        <select name="category" required>
            <option value="">Select Category</option>
            <option value="men">Men</option>
            <option value="women">Women</option>
            <option value="accessories">Accessories</option>
        </select>

        <button type="submit">Add Product</button>
    </form>
</div>

</body>
</html>
