<?php
$REMOTE_ADDR =   $_SERVER['REMOTE_ADDR'];
if ($REMOTE_ADDR == "localhost" || $REMOTE_ADDR == "127.0.0.1" || $REMOTE_ADDR=="::1" ) {
 
	
	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "vincent"; 
} else {
$servername = "localhost"; 
$username = "u481158665_vincent"; 
$dbname = "u481158665_vincent";  
$password = "v3p9r3e@59A";

}







// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = 'SELECT * FROM `datas` WHERE 1';
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo $row["nom_datas"];
  }
} else {
  echo "0 results";
}
$conn->close();
?>