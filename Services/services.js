function extraguests1 () {
    var check = document.getElementById("ag1");
    var text = document.getElementById("nightsnum1");
    if (check.checked==true) {
      text.disabled = false;
      text.style.opacity = 1;
    }
    else {
      text.disabled = true;
      text.style.opacity = 0.5;
    }
  }
  function extraguests2 () {
    var check = document.getElementById("ag2");
    var text = document.getElementById("nightsnum2");
    if (check.checked==true) {
      text.disabled = false;
      text.style.opacity = 1;
    }
    else {
      text.disabled = true;
      text.style.opacity = 0.5;
    }
  }
  function selectmanual () {
    var radio = document.getElementById("manual");
    var text = document.getElementById("manualinput");
    if (radio.checked==true) {
      text.disabled = false;
      text.style.opacity = 1;
    }
    else {
      text.disabled = true;
      text.style.opacity = 0.5;
    }
  }
  function opencontainer() {
    var open = document.getElementById("salescontainer");
    if (window.getComputedStyle(open).display === "none") {
        open.style.display = "block";
    }
    else {
        open.style.display = "none";
    }
  }

$(document).ready(function(){
    $('ul li a').click(function(){
    $('li a').removeClass("active");
    $(this).addClass("active");
});
});