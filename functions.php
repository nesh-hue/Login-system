<?php

function checkLoginStatus() {
    if (isset($_SESSION['user_id'])) {
      echo '<a href="logout.php">Log Out</a>';
    } else {
      echo '<a href="login.php">Log In</a>';
    }
}