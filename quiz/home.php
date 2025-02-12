<?php
session_start();

// Check if the user is logged in, if
// not then redirect them to the login page
if (!isset($_SESSION['email'])) {
    header("Location:loginquiz.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Quizzz</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    </head>
    <body>
        <div class="main">
            <div class="navbar">
                <h2 class="logo">Quiz</h2>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">ABOUT</a></li>
                    <li><a href="#">CONTACT</a></li>
                    <li><a href="#">MORE INFO</a></li>
                </ul>
            </div>
            <div class="search-box">
                <input class="search-txt" type="text" name="" placeholder="Type To Search">
                <a class="search-btn" href="#"><i class="fas fa-search"></i></a>
            </div>
            <div class="title">
                <h1>Quiz</h1>
            </div>
            <div class="button">
                <a href="#" class="btn">START QUIZ</a>
                <a href="#" class="btn">LEARN MORE</a>
            </div>
        </div>
    </body>
</html>