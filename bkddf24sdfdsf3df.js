function CT_Goto_Look() {
        document.getElementById('rs_key').innerHTML = 'Đang yêu câu máy chủ...';
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      if (this.responseText.length <= 0) {
          document.getElementById("rs_key").innerHTML =
      "Ðang kết nối cổng COM KPLink... Đang đợi phản hồi..."
      myVar = setTimeout(CT_Goto_Look, 2000);
      } else {       document.getElementById("rs_key").innerHTML =
      this.responseText; }
    }
     if (this.readyState == 4 && this.status == 404) {
       myVar = setTimeout(CT_Goto_Look, 2000);
     } else {
         
     }
  };
   var whatkey = document.getElementById('whatkey').value;
    
    xhttp.open("GET", "com.androds.568.php?q=" + whatkey, true);
  xhttp.send();
}
function TIMEONLINE() {
var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
    document.getElementById("oft").innerHTML = this.responseText;
     myVar = setTimeout(TIMEONLINE, 2000);
  }
};
xhttp.open("GET", "svof.php", true);
xhttp.send();
}
 myVar = setTimeout(TIMEONLINE, 100);
