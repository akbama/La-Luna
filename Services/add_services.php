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

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $owners_name = $_POST['ownername'];
    $date_booked = $_POST['dateb'];
    $pets_name = $_POST['petname'];
    $app_date = $_POST['appdate'];
    $c_number = $_POST['cnumber'];
    $time = $_POST['time'];

    echo $time;
}
/*
$result = $conn->query("SELECT * FROM `rental listing`") or die($conn->error);

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $roomid = $_POST['rid'];
    $newroomname = $_POST['rname'];
    $newdescription = $_POST['rdescription'];
    $newroomrate= $_POST['rrate'];
    
    $conn->query("INSERT INTO `rental listing`(`room_id`, `room_name`, `description`, `room_rate`) VALUES($roomid, '$newroomname', '$newdescription',$newroomrate)") 
    or die($conn->error);

    header("Location: admin.php");   
}*/


$connect->close();

?>