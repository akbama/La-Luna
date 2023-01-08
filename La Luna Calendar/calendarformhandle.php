<?php include ('calendardata.php'); ?>
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
    $clickeddate = $_POST['clickeddate'];
    $clickeddate = strtotime($clickeddate);
    $dateinput = date('Y/m/d',$clickeddate);
    ?>
       <table class="tg">
       <tr>
          <th>Owner</th>
          <th>Pet</th>
          <th>Contact</th>
          <th style = "text-align: center">Service</th>
          <th style = "text-align:center; width: 20%">Add-ons</th>
          <th>Time</th>
          <th>Actions</th>
        </tr>
        
            <?php 
        $result = $connect->query("SELECT * FROM `spa_services`,`customer_details` WHERE `spa_services`.`Owners_ID`= `customer_details`.`Owners_ID`;") 
        or die($connect->error);
        
            while($row = $result->fetch_assoc()) { 
              ?>
            <tbody>
              <tr> <?php
              $date = new DateTime($row['App_Date']);
              $newdate = $date->format('Y/m/d');
              $time = $date->format('H:i A');
              if ($dateinput == $newdate):
              ?>
                <td class="tg-text1"><?php echo $row['Owners_Name']; ?></td>
                <td class="tg-text2"><?php echo $row['Pets_Name']; ?></td>
                <td class="tg-text3"><?php echo $row['Contact_Number']; ?></td>
                <td class="tg-text4"><?php echo $row['Bath_Type']; ?></td>
                <td class="tg-text5"><?php echo $row['Add-on_Services']; ?></td>
                <td class="tg-text6"><?php echo $time; ?></td>
                <td class="buttons">
                    <button id = "icon" type="submit"><i class="fa-solid fa-cart-shopping"></i></button>
                    <button id = "icon" type="submit"><i class="fa-solid fa-pen"></i></button>
                    <button id = "icon" type="submit"><i class="fa-solid fa-trash"></i></button>
                    
                </td>
              </tr>
            </tbody>
            <?php endif; }?>
        </table>
</body>
</html>
