<?php
session_start();

// Establish database connection
$db = mysqli_connect('localhost', 'root', '', 'login_sample_db');

if (mysqli_connect_error()) {
    echo
        "Failed to connect to MySQL: " . mysqli_connect_error();
}

$errors = [];

// Check if required fields exist and validate email format
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    // Sanitize user input
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    // Check for existing user with the given email
    $email_check = mysqli_query($db, "SELECT * FROM users WHERE user_email='$email'");

    if (mysqli_num_rows($email_check) > 0) {
        echo '<span style="color: red;">User already exists!</span>';
    } else {
        // Insert new user into the database
        $sql = "INSERT INTO users (user_name, user_email, password) VALUES ('$name', '$email', '$password')";

        if (mysqli_query($db, $sql)) {
            // Upon successful registration, redirect to login page
            header('Location: login.php');
        } else {
            echo "Registration failed!";
        }
    }
} else {
    echo '<span style="color: red;">Missing name, email, or invalid email format, or password in POST data!</span>';
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
    <h1>SIGN UP</h1>
    <form action="signup.php"method="post">
        <input
        type="text"
        name="name"
        placeholder="NAME">
        <br>
        <br>
        <input
        type="text"
        name="email"
        placeholder="EMAIL">
        <br>
        <br>
        <input
        type="text"
        name="password"
        placeholder="PASSWORD">
        <br>
        <br>
        <input
        type="submit"
        value="SIGN UP">
        <br>
        <br>
        <a href="login.php">CLICK TO LOGIN</a>
        </form>
    
</body>
</html>