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
                        <h3 class="text-center">Sign-In</h3>
                         <form action="" class="lgn-form">
                            <div class="form-group">
                                <label for="username">
                                    <strong>Username</strong>
                                    <input type="text" placeholder="Enter Username" name="username" class="form-control-lg w-100 lgn-username">
                                </label>
                            </div>

                            <div class="form-group text-justify my-3 w-100">
                                <label for="Password">
                                    <strong>Password</strong>
                                    <input type="password" placeholder="Enter Password" name="password" class="form-control-lg w-100 lgn-password">
                                </label>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-lg btn-dark my-3 sign_in-button">Sign-In</button>
                            </div>
                            Don't have an account <span><a href="sign-up.php" class="btn btn-uni">Sign-up here</a></span>
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
