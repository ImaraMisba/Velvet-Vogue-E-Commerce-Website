<?php
include "config/db.php";

$first = $_POST['first_name'];
$last  = $_POST['last_name'];
$email = $_POST['email'];
$pass  = password_hash($_POST['password'], PASSWORD_DEFAULT);
$phone = $_POST['phone'];
$dob   = $_POST['dob'];

/* Check email already exists */
$check = mysqli_query($conn, "SELECT id FROM users WHERE email='$email'");
if (mysqli_num_rows($check) > 0) {
    echo "Email already registered!";
    exit;
}

/* Insert user */
$sql = "INSERT INTO users (first_name, last_name, email, password, phone, dob)
        VALUES ('$first', '$last', '$email', '$pass', '$phone', '$dob')";

if (mysqli_query($conn, $sql)) {
    header("Location: login.php");
} else {
    echo "Registration failed";
}
?>
