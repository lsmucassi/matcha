<?php
/**
 * Created by PhpStorm.
 * User: lmucassi
 * Date: 2017/11/08
 * Time: 2:46 PM
 */
    $index = 'notActive';
    $matcha = 'notActive';
    $notifications = 'notActive';
    $chats = 'notActive';
    $profile = 'notActive';
    $logout = 'notActive';

    $linkMenu = basename($_SERVER['PHP_SELF'], ".php");
    if ($linkMenu == "index") {
        $index = 'Active';
    } else if ($linkMenu == "matcha") {
        $matcha = 'Active';
    } else if ($linkMenu == "notifications") {
        $notifications = 'Active';
    } else if ($linkMenu == "chats") {
        $chats = 'Active';
    } else if ($linkMenu == "profile") {
        $profile = 'active';
    } else if ($linkMenu == "logout") {
        $logout = 'Active';
    }
?>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <!-- collapsed button for small size screen -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- website Name -->
            <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-heart-empty"></span>Matcha</a>
        </div>
        <!-- navigation items -->
        <div class="collapse navbar-collapse ml-auto" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li class=""><a href="#"><span class="glyphicon glyphicon-heart-empty"></span>matcha</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-bell"></span><span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Page 1-1</a></li>
                        <li><a href="#">Page 1-2</a></li>
                        <li><a href="#">Page 1-3</a></li>
                    </ul>
                </li>
                <li><a href="#"><span class="glyphicon glyphicon-envelope"></span></a></li>
                <li><a href="#"><span class="glyphicon glyphicon-user"></span></a></li>
                <li><a href="#"><span class="glyphicon glyphicon-log-out"></span></a></li>
            </ul>
        </div>
    </div>
</nav>
