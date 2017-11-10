<?php
/**
 * Created by PhpStorm.
 * User: lmucassi
 * Date: 2017/11/08
 * Time: 1:24 PM
 */?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>MATCHA_</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../styles/headers.css">
    <link rel="stylesheet" type="text/css" href="../styles/stylematcha.css">
</head>
<body>
    <!-- header for all logged in users -->
    <?php include('../headers/header.php') ?>
    <!-- the main content -->
    <div class="main-page">
        <!-- suggestion to user -->
        <div class="sugg-colum">
            <h3>Here are possible matches for you</h3>
            <div class="wrapper">
                <div><?php include('suggested.php') ?></div>
                <div><?php include('suggested.php') ?></div>
                <div><?php include('suggested.php') ?></div>
                <div><?php include('suggested.php') ?></div>
                <div><?php include('suggested.php') ?></div>
                <div><?php include('suggested.php') ?></div>
                <div><?php include('suggested.php') ?></div>
                <div><?php include('suggested.php') ?></div>
                <div><?php include('suggested.php') ?></div>
            </div>
        </div>
        <!-- just a vertical line -->
        <div class=""></div>
        <!-- search and results -->
        <div class="sidebar">
            <!-- search and filter -->
            <?php include('search.php') ?>
        </div>
    </div>
    <!-- footer -->
    <?php include('../headers/footer.php')?>
</body>
</html>

