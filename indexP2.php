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
div {
    border: 1px solid #000;
    display: block;
    margin: 0 auto;
    width: 65%;
    padding-bottom: 5%;
    padding-left: 20px;
    padding-right: 20px;
    margin-top: 5%;
    border-radius: 30px;
}
#email {
    font-size: 12px;
    display: block;
    text-align: center;
    position: relative;
    bottom: -45px;
}
#butt {
    margin: 0 auto;
    display: block;
    width: 25%;
    height: 50px;
    border: 2px solid #000;
    background: #fff;
    border-radius: 10px;
    margin-top: 5%;
    text-align: center;
    text-decoration: none;
    padding-top: 20px;
}
#butt:hover {
    background: #000;
    color: #fff;
}
#butt:active {
    background: red;
    color: #fff;
}
#p2 {
    font-size: 20px;
}
#buttgo {
    text-decoration: none;
    display: block;
    border: 1px solid;
    width: 10%;
    text-align: center;
    padding: 5px;
    border-radius: 10px;
    margin: 0 auto;
    margin-top: 2%;
    margin-bottom: -2%;
}
#buttgo:hover {
    background: #000;
    color: #fff;
}
#buttgo:active {
    background: red;
    color: #fff;
}
</style>
</head>
<body>
<div>
<?php
/*DATABASE = javatpoint | TABLE = login */
if((isset($_GET['step'])) && $_GET['step'] == 3){
$servername = "localhost";
$username = "root";
$password = "";
// Create DATABASE
try {
  $conn = new PDO("mysql:host=$servername", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "CREATE DATABASE javatpoint";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "<p> Database created successfully </p>";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
$dbname = "javatpoint";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// reate table
$sql = "CREATE TABLE login (
ID BIGINT(255) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Level VARCHAR(100) NOT NULL,
password VARCHAR(100) NOT NULL,
username VARCHAR(100) NOT NULL,
email VARCHAR(100) NOT NULL
)";
if ($conn->query($sql) === TRUE) {
  echo "<p id='p2'> Table login created successfully </p>";
} else {
  echo "Error creating table: " . $conn->error;
}
$sql = "INSERT INTO login (Level, username, password)
VALUES ('Admin', 'ma', '12')";

if ($conn->query($sql) === TRUE) {
  echo "
<table>
<tr>
    <th>Level</th>
    <th>Username</th>
    <th>Password</th>
</tr>
<tr>
    <td>Admin</td>
    <td>ma</td>
    <td>12</td>
</tr>
</table>
  ";
  echo "<a id='buttgo' href='index.html'>Go</a>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();



}else{
?>
  <p> Check the Problems </p>
  <table>
  <tr>
    <th>Configuration</th>
    <th>Stutus</th>
  </tr>
  <tr>
    <td>PHP Versian</td>
    <td> 
    <?php
    $is_error = "";
      $php_version = phpversion();  
      if($php_version > 5){
         echo "<i class='far fa-calendar-check'>".$php_version."</i>";
      }else{
         echo "<i class='fas fa-calendar-minus'>php version is low of 5</i>";
         $is_error = "Yes";
      }
    ?> 
  </td>
  </tr>
    <tr>
    <td>Curl Inistall</td>
    <td>
    <?php
      $curl_version = function_exists('curl_version');  
      if($curl_version){
         echo "<i class='far fa-calendar-check'>Yes</i>";
      }else{
         echo "<i class='fas fa-calendar-minus'>No</i>";
         $is_error = "Yes";
      }
    ?> 
    </td>
  </tr>
  <tr>
    <td>Mail Function</td>
    <td>
    <?php
      $mail = function_exists('mail');  
      if($mail){
         echo "<i class='far fa-calendar-check'>Yes</i>";
      }else{
         echo "<i class='fas fa-calendar-minus'>No</i>";
         $is_error = "Yes";
      }
    ?> 
    </td>
  </tr>
  <tr>
    <td>Session Working</td>
    <td>
    <?php
      $_SESSION['IS_WORKING'] = 1;  
      if(!empty($_SESSION['IS_WORKING'])){
         echo "<i class='far fa-calendar-check'>Yes</i>";
      }else{
         echo "<i class='fas fa-calendar-minus'>No</i>";
         $is_error = "Yes";
      }
    ?> 
    </td>
  </tr>
  </table>

  <?php  if($is_error == ""){  ?>
  <a id="butt" href="?step=3">Start to installing DataBase</a>
  <?php }else{ ?>
  <a id="butt" href="#">installing Error</a>
  <?php } ?>
</div>
<br>
<a href="mailto:m.ashourzadeh89@gmail.com" id="email">Creat by m.ashourzadeh89@gmail.com</a>
<?php } /*step !=3*/ ?>
</body>

</html>