<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "lalunadatabase";
// Create connection
$connect = new mysqli($servername, $username, $password, $database);

// Check connection
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}

$result = $connect->query("SELECT * FROM `spa_services`") or die($connect->error);
$customertable =  $connect->query("SELECT * FROM `customer_details`") or die($connect->error);
$connect->close();
?>