<?php
include('connection.php');
?>
<!DOCTYPE html>
<html>
<head>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 60%;
    margin: 0 auto;
    margin-top: 5%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<?php
$q = intval($_GET['q']);
// Check connection
if (!$con) {
die("Connection failed: " . mysqli_connect_error());}
$sql = "SELECT ID, Level, username FROM login";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
// output data of each row
?>
<table>
<tr>
    <th>ID</th>
    <th>Level</th>
    <th>Username</th>
    <th>Funaction</th>
</tr>
<?php 
while($row = mysqli_fetch_assoc($result)) {
echo "<tr>"."<td>".$row["ID"]."</td>"."<td>".$row["Level"]."</td>"."<td>".$row["username"]."</td>"."<td><button id='butt-show' class='buttDel' onclick='fundeluser(this)' value='".$row["ID"]."' type='button'><img id='delbuttimg' src='iconsdelete.png'></button></td></tr>";
}
?>
</table>
                <?php
                } else {
                  echo "0 results";
                }
                mysqli_close($con);
                ?>

</body>
</html>