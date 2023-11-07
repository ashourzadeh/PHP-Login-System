<?php
    include('connection.php');
    $userlevel = $_GET['p'];
    $username = $_GET['q'];
        //to prevent from mysqli injection
        $username = stripcslashes($username);
        $userlevel = stripcslashes($userlevel);
        $username = mysqli_real_escape_string($con, $username);
        $userlevel = mysqli_real_escape_string($con, $userlevel);


$duplicate=mysqli_query($con,"select * from login where username='$username' and Level='$userlevel'");
if (mysqli_num_rows($duplicate)>0)
{
echo "Not avairibale";
}
else{
echo "Avairibale";
}
?>