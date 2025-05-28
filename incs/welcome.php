<?php
session_start(); 
$pageName = "Welcome"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ezytech|<?=$pageName?></title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
<?php

if (!isset($_SESSION['user_id'])) {
    header("Location:../sign-in.php"); // redirect if not logged in
    exit;
}else{?>
   <div class="wrapper">
     <div class="container-fluid">
        <div class="row">
        <div class="col-12">
       <div class="dashboad-box">
         <div class="profile-box p-1">
         <h3 class="text-center">Welcome, <?php echo htmlspecialchars($_SESSION['user_email']); ?>!</h3>
         </div>

         <div class="dashboard-nav">
            <div><a href="logout.php" class="nav-link btn btn-danger text-light">Logout</a></div>
         </div>
       </div>
     </div>
        </div>
     </div>
   </div>
    <?php
}
?>


<!-- <script src="data/contact-data.js"></script> -->
<script src="../js/login.js"></script>
<!-- <script src="js/app.js"></script> -->
<script src="../js/bootstrap.min.js"></script>
</body>