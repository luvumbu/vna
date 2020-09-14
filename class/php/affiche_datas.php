<?php 
session_start();

$affiche_datas = $_SESSION["affiche_datas"];
$servername =$_SESSION["servername"] ; 
$username =$_SESSION["username"]  ; 
$password =$_SESSION["password"] ; 
$dbname=$_SESSION["dbname"]    ;



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = 'SELECT * FROM datas WHERE `reference_datas` LIKE "'.$affiche_datas.'%"';
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo $row["reference_datas"].'<br/>';
  }
} else {
  // Create connection
$conn2 = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn2->connect_error) {
  die("Connection failed: " . $conn2->connect_error);
}

$sql2 = 'SELECT * FROM datas WHERE `nom_datas` LIKE "'.$affiche_datas.'%"';
$result2 = $conn2->query($sql2);

if ($result2->num_rows > 0) {
  // output data of each row
  while($row = $result2->fetch_assoc()) {
    echo $row["reference_datas"].'<br/>';
  }
} else {
 echo "aucun resultat";
}
$conn2->close();
}
$conn->close();
?>