<?php
session_start();

// Establish database connection
$db = mysqli_connect('localhost', 'root', '', 'login_sample_db');

if (mysqli_connect_errno()) {
    echo
 
"Failed to connect to MySQL: " . mysqli_connect_error();
}

// Check if email and password exist in POST data before sanitizing and querying
if (isset($_POST['email']) && isset($_POST['password'])) {
    // Sanitize user input
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    // Check if user exists with the given email and password
    $login_query = mysqli_query($db, "SELECT * FROM users WHERE user_email='$email' AND password='$password'");

    if (mysqli_num_rows($login_query) > 0) {
        echo "Login successful!";
        // Upon successful login, redirect to index.php
    header('Location: index.php');

    } else {
        echo '<span style="color: red;">Invalid credentials!</span>';

    }
} else {
    echo '<span style="color: red;">Missing email or password in POST data!</span>';
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
     <h1>LOGIN</h1>
    <form action="login.php"method="post">
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
        value="LOGIN">
        <br>
        <br>
        <a href="signup.php">CLICK TO SIGNUP</a>
    </form>
    </body>
</html>