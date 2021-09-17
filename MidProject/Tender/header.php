<?php
session_start() ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tender</title>
</head>

<body>
    <nav>
        <?php if (isset($_SESSION['userId'])) : ?>
            <a href="./home.php">Home</a>
            <a href="./info.php">Tender contacts</a>
            <a href="./logout.php">Logout</a>
        <?php else : ?>
            <a href="./login.php">Login</a>
            <a href="./register.php">Register</a>
        <?php endif ?>
    </nav>