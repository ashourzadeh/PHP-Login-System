function funLogout() {
    //open Page for destroy_session and go to login page
    window.open('destroy_session.php',"_self");
}
function funShowuser() {
  var hintalert = document.getElementById("txtHint");
  if (hintalert.style.display === "none") {
  } else {
    hintalert.style.display = "none";
  }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
    document.getElementById("Userlist").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","getuserlist.php?q=",true);
  xmlhttp.send();
}
function fundeluser(str) {
  var hintalert = document.getElementById("txtHint");
  if (str=="") {
    return;
  }
  if (hintalert.style.display === "none") {
    hintalert.style.display = "block";
  } else {
  }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("txtHint").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","getuserdel.php?q="+str.value,true);
  xmlhttp.send();
}
