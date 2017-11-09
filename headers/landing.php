<!-- landind page header -->
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#logger">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#takes user to -> user/matcha.php only if logged in">MATCHA</a>
        </div>
        <div class="collapse navbar-collapse" id="logger">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Register<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li>
                        </li>

                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Login<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><?php include('../logreg/login.php')?></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>