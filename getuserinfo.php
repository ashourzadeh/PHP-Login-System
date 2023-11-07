<?php
include('connection.php');
$q = $_GET['q'];
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
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
    $sql = "SELECT ID FROM login WHERE username = '".$q."'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      if($count == 1) {
      $id = $row["ID"];
      }
    $sql = "SELECT * FROM login WHERE id =". $id;
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
// output data of each row
?>
<table>
<tr>
    <th>ID</th>
    <th>Level</th>
    <th>Username</th>
    <th>Password</th>
    <th>Email</th>
    <th>Funaction</th>
</tr>
<?php 
while($row = mysqli_fetch_assoc($result)) {
echo "<tr>"."<td>".$row["ID"]."</td>"."<td>".$row["Level"]."</td>"."<td>".$row["username"]."</td>"."<td><input type='text' class='TXT' id='passtxt' value='".$row["password"]."'></td>"."<td><input type='text' class='TXT' id='emailtxt' value='".$row["email"]."'></td>"."<td><button id='butt-show' class='buttDel' onclick='funedituser(".$row["ID"].")' value='".$row["ID"]."' type='button'><img id='delbuttimg' src='iconsedit.png'></button></td></tr>";
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

