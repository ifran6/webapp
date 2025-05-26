<?php

$host = "localhost";
$root = "root";
$password = "";

$database = "ezytec_db";

$conn = new mysqli($host, $user, $root, $database);

if($conn->connect_error){
    die("Connect failed:".$conn->connect_error);
}