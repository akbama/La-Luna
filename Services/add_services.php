<?php
date_default_timezone_set('Asia/Manila');
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
//generate random unique id;
$c = uniqid (rand (),true);
$md5c = md5($c);

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    //get the customer details
    $owners_id = $md5c;
    $owners_name = $_POST['ownername'];
    $date_booked = date('Y-m-d H:i:s');
    $pets_name = $_POST['petname'];
    $app_date = $_POST['appdate'];
    $c_number = $_POST['cnumber'];

    $connect->query("INSERT INTO customer_details (Owners_ID, Owners_Name, Pets_Name, Contact_Number, Date_Booked, App_Date) 
    VALUES('$owners_id','$owners_name','$pets_name',$c_number,'$date_booked','$app_date')") 
    or die($connect->error);

    $groomer = $_POST['select_groomer'];
    if ($groomer != 'Null') {
        $b_type = $_POST['bath'];
        $size =  $_POST['size'];
        $discount = $_POST['disc'];
        $flag = 0;
        $arr = array($_POST['op1'], $_POST['op2'], $_POST['op3'], $_POST['op4'], $_POST['op5'], $_POST['op6'], $_POST['op7'], $_POST['op8']);
        for ($i=0; $i<8;$i++){
            if (is_null($arr[$i])==true)
                $arr[$i] = 0;
            else {
                $arr[$i] = 1;
                $flag = 1;
            }
                
        }

        $connect->query("INSERT INTO `spa_services`(`Owners_ID`, `Groomer`, `Bath_Type`, `Pet_Size`, `Discount`, `Add-on_Services`) 
        VALUES('$owners_id','$groomer','$b_type','$size',$discount,$flag)") 
        or die($connect->error);

        if ($flag == 1) {
            $connect->query("INSERT INTO `ss_add-on_services` (Owners_ID, `Professional Styling`, `Teeth Cleaning`, `Anal Sac Expression`, `Tick & Flea Meditation`, `Detangling Regular`, `Detangling Severe`, `Deshedding`, `Lux Whitening Shampoo`) 
            VALUES('$owners_id',$arr[0], $arr[1], $arr[2], $arr[3], $arr[4], $arr[5], $arr[6], $arr[7])") 
            or die($connect->error);
        }
        
    }
    else {
        echo "notnull";
    }

    $r_type = $_POST['type'];
    if (is_null($r_type) == false) {
        $n_nights = $_POST['nightsnum'];
        $arr2 = array($_POST['ag1'], $_POST['ag2']);
        $dcservices = $_POST['daycaretype'];
        
        for ($i = 0; $i < 2; $i++) {
            if (is_null($arr2[$i])==true)
                $arr2[$i] = 0;
        }
        
        $connect->query("INSERT INTO `hotel_services`(`Owners_ID`, `Room_Type`, `No_of_Nights`, `Extra_Guests1`, `Extra_Guests2`, `Pet_Size`)
        VALUES('$owners_id','$r_type',$n_nights,$arr2[0],$arr2[1],'$dcservices')") 
        or die($connect->error);
    }
    
    

    header("Location: services.php");   
}

$connect->close();

?>