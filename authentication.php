<?php
    include('connection.php');
    $userlevel = $_POST['level'];
    $username = $_POST['user'];
    $password = $_POST['pass'];

        //to prevent from mysqli injection
        $username = stripcslashes($username);
        $password = stripcslashes($password);
        $username = mysqli_real_escape_string($con, $username);
        $password = mysqli_real_escape_string($con, $password);

        $sql = "select *from login where Level = '$userlevel' and username = '$username' and password = '$password'";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);

if($count == 1){
echo "<h1><center> Login successful </center></h1>";
if($userlevel == "Admin")
{
session_start();
$_SESSION["userlevel"] = $userlevel;
$_SESSION["username"] = $username;
$_SESSION["password"] = $password;
/*header('location: Admin.php');*/
?>
<meta http-equiv='refresh' content='1; URL=Admin.php'>
<?php
}
if($userlevel == "Order")
{
?>
<meta http-equiv='refresh' content='1; URL=http://localhost/Order.php?level=<?php echo $userlevel; ?>&user=<?php echo $username; ?>&pass=<?php echo $password; ?>'>
<?php
}
if($userlevel == "Conter")
{
?>
<meta http-equiv='refresh' content='1; URL=http://localhost/Conter.php?level=<?php echo $userlevel; ?>&user=<?php echo $username; ?>&pass=<?php echo $password; ?>'>
<?php
}
if($userlevel == "User")
{
session_start();
$_SESSION["userlevel"] = $userlevel;
$_SESSION["username"] = $username;
$_SESSION["password"] = $password;
?>
<meta http-equiv='refresh' content='1; URL=User.php'>
<?php
}
        } /*count == 1*/
        else{
            echo "<h1> Login failed. Invalid username or password.</h1>";
        }
?>



