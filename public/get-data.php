
<?php

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT ID, Roll_Value FROM discord_unity_data";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "ID: " . (int) $row['ID']. " - Roll_Value: ". (int) $row['Roll_Value']. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>