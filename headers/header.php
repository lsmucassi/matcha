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
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">WebSiteName</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Page 1-1</a></li>
                        <li><a href="#">Page 1-2</a></li>
                        <li><a href="#">Page 1-3</a></li>
                    </ul>
                </li>
                <li><a href="#">Page 2</a></li>
                <li><a href="#">Page 3</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
            </ul>
        </div>
    </div>
</nav>
