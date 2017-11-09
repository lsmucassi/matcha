<!-- landind page header -->
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#logger">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#takes user to -> user/matcha.php only if logged in"><span class="glyphicon glyphicon-heart-empty">MATCHA</a>
        </div>
        <div class="collapse navbar-collapse ml-auto" id="logger">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <button class="btn btn-primary navbar-btn" data-toggle="modal" data-target="#registerModal">Register</button>
                </li>
                <li class="dropdown">
                    <button class="btn btn-primary navbar-btn" data-toggle="modal" data-target="#loginModal">Login</button>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- register Modal -->
<div class="modal fade" id="registerModal" role="dialog">
    <div class="modal-dialog">
        <!-- register Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Register</h4>
            </div>
            <div class="modal-body">
                <div class="col-md-12">
                    <p>Register with</p>
                    <div class="social-buttons">
                        <a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
                        <a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i> Twitter</a>
                    </div>
                    <p>or Register here</p>
                    <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
                        <!-- register username -->
                        <div class="form-group">
                            <label class="sr-only">Username</label>
                            <input type="text" class="form-control" id="" placeholder="Username" required>
                        </div>
                        <!-- email address -->
                        <div class="form-group">
                            <label class="sr-only">Email</label>
                            <input type="email" class="form-control" id="" placeholder="Email Address" required>
                        </div>
                        <!-- password -->
                        <div class="form-group">
                            <label class="sr-only">Password</label>
                            <input type="password" class="form-control" id="" placeholder="Password" required>
                        </div>
                        <!-- confirm password -->
                        <div class="form-group">
                            <label class="sr-only">Password</label>
                            <input type="password" class="form-control" id="" placeholder="Confirm Password" required>
                        </div>
                        <!-- sign up button -->
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Sign Up</button>
                        </div>
                    </form>
                </div>
                <div class="bottom text-center">
                    have an account ? <a data-toggle="modal" data-target="#loginModal" href="#"><b>Sign In</b></a>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>

<!-- login Modal -->
<div class="modal fade" id="loginModal" role="dialog">
    <div class="modal-dialog">
        <!-- login Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modal Header</h4>
            </div>
            <div class="modal-body">
                <div class="col-md-12">
                    Login via
                    <div class="social-buttons">
                        <a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
                        <a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i> Twitter</a>
                    </div>
                    or
                    <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
                        <div class="form-group">
                            <label class="sr-only" for="exampleInputEmail2">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="exampleInputPassword2">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
                            <div class="help-block text-right"><a href="">Forget the password ?</a></div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> keep me logged-in
                            </label>
                        </div>
                    </form>
                </div>
                <div class="bottom text-center">
                    New here ? <a data-toggle="modal" data-target="#registerModal" href="#"><b>Join Us</b></a>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>

