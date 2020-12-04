<?php
//db details
$host = "localhost";
$user = "root";
$pass = "";
$dbn = "blog";


//connect to db
$conn = new mysqli($host, $user, $pass, $dbn);

if ($conn->connect_error) {
     die("database connection error" . $conn->connect_error);
}
