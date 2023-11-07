<?php
include('connection.php');
//////////////////////////////////////
session_start();
$userlevel = $_SESSION["userlevel"];
$username = $_SESSION["username"];
$Password = $_SESSION["password"];
//////////////////////////////////////
        $sql = "select *from login where Level = '$userlevel' and username = '$username' and password = '$Password'";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <link rel="stylesheet" href="styleAdmin.css">
    <script src="Admin.js"></script>
  <title></title>
</head>
<body>
<?php   if($count > 0) {      ?>
<?php   if($userlevel == "Admin") {      ?>
<! ---S--- !>
<div id="allof">
    <div id="leftdiv">
        <h1>Welcome To ADMIN Page</h1>
        <div id="Userlist"></div><! ---Userlist--- !>
        <h3 id="txtHint"></h3>
    </div>
    <div id="rightdiv">
        <img id="picpro" src="profile.png" alt="Profile">
        <p>Hello  <?php echo $username;  ?> </p>
        <button id="butt-show" class="butt" onclick="funShowuser()" type="button">Show User List</button>
        <button id="butt-Logout" class="butt" onclick="funLogout()" type="button">Log out</button>
    </div>
</div>
<! ---E--- !>
<?php   }/*if $username END*/     ?>
<?php   }/*if $count END*/     ?>
</body>

</html>
