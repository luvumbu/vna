<?php
session_start(); 
// $servername = "localhost";
// $username = "username";
// $password = "password";
// $dbname = "myDB";

$servername = $_SESSION["servername"];
$username = $_SESSION["username"]; 
$password = $_SESSION["password"];
$dbname = $_SESSION["dbname"];

$stack = array();

 
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

 
array_push($stack,  $row["nom_datas"]);

  }
} else {
  echo "0 results";
}
$conn->close();
 
 
for($i = 0 ; $i<count($stack);$i++){
	echo "<br/>";
	echo $stack[$i];
}
?>



<div class="search"> 
	<label for=""><i class="fa fa-barcode"></i></label>
<input type="text" placeholder="reference produit" onkeyup="click_affiche_datas(this)">


<div id="affiche_datas">

</div>
</div>




<style>
	.search{
	 
		width: 70%;
		margin: auto;
		text-align: center;
		font-size: 2em;
		margin-top: 100px;
	}
 
</style>