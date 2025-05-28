<?php $pageName = "Sign In"?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ezytech|<?=$pageName?></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <div class="container">
        <div class="col-5">
            <div class="form-box active" id="login-form">
                <form class="frm-login acitve" id="form-login" method="POST">
                    <p class="response text-center"></p>
                    <h3 class="login-title">Sign In</h3>
                    <div class="form-group">
                    
                        <label for="username">
                            Username
                            <input type="text" name="username" class="username" placeholder="Username">
                        </label>
                    </div>

                    <div class="form-group">
                        <label for="password">
                            Password
                            <input type="password" name="password" class="password" placeholder="Password">
                        </label>
                    </div>

                    <div class="form-group">
                        <button type="submit">Sign In</button>
                    </div>

                    <div class="form-group">
                        <p class="login-parag text-center">
                            I don't have an account? <span><a href="#" class="register-button" onclick="showForm('register-form')">Register</a></span>
                        </p>
                    </div>

                   
                </form>
            </div>



            <div class="form-box" id="register-form">
                <form class="frm-register" id="form-register" method="post">
                    <p class="response text-center"></p>
                    <h3 class="register-title">Register</h3>
                    <div class="form-group">
                    
                        <label for="username">
                            Username
                            <input type="text" name="username" class="username" placeholder="Email">
                        </label>
                    </div>

                    <div class="form-group">
                        <label for="password">
                            Password
                            <input type="password" name="password" class="password" placeholder="Password">
                        </label>
                    </div>

                    <div class="form-group">
                        <label for="confirm-password">
                            Confirm Password
                            <input type="password" name="confirm-password" class="confirm-password" placeholder="Confirm Password">
                        </label>
                    </div>


                    <div class="form-group">
                        <button type="submit">Register</button>
                    </div>

                    <div class="form-group">
                        <p class="login-parag text-center">
                            Already have an account? <span><a href="#" class="login-button" onclick="showForm('login-form')">Login</a></span>
                        </p>
                    </div>

                   
                </form>
            </div>
        </div>
    </div>

    <script src="data/contact-data.js"></script>
    <script src="js/login.js"></script>
    <!-- <script src="js/app.js"></script> -->
    <script src="js/bootstrap.min.js"></script>
</body>