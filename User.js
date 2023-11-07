function funLogout() {
    //open Page for destroy_session and go to login page
    window.open('destroy_session.php',"_self");
}
function funinfouser(str) {
  var hintalert = document.getElementById("txtHint");
  if (hintalert.style.display === "none") {
  } else {
    hintalert.style.display = "none";
  }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
    document.getElementById("UserInfo").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","getuserinfo.php?q="+str,true);
  xmlhttp.send();
}
function funedituser(str) {
  var xmlhttp=new XMLHttpRequest();
  var PASSTXT = document.getElementById("passtxt").value;
  var EMTXT = document.getElementById("emailtxt").value;
  var hintalert = document.getElementById("txtHint");
  if (str=="") {
    return;
  }
  if (hintalert.style.display === "none") {
    hintalert.style.display = "block";
  } else {
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
    document.getElementById("txtHint").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","getuseredit.php?em="+EMTXT+"&pa="+PASSTXT+"&q="+str,true);
  xmlhttp.send();
}
