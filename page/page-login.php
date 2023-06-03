<?php
require '../database/register.php';
require '../database/login.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Page</title>
    <link rel="stylesheet" href="../styles/login.css" />
</head>

<body>
    <div class="container" id="container">
        <div class="form-container reg-container" id="form-register">
            <form action="../database/register.php" method="post">
                <h1>Register</h1>
                <span class="form-control">
                    <input type="text" id="reg_firstname" name="reg_firstname" required placeholder="First Name(*)" />
                    <span class="error-message"></span>
                </span>
                <span class="form-control">
                    <input type="text" id="reg_lastname" name="reg_lastname" required placeholder="Last Name(*)" />
                    <span class="error-message"></span>
                </span>
                <span class="form-control">
                    <input type="email" id="reg_email" name="reg_email" required placeholder="Email(*)" />
                    <span class="error-message"></span>
                </span>
                <span class="form-control">
                    <input type="password" id="reg_password" name="reg_password" required placeholder="Password(*)" />
                    <span class="error-message"></span>
                </span>
                <span class="form-control">
                    <input type="number" id="reg_phonenumber" name="reg_phonenumber" required
                        placeholder="Phone number(*)" min="0" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" />
                    <span class="error-message"></span>
                </span>
                <div class="footer-button">
                    <button type="submit" class="secondary-button">Register</button>
                    <div class="font-small">Note : Enter the field have char (*)</div>
                    <span class="desktop-hide">
                        if Your have an account
                        <span>
                            <a class="login">Login here!</a>
                        </span>
                    </span>
                </div>
            </form>
        </div>
        <div class="form-container login-container">
            <form action="../database/login.php" id="form-login" method="POST">
                <h1>Login</h1>
                <input type="email" id="log_email" name="log_email" placeholder="Email (*)" required />
                <input type="password" id="log_pass" name="log_pass" placeholder="Password (*)" required />
                <div class="content">
                    <div class="checkbox">
                        <input type="checkbox" name="remember" id="remember" />
                        <label for="remember"> <span class="checked"> </span> <span>Remember</span> </label>
                    </div>
                    <div class="forgot-link">
                        <a href="#">Forgot password?</a>
                    </div>
                </div>
                <div class="footer-button">
                    <button type="submit" class="login primary-button">Login</button>
                    <span class="desktop-hide">
                        if you don't have an account yet?
                        <span>
                            <a class="register">Register</a>
                        </span>
                    </span>
                </div>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1 class="title">
                        Hello <br />
                        friends
                    </h1>
                    <p>if Your have an account, login There and have fun</p>
                    <a href="#form-login" class="btn-login primary-button">Login</a>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1 class="title">
                        Start your <br />
                        yourny now
                    </h1>
                    <p>if you don't have an account yet, join us and start your journey</p>
                    <span class="flexcenter">
                        <a href="#form-register" class="btn-register secondary-button">Register</a>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <script src="../script/login.js"></script>
</body>

</html>