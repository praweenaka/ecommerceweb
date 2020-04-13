<?php

$servername = "localhost";
$username = 'maheship';
$password = 'CY-.5mR31Zv9xu';
$port = 10060;
$db = 'maheship_ecom';

// Create connection
$con = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>