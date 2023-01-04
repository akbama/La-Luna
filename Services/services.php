<html>
<html lang="en">
<head>
  <title>History</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link rel="stylesheet" href="../Sidebar Nav/sidebar_style.css">
  <link rel="stylesheet" href="services.css">
  <link rel="stylesheet" href="../common design.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&display=swap" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body style = "height: 100%; width: 100%;">
<div class="sidebar">
  <div class="logo-details">
  <img src="../Sidebar Nav/sidebar_logo_1.png" class="logopic1"></img>
  <img src="../Sidebar Nav/sidebar_logo_2.png" class="logopic2"></img>
</div>
<ul class="nav-list">
  <li>
    <a href="#">
      <i class="fa-solid fa-clipboard-check"></i>
      <span class="links_name">Dashboard</span>
      <div class="active-bar"></div>
    </a>
  </li>
  <li>
    <a href="#">
      <i class="fa-solid fa-sliders"></i>
      <span class="links_name">Admin Setting</span>
      <div class="active-bar"></div>
    </a>
  </li>
  <li>
    <a href="#">
      <i class="fa-solid fa-calendar-days"></i>
      <span class="links_name">Appointments</span>
      <div class="active-bar"></div>
    </a>
  </li>
  <li>
    <a href="#">
      <i class="fa-solid fa-users"></i>
      <span class="links_name">Customers</span>
      <div class="active-bar"></div>
    </a>
  </li>
  <li>
    <a href="#">
      <i class="fa-solid fa-building"></i>
      <span class="links_name">Hotel</span>
      <div class="active-bar"></div>
    </a>
  </li>
  <li>
    <a href="../History_Page/history.html">
      <i class="fa-solid fa-folder-open"></i>
      <span class="links_name">History</span>
      <div class="active-bar"></div>
    </a>
  </li>
  <li>
    <a href="#">
      <i class="fa-solid fa-scissors"></i>
      <span class="links_name">Services</span>
      <div class="active-bar"></div>
    </a>
  </li>  
  <li>
    <a href="#">
      <i class="fa-solid fa-right-from-bracket"></i>
      <span class="links_name">Log Out</span>
      <div class="active-bar"></div>
    </a>
  </li> 
</ul>
</div>

  <button class = "basketcontainer" onclick = "opencontainer()">
      <div class = "basketimagecontainer">
      <i class="fa fa-shopping-basket" aria-hidden="true"></i>
    </div>
  </button>
  <div id = "salescontainer">
              
  </div>
  <form action = "add_services.php" method = "POST">
<div class = "container">
    <p id = "title">Services</p> 
    <div class = "customerdetailscontainer">
        <p id = "label">Customer Details</p>
        <p id = "customercontent">
            <table id = "forcustomer">
                <tr>
                    <td style = "width: 20%;"> Owner's Name </td>
                    <td id = "inp"> <input type = "text" class = "inputcustomer" name = "ownername" required> </td>
                    <td style = "width: 30%;"> &emsp;&emsp;&emsp;Date Booked </td>
                    <td id = "inp"> <input type = "date" class = "inputcustomer2" name = "dateb" required> </td>
                </tr>
                <tr>
                    <td> Pet's Name </td>
                    <td id = "inp"> <input type = "text" class = "inputcustomer" name = "petname" required> </td>
                    <td> &emsp;&emsp;&emsp;Appointment Date </td>
                    <td id = "inp"> <input type = "date" class = "inputcustomer2" name = "appdate" required> </td>
                </tr>
                <tr>
                    <td> Contact Number</td>
                    <td id = "inp"> <input type = "number" class = "inputcustomer" name = "cnumber" required> </td>
                    <td> &emsp;&emsp;&emsp;Time </td>
                    <td id = "inp"> <input type = "time" class = "inputcustomer2" name = "time" required> </td>
                </tr>
            </table>
             
        </p>
    </div>
    <div class = "spaservicecontainer">
        <div class = "spadetails">
        <p id = "label">Spa Services</p>
            <table id = "forspa">
                <tr>
                    <td style = "width: 30%;"><h5>Select Groomer</h5> </td>
                    <td><select class = "custom-select">
                        <option selected></option>
                        <option value = "Name1">Name 1</option>
                        <option value = "Name2">Name 2</option>
                    </select></td>
                </tr>
                <tr>
                    <td> <h5>Bath Type</h5></td>
                    <td>
                        <input type = "radio" id = "basic" name = "bath" value = "basic"> Basic Bath&emsp; &emsp;
                        <input type = "radio" id = "deluxe" name = "bath" value = "deluxe"> Deluxe Bath
                    </td>
                </tr>
                <tr>
                    <td> <h5>Pet Size</h5> </td>
                    <td>
                        <input type = "radio" id = "small" name = "size" value = "small"> S &emsp; &emsp;
                        <input type = "radio" id = "medium" name = "size" value = "medium"> M &emsp; &emsp;
                        <input type = "radio" id = "large" name = "size" value = "large"> L &emsp; &emsp;
                        <input type = "radio" id = "extralarge" name = "size" value = "extralarge"> XL &emsp; &emsp;
                        <input type = "radio" id = "extraextralarge" name = "size" value = "extraextralarge"> XXL
                    </td>
                </tr>
                <tr>
                    <td> <h5>Discount</h5></td>
                    <td>
                        <input type = "radio" id = "ten" name = "discount" value = "ten"> 10% &emsp; &emsp;
                        <input type = "radio" id = "fifty" name = "discount" value = "fifty"> 50% &emsp; &emsp;
                        <input type = "radio" id = "manual" name = "discount" onclick = "selectmanual()"> Manual &emsp;
                        <input type = "number" class = "select1" id = "manualinput" name = "manual" style = "opacity: 0.5;" disabled>
                    </td>
                </tr>
            </table> <br>
            <p id = "label">Add-on Services</p>
            <table id = "forAddonServices">
              <tr>
                <td><input type = "checkbox" id = "op1" name = "op1" value = "profstyling"> &ensp;Professional Styling </td>
                <td><input type = "checkbox" id = "op2" name = "op2" value = "detR)"> &ensp;Detangling (Regular)</td>
              </tr>
              <tr>
                  <td><input type = "checkbox" id = "op3" name = "op3" value = "teethcleaning"> &ensp;Teeth Cleaning</td>
                  <td><input type = "checkbox" id = "op4" name = "op4" value = "detS)"> &ensp;Detangling (Severe)</td>
              </tr>
              <tr>
                <td><input type = "checkbox" id = "op5" name = "op5" value = "analsac"> &ensp;Anal Sac Expression </td>
                <td><input type = "checkbox" id = "op6" name = "op6" value = "deshedding)"> &ensp;Deshedding</td>
              </tr>
              <tr>
                <td><input type = "checkbox" id = "op7" name = "op7" value = "tfm"> &ensp;Tick & Flea Meditation </td>
                <td><input type = "checkbox" id = "op8" name = "op8" value = "luxshampoo"> &ensp;Lux Whitening Shampoo</td></td>
              </tr>                                                     
            </table>
      </div>
        <div class = "spapic">
            <img id = "pic" src = "../Pictures/woman_with_dog.png">
        </div>
    </div>
    <div class = "hotelcontainer">
        <p id = "label">Hotel</p>
        <div class="hotelbox">
          <div class="roombox">
            <table id = forroom>
              <tr>
                <td style = "width: 45%">  <h5> Room Type</h5> </td>
              <td>
                <input type = "radio" id = "deluxe" name = "type" value = "deluxe"> &ensp;Deluxe <br>
                <input type = "radio" id = "catroom" name = "type" value = "catroom"> &ensp;Cat Room <br>
                <input type = "radio" id = "suite" name = "type" value = "suite"> &ensp;Suite <br>
              </td>
              </tr>
              <tr>
                <td> <h5>No. of night/s  </h5> </td>
              <td>
                <input type = "number" class = "select1" name = "nightsnum">
              </td>
              </tr>
            </table>
          </div>
          <div class="guestbox">
            <table id = forroom>
              <tr>
                <td style = "width: 45%"> <h5>Additional Guests </h5></td>
              <td>
                <td><input type = "checkbox" id = "ag1" name = "ag1" value = "extrag1" onclick = "extraguests1()"> &ensp;Extra Guests (S-M)<br>
                  &ensp; &emsp;<input type = "number" class = "select2" name = "nightsnum" id = "nightsnum1" disabled style = "opacity: 0.5;"> <br>
                <input type = "checkbox" id = "ag2" name = "ag2" value = "extrag2" style = "margin-top: 10px;" onclick="extraguests2()"> &ensp;Extra Guests (L-XXL) <br>
                  &ensp; &emsp;<input type = "number" class = "select2" name = "nightsnum" id = "nightsnum2" disabled style = "opacity: 0.5;">
              </td></td>
              </tr>
            </table>
          </div>
        </div> <br>
        <p id = "label">Daycare Services</p>
        <table id = "fordaycare">
          <tr>
            <td style = "width: 45%">  <h5> Pet Size</h5> </td>
          <td>
            <input type = "radio" id = "deluxe" name = "type" value = "deluxe"> &ensp;S-M Dog/Cat<br>
            <input type = "radio" id = "catroom" name = "type" value = "catroom"> &ensp;X-XXL Dog
          </td>
          </tr>
        </table>
    </div>
    <div class = "buttons">
        <input type = "submit" value = "Add Booking">
        <input type = "submit" class="btn-btn-open" value = "Proceed with Payment" >
</div>
</form>
<section class="modal hidden">
  <div class="flex">
  </div>
    <!-- <button class="btn-close">⨉</button>
  </div>
    <div class="modal">
   Modal content 
    <div class="modal-content">-->
      <div class="content">
        <h2 class="title">Check out</h2>
        <span class="btn-close">&times;</span>
      <div class="modal-body">
      <div class="form-group">
        <label> Customer Name </label>
            <input type="text" name="customer_name" id="customer_name" class="form-control" readonly>
        </div>
    
        <div class="form-group">
            <label> Services </label>
            <textarea name="services" id="services" class="form-control-services" ></textarea>
        </div> 
    
    <div class="after-serv">
        <div class="form-group">
            <label> Discount </label>
            <input type="text" name="discount" id="discount" class="form-control" readonly> 
        </div>
    
        <div class="form-group">
            <label> Total Amount</label>
            <input type="text" name="total_amount" id="total_amount" class="form-control" readonly>
        </div>
    
        <div class="form-group"> 
            <label> Payment Method </label>
            <form class="radio">
            <input type="radio" name="payment-method" id="cash" class="form-control-radio" value = "Cash">
            <label for="gcash" >Cash</label><br>
            <input type="radio" name="payment-method" id="gcash" class="form-control-radio" value = "GCash">
            <label for="gcash" >GCash</label><br>
            <input type="radio" name="payment-method" id="paymaya" class="form-control-radio" value = "Paymaya">
            <label for="paymaya">PayMaya</label><br>
            <input type="radio" name="payment-method" id="banktransfer" class="form-control-radio" value = "Bank Transfer">
            <label for="banktransfer" >Bank Transfer</label><br>
        </form>
      </div>
    
    
        <div class="form-group" id="refnum">
            <label class="lbl-ref"> Reference Number </label>
            <input type="text"  name="ref-num" id="refnum" class="form-control-ref">
        </div>
        
             <input type="submit" name="print-receipt" class="btn-btn-primary" value="Print Receipt"></input>
            </div>
      </div>
    </div>
</section>

<div class="overlay hidden"></div>
<!--<button class="btn btn-open">Open Modal</button>-->
    <script src="services.js"></script>
    <script src="sales.js"></script>
</body>
</html>