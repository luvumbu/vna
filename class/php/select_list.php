<?php
$REMOTE_ADDR =   $_SERVER['REMOTE_ADDR'];
if ($REMOTE_ADDR == "localhost" || $REMOTE_ADDR == "127.0.0.1" || $REMOTE_ADDR == "::1") {


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

$sql = 'SELECT * FROM `datas`   LIMIT 7';
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while ($row = $result->fetch_assoc()) {
?>
    <div onclick="click_select_list(this)" id="<?php echo $row["id_datas"] ?>" class="add_folder <?php echo $row["id_datas"] ?>">
 
   <?php echo $row["nom_datas"] ?>

      <div class="display_none" id="<?php echo "plus_".$row["id_datas"]  ?>">
        <?php echo $row["id_union_datas"] ?>
     
        <?php echo $row["reference_datas"] ?>
        <?php echo $row["prix_datas"] ?>
      </div>

    </div>
  <?php
  }
} else {
  echo "0 results";
}
$conn->close();















// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = 'SELECT COUNT(`id_datas`) FROM `datas` WHERE 1';
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while ($row = $result->fetch_assoc()) {
  ?>

    <?php

    $count_id_datas = $row["COUNT(`id_datas`)"];



    ?>

    </div>
<?php
  }
} else {
  echo "0 results";
}
$conn->close();
?>

<div class='pages'>
  <?php
  $result = $count_id_datas / 7;
  for ($i = 0; $i < $result; $i++) {

    if ($i != 0) {

  ?>

      <b onclick='link_pages(this)' id="<?php echo $i ?>"> <?php echo  $i ?></b>
  <?php

    }
  }
  ?>
</div>