<?php
    session_start();
    include ('hoteldata.php');
?>
<html lang="en">

<!--HEAD-->
<head>
  <title> Hotel </title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="/Sidebar Nav/sidebar_style.css">
  <link rel="stylesheet" href="hotelstyle.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&display=swap" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<!--BODY-->
<body style = "height: 100%; width: 100%;">

<!--SIDEBAR-->
<div class="sidebar">
  <div class="logo-details">
  <img src="../Sidebar Nav/sidebar_logo_1.png" class="logopic1"></img>
  <img src="../Sidebar Nav/sidebar_logo_2.png" class="logopic2"></img>
</div>
<ul class="nav-list">
  <li>
    <a href="../Dashboard/dashboard.php">
      <i class="fa-solid fa-clipboard-check"></i>
      <span class="links_name">Dashboard</span>
      <div class="active-bar"></div>
    </a>
  </li>
  <li>
    <a href="../Admin_2/admin_2.php">
      <i class="fa-solid fa-sliders"></i>
      <span class="links_name">Admin Controls</span>
      <div class="active-bar"></div>
    </a>
  </li>
  <li>
    <a href="../La Luna Calendar/calendar.php">
      <i class="fa-solid fa-calendar-days"></i>
      <span class="links_name">Appointments</span>
      <div class="active-bar"></div>
    </a>
  </li>
  <li>
    <a href="../Hotel/hotel.php" class='active-page'>
      <i class="fa-solid fa-building"></i>
      <span class="links_name">Hotel</span>
      <div class="active-bar"></div>
    </a>
  </li>
  <li>
    <a href="../History_Page/history.php">
      <i class="fa-solid fa-folder-open"></i>
      <span class="links_name">History</span>
      <div class="active-bar"></div>
    </a>
  </li>
  <li>
    <a href="../Services/services.php">
      <i class="fa-solid fa-scissors"></i>
      <span class="links_name">Services</span>
      <div class="active-bar"></div>
    </a>
  </li>  
  <li>
    <a href="../Login/login.php">
      <i class="fa-solid fa-right-from-bracket"></i>
      <span class="links_name">Log Out</span>
      <div class="active-bar"></div>
    </a>
  </li> 
</ul>
</div>

<!--MAIN DASHBOARD-->
<section class="dashboard">
    <!--HEADER-->
    <div class="header">
        <div class="header-text">
            <span class="text">Hotel & Daycare</span>
        </div>
        <div class="header-button">
            <button type="button" id="checkin-button">Check in</button>
        </div>
    </div>
    <!--BANNER FOR NUM OF PETS IN HOTEL-->
    <div class="banner">
        <div class="box">
            <div class="pets-num">
                <div class="number">4</div>
                <div class="box-text">pets checked in</div>
            </div>
            <div class="pets-num">
                <div class="number">2</div>
                <div class="box-text">to arrive</div>
            </div>
            <div class="pets-num">
                <div class="number">7</div>
                <div class="box-text">rooms available</div>
            </div>
        </div>
    </div>
    <!--  HOTEL -->
    <div class="appointments">
      <div class="table">
        <div class="todaytitle">
            Hotel - 
            <span id="date"></span>
        </div>
        <hr>
        <div class="contents">
          <table class="tg">
            <tbody>
            <tr>
            <th>Owner</th>
            <th>Pet</th>
            <th>Contact</th>
            <th>Room Type</th>
            <th>Extra Guests (S-M)</th>
            <th>Extra Guests (L-XXL)</th>
            <th>Check in</th>
            <th>Check out</th>
            <th>Actions</th>
          </tr>
            <?php 
              while($row = $result->fetch_assoc()) { 
              ?>
              <tr>
                <td class="tg-text1"><?php echo $row['Owners_Name']; ?></td>
                <td class="tg-text2"><?php echo $row['Pets_Name']; ?></td>
                <td class="tg-text3"><?php echo $row['Contact_Number']; ?></td>
                <td class="tg-text4"><?php echo $row['Room_Type']; ?></td>
                <td class="tg-text5"><?php echo $row['Extra_Guests1']; ?></td>
                <td class="tg-text6"><?php echo $row['Extra_Guests2']; ?></td>
                <td class="tg-text7"><?php echo $row['Check_In_Date']; ?></td>
                <td class="tg-text8"><?php echo $row['Check_Out_Date']; ?></td>
                    <td><button class="button" id="tg-button">Checkout</button>
                </td>
              </tr>
            </tbody>
            <?php }?>
            </table>
        </div>
      </div>
    <!-- DAYCARE -->
      <div class="table2">
        <div class="todaytitle2">
              Daycare - 
            <span id="date2"></span>
        </div>
        <hr>
        <div class="contents2">
          <table class="tg2">
            <tbody>
            <tr>
            <th>Owner</th>
            <th>Pet</th>
            <th>Contact</th>
            <th>Stay Type</th>
            <th>Room Type</th>
            <th>Actions</th>
          </tr>
            <?php 
              while($row = $result1->fetch_assoc()) { 
              ?>
              <tr>
                <td class="tg2-text1"><?php echo $row['Owners_Name']; ?></td>
                <td class="tg2-text2"><?php echo $row['Pets_Name']; ?></td>
                <td class="tg2-text3"><?php echo $row['Contact_Number']; ?></td>
                <td class="tg2-text4"><?php echo $row['Pet_Size']; ?></td>
                    <td><button class="button" id="tg2-button">Checkout</button>
                </td>
              </tr>
            </tbody>
            <?php }?>
            </table>
        </div>
      
     
    </div>
</section>




<script>
$(document).ready(function(){
  $('ul li a').click(function(){
    $('li a').removeClass("active");
    $(this).addClass("active");
});
});     

var dt = new Date();
document.getElementById("date").innerHTML= dt.toDateString();
document.getElementById("date2").innerHTML= dt.toDateString();

</script>

</script>
</body>
</html>
<?php
    unset($_SESSION["error"]);
?>