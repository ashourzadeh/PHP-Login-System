<?php
include('connection.php');
//////////////////////////////////////
$q = intval($_GET['q']);
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
// sql to delete a record
$sql = "DELETE FROM login WHERE id='".$q."'";

if (mysqli_query($con, $sql)) {
  echo "Record ID: ".$q." Deleted";
} else {
  echo "Error deleting record: " . mysqli_error($con);
}
mysqli_close($con);
?>

<! ---E--- !>
</body>

</html>