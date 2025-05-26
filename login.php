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
                 <div class="col-md-3"></div>
                <div class="col-6">
                     <div class="uni__card-container"> 
                       
                         <form action="" class="lgn-form"> 
                            <h3 class="text-center">Sign-In</h3>
                            <div class="form-group">
                                <label for="username">
                                    <strong>Username</strong>
                                    <input type="text" placeholder="Enter Username" name="username" class="form-control-lg lgn-username input-elem">
                                </label>
                            </div>

                            <div class="form-group">
                                <label for="Password">
                                    <strong>Password</strong>
                                    <input type="password" placeholder="Enter Password" name="password" class="form-control-lg lgn-password input-elem">
                                </label>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-lg btn-dark button-elem">Sign-In</button>
                            </div>
                            <p class="text-center">Don't have an account <span><a href="sign-up.php" class="btn btn-uni">Sign-up here</a></span></p>
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
