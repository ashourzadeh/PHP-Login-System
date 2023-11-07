<?php
include('connection.php');
//////////////////////////////////////
$userlevel = $_GET['level'];
$username = $_GET['user'];
$Password = $_GET['pass'];
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
  <title></title>
<style>
h1,p {
    text-align: center;
}
p {
    font-size: 30px;
}
</style>
</head>

<body>
<?php   if($count > 0) {      ?>
<?php   if($userlevel == "Order") { ?>
<! ---S--- !>


<h1>Welcome To ORDER Page</h1>

<p>Hello  <?php echo $username;  ?> </p>


<! ---E--- !>
<?php   }/*if $username END*/     ?>
<?php   }/*if $count END*/     ?>
</body>

</html>
