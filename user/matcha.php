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
            <p>In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).
            <p>Only when the button is clicked, the navigation bar will be displayed.</p>
        </div>
        <!-- just a vertical line -->
        <div class=""></div>
        <!-- search and results -->
        <div class="sidebar">
            <!-- search and filter -->
            <div class="container">
                <div class="">
                    <div class="col-xs-8 col-xs-offset-2">
                        <div class="input-group">
                            <div class="input-group-btn search-panel">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                    <span id="search_concept">Filter by</span> <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#contains">Contains</a></li>
                                    <li><a href="#its_equal">It's equal</a></li>
                                    <li><a href="#greather_than">Greather than ></a></li>
                                    <li><a href="#less_than">Less than < </a></li>
                                    <li class="divider"></li>
                                    <li><a href="#all">Anything</a></li>
                                </ul>
                            </div>
                            <input type="hidden" name="search_param" value="all" id="search_param">
                            <input type="text" class="form-control" name="x" placeholder="Search term...">
                            <span class="input-group-btn">
                    <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
                </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <?php include('../headers/footer.php')?>
</body>
</html>

