<?php $pageName = "Login"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ezytech|<?=$pageName?></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body class="bg-secondary">
    <div class="container">
            <div class="row">
                 <div class="col-md-4"></div>
                <div class="col-5">
                     <div class="uni__card-container"> 
                        <h3 class="text-center">Sign-up</h3>
                         <form action="" class="sgn-up-form">
                            <div class="form-group">
                                <label for="username">
                                    <strong>Names</strong>
                                    <input type="text" placeholder="Enter Name" name="username" class="form-control-lg s-username">
                                </label>
                            </div>

                            <div class="form-group">
                                <label for="email-ID">
                                    <strong>Email-ID</strong>
                                    <input type="text" placeholder="Enter Email-ID" name="email" class="form-control-lg s-email">
                                </label>
                            </div>

                            <div class="form-group">
                                <label for="Password">
                                    <strong>Password</strong>
                                    <input type="password" placeholder="Enter Password" name="password" class="form-control-lg s-password">
                                </label>
                            </div>

                            <div class="form-group">
                                <label for="confirm-Password">
                                    <strong>Confirm Password</strong>
                                    <input type="password" placeholder="Confirm Password" name="confirm-password" class="form-control-lg s-confirm-password">
                                </label>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-lg btn-dark my-3 signup-button w-100">Sign-up</button>
                            </div>
                            I have an account <span><a href="login.php" class="btn btn-uni">Sign-In</a></span>
                         </form>
                     </div>
            </div>
            </div>
    </div>

    <script src="data/contact-data.js"></script>
<script src="data/product.js"></script>
<script src="js/app.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
