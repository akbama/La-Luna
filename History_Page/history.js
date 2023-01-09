function load() {
    var a = document.getElementById("fromydate").value;
    var b = document.getElementById("todate").value
    var c = document.querySelector('input[name="filtertype"]:checked').value;
    var d = "none";
    if (c == 'groomer') {
      d = document.getElementById("select_groomer").value;
    }
    $(".filterresults").load("data_retrieve.php", {
        value1: a,
        value2: b,
        value3: c,
        value4: d
      });
}