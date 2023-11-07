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


$duplicate=mysqli_query($con,"select * from login where username='$username' and Level='$userlevel'");
if (mysqli_num_rows($duplicate)>0)
{
header("Location: index.html");
}
else{
$sql = "INSERT INTO login (Level, username, password)
VALUES ('$userlevel','$username', '$password')";

	if ($con->query($sql) === TRUE) {
	  echo "<h1><center> Sign up successful </center></h1>";
?>
<meta http-equiv='refresh' content='1; URL=Index.html'>
<?php
	} else {
	  echo "Error: " . $sql . "<br>" . $con->error;
	}

	$con->close();
}
?>
