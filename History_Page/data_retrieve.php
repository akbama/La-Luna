<?php include ('data_connect.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$datefrom = $_POST['value1'];
$dateto = $_POST['value2'];
$type = $_POST['value3'];
$groomer = $_POST['value4'];

echo $groomer;

if ($type = 'groomer') {
    $result = $connect->query("SELECT * FROM `customer_details`,`spa_services`,`groomer_details` 
    WHERE `customer_details`.`Done?`='Yes' AND `customer_details`.`Owners_ID`=`spa_services`.`Owners_ID` AND `spa_services`.`Groomer`='$groomer' AND `groomer_details`.`Groomer_name`='$groomer';")
     or die($connect->error);
?>
<?php 

}?>

</body>
</html>