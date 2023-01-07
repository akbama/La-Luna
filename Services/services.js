function extraguests (a,b) {
    var check = document.getElementById(a);
    var text = document.getElementById(b);
    if (check.checked==true) {
      text.disabled = false;
      text.style.opacity = 1;
      text.required = true;
    }
    else {
      text.disabled = true;
      text.style.opacity = 0.5;
    }
  }
  function setAttr (a,b) {
    var text = document.getElementById(a);
    var val = document.getElementById(b).value;
    text.setAttribute('value', val);
  }

  function selectmanual () {
    var radio = document.getElementById("manual");
    var text = document.getElementById("manualinput");
    if (radio.checked==true) {
      text.disabled = false;
      text.style.opacity = 1;
      text.required = true;
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
