
<?php
$servername = "localhost";
$username = "dev";
$password = "Nigg0a55!";
$dbname = "mysql";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT MyTransform, LastPos FROM discord_unity_data";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "myTransform: " . $row["MyTransform"]. " - LastPos: ". $row["LastPos"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>