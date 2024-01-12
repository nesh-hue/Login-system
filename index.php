<?php
    include('functions.php');
   
   session_start();
   
   if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    // User is logged in, so hide the login button
    // You can use CSS or JavaScript to hide the login button
} else {
    // User is not logged in, so show the login button
    // Display the login button or link
}
   

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title><!DOCTYPE html>
   <link rel="stylesheets" href="index.css">
</head>
<link rel="stylesheet" href="index.css">
<body>
    <h1><u>WELCOME TO FAIR CRASH</u></h1>
    <div class="container">
      <div class="header">
        <nav>
            <a href="signup.php">SIGN UP</a>
        </nav>
      </div>
       <div class="section">
        <h2><u>Fair crash:The Emerging Betting Company That's Changing The Game</u></h2>
         <p>Fair Crash is a new and innovative betting company that is quickly gaining traction in the industry. Known for its fair and transparent gameplay,Fair Crash is the perfect choice for all experience levels
        </p>
        <p> 
            At Fair Crash we offer the following ;
        </p>
        <ul>
            <li>Fairness and transparency </li>
            <li>High payouts</li>
            <li>Boosted odds</li>
            <li>Fast and easy withdrawals</li>
            <li>Wide range of betting options</li>
            <li>24/7 customer support</li>
        </ul>
        </div>
       <div class="footer">
        <p>
            Waiting to get started? Well its simple and easy. Simply create an account by signing up on the link below
            <a href="signup.html">SIGN UP</a>. you can as well contact our 24/7 customer service or email us. Thank you and wlcome to Fair Crash.
        </p>
        <br>
        <p>
            Copyright &copy; 2023 Fair crash Betting Company. All rights reserved
        </p>
        <ul>
            <li><u>GMAIL</u></li>
            <ol>
                faircrash2023@gmail.com
            </ol>
            <li>TELEPHONE</li>
            <ol>
                +254700012345
            </ol>
        </ul>
       </div>
   </div> 
    
</body>
</html>