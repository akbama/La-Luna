const content = document.querySelector(".form");

var header = document.getElementsByClassName("navi")[0];

var btns = header.getElementsByClassName("navi_btn");

for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");


    if (current.length > 0) {
      current[0].className = current[0].className.replace(" active", "");
    }

    this.className += " active";

  });
}


btns[0].addEventListener("click", function() {
    content.innerHTML = "<div class='inputfield'><label>Groomer</label><input type='text' class='input'></div>  <div class='inputfield'><label>Commission</label><input type='text' class='input'></div><div class='inputfield'><input name = 'updatedata' type='submit' value='Save' class='btn'></div> <table class='tg'><tr><th>Groomer</th><th>Commission</th><th>Action</th></tr> <?php $result = $connect->query('SELECT * FROM `groomer_details`') or die($connect->error); while($row = $result->fetch_assoc()) {?> <tbody><tr> <td class='tg-text1'><?php echo $row['Groomer_name']; ?></td><td class='tg-text2'><?php echo $row['Commission']; ?></td><td class='buttons'><button id = 'icon' type='submit'><i class='fa-solid fa-trash'></i></button></td></tr></tbody>";
});

btns[1].addEventListener("click", function() {
    content.innerHTML = "<div class='form'><div class='inputfield'><label>Username</label><input name='username' type='text' class='input'></div>  <div class='inputfield'><label>Password</label><input name='password' type='text' class='input'></div><div class='inputfield'><input name = 'updatedata' type='submit' value='Save' class='btn'></div></div>";
});