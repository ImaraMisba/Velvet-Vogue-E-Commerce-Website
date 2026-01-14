<?php
include "config/db.php";

$name     = $_POST['name'];
$price    = $_POST['price'];
$image    = $_POST['image'];
$category = $_POST['category'];

$sql = "INSERT INTO products (name, price, image, category)
        VALUES ('$name', '$price', '$image', '$category')";

mysqli_query($conn, $sql);

header("Location: admin_add_product.php");
exit;