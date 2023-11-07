/////////////////////////////////////////////////////////
function swapsLogInSignIN() {
  var frm1 = document.getElementById("frm1");
  var frm2 = document.getElementById("frm2");
  var Butt = document.getElementById("swaps");
  if (frm1.style.display === "none") {
    frm1.style.display = "block";
    frm2.style.display = "none";
    Butt.value = "Sing Up";
    Butt.innerHTML = 'Sing Up';
  } else {
    frm1.style.display = "none";
    frm2.style.display = "block";
    Butt.value = "Sing In";
    Butt.innerHTML = 'Sing In';
  }
}
//////////////////////////////////////////////////////////
//////////// validation for Login ////////////////////////
            function validation()
            {
                var id=document.f1.user.value;
                var ps=document.f1.pass.value;
                if(id.length=="" && ps.length=="") {
                    alert("User Name and Password fields are empty");
                    return false;
                }
                else
                {
                    if(id.length=="") {
                        alert("User Name is empty");
                        return false;
                    }
                    if (ps.length=="") {
                    alert("Password field is empty");
                    return false;
                    }
                }
            }
////////////////////////////////////////////////////////////
//////////// validation for Sign In ////////////////////////
            function validation2()
            {
                var id=document.f2.user.value;
                var ps=document.f2.pass.value;
                if(id.length=="" && ps.length=="") {
                    alert("User Name and Password fields are empty");
                    return false;
                }
                else
                {
                    if(id.length=="") {
                        alert("User Name is empty");
                        return false;
                    }
                    if (ps.length=="") {
                    alert("Password field is empty");
                    return false;
                    }
                }
            }
/////////////////////////////////////////////////////////
