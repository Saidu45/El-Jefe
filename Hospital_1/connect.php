<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hospital_1";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname)
    or die("Error while connecting");