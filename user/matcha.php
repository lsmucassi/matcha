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
                <div class="box a"><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
                    <input type="checkbox" id="pure-toggle" hidden/>
                    <label id="card-user" class="pure-toggle" for="pure-toggle">
                        <div class="header">
                        </div>
                        <div class="avatar">
                            <img src="http://wpidiots.com/html/writic/red-writic-template/css/img/demo-images/avatar1.jpg" alt="...">
                        </div>
                        <div class="text">
                            <h3>John Doe</h3>
                            <p>some information about the user</p>
                        </div>

                        <div class="skills">
                            <h3>Skills</h3>
                            <i class="fa fa-html5 fa-2x"></i>
                            <i class="fa fa-css3 fa-2x"></i>
                            <i class="fa fa-github fa-2x"></i>
                        </div>

                        <div class="social">
                            <i class="fa fa-codepen" alt="codepen" title="codepen"></i>
                            <i class="fa fa-facebook" alt="facebook" title="facebook"></i>
                            <i class="fa fa-google" alt="google" title="google"></i>
                            <i class="fa fa-twitter" alt="twitter" title="twitter"></i>
                            <i class="fa fa-youtube" alt="youtube" title="youtube"></i>
                        </div>
                </div></div>
                <div class="box b">B</div>
                <div class="box c">C</div>
                <div class="box d">D</div>
                <div class="box e">E</div>
                <div class="box f">F</div>
            </div>
        </div>
        <!-- just a vertical line -->
        <div class=""></div>
        <!-- search and results -->
        <div class="sidebar">
            <!-- search and filter -->
            <div class="">
                <div class="">
                    <div class="col-xs-8 col-xs-offset-2">
                        <div class="input-group">
                            <div class="input-group-btn search-panel">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                    <span id="search_concept">Filter by</span> <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#contains">Gender</a></li>
                                    <li><a href="#its_equal">Age</a></li>
                                    <li><a href="#greather_than">close location</a></li>
                                    <li><a href="#less_than"></a></li>
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

