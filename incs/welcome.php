<?php 
$pageName = "Welcome"?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ezytech|<?=$pageName?></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<?php

if (!isset($_SESSION['user_email'])) {
    header("Location: log_in.php"); // redirect if not logged in
    exit;
}
?>
<h1>Welcome, <?php echo htmlspecialchars($_SESSION['user_email']); ?>!</h1>

<script src="data/contact-data.js"></script>
<script src="js/login.js"></script>
<!-- <script src="js/app.js"></script> -->
<script src="js/bootstrap.min.js"></script>
</body>