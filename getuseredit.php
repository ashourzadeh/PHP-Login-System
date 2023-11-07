<?php
include('connection.php');
//////////////////////////////////////
$email = $_GET['em'];
$pass = $_GET['pa'];
$q = $_GET['q'];
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
<title></title>
</head>
<body>
<! ---S--- !>


<?php
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}
$sql = "UPDATE login SET email='$email',password='$pass' WHERE id= '".$q."'";

if (mysqli_query($con, $sql)) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($con);
?>

<! ---E--- !>
</body>

</html>