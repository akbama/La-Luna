<?php 

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'lalunadatabase');

    if (isset($_POST['updatedata'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "UPDATE `login_details` SET `username`='$username', 'password' ='$password' WHERE 1";
        $query_run = mysqli_query($connection, $query);
        
        if ($query == TRUE) {

            echo '<script> alert("Data Updated"); </script>';
            header("Location:admin_2.php");

        }else{

            echo '<script> alert("Data Not Updated"); </script>';
            header("Location:admin_2.php");
        }

    } 

?>